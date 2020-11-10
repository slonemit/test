@section('title') 
Theta - Analytics
@endsection 
@extends('layouts.main')
@section('style')
<!-- Morris Chart css -->
<link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />  
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Analytics</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Analytics</li>
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
        <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h5 class="card-title mb-0">Audience</h5>
                        </div>
                        <div class="col-5">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12">Update <a href="#"><i class="feather icon-refresh-cw font-16 text-primary ml-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="analytic-chart-label pb-3 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <p class="mb-2">Amount</p>
                                <h3><sup>$</sup>56</h3>
                            </div>
                            <div class="col-md-6">
                                <p class="analytic-label-perform">*Shopping Campaign has performed 47% better.</p>
                            </div>
                            <div class="col-md-3">
                                <p class="mb-2"><i class="feather icon-circle text-primary mr-2"></i>Selling</p>
                                <p class="mb-0"><i class="feather icon-circle text-warning mr-2"></i>Likes</p>
                            </div>
                        </div>  
                    </div>
                    <div id="morris-area-without-smooth" class="morris-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-5">
            <div class="row">
                <div class="col-md-12 col-lg-6 col-xl-6">
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
                <div class="col-md-12 col-lg-6 col-xl-6">
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
                <div class="col-md-12 col-lg-6 col-xl-6">
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
                <div class="col-md-12 col-lg-6 col-xl-6">
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
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Top Keywords</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                    <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectKeywords">
                                          <option>Today</option>
                                          <option>Last Week</option>
                                          <option>Last Month</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive dash-flag-icon">
                      <table class="table table-borderless mb-2">
                        <thead>
                          <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Keyword</th>
                            <th scope="col">Impressions</th>
                            <th scope="col">Clicks</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>latest</td>
                            <td>768</td>
                            <td>41</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>featured</td>
                            <td>592</td>
                            <td>20</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>trending</td>
                            <td>489</td>
                            <td>14</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>popular</td>
                            <td>450</td>
                            <td>9</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>new</td>
                            <td>425</td>
                            <td>6</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>fashion</td>
                            <td>250</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>ecommerce</td>
                            <td>98</td>
                            <td>2</td>
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
                            <h5 class="card-title mb-0">Page Views</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                    <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectViews">
                                          <option>Today</option>
                                          <option>Last Week</option>
                                          <option>Last Month</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                       
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive  dash-flag-icon">
                      <table class="table table-borderless mb-2">
                        <thead>
                          <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">URL</th>
                            <th scope="col">Views</th>
                            <th scope="col">Duration</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>/about</td>
                            <td>1,025</td>
                            <td>40:55</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>/myaccount</td>
                            <td>986</td>
                            <td>35:12</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>/contact</td>
                            <td>568</td>
                            <td>23:45</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>/home</td>
                            <td>459</td>
                            <td>20:05</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>/service</td>
                            <td>256</td>
                            <td>11:34</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>/blog</td>
                            <td>125</td>
                            <td>01:50</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>/gallery</td>
                            <td>95</td>
                            <td>00:30</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Sessions</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-primary-rgba font-14 px-2">Export</button></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-label">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-primary"></i>Mobile</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-warning"></i>Desktop</p>
                            </li>
                            <li class="list-inline-item">
                                <p><i class="feather icon-square text-light"></i>Tablet</p>
                            </li>
                        </ul>
                    </div>               
                    <div id="morris-donut" class="morris-chart"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title mb-0">Live User Report</h5>
                </div>
                <div class="card-body">
                    <div class="analytic-chart-label pb-3 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <p class="mb-2">Active Users</p>
                                <h3>5</h3>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <p><i class="feather icon-disc text-primary mr-2"></i>Today</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <p><i class="feather icon-disc text-warning mr-2"></i>Last Month</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <p><i class="feather icon-disc text-light mr-2"></i>Last Year</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div class="analytic-chart-piety">
                                    <span class="piety-updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div id="morris-bar" class="morris-chart"></div>
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
                            <h5 class="card-title mb-0">Activities</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectActivities">
                                          <option>Today</option>
                                          <option>Last Week</option>
                                          <option>last Month</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>                                        
                        </div>
                    </div>
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
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Morris Chart js -->
<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script>
<!-- Piety Chart js -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
<!-- Dashboard js -->
<script src="{{ asset('assets/js/custom/custom-dashboard-analytics.js') }}"></script>
@endsection 