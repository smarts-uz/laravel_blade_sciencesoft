@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <!-- Corousel -->
        <div class="px-10 md:px-16 mb-10 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">
                {{ t('DIGITAL COMMERCE') }}</h1>
            <hr class="w-20 h-1 bg-yellow-600 my-10 ">
            <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">
                {{ t("At its core,
            digital commerce is selling and buying goods and services online. The market is highly competitive, and
            businesses need to strive for more and more excellence to stay resilient, even though consumer demand for
            online shopping is remarkably strong now. Smart Softwarebrings in technology expertise and a problem-oriented
            approach to drive positive and tangible changes across your business resulting in cost savings and revenue
            growth") }}
            </p>
        </div>
        <div style="margin: 0 4rem" class="swiper-container main-slide swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper flex items-center" id="swiper-wrapper-424aebbb4ac8a93c" aria-live="off" style="transform: translate3d(-1313px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="1 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612865191.png">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="2 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612865402.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="3 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612865846.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="4 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612865992.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14 swiper-slide-prev" role="group" aria-label="5 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612866086.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14 swiper-slide-active" role="group" aria-label="6 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612866200.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14 swiper-slide-next" role="group" aria-label="7 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612866302.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="8 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612866595.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="9 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612866730.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="10 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612866851.png">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="11 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612867064.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="12 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612867228.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group" aria-label="13 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src=" /uploads/categories/1612867656.svg">
                        </div>
                </div>
        </div>
        <div class="mx-6 sm:mx-16 lg:mx-18 ">
            <div class="my-4">
                <h1 class="uppercase font-bold text-2xl pb-4">{{ t('Featured Insights') }}</h1>
                <hr class="w-10 h-1 bg-pink-600">
            </div>
            </h1>

            <div class='flex flex-row flex-wrap justify-evenly'>
                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2 hover:shadow-2xl transition duration-500 mt-10  cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">
                        {{ t('VR Technology: Architecture, Tools, Team, and Costs') }}
                    </div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-development.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ t('Obtain a clean-coded and high-performing ecommerce solution.') }}
                        </p>
                    </div>
                </div>

                <div
                    class=" w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">
                        {{ t('VR Technology: Architecture, Tools, Team, and Costs') }}
                    </div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-consulting.svg">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ t('Secure the best ROI for implemented technology solutions.') }}
                        </p>
                    </div>
                </div>

                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">
                        {{ t("A Comprehensive Guide to Real-Time Big Data
                    Analytics") }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ux-and-ui-design.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base">
                            {{ t('Communicate your brand’s unique personality through website design.') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="my-10 flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
                <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
                    <h1 class="text-3xl font-semibold">{{ t('DIGITAL MARKETING AUTOMATION') }}</h1>
                    <p class="text-xl text-gray-700 my-6">
                        {{ t("We help to implement proper marketing automation tools and
                    organize effectively omnichannel customer communication:") }}
                    </p>
                    <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Email marketing.') }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Landing page design.') }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Social media marketing.') }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Event management.') }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Content marketing.') }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Automated journey builder.') }}
                        </li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('SEO marketing.') }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Marketing analytics.') }}</li>
                    </ul>
                    <a href="#" class="flex flex-row items-center text-blue-700">
                        <p class="uppercase mr-3 font-semibold">{{ t('TALK TO THE TEAM') }}</p>
                        <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
                <div
                    class="bg-white shadow-2xl h-full lg:h-96 lg:w-2/5 w-full flex justify-center items-center lg:-mt-20 lg:-mr-10">
                    <img src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/image-thumb__25014__home_Image-text/digital-marketing-automation~-~1439w.png"
                        alt="EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF">
                </div>
            </div>

            <!-- IMPROVE AND INNOVATE WITH THE TECH TRENDS -->
            <div class="my-10 bg-blue-900 lg:px-16 px-3 py-10 text-white">
                <h1 class="text-2xl lg:text-3xl font-semibold">
                    <p class="mb-4">{{ t('EXPLORE DIVERSE IMPLEMENTATION MODELS') }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                </h1>
                <p class="text-xs lg:text-xl my-4 lg:my-8">
                    {{ t("We IT-enable all kinds of B2B, B2C interactions and internal
                operations.") }}
                </p>
                <ul class="text-black flex flex-wrap flex-row justify-between">
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ t('Online Marketplace') }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ t('Ecommerce Multistore') }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ t('Headless Commerce') }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ t('PWA') }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>

                </ul>
            </div>

            <div class='my-10 flex flex-row flex-wrap justify-evenly'>
                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2 hover:shadow-2xl transition duration-500 mt-10  cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">
                        {{ t('How To Start A Successful Online Business') }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-start-a-successful-online-business.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ t("Business & tech tips for a successful online launch: business models, competitive advantages and
                            expected investment into starting an ecommerce business.") }}
                        </p>
                    </div>
                </div>

                <div
                    class=" w-1/3 rounded overflow-hidden shadow-lg my-2 hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ t('How to Sell Grocery Online') }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-sell-grocery-online.svg">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ t("Guidelines on how to find a place in the online grocery market: viable business models,
                            specifics of technology implementations, an ecosystem example, competitive advantages, and
                            investment") }}
                        </p>
                    </div>
                </div>

                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">
                        {{ t('How to Choose an Ecommerce Platform') }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-choose-an-ecommerce-platform.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base">
                            {{ t('Functional portfolio of ecommerce platforms and top 10 shortlisted by TeamPRO.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- """"""""""""""""""""""""""""""""""""""""""""""""""""""""" -->

            <!-- Contact -->

        </div>

        <h1 class="px-16 text-3xl py-12">
            <p class="mb-4">{{ t('NEED TO TALK TO ECOMMERCE EXPERTS?') }}</p>
            <hr class="w-10 h-1 bg-pink-600">
        </h1>

        @include('front.Components.consultation')

    </div>

@endsection

@section('js')

@endsection
