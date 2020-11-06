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
                            <h4 class="text-success mb-0">Basique</h4>
                            <img src="assets/images/pricing/pricing-basic.svg" class="img-fluid my-4" alt="basic pricing">
                            <div class="pricing-amount">
                                <h3 class="text-success mb-0"><sup>$</sup>0</h3>
                                <h6 class="pricing-duration">Par an</h6>
                            </div>
                        </div>
                        <div class="pricing-middle">
                            <ul class="list-group">
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>100 GB Disk Space</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>10 Email</li>
                              <li class="list-group-item"><i class="feather icon-check mr-2"></i>5 Domain</li>
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
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')

@endsection 