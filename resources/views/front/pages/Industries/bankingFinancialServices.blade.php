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
   
      <div class="flex justify-end my-4">
        <div class="uppercase bg-blue-700 text-white py-3 px-10">
          Get a quote
        </div>
      </div>
  
  
      <h1 class="uppercase font-bold mt-10 text-2xl">
        About ScienceSoft – Global IT Company
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/> 
  {{-- content --}}
  
      <h1 class="uppercase font-bold mt-10 text-2xl">
        About ScienceSoft – Global IT Company
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/> 
      <div
              class="w-full  lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col  my-7">
              <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                  <img class="lg:w-2/5 w-4/5 " src="https://www.scnsoft.com/blue-icons-on-grey-background/internet_banking.svg"
                      alt="">
              </div>
              <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                  <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
                      DevOps
                  </h1>
                  <br>
                  <p class="px-4 text-base sm:text-lg text-sm">With an established  <a href="#"
                          class="underline hover:text-blue-800 ">DevOps </a> culture at ScienceSoft, we streamline software delivery and improve its quality with the following DevOps best practices:</p>
                  <br>
                  <div class="w-full  px-4 flex flex-row mb-5">
                      <span class="w-5 h-2 bg-blue-500 mt-3"></span><p class="px-4 text-base sm:text-lg text-sm"><b> Infrastructure as Code (IaC):</b> automating the creation of new infrastructures and keeping them consistent with each other to ensure smooth software deployment.</p>
                  </div>
                  <!-- ========================= -->
                  <div class="w-full  px-4 flex flex-row mb-5">
                      <span class="w-5 h-2 bg-blue-500 mt-3"></span><p class="px-4 text-base sm:text-lg text-sm"><b> Continuous Integration/Continuous Delivery or Continious Deployment (CI/CD): </b> automating integration and deployment of code changes.</p>
                  </div>
                  <!-- ========================= -->
                  <div class="w-full  px-4 flex flex-row mb-5">
                      <span class="w-5 h-2 bg-blue-500 mt-3"></span><p class="px-4 text-base sm:text-lg text-sm"><b> Automated testing: </b> automating regression, performance, and other types of testing that are continuously carried out within the CI/CD pipeline.</p>
                  </div>
                  <!-- ========================= -->
                  <div class="w-full  px-4 flex flex-row mb-5">
                      <span class="w-5 h-2 bg-blue-500 mt-3"></span><p class="px-4 text-base sm:text-lg text-sm"><b>Application performance monitoring: </b>configuring application performance monitoring tools to detect post-release bugs quickly.</p>
                  </div>
              </div>
          </div>
  
          <h1 class="uppercase font-bold mt-10 text-2xl">
            About ScienceSoft – Global IT Company
          </h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
          <img src="https://www.scnsoft.com/banking/banking-software-benefits.svg" alt="">
  
  
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
          <img src="https://www.scnsoft.com/banking/our-services.svg" alt="">
  
  
          {{-- content --}}
  
  
          <h1 class="uppercase font-bold mt-10 text-2xl">
            About ScienceSoft – Global IT Company
          </h1>
          <hr class="w-12 border-b-2 border-yellow-600  my-4"/> 
          <div class="my-12">
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
  
  
          <div class="rounded-sm border-2 border-white shadow-xl transition-shadow w-full mr-20 p-8">
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