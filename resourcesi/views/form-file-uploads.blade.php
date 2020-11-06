@section('title') 
Theta - Form Uploads
@endsection 
@extends('layouts.main')
@section('style')
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Form File Uploads</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form File Uploads</li>
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
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title">Custom Upload</h5>
                </div>
                <div class="card-body">
                    <div class="ecommerce-upload">
                        <form action="#" class="dropzone dz-clickable">                                    
                            <div class="dz-default dz-message">
                                <p class="dash-analytic-icon"><i class="feather icon-plus primary-rgba text-primary"></i></p>
                                <span>Upload files in .csv formats per template guidelines</span>
                            </div>
                        </form>
                        <img src="assets/images/dashboard/cloud.svg" class="img-fluid" alt="cloud">
                    </div>
                </div>
            </div>                       
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-8">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">File upload</h5>
                </div>
                <div class="card-body">
                    <form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
                    <div class="text-center m-t-15">
                        <button type="button" class="btn btn-primary">Upload File</button>
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
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
@endsection 