@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-10">

        <div class="text-2xl md:text-4xl font-bold mt-6">
            {{ t("IT Infrastructure Services – Consulting, Implementation, Management – to Increase Your Business
             Sustainability")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/it-outsourcing-services/it-support-2-teampro.svg">
            <div>
                <p class="font-normal text-lg leading-loose mt-10">
                    {{ t("IT support comprises procedures intended to maintain failsafe IT workflows and reduce IT costs.
                     TeamPRO’s IT support services are backed with 13 years of experience in help desk and
                     application support and include IT help desk, Network Operations Center (NOC) and software
                     support to guarantee superior user experience and on-the-go improvement of your IT processes.")  }}
                </p>
            </div>
        </div>

        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ t("Do IT Operations Drain Your Resources?")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ t("Let us reverse the situation! From the support of daily operations
                 to the assistance in digital transformation and implementation of novel technology, our IT
                 outsourcing services are a cost-effective way of increasing business performance.")  }} </p>
            </div>
            <div class='w-2/5 m-0 flex justify-center items-center'>
                <a href="#"
                    class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("DISCUSS MY
                    OUTSOURCING OPTIONS")  }}</a>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold uppercase">
            {{ t("What You Get with IT Support Services")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-row">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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

        <div class="flex flex-row my-10">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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

        <div class="text-2xl md:text-4xl font-bold mt-6">
            {{ t("IT Infrastructure Services – Consulting, Implementation, Management – to Increase Your Business
            Sustainability")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/it-help-desk/it-infrastructure.svg">
        </div>

        <div class="text-2xl md:text-3xl font-bold mt-10">
            {{ t("Why Choose TeamPRO")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="-m-8 rounded-sm p-2 md:p-8">
            <div class="flex flex-col md:flex-row  items-start">
                <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="m-8 w-full h-full md:w-14 md:h-14"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p class=" text-xl md:text-2xl ">
                        31 {{ t("years of experience in information technology.")  }}
                    </p>
                </div>
            </div>
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-8 w-full h-full md:w-14 md:h-14"
                    src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    {{ t("13-year experience in help desk and application support.")  }}
                </p>
            </div>
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-8 w-full h-full md:w-14 md:h-14"
                    src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    12 {{ t("years of experience in ITIL-compliant IT service management.")  }}
                </p>
            </div>
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-8 w-full h-full md:w-14 md:h-14"
                    src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    {{ t("Microsoft Gold Partner, AWS Select Consulting Partner, IBM Business Partner.")  }}
                </p>
            </div>
            <div class="flex flex-row justify-start items-center w-4/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="m-8 w-full h-full md:w-14 md:h-14"
                    src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                <p class=" text-xl md:text-2xl ">
                    700 + {{ t("employees on board.")  }}
                </p>
            </div>
        </div>



<!-- Muhammadali Carusel qoshdi -->


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






        <div class="text-2xl md:text-3xl font-bold uppercase">
            {{ t("Competitive Traits of TeamPRO’s IT Support Services")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-row">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
                <hr class="w-full " />
                <div class="p-4">
                    <p class="text-lg mb-3 text-center font-bold">{{ t("Full-service IT outsourcing")  }}</p>
                    <p class="mb-3">{{ t("Drawing on your needs, we can suggest either an offshore dedicated team or team
                     augmentation model of cooperation to back up your .NET development project or migration of
                     legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                     you’re free to screen them before the start of cooperation.")  }}</p>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
                <hr class="w-full " />
                <div class="p-4">
                    <p class="text-lg mb-3 text-center font-bold">{{ t("Co-sourcing with an in-house IT team")  }}
                    </p>
                    <p class="mb-3">{{ t("Outsource your entire IT landscape, including IT service planning and
                    management, to achieve greater business performance with IT ROI boosted by 50-300%.")  }}</p>
                    <p>
                        {{ t("We can also act as a service integrator taking up the management of your IT vendor
                        ecosystem.")  }}
                    </p>
                </div>
            </div>

            <div class="rounded border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
                <hr class="w-full  " />
                <div class="p-4">
                    <p class="text-lg mb-3 text-center font-bold">{{ t("Co-sourcing with other vendors")  }}</p>
                    <p class="mb-3">{{ t("Drawing on your needs, we can suggest either an offshore dedicated team or team
                    augmentation model of cooperation to back up your .NET development project or migration of
                    legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                    you’re free to screen them before the start of cooperation.")  }}</p>
                </div>
            </div>
        </div>
        <div class="text-2xl md:text-3xl font-bold my-10">
            {{ t("OUR HALLMARK IT SUPPORT PROJECTS")  }}
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

        <div class="text-2xl md:text-3xl font-bold my-10">
            {{ t("Choose Your Service Option")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="flex flex-row">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-2/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("IT Help Desk")  }}</p>
                    <p class="mb-3 italic">{{ t("White-label cooperation is possible.")  }}</p>
                    <p>{{ t("L1, L2, L3 support for enterprises, software companies and MSPs.")  }}</p>
                    <ul class="list-disc text-base md:text-lg leading-loose">
                        <li class="my-8">
                            {{ t("Introduction of efficient SOPs and ITSM processes.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Resolution of reported incidents.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("User satisfaction rate management.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Knowledge base maintenance.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Regular reporting.")  }}
                        </li>
                    </ul>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 100% of it")  }}</button>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-2/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("IT Help Desk")  }}</p>
                    <p class="mb-3 italic">{{ t("White-label cooperation is possible.")  }}</p>
                    <p>{{ t("L1, L2, L3 support for enterprises, software companies and MSPs.")  }}</p>
                    <ul class="list-disc text-base md:text-lg leading-loose">
                        <li class="my-8">
                            {{ t("Introduction of efficient SOPs and ITSM processes.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Resolution of reported incidents.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("User satisfaction rate management.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Knowledge base maintenance.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Regular reporting.")  }}
                        </li>
                    </ul>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 100% of it")  }}</button>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-2/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("IT Help Desk")  }}</p>
                    <p class="mb-3 italic">{{ t("White-label cooperation is possible.")  }}</p>
                    <p>{{ t("L1, L2, L3 support for enterprises, software companies and MSPs.")  }}</p>
                    <ul class="list-disc text-base md:text-lg leading-loose">
                        <li class="my-8">
                            {{ t("Introduction of efficient SOPs and ITSM processes.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Resolution of reported incidents.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("User satisfaction rate management.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Knowledge base maintenance.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Regular reporting.")  }}
                        </li>
                    </ul>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 100% of it")  }}</button>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-2/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ t("IT Help Desk")  }}</p>
                    <p class="mb-3 italic">{{ t("White-label cooperation is possible.")  }}</p>
                    <p>{{ t("L1, L2, L3 support for enterprises, software companies and MSPs.")  }}</p>
                    <ul class="list-disc text-base md:text-lg leading-loose">
                        <li class="my-8">
                            {{ t("Introduction of efficient SOPs and ITSM processes.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Resolution of reported incidents.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("User satisfaction rate management.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Knowledge base maintenance.")  }}
                        </li>
                        <li class="my-8">
                            {{ t("Regular reporting.")  }}
                        </li>
                    </ul>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ t("Outsource 100% of it")  }}</button>
                </div>
            </div>
        </div>

        <div class="text-2xl md:text-3xl font-bold my-10">
            {{ t("Why TeamPRO’s IT Support Matters")  }}
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        <div class="my-20  mx-auto w-full font-bold">
            <p class="font-medium text-4xl mx-auto">{{ t("Business-level gains:")  }}</p><br>
            <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        x1.5-2.5
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("IT cost reduction")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("increase in software development speed")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("regulatory compliance of the IT infrastructure")  }}
                    </p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        ~99.99%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("applications availability")  }}</p>
                </div>

            </div>
        </div>
        <div class="my-20  mx-auto w-full font-bold">
            <div class="w-full  sm:flex sm:flex-row justify-start flex flex-col ">
                <div
                    class="sm:w-2/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-start hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        +20-40%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("user satisfaction")  }}</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        -10%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">{{ t("app issues")  }}</p>
                </div>

            </div>
        </div>

        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>{{ t("Get Your Stable and Efficient IT with Least Effort!")  }} </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>{{ t("Smart Softwareprofessionals will conduct close monitoring of your IT
                infrastructure or its components and set up efficient IT support workflows.")  }} </p>
            </div>
            <div class='w-2/5 m-0 flex justify-center items-center'>
                <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ t("launch
                result-oriented it support!")  }}</a>
            </div>
        </div>

    </div>>

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
