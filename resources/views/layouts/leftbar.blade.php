<div class="leftbar">
    <!-- Start Sidebar -->
    <div class="sidebar">
        <!-- Start Logobar -->
        <div class="logobar">
            <a href="{{url('/')}}" class="logo logo-large"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
            <a href="{{url('/')}}" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
        </div>
        <!-- End Logobar -->
        <!-- Start Profilebar -->
        <div class="profilebar text-center">
            <img src="assets/images/users/profile.svg" class="img-fluid" alt="profile">
            <div class="profilename">
              <h5 class="text-white">Shourya Kumar</h5>
              <p>Social Media Strategist</p>
            </div>
            <div class="userbox">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="user"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/images/svg-icon/email.svg" class="img-fluid" alt="email"></a></li>
                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout"></a></li>
                </ul>
              </div>
        </div>
        <!-- End Profilebar -->
        <!-- Start Navigationbar -->
        <div class="navigationbar">
            <ul class="vertical-menu">
                <li class="vertical-header">Main</li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/')}}"><i class="mdi mdi-circle"></i>Social Media</a></li>
                        <li><a href="{{url('/dashboard-ecommerce')}}"><i class="mdi mdi-circle"></i>eCommerce</a></li>
                        <li><a href="{{url('/dashboard-analytics')}}"><i class="mdi mdi-circle"></i>Analytics</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/layouts.svg" class="img-fluid" alt="layouts"><span>Layouts</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="#"><i class="mdi mdi-circle"></i>Light - Vertical</a></li>
                        <li><a href="{{url('/../light-horizontal')}}"><i class="mdi mdi-circle"></i>Light - Horizontal</a></li>
                        <li><a href="{{url('/../dark-vertical')}}"><i class="mdi mdi-circle"></i>Dark - Vertical</a></li>
                        <li><a href="{{url('/../dark-horizontal')}}"><i class="mdi mdi-circle"></i>Dark - Horizontal</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                      <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Apps</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/apps-calender')}}"><i class="mdi mdi-circle"></i>Calender</a></li>
                        <li><a href="{{url('/apps-chat')}}"><i class="mdi mdi-circle"></i>Chat</a></li>
                        <li>
                            <a href="javaScript:void();"><i class="mdi mdi-circle"></i>Email<i class="feather icon-chevron-right pull-right"></i></a>
                            <ul class="vertical-submenu">
                                <li><a href="{{url('/apps-email-inbox')}}"><i class="mdi mdi-circle"></i>Email Inbox</a></li>
                                <li><a href="{{url('/apps-email-open')}}"><i class="mdi mdi-circle"></i>Email Open</a></li>
                                <li><a href="{{url('/apps-email-compose')}}"><i class="mdi mdi-circle"></i>Email Compose</a></li>
                            </ul>
                        </li>
                        <li><a href="{{url('/apps-kanban-board')}}"><i class="mdi mdi-circle"></i>Kanban Board</a></li>
                        <li><a href="{{url('/apps-onboarding-screens')}}"><i class="mdi mdi-circle"></i>Onboarding Screens</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/widgets')}}">
                        <img src="assets/images/svg-icon/widgets.svg" class="img-fluid" alt="widgets"><span>Widgets</span><span class="badge badge-danger pull-right">New</span>
                    </a>
                </li>
                <li class="vertical-header">Components</li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>Basic UI Kits</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/basic-ui-kits-alerts')}}"><i class="mdi mdi-circle"></i>Alerts</a></li>
                        <li><a href="{{url('/basic-ui-kits-badges')}}"><i class="mdi mdi-circle"></i>Badges</a></li>
                        <li><a href="{{url('/basic-ui-kits-buttons')}}"><i class="mdi mdi-circle"></i>Buttons</a></li>
                        <li><a href="{{url('/basic-ui-kits-cards')}}"><i class="mdi mdi-circle"></i>Cards</a></li>
                        <li><a href="{{url('/basic-ui-kits-carousel')}}"><i class="mdi mdi-circle"></i>Carousel</a></li>
                        <li><a href="{{url('/basic-ui-kits-collapse')}}"><i class="mdi mdi-circle"></i>Collapse</a></li>
                        <li><a href="{{url('/basic-ui-kits-dropdowns')}}"><i class="mdi mdi-circle"></i>Dropdowns</a></li>
                        <li><a href="{{url('/basic-ui-kits-embeds')}}"><i class="mdi mdi-circle"></i>Embeds</a></li>
                        <li><a href="{{url('/basic-ui-kits-grids')}}"><i class="mdi mdi-circle"></i>Grids</a></li>
                        <li><a href="{{url('/basic-ui-kits-images')}}"><i class="mdi mdi-circle"></i>Images</a></li>
                        <li><a href="{{url('/basic-ui-kits-media')}}"><i class="mdi mdi-circle"></i>Media</a></li>
                        <li><a href="{{url('/basic-ui-kits-modals')}}"><i class="mdi mdi-circle"></i>Modals</a></li>
                        <li><a href="{{url('/basic-ui-kits-paginations')}}"><i class="mdi mdi-circle"></i>Paginations</a></li>
                        <li><a href="{{url('/basic-ui-kits-popovers')}}"><i class="mdi mdi-circle"></i>Popovers</a></li>
                        <li><a href="{{url('/basic-ui-kits-progressbars')}}"><i class="mdi mdi-circle"></i>Progress Bars</a></li>
                        <li><a href="{{url('/basic-ui-kits-spinners')}}"><i class="mdi mdi-circle"></i>Spinners</a></li>
                        <li><a href="{{url('/basic-ui-kits-tabs')}}"><i class="mdi mdi-circle"></i>Tabs</a></li>
                        <li><a href="{{url('/basic-ui-kits-toasts')}}"><i class="mdi mdi-circle"></i>Toasts</a></li>
                        <li><a href="{{url('/basic-ui-kits-tooltips')}}"><i class="mdi mdi-circle"></i>Tooltips</a></li>
                        <li><a href="{{url('/basic-ui-kits-typography')}}"><i class="mdi mdi-circle"></i>Typography</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/advanced.svg" class="img-fluid" alt="advanced"><span>Advanced UI Kits</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/advanced-ui-kits-image-crop')}}"><i class="mdi mdi-circle"></i>Image Crop</a></li>
                        <li><a href="{{url('/advanced-ui-kits-jquery-confirm')}}"><i class="mdi mdi-circle"></i>jQuery Confirm</a></li>
                        <li><a href="{{url('/advanced-ui-kits-nestable')}}"><i class="mdi mdi-circle"></i>Nestable</a></li>
                        <li><a href="{{url('/advanced-ui-kits-pnotify')}}"><i class="mdi mdi-circle"></i>Pnotify</a></li>
                        <li><a href="{{url('/advanced-ui-kits-range-slider')}}"><i class="mdi mdi-circle"></i>Range Slider</a></li>
                        <li><a href="{{url('/advanced-ui-kits-ratings')}}"><i class="mdi mdi-circle"></i>Ratings</a></li>
                        <li><a href="{{url('/advanced-ui-kits-session-timeout')}}"><i class="mdi mdi-circle"></i>Session Timeout</a></li>
                        <li><a href="{{url('/advanced-ui-kits-sweet-alerts')}}"><i class="mdi mdi-circle"></i>Sweet Alerts</a></li>
                        <li><a href="{{url('/advanced-ui-kits-switchery')}}"><i class="mdi mdi-circle"></i>Switchery</a></li>
                        <li><a href="{{url('/advanced-ui-kits-toolbar')}}"><i class="mdi mdi-circle"></i>Toolbar</a></li>
                        <li><a href="{{url('/advanced-ui-kits-tour')}}"><i class="mdi mdi-circle"></i>Tour</a></li>
                        <li><a href="{{url('/advanced-ui-kits-treeview')}}"><i class="mdi mdi-circle"></i>Tree View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/form_elements.svg" class="img-fluid" alt="form_elements"><span>Forms Elements</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/form-inputs')}}"><i class="mdi mdi-circle"></i>Form Inputs</a></li>
                        <li><a href="{{url('/form-groups')}}"><i class="mdi mdi-circle"></i>Form Groups</a></li>
                        <li><a href="{{url('/form-layouts')}}"><i class="mdi mdi-circle"></i>Form Layouts</a></li>
                        <li><a href="{{url('/form-colorpickers')}}"><i class="mdi mdi-circle"></i>Form Color Pickers</a></li>
                        <li><a href="{{url('/form-datepickers')}}"><i class="mdi mdi-circle"></i>Form Date Pickers</a></li>
                        <li><a href="{{url('/form-editors')}}"><i class="mdi mdi-circle"></i>Form Editors</a></li>
                        <li><a href="{{url('/form-file-uploads')}}"><i class="mdi mdi-circle"></i>Form File Uploads</a></li>
                        <li><a href="{{url('/form-input-mask')}}"><i class="mdi mdi-circle"></i>Form Input Mask</a></li>
                        <li><a href="{{url('/form-maxlength')}}"><i class="mdi mdi-circle"></i>Form MaxLength</a></li>
                        <li><a href="{{url('/form-selects')}}"><i class="mdi mdi-circle"></i>Form Selects</a></li>
                        <li><a href="{{url('/form-touchspin')}}"><i class="mdi mdi-circle"></i>Form Touchspin</a></li>
                        <li><a href="{{url('/form-validations')}}"><i class="mdi mdi-circle"></i>Form Validations</a></li>
                        <li><a href="{{url('/form-wizards')}}"><i class="mdi mdi-circle"></i>Form Wizards</a></li>
                        <li><a href="{{url('/form-xeditable')}}"><i class="mdi mdi-circle"></i>Form X-editable</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/icons.svg" class="img-fluid" alt="icons"><span>Icons</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/icon-theta')}}"><i class="mdi mdi-circle"></i>Theta Icons</a></li>
                        <li><a href="{{url('/icon-dripicons')}}"><i class="mdi mdi-circle"></i>Dripicons</a></li>
                        <li><a href="{{url('/icon-feather')}}"><i class="mdi mdi-circle"></i>Feather</a></li>
                        <li><a href="{{url('/icon-flag')}}"><i class="mdi mdi-circle"></i>Flag</a></li>
                        <li><a href="{{url('/icon-font-awesome')}}"><i class="mdi mdi-circle"></i>Font Awesome</a></li>
                        <li><a href="{{url('/icon-ionicons')}}"><i class="mdi mdi-circle"></i>Ion Icons</a></li>
                        <li><a href="{{url('/icon-line-awesome')}}"><i class="mdi mdi-circle"></i>Line Awesome</a></li>
                        <li><a href="{{url('/icon-material-design')}}"><i class="mdi mdi-circle"></i>Material Design</a></li>
                        <li><a href="{{url('/icon-simple-line')}}"><i class="mdi mdi-circle"></i>Simple Line Icons</a></li>
                        <li><a href="{{url('/icon-socicon')}}"><i class="mdi mdi-circle"></i>Socicon</a></li>
                        <li><a href="{{url('/icon-themify')}}"><i class="mdi mdi-circle"></i>Themify</a></li>
                        <li><a href="{{url('/icon-typicons')}}"><i class="mdi mdi-circle"></i>Typicons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/chart.svg" class="img-fluid" alt="chart"><span>Charts</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/chart-c3')}}"><i class="mdi mdi-circle"></i>C3 Chart</a></li>
                        <li><a href="{{url('/chart-chartistjs')}}"><i class="mdi mdi-circle"></i>Chartist Chart</a></li>
                        <li><a href="{{url('/chart-chartjs')}}"><i class="mdi mdi-circle"></i>Chartjs Chart</a></li>
                        <li><a href="{{url('/chart-flot')}}"><i class="mdi mdi-circle"></i>Flot Chart</a></li>
                        <li><a href="{{url('/chart-knob')}}"><i class="mdi mdi-circle"></i>Knob Chart</a></li>
                        <li><a href="{{url('/chart-morris')}}"><i class="mdi mdi-circle"></i>Morris Chart</a></li>
                        <li><a href="{{url('/chart-piety')}}"><i class="mdi mdi-circle"></i>Piety Chart</a></li>
                        <li><a href="{{url('/chart-sparkline')}}"><i class="mdi mdi-circle"></i>Sparkline Chart</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Tables</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/table-bootstrap')}}"><i class="mdi mdi-circle"></i>Bootstrap Table</a></li>
                        <li><a href="{{url('/table-datatable')}}"><i class="mdi mdi-circle"></i>Data Table</a></li>
                        <li><a href="{{url('/table-editable')}}"><i class="mdi mdi-circle"></i>Editable Table</a></li>
                        <li><a href="{{url('/table-footable')}}"><i class="mdi mdi-circle"></i>Foo Table</a></li>
                        <li><a href="{{url('/table-rwdtable')}}"><i class="mdi mdi-circle"></i>RWD Table</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/maps.svg" class="img-fluid" alt="maps"><span>Maps</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/map-google')}}"><i class="mdi mdi-circle"></i>Google Map</a></li>
                        <li><a href="{{url('/map-vector')}}"><i class="mdi mdi-circle"></i>Vector Map</a></li>
                    </ul>
                </li>
                <li class="vertical-header">Extras</li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/ecommerce.svg" class="img-fluid" alt="ecommerce"><span>eCommerce</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/ecommerce-product-list')}}"><i class="mdi mdi-circle"></i>Product List</a></li>
                        <li><a href="{{url('/ecommerce-product-detail')}}"><i class="mdi mdi-circle"></i>Product Detail</a></li>
                        <li><a href="{{url('/ecommerce-order-list')}}"><i class="mdi mdi-circle"></i>Order List</a></li>
                        <li><a href="{{url('/ecommerce-order-detail')}}"><i class="mdi mdi-circle"></i>Order Detail</a></li>
                        <li><a href="{{url('/ecommerce-shop')}}"><i class="mdi mdi-circle"></i>Shop</a></li>
                        <li><a href="{{url('/ecommerce-single-product')}}"><i class="mdi mdi-circle"></i>Single Product</a></li>
                        <li><a href="{{url('/ecommerce-cart')}}"><i class="mdi mdi-circle"></i>Cart</a></li>
                        <li><a href="{{url('/ecommerce-checkout')}}"><i class="mdi mdi-circle"></i>Checkout</a></li>
                        <li><a href="{{url('/ecommerce-thankyou')}}"><i class="mdi mdi-circle"></i>Thank You</a></li>
                        <li><a href="{{url('/ecommerce-myaccount')}}"><i class="mdi mdi-circle"></i>My Account</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/pages.svg" class="img-fluid" alt="pages"><span>Basic Pages</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/page-starter')}}"><i class="mdi mdi-circle"></i>Starter Page</a></li>
                        <li><a href="{{url('/page-blog')}}"><i class="mdi mdi-circle"></i>Blog</a></li>
                        <li><a href="{{url('/page-faq')}}"><i class="mdi mdi-circle"></i>FAQ</a></li>
                        <li><a href="{{url('/page-gallery')}}"><i class="mdi mdi-circle"></i>Gallery</a></li>
                        <li><a href="{{url('/page-invoice')}}"><i class="mdi mdi-circle"></i>Invoice</a></li>
                        <li><a href="{{url('/page-pricing')}}"><i class="mdi mdi-circle"></i>Pricing</a></li>
                        <li><a href="{{url('/page-timeline')}}"><i class="mdi mdi-circle"></i>Timeline</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/user.svg" class="img-fluid" alt="user"><span>User Pages</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/user-login')}}"><i class="mdi mdi-circle"></i>Login</a></li>
                        <li><a href="{{url('/user-register')}}"><i class="mdi mdi-circle"></i>Register</a></li>
                        <li><a href="{{url('/user-forgotpsw')}}"><i class="mdi mdi-circle"></i>Forgot Password</a></li>
                        <li><a href="{{url('/user-lock-screen')}}"><i class="mdi mdi-circle"></i>Lock Screen</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javaScript:void();">
                        <img src="assets/images/svg-icon/error.svg" class="img-fluid" alt="error"><span>Error Pages</span><i class="feather icon-chevron-right pull-right"></i>
                    </a>
                    <ul class="vertical-submenu">
                        <li><a href="{{url('/error-comingsoon')}}"><i class="mdi mdi-circle"></i>Coming Soon</a></li>
                        <li><a href="{{url('/error-maintenance')}}"><i class="mdi mdi-circle"></i>Maintenance</a></li>
                        <li><a href="{{url('/error-404')}}"><i class="mdi mdi-circle"></i>Error 404</a></li>
                        <li><a href="{{url('/error-500')}}"><i class="mdi mdi-circle"></i>Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Navigationbar -->
    </div>
    <!-- End Sidebar -->
</div>