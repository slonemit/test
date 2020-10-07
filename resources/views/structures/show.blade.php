@section('title') 
{{ $structure->nom }}
@endsection 
@extends('layouts.main')
@section('style')

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">My Account</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Structure</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $structure->nom }}</li>
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
        <div class="col-lg-5 col-xl-3">
            <div class="card m-b-30">
                <div class="card-header">                                
                    <h5 class="card-title mb-0">My Account</h5>                                       
                </div>
                <div class="card-body">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link mb-2 active" id="v-pills-dashboard-tab" data-toggle="pill" href="#v-pills-dashboard" role="tab" aria-controls="v-pills-dashboard" aria-selected="true"><i class="feather icon-grid mr-2"></i>Dashboard</a>
                        <a class="nav-link mb-2" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false"><i class="feather icon-package mr-2"></i>Personnes</a>
                        <a class="nav-link mb-2" id="v-pills-addresses-tab" data-toggle="pill" href="#v-pills-addresses" role="tab" aria-controls="v-pills-addresses" aria-selected="false"><i class="feather icon-map-pin mr-2"></i>Salon</a>
                        <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="feather icon-user mr-2"></i>Produits</a>
                        <a class="nav-link mb-2" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false"><i class="feather icon-bell mr-2"></i>Notifications</a>
                        <a class="nav-link" id="v-pills-logout-tab" data-toggle="pill" href="#v-pills-logout" role="tab" aria-controls="v-pills-logout" aria-selected="false"><i class="feather icon-log-out mr-2"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
        <!-- Start col -->
        <div class="col-lg-7 col-xl-9">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- Dashboard Start -->
                <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel" aria-labelledby="v-pills-dashboard-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Dashboard</h5>                                       
                        </div>
                        <div class="card-body">
                            <div class="profilebox py-4 text-center">
                                <div class="profilename">
                                    <h3>{{ $structure->nom.' '.$structure->form_jurid }}</h3>
                                    <h5>{{ $structure->grille->activite }}</h5>
                                    <p><i class="feather icon-mail mr-2"></i> {{ $structure->email }}</p>
                                    <p><i class="feather icon-phone mr-2"></i> {{ $structure->tel }}</p>
                                    <p><i class="feather icon-map-pin mr-2"></i> {{ $structure->adresse }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start row -->
                    <div class="row">
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="ecom-dashboard-widget">
                                        <div class="media">
                                            <i class="feather icon-package"></i>
                                            <div class="media-body">
                                                <h5>My Orders</h5>
                                                <p>Pending (3)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="ecom-dashboard-widget">
                                        <div class="media">
                                            <i class="feather icon-heart"></i>
                                            <div class="media-body">
                                                <h5>My Wishlist</h5>
                                                <p>Items (7)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End col -->
                        <!-- Start col -->
                        <div class="col-lg-12 col-xl-4">
                            <div class="card m-b-20">
                                <div class="card-body">
                                    <div class="ecom-dashboard-widget">
                                        <div class="media">
                                            <i class="feather icon-credit-card"></i>
                                            <div class="media-body">
                                                <h5>My Wallet</h5>
                                                <p>Balance ($25)</p>
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
                <!-- Dashboard End -->
                <!-- My Orders Start -->
                <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">My Orders</h5>                                       
                        </div>
                        <div class="card-body">
                            <div class="order-box">
                                <div class="card border m-b-30">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>ID : #26598</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0">Total : <strong>$500</strong></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>                                              
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple Watch</td>
                                                        <td>1</td>
                                                        <td>$100</td>
                                                        <td class="text-right">$100</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td><img src="assets/images/ecommerce/product_02.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple iPhone</td>
                                                        <td>2</td>
                                                        <td>$200</td>
                                                        <td class="text-right">$400</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>Status : <span class="badge badge-info-inverse font-14">Shipped</span></h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0"><button class="btn btn-success-rgba font-16"><i class="feather icon-file mr-2"></i>Invoice</button></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-box">
                                <div class="card border m-b-30">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>ID : #26597</h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0">Total : <strong>$100</strong></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>                                              
                                                        <th scope="col">Photo</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><img src="assets/images/ecommerce/product_01.svg" class="img-fluid" width="35" alt="product"></td>
                                                        <td>Apple iPad</td>
                                                        <td>1</td>
                                                        <td>$100</td>
                                                        <td class="text-right">$100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-sm-6">
                                                <h5>Status : <span class="badge badge-primary-inverse font-14">Delivered</span></h5>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6 class="mb-0"><button class="btn btn-success-rgba font-16"><i class="feather icon-file mr-2"></i>Invoice</button></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Orders End -->
                <!-- My Addresses Start -->
                <div class="tab-pane fade" id="v-pills-addresses" role="tabpanel" aria-labelledby="v-pills-addresses-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Mes salons</h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="address-box">
                                        <div class="card border m-b-30">
                                            <div class="card-body text-center py-5">
                                                <!-- Button trigger modal -->
                                                <p><button type="button" class="btn btn-round btn-success-rgba" data-toggle="modal" data-target="#exampleStandardModal"><i class="feather icon-plus"></i></button></p>
                                                <h5 class="mt-4 mb-0">Créer un salon</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach($salons as $salon)
                                <div class="col-lg-12 col-xl-6">
                                    <div class="address-box">
                                        <div class="card border m-b-30">
                                            <div class="card-header">
                                                <h5 class="mb-0">{{ $salon->libelle }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <p>Date : {{ $salon->dateSalon }}</p>
                                                <p>Heure : {{ $salon->heureSalon.' a '.$salon->heureFinSalon }}</p>
                                                <p>{{ $salon->description }}</p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-round btn-success-rgba mb-1"><i class="feather icon-edit-2"></i></button>
                                                    <button type="button" class="btn btn-round btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                    <a href="{{ route("salons.show", $salon->id) }}" class="btn btn-primary-rgba font-16 mb-0">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    <!-- Start col -->
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleStandardModal" tabindex="-1" role="dialog" aria-labelledby="exampleStandardModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleStandardModalLabel">Création d'un salon</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form method="post" action="{{ route("salons.store") }}">
                                            <div class="modal-body">
                                                @csrf
                                                <input type="hidden" name="structure_id" value="{{ $structure->id }}"/>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputCity">Nom</label>
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
                    <!-- End col -->
                    </div>
                </div>
                <!-- My Addresses End -->
                <!-- My Notifications Start -->
                <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Notifications</h5>                                       
                        </div>
                        <div class="card-body">
                            <div class="ecom-notification-box">
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-success-inverse"><i class="feather icon-check"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Payment Success !!!</h5>
                                            <p class="my-3">We have received your payment toward ad Account : 9876543210. Your Ad is Running.</p>
                                            <p><span class="badge badge-danger-inverse">INFO</span><span class="badge badge-info-inverse">STATUS</span><span class="timing">Today, 09:39 PM</span></p>                            
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-calendar"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Nobita Applied for Leave.</h5>
                                            <p class="my-3">Nobita applied for leave due to personal reasons on 22nd Feb.</p>
                                            <p><span class="badge badge-success">APPROVE</span><span class="badge badge-danger">REJECT</span><span class="timing">Yesterday, 05:25 PM</span></p>                            
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-danger-inverse"><i class="feather icon-alert-triangle"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Alert</h5>
                                            <p class="my-3">There has been new Log in fron your account at Melbourne. Mark it safe or report.</p>
                                            <p><i class="feather icon-check text-success mr-3"></i><a href="#" class="mr-2">Report Now</a><span class="timing">5 Jan 2019, 02:13 PM</span></p>                            
                                        </div>
                                    </li>
                                    <li class="media">
                                        <span class="mr-3 action-icon badge badge-warning-inverse"><i class="feather icon-award"></i></span>
                                        <div class="media-body">
                                            <h5 class="action-title">Congratulations !!!</h5>
                                            <p class="my-3">Your role in the organization has been changed from Editor to Chief Strategist.</p>
                                            <p><span class="badge badge-danger-inverse">ACTIVITY</span><span class="timing">10 Jan 2019, 08:49 PM</span></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Notifications End -->
                <!-- My Profile Start -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Création de produit</h5>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="post" action="{{ route('produits.store') }}">
                                @csrf
                                <input type="hidden" name="structure_id" value="{{ $structure->id }}"/>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Nom</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="useremail">Prix</label>
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="usermobile">Description</label>
                                        <textarea class="form-control" name="description" id="" cols="20" rows="5" placeholder="Description..."></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="useremail">Photo</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary-rgba font-16"><i class="feather icon-save mr-2"></i>Enregistrer</button>
                            </form>
                        </div>
                    </div>
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Mes produits</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($produits as $produit)
                                <div class="col-lg-12 col-xl-6">
                                    <div class="address-box">
                                        <div class="card border m-b-30">
                                            <div class="card-header">
                                                <h5 class="mb-0">{{ $produit->name }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-7"><p>{{ $produit->description }}</p></div>
                                                    <div class="col-md-3"><img src="{{ asset("assets/images/ui-images/image-circle.jpg") }}" alt="Rounded Image" class="rounded-circle"></div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="button-list">
                                                    <button type="button" class="btn btn-round btn-success-rgba mb-1"><i class="feather icon-edit-2"></i></button>
                                                    <button type="button" class="btn btn-round btn-danger-rgba mb-1"><i class="feather icon-trash"></i></button>
                                                    <a href="{{ route("produits.show", $produit->id) }}" class="btn btn-primary-rgba font-16 mb-0">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Profile End -->
                <!-- My Logout Start -->
                <div class="tab-pane fade" id="v-pills-logout" role="tabpanel" aria-labelledby="v-pills-logout-tab">
                    <div class="card m-b-30">
                        <div class="card-header">                                
                            <h5 class="card-title mb-0">Logout</h5>                                       
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-4">
                                    <div class="logout-content text-center my-5">
                                        <img src="assets/images/ecommerce/logout.svg" class="img-fluid mb-5" alt="logout">
                                        <h2 class="text-success">Logout ?</h2>
                                        <p class="my-4">Are you sure to want to Log out? You will miss your instant checkout deal.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-danger font-16"><i class="feather icon-check mr-2"></i>Yes, I'm sure</button>
                                            <button type="button" class="btn btn-success-rgba font-16"><i class="feather icon-x mr-2"></i>Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- My Logout End -->                            
            </div>                        
        </div>
        <!-- End col -->
    </div>
    <!-- End row -->                  
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- eCommerce My Account Page js -->
<script src="{{ asset('assets/js/custom/custom-ecommerce-myaccount.js') }}"></script>
@endsection 