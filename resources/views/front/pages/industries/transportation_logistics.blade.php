@extends('front.layout')

@section('css')

@endsection

@section('main')
    <div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('Transportation Management Software') }}
        </h1>
        <hr class="w-12 h-1 bg-yellow-600  my-4" />
        <img src="https://www.scnsoft.com/fleet-management/transportation_1.svg" alt="">
        <p class="text-gray-600 text-lg">
            Transportation management software aims at helping companies optimize business performance and increase revenue
            due to more efficient staff, vehicle, and order management.
        </p>
        <br>
        <p class="text-gray-600 text-lg">
            ScienceSoft develops custom transportation management and logistics solutions with supply chain management,
            warehouse management, and route mapping capabilities.
        </p>
        <div class="p-4 my-16 shadow-xl border rounded lg:flex">
            <div class="lg:w-4/6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                    {{ t('Tired of Ineffective Transportation Management?') }}
                </h1>
                <hr class="w-12 bg-yellow-500 h-0.5 mb-6" />

                <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                    {{ t('ScienceSoft’s team will help you reduce fleet operating and management costs, facilitate route planning, speed up deliveries, and streamline communication and data reporting with a custom transportation management solution.') }}
                </p>
            </div>
            <div class="lg:w-2/6 m-auto">
                <a href="#">
                    <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                        {{ t('IMPROVE MY TRANSPORTATION MANAGEMENT') }}
                    </div>
                </a>

            </div>
        </div>

        <div>
            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ t('WHY SCIENCESOFT?') }}
            </h1>
            <hr class="w-12 h-1 bg-yellow-600  my-4" />
            <ul class="list-disc px-5">
                <li class="mt-2">31 {{ t('years in IT.') }}</li>
                <li class="mt-2">12 {{ t('years in') }} <a class="hover:text-blue-700"
                        href="">{{ t('CRM consulting') }}</a> {{ t('and implementation') }}</li>
                <li class="mt-2">700 {{ t('professionals on board') }}</li>
                <li class="mt-2">{{ t('Partnerships with leading CRM providers:') }} <a class="hover:text-blue-700"
                        href="#">{{ t('Microsoft') }}</a> {{ t('and') }} <a class="hover:text-blue-700"
                        href="#">{{ t('Salesforce.') }}</a></li>
                <li class="mt-2">
                    {{ t('Industry expertise in retail and wholesale, professional services, manufacturing, healthcare, banking, telecoms, etc.') }}
                </li>
            </ul>
        </div>
        {{-- slider --}}

        {{-- end --}}

        <div>
            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ t('TRANSPORTATION MANAGEMENT SOLUTIONS WE DEVELOP') }}
            </h1>
            <hr class="w-12 h-1 bg-yellow-600  my-4" />
            <div class="grid gap-4 md:grid-cols-3">
                <div class="p-6 border">
                    <img src="https://www.scnsoft.com/fleet-management/supply-chain.svg" height="120" width="120" alt="">
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                        {{ t('Supply chain management') }}
                    </h1>

                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                        {{ t('Supply chain management software helps ensure the swift and efficient delivery of goods. Such solutions open effective ways to implement supply chains, manage shipment and distribution of orders, and streamline logistics activities.') }}
                    </p>
                </div>

                <div class="p-6 border">
                    <img src="https://www.scnsoft.com/fleet-management/warehousing.svg" height="120" width="120" alt="">
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                        {{ t('Warehousing and distribution') }}
                    </h1>

                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                        {{ t('The solutions we build provide insights into inventory management and storage facilities. They enable staff to manage inbound and outbound shipments and storage of supplies, optimize warehousing facilities, document and analyze inventory management performance. Software also integrates with warehouse management, enterprise resource planning, and other systems employed by the companies.') }}
                    </p>
                </div>

                <div class="p-6 border">
                    <img src="https://www.scnsoft.com/fleet-management/freight-forwarding.svg" height="120" width="120"
                        alt="">
                    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                        {{ t('Freight forwarding optimization') }}
                    </h1>

                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                        {{ t('Custom logistics solutions help automate shipment processes, eliminate the possibility of manual error, ensure secure and cost-effective freight delivery operations. Software provides forwarding agents and managers with the range of tools for messaging and quoting, billing and invoicing, imaging and scanning.') }}
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ t('TRANSPORTATION MANAGEMENT SOLUTIONS WE DEVELOP') }}
            </h1>
            <hr class="w-12 h-1 bg-yellow-600  my-4" />
            <div class="flex flex-wrap">
                <div class="w-1/2 flex items-center px-5 my-4">
                    <img width="50px" src="https://www.scnsoft.com/ecommerce/1-star-05.svg">
                    <p class="px-4">
                        Compliance with relevant regulations, e.g., Federal Travel Regulation, Federal Management
                        Regulation.
                    </p>
                </div>

                <div class="w-1/2 flex items-center px-5 my-4">
                    <img width="50px" src="https://www.scnsoft.com/ecommerce/1-star-05.svg">
                    <p class="px-4">
                        Mature project management in line with customer requirements.
                    </p>
                </div>

                <div class="w-1/2 flex items-center px-5 my-4">
                    <img width="50px" src="https://www.scnsoft.com/ecommerce/1-star-05.svg">
                    <p class="px-4">
                        Integration with existing management systems, e.g., ERP, WMS.
                    </p>
                </div>

                <div class="w-1/2 flex items-center px-5 my-4">
                    <img width="50px" src="https://www.scnsoft.com/ecommerce/1-star-05.svg">
                    <p class="px-4">
                        Cross-platform compatibility.
                    </p>
                </div>
            </div>

        </div>

        <div>
            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ t('OUR SELECTED TRANSPORTATION MANAGEMENT PROJECTS') }}
            </h1>
            <hr class="w-12 h-1 bg-yellow-600  my-4" />
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
        </div>

        <div class="p-4 my-16 shadow-xl border rounded lg:flex">
            <div class="lg:w-4/6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                    {{ t('Improve Your Transportation Management with IT!') }}
                </h1>
                <hr class="w-12 bg-yellow-500 h-0.5 mb-6" />

                <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                    {{ t('ScienceSoft’s fleet management team will develop a custom transportation management application for you to enjoy more efficient transportation workflows.') }}
                </p>
            </div>
            <div class="lg:w-2/6 m-auto">
                <a href="#">
                    <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                        {{ t('GET MY APPLICATION') }}
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
