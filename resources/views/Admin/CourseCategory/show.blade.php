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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <b><h4 class="modal-title dark profile-title" id="myModalLabel">Create New Category</h4></b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                </div>

                <div class="modal-body">

                    <form action="{{route('admin.courseCategory.add')}}" method="post">
                        {{csrf_field()}}


                        <div class="form-group">

                            <label for="">Category Name<span style="color: red">*</span></label>

                            <input class="form-control" name="categoryName" required type="text">

                        </div>
                        <div class="form-group">

                            <label for="">Category Status<span style="color: red">*</span></label>

                            {{--<input class="form-control" name="categoryStatus" required type="text">--}}
                            <select class="form-control" required name="categoryStatus">
                                <option value="">Select a Status</option>
                                @foreach(STATUS as $key=>$value)
                                    @if($key != 0)
                                    <option value="{{$key}}">{{$value}}</option>
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

                                    <option value="{{$key}}">{{$value}}</option>

                            @endforeach
                            </select>

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
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Package</h4>
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
                    <div class="card-header">Category
                        <div style="text-align: right">
                            {{--<a  href="#" class="btn btn-info"><i class="fa fa-plus"></i><span class="title"></span></a>--}}
                            <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#NewAgreementModal">
                                Add Category
                            </button>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">



                            <div class="table table-responsive" style="margin-top: 20px">
                                <table id="allProductList" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th >category name</th>
                                        <th >category type</th>
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
                    "url": "{!! route('admin.courseCategory.get') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                    },
                },
                columns: [

                    { data: 'categoryName',name:'categoryName' },

                    { "data": function(data){

                            @foreach(CATEGORY_TYPE as $key=>$value)
                            if (data.categoryType == '{{$key}}'){
                                return '{{$value}}';
                            }

                            @endforeach
                        },
                        "orderable": false, "searchable":true
                    },
                    { "data": function(data){

                            @foreach(STATUS as $key=>$value)
                            if (data.categoryStatus == '{{$key}}'){
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
                url: "{!! route('admin.courseCategory.edit') !!}",
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