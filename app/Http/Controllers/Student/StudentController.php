<?php

namespace App\Http\Controllers\Student;


use App\Http\Controllers\Controller;
use App\StudentAddress;
use App\StudentEducation;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

}
