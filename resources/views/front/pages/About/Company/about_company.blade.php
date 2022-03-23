@extends('front.layout')

@section('css')

@endsection

@section('main')


    <div class="my-10">

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('About Smart Software– Global IT Company') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 my-1" />
        <img src="{{ asset('assets/icon/data-analytics.svg')}}" />
        <p class="my-5 text-lg">
            {{ t("Founded in 1989, Smart Softwarea provider of IT consulting and software
            development services. Having started as a small AI product company, we
            switched to IT services in 2002 and ever since we have helped non-IT
            organizations and software product companies improve business
            performance and quickly win new customers.") }}
        </p>
        <p class="my-5 text-lg">
            {{ t("With over 31 years in Information Technology, we have built up expertise
            in CRM, ERP, Ecommerce, Data Analytics, Information Security, DMS, and
            other areas and conquered such innovative fields as Artificial
            Intelligence and Machine Learning, Big Data, Internet of Things,
            Computer Vision, and Augmented and Virtual Reality.") }}
        </p>
        <p class="my-5 text-lg">
            {{ t("We headquarter in McKinney, TX, US, have a European office in Vantaa,
            Finland and a delivery center in Minsk, Belarus. Having gained trust
            among companies operating in the Gulf region, we opened our Middle East
            office in the UAE in 2020.") }}
        </p>
    </div>

    <div class="my-10">
        <div class="text-2xl md:text-3xl font-bold">
            {{ t('Smart Software’S HIGHLIGHTS') }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <div class="flex flex-row">
            <div class="w-2/3">
                <img src="https://www.scnsoft.com/about/company-new/illustrations-for-timeline_08-2020_1.svg" alt="">
            </div>
            <div>
                <ul class="ml-10 list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                    <p class="font-bold text-2xl">
                        2020
                    </p>
                    <li>
                        {{ t('Smart Softwareattained AWS Select Tier Consulting Partner status.') }}
                    </li>
                    <li>
                        {{ t("Smart Softwarefeatured on the Clutch lists of Top IT Services Firms, Top Cloud Consultants, and Top
                        1000 B2B Providers Globally.") }}
                    </li>
                    <li>
                        {{ t('Smart Softwarefeatured in IAOP Global Outsourcing 100 Award Lists 2020.') }}
                    </li>
                    <li>
                        {{ t('Smart Softwareacquired Gold Microsoft Competency in Application Integration.') }}
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="my-10 text-2xl md:text-3xl font-bold">
        {{ t('OUR SERVICE MAP') }}
        <hr class="border-t-2 w-12 border-yellow-600 my-2">
    </div>

    <div class="flex justify-center flex-col md:flex-row">
        <div class="flex flex-row my-2">
            <div class="mx-8 border-2">
                <div class="m-8 text-lg md:text-2xl font-bold">
                    {{ t('For non-IT enterprises') }}
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>
                <p class="m-10 mb-20">
                    {{ t("To help you improve business performance, optimize customer service, and tap in digital
                    transformation.") }}
                </p>

            </div>
        </div>
        <div class="flex flex-row my-2">
            <div class="mx-8 border-2">
                <div class="m-8 text-lg md:text-2xl font-bold">
                    {{ t('For non-IT enterprises') }}
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </div>
                <p class="m-10 mb-20">
                    {{ t("To help you improve business performance, optimize customer service, and tap in digital
                    transformation.") }}
                </p>

            </div>
        </div>
    </div>

    <div>
        <p class="text-xl my-6">
            {{ t("We continue to grow and additionally have a partner network of five companies with a total of 700+
            employees, which, combined with our strong technological expertise, enables us to cover all development and
            infrastructure needs of midsized and large organizations.") }}
        </p>

        <p class="text-xl my-6">
            {{ t("Throughout our history, we have developed a number of partnerships with technology leaders, who highly
            attested our technical competencies and the ability to understand our customers’ needs and translate them
            into quality services:") }}
        </p>
    </div>

    <div class="swiper-container about-slide h-40">
        <div class="swiper-wrapper flex items-center">
            @foreach ($partners as $partner)
                <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img src="@if ($partner->image) {{ '/uploads/categories/' . $partner->image }}
                    @else{{ 'asset(images/default-image.png)' }} @endif "></div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class=" text-2xl md:text-3xl font-bold">
        {{ t('OUR PRICING POLICY') }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>

    <p class="text-xl">
        {{ t('Depending on a project and the nature of the delivered service, we resort to one of the following pricing') }}
        {{ t('models:') }}
    </p>
    <div class="flex flex-col m-10 justify-between flex space-x-0 md:flex-row md:space-x-3">

        <p
            class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
            {{ t('Fixed Price') }}
        </p>

        <p
            class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
            {{ t('Time & Material') }}
        </p>

        <p
            class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
            {{ t('Consumption-based pricing') }}
        </p>

        <p
            class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
            {{ t('Monthly subscription fee') }}
        </p>
    </div>

    @include('front.Components.leader')

    <p class="text-xl my-10">
        {{ t("To increase productivity and provide for the project cost reduction for our customers, we invest a part of our
        revenue in:") }}
    </p>

    <div class="px-10">
        <div class="flex flex-row items-center my-12 group">
            <div class="p-2 border-2 w-12 text-center group-hover:border-blue-400 duration-300">
                1
            </div>
            <div class="mx-6 ">
                <p class="text-xl">
                    {{ t('Quality management and process optimization') }}
                </p>
            </div>
        </div>


        <div class="flex flex-row items-center my-12 group">
            <div class="p-2 border-2 w-12 text-center group-hover:border-blue-400 duration-300">
                2
            </div>
            <div class="mx-6 ">
                <p class="text-xl">
                    {{ t('Adoption of new technologies') }}
                </p>
            </div>
        </div>



        <div class="flex flex-row items-center group">
            <div class="p-2 border-2 w-12 text-center group-hover:border-blue-400 duration-300">
                3
            </div>
            <div class="mx-6 ">
                <p class="text-xl">
                    {{ t('Employee training and further education') }}
                </p>
            </div>
        </div>
    </div>

    <p class="text-2xl my-10">
        {{ t("In addition, to implement software solutions faster and optimize the solutions’ Total Cost of Ownership, we
        resort to using the following technologies and methodologies:") }}
    </p>


    <div>
        <div class="flex flex-col md:flex-row  items-start">
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-2 md:m-8 w-20 h-20 md:w-20 md:h-20"
                    src="https://www.scnsoft.com/about/company-new/technologies-and-methods-01-cloud-native.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    {{ t('Cloud-native architecture') }}
                </p>
            </div>
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-2 md:m-8 w-20 h-20 md:w-20 md:h-20"
                    src="https://www.scnsoft.com/about/company-new/technologies-and-methods-03-test-automation.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    {{ t('Test automation') }}
                </p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row  items-start">
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-2 md:m-8 w-20 h-20 md:w-20 md:h-20"
                    src="https://www.scnsoft.com/about/company-new/technologies-and-methods-02-devops-ci-cd.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    {{ t('DevOps and the implementation of CI/CD pipelines') }}
                </p>
            </div>
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-2 md:m-8 w-20 h-20 md:w-20 md:h-20"
                    src="https://www.scnsoft.com/about/company-new/technologies-and-methods-04-app-performance-management.svg"
                    alt="">
                <p class=" text-xl md:text-2xl ">
                    {{ t('Application Performance Management') }}
                </p>
            </div>

        </div>
    </div>





    <div class="my-10 text-2xl md:text-3xl font-bold">
        {{ t('OUR CUSTOMERS') }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>


    <p class="text-xl my-8">
        {{ t("We collaborate with companies from 37 countries and have 76% of our revenue generated from contracts lasting
                for
                more than a year. Some of our prominent clients include:") }}
    </p>


    <div class="swiper-container about-slide h-40">
        <div class="swiper-wrapper flex items-center">
            @foreach ($partners as $partner)
                <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img src="@if ($partner->image) {{ '/uploads/categories/' . $partner->image }}
                    @else{{ 'asset(images/default-image.png)' }} @endif "></div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


    <p class="text-xl my-8">
        {{ t("During our practice, we acquired expertise and a deep understanding of business models and processes across
                23
                industries, including:") }}
    </p>


    <ul class="text-black flex flex-wrap flex-row">
        <li
            class="bg-white rounded lg:w-56 w-full border hover:shadow-lg  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative ">
            <a href="#">
                {{ t('Enterprise application') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right text-xs transform rotate-45"></i>
            </div>
        </li>
    </ul>


    <div class="my-10 text-2xl md:text-3xl font-bold">
        {{ t('WHAT OUR CUSTOMERS GET CHOOSING Smart SoftwareAS A VENDOR') }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>

    <div>
        <div class="my-6 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex justify-start items-start w-40">
                    <img class="w-full h-full md:w-28 md:h-28"
                        src="https://www.scnsoft.com/it-outsourcing-services/how-we-help_optimizing-business-operations.svg"
                        alt="">
                </div>
                <div class=" flex flex-col w-full">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ t('Predictable performance and quality') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class="text-xl">
                        {{ t("We follow a corporate quality management system established in 2007. According to it, we set up
                            risk
                            management practices on corporate, account, and project levels, and host the Project Management
                            Office, which oversees all corporate processes.") }}
                    </p>
                </div>
            </div>
        </div>
        <div class="my-6 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start">
                <div class="flex justify-start items-start w-40">
                    <img class="w-full h-full md:w-28 md:h-28"
                        src="https://www.scnsoft.com/about/company-new/what-customers-get-02.svg" alt="">
                </div>
                <div class=" flex flex-col w-full">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ t('Reliable service delivery') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class="text-xl">
                        {{ t("We guarantee that no incident influences our ability to operate. For that, we set up a proven
                            information security strategy and management system and established 24/7 in-house security
                            monitoring. Our infrastructure is cloud-based, and we are ready for remote work.") }}
                    </p>
                </div>
            </div>
        </div>
        <div class="my-6 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start">
                <div class="flex justify-start items-start w-40">
                    <img class="w-full h-full md:w-28 md:h-28"
                        src="https://www.scnsoft.com/about/company-new/what-customers-get-03.svg" alt="">
                </div>
                <div class=" flex flex-col w-full">
                    <h1 class="text-3xl md:text-4xl font-bold">
                        {{ t('Fast development while retaining application stability') }}
                    </h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class="text-xl">
                        {{ t("We established a set of management and technology practices that allows us to release new
                            application versions every 2-3-weeks and implement minor updates up to several times a day. We
                            achieve that due to an iterative approach to development, resorting to Agile project management
                            practices, and relying on cloud-native architectures and modern approaches to infrastructure
                            management.") }}
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class='flex flex-col md:flex-row items-center p-10 shadow-2xl border border-200 my-20'>
        <div class='w-full'>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-2xl font-bold'>
                    {{ t("Looking for a Partner to Support Your Business Growth or Monetize Your
                      Idea?") }}
                </p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <p class='text-gray-600 text-xl'>
                {{ t("Smart Softwarewill help you improve your business operations with an optimal
                 service or assist you in launching a product that would win customers fast.") }}
            </p>
        </div>
        <div class=' w-full mt-10 md:w-1/3 md:mt-0 flex justify-center items-center'>
            <a href="#"
                class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("Discuss My
                 Needs") }}</a>
        </div>
    </div>
    </div>

    </div>


@endsection

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

@section('js')

@endsection
