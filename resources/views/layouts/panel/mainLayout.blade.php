<!DOCTYPE html>
<html lang="en">

@include('layouts.panel.include.header')

<body class="fixed-left">
<!-- Loader -->
{{--<div id="preloader">--}}
{{--<div id="status">--}}
{{--<div class="spinner"></div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
@include('layouts.panel.include.navbar')

<!-- Left Sidebar End -->
    <!-- Start right Content here -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <!-- Top Bar Start -->
            <div class="topbar">
                <div class="topbar-left	d-none d-lg-block">
                    <div class="text-center">
                        <h2 style="color: white">ISP</h2>
                        {{--<a href="index-2.html" class="logo"><img src="{{url('public/images/logo.png')}}" height="20" alt="logo"></a>--}}
                    </div>
                </div>
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{url('public/images/users/user-1.jpg')}}" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect"><i class="ion-navicon"></i></button>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="float-right page-breadcrumb">

                            </div>
                            <h5 class="page-title"></h5></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
        @endif
        @yield('panelContent')

<!-- modal -->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" id="editEmpBody">

            </div>
        </div>
        <!-- modal-content -->
    </div>
</div>

<!-- modal -->
        </div>
            <!-- content -->
            <footer class="footer">© 2018 <b>TechCloud Ltd</b> </footer>
        </div>
        <!-- End Right content here -->
    </div>
    <!-- END wrapper -->

@include('layouts.panel.include.footer')

@yield('panelJs')
</body>


</html>