@extends('front.layout')

@section('css')
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}

  <style>
    .card-lists{
      display: none;
  }
  </style>
  @endsection

@section('main')

 <!-- Carousel -->
 <div class="px-10 md:px-16 mb-10 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
  <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">SOFTWARE CONSULTING AND
    DEVELOPMENT FOR YOUR DIGITAL SUCCESS</h1>
  <hr class="w-20 h-1 bg-yellow-600 my-10 ">
  <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">For over 31 years. For
    millions of users. We transform businesses with powerful and adaptable digital solutions that
    satisfy the needs of today and unlock the opportunities of tomorrow.</p>
</div>
<div class="container mb-24">
    <section class="customer-logos slider px-16">
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/baxter.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/deloitte.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/ebay.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/ford.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/ibm.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/leo-burnett.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/nasa_1.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/nestle.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/tieto.svg') }}" alt="logo"></div>
      <div class="slide"><img class="h-32 w-32" src="{{ asset ('/images/viber.svg') }}" alt="logo"></div>
    </section>
  </div>
  <!-- EXPLORE OUR OFFERING Responsive -->
  <div class="carousel relative shadow-2xl bg-white px-10 py-10 block lg:hidden">
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
      {{-- <input class="carousel-open" type="radio" id="carousel-1" name="carousel" hidden=""
        checked="checked"> --}}
      @foreach ($lists as $list)
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-blue-500 text-white text-5xl text-center">Slide 1</div> -->
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ $list->name }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Software consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black  hover:text-blue-500">Custom software development</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black  hover:text-blue-500">Software product development</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Team augmentation</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Software development outsourcing</a>
            </li>
          </ul>
        </div>
      </div>
      @endforeach
      <!--Slide 2-->
      {{-- <input class="carousel-open" type="radio" id="carousel-2" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-blue-500 text-white text-5xl text-center">Slide 2</div> -->
        <div class="block h-full w-full pb-10 text-xl">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">Infrastructure Services</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">We apply our 10-year experience to offer a full set of infrastructure services. We can
            help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.
          </p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Managed IT Support</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Data center support and management</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Cloud consulting and management</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">DevOps consulting and implementation</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Virtual desktop consulting, implementation and support</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Networking management services</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!--Slide 3-->
      {{-- <input class="carousel-open" type="radio" id="carousel-3" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3</div> -->
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">Application Services</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">The full set of services around development and maintenance of complex business-critical
            applications. Our experts
            build, test, deploy, protect, manage, migrate and optimize enterprise-scale digital solutions ensuring
            they’re always up
            and running and achieve the optimal TCO.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application management</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application modernization</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application integration</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application security services</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application development</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application testing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application maintenance and support</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Slide 4 -->
      {{-- <input class="carousel-open" type="radio" id="carousel-4" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-red-500 text-white text-5xl text-center">Slide 4</div> -->
        <div class="block h-full w-full text-xl pb-20">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">UX/UI Design</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">User experience and user interface design for all types of websites, SaaS, and
            web/mobile
            apps. We combine the latest
            UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful
            designs that
            power up businesses.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">User Interface (UI) Design</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Responsive Web App Design</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Software-as-as-Service (SaaS) UI Design</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Ecommerce Website Design</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">User Experience (UX) Design</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Website Redesign</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Responsive Web Design</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Slide 5 -->
      {{-- <input class="carousel-open" type="radio" id="carousel-5" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">Testing & QA</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">We offer full-range QA and testing outsourcing services, can help to develop your QA or
            enhance the existing one, assist
            you in TCoE setup and evolution. We perform end-to-end testing of mobile, web and desktop application at
            each stage of
            the development lifecycle.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">QA outsourcing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">QA consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Security testing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Functional testing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Usability testing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Performance testing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Test automation</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Slide 6 -->
      {{-- <input class="carousel-open" type="radio" id="carousel-6" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">IT Consulting</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">Our experts can help to develop and implement an effective IT strategy, assist in smooth
            digital transformation and
            system integration as well as advise on improvements to your digital customer experience.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black">Digital Transformation Consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Project Management Consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Digital Crisis Management Consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">IT Service Management Consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Solution consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Platform consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Enterprise IT consulting</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Slide 7 -->
      {{-- <input class="carousel-open" type="radio" id="carousel-7" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">Data Analytics</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">We support businesses in achieving fact-based decision-making by converting their
            historical
            and real-time, traditional
            and big data into actionable insights. Our services are tailored to make the raw data and the environment
            ready, as well
            as strengthen the business with advanced analytics capabilities.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Business Intelligence</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Big Data</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Data Warehousing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Data Science</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Data Management</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Machine and Deep Learning</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Data Analytics as a Service</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Slide 8 -->
      {{-- <input class="carousel-open" type="radio" id="carousel-8" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">Help Desk Services</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">Help desk services for your IT environment or software products. We take on solving
            diverse issues from answering
            application functionality questions to performing fixes and enhancements on the code level for improved
            adoption of software, its smooth functioning and increased end user satisfaction.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Help desk outsourcing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">IT help desk services</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Outsourced help desk for MSP</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">NOC outsourcing</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Slide 9 -->
      {{-- <input class="carousel-open" type="radio" id="carousel-9" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">Cybersecurity Services</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">Cybersecurity services to achieve the robust protection of the companies’ applications
            and
            networks. Equipped with
            16-year experience in information security, our security experts are ready to deliver a variety of cyber
            protection
            services.</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-600 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Managed security services</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Compliance testing</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Information security consulting</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Security code review</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Application security implementation</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">Vulnerability assessment and penetration testing</a>
            </li>
          </ul>
        </div>
      </div> --}}
      <!-- Add additional indicators for each slide-->
      <ol class="carousel-indicators">
        <li class="inline-block mr-3">
          <label for="carousel-1"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-2"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-3"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-4"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-5"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-6"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-7"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-8"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-9"
            class="carousel-bullet cursor-pointer block text-4xl text-pink-300 hover:text-pink-500">_</label>
        </li>
      </ol>
    </div>
  </div>
    <div class="bg-gray-200 px-16 py-8 hidden lg:block">
      <h1 class="text-3xl font-semibold mb-20 pt-10">
        <p class="mb-4">EXPLORE OUR OFFERING</p>
        <hr class="w-10 h-1 bg-pink-600">
      </h1>
      @include('front.pages.category_menu')
    </div>
  



  <div class="px-16 home-page-form-1">
    <h1 class="text-center text-gray-500 mt-10 mb-20 text-xl">Haven't found a suitable service? Type your need below!</h1>
    <!-- Forms -->
    <form class="border-2 border-gray-500 flex flex-row rounded-full p-4 mb-20">
      <div class="flex justify-center items-center">
        <i class="fa fa-search text-gray-500 mr-4"></i>
      </div>
      <input type="search" name="Search" class="w-full border-none outline-none" placeholder="E.g., VR development or help desk services"/>
    </form> 

    <!-- EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF. -->
    <div class="flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
       <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
         <h1 class="text-3xl font-semibold">EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF.</h1>
         <p class="text-xl text-gray-700 my-6">Comprehensive care of your cloud or on-premises infrastructure and applications with:</p>
         <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Consulting</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Security</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Implementation</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Help desk services</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Management and support</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Migration</li>
         </ul>
         <a href="#" class="flex flex-row items-center text-blue-700">
            <p class="uppercase mr-3 font-semibold">Learn More</p>
            <i class="fa fa-long-arrow-right"></i>
         </a>
       </div>
       <div class="bg-white shadow-2xl h-full lg:h-96 lg:w-2/5 w-full flex justify-center items-center lg:-mt-20 lg:-mr-10">
         <img src="https://www.scnsoft.com/---home-page-illustrations/image-thumb__22108__home_Image-text/managed-it-services~-~1919w.png" alt="EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF">
       </div>
    </div>
  </div>


  <!-- Komil Sobitov // Platforms  we work this -->
  <div class="platforms px-3 lg:px-16 sm:px-16 py-12">
    <h2 class="text-gray-900 text-2xl mb-4">PLATFORMS WE WORK WITH</h2>
    <hr class="w-10 h-1 bg-yellow-600 mb-4" />
    <p class="w-11/12 text-gray-700 font-light mb-3">
      Distilling deep tech experience, our experts can help you with
      platform-specific consulting, solution design and support for your
      business evolution.
    </p>
    <div class="flex flex-wrap overflow-hidden sm:-mx-3">
      <div
        class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/5 xl:w-1/5">
        <a href="https://www.scnsoft.com/sharepoint-office-365">
          <div
            class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5 md:py-3 md:py-3 sm:py-2 sm:py-2">
            <img src="https://www.scnsoft.com/---home-page-illustrations/platforms/sharepoint-logo.svg" />
          </div>
        </a>
      </div>
  
      <div
        class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/5 xl:w-1/5">
        <a href="https://www.scnsoft.com/microsoft-dynamics-365">
          <div
            class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5">
            <img src="https://www.scnsoft.com/---home-page-illustrations/platforms/dynamics-365.svg" />
          </div>
        </a>
      </div>
  
      <div
        class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/5 xl:w-1/5">
        <a href="https://www.scnsoft.com/services/salesforce/implementation">
          <div
            class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5">
            <img src="https://www.scnsoft.com/---home-page-illustrations/platforms/salesforce.svg" />
          </div>
        </a>
      </div>
  
      <div
        class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/5 xl:w-1/5">
        <a href="https://www.scnsoft.com/services/salesforce/implementation">
          <div
            class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5">
            <img src="https://www.scnsoft.com/---home-page-illustrations/platforms/servicenow-logo.svg" />
          </div>
        </a>
      </div>
  
      <div
        class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/5 xl:w-1/5">
        <a href="https://www.scnsoft.com/ecommerce/magento/services/consulting">
          <div
            class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5">
            <img src="https://www.scnsoft.com/---home-page-illustrations/platforms/magento-logo.svg" />
          </div>
        </a>
      </div>
    </div>
  </div>


  <!-- IMPROVE AND INNOVATE WITH THE TECH TRENDS -->
  <div class="bg-blue-900 lg:px-16 px-3 py-10 text-white">
    <h1 class="text-2xl lg:text-3xl font-semibold">
      <p class="mb-4">Solutions we deliver</p>
      <hr class="w-10 h-1 bg-pink-600">
    </h1>
    <p class="text-xs lg:text-xl my-4 lg:my-8">We IT-enable all kinds of B2B, B2C interactions and internal operations.</p>
    <ul class="text-black flex flex-wrap flex-row">
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          Enterprise application
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          CRM
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          eCommerce
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          Mobile Apps
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          Collaboration and productivity solutions
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          Data Analytics
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          Web Portals
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          ITSM
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
    </ul>
  </div>



  <!-- Ahadov ILhomjon -->
 
  <div class="mx-6 sm:mx-16 lg:mx-18 ">
    <div class="my-4">
    <h1 class="uppercase font-bold text-2xl pb-4">Featured Insights</h1>
    <hr class="w-10 h-1 bg-pink-600">
  </div>
  </h1>



  <div class='flex flex-row flex-wrap justify-between card-list'>
    <div class="rounded overflow-hidden shadow-lg my-2 card-lists w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48" src="https://www.scnsoft.com/---home-page-illustrations/blog/vr.svg"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">VR</h1>
        <div class="font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</div>
        <p class="text-grey-darker text-base mb-5">
          Discover everything you need to know about Virtual Reality before launching your own VR project: from market
          stats and industry use cases to key development tools and cost drivers.
        </p>
      </div>
    </div>
  
    <div class="rounded overflow-hidden shadow-lg my-2 card-lists w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48" src="https://www.scnsoft.com/---home-page-illustrations/blog/vr.svg"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">VR</h1>
        <div class="font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</div>
        <p class="text-grey-darker text-base mb-5">
          Discover everything you need to know about Virtual Reality before launching your own VR project: from market
          stats and industry use cases to key development tools and cost drivers.
        </p>
      </div>
    </div>

    <div class="rounded overflow-hidden shadow-lg my-2 card-lists w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48" src="https://www.scnsoft.com/---home-page-illustrations/blog/vr.svg"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">VR</h1>
        <div class="font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</div>
        <p class="text-grey-darker text-base mb-5">
          Discover everything you need to know about Virtual Reality before launching your own VR project: from market
          stats and industry use cases to key development tools and cost drivers.
        </p>
      </div>
    </div>

    <div class="rounded overflow-hidden shadow-lg my-2 card-lists w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48" src="https://www.scnsoft.com/---home-page-illustrations/blog/vr.svg"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">VR</h1>
        <div class="font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</div>
        <p class="text-grey-darker text-base mb-5">
          Discover everything you need to know about Virtual Reality before launching your own VR project: from market
          stats and industry use cases to key development tools and cost drivers.
        </p>
      </div>
    </div>

    <div class="rounded overflow-hidden shadow-lg my-2 card-lists w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48" src="https://www.scnsoft.com/---home-page-illustrations/blog/vr.svg"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">VR</h1>
        <div class="font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</div>
        <p class="text-grey-darker text-base mb-5">
          Discover everything you need to know about Virtual Reality before launching your own VR project: from market
          stats and industry use cases to key development tools and cost drivers.
        </p>
      </div>
    </div>
  
    <div class=" rounded overflow-hidden shadow-lg w-full card-lists my-2h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48"
        src="https://www.scnsoft.com/---home-page-illustrations/blog/real-time-big-data-analytics.svg"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">Data Analytics, Big Data</h1>
        <div class="font-bold text-xl mb-2">A Comprehensive Guide to Real-Time Big Data Analytics</div>
        <p class="text-grey-darker text-base">
  
          An easy guide to real-time big data analytics from our big data consultants. What is behind the term? How does a
          typical architecture look? What makes it a competitive advantage?
        </p>
      </div>
    </div>
    <button class="border-2 border-blue-700 text-blue-700 font-semibold px-6 py-3 uppercase my-8 mx-auto" id="loadMore">All Blog Articles</button>
  </div>
  <!-- Need a CONSULTATION? -->
  </div>

  <h1 class="px-16 text-3xl py-12">
    <p class="mb-4">NEED A CONSULTATION?</p>
    <hr class="w-10 h-1 bg-pink-600">
  </h1>


  <div class="px-16 py-12 bg-gray-200 text-gray-800">
    <label class="">Drop us a line! We are here to answer your questions 24/7.</label>
    <div class="flex flex-col lg:flex-row justify-between">
      <form  method="POST" action="{{ route('consultation') }}">
        @csrf
        <div class="flex flex-col mr-3">
          <div class="flex justify-between flex-row flex-wrap">
            <input type="text" name="fullname" placeholder="Full Name"
              class="border-2 border-gray-500 outline-none my-3 mr-3 p-4 w-full sm:w-auto md:w-2/5 xl:w-auto" />
            <input type="text" name="company" placeholder="Company"
              class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto" />
            <input type="email" name="email" placeholder="Work Email"
              class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto">
            <input type="text" name="phone_number" placeholder="Work Phone"
              class="border-2 border-gray-500 outline-none my-3 mr-3 py-4 px-3 w-full sm:w-auto md:w-2/5 xl:w-auto">
          </div>
          <textarea placeholder="How can we help you?" name="description" cols="3" rows="6"
            class="border-2 border-gray-500 outline-none my-3 -mr-3 py-4 px-3" style="margin-right: 0.75rem;"></textarea>
           <div class="flex justify-center items-center mb-3">
              <button type="submit" class="text-center uppercase bg-blue-700 hover:bg-blue-900 text-white w-52 h-12">Discuss my needs</button>
           </div>
        </div>
      </form>
      <div class="flex lg:flex-col md:flex-row md:justify-between flex-col">
        <div class="flex flex-col ">
          <p class="text-xl font-semibold">Our contact details</p>
          <a href="#" class="flex flex-row items-center text-blue-500 my-3">
            <i class="fa fa-phone mr-3"></i>
            <p>(+998) 99 873-48-36</p>
          </a>
          <a href="#" class="flex flex-row items-center text-blue-500">
            <i class="fa fa-envelope mr-3"></i>
            <p>contact@scnsoft.com</p>
          </a>
        </div>
        <div class="flex flex-col my-3">
          <p class="text-xl font-semibold mb-3">Press inquires</p>
          <a href="#" class="flex items-center text-blue-500">
            <p class="mr-3">GET IN TOUCH WITH US</p>
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="flex flex-col">
          <p class="text-xl border-2 font-semibold mb-3">Join our team</p>
          <a href="#" class="flex items-center text-blue-500">
            <p class="mr-3">CHECK OUR OPEN VACANCIES</p>
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  


@endsection


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-latest.min.js') }}"></script>
    <script>
        $(".card-lists").slice(0, 3).show();
        $("#loadMore").click('on', function(){
          $(".card-lists:hidden").slice(0, 3).show();
            if ($(".card-lists:hidden").length == 0) {
              $("#loadMore").fadeOut();
            }
        });
    </script>
@endsection