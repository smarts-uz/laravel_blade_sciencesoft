@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="w-full flex flex-col lg:flex-row mb-10">
        <div class="w-full lg:w-1/5">
            @include('front.Components.softwareAside')
        </div>
        <div class="w-full lg:w-4/5 px-6">
            <div class="flex flex-row text-gray-400 text-sm">
                <a href="/" class='text-gray-500'>{{ _trans('Home') }}</a>
                <p class='mx-2'>></p>
                <p>{{ _trans('Software Development') }}</p>
            </div>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-5xl font-bold'>{{ _trans('Software Development Services') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <img src="https://www.scnsoft.com/software-development-services/sciencesoft-software-development-services.svg"
                alt="">
            <p class='text-gray-700 text-xl mt-2'><strong>{{ _trans('Invent, build, integrate, scale') }}</strong>
                {{ _trans('and') }} <strong>{{ _trans('upgrade') }}</strong>
                {{ _trans('your applications with ScienceSoft! For more than three decades, ScienceSoft has been harnessing digital technologies for the benefit of Fortune 500 businesses, mid and large enterprises, and startups across the variety of industries. Fully in the art and science of software engineering and management, we help you to build high-quality software solutions and products as well as deliver a wide range of related professional services.') }}
            </p>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('WHAT SERVICE ARE YOU LOOKING FOR?') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <ul class='w-full flex flex-row flex-wrap'>
                <li class="rounded-sm border-2 transition-shadow hover:shadow-lg w-2/6 my-3">
                    <hr class="w-full h-2 border-none bg-blue-800" />
                    <div class="w-full px-4 py-8">
                        <h1 class="text-xl font-semibold text-center text-blue-700 mb-3">
                            {{ _trans('Software Consulting') }}</h1>
                        <p class='text-gray-600 mb-10'>{{ _trans('A holistic set of') }}
                            <strong>{{ _trans('consulting services for both new and ongoing software development projects') }}</strong>
                            {{ _trans('– from ideation and feasibility study to implementation strategy.') }}</p>
                        <div class='uppercase w-full py-3 text-center bg-blue-700 text-white hover:bg-blue-900'>
                            <a href="#">{{ _trans('Check Details') }}</a>
                        </div>
                    </div>
                </li>
                <li class="rounded-sm border-2 transition-shadow hover:shadow-lg w-2/6 my-3">
                    <hr class="w-full h-2 border-none bg-blue-800" />
                    <div class="w-full px-4 py-8">
                        <h1 class="text-xl font-semibold text-center text-blue-700 mb-3">
                            {{ _trans('Software Consulting') }}</h1>
                        <p class='text-gray-600 mb-10'>{{ _trans('A holistic set of') }}
                            <strong>{{ _trans('consulting services for both new and ongoing software development projects') }}</strong>
                            {{ _trans('– from ideation and feasibility study to implementation strategy.') }}</p>
                        <div class='uppercase w-full py-3 text-center bg-blue-700 text-white hover:bg-blue-900'>
                            <a href="#">{{ _trans('Check Details') }}</a>
                        </div>
                    </div>
                </li>
                <li class="rounded-sm border-2 transition-shadow hover:shadow-lg w-2/6 my-3">
                    <hr class="w-full h-2 border-none bg-blue-800" />
                    <div class="w-full px-4 py-8">
                        <h1 class="text-xl font-semibold text-center text-blue-700 mb-3">
                            {{ _trans('Software Consulting') }}</h1>
                        <p class='text-gray-600 mb-10'>{{ _trans('A holistic set of') }}
                            <strong>{{ _trans('consulting services for both new and ongoing software development projects') }}</strong>
                            {{ _trans('– from ideation and feasibility study to implementation strategy.') }}</p>
                        <div class='uppercase w-full py-3 text-center bg-blue-700 text-white hover:bg-blue-900'>
                            <a href="#">{{ _trans('Check Details') }}</a>
                        </div>
                    </div>
                </li>
                <li class="rounded-sm border-2 transition-shadow hover:shadow-lg w-2/6 my-3">
                    <hr class="w-full h-2 border-none bg-blue-800" />
                    <div class="w-full px-4 py-8">
                        <h1 class="text-xl font-semibold text-center text-blue-700 mb-3">
                            {{ _trans('Software Consulting') }}</h1>
                        <p class='text-gray-600 mb-10'>{{ _trans('A holistic set of') }}
                            <strong>{{ _trans('consulting services for both new and ongoing software development projects') }}</strong>
                            {{ _trans('– from ideation and feasibility study to implementation strategy.') }}</p>
                        <div class='uppercase w-full py-3 text-center bg-blue-700 text-white hover:bg-blue-900'>
                            <a href="#">{{ _trans('Check Details') }}</a>
                        </div>
                    </div>
                </li>
                <li class="rounded-sm border-2 transition-shadow hover:shadow-lg w-2/6 my-3">
                    <hr class="w-full h-2 border-none bg-blue-800" />
                    <div class="w-full px-4 py-8">
                        <h1 class="text-xl font-semibold text-center text-blue-700 mb-3">
                            {{ _trans('Software Consulting') }}</h1>
                        <p class='text-gray-600 mb-10'>{{ _trans('A holistic set of') }}
                            <strong>{{ _trans('consulting services for both new and ongoing software development projects') }}</strong>
                            {{ _trans('– from ideation and feasibility study to implementation strategy.') }}</p>
                        <div class='uppercase w-full py-3 text-center bg-blue-700 text-white hover:bg-blue-900'>
                            <a href="#">{{ _trans('Check Details') }}</a>
                        </div>
                    </div>
                </li>
                <li class="rounded-sm border-2 transition-shadow hover:shadow-lg w-2/6 my-3">
                    <hr class="w-full h-2 border-none bg-blue-800" />
                    <div class="w-full px-4 py-8">
                        <h1 class="text-xl font-semibold text-center text-blue-700 mb-3">
                            {{ _trans('Software Consulting') }}</h1>
                        <p class='text-gray-600 mb-10'>{{ _trans('A holistic set of') }}
                            <strong>{{ _trans('consulting services for both new and ongoing software development projects') }}</strong>
                            {{ _trans('– from ideation and feasibility study to implementation strategy.') }}</p>
                        <div class='uppercase w-full py-3 text-center bg-blue-700 text-white hover:bg-blue-900'>
                            <a href="#">{{ _trans('Check Details') }}</a>
                        </div>
                    </div>
                </li>
            </ul>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('SOFTWARE WE DEVELOP') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <ul class='w-full flex flex-row flex-wrap'>
                <li class='text-xl font-bold shadow-sm hover:shadow-lg py-5 w-1/3 my-3'>
                    <a href="#" class='text-gray-800 hover:text-blue-500 flex flex-col justify-center items-center'>
                        <img class='rounded-full w-20 h-20'
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/web-application.svg" alt="">
                        <p class>{{ _trans('Web applications') }}</p>
                    </a>
                </li>
                <li class='text-xl font-bold shadow-sm hover:shadow-lg py-5 w-1/3 my-3'>
                    <a href="#" class='text-gray-800 hover:text-blue-500 flex flex-col justify-center items-center'>
                        <img class='rounded-full w-20 h-20'
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/mobile.svg" alt="">
                        <p class>{{ _trans('Mobile Apps') }}</p>
                    </a>
                </li>
                <li class='text-xl font-bold shadow-sm hover:shadow-lg py-5 w-1/3 my-3'>
                    <a href="#" class='text-gray-800 hover:text-blue-500 flex flex-col justify-center items-center'>
                        <img class='rounded-full w-20 h-20'
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/cloud-application.svg" alt="">
                        <p class>{{ _trans('Cloud Applications') }}</p>
                    </a>
                </li>
                <li class='text-xl font-bold shadow-sm hover:shadow-lg py-5 w-1/3 my-3'>
                    <a href="#" class='text-gray-800 hover:text-blue-500 flex flex-col justify-center items-center'>
                        <img class='rounded-full w-20 h-20'
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/saas.svg" alt="">
                        <p class>{{ _trans('Saas products') }}</p>
                    </a>
                </li>
                <li class='text-xl font-bold shadow-sm hover:shadow-lg py-5 w-1/3 my-3'>
                    <a href="#" class='text-gray-800 hover:text-blue-500 flex flex-col justify-center items-center'>
                        <img class='rounded-full w-20 h-20'
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/desktop-application.svg" alt="">
                        <p class>{{ _trans('Desktop applications') }}</p>
                    </a>
                </li>
                <li class='text-xl font-bold shadow-sm hover:shadow-lg py-5 w-1/3 my-3'>
                    <a href="#" class='text-gray-800 hover:text-blue-500 flex flex-col justify-center items-center'>
                        <img class='rounded-full w-20 h-20'
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/library.svg" alt="">
                        <p class>{{ _trans('Libraries') }}</p>
                    </a>
                </li>
            </ul>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('WHY SCIENCESOFT?') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <div class="container">
                <section class="customer-logos slider">
                    <div class="slide"><img class="h-32 w-32" src="/images/deloitte.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/ebay.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/ford.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/ibm.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/leo-burnett.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/nasa_1.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/nestle.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/tieto.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/viber.svg" alt="logo"></div>
                </section>
            </div>
            <ul style="list-style: square" class='text-blue-500 text-xl'>
                <li>
                    <p class='text-gray-700'> <strong>31 {{ _trans('years') }}</strong> {{ _trans('in IT.') }}</p>
                </li>
                <li>
                    <p class='text-gray-700'> {{ _trans('One-stop shop for') }}
                        <strong>{{ _trans('end-to-end') }}</strong> {{ _trans('software development.') }}</p>
                </li>
                <li>
                    <p class='text-gray-700'> {{ _trans('Over') }} <strong>450 {{ _trans('developers') }}</strong>
                        {{ _trans('on board, and the partner network of') }} <span class='text-gray-700'>5
                            {{ _trans('companies with 700 employees.') }}</span></p>
                </li>
                <li>
                    <p class='text-gray-700'> {{ _trans('More than 50% of the developers are of') }}
                        <strong>{{ _trans('senior level.') }}</strong></p>
                </li>
                <li>
                    <p class='text-gray-700'> 25+ {{ _trans('business analysts with') }} <strong>5-9
                            {{ _trans('years') }}</strong> {{ _trans('of experience in the relevant fields.') }}
                    </p>
                </li>
                <li>
                    <p class='text-gray-700'> {{ _trans('Mature') }}
                        <strong>{{ _trans('DevOps culture') }}</strong>, {{ _trans('deep background in') }}
                        <strong>{{ _trans('containerized environments, cloud computing, continuous integration') }}</strong>
                        {{ _trans('(CI) and') }} <strong>{{ _trans('continuous delivery') }}</strong>
                        {{ _trans('(CD).') }}</p>
                </li>
                <li>
                    <p class='text-gray-700'> <strong>2,695</strong>
                        {{ _trans('success stories (including projects for Walmart, eBay, NASA JPL, PerkinElmer, Baxter, IBM, Leo Burnett).') }}
                    </p>
                </li>
            </ul>
            <div class="container">
                <section class="customer-logos slider">
                    <div class="slide"><img class="h-32 w-32" src="/images/deloitte.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/ebay.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/ford.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/ibm.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/leo-burnett.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/nasa_1.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/nestle.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/tieto.svg" alt="logo"></div>
                    <div class="slide"><img class="h-32 w-32" src="/images/viber.svg" alt="logo"></div>
                </section>
            </div>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('WE EAGERLY PUT IN USE IT INNOVATIONS') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <ul class='text-black flex flex-wrap flex-row'>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Big Data') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Artificial Intelligence') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Data Science') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Internet of Things') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Computer Vision') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Augmented Reality') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Virtual Reality') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p>{{ _trans('Blockchain') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('TECHNOLOGIES WE USE') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <p class='text-xl text-gray-600'>
                {{ _trans('We employ the proven combination of the latest and classic trusted technologies, having the following technology stack as our basis:') }}
            </p>

            <!-- Tabs Control -->
            <div class="carousel relative shadow-2xl bg-white py-10 block lg:hidden">
                <div class="carousel-inner relative overflow-hidden w-full">
                    <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0">
                        <!-- <div class="block h-full w-full bg-blue-500 text-white text-5xl text-center">{{ _trans('Slide 1') }}</div> -->
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Software Development') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ _trans("The development of reliable and scalable software solutions for any OS, browser and
              device.
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
                    </div>
                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <!-- <div class="block h-full w-full bg-blue-500 text-white text-5xl text-center">{{ _trans('Slide 2') }}</div> -->
                        <div class="block h-full w-full pb-10 text-xl">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Infrastructure Services') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ _trans("We apply our 10-year experience to offer a full set of infrastructure services. We can
              help to maintain and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.") }}
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
                    </div>
                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <!-- <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">{{ _trans('Slide 3') }}</div> -->
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Application Services') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
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
                    </div>
                    <!-- Slide 4 -->
                    <input class="carousel-open" type="radio" id="carousel-4" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <!-- <div class="block h-full w-full bg-red-500 text-white text-5xl text-center">{{ _trans('Slide 4') }}</div> -->
                        <div class="block h-full w-full text-xl pb-20">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('UX/UI Design') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ _trans("User experience and user interface design for all types of websites, SaaS, and
              web/mobile
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
                    </div>
                    <!-- Slide 5 -->
                    <input class="carousel-open" type="radio" id="carousel-5" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Testing & QA') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
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
                    </div>
                    <!-- Slide 6 -->
                    <input class="carousel-open" type="radio" id="carousel-6" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('IT Consulting') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
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
                    </div>
                    <!-- Slide 7 -->
                    <input class="carousel-open" type="radio" id="carousel-7" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Data Analytics') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ _trans("We support businesses in achieving fact-based decision-making by converting their
              historical
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
                                    <a href="#" class="text-black hover:text-blue-500">{{ _trans('Data Science') }}</a>
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
                    </div>
                    <!-- Slide 8 -->
                    <input class="carousel-open" type="radio" id="carousel-8" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Help Desk Services') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ _trans("Help desk services for your IT environment or software products. We take on solving
              diverse issues from answering
              application functionality questions to performing fixes and enhancements on the code level for improved
              adoption of software, its smooth functioning and increased end user satisfaction.") }}
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
                    </div>
                    <!-- Slide 9 -->
                    <input class="carousel-open" type="radio" id="carousel-9" name="carousel" hidden="">
                    <div class="carousel-item absolute opacity-0">
                        <div class="block h-full w-full text-xl pb-10">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ _trans('Cybersecurity Services') }}</p>
                                <hr class="w-10 h-1 bg-pink-600">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ _trans("Cybersecurity services to achieve the robust protection of the companies’ applications
              and
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
                    <!-- {{ _trans('Add additional indicators for each slide') }}-->
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
            <div class="py-8 hidden lg:block">
                <div class="flex flex-wrap pt-10" id="tabs-id">
                    <div class="flex md:flex-col lg:flex-row shadow-xl bg-white">
                        <ul
                            class="flex list-none flex-wrap -mt-10 flex-col bg-blue-900 lg:w-2/5 md:w-full shadow-2xl py-10">
                            <li class=" -mr-6 last:mr-0 flex-auto pl-10 cursor-pointer hover:underline z-10">
                                <a class="text-xl font-bold px-5 py-3 block leading-normal cursor-pointer text-white bg-blue-600"
                                    onclick="changeAtiveTab(event,'software-development')">
                                    {{ _trans('Software Development') }}
                                </a>
                            </li>
                            <li
                                class="-mb-px -mr-6 last:mr-0 flex-auto cursor-pointer pl-10 cursor-pointer hover:underline z-10">
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
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6">
                            <div class="p-4 flex-auto lg:h- h-auto">
                                <div class="tab-content tab-space p-8">
                                    <div class="block text-xl pb-10" id="software-development">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Software Development') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("The development of reliable and scalable software solutions for any OS, browser and device.
                    We bring
                    together deep industry expertise and the latest IT advancements to deliver custom solutions and products
                    that perfectly fit the
                    needs and behavior of their users.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Software consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black  hover:text-blue-500">{{ _trans('Custom software development') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black  hover:text-blue-500">{{ _trans('Software product development') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Team augmentation') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Software development outsourcing') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="infrastructure-services">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Infrastructure Services') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("We apply our 10-year experience to offer a full set of infrastructure services. We can help
                    to maintain
                    and modernize your IT infrastructure and solve various infrastructure-specific issues a business may face.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Managed IT Support') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Data center support and management') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Cloud consulting and management') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('DevOps consulting and implementation') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Virtual desktop consulting, implementation and support') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Networking management services') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="application-services">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Application Services') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("The full set of services around development and maintenance of complex business-critical
                    applications. Our experts
                    build, test, deploy, protect, manage, migrate and optimize enterprise-scale digital solutions ensuring
                    they’re always up
                    and running and achieve the optimal TCO.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application management') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application modernization') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application integration') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application security services') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application development') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application testing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application maintenance and support') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-20" id="ux-ui-design">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('UX/UI Design') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("User experience and user interface design for all types of websites, SaaS, and web/mobile
                    apps. We combine the latest
                    UI/UX trends with our customers’ individual goals and needs to deliver intuitive, vibrant, and impactful
                    designs that
                    power up businesses.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('User Interface (UI) Design') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Responsive Web App Design') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Software-as-as-Service (SaaS) UI Design') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Ecommerce Website Design') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('User Experience (UX) Design') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Website Redesign') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Responsive Web Design') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="testing-qa">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Testing & QA') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("We offer full-range QA and testing outsourcing services, can help to develop your QA or
                    enhance the existing one, assist
                    you in TCoE setup and evolution. We perform end-to-end testing of mobile, web and desktop application at
                    each stage of
                    the development lifecycle.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('QA outsourcing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('QA consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Security testing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Functional testing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Usability testing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Performance testing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Test automation') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="it-consulting">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('IT Consulting') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("Our experts can help to develop and implement an effective IT strategy, assist in smooth
                            digital transformation and
                            system integration as well as advise on improvements to your digital customer experience.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black">{{ _trans('Digital Transformation Consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Project Management Consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Digital Crisis Management Consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('IT Service Management Consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Solution consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Platform consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Enterprise IT consulting') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="data-analytics">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Data Analytics') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("We support businesses in achieving fact-based decision-making by converting their historical
                    and real-time, traditional
                    and big data into actionable insights. Our services are tailored to make the raw data and the environment
                    ready, as well
                    as strengthen the business with advanced analytics capabilities.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Business Intelligence') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Big Data') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Data Warehousing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Data Science') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Data Management') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Machine and Deep Learning') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Data Analytics as a Service') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="help-desk-services">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Help Desk Services') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("Help desk services for your IT environment or software products. We take on solving diverse
                    issues from answering
                    application functionality questions to performing fixes and enhancements on the code level for improved
                    adoption of
                    software, its smooth functioning and increased end user satisfaction.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-500 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Help desk outsourcing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('IT help desk services') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Outsourced help desk for MSP') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('NOC outsourcing') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="hidden text-xl pb-10" id="cybersecurity-services">
                                        <h1 class="text-3xl font-semibold">
                                            <p class="mb-2">{{ _trans('Cybersecurity Services') }}</p>
                                            <hr class="w-10 h-1 bg-pink-600">
                                        </h1>
                                        <p class="my-8 text-gray-600">
                                            {{ _trans("Cybersecurity services to achieve the robust protection of the companies’ applications and
                    networks. Equipped with
                    16-year experience in information security, our security experts are ready to deliver a variety of cyber
                    protection
                    services.") }}
                                        </p>
                                        <ul class="flex flex-row flex-wrap ml-6 text-blue-600 underline">
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Managed security services') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Compliance testing') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Information security consulting') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Security code review') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                                <a href="#"
                                                    class="text-black hover:text-blue-500">{{ _trans('Application security implementation') }}</a>
                                            </li>
                                            <li
                                                style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
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

            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>
                    {{ _trans('WE HAVE A TRACK OF SUCCESSFUL PROJECTS IN VARIOUS INDUSTRIES') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <p class='text-gray-800 text-xl'>
                {{ _trans('We developed integrated solutions and provided IT consulting services for leading enterprises and startups around the globe.') }}
            </p>
            <ul class='text-black flex flex-wrap flex-row'>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Manudacturing') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('HealthCare') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Retail') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Banking and Financial Services') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Telecoms') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Oil and Gas') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Entertainment') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
                <li
                    class="bg-white xl:w-60 lg:w-40 md:w-48 w-2/5 border h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative">
                    <a href="#">
                        <p class='font-semibold'>{{ _trans('Logistics and Transportation') }}</p>
                        <div class="absolute bottom-3 rotate-45 right-3">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('SELECTED PROJECTS') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <div class="bg-gray-100 flex items-start">
                <div class="flex flex-row">
                    <div class='w-full'>
                        <img class="w-full h-full md:w-48 md:h-48"
                            src="https://www.scnsoft.com/boss/images/5dd8f2b4-46b5-47e2-9dd0-e709108e1d9dbig_data_analytics_for_media_consumption_patterns_small.jpg"
                            alt="">
                    </div>
                    <div class="relative flex flex-col py-6">
                        <h1 class="text-2xl md:text-2xl font-bold">
                            {{ _trans('Big Data Implementation for Advertising Channel Analysis in 10+ Countries') }}
                        </h1>
                        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                        <p class=" text-gray-500 text-sm mb-6 md:text-xl">
                            {{ _trans('Migration to a new analytical system that ScienceSoft implemented helped one of the top market research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and Apache Spark frameworks. The new system was 100 times faster compared to the old one and could process 1,000 different data formats.') }}
                        </p>
                        <a href="#"
                            class='absolute bottom-3 right-2 text-xl text-blue-500 hover:text-blue-800'>{{ _trans('Learn More') }}
                            -></a>
                    </div>
                </div>
            </div>
            <div class='flex justify-between items-center p-10 shadow-lg mt-3'>
                <div class='w-2/3'>
                    <h1 class='text-gray-900 mt-6'>
                        <p class='text-2xl font-bold'>
                            {{ _trans('Start Building Your Software in a Couple of Weeks!') }}</p>
                        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                    </h1>
                    <p class='text-gray-600 text-xl'>
                        {{ _trans('We will develop a scalable solution with neat UX design that answers your business needs.') }}
                    </p>
                </div>
                <div class='w-1/3 m-0 flex justify-center items-center'>
                    <a href="#"
                        class='px-8 py-3 bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ _trans('Get a Free Consulation') }}</a>
                </div>
            </div>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-3xl font-bold'>{{ _trans('WHAT DEFINES MODERN SOFTWARE DEVELOPMENT?') }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <div class='flex justify-between'>
                <div class='border px-4 py-6'>
                    <h1 class='text-xl font-bold text-gray-800'>{{ _trans('Practices for speeding up development') }}
                    </h1>
                    <ul style='list-style: square' class='flex flex-col text-xl text-blue-500 px-5'>
                        <li>
                            <p class=text-gray-600>{{ _trans('Agile development') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>
                                {{ _trans('Quality at every stage of the software development cycle') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('Microservices/container-based architecture') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('DevOps (CI/CD)') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('Test automation and test-driven development (TDD)') }}
                            </p>
                        </li>
                    </ul>
                    <div
                        class='w-full py-2 bg-blue-700 text-white flex justify-center items-center text-xl mt-6 hover:bg-blue-900'>
                        <a href="#" class=''>{{ _trans('Provide me process description') }}</a>
                    </div>
                </div>
                <div class='border px-4 py-6 mx-5'>
                    <h1 class='text-xl font-bold text-gray-800'>{{ _trans('Practices for speeding up development') }}
                    </h1>
                    <ul style='list-style: square' class='flex flex-col text-xl text-blue-500 px-5'>
                        <li>
                            <p class=text-gray-600>{{ _trans('Agile development') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>
                                {{ _trans('Quality at every stage of the software development cycle') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('Microservices/container-based architecture') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('DevOps (CI/CD)') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('Test automation and test-driven development (TDD)') }}
                            </p>
                        </li>
                    </ul>
                    <div
                        class='w-full py-2 bg-blue-700 text-white flex justify-center items-center text-xl mt-6 hover:bg-blue-900'>
                        <a href="#" class=''>{{ _trans('Provide me process description') }}</a>
                    </div>
                </div>
                <div class='border px-4 py-6'>
                    <h1 class='text-xl font-bold text-gray-800'>{{ _trans('Practices for speeding up development') }}
                    </h1>
                    <ul style='list-style: square' class='flex flex-col text-xl text-blue-500 px-5'>
                        <li>
                            <p class=text-gray-600>{{ _trans('Agile development') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>
                                {{ _trans('Quality at every stage of the software development cycle') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('Microservices/container-based architecture') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('DevOps (CI/CD)') }}</p>
                        </li>
                        <li>
                            <p class=text-gray-600>{{ _trans('Test automation and test-driven development (TDD)') }}
                            </p>
                        </li>
                    </ul>
                    <div
                        class='w-full py-2 bg-blue-700 text-white flex justify-center items-center text-xl mt-6 hover:bg-blue-900'>
                        <a href="#" class=''>{{ _trans('Provide me process description') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function activeTabsAside(id) {
            const dropdown = document.getElementById(id);
            if (dropdown.style.display == 'flex') {
                dropdown.style.display = "none";
                // console.log(dropdown.style.display);
            } else {
                dropdown.style.display = "flex";
                // console.log('flex');
            }
        }

    </script>

@endsection

@section('js')

@endsection
