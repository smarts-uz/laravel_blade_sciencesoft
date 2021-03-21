@extends('front.layout_platform')

@section('css')

@endsection

@section('main')

<main class="overflow-hidden">

<div class="bg-black h-auto px-4 pt-20 pb-10">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
              >
             {{t('App development for android and iOS')}}
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
            <img src="{{asset('images/open_engine/mobil_razbotka/1.svg')}}" alt="" />
          </div>
        </div>
      </div>


            <div
          class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16 max-w-7xl"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/mobil_razbotka/2.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Google play
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/mobil_razbotka/3.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Android
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/mobil_razbotka/4.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              {{t('Automatization')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/mobil_razbotka/5.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              IOS
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/mobil_razbotka/6.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Appstore
            </p>
          </div>
        </div>



    <div class="flex justify-center items-center my-20 relative ">
        <h1 class="md:text-4xl text-3xl font-bold text-white z-10 text-blue-600 text-center">4 {{t('reasons to order development ')}}<br> {{t('applications in ')}}<span class="text-blue-300">Open Engine</span></h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl  font-bold  text-gray-300 "
              >
                1
              </p>
          </div>
    </div>


    <!--   -->
    <!---->
    <div class=" flex justify-center container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 max-w-7xl">

            <div class="flex justify-center">
                <div class="">
                    <div class="flex flex-col justify-center lg:justify-end px-10 py-5 " data-aos="fade-right">
                        <div class="lg:self-end self-center py-4">
                            <img class="" src="{{asset('images/open_engine/mobil_razbotka/7.svg')}}" alt="">
                        </div>
                        <div class="lg:self-end self-center lg:text-right text-center">
                            <p class=" font-bold text-xl text-gray-700">{{t('MAXIMUM OF DEVICES')}}</p>
                            <p class="text-gray-500">{{t('The application will work equally and stably on different platforms and devices')}}</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center lg:justify-end px-10 py-5 " data-aos="fade-right">
                        <div class="lg:self-end self-center py-4">
                            <img src="{{asset('images/open_engine/mobil_razbotka/8.svg')}}" alt="">
                        </div>
                        <div class="lg:self-end self-center lg:text-right text-center">
                            <p class="font-bold text-xl text-gray-700">{{t('MAKING AN ORDER')}}</p>
                            <p class="text-gray-500">{{t('We make this process as easy as possible for the user')}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center item-center" data-aos="flip-right">
                <img src="{{asset('images/open_engine/mobil_razbotka/11.svg')}}" alt="">
            </div>

            <div class="flex justify-center">
                <div>
                    <div class="flex flex-col justify-center lg:justify-start px-10 py-5 " data-aos="fade-left">
                        <div class="lg:self-start self-center py-4">
                            <img src="{{asset('images/open_engine/mobil_razbotka/9.svg')}}" alt="">
                        </div>
                        <div class="lg:self-start self-center lg:text-left text-center">
                            <p class=" font-bold text-xl text-gray-700">{{t('MAXIMUM CONVENIENCE')}}</p>
                            <p class="text-gray-500">{{t('We design an application with an intuitive interface and navigation for users')}}

                            </p>
                        </div>
                    </div>

                    <div class=" flex flex-col justify-center lg:justify-start px-10 py-5 " data-aos="fade-left">
                        <div class="lg:self-start self-center py-4">
                            <img src="{{asset('images/open_engine/mobil_razbotka/10.svg')}}" alt="">
                        </div>
                       <div class="lg:self-start self-center lg:text-left text-center">
                            <p class=" font-bold text-xl text-gray-700">{{t('PERFORMANCE')}}</p>
                            <p class="text-gray-500">App loading is accelerated as much as possible by reducing the weight of images and scripts</p>
                       </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<div class="h-56 bg-blue-700 max-w-5xl rounded-r-2xl z-10 relative">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">Industries</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl  font-bold  text-gray-400 "
              >
                2
              </p>
          </div>
            </div>
        </div>


        <div class="flex relative justify-center flex-col md:flex-row mx-20 z-20 -mt-20">
            <div class=" bg-white rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/1.svg')}}" alt="" class="mx-auto">
                </div>
                <div class=" py-1 text-center">
                    <h1 class="text-gray-700 text-md">{{t('Complex projects')}}</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('News')}}</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Online')}} <br> {{t('store')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Taxi')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Delivery')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Cafe\Restaurant')}}</h1>
                </div>
            </div>

        </div>








