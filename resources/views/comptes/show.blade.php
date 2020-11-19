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
        @if($compte->statut == 0)
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <form action="{{ route("comptes.update", $compte->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <input name="statut" type="hidden" value="1"/>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>                        
        </div>
        @endif
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    @if ($compte->structure_id > 0)
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-xl-5">
                            <div class="product-slider-box product-box-for">
                                <div class="product-preview">
                                    <img src="{{ asset($structure->image??"assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">25% off</span></p>
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
                            <p><span class="badge badge-light font-16">Pupular</span></p>
                            <h2 class="font-22">{{ $structure->nom }}</h2>
                            <p>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star"></i>
                                <i class="feather icon-star"></i>
                                <span class="ml-2">25 Ratings</span>
                            </p>
                            <p class="text-primary font-26 f-w-7 my-3"><sup class="font-16">$</sup>{{ $structure->form_jurid }}</p>
                            <p class="mb-4">{{ $structure->description }}</p>
                            <div class="button-list mt-5 mb-5">
                                <button type="button" class="btn btn-danger-rgba font-18"><i class="feather icon-heart"></i></button>
                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag mr-2"></i>Ajouter dans le panier</button>
                                <button type="button" class="btn btn-success font-17">Acheter</button>
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
    @endif
    <!-- End row -->
    
    @if ($compte->structure_id == 0)
    <div class="row">
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">Pupular</span></p>
                            <h2 class="font-22">{{ $personne->nom.' '.$personne->prenom }}</h2>
                            <p>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star"></i>
                                <i class="feather icon-star"></i>
                                <span class="ml-2">25 Ratings</span>
                            </p>
                            <p class="text-primary font-26 f-w-7 my-3"><sup class="font-16">$</sup>{{ $personne->datenaiss }}</p>
                            <p class="mb-4">{{ $personne->telephone }}</p>
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
    @endif
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection 