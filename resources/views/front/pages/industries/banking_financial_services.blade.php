@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>

            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ t('Banking Software & IT Services for Banks') }}
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4" />
            <img
                src="{{ asset('images/industries/banking_financial_services/banking-software-it-services-for-banks.svg') }}">
            <p class="my-5 text-xl">
                {{ t('For 14 years Smart Softwaredelivers various banking software solutions (portals, intranets, mobile apps, CRM, etc.), manages their successful implementation, integration, testing and deployment as well as ensures their solid support.') }}
            </p>
            <p class="my-5 text-xl">
                {{ t('We provide both platform-based and custom banking software that serves the needs of retail and corporate banking and improves the relationships between financial facilities and their customers, attracting and retaining the most profitable clientele.') }}
            </p>

        </div>

         <button type="button" class="bg-blue-700 text-white w-full  uppercase py-2 lg:w-64 lg:ml-auto block"> {{ t('get a quote ') }}</button>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('OUR PORTFOLIO') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />



        {{-- content --}}

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



        <button type="button" class="border-blue-700 border hover:bg-blue-700 focus:outline-none hover:text-white  text-blue-700  uppercase py-2 w-64 mx-auto block"> {{ t('get a quote ') }}</button>


        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('BANKING SOFTWARE SOLUTIONS WE IMPLEMENT') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
         <p class="my-5 text-xl">
                        {{ t('ScienceSoft provides a complete set of custom and platform-based solutions designed to meet your needs.') }}
                    </p>


            <div class="lg:flex">
                    <div class="my-5 lg:w-32">
                        <img src="https://www.scnsoft.com/blue-icons-on-grey-background/internet_banking.svg" alt="" width="84" height="84">
                    </div>
                    <div class="lg:w-8/12">
                        <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                     {{ t('Internet banking') }}

                        </h1>
                        <p class="text-xl lg:text-2xl text-justify mt-3">
                          {{ t('Answer the ever-growing customers’ needs for secure 24/7 access to their banking accounts with custom internet banking.

') }}
                        </p>
                         <p class="text-xl lg:text-2xl text-justify mt-3">
                                                  {{ t('Whether you want to implement a solution from
                                                  scratch or update your current obsolete software, ScienceSoft
                                                  will provide you with rich functional scope and ensure implementation of the best online banking practices. With custom internet banking solutions, your clients will be able to enjoy the following functionality:

') }}
                                                </p>
                        <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                            <li><p class="text-black leading-9">{{ t('get detailed information about their checking, savings and credit accounts') }}</p></li>
                            <li><p class="text-black leading-9">{{ t('set up limits for their cards') }}</p></li>
                            <li><p class="text-black leading-9">{{ t('make payments') }}</p></li>
                            <li><p class="text-black leading-9">{{ t('transfer money between banking accounts') }}</p></li>
                            <li><p class="text-black leading-9">{{ t('request bank statements or other applicable documents online') }}</p></li>
                            <li><p class="text-black leading-9">{{ t('find a branch or ATMs in a particular location, and much more.') }}</p></li>
                        </ul>

                    </div>

                </div>


                   <div class="lg:flex">
                                    <div class="my-5 lg:w-32">
                                        <img src="https://www.scnsoft.com/blue-icons-on-grey-background/mobile_banking.svg" alt="" width="84" height="84">
                                    </div>
                                    <div class="lg:w-8/12">
                                        <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                     {{ t('Mobile banking') }}

                                        </h1>
                                        <p class="text-xl lg:text-2xl text-justify mt-3">
                                          {{ t('Provide your customers with a full range of banking services on their phones.') }}
                                        </p>
                                         <p class="text-xl lg:text-2xl text-justify mt-3">
                                                                  {{ t('Backed by 14 years of experience in mobile
                                                                   app development, ScienceSoft will help you implement custom mobile
                                                                    banking software tailored to your specific needs. Our software solutions vary from basic to A-class mobile banking apps and include both core and advanced functionality (e.g., personal financial management, loyalty program integration, personalized bank product offering, augmented reality, and more).

') }}
                                                                </p>


                                    </div>

                                </div>



   <div class="lg:flex">
                                    <div class="my-5 lg:w-32">
                                        <img src="https://www.scnsoft.com/blue-icons-on-grey-background/ehr.svg" alt="" width="84" height="84">
                                    </div>
                                    <div class="lg:w-8/12">
                                        <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                     {{ t('Customer portal') }}

                                        </h1>
                                        <p class="text-xl lg:text-2xl text-justify mt-3">
                                          {{ t('Ensure safe and user-friendly co-working environment for your customers with customized SharePoint-based portals and banking solutions created from scratch.
                                                     ') }}
                                        </p>
                                         <p class="text-xl lg:text-2xl text-justify mt-3">
                                                                  {{ t('Build B2C banking portals for ongoing communication and long-term relationships with your customers, or B2B portals with role-based content personalization, multiple logins for customer employees, clear portfolio manager, financial planning and other custom functions.

') }}
                                                                </p>


                                    </div>

                                </div>



               <div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/crm.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Banking CRM') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Use strong capabilities of Dynamics 365 and Salesforce to enhance generation of customer-related data and effectively communicate with both prospects and current customers.



             ') }}
                                     </p>
                                      <p class="text-xl lg:text-2xl text-justify mt-3">
                                                               {{ t('With 11 years in CRM consulting, ScienceSoft can boost your effectiveness in various customer-facing activities such as:



             ') }}
                                                             </p>
                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('cross-selling and up-selling') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('customer support') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('systematic lead nurturing') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('customer data management') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('channel activity tracking') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('customer experience management, and more.') }}</p></li>
                                     </ul>

                                 </div>

                             </div>

                            <button type="button" class="bg-blue-700 text-white w-full  uppercase py-2 lg:w-64 lg:ml-auto block"> {{ t('try crm demo ') }}</button>


 <div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/loyalty.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Loyalty program management') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Increase customer engagement with your brand and across multiple product lines through:
                                                  ') }}
                                     </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('establishing omni-channel communications') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('adopting omni-channel approach for managing customer relationships') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('building flexible reward systems') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('including gamification elements, and more.') }}</p></li>

                                     </ul>

                                 </div>

                             </div>


<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/sales_forecasting.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Banking data analytics') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Tap into customer trends and liquidity forecasts, drive revenue and mitigate risks by converting raw data into actionable, reliable and consistent insights.


                                                  ') }}
                                     </p>

                                      <p class="text-xl lg:text-2xl text-justify mt-3">
                                                                            {{ t('ScienceSoft will help you implement the following types of bank data analytics:
                                                                                       ') }}
                                                                          </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9"><b>{{ t('Customer analytics ') }}</b>{{ t('(customer segmentation, attrition analysis, cross-sell effectiveness analysis, etc.);') }}</p></li>
                                         <li><p class="text-black leading-9"><b>{{ t('Channel analytics') }}</b>{{ t(' (analysis of branch transactions and customer traffic, analysis of click patterns,') }}</p></li>
                                         <li><p class="text-black leading-9"><b>{{ t('Marketing analytics') }}</b>{{ t('(success of marketing campaigns, factors that increase sales, etc.)') }}</p></li>
                                         <li><p class="text-black leading-9"><b>{{ t('Risk analytics') }}</b>{{ t(' (credit risk, market risk, operational risk, liquidity risk, etc.);') }}</p></li>
                                         <li><p class="text-black leading-9"><b>{{ t('Performance analytics') }}</b>{{ t('(sales performance, branch and digital channels performance and profitability, etc.).') }}</p></li>

                                     </ul>

                                 </div>

                             </div>



<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/deposit.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Lending software') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Take fast and well-informed loan decisions, mitigate risks and reduce time and costs of loan delivery.


                                                  ') }}
                                     </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('Digitize loan origination, underwriting and servicing.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Introduce a configurable borrower portal for consumer, commercial and small business loans.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Opt for a web-portal or a custom mobile application to accelerate the mortgage application process.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Add convenience to your mortgage lending services with e-signatures, e-delivery and e-closing tools.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Create a single system of record for your lending operations with ScienceSoft’s custom lending software.') }}</p></li>

                                     </ul>

                                 </div>

                             </div>


<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/payment_solutions.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Payment software') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Harness the power of digital payments.




                                                  ') }}
                                     </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('Ensure fast and secure transactions with custom mobile payment solutions.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Increase customer loyalty with NFC or QR-based mobile wallets that hold digital information about customers’ credit and debit cards, store coupons, loyalty programs, and more.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Enable customers to make real-time, person-to-person (P2P) payments.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Streamline the accounts payable process for your business clients.') }}</p></li>

                                     </ul>

                                 </div>

                             </div>


<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/collaboration.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Bank intranet') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Help employees to work better together.






                                                  ') }}
                                     </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('Facilitate collaboration and communication between departments.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t(' Create unique environment for data sharing and informal communication.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Ensure information consistency, better data management and search.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Promote corporate values and strengthen a sense of community within the workplace.') }}</p></li>

                                     </ul>

                                 </div>

                             </div>


<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/enterprise_content_management.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Document management system') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Ensure seamless and fully automated document circulation in your bank.








                                                  ') }}
                                     </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('Build a single library supporting multiple document templates.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t(' Create automated workflows for receiving, routing and completing documents.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Ensure document compliance with internal standards and regulations.') }}</p></li>
                                     </ul>

                                 </div>

                             </div>


<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/knowledge_management.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Knowledge management solution') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Make your bank’s corporate knowledge a competitive advantage.


') }}
                                     </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9">{{ t('Create a corporate knowledge base and a unified discussion hub.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Post information for corporate education.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Share case studies, workshop materials, guidelines, FAQs and other knowledge items.') }}</p></li>
                                         <li><p class="text-black leading-9">{{ t('Discuss events, ask questions, get consultations and do other activities with rich') }}<a href="#" class="underline hover:text-blue-700">{{ t(' SharePoint knowledge management') }}</a>
                                         {{ t(' functionality.') }}
                                         </p></li>
                                     </ul>

                                 </div>

                             </div>



<div class="lg:flex">
                                 <div class="my-5 lg:w-32">
                                     <img src="https://www.scnsoft.com/blue-icons-on-grey-background/facial_recognition.svg" alt="" width="84" height="84">
                                 </div>
                                 <div class="lg:w-8/12">
                                     <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                                  {{ t('Facial recognition software') }}

                                     </h1>
                                     <p class="text-xl lg:text-2xl text-justify mt-3">
                                       {{ t('Strengthen the security, improve customer loyalty, increase software efficiency and accessibility via a better mode of authentication.




') }}
                                     </p>

                                        <p class="text-xl lg:text-2xl text-justify mt-3">{{ t('With') }}<b>{{ t('7-year experience') }}</b>
                                        {{ t('in') }}<a href="#" class="underline hover:text-blue-700"> {{ t('image analysis technology, ') }}</a>
                                         {{ t('ScienceSoft can help with premier-quality facial recognition solutions for a streamlined identity proofing process:') }}



                                        </p>

                                     <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                                         <li><p class="text-black leading-9"><b>{{ t('Mobile and web authentication') }}{{ t('(using facial biometrics to log into internet banking accounts; taking a selfie to prove identity for ecommerce transactions).') }}</b></p></li>
                                         <li><p class="text-black leading-9"><b>{{ t('On-site authentication ') }}</b>{{ t('(preventing unauthorized personnel from entering sensitive areas; detecting suspicious behavior in and around the bank; verifying account withdrawals at ATMs; identifying VIP customers quickly and accurately).') }}</p></li>

                                     </ul>

                                 </div>

                             </div>




        </div>






        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('THRIVE WITH BANKING SOFTWARE') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <p class="my-4 text-xl">{{ t('At TeamPRO, we help our customers reap the following benefits:') }}</p>
        <img src="{{ asset('images/industries/banking_financial_services/banking-software-benefits.svg') }}" alt="">


<div class="p-6 shadow-xl lg:flex mt-7">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                {{ t('We Ensure Regulatory Compliance') }}
            </h1>
            <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
               {{ t('ScienceSoft’s banking software solutions that we develop fully compliant with regulatory standards, including FRS requirements, Dodd-Frank Act, Payment Application Data Security Standard (PA-DSS), Payment Card Industry Data Security Standard (PCI-DSS), SOX, and others.
') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto px-2">
            <a href="#">
                <div class="bg-blue-700 text-white uppercase text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                   {{ t('get a quote') }}
                </div>
            </a>

        </div>
    </div>



        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('WHAT WE OFFER') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <img src="{{ asset('images/industries/banking_financial_services/our-services.svg') }}" alt="">


 <div class="lg:grid grid-cols-2 gap-5 mt-5">
    <div class="w-full border p-6 ">
        <h5 class="font-bold text-lg"> {{ t('Digital transformation consulting') }}
        </h5>
        <p class="text-xl mt-5">
           {{ t('Whether you need to develop an enterprise digital strategy or move to a new technology platform, ScienceSoft will work closely with you to improve your IT ecosystem. Our IT consultants will help you identify how banking solutions can reinvent your business, as well as help you choose the most suitable platform, and estimate costs.

') }}

        </p>
    </div>

    <div class="w-full border p-6 my-3 lg:my-0">
        <h5 class="font-bold text-lg"> {{ t('IT-based customer experience consulting
                                                 ') }}
        </h5>
        <p class="text-xl mt-5">
          {{ t('With 9-year experience in developing CXM solutions, ScienceSoft clearly understands what makes excellent customer experience and how software can optimize and enhance all stages of the CXM cycle. Our CX consultants will guide you through a variety of solutions for customer experience management helping to choose and implement the most suitable ones.

') }}
        </p>
    </div>


    <div class="w-full border p-6">
        <h5 class="font-bold text-lg">{{ t('Solution implementation
                                                ') }}
        </h5>
        <p class="text-xl mt-5">
           {{ t('Backed by deep expertise in implementing platform-based solutions, ScienceSoft can meet the ever-changing needs of any banking environment at any scale. To reflect your bank’s unique business models, we can create a solution from scratch thereby satisfying your needs much more precisely than any off-the-shelf product.

') }}


        </p>
    </div>

    <div class="w-full border p-6 my-3 lg:my-0">
        <h5 class="font-bold text-lg">{{ t('Solution maintenance and support') }}
        </h5>
        <p class="text-xl mt-5">
          {{ t('In case you need a dedicated IT team to upgrade your banking software, ScienceSoft can ensure support and maintenance services. With ScienceSoft’s help, you can reduce the cost of technical support as well as get upgrades, design update, performance tuning, and patches for your banking systems.

') }}

        </p>
    </div>
    </div>
        {{-- content --}}

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('MEET YOUR BUSINESS CHALLENGES') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
 <div class="lg:grid grid-cols-2 gap-6">
        <div>
            <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                <li><p class="text-black leading-9">{{ t('Decreased level of customer trust ') }}</p></li>
                <li><p class="text-black leading-9">{{ t('Customer attrition' ) }}</p></li>
                <li><p class="text-black leading-9">{{ t('Unsatisfactory CX and loyalty ') }}</p></li>
                <li><p class="text-black leading-9">{{ t('Weak cross-selling ') }}</p></li>
            </ul>

        </div>
        <div>
            <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                <li><p class="text-black leading-9">{{ t('Disintegrated communication with customers ') }}</p></li>
                <li><p class="text-black leading-9">{{ t('Fragmented view of customers ') }}</p></li>
                <li><p class="text-black leading-9">{{ t('Increased competition from Fintechs and more ') }}</p>
                </li>

            </ul>

        </div>
    </div>

    <div class="p-6 shadow-xl lg:flex mt-7">
            <div class="lg:w-4/6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                    {{ t('How to Start') }}
                </h1>
                <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

                <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                   {{ t('Whether you need a mobile banking app, banking CRM or a custom banking software solution, our dedicated IT consultants and business analysts are ready to provide you with a consultation and a proof of concept based on your project scope and complexity. Reach out to our IT consultants to discuss your business challenges in more detail.

    ') }}
                </p>
            </div>

            <div class="lg:w-2/6 m-auto px-2">
                <a href="#">
                    <div class="bg-blue-700 text-white uppercase text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                       {{ t('CONTACT US ') }}
                    </div>
                </a>

            </div>
        </div>






        <h1 class="uppercase font-bold mt-12 text-2xl">
            {{ t('SELECTED PROJECTS') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
      <div class="w-full my-7">
             <div class="bg-gray-50 pb-6">
                 <div class="md:flex flex-row gap-0">
                     <div class="md:w-1/5">
                         <img src="https://www.scnsoft.com/boss/images/6c4f3d8c-65de-421c-84d8-445aa7b83eb8crm-for-a-retail-bank_small.jpg"
                              alt="" class="block mx-auto w-80 md:mx-0  ">
                     </div>
                     <div class="px-6 md:w-11/12">
                         <h1 class="uppercase font-bold mt-11 text-xl md:text-xl">
                             <a href="#"> {{ t('CRM Development for a Retail Bank with 7 mln Clients') }}</a>
                         </h1>
                         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
                         <p class="text-2xl  text-justify">
                             {{ t('Backed by a 7-year expertise in Microsoft Dynamics CRM development, ScienceSoft joined the project to help the Customer create a CRM system for a bank with 7 million clients. Our team developed three modules: customer base management, sales activities planning and advanced analytics.
') }}
                         </p>
                         <p class=" mt-4 text-right ">
                             <a href="#" class="text-blue-700 font-semibold items-end ">
                                  {{ t('LEARN MORE') }}
                                 <i class="fas fa-arrow-right ml-2"></i>
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>

    </div>

@endsection

@section('js')

@endsection
