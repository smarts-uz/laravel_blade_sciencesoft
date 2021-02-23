
@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="block p-4  ">
        <div class="w-full mb-9">
            <div class="w-full mb-6">
                <h1 class=" lg:text-3xl text-xl md:text-2xl mb-4 font-bold text-gray-800">
                    Ecommerce Services | One Team for All Ecommerce Needs
                </h1>
                <hr class="w-12 mb-6 border-b-2 border-yellow-300">
                <img src="https://www.scnsoft.com/crm/crm-services/cover-pic-crm-services-3.svg" alt="" class="w-full mb-6">
                <p class="text-md md:text-lg text-gray-600 mb-4">
                 CRM services are aimed to <strong>automate marketing, sales and customer service</strong>,
                 and range from CRM consulting and implementation to testing and support of a CRM solution.<br><br>
                 Having <strong>12 years of experience in CRM services</strong>, TeamPRO helps businesses reduce their
                 marketing, sales and customer service costs with all-round CRM implementation and regain lost
                 business opportunities through evolution of the existing CRM.
                </p>
                <div>
                    <div class="md:flex md:flex-wrap md:justify-between">
                        <div class="textStar mb-6">
                            <img src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="" class="w-14 mb-4 mr-6">
                            <p class="text-md md:text-lg text-gray-600">
                                <strong>17 years</strong> in ecommerce
                            </p>
                        </div>
                        <div class="textStar mb-6">
                            <img src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="" class="w-14 mb-4 mr-6">
                            <p class="text-md md:text-lg text-gray-600">
                                <strong>17 years</strong> in ecommerce
                            </p>
                        </div>
                        <div class="textStar mb-6">
                            <img src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="" class="w-14 mb-4 mr-6">
                            <p class="text-md md:text-lg text-gray-600">
                                <strong>17 years</strong> in ecommerce
                            </p>
                        </div>
                        <div class="textStar mb-6">
                            <img src="https://www.scnsoft.com/ecommerce/1-star-05.svg" alt="" class="w-14 mb-4 mr-6">
                            <p class="text-md md:text-lg text-gray-600">
                                <strong>17 years</strong> in ecommerce
                            </p>
                        </div>
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




            </div>
            <div class="card-box">
                <div class="card md:flex md:justify-between">
                    <div class="card border hover:shadow-xl mb-4 md:mr-4 md:w-1/2">
                        <div class="" style="background: #005eb8; height: 15px"></div>
                        <div class="p-4">
                            <img src="https://www.scnsoft.com/ecommerce/ecommerce-consulting/market-entry.svg" alt="" class="overflow-hidden w-36 mx-auto"/>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-center text-gray-800 text-lg my-2 uppercase">
                                Technology and market entry consulting
                            </h3>
                            <ul style="list-style: square;" class="text-blue-700 m-6">
                                <li class="mb-2 text-md md:text-lg text-blue-500"><span class="text-gray-600">Guiding towards an optimal ecommerce platform.</span></li>
                                <li class="mb-2 text-md md:text-lg text-blue-500"><span class="text-gray-600">Researching market opportunities: target audience.</span></li>
                                <li class="mb-2 text-md md:text-lg text-blue-500"><span class="text-gray-600">Researching market opportunities: target audience, growth potential.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card border hover:shadow-xl mb-4 md:w-1/2">
                        <div class="" style="background: #005eb8; height: 15px"></div>
                        <div class="p-4">
                            <img src="https://www.scnsoft.com/ecommerce/ecommerce-consulting/market-entry.svg" alt="" class="overflow-hidden w-36 mx-auto"/>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-center text-gray-800 text-lg my-2 uppercase">
                                Technology and market entry consulting
                            </h3>
                            <ul style="list-style: square;" class="text-blue-700 m-6">
                                <li class="mb-2 text-md md:text-lg text-blue-500"><span class="text-gray-600">Guiding towards an optimal ecommerce platform.</span></li>
                                <li class="mb-2 text-md md:text-lg text-blue-500"><span class="text-gray-600">Researching market opportunities: target audience.</span></li>
                                <li class="mb-2 text-md md:text-lg text-blue-500"><span class="text-gray-600">Researching market opportunities: target audience, growth potential.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-right">
                    <a href="#" class="text-blue-500 text-xl my-6 mr-4">Learn More <i class="far fa-arrow-right"></i></a>
                </p>
            </div>
            <div class="card-box my-4">
                <h1 class=" lg:text-2xl text-xl md:text-2xl mb-4 font-bold text-gray-800">
                    Ecommerce Services | One Team for All Ecommerce Needs
                </h1>
                <hr class="w-12 mb-6 border-b-2 border-yellow-300">
                <div class="card md:flex md:justify-between">
                    <div class="card border flex flex-col justify-between hover:shadow-xl mb-4 md:mr-4 md:w-1/2">
                            <div>
                                <div class="" style="background: #005eb8; height: 15px"></div>
                                <div class="p-4">
                                    <img src="https://www.scnsoft.com/software-development-services/saas-development/testing.svg" alt="" class="overflow-hidden w-36 mx-auto"/>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-center text-gray-800 text-lg my-2 uppercase">
                                        Ecommerce testing
                                    </h3>
                                    <ul style="list-style: square;" class="text-blue-700 m-6">
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website functionality for various user scenarios.</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Ecommerce solution integrations.</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">SEO-related aspects.</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website performance..</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Security.</span></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-right mb-4">
                                <a href="#" class="text-blue-500 text-xl my-6 mr-4">Learn More <i class="far fa-arrow-right"></i></a>
                            </p>
                    </div>
                    <div class="card border flex flex-col justify-between hover:shadow-xl mb-4 md:w-1/2">
                            <div>
                                <div class="" style="background: #005eb8; height: 15px"></div>
                            <div class="p-4">
                                <img src="https://www.scnsoft.com/software-development-services/saas-development/testing.svg" alt="" class="overflow-hidden w-36 mx-auto"/>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-center text-gray-800 text-lg my-2 uppercase">
                                    Ecommerce testing
                                </h3>
                                <ul style="list-style: square;" class="text-blue-700 m-6">
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website functionality for various user scenarios.</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Ecommerce solution integrations.</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">SEO-related aspects.</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website performance..</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Security.</span></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-right mb-4">
                            <a href="#" class="text-blue-500 text-xl my-6 mr-4">Learn More <i class="far fa-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
                <div class="card md:flex md:justify-between">
                    <div class="card border flex flex-col justify-between hover:shadow-xl mb-4 md:mr-4 md:w-1/2">
                            <div>
                                <div class="" style="background: #005eb8; height: 15px"></div>
                                <div class="p-4">
                                    <img src="https://www.scnsoft.com/software-development-services/saas-development/testing.svg" alt="" class="overflow-hidden w-36 mx-auto"/>
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-center text-gray-800 text-lg my-2 uppercase">
                                        Ecommerce testing
                                    </h3>
                                    <ul style="list-style: square;" class="text-blue-700 m-6">
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website functionality for various user scenarios.</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Ecommerce solution integrations.</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">SEO-related aspects.</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website performance..</span></li>
                                        <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Security.</span></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="text-right mb-4">
                                <a href="#" class="text-blue-500 text-xl my-6 mr-4">Learn More <i class="far fa-arrow-right"></i></a>
                            </p>
                    </div>
                    <div class="card border flex flex-col justify-between hover:shadow-xl mb-4 md:w-1/2">
                            <div>
                                <div class="" style="background: #005eb8; height: 15px"></div>
                            <div class="p-4">
                                <img src="https://www.scnsoft.com/software-development-services/saas-development/testing.svg" alt="" class="overflow-hidden w-36 mx-auto"/>
                            </div>
                            <div class="p-4">
                                <h3 class="font-bold text-center text-gray-800 text-lg my-2 uppercase">
                                    Ecommerce testing
                                </h3>
                                <ul style="list-style: square;" class="text-blue-700 m-6">
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website functionality for various user scenarios.</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Ecommerce solution integrations.</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">SEO-related aspects.</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Website performance..</span></li>
                                    <li class="text-md md:text-lg text-blue-500"><span class="text-gray-600">Security.</span></li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-right mb-4">
                            <a href="#" class="text-blue-500 text-xl my-6 mr-4">Learn More <i class="far fa-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card w-full mb-9 p-4 border md:flex" style="align-items: center; justify-content: space-between;">
                <div class="text">
                    <h1 class=" lg:text-2xl text-2xl md:text-2xl mb-4 font-bold text-gray-800">
                        We Can Solve Your Ecommerce Challenges
                    </h1>
                    <hr class="w-12 mb-4 border-b-2 border-yellow-300 border">
                    <p class="text-md md:text-lg text-gray-600 mb-4">
                        With our vast ecommerce competencies at TeamPRO, we meet diverse needs
                        of ecommerce businesses comprehensively.
                    </p>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold md:ml-4 py-4 px-4 w-full md:w-72 md:text-sm uppercase">
                    CONTACT THE TEAM
                </button>
            </div>
            <div class="w-full mb-6">
                <h1 class=" lg:text-2xl text-2xl md:text-2xl mb-4 font-bold text-gray-800">
                    We Can Solve Your Ecommerce Challenges
                </h1>
                <hr class="w-12 mb-4 border-b-2 border-yellow-300 border">
                <div class="text-4xl font-bold">Carousel//////</div>
            </div>
            <div class="w-full mb-6">
                <div>
                    <i class="fas fa-quote-right text-gray-300 text-6xl mb-6"></i>
                </div>
                <p class="text-lg text-gray-600 mb-6">
                    TeamPRO has been vital to our companies growth in ecommerce over the
                    last 2 years. They are knowledgeable, efficient, communicative, and are
                    always able to provide a strong resource for any needs that arise. They
                    are a very versatile company in terms of the amount of services they provide.
                    TeamPRO is quite possibly the most beneficial outside resource we’ve ever had.
                </p>
                <p class="text-gray-600 text-lg mb-6 text-right">
                    <em>
                        <strong>Jarod Joyce, Creative Director at Dot It, a US-based online restaurant supplier</strong>
                    </em>
                </p>
            </div>
            <div class="w-full mb-6">
                <h1 class="text-2xl md:text-2xl mb-4 font-bold text-gray-800">
                    Our technology stack
                </h1>
                <hr class="w-12 mb-4 border-b-2 border-yellow-300 border">
                <div class="text-4xl font-bold mb-6">Tabs/////</div>
            </div>
            <div class="card w-full mb-9 p-4 shadow-lg md:flex">
                <div class="text md:w-3/4">
                    <h1 class="text-xl md:text-2xl mb-4 font-bold text-gray-800">
                        Start Working on Your Application Now!
                    </h1>
                    <hr class="w-12 mb-4 border-b-2 border-yellow-300 border">
                    <p class="text-md md:text-lg text-gray-600 mb-4">
                        Turn to TeamPRO’s fleet management team now, and start enjoying the
                        operational and business benefits promised by custom fleet management software!
                    </p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-4 w-full md:w-72 md:text-sm uppercase">
                        GET MY APPLICATION
                    </button>
                </div>
                <div>
                    <img src="https://www.scnsoft.com/fleet-management/contact-us.svg" alt="" class="md:w-60">
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection






