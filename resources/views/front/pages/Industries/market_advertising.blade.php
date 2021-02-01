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
        <img src="https://www.scnsoft.com/healthcare/healthcare-it-consulting/cover-pic-healthcare-it-consulting-4.svg">
      
      </div>
  
      <h1 class="uppercase font-bold mt-10 text-2xl">
        About ScienceSoft – Global IT Company
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
  
      <p class="my-5 text-lg">
        We headquarter in McKinney, TX, US, have a European office in Vantaa,
        Finland and a delivery center in Minsk, Belarus. Having gained trust
        among companies operating in the Gulf region, we opened our Middle East
        office in the UAE in 2020.
      </p>
      {{-- content --}}
  
      <div class="flex justify-end my-4">
        <div class="uppercase bg-blue-700 text-white py-3 px-10">
          Get a quote
        </div>
      </div>
    
  
        {{-- content --}}
  
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
  
  
        <h1 class="uppercase font-bold mt-10 text-2xl">
          About ScienceSoft – Global IT Company
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
          <div class="flex flex-col md:flex-row items-center ">
            <div class="flex justify-center  w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
              <img class="w-64  top-0" src="https://www.scnsoft.com/boss/images/12fecd0e-697d-4793-be78-c950a790f5c5plm-platform.png" alt="">
            </div>
            <div class=" flex flex-col w-4/5 mb-10">
              <h1 class="text-3xl md:text-4xl font-bold">Tailored pricing plan</h1>
              <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
              <p class=" text-gray-500 text-xl md:text-2xl">
                We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
                requirements change
                during our cooperation.
              </p>
             
            </div>
          </div>
          <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i class="fas fa-arrow-right ml-4"></i></a>
        </div>
    </section>
  </main>
  
  @endsection


@section('js')

@endsection