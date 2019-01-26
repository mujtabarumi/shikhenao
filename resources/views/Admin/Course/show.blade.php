@extends('layouts.panel.mainLayout')

@section('panelContent')

@section('panelCss')


    <!-- DataTables -->
    <link href="{{url('public/panel/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('public/panel/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{url('public/panel/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

    <!-- Modal -->
    <div class="modal fade" id="NewAgreementModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <b><h4 class="modal-title dark profile-title" id="myModalLabel">Create New Course</h4></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                </div>

                <div class="modal-body">

                    <form action="{{route('admin.course.add')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}


                        <div class="form-group">

                            <label for="">Course Name<span style="color: red">*</span></label>

                            <input class="form-control" name="courseName" required type="text">

                        </div>
                        <div class="form-group">

                            <label for="">Status<span style="color: red">*</span></label>

                            {{--<input class="form-control" name="categoryStatus" required type="text">--}}
                            <select class="form-control" required name="courseStatus">
                                <option value="">Select a Status</option>
                                @foreach(STATUS as $key=>$value)
                                    @if($key != 0)
                                    <option value="{{$key}}">{{$value}}</option>
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

                                    <option value="{{$key}}">{{$value}}</option>

                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">

                            <label for="">Category Name<span style="color: red">*</span></label>

                            {{--<input class="form-control" name="categoryType" required type="text">--}}
                            <select class="form-control" required name="fkcourseCategoryId">
                                <option value="">Select a Type</option>
                            @foreach($categories as $cat)

                                    <option value="{{$cat->id}}">{{$cat->categoryName}}</option>

                            @endforeach
                            </select>

                        </div>

                        <div class="form-group">

                            <label for="">Course Duration<span style="color: red">*</span></label>

                            <input class="form-control" maxlength="45" name="courseEstemetedDuration" required type="text">

                        </div>
                        <div class="form-group">

                            <label for="">Course Title 1<span style="color: red">*</span></label>

                            <input class="form-control" maxlength="50" name="courseBigTitle1" required type="text">

                        </div>
                        <div class="form-group">

                            <label for="">Course Title 2<span style="color: red">*</span></label>

                            <input class="form-control" maxlength="50" name="courseBigTitle2" required type="text">

                        </div>
                        <div class="form-group">

                            <label for="">Course Details<span style="color: red">*</span></label>


                            <textarea class="form-control" rows="6" name="courseDetails" required></textarea>

                        </div>
                        <div class="form-group">

                            <label for="">Course Image</label>

                            <input class="form-control" id="courseImage" name="courseImage"  type="file">

                        </div>


                        <div class="form-group">

                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </form>

                </div>



            </div>
        </div>
    </div>

    <!-- The Edit Modal -->
    <div class="modal" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Course</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body" id="editModalBody">

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>

    <div style=" margin: 0px; padding: 10px;">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Course
                        <div style="text-align: right">
                            {{--<a  href="#" class="btn btn-info"><i class="fa fa-plus"></i><span class="title"></span></a>--}}
                            <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#NewAgreementModal">
                                Add Course
                            </button>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">



                            <div class="table table-responsive" style="margin-top: 20px">
                                <table id="allProductList" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th >Name</th>
                                        <th >Category</th>
                                        <th >Fee</th>
                                        <th >Duration</th>

                                        <th >course Image</th>
                                        <th >status</th>
                                        {{--@if(Auth::user()->fkuserTypeId == User[0])--}}
                                            <th >action</th>

                                        {{--@endif--}}

                                    </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('panelJs')

    {{--<link rel="stylesheet" href="{{url('public/panel/assets/js/datatables/datatables.css')}}">--}}
    {{--<script src="{{url('public/panel/assets/js/datatables/datatables.js')}}"></script>--}}

    <script src="{{url('public/panel/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('public/panel/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('public/panel/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('public/panel/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{url('public//panel/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>



        $(document).ready(function() {

            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            table = $('#allProductList').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                "ajax":{
                    "url": "{!! route('admin.course.get') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                    },
                },
                columns: [

                    { data: 'courseName',name:'courseName' },
                    { data: 'categoryName',name:'categoryName' },


                    { "data": function(data){

                            @foreach(COURSE_FEE as $key=>$value)
                            if (data.courseFee == '{{$key}}'){
                                return '{{$value}}';
                            }

                            @endforeach
                        },
                        "orderable": false, "searchable":true
                    },
                    { data: 'courseEstemetedDuration',name:'courseEstemetedDuration' },

                    {
                        "name": "image",
                        "data": "courseImage",
                        "render": function (data, type, full, meta) {
                            return "<img src=\"{{url('public/CourseImages/thumb')}}"+"/"+ data + "\" height=\"50\"/>";
                        },
                        "title": "Image",
                        "orderable": false,
                        "searchable": false,
                    },

                    { "data": function(data){

                            @foreach(STATUS as $key=>$value)
                            if (data.courseStatus == '{{$key}}'){
                                return '{{$value}}';
                            }

                            @endforeach
                        },
                        "orderable": false, "searchable":true
                    },
                        {{--@if(Auth::user()->fkuserTypeId == User[0])--}}
                    { "data": function(data){

                            return '<a class="btn btn-default btn-sm" data-panel-id="'+data.id+'" onclick="editProduct(this)"><i class="fa fa-edit"></i></a>'},
                        "orderable": false, "searchable":false },

                    {{--@endif--}}
                ],
            });

        });
        function editProduct(x) {
            var id=$(x).data('panel-id');


            $.ajax({
                type: 'POST',
                url: "{!! route('admin.course.edit') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'id': id},
                success: function (data) {
                    $("#editModalBody").html(data);
                    $('#editModal').modal();
                    // console.log(data);
                }
            });
        }



    </script>

@endsection