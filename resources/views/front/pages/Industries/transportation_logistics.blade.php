@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
      <div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
          {{ _trans("Healthcare IT Consulting")  }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="{{ asset ('images/industries/transportation_logistics/transportation_1.svg')}}">
        <p class="my-5 text-lg">
          {{ _trans("Healthcare IT consulting services help healthcare organizations overcome limited or low-level healthcare IT expertise and support the effective implementation of digital healthcare initiatives.")  }}
        </p>
        <p class="my-5 text-lg">
          {{ _trans("ScienceSoft provides hospitals, clinics, practices, assisted living facilities, labs, and other healthcare organizations with healthcare IT consulting services to help them adopt complex digital initiatives, provide digital patient care, optimize internal processes, improve the IT infrastructure, and more.")  }}
        </p>
      </div>
      <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
        <div class="flex flex-col">
          <h1 class="text-xl font-bold">{{ _trans("Doubt Healthcare Digital Initiatives Will Pay Off?")  }}</h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <div class=" flex flex-wrap">
          <p class="text-gray-500 text-xl w-full lg:w-4/5">
            {{ _trans("ScienceSoft’s healthcare IT consultants help choose and adopt fitting healthcare solutions and ensure your IT landscape works effectively to support clinical processes and drive new digital healthcare initiatives.")  }}
          </p>
          <div class="uppercase text-white bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center">{{ _trans("request a consultation")  }}</div>
        </div>
        </div>
      </div>

  <div class="pt-12">
    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("WHY SCIENCESOFT?")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

                <div class="mt-8 flex">
                  <img class="w-1/5" src="{{ asset ('images/industries/transportation_logistics/why-ss.svg')}}" alt="">
                  <div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      {{ _trans("31 years in the IT market.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      {{ _trans("15 years in the healthcare IT industry.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      {{ _trans("ISO 13485:2016 and IEC 62304:2006 certifications.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      {{ _trans("Working experience with HIPAA and FDA regulations.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      {{ _trans("Working experience with healthcare standards (e.g., HL7, ICD-10, CPT, XDS/XDS-I).")  }}
                    </p>
                  </div>
                </div>
              </div>

              </div>



<!-- Muhammadali carusel qoshdi -->

<div class="swiper-container about-slide h-40">
        <div class="swiper-wrapper flex items-center">
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ebay.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/deloitte.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ford.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ibm.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/leo-burnett.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/nasa_1.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/nestle.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/tieto.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/viber.svg') }}" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>






              <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ _trans("HIGHLIGHTS OF HEALTHCARE IT CONSULTING SERVICES BY SCIENCESOFT")  }}
              </h1>
              <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
              <div class="flex justify-center flex-wrap">

              <div class="rounded-sm w-full lg:w-2/5 p-10  mt-8 border-2 transition-shadow hover:shadow-xl p-2 md:p-8">

                <div class="">
                  <div class="text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-16 h-16" src="{{ asset ('images/industries/transportation_logistics/star.svg')}}" alt="">
                  </div>
                  <div class="mt-4">
                    <h1 class="text-2xl md:text-3xl font-semibold">{{ _trans("Deep healthcare industry knowledge")  }}</h1>

                    <p class="mt-4 text-gray-500 text-lg md:text-xl">
                      {{ _trans("ScienceSoft’s healthcare IT team consists of highly qualified professionals with experience in the healthcare field and related domains, such as pharmaceutical, biotech, health insurance, and medical device industry.")  }}
                    </p>
                  </div>
                </div>
              </div>

              <div class="rounded-sm w-full lg:w-2/5 p-10 mx-4 mt-8 border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="">
                  <div class="  text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-16 h-16" src="{{ asset ('images/industries/transportation_logistics/star.svg')}}" alt="">
                  </div>
                  <div class="mt-4">
                    <h1 class="text-2xl md:text-3xl font-semibold">{{ _trans("Consulting and practical assistance")  }}</h1>

                    <p class="mt-4 text-gray-500 text-lg md:text-xl">
                      {{ _trans("ScienceSoft combines IT consulting with end-to-end IT services for the healthcare industry: business analysis, software implementation, continuous support, managed services.")  }}
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <h1 class="uppercase font-bold mt-10 text-2xl">
              {{ _trans("OUR SELECTED HEALTHCARE PROJECTS")  }}
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content carousel --}}

  <h1 class="uppercase font-bold mt-10 text-2xl">
    {{ _trans("HEALTHCARE IT CONSULTING SERVICES WE OFFER")  }}
  </h1>
  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content  --}}

  <h1 class="uppercase font-bold mt-10 text-2xl">
    {{ _trans("BENEFIT FROM HIGH-QUALITY HEALTHCARE IT CONSULTING SERVICES!")  }}
  </h1>
  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content --}}

  <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
    <div class="flex flex-col">
      <h1 class="text-xl font-bold">{{ _trans("Let IT Make Your Healthcare Services Better")  }}</h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
      <div class=" flex flex-wrap">
      <p class="text-gray-500 text-xl w-full lg:w-3/5">
        {{ _trans("ScienceSoft's healthcare IT team will advise you on how to achieve your goals as fast as possible with healthcare software.")  }}
      </p>
      <div class="uppercase text-white bg-blue-700 py-2 px-4  flex items-center  text-center">{{ _trans("request a consultation")  }}</div>
    </div>
    </div>
  </div>

</div>

@endsection

@section('js')

@endsection
