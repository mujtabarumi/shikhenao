<?php

namespace App\Http\Controllers\Student;


use App\Address;
use App\Education;
use App\Http\Controllers\Controller;
use App\RequestCourse;
use App\StudentAddress;
use App\StudentEducation;
use App\Students;
use App\StudentWorkExperience;
use App\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Image;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showResume()
    {
        $userId=Auth::user()->userId;

        $studentInfo = Students::where('fkuserId', $userId)->first();

        if ($studentInfo->fkAddressId !=null){

            $studentAddress=StudentAddress::select('address.addressId','address.streetName','address.cityName','address.state','address.zip',
                'address.country', 'address.details')
                ->leftJoin('address', 'address.addressId', '=', 'studentaddress.fkAddressId')

                ->where('studentaddress.fkStudentId',$studentInfo->studentId)
                ->get();

        }else{
            $studentAddress=null;

        }


        $studentEducation = StudentEducation::select('studenteducation.EducationVisible','education.*')
            ->leftJoin('education', 'education.educationId', '=', 'studenteducation.fkEducationId')
            ->where('studenteducation.fkStudentId', $studentInfo->studentId)
            ->get();


        $workExperience = StudentWorkExperience::select('studentworkexperience.isVisible','workexperience.*')
            ->leftJoin('workexperience', 'workexperience.workExperienceId', '=', 'studentworkexperience.fkWorkExperienceId')
            ->where('studentworkexperience.fkStudentId', $studentInfo->studentId)->get();



        return view('Student.resume', compact('studentInfo','studentAddress','studentEducation','workExperience'));



    }

    public function showInforForEdit(Request $r) //show edit modal for employee basic info
    {



        if ($r->address != null){

            $studentAddress=StudentAddress::select('address.addressId','address.streetName','address.details','address.cityName','address.state','address.zip',
                'address.country', 'address.country')
                ->leftJoin('address', 'address.addressId', '=', 'studentaddress.fkAddressId')

                ->where('studentaddress.fkAddressId',$r->address)
                ->get();



        }else{
            $studentAddress=null;

        }

        $studentInfo=array(
            'id'=>$r->id,
            'firstName'=>$r->firstName,
            'lastName'=>$r->lastName,
            'professionTitle'=>$r->profession,
            'phone'=>$r->phone,
            'email'=>$r->email,
            'dob'=>$r->dob,
            'address'=>$r->address,
        );

        $object = (object) $studentInfo;

//        $CandidateSocialLinks = Socialmedia::select('socialmedia.id','socialmedia.fkname','socialmedia.link','socialmedianame.name')
//            ->leftJoin('socialmedianame', 'socialmedianame.id', '=', 'socialmedia.fkname')
//            ->where('fkCandidateId', $r->id)->get();

//        $allSocialMedia=DB::table('socialmedianame')->get();



        return view('Student.editStudentInformation',['studentInfo' => $object,'address'=>$studentAddress])->render();

    }

    public function StudentInfoUpdate($student,Request $r) // employee info update
    {

        $studentInfo=Students::findOrFail($student);
        $studentInfo->studentFirstName=$r->firstName;
        $studentInfo->studentLastName=$r->lastName;
        $studentInfo->studentProfession=$r->profession;
        $studentInfo->phone=$r->phone;
        $studentInfo->studentDOB=date('Y-m-d',strtotime($r->dob));
        $studentInfo->studentEmail=$r->email;

        if($r->hasFile('image')){
            $img = $r->file('image');
            $filename= $student.'profileImage'.'.'.$img->getClientOriginalExtension();
            $studentInfo->image=$filename;
            $location = public_path('studentImages/'.$filename);
            Image::make($img)->save($location);
            $location2 = public_path('studentImages/thumb/'.$filename);
            Image::make($img)->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location2);
        }



        if ($studentInfo->fkAddressId != null) {

            $studentAddress = StudentAddress::findOrFail($studentInfo->fkAddressId);
            $address = Address::findOrFail($studentAddress->fkAddressId);

        } else{

            $studentAddress= new StudentAddress();
            $address= new Address();
        }

        $address->details=$r->address;
        $address->streetName=$r->streetName;
        $address->cityName=$r->city;
        $address->state=$r->state;
        $address->zip=$r->zip;
        $address->country=$r->country;
        $address->save();

        $studentAddress->fkAddressId=$address->addressId;
        $studentAddress->fkStudentId=$student;
        $studentAddress->save();


        $studentInfo->fkAddressId=$studentAddress->studentAddressId;
        $studentInfo->save();





        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

    public function showStudentAboutMeForEdit(Request $r) // show edit modal of employee about me
    {

        $studentInfo = Students::Select('studentAboutMe')->where('studentId', $r->id)->get();
        return view('Student.editStudentAbouteMe',['studentInfo' => $studentInfo,'id'=>$r->id]);

    }
    public function StudentAboutmeUpdate($student,Request $r) // show edit modal of employee about me
    {

        $studentInfo=Students::findOrFail($student);
        $studentInfo->studentAboutMe=$r->aboutMe;

        $studentInfo->save();


        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

    public function addEducation(Request $r) // show add modal of employee education
    {


        return view('Student.addEducation',['id'=>$r->id]);

    }
    public function editStudentEducation(Request $r) // show add modal of employee education
    {


        $educationInfo = Education::leftJoin('studenteducation', 'education.educationId', '=', 'studenteducation.fkEducationId')->findOrFail($r->id);

        return view('Student.editEducation',['education' => $educationInfo,'id'=>$r->id]);

    }
    public function deleteStudentducation(Request $r) // show add modal of employee education
    {
        $studentInfo = Students::where('fkuserId', Auth::user()->userId)->first()->studentId;
        $deletedRows = StudentEducation::where('fkEducationId', $r->id)->where('fkStudentId', $studentInfo)->delete();

        $employeeEducation=Education::destroy($r->id);

    }
    public function updateStudentEducation($eduId,Request $r) // show add modal of employee education
    {
        $studentInfo = Students::where('fkuserId', Auth::user()->userId)->first()->studentId;

        $EducationInfo = Education::findOrFail($eduId);

        $EducationInfo->organizationName=$r->schoolName;
        $EducationInfo->degreeName=$r->degreeName;
        $EducationInfo->startDate=date('Y',strtotime($r->startDate));

        if ($r->endDate != null){

            if ($r->currentlyRunning){
                $EducationInfo->isCurrentlyRunning=$r->currentlyRunning;
                $EducationInfo->endDate=null;
            }else{
                $EducationInfo->isCurrentlyRunning=0;
                $EducationInfo->endDate=$r->endDate;
            }
        }else{
            if ($r->currentlyRunning){
                $EducationInfo->isCurrentlyRunning=$r->currentlyRunning;
                $EducationInfo->endDate=null;
            }else{
                $EducationInfo->isCurrentlyRunning=0;
                $EducationInfo->endDate=$r->endDate;
            }


        }

//        if ($r->currentlyRunning){
//            $EducationInfo->currentlyRunning=$r->currentlyRunning;
//            $EducationInfo->endDate=null;
//        }else{
//            $EducationInfo->endDate=date('Y',strtotime($r->endDate));
//            $EducationInfo->currentlyRunning='0';
//        }

        $EducationInfo->save();

        StudentEducation::where('fkEducationId', $eduId)
            ->where('fkStudentId', $studentInfo)
            ->update(['EducationVisible' => $r->educationStatus]);

        Session::flash('success_msg', 'Education Updated Successfully!');
        return back();

    }
    public function insertStudentEducation($student,Request $r) // show add modal of employee education
    {


        $education=new Education();

        $education->organizationName=$r->schoolName;
        $education->degreeName=$r->degreeName;
        $education->startDate=$r->startDate;

        if ($r->endDate != null){

            if ($r->currentlyRunning){
                $education->isCurrentlyRunning=$r->currentlyRunning;
                $education->endDate=null;
            }else{
                $education->isCurrentlyRunning=0;
                $education->endDate=$r->endDate;
            }
        }else{
            if ($r->currentlyRunning){
                $education->isCurrentlyRunning=$r->currentlyRunning;
                $education->endDate=null;
            }else{
                $education->isCurrentlyRunning=0;
                $education->endDate=$r->endDate;
            }


        }
//        if ($r->currentlyRunning){
//            $education->currentlyRunning=$r->currentlyRunning;
//        }else{
//            $education->endDate=date('Y',strtotime($r->endDate));
//        }
//        $education->fkcandidateId=$candidate;

        $education->save();

        $studentEdu=new StudentEducation();

        $studentEdu->fkEducationId=$education->educationId;
        $studentEdu->EducationVisible=$r->educationStatus;
        $studentEdu->fkStudentId=$student;
        $studentEdu->save();

        Session::flash('success_msg', 'Education Added Successfully!');
        return back();

    }

    public function StudentAddWorkExperience(Request $r) // show add modal of employee WorkExperience
    {

        return view('Student.addStudentWorkExperience',['id'=>$r->id]);

    }
    public function insertStudentWorkExperience($student,Request $r) // show add modal of employee WorkExperience
    {


        $employeeWorkExperience=new WorkExperience();

        $employeeWorkExperience->comapnyName=$r->companyName;
        $employeeWorkExperience->Designation=$r->postName;
        $employeeWorkExperience->startDate=$r->startDate;

        $employeeWorkExperience->description=$r->description;

        if ($r->endDate != null){

            if ($r->currentlyRunning){
                $employeeWorkExperience->isCurrentlyRunning=$r->currentlyRunning;
                $employeeWorkExperience->endDate=null;
            }else{
                $employeeWorkExperience->isCurrentlyRunning=0;
                $employeeWorkExperience->endDate=$r->endDate;
            }
        }else{
            if ($r->currentlyRunning){
                $employeeWorkExperience->isCurrentlyRunning=$r->currentlyRunning;
                $employeeWorkExperience->endDate=null;
            }else{
                $employeeWorkExperience->isCurrentlyRunning=0;
                $employeeWorkExperience->endDate=$r->endDate;
            }


        }
        $employeeWorkExperience->save();

        $stuWorkExperience= new StudentWorkExperience();

        $stuWorkExperience->fkWorkExperienceId=$employeeWorkExperience->workExperienceId;
        $stuWorkExperience->isVisible=$r->experienceStatus;
        $stuWorkExperience->fkStudentId=$student;
        $stuWorkExperience->save();

        Session::flash('success_msg', 'Work Experience Added Successfully!');
        return back();

    }
    public function editStudentWorkExperience(Request $r) // show add modal of employee WorkExperience
    {


        $workExperienceInfo = Workexperience::leftJoin('studentworkexperience', 'workexperience.workExperienceId', '=', 'studentworkexperience.fkWorkExperienceId')
            ->findOrFail($r->id);

        return view('Student.editWorkExperience',['experience' => $workExperienceInfo,'id'=>$r->id]);

    }
    public function deleteStudentWorkExperience(Request $r) // show add modal of employee WorkExperience
    {


        $studentInfo = Students::where('fkuserId', Auth::user()->userId)->first()->studentId;
        $deletedRows = StudentWorkExperience::where('fkWorkExperienceId', $r->id)->where('fkStudentId', $studentInfo)->delete();

        $employeeEducation=WorkExperience::destroy($r->id);

    }
    public function updateStudentWorkExperience($expId,Request $r) // show add modal of employee WorkExperience
    {

        $studentInfo = Students::where('fkuserId', Auth::user()->userId)->first()->studentId;
        $workExperienceInfo = Workexperience::findOrFail($expId);

        $workExperienceInfo->comapnyName=$r->companyName;
        $workExperienceInfo->Designation=$r->postName;
        $workExperienceInfo->startDate=$r->startDate;

        $workExperienceInfo->description=$r->description;

        if ($r->endDate != null){

            if ($r->currentlyRunning){
                $workExperienceInfo->isCurrentlyRunning=$r->currentlyRunning;
                $workExperienceInfo->endDate=null;
            }else{
                $workExperienceInfo->isCurrentlyRunning=0;
                $workExperienceInfo->endDate=$r->endDate;
            }
        }else{
            if ($r->currentlyRunning){
                $workExperienceInfo->isCurrentlyRunning=$r->currentlyRunning;
                $workExperienceInfo->endDate=null;
            }else{
                $workExperienceInfo->isCurrentlyRunning=0;
                $workExperienceInfo->endDate=$r->endDate;
            }


        }

        $workExperienceInfo->save();

        StudentWorkExperience::where('fkWorkExperienceId', $expId)
            ->where('fkStudentId', $studentInfo)
            ->update(['isVisible' => $r->experienceStatus]);

        Session::flash('success_msg', 'Work Experience Updated Successfully!');
        return back();

    }
    public function StudentRequestedCourse()
    {

        return view('Student.requestedCourse');

    }
    public function StudentRequestedCourseWithData(Request $r)
    {
        $studentId = Students::where('fkuserId', Auth::user()->userId)->first()->studentId;
        $requestedCourse = RequestCourse::select('course.courseName','course.courseFee as feeType','teachercourserelation.fkTeacherId',
            'teacher.teacherFirstName','teacher.teacherLastName','teachercourserelation.teacherCourseFee',
            'request_course.*','hirereport.startTime', 'hirereport.endTime','hirereport.completed')

            ->leftJoin('course', 'course.id', '=', 'request_course.fkCourseId')
//            ->leftJoin('teachercourserelation', 'teachercourserelation.fkCourseId', '=','request_course.fkCourseId')
            ->leftJoin('teacher', 'teacher.teacherId', '=', 'request_course.fkTeacherId')
            ->leftJoin('teachercourserelation', function($join)
            {
                $join->on('teachercourserelation.fkCourseId', '=', 'request_course.fkCourseId');
                $join->on('teachercourserelation.fkTeacherId','=','request_course.fkTeacherId');

            })
            ->leftJoin('hirereport', function($join)use ($studentId)
            {
                $join->on('hirereport.fkTeacherCourseRelationId', '=', 'teachercourserelation.teacherCourseRelationId');
                $join->where('hirereport.fkStudentId','=',$studentId);

            });





        $datatables = DataTables::of($requestedCourse)
            ->addColumn('mergeColumn', function($row){
            return $row->teacherFirstName.' '.$row->teacherLastName;
        });

        return $datatables->make(true);

    }

}
