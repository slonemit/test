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
            <h4 class="page-title">Mon profil</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mon profil</li>
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
        <div class="col-md-6">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Product Details</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab-line" data-toggle="tab" href="#description-line" role="tab" aria-controls="description-line" aria-selected="true"><i class="feather icon-file-text mr-2"></i>Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab-line" data-toggle="tab" href="#review-line" role="tab" aria-controls="review-line" aria-selected="false"><i class="feather icon-star mr-2"></i>Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="guide-tab-line" data-toggle="tab" href="#guide-line" role="tab" aria-controls="guide-line" aria-selected="false"><i class="feather icon-book-open mr-2"></i>Guide</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade show active" id="description-line" role="tabpanel" aria-labelledby="description-tab-line">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="tab-pane fade" id="review-line" role="tabpanel" aria-labelledby="review-tab-line">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="assets/images/users/men.svg" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">John Smith</h5>
                                        <p class="text-muted font-14">
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star"></i>
                                            <i class="feather icon-star"></i>
                                        </p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <img src="assets/images/users/boy.svg" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">Michelle Johnson</h5>
                                        <p class="text-muted font-14">
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star text-success"></i>
                                            <i class="feather icon-star"></i>
                                        </p>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="guide-line" role="tabpanel" aria-labelledby="guide-tab-line">
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
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
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection