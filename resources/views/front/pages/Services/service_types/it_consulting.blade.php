@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-10">
      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("Information Technology Consulting")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>
      <p class="text-2xl">
        {{ _trans("With IT consulting services, you revamp your IT environment to make it go in hand with your business needs.
         Leveraging 31-year experience in IT, ScienceSoft offers consultancy on holistic, fast, and cost-effective
         optimization of IT systems and processes to ensure tangible business outcomes.")  }}
      </p>
   

      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("CHOOSE YOUR OPTION")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>


<!-- Muhammadali gridlarni qoshdi -->

        <div class="grid mt-6 md:grid-cols-2 lg:grid-cols-3 my-8 gap-4">
    <div class="border pb-6 hover:shadow-md">
        <div class="h-3 w-full bg-blue-500"></div>
        <img width="120" height="108"
             src="https://www.scnsoft.com/it-consulting/it-consulting-upd/business-digitalization-consulting.svg"
             class="m-auto my-4" alt="">
        <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Business digitalization consulting (for CEO)</h1>

        <div class="px-4 text-md lg:text-xl text-gray-600">
            <p class="mb-4">We assist in turning IT into a major contributor to a business performance increase with:</p>
            <ul style="list-style: square;" class="flex flex-col ml-6 text-md lg:text-xl">
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">A value-driving </span>
                    <span class="text-gray-700 font-bold">business-IT strategy.</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">A plan on </span>
                    <span class="text-gray-700 font-bold">IT service delivery optimization.</span>
                </li>
            </ul>
            <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 text-white block text-center p-4">
                TRANSFORM YOUR IT
            </a>

        </div>

    </div>

    <div class="border pb-6 hover:shadow-md relative">
        <div class="h-3 w-full bg-blue-500"></div>
        <img width="120" height="108"
             src="https://www.scnsoft.com/it-consulting/it-consulting-upd/it-strategy-consulting.svg"
             class="m-auto my-4" alt="">
        <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">IT strategy consulting (for CIO)</h1>

        <div class="px-4 text-md lg:text-xl text-gray-600">
            <p class="mb-4">We create a strategy that would bring together a diversified IT landscape and make it work towards supporting existing business processes and driving new business initiatives.</p>

            <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 md:absolute bottom-6 right-4 left-4 text-white block text-center p-4">
                BUILD YOUR IT STRATEGY
            </a>

        </div>

    </div>

    <div class="border pb-6 hover:shadow-md relative">
        <div class="h-3 w-full bg-blue-500"></div>
        <img width="120" height="108"
             src="https://www.scnsoft.com/it-consulting/it-consulting-upd/solution-consulting.svg"
             class="m-auto my-4" alt="">
        <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Solution consulting (for project sponsor or PM)</h1>

        <div class="px-4 text-md lg:text-xl text-gray-600">
            <p class="mb-4">We analyze your business needs and help you make strategic decisions on the fast and successful implementation of business-critical solutions.</p>

            <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 lg:absolute bottom-6 right-4 left-4 text-white block text-center p-4">
                GET SOLUTION CONSULTING
            </a>

        </div>

    </div>

    <div class="border pb-6 hover:shadow-md relative">
        <div class="h-3 w-full bg-blue-500"></div>
        <img width="120" height="108"
             src="https://www.scnsoft.com/it-consulting/it-consulting-upd/digital-transformation-consulting.svg"
             class="m-auto my-4" alt="">
        <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Digital transformation consulting (for DT leader)</h1>

        <div class="px-4 text-md lg:text-xl text-gray-600">
            <p class="mb-4">We help verify and plan digital transformation (DT) initiatives that will add the competitive edge to your business.</p>

            <a href="#" class="bg-blue-700 lg:text-lg hover:bg-blue-800 mt-4 md:absolute bottom-6 right-4 left-4 text-white block text-center p-4">
                GO FOR DT
            </a>

        </div>

    </div>

    <div class="border pb-6 hover:shadow-md relative">
        <div class="h-3 w-full bg-blue-500"></div>
        <img width="120" height="108"
             src="https://www.scnsoft.com/it-consulting/it-consulting-upd/technology-consulting.svg"
             class="m-auto my-4" alt="">
        <h1 class="text-xl lg:text-2xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10">Technology consulting (for IT manager)</h1>

        <div class="px-4 text-md lg:text-xl text-gray-600">
            <p class="mb-4">We analyze the existing state of the technology area of your interest and assist in its steady evolution to make it play a more prominent role in your business growth.</p>

            <a href="#" class="bg-blue-700 lg:text-lg  hover:bg-blue-800 mt-4 bottom-6 right-4 left-4 text-white block text-center p-4">
                ADOPT NEW TECHNOLOGIES
            </a>

        </div>

    </div>
</div>

      

     



      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("Dedicated consulting services")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>



<!-- Muhammadali gridlarni qoshdi -->

      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 my-8  gap-4">
    <a href="#" class="py-8 px-4 text-center  relative font-bold text-lg border hover:shadow-lg">Startup consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        SaaS/XaaS consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">

        Cloud consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        CRM consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        Ecommerce consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        Data Analytics Consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        Data science consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        IoT consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        Cybersecurity Consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        ITSM consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>
    <a href="#" class="py-8 px-4 text-center relative font-bold text-lg border hover:shadow-lg">
        Computer vision consulting
        <i class="fal fa-arrow-right absolute bottom-2 right-2 text-blue-700 transform rotate-45 hover:rotate-0 duration-300 "></i>
    </a>

</div>


      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("SCIENCESOFT’S APPROACH TO IT CONSULTING")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>

      <div class="flex flex-row">
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10">
          <hr class="w-full border-t-4 border-blue-800" />
          <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Doing IT right")  }}</p>
            <P>
              {{ _trans("We optimize IT services to make them more reliable and cost-effective and help introduce new IT services
               fast.")  }}
            </P>
          </div>
        </div>
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10">
          <hr class="w-full border-t-4 border-blue-800" />
          <div class="p-4">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Doing the right IT")  }}
            </p>
            <p class="mb-3">{{ _trans("Outsource your entire IT landscape, including IT service planning and
             management, to achieve greater business performance with IT ROI boosted by 50-300%.")  }}</p>
          </div>
        </div>

      </div>

      <div class="my-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
        <div class="flex flex-col md:flex-row  items-center">
          <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-60 md:h-60"
              src="https://www.scnsoft.com/it-consulting/it-consulting-upd/nikolay-kurayev.png" alt="">
          </div>
          <div class=" flex flex-col w-3/5">
            <h1 class="text-2xl md:text-3xl font-bold">{{ _trans("Nikolay Kurayev, CEO at ScienceSoft")  }} </h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <div class="text-xl">
              <p class="my-10">
                {{ _trans("When I talk to CEO of mid-size companies, I often hear that IT takes a large share of
                their budget but constantly underperforms. And they do not see business growth possible
                without profound IT changes that they simply cannot accomplish internally.")  }}
              </p>
              <p>
                {{ _trans("Indeed, it’s not easy to connect IT with the business, but it becomes possible by
                applying deep tech expertise with the focus on cost-effectiveness and unlocking new
                revenue streams. And this is exactly what ScienceSoft does. By doing the right IT and
                doing IT right, ScienceSoft helps companies make their IT a business growth enabler.")  }}
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("INDUSTRIES WE SERVE")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>

      <p class="text-xl">
        {{ _trans("We have expertise in 23 domains, including experience in information technology consulting for:")  }}
      </p>

      <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
        <div class='w-2/3'>
          <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ _trans("Measure IT Outsourcing Value for Your Business") }} </p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
          </h1>
          <p class='text-gray-600 text-xl'>{{ _trans("Our team can conduct an IT outsourcing feasibility analysis to
           calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
        </div>
        <div class='w-1/3 m-0 flex justify-center items-center'>
          <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("Request a
           Feasibility analysis")  }}</a>
        </div>
      </div>




    Carusel bor





      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("BENEFITS OF IT CONSULTING WITH SCIENCESOFT")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>

      <div class="rounded-sm p-2 md:p-8">
        <div class="flex flex-col md:flex-row  items-start">
          <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-28 md:h-28"
              src="https://www.scnsoft.com/it-consulting/it-consulting-upd/end-to-end-01.svg" alt="">
          </div>
          <div class=" flex flex-col w-3/3">
            <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("More than just consultants")  }}</h1>

            <p class=" text-xl md:text-2xl mt-6">
              {{ _trans("ScienceSoft is a full-service IT company with 700+ employees on board. We can combine IT consulting with
               end-to-end IT services: implementation, support, managed services.")  }}
            </p>
          </div>
        </div>
      </div>

      <div class="rounded-sm p-2 md:p-8">
        <div class="flex flex-col md:flex-row  items-start">
          <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-28 md:h-28"
              src="https://www.scnsoft.com/it-consulting/it-consulting-upd/speed-01.svg" alt="">
          </div>
          <div class=" flex flex-col w-3/3">
            <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("More than just consultants")  }}</h1>

            <p class=" text-xl md:text-2xl mt-6">
              {{ _trans("ScienceSoft is a full-service IT company with 700+ employees on board. We can combine IT consulting with
              end-to-end IT services: implementation, support, managed services.")  }}
            </p>
          </div>
        </div>
      </div>

      <div class="rounded-sm p-2 md:p-8">
        <div class="flex flex-col md:flex-row  items-start">
          <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-28 md:h-28"
              src="https://www.scnsoft.com/it-consulting/it-consulting-upd/cost-01.svg" alt="">
          </div>
          <div class=" flex flex-col w-3/3">
            <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("More than just consultants")  }}</h1>

            <p class=" text-xl md:text-2xl mt-6">
              {{ _trans("ScienceSoft is a full-service IT company with 700+ employees on board. We can combine IT consulting with
              end-to-end IT services: implementation, support, managed services.")  }}
            </p>
          </div>
        </div>
      </div>

      <div class="rounded-sm p-2 md:p-8">
        <div class="flex flex-col md:flex-row items-start">
          <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-28 md:h-28"
              src="https://www.scnsoft.com/it-consulting/it-consulting-upd/kpi-01.svg" alt="">
          </div>
          <div class=" flex flex-col w-3/3">
            <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("More than just consultants")  }}</h1>

            <p class=" text-xl md:text-2xl mt-6">
              {{ _trans("ScienceSoft is a full-service IT company with 700+ employees on board. We can combine IT consulting with
              end-to-end IT services: implementation, support, managed services.")  }}
            </p>
          </div>
        </div>
      </div>

      <div class="rounded-sm p-2 md:p-8">
        <div class="flex flex-col md:flex-row  items-start">
          <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-28 md:h-28"
              src="https://www.scnsoft.com/it-consulting/it-consulting-upd/balance-01.svg" alt="">
          </div>
          <div class=" flex flex-col w-3/3">
            <h1 class="text-3xl md:text-2xl font-bold">{{ _trans("More than just consultants")  }}</h1>

            <p class=" text-xl md:text-2xl mt-6">
              {{ _trans("ScienceSoft is a full-service IT company with 700+ employees on board. We can combine IT consulting with
              end-to-end IT services: implementation, support, managed services.")  }}
            </p>
          </div>
        </div>
      </div>

      <div class="my-20  mx-auto w-full">
        <p class="font-medium text-4xl mx-auto">{{ _trans("Business-level gains:")  }}</p><br>
        <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              x1.5-2.5
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("IT cost reduction")  }}</p>
          </div>
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              x1.5-3
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("increase in software development speed")  }}</p>
          </div>
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              100%
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("regulatory compliance of the IT infrastructure")  }}
            </p>
          </div>
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              ~99.99%
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("applications availability")  }}</p>
          </div>

        </div>
      </div>

      <div class=" mx-auto w-full">
        <p class="font-medium text-4xl mx-auto">{{ _trans("IT-level gains:")  }}</p><br>
        <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              x1.5-2.5
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("IT cost reduction")  }}</p>
          </div>
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              x1.5-3
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("increase in software development speed")  }}</p>
          </div>
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              100%
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("regulatory compliance of the IT infrastructure")  }}
            </p>
          </div>
          <div
            class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
            <p class="text-4xl text-blue-600  pl-2 mx-auto">
              ~99.99%
            </p><br>
            <p class="font-light text-gray-400 pl-2 mx-auto">{{ _trans("applications availability")  }}</p>
          </div>

        </div>
      </div>
      <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
        <div class='w-2/3'>
          <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ _trans("Measure IT Outsourcing Value for Your Business")  }} </p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
          </h1>
          <p class='text-gray-600 text-xl'>{{ _trans("Our team can conduct an IT outsourcing feasibility analysis to
          calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
        </div>
        <div class='w-1/3 m-0 flex justify-center items-center'>
          <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("Request a
          Feasibility analysis")  }}</a>
        </div>
      </div>
    </div>
@endsection

@section('js')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


@endsection
