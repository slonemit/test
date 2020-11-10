@section('title')
Theta - Product Detail
@endsection
@extends('layouts.main')
@section('style')
<!-- Summernote css -->
<link href="{{ asset('assets/plugins/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />
<!-- Dropzone css -->
<link href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Création dun RDV</h4>
            <div class="breadcrumb-list">

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button onclick="event.preventDefault(); document.getElementById('form-annonce').submit();" class="btn btn-primary">Enregistrer</button>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <form enctype="multipart/form-data" id="form-annonce" method="post" action="{{ route('rdv.store') }}">
    <div class="row">
        <!-- Start col -->

        <div class="col-lg-8 col-xl-9">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Details du RDV</h5>
                </div>
                <div class="card-body">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="productTitle" class="col-sm-12 col-form-label">Structure</label>
                                <select class="form-control" name="receiver_id" id="">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">                            
                            <div class="col-md-6">
                                <label for="productTitle" class="col-sm-12 col-form-label">Date</label>
                                <input type="date" class="form-control" name="date_propose" placeholder="Titre">
                            </div>
                            <div class="col-md-2">
                                <label for="productTitle" class="col-sm-12 col-form-label">Debut</label>
                                <input type="time" class="form-control" name="heureMeet" placeholder="Titre">
                            </div>
                            <div class="col-md-2">
                                <label for="productTitle" class="col-sm-12 col-form-label">Fin</label>
                                <input type="time" class="form-control" name="heureFinMeet" placeholder="Titre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-form-label">Commentaire</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" class="summernote" name="rdv_comment" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div>

    </form>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')
<!-- Summernote js -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Dropzone js -->
<script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
<!-- eCommerce Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-product-detail-page.js') }}"></script>
@endsection
