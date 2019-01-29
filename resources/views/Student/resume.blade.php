@extends('layouts.panel.mainLayout')

@section('panelContent')

<style>
    .container{
        padding:5%;
    }
    .container .img{
        text-align:center;
    }
    .container .details{
        border-left:3px solid #ded4da;
    }
    .container .details p{
        font-size:15px;
        font-weight:bold;
    }
</style>




        {{--<div id="Education" class="profile-education-wrapper profile-section">--}}
            {{--<h3 class="dark profile-title">Education<span><a style="cursor: pointer" onclick="addCandidateEducation()"><i class="ion-plus"></i></a></span></h3>--}}
            {{--@foreach($education as $edu)--}}
                {{--<div class="profile-education">--}}
                    {{--<h5 class="dark">{{$edu->schoolName}}&nbsp;<span><a style="cursor: pointer;" data-panel-id="{{$edu->educationId}}" onclick="editCandidateEducation(this)"><i class="ion-edit"></i></a><a  style="cursor: pointer;" data-panel-id="{{$edu->educationId}}" onclick="deleteEducation(this)"><i class="ion-android-delete"></i></a></span></h5>--}}
                    {{--<p>{{$edu->degreeName}}</p>--}}
                    {{--<p class="ultra-light">{{$edu->startDate}} - @if($edu->currentlyRunning=='0'){{$edu->endDate}}@else{{"Currenty Running"}}@endif</p>--}}
                {{--</div> <!-- end .profile-education -->--}}
                {{--<div class="spacer-md"></div>--}}
            {{--@endforeach--}}

        {{--</div> <!-- end .profile-education-wrapper -->--}}






    <div style=" margin: 0px; padding: 10px;">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My resume</div>
                    <div class="card-body ">
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvzOpl3-kqfNbPcA_u_qEZcSuvu5Je4Ce_FkTMMjxhB-J1wWin-Q"  alt="" class="img-rounded">
                            </div>
                            <div class="col-md-6 details">
                                <blockquote>
                                    <h5>{{$studentInfo->studentFirstName." ".$studentInfo->studentLastName}} <span><a style="cursor: pointer" onclick="editCandidate()"><i class="ion-edit"></i></a></span></h5>
                                    @if($studentAddress!=null)
                                        @foreach($studentAddress as $address)
                                            <small><cite title="#">{{$address->details}},{{$address->streetName}},<span>{{$address->cityName}}, {{$address->state}},{{$address->country}}</span> <i class="glyphicon glyphicon-map-marker">
                                                    </i></cite></small>
                                        @endforeach
                                    @else
                                        <small><cite title="#"> <i class="glyphicon glyphicon-map-marker">
                                                </i></cite></small>
                                    @endif
                                    </blockquote>
                                <p>
                                    {{$studentInfo->studentProfession}} <br>
                                    {{$studentInfo->studentEmail}} <br>
                                    {{$studentInfo->phone}} <br>
                                    {{$studentInfo->studentDOB}}
                                </p>
                            </div>
                        </div>
                        </div>



                        {{--<div class="profile-info profile-section flex no-column no-wrap">--}}

                            {{--<div class="profile-picture">--}}
                                {{--@if($studentInfo->image != null)--}}
                                    {{--<img src="{{url('public/studentImages/thumb/'.$studentInfo->image)}}" height="116px" width="116px" alt="candidate-picture" class="img-responsive">--}}
                                {{--@else--}}
                                    {{--<img src="{{url('public/studentImages/dummy.jpg')}}" height="116px" width="116px" alt="candidate-picture" class="img-responsive">--}}
                                {{--@endif--}}
                            {{--</div> <!-- end .user-picture -->--}}
                            {{--<div class="profile-meta">--}}
                                {{--<h4 class="dark">{{$studentInfo->studentFirstName." ".$studentInfo->studentLastName}}<span><a style="cursor: pointer" onclick="editCandidate()"><i class="ion-edit"></i></a></span></h4>--}}
                                {{--<h4 class="dark">{{$studentInfo->name}}<span><a style="cursor: pointer" data-toggle="modal" data-target="#myModal"><i class="ion-edit"></i></a></span></h4>--}}
                                {{--<p>{{$studentInfo->studentProfession}}</p>--}}
                                {{--<div class="profile-contact flex items-center no-wrap no-column">--}}
                                    {{--@if($studentAddress!=null)--}}
                                        {{--@foreach($studentAddress as $address)--}}
                                            {{--<h6 class="contact-location">{{$address->details}},{{$address->streetName}},<span>{{$address->cityName}}, {{$address->state}},{{$address->country}}</span></h6>--}}
                                        {{--@endforeach--}}
                                    {{--@else--}}
                                        {{--<h6 class="contact-location"><span></span></h6>--}}
                                    {{--@endif--}}
                                    {{--<h6 class="contact-phone">{{$studentInfo->phone}}</h6>--}}
                                    {{--<h6 class="contact-email">{{$studentInfo->studentEmail}}</h6>--}}
                                {{--</div> <!-- end .profile-contact -->--}}

                            {{--</div> <!-- end .profile-meta -->--}}
                        {{--</div> <!-- end .profile-info -->--}}

                        {{--<div class="divider"></div>--}}

                        {{--<div class="profile-about profile-section">--}}
                            {{--<h3 class="dark profile-title">About me<span><a style="cursor: pointer" onclick="editCandidateAboutMe()"><i class="ion-edit"></i></a></span></h3>--}}
                            {{--<p>{{$studentInfo->aboutme}}</p>--}}
                        {{--</div> <!-- end .profile-about -->--}}

                        <div class="divider"></div>


                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('panelJs')

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(){
            @if(Session::has('success_msg'))
            $.alert({
                title: 'Success!',
                type: 'green',
                content: '{{Session::get('success_msg')}}',
                buttons: {
                    tryAgain: {
                        text: 'Ok',
                        btnClass: 'btn-green',
                        action: function () {
                        }
                    }
                }
            });
            @endif
        });
        function editCandidate() {
            var id= '{{$studentInfo->studentId}}';
            var firstName = '{{$studentInfo->studentFirstName}}';
            var lastName = '{{$studentInfo->studentLastName}}';
            var professionTitle = '{{$studentInfo->studentProfession}}';
            var phone = '{{$studentInfo->phone}}';
            var email = '{{$studentInfo->studentEmail}}';
            var dob = '{{$studentInfo->studentDOB}}';
            var addressId = '{{$studentInfo->fkAddressId}}';

            $.ajax({
                type: "POST",
                url: '{{route('student.showInfo')}}',
                data: {firstName:firstName,lastName:lastName,profession:professionTitle,phone:phone,email:email,id:id,address:addressId,dob:dob},
                success: function(data){
                    $('.modal-body').html(data);
                    $('#myModalLabel').html("Edit-Student Info!");
                    $('#myModal').modal({show:true});

                },
            });
        }
        {{--function editCandidateAboutMe() {--}}
            {{--var id= '{{$studentInfo->candidateId}}';--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.editCandidateAboutMe')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Edit-Candidate Info!: About Me");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function deleteWorkExperince(x) {--}}
            {{--$.confirm({--}}
                {{--title: 'Confirm!',--}}
                {{--content: 'Are you sure To delete this Work-Experience?',--}}
                {{--icon: 'fa fa-warning',--}}
                {{--type: 'red',--}}
                {{--typeAnimated: true,--}}
                {{--buttons: {--}}
                    {{--tryAgain: {--}}
                        {{--text: 'Yes',--}}
                        {{--btnClass: 'btn-red',--}}
                        {{--action: function(){--}}
                            {{--var id = $(x).data('panel-id');--}}
                            {{--$.ajax({--}}
                                {{--type: "POST",--}}
                                {{--url: '{{route('employee.deleteWorkExperience')}}',--}}
                                {{--data: {id: id},--}}
                                {{--success: function (data) {--}}
                                    {{--$.alert({--}}
                                        {{--title: 'Success!',--}}
                                        {{--type: 'green',--}}
                                        {{--content: 'Work-Experience Deleted successfully',--}}
                                        {{--buttons: {--}}
                                            {{--tryAgain: {--}}
                                                {{--text: 'Ok',--}}
                                                {{--btnClass: 'btn-green',--}}
                                                {{--action: function () {--}}
                                                    {{--$('#workExperience').load(document.URL +  ' #workExperience');--}}
                                                {{--}--}}
                                            {{--}--}}
                                        {{--}--}}
                                    {{--});--}}
                                {{--},--}}
                            {{--});--}}
                        {{--}--}}
                    {{--},--}}
                    {{--No: function () {--}}
                    {{--},--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
        {{--function deleteEducation(x) {--}}
            {{--$.confirm({--}}
                {{--title: 'Confirm!',--}}
                {{--content: 'Are you sure To delete this Education?',--}}
                {{--icon: 'fa fa-warning',--}}
                {{--type: 'red',--}}
                {{--typeAnimated: true,--}}
                {{--buttons: {--}}
                    {{--tryAgain: {--}}
                        {{--text: 'Yes',--}}
                        {{--btnClass: 'btn-red',--}}
                        {{--action: function(){--}}
                            {{--var id = $(x).data('panel-id');--}}
                            {{--$.ajax({--}}
                                {{--type: "POST",--}}
                                {{--url: '{{route('employee.deleteEducation')}}',--}}
                                {{--data: {id: id},--}}
                                {{--success: function (data) {--}}
                                    {{--$.alert({--}}
                                        {{--title: 'Success!',--}}
                                        {{--type: 'green',--}}
                                        {{--content: 'Education Deleted successfully',--}}
                                        {{--buttons: {--}}
                                            {{--tryAgain: {--}}
                                                {{--text: 'Ok',--}}
                                                {{--btnClass: 'btn-green',--}}
                                                {{--action: function () {--}}
                                                    {{--$('#Education').load(document.URL +  ' #Education');--}}
                                                {{--}--}}
                                            {{--}--}}
                                        {{--}--}}
                                    {{--});--}}
                                {{--},--}}
                            {{--});--}}
                        {{--}--}}
                    {{--},--}}
                    {{--No: function () {--}}
                    {{--},--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
        {{--function addCandidateWorkExperience() {--}}
            {{--var id= '{{$studentInfo->candidateId}}';--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.addCandidateWorkExperience')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Add-Candidate Info! : Work-Experience");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function editCandidateWorkExperience(x) {--}}
            {{--var id = $(x).data('panel-id');--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.editCandidateWorkExperience')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Edit-Candidate Info! : Work-Experience");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function addCandidateEducation() {--}}
            {{--var id= '{{$studentInfo->candidateId}}';--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.addEducation')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Add-Candidate Info! : Education");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function editCandidateEducation(x) {--}}
            {{--var id = $(x).data('panel-id');--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.editCandidateEducation')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Edit-Candidate Info! : Education");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function addCandidateSkill() {--}}
            {{--var id= '{{$studentInfo->candidateId}}';--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.addCandidateSkill')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Add-Candidate Info! : Skill");--}}
                    {{--$('#myModal').modal({show:true});--}}
                    {{--//  console.log(data);--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function editSkill(x) {--}}
            {{--var id = $(x).data('panel-id');--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.editSkill')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Edit-Candidate Info! : Skill");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function deleteSkill(x) {--}}
            {{--$.confirm({--}}
                {{--title: 'Confirm!',--}}
                {{--content: 'Are you sure To delete this Skill?',--}}
                {{--icon: 'fa fa-warning',--}}
                {{--type: 'red',--}}
                {{--typeAnimated: true,--}}
                {{--buttons: {--}}
                    {{--tryAgain: {--}}
                        {{--text: 'Yes',--}}
                        {{--btnClass: 'btn-red',--}}
                        {{--action: function(){--}}
                            {{--var id = $(x).data('panel-id');--}}
                            {{--$.ajax({--}}
                                {{--type: "POST",--}}
                                {{--url: '{{route('employee.deleteSkill')}}',--}}
                                {{--data: {id: id},--}}
                                {{--success: function (data) {--}}
                                    {{--$.alert({--}}
                                        {{--title: 'Success!',--}}
                                        {{--type: 'green',--}}
                                        {{--content: 'Skill Deleted successfully',--}}
                                        {{--buttons: {--}}
                                            {{--tryAgain: {--}}
                                                {{--text: 'Ok',--}}
                                                {{--btnClass: 'btn-green',--}}
                                                {{--action: function () {--}}
                                                    {{--$('#Skill').load(document.URL +  ' #Skill');--}}
                                                {{--}--}}
                                            {{--}--}}
                                        {{--}--}}
                                    {{--});--}}
                                {{--},--}}
                            {{--});--}}
                        {{--}--}}
                    {{--},--}}
                    {{--No: function () {--}}
                    {{--},--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
        {{--function addCandidateFreeTime() {--}}
            {{--var id= '{{$studentInfo->candidateId}}';--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.addCandidateFreeTime')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Add-Candidate Info! : Free Time");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function editFreeTime(x) {--}}
            {{--var id = $(x).data('panel-id');--}}
            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: '{{route('employee.editFreeTime')}}',--}}
                {{--data: {id:id},--}}
                {{--success: function(data){--}}
                    {{--$('.modal-body').html(data);--}}
                    {{--$('#myModalLabel').html("Edit-Candidate Info! : Free Time");--}}
                    {{--$('#myModal').modal({show:true});--}}
                {{--},--}}
            {{--});--}}
        {{--}--}}
        {{--function deleteFreeTime(x) {--}}
            {{--$.confirm({--}}
                {{--title: 'Confirm!',--}}
                {{--content: 'Are you sure To delete this Free Time?',--}}
                {{--icon: 'fa fa-warning',--}}
                {{--type: 'red',--}}
                {{--typeAnimated: true,--}}
                {{--buttons: {--}}
                    {{--tryAgain: {--}}
                        {{--text: 'Yes',--}}
                        {{--btnClass: 'btn-red',--}}
                        {{--action: function(){--}}
                            {{--var id = $(x).data('panel-id');--}}
                            {{--$.ajax({--}}
                                {{--type: "POST",--}}
                                {{--url: '{{route('employee.deleteFreeTime')}}',--}}
                                {{--data: {id: id},--}}
                                {{--success: function (data) {--}}
                                    {{--$.alert({--}}
                                        {{--title: 'Success!',--}}
                                        {{--type: 'green',--}}
                                        {{--content: 'Free Time Deleted successfully',--}}
                                        {{--buttons: {--}}
                                            {{--tryAgain: {--}}
                                                {{--text: 'Ok',--}}
                                                {{--btnClass: 'btn-green',--}}
                                                {{--action: function () {--}}
                                                    {{--$('#FreeTime').load(document.URL +  ' #FreeTime');--}}
                                                {{--}--}}
                                            {{--}--}}
                                        {{--}--}}
                                    {{--});--}}
                                {{--},--}}
                            {{--});--}}
                        {{--}--}}
                    {{--},--}}
                    {{--No: function () {--}}
                    {{--},--}}
                {{--}--}}
            {{--});--}}
        // }
    </script>
@endsection