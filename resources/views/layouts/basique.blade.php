<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Theta is a bootstrap & laravel admin dashboard template">
        <meta name="keywords" content="admin, admin dashboard, admin panel, admin template, analytics, bootstrap 4, crm, laravel admin, responsive, sass support, ui kits">
        <meta name="author" content="Themesbox17">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->
        @yield('style')
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">

        <link href="{{ time() < '10:00:00'?asset('assets/css/bootstrap.min.css'):asset('assets/css_light/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ time() < '10:00:00'?asset('assets/css/style.css'):asset('assets/css_light/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        <!-- Start Infobar Notifications Sidebar -->
        <div id="infobar-notifications-sidebar" class="infobar-notifications-sidebar">
            <div class="infobar-notifications-sidebar-head d-flex w-100 justify-content-between">
                <h4>Notifications</h4><a href="javascript:void(0)" id="infobar-notifications-close" class="infobar-notifications-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-notifications-sidebar-body">
                <ul class="nav nav-pills nav-justified" id="infobar-pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-messages-tab" data-toggle="pill" href="#pills-messages" role="tab" aria-controls="pills-messages" aria-selected="true">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-emails-tab" data-toggle="pill" href="#pills-emails" role="tab" aria-controls="pills-emails" aria-selected="false">Invitation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-actions-tab" data-toggle="pill" href="#pills-actions" role="tab" aria-controls="pills-actions" aria-selected="false">Salon</a>
                    </li>
                </ul>
                <div class="tab-content" id="infobar-pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/girl.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5>Amy Adams<span class="badge badge-success">1</span><span class="timing">Jan 22</span></h5>
                                    <p>Hey!! What are you doing tonight ?</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/boy.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5>James Simpsons<span class="badge badge-success">2</span><span class="timing">Feb 15</span></h5>
                                    <p>What's up ???</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/men.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5>Mark Witherspoon<span class="badge badge-success">3</span><span class="timing">Mar 03</span></h5>
                                    <p>I will be late today in office.</p>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 align-self-center rounded-circle" src="assets/images/users/women.svg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h5>Jenniffer Wills<span class="badge badge-success">4</span><span class="timing">Apr 05</span></h5>
                                    <p>Venture presentation is ready.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-emails" role="tabpanel" aria-labelledby="pills-emails-tab">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="mr-3 align-self-center img-icon">N</span>
                                <div class="media-body">
                                    <h5>Nelson Smith<span class="timing">Jan 22</span></h5>
                                    <p><span class="badge badge-danger-inverse">WORK</span>Salary has been processed.</p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 align-self-center img-icon">C</span>
                                <div class="media-body">
                                    <h5>Courtney Cox<i class="feather icon-star text-warning ml-2"></i><span class="timing">Feb 15</span></h5>
                                    <p><span class="badge badge-success-inverse">URGENT</span>New product launching...</p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 align-self-center img-icon">R</span>
                                <div class="media-body">
                                    <h5>Rachel White<span class="timing">Mar 03</span></h5>
                                    <p><span class="badge badge-secondary-inverse">ORDER</span><span class="badge badge-info-inverse">SHOPPING</span>Your order has been...</p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 align-self-center img-icon">F</span>
                                <div class="media-body">
                                    <h5>Freepik<span class="timing">Mar 03</span></h5>
                                    <p><a href="#" class="badge badge-primary mr-2">VERIFY NOW</a>New Sign verification req...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-actions" role="tabpanel" aria-labelledby="pills-actions-tab">
                        <ul class="list-unstyled">
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-check"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Payment Success !!!</h5>
                                    <p class="my-3">We have received your payment toward ad Account : 9876543210. Your Ad is Running.</p>
                                    <p><span class="badge badge-danger-inverse">INFO</span><span class="badge badge-info-inverse">STATUS</span><span class="timing">Today, 09:39 PM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-calendar"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Nobita Applied for Leave.</h5>
                                    <p class="my-3">Nobita applied for leave due to personal reasons on 22nd Feb.</p>
                                    <p><span class="badge badge-success">APPROVE</span><span class="badge badge-danger">REJECT</span><span class="timing">Yesterday, 05:25 PM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-danger-inverse"><i class="feather icon-alert-triangle"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Alert</h5>
                                    <p class="my-3">There has been new Log in fron your account at Melbourne. Mark it safe or report.</p>
                                    <p><i class="feather icon-check text-success mr-3"></i><a href="#" class="text-muted">Report Now</a><span class="timing">5 Jan 2019, 02:13 PM</span></p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 action-icon badge badge-warning-inverse"><i class="feather icon-award"></i></span>
                                <div class="media-body">
                                    <h5 class="action-title">Congratulations !!!</h5>
                                    <p class="my-3">Your role in the organization has been changed from Editor to Chief Strategist.</p>
                                    <p><span class="badge badge-danger-inverse">ACTIVITY</span><span class="timing">10 Jan 2019, 08:49 PM</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-notifications-sidebar-overlay"></div>
        <!-- End Infobar Notifications Sidebar -->
        <!-- Start Infobar Setting Sidebar -->
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <div class="custom-color-setting">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h6 class="mb-3">Select Color</h6>
                        </div>
                        <div class="col-12">
                            <div class="custom-radio-button ml-1">
                                <div class="form-check-inline radio-primary">
                                  <input type="radio" id="customRadioInlineSidebar1" name="customRadioInlineSidebar" checked>
                                  <label for="customRadioInlineSidebar1"></label>
                                </div>
                                <div class="form-check-inline radio-secondary">
                                  <input type="radio" id="customRadioInlineSidebar2" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar2"></label>
                                </div>
                                <div class="form-check-inline radio-success">
                                  <input type="radio" id="customRadioInlineSidebar3" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar3"></label>
                                </div>
                                <div class="form-check-inline radio-danger">
                                  <input type="radio" id="customRadioInlineSidebar4" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar4"></label>
                                </div>
                                <div class="form-check-inline radio-warning">
                                  <input type="radio" id="customRadioInlineSidebar5" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar5"></label>
                                </div>
                                <div class="form-check-inline radio-info">
                                  <input type="radio" id="customRadioInlineSidebar6" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar6"></label>
                                </div>
                                <div class="form-check-inline radio-light">
                                  <input type="radio" id="customRadioInlineSidebar7" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar7"></label>
                                </div>
                                <div class="form-check-inline radio-dark">
                                  <input type="radio" id="customRadioInlineSidebar8" name="customRadioInlineSidebar">
                                  <label for="customRadioInlineSidebar8"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-mode-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Night Mode</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-night-mode" checked /></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-8"><h6 class="mb-0">Navigation Sidebar</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-navigation-sidebar" checked /></div>
                    </div>
                </div>
                <div class="custom-layout-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-12">
                            <h6 class="mb-3">Select Account</h6>
                        </div>
                        <div class="col-6">
                            <div class="account-box active">
                                <img src="assets/images/users/boy.svg" class="img-fluid" alt="user">
                                <h5>Shourya</h5>
                                <p>CEO</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <img src="assets/images/users/women.svg" class="img-fluid" alt="user">
                                <h5>Amy</h5>
                                <p>COO</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <img src="assets/images/users/men.svg" class="img-fluid" alt="user">
                                <h5>John</h5>
                                <p>MD</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <p class="dash-analytic-icon"><i class="feather icon-plus font-35"></i></p>
                                <h5>Add</h5>
                                <p>ACCOUNT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay"></div>
        <!-- End Infobar Setting Sidebar -->
        <!-- Start Containerbar -->
        <div id="containerbar" class="container-fluid">
            <!-- Start Rightbar -->
            @include('layouts.basique_rightbar')
            @yield('content')
            <!-- End Rightbar -->
        </div>
        <!-- End Containerbar -->
        <!-- Start JS -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/horizontal-menu.js') }}"></script>
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script>
        @yield('script')
        <!-- Core JS -->
        <script src="{{ asset('assets/js/core.js') }}"></script>
        <!-- End JS -->
    </body>
</html>
