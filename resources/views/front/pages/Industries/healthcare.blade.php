@extends('front.layout')

@section('css')

@endsection

@section('main')

      <div class="mx-6 md:mx-16 lg:mx-24 my-10">

        <h1 class="uppercase font-bold mt-10 text-2xl">
          {{ _trans("Healthcare IT Consulting")  }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="{{ asset ('/images/industries/healthcare/cover-pic-healthcare-it-consulting-4.svg')}}">
        <p class="my-5 text-lg">
          {{ _trans("Healthcare IT consulting services help healthcare organizations overcome limited or low-level healthcare IT expertise and support the effective implementation of digital healthcare initiatives.")  }}
        </p>
        <p class="my-5 text-lg">
          {{ _trans("ScienceSoft provides hospitals, clinics, practices, assisted living facilities, labs, and other healthcare organizations with healthcare IT consulting services to help them adopt complex digital initiatives, provide digital patient care, optimize internal processes, improve the IT infrastructure, and more.")  }}
        </p>

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
                  <img class="w-1/5" src="{{ asset ('/images/industries/healthcare/why-ss.svg')}}" alt="">
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

              <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ _trans("HIGHLIGHTS OF HEALTHCARE IT CONSULTING SERVICES BY SCIENCESOFT")  }}
              </h1>
              <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
              <div class="flex justify-center flex-wrap">

              <div class="rounded-sm w-full lg:w-2/5 p-10  mt-8 border-2 transition-shadow hover:shadow-xl p-2 md:p-8">

                <div class="">
                  <div class="  text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-16 h-16" src="{{ asset ('/images/industries/healthcare/star.svg')}}" alt="">
                  </div>
                  <div class=" mt-4">
                    <h1 class="text-2xl md:text-3xl font-semibold">{{ _trans("Deep healthcare industry knowledge")  }}</h1>

                    <p class="mt-4 text-gray-500 text-lg md:text-xl">
                      {{ _trans("ScienceSoft’s healthcare IT team consists of highly qualified professionals with experience in the healthcare field and related domains, such as pharmaceutical, biotech, health insurance, and medical device industry.")  }}
                    </p>
                  </div>
                </div>
              </div>

              <div class="rounded-sm w-full lg:w-2/5 p-10 mx-4 mt-8 border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="">
                  <div class="text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-16 h-16" src="{{ asset ('/images/industries/healthcare/star.svg')}}" alt="">
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
        <div class="flex flex-row">
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-2/5 h-auto mr-10">
          <hr class="w-full border-t-4 border-blue-800" />
          <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Full-service IT outsourcing")  }}</p>
            <p class="mb-3">{{ _trans("Drawing on your needs, we can suggest either an offshore dedicated team or team
             augmentation model of cooperation to back up your .NET development project or migration of
             legacy software to .NET. We offer pre-vetted developers, which match your requirements –
             you’re free to screen them before the start of cooperation.")  }}</p>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
          </div>
        </div>
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-2/5 h-auto mr-10">
          <hr class="w-full border-t-4 border-blue-800" />
          <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Co-sourcing with an in-house IT team")  }}
            </p>
            <p class="mb-3">{{ _trans("Outsource your entire IT landscape, including IT service planning and
             management, to achieve greater business performance with IT ROI boosted by 50-300%.")  }}</p>
            <p>
              {{ _trans("We can also act as a service integrator taking up the management of your IT vendor
               ecosystem.")  }}
            </p>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 70%-90% of
             it")  }}</button>
          </div>
        </div>
      </div>

  <h1 class="uppercase font-bold mt-10 text-2xl">
    {{ _trans("BENEFIT FROM HIGH-QUALITY HEALTHCARE IT CONSULTING SERVICES!")  }}
  </h1>
  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content --}}

  <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
    <div class="flex flex-col">
      <h1 class="text-xl font-bold">{{ _trans("Let IT Make Your Healthcare Services Better")  }}</h1>
      <hr class="w-12 border-b-2 border-yellow-600 my-4"/>
      <div class=" flex flex-wrap">
      <p class="text-gray-500 text-xl w-full lg:w-3/5">
        {{ _trans("ScienceSoft's healthcare IT team will advise you on how to achieve your goals as fast as possible with healthcare software.")  }}
      </p>
      <div class="uppercase text-white bg-blue-700 py-2 px-4  flex items-center text-center">{{ _trans("request a consultation")  }}</div>
    </div>
    </div>
  </div>

</div>

@endsection

@section('js')

@endsection
