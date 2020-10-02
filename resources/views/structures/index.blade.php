@section('title')
PLATFORM B2B
@endsection
@extends('layouts.default')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Form Layouts</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Creation d'un compte</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route("structures.store") }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Nom</label>
                                <input type="text" class="form-control" name="nom" placeholder="Nom de la structure">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Type de compte</label>
                                <select name="compte_lib" class="form-control">
                                    <option selected>Selectionner...</option>
                                    <option>Basique</option>
                                    <option>Prenium</option>
                                    <option>Silver</option>
                                    <option>Gold</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection