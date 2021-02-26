
@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="block p-4">
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl md:text-2xl lg:text-3xl mb-4">
                    Ecommerce Consulting Services
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                <div>
                    <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/imac-9.png" alt="" class="mb-6">
                </div>
                <p class="text-gray-600 text-lg md:text-xl mb-6">
                    As a full-service ecommerce development company, TeamPRO
                    meets the need of B2C and B2B ecommerce businesses in:
                </p>
                <ul class="text-md text-blue-500 ml-4 mb-6" style="list-style: square;">
                    <li class="mb-2"><span class="text-gray-600">Ecommerce website design and development.</span></li>
                    <li class="mb-2"><span class="text-gray-600">Website integration with back-office processes and in-store operations.</span></li>
                    <li class="mb-2"><span class="text-gray-600">Customer experience personalization.</span></li>
                    <li class="mb-2"><span class="text-gray-600">Marketing automation.</span></li>
                    <li class="mb-2"><span class="text-gray-600">Advanced data analytics.</span></li>
                </ul>
            </div>
            <div class="w-full mb-16">
                <div class="p-4 border">
                    <h1 class="text-xl md:text-2xl lg:text-2xl text-gray-800 font-bold mb-4">
                        Make Value-Driven Business Decisions with TeamPRO
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                    <p class="text-lg md:text-xl text-gray-600 mb-6">
                        We will help you unlock new opportunities to build a solid customer
                        experience strategy and harness digital technologies for efficient business operations.
                    </p>
                    <div class="flex justify-center">
                        <button class="w-full text-white text-lg font-semibold lg:w-2/5 bg-blue-700 py-3 px-4">Hire ecommerce consultants</button>
                    </div>
                </div>
            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl md:text-2xl lg:text-3xl mb-4">
                    About TeamPRO
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">



