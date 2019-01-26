<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use App\CourseCategory;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Image;
use Session;
use Auth;
class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        $categories=CourseCategory::where('categoryStatus','!=','0')->get();
        return view('Admin.Course.show',compact('categories'));
    }
    public function getData()
    {

        $categories=Course::select('course.*','coursecategory.categoryName')->leftjoin('coursecategory','coursecategory.id','course.fkcourseCategoryId')->get();

        $datatables = DataTables::of($categories);
        return $datatables->make(true);
    }
    public function add(Request $request)
    {

        $categories=new Course();

        $categories->courseName=$request->courseName;
        $categories->courseStatus=$request->courseStatus;
        $categories->courseFee=$request->courseFee;
        $categories->fkcourseCategoryId=$request->fkcourseCategoryId;
        $categories->courseEstemetedDuration=$request->courseEstemetedDuration;
        $categories->courseBigTitle1=$request->courseBigTitle1;
        $categories->courseBigTitle2=$request->courseBigTitle2;
        $categories->courseDetails=$request->courseDetails;

        $categories->save();

        if($request->hasFile('courseImage')){


            $img = $request->file('courseImage');
            $filename= $categories->id.'courseImage'.'.'.$img->getClientOriginalExtension();
            $categories->courseImage=$filename;
            $location = public_path('CourseImages/'.$filename);
            $location1 = public_path('CourseImages/thumb/'.$filename);
            Image::make($img)->save($location);
//            Image::make($img)->resize(800,600)->save($location);
//            Image::make($img)->save($location);
            Image::make($img)->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location1);
        }

        $categories->save();

        Session::flash('message', 'Insert Successfully!');
        return back();
    }

    public function edit(Request $request)
    {

        $course=Course::findOrfail($request->id);
        $categories=CourseCategory::where('categoryStatus','!=','0')->get();
        return view('Admin.Course.edit',compact('course','categories'));
    }

    public function update($id,Request $request)
    {

        $categories=Course::findOrfail($id);

        $categories->courseName=$request->courseName;
        $categories->courseStatus=$request->courseStatus;
        $categories->courseFee=$request->courseFee;
        $categories->fkcourseCategoryId=$request->fkcourseCategoryId;
        $categories->courseEstemetedDuration=$request->courseEstemetedDuration;
        $categories->courseBigTitle1=$request->courseBigTitle1;
        $categories->courseBigTitle2=$request->courseBigTitle2;
        $categories->courseDetails=$request->courseDetails;

        $categories->save();

        if($request->hasFile('courseImage')){


            $img = $request->file('courseImage');
            $filename= $categories->id.'courseImage'.'.'.$img->getClientOriginalExtension();
            $categories->courseImage=$filename;
            $location = public_path('CourseImages/'.$filename);
            $location1 = public_path('CourseImages/thumb/'.$filename);
            Image::make($img)->save($location);
//            Image::make($img)->resize(800,600)->save($location);
//            Image::make($img)->save($location);
            Image::make($img)->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($location1);
        }

        $categories->save();

        Session::flash('message', 'Updated Successfully!');
        return back();
    }
}
