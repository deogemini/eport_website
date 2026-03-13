@extends('layouts.app')

@section('title', 'Privacy Policy | EPORT SOLUTIONS LIMITED')

@section('content')
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
@endsection
