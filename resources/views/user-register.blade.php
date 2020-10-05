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
    <link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
    <!-- Dropzone css -->
    <link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
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
                    <div class="col-md-6 col-lg-5">
                        <div class="auth-box-left">
                            <div class="card-body">
                                <div class="ecommerce-upload">
                                    <form action="#" class="dropzone dz-clickable">
                                        <div class="dz-default dz-message">
                                            <p class="dash-analytic-icon"><i class="feather icon-plus primary-rgba text-primary"></i></p>
                                            <span>Votre Photo</span>
                                        </div>
                                    </form>
                                    <img src="assets/images/dashboard/cloud.svg" class="img-fluid" alt="cloud">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start end -->
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#">
                                        <h4 class="text-primary mb-4">Création Compte!</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" placeholder="Votre Nom" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Votre Prénom" required>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" id="min-max-date" class="datepicker-here form-control" placeholder="dd/mm/yyyy" aria-describedby="basic-addon8" />
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon8"><i class="feather icon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="lieu de Naissance" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Tel" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Quartier" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" placeholder="Ville" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Mot de Passe" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="re-password" placeholder="Re-Tapez le Mot de Passe" required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="terms">
                                                    <label class="custom-control-label font-14" for="terms">I Agree to Terms & Conditions of Theta</label>
                                                </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Sign up Now</button>
                                    </form>
                                    <p class="mb-0 mt-3">Vous Avez déja un Compte? <a href="{{url('/user-login')}}">Connectez Vous</a></p>
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
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/custom/custom-form-datepicker.js') }}"></script>
    <!-- End js -->
</body>
</html>
