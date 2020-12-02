@section('title')
PLATFORM B2B
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Publicités</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Achats</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Publicités</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="row widgetbar">
                <div class="col-md-2"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#packSold">Acheter un pack</button></div>
                <div class="col-md-2"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleStandardModal">Créer un pack</button></div>
            </div>                        
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
        <h1>Packs publicitaire</h1>
    <div class="row">
        <!-- Start col -->
        @foreach($packs as $pack)
            <div class="col-lg-3">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title"><a href="{{ route("packpubs.show", $pack->id) }}">{{ $pack->libelle_pack }}</a></h5>
                    </div>
                    <div class="card-body">                        
                        <p>{{ $pack->jour > 1 ?$pack->jour.' Jours':$pack->jour.' Jour' }}</p>
                        <p>{{ $pack->montant }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- End col -->
    </div>
    <hr>
    <!-- End row -->
    <!-- Start row -->
        <h1>Packs achetés</h1>
    <div class="row">
        <!-- Start col -->
        @foreach($achatpacks as $achatpack)
            <div class="col-lg-3">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title"><a href="#">{{ $achatpack->pack->libelle_pack }}</a></h5>
                    </div>
                    <div class="card-body">
                        <p>Structure : {{ $achatpack->user->name }}</p>
                        <p>Date d'achat : {{ $achatpack->date_achat }}</p>
                        <p>Date fin : {{ $achatpack->date_fin }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- End col -->
    
    <!-- Modal -->
<div class="modal fade" id="packSold" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleStandardModalLabel">Achat d'un pack</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <form enctype="multipart/form-data" method="post" action="{{ route("achatpack.store") }}">
            <div class="modal-body">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">Pack</label>
                        <select class="form-control" name="pack_id" id="">
                            @foreach ($packs as $pack)
                                <option value="{{ $pack->id }}">{{ $pack->libelle_pack }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">                        
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Fichier</label>
                                <input class="form-control" type="file" name="fichier">
                            </div>
                        </div>
                    </div>
                    <div class="row">                                            
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <label for="inputCity">Date debut</label>
                                <input class="form-control" type="date" name="date_achat">
                            </div>
                        </div>
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
<!-- Modal -->
<div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleStandardModalLabel">Création d'un pack</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ route("packpubs.store") }}">
            <div class="modal-body">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">Libelle</label>
                        <input class="form-control" type="text" name="libelle_pack">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">Nombre de jours</label>
                        <input class="form-control" type="text" name="jour">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">Montant</label>
                        <input class="form-control" type="number" name="montant">
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

@endsection