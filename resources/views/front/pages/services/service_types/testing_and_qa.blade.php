@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>

            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ _trans('Software Testing and QA Services') }}
            </h1>
            <hr class="w-12 my-2 bg-yellow-500 h-0.5">
            <img src="https://www.scnsoft.com/cover-pictures/software-testing-and-qa-services-new.svg">

            <p class="my-10 text-lg">
                {{ _trans("Software testing services help companies to ensure that their software is fully functional,
                reliable,
                secure, and user-friendly.") }}
                <strong>{{ _trans("A software testing company with 31 years of
                experience") }}</strong>,
                {{ _trans("TeamPRO is ready
                to take up a testing project of any scale and complexity, introduce an efficient quality
                assurance
                process, and enhance your software quality management strategy.") }}
            </p>
            <div class="text-2xl md:text-3xl font-bold">
                {{ _trans('CHOOSE YOUR SERVICE OPTION') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <div class="flex flex-wrap my-4">

                <div class="border pb-6 w-96 m-2 hover:shadow-md">
                    <div class="h-3 w-full bg-blue-500"></div>
                    <img width="120" height="108"
                        src="https://www.scnsoft.com/it-consulting/it-consulting-upd/business-digitalization-consulting.svg"
                        class="m-auto my-4" alt="">
                    <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Business
                        digitalization consulting (for CEO)</h1>

                    <div class="px-4 text-md lg:text-xl text-gray-600">
                        <p class="mb-4">We assist in turning IT into a major contributor to a business performance increase
                            with:</p>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                <span class="text-gray-600">A value-driving </span>
                                <span class="text-gray-700 font-bold">business-IT strategy.</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                <span class="text-gray-600">A plan on </span>
                                <span class="text-gray-700 font-bold">IT service delivery optimization.</span>
                            </li>
                        </ul>
                        <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 text-white block text-center p-4">
                            TRANSFORM YOUR IT
                        </a>
                    </div>
                </div>

                <div class="border pb-6 w-96 m-2 hover:shadow-md">
                    <div class="h-3 w-full bg-blue-500"></div>
                    <img width="120" height="108"
                        src="https://www.scnsoft.com/it-consulting/it-consulting-upd/business-digitalization-consulting.svg"
                        class="m-auto my-4" alt="">
                    <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Business
                        digitalization consulting (for CEO)</h1>

                    <div class="px-4 text-md lg:text-xl text-gray-600">
                        <p class="mb-4">We assist in turning IT into a major contributor to a business performance increase
                            with:</p>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                <span class="text-gray-600">A value-driving </span>
                                <span class="text-gray-700 font-bold">business-IT strategy.</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                <span class="text-gray-600">A plan on </span>
                                <span class="text-gray-700 font-bold">IT service delivery optimization.</span>
                            </li>
                        </ul>
                        <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 text-white block text-center p-4">
                            TRANSFORM YOUR IT
                        </a>
                    </div>
                </div>

                <div class="border pb-6 w-96 m-2 hover:shadow-md">
                    <div class="h-3 w-full bg-blue-500"></div>
                    <img width="120" height="108"
                        src="https://www.scnsoft.com/it-consulting/it-consulting-upd/business-digitalization-consulting.svg"
                        class="m-auto my-4" alt="">
                    <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Business
                        digitalization consulting (for CEO)</h1>

                    <div class="px-4 text-md lg:text-xl text-gray-600">
                        <p class="mb-4">We assist in turning IT into a major contributor to a business performance increase
                            with:</p>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                <span class="text-gray-600">A value-driving </span>
                                <span class="text-gray-700 font-bold">business-IT strategy.</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                <span class="text-gray-600">A plan on </span>
                                <span class="text-gray-700 font-bold">IT service delivery optimization.</span>
                            </li>
                        </ul>
                        <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 text-white block text-center p-4">
                            TRANSFORM YOUR IT
                        </a>
                    </div>
                </div>


            </div>

            <div>
                <h1 class="font-bold text-2xl md:text-3xl">{{ _trans('OUR COMPETENCIES AND ACHIEVEMENTS') }}</h1>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">

                <div class="swiper-container about-slide h-40">
                    <div class="swiper-wrapper flex items-center">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img src="@if ($partner->image) {{ '/uploads/categories/' . $partner->image }}
                                @else{{ 'asset(images/default-image.png)' }} @endif "></div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <ul class="list-disc text-base md:text-xl px-5">
                    <li><strong>31 {{ _trans('years') }}</strong>
                        {{ _trans('of experience in providing software testing services.') }}
                    </li>
                    <li><strong>18 {{ _trans('years') }}</strong>
                        {{ _trans('of experience in QA consulting and outsourcing.') }}
                    </li>
                    <li><strong>730+ {{ _trans('completed software testing projects') }}</strong>
                        {{ _trans('since') }}
                        2010.
                    </li>
                    <li><strong>75+ {{ _trans('full-time QA professionals') }}</strong>
                        {{ _trans("experienced in complex projects (over 80K
                person-hours).") }}
                    </li>
                    <li><strong>{{ _trans('ISO 13485 certified') }}</strong> {{ _trans('software testing company.') }}
                    </li>
                    <li>{{ _trans('Software testing processes in') }} <strong>{{ _trans('compliance with ISO') }}
                            9001:2015</strong>.
                    </li>
                    <li>{{ _trans('Respect to test artefacts required by') }} <strong>ISO/IEC/IEEE 29119-3:2013</strong>.
                    </li>
                    <li><strong>{{ _trans('ISTQB-certified') }}</strong>,
                        {{ _trans('domain-trained test engineers.') }}
                    </li>
                    <li>{{ _trans('In-house') }} <strong>{{ _trans('center of excellence') }}</strong>
                        {{ _trans('for software testing services.') }}
                    </li>
                </ul>

                <div class="mt-10">
                    <h1 class="text-2xl md:text-3xl font-bold">{{ _trans('EVERY ASPECT OF YOUR SOFTWARE, VALIDATED') }}
                    </h1>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>
                <!-- <div class="aylan1a"> -->
                <div class="swiper-container big-slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-16 pb-4">
                            <div class="p-6 border md:flex hover:shadow-lg my-6">
                                <div class="md:w-6/12 mr-3">
                                    <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2c-demo.png"
                                        alt="">
                                </div>
                                <div class="mt-6 md:w-6/12 ml-3">
                                    <h1 class="text-xl font-bold">
                                        A B2C ecommerce portal demo
                                    </h1>
                                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                        In B2C ecommerce portals, customers value personalized and frictionless experience
                                        across
                                        the digital channels.
                                    </p>
                                    <p class="text-center mt-4 md:text-right lg:pt-16">
                                        <a href="#" class="text-blue-700 font-semibold items-end">
                                            WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-16 pb-4">
                            <div class="p-6 border md:flex hover:shadow-lg my-6">
                                <div class="md:w-6/12 mr-3">
                                    <img class="m-auto"
                                        src="https://www.scnsoft.com/blog-pictures/ecommerce/b2b-ecommerce-demo.png" alt="">
                                </div>
                                <div class="mt-6 md:w-6/12 ml-3">
                                    <h1 class="text-xl font-bold">
                                        A B2B ecommerce portal demo
                                    </h1>
                                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                        In B2B ecommerce portals, buyers value convenient self-service tools to place and
                                        manage
                                        their bulk orders.
                                    </p>

                                    <p class="text-center mt-4 md:text-right lg:pt-16">
                                        <a href="#" class="text-blue-700 font-semibold items-end">
                                            WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </p>

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="swiper-button-next text-gray-400"></div>
                    <div class="swiper-button-prev text-gray-400"></div>
                </div>

                <div class="text-2xl md:text-3xl font-bold mt-10">
                    {{ _trans('TESTING SERVICES FOR DIFFERENT APPLICATION TYPES') }}
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>
                <div class="flex flex-wrap gap-4">
                    <a href="#"
                        class="w-64 px-5 py-2 border border-gray-200 hover:shadow-lg group duration-300 flex flex-col justify-between items-center">
                        <img class="w-24"
                            src="https://www.scnsoft.com/colored-icons-on-grey-background/web-application-1.svg">
                        <p class="group-hover:text-blue-400 duration-300 font-bold">Web Application Testing</p>
                    </a>
                    <a href="#"
                        class="w-64 px-5 py-2 border border-gray-200 hover:shadow-lg group duration-300 flex flex-col justify-between items-center">
                        <img class="w-24" src="https://www.scnsoft.com/colored-icons-on-grey-background/saas.svg">
                        <p class="group-hover:text-blue-400 duration-300 font-bold">saaS Testing</p>
                    </a>
                    <a href="#"
                        class="w-64 px-5 py-2 border border-gray-200 hover:shadow-lg group duration-300 flex flex-col justify-between items-center">
                        <img class="w-24" src="https://www.scnsoft.com/colored-icons-on-grey-background/mobile.svg">
                        <p class="group-hover:text-blue-400 duration-300 font-bold">Mobile App Testing</p>
                    </a>
                </div>
                <div
                    class="w-full flex items-center justify-between px-10 py-5 my-5 border border-gray-200 hover:shadow-lg duration-300">
                    <div class=" my-5">
                        <h1 class="text-2xl font-bold">{{ _trans('Take the First Step to Test Process Improvement') }}
                        </h1>
                        <hr class="border-t-2 w-12 border-yellow-600 my-2">
                        <p>TeamPRO’s QA team will help you stay ahead of the competition with quality software released on
                            time.</p>
                    </div>
                    <a class="px-10 py-3 bg-blue-500 text-white font-bold rounded" href="#">Start Testing Now</a>
                </div>

                <div class="text-2xl md:text-3xl font-bold mt-10">
                    {{ _trans('Our Customers Say') }}
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>
                <div class="text-lg md:text-2xl leading-relaxed">

                    <p>

                        {{ _trans("We started working with TeamPRO in early 2011 testing our core application called
                    Careware.
                    The application is quite complex and has many ERP and mobile elements in it.") }}
                    </p>

                    <p>
                        {{ _trans("We have worked with the team in very close cooperation ever since and value professional as
                    well
                    as flexible attitude towards testing. Since starting our cooperation the test team has
                    changed
                    in size and people, with one tester remaining with us for already 2 years now! We currently
                    have
                    a team of 3 very enthusiastic and good testers with whom we are very happy.") }}
                    </p>
                    <div class="flex justify-end">
                        <em>
                            <strong>
                                {{ _trans('Roderick Schipper, CTO and Henriette Trampedach, Test Manager, helpLine') }}
                                B.V.
                            </strong>
                        </em>
                    </div>
                    <div class="flex justify-end">
                        <img class="w-40 md:w-60" src="https://www.scnsoft.com/testimonials-logos/helpline-bv-logo.png"
                            alt="">

                    </div>

                </div>
                <div class="text-2xl md:text-3xl font-bold mt-10">
                    {{ _trans('Why testing with TeamPRO is a success') }}
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>

                <div class="flex flex-row">

                    <div class="border-2 px-6 ">
                        <img class="w-14 my-8"
                            src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                        <p><strong class="text-xl">{{ _trans('Mature project management') }}</strong></p>
                        <p class="mb-20 mt-8">{{ _trans('We have a structured test process compliant with') }} ISO 13485
                            {{ _trans('and') }} ISO
                            9001:2015
                            {{ _trans("and
                        establish result-oriented collaboration with the project team and third-party vendors.") }}
                        </p>
                    </div>
                    <div class="border-2 mx-8 px-6 ">
                        <img class="w-14 my-8"
                            src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                        <p><strong class="text-xl">{{ _trans('Mature project management') }}</strong></p>
                        <p class="mt-8">{{ _trans('We have a structured test process compliant with') }} ISO 13485 and
                            ISO
                            9001:2015
                            {{ _trans("and
                        establish result-oriented collaboration with the project team and third-party vendors.") }}
                        </p>
                    </div>
                    <div class="slider border-2 px-6 ">
                        <img class="w-14 my-8"
                            src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                        <p><strong class="text-xl">{{ _trans('Mature project management') }}</strong></p>
                        <p class="mt-8">{{ _trans('We have a structured test process compliant with') }} ISO 13485 and
                            ISO
                            9001:2015
                            {{ _trans("and
                        establish result-oriented collaboration with the project team and third-party vendors.") }}
                        </p>
                    </div>

                </div>

                <div class="text-2xl md:text-3xl font-bold mt-10">
                    {{ _trans('More success stories') }}
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>
                <div
                    class="w-full flex items-center justify-between px-10 py-5 my-5 border border-gray-200 hover:shadow-lg duration-300">
                    <div class=" my-5">
                        <h1 class="text-2xl font-bold">
                            {{ _trans('Enjoy Quality at Speed While We Handle Software Testing') }}</h1>
                        <hr class="border-t-2 w-12 border-yellow-600 my-2">
                        <p>TeamPRO’s QA team will help you jump-start your releases and minimize the number of defects in
                            production.</p>
                    </div>
                    <a class="px-10 py-3 bg-blue-500 text-white font-bold rounded" href="#">Start Testing</a>
                </div>
            </div>
        </div>

    @endsection



    @section('js')


    @endsection
