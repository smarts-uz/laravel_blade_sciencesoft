@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-10">
        <div class="text-2xl md:text-4xl font-bold mt-6">
            {{ t("IT Infrastructure Services – Consulting, Implementation, Management – to Increase Your Business
            Sustainability")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/it-outsourcing-services/it-outsourcing-services-Smart Software.svg">
            <div>
                <p class="font-normal text-lg leading-loose mt-10">
                    {{ t("Within")  }} <strong>{{ t("IT outsourcing")  }}</strong>, {{ t("a vendor takes responsibility for 30-100% of your IT
                    landscape covering such areas as IT service planning and management, IT evolution and managed IT
                    services.")  }}
                </p>
                <p class="text-lg font-normal py-6">
                    {{ t("Having a 31-year background in IT, Smart Softwareprovides customizable IT outsourcing services to
                    reinforce your business with cost-effective")  }} <strong>{{ t("IT operations and fast software
                    development.")  }}</strong>
                </p>

            </div>
        </div>
        <div class="rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-60 md:h-60"
                        src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-2xl md:text-3xl font-bold">{{ t("Nikolay Kurayev, CEO at Smart Software")  }} </h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <div class="lg:text-xl text-lg">
                        <p class="my-10">
                            {{ t("When I talk to CEO of mid-size companies, I often hear that IT takes a large share of
                            their budget but constantly underperforms. And they do not see business growth possible
                            without profound IT changes that they simply cannot accomplish internally.")  }}
                        </p>
                        <p>
                            {{ t("Indeed, it’s not easy to connect IT with the business, but it becomes possible by
                            applying deep tech expertise with the focus on cost-effectiveness and unlocking new
                            revenue streams. And this is exactly what Smart Softwaredoes. By doing the right IT and
                            doing IT right, Smart Softwarehelps companies make their IT a business growth enabler.")  }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ t("Do IT Operations Drain Your Resources?")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ t("Let us reverse the situation! From the support of daily operations
                to the assistance in digital transformation and implementation of novel technology, our IT
                outsourcing services are a cost-effective way of increasing business performance.")  }} </p>
            </div>
            <div class='w-1/5 m-0 lg:flex block justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("DISCUSS MY
                     OUTSOURCING OPTIONS")  }}</a>
            </div>
        </div> --}}
        <div class='lg:flex block justify-between items-center lg:p-10 p-6 shadow-lg mt-3'>
            <div class='lg:w-2/3 w-full	 '>
              <h1 class='text-gray-900 lg:mt-6'>
                <p class='lg:text-2xl text-md font-bold'>{{ _trans("Lack Python Competencies or Resources?")  }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
              </h1>
              <p class='text-gray-600 lg:text-xl text-md'>{{ _trans("We offer pre-vetted Python developers and dedicated Python teams with experience across multiple domains to help increase your development output.")  }}</p>
            </div>
            <div class='mt-6 lg:w-1/3 w-full  m-0 flex justify-center items-center'>
              <a href="#" class='px-8 py-3 text-sm bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ _trans("Check Cvs of our devs")  }}</a>
            </div>
        </div>

        <div class="rounded-sm p-2 md:p-8">
            <h1 class="text-3xl md:text-4xl font-bold">{{ t("Tailored pricing plan")  }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">31 {{ t("years in IT.")  }} </li>
                        <li class="mb-4">2,695 {{ t("projects completed.")  }}</li>
                        <li class="mb-4">{{ t("Designing a detailed plan to improve your IT infrastructure performance.")  }}
                        </li>
                        <li class="mb-4">700 {{ t("employees. 50+% of our developers are of the senior level.")  }} </li>
                        <li>
                            {{ t("BA expertise and industry-focused consultants on board to help bridge business and
                            technology.")  }}
                        </li>
                        <li>
                            {{ t("Full-scale Project Management Office (PMO) established to handle the project of any
                            complexity.")  }}
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">12 {{ t("years in ITSM based on ITIL principles.")  }} </li>
                        <li class="mb-4">7 {{ t("years in DevOps practices.")  }}</li>
                        <li class="mb-4">76% {{ t("of our revenue comes from 1+ year-long customers, such as eBay, IBM,
                        Baxter, NASA JPL, Nielsen, and more.")  }}
                        </li>
                        <li class="mb-4">{{ t("Experience across 23 industries with a special focus on manufacturing,
                        retail, healthcare, logistics, professional services, and telecommunications.")  }}</li>
                    </ul>
                </div>
            </div>
        </div>



<!-- Muhammadali Caruselni qoshdi -->


<div class="swiper-container about-slide h-40">
    <div class="swiper-wrapper flex items-center">
        @foreach($partners as $partner)
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="@if($partner->image) {{"/uploads/categories/" .$partner->image}} @else{{"asset(images/default-image.png)"}} @endif "></div>
        @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>





        <div class="text-lg md:text-2xl leading-relaxed">

            <p>
                {{ t("We have been working with Smart Softwarefor five years so far. The team successfully performed the
                    migration project in order to improve our processes.")  }} <…> {{ t("We have experienced great cooperation from
                    management, quick understanding of requirements, deep technical skills from assigned resources,
                    and company’s commitment to time, price, and quality. We would be pleased to recommend
                    Smart Softwareto anyone looking for outsourcing or extension of their own team!")  }}
            </p>
            <div class="flex justify-end">
                <em>
                    <strong>
                        {{ t("Dmitry Druzik, CIO, A-100 Group of Companies (construction and petrol stations)")  }}
                    </strong>
                </em>
            </div>
            <div class="flex justify-end">
                <img class="w-40 md:w-60" src="https://www.scnsoft.com/it-outsourcing-services/a-100.svg" alt="">

            </div>

        </div>

        <div class="rounded-sm border-2 transition-shadow hover:shadow-xl my-10 p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-40 md:h-40"
                        src="https://www.scnsoft.com/it-outsourcing-services/benefits-of-it-outsourcing_tailored-pricing-plan.svg"
                        alt="">
                </div>
                <div class=" flex flex-col w-3/3">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ t("Tailored pricing plan")  }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-lg md:text-xl">
                        {{ t("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
                        requirements change
                        during our cooperation.")  }}
                    </p>
                </div>
            </div>
        </div>

        <div class="rounded-sm border-2 transition-shadow hover:shadow-xl mb-10 p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-40 md:h-40"
                        src="https://www.scnsoft.com/it-outsourcing-services/benefits-of-it-outsourcing_transparency-of-service-results.svg"
                        alt="">
                </div>
                <div class=" flex flex-col w-3/3">
                    <h1 class="text-xl md:text-2xl font-bold">{{ t("Tailored pricing plan")  }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class="text-lg text-justify md:text-xl">
                        {{ t("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
                        requirements change
                        during our cooperation.")  }}
                    </p>
                </div>
            </div>
        </div>

        {{-- <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ t("Measure IT Outsourcing Value for Your Business")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ t("Our team can conduct an IT outsourcing feasibility analysis to
                calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
            </div>
            <div class='w-1/3 m-0 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("Request a
                    Feasibility analysis")  }}</a>
            </div>
        </div> --}}
        
        <div class="text-2xl md:text-3xl font-bold">
            {{ t("SELECTED IT OUTSOURCING PROJECTS")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>



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



        <div class="text-2xl md:text-3xl font-bold">
            {{ t("CHOOSE YOUR SERVICE OPTION")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="lg:flex lg:flex-row block my-4">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/4 w-full h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("Full-service IT outsourcing")  }}</p>
                    <p class="mb-3">{{ t("Drawing on your needs, we can suggest either an offshore dedicated team or team
                    augmentation model of cooperation to back up your .NET development project or migration of
                    legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                    you’re free to screen them before the start of cooperation.")  }}</p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 100% of it")  }}</button>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/4 w-full h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("Co-sourcing with an in-house IT team")  }}
                    </p>
                    <p class="mb-3">{{ t("Outsource your entire IT landscape, including IT service planning and
                    management, to achieve greater business performance with IT ROI boosted by 50-300%.")  }}</p>
                    <p>
                        {{ t("We can also act as a service integrator taking up the management of your IT vendor
                        ecosystem.")  }}
                    </p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 70%-90% of
                    it")  }}</button>
                </div>
            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/4 w-full h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("Co-sourcing with other vendors")  }}</p>
                    <p class="mb-3">{{ t("Drawing on your needs, we can suggest either an offshore dedicated team or team
                    augmentation model of cooperation to back up your .NET development project or migration of
                    legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                    you’re free to screen them before the start of cooperation.")  }}</p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 30%-40% of
                    it")  }}</button>
                </div>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold my-8">
            {{ t("HOW WE HELP RESHAPE YOUR BUSINESS WITH IT OUTSOURCING")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div>
            <div class="my-6 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                    <div class="flex justify-center items-center w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40"
                            src="https://www.scnsoft.com/it-outsourcing-services/how-we-help_optimizing-business-operations.svg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-2/4">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ t("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <ul class="ml-8 list-outside list-disc bg-rose-200 text-lg leading-loose ">
                            <li>
                                {{ t("Efficient infrastructure support.")  }}
                            </li>
                            <li>
                                {{ t("Quality assurance and cybersecurity services to guarantee operational stability.")  }}
                            </li>
                            <li>
                                {{ t("Migrating on-premises applications to the cloud and developing new scalable cloud
                                applications.")  }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="my-6 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                    <div class="flex justify-center items-center w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40"
                            src="https://www.scnsoft.com/it-outsourcing-services/how-we-help_supporting-business-operations.svg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-2/4">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ t("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <ul class="ml-8 list-outside list-disc bg-rose-200 text-lg leading-loose ">
                            <li>
                                {{ t("Efficient infrastructure support.")  }}
                            </li>
                            <li>
                                {{ t("Quality assurance and cybersecurity services to guarantee operational stability.")  }}
                            </li>
                            <li>
                                {{ t("Migrating on-premises applications to the cloud and developing new scalable cloud
                                applications.")  }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="my-6 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                    <div class="flex justify-center items-center w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40"
                            src="https://www.scnsoft.com/it-outsourcing-services/how-we-help_digital-transformation.svg"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-2/4">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ t("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <ul class="ml-8 list-outside list-disc bg-rose-200 text-lg leading-loose ">
                            <li>
                                {{ t("Efficient infrastructure support.")  }}
                            </li>
                            <li>
                                {{ t("Quality assurance and cybersecurity services to guarantee operational stability.")  }}
                            </li>
                            <li>
                                {{ t("Migrating on-premises applications to the cloud and developing new scalable cloud
                                applications.")  }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold mt-20">
            {{ t("MAKE IT EMPOWER YOUR BUSINESS")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <p class="text-xl">
            {{ t("High IT spending with low value affects the entire business – its advance slows down, and the business
            risks falling behind top competitors in 3-5 years")  }}
        </p>
        <p class="text-xl">
            {{ t("With timely transformations, the same IT landscape can become a source of sustainable business growth –
            and that’s what Smart Softwarehelps achieve within the IT outsourcing services. Here’re some results on
            both business and IT levels that you can expect.")  }}
        </p>

        <div class="my-20  mx-auto w-full">
            <p class="font-medium text-4xl mx-auto">{{ t("Business-level gains:")  }}</p><br>
            <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-2.5
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("IT cost reduction")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("increase in software development speed")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("regulatory compliance of the IT infrastructure")  }}
                    </p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        ~99.99%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("applications availability")  }}</p>
                </div>

            </div>
        </div>

        <div class=" mx-auto w-full">
            <p class="font-medium text-4xl mx-auto">{{ t("IT-level gains:")  }}</p><br>
            <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-2.5
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("IT cost reduction")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("increase in software development speed")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("regulatory compliance of the IT infrastructure")  }}
                    </p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        ~99.99%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("applications availability")  }}</p>
                </div>

            </div>
        </div>
        {{-- <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ t("Measure IT Outsourcing Value for Your Business")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ t("Our team can conduct an IT outsourcing feasibility analysis to
                calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
            </div>
            <div class='w-1/3 m-0 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("Request a
                    Feasibility analysis")  }}</a>
            </div>
        </div> --}}
        <div class='lg:flex block justify-between items-center lg:p-10 p-6 shadow-lg mt-3'>
            <div class='lg:w-2/3 w-full	 '>
              <h1 class='text-gray-900 lg:mt-6'>
                <p class='lg:text-2xl text-md font-bold'>{{ _trans("Lack Python Competencies or Resources?")  }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
              </h1>
              <p class='text-gray-600 lg:text-xl text-md'>{{ _trans("We offer pre-vetted Python developers and dedicated Python teams with experience across multiple domains to help increase your development output.")  }}</p>
            </div>
            <div class='mt-6 lg:w-1/3 w-full  m-0 flex justify-center items-center'>
              <a href="#" class='px-8 py-3 text-sm bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ _trans("Check Cvs of our devs")  }}</a>
            </div>
        </div>
    </div>

@endsection



@section('js')



@endsection
