@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24">

<div class="text-2xl md:text-4xl font-bold m-10">
    {{ @translate_lang("Managed IT Services for Stable and Reliably Evolving IT Environment")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <img src="https://www.scnsoft.com/it-outsourcing-services/it-outsourcing-services-sciencesoft.svg">
    <div>
        <p class="font-normal text-lg leading-loose mt-10">
            {{ @translate_lang("Managed IT services are aimed at handing over your IT operations to a third-party IT services provider,
            which takes responsibility to ensure high efficiency and timely improvement of your IT environment and
            processes within it.")  }}
        </p>

        <p class="text-lg font-normal py-6">
            <strong>{{ @translate_lang("Managed IT services by ScienceSoft backed with 12 years of experience in ITSM span the all-round
            support
            for cloud, on-premises and hybrid infrastructures")  }}</strong> {{ @translate_lang("and include consulting and migration
            services for
            proactive IT evolution.")  }}
        </p>

    </div>
</div>

<div class='flex justify-between items-center p-10 shadow-2xl my-16'>
    <div class='w-2/3'>
        <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ @translate_lang("Do IT Operations Drain Your Resources?")  }} </p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </h1>
        <p class='text-gray-600 text-xl'>{{ @translate_lang("Let us reverse the situation! From the support of daily operations
        to the assistance in digital transformation and implementation of novel technology, our IT
        outsourcing services are a cost-effective way of increasing business performance.")  }} </p>
    </div>
    <div class='w-2/5 m-0 flex justify-center items-center'>
        <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ @translate_lang("DISCUSS MY
        OUTSOURCING OPTIONS")  }}</a>
    </div>
</div>

<div class="text-2xl md:text-4xl font-bold m-6">
    {{ @translate_lang("IT Infrastructure Components Our Managed IT Services Tackle")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="flex flex-col md:flex-row  items-start ">
    <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
        <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
            <li class="mb-4 underline text-black"><a href="#">{{ @translate_lang("Networks.")  }}</a></li>
            <li class="mb-4">{{ @translate_lang("On-premises data centers.")  }}</li>
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ @translate_lang("Cloud services")  }} </a>{{ @translate_lang("(IaaS, PaaS,
            SaaS).")  }} </li>
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ @translate_lang("Cybersecurity tools.")  }}</a></li>
            <li>
                {{ @translate_lang("Databases,")  }} <a class="underline hover:text-blue-500" href="#">{{ @translate_lang("data warehouses,")  }}</a> {{ @translate_lang("data lakes.")  }}
            </li>
        </ul>
    </div>
    <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
        <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ @translate_lang("Applications and app
            infrastructures.")  }}</a></li>
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ @translate_lang("Development infrastructures")  }}</a>
                {{ @translate_lang("(CI/CD, development and testing environments).")  }}</li>
            <li class="mb-4">76% {{ @translate_lang("of our revenue comes from 1+ year-long customers, such as eBay, IBM,
            Websites and web portals.")  }}
            </li>
            <li class="mb-4">{{ @translate_lang("Desktops.")  }}</li>
        </ul>
    </div>
</div>
<div class="m-10">
    <img
        src="https://www.scnsoft.com/it-infrastructure/it-infrastructure-support/it-infrastructure-components-sciencesoft.svg">

</div>

<div class="text-2xl md:text-3xl font-bold mx-8">
    {{ @translate_lang("Deliverables of ScienceSoft’s Managed IT Services")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="flex flex-row m-8">
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("Increased IT services and infrastructure
            efficiency supported by:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li>
                    {{ @translate_lang("Network diagrams")  }}
                </li>
                <li>
                    {{ @translate_lang("Architecture descriptions")  }}
                </li>
                <li>
                    {{ @translate_lang("Configuration management database")  }}
                </li>
                <li>
                    {{ @translate_lang("Implementation plan for infrastructure improvements")  }}
                </li>
                <li>
                    {{ @translate_lang("Documented operating procedures")  }}
                </li>
            </ul>
        </div>
    </div>
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("Transparent service:")  }}</p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li>
                    {{ @translate_lang("Regular service reports")  }}
                </li>
                <li>
                    {{ @translate_lang("Quarterly maintenance reports (performance, security, capacity, issues, patching, backups)")  }}
                </li>
                <li>
                    {{ @translate_lang("Health check reports")  }}
                </li>
                <li>
                    {{ @translate_lang("Security audit reports")  }}
                </li>
                <li>
                    {{ @translate_lang("Incident reports")  }}
                </li>
            </ul>
        </div>
    </div>

    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("CSAT and user adoption rate improvement
            via:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ @translate_lang("Surveys and action points based on the assessment results")  }} </li>
                <li>
                    {{ @translate_lang("Training materials for users")  }} </li>
            </ul>
        </div>
    </div>

</div>

<div class="flex flex-row m-8">
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("Compliance with industry standards:
            via:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ @translate_lang("Regulatory compliance reports")  }} </li>
            </ul>
        </div>
    </div>
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("Cost-effective user support with:
            via:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ @translate_lang("Knowledge base articles")  }} </li>
                <li>
                    {{ @translate_lang("FAQ")  }} </li>
                <li>
                    {{ @translate_lang("User guides")  }}
                </li>
            </ul>
        </div>
    </div>
</div>
<div class='w-2/5 m-0 flex justify-center items-center'>
    <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ @translate_lang("REQUEST MANAGED IT
    SERVICES")  }}</a>
</div>

<div class="text-2xl md:text-4xl font-bold m-10">
    {{ @translate_lang("Why Choose ScienceSoft")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <ul class="font-normal list-outside list-disc bg-rose-200 text-lg leading-relaxed m-4">

        <li>
            31 {{ @translate_lang("years in IT services.")  }}
        </li>
        <li>
            12 {{ @translate_lang("years of experience in ITSM")  }}
        </li>
        <li>
            {{ @translate_lang("ITIL personnel holding ITSM-related certificates.")  }}
        </li>
        <li>
            {{ @translate_lang("More than 7 years in applying DevOps practices.")  }}
        </li>
        <li>
            {{ @translate_lang("More than 700 IT specialists including Microsoft Certified Professionals, AWS Certified Solutions
            Architects, AWS Certified SysOps Administrators, AWS Technical Professionals, Red Hat Certified System
            Administrators.")  }}
        </li>
    </ul>
</div>

<div class="container -mt-36">
    <section class="customer-logos slider ">
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

<div class="text-2xl md:text-3xl font-bold mt-20">
    {{ @translate_lang("Technologies We Work with")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

=============davomi bor===============

<div class="text-2xl md:text-3xl font-bold mt-20 mx-8">
    {{ @translate_lang("Your Questions about Managed Services Answered")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="rounded-sm relative mt-10 transition-shadow p-2 md:p-8">
    <div class="flex flex-col md:flex-row items-start ">
        <div class="flex text-xl mr-4 md:mr-8 mb-8 md:mb-0">
            <img class="w-14" src="https://www.scnsoft.com/managed-it-services/managed-new/question.svg" alt="">
        </div>
        <div class=" flex flex-col w-5/6 ">
            <h1 class="text-xl md:text-2xl font-bold">{{ @translate_lang("How do I know if my IT infrastructure costs may be reduced?")  }}
            </h1>
            <p class=" text-lg md:text-xl ">
                {{ @translate_lang("ScienceSoft adheres to strict security policies and applies in-house security management systems
                ensuring 24/7 security monitoring to prevent unsolicited access and ransomware threats to sensitive
                data.")  }}
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
            <h1 class="text-xl md:text-2xl font-bold">{{ @translate_lang("How can a managed service provider guarantee against premature
            service termination?")  }}
            </h1>
            <p class=" text-lg md:text-xl ">
                {{ @translate_lang("Our contracts provide for a substantial transition period so that no potential abrupt termination
                may occur. As a rule, we deliver managed services to customers for several years, 10+ years in some
                cases.")  }}
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
            <h1 class="text-xl md:text-2xl font-bold">{{ @translate_lang("How do I know if my IT infrastructure costs may be reduced?")  }}
            </h1>
            <p class=" text-lg md:text-xl ">
                {{ @translate_lang("We analyze the current state of your IT infrastructure to see the potential for its improvement and
                compare the TCO of your IT infrastructure managed in-house vs. by ScienceSoft.")  }}
            </p>

        </div>
    </div>

</div>

<div class="text-2xl md:text-3xl font-bold mt-20 mx-8">
    {{ @translate_lang("See Our Managed Services Delivered!")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

================davomi bor Carousel=================

<div class="text-2xl md:text-3xl font-bold mt-20 mx-8">
    {{ @translate_lang("Our Service Packages")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="flex flex-row m-8">
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("Basic")  }}</p>
            <p>
                {{ @translate_lang("Get your infrastructure <strong>continuously supported and optimized:")  }}</strong>
            </p>
            <ul class=" list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li class="my-2">
                    <a class="underline text-black hover:text-blue-500" href="#">{{ @translate_lang("Proactive infrastructure
                    monitoring")  }}</a>
                </li>
                <li class="my-2">
                    <a class="underline text-black" href="#">{{ @translate_lang("IT infrastructure administration:")  }} </a>
                </li>
                <ul class=" list-outside list-disc bg-rose-200 text-base leading-relaxed m-2">
                    <li>
                        {{ @translate_lang("User administration")  }}
                    </li>
                    <li>
                        {{ @translate_lang("Regular software configuration and updates")  }}
                    </li>
                    <li>
                        {{ @translate_lang("Network, data center, cloud service management")  }}
                    </li>
                </ul>
                <li class="my-2">
                    <a class="underline text-black hover:text-blue-500" href="#">{{ @translate_lang("L1, L2, L3 support")  }}</a>
                </li>
                <li class="my-2">
                    {{ @translate_lang("Cloud usage optimization")  }}
                </li>
            </ul>
            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ @translate_lang("Outsource 100% of it")  }}</button>

        </div>
    </div>
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ @translate_lang("Extended")  }}</p>
            <p>{{ @translate_lang("Includes the <strong>Basic package and assistance with new infrastructure initiatives:")  }}</strong></p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li>
                    {{ @translate_lang("Analyzing problems in IT infrastructure and providing recommendations")  }}
                </li>
                <li>
                    {{ @translate_lang("Designing a new IT infrastructure or its components")  }}
                </li>
                <li>
                    <a class="underline text-black hover:text-blue-500" href="#">{{ @translate_lang("Designing CI/CD pipelines")  }}</a>
                </li>
                <li>
                    {{ @translate_lang("Advising on security improvement using the SecOps approach")  }}
                </li>
            </ul>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ @translate_lang("Outsource 100% of it")  }}</button>
        </div>

    </div>

    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                {{ @translate_lang("Extended Plus")  }}
            </p>
            <p>
                {{ @translate_lang("Includes the")  }} <strong>{{ @translate_lang("Extended package and modernization of your IT")  }}</strong> {{ @translate_lang("infrastructure:")  }}
            </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ @translate_lang("Application and data warehouse migration to cloud")  }}
                </li>
                <li>
                    {{ @translate_lang("Integration of cloud and on-premises apps")  }}
                </li>
                <li>
                    {{ @translate_lang("Infrastructure and app evolution:")  }}
                </li>
                <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed mx-2 ">
                    <li>
                        {{ @translate_lang("Introduction of minor fixes and major updates")  }}
                    </li>
                    <li>
                        {{ @translate_lang("Customizations and integrations with SaaS products")  }}
                    </li>
                    <li>
                        {{ @translate_lang("App delivery automaion")  }}
                    </li>
                </ul>

            </ul>
            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ @translate_lang("Outsource 100% of it")  }}</button>

        </div>
    </div>

</div>

<div class="text-2xl md:text-3xl font-bold mt-20 mx-8">
    {{ @translate_lang("How much will it cost?")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <p class="text-xl font-normal">
        {{ @translate_lang("We provide customizable packages of managed IT services (a client can choose any components and services)
        with
        flexible pricing.​​ The subscription fee for managed IT services is affected by the following factors:")  }}
    </p>
    <ul class="list-outside list-disc bg-rose-200 font-normal leading-relaxed m-6 text-xl ">
        <li>
            {{ @translate_lang("IT infrastructure type (cloud, on-premises).")  }}
        </li>
        <li>
            {{ @translate_lang("IT infrastructure complexity.")  }}
        </li>
        <li>
            {{ @translate_lang("Scope of infrastructure projects.")  }}
        </li>
        <li>
            {{ @translate_lang("Support package (time coverage, number of issues included).")  }}
        </li>
        <li>
            {{ @translate_lang("SLO (target KPIs).")  }}
        </li>
    </ul>
    <p class="font-normal text-xl">
        {{ @translate_lang("We will be pleased to provide an estimate for you.")  }}
    </p>
</div>
<div class='w-2/5 m-4 flex justify-start items-center'>
    <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ @translate_lang("get a quote")  }}</a>
</div>

<div class=" mx-auto w-full">
    <div class="text-2xl md:text-3xl font-bold mt-20 mx-10">
        {{ @translate_lang("What Managed IT Services Bring to Our Customers")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        <p class="font-normal text-xl">
            {{ @translate_lang("Opting for a managed services provider who will maintain and proactively improve your IT infrastructure
            is a reasonable step to get tangible gains sooner. Let the numbers speak:")  }}
        </p>
    </div>
    <div class="w-full sm:flex sm:flex-row justify-start flex flex-col my-10 font-bold ">
        <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-start hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
                -50%
            </p><br>
            <p class="pl-2 mx-auto font-normal">{{ @translate_lang("infrastructure support costs")  }}</p>
        </div>
        <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
                x1.5-3
            </p><br>
            <p class="pl-2 mx-auto font-normal">{{ @translate_lang("increase in software development speed")  }}</p>
        </div>
        <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
                100%
            </p><br>
            <p class="pl-2 mx-auto font-normal">{{ @translate_lang("regulatory compliance of the IT infrastructure")  }}
            </p>
        </div>

    </div>
</div>

<div class='flex justify-between items-center p-10 shadow-2xl my-16'>
    <div class='w-2/3'>
        <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ @translate_lang("Start Improving Your IT Infrastructure NOW!")  }} </p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </h1>
        <p class='text-gray-600 text-xl'> {{ @translate_lang("ScienceSoft’s professionals will keep your IT infrastructure reliable and
        highly efficient 24/7 to let you focus on the strategic decisions only.")  }} </p>
    </div>
    <div class='w-2/5 m-0 flex justify-center items-center'>
        <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ @translate_lang("MAKE IT INFRASTRUCTURE EFFICIENT")  }}</a>
    </div>
</div>
</div>

@endsection

@section('js')
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

@endsection
