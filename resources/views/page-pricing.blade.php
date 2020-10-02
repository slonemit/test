@section('title') 
Theta - Pricing
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Pricing</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Basic Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
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
    <div class="row align-items-center justify-content-center">
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body p-0">
                    <div class="pricing text-center">
                        <div class="pricing-top">
                            <h4 class="text-success mb-0">Basic</h4>
                            <img src="assets/images/pricing/pricing-basic.svg" class="img-fluid my-4" alt="basic pricing">
                            <div class="pricing-amount">
                                <h3 class="text-success mb-0"><sup>$</sup>49</h3>
                                <h6 class="pricing-duration">Per Year</h6>
                            </div>
                        </div>
                        <div class="pricing-middle">
                            <ul class="list-group">
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>100 GB Disk Space</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>10 Email</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>5 Domain</li>
                              <li class="list-group-item"><i class="feather icon-x mr-2"></i>SSL Certificate</li>
                              <li class="list-group-item"><i class="feather icon-x mr-2"></i>24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-bottom pricing-bottom-basic">
                            <div class="pricing-btn">
                                <button type="button" class="btn btn-success font-16">Select<i class="feather icon-arrow-right ml-2"></i></button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body p-0">
                    <div class="pricing text-center">
                        <p class="text-center text-white mb-0"><span class="badge badge-primary text-uppercase rounded-top-0 font-16">Popular</span></p>
                        <div class="pricing-top">                                        
                            <h3 class="text-primary mb-0">Professional</h3>
                            <img src="assets/images/pricing/pricing-professional.svg" class="img-fluid price-pro-image my-4" alt="basic pricing">
                            <div class="pricing-amount">
                                <h2 class="text-primary mb-0"><sup>$</sup>199</h2>
                                <h5 class="pricing-duration">Per Year</h5>
                            </div>
                        </div>
                        <div class="pricing-middle">
                            <ul class="list-group">
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>10 GB Disk Space</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>1 Email</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>1 Domain</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>SSL Certificate</li>
                              <li class="list-group-item"><i class="feather icon-x mr-2"></i>24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-bottom pricing-bottom-professional">                                        
                            <div class="pricing-btn">
                                <button type="button" class="btn btn-primary font-16">Select<i class="feather icon-arrow-right ml-2"></i></button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- End col -->                    
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body p-0">
                    <div class="pricing text-center">
                        <div class="pricing-top">
                            <h4 class="text-info mb-0">Enterprise</h4>
                            <img src="assets/images/pricing/pricing-enterprise.svg" class="img-fluid my-4" alt="basic pricing">
                            <div class="pricing-amount">
                                <h3 class="text-info mb-0"><sup>$</sup>999</h3>
                                <h6 class="pricing-duration">Per Year</h6>
                            </div>
                        </div>
                        <div class="pricing-middle">
                            <ul class="list-group">
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>1 TB Disk Space</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>100 Email</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>50 Domain</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>SSL Certificate</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-bottom pricing-bottom-enterprise">                                        
                            <div class="pricing-btn">
                                <button type="button" class="btn btn-info font-16">Select<i class="feather icon-arrow-right ml-2"></i></button>
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

@endsection 