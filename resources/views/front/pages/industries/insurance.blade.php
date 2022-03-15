@extends('front.layout')

@section('css')

@endsection

@section('main')

   <div class="my-8">

   <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('Insurance Software: IT Solutions for Streamlined Insurance Services') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img class="my-8" src="https://www.scnsoft.com/insurance/cover-pic-it-for-insurance.svg" alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ t('IT solutions for insurance allow insurers to speed up service delivery, reduce labor costs, achieve insurance data accuracy and compliance with government regulations, as well as provide a personalized approach to clients and improve customer service.') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">{{t('Having 8-year experience with the insurance industry, ScienceSoft provides insurance companies with IT solutions and related services from solution consulting to support to help them')}}
            <span
            class="text-gray-800 font-bold">{{ t('facilitate digital lead generation and increase the efficiency of application processing and claim management.')}}</span>
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('Eager to Improve Your Insurance Services?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t(' Smart Softwareteam will analyze the business needs of your insurance company, suggest and implement robust solutions that will help you improve overall business productivity and enhance customer service.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('GET A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('WHAT MAKES SCIENCESOFT A RELIABLE PARTNER') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid md:grid-cols-3">

    <div class="text-center">
    <img class="m-auto" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" width="45" height="45" alt="">
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
            <span class="text-gray-800 font-bold">{{ t('31 ')}}</span>
            {{t('years in software development and consulting')}}

    </p>

    </div>

    <div class="text-center">
    <img class="m-auto" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" width="45" height="45" alt="">
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
            <span class="text-gray-800 font-bold">{{ t('8 ')}}</span>
            {{t(' years in IT for insurance')}}

    </p>

    </div>

    <div class="text-center">
    <img class="m-auto" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" width="45" height="45" alt="">
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{t('Experience in delivering both')}}
            <span class="text-gray-800 font-bold">{{ t('8B2B  ')}}</span>
            {{t('and')}}
            <span class="text-gray-800 font-bold">{{ t('B2C  ')}}</span>
            {{t(' insurance solutions.')}}
    </p>

    </div>

    </div>

    <div class="grid md:grid-cols-2 my-8">

    <div>
    <img class="m-auto" src="https://www.scnsoft.com/partners/sw-development/aws-apn-select-consulting-partner.svg" height="100" width="105" alt="">
    <p class="text-lg text-center text-gray-600 mt-6 md:text-xl lg:text-2xl">
            <span
            class="text-gray-800 font-bold">{{ t('AWS Select Tier')}}</span>
            {{t('partnership')}}
    </p>

    </div>

    <div>
    <img class="m-auto" src="https://www.scnsoft.com/partners/ms-partners/microsoft-gold-partner-8-competences.svg" height="100" width="268" alt="">
    <p class="text-lg text-center text-gray-600 mt-6 md:text-xl lg:text-2xl">
            <span
            class="text-gray-800 font-bold">{{ t('8')}}</span>
            {{t('Microsoft Gold Competencies')}}
    </p>
    </div>

    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('IT SOLUTIONS FOR INSURANCE WE DEVELOP') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

   <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">

   <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/insurance/underwriting-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Underwriting') }}
            </h1>

           <div class="px-4 text-lg">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Processing customers’ applications.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Conversion of prospects into customers.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Risk management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Premium calculation.')}}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Compliance management.')}}</span>
            </li>
        </ul>



           </div>

        </div>


        <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/insurance/claim.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Claim estimation') }}
            </h1>

           <div class="px-4 text-lg">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Claim submission and management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Damage estimation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Compliance assurance.') }}</span>
            </li>

        </ul>



           </div>

        </div>

        <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/insurance/injury-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Injury management') }}
            </h1>

           <div class="px-4 text-lg">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Case processing and claim management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Insurance coverage.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Treatment plans and reimbursement.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Compensations for injuries.') }}</span>
            </li>

        </ul>



           </div>

        </div>

        <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/crm.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('CRM') }}
            </h1>

           <div class="px-4 text-lg">
           <p class="text-gray-800 font-semibold">Marketing</p>
           <ul style="list-style: square;" class="flex flex-col ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Building brand awareness.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Content marketing.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Omnichannel lead generation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Customer journey management.') }}</span>
            </li>

        </ul>

        <p class="text-gray-800 font-semibold">B2C Sales</p>
           <ul style="list-style: square;" class="flex flex-col ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Online sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('In-person sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Integration with underwriting software.') }}</span>
            </li>

        </ul>

           <p class="text-gray-800 font-semibold">B2B Sales</p>
           <ul style="list-style: square;" class="flex flex-col ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Long-cycle sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Account development.') }}</span>
            </li>

        </ul>

        <p class="text-gray-800 font-semibold">Customer service</p>
           <ul style="list-style: square;" class="flex flex-col ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Omni-channel communication.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Case management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Registering claims.') }}</span>
            </li>

        </ul>


           </div>

        </div>

        <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/customer-portal.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Customer portal') }}
            </h1>

           <div class="px-4 text-lg">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Up to 100% of clients’ self-service.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Application management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Claim management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('AI assistant.') }}</span>
            </li>

        </ul>



           </div>

        </div>

        <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/insurance/da.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Injury management') }}
            </h1>

           <div class="px-4 text-lg">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Risk management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Fraud detection.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Customer behavior analysis.') }}</span>
            </li>

        </ul>



           </div>

        </div>

        <div class="border pb-12 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/bi.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Business intelligence') }}
            </h1>

           <div class="px-4 text-lg">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Finance analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Customer analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Performance analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Workforce analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Operational analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Planning and forecasting.') }}</span>
            </li>

        </ul>



           </div>

        </div>

   </div>


   <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('Found a Solution You Need?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t(' Smart Software team will help you implement a tailored solution that will meet the business needs of your insurance company.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('GET A SOLUTION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('OUR HALLMARK PROJECTS FOR INSURANCE') }}
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
        {{ t('CHOOSE YOUR SERVICE OPTION') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

                <div class="grid md:grid-cols-2 gap-8">

                <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/crm/crm-consulting/crm_dedicated_services_crm_implementation_consulting.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{t('Solution consulting, implementation and support for insurance')}}</h1>

            <div class="px-4">
                <p class="mb-4 font-semibold text-black">{{t('We consult on:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Choosing suitable solutions and their optimal functionality to meet your business needs.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Reducing implementation costs.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Ensuring user adoption.')}}</p>
                    </div>
                </div>
                <p class="mb-4 font-semibold text-black">{{t('We offer:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('End-to-end solution implementation.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('After-launch support.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Continuous solution maintenance and evolution.')}}</p>
                    </div>
                </div>

                <a href="#" class="bg-blue-700 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{t('REQUEST IMPLEMENTATION')}}
                </a>

            </div>

        </div>


        <div class="border relative pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/it-outsourcicg.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{t('IT outsourcing for insurance')}}</h1>

            <div class="px-4">
                <p class="mb-4 font-semibold text-black">{{t('Outsourcing of one or several IT functions:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Business analysis to elicit your automation requirements.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('End-to-end insurance software development.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Testing and QA.')}}</p>
                    </div>
                </div>

                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Data analytics for insights without developing own analytics solution.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Managed infrastructure services.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('IT support and help desk.')}}</p>
                    </div>
                </div>

                <a href="#" class="bg-blue-700 md:absolute bottom-6 right-4 left-4 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{t('REQUEST IT OUTSOURCING ')}}
                </a>

            </div>

        </div>


                </div>


                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('MAKE YOUR INSURANCE SERVICES EFFECTIVE WITH TECHNOLOGY') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">




    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-20-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('application launch time due to mature processes')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-5-35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT operating costs due to gaining access to professional expertise')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('99.99%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT service availability due to proactive IT maintenance and 24/7 support')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('time of claims processing due to workflow automation')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+80-90%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('accuracy of insurance business processes due to minimizing manual work')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('100%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('regulatory compliance due to strong security features.')}}
                </p>
            </div>


        </div>
    </div>




    <div class="swiper-container big-slide md:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide text-center  pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-20-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('application launch time due to mature processes')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-5-35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT operating costs due to gaining access to professional expertise')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('99.99%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT service availability due to proactive IT maintenance and 24/7 support')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('time of claims processing due to workflow automation')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+80-90%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('accuracy of insurance business processes due to minimizing manual work')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('100%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('regulatory compliance due to strong security features.')}}
                </p>
            </div>
        </div>

    </div>

</div>

<div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-4 lg:text-3xl">
                {{ t('Profit by IT Solutions for Professional Services!') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t('Reach out to ScienceSoft’s team right NOW to learn how to streamline service delivery and raise the productivity of your business with IT.') }}
            </p>
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:w-4/12 px-2 py-4  hover:bg-blue-800">
                    {{ t('GET A CONSULTATION') }}
                </div>
            </a>
        </div>

        <div class="lg:w-2/6 m-auto">
           <img src="https://www.scnsoft.com/insurance/cta.svg" alt="">

        </div>
    </div>



   </div>

@endsection

@section('js')

@endsection
