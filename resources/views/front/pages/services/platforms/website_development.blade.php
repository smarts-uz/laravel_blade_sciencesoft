
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
                    Разработка и <br> создание <br> сайтов в <br> Ташкенте
                </div>
                <div class="lg:px-20">
                    <a href="#"
                       class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6">
                        Получить консультацию
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
                    Интернет-магазин
                </p>
            </div>
            <div class="pt-8" data-aos="fade-left">
                <img src="{{asset('images/open_engine/images/1/2.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    Landing Page
                </p>
            </div>
            <div class="pt-8" data-aos="fade-up">
                <img src="{{asset('images/open_engine/images/1/3.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    Техническая поддержка
                </p>
            </div>
            <div class="pt-8" data-aos="fade-right">
                <img src="{{asset('images/open_engine/images/1/4.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    Корпоративные сайты
                </p>
            </div>
            <div class="pt-8" data-aos="fade-right">
                <img src="{{asset('images/open_engine/images/1/5.svg')}}" alt="" class="m-auto"/>
                <p class="text-center font-bold text-md text-gray-700">
                    Сложные системы
                </p>
            </div>
        </div>

        <div class="text-center flex justify-center items-center my-20 relative">
            <h1
                    data-aos="fade-down"
                    class="text-3xl sm:text-4xl text-center font-bold text-blue-700 z-10"
            >
                Что входит в создание сайта?
            </h1>
            <div class="flex text-center absolute item-center justify-center z-0">
                <p
                        data-aos="fade-up"
                        style="font-size: 8rem"
                        class="  font-bold  text-gray-300 "
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
                    Продуманный и функциональный <br> прототип
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">02</p>
                <img src="{{asset('images/open_engine/images/2/2.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    Красивый продающий <br> дизайн
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">03</p>
                <img src="{{asset('images/open_engine/images/2/3.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    Адаптация под <br> любые устройства
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
                    Правильная техническая <br> структура и грамотная верстка
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">05</p>
                <img src="{{asset('images/open_engine/images/2/5.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    Наполнение продающим контентом
                </p>
            </div>

            <div
                    data-aos="flip-left"
                    class="flex-1 shadow-lg rounded-lg mb-8 m-4 hover:text-white hover:bg-blue-500 bg-white p-4"
            >
                <p class="font-bold pb-5 pt-2">06</p>
                <img src="{{asset('images/open_engine/images/2/6.svg')}}" alt="" class="m-auto"/>
                <p class="p-8 font-bold text-md text-gray-700 hover:text-white">
                    Предварительное тестирование
                </p>
            </div>
        </div>

        <div class="flex justify-center items-center mb-10 my-20 relative">
            <h1
                    data-aos="fade-down"
                    class="text-2xl sm:text-4xl font-bold text-blue-700 z-10"
            >
                Этапы разработки сайта
            </h1>
            <div class="flex text-center absolute item-center justify-center z-0">
                <p
                        data-aos="fade-up"
                        style="font-size: 8rem"
                        class="  font-bold  text-gray-300 "
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
                        Согласование целей и <br/>задач
                    </h1>
                    <ul class="list-disc pl-5 text-gray-700 text-base">
                        <li>Определяем задачу, которую должен решать сайт</li>
                        <li>Анализируем конкурентов</li>
                        <li>Анализируем особенности целевой аудитории</li>
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
                        Прототип и дизайн
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>Выбираем прототип сайта</li>
                        <li>Определяемся с дизайном</li>
                        <li>Подготавливаем визуальную часть</li>
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
                        Верстка дизайна
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>Верстаем визуальную часть сайта</li>
                        <li>Подгоняем вид сайта под дизайн</li>
                        <li>Оптимизируем код для дальнейшего программирования</li>
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
                        Программирование
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>Подготавливем код сайта</li>
                        <li>Интегрируем код в CMS (платформа управления сайтом)</li>
                        <li>
                            Подключаем внешние системы и упрощаем интерфейс CMS (если Вы в
                            дальнейшем планируете сами работать над сайтом)
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
                        А\Б - тестирование
                    </h1>
                    <ul class="pl-5 list-disc text-gray-700 text-base">
                        <li>Первичное тестирование системы</li>
                        <li>Тестирование внешних систем сайта</li>
                        <li>Правка и доработка</li>
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
                        Наполнение и запуск
                    </h1>
                    <ul class="list-disc text-gray-700 text-base">
                        <li>Наполняем контентом</li>
                        <li>Проводим конечную проверку</li>
                        <li>Запускаем сайт</li>
                        <li>Техническая поддержка сайта</li>
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
                Заполните форму прямо сейчас и получите квалифицированную бесплатную
                консультацию.
            </h1>
            <h2 class="text-lg p-6 pl-13">Название организации</h2>
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
                        Назад
                    </a>

                    <a href=""
                       class="bg-blue-700 rounded-full text-white my-2 px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                        Далее
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
            Кейсы
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
            <p data-aos="fade-up" style="font-size: 8rem" class="  font-bold  text-gray-300 ">
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Мебельная фабрика Keng Makon</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2020</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Разработка интернет-магазина.</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Мебель</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1C </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500"> Peno Dekor</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Услуги</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Корпоративный сайт</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Wordpress</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Formula plus+</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Авто</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1C Битрикс</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Alibazar</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Интернет-магазин</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Стройматериали</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> 1С Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Territoriya Group</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Новостройка</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Wordpress</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Aptechka.uz</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Доставка лекарств</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Интернет-магазин</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Php</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Mashhura.uz</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500"> Каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500"> Учеба </p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1С Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Human Media</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500"> Новостной</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Новости</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1C Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Human</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2019</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Корпоративний</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Работа</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1C Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500"> Art Plast</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500"> 2016</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500"> Сайт каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Производство окон</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> WordPress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500"> Vek Building </p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500"> Корпоративный</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Новостройки</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1С-Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Best GO</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Сайт услуга</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Служба доставки</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">WordPress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Formulaplus.uz</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Интернет-магазин</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Авто диски и шины</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1С-Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Higo</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500"> 2017</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Интернет-магазин</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Одежды </p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1С-Битрикс </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Fundament Group</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500"> 2018</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Landing Page</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Строительство</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">WordPress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500"> Art Deco Design </p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2016</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Сайт услуга</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500"> Архитектура и дизайн</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Wordpress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500"> Shirin Shakar</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500"> Сайт каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500"> Производство</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500"> Wordpress</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Web Expert</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2014</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500"> Новостной портал</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500"> Новости Узбекистана и Мира</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Php YII2</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Royal Garden</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2017</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Сайт каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500"> Сухофрукты</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">Wordpress </p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
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
                        <p class="text-blue-700"><b>Клиент:</b></p>
                        <p class="text-gray-500">Saroy Mebel</p>

                        <p class="text-blue-700 mt-3.5"><b>Год создания:</b></p>
                        <p class="text-gray-500">2018</p>

                        <p class="text-blue-700 mt-3.5"><b>Тип сайта:</b></p>
                        <p class="text-gray-500">Сайт каталог</p>

                        <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                        <p class="text-gray-500">Мебель</p>

                        <p class="text-blue-700 mt-3.5"><b>Технология:</b></p>
                        <p class="border-b pb-5 mb-10 text-gray-500">1С Битрикс</p>

                        <a href=""
                           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                            заказать
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-2xl sm:text-4xl font-bold text-blue-700 z-10">
            Используем в работе
        </h1>
        <div class="flex text-center absolute item-center justify-center z-0">
            <p data-aos="fade-up" style="font-size: 8rem" class="  font-bold  text-gray-300 ">
                4
            </p>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <a href="" class="bg-blue-700 text-white px-3 py-3 mr-1">
            заказать проект
        </a>
        <a
                href=""
                class="bg-blue-400 text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-300 ml-1">
            заказать проект
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
                <div style="border-radius: 200px 0 200px 0; left: -80px"
                     class="bg-blue-500 py-20 lg:m-10 px-10 md:px-10 max-w-lg absolute hidden sm:block"
                     data-aos="fade-right">
                    <div class="flex justify-center items-center my-10 relative">
                        <h1 class="text-3xl font-bold text-blue-500 z-10">Почему мы?</h1>
                        <p style="font-size: 9rem" class="item-center font-bold absolute left-48 text-blue-500 z-0">
                            7
                        </p>
                    </div>
                    <p class="text-blue-500 text-md p-10 pt-10 text-center">
                        Потому что у нас Вы можете создать по-настоящему классный сайт, со всеми нужными Вам функциями
                    </p>
                </div>
                <div style="border-radius: 0 0 200px 0; top: 80px"
                     class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 max-w-lg relative" data-aos="fade-right">
                    <div class="flex justify-center items-center my-10 relative">
                        <h1 class="lg:text-3xl font-bold text-white z-10 ">
                            Почему мы?
                        </h1>
                        <div class="flex text-center absolute item-center justify-center z-0 opacity-50">
                            <p data-aos="fade-up" style="font-size: 8rem" class="  font-bold  text-gray-300 ">
                                5
                            </p>
                        </div>
                    </div>
                    <p class="text-white text-base text-md p-5 pt-10 text-center">
                        Потому что у нас Вы можете создать по-настоящему классный сайт,
                        со всеми нужными Вам функциями
                    </p>
                </div>
            </div>

            <div class="pt-20 grid justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                    <div class="p-5 mr-5">
                        <img src="{{asset('images/open_engine/web-development/48.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            Более 500 <br/>
                            выполненых проектов
                        </p>
                    </div>

                    <div class="p-5">
                        <img src="{{asset('images/open_engine/web-development/49.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            Более 100 <br/>
                            постоянных клиентов
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
                    <div class="p-5 mr-5">
                        <img src="{{asset('images/open_engine/web-development/50.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            Команда <br/>
                            сертифицированных <br/>
                            специалистов
                        </p>
                    </div>

                    <div class="p-5">
                        <img src="{{asset('images/open_engine/web-development/51.svg')}}" alt=""/>

                        <p class="text-base lg:text-xl text-gray-600">
                            Индивидуальный <br/>
                            подход к каждому <br/>
                            клиенту
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
               style="font-size: 8rem"
               class="  font-bold  text-gray-300 opacity-50 ">
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
                    <h1 style="font-size: 21px"
                        class="font-bold text-gray-700 mb-1 mt-5">
                        LANDING PAGE
                    </h1>
                    <h1 style="font-size: 25px" class="border-b pb-5 text-gray-600">
                        от <span class="font-bold text-gray-700">9 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>Адаптивный дизайн</li>
                    <li>Наполнение сайта</li>
                    <li>Система аналитики</li>
                    <li>Настройка почты</li>
                    <li>Онлайн чат</li>
                    <li>Хостинг и домен в подарок</li>
                    <li>Гарантийная поддержка в течение года</li>
                    <li>Обучение – 1 час</li>
                    <li>Срок от 10 дней</li>
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

        <div class="pt-20 transform hover:scale-110 duration-200">
            <img class="-my-16 m-auto shadow-lg rounded-full border-gray-300 border"
                 src="{{asset('images/open_engine/images/4icons/2.svg')}}"
                 alt=""/>
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 -z-10"></div>
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5">
                <div class="text-center">
                    <h1 style="font-size: 21px"
                        class="font-bold text-gray-700 mb-1 mt-5">
                        Корпоративный сайт
                    </h1>
                    <h1 style="font-size: 25px" class="border-b pb-5 text-gray-600">
                        от <span class="font-bold text-gray-700">14 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>Система управления сайтом</li>
                    <li>Адаптивный дизайн</li>
                    <li>Каталог товаров или услуг</li>
                    <li>Новости / Блог / Модули</li>
                    <li>Настройка почты</li>
                    <li>Онлайн чат</li>
                    <li>Хостинг и домен в подарок</li>
                    <li>Гарантийная поддержка в течение года</li>
                    <li>Обучение – 2 часа</li>
                    <li>Срок от 15 дней</li>
                </ul>
                <div class="justify-center flex">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        Заказать
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
                    <h1 style="font-size: 21px"
                        class="font-bold text-gray-700 mb-1 mt-5">
                        Интернет-магазин
                    </h1>
                    <h1 style="font-size: 25px" class="border-b pb-5 text-gray-600">
                        от <span class="font-bold text-gray-700">35 000 000</span> uzs
                    </h1>
                </div>
                <ul class="list-disc text-gray-600 text-base mt-3">
                    <li>Система управления сайтом 1С битрикс</li>
                    <li>Лицензия бизнес редакция</li>
                    <li>Готовое решение с маркетплейс</li>
                    <li>Личный кабинет</li>
                    <li>Онлайн чат</li>
                    <li>Система оплаты Click,Payme, Visa, Mastercard</li>
                    <li>Домен в ПОДАРОК</li>
                    <li>Телеграм бот в ПОДАРОК</li>
                    <li>Система лоялности ПОДАРОК</li>
                    <li>Гарантийная поддержка в течение года</li>
                    <li>Обучение – 3 часа</li>
                    <li>Срок от 20 дней</li>
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
                <h1 style="font-size: 21px" class="font-bold text-gray-700 mb-1 mt-5">
                    ИНДИВИДУАЛЬНЫЙ
                </h1>
                <h1 style="font-size: 21px" class="text-gray-700 mb-1 mt-5 text-4xl">
                    По договору
                </h1>
            </div>
            <div class="justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Заказать
                </a>
            </div>
        </div>
    </div>

    <div class="mr-4 sm:mr-4 md:mr-16" >
        <div class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32 flex flex-col justify-center items-center"
             data-aos="fade-right">
            <div class="flex justify-center items-center sm:pl-20">
                <h1 class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10">
                    Разработка сайтов в Ташкенте
                </h1>
                <div class="flex text-center absolute item-center justify-center z-0">
                    <p data-aos="fade-up"
                       style="font-size: 8rem"
                       class="  font-bold  text-gray-400 opacity-50">
                        7
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right"></div>

    <div class="bg-gray-50 z-0" data-aos="fade-up">
        <div
                style="margin-left: 20%; margin-right: 20%; font-size: 17px"
                class="pt-20 text-gray-700 pb-20">
            <div class="z-0">
                <p>
                    Хотите <b>заказать веб сайт</b> или <b>купить сайт в Ташкенте</b>?
                    Звоните нам! Наша <b>веб студия</b> применяет собственный подход к
                    созданию сайтов, <b>разработке интернет магазинов</b>. У нас
                    работают опытные
                    <b>разработчики сайтов и программисты в Узбекистане</b>. Мы
                    уделяем достаточно времени каждому проекту и&nbsp;не&nbsp;работаем
                    на&nbsp;потоке. Всегда готовы предложить оригинальные решения
                    по&nbsp;целому комплексу услуг
                    <b>разработки сайта в Узбекистане</b> и&nbsp;дизайна сайтов.
                    Делаем всё,&nbsp;чтобы ваш сайт красиво и&nbsp;эффективно выполнял
                    задачи компании. Также обеспечиваем
                    <b>техническую поддержку сайтов в Узбекистане.</b>
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
                        <p data-aos="fade-up" style="font-size: 8rem" class="  font-bold  text-gray-300 ">
                            8
                        </p>
                    </div>
                </div>


                <div style="height: 10rem" class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5 z-20 mt-32"
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
