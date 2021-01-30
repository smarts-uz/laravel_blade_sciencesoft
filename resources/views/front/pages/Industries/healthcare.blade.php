@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="flex w-full">
    <aside class="w-80  bg-gray  lg:block">
      <div class="xl:w-1/5 flex flex-col w-full justify-start h-8 fixed p-4 xl:bg-white">
        <div class="text-sm mb-16">
          <div class="text-black xl:bg-white text-sm font-normal flex flex-row justify-between bg-blue-800 uppercase lg:underline mb-5">
            <p>
              Healthcare IT Consulting</p>
            <i onclick="dropDown()" class="fas fa-chevron-down lg:hidden"></i>
          </div>
          <div class="content hidden xl:block">
            <p class="bg-gray-100 text-black p-3 rounded mt-2 cursor-pointer font-medium hover:text-blue-600">
              Management Team
            </p>
            <p class="bg-gray-100 text-black p-3 rounded mt-2 cursor-pointer font-medium hover:text-blue-600">
              Our Experts
            </p>
          </div>
        </div>
      </div>
    </aside>
  
    <section class="w-full p-4 pr-10">
      <div>
        <p class="text-gray-400 text-xs">Home &gt; Healthcare</p>
        <h1 class="uppercase font-bold mt-10 text-2xl">
          Healthcare IT Consulting
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/cover-pic-healthcare-it-consulting-4.svg">
        <p class="my-5 text-lg">
          Healthcare IT consulting services help healthcare organizations overcome limited or low-level healthcare IT expertise and support the effective implementation of digital healthcare initiatives.
        </p>
        <p class="my-5 text-lg">
          ScienceSoft provides hospitals, clinics, practices, assisted living facilities, labs, and other healthcare organizations with healthcare IT consulting services to help them adopt complex digital initiatives, provide digital patient care, optimize internal processes, improve the IT infrastructure, and more.
        </p>
      </div>
      <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
        <div class="flex flex-col">
          <h1 class="text-xl font-bold">Doubt Healthcare Digital Initiatives Will Pay Off?</h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <div class=" flex flex-wrap">
          <p class="text-gray-500 text-xl w-full lg:w-4/5">
            ScienceSoft’s healthcare IT consultants help choose and adopt fitting healthcare solutions and ensure your IT landscape works effectively to support clinical processes and drive new digital healthcare initiatives.
          </p>
          <div class="uppercase text-white bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center">request a consultation</div>
        </div>
        </div>
      </div>
  
     
  <div class="pt-12">
    <h1 class="uppercase font-bold mt-10 text-2xl">
      WHY SCIENCESOFT?
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
             
                <div class="mt-8 flex">
                  <img class="w-1/5" src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/why-ss.svg" alt="">
                  <div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      31 years in the IT market.
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      15 years in the healthcare IT industry.
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      ISO 13485:2016 and IEC 62304:2006 certifications.
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      Working experience with HIPAA and FDA regulations.
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                      Working experience with healthcare standards (e.g., HL7, ICD-10, CPT, XDS/XDS-I).
                    </p>
                  </div>
                </div>
              </div>
            
              </div>
  
  
              <h1 class="uppercase font-bold mt-10 text-2xl">
                HIGHLIGHTS OF HEALTHCARE IT CONSULTING SERVICES BY SCIENCESOFT
              </h1>
              <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
              <div class="flex justify-center flex-wrap"> 
  
              <div class="rounded-sm w-full lg:w-2/5 p-10  mt-8 border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                
                <div class="">
                  <div class="  text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-16 h-16" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                  </div>
                  <div class="    mt-4">
                    <h1 class="text-2xl md:text-3xl font-semibold">Deep healthcare industry knowledge</h1>
                      
                    <p class="mt-4 text-gray-500 text-lg md:text-xl">
                      ScienceSoft’s healthcare IT team consists of highly qualified professionals with experience in the healthcare field and related domains, such as pharmaceutical, biotech, health insurance, and medical device industry.
                    </p>
                  </div>
                </div>
              </div>
  
              <div class="rounded-sm w-full lg:w-2/5 p-10 mx-4 mt-8 border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
                <div class="">
                  <div class="  text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-16 h-16" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                  </div>
                  <div class="    mt-4">
                    <h1 class="text-2xl md:text-3xl font-semibold">Consulting and practical assistance</h1>
                      
                    <p class="mt-4 text-gray-500 text-lg md:text-xl">
                      ScienceSoft combines IT consulting with end-to-end IT services for the healthcare industry: business analysis, software implementation, continuous support, managed services.
                    </p>
                  </div>
                </div>
              </div>
            </div>
  
            <h1 class="uppercase font-bold mt-10 text-2xl">
              OUR SELECTED HEALTHCARE PROJECTS
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content carousel --}}

  <h1 class="uppercase font-bold mt-10 text-2xl">
    HEALTHCARE IT CONSULTING SERVICES WE OFFER
  </h1>
  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content  --}}

  <h1 class="uppercase font-bold mt-10 text-2xl">
    BENEFIT FROM HIGH-QUALITY HEALTHCARE IT CONSULTING SERVICES!
  </h1>
  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  {{-- content --}}

  <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
    <div class="flex flex-col">
      <h1 class="text-xl font-bold">Let IT Make Your Healthcare Services Better</h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
      <div class=" flex flex-wrap">
      <p class="text-gray-500 text-xl w-full lg:w-3/5">
        ScienceSoft's healthcare IT team will advise you on how to achieve your goals as fast as possible with healthcare software.
      </p>
      <div class="uppercase text-white bg-blue-700 py-2 px-4  flex items-center  text-center">request a consultation</div>
    </div>
    </div>
  </div>

  
            
              
    </section>
  </main>

  @endsection


@section('js')

@endsection