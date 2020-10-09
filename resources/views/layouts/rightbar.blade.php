<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="mobile-logobar">
                    <a href="{{url('/')}}" class="mobile-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                 </a>
                             </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                    <img src="assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                             </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="logobar">
                                    <a href="{{url('/')}}" class="logo logo-large"><img src="{{ asset("assets/images/logo.svg") }}" class="img-fluid" alt="logo"></a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                          <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                          <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2"><img src="{{ asset("assets/images/svg-icon/search.svg") }}" class="img-fluid" alt="search"></button>
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="notifybar">
                                    <a href="javascript:void(0)" id="infobar-notifications-open" class="infobar-icon">
                                        <img src="{{ asset("assets/images/svg-icon/notifications.svg") }}" class="img-fluid" alt="notifications">
                                        <span class="live-icon"></span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                      <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset("assets/images/users/profile.svg") }}" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                        <div class="dropdown-item">
                                            <div class="profilename">
                                              <h5></h5>
                                              <p>Social Media Strategist</p>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="userbox">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="{{ route("users.show", Auth::id()) }}" class="profile-icon"><img src="{{ asset("assets/images/svg-icon/user.svg") }}" class="img-fluid" alt="user"></a></li>
                                                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{ asset("assets/images/svg-icon/email.svg") }}" class="img-fluid" alt="email"></a></li>
                                                    <li class="list-inline-item">
                                                        <a class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            <img src="{{ asset("assets/images/svg-icon/logout.svg") }}" class="img-fluid" alt="logout">
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item menubar-toggle">
                                <div class="menubar">
                                    <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                        <img src="{{ asset("assets/images/svg-icon/collapse.svg") }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="{{ asset("assets/images/svg-icon/close.svg") }}" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                 </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container-fluid -->
    </div>
    <!-- End Topbar -->
    <!-- Start Navigationbar -->
    <div class="navigationbar">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- Start Horizontal Nav -->
            <nav class="horizontal-nav mobile-navbar fixed-navbar">
                <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="horizontal-menu">
                    <li>
                        <a href="{{ route("home") }}"><img src="{{ asset("assets/images/svg-icon/dashboard.svg") }}" class="img-fluid" alt="dashboard"><span>Accueil</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/layouts.svg") }}" class="img-fluid" alt="layouts"><span>Vente</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route("annonces.index")  }}"><i class="mdi mdi-circle"></i>Annonces</a></li>
                            <li><a href="{{ route("annonces.create")  }}"><i class="mdi mdi-circle"></i>Faire une annonce </a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/apps.svg") }}" class="img-fluid" alt="apps"><span>Achat</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/apps-calender')}}"><i class="mdi mdi-circle"></i>Acheter</a></li>
                            <li><a href="{{url('/apps-chat')}}"><i class="mdi mdi-circle"></i>Vos Commandes</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/pages.svg") }}" class="img-fluid" alt="pages"><span>Salons</span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('salons.index') }}"><i class="mdi mdi-circle"></i>Salons</a>
                            </li>
                            <li>
                                <a href="{{ route('salons.create') }}"><i class="mdi mdi-circle"></i>Creer un salon</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/advanced.svg") }}" class="img-fluid" alt="advanced"><span>Financement</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/advanced-ui-kits-image-crop')}}"><i class="mdi mdi-circle"></i>Image Crop</a></li>
                            <li><a href="{{url('/advanced-ui-kits-jquery-confirm')}}"><i class="mdi mdi-circle"></i>jQuery Confirm</a></li>
                            <li><a href="{{url('/advanced-ui-kits-nestable')}}"><i class="mdi mdi-circle"></i>Nestable</a></li>
                            <li><a href="{{url('/advanced-ui-kits-pnotify')}}"><i class="mdi mdi-circle"></i>Pnotify</a></li>
                            <li><a href="{{url('/advanced-ui-kits-range-slider')}}"><i class="mdi mdi-circle"></i>Range Slider</a></li>
                            <li><a href="{{url('/advanced-ui-kits-ratings')}}"><i class="mdi mdi-circle"></i>Ratings</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/advanced.svg") }}" class="img-fluid" alt="advanced"><span>Validations</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route("comptes.index") }}"><i class="mdi mdi-circle"></i>Comptes</a></li>
                            <li><a href="{{ route("annonces.validate")}}"><i class="mdi mdi-circle"></i>Annonces</a></li>
                        </ul>
                    </li>
                  </ul>
                </div>
            </nav>
            <!-- End Horizontal Nav -->
        </div>
        <!-- End container-fluid -->
    </div>
    <!-- End Navigationbar -->
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">© 2020 SFARIT - All Rights Reserved.</p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>
