<form action="{{route('admin.course.update',['id'=>$course->id])}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}


    <div class="form-group">

        <label for="">Course Name<span style="color: red">*</span></label>

        <input class="form-control" name="courseName" value="{{$course->courseName}}" required type="text">

    </div>
    <div class="form-group">

        <label for="">Status<span style="color: red">*</span></label>

        {{--<input class="form-control" name="categoryStatus" required type="text">--}}
        <select class="form-control" required name="courseStatus">
            <option value="">Select a Status</option>
            @foreach(STATUS as $key=>$value)
                @if($key != 0)
                    <option @if($key==$course->courseStatus) selected @endif value="{{$key}}">{{$value}}</option>
                @endif
            @endforeach
        </select>

    </div>
    <div class="form-group">

        <label for="">Course fee<span style="color: red">*</span></label>

        {{--<input class="form-control" name="categoryStatus" required type="text">--}}
        <select class="form-control" required name="courseFee">
            <option value="">Select a Option</option>
            @foreach(COURSE_FEE as $key=>$value)

                <option @if($key==$course->courseFee) selected @endif value="{{$key}}">{{$value}}</option>

            @endforeach
        </select>

    </div>
    <div class="form-group">

        <label for="">Category Name<span style="color: red">*</span></label>

        {{--<input class="form-control" name="categoryType" required type="text">--}}
        <select class="form-control" required name="fkcourseCategoryId">
            <option value="">Select a Type</option>
            @foreach($categories as $cat)

                <option @if($cat->id==$course->fkcourseCategoryId) selected @endif value="{{$cat->id}}">{{$cat->categoryName}}</option>

            @endforeach
        </select>

    </div>

    <div class="form-group">

        <label for="">Course Duration<span style="color: red">*</span></label>

        <input class="form-control" maxlength="45"value="{{$course->courseEstemetedDuration}}" name="courseEstemetedDuration" required type="text">

    </div>
    <div class="form-group">

        <label for="">Course Title 1<span style="color: red">*</span></label>

        <input class="form-control"value="{{$course->courseBigTitle1}}" maxlength="50" name="courseBigTitle1" required type="text">

    </div>
    <div class="form-group">

        <label for="">Course Title 2<span style="color: red">*</span></label>

        <input class="form-control" value="{{$course->courseBigTitle2}}" maxlength="50" name="courseBigTitle2" required type="text">

    </div>
    <div class="form-group">

        <label for="">Course Details<span style="color: red">*</span></label>


        <textarea class="form-control" rows="6" name="courseDetails" required>{{$course->courseDetails}}</textarea>

    </div>
    <div class="form-group">

        <label for="">Course Image</label>

        <input class="form-control" id="courseImage" name="courseImage"  type="file">

        <br>
        @if($course->courseImage != null)
            <div>
                <img style="width: 150px;height: 150px" src="{{url('public/CourseImages/'."/".$course->courseImage)}}">

            </div>
        @endif

    </div>


    <div class="form-group">

        <button type="submit" class="btn btn-success">Submit</button>
    </div>

</form>