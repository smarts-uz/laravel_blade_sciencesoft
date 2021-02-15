@extends('front.layout')

@section('css')

@endsection

@section('main')

      <div class="mx-6 md:mx-16 lg:mx-24 my-10">

        <h1 class="uppercase font-bold mt-10 text-2xl">
          {{ @translate_lang("About ScienceSoft – Global IT Company")  }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/cover-pic-healthcare-it-consulting-4.svg">
        <p class="my-5 text-lg">
          {{ @translate_lang("Founded in 1989, ScienceSoft is a provider of IT consulting and software
           development services. Having started as a small AI product company, we
           switched to IT services in 2002 and ever since we have helped non-IT
           organizations and software product companies improve business
           performance and quickly win new customers.")  }}
        </p>
        <p class="my-5 text-lg">
          {{ @translate_lang("With over 31 years in Information Technology, we have built up expertise
           in CRM, ERP, Ecommerce, Data Analytics, Information Security, DMS, and
           other areas and conquered such innovative fields as Artificial
           Intelligence and Machine Learning, Big Data, Internet of Things,
           Computer Vision, and Augmented and Virtual Reality.")  }}
        </p>
        <p class="my-5 text-lg">
          {{ @translate_lang("We headquarter in McKinney, TX, US, have a European office in Vantaa,
           Finland and a delivery center in Minsk, Belarus. Having gained trust
           among companies operating in the Gulf region, we opened our Middle East
           office in the UAE in 2020.")  }}
        </p>


      <h1 class="uppercase font-bold mt-10 text-2xl">
        {{ @translate_lang("About ScienceSoft – Global IT Company")  }}
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

      {{-- content --}}
      <div class="flex justify-end my-4">
        <div class="uppercase bg-blue-700 text-white py-3 px-10">
          {{ @translate_lang("Get a quote")  }}
        </div>
      </div>

      <h1 class="uppercase font-bold mt-10 text-2xl">
        {{ @translate_lang("About ScienceSoft – Global IT Company")  }}
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

      {{-- content --}}

      <h1 class="uppercase font-bold mt-10 text-2xl">
        {{ @translate_lang("About ScienceSoft – Global IT Company")  }}
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

      {{-- content --}}
      <div class="flex justify-end my-4">
        <div class="uppercase bg-blue-700 text-white py-3 px-10">
          {{ @translate_lang("Get a quote")  }}
        </div>
      </div>

      <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
        <div class="flex flex-col md:flex-row items-center ">
          <div class="flex justify-center  w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-64  top-0" src="https://www.scnsoft.com/boss/images/12fecd0e-697d-4793-be78-c950a790f5c5plm-platform.png" alt="">
          </div>
          <div class=" flex flex-col w-4/5 mb-10">
            <h1 class="text-3xl md:text-4xl font-bold">{{ @translate_lang("Tailored pricing plan")  }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <p class=" text-gray-500 text-xl md:text-2xl">
              {{ @translate_lang("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
               requirements change
               during our cooperation.")  }}
            </p>

          </div>
        </div>
        <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ @translate_lang("Learn More")  }}<i class="fas fa-arrow-right ml-4"></i></a>
      </div>
    </div>

@endsection

@section('js')

@endsection
