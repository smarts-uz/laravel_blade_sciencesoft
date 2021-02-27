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
                    {{_trans('Разработка и')}} <br>{{_trans('создание')}} <br> {{_trans('сайтов в ')}}<br>  {{_trans('Ташкенте')}}
                </div>
                <div class="lg:px-20">
                    <a href="#"
                       class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6">
                         {{_trans('Получить консультацию')}}
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
                    {{_trans('Интернет-магазин')}}
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
                     {{_trans('Техническая поддержка')}}
                </p>
            </div>
            <div class="pt-8" data-aos="fade-right">
                <img src="{{asset('images/open_engine/images/1/4.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    {{_trans('Корпоративные сайты')}}
                </p>
            </div>
            <div class="pt-8" data-aos="fade-right">
                <img src="{{asset('images/open_engine/images/1/5.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    {{_trans('Сложные системы')}}
                </p>
            </div>
        </div>

        <div class="text-center flex justify-center items-center my-20 relative">
            <h1
                    data-aos="fade-down"
                    class="text-3xl sm:text-4xl text-center font-bold text-blue-700 z-10"
            >
                {{_trans('Что входит в создание сайта?')}}
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
                    {{_trans('Продуманный и функциональный')}} <br>{{_trans(' прототип')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">02</p>
                <img src="{{asset('images/open_engine/images/2/2.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                   {{_trans('Красивый продающий')}}  <br>{{_trans('дизайн')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">03</p>
                <img src="{{asset('images/open_engine/images/2/3.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    {{_trans('Адаптация под')}} <br>{{_trans('любые устройства')}}
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
                    {{_trans('Правильная техническая')}} <br> {{_trans('структура и грамотная верстка')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">05</p>
                <img src="{{asset('images/open_engine/images/2/5.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                   {{_trans('Наполнение продающим контентом')}}
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">06</p>
                <img src="{{asset('images/open_engine/images/2/6.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    {{_trans('Предварительное тестирование')}}
                </p>
            </div>
        </div>

        <div class="flex justify-center items-center mb-10 my-20 relative">
            <h1
                    data-aos="fade-down"
                    class="text-2xl sm:text-4xl font-bold text-blue-700 z-10"
            >
                {{_trans('Этапы разработки сайта')}}
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
                       {{_trans('Согласование целей и ')}} <br/>{{_trans('задач')}}
                    </h1>
                    <ul class="list-disc pl-5 text-gray-700 text-base">
                        <li>{{_trans('Определяем задачу, которую должен решать сайт')}}</li>
                        <li>{{_trans('Анализируем конкурентов')}}</li>
                        <li>{{_trans('Анализируем особенности целевой аудитории')}}</li>
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
                        {{_trans('Прототип и дизайн')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Выбираем прототип сайта')}}</li>
                        <li>{{_trans('Определяемся с дизайном')}}</li>
                        <li>{{_trans('Подготавливаем визуальную часть')}}</li>
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
                        {{_trans('Верстка дизайна')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Верстаем визуальную часть сайта')}}</li>
                        <li>{{_trans('Подгоняем вид сайта под дизайн')}}</li>
                        <li>{{_trans('Оптимизируем код для дальнейшего программирования')}}</li>
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
                        {{_trans('Программирование')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Подготавливем код сайта')}}</li>
                        <li>{{_trans('Интегрируем код в CMS (платформа управления сайтом)')}}</li>
                        <li>{{_trans('
                            Подключаем внешние системы и упрощаем интерфейс CMS (если Вы в
                            дальнейшем планируете сами работать над сайтом)')}}
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
                       {{_trans('А\Б - тестирование')}}
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>{{_trans('Первичное тестирование системы')}}</li>
                        <li>{{_trans('Тестирование внешних систем сайта')}}</li>
                        <li>{{_trans('Правка и доработка')}}</li>
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
                        {{_trans('Наполнение и запуск')}}
                    </h1>
                    <ul class="list-disc text-gray-700 text-base">
                        <li>{{_trans('Наполняем контентом')}}</li>
                        <li>{{_trans('Проводим конечную проверку')}}</li>
                        <li>{{_trans('Запускаем сайт')}}</li>
                        <li>{{_trans('Техническая поддержка сайта')}}</li>
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
                {{_trans('Заполните форму прямо сейчас и получите квалифицированную бесплатную
                                          консультацию.')}}
            </h1>
            <h2 class="text-lg p-6 pl-13">{{_trans('Название организации')}}</h2>
            <form>
                <label>
                    <input type="text" placeholder="Пример: Open Engine"
                           class="h-12 w-full border-b border-blue-700 outline-none"/>
                </label>
            </form>


            <div class="flex justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 mt-10">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 my-2 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                        {{_trans('Назад')}}
                    </a>

                    <a href=""
                       class="bg-blue-700 rounded-full text-white my-2 px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                       {{_trans('Далее')}}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            {{_trans('Кейсы')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Мебельная фабрика Keng Makon')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2020</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Разработка интернет-магазина.')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Мебель')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1C </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Peno Dekor')}}</p>
{{_trans('')}}
                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}Услуги</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Корпоративный сайт')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Formula plus+')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Авто')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1C Битрикс')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                           {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Alibazar')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Стройматериали')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> {{_trans('1С Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Territoriya Group')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новостройка')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Aptechka.uz')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Доставка лекарств')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Php</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Mashhura.uz')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Каталог')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Учеба ')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С Битрикс ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Human Media')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">{{_trans('')}}2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Т{{_trans('ип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Новостной')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новости')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1C Битрикс ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Human')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Корпоративний')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Работа')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1C Битрикс ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Art Plast')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500"> 2016</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Сайт каталог')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Производство окон')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans(' WordPress')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Vek Building')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans(' Год создания:')}}</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Корпоративный')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новостройки')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans(' 1С-Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Best GO')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans(' Год создания:')}}</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans(' Сайт услуга')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Служба доставки')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('WordPress ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Formulaplus.uz')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Авто диски и шины')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С-Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Higo')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500"> 2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Интернет-магазин')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Одежды ')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С-Битрикс')}} </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Fundament Group')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500"> 2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Landing Page')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Строительство')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('')}}WordPress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Art Deco Design ')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2016</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Сайт услуга')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Архитектура и дизайн')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Shirin Shakar')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Сайт каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Производство')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> {{_trans('Wordpress')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Web Expert')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2014</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новостной портал')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Новости Узбекистана и Мира')}} </p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Php YII2</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Royal Garden')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Сайт каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500"> {{_trans('Сухофрукты')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('Wordpress ')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
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
                        <p class="text-blue-700"><b>{{_trans('Клиент:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Saroy Mebel')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Год создания:')}}</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Тип сайта:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Сайт каталог')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Направление:')}}</b></p>
                        <p class="text-gray-500">{{_trans('Мебель')}}</p>

                        <p class="text-blue-700 mt-3.5"><b>{{_trans('Технология:')}}</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">{{_trans('1С Битрикс')}}</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            {{_trans('заказать')}}
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-2xl sm:text-4xl font-bold text-blue-700 z-10">
            {{_trans('Используем в работе')}}
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
            <p data-aos="fade-up"  class=" text-9xl font-bold  text-gray-300 ">
                4
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <a href="" class="bg-blue-700 text-white px-3 py-3 mr-1">
            {{_trans('заказать проект')}}
        </a>
        <a
                href=""
                class="bg-blue-400 text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-300 ml-1">
            {{_trans('заказать проект')}}
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
                        <h1 class="text-3xl font-bold text-blue-500 z-10">Почему мы?</h1>
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
                            {{_trans('Почему мы?')}}
                        </h1>
                        <div class="flex text-center absolute item-center justify-center z-0 opacity-50">
                            <p data-aos="fade-up" class=" text-9xl font-bold  text-gray-300 ">
                                5
                            </p>
                        </div>
                    </div>
                    <p class="text-white text-base text-md p-5 pt-10 text-center">
                        {{_trans('Потому что у нас Вы можете создать по-настоящему классный сайт,
                                                          со всеми нужными Вам функциями')}}
                    </p>
                </div>
            </div>

            <div class="pt-20 grid justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                    <div class="p-5 mr-5">
                        <img src="{{asset('images/open_engine/web-development/48.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('Более 500 ')}}<br/>
                            {{_trans('выполненых проектов')}}
                        </p>
                    </div>

                    <div class="p-5">
                        <img src="{{asset('images/open_engine/web-development/49.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('Более 100')}} <br/>
                            {{_trans('постоянных клиентов')}}
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                    <div class="p-5 mr-5">
                        <img src="{{asset('images/open_engine/web-development/50.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('Команда ')}}<br/>
                            {{_trans('сертифицированных ')}}<br/>
                            {{_trans('специалистов')}}
                        </p>
                    </div>

                    <div class="p-5">
                        <img src="{{asset('images/open_engine/web-development/51.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            {{_trans('Индивидуальный')}} <br/>
                            {{_trans('подход к каждому')}} <br/>
                            {{_trans('клиенту')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            Цены и тарифы
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
                        {{_trans('')}}от <span class="font-bold text-gray-700">9 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>{{_trans('Адаптивный дизайн')}}</li>
                    <li>{{_trans('Наполнение сайта')}}</li>
                    <li>{{_trans('Система аналитики')}}</li>
                    <li>{{_trans('Настройка почты')}}</li>
                    <li>{{_trans('Онлайн чат')}}</li>
                    <li>{{_trans('Хостинг и домен в подарок')}}</li>
                    <li>{{_trans('Гарантийная поддержка в течение года')}}</li>
                    <li>{{_trans('Обучение – 1 час')}}</li>
                    <li>{{_trans('Срок от 10 дней')}}</li>
                </ul>
                <div class="justify-center flex">
                    <a
                            href=""
                            class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
                    >
                        {{_trans('Заказать')}}
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
                        {{_trans('Корпоративный сайт')}}
                    </h1>
                    <h1  class="border-b pb-5 text-gray-600 text-xl">
                        от <span class="font-bold text-gray-700">14 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>{{_trans('Система управления сайтом')}}</li>
                    <li>{{_trans('Адаптивный дизайн')}}</li>
                    <li>{{_trans('Каталог товаров или услуг')}}</li>
                    <li>{{_trans('Новости / Блог / Модули')}}</li>
                    <li>{{_trans('Настройка почты')}}</li>
                    <li>{{_trans('Онлайн чат')}}</li>
                    <li>{{_trans('Хостинг и домен в подарок')}}</li>
                    <li>{{_trans('Гарантийная поддержка в течение года')}}</li>
                    <li>{{_trans('Обучение – 2 часа')}}</li>
                    <li>{{_trans('Срок от 15 дней')}}</li>
                </ul>
                <div class="justify-center flex">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        {{_trans('Заказать')}}
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
                        {{_trans('от')}} <span class="font-bold text-gray-700">35 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>{{_trans('Система управления сайтом 1С битрикс')}}</li>
                    <li>{{_trans('Лицензия бизнес редакция')}}</li>
                    <li>{{_trans('Готовое решение с маркетплейс')}}</li>
                    <li>{{_trans('Личный кабинет')}}</li>
                    <li>{{_trans('Онлайн чат')}}</li>
                    <li>{{_trans('Система оплаты Click,Payme, Visa, Mastercard')}}</li>
                    <li>{{_trans('Домен в ПОДАРОК')}}</li>
                    <li>{{_trans('Телеграм бот в ПОДАРОК')}}</li>
                    <li>{{_trans('Система лоялности ПОДАРОК')}}</li>
                    <li>{{_trans('Гарантийная поддержка в течение года')}}</li>
                    <li>{{_trans('Обучение – 3 часа')}}</li>
                    <li>{{_trans('Срок от 20 дней')}}</li>
                </ul>
                <div class="justify-center flex">
                    <a
                            href=""
                            class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
                    >
                        {{_trans('Заказать')}}
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
                    {{_trans('ИНДИВИДУАЛЬНЫЙ')}}
                </h1>
                <h1  class="text-gray-700 mb-1 mt-5 text-4xl text-xl">
                    {{_trans('По договору')}}
                </h1>
            </div>
            <div class="justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    {{_trans('Заказать')}}
                </a>
            </div>
        </div>
    </div>

    <div class="mr-4 sm:mr-4 md:mr-16" >
        <div class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32 flex flex-col justify-center items-center"
             data-aos="fade-right">
            <div class="flex justify-center items-center sm:pl-20">
                <h1 class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10">
                    {{_trans('Разработка сайтов в Ташкенте')}}
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
                    {{_trans('Хотите')}} <b>{{_trans('заказать веб сайт')}}</b>{{_trans('или ')}} <b>{{_trans('купить сайт в Ташкенте')}}</b>
                    {{_trans('?Звоните нам! Наша ')}}<b>{{_trans('веб студия')}}</b> {{_trans('
                    применяет собственный подход к созданию сайтов,')}} <b>{{_trans('разработке интернет магазинов')}}</b>. {{_trans('У нас работают опытные')}}
                    <b>{{_trans('разработчики сайтов и программисты в Узбекистане')}}</b>. {{_trans('
                    Мы уделяем достаточно времени каждому проекту и&nbsp;не&nbsp;работаем
                                        на&nbsp;потоке. Всегда готовы предложить оригинальные решения
                                        по&nbsp;целому комплексу услуг')}}
                    <b>{{_trans('разработки сайта в Узбекистане')}}</b>{{_trans('
                    и&nbsp;дизайна сайтов.
                                        Делаем всё,&nbsp;чтобы ваш сайт красиво и&nbsp;эффективно выполнял
                                        задачи компании. Также обеспечиваем')}}      <b>{{_trans('техническую поддержку сайтов в Узбекистане.')}}</b>
                </p>
            </div>
        </div>


        <div class="flex justify-end pb-20">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                        {{_trans('Другие ')}}<br/>
                        {{_trans('услуги')}}
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
                                           {{_trans('Разработка интернет-магазина')}}

                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Seo продвижение')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Контекстная реклама')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/digital-marketing_dark.svg')}}"
                                             alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('СММ продвижения')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Разработка брендбуков')}}
                                        </p>
                                    </div>
                                </div>


                                <div class="swiper-slide table-cell">
                                    <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                        <img class="mx-auto p-3"
                                             src="{{asset('images/open_engine/images/4/target_dark.svg')}}" alt=""/>
                                        <p class="text-center pb-6">
                                            {{_trans('Автоматизация бизнеса')}}
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

