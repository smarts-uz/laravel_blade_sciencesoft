@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
            <h1 class="font-bold mt-10 text-4xl">{{ _trans("CRM Services to Maximize Customer Relationship Management Output")  }}</h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
            <img src="https://www.scnsoft.com/crm/crm-services/cover-pic-crm-services-3.svg" alt="">
            <p class="pt-5">
              {{ _trans("CRM services are aimed to automate marketing, sales and customer
              service, and range from CRM consulting and implementation to testing and
              support of a CRM solution.")  }}
            </p>
            <p class="pt-4">
              {{ _trans("Having 12 years of experience in CRM services, ScienceSoft helps
              businesses reduce their marketing, sales and customer service costs with all-round CRM
              implementation and regain lost business opportunities through evolution of the existing CRM.")  }}
            </p>
        <div class="rounded-sm border-2 border-white shadow-2xl  transition-shadow  mr-20 p-6">
          <div class="flex flex-col">
            <h1 class="text-xl font-bold">{{ _trans("CRM Efforts Don’t Pay Off Enough?")  }}</h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <div class="flex flex-wrap">
            <p class="text-gray-400 text-md w-full lg:w-4/5">
              {{ _trans("Decrease the costs and improve the output of customer acquisition and retention with ScienceSoft’s CRM services.")  }}
            </p>
            <button class="text-white bg-blue-700  uppercase mt-8 lg:w-2/1 p-2 block ml-auto mt-4">{{ _trans("Request CRM Services")  }}</button>
          </div>
          </div>
        </div>
          <h1 class="font-bold mt-10 text-2xl">{{ _trans("WHY TURN TO SCIENCESOFT")  }}</h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <ul class="list-disc">
            <li class="mt-2">31 {{ _trans("years in IT.")  }}</li>
            <li class="mt-2">12 {{ _trans("years in")  }} <a href="">{{ _trans("CRM consulting")  }}</a> {{ _trans("and implementation")  }}</li>
            <li class="mt-2">700 {{ _trans("professionals on board")  }}</li>
            <li class="mt-2">{{ _trans("Partnerships with leading CRM providers:")  }} <a href="#">{{ _trans("Microsoft")  }}</a> {{ _trans("and")  }} <a href="#">{{ _trans("Salesforce.")  }}</a></li>
            <li class="mt-2">{{ _trans("Industry expertise in retail and wholesale, professional services, manufacturing, healthcare, banking, telecoms, etc.")  }}</li>
          </ul>

          <!-- test -->
          <div class="">
            <div class="flex flex-wrap justify-between">
              <li class="border-l border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ _trans("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
              <li class="border-l  border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ _trans("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
              <li class="border-l border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ _trans("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
              <li class="border-l  border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ _trans("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
            </div>
          </div>
          <!-- test -->
        </div>

@endsection

@section('js')

@endsection
