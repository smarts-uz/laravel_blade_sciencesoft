@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="my-8">


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('Healthcare IT Consulting') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/cover-pic-healthcare-it-consulting-4.svg" alt="">



    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ t('Healthcare IT consulting services help healthcare organizations overcome limited or low-level healthcare IT expertise and support the effective implementation of digital healthcare initiatives.') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl"><span class="text-gray-800 font-bold">{{ t('Teampro') }}</span>
        {{ t(' provides hospitals, clinics, practices, assisted living facilities, labs, and other healthcare organizations with') }}<span
            class="text-gray-800 font-bold">{{ t(' healthcare IT consulting services ') }}</span>
            {{t('to help them')}}
            <span
            class="text-gray-800 font-bold">{{ t('adopt complex digital initiatives, provide digital patient care, optimize internal processes, improve the IT infrastructure,') }}</span>
            {{('and more.')}}
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('Doubt Healthcare Digital Initiatives Will Pay Off?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t('Smart Softwarehealthcare IT consultants help choose and adopt fitting healthcare solutions and ensure your IT landscape works effectively to support clinical processes and drive new digital healthcare initiatives. ') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t(' REQUEST A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>


    <div class="md:flex">
    <div class="md:w-4/12">
    <img src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/why-ss.svg" alt="">
    </div>
    <div class="md:w-8/12">
    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('31 years  ') }}</span>
                    <span class="text-gray-600">{{ t(' in the IT market.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('15 years') }}</span>
                    <span class="text-gray-600">{{ t(' in the healthcare IT industry.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('ISO 13485:2016') }}</span>
                    <span class="text-gray-600">{{ t(' and') }}</span>
                    <span class="text-gray-800 font-bold">{{ t('IEC 62304:2006 ') }}</span>
                    <span class="text-gray-600">{{ t(' certifications.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t(' Working experience with ') }}</span>
                <span class="text-gray-800 font-bold">{{ t(' HIPAA ') }}</span>
                    <span class="text-gray-600">{{ t(' and') }}</span>
                    <span class="text-gray-800 font-bold">{{ t('FDA ') }}</span>
                    <span class="text-gray-600">{{ t(' regulations.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ t(' Working experience with healthcare standards (e.g., ') }}</span>
                <span class="text-gray-800 font-bold">{{ t('HL7, ICD-10, CPT, XDS/XDS-I') }}</span>
                    <span class="text-gray-600">{{ t(' ).') }}</span>

                </li>

        </ul>
    </div>
    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('HIGHLIGHTS OF HEALTHCARE IT CONSULTING SERVICES BY SCIENCESOFT') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">



    <div class="grid gap-4 md:grid-cols-2">
    <div class="p-6 border">
        <img src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" height="60" width="60"
             alt="">
        <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
            {{ t('Deep healthcare industry knowledge') }}
        </h1>

        <p class="text-lg text-gray-600 mt-6 md:text-xl">
            {{ t('ScienceSoft’s healthcare IT team consists of highly qualified professionals with experience in the healthcare field and related domains, such as pharmaceutical, biotech, health insurance, and medical device industry.') }}
        </p>


    </div>

    <div class="p-6 border">
        <img src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" height="60" width="60"
             alt="">
        <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
            {{ t('Consulting and practical assistance') }}
        </h1>

        <p class="text-lg text-gray-600 mt-6 md:text-xl">
            {{ t('ScienceSoft combines IT consulting with end-to-end IT services for the healthcare industry: business analysis, software implementation, continuous support, managed services.') }}
        </p>
    </div>



</div>

<h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('OUR SELECTED HEALTHCARE PROJECTS') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">



        <!-- Muhammadali carusel qoshdi -->


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

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('HEALTHCARE IT CONSULTING SERVICES WE OFFER') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

<div class="grid md:grid-cols-2 gap-8">

<div class="border pb-6 relative hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/strategy-consulting.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{t('IT strategy consulting')}}</h1>

            <div class="px-4">
                <p class="mb-4">{{t('We help:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Support new healthcare initiatives with IT.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Build an efficient IT roadmap.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Draw up an application integration plan.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Enhance IT service reliability and app performance management.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Ensure HIPAA compliance.')}}</p>
                    </div>
                </div>

                <a href="#" class="bg-blue-700 md:absolute bottom-6 right-4 left-4 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{t('OPT FOR IT STRATEGY CONSULTING')}}
                </a>

            </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/solution-consulting-3.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">{{t('Solution consulting')}}</h1>

            <div class="px-4">
                <p class="mb-4">{{t('We help you with:')}}</p>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Analysis of your needs, existing internal processes and healthcare software.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Solution design, including the choice of components and necessary customizations.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('ROI analysis.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('PoC.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Healthcare software implementation.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('User training.')}}</p>
                    </div>
                </div>
                <div class="flex mb-2">
                    <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
                    <div class="w-11/12">
                        <p>{{t('Continuous consulting support.')}}</p>
                    </div>
                </div>

                <a href="#" class="bg-blue-700 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{t('OPT FOR SOLUTION CONSULTING')}}
                </a>

            </div>

        </div>

</div>

<h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('BENEFIT FROM HIGH-QUALITY HEALTHCARE IT CONSULTING SERVICES!') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-2 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-5% ... -35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT operating costs')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('Up to 96%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('user satisfaction score')}}
                </p>
            </div>



        </div>
    </div>

    <div class="swiper-container big-slide md:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide text-center  pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('-5% ... -35%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('IT operating costs')}}
                </p>
            </div>
        </div>


        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('Up to 96%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('user satisfaction score')}}
                </p>
            </div>
        </div>

    </div>

</div>

<div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('Let IT Make Your Healthcare Services Better') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t('Smart Software healthcare IT team will advise you on how to achieve your goals as fast as possible with healthcare software.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t(' REQUEST A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>


    </div>

@endsection

@section('js')

@endsection
