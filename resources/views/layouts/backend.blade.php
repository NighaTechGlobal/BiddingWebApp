<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>getbid.in - Tender & Auction Portal</title>

    <meta name="description"
          content="getbid.in - Tender & Auction Portal">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('/')}}/logo.png">
    <link rel="icon" sizes="192x192" type="image/png" href="{{asset('/')}}/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}/logo.png">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('css/dashmix.css') }}">

    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ mix('css/themes/xwork.css') }}"> -->
@yield('css_after')

<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>

<body>
<!-- Page Container -->
<!--
  Available classes for #page-container:

  GENERIC

    'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                - Theme helper buttons [data-toggle="theme"],
                                                - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                - ..and/or Dashmix.layout('dark_mode_[on/off/toggle]')

  SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


  FOOTER

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

  HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

  DARK MODE

    'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
-->
<div id="page-container"
     class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="bg-image" style="background-image: url('{{ asset('media/various/bg_side_overlay_header.jpg') }}');">
            <div class="bg-primary-op">
                <div class="content-header">
                    <!-- User Avatar -->
                    <a class="img-link me-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar48" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ms-2">
                        <a class="text-white fw-semibold" href="javascript:void(0)">George Taylor</a>
                        <div class="text-white-75 fs-sm">Full Stack Developer</div>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ms-auto text-white" href="javascript:void(0)" data-toggle="layout"
                       data-action="side_overlay_close">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <div class="block pull-x mb-0">
                <!-- Color Themes -->
                <!-- Toggle Themes functionality initialized in Template._uiHandleTheme() -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Color Themes</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-default" data-toggle="theme"
                               data-theme="default" href="#">
                                Default
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xwork" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xwork.css') }}" href="#">
                                xWork
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xmodern" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xmodern.css') }}" href="#">
                                xModern
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xeco" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xeco.css') }}" href="#">
                                xEco
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xsmooth" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xsmooth.css') }}" href="#">
                                xSmooth
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xinspire" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xinspire.css') }}" href="#">
                                xInspire
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xdream" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xdream.css') }}" href="#">
                                xDream
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xpro" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xpro.css') }}" href="#">
                                xPro
                            </a>
                        </div>
                        <div class="col-4 mb-1">
                            <a class="d-block py-3 text-white fs-sm fw-semibold bg-xplay" data-toggle="theme"
                               data-theme="{{ mix('/css/themes/xplay.css') }}" href="#">
                                xPlay
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Color Themes -->

                <!-- Sidebar -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Sidebar</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="sidebar_style_dark" href="javascript:void(0)">Dark</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="sidebar_style_light" href="javascript:void(0)">Light</a>
                        </div>
                    </div>
                </div>
                <!-- END Sidebar -->

                <!-- Header -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Header</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center mb-2">
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_style_dark" href="javascript:void(0)">Dark</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_style_light" href="javascript:void(0)">Light</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_mode_fixed" href="javascript:void(0)">Fixed</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="header_mode_static" href="javascript:void(0)">Static</a>
                        </div>
                    </div>
                </div>
                <!-- END Header -->

                <!-- Content -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Content</span>
                </div>
                <div class="block-content block-content-full">
                    <div class="row g-sm text-center">
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="content_layout_boxed" href="javascript:void(0)">Boxed</a>
                        </div>
                        <div class="col-6 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="content_layout_narrow" href="javascript:void(0)">Narrow</a>
                        </div>
                        <div class="col-12 mb-1">
                            <a class="d-block py-3 bg-body-dark fw-semibold text-dark" data-toggle="layout"
                               data-action="content_layout_full_width" href="javascript:void(0)">Full Width</a>
                        </div>
                    </div>
                </div>
                <!-- END Content -->
            </div>
            <div class="block pull-x mb-0">
                <!-- Content -->
                <div class="block-content block-content-sm block-content-full bg-body">
                    <span class="text-uppercase fs-sm fw-bold">Heading</span>
                </div>
                <div class="block-content">
                    <p>
                        Content..
                    </p>
                </div>
                <!-- END Content -->
            </div>
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
      Sidebar Mini Mode - Display Helper classes

      Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
      Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
          If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

      Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
      Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
      Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="/">
            <span class="smini-visible">
              D<span class="opacity-75">x</span>
            </span>
                    {{--                    <span class="smini-hidden">--}}
                    {{--              Dash<span class="opacity-75">mix</span>--}}
                    <img src="{{url('logo.png')}}">
                    {{--            </span>--}}
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
                {{--                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"--}}
                {{--                            data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on"--}}
                {{--                            onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');">--}}
                {{--                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>--}}
                {{--                    </button>--}}
                <!-- END Toggle Sidebar Style -->

                    <!-- Dark Mode -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                {{--                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="class-toggle"--}}
                {{--                            data-target="#dark-mode-toggler" data-class="far fa"--}}
                {{--                            onclick="Dashmix.layout('dark_mode_toggle');">--}}
                {{--                        <i class="far fa-moon" id="dark-mode-toggler"></i>--}}
                {{--                    </button>--}}
                <!-- END Dark Mode -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link{{ request()->is('home') ? ' active' : '' }}" href="{{url('home')}}">
                            <i class="nav-main-link-icon fa fa-location-arrow"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                            {{--                            <span class="nav-main-link-badge badge rounded-pill bg-primary">5</span>--}}
                        </a>
                    </li>
                    {{--                    <li class="nav-main-heading">Various</li>--}}
                    {{--                    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">--}}
                    {{--                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"--}}
                    {{--                           aria-expanded="true" href="#">--}}
                    {{--                            <i class="nav-main-link-icon fa fa-lightbulb"></i>--}}
                    {{--                            <span class="nav-main-link-name">Examples</span>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav-main-submenu">--}}
                    {{--                            <li class="nav-main-item">--}}
                    {{--                                <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}"--}}
                    {{--                                   href="/pages/datatables">--}}
                    {{--                                    <span class="nav-main-link-name">DataTables</span>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-main-item">--}}
                    {{--                                <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}"--}}
                    {{--                                   href="/pages/slick">--}}
                    {{--                                    <span class="nav-main-link-name">Slick Slider</span>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-main-item">--}}
                    {{--                                <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}"--}}
                    {{--                                   href="/pages/blank">--}}
                    {{--                                    <span class="nav-main-link-name">Blank</span>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-main-heading">More</li>--}}
                    {{--                    <li class="nav-main-item">--}}
                    {{--                        <a class="nav-main-link" href="/">--}}
                    {{--                            <i class="nav-main-link-icon fa fa-globe"></i>--}}
                    {{--                            <span class="nav-main-link-name">Landing</span>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}

                    @if(!empty(auth()->user()) )
                        @if(auth()->user()->aadhaar_verify_status == 1 || auth()->user()->gst_verify_status == 1)
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ url('/tenders') }}">
                                    <i class="nav-main-link-icon fa fa-globe"></i>
                                    <span class="nav-main-link-name"> Post Tenders</span>
                                </a>
                            </li>

                        @endif
                    @endif

                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="space-x-1">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{--                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">--}}
            {{--                    <i class="fa fa-fw opacity-50 fa-search"></i> <span--}}
            {{--                        class="ms-1 d-none d-sm-inline-block">Search</span>--}}
            {{--                </button>--}}
            <!-- END Open Search Section -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="space-x-1">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span
                            class="d-none d-sm-inline-block">{{!empty(auth()->user()->name) ? auth()->user()->name : ''}}</span>
                        <i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                        {{--                            <a class="dropdown-item" href="javascript:void(0)">--}}
                        {{--                                <i class="far fa-fw fa-user me-1"></i> Profile--}}
                        {{--                            </a>--}}
                        {{--                            <a class="dropdown-item d-flex align-items-center justify-content-between"--}}
                        {{--                               href="javascript:void(0)">--}}
                        {{--                                <span><i class="far fa-fw fa-envelope me-1"></i> Inbox</span>--}}
                        {{--                                <span class="badge bg-primary rounded-pill">3</span>--}}
                        {{--                            </a>--}}
                        {{--                            <a class="dropdown-item" href="javascript:void(0)">--}}
                        {{--                                <i class="far fa-fw fa-file-alt me-1"></i> Invoices--}}
                        {{--                            </a>--}}
                        {{--                            <div role="separator" class="dropdown-divider"></div>--}}

                        <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        {{--                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout"--}}
                        {{--                               data-action="side_overlay_toggle">--}}
                        {{--                                <i class="far fa-fw fa-building me-1"></i> Settings--}}
                        {{--                            </a>--}}
                        <!-- END Side Overlay  href="javascript:void(0)" -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">App was updated to v5.6!</div>
                                        <div class="text-muted">3 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-user-plus text-info"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New Subscriber was added! You now have 2580!
                                        </div>
                                        <div class="text-muted">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">Server backup failed to complete!</div>
                                        <div class="text-muted">30 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">You are running out of space. Please consider
                                            upgrading your plan.
                                        </div>
                                        <div class="text-muted">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex text-dark py-2" href="javascript:void(0)">
                                    <div class="flex-shrink-0 mx-3">
                                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1 fs-sm pe-2">
                                        <div class="fw-semibold">New Sale! + $30</div>
                                        <div class="text-muted">2 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-alt-primary w-100 text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye opacity-50 me-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
{{--                <button type="button" class="btn btn-alt-secondary" data-toggle="layout"--}}
{{--                        data-action="side_overlay_toggle">--}}
{{--                    <i class="far fa-fw fa-list-alt"></i>--}}
{{--                </button>--}}
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header bg-header-dark">
            <div class="content-header">
                <form class="w-100" action="/dashboard" method="POST">
                    @csrf
                    <div class="input-group">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-alt-primary" data-toggle="layout"
                                data-action="header_search_off">
                            <i class="fa fa-fw fa-times-circle"></i>
                        </button>
                        <input type="text" class="form-control border-0" placeholder="Search or hit ESC.."
                               id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-header-dark">
            <div class="bg-white-10">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                                                                               href="#"
                                                                               target="_blank">getbid.in</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="#" target="_blank">getbid.in</a> &copy;
                    <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Dashmix Core JS -->
<script src="{{ mix('js/dashmix.app.js') }}"></script>

<!-- Laravel Original JS -->
<!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->

@yield('js_after')

<!-- jQuery (required for BS Notify plugin) -->
<script src="{{asset('/')}}assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="{{asset('/')}}assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Page JS Helpers (BS Notify Plugin) -->
<script>
    Dashmix.helpersOnLoad(['jq-notify']);

    @if(session('success'))
    Dashmix.helpers('jq-notify', {type: 'info', icon: 'fa fa-info-circle me-1', message: '{{ session("success") }}' });
    @endif

    @if(session('error'))
    Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: '{{ session("error") }}' });
    @endif
</script>

<script>
    $(document).ready(function () {
        $('#aadhaar-verify-btn').on('click', function () {
            const aadhaar = $('#aadhaar').val();

            if (aadhaar.length === 12) {
                $.post('/verify-aadhaar', {aadhaar: aadhaar, _token: '{{ csrf_token() }}'}, function (data) {
                    // alert(data.message);
                    Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: data.message });
                    $('#otp-section').show();
                }).fail(function (error) {
                    // alert(error.responseJSON.message);
                    Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: error.responseJSON.message });
                });
            } else {
                // alert('Please enter a valid 12-digit Aadhaar number.');
                Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: 'Please enter a valid 12-digit Aadhaar number.' });
            }
        });

        $('#otp-verify-btn').on('click', function () {
            const otp = $('#otp').val();

            if (otp.length === 6) {
                $.post('/verify-otp', {otp: otp, _token: '{{ csrf_token() }}'}, function (data) {
                    // alert(data.message);
                    Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: data.message });
                    location.reload();
                }).fail(function (error) {
                    // alert(error.responseJSON.message);
                    Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: error.responseJSON.message });
                });
            } else {
                // alert('Please enter a valid 6-digit OTP.');
                Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message:'Please enter a valid 6-digit OTP.' });
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#gst-verify-btn').on('click', function () {
            const gst = $('#gst').val();

            $.post('/verify-gst', {gst: gst, _token: '{{ csrf_token() }}'}, function (data) {
                // alert(data.message);
                Dashmix.helpers('jq-notify', {type: 'info', icon: 'fa fa-info-circle me-1', message: data.message });
                $('.otp-gst-section').show();
            }).fail(function (error) {
                // alert(error.responseJSON.message);

                Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: error.responseJSON.message });
            });
        });

        $('#otp-verify-btn-gst').on('click', function () {
            const otp = $('#otp').val();

            $.post('/verify-gst-otp', {otp: otp, _token: '{{ csrf_token() }}'}, function (data) {
                // alert(data.message);
                Dashmix.helpers('jq-notify', {type: 'info', icon: 'fa fa-info-circle me-1', message: data.message });


                location.reload();
            }).fail(function (error) {
               // alert(error.responseJSON.message);
                Dashmix.helpers('jq-notify', {type: 'danger', icon: 'fa fa-info-circle me-1', message: error.responseJSON.message });
            });
        });
    });
</script>
<script>
    // Define states and their corresponding cities in India
    const indiaStatesCities = {
        "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur", "Tirupati"],
        "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur"],
        "Delhi": ["New Delhi", "Old Delhi", "Dwarka", "Rohini"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama", "Mapusa"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot"],
        "Haryana": ["Gurgaon", "Faridabad", "Ambala", "Hisar"],
        "Karnataka": ["Bengaluru", "Mysuru", "Hubballi", "Mangalore"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Agra", "Varanasi"],
        "West Bengal": ["Kolkata", "Howrah", "Siliguri", "Durgapur"]
        // You can extend this with other states and cities as needed
    };

    // Function to update cities dropdown based on selected state
    function updateCities() {
        const stateDropdown = document.getElementById("state");
        const cityDropdown = document.getElementById("city");
        const selectedState = stateDropdown.value;

        // Clear any previous city options
        cityDropdown.innerHTML = "<option value=''>Select City</option>";

        if (selectedState) {
            const cities = indiaStatesCities[selectedState];
            cities.forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                cityDropdown.appendChild(option);
            });
        }
    }
</script>
</body>

</html>
