@section('title')
PLATEFORM B2B - Comptes
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Annonces</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Validation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Annonces</li>
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
        @foreach($messages as $message)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-light m-b-30">
                <div class="card-header"><h5 class="card-title">{{ json_encode($message["From"]) }}</h5></div>
                <div class="card-body">
                    <p class="card-text">{{ $message['MessageText'] }}</p>
                    <p class="card-text">{{ $message['FormatedReceiveTime'] }}</p>
                    <div><a href="{{ "details" }}" class="btn btn-primary">Details</a></div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End col -->
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection