@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="flex w-full">
    <aside class="w-80  bg-gray  hidden sm:block">
      <div class="xl:w-1/5 flex flex-col w-full justify-start h-8 fixed p-4 xl:bg-white">
        <div class="text-sm mb-16">
          <div class="text-black xl:bg-white text-sm font-normal flex flex-row justify-between bg-blue-800 uppercase lg:underline mb-5">
            <p>
              Healthcare IT Consulting</p>
            <i onclick="dropDown()" class="fas fa-chevron-down lg:hidden"></i>
          </div>
          <div class="content hidden xl:block">
            <p class="bg-gray-100 text-black p-3 rounded mt-2 cursor-pointer font-medium hover:text-blue-600">
              Management Team
            </p>
            <p class="bg-gray-100 text-black p-3 rounded mt-2 cursor-pointer font-medium hover:text-blue-600">
              Our Experts
            </p>
          </div>
        </div>
      </div>
    </aside>
  
    <section class="w-full p-4 pr-10">
      <div>
        <p class="text-gray-400 text-xs">Home &gt; Banking and Financial Services</p>

        <div class="w-8/12 m-auto py-10 my-10">
            <h1 class="text-5xl font-semibold pb-10 text-gray-800">Referral Program for IT Consulting and Software Development Services</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
            <img src="https://www.scnsoft.com/cover-pictures/become-sciencesoft-s-partner.svg" alt="">
            <p class="py-5 text-lg text-gray-500">If you are a <strong> trusted consultancy </strong>,  an <strong></strong> individual consultant</strong> or a <strong> marketing agency </strong>, you may need software development services for your customers apart from the services you directly provide. We understand that software development is not your priority, and we are ready to take on this task and equip your clients with the software tailored to their industry specifics and business needs.</p>
            <p class="py-5 text-lg text-gray-500">If you are a <strong>sales agent </strong>, you can help us hunt for new IT consulting and custom software development opportunities. All you need is to provide us with relevant leads, and we’ll reward your efforts according to our Referral Program.</p>
            <p class="py-5 text-lg text-gray-500">Join ScienceSoft Referral Program for IT consulting and software development services and get rewarded for the leads you bring us. We are open to expanding our business network and obtaining new IT consulting and software development challenges.</p>
            <h1 class="text-4xl font-semibold pb-10 text-gray-800">COOPERATION PROCEDURE</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
            <ul class="list-disc pl-5">
                <li class="py-2 text-lg text-gray-500">We sign an NDA to ensure your sensitive data is not disclosed and an Agent Agreement that regulates the specifics of our cooperation in frames of the Referral Program (including the commissions you get as a mediator).</li>
                <li class="py-2 text-lg text-gray-500">You introduce us to your clients who need IT services (IT consulting, software design, custom application development).</li>
                <li class="py-2 text-lg text-gray-500">We communicate with your clients and offer them the solutions they need (or may need) – saving your time and efforts.</li>
                <li class="py-2 text-lg text-gray-500">When we win a contract, we compensate your efforts (paying a percentage of the contract) according to the conditions of our Referral Program.</li>
                <p class="py-5 text-lg text-gray-500">Your participation in the software project itself is not mandatory, but you can join it, for example, as a consultant. We are interested in long-term cooperation and can offer all-round software development and IT consulting support to every new customer you have. We respect your reputation and ensure that required services will be delivered to end-users within time and budget. We are also ready to provide you with all the necessary marketing materials to introduce our services to your customers (including co-branded materials featuring the benefits of a joint offer for your customers).</p>
                <p class="py-5 text-lg text-gray-500">Over the past years, we’ve been a trusted partner for agents in various industries including <a class="underline hover:text-blue-600" href="#">healthcare</a> , <a class="underline hover:text-blue-600" href="#">banking</a> , <a class="underline hover:text-blue-600" href="#">retail</a> ,<a class="hover:text-blue-600 underline" href="#">manufacturing</a> ,   <a class="underline hover:text-blue-600" href="">telecom</a>  in the US and Europe, which resulted in new beneficial long-term business relationships for our partners and us. At ScienceSoft, we believe that doing business with partners is an effective way to reach out to the customers, meet their expectations and win their trust.</p>
                <p class="py-5 text-lg text-gray-500 mb-5">Please feel free to send your questions to us and set up a free consultation with our representative.</p>
            </ul>
            <div class="relative my-32 mx-10">
                <button class="w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium absolute mt-10 mx-3 right-0 bottom-16 text-white text-lg uppercase">
                    Contact US
                </button>
            </div>
            
            <h1 class="text-4xl font-semibold pb-10 text-gray-800 mt-10">SOLUTIONS WE CAN CREATE FOR YOUR CUSTOMERS</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
            
        
        
            <!-- Cards -->
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-32 md:h-32" src="https://www.scnsoft.com/blue-icons-on-grey-background/big_data.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-3xl font-bold">Data analytics including big data analytics</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Cleansing and integrating data, providing analysis and visualization to get valuable business insights.
                        </p>
                  </div>
                </div>
            </div>
            
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/crm.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-2xl md:text-4xl font-bold">CRM</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Helping companies enhance customer management, win new clients and improve productivity.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/ecommerce.svg" alt="">
                  </div>
        
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">Ecommerce</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Seizing the potential of Magento to ensure efficient inventory management, analytics and reporting, cross-business order management, account, purchase and payment history review and more.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/enterprise_portals.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">Portals</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Helping companies build efficient e-cooperation with their customers and partners.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/mobile.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">Mobile apps</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Developing native and cross-platform apps for customers and employees in healthcare, banking, retail, manufacturing and professional services and more at employee, department and company level.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/collaboration.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">Intranets</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Using the potential of SharePoint and Office 365 to improve corporate communication and project management and optimize workflows with easy-to-go collaboration tools.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/documents.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">Document management</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Enabling secure document sharing, automated document processing, classification and indexing, intelligent search and data discovery.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/smart-city.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-xl md:text-4xl font-bold">Internet of things</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Assisting organizations across multiple industries to advance with smart connected products, smart maintenance, industrial IoT, smart logistics and transportation, smart city and more. We’ve worked out our approach to IoT architecture to ensure business-boosting performance of the IoT solutions we deliver.
                        </p>
                  </div>
                </div>
            </div>
        
            <div class="mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="flex flex-col md:flex-row  items-center">
                  <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-full h-full md:w-40 md:h-40" src="https://www.scnsoft.com/blue-icons-on-grey-background/security_defense.svg" alt="">
                  </div>
                  <div class=" flex flex-col w-3/5">
                        <h1 class="text-3xl md:text-4xl font-bold">Information security</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            Offering SIEM, identity and access management and penetration testing services (ScienceSoft is an IBM Security Gold Business Partner).
                        </p>
                  </div>
                </div>
            </div>
        
        
        
            <h1 class="text-4xl font-semibold pb-10 text-gray-800 mt-10">CORE INDUSTRIES WE SERVE</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
            
            <div class="grid grid-cols-3 gap-3">
                <div class="rounded-sm border-2 transition-shadow w-full p-8">
                    <div class="flex flex-col">
                    <h1 class="text-xl font-bold">Healthcare</h1>
                    <hr class="w-8 border-yellow-600 text-gray-800 my-4" />
                    <ul class="list-disc pl-5">
                        <li class="text-gray-500 text-xl">15 years in healthcare IT consulting and software development.</li>
                        <li class="text-gray-500 text-xl">Our customers are Baxter, MSxHealth, Chiron Health, Saratoga Bridges and other healthcare service providers.</li>
                        <li class="text-gray-500 text-xl">We offer mobile applications for doctors and patients, healthcare CRM, medical portals, healthcare data analytics and more.</li>
                    </ul>
                    </div>
                </div>
                <div class="rounded-sm border-2 transition-shadow w-full p-8">
                    <div class="flex flex-col">
                    <h1 class="text-xl font-bold">Banking</h1>
                    <hr class="w-8 border-yellow-600 text-gray-800 my-4" />
                    <ul class="list-disc pl-5">
                        <li class="text-gray-500 text-xl">15 years in mobile banking and intranets, document and knowledge management, banking data analytics, customer portals, loyalty program management and more.</li>
                        <li class="text-gray-500 text-xl">We provided service to American, European and Asian banks and financial institutions including RBC Royal Bank, PayPal, M&T Bank.</li>
                    </ul>
                    </div>
                </div>
                <div class="rounded-sm border-2 transition-shadow w-full mr-20 p-8">
                    <div class="flex flex-col">
                    <h1 class="text-xl font-bold">Retail and consumer goods</h1>
                    <hr class="w-8 border-yellow-600 text-gray-800 my-4" />
                    <ul class="list-disc pl-5">
                        <li class="text-gray-500 text-xl">We’ve been delivering IT Retail services since 2003 and created IT solutions for such corporations as Walmart, Nestle, Heinz and more.</li>
                        <li class="text-gray-500 text-xl">We offer ecommerce, loyalty solutions, customer data analytics, retail business intelligence, in-store automation.</li>
                    </ul>
                    </div>
                </div>
            </div>
        
            <h1 class="text-4xl font-semibold pb-10 text-gray-800 mt-10">WHY SCIENCESOFT</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
            <ul class="list-disc pl-5">
                <li class="py-2 text-lg text-gray-500">31-year experience in IT consulting and software development for healthcare, banking, retail,  manufacturing, telecom and other industries (2,695 completed projects).</li>
                <li class="py-2 text-lg text-gray-500">Big talent pool with a wide range of skills (currently 700 specialists in project management, business analysis, development, testing and more) – we are fully equipped to rely on our internal resources.</li>
                <li class="py-2 text-lg text-gray-500">Fair and transparent commissions.</li>
            </ul>
        
            <div class="w-4/5 h-2/4 bg-white-900 shadow-2xl p-12 mt-10">
                <h1 class="text-4xl font-semibold pb-10 text-gray-800 mt-10">Contact Us</h1>
                <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                <div class="grid grid-col-2 relative">
                    <p class=" text-lg text-gray-500 w-3/5">Ready to start? Need more info about partnership details? Contact us to get free consultation and explore how we can cooperate. Our specialists are open to give the presentation of ScienceSoft services and provide you with our demos, success stories and other materials you need.
                    </p>
                    <button class="w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium absolute top-10 right-0 text-white text-lg uppercase">Contact US</button>
                </div>
            </div>
        </div>

    </section>
</main>


@endsection


@section('js')

@endsection

