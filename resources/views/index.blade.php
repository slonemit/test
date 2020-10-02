@section('title') 
Theta - Home
@endsection 
@extends('layouts.main')
@section('style')
<!-- jvectormap css -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Social Media</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Social Media</li>
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
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"  aria-selected="false">Month</a>
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
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Instagram</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-social-icon"><i class="feather icon-instagram"></i></p>
                            <h3 class="mb-4">695</h3>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <p class="text-center mb-0">Followers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-6 col-lg-6 col-xl-2">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Facebook</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="dash-social-icon"><i class="feather icon-facebook"></i></p>
                            <h3 class="mb-4">263</h3>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12">
                            <p class="text-center mb-0">Likes</p>
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
                            <h5 class="card-title mb-0">Sources of Users</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-primary-rgba font-14 px-2">Export</button></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body pb-2">
                    <canvas id="chartjs-doughnut-chart" class="chartjs-chart"></canvas>
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
                            <h5 class="card-title mb-0">Top Countries</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mt-1 mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive dash-flag-icon">
                      <table class="table table-borderless mb-2">
                        <thead>
                          <tr>
                            <th scope="col">Flag</th>
                            <th scope="col">Country</th>
                            <th scope="col">Likes</th>
                            <th scope="col">Follows</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row"><i class="flag flag-icon-us flag-icon-squared"></i></th>
                            <td>USA</td>
                            <td>2,500</td>
                            <td>65,858</td>
                          </tr>
                          <tr>
                            <th scope="row"><i class="flag flag-icon-cn flag-icon-squared"></i></th>
                            <td>China</td>
                            <td>1,285</td>
                            <td>95,258</td>
                          </tr>
                          <tr>
                            <th scope="row"><i class="flag flag-icon-ru flag-icon-squared"></i></th>
                            <td>Russia</td>
                            <td>758</td>
                            <td>25,985</td>
                          </tr>
                          <tr>
                            <th scope="row"><i class="flag flag-icon-es flag-icon-squared"></i></th>
                            <td>Spain</td>
                            <td>652</td>
                            <td>32,125</td>
                          </tr>
                          <tr>
                            <th scope="row"><i class="flag flag-icon-br flag-icon-squared"></i></th>
                            <td>Brazil</td>
                            <td>254</td>
                            <td>12,896</td>
                          </tr>
                        </tbody>
                      </table>
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
                            <h5 class="card-title mb-0">Browsers</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-success-rgba font-14 px-2">Update</button></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive dash-flag-icon">
                        <table class="table table-borderless mb-2">
                            <thead>
                              <tr>
                                <th scope="col">Logo</th>
                                <th scope="col">Browser</th>
                                <th scope="col">Per(%)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><img src="assets/images/browser/chrome.png" class="img-fluid" alt="chrome"></th>
                                <td>Google Chrome</td>
                                <td>35%</td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="assets/images/browser/safari.png" class="img-fluid" alt="safari"></th>
                                <td>Safari</td>
                                <td>30%</td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="assets/images/browser/windows.png" class="img-fluid" alt="windows"></th>
                                <td>Microsoft Edge</td>
                                <td>20%</td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="assets/images/browser/mozilla.png" class="img-fluid" alt="mozilla"></th>
                                <td>Mozilla Firefox</td>
                                <td>10%</td>
                              </tr>
                              <tr>
                                <th scope="row"><img src="assets/images/browser/opera.png" class="img-fluid" alt="opera"></th>
                                <td>Opera</td>
                                <td>5%</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-5">
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
                                        <select class="form-control" id="formControlSelectDepartment">
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
                                <tr>
                                    <td><img src="assets/images/users/girl.svg" width="35" alt="girl"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Rachel Blunt</h5>
                                        <p class="text-muted font-14 mb-0">HR Executive</p>
                                    </td>
                                    <td>
                                        <p class="text-right">65%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="assets/images/users/girl.svg" width="35" alt="girl"></td>
                                    <td>
                                        <h5 class="card-title font-16 mb-1">Emily Carry</h5>
                                        <p class="text-muted font-14 mb-0">Manager</p>
                                    </td>
                                    <td>
                                        <p class="text-right">28%</p>
                                        <div class="progress mt-2" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
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
        <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Country Wise Performance</h5>
                </div>
                <div class="card-body">
                    <div id="world-map" class="vector-world-map"></div>                                
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <p class="piety-data-attributes mb-0 mr-3">
                                        <span data-peity='{ "fill": ["#944dff", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                                    </p>
                                    <div class="media-body">
                                        <p class="mb-1 text-black f-w-6 font-18">62%</p>
                                        <h5 class="card-title text-muted font-16 mb-0">USA</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <p class="piety-data-attributes mb-0 mr-3">
                                        <span data-peity='{ "fill": ["#08d26f", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>5.5/7</span>
                                    </p>
                                    <div class="media-body">
                                        <p class="mb-1 text-black f-w-6 font-18">83%</p>
                                        <h5 class="card-title text-muted font-16 mb-0">India</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <p class="piety-data-attributes mb-0 mr-3">
                                        <span data-peity='{ "fill": ["#ffe411", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>4/7</span>
                                    </p>
                                    <div class="media-body">
                                        <p class="mb-1 text-black f-w-6 font-18">55%</p>
                                        <h5 class="card-title text-muted font-16 mb-0">Australia</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>                                    
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <p class="piety-data-attributes mb-0 mr-3">
                                        <span data-peity='{ "fill": ["#fc4f68", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>3/7</span>
                                    </p>
                                    <div class="media-body">
                                        <p class="mb-1 text-black f-w-6 font-18">35%</p>
                                        <h5 class="card-title text-muted font-16 mb-0">Argentina</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <p class="piety-data-attributes mb-0 mr-3">
                                        <span data-peity='{ "fill": ["#81cef6", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>6.5/7</span>
                                    </p>
                                    <div class="media-body">
                                        <p class="mb-1 text-black f-w-6 font-18">92%</p>
                                        <h5 class="card-title text-muted font-16 mb-0">Russia</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <p class="piety-data-attributes mb-0 mr-3">
                                        <span data-peity='{ "fill": ["#bcc4dc", "#e9eff9"],   "innerRadius": 20, "radius": 24 }'>2/7</span>
                                    </p>
                                    <div class="media-body">
                                        <p class="mb-1 text-black f-w-6 font-18">28%</p>
                                        <h5 class="card-title text-muted font-16 mb-0">South Africa</h5>
                                    </div>
                                </li>
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
<!-- Chart js -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<!-- Piety Chart js -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
<!-- Vector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Custom Dashboard Social js -->   
<script src="{{ asset('assets/js/custom/custom-dashboard-social.js') }}"></script>
@endsection 