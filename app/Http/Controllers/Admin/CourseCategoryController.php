<?php

namespace App\Http\Controllers\Admin;

use App\CourseCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use Session;
use Auth;

class CourseCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show()
    {
        return view('Admin.CourseCategory.show');
    }
    public function getData()
    {

        $categories=CourseCategory::get();

        $datatables = DataTables::of($categories);
        return $datatables->make(true);
    }

    public function add(Request $request)
    {

        $categories=new CourseCategory();
        $categories->categoryName=$request->categoryName;
        $categories->categoryStatus=$request->categoryStatus;
        $categories->categoryType=$request->categoryType;
        $categories->save();

        Session::flash('message', 'Insert Successfully!');
        return back();
    }
    public function update($id,Request $request)
    {

        $categories=CourseCategory::findOrfail($id);

        $categories->categoryName=$request->categoryName;
        $categories->categoryStatus=$request->categoryStatus;
        $categories->categoryType=$request->categoryType;

        $categories->save();

        Session::flash('message', 'Updated Successfully!');
        return back();
    }
    public function edit(Request $request)
    {

        $categories=CourseCategory::findOrfail($request->id);

        return view('Admin.CourseCategory.edit',compact('categories'));
    }




}