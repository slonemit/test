@section('title')
PLATFORM B2B
@endsection
@extends('layouts.basique')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Structures</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Structures</li>
                </ol>
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
            @foreach($structures as $structure)
        <div class="col-lg-3">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title"><a href="{{ route("companies.show", $structure->id) }}">{{ $structure->nom .' '. $structure->form_jurid }}</a></h5>
                </div>
                <div class="card-body">
                    <p>{{ 'E-mail : '.$structure->email }}</p>
                    <p>{{ 'Adresse : '.$structure->adresse }}</p>
                    <p>{{ $structure->description }}</p>
                </div>
            </div>
        </div>
            @endforeach
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection