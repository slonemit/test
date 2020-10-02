@section('title') 
Theta - Gallery
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Gallery</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Basic Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                    <div class="gallery-filter-box text-center m-b-30">
                        <div class="gallery-filter">  
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a class="filter-item current" data-filter="*">All</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".watch">Watch</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".phone">Phone</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".tablet">Tablet</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".laptop">Laptop</a></li>
                                <li class="list-inline-item"><a class="filter-item" data-filter=".accesories">Accesories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="gallery-item-box">
                        <div class="gallery-item-box">
                            <div class="grid row justify-content-md-center">
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 watch">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-1.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Watch</p>
                                            <h5><a href="#">Apple Watch</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 phone">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-2.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Phone</p>
                                            <h5><a href="#">iPhone X</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 tablet">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-3.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Tablet</p>
                                            <h5><a href="#">Apple iPad</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 laptop">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-4.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Laptop</p>
                                            <h5><a href="#">Apple Macbook</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 accesories">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-5.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Accesories</p>
                                            <h5><a href="#">iPhone Case</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 watch">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-6.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Watch</p>
                                            <h5><a href="#">Fashion Kit</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 phone">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-7.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Phone</p>
                                            <h5><a href="#">iPhone 8</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 tablet">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-8.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Tablet</p>
                                            <h5><a href="#">iPad Mini</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 laptop">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-9.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Laptop</p>
                                            <h5><a href="#">Pendrive Adapter</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 accesories">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-10.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Accesories</p>
                                            <h5><a href="#">Wallet</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 phone">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-11.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Phone</p>
                                            <h5><a href="#">iPhone Combo</a></h5>
                                        </div>      
                                    </div>
                                </div>
                                <div class="grid-item col-sm-6 col-md-6 col-lg-4 col-xl-3 accesories">
                                    <div class="gallery-box">
                                        <div class="gallery-preview">
                                            <img src="assets/images/gallery/gallery-12.jpg" class="img-fluid" alt="gallery image"/>
                                        </div>
                                        <div class="gallery-content">
                                            <p>Accesories</p>
                                            <h5><a href="#">Keyboard</a></h5>
                                        </div>      
                                    </div>
                                </div>
                            </div>
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
<!-- Isotope js -->
<script src="{{ asset('assets/plugins/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-gallery.js') }}"></script>
@endsection 