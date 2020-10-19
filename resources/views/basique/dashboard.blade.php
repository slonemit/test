@section('title') 
Theta - eCommerce
@endsection 
@extends('layouts.basique')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
<!-- C3 Charts css -->
<link href="{{ asset('assets/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Ecommerce</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
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
        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Products Statistics</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-1 pl-0">
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
                                <li class="list-inline-item mr-0 font-12"><button type="button" class="btn btn-sm btn-primary-rgba font-14 px-2">Export</button></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body pb-1">
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
                            <ul class="list-inline-group text-right mb-1 pl-0">
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
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h5 class="card-title mb-0">Customer Retention</h5>
                        </div>
                        <div class="col-4">
                            <ul class="list-inline-group text-right mb-2 pl-0">
                                <li class="list-inline-item mr-0 font-12"><i class="feather icon-more-vertical- font-20 text-primary"></i></li>
                            </ul>                                        
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="analytic-chart-label pb-3 mb-4">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <p class="mb-2">Last Year</p>
                                <h3>598</h3>
                            </div>
                            <div class="col-md-6">
                                <h6>Note</h6>
                                <p class="">More customers are driven from Social Media</p>
                            </div>
                            <div class="col-md-3">
                                <p class="mb-2"><i class="feather icon-circle text-primary mr-2"></i>Selling</p>
                                <p class="mb-0"><i class="feather icon-circle text-warning mr-2"></i>Likes</p>
                            </div>
                        </div>  
                    </div>
                    <div id="c3-stacked-area" style="height:320px;"></div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Latest Order</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectOrder">
                                          <option>All</option>
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
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#1</th>
                                    <td><img src="assets/images/users/men.svg" class="img-fluid" width="35" alt="customer"></td>
                                    <td>Andrew Henryson</td>
                                    <td>08-04-2019</td>
                                    <td>$2,695</td>
                                </tr>
                                <tr>
                                    <th scope="row">#2</th>
                                    <td><img src="assets/images/users/women.svg" class="img-fluid" width="35" alt="customer"></td>
                                    <td>Daniel Christopher</td>
                                    <td>28-03-2019</td>
                                    <td>$1,509</td>
                                </tr>
                                <tr>
                                    <th scope="row">#3</th>
                                    <td><img src="assets/images/users/boy.svg" class="img-fluid" width="35" alt="customer"></td>
                                    <td>Alexander Joshua</td>
                                    <td>24-03-2019</td>
                                    <td>$3,598</td>
                                </tr>
                                <tr>
                                    <th scope="row">#4</th>
                                    <td><img src="assets/images/users/girl.svg" class="img-fluid" width="35" alt="customer"></td>
                                    <td>Michael Alexander</td>
                                    <td>15-03-2019</td>
                                    <td>$786</td>
                                </tr>
                                <tr>
                                    <th scope="row">#5</th>
                                    <td><img src="assets/images/users/men.svg" class="img-fluid" width="35" alt="customer"></td>
                                    <td>Samuel William</td>
                                    <td>25-02-2019</td>
                                    <td>$659</td>
                                </tr>
                                <tr>
                                    <th scope="row">#6</th>
                                    <td><img src="assets/images/users/women.svg" class="img-fluid" width="35" alt="customer"></td>
                                    <td>Anthony Smith</td>
                                    <td>15-01-2019</td>
                                    <td>$1,245</td>
                                </tr>
                                <tr>
                                    <th scope="row">#7</th>
                                    <td><img src="assets/images/users/boy.svg" class="img-fluid" width="35" alt="men"></td>
                                    <td>John Terry</td>
                                    <td>29-12-2018</td>
                                    <td>$3,695</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-md-12 col-lg-12 col-xl-6">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0">Top Products</h5>
                        </div>
                        <div class="col-6">
                            <ul class="list-inline-group text-right mb-0 pl-0">
                                <li class="list-inline-item">
                                      <div class="form-group mb-0 amount-spent-select">
                                        <select class="form-control" id="formControlSelectProduct">
                                          <option>All</option>
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
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Sale</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#1</th>
                                    <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Apple MacBook Pro</td>
                                    <td>10,598</td>
                                </tr>
                                <tr>
                                    <th scope="row">#2</th>
                                    <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Dell Alienware</td>
                                    <td>8,986</td>
                                </tr>
                                <tr>
                                    <th scope="row">#3</th>
                                    <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Acer Predator Helios</td>
                                    <td>5,987</td>
                                </tr>
                                <tr>
                                    <th scope="row">#4</th>
                                    <td><img src="assets/images/ecommerce/product_04.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Asus ROG Strix</td>
                                    <td>4,925</td>
                                </tr>
                                <tr>
                                    <th scope="row">#5</th>
                                    <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Razer Blade Pro 17</td>
                                    <td>4,587</td>
                                </tr>
                                <tr>
                                    <th scope="row">#6</th>
                                    <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>HP Spectre x360</td>
                                    <td>2,598</td>
                                </tr>
                                <tr>
                                    <th scope="row">#7</th>
                                    <td><img src="assets/images/ecommerce/product_03.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>Lenovo Legion Y530</td>
                                    <td>1,520</td>
                                </tr>
                            </tbody>
                        </table>
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
<!-- Chartjs js -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/chart-bundle.min.js') }}"></script>
<!-- Piety Chart js -->
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script> 
<!-- Dropzone JS -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- Required Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/buttons.colVis.min.js') }}"></script>    
<!-- Responsive Examples -->
<script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
<!-- C3 Chart js -->
<script src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
<script src="{{ asset('assets/plugins/c3/c3.min.js') }}"></script>
<!-- Dashboard js -->
<script src="{{ asset('assets/js/custom/custom-dashboard-ecommerce.js') }}"></script>
@endsection 