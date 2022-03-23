@extends('front.layout')

@section('css')

@endsection

@section('main')
<div class="mx-6 md:mx-16 lg:mx-24 my-10">
  <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ t("Customer Experience Consulting")  }}
  </h1>
  <hr class="w-12 mt-5 text-yellow-400 h-4" />
  <img src="https://www.scnsoft.com/ecommerce/cx/cover-pic-cx-05.svg" alt="">
  <p class="my-5 text-lg">
      {{ t("Professional customer experience consulting services from Smart Software
       encompass fostering customer-first attitude, as well as designing and implementing
       a CX transformation strategy within your business.")  }}
  </p>
  <strong>{{ t("The investment now
    may pay off soon enough along with tangible revenue growth:")}}</strong>
  <div>
      <div  class="flex flex-wrap justify-between">
        <li class="border-l  list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.5x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ t("year-over-year revenue growth")  }}</div>
        </li>
        <li class="border-l   list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.9x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ t("higher average order value")  }}</div>
        </li>
        <li class="border-l list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.8x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ t("increased repeat purchase rate")  }}</div>
        </li>
      </div>
      <div class="flex flex-wrap justify-between lg:mt-12">
        <li class="border-l  list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.6x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ t("higher brand awareness")  }}</div>
        </li>
        <li class="border-l   list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.4x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ t("higher customer retention")  }}</div>
        </li>
        <li class="border-l  list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.6x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ t("higher customer advocacy")  }}</div>
        </li>
      </div>
      </div>
  <i class="mt-12"> * The business impact of effective customer experience management according to <a class="hover:text-blue-700 underline" href="/">Forrester</a></i>

  <div class="mb-4 mt-8  p-4 border hover:shadow-2xl">
    <h1 class="  pt-3 font-bold text-2xl">Build a Web Portal that is Easy for Users and<br> Effective for Business</h1><br>
    <hr class="w-10 border-b-3 border-yellow-500  mb-10 ml-4"/>
    <p class="leading-8 pl-6 text-2xl text-gray-600 pr-4 pb-8">Smart Software’s team is ready to deliver the most challenging portal<br> projects to help your leverage streamlined, transparent and consistent<br> web communication with your clients, partners, employees, or<br> community.
    </p>
    <button class="mt-4 ml-6 mb-24 bg-blue-700">
      <p class="p-3 text-lg text-white">DISCUSS MY WEB PORTAL</p>
    </button>
 </div>
    <h1 class="uppercase font-bold mt-10 text-2xl">
        {{ t("IS THERE A REASON WHY YOU SHY AWAY FROM CX OPTIMIZATION?")  }}
    </h1>
    <hr class="w-12 mt-5 text-yellow-400 h-4" />
    <p class="my-5 text-lg">
        {{ t("Most challenges of customer experience management are concealed
         in thought-patterns and business processes conserved within a company,
          rather than in the low awareness of customer experience best practices.
        We have summarized our action plan to address your most frequent concerns.")  }}
    </p>
    <div class="container">
        <div class="grid grid-cols-2">
            <div class="block border p-8 pt-12">
                <img class="w-32" src="https://www.scnsoft.com/ecommerce/cx/reasonable-money.svg" alt="">
                <p class="text-xl text-sm text-bold mt-8">CX optimization may start with reasonable money</p>
                <p class="loading-8 mt-8">
                    You don’t need heavy up-front investments to move towards better experience
                    for your customers. Applying an agile approach, we can prioritize the areas
                     to improve and start where a quick ROI is envisaged. This will give you
                     financial resources and a
                    powerful boost to continue the transformation into an experience-led business.
                </p>
            </div>
        </div>
    </div>
</div>






@endsection


@section('js')

@endsection
