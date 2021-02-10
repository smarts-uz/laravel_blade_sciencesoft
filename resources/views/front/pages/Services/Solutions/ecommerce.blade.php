<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('style-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('cardHoverStyle.css') }}">
  <title>Sciensoft Development Company</title>

  </head>
  <body>

    <div class="wrapper">

    <nav class="nav px-32 py-2">
  <div class="flex items-center justify-between">
    <div>
      <div id="logo" class="flex relative px-4 py-2 items-center justify-between w-64">
        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" width="50%" alt="Logo">
        <hr class="w-0.5 h-10 border-none bg-gray-300">
        <h3 class="font-bold text-gray-800">eCommers</h3>
        <i class="fas fa-chevron-down text-gray-500 text-xl"></i>
      </div>
      <div id="logoHover" class="absolute px-4 py-2 bg-white w-64 z-50 hidden">
        <a href="#" class="hover:text-blue-400 text-gray-500 py-2 text-lg"> <i class="fab text-xl fa-shopify"></i> eCommers by ZetSoft </a>
        <a href="#" class="hover:text-blue-400 text-gray-500 py-2 text-lg"> <i class="fas text-xl fa-globe"></i> ZetSoft Global </a>
      </div>
    </div>
    <i class="fas fa-search"></i>
  </div>
  <div class="flex justify-between items-center">
    <div id="searchbar" class="flex justify-between items-center  w-4/5">
      <ul class="w-11/12 hidden  lg:flex items-center font-semibold list-none uppercase text-black">
        <li  class="  flex mr-8 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
          <a id="about" class=" relative py-6" href="#">
          About
        </a>
        </li>
        <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
          <a class="py-6" id="service" href="#">
          Services
          <div id="serviceHover" class="hidden flex absolute px-32 left-0 justify-start top-32 border-t-2 border-b-2 bg-white items-start py-6 w-full">
            <div class="w-1/3 list-none">
              <h1 class="mb-2 ">
                Ecommerce</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul >
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Service</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Consulting</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Customer Experience Consulting</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Website Design</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Development</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Custom Ecommerce Development</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Implementation</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Testing</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Audit</li></a>
            </ul>
            </div>
            <div class="w-1/6 list-none">
              <h1 class="mb-2">Digital Consulting</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Digital Consulting</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Digital Strategy Consulting</li></a>
              </ul>
            </div>
          </div>
        </a>
        </li>
        <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
          <a class="py-6" id="service" href="#">
          Industries
        </a>
        </li>
        <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
          <a class="py-6" id="service" href="#">
          How To Start 
          <div id="serviceHover" class="hidden flex absolute left-0 px-32 justify-start top-32 border-t-2 border-b-2 bg-white items-start py-6 w-full">
            <div class="w-full list-none">
              <h1 class="mb-2 ">
                Service types</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Start an Ecommerce Business</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Start an Online Retail Business</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Lunch an Online Store</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Build an Online Marketplace</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Business License to Sell online</li></a>
            </ul>
            </div>
          </div>
        </a>
        </li>
        <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
          <a class="py-6" id="service" href="#">
          Solutions
          <div id="serviceHover" class="hidden flex absolute left-0 px-32 justify-start top-32 border-t-2 border-b-2 bg-white items-start py-6 w-full">
            <div class="w-1/3 list-none">
              <h1 class="mb-2 ">
                By Business Model</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">B2B Ecommerce Platforms</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Marketplace Software</li></a>
            </ul>
            </div>
            <div class="w-1/3 list-none">
              <h1 class="mb-2  ">By Type</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Portals</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Multi-Store Ecommerce</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Virtual online Store</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Auction WebSite</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Custom Shopping Cart</li></a>
            </ul>
            </div>
            <div class="w-1/3 list-none">
              <h1 class="mb-2  ">Integrations</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Third-Party Integrations</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Point of sale (POS)</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">CRM</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">ERP</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Analytics</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Personalization</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Security</li></a>
              </ul>
            </div>
            <div class="w-1/3 list-none">
              <h1 class="mb-2  ">Demo</h1>
              <hr class="border-b-2 w-12 border-yellow-500">
              <ul>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">B2C Store</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">B2B Store</li></a>
              <a href="#"><li class="mt-4 text-black hover:text-blue-700">Online Grocery Store</li></a>
              </ul>
            </div>
          </div>
        </a>
        </li>
      </ul>
    </div>
    <li class="flex justify-center items-center bg-blue-700 text-white px-4 py-2 hover:bg-blue-900">
      <a  href="#">Let's talk</a>
      </li>
  </div>

</nav>


    <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <!-- Corousel -->
        <div class="px-10 md:px-16 mb-10 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">DIGITAL COMMERCE</h1>
            <hr class="w-20 h-1 bg-yellow-600 my-10 ">
            <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">At its core,
                digital commerce is selling and buying goods and services online. The market is highly competitive, and
                businesses need to strive for more and more excellence to stay resilient, even though consumer demand for
                online shopping is remarkably strong now. ScienceSoft brings in technology expertise and a problem-oriented
                approach to drive positive and tangible changes across your business resulting in cost savings and revenue
                growth.</p>
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
                <hr class="w-10 h-1 bg-pink-600">
            </div>
            </h1>



            <div class='flex flex-row flex-wrap justify-evenly'>
                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2   hover:shadow-2xl transition duration-500 mt-10  cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs
                    </div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-development.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            Obtain a clean-coded and high-performing ecommerce solution.
                        </p>
                    </div>
                </div>

                <div
                    class=" w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">VR Technology: Architecture, Tools, Team, and Costs
                    </div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-consulting.svg">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            Secure the best ROI for implemented technology solutions.
                        </p>
                    </div>
                </div>

                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">A Comprehensive Guide to Real-Time Big Data
                        Analytics</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ux-and-ui-design.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base">
                            Communicate your brand’s unique personality through website design.
                        </p>
                    </div>
                </div>
            </div>



            <div class="my-10 flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
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
            <div class="my-10 bg-blue-900 lg:px-16 px-3 py-10 text-white">
                <h1 class="text-2xl lg:text-3xl font-semibold">
                    <p class="mb-4">EXPLORE DIVERSE IMPLEMENTATION MODELS</p>
                    <hr class="w-10 h-1 bg-pink-600">
                </h1>
                <p class="text-xs lg:text-xl my-4 lg:my-8">We IT-enable all kinds of B2B, B2C interactions and internal
                    operations.</p>
                <ul class="text-black flex flex-wrap flex-row justify-between">
                    <li
                        class="bg-white md:w-48 w-2/5 h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            Online Marketplace
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            Ecommerce Multistore
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            Headless Commerce
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-base px-2 duration-300 md:text-lg m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            PWA
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>

                </ul>
            </div>


            <div class='my-10 flex flex-row flex-wrap justify-evenly'>
                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2   hover:shadow-2xl transition duration-500 mt-10  cursor-pointer">
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
                    class=" w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
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
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
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
            <hr class="w-10 h-1 bg-pink-600">
        </h1>


    <form method="POST" action="{{ route('consultation') }}" class="px-16 py-12 bg-gray-200 text-gray-800">
    @csrf	
    <label class="">Drop us a line! We are here to answer your questions 24/7.</label>
    <div class="flex flex-col lg:flex-row justify-between">
      <div class="flex flex-col mr-3">
        <div class="flex justify-between flex-row flex-wrap">
        <input type="text" name="company" placeholder="Company"
            class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto" />
          <input type="text" name="company" placeholder="Company"
            class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto" />
          <input type="email" name="email" placeholder="Work Email"
            class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto">
          <input type="text" name="phone_number" placeholder="Work Phone"
            class="border-2 border-gray-500 outline-none my-3 mr-3 py-4 px-3 w-full sm:w-auto md:w-2/5 xl:w-auto">
        </div>
        <textarea placeholder="How can we we help you?" cols="3" rows="6"
          class="border-2 border-gray-500 outline-none my-3 -mr-3 py-4 px-3" name="description" style="margin-right: 0.75rem;"></textarea>
         <div class="flex justify-center items-center mb-3">
          <button type="submit" class="text-center uppercase bg-blue-700 hover:bg-blue-900 text-white w-52 h-12">Discuss my needs</button>
         </div>
      </div>
      <div class="flex lg:flex-col md:flex-row md:justify-between flex-col">
        <div class="flex flex-col ">
          <p class="text-xl font-semibold">Our contact details</p>
          <a href="#" class="flex flex-row items-center text-blue-500 my-3">
            <i class="fa fa-phone mr-3"></i>
            <p>(+998) 99 873-48-36</p>
          </a>
          <a href="#" class="flex flex-row items-center text-blue-500">
            <i class="fa fa-envelope mr-3"></i>
            <p>contact@scnsoft.com</p>
          </a>
        </div>
        <div class="flex flex-col my-3">
          <p class="text-xl font-semibold mb-3">Press inquires</p>
          <a href="#" class="flex items-center text-blue-500">
            <p class="mr-3">GET IN TOUCH WITH US</p>
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
        <div class="flex flex-col">
          <p class="text-xl border-2 font-semibold mb-3">Join our team</p>
          <a href="#" class="flex items-center text-blue-500">
            <p class="mr-3">CHECK OUR OPEN VACANCIES</p>
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </form>



    </div>
    @include('front.Components.footer')

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{ asset('index.js') }}"></script>
<script>
  $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          setting: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          setting: {
            slidesToShow: 3
          }
        }]
      });
    });
</script>

</body>
</html>

