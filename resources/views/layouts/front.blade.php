<!doctype html>
<html lang="{{ app()->getLocale() }}" {{ app()->getLocale() == 'ar' ? 'dir=rtl' : '' }}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title', 'Home')</title>

    <meta name="description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.css') }}">

    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">

    <style>
        .btn-custom-primary {
            background: #4FA0BA;
            border: 1px solid white;
            color: white;
        }

        .bg-custom-primary {
            background: #4FA0BA !important;
        }

        .text-custom-primary {
            color: #4FA0BA;
        }

        @media (max-width: 768px) {
            .job-card-image {
                width: 11rem !important;
            }
        }

        @media (min-width: 768px) {
            .job-card-image {
                width: 7.1rem !important;
            }
        }

        .custom-image {
            max-width: 100%;
            height: auto;
        }
    </style>


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('css/themes/amethyst.css') }}"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
        Available classes for #page-container:

    GENERIC

        'remember-theme'                            Remembers active color theme between pages using localStorage (when set through color theme helper Template._uiHandleTheme())

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

    HEADER STYLE

        ''                                          Light themed Header
        'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

    DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container" class="page-header-light main-content-boxed">




        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">


            <!-- Navigation -->
            <div class="bg-primary-darker">
                <div class="content py-3">
                    <!-- Toggle Main Navigation -->
                    {{-- <div class="d-lg-none">
                        <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
                        <button type="button"
                            class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center"
                            data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                            {{ __('Menu') }}
                            <i class="fa fa-bars"></i>
                        </button>
                    </div> --}}
                    <!-- END Toggle Main Navigation -->

                    <!-- Main Navigation -->
                    <div id="main-navigation" class=" d-lg-block mt-2 mt-lg-0">
                        <ul class="nav-main  nav-main-horizontal nav-main-hover">
                            <li class="nav-main-item">

                                    {{-- <img src="{{ asset('logo/main_logo.png') }}" alt="Logo"> --}}
                                    <select class="nav-main-link" onchange="langChanged(this)" class="form-select">
                                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                                            {{ __('English') }}</option>
                                        <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>
                                            {{ __('Arabic') }}
                                        </option>
                                    </select>

                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link " href="bd_dashboard.html">
                                    {{-- <img src="{{ asset('logo/main_logo.png') }}" alt="Logo"> --}}
                                    {{ date('M d, Y') }}
                                </a>
                            </li>

                            <li class="nav-main-item ms-lg-auto">
                                <a class="nav-main-link " href="{{ route("home") }}">
                                    {{ __('Home') }}
                                </a>

                            </li>
                            <li class="nav-main-item ">
                                <a class="nav-main-link " href="{{ route("home.about-us") }}">
                                    {{ __('About Us') }}
                                </a>

                            </li>
                            <li class="nav-main-item ">
                                <a class="nav-main-link " href="{{ route("home.about-us") }}">
                                    {{ __('Contact Us') }}
                                </a>

                            </li>

                            <li class="nav-main-item">
                                {{-- social media links --}}
                                <div class=" d-flex justify-content-between align-items-center mt-2">

                                    <a class="" href="#">
                                        <i class="fab fa-facebook"></i>
                                    </a>

                                    <a class="" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>

                                    <a class="ml-4" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>





                            </li>


                        </ul>
                    </div>
                    <!-- END Main Navigation -->
                </div>
            </div>
            <!-- END Navigation -->

            <div class="bg-custom-primary">
                <div class="content content-full">


                    <div class="content-header p-5">
                        <div class="row align-items-center justify-content-center ">

                            <div class="col-lg-6">

                                <a class="fw-semibold fs-5 tracking-wider text-white me-3" href="{{ route("home") }}">
                                    <img src="{{ asset('logo/main_logo.png') }}" alt="Logo" class="img-fluid">
                                </a>


                            </div>
                        </div>

                    </div>

                    {{-- </div> --}}



                </div>
            </div>


            @yield('content')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        {{ __('Design & Developed by') }} <a class="fw-semibold"
                            href="https://fiverr.com/hassanjavaidrao" target="_blank">{{ __('Hassan Javaid') }}</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/AVD6j"
                            target="_blank">{{ config('app.name') }}</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
            OneUI JS

            Core libraries and functionality
            webpack is putting everything together at assets/_js/main/app.js
        -->

    <script src="{{ asset('js/oneui.app.js') }}"></script>

    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        One.helpersOnLoad(['jq-select2']);
    </script>

<script>
    function langChanged(e){
        window.location.href = "{{ route('lang.change') }}" + "?lang=" + e.value;
    }
</script>

    @yield('js_after')


</body>

</html>
