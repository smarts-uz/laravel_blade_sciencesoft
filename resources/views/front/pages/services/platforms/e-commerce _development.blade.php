@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main class="overflow-hidden">
      <div class="bg-black h-auto px-4 pt-32">
        <div
          class="py-8 grid lg:text-left grid-cols-1 text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20">

          <div data-aos="fade-right" class="flex justify-center items-center leading-loose">
              <div>
                <div class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 leading-8 ">
                    {{_trans(' Development')}}
                    <br>  {{_trans('of an
                    online')}} <br> {{_trans(' store')}}
                  </div>
                  <div class="lg:px-20">
                    <a
                      href="#"
                      class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6"
                    >
                       {{_trans('Get the consultation')}}
                    </a>
                  </div>
              </div>

          </div>

          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/e-commerce _development/images/intro.svg')}}" alt="" />
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1
          data-aos="fade-down"
          class="text-2xl md:text-4xl font-bold text-blue-700 z-10 text-center leading-10"
        >
         {{_trans('We develop online stores')}}  <br />
        {{_trans(' that sell')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold text-9xl text-gray-300 "
              >
                1
              </p>
          </div>
      </div>

      <div
        class="grid grid-cols-1 md:grid-cols-2 mx-auto justify-center items-center mb-20"
      >
        <div class="flex flex-col">
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module1_icon1.svg')}}" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">{{_trans(' GOLDEN PARTNER')}}</h1>

              <h1 class="pl-10 text-xl text-gray-700">
                <b>{{_trans('Certified partner')}} <br>  {{_trans('1C-Bitrix')}}</b>
              </h1>
            </div>
          </div>
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module1_icon2.svg')}}" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">{{_trans('FROM IDEA TO SALES')}}</h1>

              <h1 class="pl-10 text-xl text-gray-700">
                <b>{{_trans(' We carry out turnkey work')}}</b>
              </h1>
            </div>
          </div>
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="{{asset('images/open_engine/e-commerce _development/images/1/module1_icon3.svg')}}" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">{{_trans('GREAT EXPERIENCE')}}</h1>
              <h1 class="pl-10 text-xl text-gray-700">
                <b>{{_trans('More than 50 stores launched')}}</b>
              </h1>
            </div>
          </div>
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module1_icon4.svg')}}" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">{{_trans('WE GUARANTEE THE RESULT')}}</h1>

              <h1 class="pl-10 text-xl text-gray-700">
                <b>{{_trans('We fix the cost and terms of work')}} <br>{{_trans(' of work')}}</b>
              </h1>
            </div>
          </div>
        </div>
        <div data-aos="fade-left" class="flex md:justify-start justify-center">
          <img src="{{asset('images/open_engine/e-commerce _development/images/2/module1_img.svg')}}" alt="" />
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1
          data-aos="fade-down"
          class="text-4xl font-bold text-blue-700 z-10 text-center"
        >
        {{_trans(' Why choose us?')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold text-9xl  text-gray-300 "
              >
                2
              </p>
          </div>
      </div>

      <div
        class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center"
      >
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1 relative"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon1.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">01</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('AFFORDABLE STORE PRICE')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('from')}} 18 000 000 uzs</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon2.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">02</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('OPENS IN 1.5 SECONDS')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('Works fast')}}</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon3.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">03</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('STORE AVAILABLE 24/7')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('High reliability')}}</b></h1>
          </div>
        </div>

        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon4.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">04</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('USER-FRIENDLY')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('High conversion')}}</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon5.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">05</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('WORKS ON ALL DEVICES')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('100% responsive')}}</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon6.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">06</p>
          </div>

          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('WEBSITE IS ADAPTED FOR SEO')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('Easy to promote')}}</b></h1>
          </div>
        </div>

        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon7.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">07</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('WE AUTOMATE THE WORK OF THE STORE')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('Full customization')}}</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon8.svg')}}" alt=""  class="transform hover:scale-110"/>
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">08</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('WE CONNECT THE STORE WITH 1C')}}</h1>
            <h1 class="text-gray-700 text-xl"><b>{{_trans('Convenient to operate')}}</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon9.svg')}}" alt="" class="transform hover:scale-110" />
            <p class="bg-blue-600 px-10 py-9 font-bold text-2xl rounded-bl-full rounded-tr-md text-white absolute -top-0 -right-0 ">09</p>
          </div>
          <div class="p-5 bg-white">
            <h1 class="text-gray-600">{{_trans('THE STORE SELLS ON THE Y. MARKET')}}</h1>
            <h1 class="text-gray-700 text-xl">
              <b>{{_trans('We increase sales')}}</b>
            </h1>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1
          data-aos="fade-down"
          class="text-4xl font-bold text-blue-700 z-10 text-center"
        >
        {{_trans('Our guarantees
        ')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold text-9xl  text-gray-300 "
              >
                3
              </p>
          </div>
      </div>

      <div class="mb-64 flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-center">
          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon1.svg')}}"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">

{{_trans('We conclude a')}} <br />
{{_trans('contract for the development of an ')}} <br />{{_trans('online store')}}
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon2.svg')}}"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">

               {{_trans(' We prescribe')}} <br> {{_trans('the development time and')}} <br> {{_trans('penalties for missed deadlines')}}
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon3.svg')}}"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">

{{_trans('We fix the')}} <br />
{{_trans('development cost')}}
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon4.svg')}}"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">

               {{_trans(' We give a 1 year guarantee for the work performed')}}
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon5.svg')}}"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">

                {{_trans('We hand over a ready-made store and teach work')}}
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/2/module2_icon6.svg')}}"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">

                {{_trans('We provide the first sales of the store')}}
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-gray-100 h-12"></div>

      <div class="px-8">
        <div
          data-aos="zoom-in"
          class="max-w-3xl mx-auto bg-white shadow-2xl rounded-3xl p-10 sm:p-20 -mt-56"
        >
          <h1
            class="text-center text-xl sm:text-3xl font-semibold leading-tight text-blue-700"
          >
          {{_trans('Fill out the form right now and get a qualified free consultation.')}}
          </h1>
          <h2 class="text-lg p-6 pl-13">{{_trans('Name of the organization')}}</h2>
          <form>
            <label>
              <input
                type="text"
                placeholder="Пример: Open Engine"
                class="h-12 w-full border-b border-blue-700 outline-none"
              />
            </label>
          </form>



          <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 mt-10">
              <a
                href=""
                class="bg-blue-700 rounded-full text-white px-12 my-2 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
              >
               {{_trans(' Back to')}}
              </a>

              <a
                href=""
                class="bg-blue-700 rounded-full text-white my-2 px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
              >
              {{_trans(' Next')}}
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mr-4 sm:mr-4 md:mr-16">
        <div
          class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32"
          data-aos="fade-right"
        >
          <div class="flex justify-center items-center sm:pl-20 sm:pt-5">
            <h1
              class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10"
            >
           {{_trans(' Why are we developing online')}} <br>
             {{_trans('stores based on 1C-Bitrix?')}}
            </h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold text-9xl text-gray-400 opacity-50 ">
                4
              </p>
          </div>
          </div>
        </div>
      </div>


        <div class="container mx-auto">
            <p class="text-5xl text-blue-500 font-semibold py-10">
               {{_trans(' Bitrix is ​​the most popular CMS for e-commerce!')}}
            </p>

            <p class="text-gray-600 font-bold text-3xl pt-5">
               {{_trans(' Maximum functionality for online trading')}}
            </p>

               <p class="text-gray-500 text-2xl py-5">
               {{_trans(' The store on 1C-Bitrix has a complete set of solutions for selling goods online. Quick order, geo-identification, various currencies, discounts, bonus systems, automated delivery, online payment and checkout. The store of ready-made solutions has more than 10,000 ready-made modules. You will not overpay for development.')}}
               </p>

                <p class="text-gray-600 font-bold text-3xl pt-5">
                  {{_trans('  Convenient management')}}
                </p>

                <p class="text-gray-500 text-2xl py-5">
                   {{_trans('   A person who is not familiar with programming can manage an online store. The interface is user-friendly and has a clear logical structure. ')}}
              </p>

               <p class="text-gray-600 font-bold text-3xl pt-5">
                 {{_trans(' Native integration with 1C')}}
               </p>

               <p class="text-gray-500 text-2xl py-5">
                 {{_trans(' Fast and convenient filling is extremely important for an online store. 1C-Bitrix implements an exchange mechanism that is suitable for all major editions of 1C.')}}
               </p>

               <p class="text-gray-600 font-bold text-3xl pt-5">
                  {{_trans('Reliability and safety')}}
               </p>

               <p class="text-gray-500 text-2xl py-5">
                  {{_trans('The utmost attention is paid to the security of the system. Bitrix is ​​the only content management system certified by the FSTEC RF.')}}
               </p>

               <p  class="text-gray-600 font-bold text-3xl pt-5">
                  {{_trans('High-quality technical support')}}
               </p>

               <p class="text-gray-500 text-2xl py-5">
                 {{_trans(' You will always find a qualified developer to support and develop your online store. More than 10,000 teams throughout Russia are at your service. When creating a store on Bitrix, you are not tied to one developer.')}}
               </p>

        </div>


      <div class="flex justify-center items-center m-20 relative">
        <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
           {{_trans(' Cases')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-down"
                class="  font-bold  text-gray-300 opacity-50 text-9xl"
              >
                5
              </p>
          </div>
      </div>
      <div class="flex justify-center bg-green-500 p-10 lg:p-10 xl:p-20">
        <div class="text-white grid grid-cols-1 items-center sm:grid-cols-2">
          <div class="sm:px-8 lg:px-8">
            <img
              src="{{asset('images/open_engine/e-commerce _development/images/2/module6_img01.png')}}"
              alt=""
            />
          </div>
          <div class="flex justify-center">
            <div class="sm:px-8 lg:px-8 text-center 2xl:text-left ">
                <div class="text-2xl mb-8" data-aos="fade-up">
                  <p class="p-2 text-3xl"><b>  24 Pharm

                   </b></p>

                  <p class="p-1 text-2xl"><b>   {{_trans(' Site type:')}} </b></p>
                  <p class="p-1 text-2xl">  {{_trans(' Online store')}} </p>

                  <p class="p-1 text-2xl"><b>   {{_trans('Directions:')}} </b></p>
                  <p class="p-1 text-2xl">  {{_trans('Online pharmacy')}} </p>

                  <p class="p-1 text-2xl"><b>    {{_trans('Technology:')}} </b></p>
                  <p class="p-1 text-2xl">  {{_trans(' 1C Bitrix')}} </p>
                </div>
                <div class="">
                  <a
                    href=""
                    class="text-lg bg-white rounded-full text-green-500 px-8 py-3 transition duration-300 ease-in-out mr-6"
                  >
                    {{_trans(' Watch the case')}}
                  </a>
                </div>
              </div>
          </div>

        </div>
      </div>

      <div class="flex justify-center bg-red-500 p-10 lg:p-10 xl:p-20">
        <div class="text-white grid grid-cols-1 items-center sm:grid-cols-2">
            <div class="flex justify-center">
          <div class="sm:px-8 lg:px-8 text-center 2xl:text-right">
            <div class="text-2xl mb-8" data-aos="fade-up">
              <p class="p-2 text-2xl"><b>Chinbozor ©</b></p>

              <p class="p-1 text-2xl"><b>{{_trans('Site type:')}}</b></p>
              <p class="p-1 text-2xl">{{_trans('Online store')}}</p>

              <p class="p-1 text-2xl"><b>{{_trans('Directions:')}}</b></p>
              <p class="p-1 text-2xl">Housing</p>

              <p class="p-1 text-2xl"><b>{{_trans('Technology')}}:</b></p>
              <p class="p-1 text-2xl">{{_trans('1С Bitrix')}}</p>
            </div>
            <a
              href=""
              class="text-lg bg-white rounded-full text-red-500 px-8 py-3 transition duration-300 ease-in-out"
            >
             {{_trans('Watch the case')}}
            </a>
          </div>
            </div>
          <div class="sm:px-8 lg:px-8 order-first sm:order-none">
            <img
              src="{{asset('images/open_engine/e-commerce _development/images/2/module6_img02.png')}}"
              alt=""
            />
          </div>
        </div>
      </div>

      <div class="flex justify-center bg-red-300 p-10 lg:p-10 xl:p-20">
        <div class="text-white grid grid-cols-1 items-center sm:grid-cols-2">
          <div class="sm:px-8 lg:px-8">
            <img
              src="{{asset('images/open_engine/e-commerce _development/images/2/module6_img03.png')}}"
              alt=""
            />
          </div>
          <div class="flex justify-center">
          <div class="sm:px-8 lg:px-8 text-center 2xl:text-left">
            <div class="text-2xl mb-8" data-aos="fade-up">
              <p class="p-2 text-3xl"><b>Modo ©</b></p>

              <p class="p-1 text-2xl"><b>{{_trans('Site type:')}}</b></p>
              <p class="p-1 text-2xl">{{_trans('Online store')}}</p>

              <p class="p-1 text-2xl"><b>{{_trans('Directions:')}}</b></p>
              <p class="p-1 text-2xl">{{_trans(' Clothes and footwear
                ')}}</p>

              <p class="p-1 text-2xl"><b>{{_trans('Technology:')}}</b></p>
              <p class="p-1 text-2xl">1C Bitrix</p>
            </div>
            <a
              href=""
              class="text-lg bg-white rounded-full text-red-300 px-8 py-3 transition duration-300 ease-in-out"
            >
             {{_trans('Watch the case')}}
            </a>
          </div>
          </div>
        </div>
      </div>

      <div
        class="flex justify-center text-center items-center mt-40 mb-20 relative"
      >
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            {{_trans(' We dont abandon our customers
            ')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-down"
                class="  font-bold  text-9xl text-gray-300 "
              >
                6
              </p>
          </div>
      </div>

      <div>
        <p class="text-center p-10 text-gray-700 text-2xl" data-aos="fade-down">
             {{_trans('After development, we help to develop the project. Therefore, you can always count on:')}}
        </p>
        <div class="flex justify-center">
          <div
            class="grid grid-cols-1 sm:grid-cols-3 text-center items-center text-gray-700 text-lg mt-10"
          >
            <div class="mx-20" data-aos="fade-up">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/3/module7_icon1.svg')}}"
                alt=""
                class="mx-auto"
              />
              <p class="text-base"> {{_trans('Online store support')}}</p>
            </div>

            <div class="mx-20" data-aos="fade-up">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/3/module7_icon2.svg')}}"
                alt=""
                class="mx-auto"
              />
              <p class="text-base"> {{_trans('Product advertising')}}</p>
            </div>

            <div class="mx-20" data-aos="fade-up">
              <img
                src="{{asset('images/open_engine/e-commerce _development/images/3/module7_icon3.svg')}}"
                alt=""
                class="mx-auto"
              />
              <p class="text-base"> {{_trans('Website promotion')}}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center p-5 lg:p-10 xl:p-20">
        <div
          class="grid grid-cols-1 items-center sm:grid-cols-2 lg:grid-cols-3"
          data-aos="fade-right"
        >
          <div class="lg:col-span-2">
            <p class="text-blue-700 text-xl">
              <b> {{_trans('THE FUTURE OF ECOMMERCE HAS ALREADY HAPPENED!')}}</b>
            </p>
            <p

              class="text-blue-700 leading-8 text-3xl md:text-5xl py-10"
            >
              <b> {{_trans('Online store + CRM on ')}} <br /> {{_trans('1C-Bitrix24')}}</b>
            </p>
            <p class="text-gray-700 text-xl py-5 pb-10">
                 {{_trans('Experience a unique trading platform that connects')}} <br>  {{_trans('all sales channels')}}

            </p>

            <a
              href=""
              class="text-lg bg-blue-700 rounded-full text-white px-8 py-3 transition duration-300 ease-in-out"
            >
            {{_trans('  Order a consultation')}}
            </a>
          </div>
          <div
            data-aos="fade-left"
            class="sm:px-8 lg:px-8 pt-8 flex justify-center"
          >
            <img
              src="{{asset('images/open_engine/e-commerce _development/images/2/module8_img1.png')}}"
              alt=""
            />
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
                <h1 class="text-3xl font-bold text-blue-500 z-10">{{_trans('Who we are')}}</h1>
                <p
                  class="item-center text-9xl font-bold absolute left-48 text-blue-500 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-blue-500 text-md p-10 pt-10 text-center">
               {{_trans(' Our specialization is the creation and support of online stores and high-tech Internet projects on 1C-Bitrix.')}}
              </p>
            </div>
            <div
              style="border-radius: 0 0 200px 0; top: 80px"
              class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 max-w-lg relative"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="lg:text-3xl font-bold text-white z-10">
                   {{_trans(' Who we are')}}
                </h1>
                <p
                  class="item-center text-9xl font-bold absolute left-48 text-gray-300 z-0 opacity-50"
                >
                  7
                </p>
              </div>
              <p class="text-white text-base text-md p-5 pt-10 text-center">
               {{_trans(' Our specialization is the creation and support of online stores and high-tech Internet projects on 1C-Bitrix.')}}
              </p>
            </div>
          </div>

          <div class="pt-20" >
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5" data-aos="fade-left">
                <img
                  class=""
                  src="{{asset('images/open_engine/e-commerce _development/images/2/bx-cert.jpg')}}"
                  alt="bx-cert"
                />
              </div>

              <div class="p-5" data-aos="fade-left">
                <img
                  class=""
                  src="{{asset('images/open_engine/e-commerce _development/images/2/bx-cert2.jpg')}}"
                  alt=""
                />
              </div>
            </div>
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5" data-aos="fade-left">
                <img
                  class=""
                  src="{{asset('images/open_engine/e-commerce _development/images/2/bx-cert3.jpg')}}"
                  alt=""
                />
              </div>

              <div class="p-5" data-aos="fade-left">
                <img
                  class=""
                  src="{{asset('images/open_engine/e-commerce _development/images/2/bx-cert4.jpg')}}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            {{_trans('Prices and rates')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-down"
                class="  font-bold text-9xl  text-gray-300 "
              >
                8
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
              <h1 class="text-2xl border-b py-5 text-gray-600">
                <span class="text-gray-600">35 000 000</span> uzs
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
                <li>Content management system 1C Bitrix</li>
                 <li>Business edition license</li>
                <li> Ready-made solution with a marketplace</li>
                 <li>Personal Area</li>
                 <li>Online chat</li>
                <li> Payment system Click, Payme</li>
                 <li>Domain</li>
                 <li>Telegram bot</li>
                 <li>One year warranty support</li>
                 <li>Training - 3 hours</li>
                 <li>Term from 20 days</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""

                class="bg-blue-700 rounded-full text-white mb-14 px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
               Order
              </a>
            </div>
          </div>
        </div>

        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>Business</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1  class="text-2xl border-b py-5 text-gray-600">
                <span class="text-gray-600">120 000 000</span> uzs
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
              <li>Система управления сайтом 1C Bitrix</li>
              <li>Лицензия бизнес редакция&nbsp;</li>
              <li>Готовое решение с маркетплейс</li>
              <li>Мобильное приложение IOS, Android</li>
              <li>
                Система оплаты Click,Payme, Visa, Mastercard, Paypal&nbsp;
              </li>
              <li>Домен в ПОДАРОК</li>
              <li>Телеграм бот в ПОДАРОК</li>
              <li>Система лояльности в ПОДАРОК</li>
              <li>Гарантийная поддержка в течение года</li>
              <li>Обучение – 12 часов</li>
              <li>Срок&nbsp;от 60 дней</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""

                class="bg-blue-700 rounded-full mb-14 text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                Заказать
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
              <h1  class="text-2xl border-b py-5 text-gray-600">
                <span class="text-gray-600">150 000 000</span> uzs
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
              <li>Система управления сайтом 1C Bitrix</li>
              <li>Лицензия бизнес редакция&nbsp;</li>
              <li>Готовое решение с маркетплейс</li>
              <li>Интеграция и внедрение складского учёта (Мой Склад)</li>
              <li>Мобильное приложение IOS, Android</li>
              <li>Сео оптимизация сайта&nbsp;</li>
              <li>
                Система оплаты Click,Payme, Visa, Mastercard, Paypal&nbsp;
              </li>
              <li>Домен в ПОДАРОК</li>
              <li>Телеграм бот в ПОДАРОК</li>
              <li>Система лояльности в ПОДАРОК</li>
              <li>Гарантийная поддержка в течение года</li>
              <li>Обучение – 12 часов</li>
              <li>Срок&nbsp;от 90 дней</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""
                class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                Заказать
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mr-4 sm:mr-4 md:mr-16">
        <div
          class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32 flex flex-col justify-center items-center"
          data-aos="fade-up-right"
        >
          <div class="flex justify-center items-center sm:pl-20">
            <p
              class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10"  data-aos="fade-down"
            >
              Разработка интернет магазина
            </h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold text-9xl  text-gray-300 opacity-50"
              >
                9
              </p>
          </div>
          </div>
        </div>
      </div>

      <div class="bg-gray-200 h-12 z-10" data-aos="fade-up-right"></div>

      <div class="bg-gray-100 z-0" data-aos="fade-up-right">
        <div  class="text-lg pt-20 text-gray-700 pb-20">
          <div class="flex justify-center">
            <div class="z-0 text-gray-600 text-lg max-w-3xl">
              <p>
                Нужны сайты на заказ или хотите купить сайт в Ташкенте? У нас
                работают опытные разработчики сайтов и программисты в
                Узбекистане, которые выполняют свою работу на все 100%. Мы
                предлагаем не только разработку веб сайта, но и обеспечиваем
                техническую поддержку сайтов в Узбекистане. Также мы занимаемся
                разработкой веб приложений в Ташкенте для вашего бизнеса.
                Заказать Online store под ключ. Веб сайт, заказать сайт,
                лучшие программисты, лучшая веб студия, сайт визитка в ташкенте,
                разработка веб приложений ташкент, сайты на заказ, разработка
                интернет магазина ташкент, как создать Online store
                узбекистан, разработка веб-сайта, битрикс партнер узбекистан,
                сайт на 1C Bitrix, продающий сайт, промо сайт, заказать лендинг
                пейдж в ташкенте,
              </p>
            </div>
          </div>

          <div class="flex justify-end pb-20">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                        Другие <br/>
                        услуги
                    </h1>
                    <div class="flex text-center absolute item-center justify-center z-0">
                        <p data-aos="fade-up"  class=" text-9xl font-bold  text-gray-300 ">
                            10
                        </p>
                    </div>
                </div>


                <div  class="bg-blue-700 h-44 max-w-5xl rounded-l-2xl pt-5 z-20 mt-32"
                     data-aos="fade-up-left">
                    <div class="flex justify-center items-center pl-20 pt-5">





                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide table">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                        <p class="text-center">
                                            Разработка интернет-
                                            магазина

                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide ">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            Seo продвижение
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide ">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            Контекстная реклама
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide ">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/digital-marketing_dark.svg')}}"
                                             alt=""/>
                                        <p class="text-center pb-6">
                                            СММ продвижения
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide ">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            Разработка брендбуков
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide ">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/target_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            Автоматизация бизнеса
                                        </p>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div></div>
        </div>


        </div>
      </div>
    </main>


@endsection


@section('js')

@endsection
