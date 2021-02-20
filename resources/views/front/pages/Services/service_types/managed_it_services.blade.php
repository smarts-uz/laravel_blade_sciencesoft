@extends('front.layout')

@section('css')

@endsection

@section('main')

<div>

<div class="text-2xl md:text-4xl font-bold">
    {{ _trans("Managed IT Services for Stable and Reliably Evolving IT Environment")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <img src="https://www.scnsoft.com/it-outsourcing-services/it-outsourcing-services-sciencesoft.svg">
    <div>
        <p class="font-normal text-lg leading-loose mt-10">
            {{ _trans("Managed IT services are aimed at handing over your IT operations to a third-party IT services provider,
            which takes responsibility to ensure high efficiency and timely improvement of your IT environment and
            processes within it.")  }}
        </p>

        <p class="text-lg font-normal py-6">
            <strong>{{ _trans("Managed IT services by ScienceSoft backed with 12 years of experience in ITSM span the all-round
            support
            for cloud, on-premises and hybrid infrastructures")  }}</strong> {{ _trans("and include consulting and migration
            services for
            proactive IT evolution.")  }}
        </p>

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
    <div class='w-2/5 m-0 flex justify-center items-center'>
        <a href="#" class='px-4 py-3 rounded text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("DISCUSS MY
        OUTSOURCING OPTIONS")  }}</a>
    </div>
</div>

<div class="text-2xl md:text-4xl font-bold my-6">
    {{ _trans("IT Infrastructure Components Our Managed IT Services Tackle")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="flex flex-col md:flex-row items-start ">
    <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
        <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
            <li class="mb-4 underline text-black"><a href="#">{{ _trans("Networks.")  }}</a></li>
            <li class="mb-4">{{ _trans("On-premises data centers.")  }}</li>
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ _trans("Cloud services")  }} </a>{{ _trans("(IaaS, PaaS,
            SaaS).")  }} </li>
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ _trans("Cybersecurity tools.")  }}</a></li>
            <li>
                {{ _trans("Databases,")  }} <a class="underline hover:text-blue-500" href="#">{{ _trans("data warehouses,")  }}</a> {{ _trans("data lakes.")  }}
            </li>
        </ul>
    </div>
    <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
        <ul class="list-outside list-disc bg-rose-200 text-lg leading-relaxed">
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ _trans("Applications and app
            infrastructures.")  }}</a></li>
            <li class="mb-4"><a class="underline hover:text-blue-500" href="#">{{ _trans("Development infrastructures")  }}</a>
                {{ _trans("(CI/CD, development and testing environments).")  }}</li>
            <li class="mb-4">76% {{ _trans("of our revenue comes from 1+ year-long customers, such as eBay, IBM,
            Websites and web portals.")  }}
            </li>
            <li class="mb-4">{{ _trans("Desktops.")  }}</li>
        </ul>
    </div>
</div>
<div class="w-full flex items-center justify-center">
    <img
        src="https://www.scnsoft.com/it-infrastructure/it-infrastructure-support/it-infrastructure-components-sciencesoft.svg">

</div>

<div class="text-2xl md:text-3xl font-bold mt-5">
    {{ _trans("Deliverables of ScienceSoft’s Managed IT Services")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="flex flex-row flex-wrap">
    <div class="rounded-sm border-2 transition-shadow hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("Increased IT services and infrastructure
            efficiency supported by:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li>
                    {{ _trans("Network diagrams")  }}
                </li>
                <li>
                    {{ _trans("Architecture descriptions")  }}
                </li>
                <li>
                    {{ _trans("Configuration management database")  }}
                </li>
                <li>
                    {{ _trans("Implementation plan for infrastructure improvements")  }}
                </li>
                <li>
                    {{ _trans("Documented operating procedures")  }}
                </li>
            </ul>
        </div>
    </div>
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("Transparent service:")  }}</p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li>
                    {{ _trans("Regular service reports")  }}
                </li>
                <li>
                    {{ _trans("Quarterly maintenance reports (performance, security, capacity, issues, patching, backups)")  }}
                </li>
                <li>
                    {{ _trans("Health check reports")  }}
                </li>
                <li>
                    {{ _trans("Security audit reports")  }}
                </li>
                <li>
                    {{ _trans("Incident reports")  }}
                </li>
            </ul>
        </div>
    </div>

    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("CSAT and user adoption rate improvement
            via:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ _trans("Surveys and action points based on the assessment results")  }} </li>
                <li>
                    {{ _trans("Training materials for users")  }} </li>
            </ul>
        </div>
    </div>

</div>

<div class="flex flex-row m-8">
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("Compliance with industry standards:
            via:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ _trans("Regulatory compliance reports")  }} </li>
            </ul>
        </div>
    </div>
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("Cost-effective user support with:
            via:")  }} </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ _trans("Knowledge base articles")  }} </li>
                <li>
                    {{ _trans("FAQ")  }} </li>
                <li>
                    {{ _trans("User guides")  }}
                </li>
            </ul>
        </div>
    </div>
</div>
<div class='w-full m-0 flex justify-center items-center'>
    <a href="#" class='px-4 py-3 rounded text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("REQUEST MANAGED IT
    SERVICES")  }}</a>
</div>

<div class="text-2xl md:text-4xl font-bold my-10">
    {{ _trans("Why Choose ScienceSoft")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <ul class="font-normal list-outside list-disc bg-rose-200 text-lg leading-relaxed m-4">

        <li>
            31 {{ _trans("years in IT services.")  }}
        </li>
        <li>
            12 {{ _trans("years of experience in ITSM")  }}
        </li>
        <li>
            {{ _trans("ITIL personnel holding ITSM-related certificates.")  }}
        </li>
        <li>
            {{ _trans("More than 7 years in applying DevOps practices.")  }}
        </li>
        <li>
            {{ _trans("More than 700 IT specialists including Microsoft Certified Professionals, AWS Certified Solutions
            Architects, AWS Certified SysOps Administrators, AWS Technical Professionals, Red Hat Certified System
            Administrators.")  }}
        </li>
    </ul>
</div>
<div class="text-2xl md:text-3xl font-bold mt-20">
    {{ _trans("Technologies We Work with")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

  <div class="flex my-5 shadow-lg">
    <ul class="w-1/5 border-r border-gray-200">
      <li class="link text-xl cursor-pointer px-5 py-3 text-blue-500 border-l-8 border-blue-500 duration-300 bg-gray-50" onclick="Tab(event, 'Platforms')">Platforms</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Monitoring-tools')">Monitoring tools</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'DevOps')">DevOps</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Clouds')">Clouds</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Backend')">Backend</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Frontend')">Frontend</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Mobile')">Mobile</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Databases')">Databases</li>
      <li class="link text-xl cursor-pointer px-5 py-3" onclick="Tab(event, 'Cloud-Databases')">Cloud Databases (DBaaS)</li>
    </ul>
    <div class="bg-gray-50 w-4/5 p-5">
      <div id="Platforms" style="display: block;" class="content hidden">
        <h1 class="text-2xl font-bold">Programming</h1>
        <hr class="w-14 h-0.5 border-none my-3 bg-yellow-400"/>
        <p>Click on the platform to learn about our capabilities in it.</p>
        <div class="flex flex-wrap">
            <div class="w-28 h-28 flex hover:shadow-lg duration-300 bg-white items-center justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/dynamics-365-logo.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/power-bi-2020.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/salesforce.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/sap.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/servicenow-logo.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/sharepoint-logo-vertical.svg') }}" alt="tab">
            </div>
        </div>
      </div>
      <div id="Monitoring-tools" class="content hidden">
        <h1 class="text-2xl font-bold">Monitoring tools</h1>
        <hr class="w-14 h-0.5 border-none my-3 bg-yellow-400"/>
        <div class="flex flex-wrap">
            <div class="w-28 h-28 flex hover:shadow-lg duration-300 bg-white items-center justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/dynamics-365-logo.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/power-bi-2020.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/salesforce.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/sap.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/servicenow-logo.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/sharepoint-logo-vertical.svg') }}" alt="tab">
            </div>
        </div>
      </div>
      <div id="DevOps" class="content hidden">
        <h1 class="text-2xl font-bold">DevOps</h1>
        <hr class="w-14 h-0.5 border-none my-3 bg-yellow-400"/>
        <div class="flex flex-wrap">
            <div class="w-28 h-28 flex hover:shadow-lg duration-300 bg-white items-center justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/dynamics-365-logo.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/power-bi-2020.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/salesforce.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/sap.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/servicenow-logo.svg') }}" alt="tab">
            </div>
            <div class="w-28 h-28 flex items-center hover:shadow-lg duration-300 bg-white justify-center border border-gray-200 p-5 m-3">
                <img src="{{ asset('images/tab/sharepoint-logo-vertical.svg') }}" alt="tab">
            </div>
        </div>
      </div>
    </div>
  </div>


<div class="text-2xl md:text-3xl font-bold mt-20">
    {{ _trans("Your Questions about Managed Services Answered")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="rounded-sm relative mt-10 transition-shadow p-2 md:p-8">
    <div class="flex flex-col md:flex-row items-start ">
        <div class="flex text-xl mr-4 md:mr-8 mb-8 md:mb-0">
            <img class="w-14" src="https://www.scnsoft.com/managed-it-services/managed-new/question.svg" alt="">
        </div>
        <div class=" flex flex-col w-5/6 ">
            <h1 class="text-xl md:text-2xl font-bold">{{ _trans("How do I know if my IT infrastructure costs may be reduced?")  }}
            </h1>
            <p class=" text-lg md:text-xl ">
                {{ _trans("ScienceSoft adheres to strict security policies and applies in-house security management systems
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
            <h1 class="text-xl md:text-2xl font-bold">{{ _trans("How can a managed service provider guarantee against premature
            service termination?")  }}
            </h1>
            <p class=" text-lg md:text-xl ">
                {{ _trans("Our contracts provide for a substantial transition period so that no potential abrupt termination
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
            <h1 class="text-xl md:text-2xl font-bold">{{ _trans("How do I know if my IT infrastructure costs may be reduced?")  }}
            </h1>
            <p class=" text-lg md:text-xl ">
                {{ _trans("We analyze the current state of your IT infrastructure to see the potential for its improvement and
                compare the TCO of your IT infrastructure managed in-house vs. by ScienceSoft.")  }}
            </p>

        </div>
    </div>

</div>

<div class="text-2xl md:text-3xl font-bold mt-20 mx-8">
    {{ _trans("See Our Managed Services Delivered!")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

================davomi bor Carousel=================

<div class="text-2xl md:text-3xl font-bold mt-20">
    {{ _trans("Our Service Packages")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
</div>

<div class="flex flex-row flex-wrap justify-between m-8">
    <div class="rounded-sm border-2 transition-shadow hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("Basic")  }}</p>
            <p>
                {{ _trans("Get your infrastructure continuously supported and optimized:") }}
            </p>
            <ul class=" list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li class="my-2">
                    <a class="underline text-black hover:text-blue-500" href="#">{{ _trans("Proactive infrastructure
                    monitoring")  }}</a>
                </li>
                <li class="my-2">
                    <a class="underline text-black" href="#">{{ _trans("IT infrastructure administration:")  }} </a>
                </li>
                <ul class=" list-outside list-disc bg-rose-200 text-base leading-relaxed m-2">
                    <li>
                        {{ _trans("User administration")  }}
                    </li>
                    <li>
                        {{ _trans("Regular software configuration and updates")  }}
                    </li>
                    <li>
                        {{ _trans("Network, data center, cloud service management")  }}
                    </li>
                </ul>
                <li class="my-2">
                    <a class="underline text-black hover:text-blue-500" href="#">{{ _trans("L1, L2, L3 support")  }}</a>
                </li>
                <li class="my-2">
                    {{ _trans("Cloud usage optimization")  }}
                </li>
            </ul>
            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>

        </div>
    </div>
    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">{{ _trans("Extended")  }}</p>
            <p>{{ _trans("Includes the Basic package and assistance with new infrastructure initiatives:")  }}</p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">
                <li>
                    {{ _trans("Analyzing problems in IT infrastructure and providing recommendations")  }}
                </li>
                <li>
                    {{ _trans("Designing a new IT infrastructure or its components")  }}
                </li>
                <li>
                    <a class="underline text-black hover:text-blue-500" href="#">{{ _trans("Designing CI/CD pipelines")  }}</a>
                </li>
                <li>
                    {{ _trans("Advising on security improvement using the SecOps approach")  }}
                </li>
            </ul>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
        </div>

    </div>

    <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
        <hr class="w-full border-t-4 border-blue-800" />
        <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-semibold">
                {{ _trans("Extended Plus")  }}
            </p>
            <p>
                {{ _trans("Includes the Extended package and modernization of your IT infrastructure:")  }}
            </p>
            <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed m-4">

                <li>
                    {{ _trans("Application and data warehouse migration to cloud")  }}
                </li>
                <li>
                    {{ _trans("Integration of cloud and on-premises apps")  }}
                </li>
                <li>
                    {{ _trans("Infrastructure and app evolution:")  }}
                </li>
                <ul class="list-outside list-disc bg-rose-200 text-base leading-relaxed mx-2 ">
                    <li>
                        {{ _trans("Introduction of minor fixes and major updates")  }}
                    </li>
                    <li>
                        {{ _trans("Customizations and integrations with SaaS products")  }}
                    </li>
                    <li>
                        {{ _trans("App delivery automaion")  }}
                    </li>
                </ul>

            </ul>
            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>

        </div>
    </div>

</div>

<div class="text-2xl md:text-3xl font-bold mt-20 mx-8">
    {{ _trans("How much will it cost?")  }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <p class="text-xl font-normal">
        {{ _trans("We provide customizable packages of managed IT services (a client can choose any components and services)
        with
        flexible pricing.​​ The subscription fee for managed IT services is affected by the following factors:")  }}
    </p>
    <ul class="list-outside list-disc bg-rose-200 font-normal leading-relaxed m-6 text-xl ">
        <li>
            {{ _trans("IT infrastructure type (cloud, on-premises).")  }}
        </li>
        <li>
            {{ _trans("IT infrastructure complexity.")  }}
        </li>
        <li>
            {{ _trans("Scope of infrastructure projects.")  }}
        </li>
        <li>
            {{ _trans("Support package (time coverage, number of issues included).")  }}
        </li>
        <li>
            {{ _trans("SLO (target KPIs).")  }}
        </li>
    </ul>
    <p class="font-normal text-xl">
        {{ _trans("We will be pleased to provide an estimate for you.")  }}
    </p>
</div>
<div class='w-2/5 m-4 flex justify-start items-center'>
    <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("get a quote")  }}</a>
</div>

<div class=" mx-auto w-full">
    <div class="text-2xl md:text-3xl font-bold mt-20 mx-10">
        {{ _trans("What Managed IT Services Bring to Our Customers")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        <p class="font-normal text-xl">
            {{ _trans("Opting for a managed services provider who will maintain and proactively improve your IT infrastructure
            is a reasonable step to get tangible gains sooner. Let the numbers speak:")  }}
        </p>
    </div>
    <div class="w-full sm:flex sm:flex-row justify-start flex flex-col my-10 font-bold ">
        <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-start hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
                -50%
            </p><br>
            <p class="pl-2 mx-auto font-normal">{{ _trans("infrastructure support costs")  }}</p>
        </div>
        <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
                x1.5-3
            </p><br>
            <p class="pl-2 mx-auto font-normal">{{ _trans("increase in software development speed")  }}</p>
        </div>
        <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
                100%
            </p><br>
            <p class="pl-2 mx-auto font-normal">{{ _trans("regulatory compliance of the IT infrastructure")  }}
            </p>
        </div>

    </div>
</div>

<div class='flex justify-between items-center p-10 shadow-2xl my-16'>
    <div class='w-2/3'>
        <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ _trans("Start Improving Your IT Infrastructure NOW!")  }} </p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </h1>
        <p class='text-gray-600 text-xl'> {{ _trans("ScienceSoft’s professionals will keep your IT infrastructure reliable and
        highly efficient 24/7 to let you focus on the strategic decisions only.")  }} </p>
    </div>
    <div class='w-2/5 m-0 flex justify-center items-center'>
        <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("MAKE IT INFRASTRUCTURE EFFICIENT")  }}</a>
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
