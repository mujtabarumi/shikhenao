<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect"><i class="ion-close"></i></button>
    <div class="left-side-logo d-block d-lg-none">
        <div>Shikhenao</h2>
            {{--<a href="{{route('index')}}" class="logo"><img src="{{url('public/images/logo-dark.png')}}" height="20" alt="logo"></a>--}}
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li>
                    {{--<a href="{{route('index')}}" class="waves-effect">--}}
                        {{--<i class="dripicons-blog"></i> <span>Dashboard </span>--}}
                    {{--</a>--}}
                </li>
                <li>
                    <a href="{{route('home')}}" class="waves-effect">
                        <i class="dripicons-blog"></i> <span>Shikhenao Home</span>
                    </a>
                </li>
                @if(Auth::user()->fkuserTypeId==USER_TYPE['admin']['code'])
                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                        <i class="dripicons-meter"></i> <span>Courses </span><span class="menu-arrow float-right">
                            <i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('admin.courseCategory.show')}}" class="waves-effect">Category</a></li>
                        <li><a href="{{route('admin.courses.show')}}" class="waves-effect">All Course</a></li>

                    </ul>


                </li>
                    <li>
                        <a href="{{route('teacher.requestedCourse')}}" class="waves-effect">
                            <i class="dripicons-blog"></i> <span>Requested Course</span>
                        </a>
                    </li>
                @endif
                @if(Auth::user()->fkuserTypeId==USER_TYPE['teacher']['code'])


                    <li>
                        <a href="{{route('teacher.requestedCourse')}}" class="waves-effect">
                            <i class="dripicons-blog"></i> <span>Requested Course</span>
                        </a>
                    </li>
                @endif



                @if(Auth::user()->fkuserTypeId==USER_TYPE['student']['code'])
                    {{--<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>My resume </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li>--}}
                                {{--<a href="{{route('employee.show')}}" class="waves-effect">--}}
                                    {{--<i class="fa fa-empire"></i> <span>Employee List</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="{{route('employee.getSalary')}}" class="waves-effect">--}}
                                    {{--<i class="fa fa-empire"></i> <span>Employee Salary</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a href="{{route('report.showSummary')}}" class="waves-effect">Summary</a></li>--}}
                        {{--</ul>--}}

                    {{--</li>--}}
                    <li>
                        <a href="{{route('student.resume')}}" class="waves-effect">
                        <i class="dripicons-blog"></i> <span>My resume  </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('student.requestedCourse')}}" class="waves-effect">
                        <i class="dripicons-blog"></i> <span>Requested Course</span>
                        </a>
                    </li>


                @endif


                {{--<li>--}}
                {{--<a href="{{route('client.show')}}" class="waves-effect">--}}
                {{--<i class="fa fa-user"></i> <span>Client</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-meter"></i> <span>Client </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--@if(Auth::user()->fkusertype=="Admin" || Auth::user()->fkusertype=="InternetEmp")--}}
                            {{--<li><a href="{{route('internet.client.index')}}" class="waves-effect">Internet Client</a></li>--}}
                        {{--@endif--}}
                        {{--@if(Auth::user()->fkusertype=="Admin" || Auth::user()->fkusertype=="CableEmp")--}}
                            {{--<li><a href="{{route('cable.client.index')}}" class="waves-effect">Cable Client</a></li>--}}
                        {{--@endif--}}

                    {{--</ul>--}}
                {{--</li>--}}



                {{--<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-money"></i> <span>Bill</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                {{--<ul class="list-unstyled">--}}
                {{--<li><a href="{{route('bill.show')}}" class="waves-effect">Monthly Bill</a></li>--}}
                {{--<li><a href="{{route('bill.showPastDue')}}" class="waves-effect">Past Due</a></li>--}}
                {{--<li><a href="{{route('report.showSummary')}}" class="waves-effect">Summary</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}

                {{--@if(Auth::user()->fkusertype=="Admin" || Auth::user()->fkusertype=="InternetEmp")--}}
                    {{--<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-money"></i> <span>Internet Bill</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="{{route('bill.Internet.show')}}" class="waves-effect">Monthly Bill</a></li>--}}
                            {{--<li><a href="{{route('bill.Internet.showPastDue')}}" class="waves-effect">Past Due</a></li>--}}
                            {{--<li><a href="{{route('report.showSummary')}}" class="waves-effect">Summary</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}
                {{--@if(Auth::user()->fkusertype=="Admin" || Auth::user()->fkusertype=="CableEmp")--}}
                    {{--<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-money"></i> <span>Cable Bill</span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="{{route('bill.Cable.show')}}" class="waves-effect">Monthly Bill</a></li>--}}
                            {{--<li><a href="{{route('bill.Cable.showPastDue')}}" class="waves-effect">Past Due</a></li>--}}
                            {{--<li><a href="{{route('report.showSummary')}}" class="waves-effect">Summary</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--@endif--}}

                {{--<li>--}}
                    {{--<a href="{{route('expense.show')}}" class="waves-effect">--}}
                        {{--<i class="fa fa-shopping-basket"></i> <span>Expense</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--@if(Auth::user()->fkusertype=="Admin")--}}

                    {{--<li class="has_sub"><a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span>Report </span><span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
                        {{--<ul class="list-unstyled">--}}
                            {{--<li><a href="{{route('report.showDebit')}}" class="waves-effect">Debit</a></li>--}}
                            {{--<li><a href="{{route('report.showCredit')}}" class="waves-effect">Credit</a></li>--}}
                            {{--<li><a href="{{route('report.showSummary')}}" class="waves-effect">Summary</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}


                    {{--<li>--}}
                        {{--<a href="{{route('company')}}" class="waves-effect">--}}
                            {{--<i class="fa fa-bar-chart"></i> <span>Company Info</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endif--}}

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>