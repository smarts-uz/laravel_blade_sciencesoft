@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>
            <div class="my-4">
                <h1 class="uppercase font-extrabold text-3xl pb-4">{{ t('TeamPRO’s Awards and Recognitions') }}
                </h1>
                <hr class="w-10 h-1 bg-yellow-600">
            </div>
            <div>
                <img src="https://www.scnsoft.com/about/awards-recognitions/awards-and-recognitions-teampro-01.svg" alt="">
            </div>

            <div class="text-lg my-10">
                <p>
                    {{ t("For over 31 years, Smart Softwarehas supported businesses with high-quality IT services. We help
                    enterprises leverage technologies to keep business processes optimized and bring on digital
                    transformation. We assist product companies with delivering selling software products to the market.") }}
                </p>
                <p class="mt-8">
                    {{ t("We take pride in being consistently recognized by independent organizations as a trusted and reliable IT
                    services provider, employer and software development company.") }}
                </p>
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-20">
                {{ t('BUSINESS EXCELLENCE') }}
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
                            {{ t("Clutch featured Smart Softwarein the list of Top IT Services Firms and Top 1000 B2B Providers
                            Globally, as well as named us No.1 in the lists Top AWS Partners, Top Azure Consultants, Top
                            Salesforce Consultants.") }}
                        </li>
                        <li class="text-base mb-4 ">
                            {{ t("Clutch is known as the premier ratings and reviews platform for buyers of B2B services. Its
                            unbiased ranking is based on a unique methodology that incorporates multiple data points to
                            compare industry leaders.") }}
                        </li>
                        <li class="mb-4">
                            {{ t("International Association of Outsourcing Professionals (IAOP) selected Smart Softwarefor the
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
                            {{ t("TechReviewer put Smart Softwarefirst in the list of Leading QA and Software Testing Companies.
                            TechReviewer is an analytics hub that carries out studies and publishes lists with the best
                            software development companies in various business domains based on market research and
                            analysis.") }}
                        </li>
                        <li>
                            {{ t("UpFirms.com included Smart Softwareis the list of Top Web Development Companies.
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
                            {{ t("Clutch featured Smart Softwarein the list of Top IT Services Firms and Top 1000 B2B Providers
                            Globally, as well as named us No.1 in the lists Top AWS Partners, Top Azure Consultants, Top
                            Salesforce Consultants.") }}
                        </li>
                        <li class="text-base mb-4 ">
                            {{ t("Clutch is known as the premier ratings and reviews platform for buyers of B2B services. Its
                            unbiased ranking is based on a unique methodology that incorporates multiple data points to
                            compare industry leaders.") }}
                        </li>
                        <li class="mb-4">
                            {{ t("International Association of Outsourcing Professionals (IAOP) selected Smart Softwarefor the
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
                            {{ t("TechReviewer put Smart Softwarefirst in the list of Leading QA and Software Testing Companies.
                            TechReviewer is an analytics hub that carries out studies and publishes lists with the best
                            software development companies in various business domains based on market research and
                            analysis.") }}
                        </li>
                        <li>
                            {{ t("UpFirms.com included Smart Softwareis the list of Top Web Development Companies.
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
                            {{ t("Clutch featured Smart Softwarein the list of Top IT Services Firms and Top 1000 B2B Providers
                            Globally, as well as named us No.1 in the lists Top AWS Partners, Top Azure Consultants, Top
                            Salesforce Consultants.") }}
                        </li>
                        <li class="text-base mb-4 ">
                            {{ t("Clutch is known as the premier ratings and reviews platform for buyers of B2B services. Its
                            unbiased ranking is based on a unique methodology that incorporates multiple data points to
                            compare industry leaders.") }}
                        </li>
                        <li class="mb-4">
                            {{ t("International Association of Outsourcing Professionals (IAOP) selected Smart Softwarefor the
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
                            {{ t("TechReviewer put Smart Softwarefirst in the list of Leading QA and Software Testing Companies.
                            TechReviewer is an analytics hub that carries out studies and publishes lists with the best
                            software development companies in various business domains based on market research and
                            analysis.") }}
                        </li>
                        <li>
                            {{ t("UpFirms.com included Smart Softwareis the list of Top Web Development Companies.
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
                {{ t('OUR OUTSTANDING PEOPLE') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            @include('front.Components.leader')

            <div class="mt-20">
                <h1 class="text-2xl md:text-3xl font-bold ">{{ t('OUR AWARD-WINNING PROJECTS') }}</h1>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                <div>
                    <div class="w-full flex py-3 border border-gray-200">
                        <img
                            src="https://www.scnsoft.com/screenshots/screenshots-slider-with-content/information-security/image-thumb__18021__auto_3ca4101f19bef858b11d4c063bb36968/qlean-demo-02.png">
                        <div class="px-5">
                            <h1 class="text-2xl md:text-3xl font-bold ">
                                {{ t('ScienceSoft’s iOS and Android mobile banking apps for one of the major banks in the Eastern Europe') }}
                            </h1>
                            <hr class="border-t-2 w-12 border-yellow-500 mt-4 mb-4">
                            <p>
                                {{ t('Awarded gold in The Best Mobile Banking for iOS – 2015 category and The Best Mobile Banking
                                for Android – 2015 category and silver in The Android Mobile App – 2014 category by
                                Infobank.') }}
                            </p>
                            <br>
                            <p>
                                {{ t('Infobank.by is a financial and analytical portal covering all major events from the world of
                                finance in the Eastern Europe. Infobank.by is dedicated to the idea of financial literacy
                                and takes a proactive stand in its promotion.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-20">
                {{ t('PUBLICATIONS IN THE MEDIA') }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
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
