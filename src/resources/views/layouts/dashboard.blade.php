<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elisyam - Dashboard</title>
    <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/dashboard.css') }}"/>
</head>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="/images/logo-new.png" alt="logo" class="loader-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page" id="dashboard">
    <!-- Begin Header -->
    <header class="header">
        <nav class="navbar fixed-top">
            <!-- Begin Topbar -->
            <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                <!-- Begin Logo -->
                <div class="navbar-header">
                    <a href="db-default.html" class="navbar-brand">
                        <div class="brand-image brand-big">
                            <img src="/images/logo-new.png" alt="logo" class="logo-big">
                        </div>
                        <div class="brand-image brand-small">
                            <img src="/images/logo-new.png" alt="logo" class="logo-small">
                        </div>
                    </a>
                    <!-- Toggle Button -->
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                    <!-- End Toggle -->
                </div>
                <!-- End Logo -->
                <!-- Begin Navbar Menu -->
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                    <!-- Search -->
                    <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="la la-search"></i></a></li>
                    <!-- End Search -->
                    <!-- Begin Notifications -->
                    <li class="nav-item dropdown"><a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="la la-bell animated infinite swing"></i><span class="badge-pulse"></span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu notification">
                            <li>
                                <div class="notifications-header">
                                    <div class="title">Notifications (4)</div>
                                    <div class="notifications-overlay"></div>
                                    <img src="assets/img/notifications/01.jpg" alt="..." class="img-fluid">
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-user"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            New user registered
                                        </div>
                                        <span class="date">2 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-calendar-check-o"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            New event added
                                        </div>
                                        <span class="date">7 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-history"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            Server rebooted
                                        </div>
                                        <span class="date">7 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="message-icon">
                                        <i class="la la-twitter"></i>
                                    </div>
                                    <div class="message-body">
                                        <div class="message-body-heading">
                                            You have 3 new followers
                                        </div>
                                        <span class="date">10 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Notifications -->
                    <!-- User -->
                    <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="assets/img/avatar/avatar-01.jpg" alt="..." class="avatar rounded-circle"></a>
                        <ul aria-labelledby="user" class="user-size dropdown-menu">
                            <li class="welcome">
                                <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                <img src="assets/img/avatar/avatar-01.jpg" alt="..." class="rounded-circle">
                            </li>
                            <li>
                                <a href="pages-profile.html" class="dropdown-item">
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="app-mail.html" class="dropdown-item">
                                    Messages
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item no-padding-bottom">
                                    Settings
                                </a>
                            </li>
                            <li class="separator"></li>
                            <li>
                                <a href="pages-faq.html" class="dropdown-item no-padding-top">
                                    Faq
                                </a>
                            </li>
                            <li><a rel="nofollow" href="pages-login.html" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a></li>
                        </ul>
                    </li>
                    <!-- End User -->
                    <!-- Begin Quick Actions -->
                    <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li>
                    <!-- End Quick Actions -->
                </ul>
                <!-- End Navbar Menu -->
            </div>
            <!-- End Topbar -->
        </nav>
    </header>
    <!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        <div class="default-sidebar">
            <!-- Begin Side Navbar -->
            <nav class="side-navbar box-scroll sidebar-scroll">
                <!-- Begin Main Navigation -->
                <ul class="list-unstyled">
                    <li class="active"><a href="#dropdown-db" aria-expanded="true" data-toggle="collapse"><i class="la la-columns"></i><span>Dashboard</span></a>
                        <ul id="dropdown-db" class="collapse list-unstyled show pt-0">
                            <li><a class="active" href="db-default.html">Default</a></li>
                            <li><a href="db-clean.html">Clean</a></li>
                            <li><a href="db-compact.html">Compact</a></li>
                            <li><a href="db-modern.html">Modern</a></li>
                            <li><a href="db-social.html">Social</a></li>
                            <li><a href="db-smarthome.html">Smarthome</a></li>
                            <li><a href="db-all.html">All</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-app" aria-expanded="false" data-toggle="collapse"><i class="la la-puzzle-piece"></i><span>Applications</span></a>
                        <ul id="dropdown-app" class="collapse list-unstyled pt-0">
                            <li><a href="app-calendar.html">Calendar</a></li>
                            <li><a href="app-chat.html">Chat</a></li>
                            <li><a href="app-mail.html">Mail</a></li>
                            <li><a href="app-contact.html">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="components-widgets.html"><i class="la la-spinner"></i><span>Widgets</span></a></li>
                </ul>
                <span class="heading">Components</span>
                <ul class="list-unstyled">
                    <li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i class="la la-share-alt"></i><span>UI Elements</span></a>
                        <ul id="dropdown-ui" class="collapse list-unstyled pt-0">
                            <li><a href="components-buttons.html">Buttons</a></li>
                            <li><a href="components-alerts.html">Alerts</a></li>
                            <li><a href="components-modal.html">Modal</a></li>
                            <li><a href="components-notifications.html">Noty</a></li>
                            <li><a href="components-timeline.html">Timeline</a></li>
                            <li><a href="components-progress.html">Progress</a></li>
                            <li><a href="components-tabs.html">Tabs</a></li>
                            <li><a href="components-charts.html">Chart Js</a></li>
                            <li><a href="components-accordion.html">Accordion</a></li>
                            <li><a href="components-popover.html">Popover</a></li>
                            <li><a href="components-tooltip.html">Tooltip</a></li>
                            <li><a href="components-scrollable.html">Scrollable</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-icons" aria-expanded="false" data-toggle="collapse"><i class="la la-font"></i><span>Icons</span></a>
                        <ul id="dropdown-icons" class="collapse list-unstyled pt-0">
                            <li><a href="icons-lineawesome.html">Line Awesome</a></li>
                            <li><a href="icons-themify.html">Themify</a></li>
                            <li><a href="icons-ionicons.html">Ionicons</a></li>
                            <li><a href="icons-meteocons.html">Meteocons</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-forms" aria-expanded="false" data-toggle="collapse"><i class="la la-list-alt"></i><span>Forms</span></a>
                        <ul id="dropdown-forms" class="collapse list-unstyled pt-0">
                            <li><a href="forms-basic.html">Form Basic</a></li>
                            <li><a href="forms-validation.html">Form Validation</a></li>
                            <li><a href="forms-wizard.html">Form Wizard</a></li>
                            <li><a href="forms-select.html">Bootstrap Select</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-tables" aria-expanded="false" data-toggle="collapse"><i class="la la-th-large"></i><span>Tables</span></a>
                        <ul id="dropdown-tables" class="collapse list-unstyled pt-0">
                            <li><a href="tables-basic.html">Basic</a></li>
                            <li><a href="tables-datatables.html">Datatables</a></li>
                            <li><a href="tables-tabledit.html">Tabledit</a></li>
                        </ul>
                    </li>
                    <li><a href="maps-leaflet.html"><i class="la la-map"></i><span>Maps</span></a></li>
                </ul>
                <span class="heading">Pages</span>
                <ul class="list-unstyled">
                    <li><a href="#dropdown-authentication" aria-expanded="false" data-toggle="collapse"><i class="la la-user"></i><span>Authentication</span></a>
                        <ul id="dropdown-authentication" class="collapse list-unstyled pt-0">
                            <li><a href="pages-login.html">Login</a></li>
                            <li><a href="pages-login-02.html">Login 02</a></li>
                            <li><a href="pages-register.html">Register</a></li>
                            <li><a href="pages-forgot-password.html">Forgot Password</a></li>
                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                            <li><a href="pages-mail-confirm.html">Mail Confirmation</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-generic" aria-expanded="false" data-toggle="collapse"><i class="la la-file-text"></i><span>Generic</span></a>
                        <ul id="dropdown-generic" class="collapse list-unstyled pt-0">
                            <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                            <li><a href="pages-profile.html">Profile</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-search.html">Search</a></li>
                            <li><a href="pages-faq.html">FAQ</a></li>
                            <li><a href="pages-blank.html">Blank</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-social" aria-expanded="false" data-toggle="collapse"><i class="la la-comments"></i><span>Social</span></a>
                        <ul id="dropdown-social" class="collapse list-unstyled pt-0">
                            <li><a href="pages-newsfeed.html">Newsfeed</a></li>
                            <li><a href="pages-about.html">About</a></li>
                            <li><a href="pages-events.html">Events</a></li>
                            <li><a href="pages-friends.html">Friends</a></li>
                            <li><a href="pages-groups.html">Groups</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-email" aria-expanded="false" data-toggle="collapse"><i class="la la-at"></i><span>Email</span></a>
                        <ul id="dropdown-email" class="collapse list-unstyled pt-0">
                            <li><a href="email-welcome.html">Welcome</a></li>
                            <li><a href="email-password.html">Reset Password</a></li>
                            <li><a href="email-order.html">Order Confirmation</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-pricing" aria-expanded="false" data-toggle="collapse"><i class="la la-usd"></i><span>Pricing</span></a>
                        <ul id="dropdown-pricing" class="collapse list-unstyled pt-0">
                            <li><a href="pages-pricing-tables-01.html">Style 01</a></li>
                            <li><a href="pages-pricing-tables-02.html">Style 02</a></li>
                        </ul>
                    </li>
                    <li><a href="#dropdown-error" aria-expanded="false" data-toggle="collapse"><i class="la la-exclamation-triangle"></i><span>Errors</span></a>
                        <ul id="dropdown-error" class="collapse list-unstyled pt-0">
                            <li><a href="pages-404-01.html">Style 01</a></li>
                            <li><a href="pages-404-02.html">Style 02</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End Main Navigation -->
            </nav>
            <!-- End Side Navbar -->
        </div>
        <!-- End Left Sidebar -->
        <div class="content-inner">

            @yield('content')

            <!-- End Container -->
            <!-- Begin Page Footer-->
            <footer class="main-footer">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                        <p class="text-gradient-02">Design By Dmitry Kuchura</p>
                    </div>
                </div>
            </footer>
            <!-- End Page Footer -->
            <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Page Content -->
</div>

<script src="{{ asset('/js/custom.js') }}"></script>
<script src="{{ asset('/js/dashboard.js') }}"></script>
</body>
</html>