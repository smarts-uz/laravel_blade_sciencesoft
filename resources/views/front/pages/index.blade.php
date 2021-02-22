@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="px-10 md:px-16 mb-10 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">
            {{ _trans('SOFTWARE CONSULTING AND DEVELOPMENT FOR YOUR DIGITAL SUCCESS') }}</h1>
        <hr class="w-20 h-0.5 border-none bg-yellow-600 my-10 ">
        <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">
            {{ _trans("For over 31 years.
   For millions of users. We transform businesses with powerful and adaptable digital solutions that satisfy the needs of
    today and unlock the opportunities of tomorrow.") }}
        </p>
    </div>


    <div style="margin: 0 4rem" class="swiper-container main-slide">
        <div class="swiper-wrapper flex items-center">
            @foreach ($partnerships as $partnership)
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14">
                <img src="@if($partnership->image){{"/uploads/categories/" .$partnership->image }}
                @else{{asset('images/default-image.png')}}@endif">
            </div>
            @endforeach
        </div>
      </div>





    <!-- EXPLORE OUR OFFERING Responsive -->
    <div class="bg-gray-200 px-16 py-8 hidden lg:block">
        <h1 class="text-3xl font-semibold mb-20 pt-10">
            <p class="mb-4">{{ _trans('EXPLORE OUR OFFERING') }}</p>
            <hr class="w-10 h-0.5 border-none bg-yellow-500">
        </h1>
        <div class="flex flex-wrap" id="tabs-id">
            <div class="flex md:flex-col lg:flex-row shadow-xl bg-white rounded">
                <ul class="flex list-none flex-wrap -mt-10 flex-col bg-blue-900 lg:w-2/5 md:w-full shadow-2xl py-10">
                    <li class=" -mr-6 last:mr-0 flex-auto pl-10 cursor-pointer hover:underline z-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal cursor-pointer text-white bg-blue-600"
                            onclick="changeAtiveTab(event,'software-development')">
                            {{ _trans('Software Development') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 last:mr-0 flex-auto cursor-pointer pl-10 cursor-pointer hover:underline z-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'infrastructure-services')">
                            {{ _trans('Infrastructure Services') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'application-services')">
                            {{ _trans('Application Services') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'ux-ui-design')">
                            {{ _trans('UX/UI Design') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal hover:underline text-white"
                            onclick="changeAtiveTab(event,'testing-qa')">
                            {{ _trans('Testing & QA') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'it-consulting')">
                            {{ _trans('IT Consulting') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'data-analytics')">
                            {{ _trans('Data Analytics') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'help-desk-services')">
                            {{ _trans('Help Desk Services') }}
                        </a>
                    </li>
                    <li class="-mb-px -mr-6 z-10 last:mr-0 flex-auto cursor-pointer hover:underline pl-10">
                        <a class="text-xl font-bold px-5 py-3 block leading-normal text-white"
                            onclick="changeAtiveTab(event,'cybersecurity-services')">
                            {{ _trans('Cybersecurity Services') }}
                        </a>
                    </li>
                </ul>
                <div class="relative flex flex-col min-w-0 break-words bg-white rounded w-full mb-6">
                    <div class="p-4 flex-auto lg:h-h-auto">
                        <div class="tab-content tab-space p-8">
                            <div class="block text-xl pb-10" id="software-development">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Software Development') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("The development of reliable and scalable software solutions for any OS, browser and device.
                   We bring
                   together deep industry expertise and the latest IT advancements to deliver custom solutions and products
                   that perfectly fit the
                   needs and behavior of their users.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Software consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black  hover:text-blue-500">{{ _trans('Custom software development') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black  hover:text-blue-500">{{ _trans('Software product development') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Team augmentation') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Software development outsourcing') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="infrastructure-services">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Infrastructure Services') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("We apply our 10-year experience to offer a full set of infrastructure services. We can help
                   to maintain
                   and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Managed IT Support') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Data center support and management') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Cloud consulting and management') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('DevOps consulting and implementation') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Virtual desktop consulting, implementation and support') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Networking management services') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="application-services">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Application Services') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("The full set of services around development and maintenance of complex business-critical
                   applications. Our experts
                   build, test, deploy, protect, manage, migrate and optimize enterprise-scale digital solutions ensuring
                   they’re always up
                   and running and achieve the optimal TCO.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application management') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application modernization') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application integration') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application security services') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application development') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application testing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application maintenance and support') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-20" id="ux-ui-design">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('UX/UI Design') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("User experience and user interface design for all types of websites, SaaS, and web/mobile
                   apps. We combine the latest
                   UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful
                   designs that
                   power up businesses.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('User Interface (UI) Design') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Responsive Web App Design') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Software-as-as-Service (SaaS) UI Design') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Ecommerce Website Design') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('User Experience (UX) Design') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Website Redesign') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Responsive Web Design') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="testing-qa">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Testing & QA') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("We offer full-range QA and testing outsourcing services, can help to develop your QA or
                   enhance the existing one, assist
                   you in TCoE setup and evolution. We perform end-to-end testing of mobile, web and desktop application at
                   each stage of
                   the development lifecycle.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('QA outsourcing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('QA consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Security testing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Functional testing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Usability testing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Performance testing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Test automation') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="it-consulting">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('IT Consulting') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("Our experts can help to develop and implement an effective IT strategy, assist in smooth
                   digital transformation and
                   system integration as well as advise on improvements to your digital customer experience.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black">{{ _trans('Digital Transformation Consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Project Management Consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Digital Crisis Management Consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('IT Service Management Consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Solution consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Platform consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Enterprise IT consulting') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="data-analytics">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Data Analytics') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("We support businesses in achieving fact-based decision-making by converting their historical
                   and real-time, traditional
                   and big data into actionable insights. Our services are tailored to make the raw data and the environment
                   ready, as well
                   as strengthen the business with advanced analytics capabilities.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Business Intelligence') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#" class="text-black hover:text-blue-500">{{ _trans('Big Data') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Data Warehousing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Data Science') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Data Management') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Machine and Deep Learning') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Data Analytics as a Service') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="help-desk-services">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Help Desk Services') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("Help desk services for your IT environment or software products. We take on solving diverse
                   issues from answering
                   application functionality questions to performing fixes and enhancements on the code level for improved
                   adoption of
                   software, its smooth functioning and increased end user satisfaction.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Help desk outsourcing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('IT help desk services') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Outsourced help desk for MSP') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('NOC outsourcing') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden text-xl pb-10" id="cybersecurity-services">
                                <h1 class="text-3xl font-semibold">
                                    <p class="mb-2">{{ _trans('Cybersecurity Services') }}</p>
                                    <hr class="w-10 h-0.5 border-none bg-yellow-500">
                                </h1>
                                <p class="my-8 text-gray-600">
                                    {{ _trans("Cybersecurity services to achieve the robust protection of the companies’ applications and
                   networks. Equipped with
                   16-year experience in information security, our security experts are ready to deliver a variety of cyber
                   protection
                   services.") }}
                                </p>
                                <ul class="flex flex-row flex-wrap ml-6 text-blue-600 underline">
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Managed security services') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Compliance testing') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Information security consulting') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Security code review') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Application security implementation') }}</a>
                                    </li>
                                    <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                        <a href="#"
                                            class="text-black hover:text-blue-500">{{ _trans('Vulnerability assessment and penetration testing') }}</a>
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
        <h1 class="text-center text-gray-500 mt-10 mb-20 text-xl">
            {{ _trans("Haven't found a suitable service? Type your need below!") }}</h1>
        <!-- Forms -->
        <form class="border-2 border-gray-500 flex flex-row rounded-full p-4 mb-20">
            <div class="flex justify-center items-center">
                <i class="fa fa-search text-gray-500 mr-4"></i>
            </div>
            <input type="search" name="Search" class="w-full border-none outline-none"
                placeholder="{{ _trans('E.g., VR development or help desk services') }}" />
        </form>

        <!-- EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF. -->
        <div class="flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
            <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
                <h1 class="text-3xl font-semibold">{{ _trans('EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF.') }}
                </h1>
                <p class="text-xl text-gray-700 my-6">
                    {{ _trans('Comprehensive care of your cloud or on-premises infrastructure and applications with:') }}
                </p>
                <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans('Consulting') }}</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans('Security') }}</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans('Implementation') }}</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans('Help desk services') }}</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans('Management and support') }}</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans('Migration') }}</li>
                </ul>
                <a href="#" class="flex flex-row items-center text-blue-700">
                    <p class="uppercase mr-3 font-semibold">{{ _trans('Learn More') }}</p>
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
            <div
                class="bg-white rounded shadow-2xl h-full lg:h-96 lg:w-2/5 w-full flex justify-center items-center lg:-mt-20 lg:-mr-10">
                <img src="https://www.scnsoft.com/---home-page-illustrations/image-thumb__22108__home_Image-text/managed-it-services~-~1919w.png"
                    alt="EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF">
            </div>
        </div>
    </div>
    <div class="flex flex-wrap overflow-hidden my-2">

        @foreach ($categories as $category)
            @if ($category->category_id == 40)
                <div
                    class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/6 xl:w-1/6">
                    <a href="">
                        <div
                            class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5 md:py-3 md:py-3 sm:py-2 sm:py-2">
                            @if ($category->icon)<img class="h-32 w-32"
                                src="{{ '/uploads/categories/' . $category->icon }}" alt="logo">@else<img
                                    class="h-32 w-32" src="{{ asset('images/default-image.png') }}" alt="logo">
                            @endif
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
    </div>


    <!-- IMPROVE AND INNOVATE WITH THE TECH TRENDS -->
    <div class="bg-blue-900 lg:px-16 px-3 my-5 py-10 text-white">
        <h1 class="text-2xl lg:text-3xl font-semibold">
            <p class="mb-4">{{ _trans('Solutions we deliver') }}</p>
            <hr class="w-10 h-0.5 border-none bg-yellow-500">
        </h1>
        <p class="text-xs lg:text-xl my-4 lg:my-8">
            {{ _trans('We IT-enable all kinds of B2B, B2C interactions and internal operations.') }}</p>
        <ul class="text-black flex flex-wrap flex-row">
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('Enterprise application') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('CRM') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('eCommerce') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('Mobile Apps') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('Collaboration and productivity solutions') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('Data Analytics') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('Web Portals') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
            <li
                class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
                <a href="#">
                    {{ _trans('ITSM') }}
                </a>
                <div class="absolute bottom-3 right-3">
                    <i class="fa fa-arrow-right fa-rotate-45"></i>
                </div>
            </li>
        </ul>
    </div>

    <div class="mx-6 sm:mx-16 lg:mx-16">
        <h1 class="uppercase font-bold text-2xl">{{ _trans('TECHNOLOGIES WE USE') }}</h1>
        <hr class="w-10 h-0.5 border-none my-2 bg-yellow-500">
        <div class="swiper-container main-slide">
            <div class="swiper-wrapper flex items-center">
                @foreach ($partnerships as $partnership)
                <div class="swiper-slide flex justify-center items-center p-24 md:p-14">

                    <img src="@if($partnership->image){{"/uploads/categories/" .$partnership->image }}
                    @else{{asset('images/default-image.png')}}@endif">

                </div>
                @endforeach
              <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img src="{{ asset('images/viber.svg') }}" alt=""></div>
            </div>
          </div>
        </div>

    <div class="mx-6 sm:mx-16 lg:mx-16">
        <h1 class="uppercase font-bold text-2xl">{{ _trans('PLATFORMS WE WORK WITH') }}</h1>
        <hr class="w-10 h-0.5 border-none my-2 bg-yellow-500">
        <p class='text-lg text-gray-800'>Distilling deep tech experience, our experts can help you with platform-specific
            consulting, solution design and
            support
            for your business evolution.</p>
        <div class="py-3 flex justify-between flex-wrap">
            <div class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
                <img src="{{asset("images/sharepoint-logo.svg")}}"/>
            </div>
            <div class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
                <img src="{{asset("images/dynamics-365.svg")}}"/>
            </div>
            <div class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
                <img src="{{asset("images/salesforce.svg")}}"/>
            </div>
            <div class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
                <img src="{{asset("images/servicenow-logo.svg")}}"/>
            </div>
            <div class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
                <img src="{{asset("images/magento-logo.svg")}}"/>
            </div>
        </div>
        </div>

            @isset($blogs)
                <div>
                    <div class="my-4 mx-6 sm:mx-16 lg:mx-18 lg:mt-12 mt-3">
                        <h1 class="uppercase font-bold text-2xl pb-4">{{ _trans('Featured Insights') }}</h1>
                        <hr class="w-10 h-0.5 border-none bg-yellow-500">
                    </div>
                    <div class="flex flex-wrap mx-6 sm:mx-16 lg:mx-12">
                        @foreach ($blogs->splice(0, 3) as $blog)
                            <div class="w-2/6 p-4">
                                <a href="{{ route('SingleBlog', [$blog->id]) }}"
                                    class="no-underline text-gray-200 block w-96 duration-300 shadow-lg hover:shadow-2xl relative">
                                    <div>
                                        <img class="w-full h-auto" src="/uploads/blogs/{{ $blog->image }}" alt="CardImg">
                                    </div>
                                    <div class="px-4">
                                        <span class="text-yellow-400 text-xs font-bold">CRM</span>
                                        <h1 class="text-lg text-black font-bold py-2">
                                            {{ $blog->title }}
                                        </h1>
                                        <p class="text-sm text-black">
                                            {{ $blog->description }}
                                        </p>

                                        <div class="bg-none w-full py-2 flex justify-end text-blue-500 focus:outline-none">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('getBlade', ['page' => 'blog' ?? '404']) }}"
                        class="border-2 border-blue-700 text-blue-700 font-semibold px-6 py-3 uppercase my-8 mx-auto block w-1/6 text-center"
                        id="loadMore">All Blog Articles</a>
                </div>
            @endisset
            <!-- Need a CONSULTATION? -->
        </div>

        <h1 class="px-16 text-3xl py-5">
            <p class="mb-4">{{ _trans('NEED A CONSULTATION?') }}</p>
            <hr class="w-10 h-0.5 border-none bg-yellow-500">
        </h1>

        <form method="POST" action="{{ route('consultation') }}" class="px-16 py-5 text-gray-800">
            @csrf
            <p class="py-5">{{ _trans('Drop us a line! We are here to answer your questions 24/7.') }}</p>
            <div class="flex">
                <div class="w-full">
                    <div class="w-full flex justify-between flex-wrap">
                        <input type="text" name="Name" placeholder="Full Name"
                            class="px-5 lg:w-1/6 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                        <input type="text" name="Company" placeholder="Company"
                            class="px-5 lg:w-1/6 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                        <input type="email" name="Email" placeholder="Work Email"
                            class="px-5 lg:w-1/6 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                        <input type="tel" name="Phone" placeholder="Work Phone"
                            class="px-5 lg:w-1/6 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                    </div>
                    <div class="border border-gray-400 rounded my-5">
                        <textarea class="resize-none w-full px-5 py-2 h-20 focus:outline-none" name="Discription"
                            placeholder="How can we help you?"></textarea>
                    </div>
                    <button
                        class="bg-blue-500 px-5 m-auto py-2 uppercase font-bold text-white rounded text-sm">{{ _trans('Disscuss my needs') }}</button>
                </div>
                <div class="px-5 md:block hidden">
                    <div>
                        <h1 class="font-bold text-xl pb-2">{{ _trans('Our contact details') }}</h1>
                        <a class="text-blue-400 flex items-center" href="#">
                            <i class="fas fa-phone-alt pr-3"></i>
                            <p>{{ _trans('+998 94 123 45 67') }}</p>
                        </a>
                        <a class="text-blue-400 flex items-center" href="#">
                            <i class="fas fa-envelope pr-3"></i>
                            <p>{{ _trans('teamprodev@gmail.com') }}</p>
                        </a>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl pb-2 mt-4">{{ _trans('Press inquires') }}</h1>
                        <a class="text-blue-400 flex items-center text-xs" href="#">
                            <p class="uppercase">{{ _trans('Get in touch with us') }}</p>
                            <i class="fas fa-arrow-right pl-3"></i>
                        </a>
                    </div>
                    <div>
                        <h1 class="font-bold text-xl pb-2 mt-4">{{ _trans('Join our team') }}</h1>
                        <a class="text-blue-400 flex items-center text-xs" href="#">
                            <p class="uppercase">{{ _trans('Check our open vacancies') }}</p>
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
