@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="mx-6 md:mx-16 lg:mx-24 my-10">

      <div>
        <p class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold pt-5 ">{{ @translate_lang("Insurance Software: IT Solutions for Streamlined Insurance Services")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 my-4" />
      </div>

      <div>
        <img src="{{ asset ('/images/industries/insurance/cover-pic-it-for-insurance.svg')}}" alt="">
      </div>

      <div class="text-xl py-4">
        <p class="mb-4">{{ @translate_lang("IT solutions for insurance allow insurers to speed up service delivery, reduce labor costs, achieve insurance data accuracy and compliance with government regulations, as well as provide a personalized approach to clients and improve customer service.")  }}</p>

        <p> {{ @translate_lang("Having 8-year experience with theinsurance industry, ScienceSoftprovides insurance companies with ITsolutions and related services fromsolution consulting to support to helpthem")  }} <span class="font-bold">{{ @translate_lang("facilitate digital lead generationand increase the efficiency ofapplication processing and claimmanagement.")  }}</span></p>
      </div>

      <div class="mb-10">
        <div
            class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8"
          >
            <div class="flex flex-col">
              <h1 class="text-xl font-bold">{{ @translate_lang("Eager to Improve Your Insurance Services?")  }}</h1>
              <hr class="w-12 border-b-2 border-yellow-600 my-4" />
              <div class="flex flex-wrap">
                <p class="text-gray-500 pr-5 text-xl w-full lg:w-4/5">
                  {{ @translate_lang("ScienceSoft’s team will analyze the business needs of your insurance company, suggest and implement robust solutions that will help you improve overall business productivity and enhance customer service.")  }}
                </p>
                <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ @translate_lang("GET A CONSULTATION")  }}
                </button>
              </div>
              </div>
            </div>
        </div>
      </div>

      <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <p class="text-xl  md:text-3xl lg:text-3xl font-bold pt-5 ">{{ @translate_lang("WHAT MAKES SCIENCESOFT A RELIABLE PARTNER")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 my-4" />
        <!-- STARS -->
        <div class="grid md:grid-cols-3 gap-4 border mb-4">
          <div>
            <div class="flex justify-center pb-10">
              <img src="{{ asset ('/images/industries/insurance/star.svg')}}" alt="" class="w-10">
            </div>
            <p class="text-center text-xl"><b>31</b> {{ @translate_lang("years in software")  }} <br> {{ @translate_lang("development and consulting")  }}</p>
          </div>
          <div>
            <div class="flex justify-center pb-10">
              <img src="{{ asset ('/images/industries/insurance/star.svg')}}" alt="" class="w-10">
            </div>
            <p class="text-center text-xl"><b>8</b> {{ @translate_lang("years in IT for insurance")  }}</p>
          </div>
          <div>
            <div class="flex justify-center pb-10">
              <img src="{{ asset ('/images/industries/insurance/star.svg')}}" alt="" class="w-10">
            </div>
            <p class="text-center text-xl">{{ @translate_lang("Experience in delivering both")  }} <br><b>B2B</b> {{ @translate_lang("and")  }} <b>B2C</b> {{ @translate_lang("insurance")  }} <br> {{ @translate_lang("solutions.")  }}</p>
          </div>
        </div>
        <!-- END-STARS -->
        <div class="grid md:grid-cols-2 gap-4 border">
          <div class="text-center pb-4">
            <div class="flex justify-center pb-5">
              <img class="w-28" src="{{ asset ('/images/industries/insurance/aws-apn-select-consulting-partner.svg')}}" alt="">
            </div>
            <p><b>{{ @translate_lang("AWS Select Tier")  }}</b> {{ @translate_lang("partnership")  }}</p>
          </div>
          <div class="text-center">
            <div class="flex justify-center pb-5">
              <img class="w-72 border" src="{{ asset ('/images/industries/insurance/microsoft-gold-partner-8-competences.svg')}}" alt="" >
            </div>
            <p><b>8</b> {{ @translate_lang("Microsoft Gold Competencies")  }}</p>
          </div>
        </div>
      </div>

      <!-- PIC-CARD -->
      <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <p class="text-xl md:text-3xl lg:text-3xl font-bold pt-5 ">{{ @translate_lang("IT SOLUTIONS FOR INSURANCE WE DEVELOP")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 my-4" />
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("Underwriting")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Processing customers’ applications.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Conversion of prospects into customers.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Risk management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Premium calculation.")  }}
                </li>
                <li class="mb-1 text-gray-800 mb-5">
                  {{ @translate_lang("Compliance management.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ @translate_lang("Cloud-native solutions based on Azure and AWS services")  }}</p>
            </div>
          </div>
          <div class="lg:mx-4 shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("Claim estimation")  }}
              </p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Claim submission and management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Damage estimation.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Compliance assurance.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ @translate_lang("Cloud-native solutions based on Azure and AWS services PWA or native mobile applications")  }}</p>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("Injury management")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Case processing and claim management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Insurance coverage.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Treatment plans and reimbursement.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Compensations for injuries.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ @translate_lang("Cloud-native solutions based on Azure and AWS services")  }}</p>
            </div>
          </div>
          <div class="lg:mx-4 shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("CRM")  }}
              </p>
              <p class="font-bold text-md">{{ @translate_lang("Marketing")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Building brand awareness.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Content marketing.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Customer journey management.")  }}
                </li>
              </ul>
              <p class="font-bold text-md">{{ @translate_lang("B2C Sales")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Online sales.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("In-person sales.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Integration with underwriting software.")  }}
                </li>
              </ul>
              <p class="font-bold text-md">{{ @translate_lang("B2B Sales")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Long-cycle sales.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Account development.")  }}
                </li>
              </ul>
              <p class="font-bold text-md">{{ @translate_lang("Customer service")  }}</p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Omni-channel communication.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Case management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Registering claims.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <div class="flex justify-between">
                <p class="text-sm rounded bg-green-50 mb-1 w-50">{{ @translate_lang("Dynamics 365 Marketing")  }}</p>
                <p class="text-sm rounded bg-green-50 mb-1 w-30">{{ @translate_lang("Dynamics 365 Sales")  }}</p>
                <p class="text-sm rounded bg-green-50 mb-1 w-40">{{ @translate_lang("Dynamics 365 Customer Service")  }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("Customer portal")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Up to 100% of clients’ self-service.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Application management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Claim management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("AI assistant.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ @translate_lang("Cloud-native solutions based on Azure and AWS services")  }}</p>
            </div>
          </div>
          <div class="lg:mx-4 shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("Data analytics")  }}
              </p>
              <ul class="list-disc mb-3 ml-5">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Risk management.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Fraud detection.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Customer behavior analysis.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1">{{ @translate_lang("Cloud-native solutions based on Azure and AWS services PWA or native mobile applications")  }}</p>
            </div>
          </div>
        </div>
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-6">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-center mt-5 text-xl font-bold">
                {{ @translate_lang("Business intelligence")  }}
              </p>
              <ul class="list-disc mb-3 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Finance analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Customer analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Performance analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Workforce analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Operational analytics.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Planning and forecasting.")  }}
                </li>
              </ul>
              <p class="font-semibold mb-1">{{ @translate_lang("Technology/platform")  }}</p>
              <p class="text-sm rounded bg-green-50 mb-10 p-1 w-20">{{ @translate_lang("Power BI")  }}</p>
            </div>
          </div>
        </div>
      </div>

      <!-- END_PIC-CARD -->

      <!-- SIMP-CARD -->
      <div
            class="rounded-sm  border-2 border-white shadow-2xl transition-shadow mx-6 md:mx-16 lg:mx-24 my-10 mr-20 p-8 mt-20"
          >
            <div class="flex flex-col ">
              <h1 class="text-xl font-bold">{{ @translate_lang("Eager to Improve Your Insurance Services?")  }}</h1>
              <hr class="w-12 border-b-2 border-yellow-600 my-4" />
              <div class="flex flex-wrap">
                <p class="text-gray-500 pr-5 text-xl w-full lg:w-4/5">
                  {{ @translate_lang("ScienceSoft’s team will analyze the business needs of your insurance company, suggest and implement robust solutions that will help you improve overall business productivity and enhance customer service.")  }}
                </p>
                <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ @translate_lang("GET A CONSULTATION")  }}
                </button>
              </div>
              </div>
            </div>
        </div>
      <!-- END-SIM-CARD -->

      <!-- CHOOSE-SERVICE -->
      <div class=" mx-6 md:mx-16 lg:mx-24 my-10">
        <p class="text-2xl md:text-3xl lg:text-3xl font-bold mb-4">{{ @translate_lang("CHOOSE YOUR SERVICE OPTION")  }}</p>
        <hr class="w-12 border-b-2 border-yellow-600 mb-6" />
        <div class="grid md:grid-cols-2">
          <div class="shadow-xl border m-5">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-blue-700 text-center mt-5 text-xl font-semibold mb-4">
                {{ @translate_lang("Solution consulting, implementation and support for insurance")  }}
              </p>
              <p class="font-bold  text-xl mb-3">{{ @translate_lang("We consult on:")  }}</p>
              <ul class="list-disc text-lg mb-4 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Choosing suitable solutions and their optimal functionality to meet your business needs.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Reducing implementation costs.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Ensuring user adoption.")  }}
                </li>
              </ul>
              <p class="font-bold text-xl mb-4">{{ @translate_lang("We offer:")  }}</p>
              <ul class="list-disc text-lg mb-3 ml-6">
                <li class="mb-1 text-gray-800 mb-3">
                  {{ @translate_lang("End-to-end solution implementation.")  }}
                </li>
                <li class="mb-1 text-gray-800 mb-3">
                  {{ @translate_lang("After-launch support.")  }}
                </li>
                <li class="mb-1 text-gray-800 mb-3">
                  {{ @translate_lang("Continuous solution maintenance and evolution.")  }}
                </li>
              </ul>
              <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mttext-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ @translate_lang("GET A CONSULTATION")  }}
                </button>
            </div>
          </div>
          <div class="shadow-xl border m-5">
            <div class="bg-blue-300 border-t-8"></div>
            <div class="p-4">
              <img
                src="{{ asset ('/images/industries/insurance/underwriting-1.svg')}}"
                alt="img-one"
                class="w-28 mx-auto"
              />
              <p class="text-blue-700 text-center mt-5 text-xl font-semibold mb-4">
                {{ @translate_lang("IT outsourcing for insurance")  }}
              </p>
              <p class="font-bold  text-xl mb-3">{{ @translate_lang("Outsourcing of one or several IT functions:")  }}</p>
              <ul class="list-disc text-lg sm:mb-4 lg:mb-20 ml-6">
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Business analysis to elicit your automation requirements.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("End-to-end insurance software development.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Testing and QA.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Data analytics for insights without developing own analytics solution.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("Managed infrastructure services.")  }}
                </li>
                <li class="mb-1 text-gray-800">
                  {{ @translate_lang("IT support and help desk.")  }}
                </li>
              </ul>
              <button
                class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-30 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
                >
                {{ @translate_lang("GET A CONSULTATION")  }}
                </button>
            </div>
          </div>
          </div>
        </div>
      </div>

  </main>

@endsection

@section('js')

@endsection
