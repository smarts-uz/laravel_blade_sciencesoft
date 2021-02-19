@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <div class="text-2xl md:text-4xl font-bold mt-6">
            {{ _trans("IT Infrastructure Services – Consulting, Implementation, Management – to Increase Your Business
            Sustainability")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/it-outsourcing-services/it-outsourcing-services-sciencesoft.svg">
            <div>
                <p class="font-normal text-lg leading-loose mt-10">
                    {{ _trans("Within")  }} <strong>{{ _trans("IT outsourcing")  }}</strong>, {{ _trans("a vendor takes responsibility for 30-100% of your IT
                    landscape covering such areas as IT service planning and management, IT evolution and managed IT
                    services.")  }}
                </p>
                <p class="text-lg font-normal py-6">
                    {{ _trans("Having a 31-year background in IT, ScienceSoft provides customizable IT outsourcing services to
                    reinforce your business with cost-effective")  }} <strong>{{ _trans("IT operations and fast software
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
                    <h1 class="text-2xl md:text-3xl font-bold">{{ _trans("Nikolay Kurayev, CEO at ScienceSoft")  }} </h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <div class="text-xl">
                        <p class="my-10">
                            {{ _trans("When I talk to CEO of mid-size companies, I often hear that IT takes a large share of
                            their budget but constantly underperforms. And they do not see business growth possible
                            without profound IT changes that they simply cannot accomplish internally.")  }}
                        </p>
                        <p>
                            {{ _trans("Indeed, it’s not easy to connect IT with the business, but it becomes possible by
                            applying deep tech expertise with the focus on cost-effectiveness and unlocking new
                            revenue streams. And this is exactly what ScienceSoft does. By doing the right IT and
                            doing IT right, ScienceSoft helps companies make their IT a business growth enabler.")  }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ _trans("Do IT Operations Drain Your Resources?")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ _trans("Let us reverse the situation! From the support of daily operations
                to the assistance in digital transformation and implementation of novel technology, our IT
                outsourcing services are a cost-effective way of increasing business performance.")  }} </p>
            </div>
            <div class='w-1/5 m-0 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("DISCUSS MY
                     OUTSOURCING OPTIONS")  }}</a>
            </div>
        </div>

        <div class="rounded-sm p-2 md:p-8">
            <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">31 {{ _trans("years in IT.")  }} </li>
                        <li class="mb-4">2,695 {{ _trans("projects completed.")  }}</li>
                        <li class="mb-4">{{ _trans("Designing a detailed plan to improve your IT infrastructure performance.")  }}
                        </li>
                        <li class="mb-4">700 {{ _trans("employees. 50+% of our developers are of the senior level.")  }} </li>
                        <li>
                            {{ _trans("BA expertise and industry-focused consultants on board to help bridge business and
                            technology.")  }}
                        </li>
                        <li>
                            {{ _trans("Full-scale Project Management Office (PMO) established to handle the project of any
                            complexity.")  }}
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                        <li class="mb-4">12 {{ _trans("years in ITSM based on ITIL principles.")  }} </li>
                        <li class="mb-4">7 {{ _trans("years in DevOps practices.")  }}</li>
                        <li class="mb-4">76% {{ _trans("of our revenue comes from 1+ year-long customers, such as eBay, IBM,
                        Baxter, NASA JPL, Nielsen, and more.")  }}
                        </li>
                        <li class="mb-4">{{ _trans("Experience across 23 industries with a special focus on manufacturing,
                        retail, healthcare, logistics, professional services, and telecommunications.")  }}</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container -mt-36">
            <section class="customer-logos slider h-1/3 my-10">
                <div class="slide"><img src="images/adidas.png" alt="logo"></div>
                <div class="slide"><img src="images/facebook.png" alt="logo"></div>
                <div class="slide"><img src="images/google.png" alt="logo"></div>
                <div class="slide"><img src="images/instagram.png" alt="logo"></div>
                <div class="slide"><img src="images/nike.png" alt="logo"></div>
                <div class="slide"><img src="images/twitter.png" alt="logo"></div>
                <div class="slide"><img src="images/uber.png" alt="logo"></div>
                <div class="slide"><img src="images/youtube.png" alt="logo"></div>
            </section>
        </div>

        <div class="text-lg md:text-2xl leading-relaxed">

            <p>
                {{ _trans("We have been working with ScienceSoft for five years so far. The team successfully performed the
                    migration project in order to improve our processes.")  }} <…> {{ _trans("We have experienced great cooperation from
                    management, quick understanding of requirements, deep technical skills from assigned resources,
                    and company’s commitment to time, price, and quality. We would be pleased to recommend
                    ScienceSoft to anyone looking for outsourcing or extension of their own team!")  }}
            </p>
            <div class="flex justify-end">
                <em>
                    <strong>
                        {{ _trans("Dmitry Druzik, CIO, A-100 Group of Companies (construction and petrol stations)")  }}
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
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-lg md:text-xl">
                        {{ _trans("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
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
                    <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class="text-lg text-justify md:text-xl">
                        {{ _trans("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
                        requirements change
                        during our cooperation.")  }}
                    </p>
                </div>
            </div>
        </div>

        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ _trans("Measure IT Outsourcing Value for Your Business")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ _trans("Our team can conduct an IT outsourcing feasibility analysis to
                calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
            </div>
            <div class='w-1/3 m-0 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("Request a
                    Feasibility analysis")  }}</a>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold">
            {{ _trans("CHOOSE YOUR SERVICE OPTION")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-row">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Full-service IT outsourcing")  }}</p>
                    <p class="mb-3">{{ _trans("Drawing on your needs, we can suggest either an offshore dedicated team or team
                    augmentation model of cooperation to back up your .NET development project or migration of
                    legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                    you’re free to screen them before the start of cooperation.")  }}</p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Co-sourcing with an in-house IT team")  }}
                    </p>
                    <p class="mb-3">{{ _trans("Outsource your entire IT landscape, including IT service planning and
                    management, to achieve greater business performance with IT ROI boosted by 50-300%.")  }}</p>
                    <p>
                        {{ _trans("We can also act as a service integrator taking up the management of your IT vendor
                        ecosystem.")  }}
                    </p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 70%-90% of
                    it")  }}</button>
                </div>
            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Co-sourcing with other vendors")  }}</p>
                    <p class="mb-3">{{ _trans("Drawing on your needs, we can suggest either an offshore dedicated team or team
                    augmentation model of cooperation to back up your .NET development project or migration of
                    legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                    you’re free to screen them before the start of cooperation.")  }}</p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 30%-40% of
                    it")  }}</button>
                </div>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold my-8">
            {{ _trans("HOW WE HELP RESHAPE YOUR BUSINESS WITH IT OUTSOURCING")  }}
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
                        <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <ul class="ml-8 list-outside list-disc bg-rose-200 text-lg leading-loose ">
                            <li>
                                {{ _trans("Efficient infrastructure support.")  }}
                            </li>
                            <li>
                                {{ _trans("Quality assurance and cybersecurity services to guarantee operational stability.")  }}
                            </li>
                            <li>
                                {{ _trans("Migrating on-premises applications to the cloud and developing new scalable cloud
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
                        <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <ul class="ml-8 list-outside list-disc bg-rose-200 text-lg leading-loose ">
                            <li>
                                {{ _trans("Efficient infrastructure support.")  }}
                            </li>
                            <li>
                                {{ _trans("Quality assurance and cybersecurity services to guarantee operational stability.")  }}
                            </li>
                            <li>
                                {{ _trans("Migrating on-premises applications to the cloud and developing new scalable cloud
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
                        <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <ul class="ml-8 list-outside list-disc bg-rose-200 text-lg leading-loose ">
                            <li>
                                {{ _trans("Efficient infrastructure support.")  }}
                            </li>
                            <li>
                                {{ _trans("Quality assurance and cybersecurity services to guarantee operational stability.")  }}
                            </li>
                            <li>
                                {{ _trans("Migrating on-premises applications to the cloud and developing new scalable cloud
                                applications.")  }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold mt-20">
            {{ _trans("MAKE IT EMPOWER YOUR BUSINESS")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <p class="text-xl">
            {{ _trans("High IT spending with low value affects the entire business – its advance slows down, and the business
            risks falling behind top competitors in 3-5 years")  }}
        </p>
        <p class="text-xl">
            {{ _trans("With timely transformations, the same IT landscape can become a source of sustainable business growth –
            and that’s what ScienceSoft helps achieve within the IT outsourcing services. Here’re some results on
            both business and IT levels that you can expect.")  }}
        </p>

        <div class="my-20  mx-auto w-full">
            <p class="font-medium text-4xl mx-auto">{{ _trans("Business-level gains:")  }}</p><br>
            <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-2.5
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("IT cost reduction")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("increase in software development speed")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("regulatory compliance of the IT infrastructure")  }}
                    </p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        ~99.99%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("applications availability")  }}</p>
                </div>

            </div>
        </div>

        <div class=" mx-auto w-full">
            <p class="font-medium text-4xl mx-auto">{{ _trans("IT-level gains:")  }}</p><br>
            <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-2.5
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("IT cost reduction")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("increase in software development speed")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("regulatory compliance of the IT infrastructure")  }}
                    </p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
                    <p class="text-4xl text-blue-600  pl-2 mx-auto">
                        ~99.99%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("applications availability")  }}</p>
                </div>

            </div>
        </div>
        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ _trans("Measure IT Outsourcing Value for Your Business")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ _trans("Our team can conduct an IT outsourcing feasibility analysis to
                calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
            </div>
            <div class='w-1/3 m-0 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("Request a
                    Feasibility analysis")  }}</a>
            </div>
        </div>
    </div>

@endsection

<script>
    $(document).ready(function () {
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

@section('js')

@endsection
