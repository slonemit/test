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
            <h4 class="page-title">Comptes</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="#">Validation</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Comptes</li>
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
        @foreach($comptes as $compte)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-light m-b-30">
                @if ($compte->structure_id > 0)                    
                    <div class="card-header"><h5 class="card-title">{{ $compte->structure->nom. '-'.$compte->structure->form_jurid }}</h5></div>
                    <div class="card-body">
                        <p class="card-text">{{ 'Secteur : '.$compte->structure->grille->activite }}</p>
                        <p class="card-text">{{ 'Adresse : '.$compte->structure->adresse }}</p>
                        <p class="card-text">{{ 'E-mail : '.$compte->structure->email }}</p>
                        <p class="card-text">{{ 'Télephone : '.$compte->structure->tel }}</p>
                        <div class="custom-control custom-switch">
                        <div><a href="{{ route("comptes.show", $compte->id) }}" class="btn btn-primary">Details</a></div>
                        </div>
                    </div>
                @endif
                @if ($compte->structure_id == 0)                    
                    <div class="card-header"><h5 class="card-title">{{ $compte->user->name  }}</h5></div>
                    <div class="card-body">
                        <p class="card-text">{{ 'Ville : '.$compte->user->personne->ville }}</p>
                        <p class="card-text">{{ 'Date de naissance : '.$compte->user->personne->datenaiss }}</p>
                        <p class="card-text">{{ 'Télephone : '.$compte->user->personne->tel }}</p>
                        <div class="custom-control custom-switch">
                        <div><a href="{{ route("comptes.show", $compte->id) }}" class="btn btn-primary">Details</a></div>
                        </div>
                    </div>
                @endif
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