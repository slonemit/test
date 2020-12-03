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
    <h3>{{ count($invitations) > 1 ?'Invitations reçues': 'Invitation reçue' }}</h3>
    <div class="row">
        <!-- Start col -->
        @foreach($invitations as $invitation)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="card-body">
                        <p class="card-text mb-3">Vous êtes invité a un salon organisé par <b>{{ $invitation->structure->nom }}</b> le <b>{{ $invitation->salon->dateSalon }}</b> sur <b>{{ $invitation->salon->libelle }}</b> <a title="Plus" href="{{ route('invitations.show', $invitation->id) }}"> voir plus</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End col -->
    </div><hr>
    <!-- End row -->
    <!-- Start row -->
    <h3>{{ count($invit_confirm) > 1 ?'Invitations confirmées': 'Invitation confirmée' }}</h3>
    <div class="row">
        <!-- Start col -->
        @foreach($invit_confirm as $invitation)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <p class="card-text mb-3">Vous êtes invité a un salon organisé par <b>{{ $invitation->structure->nom }}</b> le <b>{{ $invitation->salon->dateSalon }}</b> sur <b>{{ $invitation->salon->libelle }}</b> <a title="Plus" href="{{ route('invitations.show', $invitation->id) }}"> voir plus</a></p>
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