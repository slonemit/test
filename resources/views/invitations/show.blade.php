@section('title')
Theta - Single Product
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
            <h4 class="page-title">Single Product</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Product</li>
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
                            <p><span class="badge badge-light font-16">{{ $invitation->salon->structure->nom }}</span></p>
                            <h2 class="font-22">{{ $invitation->salon->libelle }}</h2>
                            <h2 class="font-14">{{ $invitation->salon->dateSalon.'  '.$invitation->salon->heureSalon.'-'.$invitation->salon->heureFinSalon }}</h2>
                            <p class="mb-4">{{ $invitation->salon->description }}</p>
                            <div class="button-list mt-5 mb-5">
                                <button type="button" class="btn btn-danger-rgba font-18"><i class="feather icon-heart"></i></button>
                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag mr-2"></i>Interessé</button>
                                <button @if($invitation->statut == 1) disabled @endif class="btn btn-success font-17" onclick="event.preventDefault(); document.getElementById('form-update').submit();">Confirmer</button>
                                <form style="display: none" id="form-update" action="{{ route("invitations.update", $invitation->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <input name="statut_ann" type="hidden" value="1"/>
                                </form>
                            </div>
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