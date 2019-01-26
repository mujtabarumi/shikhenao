<form action="{{route('admin.courseCategory.update',['id'=>$categories->id])}}" method="post">
    {{csrf_field()}}


    <div class="form-group">

        <label for="">Category Name<span style="color: red">*</span></label>

        <input class="form-control" name="categoryName" value="{{$categories->categoryName}}" required type="text">

    </div>
    <div class="form-group">

        <label for="">Category Status<span style="color: red">*</span></label>

        {{--<input class="form-control" name="categoryStatus" required type="text">--}}
        <select class="form-control" required name="categoryStatus">
            <option value="">Select a Status</option>
            @foreach(STATUS as $key=>$value)
                @if($key != 0)
                    <option @if($categories->categoryStatus==$key)selected @endif value="{{$key}}">{{$value}}</option>
                @endif
            @endforeach
        </select>

    </div>
    <div class="form-group">

        <label for="">Category Type<span style="color: red">*</span></label>

        {{--<input class="form-control" name="categoryType" required type="text">--}}
        <select class="form-control" required name="categoryType">
            <option value="">Select a Type</option>
            @foreach(CATEGORY_TYPE as $key=>$value)

                <option  @if($categories->categoryType==$key)selected @endif value="{{$key}}">{{$value}}</option>

            @endforeach
        </select>

    </div>


    <div class="form-group">

        <button type="submit" class="btn btn-success">Submit</button>
    </div>

</form>