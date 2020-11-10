@section('title')
{{ config('app.name') }} - Salon
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
            <h4 class="page-title">Details du salon</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('salons.index') }}">Salons</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $salon->libelle }}</li>
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
                        <div class="col-lg-6 col-xl-5">
                            <div class="product-slider-box product-box-for">
                                <div class="product-preview">
                                    <img src="{{ asset($salon->image??"assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">{{ $salon->structure->nom }}</span></p>
                            <h2 class="font-22">{{ $salon->libelle }}</h2>
                            <h2 class="font-14">{{ $salon->dateSalon.'  '.$salon->heureSalon.'-'.$salon->heureFinSalon }}</h2>
                            <p class="mb-4">{{ $salon->description }}</p>
                            <div class="button-list">
                                <h6 class="mb-3">Partager</h6>
                                <a href="#" class="btn btn-primary-rgba font-18"><i class="feather icon-facebook"></i></a>
                                <a href="#" class="btn btn-info-rgba font-18"><i class="feather icon-twitter"></i></a>
                                <a href="#" class="btn btn-danger-rgba font-18"><i class="feather icon-instagram"></i></a>
                                <a href="#" class="btn btn-warning-rgba font-18"><i class="feather icon-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Invitations <button type="button" class="btn btn-round btn-success-rgba" data-toggle="modal" data-target="#exampleStandardModal"><i class="feather icon-plus"></i></button></h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab-line" data-toggle="tab" href="#description-line" role="tab" aria-controls="description-line" aria-selected="true"><i class="feather icon-file-text mr-2"></i>Envoyée</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab-line" data-toggle="tab" href="#review-line" role="tab" aria-controls="review-line" aria-selected="false"><i class="feather icon-star mr-2"></i>Confirmée</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade show active" id="description-line" role="tabpanel" aria-labelledby="description-tab-line">
                            <ul class="list-unstyled">
                                @foreach($invitations as $invitation)
                                @if($invitation->statut == 0)
                                <li class="media">
                                    <img src="{{ asset("assets/images/users/men.svg") }}" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">{{ $invitation->structure->nom }}</h5>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <p>Envoyé le : {{ $invitation->date_invit }}</p>
                                    </div>
                                </li><hr/>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="review-line" role="tabpanel" aria-labelledby="review-tab-line">
                            <ul class="list-unstyled">
                                @foreach($invitations as $invitation)
                                @if($invitation->statut == 1)
                                <li class="media">
                                    <img src="{{ asset("assets/images/users/men.svg") }}" class="img-fluid mr-3" alt="user">
                                    <div class="media-body">
                                        <h5 class="font-16 mt-0 mb-1">{{ $invitation->structure->nom }}</h5>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <p>Envoyé le : {{ $invitation->date_invit }}</p>
                                    </div>
                                </li><hr/>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal -->
                                <div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleStandardModalLabel">Envoie d'une invitation</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form method="post" action="{{ route("invitations.store") }}">
                                            <div class="modal-body">
                                                @csrf
                                                <input type="hidden" name="salon_id" value="{{ $salon->id }}"/>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputCity">Structure</label>
                                                        <select @if (count($structures) < 1) disabled @endif class="form-control" name="structure_id" id="">
                                                            @foreach($structures as $structure)
                                                                <option value="{{ $structure->id }}">{{ $structure->nom.' '.$structure->form_jurid }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                            </form>
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
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection