@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>
            <div class="my-4">
                <h1 class="uppercase font-extrabold text-3xl pb-4">{{ _trans('ScienceSoft’s Awards and Recognitions') }}
                </h1>
                <hr class="w-10 h-1 bg-yellow-600">
            </div>
            <div>
                <img src="https://www.scnsoft.com/about/awards-recognitions/awards-and-recognitions-sciencesoft-01.svg"
                    alt="">
            </div>

            <div class="text-lg my-10">
                <p>
                    {{ _trans("For over 31 years, ScienceSoft has supported businesses with high-quality IT services. We help
                    enterprises leverage technologies to keep business processes optimized and bring on digital
                    transformation. We assist product companies with delivering selling software products to the market.") }}
                </p>
                <p class="mt-8">
                    {{ _trans("We take pride in being consistently recognized by independent organizations as a trusted and reliable IT
                    services provider, employer and software development company.") }}
                </p>
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-20">
                {{ _trans('BUSINESS EXCELLENCE') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="grid grid-cols-3 ">
                <div class="flex flex-row mt-6 col-span-2 ">
                    <div class="justify-start border-2 p-2 px-4 w-20 h-12 mx-10">
                        <p class="font-bold">
                            2020
                        </p>
                    </div>
                    <ul class="list-disc text-base md:text-xl leading-loose col">
                        <li class="mb-4">
                            {{ _trans("Clutch featured ScienceSoft in the list of Top IT Services Firms and Top 1000 B2B Providers
                            Globally, as well as named us No.1 in the lists Top AWS Partners, Top Azure Consultants, Top
                            Salesforce Consultants.") }}
                        </li>
                        <li class="text-base mb-4 ">
                            {{ _trans("Clutch is known as the premier ratings and reviews platform for buyers of B2B services. Its
                            unbiased ranking is based on a unique methodology that incorporates multiple data points to
                            compare industry leaders.") }}
                        </li>
                        <li class="mb-4">
                            {{ _trans("International Association of Outsourcing Professionals (IAOP) selected ScienceSoft for the
                            Global Outsourcing 100 rating in two categories – Top Customer References and Top Awards &
                            Certifications.
                            FIAOP connects customers, outsourcing providers, and advisors in a synergic environment aimed at
                            improving business service models and results. The Global Outsourcing 100 rating is pulled from
                            the applications submitted by outsourcing service providers around the world. The candidates are
                            evaluated at an independent board meeting of IAOP members with vast experience in selecting
                            outsourcing providers for their organizations. They consider such criteria as professional
                            certificates, awards and business outcomes of the customers brought by outsourcing providers
                            under evaluation.") }}
                        </li>
                        <li class="mb-4">
                            {{ _trans("TechReviewer put ScienceSoft first in the list of Leading QA and Software Testing Companies.
                            TechReviewer is an analytics hub that carries out studies and publishes lists with the best
                            software development companies in various business domains based on market research and
                            analysis.") }}
                        </li>
                        <li>
                            {{ _trans("UpFirms.com included ScienceSoft is the list of Top Web Development Companies.
                            UpFirms.com is one of the leading full-fledged B2B platforms with reviews, ratings & rankings.
                            One of their highlights is collecting reviews directly from a company’s clients.") }}
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col justify-end items-end ml-20 w-48">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                </div>

            </div>

            <div class="grid grid-cols-3 ">
                <div class="flex flex-row mt-6 col-span-2 ">
                    <div class="justify-start border-2 p-2 px-4 w-20 h-12 mx-10">
                        <p class="font-bold">
                            2020
                        </p>
                    </div>
                    <ul class="list-disc text-base md:text-xl leading-loose col">
                        <li class="mb-4">
                            {{ _trans("Clutch featured ScienceSoft in the list of Top IT Services Firms and Top 1000 B2B Providers
                            Globally, as well as named us No.1 in the lists Top AWS Partners, Top Azure Consultants, Top
                            Salesforce Consultants.") }}
                        </li>
                        <li class="text-base mb-4 ">
                            {{ _trans("Clutch is known as the premier ratings and reviews platform for buyers of B2B services. Its
                            unbiased ranking is based on a unique methodology that incorporates multiple data points to
                            compare industry leaders.") }}
                        </li>
                        <li class="mb-4">
                            {{ _trans("International Association of Outsourcing Professionals (IAOP) selected ScienceSoft for the
                            Global Outsourcing 100 rating in two categories – Top Customer References and Top Awards &
                            Certifications.
                            FIAOP connects customers, outsourcing providers, and advisors in a synergic environment aimed at
                            improving business service models and results. The Global Outsourcing 100 rating is pulled from
                            the applications submitted by outsourcing service providers around the world. The candidates are
                            evaluated at an independent board meeting of IAOP members with vast experience in selecting
                            outsourcing providers for their organizations. They consider such criteria as professional
                            certificates, awards and business outcomes of the customers brought by outsourcing providers
                            under evaluation.") }}
                        </li>
                        <li class="mb-4">
                            {{ _trans("TechReviewer put ScienceSoft first in the list of Leading QA and Software Testing Companies.
                            TechReviewer is an analytics hub that carries out studies and publishes lists with the best
                            software development companies in various business domains based on market research and
                            analysis.") }}
                        </li>
                        <li>
                            {{ _trans("UpFirms.com included ScienceSoft is the list of Top Web Development Companies.
                            UpFirms.com is one of the leading full-fledged B2B platforms with reviews, ratings & rankings.
                            One of their highlights is collecting reviews directly from a company’s clients.") }}
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col justify-end items-end ml-20 w-48">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                </div>

            </div>

            <div class="grid grid-cols-3 ">
                <div class="flex flex-row mt-6 col-span-2 ">
                    <div class="justify-start border-2 p-2 px-4 w-20 h-12 mx-10">
                        <p class="font-bold">
                            2020
                        </p>
                    </div>
                    <ul class="list-disc text-base md:text-xl leading-loose col">
                        <li class="mb-4">
                            {{ _trans("Clutch featured ScienceSoft in the list of Top IT Services Firms and Top 1000 B2B Providers
                            Globally, as well as named us No.1 in the lists Top AWS Partners, Top Azure Consultants, Top
                            Salesforce Consultants.") }}
                        </li>
                        <li class="text-base mb-4 ">
                            {{ _trans("Clutch is known as the premier ratings and reviews platform for buyers of B2B services. Its
                            unbiased ranking is based on a unique methodology that incorporates multiple data points to
                            compare industry leaders.") }}
                        </li>
                        <li class="mb-4">
                            {{ _trans("International Association of Outsourcing Professionals (IAOP) selected ScienceSoft for the
                            Global Outsourcing 100 rating in two categories – Top Customer References and Top Awards &
                            Certifications.
                            FIAOP connects customers, outsourcing providers, and advisors in a synergic environment aimed at
                            improving business service models and results. The Global Outsourcing 100 rating is pulled from
                            the applications submitted by outsourcing service providers around the world. The candidates are
                            evaluated at an independent board meeting of IAOP members with vast experience in selecting
                            outsourcing providers for their organizations. They consider such criteria as professional
                            certificates, awards and business outcomes of the customers brought by outsourcing providers
                            under evaluation.") }}
                        </li>
                        <li class="mb-4">
                            {{ _trans("TechReviewer put ScienceSoft first in the list of Leading QA and Software Testing Companies.
                            TechReviewer is an analytics hub that carries out studies and publishes lists with the best
                            software development companies in various business domains based on market research and
                            analysis.") }}
                        </li>
                        <li>
                            {{ _trans("UpFirms.com included ScienceSoft is the list of Top Web Development Companies.
                            UpFirms.com is one of the leading full-fledged B2B platforms with reviews, ratings & rankings.
                            One of their highlights is collecting reviews directly from a company’s clients.") }}
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col justify-end items-end ml-20 w-48">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                    <img class="" src="https://www.scnsoft.com/partners/clutch-top-1000-b2b-companies-2020.svg" alt="">
                </div>

            </div>

            <div class="text-2xl md:text-3xl font-bold mt-20">
                {{ _trans('OUR OUTSTANDING PEOPLE') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="my-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-start">
                    <div class="flex justify-center items-center w-1/4 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-60 md:h-60"
                            src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
                    </div>
                    <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-3xl font-bold">{{ _trans('Boris Shiklo, CTO:') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <div class="text-xl">
                            <p class="my-10">
                                {{ _trans("“It's hardly possible to reduce costs by means of low rates in modern, dynamic IT. Low rates
                                tend to result in excessive hours spent.") }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="my-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-start">
                    <div class="flex justify-center items-center w-1/4 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-60 md:h-60"
                            src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
                    </div>
                    <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-3xl font-bold">{{ _trans('Boris Shiklo, CTO:') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <div class="text-xl">
                            <p class="my-10">
                                {{ _trans("“It's hardly possible to reduce costs by means of low rates in modern, dynamic IT. Low rates
                                tend to result in excessive hours spent.") }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="my-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-start">
                    <div class="flex justify-center items-center w-1/4 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-60 md:h-60"
                            src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
                    </div>
                    <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-3xl font-bold">{{ _trans('Boris Shiklo, CTO:') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <div class="text-xl">
                            <p class="my-10">
                                {{ _trans("“It's hardly possible to reduce costs by means of low rates in modern, dynamic IT. Low rates
                                tend to result in excessive hours spent.") }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-20">
                {{ _trans('OUR AWARD-WINNING PROJECTS') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="my-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-start">
                    <div class="flex justify-center items-center w-1/4 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-60 md:h-60"
                            src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
                    </div>
                    <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-3xl font-bold">{{ _trans('Boris Shiklo, CTO:') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <div class="text-xl">
                            <p class="my-10">
                                {{ _trans("“It's hardly possible to reduce costs by means of low rates in modern, dynamic IT. Low rates
                                tend to result in excessive hours spent.") }}
                            </p>
                            <p>
                                {{ _trans("QLEAN is an off-the-shelf automated tuning, optimization and health assessment tool that
                                delivers a 360-degree view of IBM QRadar SIEM and conducts a thorough analysis of multiple
                                QRadar deployment parameters including performance metrics, quality of incoming data and
                                system settings. QLEAN provides a detailed QRadar health check report and actionable
                                recommendations for any necessary fixes and enhancements.
                                Global clients include Fortune 500, The Forbes Global 2000, TOP 10 MSSPs, Government and Law
                                Enforcement agencies.") }}
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="my-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-start">
                    <div class="flex justify-center items-center w-1/4 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-60 md:h-60"
                            src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
                    </div>
                    <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-3xl font-bold">{{ _trans('Boris Shiklo, CTO:') }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <div class="text-xl">
                            <p class="my-10">
                                {{ _trans("“It's hardly possible to reduce costs by means of low rates in modern, dynamic IT. Low rates
                                tend to result in excessive hours spent.") }}
                            </p>
                            <p>
                                {{ _trans("Infobank.by is a financial and analytical portal covering all major events from the world of
                                finance in the Eastern Europe. Infobank.by is dedicated to the idea of financial literacy
                                and takes a proactive stand in its promotion.") }}

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-20">
                {{ _trans('PUBLICATIONS IN THE MEDIA') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <div class="swiper-container about-slide h-40">
                <div class="swiper-wrapper flex items-center">
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/ebay.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/deloitte.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/ford.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/ibm.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/leo-burnett.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/nasa_1.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/nestle.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/tieto.svg') }}"></div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                            src="{{ asset('images/viber.svg') }}" alt=""></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
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
