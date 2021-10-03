@extends('front.layout_platform')
@section('css')
@endsection
@section('main')
<main class="overflow-hidden">
<div class="bg-black h-auto px-4 ">
        <div
          class=" grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right ">
            <div class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide pt-32">
            {{t('Official')}} <br> {{t('partner')}} <br> {{t('Bitrix24 in Uzbekistan')}}
            </div>
            <div class="lg:px-20">
              <a
                href="#"
                class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6">
              {{t('Get a consultation')}}
              </a>
            </div>
          </div>
          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/btrx2/12.svg')}}" alt="" />
          </div>
        </div>
      </div>
 <div
          class="grid sm:grid-cols-5 grid-cols-2  m-auto justify-between pt-16 max-w-7xl"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/btrx2/2.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              {{t('PR-article')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/btrx2/3.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              {{t('Banner')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/btrx2/4.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              {{t('Traffic')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/btrx2/5.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              {{t('News')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/btrx2/6.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              {{t('Interview')}}
            </p>
          </div>
        </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 sm:m-20 my-40">
        <div>
            <div class="flex justify-center mx-6 mt-10">
                <div class="text-5xl  leading-10 ">
                    <div>
                        <div class="flex">
                            <p class="text-9xl font-bold text-gray-300 -mt-4" data-aos="fade-up">1</p>
                            <h1 class=" font-bold text-blue-600" data-aos="fade-right">{{t('Bitrix24 - is...')}}
                            </h1>
                        </div>
                        <div>
                            <p class="text-gray-700 text-lg leading-6 mt-10 ml-24 ">
                               {{t('A simple and intuitive cloud-based system for accounting and systematization of potential customers and transactions, focused on small and medium-sized businesses.')}} <br> <br>
                               {{t('amoCRM helps sell more')}} <br> <br>
                               {{t('Our marketing agency will help you in the development and implementation of CPM systems in Tashkent')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-gray-500 flex justify-center pt-8">
            <div class="grid justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 ">
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/btrx2/7.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">{{t('Separate team for each project')}}</p>
                    </div>
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/btrx2/11.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">{{t('A team of qualified professionals')}}</p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 ">
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/btrx2/8.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">{{t('Free consultation on any questions related to your business')}}</p>
                    </div>
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/btrx2/10.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600"> {{t('Certified specialists in the field of')}} amoCRM,
                            Bitrix24, Moysklad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center mt-20 mb-10 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-600 text-center" data-aos="fade-left">{{t('Business without Bitrix24:')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                2
              </p>
          </div>
    </div>
    <div class="flex justify-center text-center">
        <div>
            <p class="text-2xl font-bold text-gray-700">{{t('Lost applications (leads)')}}</p>
            <p class="text-gray-700 text-xl">{{t('The most common problems of companies')}} <br> {{t('that do not have CRM')}}</p>
        </div>
    </div>
    <div class="container grid lg:grid-cols-1 my-0 gap-1/2 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-1 2xl:grid-cols-1 grid-cols-1">
        <div class="w-11/12 lg:h-40 mx-auto flex flex-wrap">
            <div class="box mt-0 lg:w-3/12 w-full">
                <div class="chart mx-auto relative lg:w-40 xl:w-5/12 w-5/12 md:w-8/12 text-center text-4xl leading-10 text-blue-700" data-percent="70"
                     data-scale-color="#ffb400">
                    <p class="top-12 mx-auto w-full absolute">70%</p>
                </div>
            </div>
            <div class="box lg:mt-0 mt-10 lg:w-3/12 w-full">
                <div class="chart mx-auto relative lg:w-40 xl:w-5/12 w-5/12 md:w-8/12 text-center text-4xl leading-10 text-blue-700" data-percent="40"
                     data-scale-color="#ffb400">
                    <p class="top-12 mx-auto w-full absolute">40%</p>
                </div>
            </div>
            <div class="box lg:mt-0 mt-10 lg:w-3/12 w-full">
                <div class="chart mx-auto relative lg:w-40 xl:w-5/12 w-5/12 md:w-8/12 text-center text-4xl leading-10 text-blue-700" data-percent="35"
                     data-scale-color="#ffb400">
                    <p class="top-12 mx-auto w-full absolute">35%</p>
                </div>
            </div>
            <div class="box lg:mt-0 mt-10 lg:mb-0 mb-10 lg:w-3/12 w-full">
                <div class="chart mx-auto relative lg:w-40 xl:w-5/12 w-5/12 md:w-8/12 text-center text-4xl leading-10 text-blue-700" data-percent="100"
                     data-scale-color="#ffb400">
                    <p class="top-12 mx-auto w-full absolute">100%</p>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 text-center container mx-auto">
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">{{t('The time of the sales department is spent on routine')}}</p>
            <p class="text-gray-600 px-5">{{t('Managers lose 35% of applications during the initial processing.')}}/p>
        </div>
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">{{t('Forgotten commercial offers')}}</p>
            <p class="text-gray-600 px-5">{{t('Manual processing of documents and contacts takes 70% of the time.')}}</p>
        </div>
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">{{t('Forgotten commercial offers')}}</p>
            <p class="text-gray-600 px-5">{{t('Half of the sent KP remains without attention.')}}</p>
        </div>
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">{{t('Failed trades are not recognized')}}</p>
            <p class="text-gray-600 px-5">{{t('Managers focus on intuition instead of measurable signs.')}}</p>
        </div>
    </div>
    <div class="flex justify-center items-center mt-20 mb-10 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-600 text-center" data-aos="fade-right">{{t('Features of the CPM system')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
    </div>
<div class="grid justify-center">
        <div class="max-w-7xl flex flex-col justify-center px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center container mx-auto m-20">
                <div class="flex justify-center" data-aos="flip-right pt-8">
                    <img src="{{asset('images/open_engine/btrx2/12.jpg')}}" alt="">
                </div>
                <div data-aos="fade-left" class="pt-8">
                    <p class="text-blue-700 font-bold text-xl text-3xl">Maintaining a customer base</p>
                    <ul class="list-disc text-blue-700 leading-9">
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Customize the sales funnel yourself to suit your needs.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Add, name, and swap the stages of your funnel.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Configure the automatic transition from stage to stage.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Mark each stage with different colors.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Add notes in the customer card, any information as a note.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-1 justify-center md:grid-cols-2 container mx-auto m-20 ">
                <div data-aos="fade-right" class="pt-8">
                    <p class="text-blue-700 font-bold text-xl text-3xl"> Tasks and reminders</p>
                    <ul class="list-disc text-blue-700 leading-9">
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg"> amoCRM helps you make sure that an action is scheduled for each transaction. If the tasks do not
                                                                                        delivered — the system signals this.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">You can create tasks to remind managers to perform certain actions with a
                                                                                       transaction, company, or contact.</span>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center pt-8" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/btrx2/13.png')}}" alt="">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center container mx-auto m-20">
                <div class="flex justify-center pt-8" data-aos="flip-right">
                    <img src="{{asset('images/open_engine/btrx2/14.png')}}" alt="">
                </div>
                <div data-aos="fade-left" class="pt-8">
                    <p class="text-blue-700 font-bold text-xl text-3xl">Analytics</p>
                    <ul class="list-disc text-blue-700 leading-9">
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg"> Analytics on the funnel will allow you to see at what stages you are losing customers and will provide sufficient
                                                                                        the amount of data to make the right management decisions.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg"> Analytics по сотрудникам покажет успехи, проблемные зоны и загруженность по каждому сотруднику.</span>
                                                                                                               </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Analytics by goals allows you to set KPIs for employees, departments, and the company as a whole.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>
    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto max-w-7xl">
            <div class="flex justify-center items-center pt-8" data-aos="fade-right">
                <div>
                    <p class="text-blue-700 font-bold text-2xl pb-5">Creating a unique CRM</p>
                    <p class="text-gray-700 pr-5">{{t('amoCRM has a unique and highly developed developer interface, what allows you to not only configure it is tailored to your needs, but also to create all sorts of integrations with other systems. Hundreds the most diverse ready-made extensions are already available for customizing CRM for your needs')}}</p>
                </div>
            </div>
            <div class="flex justify-center pt-8" data-aos="flip-left">
                <img src="{{asset('images/open_engine/btrx2/15.png')}}"
            </div>
            </div>
        </div>
    </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto max-w-7xl">
            <div class="flex justify-center pt-8 order-last md:order-none" data-aos="flip-right">
                <img src="{{asset('images/open_engine/btrx2/16.png')}}"
            </div>
            </div>

            <div class="flex justify-center items-center pt-8" data-aos="fade-left">
                <div>
                    <p class="text-blue-700 font-bold text-2xl pb-5">{{t('Mobile App')}}</p>
                    <p class="text-gray-700 pr-5">{{t('With amoCRM mobile apps, you can work wherever and whenever you want. The apps are working online and allow you to view up-to-date data without delay, but the most important thing is now everything The web version features are available in your phone')}}</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto max-w-7xl">
            <div class="flex justify-center items-center pt-8" data-aos="fade-right">
                <div>
                    <p class="text-blue-700 font-bold text-2xl pb-5"> {{t('Gift time')}}</p>
                    <p class="text-gray-700 pr-5 mb-10"> {{t('Order amoCRM and we will give you a certificate for 500,000 soums. Certificate you can use it when ordering our companys services')}}</p>
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                       Go to telegram <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="flex justify-center pt-8 order-first md:order-none" data-aos="flip-left">
                <img src="{{asset('images/open_engine/btrx2/17.png')}}" alt="">
            </div>
        </div>
    </div>
        </div>
<div class="mt-48">
        <div class="bg-gray-300 h-12"></div>
        @include('front.Components.platformForm')
    <div class="flex justify-center items-center my-20 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-700 text-center leading-8"> {{t('Implementation stages')}} <br>
            {{t('CRM systems')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class=" text-9xl font-bold  text-gray-300 "
              >
              4
              </p>
          </div>
    </div>
    <div class="container mx-auto grid justify-center ">
        <div class="flex justify-center flex-col lg:flex-row">
            <div class="  bg-white rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">01</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('DEMONSTRATION OF AMOCRM FEATURES')}}</h1>
            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">02</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('COLLECTING AND DESCRIBING BUSINESS PROCESSES')}}</h1>
            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">03</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('BASIC IMPLEMENTATION OF AMOCRM')}}</h1>
            </div>
            <div class=" p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">04</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('IMPLEMENTATION OF THE NECESSARY FUNCTIONALITY')}}</h1>
            </div>
        </div>
        <div class="flex justify-center flex flex-col lg:flex-row">
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-sm py-3 rounded-full">05</p>
                <h1 class="text-gray-700 font-bold text-sm py-5 hover:text-white">{{t('PERSONAL AUTOMATION')}}</h1>
            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">06</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('TRAINING OF THE MANAGER AND PERSONNEL')}}</h1>
            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">07</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('IMPLEMENTING BUSINESS INTELLIGENCE')}}</h1>
            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">08</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">{{t('TECHNICAL SUPPORT')}}</h1>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
            <div
              class="grid grid-cols-1 md:grid-cols-2 sm:px-20 relative justify-center"
            >
              <div class="relative pt-20">
                <div
                  class="bg-blue-500 py-20 lg:m-10 px-10 md:px-10 rounded-tl-3xl -left-28 max-w-lg absolute hidden sm:block"
                  data-aos="fade-right"
                >
                  <div class="flex justify-center items-center my-10 relative">
                    <h1 class="text-3xl font-bold text-blue-500 z-10">{{t('Why us?')}}</h1>
                    <p
                      class="item-center text-9xl font-bold absolute left-48 text-blue-500 z-0"
                    >
                      7
                    </p>
                  </div>
                  <p class="text-blue-500 text-md p-10 pt-10 text-center">{{t('Because here you can create a really cool website, with all the features you need')}}
                  </p>
                </div>
                <div
                  class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 rounded-br-3xl -bottom-28 max-w-lg relative"
                  data-aos="fade-right"
                >
                  <div class="flex justify-center items-center my-10 relative">
                    <h1 class="lg:text-3xl font-bold text-white z-10 text-center">
           {{t(' Advantages of the Bitrix24 box')}}
                    </h1>
                    <div class="flex text-center absolute item-center justify-center z-0">
                  <p
                    data-aos="fade-up"
                    class=" text-9xl font-bold  text-gray-300 "
                  >
                5
                  </p>
              </div>
                  </div>
                  <p class="text-white text-base text-md p-5 pt-10 text-center">
                {{t('Because here you can create a really cool website, with all the features you need')}}
                  </p>
                </div>
              </div>
              <div class="pt-20 grid justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                  <div class="p-5">
                    <div class="rounded-full inline-block border-indigo-600 border-4">
                        <p class="text-4xl py-9 px-12 text-indigo-600 font-bold">1</p>
                    </div>
                  <p class="text-base lg:text-xl text-gray-600">
                 {{t('More')}} <br/> {{t('features and integrations.')}}
                  </p>
                  </div>
                  <div class="p-5">
                    <div class="rounded-full inline-block border-indigo-600 border-4">
                        <p class="text-4xl py-9 px-12 text-indigo-600 font-bold">2</p>
                    </div>
                  <p class="text-base lg:text-xl text-gray-600">
{{t('It is installed on the companys server.')}}
                  </p>
                  </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                  <div class="p-5">
                <div class="rounded-full inline-block border-indigo-600 border-4">
                    <p class="text-4xl py-9 px-12 text-indigo-600 font-bold">3</p>
                </div>
                  <p class="text-base lg:text-xl text-gray-600">
                 {{t(' Individual settings.')}}
                  </p>
                  </div>
                  <div class="p-5">
                    <div class="rounded-full inline-block border-indigo-600 border-4">
                        <p class="text-4xl py-9 px-12 text-indigo-600 font-bold">4</p>
                    </div>
                  <p class="text-base lg:text-xl text-gray-600">
                {{t('When switching from the cloud version to the box, the data is saved.')}}
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <div class="grid grid-cols-1 md:grid-cols-2 mt-24">
        <div class="flex justify-center pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/btrx2/certificat.png')}}"
                                              alt="">
        </div>
        <div class="pt-8">
            <div class="flex justify-center items-center my-10 pt-10 " data-aos="fade-left">
                <h1 class="text-4xl font-bold text-blue-700 z-10">{{t('Certificates')}}</h1>
                <p  class=" text-9xl item-center font-bold absolute l-50 text-gray-300 z-0 opacity-50">
                    6
                </p>
            </div>
            <div>
                <p class="text-center text-gray-600 text-2xl sm:px-20" data-aos="fade-up">{{t('Our company is an official certified partner')}}
                    <br> {{t('amoCRM')}}</p>
            </div>
        </div>
    </div>
    <!--     -->
    <div class="bg-blue-700 z-20 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">{{t('Business automation')}}</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-400 opacity-50"
              >
               7
              </p>
          </div>
        </div>
    </div>
    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">
    </div>
    <div class="bg-gray-50 z-0" data-aos="fade-up">
        <div  class="text-xl lg:mx-24 mx-16 pt-20 text-gray-700 pb-20">
            <div class="z-0">
                <p>
                    {{t('Would you like to implement')}} </b>{{t('CRM systems')}}</b> {{t('and automate your business? Trust the CRM system setup')}}
                    <b>{{t('amoCRM partners in Tashkent,')}} </b> {{t('Open Engine Agency. This will help you send messages, emails, and')}}
                    {{t('advertising to your companys customers. You will also be able to track performance and')}}
                    <b>{{t('integrate IP telephony, Asterix turnkey')}} </b> . {{t('We will help you increase repeat sales.')}}
                    <br><br>
                   {{t(' We automate your business! We provide a program for the automation of trade, store and document flow. We perform the work promptly, confidentially and at reasonable prices. We will introduce you to we will teach you how to work with the system. We will also provide technical support. Automation Systems trade, Shop automation in Tashkent, Warehouse automation, warehouse automation accounting, Warehouse accounting, Trade management, Inventory accounting, Business software, Warehouse accounting program, A program for accounting for goods in a store, A program for accounting for sales, Label Printing Software, Trade Software, Store Software, bitrix24, Bitrix24 in Tashkent, bitrix24 partners in Tashkent, Official Partner of bitrix24 Uzbekistan, Implementation Bitrix in Tashkent')}}
                </p>
            </div>
        </div>
        <div class="flex justify-end pb-20">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                       Other <br/>
                       services
                    </h1>
                    <div class="flex text-center absolute item-center justify-center z-0">
                        <p data-aos="fade-up"  class=" text-9xl font-bold  text-gray-300 ">
                            8
                        </p>
                    </div>
                </div>
               @include('front.Components.platformFooter')
              </div>
            <div>
          </div>
        </div>
    </div>
</main>
@endsection
@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
