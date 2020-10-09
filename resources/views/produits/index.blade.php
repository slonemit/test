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
            <h4 class="page-title">Produits</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Validation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produits</li>
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
        @foreach($produits as $produit)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-light m-b-30">
                <div class="card-header"><h5 class="card-title">{{ $produit->name }}</h5></div>
                <div class="card-body">
                    <p class="card-text">{{ $produit->description }}</p>
                    <p class="card-text">{{ 'Prix : '.$produit->price .' FCFA'}}</p>
                    <p class="card-text">{{ 'Par : '.$produit->structure->nom}}</p>
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