@extends('front.layout')

@section('css')

@endsection

@section('main')


<div class="my-8">


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT Solutions for Professional Services: Transform Service Delivery and Automate Operations') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img class="my-8"
         src="https://www.scnsoft.com/professional-services/cover-pic-professional-services-.svg"
         alt="">


         <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ _trans('IT solutions for professional services allow businesses to digitalize service delivery and automate internal operations for increased productivity and a more competitive advantage in their industry') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">{{_trans('Providing IT solutions for professional services') }}<span
            class="text-gray-800 font-bold">{{ _trans(' since 2012,') }}</span>
        {{ _trans(' enables professional services companies to acquire new customers with') }}<span
            class="text-gray-800 font-bold">{{ _trans('digital service delivery channels') }}</span>
            {{_trans('and')}}
            <span
            class="text-gray-800 font-bold">{{ _trans('optimize internal business processes,') }}</span>
            {{('like project management, employee collaboration, and more.')}}
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ _trans('Open Up New Service Delivery Opportunities and Automate Operations!') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans(' Team will analyze your current business operations, recommend and implement tailored IT solutions that will help you raise your business productivity and contribute to its further growth.') }}
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

    <div class="grid gap-4 md:grid-cols-2">

   
        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-blue-700 font-bold">{{ _trans('12 years ') }}</span>
                    <span class="text-gray-600">{{ _trans(' in IT for professional services.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-blue-700 font-bold">{{ _trans('8') }}</span>
                    <span class="text-gray-600">{{ _trans('Microsoft Gold Competencies.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-blue-700 font-bold">{{ _trans('AWS Select Tier ') }}</span>
                    <span class="text-gray-600">{{ _trans('partnership.') }}</span>
                </li>
        </ul>


        <img src="https://www.scnsoft.com/partners/ms-8-and-aws-3.svg" style="height:125px; width:452px" alt="">




  
  
    </div>

    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 md:text-3xl mt-6">
        {{ _trans('Ample experience in delivering various IT solutions:') }}
    </h1>

    <div class="grid gap-4 md:grid-cols-2">

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('31') }}</span>
                    <span class="text-gray-600">{{ _trans(' years in data analytics.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('15') }}</span>
                    <span class="text-gray-600">{{ _trans(' years in web portals.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans(' 15') }}</span>
                    <span class="text-gray-600">{{ _trans('years in business intelligence.') }}</span>
                </li>
        </ul>

        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('12 ') }}</span>
                    <span class="text-gray-600">{{ _trans(' years in CRM.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('8') }}</span>
                    <span class="text-gray-600">{{ _trans(' years in HR.') }}</span>
                </li>
            
        </ul>



    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT SOLUTIONS TO STREAMLINE OPERATIONS OF YOUR PROFESSIONAL SERVICES COMPANY') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid mt-6 md:grid-cols-2 md:gap-14 gap-4">
      
        <div class="border pb-12 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/professional-services/crm.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('CRM') }}
            </h1>

           <div class="px-4 text-lg">
           <p class="text-gray-600">{{_trans('B2B marketing:')}}</p>
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Building brand awareness') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Content marketing.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Omnichannel lead generation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Customer journey management.') }}</span>
            </li>
        </ul>
        <p class="text-gray-600 mt-4">{{_trans('Sales: ')}}</p>
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Long-cycle sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Consulting sales.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Account development.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Customer journey management.') }}</span>
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
            {{ _trans('Customer portal') }}
            </h1>

           <div class="px-4 text-lg">
           
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('360-degree customer view.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Digital service delivery.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Customer self-service.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('AI assistant.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data access and self-service analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('eLearning.') }}</span>
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
            {{ _trans('Data analytics portal for customers') }}
            </h1>

           <div class="px-4 text-lg">
           
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data upload (one-time and continuous).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Secure storage.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data augmentation and enrichment.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Machine learning and NLP.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data and insight visualization.') }}</span>
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
            {{ _trans('Project and human resource management') }}
            </h1>

           <div class="px-4 text-lg">
           
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Project planning.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Task management and scheduling.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Resource allocation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Progress monitoring.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Workforce utilization management.') }}</span>
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
            {{ _trans('Document management') }}
            </h1>

           <div class="px-4 text-lg">
           
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Templates.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Intelligent search.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Co-editing with a customer.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Approval workflows.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Document retention policies.') }}</span>
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
            {{ _trans('Employee database and portal') }}
            </h1>

           <div class="px-4 text-lg">
           
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Organizational chart.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Open positions.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Employee self-service.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Scheduling.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('External workforce management.') }}</span>
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
            {{ _trans('Business intelligence') }}
            </h1>

           <div class="px-4 text-lg">
           
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Finance analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Customer analytics.')}}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Performance analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Workforce analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Operational analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Planning and forecasting.') }}</span>
            </li>
          
        </ul>
      

        <a href="#" class="text-blue-700 absolute bottom-4 right-4 font-semibold">SEE MORE <i class="fal fa-arrow-right ml-2"></i></a>

           </div>

        </div>
    </div>


    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-4 lg:text-3xl">
                {{ _trans('Found What You’ve Been Looking For?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans('Team will help you implement a tailored solution that will meet your company’s business needs.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('GET THE CHOSEN SOLUTION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('OUR HALLMARK PROJECTS FOR PROFESSIONAL SERVICES') }}
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
        {{ _trans('CHOOSE YOUR IT SERVICES') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid gap-8 md:grid-cols-2">
    
    <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/crm/crm-consulting/crm_dedicated_services_crm_implementation_consulting.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{_trans('Solution consulting, implementation and support for professional services')}}</h1>

            <div class="px-4">
                <p class="mb-4 text-gray-800 font-semibold">{{_trans('We consult on:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Choosing suitable solutions and their optimal functionality to meet your business needs.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Reducing implementation costs.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Ensuring user adoption.')}}</p>
                    </div>
                </div>

                <p class="mb-4 text-gray-800 font-semibold">{{_trans('We offer:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('End-to-end solution implementation.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('After-launch support.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Continuous solution maintenance and evolution.')}}</p>
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
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{_trans('IT outsourcing for professional services')}}</h1>

            <div class="px-4">
               
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Business analysis')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Software development.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('QA.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Data analytics.')}}</p>
                    </div>
                </div>

               
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('IT support.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Managed infrastructure services.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{_trans('Help desk..')}}</p>
                    </div>
                </div>
                

                <a href="#" class="bg-blue-700 md:absolute bottom-6 right-6 left-6 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    GO FOR CONSULTING
                </a>

            </div>

        </div>




    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('EQUIP YOUR PROFESSIONAL SERVICES BUSINESS WITH IT SOLUTIONS RIGHT NOW') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">



    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+15-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('employee productivity increase via convenient tools and improved collaboration')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+5-15%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('revenue per employee via increased company productivity due to customer self-service')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+20-100%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('revenue due to new digital channels')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+15-30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('sales due to marketing and sales automation')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('99.99%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('IT service availability')}}
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
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+15-50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('employee productivity increase via convenient tools and improved collaboration')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+5-15%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('revenue per employee via increased company productivity due to customer self-service')}}
                </p>
            </div>
        </div>
        
        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+20-100%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('revenue due to new digital channels')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('+15-30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('sales due to marketing and sales automation')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{_trans('99.99%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{_trans('IT service availability')}}
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
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('GET A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>



</div>


@endsection

@section('js')
<<<<<<< HEAD
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
=======
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
>>>>>>> 1b9a16be13477bab6177358126a18af41c3667fd
@endsection
