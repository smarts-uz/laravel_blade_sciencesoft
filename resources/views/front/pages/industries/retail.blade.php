@extends('front.layout')

@section('css')

@endsection

@section('main')


<div class="my-8">

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        IT Services & Solutions for Retail
    </h1>
    <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

    <img src="https://www.scnsoft.com/cover-pictures/it-solutions-for-retail.svg" alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        We help retail and consumer goods industry players live up to their customers’ expectations through technology.
        With over <span class="text-gray-800 font-bold">17 years of domain experience,</span>
        our retail IT consultants serve custom software solutions to the entire retail ecosystem, supporting client
        businesses across physical and digital.
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        Since 2003, our portfolio has grown to include:
    </p>

    <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
        <li class="text-blue-800 mt-2 ml-6">
            <span class="text-gray-600"><a href="#" class="border-b border-blue-700 hover:text-blue-700">supply chain collaboration platform for a 1,700-store retailer</a></span>
        </li>
        <li class="text-blue-800 mt-2 ml-6">
            <span class="text-gray-600"><a href="#" class="border-b border-blue-700 hover:text-blue-700">sales analysis system for a multinational FMCG corporation</a></span>
        </li>
        <li class="text-blue-800 mt-2 ml-6">
            <span class="text-gray-600"><a href="#" class="border-b border-blue-700 hover:text-blue-700">virtual 3D store</a></span>
        </li>
        <li class="text-blue-800 mt-2 ml-6">
            <span class="text-gray-600">your company and project may just be the next.</span>
        </li>
    </ul>
    <div class="md:text-right text-center my-8">
        <a href="#" class="py-4 px-8 bg-blue-700 hover:bg-blue-800 text-white font-semibold">GET A QUOTE</a>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        SOFTWARE SOLUTIONS WE PROVIDE
    </h1>
    <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

    <div>
        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6" src="https://www.scnsoft.com/blue-icons-on-grey-background/loyalty.svg" width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    Customer Experience
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    As consumers expect a truly omni-channel experience, we respond to this challenge by helping brands
                    to provide consistent and personalized service – before, during and after a purchase.
                </p>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    Our CXM solutions reflect the industry’s current mindset and support integrated experiences across
                    consumer touchpoints – web, POS, mobile, click & collect and social.
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"><a href="#"
                                                       class="border-b text-gray-800 font-semibold border-blue-700 hover:text-blue-700">CRM and marketing automation: </a> developing personalized and lasting relationships with complete, actionable customer data at hand.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"><span class="text-gray-800 font-semibold">Loyalty programs: </span>implementing
                                customer retention strategies through СRM-powered management of loyalty schemes across
                                in-store, web and mobile channels.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">In-store experience: </span>
                           bringing next-gen technologies to your physical outlets, including integration of POS terminals and mobile devices.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6" src="https://www.scnsoft.com/blue-icons-on-grey-background/ecommerce.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    Ecommerce
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    We deliver scalable solutions that meet consumers’ requirements, facilitate their enjoyable, secure
                    shopping experience and supply operational analytics for marketing and sales.
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"><span class="text-gray-800 font-semibold">E-stores:  </span>
                         building virtual storefronts with slick online catalogs for 100,000+ SKUs.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Online shopping cart: </span>
                           enabling secure transaction processing with a broad selection of payment gateways.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Integration: </span>
                            connecting your ecommerce module with the entire line-up of enterprise systems (ERP, CRM, back office and more).</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">mCommerce:  </span>
                            offering mobile shopping for consumers across a variety of devices.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/supply_chain_management.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    Supply Chain
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    We enable real-time visibility into every stage of the supply chain, from manufacturing to checkout.
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"><span
                                class="text-gray-800 font-semibold">Supply chain management:  </span>
                         automating your buying and selling processes that cover inventory management, store operations and financials.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Private label product management:  </span>
                           managing relationships with manufacturers and monitoring products throughout their lifecycles.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Trade promotion management:  </span>
                            gaining a complete control of planning, execution and analysis of trade promotions at every outlet.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">E-collaboration: </span>
                            making remote collaboration possible between buyers, vendors and private label manufacturers.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Enterprise mobile apps: </span>
                            powering your staff with role-specific mobile solutions for a real-time access to work-critical functionality.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/data_analysis_reporting.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    Data Analysis and Business Intelligence
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    We help you make informed decisions based on rich analytics sourced from your IT ecosystem and
                    customer touchpoints.
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"><span class="text-gray-800 font-semibold">Data warehousing and master data management: </span>
                         putting together a single version of truth by cleansing and integrating your data from multiple distributed sources.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">OLAP cubes:  </span>
                           handling careful combinations of relevant metrics on customer behavior, inventory, operations, finance and more from the standpoints you require.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Reporting UI:  </span>
                            providing users with interactive reporting dashboards that can be tailored to their particular role.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Predictive analytics: </span>
                            tapping into customer trends and demand forecasts with meaningful data.</span>
                    </li>

                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6" src="https://www.scnsoft.com/blue-icons-on-grey-background/facial_recognition.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    <a href="#" class="border-b border-black">Computer Vision</a>
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    ScienceSoft offers the development of custom image analysis solutions to increase the level of
                    customer service in retail:
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"><span class="text-gray-800 font-semibold">Facial recognition:</span>
                          from recognition of regular customers to provide them with personalized deals to identification of potential criminals.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Emotion recognition: </span>assessment of the customer satisfaction level with a smart camera.</span>
                    </li>

                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6" src="https://www.scnsoft.com/blue-icons-on-grey-background/virtual-reality.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    Virtual Reality
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    Brings the cutting-edge technologies of VR to create a unique and convenient shopping
                    experience, such as interactive virtual stores that the customers can browse from any location using
                    popular VR platforms.
                </p>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/information_security.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                    Information Security
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    We help you maintain PCI DSS-compliant card processing and enable advanced fraud management.
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">

                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Security Information and Event Management (SIEM): </span>
                            real-time monitoring of internal and external security events for effective threat prevention.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Identity and access management: </span>
                            securing and controlling role-based access to your data assets.</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600"><span
                                   class="text-gray-800 font-semibold">Penetration testing: </span>
                               identifying and investigating your system vulnerabilities by means of preventive hack attacks.</span>
                    </li>

                </ul>
            </div>
        </div>

    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        OUR CAPABILITIES
    </h1>
    <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        Our technological competencies cover the full cycle of retail software development services:
    </p>

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
        <li class="text-blue-800 mt-2">
            <span class="text-gray-600">platform-based implementation</span>
        </li>
    </ul>


    <div class="swiper-container about-slide h-40">
        <div class="swiper-wrapper flex items-center">
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ebay.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/deloitte.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ford.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ibm.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/leo-burnett.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/nasa_1.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/nestle.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/tieto.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/viber.svg') }}" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
        <li class="text-blue-800 mt-2">
            <span class="text-gray-600">custom development</span>
        </li>
        <li class="text-blue-800 mt-2">
            <span class="text-gray-600">redesign of enterprise systems</span>
        </li>
        <li class="text-blue-800 mt-2">
            <span class="text-gray-600">maintenance</span>
        </li>
        <li class="text-blue-800 mt-2">
            <span class="text-gray-600">support</span>
        </li>
    </ul>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        These services are delivered by on-demand, scalable teams of ideators and practitioners who include business
        analysts, software consultants and engineers, graphic designers and quality assurance professionals.
    </p>
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        Our strategic relations with the technology leaders open extra opportunities for us and help to ease
        implementations for our customers.
    </p>

    <div class="p-6 shadow-xl lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                Let's Talk
            </h1>
            <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                We are ready to work from a rough concept up to bring your ideas to life. Contact us today for a free
                consultation.
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    GET A QUOTE
                </div>
            </a>

        </div>
    </div>

</div>

@endsection

@section('js')

@endsection
