<?php

namespace App\Http\Controllers\Student;


use App\Address;
use App\Http\Controllers\Controller;
use App\StudentAddress;
use App\StudentEducation;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
                'address.country', 'address.country')
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






        return view('Student.resume', compact('studentInfo','studentAddress','studentEducation'));



    }

    public function showInforForEdit(Request $r) //show edit modal for employee basic info
    {



        if ($r->address !=null){

            $studentAddress=StudentAddress::select('address.addressId','address.streetName','address.cityName','address.state','address.zip',
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

        }else{
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


        $studentInfo->fkAddressId=$studentAddress->addressId;
        $studentInfo->save();





        Session::flash('success_msg', 'Your Information Updated Successfully!');
        return back();

    }

}
