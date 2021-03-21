@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main class="overflow-hidden">

<div class="bg-black h-auto px-4 pt-20 pb-20">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide">
                {{t('SMM')}} <br> {{t('promotion in')}} <br> {{t('Tashkent')}}
              </div>
              <div class="lg:px-20">
                <a
                  href="#"
                  class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6"
                >
                 {{t('Get a consultation')}}
                </a>
              </div>
              </div>

          </div>

          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/smm_promotion/images/intro.svg')}}" alt="" />
          </div>
        </div>
      </div>




<div
          class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/smm_promotion/images/3.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             Creative


            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/smm_promotion/images/4.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             {{t('Design')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/smm_promotion/images/5.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             {{t('Targeting')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/smm_promotion/images/6.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             {{t('Marketing')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/smm_promotion/images/7.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
            {{t('Lead generation')}}
            </p>
          </div>
        </div>

<div class="flex justify-center items-center my-20 relative">
    <h1 data-aos="fade-right" class="text-4xl font-bold text-blue-700 z-10 text-center">{{t('What do you need SMM for?')}}</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-200 "
              >
                1
              </p>
          </div>
</div>

<div>
    <h1 class="justify-center flex text-3xl text-gray-600 leading-tight mb-10 text-center">{{t('Using SMM promotion <br> you can solve many problems')}}</h1>
</div>

<div class=" flex justify-center">
    <div style="grid-column-gap: 7rem" class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-2 mb-20">
        <div class="mt-5">
            <img src="{{asset('images/open_engine/smm_promotion/39.svg')}}" alt=""
                 class="pr-5 pt-5  -pl-5">
            <h1 class="text-gray-600 text-center"><b>{{t('Attracting visitors <br> to the companys website')}}</b></h1>
        </div>
        <div class="mt-5">
            <img src="{{asset('images/open_engine/smm_promotion/40.svg')}}" alt=""
                 class="pr-5 pt-5  -pl-5">
            <h1 class="text-gray-600 text-center"><b>{{t('Increase your <br> brand awareness')}} </b></h1>
        </div>
        <div class="mt-5">
            <img src="{{asset('images/open_engine/smm_promotion/41.svg')}}" alt=""
                 class="pr-5 pt-5  -pl-5">
            <h1 class="text-gray-600 text-center"><b>{{t('Maintenance ')}}<br>
                {{t('reputations')}}</b></h1>
        </div>

        <div>
            <img src="{{asset('images/open_engine/smm_promotion/42.svg')}}" alt=""
                 class="pr-5 pt-5  -pl-5">
            <h1 class="text-gray-600 text-center"><b>{{t('Attracting visitors')}} <br> {{t('to the companys website')}}</b></h1>
        </div>
        <div>
            <img src="{{asset('images/open_engine/smm_promotion/43.svg')}}" alt=""
                 class="pr-5 pt-5  -pl-5">
            <h1 class="text-gray-600 text-center"><b>{{t('Increase awareness')}} <br> {{t('your brand')}}</b></h1>
        </div>
        <div>
            <img src="{{asset('images/open_engine/smm_promotion/44.svg')}}" alt=""
                 class="pr-5 pt-5  -pl-5">
            <h1 class="text-gray-600 text-center"><b>{{t('Maintenance')}} <br>
               {{t('reputations')}}</b></h1>
        </div>
    </div>
</div>

<div class="flex justify-center items-center my-20 relative">
    <h1 data-aos="fade-right" class="text-4xl font-bold text-blue-700 z-10 text-center">{{t('Stage of work SMM promotion')}}</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl font-bold  text-gray-300 "
              >
                2
              </p>
          </div>
</div>


<div class="pt-20 pb-64 px-8">
          <div
            class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10"
          >
            <div
              data-aos="fade-right"
              class="max-w-md flex flex-col justify-center m-auto relative z-10"
            >
              <h1
                class="sm:text-3xl text-2xl font-bold text-gray-700 py-5 leading-none z-10"
              >
{{t('We study your business')}}
              </h1>
              <ul class="list-disc pl-5 text-gray-700 text-base">
               <li>{{t('Learning Your Business')}}</li>
               <li>{{t('Analyzing the market')}}</li>
               <li>{{t('Conducting an analysis of competitors')}}</li>
              </ul>
            </div>
            <div class="m-auto pt-8">
              <img src="{{asset('images/open_engine/smm_promotion/images/8.svg')}}" alt="" />
            </div>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
          >
            <div class="m-auto pt-8 order-last sm:order-none">
              <img src="{{asset('images/open_engine/smm_promotion/images/9.svg')}}" alt="" />
            </div>
            <div
              data-aos="fade-right"
              class="max-w-md flex flex-col justify-center m-auto relative z-10"
            >
              <h1
                class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none"
              >
                {{t('Defining targets SMM promotion')}}
              </h1>
              <ul class="pl-5 list-disc text-gray-700 text-base">
               <li>{{t('Defining the purpose of the ad')}}</li>
               <li>{{t('We decide on the design style of publications')}}</li>
               <li>{{t('Defining the target audience')}}</li>
              </ul>
            </div>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
          >
            <div
              data-aos="fade-right"
              class="max-w-md flex flex-col justify-center m-auto relative z-10"
            >
              <h1
                class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none"
              >
                {{t('Creating a strategy')}}
              </h1>
              <ul class="pl-5 list-disc text-gray-700 text-base">
                <li>{{t('Thinking through a step-by-step plan of promotions')}}</li>
               <li>{{t('We divide the content into selling, engaging and entertaining topics')}}</li>
                <li>{{t('We write catchy text and create bright pictures')}}</li>
              </ul>
            </div>
            <div class="m-auto pt-8">
              <img src="{{asset('images/open_engine/smm_promotion/images/10.svg')}}" alt="" />
            </div>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
          >
            <div class="m-auto pt-8 order-last sm:order-none">
              <img src="{{asset('images/open_engine/smm_promotion/images/11.svg')}}" alt="" />
            </div>
            <div
              data-aos="fade-right"
              class="max-w-md flex flex-col justify-center m-auto relative z-10"
            >
              <h1
                class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none"
              >
               {{t('Launching an advertising campaign')}}
              </h1>
              <ul class="pl-5 list-disc text-gray-700 text-base">
                <li>{{t('Launching ads on Facebook and Instagram')}}</li>
               <li>{{t('Publishing content')}}</li>
               <li>{{t('Setting up targeting')}}</li>
               <li>{{t('We monitor the reactions, respond to comments and process the negative')}}</li>
              </ul>
            </div>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
          >
            <div
              data-aos="fade-right"
              class="max-w-md flex flex-col justify-center m-auto relative z-10"
            >
              <h1
                class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none"
              >
{{t('Launching an advertising campaign')}}
              </h1>
              <ul class="pl-5 list-disc text-gray-700 text-base">
                <li>{{t('Launching ads on Facebook and Instagram')}}</li>
                <li>{{t('Publishing content')}}</li>
                <li>{{t('Setting up targeting')}}</li>
                <li>{{t('We monitor the reactions, respond to comments and process the negative')}}</li>
              </ul>
            </div>
            <div class="m-auto pt-8">
              <img src="{{asset('images/open_engine/smm_promotion/images/12.svg')}}" alt="" />
            </div>
          </div>

          <div
            class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
          >
            <div class="m-auto pt-8 order-last sm:order-none">
              <img src="{{asset('images/open_engine/smm_promotion/images/13.svg')}}" alt="" />
            </div>
            <div data-aos="fade-right" class="max-w-md pl-20 m-auto">
              <h1
                class=" text-3xl font-bold text-gray-700 py-5 leading-none -ml-5"
              >
                {{t('Filling and launching')}}
              </h1>
              <ul class="list-disc text-gray-700 text-base">
                <li>{{t('Filling with content')}}</li>
                <li>{{t('Performing the final check')}}</li>
                <li>{{t('Launching the site')}}</li>
                <li>{{t('Technical support of the site')}}</li>
              </ul>
            </div>
          </div>
        </div>

<div class="bg-gray-300 h-12 ">

</div>

@include('front.Components.platformForm')

<div class="flex justify-center items-center my-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Cases')}}</h1>
     <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
</div>

<div class="swiper-container-one">
    <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/smm_promotion/30.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-800"><b>{{t('Client:')}}</b></p>
                        <p class="text-gray-500 mt-1"> Formula plus</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Page maintenance period from:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 05.01.2018-05.02.2019</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Subscribers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 6000</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Instagram Followers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 20 000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Monthly coverage :')}}</b></p>
                        <p class="text-gray-500 mt-1"> 800 000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Increase in traffic:')}}</b></p>
                        <p class=" text-gray-500 mt-1"> 450%</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Increase in sales:')}}</b></p>
                        <p class=" text-gray-500 mt-1">300%</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Sold more than:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500 mt-1">2500 {{t('sets')}}</p>

                        <a href=""
                           class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                          {{t(' order')}}
                        </a>
                    </div>


                </div>
           </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/smm_promotion/31.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-800"><b>{{t('Client:')}}</b></p>
                        <p class="text-gray-500 mt-1">Divan by Demir</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Page maintenance period from:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 01.06.2019-30.09.2019</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Subscribers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 7000</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Instagram Followers:')}}</b></p>
                        <p class="text-gray-500 mt-1">13000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Monthly coverage:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 350 000 </p>



                        <p class="text-blue-800 mt-1"><b>{{t('Increase in traffic:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 500%</p>
    <div class="  mb-10">
       <p class="text-blue-800 mt-1 "><b> {{t('In detail:')}}</b></p>
                        <p><a href="https://www.facebook.com/divan.by.demir/" class="text-blue-800 border-b pb-5 ">https://www.facebook.com/divan.by.demir/</a>
                        </p>
    </div>


                        <a href=""
                           class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                           {{t(' order')}}
                        </a>
                    </div>


                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/smm_promotion/32.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-800"><b>{{t('Client:')}}</b></p>
                        <p class="text-gray-500 mt-1"> {{t('Furniture Factory')}} Keng Makon </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Page maintenance period from:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 2015 Until now</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Subscribers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 21 100</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Instagram Followers:')}}</b></p>
                        <p class="text-gray-500 mt-1">5825 </p>



                        <p class="text-blue-800 mt-1"><b>{{t('Monthly coverage :')}}</b></p>
                        <p class="text-gray-500 mt-1">820 000 </p>
    <div class="  mb-10">
       <p class="text-blue-800 mt-1 "><b>{{t('In detail:')}}</b></p>
                        <p><a href="https://www.facebook.com/kengmakon.uz" class="text-blue-800 border-b pb-5 ">https://www.facebook.com/kengmakon.uz</a>
                        </p>
    </div>


                        <a href=""
                           class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                           {{t(' order')}}
                        </a>
                    </div>


                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/smm_promotion/33.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-800"><b>{{t('Client:')}}</b></p>
                        <p class="text-gray-500 mt-1">Pinar</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Page maintenance period from:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 10.02.2019-10.04.2019</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Subscribers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 1500</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Instagram Followers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 2000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Monthly coverage :')}}</b></p>
                        <p class="text-gray-500 mt-1">500 000</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Increase in traffic:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500 mt-1"> 420%</p>


                        <a href=""
                           class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{t('order')}}
                        </a>
                    </div>


                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/smm_promotion/34.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-800"><b>{{t('Client:')}}</b></p>
                        <p class="text-gray-500 mt-1">Mashhura oquv markazi </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Page maintenance period from:')}}</b></p>
                        <p class="text-gray-500 mt-1">01.06.2019-01.08.2019</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Subscribers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 3000</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Instagram Followers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 4000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Monthly coverage :')}}</b></p>
                        <p class="text-gray-500 mt-1"> 250 000</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Increase in traffic:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500 mt-1"> 170%</p>


                        <a href=""
                           class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                           {{t(' order')}}
                        </a>
                    </div>


                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/smm_promotion/35.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-800"><b>{{t('Client:')}}</b></p>
                        <p class="text-gray-500 mt-1">Smile Design </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Page maintenance period from:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 10.01.2019-05.08.2019</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Subscribers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 3000</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Instagram Followers:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 6000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Monthly coverage :')}}</b></p>
                        <p class="text-gray-500 mt-1">150 000 </p>

                        <p class="text-blue-800 mt-1"><b>{{t('Increase in traffic:')}}</b></p>
                        <p class="text-gray-500 mt-1"> 250%</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Increase in sales:')}}</b></p>
                        <p class="text-gray-500 mt-1">200%</p>

                        <p class="text-blue-800 mt-1"><b>{{t('Sold more than:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500 mt-1">1500</p>

                        <a href=""
                           class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            order
                        </a>
                    </div>


                </div>
            </div>

    </div>
</div>



<div class="flex justify-center items-center my-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('We use it in our work')}}</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
</div>

<div class="flex justify-center items-center py-20 ">

          <div class="max-w-5xl grid grid-cols-2 md:grid-cols-4 container justify-center text-center">
            <div class="">
              <div class="grid justify-center">
                  <img
                class="shadow-lg rounded m-0  p-4 rounded-full"
                src="{{asset('images/open_engine/smm_promotion/images/23.svg')}}"
                alt=""
              />
              </div>
              <p class="text-center font-bold text-lg text-center text-gray-600 mt-5">
                Instagram
              </p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img
                class="shadow-lg rounded  p-4 rounded-full"
                src="{{asset('images/open_engine/smm_promotion/images/24.svg')}}"
                alt=""
              />
                </div>

              <p class="font-bold text-lg text-center text-gray-600 mt-5">
                Facebook
              </p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img
                class="shadow-lg p-4 rounded-full"
                src="{{asset('images/open_engine/smm_promotion/images/25.svg')}}"
                alt=""
              />
                </div>

              <p class="font-bold text-lg text-center text-gray-600 mt-5">Telegram</p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img
                class="shadow-lg rounded  p-4 rounded-full"
                src="{{asset('images/open_engine/smm_promotion/images/26.svg')}}"
                alt=""
              />
                </div>

              <p class="font-bold text-lg text-center text-gray-600 mt-5">
                Youtube
              </p>
            </div>

          </div>

</div>




<div class="flex justify-center items-center my-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Why us?')}}</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                5
              </p>
          </div>
</div>

<div class=" flex justify-center">


    <div class="grid md:grid-cols-3 grid-cols-1">
        <div class="flex justify-center pt-8">
            <div>
                <div class="mb-20">
                    <img src="{{asset('images/open_engine/smm_promotion/images/27.svg')}}" alt="">
                    <p class="text-gray-600 text-lg ml-10">{{t('Certified <br> specialists')}}</p>
                </div>

                <div class="mt-20">
                    <img src="{{asset('images/open_engine/smm_promotion/images/28.svg')}}" alt="">
                    <p class="text-gray-600 text-lg ml-10">{{t('More than 50 cases <br> in the portfolio')}}</p>
                </div>
            </div>
        </div>



        <div class="flex items-center pt-8">
            <img src="{{asset('images/open_engine/smm_promotion/images/31.svg')}}" alt="">
        </div>


        <div class="flex justify-center pt-8">
            <div>
                <div class="mb-20">
                    <img src="{{asset('images/open_engine/smm_promotion/images/29.svg')}}" alt="">
                    <p class="text-gray-600 text-lg ml-10">20 {{t('brands are now <br> in the works')}}</p>
                </div>

                <div class="mt-20">
                    <img src="{{asset('images/open_engine/smm_promotion/images/30.svg')}}" alt="">
                    <p class="text-gray-600 text-lg ml-10">7 {{t('years of work <br> experience')}} </p>
                </div>
            </div>

        </div>


    </div>
</div>

<div class="flex justify-center items-center my-20 relative">
    <h1 data-aos="fade-right" class="text-4xl font-bold text-blue-700 z-10 text-center">{{t('Prices and tariffs')}}</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                6
              </p>
          </div>
</div>


      <div
        class="grid grid-cols-1 lg:grid-cols-3 container m-auto justify-center lg:p-20"
        data-aos="fade-right"
      >
        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-2xl rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>Start</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1 class="border-b py-5 text-2xl text-gray-600">
                <span class=" text-gray-600"><b>850 USD</b></span> {{t('per month')}}
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
             </li>{{t('Publishing 8 posts')}}</li>
             <li> {{t('Developing a strategy and content plan')}}</li>
             <li>{{t('Moderation of comments, <br> message')}}</li>
             <li>{{t(' Maintaining a page in a single language')}}</li>
             <li>{{t('Page layout')}}</li>
             <li>{{t('Setting up and maintaining advertising')}}</li>
             </li>{{t(' Photo shoot')}}</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""

                class="mb-28 bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
               {{t(' order')}}
              </a>
            </div>
          </div>
        </div>

        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>{{t('Business')}}</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1  class=" text-2xl border-b py-5 text-gray-600">
                <span class=" text-gray-600"> <b>1100 USD</b></span>{{t(' per month')}}
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
            </li>Publishing 10 posts</li>
            <li> {{t('Developing a strategy and content plan')}}</li>
            <li>{{t('Moderation of comments, post')}}</li>
            <li>{{t('Maintaining a page in two languages')}}</li>
            <li>{{t('Page layout')}}</li>
            <li> {{t('Setting up and running ads')}}</li>
            </li> {{t('Photo session')}} + 360 °</li>
            <li> {{t('Setting up lead generation')}}</li>
            <li>{{t('Connecting CRM systems')}}</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""

                class="bg-blue-700 rounded-full mb-20 text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                {{t('order')}}
              </a>
            </div>
          </div>
        </div>

        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>VIP</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1 class="text-2xl border-b py-5 text-gray-600">
                <span class=" text-gray-600"><b> 1500 USD</b></span> {{t('per month')}}
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
              </li>{{t('Publishing 12 posts')}}</li>
              <li>{{t('Development of a strategy and content plan')}}</li>
              <li>{{t('Moderation of comments, post')}}</li>
              <li>{{t('Maintaining a page in three languages')}}</li>
              <li>{{t('Page layout')}}</li>
              <li>{{t('Setting up and maintaining advertising')}}</li>
              <li>{{t('Photo session')}} + 360 °</li>
              <li>{{t('Video posts')}}
              <li>{{t('Setting up Lead generation')}}</li>
              <li>{{t('Connecting CRM systems')}}</li>
              <li>{{t('Setting up and maintaining pixel facebook')}}</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""
                class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                {{t('order')}}
              </a>
            </div>
          </div>
        </div>
      </div>



<div class="flex justify-center">
        <div
          class="grid grid-cols-1 md:grid-cols-2 sm:px-20 relative justify-center"
        >
          <div class="relative pt-20">
            <div
              style="border-radius: 200px 0 200px 0; left: -80px"
              class="bg-blue-500 py-20 lg:m-10 px-10 md:px-10 max-w-lg absolute hidden sm:block"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="text-3xl font-bold text-blue-500 z-10">{{t('Why us?')}}</h1>
                <p

                  class="item-center font-bold text-9xl absolute left-48 text-blue-500 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-blue-500 text-md p-10 pt-10 text-center">
             {{t('Because here you can create a really cool website,')}}
             {{t('with all the features you need')}}
              </p>
            </div>
            <div
              style="border-radius: 0 0 200px 0; top: 80px"
              class="bg-blue-700 py-20 lg:m-10 sm:px-10 md:px-10 max-w-lg relative"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="lg:text-3xl font-bold text-white z-10">
                 {{t('Why us?')}}
                </h1>
                <p

                  class="item-center font-bold text-9xl absolute left-48 text-gray-300 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-white text-base text-md p-5 pt-10 text-center">
              {{t('Because here you can create a really cool website,')}}
              {{t('with all the features you need')}}
              </p>
            </div>
          </div>

          <div class="pt-20 md:mt-20">
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/facebook_certificate.png"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/facebook_certificate.png"
                  alt=""
                />
              </div>
            </div>
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/facebook_certificate.png"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/facebook_certificate.png"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>








<div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
     data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">{{t('SMM promotion')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="  font-bold text-9xl  text-gray-400 opacity-50"
              >
                8
              </p>
          </div>
    </div>
</div>

<div class="bg-gray-100 h-12 z-10" data-aos="fade-up-right"></div>
<div class="bg-gray-50 z-0" data-aos="fade-up-right">
    <div  class="pt-20 textxl text-gray-700 pb-20">

        <div style="margin-left: 20%; margin-right: 20%;" class="z-0 text-gray-600 text-lg">
            <p>
              <b>{{t('Marketing agency in Tashkent')}} </b> "Open Engine" {{t('offers a wide range of services for')}} <b>{{t('business promotion')}}
              {{t('in social networks.')}}</b> {{t('We have extensive experience in')}} <b>{{t('SMM in Tashkent, develop a promotion strategy')}}</b> {{t('and')}}
              {{t('analyze the companys audience . We offer the following services: <b>advertising on Instagram, advertising on Facebook,')}}
              {{t('Tik Tok advertising, Tik Tok promotion, targeted advertising, content plan creation, development')}}
              {{t('the design of your pages, adapted to each social network')}}</b> . {{t('Contact our')}} <b>{{t('SMM agency in')}}
              {{t('Tashkent')}}</b> {{t('and get the most effective')}} <b>{{t('SMM promotion')}}</b> {{t('in social networks.')}}
                <br>
                <br>
               {{t('Lets make your brand recognizable in social networks! Promotion in social networks allows you to achieve your goals')}}
               {{t('business goals that are difficult to achieve with standard advertising campaigns. Proper SMM promotion')}}
               {{t('(online advertising, maintaining pages in Instagram and Facebook, targeted advertising ) allows you to build')}}
               {{t('communication with the user, increase brand loyalty and open a new business for your business')}}
               {{t('an effective channel for sales growth. We employ the best SMM specialists who know a lot about the Internet')}}
               {{t('advertising. you can order SMM promotion directly on our website. We will answer all your questions')}}
               {{t('questions. We have the most pleasant prices for SMM in Tashkent. Advertising agency in Tashkent. Online advertising,')}}
               {{t('online advertising, order online advertising.')}}
            </p>
        </div>

        <div class="flex justify-end pb-20">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                      {{t('Other')}} <br/>
                      {{t('services')}}
                    </h1>
                    <div class="flex text-center absolute item-center justify-center z-0">
                        <p data-aos="fade-up" class=" text-9xl font-bold  text-gray-300 ">
                            9
                        </p>
                    </div>
                </div>


                @include('front.Components.platformFooter')
            </div>
            <div></div>
        </div>
</div>

</main>


@endsection


@section('js')

@endsection

