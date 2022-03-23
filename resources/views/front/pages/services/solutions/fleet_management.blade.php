@extends('front.layout')

@section('css')

@endsection

@section('main')
<div class="my-10">
    <div class="text-2xl md:text-4xl font-bold mt-6">
        {{ t('Fleet Management Software Development ') }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        <img src="https://www.scnsoft.com/fleet-management/cover-pic-fleet-management-development-2.svg">
        <div>
            <p class="font-normal text-lg leading-loose mt-10">
                {{ t('Fleet management software provides visibility into vehicles’ locations and
                    various operational parameters, including vehicles’ conditions and fuel consumption patterns,
                    and allows gaining insight into drivers’ behavior. This data lays the groundwork for optimizing vehicle
                    maintenance and operating costs and improving driver safety.') }}
            </p>
            <p class="font-normal text-lg leading-loose mt-10">
                {{ t('ScienceSoft delivers fleet management applications, helping fleet owners') }}
                <span class="text-gray-800 font-bold">{{ t('reduce operational costs') }}</span>
                {{ t('and') }}
                <span class="text-gray-800 font-bold">{{ t('improve the quality of transportation services') }}</span>
                {{ t(', assisting fleet management services providers to ') }}
                <span class="text-gray-800 font-bold">{{ t('win and retain customers') }}</span>
                {{ t(' with tailored functionality,and allowing hardware manufacturers ') }}
                <span class="text-gray-800 font-bold">{{ t('gain competitive edge ') }}</span>
                {{ t(' by extending their offer to accompanying software.') }}
            </p>

            <p class="font-normal text-lg leading-loose mt-10">
                {{ t('Before you go further, do a quick check and see whether fleet management software can be of help to you.') }}
            </p>
        </div>
    </div>
    <div class="flex flex-wrap gap-4 md:justify-around justify-center">

 <div class="border pb-6 hover:shadow-md w-96 rounded">
 <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 ml-4 lg:text-3xl">
            {{ t('Fleet owners') }}
            </h1>
            <hr class="w-12 ml-4 bg-yellow-500 h-1 mb-6"/>
    <div class="px-4">
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p> {{ t('Troubled compliance of fleet operations with federal and industry-specific fleet management regulations.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('Need for higher operational efficiency due to fluctuating fuel prices and low margin.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('Difficulty in planning vehicle purchasing and low visibility over fleet operations and maintenance expenses.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('Financial losses due to frequent accidents and inability to gurantee driver safety.') }}</p>
            </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-xl">
            {{ t('Check what you get with a custom fleet management solution') }}
        </h3>
    </div>
 </div>

 <div class="border pb-6 hover:shadow-md w-96 rounded">
 <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 ml-4 lg:text-3xl">
            {{ t('Fleet management service providers') }}
            </h1>
            <hr class="w-12 ml-4 bg-yellow-500 h-1 mb-6"/>
    <div class="px-4">
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('Expenses on your ready-made product grow together with your customer base.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('Unmet customer needs due to a problematic implementation of custom functionality in a ready-made product.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('Low user satisfaction due to a complex interface and issues at the code level.') }}</p>
            </div>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4 mt-20 lg:text-xl">
            {{ t('Check what you can get with your own fleet management product') }}
        </h3>
    </div>

</div>

</div>
<div class="text-2xl md:text-4xl font-bold mt-6">
    {{ t('WHAT YOU GET WITH DEDICATED FLEET MANAGEMENT SOFTWARE') }}
</div>
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    <p class="font-normal text-lg leading-loose mt-10">
            {{ t('We pack your fleet management application with a range of functional blocks
            combined according to your needs. The functionality we implement includes, but is not limited to:') }}
    </p>
    <img src="https://www.scnsoft.com/fleet-management/features.svg">
    <p class="font-normal text-lg leading-loose mt-10">
            {{ t('We pack your fleet management application with a range of functional blocks
            combined according to your needs. The functionality we implement includes, but is not limited to:') }}
    </p>
    <img src="https://www.scnsoft.com/fleet-management/vehicles.svg" alt="">
    <div class="text-2xl md:text-4xl font-bold mt-6">
    {{ t('WHY Smart Software?') }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>
    <div style="margin: 0 4rem" class="swiper-container main-slide swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper flex items-center" id="swiper-wrapper-424aebbb4ac8a93c" aria-live="off" style="transform: translate3d(-1313px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide flex justify-center items-center p-14" role="group" aria-label="1 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/clutch-top-it-services-firms.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14" role="group" aria-label="2 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/softwareworld-top-app-development-companies.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14" role="group" aria-label="3 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/microsoft-partner-statuses-7.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14" role="group" aria-label="4 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/aws-apn-select-consulting-partner.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14 swiper-slide-prev" role="group" aria-label="5 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/oracle-silver-partner-small-logo.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14 swiper-slide-active" role="group" aria-label="6 / 13" style="width: 212.6px; margin-right: 50px;">
                           <img src="https://www.scnsoft.com/partners/sw-development/clutch-top-it-services-firms.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14 swiper-slide-next" role="group" aria-label="7 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/softwareworld-top-app-development-companies.svg ">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14" role="group" aria-label="8 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/microsoft-partner-statuses-7.svg">
                        </div>
                        <div class="swiper-slide flex justify-center items-center p-14" role="group" aria-label="9 / 13" style="width: 212.6px; margin-right: 50px;">
                            <img src="https://www.scnsoft.com/partners/sw-development/oracle-silver-partner-small-logo.svg">
                        </div>
                </div>
        </div>
    <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('13 years in IT.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('15 years in fleet management development.') }}</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('8 Microsoft Gold competencies, including
                Application Development, Application Integration, Data Analytics, Data Platform, and Cloud Platform') }}.</p>
            </div>
        </div>
        <div class="flex mb-2">
            <div class="w-2 h-2 mt-2 bg-blue-500 mr-3"></div>
            <div class="w-11/12">
                <p>{{ t('AWS Select Consulting Partner, Oracle Partner Network member.') }}</p>
            </div>
        </div>
        <div class="rounded-sm bg-gray-50 relative mt-10 mb-10 transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center ">
              <div class="flex w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="w-64" src="https://www.scnsoft.com/fleet-management/serge--pukhaev-2.png" alt="">
              </div>
              <div class=" flex flex-col w-4/5 mb-10">
              <div x-data="{ open: false }">
                <h1 class="text-xl md:text-2xl font-bold">{{ t("FAQ on Fleet Management Software")  }}</h1>
                <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                <p class=" text-gray-500 text-lg md:text-xl italic">
                  {{ t("Answered by Serge Pukhaev, Head of Fleet Management Practice at ScienceSoft")  }}
                </p>
                <h1 class="text-xl md:text-2xl font-bold mt-5">{{ t("When can I get a complete fleet management application?")  }}</h1>
                <p class=" text-gray-500 text-lg md:text-xl mt-5">
                  {{ t("We rely on Agile in our fleet management software development projects and deliver a minimum viable product (MVP) or a first application version in 2 to 3 months...")  }}
                </p>
                <p class="text-blue-500 cursor-pointer hover:underline mt-3 text-xs" @click="open = true">{{ t('CHECK OUT THE WHOLE ANSWER') }}</p>
                <div x-show="open" @click.away="open = false">
                <p class=" text-gray-500 text-lg md:text-xl mt-12">
                  {{ t("You may start getting ROI with the MVP while we continue to evolve software by adding new functionality to meet your arising needs so that you get a complete fleet management application within 6 to 8 months.")  }}
                </p>
                <h1 class="text-xl md:text-2xl font-bold mt-5">{{ t("Developing a fleet management application is an investment-rich initiative. Will our investments pay off?")  }}</h1>

                <p class=" text-gray-500 text-lg md:text-xl mt-5">
                  {{ t("With a custom fleet management application, fleet management service providers increase
                  revenue and get quick ROI due to wider opportunities for tailoring the functionality they offer to the
                  needs of varied customer segments with easier and cheaper customizations. And fleet owners ensure the pay-off
                  of their investments due to optimized operating
                  costs, lower fuel spending, and acquiring more loyal customers due to a higher quality of transportation services.")  }}
                </p>
                <p class="text-blue-500 cursor-pointer hover:underline  mt-3 text-xs" @click="open = false">{{ t('HIDE') }}</p>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="p-6 shadow-xl lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
            {{ t('Doubt Development Will Pay Off?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-1 mb-6"/>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
            {{ t(' ScienceSoft is ready to calculate ROI for each functional module of the application you want
            to develop and, if relevant, compare its TCO with the TCO of your current solution.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                {{ t('REQUEST A CALCULATION') }}
                </div>
            </a>

        </div>
    </div>
    <div class="text-2xl md:text-4xl font-bold mt-6">
    {{ t('OUR HALLMARK PROJECTS') }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>
    <div class="splide">
      <div class="splide__track">
        <ul class="splide__list">

          <li class="splide__slide">
            <div
              class="grid gap-2 md:grid-cols-2 grid-cols-1 items-center  border-2"
            >
              <div  class="p-16">
                <img
                src="https://www.scnsoft.com/fleet-management/car-electronics-monitoring-tool.jpg"
                  alt=""
                />
              </div>
              <div class=" pr-2 pl-2 md:pr-16" >
                <p class="text-xl font-bold">
                {{ t('Development of a Car Electronics Management Application') }}
                </p>
                <div>
                  <p class=" font-normal leading-7 mb-16 text-lg">
                  {{ t('We empowered the Customer with a client-server solution
                  with an interactive web interface and feature-rich mobile
                  applications for iOS and Android, which enable user-to-vehicle
                  communication and allow vehicle owners to track a vehicle’s location,
                  start and stop the engine, open and close the doors, turn on and turn
                  off the light, and perform other tasks remotely.') }}
                  </p>
                </div>
                <div class="text-center ml-32">
                  <a class="text-green-700  font-bold" href="#"
                    > {{ t('PROJECT DETAILS') }}<i class=" fas fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </li>


          <li class="splide__slide">
            <div
              class="grid gap-2 md:grid-cols-2 grid-cols-1 items-center  border-2"
            >
              <div  class="p-16">
                <img
                src="https://www.scnsoft.com/fleet-management/fleet-maintenance-sw.jpg"
                  alt=""
                />
              </div>
              <div  class="pr-2 pl-2 md:pr-16">
                <p class="text-xl font-bold">
                {{ t('Development of Fleet Maintenance Software for a Provider of IT Solutions for the Mining Industry') }}
                </p>
                <div>
                  <p class=" font-normal leading-7 mb-16 text-lg">
                  {{ t('ScienceSoft delivered a web and a mobile application that
                   simplifies the process of filling out equipment inspection
                   checklists, allows for monitoring equipment availability via
                   an intuitive dashboard, and automatically generates maintenance
                   notifications.') }}
                  </p>
                </div>
                <div class="text-center ml-32">
                  <a class="text-green-700  font-bold" href="#"
                    >{{ t('PROJECT DETAILS') }}<i class=" fas fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </li>

          <li class="splide__slide">
            <div
              class="grid gap-2 md:grid-cols-2 grid-cols-1 items-center  border-2"
            >
              <div  class="p-16">
                <img
                src="https://www.scnsoft.com/fleet-management/mobile-fleet-management-solution.jpg"
                  alt=""
                />
              </div>
              <div  class="pr-2 pl-2 md:pr-16">
                <p class="text-xl font-bold">
                {{ t('Mobile Fleet Management Product Development') }}
                </p>
                <div>
                  <p class=" font-normal leading-7 mb-16 text-lg">
                  {{ t('We empowered a leading provider of fleet management
                  solutions with a product geared towards logistics companies.
                  The software product comprises vehicle tracking, order delivery
                  monitoring, and invoicing functionality and provides for reliable
                  integration with the logistics companies’ ERPs.') }}
                  </p>
                </div>
                <div class="text-center ml-32">
                  <a class="text-green-700  font-bold" href="#"
                    >{{ t('PROJECT DETAILS') }}<i class=" fas fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </li>
          <li class="splide__slide">
            <div
              class="grid gap-2 md:grid-cols-2 grid-cols-1 items-center  border-2"
            >
              <div  class="p-16">
                <img
                src="https://www.scnsoft.com/fleet-management/refrigerator.jpg"
                  alt=""
                />
              </div>
              <div  class="pr-2 pl-2 md:pr-16">
                <p class="text-xl font-bold">
                {{ t('Developing of a Cargo Condition Monitoring Application') }}
                </p>
                <div>
                  <p class=" font-normal leading-7 mb-16 text-lg">
                  {{ t('We provided a logistics company with an application that allows monitoring the temperature and humidity of cargo in real time,
                  generating delivery condition violation alerts, and has advanced reporting capabilities.') }}
                  </p>
                </div>
                <div class="text-center ml-32">
                  <a class="text-green-700  font-bold" href="#"
                    >{{ t('PROJECT DETAILS') }}<i class=" fas fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </li>



        </ul>
      </div>
    </div>






    <div class="text-2xl md:text-4xl font-bold mt-6">
    {{ t('CHOOSE YOUR SERVICE OPTION') }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>

    <div class="grid md:grid-cols-3 gap-4">

        <div class="border relative pb-28 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ t('Fleet management application consulting') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ t('For you to build a robust and scalable fleet management application, we:') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Analyze your needs or elaborate on your idea.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Review application architecture or design one from scratch.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Advise on an optimal tech stack.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Audit or design a thought-out user experience.') }}</span>
                    </li>
                </ul>

                <a href="#"
                   class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ t('REQUEST CONSULTING') }}
                </a>

            </div>


        </div>
        <div class="border relative pb-28 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ t('End-to-end fleet management application development') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ t('For you to get an application ready to bring ROI right away, we unfold the development process:') }}</p>

                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Business analysis.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('User experience design.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Architecture and tracking algorithms design.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Application development.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Testing and QA.') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2">
                        <span class="text-gray-600">{{ t('Support and evolution.') }}</span>
                    </li>
                </ul>

                <a href="#"
                   class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ t('REQUEST CONSULTING') }}
                </a>

            </div>


        </div>
        <div class="border relative pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ t('Fleet management application consulting') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ t('We audit the application you currently use, design and implement new functional modules so that you get an opportunity to generate new value with legacy software.') }}</p>
                <a href="#"
                   class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                    {{ t('REQUEST CONSULTING') }}
                </a>

            </div>


        </div>
    </div>
    <div class="text-2xl md:text-4xl font-bold mt-6">
    {{ t('WHY YOU SHOULDN’T POSTPONE DEVELOPING YOUR FLEET MANAGEMENT SYSTEM') }}
    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>
    <p class="mb-4 text-lg text-gray-600">{{ t('Deciding to hold off the development of your fleet management application, you miss the benefits promised by custom fleet management software, namely:') }}</p>
    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('15%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('reduction in fuel expenses and operational costs')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('lower risk of accidents')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('25%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher driver retention rate')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher customer satisfaction rate')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('25%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('increase in revenue')}}
                </p>
            </div>
        </div>
    </div>




    <div class="swiper-container big-slide md:hidden">
    <div class="swiper-wrapper">
        <div class="swiper-slide text-center  pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('15%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('reduction in fuel expenses and operational costs')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('30%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('lower risk of accidents')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('25%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher driver retention rate')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('50%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher customer satisfaction rate')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('25%')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('increase in revenue')}}
                </p>
            </div>
        </div>

    </div>
    </div>
    <p class="mb-4 text-lg text-gray-600">{{ t('Sources: Verizon, 2020 Fleet Tracking Trends Report.') }}</p>
    <!-- CODES GOES HERE -->
    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-4 lg:text-3xl">
                {{ t('Start Working on Your Application Now!') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t('Turn to ScienceSoft’s fleet management team now, and start enjoying the operational and business benefits promised by custom fleet management software!') }}
            </p>
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:w-4/12 px-2 py-4  hover:bg-blue-800">
                    {{ t('GET MY APPLICATION') }}
                </div>
            </a>
        </div>

        <div class="lg:w-2/6 m-auto">
           <img src="https://www.scnsoft.com/fleet-management/contact-us.svg" alt="">

        </div>
    </div>



</div>

@endsection


@section('js')


@endsection
