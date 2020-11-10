@section('title')
B2B - RDV
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
            <h4 class="page-title">Details du rendez-vous</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('salons.index') }}">Rendez-vous</a></li>
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
                    <div class="row">
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">{{ $rdv->user->name }}</span></p>
                            <p class="mb-4">{{ $rdv->date_appouv }}</p>
                            <p class="mb-4">{{ $rdv->rdv_comment }}</p>
                            @if ($rdv->user_id != Auth::id())
                                <div class="button-list">
                                    <h6 class="mb-3">Actions</h6>
                                    <form class="d-inline-block" action="{{ route("rdv.update", $rdv->id) }}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <input name="statut" type="hidden" value="1"/>
                                        <button {{ $rdv->statut_rdv == 1? 'disabled':'' }} type="submit" class="btn btn-primary-rgba font-18">Confirmer <i class="feather icon-facebook"></i></button>
                                    </form>
                                    <a {{ $rdv->statut_rdv == 1? 'disabled':'' }} href="#" class="btn btn-info-rgba font-18">Date <i class="feather icon-twitter"></i></a>
                                </div>                                
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection