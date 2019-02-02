<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\RequestCourse;
use App\Teachers;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use Image;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class TeacherController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function TeacherRequestedCourse()
    {
        return view('Teacher.requestedCourse');
    }

    public function TeacherRequestedCourseWithData(Request $r)
    {
        $teacherId = Teachers::where('fkuserId', Auth::user()->userId)->first()->teacher;
        $requestedCourse = RequestCourse::select('course.courseName','course.courseFee as feeType','teachercourserelation.fkTeacherId',
            'teachercourserelation.teacherCourseFee','teachercourserelation.teachingTime','teachercourserelation.status','request_course.*')

            ->leftJoin('course', 'course.id', '=', 'request_course.fkCourseId')
//            ->leftJoin('teachercourserelation', 'teachercourserelation.fkCourseId', '=','request_course.fkCourseId')
            ->leftJoin('teacher', 'teacher.teacherId', '=', 'request_course.fkTeacherId')
            ->leftJoin('teachercourserelation', function($join)
            {
                $join->on('teachercourserelation.fkCourseId', '=', 'request_course.fkCourseId');
                $join->on('teachercourserelation.fkTeacherId','=','request_course.fkTeacherId');

            });






        $datatables = DataTables::of($requestedCourse);

        return $datatables->make(true);

    }
}
