<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Privacy Policy | EPORT SOLUTIONS LIMITED</title>
    <link
      rel="shortcut icon"
      href="{{ asset('assets/images/favicon.png') }}"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('src/css/tailwind.css') }}" />

    <!-- ==== WOW JS ==== -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
  </head>

  <body>
    <!-- ====== Navbar Section Start -->
    <div
      class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header"
    >
      <div class="container mx-auto px-4">
        <div class="relative flex items-center justify-between -mx-4">
          <div class="max-w-full px-4 w-60">
            <a href="{{ route('index') }}" class="block w-full py-5 navbar-logo">
              <img
                src="{{ asset('assets/images/logo/logo.svg') }}"
                alt="logo"
                class="w-full dark:hidden"
              />
              <img
                src="{{ asset('assets/images/logo/logo-white.svg') }}"
                alt="logo"
                class="hidden w-full dark:block"
              />
            </a>
          </div>
          <div class="flex items-center justify-between w-full px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark dark:bg-white"></span>
                <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark dark:bg-white"></span>
                <span class="relative my-[6px] block h-[2px] w-[30px] bg-dark dark:bg-white"></span>
              </button>
              <nav
                id="navbarCollapse"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6"
              >
                <ul class="blcok lg:flex 2xl:ml-20">
                  <li class="relative group">
                    <a href="{{ route('index') }}#home" class="flex py-2 mx-8 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-body-color dark:lg:text-dark-6">Home</a>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('index') }}#about" class="flex py-2 mx-8 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-body-color dark:lg:text-dark-6 xl:ml-10">About</a>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('index') }}#pricing" class="flex py-2 mx-8 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-body-color dark:lg:text-dark-6 xl:ml-10">Pricing</a>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('index') }}#team" class="flex py-2 mx-8 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-body-color dark:lg:text-dark-6 xl:ml-10">Team</a>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('index') }}#contact" class="flex py-2 mx-8 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-body-color dark:lg:text-dark-6 xl:ml-10">Contact</a>
                  </li>
                  <li class="relative group">
                    <a href="{{ route('blog-grids') }}" class="flex py-2 mx-8 text-base font-medium text-dark group-hover:text-primary dark:text-white lg:ml-7 lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-body-color dark:lg:text-dark-6 xl:ml-10">Blog</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Banner Section Start -->
    <div class="relative z-10 overflow-hidden bg-primary pt-[120px] pb-[100px] md:pt-[150px] lg:pt-[180px]">
      <div class="container mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="text-center">
              <h1 class="text-4xl font-bold text-white">Privacy Policy</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Banner Section End -->

    <!-- ====== Privacy Content Section Start -->
    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 dark:bg-dark">
      <div class="container mx-auto px-4">
        <div class="max-w-[850px] mx-auto bg-white dark:bg-dark-2 shadow-lg rounded-lg p-8 md:p-12">
          <div class="prose prose-lg dark:prose-invert max-w-none">
            <h2 class="text-2xl font-bold mb-4">Introduction</h2>
            <p class="mb-6">Welcome to EPORT SOLUTIONS LIMITED. We are a technology company based in Tanzania, specializing in the development of ICDV (Inland Container Depot Vehicle) systems, including the EPORT ICD Management System, EPORT ICD Delivery System, and the EPORT DELIVERY APPLICATION.</p>
            
            <p class="mb-6">This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our website and our mobile applications, specifically the <strong>EPORT DELIVERY APPLICATION</strong>.</p>

            <h2 class="text-2xl font-bold mb-4 text-dark dark:text-white">Information We Collect</h2>
            <p class="mb-4">Our EPORT DELIVERY APPLICATION is designed for tracking containers from discharge at marine vessels through port documentation to final ICD delivery. To provide these services, we may collect:</p>
            <ul class="list-disc pl-6 mb-6">
              <li><strong>Container Data:</strong> Information related to container numbers, discharge status, and documentation details.</li>
              <li><strong>Location Information:</strong> Real-time tracking of container delivery progress to ensure accurate logistics management.</li>
              <li><strong>User Information:</strong> Professional details for authorized personnel using the system for documentation and delivery tracking.</li>
              <li><strong>Device Information:</strong> Technical data about the device used to access our applications.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4 text-dark dark:text-white">How We Use Your Information</h2>
            <p class="mb-4">We use the collected information for purposes including:</p>
            <ul class="list-disc pl-6 mb-6">
              <li>Facilitating the tracking of container discharge from marine vessels.</li>
              <li>Managing port documentation and verification processes.</li>
              <li>Optimizing ICD delivery operations via the EPORT DELIVERY APPLICATION.</li>
              <li>Providing technical support and improving our software solutions.</li>
              <li>Communicating important system updates and security alerts.</li>
            </ul>

            <h2 class="text-2xl font-bold mb-4 text-dark dark:text-white">Data Security</h2>
            <p class="mb-6">As a specialized tech company, we prioritize the security of your logistics data. We implement industry-standard security measures to protect against unauthorized access, alteration, or disclosure of information related to container management and delivery.</p>

            <h2 class="text-2xl font-bold mb-4 text-dark dark:text-white">Compliance with Tanzanian Law</h2>
            <p class="mb-6">EPORT SOLUTIONS LIMITED operates in accordance with the laws and regulations of the United Republic of Tanzania, including data protection standards applicable to technology and logistics services.</p>

            <h2 class="text-2xl font-bold mb-4 text-dark dark:text-white">Contact Us</h2>
            <p class="mb-4">If you have questions or comments about this Privacy Policy, please contact us at:</p>
            <p class="font-bold">EPORT SOLUTIONS LIMITED</p>
            <p>Tanzania</p>
            <p>Specialists in ICD Management and Delivery Systems</p>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Privacy Content Section End -->

    <!-- ====== Footer Section Start -->
    <footer class="relative z-10 bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20">
      <div class="container mx-auto px-4 text-center">
        <p class="text-base text-body-color">
          &copy; {{ date('Y') }} EPORT SOLUTIONS LIMITED. All rights reserved.
        </p>
      </div>
    </footer>
    <!-- ====== Footer Section End -->

    <!-- ====== Back To Top Start -->
    <a
      href="javascript:void(0)"
      class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 hover:bg-dark"
    >
      <span
        class="mt-[6px] h-3 w-3 rotate-45 border-t-2 border-l-2 border-white"
      ></span>
    </a>
    <!-- ====== Back To Top End -->

    <!-- ====== All Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>
