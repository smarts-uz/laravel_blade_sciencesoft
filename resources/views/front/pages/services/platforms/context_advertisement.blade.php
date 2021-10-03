@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main class="overflow-hidden">


<div class="bg-black h-auto px-4 pt-10 pb-20">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
              >
               {{t('Contextual')}} < br> {{t('advertising')}} <br> Google <br> {{t('in Tashkent')}}
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
            <img src="{{asset('images/open_engine/context_advertisement/images/1.svg')}}" alt="" />
          </div>
        </div>
      </div>




    <div class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16">
        <div  class="pt-8 text-center" data-aos="fade-left">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/1.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">{{t('Optimization')}}</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-left">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/2.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">{{t('Audit and Analytics')}}</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-up">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/3.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">{{t('Traffic')}}</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-right">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/4.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">{{t('Strategy')}}</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-right">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/5.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">KPI</p>
        </div>
    </div>

    <div class="flex justify-center">

        <div class="grid grid-cols-1 sm:grid-cols-2 justify-center my-16 items-center">
           <div class=" m-4 text-center">
                <a href=""
                   class="max-w-xs block py-4 bg-blue-700 rounded-full text-white px-4 py-1 transition duration-300 ease-in-out hover:bg-blue-900 shadow-lg">
                    {{t('SEO promotion')}}
                </a>
           </div>
            <div class="m-4  text-center">

                <a href=""
                   class="text-center max-w-xs block py-4 bg-blue-700 rounded-full text-white px-4 transition duration-300 ease-in-out hover:bg-blue-900">
                   {{t('Contextual advertising')}}
                </a>
            </div>
        </div>
</div>







    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-down" class="font-bold sm:text-4xl text-3xl font-bold text-blue-700 z-10 text-center leading-10"{{t('>What is')}} <br> {{t('contextual advertising')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                1
              </p>
          </div>
    </div>
<div class="flex justify-center">

        <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-5">

            <div class="flex justify-center p-4 ">

                <img src="{{asset('images/open_engine/seo_promotion/images/2/6.png')}}" alt="">
            </div>
            <div class="flex flex-col justify-center md:max-w-md p-4 text-xl">
                <p>{{t('This is the official tool search engines Google and Yandex. Ads are shown to people in the context of their')}}
                   {{t('requests, that is, interested buyers . And you only pay for real visits to the site.')}}
                   {{t('Surely, you have already seen and clicked on such ads yourself.')}}
                </p>
                <h1>{{t('There are two types of contextual advertising:')}}</h1>
                <ul class="list-disc">
                    <li> {{t('ads on Search — blocks above and below the results.')}}</li>
                    <li> {{t('advertising network — millions of partner sites Yandex and Google.')}}</li>
                </ul>
            </div>
        </div>
