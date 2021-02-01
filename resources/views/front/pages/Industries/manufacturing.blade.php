@extends('front.layout')

@section('css')

@endsection

@section('main')



<main class="flex w-full">
    <aside class="w-80  bg-gray  hidden sm:block">
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
          About ScienceSoft – Global IT Company
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="{{ asset('/images/industries/manufacturing/microsoft-partner-statuses-8-01') }}">
        <p class="my-5 text-lg">
          Founded in 1989, ScienceSoft is a provider of IT consulting and software
          development services. Having started as a small AI product company, we
          switched to IT services in 2002 and ever since we have helped non-IT
          organizations and software product companies improve business
          performance and quickly win new customers.
        </p>
        <p class="my-5 text-lg">
          With over 31 years in Information Technology, we have built up expertise
          in CRM, ERP, Ecommerce, Data Analytics, Information Security, DMS, and
          other areas and conquered such innovative fields as Artificial
          Intelligence and Machine Learning, Big Data, Internet of Things,
          Computer Vision, and Augmented and Virtual Reality.
        </p>
        <p class="my-5 text-lg">
          We headquarter in McKinney, TX, US, have a European office in Vantaa,
          Finland and a delivery center in Minsk, Belarus. Having gained trust
          among companies operating in the Gulf region, we opened our Middle East
          office in the UAE in 2020.
        </p>
      </div>
  
      <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
        <div class="flex flex-col">
          <h1 class="text-xl font-bold">For non-IT enterprises</h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <div class=" flex flex-wrap">
          <p class="text-gray-500 text-xl w-full lg:w-4/5">
            To help you improve business performance, optimize customer
            service, and tap in digital transformation.
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
                          ScienceSoft attained
                          <b>AWS Select Tier Consulting Partner</b>
                          status.
                        </p>
                      </div>
                      <div class="flex flex-row">
                        <span class="text-blue-600 mr-4">&#9632;</span>
                        <p class="text-lg">
                          ScienceSoft featured on the
                          <b
                            >Clutch lists of Top IT Services Firms, Top Cloud
                            Consultants, and Top 1000 B2B Providers Globally.</b
                          >
                        </p>
                      </div>
                      <div class="flex flex-row">
                        <span class="text-blue-600 mr-4">&#9632;</span>
                        <p class="text-lg">
                          ScienceSoft featured in IAOP Global Outsourcing 100 Award
                          Lists 2020.
                        </p>
                      </div>
                      <div class="flex flex-row">
                        <span class="text-blue-600 mr-4">&#9632;</span>
                        <p class="text-lg">
                          ScienceSoft acquired Gold Microsoft Competency in
                          Application Integration.
                        </p>
                     
                      </div>
                    </div>
                  </div>
                
                  </div>
  
                  <h1 class="uppercase font-bold mt-10 text-2xl">
                    WHY SCIENCESOFT?
                  </h1>
                  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  
                  {{-- content --}}
  
                  <h1 class="uppercase font-bold mt-10 text-2xl">
                    WHY SCIENCESOFT?
                  </h1>
                  <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
      
    </section>
  </main>

  


@endsection


@section('js')

@endsection