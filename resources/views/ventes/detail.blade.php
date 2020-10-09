@section('title')
Theta - Order Detail
@endsection
@extends('layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Detail Achat</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">eCommerce</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <button class="btn btn-primary"></button>
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
        <div class="col-lg-7 col-xl-8">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <h5 class="card-title mb-0">Order No :{{ $annonce->id  }} </h5>
                        </div>
                        <div class="col-5 text-right">
                            <span class="badge badge-success-inverse">Completed</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="order-primary-detail mb-4">
                            <h6>Date</h6>
                            <p class="mb-0">{{ $annonce->date_pub  }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="order-primary-detail mb-4">
                            <h6>Name</h6>
                            <p class="mb-0">{{ $annonce->titre  }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="order-primary-detail mb-4">
                            <h6>Publié</h6>
                            <p class="mb-0">{{ $annonce->user->personne->structure->nom }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="order-primary-detail mb-4">
                            <h6>Contact</h6>
                            <p class="mb-0">+1 9876543210</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 ">
                            <div class="order-primary-detail mb-4">
                            <h6>Adresse<a href="#" class="badge badge-primary-inverse"></a></h6>
                            <p>{{ $annonce->user->personne->structure->adresse }}<br/> </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Autres Produits</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Produit</th>

                                    <th scope="col">Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($annonce->user->personne->structure->produits as $cat)
                                <tr>
                                    <th scope="row">1</th>
                                    <td><a href="#" class="text-success mr-2"><i class="feather icon-edit-2"></i></a><a href="#" class="text-danger"><i class="feather icon-trash"></i></a></td>
                                    <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                    <td>{{ $cat->name }}</td>
                                    <td>{{ $cat->price }}</td>

                                </tr>


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row border-top pt-3">


                    </div>
                </div>

            </div>

        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-5 col-xl-4">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h5 class="card-title mb-0">Via</h5>
                        </div>
                        <div class="col-8">
                            <div class="card-statistics">
                                <ul class="nav nav-pills mb-0" id="stastic-pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-email-direct" data-toggle="pill" href="#pills-direct" role="tab" aria-selected="false">Direct</a>
                                      </li>
                                  <li class="nav-item">
                                    <a class="nav-link " id="pills-email-tab" data-toggle="pill" href="#pills-email" role="tab" aria-selected="false">Email</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="pills-sms-tab" data-toggle="pill" href="#pills-sms" role="tab" aria-selected="false">SMS</a>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form  id="form-store" method="post" action="{{ route('comment.store')}}">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="form-group">
                            <select id="orderCategory" class="form-control" name="type">
                                <option selected >Type Message</option>
                                <option value="1">Renseignemet</option>
                                <option value="2">Commande</option>
                                <option value="3">Demande Remise</option>
                                <option value="4">Annulation</option>

                            </select>
                        </div>
                    <input type="hidden" name="annonce_id" value={{ $annonce->id  }}>
                        <div class="form-group">
                            <textarea class="form-control" name="content_com" id="specialMessage" rows="3" placeholder="Ajouter le Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="feather icon-send mr-2"></i>Send</button>
                    </form>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Chat Fournisseurs</h5>
                </div>
                <div class="card-body">
                    <div class="chat-detail order-chat-detail mb-0">
                        <div class="chat-body">
                            @foreach ($annonce->comments as $commentaire)


                            <div class="chat-day text-center mb-3">
                                <span class="badge badge-secondary">Today</span>
                            </div>
                            @if ($commentaire->user_id=Auth()->user()->id)
                            <div class="chat-message chat-message-right">
                                <div class="chat-message-text">
                                    <span>{{ $commentaire->content_com }}</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>{{ $commentaire->dateComment}}<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            @else
                            <div class="chat-message chat-message-left">
                                <div class="chat-message-text">
                                    <span>Yes, Sir</span>
                                </div>
                                <div class="chat-message-meta">
                                    <span>4:20 pm<i class="feather icon-check ml-2"></i></span>
                                </div>
                            </div>
                            @endif

                            @endforeach
                        </div>
                        <div class="chat-bottom px-0 pb-0">
                            <div class="chat-messagebar">
                                <form>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-secondary-rgba" type="button" id="button-addonmic"><i class="feather icon-mic"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Type a message..." aria-label="Text">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary-rgba" type="submit" id="button-addonlink"><i class="feather icon-link"></i></button>
                                            <button class="btn btn-primary-rgba" type="button" id="button-addonsend"><i class="feather icon-send"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Downloads</h5>
                </div>
                <div class="card-body">
                    <p><button type="button" class="btn btn-primary-rgba my-1"><i class="feather icon-file mr-2"></i>Invoice</button></p>
                    <p><button type="button" class="btn btn-info-rgba my-1"><i class="feather icon-box mr-2"></i>Packaing Slip</button></p>
                    <p><button type="button" class="btn btn-success-rgba my-1"><i class="feather icon-gift mr-2"></i>Gift Wrap Detail</button></p>
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
<!-- eCommerce Order Detail Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-order-detail-page.js') }}"></script>
@endsection
