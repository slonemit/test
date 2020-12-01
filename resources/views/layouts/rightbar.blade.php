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
                                    <a href="{{url('/')}}" class="logo logo-large"><img src="{{ asset("lona.png") }}" class="img-fluid" alt="logo"></a>
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
                                              <h5>{{ Auth()->user()->personne->nom}}</h5>
                                              <p>Social Media Strategist</p>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="userbox">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="{{ route("users.show", Auth::id()) }}" class="profile-icon"><img src="{{ asset("assets/images/svg-icon/user.svg") }}" class="img-fluid" alt="user"></a></li>
                                                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="{{ asset("assets/images/svg-icon/email.svg") }}" class="img-fluid" alt="email"></a></li>
                                                    <li class="list-inline-item">
                                                        <a class="profile-icon" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
                        <a href="{{ route("annonces.index")  }}"><img src="{{ asset("assets/images/svg-icon/dashboard.svg") }}" class="img-fluid" alt="dashboard"><span>Accueil</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/apps.svg") }}" class="img-fluid" alt="apps"><span>Achats</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/apps-calender')}}"><i class="mdi mdi-circle"></i>Acheter</a></li>
                            <li><a href="{{url('/chats')}}"><i class="mdi mdi-circle"></i>Messages</a></li>
                            <li><a href="{{ route('packpubs.index') }}"><i class="mdi mdi-circle"></i>Publicités</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ route("rdv.index") }}"><img src="{{ asset("assets/images/svg-icon/dashboard.svg") }}" class="img-fluid" alt="dashboard"><span>Rendez-vous</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/pages.svg") }}" class="img-fluid" alt="pages"><span>Opportunites</span></a>
                        <ul class="dropdown-menu">
                            <li >
                                <a href="{{url('/structures')}}" class="mdi mdi-circle" ><span>Rendez-Vous</span></a>
                                <a href="javaScript:void();" class="mdi mdi-circle" data-toggle="dropdown"><span>Publicite</span></a>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/pages.svg") }}" class="img-fluid" alt="pages"><span>Salon</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown" ><i class="mdi mdi-circle"></i>Mes Salons</a>

                            </li>
                            <li>
                                <a href="{{ route('salons.create') }}"><i class="mdi mdi-circle"></i>Creer un salon</a>
                            </li>
                            <li>
                                <a href="{{ route("invitations.index") }}"><i class="mdi mdi-circle"></i>Invitations</a>
                            </li>
                            <li>
                                <a href="{{ route("salons.chats") }}"><i class="mdi mdi-circle"></i>Chats</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route("structures.index") }}"><img src="{{ asset("assets/images/svg-icon/dashboard.svg") }}" class="img-fluid" alt="dashboard"><span>Structures</span></a>
                    </li>
                    @if (Auth::user()->name == 'CCIAM')
                        <li class="dropdown">
                            <a href="javaScript:void();" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset("assets/images/svg-icon/advanced.svg") }}" class="img-fluid" alt="advanced"><span>Validations</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route("comptes.index") }}"><i class="mdi mdi-circle"></i>Comptes</a></li>
                                <li><a href="{{ route("annonces.validate")}}"><i class="mdi mdi-circle"></i>Annonces</a></li>
                            </ul>
                        </li>
                    @endif
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
