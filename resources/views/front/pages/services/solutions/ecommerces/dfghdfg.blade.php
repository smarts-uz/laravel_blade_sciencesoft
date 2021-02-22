
@extends('front.layout')

@section('css')

@endsection

@section('main')


<div>
    <!-- Corousel -->
    <div class="px-10 md:px-16 mb-5 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">Page 1</h1>
        <hr class="w-20 h-1 bg-yellow-600 my-10 ">
        <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">Page 1</p>
    </div>



    <div class="container mb-24">
        <section class="customer-logos slider px-16">
            <div class="slide"><img class="h-32 w-32"
                    src="https://seal-dallas.bbb.org/logo/ruhzbul/sciencesoft-90933001.png" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/deloitte.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/ebay.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/ford.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/ibm.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/leo-burnett.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/nasa_1.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/nestle.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/tieto.svg') }}" alt="logo"></div>
            <div class="slide"><img class="h-32 w-32" src="{{ asset('/images/viber.svg') }}" alt="logo"></div>
        </section>
    </div>





    <div class="mx-6 sm:mx-16 lg:mx-18 ">
        <div class="my-4">
            <h1 class="uppercase font-bold text-2xl pb-4">Featured Insights</h1>
            <hr class="w-10 h-0.5 bg-yellow-500">
        </div>
        </h1>



        <div class='flex flex-row flex-wrap justify-evenly'>

            <div
                class="w-1/3 rounded overflow-hidden shadow-lg my-2 px-4 py-4 flex flex-col justify-center items-center hover:shadow-2xl transition duration-500 cursor-pointer">
                <h1 class="text-center font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</h1>
                <img class="w-72 h-48 my-4"
                    src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-development.svg"
                    alt="Sunset in the mountains">
                    <p class="text-grey-darker text-base">
                        Obtain a clean-coded and high-performing ecommerce solution.
                    </p>
            </div>

            <div
                class="w-1/3 rounded overflow-hidden shadow-lg my-2 px-4 py-4 flex flex-col justify-center items-center hover:shadow-2xl transition duration-500 cursor-pointer">
                <h1 class="text-center font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs</h1>
                <img class="w-72 h-48 my-4"
                    src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-consulting.svg"
                    alt="Sunset in the mountains">
                    <p class="text-grey-darker text-base">
                        Secure the best ROI for implemented technology solutions.
                    </p>
            </div>

            <div
                class="w-1/3 rounded overflow-hidden shadow-lg my-2 px-4 py-4 flex flex-col justify-center items-center hover:shadow-2xl transition duration-500 cursor-pointer">
                <h1 class="text-center font-bold text-xl mb-2">A Comprehensive Guide to Real-Time Big Data
                    Analytics</h1>
                <img class="w-72 h-48 my-4"
                    src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ux-and-ui-design.svg"
                    alt="Sunset in the mountains">
                    <p class="text-grey-darker text-base">
                        Communicate your brand’s unique personality through website design.
                    </p>
            </div>
        </div>



        <div class="my-4 flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
            <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
                <h1 class="text-3xl font-semibold">DIGITAL MARKETING AUTOMATION</h1>
                <p class="text-xl text-gray-700 my-6">We help to implement proper marketing automation tools and
                    organize effectively omnichannel customer communication:</p>
                <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Email marketing.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Landing page design.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Social media marketing.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Event management.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Content marketing.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Automated journey builder.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">SEO marketing.</li>
                    <li class="text-xl text-gray-700 mr-10 mb-6 w-48">Marketing analytics.</li>
                </ul>
                <a href="#" class="flex flex-row items-center text-blue-700">
                    <p class="uppercase mr-3 font-semibold">TALK TO THE TEAM</p>
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
        <div class="bg-blue-900 lg:px-16 px-3 py-10 text-white">
            <h1 class="text-2xl lg:text-3xl font-semibold">
                <p class="mb-4">EXPLORE DIVERSE IMPLEMENTATION MODELS</p>
                <hr class="w-10 h-0.5 border-none bg-yellow-500">
            </h1>
            <p class="text-xs lg:text-xl my-4 lg:my-8">We IT-enable all kinds of B2B, B2C interactions and internal
                operations.</p>
            <ul class="text-black flex flex-wrap flex-row justify-between">
                <li
                    class="bg-white rounded md:w-48 w-2/5 h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                    <a href="#">
                        Online Marketplace
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white md:w-48 w-2/5 rounded h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                    <a href="#">
                        Ecommerce Multistore
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white md:w-48 w-2/5 rounded h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                    <a href="#">
                        Headless Commerce
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white md:w-48 w-2/5 rounded h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                    <a href="#">
                        PWA
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45"></i>
                    </div>
                </li>

            </ul>
        </div>


        <div class='my-10 flex flex-row flex-wrap justify-between'>
            <div
                class="w-1/3 rounded overflow-hidden shadow-lg my-2 flex flex-col items-center hover:shadow-2xl transition duration-500 mt-10  cursor-pointer">
                <div class="p-5 text-center font-bold text-xl mb-2">How To Start A Successful Online Business</div>
                <img class="w-72 h-48"
                    src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-start-a-successful-online-business.svg"
                    alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <p class="text-grey-darker text-base mb-5">
                        Business & tech tips for a successful online launch: business models, competitive advantages and
                        expected investment into starting an ecommerce business.
                    </p>
                </div>
            </div>

            <div
                class=" w-1/3 rounded overflow-hidden shadow-lg my-2 flex flex-col items-center hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                <div class="p-5 text-center font-bold text-xl mb-2">How to Sell Grocery Online</div>
                <img class="w-72 h-48"
                    src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-sell-grocery-online.svg">
                <div class="px-6 py-4">
                    <p class="text-grey-darker text-base mb-5">
                        Guidelines on how to find a place in the online grocery market: viable business models,
                        specifics of technology implementations, an ecosystem example, competitive advantages, and
                        investment
                    </p>
                </div>
            </div>

            <div
                class="w-1/3 rounded overflow-hidden shadow-lg my-2 flex flex-col items-center hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                <div class="p-5 text-center font-bold text-xl mb-2">How to Choose an Ecommerce Platform</div>
                <img class="w-72 h-48"
                    src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-choose-an-ecommerce-platform.svg"
                    alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <p class="text-grey-darker text-base">
                        Functional portfolio of ecommerce platforms and top 10 shortlisted by ScienceSoft.
                    </p>
                </div>
            </div>
        </div>



        <!-- """"""""""""""""""""""""""""""""""""""""""""""""""""""""" -->






        <!-- Contact -->



    </div>

    <h1 class="px-16 text-3xl py-12">
        <p class="mb-4">NEED TO TALK TO ECOMMERCE EXPERTS?</p>
        <hr class="w-10 h-0.5 bg-yellow-500">
    </h1>

    <form method="POST" action="{{ route('consultation') }}" class="px-16 py-5 text-gray-800">
        @csrf
        <p class="py-5">{{_trans("Drop us a line! We are here to answer your questions 24/7.")}}</p>
        <div class="flex">
            <div class="w-full">
                <div class="w-full flex justify-between flex-wrap">
                    <input type="text" name="Name" placeholder="Full Name" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                    <input type="text" name="Company" placeholder="Company" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                    <input type="email" name="Email" placeholder="Work Email" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                    <input type="tel" name="Phone" placeholder="Work Phone" class="px-5 lg:w-1/5 w-1/2 py-2 border border-gray-400 rounded focus:outline-none">
                </div>
                <div class="border border-gray-400 rounded my-5">
                    <textarea class="resize-none w-full px-5 py-2 h-20 focus:outline-none" name="Discription" placeholder="How can we help you?"></textarea>
                </div>
                <button class="bg-blue-500 px-5 m-auto py-2 uppercase font-bold text-white rounded text-sm">{{_trans("Disscuss my needs")}}</button>
            </div>
            <div class="px-5 md:block hidden">
                <div>
                    <h1 class="font-bold text-xl pb-2">{{_trans("Our contact details")}}</h1>
                    <a class="text-blue-400 flex items-center" href="#">
                        <i class="fas fa-phone-alt pr-3"></i>
                        <p>{{_trans("+998 94 123 45 67")}}</p>
                    </a>
                    <a class="text-blue-400 flex items-center" href="#">
                        <i class="fas fa-envelope pr-3"></i>
                        <p>{{_trans("teamprodev@gmail.com")}}</p>
                    </a>
                </div>
                <div>
                    <h1 class="font-bold text-xl pb-2 mt-4">{{_trans("Press inquires")}}</h1>
                    <a class="text-blue-400 flex items-center text-xs" href="#">
                        <p class="uppercase">{{_trans("Get in touch with us")}}</p>
                        <i class="fas fa-arrow-right pl-3"></i>
                    </a>
                </div>
                <div>
                    <h1 class="font-bold text-xl pb-2 mt-4">{{_trans("Join our team")}}</h1>
                    <a class="text-blue-400 flex items-center text-xs" href="#">
                        <p class="uppercase">{{_trans("Check our open vacancies")}}</p>
                        <i class="fas fa-arrow-right pl-3"></i>
                    </a>

                </div>
                <div>

                </div>
            </div>
        </div>
      </form>



</div>

@endsection

@section('js')

@endsection






