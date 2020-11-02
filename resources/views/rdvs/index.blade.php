@section('title') 
Theta - Cards
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Cards</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Structures</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rendez-vous</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route("rdv.create") }}" class="btn btn-primary">RDV</a>
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
        @foreach($rdvs as $rdv)
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <a href="{{ route('rdv.show', $rdv->id) }}"><img class="card-img-top" src="assets/images/ui-cards/ui-cards-1.jpg" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title font-18">{{ $rdv->date_propose }}</h5>
                        <p class="card-text mb-3">{{ $rdv->rdv_comment }}</p>
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