<div class="mt-48">


        <div class="bg-gray-400 h-12 ">

            </div>


            @include('front.Components.platformForm')

    <div class="grid grid-cols-1 lg:grid-cols-4 container mx-auto gap-20 my-20 max-w-7xl px-4">
        <div class="flex justify-center items-center relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Stage of work')}}</h1>
            <p data-aos="fade-down"
               class="item-center font-bold absolute text-9xl left-24 text-gray-300 z-0">
                3</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">1</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Problem statement')}}</p>
            <p class="text-gray-600">{{t('We study the market and potential target audience to make a project effective and special.')}}</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">2</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Prototyping')}}</p>
            <p class="text-gray-600">{{t('We create the architecture of our project – we develop a navigation model, screens and other elements.')}}</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">3</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Design and layout')}}</p>
            <p class="text-gray-600">{{t('Based on the prototype, our designers create the final visual appearance of the project. We make up for the necessary devices.Based on the prototype, our designers create the final visual appearance of the project.')}}
               {{t('We make up for the necessary devices')}}.</p>
        </div>

        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">4</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Completion of development')}}</p>
            <p class="text-gray-600">{{t('We finish the application code and prepare it for further stages')}}</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">5</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Testing')}}</p>
            <p class="text-gray-600">{{t('We attract potential users for the app and conduct beta testing project functionality.')}}</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">6</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Launch')}}</p>
            <p class="text-gray-600">{{t('We publish the finished application. We quickly collect reviews and identify the smallest ones shortcomings.')}}</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">7</p>
            <p class="font-bold text-gray-700 text-2xl py-3">{{t('Technical support')}}</p>
            <p class="text-gray-600">{{t('Technical support')}}</p>
        </div>


    </div>


    <div class="flex justify-center items-center relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Cases')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
    </div>

    <div class="swiper-container-one">
        <div class="swiper-wrapper">

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>{{t('Client')}}</b></p>
            <p class="text-gray-500"> iMan Capital </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Direction')}}</b></p>
            <p class="text-gray-500"> P2P {{t('Platform')}}  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Platform')}}:</b></p>
            <p class="text-gray-500">Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                {{t('order')}}
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/12.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>{{t('Client')}}</b></p>
            <p class="text-gray-500">  Kun.uz  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Direction')}}</b></p>
            <p class="text-gray-500">  Новости и СМИ.  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Platform')}}:</b></p>
            <p class="text-gray-500"> IOS, Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                {{t('order')}}
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/13.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>{{t('Client')}}</b></p>
            <p class="text-gray-500">  Orzon.uz  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Direction')}}</b></p>
            <p class="text-gray-500">  {{t('online store')}}   </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Platform')}}:</b></p>
            <p class="text-gray-500"> IOS-Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                {{t('order')}}
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/14.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>{{t('Client')}}</b></p>
            <p class="text-gray-500">  Xabardor  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Direction')}}</b></p>
            <p class="text-gray-500">  {{t('News')}}  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Platform')}}:</b></p>
            <p class="text-gray-500"> IOS - Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                {{t('order')}}
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/15.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>{{t('Client')}}</b></p>
            <p class="text-gray-500">  Human.uz  </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Direction')}}</b></p>
            <p class="text-gray-500"> {{t('News and media.')}} </p>

            <p class="text-blue-700 mt-3.5"><b>{{t('Platform')}}:</b></p>
            <p class="text-gray-500"> IOS, Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                {{t('order')}}
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/16.png')}}" alt="">
        </div>
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
                <h1 class="text-3xl font-bold text-blue-500 z-10">{{t('why us?')}}</h1>
                <p

                  class=" text-9xl item-center font-bold absolute left-48 text-blue-500 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-blue-500 text-md p-10 pt-10 text-center">
               {{t(' Because here you can create a really cool website,')}}
                {{t('with all the features you need')}}
              </p>
            </div>
            <div
              style="border-radius: 0 0 200px 0; top: 80px"
              class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 max-w-lg relative"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="lg:text-3xl font-bold text-white z-10">
                  {{t('why us?')}}
                </h1>
                <p

                  class="item-center font-bold text-9xl absolute left-48 text-gray-400 z-0"
                >
                 5
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
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>
            </div>
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>









    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
          {{t('why us...')}}
        </h1>

        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
