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
            <h4 class="page-title">{{ $annonce->titre }}</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Annonces</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $annonce->titre }}</li>
                </ol>
            </div>
        </div>
        @if($annonce->statut_ann == 0 && Auth::user()->name == 'CCIAM')
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <form action="{{ route("annonces.update", $annonce->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <input name="statut_ann" type="hidden" value="1"/>
                        <button type="submit" class="btn btn-primary">Valider</button>
                    </form>
                </div>                        
            </div>
        @endif
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
                                    <img src="{{ asset($annonce->image??"assets/images/ecommerce/product_img_01.jpg") }}" class="img-fluid" alt="Product">
                                    <p><span class="badge badge-success font-14">25% off</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7">
                            <p><span class="badge badge-light font-16">Pupular</span></p>
                            <h2 class="font-22">{{ $annonce->titre }}</h2>
                            <p>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star text-warning"></i>
                                <i class="feather icon-star"></i>
                                <i class="feather icon-star"></i>
                                <span class="ml-2">25 Ratings</span>
                            </p>
                            @if ($annonce->cout > 0)
                                <p class="text-primary font-26 f-w-7 my-3">{{ $annonce->cout }} <sup class="font-16">FCFA</sup></p>
                            @endif
                            <p class="mb-4">{{ $annonce->description }}</p>
                            @if ($annonce->user_id != Auth::id())
                            <div class="button-list mt-5 mb-5">
                                <button class="btn btn-info font-17" data-toggle="modal" data-target="#exampleStandardModal">MeTo <i class="feather icon-git-branch"></i></button>
                            </div>
                            @endif
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
                    <h5 class="card-title">Commentaires</h5>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="defaultTabContentLine">
                        <div class="tab-pane fade show active" id="description-line" role="tabpanel" aria-labelledby="description-tab-line">
                            <ul class="list-unstyled">
                                @foreach($commentaires as $comment)
                                    @if($comment->statut_com == 1)
                                        <li class="media">
                                            <img src="{{ asset("assets/images/users/men.svg") }}" class="img-fluid mr-3" alt="user">
                                            <div class="media-body">
                                                <h5 class="font-16 mt-0 mb-1 {{ $comment->user_id == Auth::id()? 'text-right':'' }}">{{ $comment->user_id == Auth::id()?'Vous, '.$comment->dateComment:$comment->user->name.', '. $comment->dateComment }}</h5>
                                                <p class="mb-0">{{ $comment->content_com }}</p>
                                            </div>
                                        </li><hr/>
                                    @endif
                                @endforeach
                            </ul>
                        </div>  
                <form action="{{ route('commentaires.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="annonce_id" value="{{ $annonce->id }}">
                    <div class="row"> 
                        <div class="col-md-8">                                                    
                            <div class="form-group">
                                <textarea class="form-control" name="content_com" id="inputTextarea" rows="3" placeholder="Commentaire"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info">Commenter</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
<!-- Modal -->
<div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleStandardModalLabel">MeTo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{ route("rdv_annonce") }}">
            <div class="modal-body">
                @csrf
                <input type="hidden" name="annonce_id" value="{{ $annonce->id }}"/>
                <div class="form-row">                            
                    <div class="col-md-6">
                        <label for="productTitle" class="col-sm-12 col-form-label">Date</label>
                        <input type="date" class="form-control" name="date_propose" placeholder="Titre">
                    </div>
                    <div class="col-md-3">
                        <label for="productTitle1" class="col-sm-12 col-form-label">Debut</label>
                        <input type="time" class="form-control" name="heureMeet" placeholder="Titre">
                    </div>
                    <div class="col-md-3">
                        <label for="productTitle5" class="col-sm-12 col-form-label">Fin</label>
                        <input type="time" class="form-control" name="heureFinMeet" placeholder="Titre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputCity">Commentaire</label>
                        <textarea required class="form-control" name="rdv_comment" id="" cols="30" rows="3"></textarea>
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