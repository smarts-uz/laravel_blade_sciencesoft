@extends('front.layout')

@section('css')

@endsection

@section('main')

        <div class="mx-6 md:mx-16 lg:mx-24 my-10">
            <h1 class="text-5xl font-semibold pb-10 text-gray-800">{{ @translate_lang("Referral Program for IT Consulting and Software Development Services")  }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <img src="https://www.scnsoft.com/cover-pictures/become-sciencesoft-s-partner.svg" alt="">
            <p class="py-5 text-lg text-gray-500">{{ @translate_lang("If you are a")  }} <strong> {{ @translate_lang("trusted consultancy")  }} </strong>, {{ @translate_lang(" an")  }} <strong></strong> {{ @translate_lang("individual consultant")  }}</strong> {{ @translate_lang("or a")  }} <strong> {{ @translate_lang("marketing agency")  }} </strong>, {{ @translate_lang("you may need software development services for your customers apart from the services you directly provide. We understand that software development is not your priority, and we are ready to take on this task and equip your clients with the software tailored to their industry specifics and business needs.")  }}</p>
            <p class="py-5 text-lg text-gray-500">{{ @translate_lang("If you are a")  }} <strong>{{ @translate_lang("sales agent")  }} </strong>, {{ @translate_lang("you can help us hunt for new IT consulting and custom software development opportunities. All you need is to provide us with relevant leads, and we’ll reward your efforts according to our Referral Program.")  }}</p>
            <p class="py-5 text-lg text-gray-500">{{ @translate_lang("Join ScienceSoft Referral Program for IT consulting and software development services and get rewarded for the leads you bring us. We are open to expanding our business network and obtaining new IT consulting and software development challenges.")  }}</p>
            <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ @translate_lang("COOPERATION PROCEDURE")  }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <ul class="list-disc pl-5">
                <li class="py-2 text-lg text-gray-500">{{ @translate_lang("We sign an NDA to ensure your sensitive data is not disclosed and an Agent Agreement that regulates the specifics of our cooperation in frames of the Referral Program (including the commissions you get as a mediator).")  }}</li>
                <li class="py-2 text-lg text-gray-500">{{ @translate_lang("You introduce us to your clients who need IT services (IT consulting, software design, custom application development).")  }}</li>
                <li class="py-2 text-lg text-gray-500">{{ @translate_lang("We communicate with your clients and offer them the solutions they need (or may need) – saving your time and efforts.")  }}</li>
                <li class="py-2 text-lg text-gray-500">{{ @translate_lang("When we win a contract, we compensate your efforts (paying a percentage of the contract) according to the conditions of our Referral Program.")  }}</li>
                <p class="py-5 text-lg text-gray-500">{{ @translate_lang("Your participation in the software project itself is not mandatory, but you can join it, for example, as a consultant. We are interested in long-term cooperation and can offer all-round software development and IT consulting support to every new customer you have. We respect your reputation and ensure that required services will be delivered to end-users within time and budget. We are also ready to provide you with all the necessary marketing materials to introduce our services to your customers (including co-branded materials featuring the benefits of a joint offer for your customers).")  }}</p>
                <p class="py-5 text-lg text-gray-500">{{ @translate_lang("Over the past years, we’ve been a trusted partner for agents in various industries including")  }} <a class="underline hover:text-blue-600" href="#">{{ @translate_lang("healthcare")  }}</a> , <a class="underline hover:text-blue-600" href="#">{{ @translate_lang("banking")  }}</a> , <a class="underline hover:text-blue-600" href="#">{{ @translate_lang("retail")  }}</a> ,<a class="hover:text-blue-600 underline" href="#">{{ @translate_lang("manufacturing")  }}</a> ,  <a class="underline hover:text-blue-600" href="">{{ @translate_lang("telecom")  }}</a> {{ @translate_lang("in the US and Europe, which resulted in new beneficial long-term business relationships for our partners and us. At ScienceSoft, we believe that doing business with partners is an effective way to reach out to the customers, meet their expectations and win their trust.")  }}</p>
                <p class="py-5 text-lg text-gray-500 mb-5">{{ @translate_lang("Please feel free to send your questions to us and set up a free consultation with our representative.")  }}</p>
            </ul>
            <div class="relative my-32 mx-10">
                <button class="w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium absolute mt-10 mx-3 right-0 bottom-16 text-white text-lg uppercase">
                    {{ @translate_lang("Contact US")  }}
                </button>
            </div>

            <h1 class="text-4xl font-semibold pb-10 text-gray-800 mt-10">{{ @translate_lang("SOLUTIONS WE CAN CREATE FOR YOUR CUSTOMERS")  }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">

            <!-- Cards -->
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-32 md:h-32" src="https://www.scnsoft.com/blue-icons-on-grey-background/big_data.svg" alt="">
                  </div>
                  <div class="flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-3xl font-bold">{{ @translate_lang("Data analytics including big data analytics")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            {{ @translate_lang("Cleansing and integrating data, providing analysis and visualization to get valuable business insights.")  }}
                        </p>
                  </div>
                </div>
            </div>

            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/crm.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-4xl font-bold">{{ @translate_lang("CRM")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            {{ @translate_lang("Helping companies enhance customer management, win new clients and improve productivity.")  }}
                        </p>
                  </div>
                </div>
            </div>

            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/ecommerce.svg" alt="">
                  </div>

                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ @translate_lang("Ecommerce")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            {{ @translate_lang("Seizing the potential of Magento to ensure efficient inventory management, analytics and reporting, cross-business order management, account, purchase and payment history review and more.")  }}
                        </p>
                  </div>
                </div>
            </div>

            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/enterprise_portals.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ @translate_lang("Portals")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            {{ @translate_lang("Helping companies build efficient e-cooperation with their customers and partners.")  }}
                        </p>
                  </div>
                </div>
            </div>

            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/mobile.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ @translate_lang("Mobile apps")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                        </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

@endsection