6
              </p>
          </div>
      </div>





    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 container mx-auto my-20 max-w-7xl">
        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/17.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">{{t('Application <br> totally yours')}}</p>
            <p class="text-gray-700">{{t('After the end of the development <br>, we transfer all rights to the <br> application to you.')}}</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/18.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">{{t('Work by agreement')}}</p>
            <p class="text-gray-700">{{t('We work under the contract drawn up by <br>. Legal entity <br> (LLC and sole proprietor).')}}</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/19.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">{{t('Transparent')}} <br> {{t('process')}}</p>
            <p class="text-gray-700">{{t('We give you test access to the application throughout the work.')}}</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/20.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">{{t('Warranty – 1 year')}}</p>
            <p class="text-gray-700">{{t('Free of charge, we provide the functionality of all the functions specified in the T. Z.')}}</p>
        </div>


        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/21.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">100% {{t('execution and <br> delivery of projects')}}</p>
            <p class="text-gray-700">{{t('We refine the application until it works exactly as it should specified in T. Z.')}}</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/22.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">From idea to <br> publications</p>
            <p class="text-gray-700">We perform a full cycle of creating an application. We publish it in the App Store and Google Play.</p>
        </div>


        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/23.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">{{t('From idea to ')}}<br> {{t('publication')}}</p>
            <p class="text-gray-700">{{t('Tim Leader, iOS/Android developers, designer, analyst, tester, marketer.')}}</p>
        </div>


        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/24.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">{{t('From idea to')}} <br>
                {{t('publication')}}</p>
            <p class="text-gray-700">{{t('We provide technical support after the project is completed: we add new features and updates')}}</p>
        </div>
    </div>


    <div class="flex justify-center items-center my-10 pt-10 " data-aos="fade-right">
        <h1 class="text-4xl font-bold text-blue-700 z-10">{{t('Prices and tariffs')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                7
              </p>
          </div>
    </div>


    <div class=" max-w-3xl flex container m-auto justify-between md:px-20  py-20" data-aos="fade-right">

        <div class="flex-1 transform hover:scale-110 duration-200">
            <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
                <p class="text-3xl text-white text-center"><b>{{t('Mobile application development')}}</b></p>
            </div>
            <div class="shadow-2xl rounded-3xl px-10 py-10 m-5 ">

                <ul class=" text-gray-700 text-lg py-5">
                   <li class="text-center text-3xl">{{t('Price:')}}<b> 2 000 000 {{t('sum')}}</b> </li>
                </ul>
                  <ul class=" text-gray-700 py-6 border-t border-gray-400">
                                   <li class="text-center text-xl">{{t('We dont have standard rates for the mobile app')}}</b> </li>
                                </ul>
                <div class=" justify-center flex">
                    <a href=""
                       class=" bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                        {{t('order')}}
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">{{t('Mobile App')}}</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-400 opacity-50"
              >
                8
              </p>
          </div>
        </div>
    </div>

    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

    </div>


    <div class="bg-gray-50 z-0" data-aos="fade-up">
        <div  class="pt-20 text-xl lg:mx-24 mx-16 text-gray-700 pb-20">

            <div class="z-0">
                <p>
                   <b> {{t('Mobile app development in Uzbekistan')}}</b> {{t('is gaining momentum. We develop')}} <b>{{t('mobile applications')}}
                   {{t('for business.')}}</b> {{t('We study your business and create a technical task based on the needs of the business.')}}
                   {{t('We create an attractive and intuitive interface based on your corporate identity.')}} <b>{{t('order the')}}
                   {{t('app for')}} iOS {{t('and')}} Android</b> {{t('is available in one click on our website. We have the best')}} < b>iOS {{t('and')}} Android
                   {{t('developers in Tashkent.')}}</b> {{t('Entrust')}} <b>{{t('the creation of a mobile application in Tashkent')}}</b> {{t('to us and get')}}
                   {{t('technical support of the application.')}}
                </p>
            </div>


        </div>
        <div class="flex justify-end pb-20">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                       {{t('Other')}} <br/>
                       {{t('services')}}
                    </h1>
                    <div class="flex text-center absolute item-center justify-center z-0">
                        <p data-aos="fade-up"  class="text-9xl  font-bold  text-gray-300 ">
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
