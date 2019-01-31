
<form method="post" action="{{route('student.updateStudentWorkExperience',$id)}}" class="form-horizontal">
    {{csrf_field()}}
    <div class="col-md-12">
        <label>Company Name<span style="color: red">*</span></label>
        <input type="text" id="companyName" name="companyName" placeholder="Company Name"  value="{{$experience->comapnyName}}" class="form-control" required />
    </div>
    <div class="col-md-12">
        
            <label>Post Name<span style="color: red">*</span></label>
            <input type="text" id="postName" name="postName" placeholder="Post Name" value="{{$experience->Designation}}" class="form-control" required />
        
        
    </div>

    <br>
    <div class="row">
        <div class="col-md-6">
            <label>Start Date<span style="color: red">*</span></label>
            <input type="text" id="startDate" name="startDate" placeholder="Start From" value="{{$experience->startDate}}" class="form-control col-md-4 date" required />
        </div>
        <div class="col-md-6">
            <label>End Date</label>
            /
            <input type="checkbox" id="currentlyRunning" name="currentlyRunning" @if($experience->isCurrentlyRunning=='1')checked @endif value="1">TillNow
            @if($experience->isCurrentlyRunning=='0')
                <input type="text" id="endDate"name="endDate" placeholder="End Date" value="{{$experience->endDate}}" class="form-control col-md-3 date"/>
            @else
                <input type="text" id="endDate"name="endDate" placeholder="End Date"  class="form-control col-md-3 date"/>
            @endif

        </div>
    </div>
    <div class="col-md-12">
        <label>Description<span style="color: red">*</span></label>
        <textarea id="description" placeholder="Description" maxlength="2000" name="description" class="form-control" required rows="4" cols="50">{{$experience->description}}</textarea> <br>
    </div>

    <div class="col-md-12">
        <div class="col-md-6">
            <label>Visibility Status <span style="color: red">*</span></label>
            <select class="form-control" required name="experienceStatus">
                <option value="">select status</option>
                <option @if($experience->isVisible== '0') selected @endif value="0">Not visible</option>
                <option @if($experience->isVisible== '1') selected @endif value="1">Visible</option>
            </select>
        </div>

    </div>

    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>
</form>

<script>
    $( function() {
        $( ".date" ).datepicker({
            format: "yyyy-mm-dd",


        });
        // $( "#endDate" ).datetimepicker({
        //     format: "Y",
        //     useCurrent: false,
        //     minDate: $( "#startDate" ).val(),
        // });

        if($('#currentlyRunning').is(":checked")) {
            $("#endDate").css({"display":"none"});
        }
        else {
            $("#endDate").css({"display":"block"});
        }

    } );

    $("#currentlyRunning").click(function () {

        if($('#currentlyRunning').is(":checked")) {
            $("#endDate").css({"display":"none"});
        }
        else {
            $("#endDate").css({"display":"block"});
        }
    });
</script>