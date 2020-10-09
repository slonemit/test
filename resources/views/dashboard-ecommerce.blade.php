@section('title')
Theta - eCommerce
@endsection
@extends('layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
<!-- C3 Charts css -->
<link href="{{ asset('assets/plugins/c3/c3.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/vertical-timeline/vertical-timeline.css') }}" rel="stylesheet" type="text/css" />
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
                            <h5 class="font-16 mb-0">SFARIT</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 px-0">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="Thumbnail Image" class="img-thumbnail">
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">

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
                    <div class="card-body py-0 px-0">
                        <img src="assets/images/ui-images/image-thumbnail.jpg" alt="Thumbnail Image" class="img-thumbnail">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">

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
                    <div class="card-body py-0 px-0">
                        <img src="assets/images/ui-images/image-thumbnail.jpg" alt="Thumbnail Image" class="img-thumbnail">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">

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
                            <h5 class="font-16 mb-0">Canal +</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body py-0 px-0">
                    <div class="card-body py-0 px-0">

                        <iframe class="img-thumbnail" src="{{ asset('assets/video1.mp4')}}" frameborder="1" allowfullscreen></iframe>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">

                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->

        <div class="contentbar">
            <div class="card m-b-30">
            <section class="timeline timeline-js">
                <div class="timeline-container">
                    <div class="timeline-block block-js">
                        <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                        <div class="timeline-content content-js">
                            <h4>Company Founded</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <span class="timeline-date">Jul 2019</span>
                        </div>
                    </div>
                    <div class="timeline-block block-js">
                        <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                        <div class="timeline-content content-js">
                            <h4>Featured in Stock Exchange </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <span class="timeline-date">Mar 2019</span>
                        </div>
                    </div>
                    <div class="timeline-block block-js">
                        <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                        <div class="timeline-content content-js">
                            <h4>Entered Retail Sector</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <span class="timeline-date">Jan 2019</span>
                        </div>
                    </div>
                    <div class="timeline-block block-js">
                        <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                        <div class="timeline-content content-js">
                            <h4>Achieve Milestone of 250 Stores worldwide</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <span class="timeline-date">Aug 2018</span>
                        </div>
                    </div>
                    <div class="timeline-block block-js">
                        <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                        <div class="timeline-content content-js">
                            <h4>Operations began in Switzerland</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <span class="timeline-date">May 2018</span>
                        </div>
                    </div>
                    <div class="timeline-block block-js">
                        <div class="timeline-img timeline-img-primary img-js"><i class="feather icon-flag"></i></div>
                        <div class="timeline-content content-js">
                            <h4>Milestone - Covered 24% of Electronics Market</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <span class="timeline-date">Feb 2018</span>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->

        <!-- End col -->
        <!-- Start col -->
        <div class="row">
            <!-- Start col --> @foreach (\App\Models\Annonce::all() as $cat)
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card m-b-30">
                    <img class="card-img-top" src="assets/images/blog/blog-1.jpg" alt="blog">
                    <div class="card-body">
                        <p class="text-center mb-3"><span class="badge badge-success text-uppercase">{{ $cat->cout }}</span></p>
                        <h5 class="card-title font-18">{{ $cat->titre }}</h5>
                        <p class="card-text mb-0">{{ $cat->description }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="blog-link">
                                    <a href="#" class="btn btn-primary-rgba">Plus<i class="feather icon-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="blog-meta">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">{{ $cat->date_pub }}</li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">by <a href="#">{{ $cat->user->name }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <!-- End col -->

            <!-- End col -->


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
