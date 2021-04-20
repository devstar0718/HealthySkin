<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nisheskin - Admin Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.svg"/>
{{--    <link rel="icon" sizes="64x64" href="assets/img/favicon.svg">--}}

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ url('/vendors/bundle.css') }}" type="text/css">

    @yield('head')

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('/assets/admin/css/app.css') }}" type="text/css">
</head>
<body @if (trim($__env->yieldContent('bodyClass'))) class="@yield('bodyClass')" @endif>

<!-- begin::preloader-->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- end::preloader -->

<!-- BEGIN: Sidebar Group -->
<div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
        <div class="py-4 text-center" data-backround-image="{{ url('/assets/admin/media/image/image1.jpg') }}">
            <figure class="avatar avatar-lg mb-3 border-0">
                <img src="{{ url('/assets/admin/media/image/user/women_avatar1.jpg') }}" class="rounded-circle" alt="image">
            </figure>
            <a href="/logout" class="d-flex align-items-center justify-content-center text-danger">Sign Out!</a>

        </div>

    </div>
    <!-- END: User Menu -->

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Settings</h6>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                            <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                            <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                        </div>
                    </li>
                    <li class="list-group-item pl-0 pr-0">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Enable report
                                generation.</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Settings -->

</div>
<!-- END: Sidebar Group -->

<!-- begin::main -->
<div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

        <div class="header-left">
            <div class="navigation-toggler">
                <a href="#" data-action="navigation-toggler">
                    <i data-feather="menu"></i>
                </a>
            </div>
            <div class="header-logo">
                <a href="{{ url('/admin') }}">
                    <img class="logo" src="{{ url('/assets/img/logo_webpage.svg') }}" alt="logo" height="60%">
                    <img class="logo-light" src="{{ url('/assets/admin/media/image/logo-light.png') }}" alt="light logo">
                </a>
            </div>
        </div>

        <div class="header-body">
            <div class="header-body-left">

            </div>
            <div class="header-body-right">
                <ul class="navbar-nav">

                    <!-- begin::user menu -->
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                            <span class="mr-2 d-sm-inline d-none">Matej Žnidarič</span>
                            <figure class="avatar avatar-sm">
                                <img src="{{ url('/assets/admin/media/image/user/blank.png') }}" class="rounded-circle"
                                     alt="avatar">
                            </figure>
                        </a>
                    </li>
                    <!-- end::user menu -->

                </ul>

                <!-- begin::mobile header toggler -->
                <ul class="navbar-nav d-flex align-items-center">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i data-feather="arrow-down"></i>
                        </a>
                    </li>
                </ul>
                <!-- end::mobile header toggler -->
            </div>
        </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">

        <!-- begin::navigation -->
        <div class="navigation">
            <div class="navigation-menu-tab">
                <ul>
                    <li>
                        <a href="/admin/product" data-toggle="tooltip" data-placement="right" title="Products">
                            <i data-feather="shopping-cart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/blog" data-toggle="tooltip" data-placement="right" title="Blogs">
                            <i data-feather="pen-tool"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/subscribe" data-toggle="tooltip" data-placement="right" title="Subscribes">
                            <i data-feather="smile"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end::navigation -->

        <div class="content-body">

            <div class="content">

                @yield('content')

            </div>

            <!-- begin::footer -->
{{--            <footer class="content-footer">--}}
{{--                <div>© {{ date('Y') }} Nago - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>--}}
{{--                <div>--}}
{{--                    <nav class="nav">--}}
{{--                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>--}}
{{--                        <a href="#" class="nav-link">Change Log</a>--}}
{{--                        <a href="#" class="nav-link">Get Help</a>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </footer>--}}
            <!-- end::footer -->

        </div>

    </div>

</div>
<!-- end::main -->

<!-- Plugin scripts -->
<script src="{{ url('/vendors/bundle.js') }}"></script>

@yield('script')

<!-- App scripts -->
<script src="{{ url('/assets/admin/js/app.min.js') }}"></script>

</body>
</html>
