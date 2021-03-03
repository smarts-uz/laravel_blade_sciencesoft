@extends('front.layout')

@section('css')

@endsection

@section('main')

     <div class="mx-6 md:mx-16 lg:mx-24">
         <h1 class="uppercase font-bold mt-10 text-2xl md:text-3xl">
               {{ t('Custom Telecom Software Development') }}
         </h1>
         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
         <div>
             <img src="https://www.scnsoft.com/cover-pictures/telecommunications.svg" alt="">
         </div>
         <p class="text-xl lg:text-2xl text-justify mt-6">
            {{ t('For more than 13 years, our custom telecom solutions have been powering global leaders in telecommunications, such as') }}
            <b>  {{ t('T-Mobile') }}</b> and <b> {{ t('Orange') }}</b>,{{ t('Orange') }}, as well as aspiring startups like   <b>{{ t('Viber') }}</b>
               {{ t(' (grew to over 750 mln users).') }}
         </p>

         <h1 class="uppercase font-bold mt-10 text-2xl md:text-3xl">
            {{ t('OPERATIONS SUPPORT SYSTEMS (OSS)') }}
         </h1>
         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
         <p class="text-xl lg:text-2xl text-justify mt-6">
         {{ t('ScienceSoft helps telcos ensure that their networks run like clockwork.') }}
         </p>

         <div class="lg:flex">
             <div class="my-5 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/voip.svg" alt="" width="84" height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                     {{ t('VoIP-based services') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                      {{ t('With an extensive experience of delivering VoIP solutions, we create:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9">  {{ t('Server-side applications for softswitches;') }}</p></li>
                     <li><p class="text-black leading-9"> {{ t('Customized SIP-clients.') }}</p></li>
                 </ul>

             </div>
         </div>


         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/monitoring.svg" alt="" width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                    {{ t('Monitoring') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                    {{ t('Based on') }} <b>{{ t('BMC Remedy') }}</b> {{ t('our') }} <b>{{ t('ServiceNow') }}</b>
                     {{ t('our customized solutions allow for managing multiple operations effectively:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9">{{ t('Network resources inventory;') }}</p></li>
                     <li><p class="text-black leading-9">{{ t('Performance management;') }}</p></li>
                     <li><p class="text-black leading-9">{{ t('Fault management;') }}</p></li>
                     <li><p class="text-black leading-9">{{ t('Trouble ticketing;') }}</p></li>
                     <li><p class="text-black leading-9">{{ t('Fraud protection.') }}</p></li>
                 </ul>


             </div>
         </div>


         <button type="button" class="bg-blue-700 text-white py-2 w-full uppercase lg:w-60 lg:ml-auto block">{{ t('get a quote') }}
         </button>


         <h1 class="uppercase font-bold mt-10 text-2xl md:text-3xl">
            {{ t('BUSINESS SUPPORT SYSTEMS (BSS)') }}
         </h1>
         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
         <p class="text-xl lg:text-2xl text-justify mt-6">
              {{ t('Witnessing the ever-growing transformation of the telecom
              industry, our clients are able to run their businesses in step with the
              change and create completely new business models thanks to:
                         ') }}
         </p>

         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/billing_system.svg" alt="" width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                     {{ t('Charging and billing systems') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                     {{ t('Flexible and ') }} <b>{{ t('real-time ') }}</b>{{ t('billing and charging solutions that enable:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9">{{ t('Subscribers to
                     have instant control over their plans as well as benefit from multiple offerings;') }}</p></li>
                     <li><p class="text-black leading-9">  {{ t('Operators to create various
                     pricing models and personalized offers for several customer segments (thanks to CRM integration).') }}</p></li>
                 </ul>


             </div>
         </div>

         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/crm.svg" alt="" width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                    {{ t('CRM systems') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                    {{ t('Engage with subscribers in multiple ways:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9"><b> {{ t('Customer account management: ') }}</b>  {{ t('tracking order history,
                      channel activity,
                      promotion response and others; ') }}</p></li>
                     <li><p class="text-black leading-9"><b> {{ t('Loyalty program management') }} </b>
                     {{ t(': creating tailored offers, promotions and information on services and products;') }}
                     </p></li>
                     <li><p class="text-black leading-9">
                         <b>  {{ t('Customer retention:') }}</b>
                          {{ t('predicting customer churn as well as increasing customer value and loyalty by using advanced analytics.') }}
                     </p></li>
                 </ul>
                 <p class="text-xl lg:text-2xl text-justify mt-4">
                       {{ t('Check out ou') }} <a href="#" class="underline hover:text-blue-700"> {{ t('CRM consulting ') }}</a>  {{ t('expertise') }}
                 </p>


             </div>
         </div>


         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/self_service_portals.svg" alt="" width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                       {{ t('Customer self-service portals') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                      {{ t('Modern and interactive portals that are:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9">  {{ t('Profile-based and personalized;') }}</p></li>
                     <li><p class="text-black leading-9">
                        {{ t('Secure, powerful and scalable;') }}
                     </p></li>
                     <li><p class="text-black leading-9">
                         {{ t('Integrated with business systems, data analysis tools and social media;') }}
                     </p></li>
                     <li><p class="text-black leading-9">
                        {{ t('Optimized for mobile phones and tablets.') }}
                     </p></li>

                 </ul>
                 <p class="text-xl lg:text-2xl text-justify mt-4">
                     {{ t('Read more on') }} <a href="#" class="underline hover:text-blue-700">   {{ t('web portal development') }} </a> at
                       {{ t('at ScienceSoft.') }}
                 </p>


             </div>
         </div>


         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/data_analysis_reporting.svg" alt=""
                      width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                     {{ t('All-round data analysis and reporting') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                     {{ t('Improve the performance of data-rich business processes through:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9"><b>{{ t('Data warehousing') }}</b>{{ t(': aggregating data from multiple sources
                      into a single, quick and safe database –
                     we do the design and implementation;') }}</p></li>
                     <li><p class="text-black leading-9">
                         <b>  {{ t('Advanced reporting and visualization') }}</b>
                         {{ t('customizable reports to evaluate campaign effectiveness,
                         predict churn and gain strategic insights for further improvements;') }}
                     </p></li>
                     <li><p class="text-black leading-9">
                         <b>   {{ t('Predictive analytics:') }}</b>
                         {{ t('optimizing marketing strategy by analyzing customer behavior through segmentation and history.') }}
                     </p></li>

                 </ul>


             </div>
         </div>


         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/corporate_portals.svg" alt=""
                      width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                      {{ t('Corporate portals') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                      {{ t('Fast and secure portals to help your team benefit from:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9"> {{ t('Business workflow automation;') }}</p></li>
                     <li><p class="text-black leading-9">
                        {{ t('Project and task management;') }}
                     </p></li>
                     <li><p class="text-black leading-9">
                         {{ t('Corporate knowledge base;') }}
                     </p></li>
                     <li><p class="text-black leading-9" >{{ t('Workforce management;') }}</p></li>
                     <li><p class="text-black leading-9"> {{ t('Procurement management;') }}</p></li>
                     <li><p class="text-black leading-9">{{ t('Document management.') }}</p></li>

                 </ul>


             </div>
         </div>

         <div class="lg:flex ">
             <div class="my-7 lg:w-32">
                 <img src="https://www.scnsoft.com/blue-icons-on-grey-background/custom_sw.svg" alt=""
                      width="84"
                      height="84">
             </div>
             <div class="lg:w-8/12">
                 <h1 class="uppercase font-bold mt-8 text-2xl md:text-3xl">
                    {{ t('Custom web and mobile applications') }}
                 </h1>
                 <p class="text-xl lg:text-2xl text-justify mt-3">
                     {{ t('Increase business agility with a ') }} <a href="#" class="underline hover:text-blue-700">{{ t('custom application ') }}
                      </a>
                       {{ t('that is tailored to meet your specific needs. Here are some examples of
                       the custom applications that we have implemented recently:') }}
                 </p>
                 <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
                     <li><p class="text-black leading-9"> {{ t('Mobile number portability system;') }}</p></li>
                     <li><p class="text-black leading-9">
                         {{ t('Sales force automation system.') }}
                     </p></li>

                 </ul>


             </div>
         </div>


         <h1 class="uppercase font-bold mt-10 text-2xl md:text-3xl">
              {{ t('CUSTOMIZED VAS (VALUE ADDED SERVICES) SOFTWARE') }}
         </h1>
         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
         <p class="text-xl lg:text-2xl text-justify mt-6">
            {{ t('We help telcos extend their offerings with:') }}
         </p>

         <ul style="list-style: square" class="text-blue-700 text-xl pl-6 my-3">
             <li><p class="text-black leading-9"> {{ t('VoIP apps;') }}</p></li>
             <li><p class="text-black leading-9">{{ t('IPTV apps.

') }}</p></li>
         </ul>


         <h1 class="uppercase font-bold mt-11 text-2xl md:text-3xl">
              {{ t('OUR HALLMARK PROJECTS') }}
         </h1>
         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

         <div class="lg:flex items-center">
             <div class="my-5  ">
                 <img src="https://www.scnsoft.com/small-grey-icons/viber.svg" alt="">
             </div>
             <div class="lg:ml-5">
                 <p class="text-xl lg:text-2xl text-justify">  {{ t('Viber – an instant messaging and VoIP app with') }} <b> {{ t('over 900 mln ') }}
                 </b> {{ t('active users​;') }} </p>
             </div>
         </div>

         <div class="lg:flex items-center">
             <div class="my-5  ">
                 <img src="https://www.scnsoft.com/small-grey-icons/mobile_number_portability_system.svg" alt="">
             </div>
             <div class="lg:ml-5">
                 <p class="text-xl lg:text-2xl text-justify">{{ t('Mobile number portability system for a European mobile operator with') }} <b>{{ t('1.4 mln') }}  </b>
                 {{ t(' subscribers;') }}
                 </p>
             </div>
         </div>

         <div class="lg:flex items-center">
             <div class="my-5  ">
                 <img src="https://www.scnsoft.com/small-grey-icons/viber_billing.svg" alt="">
             </div>
             <div class="lg:ml-5">
                 <p class="text-xl lg:text-2xl text-justify">{{ t('Viber billing – a handy
                 self-care portal to help Viber users keep track of their calls and balances;

') }}</p>
             </div>
         </div>


         <div class="lg:flex items-center">
             <div class="my-5  ">
                 <img src="https://www.scnsoft.com/small-grey-icons/iptv.svg" alt="">
             </div>
             <div class="lg:ml-5">
                 <p class="text-xl lg:text-2xl text-justify">  {{ t('Hybrid mobile apps for video streaming services offered by') }}
                     <b>{{ t('T-Mobile, Orange') }}</b> {{ t('and other industry giants;') }}</p>
             </div>
         </div>

         <div class="lg:flex items-center">
             <div class="my-5  ">
                 <img src="https://www.scnsoft.com/small-grey-icons/penetration_testing.svg" alt="">
             </div>
             <div class="lg:ml-5">
                 <p class="text-xl lg:text-2xl text-justify">{{ t('Penetration testing for a mobile operator with') }} <b> {{ t('more than 5 mln') }}</b>
                    {{ t('subscribers and almost 2,000 employees.') }}
                 </p>
             </div>
         </div>

         <button type="button" class="bg-blue-700 text-white py-2 w-full uppercase lg:w-60 lg:ml-auto block mt-5"> {{ t('get a quote') }}
         </button>

         <h1 class="uppercase font-bold mt-11 text-2xl md:text-3xl">
           {{ t('SELECTED PROJECTS') }}
         </h1>
         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>


         <div class="w-full my-7">
             <div class="bg-gray-50 pb-6">
                 <div class="md:flex flex-row gap-0">
                     <div class="md:w-1/5">
                         <img src="https://www.scnsoft.com/boss/images/eaeaa2b3-73be-4810-ae16-8225e27b1ca3iptv_leader_small.jpg"
                              alt="" class="block mx-auto w-80 md:mx-0  ">
                     </div>
                     <div class="px-6 md:w-11/12">
                         <h1 class="uppercase font-bold mt-11 text-xl md:text-xl">
                             <a href="#">{{ t('Development of Mobile Video Streaming Apps for a TV Industry Leader') }}</a>
                         </h1>
                         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
                         <p class="text-2xl  text-justify">
                             {{ t('A success story of a long-term partnership (over 5.5 years) which has brought the Customer to become one of the leading TV apps providers in the world. Created with ScienceSofts help, the
                              companys star product – hybrid mobile apps – now power T-Mobile, Orange and other telecom industry leaders.
') }}

                         </p>
                         <p class=" mt-4 text-right ">
                             <a href="#" class="text-blue-700 font-semibold items-end">
                                 {{ t('LEARN MORE') }}
                                 <i class="fas fa-arrow-right ml-2"></i>
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="w-full my-7">
             <div class="bg-gray-50 pb-6">
                 <div class="md:flex flex-row gap-0">
                     <div class="md:w-1/5">
                         <img src="https://www.scnsoft.com/boss/images/92297251-aa2d-4fe5-8c54-359978fcf88cviber_app.png"
                              alt="" class="block mx-auto w-80 md:mx-0  ">
                     </div>
                     <div class="px-6 md:w-11/12">
                         <h1 class="uppercase font-bold mt-11 text-xl md:text-xl">
                             <a href="#"> {{ t('VIBER MOBILE APP DESIGN AND DEVELOPMENT') }}</a>
                         </h1>
                         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
                         <p class="text-2xl  text-justify">
                            {{ t('An ambitious start-up commissioned ScienceSoft to create an instant messaging and VoIP app which now boasts over 900 mln active users across the globe.

') }}

                         </p>
                         <p class=" mt-4 text-right ">
                             <a href="#" class="text-blue-700 font-semibold items-end">
                                 {{ t('LEARN MORE') }}
                                 <i class="fas fa-arrow-right ml-2"></i>
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="w-full my-7">
             <div class="bg-gray-50 pb-6">
                 <div class="md:flex flex-row gap-0">
                     <div class="md:w-1/5">
                         <img src="https://www.scnsoft.com/boss/images/4c397a43-71f1-4e51-85df-9bc4c7623d11viber_push_to_talk.png"
                              alt="" class="block mx-auto w-80 md:mx-0  ">
                     </div>
                     <div class="px-6 md:w-11/12">
                         <h1 class="uppercase font-bold mt-11 text-xl md:text-xl">
                             <a href="#">  {{ t('DEVELOPMENT OF PUSH-TO-TALK FEATURE FOR VIBER MOBILE APP') }}</a>
                         </h1>
                         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
                         <p class="text-2xl  text-justify">
                           {{ t('A backend service for a popular messenger app with over 900 mln users to process and store Push-To-Talk PTT messages, which ensures smooth user experience and the fastest possible data transfer.

') }}
                         </p>
                         <p class=" mt-4 text-right ">
                             <a href="#" class="text-blue-700 font-semibold items-end">
                                   {{ t('LEARN MORE') }}
                                 <i class="fas fa-arrow-right ml-2"></i>
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="w-full my-7">
             <div class="bg-gray-50 pb-6">
                 <div class="md:flex flex-row gap-0">
                     <div class="md:w-1/5">
                         <img src="https://www.scnsoft.com/boss/images/d6ca43e2-fea3-40a7-8981-b335be6b8063big-data-management-solution-for-the-iot-small.jpg"
                              alt="" class="block mx-auto w-80 md:mx-0  ">
                     </div>
                     <div class="px-6 md:w-11/12">
                         <h1 class="uppercase font-bold mt-11 text-xl md:text-xl">
                             <a href="#">  {{ t('DEVELOPMENT OF A BIG DATA SOLUTION FOR IOT PET TRCKERS') }}
                             </a>
                         </h1>
                         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
                         <p class="text-2xl  text-justify">
                             {{ t('To support a long-term customer in a new service launch, ScienceSoft delivered a scalable IoT data management solution that allowed processing 30,000+ events per second from 1 million devices.

') }}

                         </p>
                         <p class=" mt-4 text-right ">
                             <a href="#" class="text-blue-700 font-semibold items-end">
                                {{ t('LEARN MORE') }}
                                 <i class="fas fa-arrow-right ml-2"></i>
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="w-full mb-7">
             <div class="bg-gray-50 pb-6">
                 <div class="md:flex flex-row gap-0">
                     <div class="md:w-1/5">
                         <img src="https://www.scnsoft.com/boss/images/45d625c5-318c-4f3a-afb3-6ba4450f76f8data_analytics_platform_for_a_us_telecom_small.jpg"
                              alt="" class="block mx-auto w-80 md:mx-0  ">
                     </div>
                     <div class="px-6 md:w-11/12">
                         <h1 class="uppercase font-bold mt-11 text-xl md:text-xl">
                             <a href="#"> {{ t('IMPLEMENTATION OF A DATA ANALYTICS PLATFORM FOR A TELECOM COMPANY') }}
                             </a>
                         </h1>
                         <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
                         <p class="text-2xl  text-justify">
                           {{ t('ScienceSoft’s big data consulting team developed a data analytics platform for a Texas-based telecom company. A technology stack with Apache Kafka and Amazon Redshift at the core enabled insightful regular and ad-hoc reporting, as well as forecasting.

') }}


                         </p>
                         <p class=" mt-4 text-right ">
                             <a href="#" class="text-blue-700 font-semibold items-end">
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
