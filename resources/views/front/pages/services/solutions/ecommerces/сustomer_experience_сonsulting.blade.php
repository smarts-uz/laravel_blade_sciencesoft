@extends('front.layout')

@section('css')

@endsection

@section('main')
<div class="mx-6 md:mx-16 lg:mx-24 my-10">
  <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Customer Experience Consulting")  }}
  </h1>
  <hr class="w-12 mt-5 text-yellow-400 h-4" />
  <img src="https://www.scnsoft.com/ecommerce/cx/cover-pic-cx-05.svg" alt="">
  <p class="my-5 text-lg">
      {{ _trans("Professional customer experience consulting services from TeamPRO
       encompass fostering customer-first attitude, as well as designing and implementing
       a CX transformation strategy within your business.")  }}
  </p>
  <strong>{{ _trans("The investment now
    may pay off soon enough along with tangible revenue growth:")}}</strong>
  <div>
      <div  class="flex flex-wrap justify-between">
        <li class="border-l  list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.5x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ _trans("year-over-year revenue growth")  }}</div>
        </li>
        <li class="border-l   list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.9x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ _trans("higher average order value")  }}</div>
        </li>
        <li class="border-l list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.8x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ _trans("increased repeat purchase rate")  }}</div>
        </li>
      </div>
      <div class="flex flex-wrap justify-between lg:mt-12">
        <li class="border-l  list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.6x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ _trans("higher brand awareness")  }}</div>
        </li>
        <li class="border-l   list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.4x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ _trans("higher customer retention")  }}</div>
        </li>
        <li class="border-l  list-none p-4 lg:w-1/5 md:w-1/2 w-full">
          <div>
            <span class="text-left text-4xl font-semibold	 text-blue-700">1.6x</span>
          </div>
          <div class="leading-4  text-gray-700 leading-6">{{ _trans("higher customer advocacy")  }}</div>
        </li>
      </div>
      </div>
  <i class="mt-12"> * The business impact of effective customer experience management according to <a class="hover:text-blue-700 underline" href="/">Forrester</a></i>

  <div class=" mb-4 mt-8  p-4 border hover:shadow-2xl">
    <h1 class="  pt-3 font-bold text-2xl">Build a Web Portal that is Easy for Users and<br> Effective for Business</h1><br>
    <hr class="w-10 border-b-3 border-yellow-500  mb-10 ml-4"/>
    <p class="leading-8 pl-6 text-2xl text-gray-600 pr-4 pb-8">TeamPRO’s team is ready to deliver the most challenging portal<br> projects to help your leverage streamlined, transparent and consistent<br> web communication with your clients, partners, employees, or<br> community.
    </p>
    <button class="mt-4 ml-6 mb-24 bg-blue-700">
      <p class="p-3 text-lg text-white">DISCUSS MY WEB PORTAL</p>
    </button>

 </div>
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
