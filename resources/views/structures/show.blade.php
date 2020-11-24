@section('title')
{{ config('app.name') }} - Entreprise
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
            <h4 class="page-title">Details de l'entreprise</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('salons.index') }}">Entreprise</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $structure->nom }}</li>
                </ol>
            </div>
        </div>
        @can('update', $structure)
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <button type="button" class="btn btn-round btn-success-rgba" data-toggle="modal" data-target="#exampleStandardModal">Modifier</button>
                </div>
            </div>
        @endcan
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
                                    <img src="{{ asset($structure->image??"assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <h2 class="font-25 p-t-10">{{ $structure->nom.' - '.$structure->form_jurid }}</h2>
                            <p class="mb-4">{{ $structure->description }}</p>
                            @if($structure->experience)
                            <div class="button-list">
                                <h6 class="mb-3">Experience</h6>
                                <p class="mb-4">{{ $structure->experience }}</p>
                            </div>@endif
                            <div class="button-list">
                                <p class="mb-3"><strong style="color: black">Activite : </strong>{{ $structure->grille->activite }}</p>
                            </div>
                            <div class="button-list">
                                <p class="mb-3"><strong style="color: black">Adresse : </strong>{{ $structure->adresse }}</p>
                            </div>
                            <div class="button-list">
                                <p class="mb-3"><strong style="color: black">Téléphone : </strong>{{ $structure->tel }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->
    </div>
    <!-- End row --><!-- Modal -->
    <div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleStandardModalLabel">Modification profil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <form enctype="multipart/form-data" method="post" action="{{ route("structures.update", $structure->id) }}">
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="3">{{ $structure->description??'' }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Experience</label>
                            <textarea class="form-control" name="experience" id="" cols="30" rows="3">{{ $structure->experience??'' }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Image</label>
                            <input class="form-control" type="file" name="image" id="">
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
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom-ecommerce-single-product.js') }}"></script>
@endsection
