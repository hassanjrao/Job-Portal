<!doctype html>
<html lang="{{ app()->getLocale() }}" {{ app()->getLocale() == 'ar' ? 'dir=rtl' : '' }}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title', 'Home')</title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="@yield('meta_title')">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="@yield('meta_property')" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:image" content="@yield('meta_image')">

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
            background: #30B0D0;
            border: 1px solid white;
            color: white;
        }

        .bg-custom-primary {
            background: #30B0D0 !important;
        }

        .text-custom-primary {
            color: #30B0D0;
        }


        .job-card-image {
            width: 100px;
            height: 100px;
        }


        @media (max-width: 768px) {
            .job-card-image {
                width: 100px;
                height: 100px;
            }
        }

        @media (max-width: 576px) {
            .job-card-image {
                width: 100px;
                height: 100px;
            }

        }

        @media (max-width: 400px) {
            .job-card-image {
                width: 160px;
                height: 126px;
            }


        }

        @media (max-width: 300px) {
            .job-card-image {
                width: 160px;
                height: 126px;
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

            <!-- END Navigation -->



            @yield('content')
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
            <div class="content py-3">
                <div class="row fs-sm justify-content-between">
                    <div class="col-sm-4 order-sm-2 py-1 d-flex justify-content-between">
                        <a class="fw-semibold" href="{{ route('home.contact-us') }}">{{ __('Contact Us') }}</a>

                        <a class="fw-semibold" href="{{ route('home.contact-us') }}">{{ __('About Us') }}</a>

                        <select onchange="langChanged(this)">
                            @if (app()->getLocale() == 'ar')
                                <option value="ar" selected>العربية</option>
                                <option value="en">English</option>
                            @else
                                <option value="ar">العربية</option>
                                <option value="en" selected>English</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="{{ route('home') }}" target="_blank">{{ config('app.name') }}</a>
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
        function langChanged(e) {
            window.location.href = "{{ route('lang.change') }}" + "?lang=" + e.value;
        }
    </script>

    @yield('js_after')


</body>

</html>
