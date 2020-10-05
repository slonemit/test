<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a premium responsive admin dashboard template with great features.">
    <meta name="keywords" content="responsive, admin template, dashboard template, bootstrap 4, laravel, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Theta - Register</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Start CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box register-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-4 col-lg-5">
                        <div class="auth-box-left">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Allez y. C'est Gratuit !</h4>
                                    <div class="auth-box-icon">
                                        <img src="assets/images/authentication/auth-box-icon.svg" class="img-fluid" alt="auth-box-icon">
                                    </div>
                                    <div class="auth-box-logo">
                                        <img src="assets/images/logo.svg" class="img-fluid " alt="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start end -->
                    <!-- Start col -->
                    <div class="col-md-8 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4">
                                            <div class="thankyou-content text-center my-5">
                                                <img src="assets/images/ecommerce/thankyou.svg" class="img-fluid mb-5" alt="thankyou">

                                                <p class="my-4">Choississez Votre Type</p>
                                                <div class="button-list">
                                                    <a href="{{url('/user-register')}}">  <button type="button" class="btn btn-primary-rgba font-16"><i class="feather icon-map-pin mr-2"></i>Personnel</button></a>
                                                    <button type="button" class="btn btn-success font-16"><i class="feather icon-file-text mr-2"></i>Entreprise</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <!-- End js -->
</body>
</html>
