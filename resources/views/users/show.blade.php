@section('title')
Theta - Single Product
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
            <h4 class="page-title">Mon profil</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{  url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mon profil</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleStandardModal">Prendre Rendez-vous</button>
            </div>
            <div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleStandardModalLabel">Demande de Rendes-Vous</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                        <form method="post" action="{{ route("salons.store") }}">
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" name="structure_id" value="{{ $personne->structure}}"/>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputCity">Motif</label>
                                    <input type="text" class="form-control" name="libelle">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Date</label>
                                    <input type="date" class="form-control" name="dateSalon">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Début</label>
                                    <input type="time" class="form-control" name="heureSalon">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputCity">Fin</label>
                                    <input type="time" class="form-control" name="heureFinSalon">
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
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="card">
    <div class="row">
        <div class="col-lg-6 col-xl-5">
            <div class="product-slider-box product-box-for">
                <div class="product-preview">
                <img style="max-height: 400px" src="{{ asset("assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="Product">
                <p><span class="badge badge-success font-14">25% off</span></p>
                </div>
            </div>
        </div>
        <!-- Start col -->
        <div class="col-md-6">
            <div class="">
                <div class="">
                    <h5 class="card-title">{{ $personne->structure->nom }}</h5>
                </div>
                <div class="">
                    <ul class="nav nav-tabs custom-tab-line mb-3" id="defaultTabLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="description-tab-line" data-toggle="tab" href="#description-line" role="tab" aria-controls="description-line" aria-selected="true">A propos <i class="feather icon-file-text mr-2"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab-line" data-toggle="tab" href="#review-line" role="tab" aria-controls="review-line" aria-selected="false">Description <i class="feather icon-book-open mr-2"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="guide-tab-line" data-toggle="tab" href="#guide-line" role="tab" aria-controls="guide-line" aria-selected="false">Experience <i class="feather icon-star mr-2"></i></a>
                        </li>
                    </ul>
                    <div class="tab-content" id="defaultTabContentLine">
                    <div class="tab-pane fade show active" id="description-line" role="tabpanel" aria-labelledby="description-tab-line">
                                <div class="profilename">
                                    <h5>Forme juridique : {{ $personne->structure->form_jurid }}</h5>
                                    <h5>Activité : {{ $personne->structure->grille->activite }}</h5>
                                    <p><i class="feather icon-mail mr-2"></i> {{ $personne->structure->email }}</p>
                                    <p><i class="feather icon-phone mr-2"></i> {{ $personne->structure->tel }}</p>
                                    <p><i class="feather icon-map-pin mr-2"></i> {{ $personne->structure->adresse }}</p>
                                </div>
                                                                                                </div>
                        <div class="tab-pane fade" id="review-line" role="tabpanel" aria-labelledby="review-tab-line">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

                        </div>
                        <div class="tab-pane fade" id="guide-line" role="tabpanel" aria-labelledby="guide-tab-line">
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                                <li>Nulla volutpat aliquam velit
                                    <ul>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                    </ul>
                                </li>
                                <li>Faucibus porta lacus fringilla vel</li>
                                <li>Aenean sit amet erat nunc</li>
                                <li>Eget porttitor lorem</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
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
