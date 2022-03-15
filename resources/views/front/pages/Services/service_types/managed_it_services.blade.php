@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>

        <div class="text-xl md:text-3xl font-bold">
            {{ t('Managed IT Services for Stable and Reliably Evolving IT Environment') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/managed-it-services/managed-new/cover-pic-managed-it-services-2.svg">
            <div>
                <p class="font-normal text-lg leading-loose mt-10">
                    {{ t("Managed IT services are aimed at handing over your IT operations to a third-party IT services provider,
            which takes responsibility to ensure high efficiency and timely improvement of your IT environment and
            processes within it.") }}
                </p>

                <p class="text-lg font-normal py-6">
                    <strong>{{ t("Managed IT services by Smart Softwarebacked with 12 years of experience in ITSM span the all-round
            support
            for cloud, on-premises and hybrid infrastructures") }}</strong>
                    {{ t("and include consulting and migration
            services for
            proactive IT evolution.") }}
                </p>

            </div>
        </div>

        <div class='flex justify-between md:flex-row flex-col items-center md:p-10 p-3 shadow-2xl my-8'>
            <div class='md:w-2/3 w-full'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='md:text-xl text-lg font-bold'>{{ t('Do IT Operations Drain Your Resources?') }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 md:text-xl text-lg'>
                    {{ t("Let us reverse the situation! From the support of daily operations
        to the assistance in digital transformation and implementation of novel technology, our IT
        outsourcing services are a cost-effective way of increasing business performance.") }}
                </p>
            </div>
            <div class='md:w-2/5 w-full md:mt-0 mt-2 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3 rounded text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("DISCUSS MY
        OUTSOURCING OPTIONS") }}</a>
            </div>
        </div>

        <div class="text-xl md:text-3xl font-bold my-6">
            {{ t('IT Infrastructure Components Our Managed IT Services Tackle') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-col md:flex-row items-start ">
            <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                    <li class="mb-4 underline text-black"><a href="#">{{ t('Networks.') }}</a></li>
                    <li class="mb-4">{{ t('On-premises data centers.') }}</li>
                    <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ t('Cloud services') }}
                        </a>{{ t("(IaaS, PaaS,
            SaaS).") }} </li>
                    <li class="mb-4"><a class="underline hover:text-blue-500"
                            href="#">{{ t('Cybersecurity tools.') }}</a></li>
                    <li>
                        {{ t('Databases,') }} <a class="underline hover:text-blue-500"
                            href="#">{{ t('data warehouses,') }}</a> {{ t('data lakes.') }}
                    </li>
                </ul>
            </div>
            <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                    <li class="mb-4"><a class="underline hover:text-blue-500"
                            href="#">{{ t("Applications and app
            infrastructures.") }}</a></li>
                    <li class="mb-4"><a class="underline hover:text-blue-500"
                            href="#">{{ t('Development infrastructures') }}</a>
                        {{ t('(CI/CD, development and testing environments).') }}</li>
                    <li class="mb-4">76%
                        {{ t("of our revenue comes from 1+ year-long customers, such as eBay, IBM,
            Websites and web portals.") }}
                    </li>
                    <li class="mb-4">{{ t('Desktops.') }}</li>
                </ul>
            </div>
        </div>
        <div class="w-full flex items-center justify-center">
            <img
                src="https://www.scnsoft.com/it-infrastructure/it-infrastructure-support/it-infrastructure-components-sciencesoft.svg">

        </div>

        <div class="text-xl md:text-3xl font-bold mt-5">
            {{ t('Deliverables of TeamPRO’s Managed IT Services') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-row flex-wrap">
            <div class="rounded-sm border-2 transition-shadow hover:shadow-lg w-72 h-auto m-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                        {{ t("Increased IT services and infrastructure
            efficiency supported by:") }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                        <li>
                            {{ t('Network diagrams') }}
                        </li>
                        <li>
                            {{ t('Architecture descriptions') }}
                        </li>
                        <li>
                            {{ t('Configuration management database') }}
                        </li>
                        <li>
                            {{ t('Implementation plan for infrastructure improvements') }}
                        </li>
                        <li>
                            {{ t('Documented operating procedures') }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-72 h-auto m-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ t('Transparent service:') }}
                    </p>
                    <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                        <li>
                            {{ t('Regular service reports') }}
                        </li>
                        <li>
                            {{ t('Quarterly maintenance reports (performance, security, capacity, issues, patching, backups)') }}
                        </li>
                        <li>
                            {{ t('Health check reports') }}
                        </li>
                        <li>
                            {{ t('Security audit reports') }}
                        </li>
                        <li>
                            {{ t('Incident reports') }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-72 h-auto m-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                        {{ t("CSAT and user adoption rate improvement
            via:") }} </p>
                    <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                        <li>
                            {{ t('Surveys and action points based on the assessment results') }} </li>
                        <li>
                            {{ t('Training materials for users') }} </li>
                    </ul>
                </div>
            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-72 h-auto m-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                        {{ t("Compliance with industry standards:
            via:") }} </p>
                    <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                        <li>
                            {{ t('Regulatory compliance reports') }} </li>
                    </ul>
                </div>
            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-72 h-auto m-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                        {{ t("Cost-effective user support with:
            via:") }} </p>
                    <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                        <li>
                            {{ t('Knowledge base articles') }} </li>
                        <li>
                            {{ t('FAQ') }} </li>
                        <li>
                            {{ t('User guides') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class='w-full m-0 flex justify-center items-center'>
            <a href="#"
                class='px-4 py-3 rounded text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("REQUEST MANAGED IT
    SERVICES") }}</a>
        </div>

        <div class="text-xl md:text-3xl font-bold my-10">
            {{ t('Why Choose TeamPRO') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <ul class="font-normal list-outside list-disc bg-rose-200 text-lg leading-relaxed m-4">

                <li>
                    31 {{ t('years in IT services.') }}
                </li>
                <li>
                    12 {{ t('years of experience in ITSM') }}
                </li>
                <li>
                    {{ t('ITIL personnel holding ITSM-related certificates.') }}
                </li>
                <li>
                    {{ t('More than 7 years in applying DevOps practices.') }}
                </li>
                <li>
                    {{ t("More than 700 IT specialists including Microsoft Certified Professionals, AWS Certified Solutions
            Architects, AWS Certified SysOps Administrators, AWS Technical Professionals, Red Hat Certified System
            Administrators.") }}
                </li>
            </ul>
        </div>


        <!-- Muhammadali caruselni qoshdi -->


        <div class="swiper-container about-slide h-40">
            <div class="swiper-wrapper flex items-center">
                @foreach ($partners as $partner)
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img src="@if ($partner->image) {{ '/uploads/categories/' . $partner->image }}
                        @else{{ 'asset(images/default-image.png)' }} @endif "></div>
                @endforeach
            </div>
            <div class="swiper-button-next text-gray-400"></div>
            <div class="swiper-button-prev text-gray-400"></div>
        </div>



        {{-- <div class="text-xl md:text-3xl font-bold mt-20">
            {{ t('Technologies We Work with') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex my-5 shadow-lg">
            <ul class="w-1/5 border-r border-gray-200">
                <li class="link text-xl cursor-pointer px-5 py-3 text-blue-500 border-l-8 border-blue-500 duration-300 bg-gray-50"
                    onclick="Tab(event, 'Platforms')">Platforms</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Monitoring-tools')">Monitoring tools
                </li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'DevOps')">DevOps</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Clouds')">Clouds</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Backend')">Backend</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Frontend')">Frontend</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Mobile')">Mobile</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Databases')">Databases</li>
                <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Cloud-Databases')">Cloud Databases
                    (DBaaS)</li>
            </ul>
            <div class="bg-gray-50 w-4/5 p-5">
                <div id="Platforms" style="display: block;" class="content hidden">
                    <h1 class="text-xl font-bold">Programming</h1>
                    <hr class="w-14 h-0.5 border-none my-3 bg-yellow-400" />
                    <p>Click on the platform to learn about our capabilities in it.</p>
                    <div class="flex flex-wrap">
                        <div
                            class="w-28 h-28 flex hover:shadow-lg duration-300 bg-white items-center justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/dynamics-365-logo.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/power-bi-2020.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/salesforce.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/sap.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/servicenow-logo.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/sharepoint-logo-vertical.svg') }}" alt="tab">
                        </div>
                    </div>
                </div>
                <div id="Monitoring-tools" class="content hidden">
                    <h1 class="text-xl font-bold">Monitoring tools</h1>
                    <hr class="w-14 h-0.5 border-none my-3 bg-yellow-400" />
                    <div class="flex flex-wrap">
                        <div
                            class="w-28 h-28 flex hover:shadow-lg duration-300 bg-white items-center justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/dynamics-365-logo.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/power-bi-2020.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/salesforce.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/sap.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/servicenow-logo.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/sharepoint-logo-vertical.svg') }}" alt="tab">
                        </div>
                    </div>
                </div>
                <div id="DevOps" class="content hidden">
                    <h1 class="text-xl font-bold">DevOps</h1>
                    <hr class="w-14 h-0.5 border-none my-3 bg-yellow-400" />
                    <div class="flex flex-wrap">
                        <div
                            class="w-28 h-28 flex hover:shadow-lg duration-300 bg-white items-center justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/dynamics-365-logo.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/power-bi-2020.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/salesforce.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/sap.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/servicenow-logo.svg') }}" alt="tab">
                        </div>
                        <div
                            class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                            <img src="{{ asset('images/tab/sharepoint-logo-vertical.svg') }}" alt="tab">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        <div class="text-xl md:text-3xl font-bold mt-20">
            {{ t('Your Questions about Managed Services Answered') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="rounded-sm relative mt-10 transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex text-xl mr-4 md:mr-8 mb-8 md:mb-0">
                    <img class="w-14" src="https://www.scnsoft.com/managed-it-services/managed-new/question.svg" alt="">
                </div>
                <div class=" flex flex-col w-5/6 ">
                    <h1 class="text-xl md:text-xl font-bold">
                        {{ t('How do I know if my IT infrastructure costs may be reduced?') }}
                    </h1>
                    <p class=" text-lg md:text-xl ">
                        {{ t("Smart Softwareadheres to strict security policies and applies in-house security management systems
                ensuring 24/7 security monitoring to prevent unsolicited access and ransomware threats to sensitive
                data.") }}
                    </p>

                </div>
            </div>
        </div>
        <div class="rounded-sm relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex text-xl mr-4 md:mr-8 mb-8 md:mb-0">
                    <img class="w-14" src="https://www.scnsoft.com/managed-it-services/managed-new/question.svg" alt="">
                </div>
                <div class=" flex flex-col w-5/6">
                    <h1 class="text-xl md:text-xl font-bold">
                        {{ t("How can a managed service provider guarantee against premature
            service termination?") }}
                    </h1>
                    <p class=" text-lg md:text-xl ">
                        {{ t("Our contracts provide for a substantial transition period so that no potential abrupt termination
                may occur. As a rule, we deliver managed services to customers for several years, 10+ years in some
                cases.") }}
                    </p>

                </div>
            </div>
        </div>
        <div class="rounded-sm relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex text-xl mr-4 md:mr-8 mb-8 md:mb-0">
                    <img class="w-14" src="https://www.scnsoft.com/managed-it-services/managed-new/question.svg" alt="">
                </div>
                <div class=" flex flex-col w-5/6">
                    <h1 class="text-xl md:text-xl font-bold">
                        {{ t('How do I know if my IT infrastructure costs may be reduced?') }}
                    </h1>
                    <p class=" text-lg md:text-xl ">
                        {{ t("We analyze the current state of your IT infrastructure to see the potential for its improvement and
                compare the TCO of your IT infrastructure managed in-house vs. by TeamPRO.") }}
                    </p>

                </div>
            </div>

        </div>

        <div class="text-xl md:text-3xl font-bold mt-20">
            {{ t('See Our Managed Services Delivered!') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <div class="swiper-container big-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide md:px-16 px-4 pb-4">
                    <div class="p-6 border md:flex hover:shadow-lg my-6">
                        <div class="md:w-6/12 mr-3">
                            <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2c-demo.png" alt="">
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

                <div class="swiper-slide md:px-16 px-4 pb-4">
                    <div class="p-6 border md:flex hover:shadow-lg my-6">
                        <div class="md:w-6/12 mr-3">
                            <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2b-ecommerce-demo.png"
                                alt="">
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
        </div>

        <div class="text-xl md:text-3xl font-bold mt-20">
            {{ t('Our Service Packages') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-row flex-wrap justify-between md:m-8 m-0">
            <div class="rounded-sm border-2 transition-shadow hover:shadow-lg md:w-1/4 w-full md:mr-10 mr-0 my-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4 flex flex-col justify-between h-full">
                    <div>
                        <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ t('Basic') }}</p>
                        <p>
                            {{ t('Get your infrastructure continuously supported and optimized:') }}
                        </p>
                        <ul class=" list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                            <li class="my-2">
                                <a class="underline text-black hover:text-blue-500"
                                    href="#">{{ t("Proactive infrastructure
                    monitoring") }}</a>
                            </li>
                            <li class="my-2">
                                <a class="underline text-black"
                                    href="#">{{ t('IT infrastructure administration:') }}
                                </a>
                            </li>
                            <ul class=" list-outside list-disc bg-rose-200 text-base leading-relaxed m-2">
                                <li>
                                    {{ t('User administration') }}
                                </li>
                                <li>
                                    {{ t('Regular software configuration and updates') }}
                                </li>
                                <li>
                                    {{ t('Network, data center, cloud service management') }}
                                </li>
                            </ul>
                            <li class="my-2">
                                <a class="underline text-black hover:text-blue-500"
                                    href="#">{{ t('L1, L2, L3 support') }}</a>
                            </li>
                            <li class="my-2">
                                {{ t('Cloud usage optimization') }}
                            </li>
                        </ul>
                    </div>
                    <button
                        class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t('Outsource 100% of it') }}</button>

                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg md:w-1/4 w-full md:mr-10 mr-0 my-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4 flex flex-col justify-between h-full">
                    <div>
                        <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ t('Extended') }}</p>
                        <p>{{ t('Includes the Basic package and assistance with new infrastructure initiatives:') }}
                        </p>
                        <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                            <li>
                                {{ t('Analyzing problems in IT infrastructure and providing recommendations') }}
                            </li>
                            <li>
                                {{ t('Designing a new IT infrastructure or its components') }}
                            </li>
                            <li>
                                <a class="underline text-black hover:text-blue-500"
                                    href="#">{{ t('Designing CI/CD pipelines') }}</a>
                            </li>
                            <li>
                                {{ t('Advising on security improvement using the SecOps approach') }}
                            </li>
                        </ul>
                    </div>

                    <button
                        class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t('Outsource 100% of it') }}</button>
                </div>

            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg md:w-1/4 w-full md:mr-10 mr-0 my-2">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4 flex flex-col justify-between h-full">
                    <div>
                        <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                            {{ t('Extended Plus') }}
                        </p>
                        <p>
                            {{ t('Includes the Extended package and modernization of your IT infrastructure:') }}
                        </p>
                        <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                            <li>
                                {{ t('Application and data warehouse migration to cloud') }}
                            </li>
                            <li>
                                {{ t('Integration of cloud and on-premises apps') }}
                            </li>
                            <li>
                                {{ t('Infrastructure and app evolution:') }}
                            </li>
                            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed mx-2 ">
                                <li>
                                    {{ t('Introduction of minor fixes and major updates') }}
                                </li>
                                <li>
                                    {{ t('Customizations and integrations with SaaS products') }}
                                </li>
                                <li>
                                    {{ t('App delivery automaion') }}
                                </li>
                            </ul>

                        </ul>
                    </div>
                    <button
                        class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t('Outsource 100% of it') }}</button>

                </div>
            </div>

        </div>

        <div class="text-xl md:text-3xl font-bold mt-20">
            {{ t('How much will it cost?') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <p class="text-xl font-normal">
                {{ t("We provide customizable packages of managed IT services (a client can choose any components and services)
        with
        flexible pricing.​​ The subscription fee for managed IT services is affected by the following factors:") }}
            </p>
            <ul class="list-outside list-disc bg-rose-200 font-normal leading-relaxed m-6 text-xl ">
                <li>
                    {{ t('IT infrastructure type (cloud, on-premises).') }}
                </li>
                <li>
                    {{ t('IT infrastructure complexity.') }}
                </li>
                <li>
                    {{ t('Scope of infrastructure projects.') }}
                </li>
                <li>
                    {{ t('Support package (time coverage, number of issues included).') }}
                </li>
                <li>
                    {{ t('SLO (target KPIs).') }}
                </li>
            </ul>
            <p class="font-normal text-xl">
                {{ t('We will be pleased to provide an estimate for you.') }}
            </p>
        </div>
        <div class='md:w-2/5 w-full m-4 flex justify-start items-center'>
            <a href="#"
                class='px-4 py-3 rounded text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t('get a quote') }}</a>
        </div>

        <div class=" mx-auto w-full">
            <div class="text-xl md:text-3xl font-bold mt-20">
                {{ t('What Managed IT Services Bring to Our Customers') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                <p class="font-normal text-xl">
                    {{ t("Opting for a managed services provider who will maintain and proactively improve your IT infrastructure
            is a reasonable step to get tangible gains sooner. Let the numbers speak:") }}
                </p>
            </div>
            <div class="w-full sm:flex sm:flex-row justify-start flex flex-col my-10 font-bold ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-start hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        -50%
                    </p><br>
                    <p class="pl-2 mx-auto md:text-start text-center font-normal">
                        {{ t('infrastructure support costs') }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="pl-2 mx-auto md:text-start text-center font-normal">
                        {{ t('increase in software development speed') }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="pl-2 mx-auto md:text-start text-center font-normal">
                        {{ t('regulatory compliance of the IT infrastructure') }}
                    </p>
                </div>

            </div>
        </div>

        <div
            class='flex justify-between border flex-col md:flex-row rounded border-gray-200 items-center p-10 shadow-2xl my-16'>
            <div class='md:w-2/3 w-full'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-xl font-bold'>{{ t('Start Improving Your IT Infrastructure NOW!') }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>
                    {{ t("TeamPRO’s professionals will keep your IT infrastructure reliable and
        highly efficient 24/7 to let you focus on the strategic decisions only.") }}
                </p>
            </div>
            <div class='md:w-2/5 w-full md:mt-0 mt-2 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3 rounded text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t('MAKE IT INFRASTRUCTURE EFFICIENT') }}</a>
            </div>
        </div>
    </div>

@endsection

@section('js')




    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 1000,
                infinite: true,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    </script>


@endsection
