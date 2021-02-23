@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <!-- Corousel -->
        <div class="px-10 md:px-16 mb-10 lg:px-36 flex flex-col justify-center items-center text-center mt-20">
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">{{ _trans("DIGITAL COMMERCE")  }}</h1>
            <hr class="w-20 h-1 bg-yellow-600 my-10 ">
            <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">{{ _trans("At its core,
            digital commerce is selling and buying goods and services online. The market is highly competitive, and
            businesses need to strive for more and more excellence to stay resilient, even though consumer demand for
            online shopping is remarkably strong now. TeamPRO brings in technology expertise and a problem-oriented
            approach to drive positive and tangible changes across your business resulting in cost savings and revenue
            growth.")  }}</p>
        </div>

        <div class="container mb-24">
            <section class="customer-logos slider px-16">
                <div class="slide"><img class="h-32 w-32"
                        src="https://seal-dallas.bbb.org/logo/ruhzbul/teampro-90933001.png" alt="logo"></div>
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
                <h1 class="uppercase font-bold text-2xl pb-4">{{ _trans("Featured Insights")  }}</h1>
                <hr class="w-10 h-1 bg-pink-600">
            </div>
            </h1>

            <div class='flex flex-row flex-wrap justify-evenly'>
                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2 hover:shadow-2xl transition duration-500 mt-10  cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ _trans("VR Technology: Architecture, Tools, Team, and Costs")  }}
                    </div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-development.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ _trans("Obtain a clean-coded and high-performing ecommerce solution.")  }}
                        </p>
                    </div>
                </div>

                <div
                    class=" w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ _trans("VR Technology: Architecture, Tools, Team, and Costs")  }}
                    </div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ecommerce-consulting.svg">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ _trans("Secure the best ROI for implemented technology solutions.")  }}
                        </p>
                    </div>
                </div>

                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ _trans("A Comprehensive Guide to Real-Time Big Data
                    Analytics")  }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/ux-and-ui-design.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base">
                            {{ _trans("Communicate your brand’s unique personality through website design.")  }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="my-10 flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
                <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
                    <h1 class="text-3xl font-semibold">{{ _trans("DIGITAL MARKETING AUTOMATION")  }}</h1>
                    <p class="text-xl text-gray-700 my-6">{{ _trans("We help to implement proper marketing automation tools and
                    organize effectively omnichannel customer communication:")  }}</p>
                    <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Email marketing.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Landing page design.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Social media marketing.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Event management.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Content marketing.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Automated journey builder.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("SEO marketing.")  }}</li>
                        <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ _trans("Marketing analytics.")  }}</li>
                    </ul>
                    <a href="#" class="flex flex-row items-center text-blue-700">
                        <p class="uppercase mr-3 font-semibold">{{ _trans("TALK TO THE TEAM")  }}</p>
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
                    <p class="mb-4">{{ _trans("EXPLORE DIVERSE IMPLEMENTATION MODELS")  }}</p>
                    <hr class="w-10 h-1 bg-pink-600">
                </h1>
                <p class="text-xs lg:text-xl my-4 lg:my-8">{{ _trans("We IT-enable all kinds of B2B, B2C interactions and internal
                operations.")  }}</p>
                <ul class="text-black flex flex-wrap flex-row justify-between">
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ _trans("Online Marketplace")  }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ _trans("Ecommerce Multistore")  }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ _trans("Headless Commerce")  }}
                        </a>
                        <div class="absolute bottom-3 right-3">
                            <i class="fa fa-arrow-right fa-rotate-45"></i>
                        </div>
                    </li>
                    <li
                        class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
                        <a href="#">
                            {{ _trans("PWA")  }}
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
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ _trans("How To Start A Successful Online Business")  }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-start-a-successful-online-business.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ _trans("Business & tech tips for a successful online launch: business models, competitive advantages and
                            expected investment into starting an ecommerce business.")  }}
                        </p>
                    </div>
                </div>

                <div
                    class=" w-1/3 rounded overflow-hidden shadow-lg my-2 hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ _trans("How to Sell Grocery Online")  }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-sell-grocery-online.svg">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base mb-5">
                            {{ _trans("Guidelines on how to find a place in the online grocery market: viable business models,
                            specifics of technology implementations, an ecosystem example, competitive advantages, and
                            investment")  }}
                        </p>
                    </div>
                </div>

                <div
                    class="w-1/3 rounded overflow-hidden shadow-lg my-2  hover:shadow-2xl transition duration-500 mt-10 cursor-pointer">
                    <div class="p-5 text-center font-bold text-xl mb-2">{{ _trans("How to Choose an Ecommerce Platform")  }}</div>
                    <img class="w-72 h-48"
                        src="https://www.scnsoft.com/---home-page-illustrations/ecommerce-microsite/how-to-choose-an-ecommerce-platform.svg"
                        alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <p class="text-grey-darker text-base">
                            {{ _trans("Functional portfolio of ecommerce platforms and top 10 shortlisted by TeamPRO.")  }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- """"""""""""""""""""""""""""""""""""""""""""""""""""""""" -->

            <!-- Contact -->

        </div>

        <h1 class="px-16 text-3xl py-12">
            <p class="mb-4">{{ _trans("NEED TO TALK TO ECOMMERCE EXPERTS?")  }}</p>
            <hr class="w-10 h-1 bg-pink-600">
        </h1>

        <form class="px-16 py-12 bg-gray-200 text-gray-800">
            <label class="">
                {{ _trans("TeamPRO is a full-service ecommerce team to handle diverse consulting and development tasks. Outline
                briefly the service or challenge you want to discuss with us, and we will be quick to follow up and start
                our dialogue.")  }}
            </label>
            <div class="flex flex-col lg:flex-row justify-between">
                <div class="flex flex-col mr-3">
                    <div class="flex justify-between flex-row flex-wrap">
                        <input type="text" name="FullName" placeholder="{{ _trans("Full Name")  }}"
                            class="border-2 border-gray-500 outline-none my-3 mr-3 p-4 w-full sm:w-auto md:w-2/5 xl:w-auto" />
                        <input type="text" name="Company" placeholder="{{ _trans("Company")  }}"
                            class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto" />
                        <input type="email" name="Email" placeholder="{{ _trans("Work Email")  }}"
                            class="border-2 border-gray-500 outline-none  py-4 px-3 my-3 mr-3 w-full sm:w-auto md:w-2/5 xl:w-auto">
                        <input type="text" name="Phone Number" placeholder="{{ _trans("Work Phone")  }}"
                            class="border-2 border-gray-500 outline-none my-3 mr-3 py-4 px-3 w-full sm:w-auto md:w-2/5 xl:w-auto">
                    </div>
                    <textarea placeholder="{{ _trans("How can we we help you?")  }}" cols="3" rows="6"
                        class="border-2 border-gray-500 outline-none my-3 -mr-3 py-4 px-3"
                        style="margin-right: 0.75rem;"></textarea>
                    <div class="flex justify-center items-center mb-3">
                        <button type="submit"
                            class="text-center uppercase bg-blue-700 hover:bg-blue-900 text-white w-56 h-16 ">{{ _trans("Discuss my
                            Ecommerce needs")  }}</button>
                    </div>
                </div>
                <div class="flex lg:flex-col md:flex-row md:justify-between flex-col">
                    <div class="flex flex-col">
                        <p class="text-xl font-semibold">{{ _trans("Our contact details")  }}</p>
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
                        <p class="text-xl font-semibold mb-3">{{ _trans("Press inquires")  }}</p>
                        <a href="#" class="flex items-center text-blue-500">
                            <p class="mr-3">{{ _trans("GET IN TOUCH WITH US")  }}</p>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-xl border-2 font-semibold mb-3">{{ _trans("Join our team")  }}</p>
                        <a href="#" class="flex items-center text-blue-500">
                            <p class="mr-3">{{ _trans("CHECK OUR OPEN VACANCIES")  }}</p>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </form>

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
