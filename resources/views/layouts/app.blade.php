<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      @yield('title', 'EPORT SOLUTIONS LIMITED')
    </title>
    <link
      rel="shortcut icon"
      href="{{ asset('assets/images/favicon.png') }}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('src/css/tailwind.css') }}" />

    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
    @yield('styles')
  </head>

  <body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('scripts')
  </body>
</html>
