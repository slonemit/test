@section('title')
B2B - Salons
@endsection
@extends('layouts.main')
@section('style')
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Details du salon</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('salons.index') }}">Rendez-vous</a></li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary">Add Widget</button>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5">
                            <div class="product-slider-box product-box-for">
                                <div class="product-preview">
                                    <img src="{{ asset("assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_02.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-primary font-14">New</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_03.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-danger font-14">Price Drop</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_04.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">Sale</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_05.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-warning font-14">Trending</span></p>
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_06.jpg" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-info font-14">Popular</span></p>
                                </div>
                            </div>
                            <div class="product-slider-box product-box-nav">
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_01.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_02.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_03.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_04.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_05.jpg" class="img-fluid" alt="Product">
                                </div>
                                <div class="product-preview">
                                    <img src="assets/images/ecommerce/product_img_06.jpg" class="img-fluid" alt="Product">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">{{ $rdv->date_appouv }}</span></p>
                            <p class="mb-4">{{ $rdv->rdv_comment }}</p>
                            <div class="button-list">
                                <h6 class="mb-3">Partager</h6>
                                <a href="#" class="btn btn-primary-rgba font-18"><i class="feather icon-facebook"></i></a>
                                <a href="#" class="btn btn-info-rgba font-18"><i class="feather icon-twitter"></i></a>
                                <a href="#" class="btn btn-danger-rgba font-18"><i class="feather icon-instagram"></i></a>
                                <a href="#" class="btn btn-warning-rgba font-18"><i class="feather icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection