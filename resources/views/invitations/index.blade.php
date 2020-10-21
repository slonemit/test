@section('title')
B2B - Invitations
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Invitations</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invitations</li>
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
        @foreach($invitations as $invitation)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <img class="card-img-top" src="assets/images/ui-cards/ui-cards-1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title font-18">{{ $invitation->salon->libelle }}</h5>
                    <p class="card-text mb-3">Vous êtes invité a un salon organisé par <b>{{ $invitation->structure->nom }}</b> le <b>{{ $invitation->salon->dateSalon }}</b></p>
                    <a href="{{ route('invitations.show', $invitation->id) }}" class="btn btn-primary">Details</a>
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