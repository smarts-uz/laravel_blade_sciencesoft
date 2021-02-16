@extends('front.layout')

@section('css')

@endsection

@section('main')

      <div class="mx-6 md:mx-16 lg:mx-24 my-10">

        <h1 class="uppercase font-bold mt-10 text-2xl">
          {{ _trans("About ScienceSoft – Global IT Company")  }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/cover-pic-healthcare-it-consulting-4.svg">

      <h1 class="uppercase font-bold mt-10 text-2xl">
        {{ _trans("About ScienceSoft – Global IT Company")  }}
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

      <p class="my-5 text-lg">
        {{ _trans("We headquarter in McKinney, TX, US, have a European office in Vantaa,
         Finland and a delivery center in Minsk, Belarus. Having gained trust
         among companies operating in the Gulf region, we opened our Middle East
         office in the UAE in 2020.")  }}
      </p>
      {{-- content --}}

      <div class="flex justify-end my-4">
        <div class="uppercase bg-blue-700 text-white py-3 px-10">
          {{ _trans("Get a quote")  }}
        </div>
      </div>

        {{-- content --}}

        <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
          <div class="flex flex-col">
            <h1 class="text-xl font-bold">{{ _trans("For non-IT enterprises")  }}</h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
            <div class=" flex flex-wrap">
            <p class="text-gray-500 text-xl w-full lg:w-4/5">
              {{ _trans("To help you improve business performance, optimize customer
               service, and tap in digital transformation.")  }}
            </p>
            <div class="uppercase text-white bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center">{{ _trans("request a consultation")  }}</div>
          </div>
          </div>
        </div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
          {{ _trans("About ScienceSoft – Global IT Company")  }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
          <div class="flex flex-col md:flex-row items-center ">
            <div class="flex justify-center  w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
              <img class="w-64  top-0" src="https://www.scnsoft.com/boss/images/12fecd0e-697d-4793-be78-c950a790f5c5plm-platform.png" alt="">
            </div>
            <div class=" flex flex-col w-4/5 mb-10">
              <h1 class="text-3xl md:text-4xl font-bold">{{ _trans("Tailored pricing plan")  }}</h1>
              <hr class="w-12 border-yellow-600 text-gray-800 my-4">
              <p class=" text-gray-500 text-xl md:text-2xl">
                {{ _trans("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
                 requirements change
                 during our cooperation.")  }}
              </p>

            </div>
          </div>
          <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i class="fas fa-arrow-right ml-4"></i></a>
        </div>
      </div>

@endsection

@section('js')

@endsection
