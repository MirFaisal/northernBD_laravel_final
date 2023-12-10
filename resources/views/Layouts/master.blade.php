<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Northern Engineering BD</title>
        {{-- favicon --}}
        <link
            rel="shortcut icon"
            href="{{ asset('img/favicon.png') }}"
            type="image/x-icon"
        />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.css"
            rel="stylesheet"
        /> --}}
        <!-- Google tag (gtag.js) -->
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-4DJ6SSDSM5"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());

            gtag("config", "G-4DJ6SSDSM5");
        </script>
        {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    </head>
    <body class="body">
        <!-- Preloader -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader"><span></span></div>
            </div>
        </div>
        <!-- Progress scroll totop -->
        <div class="progress-wrap cursor-pointer">
            <svg
                class="progress-circle svg-content"
                width="100%"
                height="100%"
                viewBox="-1 -1 102 102"
            >
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- navbar start-->
        <x-navbar> </x-navbar>
        <!-- navbar end -->
        <main>@yield('content')</main>

        <hr class="line-vr-section" />
        {{-- top footer banner start --}}
        <x-top-footer-banner></x-top-footer-banner>
        {{-- top footer banner end --}}

        {{-- footer start --}}
        <x-footer></x-footer>
        {{-- footer end --}}
        <!-- jquares -->
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/jquery.isotope.v3.0.2.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scrollIt.min.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('js/YouTubePopUp.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>