</div>


    <div class="flex justify-center items-center mb-10 my-20 relative">
        <h1 data-aos="fade-down" class="sm:txet-4xl font-bold text-3xl font-bold text-blue-700 z-10">{{t('Stages of website development')}}</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                2
              </p>
          </div>
    </div>


    <div class="md:py-20 pt-20 pb-64 flex flex-col justify-center">

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto flex justify-center w-full" data-aos="flip-left">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-32 rounded-3xl">
                    <p class="mt-52 ml-8 text-white text-lg font-bold">{{t('Search ads')}}</p>
                    <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">01</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/7.png')}}" alt="" class="absolute">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
              {{t('Positions in the search results for each individual query. Monitoring of traffic and targeted actions for')}}
              {{t('advertising: clicks, click-throughs, time on the site, etc.')}}
            </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">

            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                {{t('Display ads to interested parties who have already visited your site or clicked on the ad.')}}
            </div>
            <div class="m-auto w-full order-first md:order-none  flex justify-center" data-aos="flip-right">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-14 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">{{t('Remarketing\Retargeting')}}</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">02</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/8.png')}}" alt="" class="absolute">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto w-full flex justify-center" data-aos="flip-left">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-24 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">{{t('Advertising in Gmail')}}</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">03</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/9.png')}}" alt="" class="absolute">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
              {{t(' Advertising in the Gmail mail service')}}
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                {{t('Advertising on the Youtube platform')}}
            </div>
            <div class="m-auto order-first md:order-none w-full flex justify-center" data-aos="flip-right">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-28 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">{{t('Video Ads')}}</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">04</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/10.png')}}" alt="" class="absolute">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto w-full flex justify-center" data-aos="flip-left">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-28 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">{{t('Mobile app Ads')}}</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">05</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/11.png')}}" alt="" class="absolute">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                {{t('Advertising in partner well-known mobile apps.')}}
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                {{t('Advertising on partner sites of Google and Yandex')}}
            </div>
            <div class="m-auto order-first md:order-none w-full flex justify-center" data-aos="flip-right">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-28 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">{{t('Advertising on partner sites')}}</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">06</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/12.png')}}" alt="" class="absolute">
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mb-10 my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 leading-9">{{t('Advantage')}} <br> {{t('online advertising')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl  font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
    </div>

        <div class="container mx-auto flex justify-center flex-col">
            <div class="grid justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/1.svg')}}" alt="">
                    </div>
                    <div class=" pl-5 pt-10">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Exactly')}}</h1>
                    </div>
                </div>
                <div class="flex bg-white  rounded-lg shadow-2xl m-1 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/2.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('High quality')}}</h1>
                    </div>
                </div>
                <div class="flex bg-white  rounded-lg shadow-2xl m-1 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/3.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Quickly')}}</h1>
                    </div>
                </div>

                <div class="flex bg-white  rounded-lg shadow-2xl m-1 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/4.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Effectively')}}</h1>
                    </div>
                </div>

            </div>


            <div class="grid justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/5.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Safe')}}</h1>
                    </div>
                </div>
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/6.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Practical')}}</h1>
                    </div>
                </div>
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/7.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Comfortable')}}</h1>
                    </div>
                </div>

                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/8.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">{{t('Economical')}}</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-gray-400 h-12 mt-56">

        </div>
        @include('front.Components.platformForm')

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Stages of work')}}</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
        </div>

        <div class="mb-20">
            <div class="container mx-auto flex flex-col ">
                <div class="flex justify-center flex-col md:flex-row">
                    <div
                         class="flex border-blue-700 bg-white  border-l-8 rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class="   justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">{{t('Site Audit')}}</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>{{t('Checking < br> performance')}}</li>
                                <li>{{t('Checking the conversion rate')}}</li>
                                <li>{{t('Correcting errors')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 p-3 bg-white  border-l-8 rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">{{t('Semantics')}}</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                               <li>{{t('Creating a database of queries with')}} < br> {{t('maximum conversion')}}</li>
                               <li>{{t('Creating the backbone for < br> site promotion')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 p-3 bg-white border-l-8  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">{{t('Internal')}}</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                         <li>{{t('Improving the download speed')}}< / li>
                         <li>{{t('Optimizing the content of the')}} <br> {{t('site')}}< / li>
                         <li>{{t('Optimizing the site code')}}< / li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>


            <div class="container mx-auto flex flex-col">
                <div class="flex justify-center flex-col md:flex-row">
                    <div
                         class="md:max-w-xs flex border-l-8 border-blue-700 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class="   justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">{{t('External')}}</h1>
                            <ul class="list-disc text-gray-600 text-sm">
                           <li>{{t('Increasing the reference < br> mass on the site')}}</li>
                           <li>{{t('We check and leave <br> only useful links')}}</li>
                           <li>{{t('Increasing the rating of TIC <br> and PR in search engines')}}</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="md:max-w-xs flex border-blue-700 border-l-8 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">{{t('Promotion')}}</h1>
                            <ul class="list-disc text-gray-600 text-sm">
                                <li>{{t('Monthly monitoring of the site rating')}}<br> </li>
                                <li>{{t('Checking positions')}}</li>
                                <li>{{t('Improving the site for <br> better promotion')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10"> {{t('Cases')}}</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                5
              </p>
          </div>
        </div>



        <div class="swiper-container-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div>
                            <img src="{{asset('images/open_engine/context_advertisement/1.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>{{t('Client:')}}</b></p>
                            <p class="text-gray-500"> Keng Makon - {{t('Furniture Factory')}} </p>

                            <p class="text-blue-700 mt-3.5"><b>{{t('Market:')}}</b></p>
                            <p class="text-gray-500">{{t('Uzbekistan')}}</p>

                            <p class="text-blue-700 mt-3.5"><b>{{t('Direction:')}}</b></p>
                            <p class="text-gray-500">{{t('Furniture manufacturing')}}</p>

                            <p class="text-blue-700 mt-3.5"><b>{{t('The result of the work:')}}</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 4900</b> <br> {{t('Monthly ')}}<br>{{t(' traffic')}}</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>220</b> <br>{{t('Key ')}}<br> {{t('words in the top')}}</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 631</b> <br> ROI</p>
                                </div>
                            </div>

                            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                order
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div>
                            <img src="{{asset('images/open_engine/context_advertisement/2.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>{{t('Client:')}}</b></p>
                            <p class="text-gray-500"> {{t('Keng Makon - Furniture Factory')}} </p>

                            <p class="text-blue-700 mt-3.5"><b>{{t('Market:')}}</b></p>
                            <p class="text-gray-500">{{t('Uzbekistan')}}</p>

                            <p class="text-blue-700 mt-3.5"><b>{{t('Direction:')}}</b></p>
                            <p class="text-gray-500">{{t('Furniture manufacturing')}}</p>

                            <p class="text-blue-700 mt-3.5"><b>{{t('{{t('The result of the work:')}}')}}</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 4900</b> <br> {{t('Monthly ')}}<br> {{t('traffic')}} </p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>220</b> <br> Key <br> {{t('words in the top')}}</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 631</b> <br> ROI</p>
                                </div>
                            </div>

                            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
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

                class="text-9xl  font-bold  text-gray-300 "
              >
                6
              </p>
          </div>
        </div>







        <div class="flex justify-center items-center">
        <a href="" class="bg-blue-700 text-white px-3 py-3 mr-1">
         {{t('order project')}}
        </a>
        <a
          href=""
          class="bg-blue-400 text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-300 ml-1"
        >
         {{t('order project')}}
        </a>
      </div>

        <div class="grid grid-cols-1 sm:grid-cols-4 gap-5 container m-auto justify-center text-center mt-14">
            <div class="text-center grid grid-cols-1 justify-center">
                <div class="grid justify-center">
                    <img class="block shadow-lg  rounded-full" src="{{asset('images/open_engine/seo_promotion/images/brands/google.png')}}" alt="">
                </div>
                <p class="text-center font-bold text-2xl text-center text-gray-600 mt-5">Google</p>
            </div>

            <div  class="text-center grid grid-cols-1 justify-center">
                <div  class="grid justify-center">
                    <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/seo_promotion/images/brands/yandex.png')}}" alt="">
                </div>
                <p class="font-bold text-2xl text-center text-gray-600 mt-5">Yandex</p>
            </div>

            <div class="text-center grid grid-cols-1 justify-center">
                <div   class="grid justify-center">
                    <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/seo_promotion/images/brands/mailru.png')}}" alt="">
                </div>
                <p class="font-bold text-2xl text-center text-gray-600 mt-5">Mail ru</p>
            </div>

            <div  class="text-center grid grid-cols-1 justify-center">
                <div    class="grid justify-center">
                    <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/seo_promotion/images/brands/maps.png')}}" alt="">
                </div>
                <p class="font-bold text-2xl text-center text-gray-600 mt-5">{{t('Maps')}}</p>
            </div>

        </div>

        <div class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative h-48">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">{{t('Why us?')}}</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-400 "
              >
                7
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
                    <h1 class="text-gray-700 text-md">{{t('There is not a single failed')}} <br> {{t('project')}}</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('There is not a single failed')}} < br> {{t('project')}}</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Expert')}} <br>{{t('understanding of ')}}<br> {{t('algorithms')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Removing sites <br> from ')}}< br> {{t('filters')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('Hundreds of')}} < br> {{t('satisfied')}} < br> {{t('Clients')}}</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">{{t('A team of')}} <br> {{t('experienced ')}}<br> {{t('specialists')}}</h1>
                </div>
            </div>

        </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Prices and tariffs')}}</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 opacity-50"
              >
                8
              </p>
          </div>
        </div>


        <div class="mb-32 grid grid-cols-1 lg:grid-cols-2 container m-auto justify-center lg:p-20" data-aos="fade-right">


            <div class="flex-1 transform hover:scale-110 duration-200">

                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-gray-900 -mb-16 z-0">
                    <p class="text-3xl text-white text-center"><b>
				Google ads			</b></p>
                </div>
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <h1  class="border-b text-xl border-gray-400 py-5 text-gray-600">
                            from <span class=" text-gray-700"> <b>5 000 000</b></span> uzs <br>{{t('per')}} <b>{{t('year')}}</b></h1>
                    </div>
                    <ul class="list-disc text-gray-700 text-lg mt-3 pb-20">
                       <li><b>40 {{t('Keywords')}}</b></li>
                       <li>{{t('Site Audit')}}</li>
                       <li>{{t('Internal optimization')}}</li>
                       <li>{{t('External optimization')}}</li>
                       <li>{{t('Writing unique texts')}}</li>
                       <li>{{t('from 3 to 6 months')}}</li>
                    </ul>
                    <div class=" justify-center flex border-t border-gray-400">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                           {{t(' order')}}
                        </a>
                    </div>
                </div>
            </div>


            <div class="flex-1 transform hover:scale-110 duration-200 ">

                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-gray-900 -mb-16 z-0 ">
                    <p class="text-3xl text-white text-center"><b>
				Yandex direct			</b></p>
                </div>
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <h1  class="border-b text-xl border-gray-400 py-5 text-gray-600">
                            {{t('from')}} <span class=" text-gray-700"> <b>5 000 000</b></span> uzs <br>{{t('per ')}}<b>{{t('month')}}</b></h1>
                    </div>
                    <ul class="list-disc text-gray-700 text-lg mt-3 pb-20">
                       <li><b>{{t('from 10 Keywords')}}</b></li>
                       <li>{{t('Site Audit')}}</li>
                       <li>{{t('Internal optimization')}}</li>
                       <li>{{t('External optimization')}}</li>
                       <li>{{t('Writing unique texts')}}</li>
                       <li>{{t('from 3 to 6 months')}}</li>
                    </ul>
                    <div class=" justify-center flex border-t border-gray-400">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                            {{t('order')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-xl mx-auto my-10 mb-40 relative" data-aos="fade-left">
            <img class="-my-16 m-auto shadow-lg border-gray-300 " src="https://oe.uz/local/templates/oe/media/images/icons/crown.png "
                 alt="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}">
            <div class="shadow-lg rounded-2xl mt-4 px-10 pt-10 pb-5 mx-8 bg-gray-800 -mb-16 z-10"></div>

            <div class="shadow-lg rounded-2xl z-20 px-10 pt-10 pb-5 m-5 z-20">
                <div class=" text-center">
                    <h1  class="font-bold text-gray-700 mb-1 mt-5 text-xl">{{t('Develop an individual strategy?')}}</h1>

                </div>
                <div class=" justify-center flex">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        order
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative">
            <div class="flex justify-center items-center my-20 pt-10">
                <h1 class="text-4xl font-bold text-white z-10">{{t('Website development in Tashkent')}}</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-400 "
              >
                9
              </p>
          </div>
            </div>
        </div>

        <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

        </div>


        <div class="bg-gray-50 z-0" data-aos="fade-up">
            <div class="pt-20 text-gray-700 pb-20 text-xl lg:mx-24 mx-16">

                <div class="z-0">
                    <p>
                        {{t('Specialists of <b>advertising agency in Tashkent')}} </b>"Open Engine" {{t('offer a range of services for <b>advertising in search engines.')}}</b> <b>{{t('Advertising in')}}</b><b>{{t('Google')}} </b> {{t('and')}} <b>{{t('Advertising in')}} </b> <b>Yandex </b> {{t('are a platform for comprehensive advertising of your company. We will fine-tune the goals,')}} <b>{{t('display advertising')}}</b> {{t('and')}} <b>{{t('contextual advertising')}}</b> {{t('in')}} <b>{{t('search engines')}}</b> {{t('to get the result. Your ads will be presented to those users who are most determined to buy. Leave a request and we will call you and provide you with full information.')}}  </p>
                </div>


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
                                    <p data-aos="fade-up" class=" text-9xl font-bold  text-gray-300 ">
                                      10
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
