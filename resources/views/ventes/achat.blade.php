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
            <h4 class="page-title">Achat</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="all" checked="">
                        <label class="custom-control-label" for="all">Tout</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="accessories">
                        <label class="custom-control-label" for="accessories">Accessories</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="computer">
                        <label class="custom-control-label" for="computer">Ordinateur</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="mobile">
                        <label class="custom-control-label" for="mobile">Mobile</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="headphone">
                        <label class="custom-control-label" for="headphone">Electromenager</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="camera">
                        <label class="custom-control-label" for="camera">Industrie</label>
                    </div>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Prix</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <input id="range-slider-prefix">
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Colors</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-3">
                    <div class="custom-checkbox-button">
                        <div class="form-check-inline checkbox-primary">
                          <input type="checkbox" id="customCheckboxInline5" name="customCheckboxInline2" checked>
                          <label for="customCheckboxInline5"></label>
                        </div>
                        <div class="form-check-inline checkbox-secondary">
                          <input type="checkbox" id="customCheckboxInline6" name="customCheckboxInline2">
                          <label for="customCheckboxInline6"></label>
                        </div>
                        <div class="form-check-inline checkbox-success">
                          <input type="checkbox" id="customCheckboxInline7" name="customCheckboxInline2">
                          <label for="customCheckboxInline7"></label>
                        </div>
                        <div class="form-check-inline checkbox-danger">
                          <input type="checkbox" id="customCheckboxInline8" name="customCheckboxInline2">
                          <label for="customCheckboxInline8"></label>
                        </div>
                        <div class="form-check-inline checkbox-warning">
                          <input type="checkbox" id="customCheckboxInline9" name="customCheckboxInline2">
                          <label for="customCheckboxInline9"></label>
                        </div>
                        <div class="form-check-inline checkbox-info">
                          <input type="checkbox" id="customCheckboxInline10" name="customCheckboxInline2">
                          <label for="customCheckboxInline10"></label>
                        </div>
                        <div class="form-check-inline checkbox-light">
                          <input type="checkbox" id="customCheckboxInline11" name="customCheckboxInline2">
                          <label for="customCheckboxInline11"></label>
                        </div>
                        <div class="form-check-inline checkbox-dark">
                          <input type="checkbox" id="customCheckboxInline12" name="customCheckboxInline2">
                          <label for="customCheckboxInline12"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Warranty Type</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h5 class="card-title mb-0">Tags</h5>
                        </div>
                        <div class="col-3">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="badge-list">
                        <a href="#" class="badge badge-light">Nouveaux</a>
                        <a href="#" class="badge badge-light">Dernier</a>

                        <a href="#" class="badge badge-light">Populaire</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-8 col-xl-9">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Produit</h5>
                </div>
                <div class="card-body">
                    <!-- Start row -->
                    <div class="row align-items-center ecommerce-sortby">
                        <!-- Start col -->
                        <div class="col-md-12 col-lg-12 col-xl-4">
                            <select class="form-control" id="productSortBy">
                                <option>Prix - De bas en haut</option>
                                <option>Price -De Haut en bas/option>
                                <option>Nouveau</option>

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
                        @foreach (\App\Models\Annonce::all() as $cat)
                        <div class="col-lg-6 col-xl-4">
                            <div class="product-bar m-b-30">
                                <div class="product-head">
                                    <a href="{{route('achat.show',$cat->id)}}"><img src="assets/images/ecommerce/product_img_01.jpg" class="img-fluid" alt="product"></a>
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                                <div class="product-body py-3">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="d-inline-block">
                                                <span class="text-uppercase font-12 f-w-6">Watch</span>
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
                                            <h6 class="mt-1 mb-3">{{ $cat->titre }}</h6>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="text-left">
                                                <h5 class="f-w-7 mb-0"><sup class="font-14">XAF </sup>{{ $cat->cout }}</h5>
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

                        <!-- End col -->
                        <!-- Start col -->



                        <!-- End col -->
                    </div>
                    <!-- Start row -->
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-body ecommerce-pagination">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xl-6">

                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <nav aria-label="Page navigation example">
                              <ul class="pagination mb-0">
                                <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
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
