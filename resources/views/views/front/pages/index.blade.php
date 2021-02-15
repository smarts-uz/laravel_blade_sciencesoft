@extends('front.layout')

@section('css')

@endsection

@section('main')



    <!-- Carousel -->
 <div class="px-10 md:px-16 mb-10 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
  <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">{{ @translate_lang("SOFTWARE CONSULTING AND DEVELOPMENT FOR YOUR DIGITAL SUCCESS")  }}</h1>
  <hr class="w-20 h-1 bg-yellow-600 my-10 ">
  <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">{{ @translate_lang("For over 31 years.
   For millions of users. We transform businesses with powerful and adaptable digital solutions that satisfy the needs of
    today and unlock the opportunities of tomorrow.")  }}</p>
</div>
<div class="container mb-24">
    <section class="customer-logos slider px-16">
      @foreach($categories as $category)
      <div class="slide"><img class="h-32 w-32" src="/uploads/categories/{{ $category->image }}" alt="logo"></div>
      @endforeach
    </section>
  </div>
  <!-- EXPLORE OUR OFFERING Responsive -->
  <div class="carousel relative shadow-2xl bg-white px-10 py-10 block lg:hidden">
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" hidden="" checked="checked">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-blue-500 text-white text-5xl text-center">{{ @translate_lang("Slide 1")  }}</div> -->
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Software Development")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("The development of reliable and scalable software solutions for any OS, browser and
          device.
          We bring
          together deep industry expertise and the latest IT advancements to deliver custom solutions and products
          that perfectly fit the
          needs and behavior of their users.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Software consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black  hover:text-blue-500">{{ @translate_lang("Custom software development")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black  hover:text-blue-500">{{ @translate_lang("Software product development")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Team augmentation")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Software development outsourcing")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-blue-500 text-white text-5xl text-center">{{ @translate_lang("Slide 2")  }}</div> -->
        <div class="block h-full w-full pb-10 text-xl">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Infrastructure Services")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("We apply our 10-year experience to offer a full set of infrastructure services. We can
            help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.")  }}
          </p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Managed IT Support")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data center support and management")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Cloud consulting and management")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("DevOps consulting and implementation")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Virtual desktop consulting, implementation and support")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Networking management services")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">{{ @translate_lang("Slide 3")  }}</div> -->
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Application Services")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("The full set of services around development and maintenance of complex business-critical
           applications. Our experts
           build, test, deploy, protect, manage, migrate and optimize enterprise-scale digital solutions ensuring
           they’re always up
           and running and achieve the optimal TCO.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application management")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application modernization")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application integration")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application security services")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application development")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application testing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application maintenance and support")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Slide 4 -->
      <input class="carousel-open" type="radio" id="carousel-4" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <!-- <div class="block h-full w-full bg-red-500 text-white text-5xl text-center">{{ @translate_lang("Slide 4")  }}</div> -->
        <div class="block h-full w-full text-xl pb-20">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("UX/UI Design")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("User experience and user interface design for all types of websites, SaaS, and
           web/mobile
           apps. We combine the latest
           UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful
           designs that
           power up businesses.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("User Interface (UI) Design")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Responsive Web App Design")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Software-as-as-Service (SaaS) UI Design")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Ecommerce Website Design")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("User Experience (UX) Design")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Website Redesign")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Responsive Web Design")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Slide 5 -->
      <input class="carousel-open" type="radio" id="carousel-5" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Testing & QA")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("We offer full-range QA and testing outsourcing services, can help to develop your QA or
           enhance the existing one, assist
           you in TCoE setup and evolution. We perform end-to-end testing of mobile, web and desktop application at
           each stage of
           the development lifecycle.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("QA outsourcing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("QA consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Security testing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Functional testing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Usability testing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Performance testing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Test automation")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Slide 6 -->
      <input class="carousel-open" type="radio" id="carousel-6" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("IT Consulting")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("Our experts can help to develop and implement an effective IT strategy, assist in smooth
           digital transformation and
           system integration as well as advise on improvements to your digital customer experience.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black">{{ @translate_lang("Digital Transformation Consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Project Management Consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Digital Crisis Management Consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("IT Service Management Consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Solution consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Platform consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Enterprise IT consulting")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Slide 7 -->
      <input class="carousel-open" type="radio" id="carousel-7" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Data Analytics")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("We support businesses in achieving fact-based decision-making by converting their
           historical
           and real-time, traditional
           and big data into actionable insights. Our services are tailored to make the raw data and the environment
           ready, as well
           as strengthen the business with advanced analytics capabilities.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Business Intelligence")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Big Data")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Warehousing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Science")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Management")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Machine and Deep Learning")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Analytics as a Service")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Slide 8 -->
      <input class="carousel-open" type="radio" id="carousel-8" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Help Desk Services")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("Help desk services for your IT environment or software products. We take on solving
           diverse issues from answering
           application functionality questions to performing fixes and enhancements on the code level for improved
           adoption of software, its smooth functioning and increased end user satisfaction.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Help desk outsourcing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("IT help desk services")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Outsourced help desk for MSP")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("NOC outsourcing")  }}</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Slide 9 -->
      <input class="carousel-open" type="radio" id="carousel-9" name="carousel" hidden="">
      <div class="carousel-item absolute opacity-0">
        <div class="block h-full w-full text-xl pb-10">
          <h1 class="text-3xl font-semibold">
            <p class="mb-2">{{ @translate_lang("Cybersecurity Services")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
          </h1>
          <p class="my-8 text-gray-600">{{ @translate_lang("Cybersecurity services to achieve the robust protection of the companies’ applications
           and
           networks. Equipped with
           16-year experience in information security, our security experts are ready to deliver a variety of cyber
           protection
           services.")  }}</p>
          <ul class="flex flex-row flex-wrap ml-6 text-blue-600 underline">
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Managed security services")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Compliance testing")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Information security consulting")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Security code review")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application security implementation")  }}</a>
            </li>
            <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
              <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Vulnerability assessment and penetration testing")  }}</a>
            </li>
          </ul>
        </div>
      </div>
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
        <p class="mb-4">{{ @translate_lang("EXPLORE OUR OFFERING")  }}</p>
        <hr class="w-10 h-1 bg-pink-600">
      </h1>
      <div class="flex flex-wrap" id="tabs-id">
        <div class="flex md:flex-col lg:flex-row shadow-xl bg-white">
          <ul class="flex list-none flex-wrap -mt-10 flex-col bg-blue-900 lg:w-2/5 md:w-full shadow-2xl py-10">
            <li class=" -mr-6 last:mr-0 flex-auto pl-10 cursor-pointer hover:underline z-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal cursor-pointer text-white bg-blue-600"
                onclick="changeAtiveTab(event,'software-development')">
                {{ @translate_lang("Software Development")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 last:mr-0 flex-auto cursor-pointer pl-10 cursor-pointer hover:underline z-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'infrastructure-services')">
                {{ @translate_lang("Infrastructure Services")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'application-services')">
                {{ @translate_lang("Application Services")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'ux-ui-design')">
                {{ @translate_lang("UX/UI Design")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal hover:underline text-white"
                onclick="changeAtiveTab(event,'testing-qa')">
                {{ @translate_lang("Testing & QA")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'it-consulting')">
                {{ @translate_lang("IT Consulting")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'data-analytics')">
                {{ @translate_lang("Data Analytics")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'help-desk-services')">
                {{ @translate_lang("Help Desk Services")  }}
              </a>
            </li>
            <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
              <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                onclick="changeAtiveTab(event,'cybersecurity-services')">
                {{ @translate_lang("Cybersecurity Services")  }}
              </a>
            </li>
          </ul>
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6">
            <div class="p-4 flex-auto lg:h-h-auto">
              <div class="tab-content tab-space p-8">
                <div class="block text-xl pb-10" id="software-development">
                  <h1 class="text-3xl font-semibold">
                    <p class="mb-2">{{ @translate_lang("Software Development")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("The development of reliable and scalable software solutions for any OS, browser and device.
                   We bring
                   together deep industry expertise and the latest IT advancements to deliver custom solutions and products
                   that perfectly fit the
                   needs and behavior of their users.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Software consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black  hover:text-blue-500">{{ @translate_lang("Custom software development")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black  hover:text-blue-500">{{ @translate_lang("Software product development")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Team augmentation")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Software development outsourcing")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="infrastructure-services">
                  <h1 class="text-3xl font-semibold">
                    <p class="mb-2">{{ @translate_lang("Infrastructure Services")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("We apply our 10-year experience to offer a full set of infrastructure services. We can help
                   to maintain
                   and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.")  }}
                  </p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Managed IT Support")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data center support and management")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Cloud consulting and management")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("DevOps consulting and implementation")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Virtual desktop consulting, implementation and support")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Networking management services")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="application-services">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("Application Services")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("The full set of services around development and maintenance of complex business-critical
                   applications. Our experts
                   build, test, deploy, protect, manage, migrate and optimize enterprise-scale digital solutions ensuring
                   they’re always up
                   and running and achieve the optimal TCO.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application management")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application modernization")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application integration")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application security services")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application development")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application testing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application maintenance and support")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-20" id="ux-ui-design">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("UX/UI Design")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("User experience and user interface design for all types of websites, SaaS, and web/mobile
                   apps. We combine the latest
                   UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful
                   designs that
                   power up businesses.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("User Interface (UI) Design")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Responsive Web App Design")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Software-as-as-Service (SaaS) UI Design")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Ecommerce Website Design")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("User Experience (UX) Design")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Website Redesign")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Responsive Web Design")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="testing-qa">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("Testing & QA")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("We offer full-range QA and testing outsourcing services, can help to develop your QA or
                   enhance the existing one, assist
                   you in TCoE setup and evolution. We perform end-to-end testing of mobile, web and desktop application at
                   each stage of
                   the development lifecycle.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("QA outsourcing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("QA consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Security testing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Functional testing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Usability testing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Performance testing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Test automation")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="it-consulting">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("IT Consulting")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("Our experts can help to develop and implement an effective IT strategy, assist in smooth
                   digital transformation and
                   system integration as well as advise on improvements to your digital customer experience.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black">{{ @translate_lang("Digital Transformation Consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Project Management Consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Digital Crisis Management Consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("IT Service Management Consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Solution consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Platform consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Enterprise IT consulting")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="data-analytics">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("Data Analytics")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("We support businesses in achieving fact-based decision-making by converting their historical
                   and real-time, traditional
                   and big data into actionable insights. Our services are tailored to make the raw data and the environment
                   ready, as well
                   as strengthen the business with advanced analytics capabilities.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Business Intelligence")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Big Data")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Warehousing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Science")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Management")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Machine and Deep Learning")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Data Analytics as a Service")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="help-desk-services">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("Help Desk Services")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("Help desk services for your IT environment or software products. We take on solving diverse
                   issues from answering
                   application functionality questions to performing fixes and enhancements on the code level for improved
                   adoption of
                   software, its smooth functioning and increased end user satisfaction.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Help desk outsourcing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("IT help desk services")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Outsourced help desk for MSP")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("NOC outsourcing")  }}</a>
                    </li>
                  </ul>
                </div>
                <div class="hidden text-xl pb-10" id="cybersecurity-services">
                  <h1 class="text-3xl font-semibold"><p class="mb-2">{{ @translate_lang("Cybersecurity Services")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                  </h1>
                  <p class="my-8 text-gray-600">{{ @translate_lang("Cybersecurity services to achieve the robust protection of the companies’ applications and
                   networks. Equipped with
                   16-year experience in information security, our security experts are ready to deliver a variety of cyber
                   protection
                   services.")  }}</p>
                  <ul class="flex flex-row flex-wrap ml-6 text-blue-600 underline">
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Managed security services")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Compliance testing")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Information security consulting")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Security code review")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Application security implementation")  }}</a>
                    </li>
                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                      <a href="#" class="text-black hover:text-blue-500">{{ @translate_lang("Vulnerability assessment and penetration testing")  }}</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>




  <div class="px-16 home-page-form-1">
    <h1 class="text-center text-gray-500 mt-10 mb-20 text-xl">{{ @translate_lang("Haven't found a suitable service? Type your need below!")  }}</h1>
    <!-- Forms -->
    <form class="border-2 border-gray-500 flex flex-row rounded-full p-4 mb-20">
      <div class="flex justify-center items-center">
        <i class="fa fa-search text-gray-500 mr-4"></i>
      </div>
      <input type="search" name="Search" class="w-full border-none outline-none" placeholder="{{ @translate_lang("E.g., VR development or help desk services")  }}"/>
    </form>

    <!-- EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF. -->
    <div class="flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
       <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
         <h1 class="text-3xl font-semibold">{{ @translate_lang("EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF.")  }}</h1>
         <p class="text-xl text-gray-700 my-6">{{ @translate_lang("Comprehensive care of your cloud or on-premises infrastructure and applications with:")  }}</p>
         <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ @translate_lang("Consulting")  }}</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ @translate_lang("Security")  }}</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ @translate_lang("Implementation")  }}</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ @translate_lang("Help desk services")  }}</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ @translate_lang("Management and support")  }}</li>
           <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ @translate_lang("Migration")  }}</li>
         </ul>
         <a href="#" class="flex flex-row items-center text-blue-700">
            <p class="uppercase mr-3 font-semibold">{{ @translate_lang("Learn More")  }}</p>
            <i class="fa fa-long-arrow-right"></i>
         </a>
       </div>
       <div class="bg-white shadow-2xl h-full lg:h-96 lg:w-2/5 w-full flex justify-center items-center lg:-mt-20 lg:-mr-10">
         <img src="https://www.scnsoft.com/---home-page-illustrations/image-thumb__22108__home_Image-text/managed-it-services~-~1919w.png" alt="EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF">
       </div>
    </div>
  </div>
  <div class="">
   <div class=" text-2xl md:text-3xl font-bold m-20">
           {{_trans("RECOGNITIONS AND PARTNERSHIPS")}}
           <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
       </div>
    </div>
    <div class="flex flex-wrap overflow-hidden">
        @foreach($categories as $category)
            <div
                class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/5 xl:w-1/5">
                <a href="">
                    <div
                        class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5 md:py-3 md:py-3 sm:py-2 sm:py-2">
                        <img class="h-32 w-32" src="/uploads/categories/icon/{{ $category->icon }}" alt="logo">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
  </div>


  <!-- IMPROVE AND INNOVATE WITH THE TECH TRENDS -->
  <div class="bg-blue-900 lg:px-16 px-3 py-10 text-white">
    <h1 class="text-2xl lg:text-3xl font-semibold">
      <p class="mb-4">{{ @translate_lang("Solutions we deliver")  }}</p>
      <hr class="w-10 h-1 bg-pink-600">
    </h1>
    <p class="text-xs lg:text-xl my-4 lg:my-8">{{ @translate_lang("We IT-enable all kinds of B2B, B2C interactions and internal operations.")  }}</p>
    <ul class="text-black flex flex-wrap flex-row">
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("Enterprise application")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("CRM")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("eCommerce")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("Mobile Apps")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("Collaboration and productivity solutions")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("Data Analytics")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("Web Portals")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
      <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
        <a href="#">
          {{ @translate_lang("ITSM")  }}
        </a>
        <div class="absolute bottom-3 right-3">
          <i class="fa fa-arrow-right fa-rotate-45"></i>
        </div>
      </li>
    </ul>
  </div>


  <div>
    <div class="mx-6 sm:mx-16 lg:mx-18">
      <div class="my-4">
      <h1 class="uppercase font-bold text-2xl pb-4">{{ @translate_lang("SUCCESS Stories")  }}</h1>
      <hr class="w-10 h-1 bg-pink-600">
    </div>
    <div id="container" class="overflow-hidden bg-gray-200 md:w-1/2 w-full relative ">
      <div id="title" class="absolute w-full duration-500 z-50">
        <h1 class="text-white font-bold md:text-2xl text-lg">{{ @translate_lang("eCommers By TeamPro")  }}</h1>
        <hr class="h-0.5 duration-500 border-none bg-yellow-600">
      </div>
      <div id="title-link"
      class="absolute text-sm md:text-lg duration-500 z-50 w-full text-white flex justify-between items-center">
        <p>{{ @translate_lang("Programming")  }}</p>
        <i class="fas fa-arrow-right"></i>
      </div>
      <img src="https://images.unsplash.com/photo-1593642634315-48f5414c3ad9?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
      <div id="first" class="absolute w-full h-full duration-500 top-0 left-0 flex justify-start">
        <div id="child-title" class="absolute duration-500">
          <h1 class="text-center md:text-2xl text-lg font-bold text-black">{{ @translate_lang("eCommers by TeamPro")  }}</h1>
          <hr class="h-0.5 duration-1000 border-none bg-yellow-600">
        </div>

        <div id="child-dis" class="absolute text-sm md:text-base duration-500">
          <p>{{ @translate_lang("C++")  }}</p>
          <p>{{ @translate_lang("JavaScript")  }}</p>
          <p>{{ @translate_lang("Java")  }}</p>
          <p>{{ @translate_lang("Go")  }}</p>
        </div>

        <a
        href="#"
        id="link"
        class="absolute text-sm md:text-base text-blue-400 duration-500 z-50">{{ @translate_lang("Learn More")  }} <i class="fas ml-3 fa-arrow-right"></i></a>
      </div>
    </div>

    <div id="container" class="overflow-hidden bg-gray-200 md:w-1/2 w-full relative ">
      <div id="title" class="absolute w-full duration-500 z-50">
        <h1 class="text-white font-bold md:text-2xl text-lg">{{ @translate_lang("eCommers By TeamPro")  }}</h1>
        <hr class="h-0.5 duration-500 border-none bg-yellow-600">
      </div>
      <div id="title-link"
      class="absolute text-sm md:text-lg duration-500 z-50 w-full text-white flex justify-between items-center">
        <p>{{ @translate_lang("Programming")  }}</p>
        <i class="fas fa-arrow-right"></i>
      </div>
      <img src="https://images.unsplash.com/photo-1593642634315-48f5414c3ad9?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
      <div id="first" class="absolute w-full h-full duration-500 top-0 left-0 flex justify-start">
        <div id="child-title" class="absolute duration-500">
          <h1 class="text-center md:text-2xl text-lg font-bold text-black">{{ @translate_lang("eCommers by TeamPro")  }}</h1>
          <hr class="h-0.5 duration-1000 border-none bg-yellow-600">
        </div>

        <div id="child-dis" class="absolute text-sm md:text-base duration-500">
          <p>{{ @translate_lang("C++")  }}</p>
          <p>{{ @translate_lang("JavaScript")  }}</p>
          <p>{{ @translate_lang("Java")  }}</p>
          <p>{{ @translate_lang("Go")  }}</p>
        </div>

        <a
        href="#"
        id="link"
        class="absolute text-sm md:text-base text-blue-400 duration-500 z-50">{{ @translate_lang("Learn More")  }} <i class="fas ml-3 fa-arrow-right"></i></a>
      </div>
    </div>
  </div>


  <!-- Ahadov ILhomjon -->

  <div>
    <div class="my-4">
    <h1 class="uppercase font-bold text-2xl pb-4">{{ @translate_lang("Featured Insights")  }}</h1>
    <hr class="w-10 h-1 bg-pink-600">
  </div>



  @isset($cards)
  <div class='flex flex-row flex-wrap justify-between'>

      @foreach($cards as $card)
      <div class="rounded overflow-hidden shadow-lg my-2 w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
        <img class="w-72 h-48" src="/uploads/cardLists/{{ $card->image }}"
          alt="Sunset in the mountains">
        <div class="px-6 py-4">
          <h1 class="text-yellow-400 mb-3 text-bold uppercase">{{ $card->title }}</h1>
          <div class="font-bold text-xl mb-2">{{ $card->sub_title }}</div>
          <p class="text-grey-darker text-base mb-5">
              {{ $card->description }}
          </p>
        </div>
      </div>
      @endforeach



    <button class="border-2 border-blue-700 text-blue-700 font-semibold px-6 py-3 uppercase my-8 mx-auto">{{ @translate_lang("All Blog Articles")  }}</button>
  </div>
  @endisset
  <!-- Need a CONSULTATION? -->
  </div>

  <h1 class="px-16 text-3xl py-5">
    <p class="mb-4">{{_trans("NEED A CONSULTATION?")}}</p>
    <hr class="w-10 h-1 bg-yellow-500">
  </h1>

  <form method="POST" action="{{ route('consultation') }}" class="px-16 py-5 text-gray-800">
    @csrf
    <p class="py-5">{{_trans("Drop us a line! We are here to answer your questions 24/7.")}}</p>
    <div class="flex">
        <div class="w-full">
            <div class="w-full flex justify-between flex-wrap">
                <input type="text" name="Name" placeholder="Full Name" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                <input type="text" name="Company" placeholder="Company" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                <input type="email" name="Email" placeholder="Work Email" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                <input type="tel" name="Phone" placeholder="Work Phone" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
            </div>
            <div class="border border-gray-400 rounded my-5">
                <textarea class="resize-none w-full px-5 py-2 h-20 focus:outline-none" name="Discription" placeholder="How can we help you?"></textarea>
            </div>
            <button class="bg-blue-500 px-5 m-auto py-2 uppercase font-bold text-white rounded text-sm">{{_trans("Disscuss my needs")}}</button>
        </div>
        <div class="px-5 md:block hidden">
            <div>
                <h1 class="font-bold text-xl pb-2">{{_trans("Our contact details")}}</h1>
                <a class="text-blue-400 flex items-center" href="#">
                    <i class="fas fa-phone-alt pr-3"></i>
                    <p>{{_trans("+998 94 123 45 67")}}</p>
                </a>
                <a class="text-blue-400 flex items-center" href="#">
                    <i class="fas fa-envelope pr-3"></i>
                    <p>{{_trans("teamprodev@gmail.com")}}</p>
                </a>
            </div>
            <div>
                <h1 class="font-bold text-xl pb-2 mt-4">{{_trans("Press inquires")}}</h1>
                <a class="text-blue-400 flex items-center text-xs" href="#">
                    <p class="uppercase">{{_trans("Get in touch with us")}}</p>
                    <i class="fas fa-arrow-right pl-3"></i>
                </a>
            </div>
            <div>
                <h1 class="font-bold text-xl pb-2 mt-4">{{_trans("Join our team")}}</h1>
                <a class="text-blue-400 flex items-center text-xs" href="#">
                    <p class="uppercase">{{_trans("Check our open vacancies")}}</p>
                    <i class="fas fa-arrow-right pl-3"></i>
                </a>

            </div>
            <div>

            </div>
        </div>
    </div>
  </form>



@endsection


@section('js')

@endsection
