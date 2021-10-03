@extends('front.layout')

@section('css')

@endsection

@section('main')


<div class="my-8">


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('IT Solutions for Professional Services: Transform Service Delivery and Automate Operations') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img class="my-8"
         src="https://www.scnsoft.com/professional-services/cover-pic-professional-services-.svg"
         alt="">


         <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ t('IT solutions for professional services allow businesses to digitalize service delivery and automate internal operations for increased productivity and a more competitive advantage in their industry') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">{{t('Providing IT solutions for professional services') }}<span
            class="text-gray-800 font-bold">{{ t(' since 2012,') }}</span>
        {{ t(' enables professional services companies to acquire new customers with') }}<span
            class="text-gray-800 font-bold">{{ t('digital service delivery channels') }}</span>
            {{t('and')}}
            <span
            class="text-gray-800 font-bold">{{ t('optimize internal business processes,') }}</span>
            {{('like project management, employee collaboration, and more.')}}
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('Open Up New Service Delivery Opportunities and Automate Operations!') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t(' Team will analyze your current business operations, recommend and implement tailored IT solutions that will help you raise your business productivity and contribute to its further growth.') }}
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

    <div class="grid gap-4 md:grid-cols-2">


        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-blue-700 font-bold">{{ t('12 years ') }}</span>
                    <span class="text-gray-600">{{ t(' in IT for professional services.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-blue-700 font-bold">{{ t('8') }}</span>
                    <span class="text-gray-600">{{ t('Microsoft Gold Competencies.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-blue-700 font-bold">{{ t('AWS Select Tier ') }}</span>
                    <span class="text-gray-600">{{ t('partnership.') }}</span>
                </li>
        </ul>


        <img src="https://www.scnsoft.com/partners/ms-8-and-aws-3.svg" style="height:125px; width:452px" alt="">






    </div>

    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 md:text-3xl mt-6">
        {{ t('Ample experience in delivering various IT solutions:') }}
    </h1>

    <div class="grid gap-4 md:grid-cols-2">

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('31') }}</span>
                    <span class="text-gray-600">{{ t(' years in data analytics.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('15') }}</span>
                    <span class="text-gray-600">{{ t(' years in web portals.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t(' 15') }}</span>
                    <span class="text-gray-600">{{ t('years in business intelligence.') }}</span>
                </li>
        </ul>

        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('12 ') }}</span>
                    <span class="text-gray-600">{{ t(' years in CRM.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('8') }}</span>
                    <span class="text-gray-600">{{ t(' years in HR.') }}</span>
                </li>

        </ul>



    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('IT SOLUTIONS TO STREAMLINE OPERATIONS OF YOUR PROFESSIONAL SERVICES COMPANY') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid mt-6 md:grid-cols-2 md:gap-14 gap-4">

        <div class="border pb-12 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/crm.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('CRM') }}
            </h1>

           <div class="px-4 text-lg">
           <p class="text-gray-600">{{t('B2B marketing:')}}</p>
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Building brand awareness') }}</span>
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
        <p class="text-gray-600 mt-4">{{t('Sales: ')}}</p>
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Long-cycle sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Consulting sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Account development.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Customer journey management.') }}</span>
            </li>
        </ul>

        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>

        <div class="border pb-12 relative hover:shadow-md">
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
                <span class="text-gray-600">{{ t('360-degree customer view.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Digital service delivery.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Customer self-service.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('AI assistant.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Data access and self-service analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('eLearning.') }}</span>
            </li>
        </ul>


        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>

        <div class="border pb-12 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/data-analytics-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Data analytics portal for customers') }}
            </h1>

           <div class="px-4 text-lg">

           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Data upload (one-time and continuous).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Secure storage.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Data augmentation and enrichment.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Machine learning and NLP.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Data and insight visualization.') }}</span>
            </li>

        </ul>


        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>

        <div class="border pb-12 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/project-management.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Project and human resource management') }}
            </h1>

           <div class="px-4 text-lg">

           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Project planning.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Task management and scheduling.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Resource allocation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Progress monitoring.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Workforce utilization management.') }}</span>
            </li>

        </ul>


        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>

        <div class="border pb-12 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/sharepoint/sharepoint-consulting/services/dms-02.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Document management') }}
            </h1>

           <div class="px-4 text-lg">

           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Templates.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Intelligent search.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Co-editing with a customer.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Approval workflows.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Document retention policies.') }}</span>
            </li>

        </ul>


        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>

        <div class="border pb-12 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/employee-db.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ t('Employee database and portal') }}
            </h1>

           <div class="px-4 text-lg">

           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Organizational chart.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Open positions.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Employee self-service.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('Scheduling.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t('External workforce management.') }}</span>
            </li>

        </ul>


        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>


        <div class="border pb-12 relative hover:shadow-md">
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
                <span class="text-gray-600">{{ t('Customer analytics.')}}</span>
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


        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>
    </div>


    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-4 lg:text-3xl">
                {{ t('Found What You’ve Been Looking For?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t('Team will help you implement a tailored solution that will meet your company’s business needs.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('GET THE CHOSEN SOLUTION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('OUR HALLMARK PROJECTS FOR PROFESSIONAL SERVICES') }}
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
        {{ t('CHOOSE YOUR IT SERVICES') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid gap-8 md:grid-cols-2">

    <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/crm/crm-consulting/crm_dedicated_services_crm_implementation_consulting.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{t('Solution consulting, implementation and support for professional services')}}</h1>

            <div class="px-4">
                <p class="mb-4 text-gray-800 font-semibold">{{t('We consult on:')}}</p>
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

                <p class="mb-4 text-gray-800 font-semibold">{{t('We offer:')}}</p>
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
                    GO FOR CONSULTING
                </a>

            </div>

        </div>


        <div class="border pb-6 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/it-outsourcicg.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{t('IT outsourcing for professional services')}}</h1>

            <div class="px-4">

                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Business analysis')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Software development.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('QA.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Data analytics.')}}</p>
                    </div>
                </div>


                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('IT support.')}}</p>
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
                        <p>{{t('Help desk..')}}</p>
                    </div>
                </div>


                <a href="#" class="bg-blue-700 md:absolute bottom-6 right-6 left-6 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    GO FOR CONSULTING
                </a>

            </div>

        </div>




    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('EQUIP YOUR PROFESSIONAL SERVICES BUSINESS WITH IT SOLUTIONS RIGHT NOW') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">



    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+15-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('employee productivity increase via convenient tools and improved collaboration')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+5-15%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('revenue per employee via increased company productivity due to customer self-service')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+20-100%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('revenue due to new digital channels')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+15-30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('sales due to marketing and sales automation')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('99.99%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT service availability')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-5-35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT operating costs')}}
                </p>
            </div>


        </div>
    </div>




    <div class="swiper-container big-slide md:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide text-center  pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+15-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('employee productivity increase via convenient tools and improved collaboration')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+5-15%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('revenue per employee via increased company productivity due to customer self-service')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+20-100%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('revenue due to new digital channels')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('+15-30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('sales due to marketing and sales automation')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('99.99%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT service availability')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-5-35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT operating costs')}}
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
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('GET A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>



</div>


@endsection

@section('js')

@endsection
