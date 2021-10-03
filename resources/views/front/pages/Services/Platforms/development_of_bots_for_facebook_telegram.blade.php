@extends('front.layout_platform')

@section('css')

@endsection

@section('main')

<main class="overflow-x-hidden overflow-y-hidden">


<div class="bg-black h-auto px-4 pt-20 pb-10">
        <div
          class="py-8 grid grid-cols-1  md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 lg:leading-relaxed"
              >
              {{t(' Development of bots <br> for telegram <br> in Tashkent')}}
              </div>
              <div class="lg:px-20">
                <a
                  href="#"
                  class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6"
                >
                 {{t(' Get a consultation')}}
                </a>
              </div>
              </div>

          </div>

          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/facebook_telegram/1.svg')}}" alt="" />
          </div>
        </div>
      </div>



        <div
          class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16 pb-32"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/facebook_telegram/2.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
            {{t(' Creative')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/facebook_telegram/3.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
            {{t(' Design')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/facebook_telegram/4.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             {{t(' Targeting')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/facebook_telegram/5.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             {{t('Marketing')}}
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/facebook_telegram/6.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
          {{t(' Lead Generation')}}
            </p>
          </div>
        </div>



    <div class=" flex justify-center">
        <div class="grid grid-cols-1 lg:grid-cols-3">

            <div class="flex justify-center">
                <div>
                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5  shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{asset('images/open_engine/facebook_telegram/7.svg')}}" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">{{t('Save time and')}} <br> {{t('finance')}}</p>
                       </div>
                    </div>
                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5 mt-10 shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{asset('images/open_engine/facebook_telegram/8.svg')}}" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">{{t('increasing the audience of')}} <br> {{t('messengers')}}</p>
                       </div>
                    </div>
                </div>
            </div>

            <div class="bg-blue-600 py-10 container rounded-lg p-4">
                <div class="flex justify-center">
                    <div class="flex justify-center items-center my-5 relative pt-16">
                        <h1 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-white z-10 ">{{t('What is a chatbot?')}}</h1>
                        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                1
              </p>
          </div>
                    </div>
                </div>
                <p class="p-10 text-white text-center">
                   {{t(' A Telegram bot is a virtual conversationalist that is embedded in messengers and helps businesses to be successful. Closer to the customers. This is an automated intelligent system for communicating with users.')}}
                </p>

            </div>

            <div class="flex justify-center">
                <div>
                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5  shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{asset('images/open_engine/facebook_telegram/9.svg')}}" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">{{t('Simple <br> usability')}}</p>
                       </div>
                    </div>

                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5 mt-10 shadow-xl">
                        <div class="flex justify-center">
                            <img src="{{asset('images/open_engine/facebook_telegram/10.svg')}}" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">{{t('You are automatically <br>ahead of the competition')}}</p>
                       </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <div class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative h-56">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">{{t('Why us?')}}</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold  text-gray-400 opacity-50 text-9xl"
              >
                2
              </p>
          </div>
            </div>
        </div>


        <div class="flex relative justify-center flex-col md:flex-row mx-20 -mt-20 z-20">
            <div class=" bg-white rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/1.svg')}}" alt="" class="mx-auto">
                </div>
                <div class=" py-1 text-center">
                    <h1 class="text-gray-700 text-md">{{t('There is not a single failed')}} <br>{{t(' project')}}</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Colossal')}} <br> {{t('experience in')}} <br>{{t(' promotion')}}</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Expert')}} <br>{{t('understanding of')}} <br>{{t(' algorithms')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Removing sites')}} <br> {{t('from')}} <br> {{t('filters')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Hundreds of')}} <br> {{t('satisfied')}} <br>{{t(' customers')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('A team of <br> experienced ')}}<br> {{t('specialists')}}</h1>
                </div>
            </div>

        </div>


    <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto my-20 mb-64">
        <div class="pt-8">
            <div class="flex justify-center">
                <div>
                    <div class="flex justify-center items-center my-10" data-aos="fade-right">
                        <h1 class="text-4xl font-bold text-blue-700 z-10 text-center leading-8">{{t('Stage creating telegrams ')}}<br>{{t('bot')}}</h1>
                         <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
                    </div>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">1</span> {{t('Introduction to the business')}}</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">2</span> {{t('Preparation of technical specifications')}}</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">3</span> {{t('Creating behavior scenarios')}}</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">4</span> {{t('Preparing the platform')}}</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">5</span>{{t('Connecting messengers')}}</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">6</span> {{t('Testing')}}</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">7</span> {{t('Full support and analytics')}}</p>
                </div>
                </div>
        </div>
        <div class="flex items-center pt-8">
            <img src="{{asset('images/open_engine/facebook_telegram/17.svg')}}" alt="">
        </div>
    </div>

    <div class="bg-gray-300 h-12 ">

    </div>
    @include('front.Components.platformForm')

    <div class="flex justify-center items-center mt-40 relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Why us?')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
    </div>


    <div class=" flex justify-center container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 max-w-7xl">

            <div class="flex justify-center">
                <div>
                    <div class="px-10 py-5">
                        <img src="{{asset('images/open_engine/facebook_telegram/18.svg')}}" alt="">
                        <p class="text-2xl font-bold text-blue-700">{{t('Experience')}}</p>
                        <p class=" text-gray-700">{{t('Gained invaluable experience and customer trust')}}</p>
                    </div>
                    <div class="px-10 py-5">
                        <img src="{{asset('images/open_engine/facebook_telegram/19.svg')}}" alt="">
                        <p class="text-2xl font-bold text-blue-700">{{t('Speed')}}</p>
                        <p class=" text-gray-700">{{t('We always do all the work on time')}}</p>
                    </div>
                    <div class="px-10 py-5">
                        <img src="{{asset('images/open_engine/facebook_telegram/20.svg')}}" alt="">
                        <p class="text-2xl font-bold text-blue-700">  {{t('Customization')}}</p>
                        <p class=" text-gray-700">{{t('The bot can be changed and modified at any time')}}</p>
                    </div>
                </div>
            </div>

            <div class="relative">
               <img class="absolute right-1/2 top-1/4" src="{{asset('images/open_engine/facebook_telegram/robot.svg')}}" alt="">
                <img class="" src="{{asset('images/open_engine/facebook_telegram/24.svg')}}" alt="">

            </div>

            <div class="flex justify-center">
                <div>
                    <div class="px-10 py-5">
                        <img src="{{asset('images/open_engine/facebook_telegram/21.svg')}}" alt="">
                        <p class="text-2xl font-bold text-blue-700"> {{t(' Result')}}
                            </p>
                        <p class=" text-gray-700">{{t('We dive into your business and achieve maximum results')}}</p>
                    </div>

                    <div class="px-10 py-5">
                        <img src="{{asset('images/open_engine/facebook_telegram/22.svg')}}" alt="">
                        <p class="text-2xl font-bold text-blue-700">  {{t('Support')}}
                            </p>
                        <p class=" text-gray-700">{{t('We will always help and advise the client')}}</p>
                    </div>



                    <div class="px-10 py-5">
                        <img src="{{asset('images/open_engine/facebook_telegram/23.svg')}}" alt="">
                        <p class="text-2xl font-bold text-blue-700">  100% {{t('profit')}}
                            </p>
                        <p class=" text-gray-700">{{t('Absolutely all projects were accepted by the customers')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div data-aos="zoom-in" class="max-w-6xl mx-auto bg-white shadow-lg rounded-3xl mt-20">
        <div class="flex justify-center items-center relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Cases</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                5
              </p>
          </div>
        </div>

        <div class="splide pb-20">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center mt-14 pt-20"
              >
                <div class="">
                  <img src="{{asset('images/open_engine/facebook_telegram/25.png')}}" alt="" />
                </div>
                <div class="text-xl md:text-2xl p-5" data-aos="fade-up">
                  <p><b>{{t('Client')}}:</b></p>
                  <p>{{t('Furniture Factory ')}}Keng Makon</p>

                  <p><b>{{t('Year of creation')}}:</b></p>
                  <p>2020</p>

                  <p><b>{{t('Site Type')}}:</b></p>
                  <p>{{t('Development of an online store')}}.</p>

                  <p><b>{{t('Direction')}}:</b></p>
                  <p>{{t('Furniture')}}</p>

                  <p><b>{{t('Technology')}}:</b></p>
                  <p class="border-b pb-5 mb-10">1C</p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    {{t('order')}}
                  </a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center mt-14 pt-20"
              >
                <div class="">
                  <img src="{{asset('images/open_engine/facebook_telegram/26.png')}}" alt="" />
                </div>
                <div class="text-xl md:text-2xl p-5" data-aos="fade-up">
                  <p><b>{{t('Client')}}:</b></p>
                  <p>{{t('Furniture Factory')}} Keng Makon</p>

                  <p><b>{{t('Year of creation')}}:</b></p>
                  <p>2020</p>

                  <p><b>{{t('Site Type')}}:</b></p>
                  <p>{{t('Development of an online store')}}.</p>

                  <p><b>{{t('Direction')}}:</b></p>
                  <p>{{t('Furniture')}}</p>

                  <p><b>{{t('Technology')}}:</b></p>
                  <p class="border-b pb-5 mb-10">1C</p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    {{t('order')}}
                  </a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center mt-14 pt-20"
              >
                <div class="">
                  <img src="{{asset('images/open_engine/facebook_telegram/27.png')}}" alt="" />
                </div>
                <div class="text-xl md:text-2xl p-5" data-aos="fade-up">
                  <p><b>Client:</b></p>
                  <p>{{t('Furniture Factory')}} Keng Makon</p>

                  <p><b>{{t('Year of creation')}}:</b></p>
                  <p>2020</p>

                  <p><b>{{t('Site Type')}}:</b></p>
                  <p>Development of an online store.</p>

                  <p><b>{{t('Direction')}}:</b></p>
                  <p>Furniture</p>

                  <p><b>{{t('Technology')}}:</b></p>
                  <p class="border-b pb-5 mb-10">1C</p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    {{t('order')}}
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>


    <div class="flex justify-center items-center relative py-20">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Prices and tariffs')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                6
              </p>
          </div>
    </div>

    <div class="flex justify-center items-center py-10 transform hover:scale-110 duration-200">
        <div class="bg-white flex items-center shadow-lg  rounded-r-2xl">
            <div class="bg-black py-10 px-5 rounded-l-2xl">
                <img src="{{asset('images/open_engine/facebook_telegram/28.png')}}" alt="">
            </div>
            <div class="lg:text-3xl sm:text-lg text-gray-700 font-bold px-10">
                <p>{{t('from')}} 3 000 000 UZS</p>
            </div>
            <a href=""
               class=" bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                {{t('order')}}
            </a>
        </div>

    </div>



 <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">{{t('Development of telegram bots')}}</h1>
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


<div class="bg-gray-200 z-0" data-aos="fade-up">
    <div class="pt-20 text-2xl md:mx-24 mx-10 text-gray-700 pb-20">

        <div class="z-0">
            <p>
               {{t(' Want to')}} <b>{{t('order a website')}}</b> {{t('or')}} <b>{{t('buy a website in Tashkent')}}</b>? {{t('Call us! Our')}} < b>{{t('web studio')}} </b>
                {{t('applies its own approach to creating websites,')}} < b>{{t('developing online stores')}}</b>. {{t('They work for us')}}
                {{t('Experience ')}}<b>{{t('site developers and programmers in Uzbekistan')}}</b>. {{t('We devote enough time to everyone')}}
               {{t(' We are not working on a project and are not working on a thread. We are always ready to offer original solutions for the whole')}}
                {{t('complex of services <b>site development in Uzbekistan< / b> and & nbsp; site design. We do everything to ensure that your')}}
                {{t('the site performed the companys tasks beautifully and efficiently. We also provide')}} < b>{{t('technical support')}}
                {{t('sites in Uzbekistan.')}}</b>
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
        <div></div>
    </div>
</div>


</main>



@endsection


@section('js')

@endsection
