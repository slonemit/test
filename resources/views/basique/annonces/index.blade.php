@section('title')
{{ config('app.name') .' - Actualités' }}
@endsection
@extends('layouts.basique')
@section('style')
<!-- Range Slider css -->
<link href="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Actualité</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="#">Annonces</a></li>
                </ol>
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
        <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Categories</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($categ as $category)
                    @if($loop->first)
                    <div class="custom-control custom-checkbox">
                        <input type="radio" name="categ_annonce_id" value="0" class="custom-control-input" id="all" checked="">
                        <label class="custom-control-label" for="all">All</label>
                    </div>
                    @endif
                    <div class="custom-control custom-checkbox">
                        <input type="radio" name="categ_annonce_id" class="custom-control-input" value="{{ $category->id }}" id="{{ $category->categ_lib }}">
                        <label class="custom-control-label" for="{{ $category->categ_lib }}">{{ $category->categ_lib }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-6">
            @foreach($annonces as $annonce)
            <div class="card m-b-30">
                <div class="card-header">
                    <h6>{{ $annonce->user->name.' - '.$annonce->titre }}</h6>
                </div>
                <div class="card-body">
                    <!-- Start row -->
                    <div class="row">
                        <!-- Start col -->
                        <div class="col-12">
                            <div class="product-bar">
                                <div class="product-head">
                                    <a href="{{ route("news.show", $annonce->id) }}"><img src="{{ asset($annonce->image??"assets/images/ecommerce/product_img_01.jpg") }}" class="mx-auto d-block img-fluid" alt="product"></a>
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                                <div class="product-body">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                        <p>{{ strlen($annonce->description)<149?$annonce->description:substr($annonce->description, 0, 150) }} @if(strlen($annonce->description)>149) <strong><a href="{{ route("news.show", $annonce->id) }}">... voir plus</a></strong>@endif</p>
                                        <p><strong class="f-w-7 mb-0"><i class="feather icon-message-square"></i><sup class="font-14">57</sup></strong>></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                    </div>
                    <!-- Start row -->
                </div>
            </div>
            @endforeach
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-3 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Publicités</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($pubs as $pub)
                                @if ($pub->image)                                
                                <div class="carousel-item {{ $loop->first?' active':'' }}">
                                    <img class="d-block w-100" src="{{ asset($pub->image) }}">
                                </div>
                                @endif
                            @endforeach
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>  
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Range Slider js -->
<script src="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.min.js') }}"></script>
<!-- eCommerce Shop Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-shop-page.js') }}"></script>
@endsection