@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
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
        {{ _trans("Choose your option")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>

      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("CHOOSE YOUR SERVICE OPTION")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>

      <div class="flex flex-row">
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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

      <div class="flex flex-row my-10">
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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
        <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
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

      <div class="text-2xl md:text-3xl font-bold">
        {{ _trans("Dedicated consulting services")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
      </div>

      ============Ishi bor==============

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
                {{ _trans(""When I talk to CEO of mid-size companies, I often hear that IT takes a large share of
                their budget but constantly underperforms. And they do not see business growth possible
                without profound IT changes that they simply cannot accomplish internally.")  }}
              </p>
              <p>
                {{ _trans("Indeed, it’s not easy to connect IT with the business, but it becomes possible by
                applying deep tech expertise with the focus on cost-effectiveness and unlocking new
                revenue streams. And this is exactly what ScienceSoft does. By doing the right IT and
                doing IT right, ScienceSoft helps companies make their IT a business growth enabler."")  }}
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

      ==================ishi bor==================

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

@endsection
