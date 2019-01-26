@extends('layouts.panel.mainLayout')

@section('content')


        <h3>Internet</h3>
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total Bill Recieved</a></h4>
                        <div class="row">
                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalBillRecievedOFLastMonth}} </span></h2>--}}


                            </div>
                            <div class="text-right col-md-6">
                                {{--<h4 class="font-light m-b-0">{{$totalbilllastmonthinternet->totalbillinternet}}</h4>--}}

                                <span class="text-muted">Last Month</span>

                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title"><a href="{{route('bill.showPastDueLastMonth')}}">Total Bill Due</a></h4>--}}

                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalBillDueOFLastMonth}}</span></h2>--}}



                            </div>

                            <div class="text-right col-md-6">
                                {{--<h4 class="font-light m-b-0">{{$totalduelastmonthinternet->totaldueinternet}}</h4>--}}

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title"><a href="{{route('bill.showPastDue')}}">Past Bill Due</a></h4>--}}

                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}




                            </div>

                            <div class="text-right col-md-6">
                                {{--<h4 class="font-light m-b-0">{{$totalpastduelastmonthinternet->totalpastdueinternet}}</h4>--}}

                                <span class="text-muted">Total Previous Months</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total Expense</a></h4>

                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalOFLastMonthDebit}} </span></h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">35000.00 </span></h2>--}}


                            </div>

                            <div class="text-right col-md-6">
                                {{--<h5 class="font-light m-b-0">{{$totalOFLastMonthDebit}}</h5>--}}

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div style="margin-top: 10px;margin-bottom: 10px" class="col-md-12"></div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total Earning</a></h4>
                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalOFLastMonthCredit}}</span></h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">100000.00</span></h2>--}}


                            </div>

                            <div class="text-right col-md-6">
                                {{--<h5 class="font-light m-b-0">{{$totalOFLastMonthCredit}}</h5>--}}

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total(Summary)</a></h4>
                        <div class="row">
                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{(number_format(str_replace(',','',$totalOFLastMonthCredit)-str_replace(',','',$totalOFLastMonthDebit),2))}}</span></h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">65000.00</span></h2>--}}


                            </div>
                            <div class="text-right col-md-6">
                                {{--<h5 class="font-light m-b-0">{{$summary }}</h5>--}}

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>


    <br>

        <h3>Cable</h3>
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total Bill Recieved</a></h4>
                        <div class="row">
                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalBillRecievedOFLastMonth}} </span></h2>--}}


                            </div>
                            <div class="text-right col-md-6">
                                <h5 class="font-light m-b-0">Client</h5>

                                <span class="text-muted">Last Month</span>

                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title"><a href="{{route('bill.showPastDueLastMonth')}}">Total Bill Due</a></h4>--}}

                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalBillDueOFLastMonth}}</span></h2>--}}



                            </div>

                            <div class="text-right col-md-6">
                                <h5 class="font-light m-b-0">Client</h5>

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        {{--<h4 class="card-title"><a href="{{route('bill.showPastDue')}}">Past Bill Due</a></h4>--}}

                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                <h2 class="font-light m-b-0"><span class="text-success"><span id="duepayment"><div class="lds-facebook"><div></div><div></div><div></div></div></span></span></h2>


                            </div>

                            <div class="text-right col-md-6">
                                <h5 class="font-light m-b-0">Client</h5>

                                {{--<span class="text-muted">Last Month</span>--}}

                            </div>

                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total Expense</a></h4>

                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalOFLastMonthDebit}} </span></h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">35000.00 </span></h2>--}}


                            </div>

                            <div class="text-right col-md-6">
                                <h5 class="font-light m-b-0">TK</h5>

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div style="margin-top: 10px;margin-bottom: 10px" class="col-md-12"></div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total Earning</a></h4>
                        <div class="row">

                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{$totalOFLastMonthCredit}}</span></h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">100000.00</span></h2>--}}


                            </div>

                            <div class="text-right col-md-6">
                                <h5 class="font-light m-b-0">TK</h5>

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">Total(Summary)</a></h4>
                        <div class="row">
                            <div class="text-left col-md-6">
                                {{--<h2 class="font-light m-b-0"> {{$lastDayCalled}} | {{$target->targetCall}}</h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">{{(number_format(str_replace(',','',$totalOFLastMonthCredit)-str_replace(',','',$totalOFLastMonthDebit),2))}}</span></h2>--}}
                                {{--<h2 class="font-light m-b-0"><span class="text-success">65000.00</span></h2>--}}


                            </div>
                            <div class="text-right col-md-6">
                                <h5 class="font-light m-b-0">TK</h5>

                                <span class="text-muted">Last Month</span>

                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>


@endsection
@section('foot-js')


@endsection