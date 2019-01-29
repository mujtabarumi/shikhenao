
<form method="post" action="{{route('student.updateCandidateInfo',$studentInfo->id)}}" enctype="multipart/form-data" class="form-horizontal">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-6">
            <label>First Name<span style="color: red">*</span></label>
            <input type="text" id="name" name="firstName" placeholder="Student first name" value="{{$studentInfo->firstName}}" class="form-control" required />
        </div>
        <div class="col-md-6">
            <label >Last Name<span style="color: red">*</span></label>
            <input type="text" id="name" name="lastName" placeholder="Student last name" value="{{$studentInfo->lastName}}" class="form-control" required />
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <label>Profession<span style="color: red">*</span></label>
            <input type="text" id="profession" name="profession" placeholder="Candidate profession" value="{{$studentInfo->professionTitle}}" class="form-control" required />
        </div>
        <div class="col-md-6">
            <label >Date of Birth<span style="color: red">*</span></label>
            <input type="text" id="dob" placeholder="Date of Birth" name="dob" value="{{$studentInfo->dob}}" class="form-control date" required />
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <label >Phone<span style="color: red">*</span></label>
            <input type="text" id="phone" placeholder="Candidate Phone" name="phone" value="{{$studentInfo->phone}}" class="form-control " required />
        </div>
        <div class="col-md-6">
            <label >Email<span style="color: red">*</span></label>
            <input type="email" id="email" placeholder="Candidate email" name="email" value="{{$studentInfo->email}}" class="form-control" required />
        </div>

    </div>
    <div align="center" class="row">
        <label style="text-align: center">Address</label>
    </div>

    <div  class="row">
        <div class="col-md-6">
            <label >States<span style="color: red">*</span></label>
            @if($studentInfo->address !=null)
                @foreach($address as $addresss)
            <input type="text" id="states" placeholder="Student states" name="states" value="{{$addresss->state}}" class="form-control" required />
                @endforeach
            @else
                <input type="text" id="states" placeholder="Student states" name="states" value="" class="form-control" required />
            @endif
        </div>
        <div class="col-md-6">
            <label>City<span style="color: red">*</span></label>
            @if($studentInfo->address !=null)
                @foreach($address as $addresss)
            <input type="text" id="city" placeholder="Student city" name="city" value="{{$addresss->cityName}}" class="form-control" required />
                @endforeach
@else
                <input type="text" id="city" placeholder="Student city" name="city" value="" class="form-control " required />

            @endif
        </div>
        <div class="col-md-6">
            <label >Street Name<span style="color: red">*</span></label>
            @if($studentInfo->address !=null)
                @foreach($address as $addresss)
            <input type="text" id="streetName" placeholder="Student city" name="streetName" value="{{$addresss->streetName}}" class="form-control" required />
                @endforeach
@else
                <input type="text" id="streetName" placeholder="Student streetName" name="streetName" value="" class="form-control" required />

            @endif
        </div>
        <div class="col-md-6">
            <label>Zip Code<span style="color: red">*</span></label>
            @if($studentInfo->address !=null)
                @foreach($address as $addresss)
            <input type="text" id="zip" placeholder="Student zip" name="zip" value="{{$addresss->zip}}" class="form-control " required />
                @endforeach
@else
                <input type="text" id="zip" placeholder="Student zip" name="zip" value="" class="form-control" required />

            @endif
        </div>
        <div class="col-md-6">
            <label class="col-md-2">Country<span style="color: red">*</span></label>
            @if($studentInfo->address !=null)
                @foreach($address as $addresss)
            <input type="text" id="country" placeholder="Student country" name="country" value="{{$addresss->country}}" class="form-control" required />
                @endforeach
@else
                <input type="text" id="country" placeholder="Student country" name="country" value="" class="form-control" required />

            @endif
        </div>

    </div>
    <div  class="row">
        <div class="col-md-12">
            <label >Address<span style="color: red">*</span></label>
            @if($studentInfo->address !=null)
                @foreach($address as $addresss)
                <textarea class="form-control" id="address"name="address" rows="2"cols="5" placeholder="Your address">{{$addresss->details}}</textarea>
                @endforeach
                    @else
                <textarea class="form-control" id="address"name="address" rows="2"cols="5" placeholder="Your address"></textarea>
            @endif
        </div>
    </div>



    <div class="row">

        <div class="col-md-6">

            <label>Image</label>
            <input type="file" id="image" name="image" accept="image/*" placeholder="Candidate image" class="form-control" />
        </div>

    </div>


    <div style="padding: 20px;text-align: center" class="row">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="button"  data-dismiss="modal" class="btn btn-danger">Cancel</button>
    </div>

</form>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){

        $( ".date" ).datepicker({
            // format: 'dd/mm/yyyy'

        });

    });





</script>


