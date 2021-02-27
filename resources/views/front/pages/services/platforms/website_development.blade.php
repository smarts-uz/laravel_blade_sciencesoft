@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main class="overflow-hidden">
    <div class="bg-black h-auto px-4 pt-20 pb-10">
        <div class="py-8 grid grid-cols-1 items-center lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20 ">
         <div class="flex justify-center">
            <div data-aos="fade-right">
                <div class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide">
                    {{_trans('Development and ')}} <br>{{_trans('creation of' )}} <br> {{_trans('sites in')}}<br>  {{_trans('Tashkent')}}
                </div>
                <div class="lg:px-20">
                    <a href="#"
                       class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6">
                         {{_trans('Get the consultation')}}
                    </a>
                </div>
            </div>
         </div>

            <div data-aos="fade-left" class="my-8 flex justify-center">
                <img src="{{asset('images/open_engine/images/intro.svg')}}" alt=""/>
            </div>
        </div>
    </div>

    <div class="bg-gray-100">
        <div
                class="grid sm:grid-cols-5 items-center grid-cols-2 container m-auto justify-between pt-16">
            <div class="pt-8" data-aos="fade-left">
                <img src="{{asset('images/open_engine/images/1/1.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    {{_trans('Online store')}}
                </p>
            </div>
            <div class="pt-8" data-aos="fade-left">
                <img src="{{asset('images/open_engine/images/1/2.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                     {{_trans('Landing Page')}}
                </p>
            </div>
            <div class="pt-8" data-aos="fade-up">
                <img src="{{asset('images/open_engine/images/1/3.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                     {{_trans('Technical support')}}
                </p>
            </div>
            <div class="pt-8" data-aos="fade-right">
                <img src="{{asset('images/open_engine/images/1/4.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    {{_trans('Corporate websites')}}
                </p>
            </div>
            <div class="pt-8" data-aos="fade-right">
                <img src="{{asset('images/open_engine/images/1/5.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    {{_trans('Complex systems')}}
                </p>
            </div>
        </div>

        <div class="text-center flex justify-center items-center my-20 relative">
            <h1
                    data-aos="fade-down"
                    class="text-3xl sm:text-4xl text-center font-bold text-blue-700 z-10"
            >
                {{_trans('What is included in website development?')}}
            </h1>
            <div class="flex text-center absolute item-center justify-center z-0">
                <p
                        data-aos="fade-up"

                        class=" text-9xl  font-bold  text-gray-300 "
                >
                    1
                </p>
            </div>
        </div>

        <div
                class="grid grid-cols-1 md:grid-cols-3 container m-auto text-center"
        >
            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">01</p>
                <img src="{{asset('images/open_engine/images/2/1.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md">
                    {{_trans('Thoughtful and functional ')}} <br>{{_trans(' prototype')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">02</p>
                <img src="{{asset('images/open_engine/images/2/2.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                   {{_trans('Beautiful selling ')}}  <br>{{_trans('design')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">03</p>
                <img src="{{asset('images/open_engine/images/2/3.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    {{_trans('Adaptation for ')}} <br>{{_trans('any device')}}
                </p>
            </div>
        </div>
        <div
                class="grid grid-cols-1 md:grid-cols-3 container m-auto text-center"
        >
            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">04</p>
                <img src="{{asset('images/open_engine/images/2/4.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    {{_trans('Correct technical ')}} <br> {{_trans('structure and competent layout')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">05</p>
                <img src="{{asset('images/open_engine/images/2/5.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                   {{_trans('Filling with selling content')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">06</p>
                <img src="{{asset('images/open_engine/images/2/6.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    {{_trans('Pre-testing')}}
                </p>
            </div>
        </div>

        <div class="flex justify-center items-center mb-10 my-20 relative">
            <h1
                    data-aos="fade-down"
                    class="text-2xl sm:text-4xl font-bold text-blue-700 z-10"
            >
                {{_trans('Stages of website development')}}
            </h1>
            <div class="flex text-center absolute item-center justify-center z-0">
                <p
                        data-aos="fade-up"

                        class=" text-9xl font-bold  text-gray-300 "
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
                        class="flex flex-col justify-center m-auto relative z-10"
                >
                    <h1
                            class="sm:text-3xl text-2xl font-bold text-gray-700 py-5 leading-none z-10"
                    >
                       {{_trans('Coordination of goals and  ')}} <br/>{{_trans('objectives')}}
                    </h1>
                    <ul class="list-disc pl-5 text-gray-700 text-base">
                        <li>{{_trans('We define the task that the site should solve')}}</li>
                        <li>{{_trans('We analyze competitors')}}</li>
                        <li>{{_trans('We analyze the features of the target audience')}}</li>
                    </ul>
                </div>
                <div class="m-auto pt-8">
                    <img src="{{asset('images/open_engine/images/3/step1.svg')}}" alt=""/>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10">
                <div class="m-auto pt-8 order-last sm:order-none">
                    <img src="{{asset('images/open_engine/images/3/step2.svg')}}" alt=""/>
                </div>
                <div data-aos="fade-right" class="flex flex-col justify-center m-auto relative z-10">
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none">
                        {{_trans('Prototype and design')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Choosing a website prototype')}}</li>
                        <li>{{_trans('Deciding on the design')}}</li>
                        <li>{{_trans('We prepare the visual part')}}</li>
                    </ul>
                </div>
            </div>

            <div
                    class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
            >
                <div
                        data-aos="fade-right"
                        class="flex flex-col justify-center m-auto relative z-10"
                >
                    <h1
                            class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none"
                    >
                        {{_trans('Design layout')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Layout the visual part of the site')}}</li>
                        <li>{{_trans('We adjust the look of the site to the design')}}</li>
                        <li>{{_trans('Optimizing the code for further programming')}}</li>
                    </ul>
                </div>
                <div class="m-auto pt-8">
                    <img src="{{asset('images/open_engine/images/3/step3.svg')}}" alt=""/>
                </div>
            </div>

            <div
                    class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10"
            >
                <div class="m-auto pt-8 order-last sm:order-none">
                    <img src="{{asset('images/open_engine/images/3/step4.svg')}}" alt=""/>
                </div>
                <div
                        data-aos="fade-right"
                        class="flex flex-col justify-center m-auto relative z-10"
                >
                    <h1
                            class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none"
                    >
                        {{_trans('Programming')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Preparing the site code')}}</li>
                        <li>{{_trans('We integrate the code into CMS (content management platform)')}}</li>
                        <li>{{_trans('We connect external systems and simplify the CMS interface (if you plan to work on the site yourself in the future)')}}
                        </li>
                    </ul>
                </div>
            </div>

            <div
                    class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10">
                <div
                        data-aos="fade-right"
                        class="flex flex-col justify-center m-auto relative z-10">
                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-700 py-5 leading-none">
                       {{_trans('A \ B - testing')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Initial system testing')}}</li>
                        <li>{{_trans('Testing external site systems')}}</li>
                        <li>{{_trans('Editing and revision')}}</li>
                    </ul>
                </div>
                <div class="m-auto pt-8">
                    <img src="{{asset('images/open_engine/images/3/step5.svg')}}" alt=""/>
                </div>
            </div>

            <div
                    class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center z-10 pt-10">
                <div class="m-auto pt-8 order-last sm:order-none">
                    <img src="{{asset('images/open_engine/images/3/step6.svg')}}" alt=""/>
                </div>
                <div data-aos="fade-right" class="pl-20 m-auto">
                    <h1
                            class="text-3xl font-bold text-gray-700 py-5 leading-none -ml-5">
                        {{_trans('Filling and starting')}}
                    </h1>
                    <ul class="list-disc text-gray-700 text-base">
                        <li>{{_trans('We fill with content')}}</li>
                        <li>{{_trans('We carry out the final check')}}</li>
                        <li>{{_trans('We launch the site')}}</li>
                        <li>{{_trans('Website technical support')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-200 h-12"></div>

    <div class="px-8">
        <div
                data-aos="zoom-in"
                class="max-w-3xl mx-auto bg-white shadow-2xl rounded-3xl p-10 sm:p-20 -mt-56">
            <h1
                    class="text-center text-xl sm:text-3xl font-semibold leading-tight text-blue-700">
                {{_trans('Fill out the form right now and get a qualified free consultation.')}}
            </h1>
            <h2 class="text-lg p-6 pl-13">{{_trans('Name of the organization')}}</h2>
            <form>
                <label>
                    <input type="text" placeholder="Example: Open Engine"
                           class="h-12 w-full border-b border-blue-700 outline-none"/>
                </label>
            </form>


            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 mt-10">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 my-2 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                        {{_trans('Back to')}}
                    </a>

                    <a href=""
                       class="bg-blue-700 rounded-full text-white my-2 px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                       {{_trans('Next')}}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            {{_trans('Cases')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
            <p data-aos="fade-up"  class="text-9xl  font-bold  text-gray-300 ">
                3
            </p>
        </div>
    </div>

    <div class="swiper-container-one">
        <div class="swiper-wrapper">


            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/19.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Мебельная фабрика Keng Makon')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2020</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Разработка интернет-магазина.')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Мебель')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1C </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('To order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/20.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Peno Dekor')}}</p>
{{_trans('')}}
                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}Услуги</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Корпоративный сайт')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/21.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Formula plus+')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Авто')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1C Битрикс')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                           {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/22.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Alibazar')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Стройматериали')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> {{_trans('1С Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/23.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Territoriya Group')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новостройка')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/24.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Aptechka.uz')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Доставка лекарств')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Php</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/25.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Mashhura.uz')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Каталог')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Учеба ')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С Битрикс ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/26.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Human Media')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Т{{_trans('ип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Новостной')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новости')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1C Битрикс ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/27.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Human')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Корпоративний')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Работа')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1C Битрикс ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/28.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Art Plast')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500"> 2016</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Сайт каталог')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Производство окон')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans(' WordPress')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/29.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Vek Building')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('  Year of creation:')}}</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Корпоративный')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новостройки')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans(' 1С-Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/30.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Best GO')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans(' Year of creation:')}}</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Сайт услуга')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Служба доставки')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('WordPress ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/31.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Formulaplus.uz')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Авто диски и шины')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С-Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/32.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Higo')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500"> 2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Одежды ')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С-Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/33.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Fundament Group')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500"> 2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Landing Page')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Строительство')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('')}}WordPress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/34.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Art Deco Design ')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2016</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Сайт услуга')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Архитектура и дизайн')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/35.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Shirin Shakar')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Сайт каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Производство')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> {{_trans('Wordpress')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/36.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Web Expert')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2014</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новостной портал')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новости Узбекистана и Мира')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Php YII2</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/37.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Royal Garden')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Сайт каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Сухофрукты')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                    <div>
                        <img src="{{asset('images/open_engine/web-development/38.png')}}" alt="">
                    </div>
                    <div class="text-2xl " data-aos="fade-up">
                        <p class="text-blue-700"><b>{{_trans('Client:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Saroy Mebel')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Year of creation:')}}</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Site type:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Сайт каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Direction:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Мебель')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Technology:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С Битрикс')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('Order')}}
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-2xl sm:text-4xl font-bold text-blue-700 z-10">
            {{_trans('We use in work')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
            <p data-aos="fade-up"  class=" text-9xl font-bold  text-gray-300 ">
                4
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <a href="" class="bg-blue-700 text-white px-3 py-3 mr-1">
            {{_trans('Programs')}}
        </a>
        <a
                href=""
                class="bg-blue-400 text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-300 ml-1">
            {{_trans('Payment systems')}}
        </a>
    </div>
    <div class="flex justify-center items-center py-20">

        <div class="grid grid-cols-2 md:grid-cols-5 container justify-center text-center">
            <div class="">
                <div class="grid justify-center">
                    <img class="shadow-lg rounded-full m-0" src="{{asset('images/open_engine/images/4icons/1.svg')}}"
                         alt=""/>
                </div>
                <p class="text-center font-bold text-lg text-center text-gray-600 mt-5">
                    Wordpress
                </p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img class="shadow-lg rounded-full" src="{{asset('images/open_engine/images/4icons/2.svg')}}"
                         alt=""/>
                </div>

                <p class="font-bold text-lg text-center text-gray-600 mt-5">
                    Opencart
                </p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img class="shadow-lg rounded-full" src="{{asset('images/open_engine/images/4icons/3.svg')}}"
                         alt=""/>
                </div>

                <p class="font-bold text-lg text-center text-gray-600 mt-5">YII2</p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img class="shadow-lg rounded-full" src="{{asset('images/open_engine/images/4icons/4.svg')}}"
                         alt=""/>
                </div>

                <p class="font-bold text-lg text-center text-gray-600 mt-5">
                    Laravel
                </p>
            </div>

            <div>
                <div class="grid justify-center">
                    <img class="shadow-lg rounded-full" src="{{asset('images/open_engine/images/4icons/5.svg')}}"
                         alt=""/>
                </div>

                <p class="font-bold text-lg text-center text-gray-600 mt-5">Bitrix</p>
            </div>
        </div>

    </div>


    <div class="flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 sm:px-20 relative justify-center">
            <div class="relative pt-20">
                <div
                     class="bg-blue-500 py-20 rounded-tl-3xl -left-32 lg:m-10 px-10 md:px-10 max-w-lg absolute hidden sm:block"
                     data-aos="fade-right">
                    <div class="flex justify-center items-center my-10 relative">
                        <h1 class="text-3xl font-bold text-blue-500 z-10">{{_trans('Why us?')}}</h1>
                        <p  class=" text-9xl item-center font-bold absolute left-48 text-blue-500 z-0">
                            7
                        </p>
                    </div>
                    <p class="text-blue-500 text-md p-10 pt-10 text-center">
                        {{_trans('Потому что у нас Вы можете создать по-настоящему классный сайт, со всеми нужными Вам функциями')}}
                    </p>
                </div>
                <div
                     class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 max-w-lg relative top-24 rounded-br-3xl" data-aos="fade-right">
                    <div class="flex justify-center items-center my-10 relative">
                        <h1 class="lg:text-3xl font-bold text-white z-10 ">
                            {{_trans('Why us?')}}
                        </h1>
                        <div class="flex text-center absolute item-center justify-center z-0 opacity-50">
                            <p data-aos="fade-up" class=" text-9xl font-bold  text-gray-300 ">
                                5
                            </p>
                        </div>
                    </div>
                    <p class="text-white text-base text-md p-5 pt-10 text-center">
                        {{_trans('Because with us you can create a really cool site, with all the functions you need')}}
                    </p>
                </div>
            </div>

            <div class="pt-20 grid justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                    <div class="p-5 mr-5">
                        <img src="{{asset('images/open_engine/web-development/48.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('More than 500  ')}}<br/>
                            {{_trans('completed projects')}}
                        </p>
                    </div>

                    <div class="p-5">
                        <img src="{{asset('images/open_engine/web-development/49.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('More than 100 ')}} <br/>
                            {{_trans('regular customers')}}
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                    <div class="p-5 mr-5">
                        <img src="{{asset('images/open_engine/web-development/50.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('A team  ')}}<br/>
                            {{_trans('of certified ')}}<br/>
                            {{_trans('professionals')}}
                        </p>
                    </div>

                    <div class="p-5">
                        <img src="{{asset('images/open_engine/web-development/51.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('Individual ')}} <br/>
                            {{_trans('approach to each')}} <br/>
                            {{_trans(' client')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            {{_trans(' Prices and rates')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
            <p data-aos="fade-up"

               class=" text-9xl  font-bold  text-gray-300 opacity-50 ">
                6
            </p>
        </div>
    </div>

    <div
            class="grid grid-cols-1 lg:grid-cols-3 container m-auto justify-center lg:p-20"
            data-aos="fade-right"
    >
        <div class="pt-20 transform hover:scale-110 duration-200">
            <div class="">
                <img class="-my-16 m-auto shadow-lg rounded-full border-gray-300 border"
                     src="{{asset('images/open_engine/images/4icons/1.svg')}}"
                     alt=""/>
            </div>

            <div
                    class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-10"
            ></div>
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5 z-20">
                <div class="text-center">
                    <h1
                        class="text-xl font-bold text-gray-700 mb-1 mt-5">
                        {{_trans('LANDING PAGE')}}
                    </h1>
                    <h1  class="border-b pb-5 text-gray-600 text-xl">
                        {{_trans('from ')}} <span class="font-bold text-gray-700">9 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>{{_trans('Adaptive design')}}</li>
                    <li>{{_trans('Site filling')}}</li>
                    <li>{{_trans('Analytics system')}}</li>
                    <li>{{_trans('Mail setup')}}</li>
                    <li>{{_trans('Online chat')}}</li>
                    <li>{{_trans('Free hosting and domain')}}</li>
                    <li>{{_trans('One year warranty support')}}</li>
                    <li>{{_trans('Training - 1 hour')}}</li>
                    <li>{{_trans('Term from 10 days')}}</li>
                </ul>
                <div class="justify-center flex">
                    <a
                            href=""
                            class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
                    >
                        {{_trans('Order')}}
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-20 transform hover:scale-110 duration-200">
            <img class="-my-16 m-auto shadow-lg rounded-full border-gray-300 border"
                 src="{{asset('images/open_engine/images/4icons/2.svg')}}"
                 alt=""/>
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 -z-10"></div>
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5">
                <div class="text-center">
                    <h1
                        class="font-bold text-gray-700 mb-1 mt-5 text-xl">
                        {{_trans('Corporate website')}}
                    </h1>
                    <h1  class="border-b pb-5 text-gray-600 text-xl">
                        {{_trans('from ')}} <span class="font-bold text-gray-700">14 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>{{_trans('Content management system')}}</li>
                    <li>{{_trans('Adaptive design')}}</li>
                    <li>{{_trans('Catalog of goods or services')}}</li>
                    <li>{{_trans('News / Blog / Modules')}}</li>
                    <li>{{_trans('Mail setup')}}</li>
                    <li>{{_trans('Online chat')}}</li>
                    <li>{{_trans('Free hosting and domain')}}</li>
                    <li>{{_trans('One year warranty support')}}</li>
                    <li>{{_trans('Training - 2 hours')}}</li>
                    <li>{{_trans('Term from 15 days')}}</li>
                </ul>
                <div class="justify-center flex">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        {{_trans('Order')}}
                    </a>
                </div>
            </div>
        </div>

        <div class="pt-20 transform hover:scale-110 duration-200">
            <img class="-my-16  m-auto shadow-lg rounded-full border-gray-300 border"
                 src="{{asset('images/open_engine/images/4icons/3.svg')}}"
                 alt=""/>
            <div
                    class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-0"
            ></div>
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5">
                <div class="text-center">
                    <h1
                        class="font-bold text-gray-700 mb-1 mt-5 text-xl">
                        {{_trans('Интернет-магазин')}}
                    </h1>
                    <h1  class="border-b pb-5 text-gray-600 text-xl">
                        {{_trans('from ')}} <span class="font-bold text-gray-700">35 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>{{_trans('Content management system 1C Bitrix')}}</li>
                    <li>{{_trans('Business edition license ')}}</li>
                    <li>{{_trans('Ready-made solution with a marketplace')}}</li>
                    <li>{{_trans('Personal Area')}}</li>
                    <li>{{_trans('Online chat')}}</li>
                    <li>{{_trans('Click, Payme, Visa, Mastercard payment system')}}</li>
                    <li>{{_trans('Domain as a GIFT')}}</li>
                    <li>{{_trans('Telegram bot as a GIFT')}}</li>
                    <li>{{_trans('GIFT loyalty system')}}</li>
                    <li>{{_trans('One year warranty support')}}</li>
                    <li>{{_trans('Training - 3 hours')}}</li>
                    <li>{{_trans('erm from 20 days')}}</li>
                </ul>
                <div class="justify-center flex">
                    <a
                            href=""
                            class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
                    >
                        {{_trans('Order')}}
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="max-w-xl mx-auto my-10 mb-40 relative pt-20" data-aos="fade-left">
        <div class="">
            <img class="-my-16  m-auto shadow-lg rounded-full border-gray-300 border"
                 src="{{asset('images/open_engine/images/4icons/3.svg')}}"
                 alt=""/>
        </div>
        <div
                class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-10"
        ></div>

        <!--    -->
        <div class="shadow-lg rounded-2xl z-20 px-10 pt-10 pb-5 m-5 z-20">
            <div class="text-center">
                <h1  class="font-bold text-gray-700 mb-1 mt-5 text-xl">
                    {{_trans('INDIVIDUAL')}}
                </h1>
                <h1  class="text-gray-700 mb-1 mt-5 text-4xl text-xl">
                    {{_trans('Under contract')}}
                </h1>
            </div>
            <div class="justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    {{_trans('Order')}}
                </a>
            </div>
        </div>
    </div>

    <div class="mr-4 sm:mr-4 md:mr-16" >
        <div class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32 flex flex-col justify-center items-center"
             data-aos="fade-right">
            <div class="flex justify-center items-center sm:pl-20">
                <h1 class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10">
                    {{_trans('Website development in Tashkent')}}
                </h1>
                <div class="flex text-center absolute item-center justify-center z-0">
                    <p data-aos="fade-up"

                       class=" text-9xl font-bold  text-gray-400 opacity-50">
                        7
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right"></div>

    <div class="bg-gray-50 z-0" data-aos="fade-up">
        <div

                class="pt-20 text-gray-700 pb-20 text-lg lg:mx-24 mx-16">
            <div class="z-0">
                <p>
                     {{_trans('Do you want to order a website or buy a website in Tashkent ? Call us! Our web studio applies its own approach to creating websites, developing online stores .
    We employ experienced website developers and programmers in Uzbekistan . We devote enough time to each project and
    do not work on a stream. We are always ready to offer original solutions for a whole range of services for website
    development in Uzbekistan and website design. We do everything to make your site beautifully and efficiently fulfill
    the companys tasks. We also provide technical support for sites in Uzbekistan.')}}


        </p>
            </div>
        </div>


        <div class="flex justify-end pb-20">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                        {{_trans('Other ')}}<br/>
                        {{_trans('services')}}
                    </h1>
                    <div class="flex text-center absolute item-center justify-center z-0">
                        <p data-aos="fade-up" class=" text-9xl font-bold  text-gray-300 ">
                         8
                        </p>
                    </div>
                </div>


                <div  class="bg-blue-700 max-w-5xl h-44 rounded-l-2xl pt-5 z-20 mt-32"
                     data-aos="fade-up-left">
                    <div class="flex justify-center items-center pl-20 pt-5">


                        <div class="swiper-container">
                            <div class="swiper-wrapper table w-full">

                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                        <p class="text-center">
                                           {{_trans('Online store development')}}

                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Seo promotion')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Context advertisement')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/digital-marketing_dark.svg')}}"
                                             alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Smm promotion')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Brandbook development')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/target_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Business automation')}}
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
</main>


@endsection


@section('js')

@endsection

