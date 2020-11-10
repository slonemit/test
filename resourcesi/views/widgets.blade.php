@section('title') 
Theta - Widgets
@endsection 
@extends('layouts.main')
@section('style')
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Widgets</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h5 class="card-title mb-0">Live Campaigns</h5>
                        </div>
                        <div class="col-5">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0"><a href="#" class="card-arrow"><i class="feather icon-chevron-left"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="card-arrow"><i class="feather icon-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center pb-0 px-0">
                    <div class="row align-items-center">
                        <div class="col-md-4"><p>Clicks</p></div>
                        <div class="col-md-4"><h3>1985</h3></div>
                        <div class="col-md-4"><p><span class="badge badge-success-inverse font-16">10%<i class="feather icon-arrow-up-right"></i></span></p></div>
                    </div>
                    <canvas height="150" id="chartjs-boundary-area-chart" class="chartjs-chart mt-4"></canvas>
                </div>
            </div>
        </div>
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Performance</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12">Referrals</li>
                                <li class="list-inline-item"><input type="checkbox" class="js-switch-performance" checked /></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
               <div class="card-body text-center pb-0 px-0">
                    <div class="row align-items-center">
                        <div class="col-md-4"><p>Sessions</p></div>
                        <div class="col-md-4"><h3>2589</h3></div>
                        <div class="col-md-4"><p><span class="badge badge-danger-inverse font-16">25%<i class="feather icon-arrow-down-right"></i></span></p></div>
                    </div>
                    <canvas height="150" id="chartjs-bar-chart" class="chartjs-chart mt-4"></canvas>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-5">
                            <h5 class="card-title mb-0">Statistics</h5>
                        </div>
                        <div class="col-7">
                            <div class="card-statistics">
                                <ul class="nav nav-pills mb-0" id="stastic-pills-tab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Day</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-selected="false">Month</a>
                                  </li>
                                </ul>  
                            </div>
                        </div>
                    </div>                                
                </div>
                <div class="card-body text-center pb-0 px-0">
                    <div class="row align-items-center">
                        <div class="col-md-4"><p>Visitors</p></div>
                        <div class="col-md-4"><h3>795</h3></div>
                        <div class="col-md-4"><p><span class="badge badge-success-inverse font-16">19%<i class="feather icon-arrow-up-right"></i></span></p></div>
                    </div>
                    <canvas height="150" id="chartjs-stacked-area-chart" class="chartjs-chart mt-4"></canvas>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Wallet</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12">Update <a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center pb-3">
                        <div class="col-6">
                            <p class="mb-2">Balance</p>
                            <h3><sup>$</sup>389</h3>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-primary">Pay</button>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-6">
                            <p>Used</p>
                        </div>
                        <div class="col-6 text-right">
                            <p>$280</p>
                        </div>
                    </div>
                    <div class="progress mb-2" style="height: 5px;">
                      <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="font-12 mb-0">*Keep min balance of $50.</p>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-5">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Spent</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectSocialMedia">
                                            <option>Facebook</option>
                                            <option>Instagram</option>
                                            <option>News Feed</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <p><i class="feather icon-disc text-primary mr-2"></i>40% - Instagram</p>
                            <p><i class="feather icon-disc text-warning mr-2"></i>35% - Facebook</p>
                            <p><i class="feather icon-disc text-light mr-2"></i>25% - News Feed</p>
                        </div>
                        <div class="col-md-5">
                            <canvas height="142" id="chartjs-pie-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-2">
            <div class="card m-b-30 text-white bg-primary">
                <div class="card-header">
                    <h5 class="card-title text-white mb-0">Instagram</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-social-icon"><i class="feather icon-instagram"></i></p>
                            <h3 class="text-white mb-4">695</h3>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <p class="text-white text-center mb-0">Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-2">
            <div class="card m-b-30 text-white bg-primary">
                <div class="card-header">
                    <h5 class="card-title text-white mb-0">Facebook</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-social-icon"><i class="feather icon-facebook"></i></p>
                            <h3 class="text-white mb-4">263</h3>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <p class="text-white text-center mb-0">Likes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card ecommerce-widget m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-4">
                            <p class="dash-analytic-icon"><i class="feather icon-shopping-bag primary-rgba text-primary"></i></p>
                        </div>
                        <div class="col-8 text-right">
                            <h5 class="font-16 mb-0">Orders</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 px-0">                                
                    <canvas height="150" id="chartjs-order-chart" class="chartjs-chart mt-3"></canvas>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="text-center mb-0">3950</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card ecommerce-widget m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-4">
                            <p class="dash-analytic-icon"><i class="feather icon-users warning-rgba text-warning"></i></p>
                        </div>
                        <div class="col-8 text-right">
                            <h5 class="font-16 mb-0">Customers</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 px-0">                                
                    <canvas height="150" id="chartjs-customer-chart" class="chartjs-chart mt-3"></canvas>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="text-center mb-0">1248</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card ecommerce-widget m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-4">
                            <p class="dash-analytic-icon"><i class="feather icon-image success-rgba text-success"></i></p>
                        </div>
                        <div class="col-8 text-right">
                            <h5 class="font-16 mb-0">Products</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 px-0">                                
                    <canvas height="150" id="chartjs-product-chart" class="chartjs-chart mt-3"></canvas>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="text-center mb-0">254</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card ecommerce-widget m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-4">
                            <p class="dash-analytic-icon"><i class="feather icon-dollar-sign danger-rgba text-danger"></i></p>
                        </div>
                        <div class="col-8 text-right">
                            <h5 class="font-16 mb-0">Revenues</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 px-0">                                
                    <canvas height="150" id="chartjs-revenue-chart" class="chartjs-chart mt-3"></canvas>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="text-center mb-0">9580</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Products Statistics</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-2 pl-0">
                                <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                            </ul>                                       
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <p class="mb-2">Total Products</p>
                        <h3>563</h3>
                    </div>
                    <div class="progress font-14 mb-1" style="height: 30px;">
                      <div class="progress-bar" role="progressbar" style="width: 27%" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100">27%</div>
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100">24%</div>
                      <div class="progress-bar bg-success" role="progressbar" style="width: 16%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">16%</div>
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">15%</div>
                      <div class="progress-bar bg-info" role="progressbar" style="width: 14%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">14%</div>
                    </div>
                    <div class="mt-4">
                        <p><i class="mdi mdi-circle text-primary mr-2"></i>Active Products<span class="float-right">152</span></p>
                        <p><i class="mdi mdi-circle text-warning mr-2"></i>Performing Products<span class="float-right">135</span></p>
                        <p><i class="mdi mdi-circle text-success mr-2"></i>Submitted Products<span class="float-right">67</span></p>
                        <p><i class="mdi mdi-circle text-danger mr-2"></i>Pending Products<span class="float-right">78</span></p>
                        <p><i class="mdi mdi-circle text-info mr-2"></i>Rejected Products<span class="float-right">28</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Upload Products</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-primary-rgba font-14 px-2">Download</button></li>
                            </ul>                                        
                        </div>
                    </div>
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
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Important Files</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-2 pl-0">
                                <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="product-file-type">
                        <ul class="list-unstyled">
                            <li class="media mb-3">
                                <span class="mr-3 align-self-center img-icon primary-rgba text-primary">.doc</span>
                                <div class="media-body">
                                <h5 class="font-16 mb-1">Marketing Guidelines<i class="feather icon-download-cloud float-right"></i></h5>
                                <p>.doc, 5.3 MB</p>
                                </div>
                            </li>
                            <li class="media mb-3">
                                <span class="mr-3 align-self-center img-icon success-rgba text-success">.xls</span>
                                <div class="media-body">
                                <h5 class="font-16 mb-1">Complete Product Sheet<i class="feather icon-download-cloud float-right"></i></h5>
                                <p>.xls, 2.5 MB</p>
                                </div>
                            </li>
                            <li class="media mb-3">
                                <span class="mr-3 align-self-center img-icon danger-rgba text-danger">.pdf</span>
                                <div class="media-body">
                                <h5 class="font-16 mb-1">Annual Sales Report 2018-19<i class="feather icon-download-cloud float-right"></i></h5>
                                <p>.pdf, 10.5 MB</p>
                                </div>
                            </li>
                            <li class="media">
                                <span class="mr-3 align-self-center img-icon info-rgba text-info">.zip</span>
                                <div class="media-body">
                                <h5 class="font-16 mb-1">Brand Photography<i class="feather icon-download-cloud float-right"></i></h5>
                                <p>.zip, 53.2 MB</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Total Visits</h5>                                        
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-analytic-icon"><i class="feather icon-eye primary-rgba text-primary"></i></p>
                            <h3 class="mb-3">2520</h3>
                            <p class="mb-0"><span class="badge badge-danger-inverse font-16">10%<i class="feather icon-arrow-down-right"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">New Users</h5>                                        
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-analytic-icon"><i class="feather icon-users warning-rgba text-warning"></i></p>
                            <h3 class="mb-3">15%</h3>
                            <p class="mb-0"><span class="badge badge-success-inverse font-16">8%<i class="feather icon-arrow-up-right"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">User Engage</h5>                                        
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-analytic-icon"><i class="feather icon-share-2 success-rgba text-success"></i></p>
                            <h3 class="mb-3">985</h3>
                            <p class="mb-0"><span class="badge badge-success-inverse font-16">22%<i class="feather icon-arrow-up-right"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Total Reach</h5>                                        
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-analytic-icon"><i class="feather icon-target danger-rgba text-danger"></i></p>
                            <h3 class="mb-3">5640</h3>
                            <p class="mb-0"><span class="badge badge-danger-inverse font-16">2%<i class="feather icon-arrow-down-right"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Task Report</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectReport">
                                          <option>All</option>
                                          <option>Content</option>
                                          <option>Graphics</option>
                                          <option>Marketing</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless mb-2">
                            <tbody>
                                <tr>
                                    <td><img src="assets/images/users/girl.svg" width="35" alt="girl"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Amy Adams</h5>
                                        <p class="text-muted font-14 mb-0">Content Manager</p>
                                    </td>
                                    <td>
                                        <p class="text-right">33%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/men.svg" width="35" alt="men"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Shiva Radharaman</h5>
                                        <p class="text-muted font-14 mb-0">Graphics Designer</p>
                                    </td>
                                    <td>
                                        <p class="text-right">70%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/boy.svg" width="35" alt="boy"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Ryan Smith</h5>
                                        <p class="text-muted font-14 mb-0">Video Editor</p>
                                    </td>
                                    <td>
                                        <p class="text-right">49%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 49%;" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/men.svg" width="35" alt="men"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">James Witherspon</h5>
                                        <p class="text-muted font-14 mb-0">Campaign Manager</p>
                                    </td>
                                    <td>
                                        <p class="text-right">88%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/girl.svg" width="35" alt="girl"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Courney Berry</h5>
                                        <p class="text-muted font-14 mb-0">Content Writer</p>
                                    </td>
                                    <td>
                                        <p class="text-right">20%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/women.svg" width="35" alt="women"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Lisa Perry</h5>
                                        <p class="text-muted font-14 mb-0">Creative Head</p>
                                    </td>
                                    <td>
                                        <p class="text-right">58%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/boy.svg" width="35" alt="boy"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">John Doe</h5>
                                        <p class="text-muted font-14 mb-0">Web Designer</p>
                                    </td>
                                    <td>
                                        <p class="text-right">41%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                       
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Activities</h5>
                </div>
                <div class="card-body">
                    <div class="activities-history">
                        <div class="activities-history-list activities-primary">
                            <i class="feather icon-code"></i>
                            <div class="activities-history-item">                                            
                                <h6>Balance is running low. <span class="text-muted font-12 float-right">Today, 09:39 PM</span></h6>
                                <p class="mb-0">We suggest you to recharge your ad balance via online payment until 28-03-2019 at 4:00 pm</p>
                            </div>
                        </div>
                        <div class="activities-history-list activities-success">
                            <i class="feather icon-layers"></i>
                            <div class="activities-history-item">
                                <h6>Mark Joe increased Ad-01. <span class="text-muted font-12 float-right">Yesterday, 02:25 AM</span></h6>
                                <p class="mb-0">Ad-01 spending per day has been increased to $25 from $20 to reach out to more people.</p>
                            </div>
                        </div>
                        <div class="activities-history-list activities-danger">
                            <i class="feather icon-folder"></i>
                            <div class="activities-history-item">
                                <h6>Renessa started new Ad set. <span class="text-muted font-12 float-right">24-Feb, 01:10 PM</span></h6>
                                <p class="mb-0">She atarted a new Ad set on various marketing plateform.</p>
                            </div>
                        </div>
                        <div class="activities-history-list activities-info">
                            <i class="feather icon-credit-card"></i>
                            <div class="activities-history-item">
                                <h6>Get summary report. <span class="text-muted font-12 float-right">20-Feb, 05: 45 PM</span></h6>
                                <p class="mb-0">Get summary report for last annual year from the manager. It will be represent on annual board meeting at chicago.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->                      
        <div class="col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">To do Lists</h5>
                </div>
                <div class="card-body">
                    <div class="to-do-list">
                        <ul id="list-group" class="list-group list-group-flush"></ul>
                        <form class="add-items">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" id="todo-list-item" placeholder="What do you need to do today?" aria-label="What do you need to do today?" aria-describedby="button-addon-to-do-list">
                                <div class="input-group-append">
                                    <button class="btn btn-primary add" id="button-addon-to-do-list" type="submit">Add to List</button>
                                </div>
                            </div>
                        </form>
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
<!-- To Do List js -->
<script src="{{ asset('assets/js/custom/custom-to-do-list.js') }}"></script>
<!-- Dropzone JS -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- Chart js -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-widgets.js') }}"></script>
@endsection 