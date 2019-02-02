@extends('layouts.panel.mainLayout')
@section('panelCss')
    <!-- DataTables -->
    <link href="{{url('public/panel/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/panel/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/panel/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('panelContent')



    <div style=" margin: 0px; padding: 10px;">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My requested course</div>
                    <div class="card-body ">
                        {{--<div class="container">--}}

                        <div class="table table-responsive">
                            <table id="manageapplication" class="table table-striped table-bordered" style="width:100%" >
                                <thead>
                                <tr>


                                    <th>Course name</th>
                                    {{--<th>Teacher name</th>--}}
                                    {{--<th>Teacher last name</th>--}}
                                    <th>Course fee</th>
                                    <th>Course fee type</th>
                                    {{--<th>Apply date</th>--}}
                                    <th>Teaching Time</th>
                                    <th>Status</th>

                                    <th>Action</th>


                                </tr>
                                </thead>
                            </table>
                        </div>





                        {{--</div>--}}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('panelJs')

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="{{url('public/panel/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/panel/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>


    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            table = $('#manageapplication').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                "ajax":{
                    "url": "{!! route('teacher.requestedCourse.showAll')!!}",
                    "type": "POST",
                    data:function (d){

                        d._token="{{csrf_token()}}";


                    },
                },
                columns: [


                    { data: 'courseName', name: 'course.courseName',"orderable": false, "searchable":true },
//                    { data: 'mergeColumn', name: 'mergeColumn',"orderable": false, "searchable":true },
                    // { data: 'teacherLastName', name: 'teacher.teacherLastName',"orderable": false, "searchable":true },


                    { data: 'teacherCourseFee', name: 'teachercourserelation.teacherCourseFee', "orderable": true, "searchable":true },
                    // { data: 'feeType', name: 'course.feeType', "orderable": false, "searchable":true },

                    { "data": function(data){
                        @foreach(COURSE_FEE as $key=>$value)
                        if (data.feeType== '{{$key}}') {

                            return '{{$value}}';

                        }
                        @endforeach
                    },
                        "orderable": false, "searchable":false

                    },
                    { data: 'teachingTime', name: 'teachercourserelation.teachingTime', "orderable": true, "searchable":true },

                    { "data": function(data){


                        @foreach(STATUS as $key=>$value)
                            @if($key != 0)

                        if (data.status== '{{$key}}') {

                            return '{{$value}}';

                        }
                        @endif
                        @endforeach
                    },
                        "orderable": false, "searchable":false

                    },
                    { "data": function(data){
                        @foreach(COURSE_FEE as $key=>$value)
                        if (data.feeType== '{{$key}}') {

                            return '{{$value}}';

                        }
                        @endforeach
                    },
                        "orderable": false, "searchable":false

                    },


//                    { data: 'applyTime', name: 'request_course.applyTime', "orderable": true, "searchable":true },
//                    { data: 'startTime', name: 'hirereport.startTime', "orderable": true, "searchable":true },
//                    { data: 'endTime', name: 'hirereport.endTime', "orderable": true, "searchable":true },

                    // { "data": function(data){
                    //         return '<!--<button class="btn btn-sm btn-danger"><i class="fa fa-envelope"></i></button>-->'+
                    //             '&nbsp;<button class="btn btn-smbtn-info" onclick="getEmpCv('+data.employeeId+')"><i class="fa fa-file-pdf-o"></i></button>'
                    //             ;},
                    //     "orderable": false, "searchable":false
                    // },


                ],
            });


        });

    </script>
@endsection