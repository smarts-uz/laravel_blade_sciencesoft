@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
            <h1 class="font-bold mt-10 text-4xl">{{ @translate_lang("CRM Services to Maximize Customer Relationship Management Output")  }}</h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
            <img src="https://www.scnsoft.com/crm/crm-services/cover-pic-crm-services-3.svg" alt="">
            <p class="pt-5">
              {{ @translate_lang("CRM services are aimed to automate marketing, sales and customer
              service, and range from CRM consulting and implementation to testing and
              support of a CRM solution.")  }}
            </p>
            <p class="pt-4">
              {{ @translate_lang("Having 12 years of experience in CRM services, ScienceSoft helps
              businesses reduce their marketing, sales and customer service costs with all-round CRM
              implementation and regain lost business opportunities through evolution of the existing CRM.")  }}
            </p>
        <div class="rounded-sm border-2 border-white shadow-2xl  transition-shadow  mr-20 p-6">
          <div class="flex flex-col">
            <h1 class="text-xl font-bold">{{ @translate_lang("CRM Efforts Don’t Pay Off Enough?")  }}</h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <div class="flex flex-wrap">
            <p class="text-gray-400 text-md w-full lg:w-4/5">
              {{ @translate_lang("Decrease the costs and improve the output of customer acquisition and retention with ScienceSoft’s CRM services.")  }}
            </p>
            <button class="text-white bg-blue-700  uppercase mt-8 lg:w-2/1 p-2 block ml-auto mt-4">{{ @translate_lang("Request CRM Services")  }}</button>
          </div>
          </div>
        </div>
          <h1 class="font-bold mt-10 text-2xl">{{ @translate_lang("WHY TURN TO SCIENCESOFT")  }}</h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <ul class="list-disc">
            <li class="mt-2">31 {{ @translate_lang("years in IT.")  }}</li>
            <li class="mt-2">12 {{ @translate_lang("years in")  }} <a href="">{{ @translate_lang("CRM consulting")  }}</a> {{ @translate_lang("and implementation")  }}</li>
            <li class="mt-2">700 {{ @translate_lang("professionals on board")  }}</li>
            <li class="mt-2">{{ @translate_lang("Partnerships with leading CRM providers:")  }} <a href="#">{{ @translate_lang("Microsoft")  }}</a> {{ @translate_lang("and")  }} <a href="#">{{ @translate_lang("Salesforce.")  }}</a></li>
            <li class="mt-2">{{ @translate_lang("Industry expertise in retail and wholesale, professional services, manufacturing, healthcare, banking, telecoms, etc.")  }}</li>
          </ul>

          <!-- test -->
          <div class="">
            <div class="flex flex-wrap justify-between">
              <li class="border-l border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ @translate_lang("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
              <li class="border-l  border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ @translate_lang("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
              <li class="border-l border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ @translate_lang("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
              <li class="border-l  border-r list-none p-4 lg:w-1/5 md:w-1/2 w-full">
                <div>
                  <span class="text-left text-4xl font-semibold	 text-blue-700">-70%</span>
                </div>
                <div class="leading-4  text-gray-700 leading-6">{{ @translate_lang("manual effort across sales, marketing, and customer service")  }}</div>
              </li>
            </div>
          </div>
          <!-- test -->
        </div>

@endsection

@section('js')

@endsection
