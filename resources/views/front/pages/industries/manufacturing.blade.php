@extends('front.layout') @section('css') @endsection @section('main')


<div class="my-8">

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT Solutions for Manufacturing: Software to Drive Business Productivity and Cost Saving') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img src="https://www.scnsoft.com/manufacturing/cover-pic-it-for-manufacturing-1.svg" alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('IT solutions for manufacturing are designed to streamline the operations of a manufacturer from
        supply chain management to sales management, which allows improving the company’s productivity and reducing
        operational costs.') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{_trans('With ')}}
        <span class="text-gray-800 font-bold">{{ _trans('31-year experience')}}</span>
        {{_trans('in developing software for the manufacturing industry, ScienceSoft offers robust solutions and related
        services to support and modernize your enterprise’s operations and ensure ')}}
        <span class="text-gray-800 font-bold">{{ _trans('increased efficiency of operations and optimized business costs, all without IT budget overruns.')}}</span>
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ _trans('Get Rid of Inefficient Business Processes in Manufacturing') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans(' TeamPro team will analyze your business operations and offer you robust IT solutions to
                boost your manufacturing company’s productivity and optimize operational costs.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('GET A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('WHAT MAKES SCIENCESOFT A RELIABLE PARTNER') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="md:flex">
        <div class="md:w-4/12">
            <img src="https://www.scnsoft.com/partners/microsoft-partner-statuses-8-01.svg" alt="">
        </div>
        <div class="md:w-8/12 md:ml-4">
            <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('31 ') }}</span>
                    <span class="text-gray-600">{{ _trans('years in IT for manufacturing.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('8') }}</span>
                    <span class="text-gray-600">{{ _trans(' Microsoft Gold Competencies.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('20+') }}</span>
                    <span class="text-gray-600">{{ _trans('  business analysts and consultants.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans(' 10+ ') }}</span>
                    <span class="text-gray-600">{{ _trans(' UX and UI designers.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('250+ ') }}</span>
                    <span class="text-gray-600">{{ _trans('developers, more than 50% of them are Seniors.') }}</span>

                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ _trans('Successful projects on diverse enterprise-level solutions, such as ERP, CRM, SCM, and more.') }}</span>

                </li>

            </ul>
        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT SOLUTIONS FOR MANUFACTURING TO OPTIMIZE YOUR OPERATIONS') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="grid gap-4 md:grid-cols-2 gap-4">
        <div class="p-6 border">
            <img src="https://www.scnsoft.com/manufacturing/business.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('High-level management and business operations') }}
            </h1>

            <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">

                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' ERP solutions') }}</span>
                </li>
                <li class="text-blue-800 mt-2">

                    <a href="#" class="text-gray-600 hover:text-blue-800 border-b border-blue-700">{{ _trans('Business
                        intelligence solutions') }}</a>
                </li>
                <li class="text-blue-800 mt-2">

                    <a href="#" class="text-gray-600 hover:text-blue-800 border-b border-blue-700">{{ _trans('Data
                        warehouse solutions') }}</a>
                </li>
                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' HR solutions') }}</span>
                </li>
                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Document management solutions') }}</span>
                </li>

                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Intranet solutions') }}</span>
                </li>

            </ul>
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/manufacturing/process.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Production process and asset management') }}
            </h1>

            <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">

                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans('Product lifecycle management solutions') }}</span>
                </li>
                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Equipment utilization monitoring solutions') }}</span>
                </li>
                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Condition monitoring solutions') }}</span>
                </li>
                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans('Predictive maintenance solutions') }}</span>
                </li>
                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Inventory management solutions (IoT-based solutions, inventory optimization solutions, AR solutions for warehouse)') }}</span>
                </li>


            </ul>
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/manufacturing/vendor.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Vendor management') }}
            </h1>

            <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">

                <li class="text-blue-800 mt-2">

                    <a href="#" class="text-gray-600 hover:text-blue-800 border-b border-blue-700">{{ _trans('Vendor
                        portals') }}</a>
                </li>


                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Supply chain management solutions') }}</span>
                </li>

            </ul>
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/manufacturing/customer.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Customer management') }}
            </h1>

            <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">

                <li class="text-blue-800 mt-2">

                    <a href="#" class="text-gray-600 hover:text-blue-800 border-b border-blue-700">{{ _trans('CRM
                        solutions') }}</a>
                </li>
                <li class="text-blue-800 mt-2">

                    <a href="#" class="text-gray-600 hover:text-blue-800 border-b border-blue-700">{{ _trans('Ecommerce
                        solutions') }}</a>
                </li>
                <li class="text-blue-800 mt-2">

                    <a href="#" class="text-gray-600 hover:text-blue-800 border-b border-blue-700">{{ _trans('Customer
                        portals') }}</a>
                </li>


                <li class="text-blue-800 mt-2">

                    <span class="text-gray-600">{{ _trans(' Customer data analytics solutions') }}</span>
                </li>

            </ul>
        </div>

    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('STRENGTHS OF SCIENCESOFT’S OFFERING FOR MANUFACTURING COMPANIES') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div>

        <div class="md:flex md:pr-8">
            <div class="md:1/12 md:mr-6 md:mt-6">
                <img width="40" height="38" src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="">
            </div>
            <div class="md:w-11/12">
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl mb-6">
                    <span class="text-gray-800 font-semibold">
                        {{_trans('	
Full-cycle services.') }}
                    </span>
                    {{_trans('We offer comprehensive services from consulting to evolution and support of your
                    solution.')}}
                </p>

            </div>
        </div>
        <div class="md:flex md:pr-8">
            <div class="md:1/12 md:mr-6 md:mt-6">
                <img width="40" height="38" src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="">
            </div>
            <div class="md:w-11/12">
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl mb-6">
                    <span class="text-gray-800 font-semibold">
                        {{_trans('Estimation accuracy. ') }}
                    </span>
                    {{_trans('Due to ample industry experience of our project managers, we can accurately estimate
                    project costs and delivery time.')}}
                </p>

            </div>
        </div>
        <div class="md:flex md:pr-8">
            <div class="md:1/12 md:mr-6 md:mt-6">
                <img width="40" height="38" src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="">
            </div>
            <div class="md:w-11/12">
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl mb-6">
                    <span class="text-gray-800 font-semibold">
                        {{_trans(' Cost-efficiency. ') }}
                    </span>
                    {{_trans(' We use proven open-source components like frameworks and libraries and public APIs to
                    reduce implementation costs and increase ROI of your solution.')}}
                </p>

            </div>
        </div>
        <div class="md:flex md:pr-8">
            <div class="md:1/12 md:mr-6 md:mt-6">
                <img width="40" height="38" src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="">
            </div>
            <div class="md:w-11/12">
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl mb-6">
                    <span class="text-gray-800 font-semibold">
                        {{_trans(' Minimized development risks. ') }}
                    </span>
                    {{_trans(' We adhere to the iterative development model that allows seeing first results early and
                    get next versions of a solution delivered every 2-4 weeks.')}}
                </p>

            </div>
        </div>
    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('SCIENCESOFT’S HALLMARK PROJECTS FOR MANUFACTURING') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


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


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('CHOOSE YOUR SERVICE OPTION') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid md:grid-cols-2 gap-4">

        <div class="border relative pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/sharepoint/sharepoint-consulting/services/policy-management-02.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('Digital
                strategy consulting') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('We advise you how to:') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Increase ROA via equipment effectiveness optimization and predictive maintenance.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Reduce operational costs and improve business productivity via AI-based optimization.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Reduce time to market for new manufacturing products due to well-organized workflows.') }}</span>
                    </li>
                </ul>

                <a href="#"
                   class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ _trans('REQUEST CONSULTING') }}
                </a>

            </div>


        </div>


        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/crm/crm-consulting/crm_dedicated_services_crm_implementation_consulting.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('Solution
                consulting, implementation and support') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('We consult on:') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Choosing optimal solution functionality and architecture.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Reducing implementation and operational costs.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Ensuring user adoption.') }}</span>
                    </li>
                </ul>

                <p class="mt-2 text-lg text-gray-600">{{ _trans('We offer:') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('End-to-end solution implementation.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('After-launch solution support.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Continuous solution maintenance and evolution.') }}</span>
                    </li>
                </ul>

                <a href="#" class="bg-blue-700 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ _trans('REQUEST CONSULTING AND IMPLEMENTATION') }}
                </a>

            </div>


        </div>


        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/manufacturing/it-outsourcicg-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('IT
                outsourcing') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('We take over the responsibility for the IT-driven
                    business processes of your manufacturing company. We also offer IT outsourcing for individual IT
                    functions:') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Software implementation.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('QA.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Data analytics.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('IT support.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Managed infrastructure services.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Help desk.') }}</span>
                    </li>

                </ul>

                <a href="#" class="bg-blue-700 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ _trans('REQUEST IT OUTSOURCING') }}
                </a>

            </div>


        </div>


        <div class="border relative pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/software-development-services/python-devs/service-options-python-devs_dedicated-team.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('IT staff
                augmentation') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('We provide you with experts with manufacturing-specific
                    knowledge who will help you streamline your company’s IT projects:

                    ') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Developers (Java, .NET, Python, PHP, C++, and more).') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Testers (manual and automated testing).') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('DevOps engineers.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ _trans('Data analysts.') }}</span>
                    </li>
                </ul>

                <a href="#"
                   class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ _trans('REQUEST STAFF AUGMENTATION') }}
                </a>

            </div>


        </div>

    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('REINFORCE YOUR BUSINESS OPERATIONS WITH IT SOLUTIONS') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('By leveraging IT at your manufacturing company, you can achieve a number of gains, including:')
        }}
    </p>


       
    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('-20-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('time to market for new products')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+10-20%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('sales due to marketing and sales automation')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+10-30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('revenue due to new digital sales channels')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+10-20%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('employee productivity')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+5-10%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('business productivity')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('-5-35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('IT operating costs')}}
                </p>
            </div>
        
           
        </div>
    </div>




    <div class="swiper-container big-slide md:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide text-center  pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+20-40%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('time to market for new products')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+10-20%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('sales due to marketing and sales automation')}}
                </p>
            </div>
        </div>
        
        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+10-30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('revenue due to new digital sales channels')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+10-20%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('employee productivity')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+5-10%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('business productivity')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('-5-35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('IT operating costs')}}
                </p>
            </div>
        </div>

    </div>
    
</div>


<div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-4 lg:text-3xl">
                {{ _trans('Profit by IT Solutions for Professional Services!') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans('Reach out to ScienceSoft’s team right NOW to learn how to streamline service delivery and raise the productivity of your business with IT.') }}
            </p>
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:w-4/12 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('GET A CONSULTATION') }}
                </div>
            </a>
        </div>

        <div class="lg:w-2/6 m-auto">
           <img src="https://www.scnsoft.com/insurance/cta.svg" alt="">

        </div>
    </div>


   
   </div>


</div>


@endsection
 @section('js')

 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');

</script>
@endsection
