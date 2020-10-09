@section('title')
Theta - Shop
@endsection
@extends('layouts.main')
@section('style')
<!-- Range Slider css -->
<link href="{{ asset('assets/plugins/ion-rangeSlider/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Shop</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
        <div class="col-lg-4 col-xl-3">
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
        <div class="col-lg-8 col-xl-9">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Annonces</h5>
                </div>
                <div class="card-body">
                    <!-- Start row -->
                    <div class="row align-items-center ecommerce-sortby">
                        <!-- Start col -->
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <select class="form-control" id="productSortBy">
                                <option>Price - Low to High</option>
                                <option>Price - High to Low</option>
                                <option>Newest</option>
                                <option>Popularity</option>
                                <option>Average Rating</option>
                            </select>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-md-12 col-lg-12 col-xl-8">
                            <div class="button-list">
                                <button type="button" class="btn btn-round btn-primary-rgba"><i class="feather icon-grid"></i></button>
                                <button type="button" class="btn btn-round btn-secondary-rgba"><i class="feather icon-list"></i></button>
                            </div>
                        </div>
                         <!-- End col -->
                    </div>
                    <!-- End row -->
                    <!-- Start row -->
                    <div class="row">
                        <!-- Start col -->
                        @foreach($annonces as $annonce)
                        <div class="col-lg-6 col-xl-4">
                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <a href="{{url('/ecommerce-single-product')}}"><img src="{{ asset($annonce->image??"assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="product"></a>
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">{{ $annonce->date_pub }}</span>
                                            </div>
                                            <div class="d-inline-block float-right">
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star text-warning"></i>
                                                <i class="feather icon-star"></i>
                                                <i class="feather icon-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <h6 class="mt-1 mb-3">{{ $annonce->titre }}</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">$</sup>{{ $annonce->cout }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary-rgba font-18"><i class="feather icon-shopping-bag"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End col -->
                    </div>
                    <!-- Start row -->
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-body ecommerce-pagination">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-6">
                            <p>Showing 1 to 2 of 12 entries</p>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                    </div>
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