<!-- Muhammadali carusel qoshdi -->



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






                <ul class="ml-4 mb-6" style="list-style: square;">
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">20+ ecommerce experts.</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">17 years in ecommerce.</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Producing a feasibility study: investment calculation, expected ROI</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">A team of business analysts adept in ecommerce.</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Certified developers.A team of business analysts adept in ecommerce.</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Projects with different product profiles and business models (B2B and B2C segments, marketplaces, consumer and industrial product lines).</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce services from consulting to implementation and support.</span></li>
                    <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">A team of business analysts adept in ecommerce.</span></li>
                </ul>
            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl md:text-2xl lg:text-3xl mb-4">
                    4 BUSINESS GOALS WE MEET
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                <p class="text-lg md:text-xl text-gray-600 mb-6">
                    For some of you, our involvement as an ecommerce development and consulting
                    partner will mean a powerful business launch with the right technology stack.
                    For others – a possibility to give their business a fresh start by re-platforming
                    successfully or growing into an omnichannel venture.
                </p>
                <div class="md:flex mb-16">
                    <div class="md:w-1/2">
                        <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/launch-6.png" alt="" class="w-56 mx-auto mb-6">
                    </div>
                    <div class="md:w-1/2 flex-col justify-between">
                        <div>
                            <h1 class="text-gray-800 font-bold text-xl md:text-2xl mb-4">
                            	Ecommerce Launch
                        </h1>
                        <p class="text-lg md:text-xl text-gray-600 mb-6">
                            Our involvement is your possibility to start getting ROI early on
                            the road. We give you a truly strong guidance to embrace all the technical
                            possibilities at hand and align them with your business goals.
                        </p>
                        <ul class="ml-4 mb-6" style="list-style: square;">
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Technology consulting</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Competitive landscape analysis and UX research</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce website design</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce ecosystem design and implementation</span></li>
                        </ul>
                        </div>
                        <div class="flex justify-center">
                            <button class="w-full text-white text-sm font-semibold bg-blue-700 py-3 px-4">REQUEST ECOMMERCE LAUNCH</button>
                        </div>
                    </div>
                </div>
                <div class="md:flex mb-16">
                    <div class="md:w-1/2 flex-col justify-between">
                        <div>
                            <h1 class="text-gray-800 font-bold text-xl md:text-2xl mb-4">
                            	Ecommerce Launch
                        </h1>
                        <p class="text-lg md:text-xl text-gray-600 mb-6">
                            Our involvement is your possibility to start getting ROI early on
                            the road. We give you a truly strong guidance to embrace all the technical
                            possibilities at hand and align them with your business goals.
                        </p>
                        <ul class="ml-4 mb-6" style="list-style: square;">
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Technology consulting</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Competitive landscape analysis and UX research</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce website design</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce ecosystem design and implementation</span></li>
                        </ul>
                        </div>
                        <div class="flex justify-center">
                            <button class="w-full text-white text-sm font-semibold bg-blue-700 py-3 px-4">REQUEST ECOMMERCE LAUNCH</button>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/launch-6.png" alt="" class="w-56 mx-auto mb-6">
                    </div>
                </div>
                <div class="md:flex mb-16">
                    <div class="md:w-1/2">
                        <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/launch-6.png" alt="" class="w-56 mx-auto mb-6">
                    </div>
                    <div class="md:w-1/2 flex-col justify-between">
                        <div>
                            <h1 class="text-gray-800 font-bold text-xl md:text-2xl mb-4">
                            	Ecommerce Launch
                        </h1>
                        <p class="text-lg md:text-xl text-gray-600 mb-6">
                            Our involvement is your possibility to start getting ROI early on
                            the road. We give you a truly strong guidance to embrace all the technical
                            possibilities at hand and align them with your business goals.
                        </p>
                        <ul class="ml-4 mb-6" style="list-style: square;">
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Technology consulting</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Competitive landscape analysis and UX research</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce website design</span></li>
                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Ecommerce ecosystem design and implementation</span></li>
                        </ul>
                        </div>
                        <div class="flex justify-center">
                            <button class="w-full text-white text-sm font-semibold bg-blue-700 py-3 px-4">REQUEST ECOMMERCE LAUNCH</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl md:text-2xl lg:text-3xl mb-4">
                OUR CUSTOMERS SAY
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">


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


            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl md:text-2xl lg:text-3xl mb-4">
                    4 BUSINESS GOALS WE MEET
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                <h1 class="text-4xl font-bold mb-6">Tabs/////</h1>
            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl md:text-2xl lg:text-3xl mb-4">
                    UNDER THE UMBRELLA OF OUR ECOMMERCE DEVELOPMENT SERVICES
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                <p class="text-lg md:text-xl text-gray-600 mb-6">
                    For 17 years in ecommerce, we have cemented our belief in the efficiency of
                    comprehensive customer experience management. Consistently, our services now
                    take two core directions.
                </p>
                <div class="card">
                    <div class="md:flex">
                        <div class="md:px-2 mb-3 md:w-1/2">
                            <div class="border">
                                <div class="border-t-8 p-4 border-blue-700">
                                    <div class="flex-col justify-item">
                                        <h1 class="text-blue-600 text-xl text-center font-semibold mb-6">
                                            Ecommerce website development
                                        </h1>
                                        <p class="text-lg lg:text-xl text-gray-600 mb-4">
                                            to create a winning digital experience and achieve tangible conversion success with:
                                        </p>
                                        <ul class="ml-4 mb-6" style="list-style: square;">
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Mobile-first approach</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Visual design</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Website performance</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">On-site personalization</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Digital payment</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Upsells and cross-sells</span></li>
                                        </ul>
                                    </div>
                                    <button class="w-full text-white text-md my-6 font-semibold bg-blue-700 py-3 px-4">REQUEST WEBSITE DEVELOPMENT</button>
                                </div>
                            </div>
                        </div>
                        <div class="md:px-2 mb-3 md:w-1/2">
                            <div class="border">
                                <div class="border-t-8 p-4 border-blue-700">
                                    <div class="flex-col justify-item">
                                        <h1 class="text-blue-600 text-xl text-center font-semibold mb-6">
                                            Ecommerce website development
                                        </h1>
                                        <p class="text-lg lg:text-xl text-gray-600 mb-4">
                                            to create a winning digital experience and achieve tangible conversion success with:
                                        </p>
                                        <ul class="ml-4 mb-6" style="list-style: square;">
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Mobile-first approach</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Visual design</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Website performance</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">On-site personalization</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Digital payment</span></li>
                                            <li class="text-blue-500"><span class="text-gray-600 text-lg lg:text-xl">Upsells and cross-sells</span></li>
                                        </ul>
                                    </div>
                                    <button class="w-full text-white text-md my-6 font-semibold bg-blue-700 py-3 px-4">REQUEST WEBSITE DEVELOPMENT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl lg:text-3xl mb-4">
                    UNDER THE UMBRELLA OF OUR ECOMMERCE DEVELOPMENT SERVICES
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                <div class="md:flex md:flex-wrap">
                    <div class="md:w-1/3 p-2">
                        <div>
                            <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/omnichannel-solution-fashion-retailer---ecommerce-development-12.png" alt="" class="mb-6 mx-auto">
                        </div>
                        <p class="text-lg md:text-xl text-gray-600 mb-4">
                            We put a luxury fashion retailer on the omnichannel rails.
                        </p>
                        <a href="#" class="text-blue-500 underline">
                            <p class="text-gray-600 text-lg md:text-xl mb-6">
                                <em>Read case study</em>
                            </p>
                        </a>
                    </div>
                    <div class="md:w-1/3 p-2">
                        <div>
                            <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/omnichannel-solution-fashion-retailer---ecommerce-development-12.png" alt="" class="mb-6 mx-auto">
                        </div>
                        <p class="text-lg md:text-xl text-gray-600 mb-4">
                            We put a luxury fashion retailer on the omnichannel rails.
                        </p>
                        <a href="#" class="text-blue-500 underline">
                            <p class="text-gray-600 text-lg md:text-xl mb-6">
                                <em>Read case study</em>
                            </p>
                        </a>
                    </div>
                    <div class="md:w-1/3 p-2">
                        <div>
                            <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/omnichannel-solution-fashion-retailer---ecommerce-development-12.png" alt="" class="mb-6 mx-auto">
                        </div>
                        <p class="text-lg md:text-xl text-gray-600 mb-4">
                            We put a luxury fashion retailer on the omnichannel rails.
                        </p>
                        <a href="#" class="text-blue-500 underline">
                            <p class="text-gray-600 text-lg md:text-xl mb-6">
                                <em>Read case study</em>
                            </p>
                        </a>
                    </div>
                    <div class="md:w-1/3 p-2">
                        <div>
                            <img src="https://www.scnsoft.com/ecommerce/ecommerce-development-services/omnichannel-solution-fashion-retailer---ecommerce-development-12.png" alt="" class="mb-6 mx-auto">
                        </div>
                        <p class="text-lg md:text-xl text-gray-600 mb-4">
                            We put a luxury fashion retailer on the omnichannel rails.
                        </p>
                        <a href="#" class="text-blue-500 underline">
                            <p class="text-gray-600 text-lg md:text-xl mb-6">
                                <em>Read case study</em>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full mb-16">
                <h1 class="text-gray-800 font-bold text-xl lg:text-3xl mb-4">
                    AREN'T SURE WE ARE THE RIGHT DEVELOPMENT TEAM FOR YOU?
                </h1>
                <hr class="w-12 border-b-2 border-yellow-500 mb-6">
                <p class="text-lg md:text-xl text-gray-600 mb-6">
                    Don’t hesitate to ask for our assistance even if you didn’t find
                    an explicit mention of your precise business need. We just care
                    for your time and tailor the description of our competencies to
                    situations most frequent in our practice.
                </p>
                @include('front.Components.consultation')

            </div>
        </div>

@endsection

@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>

@endsection






