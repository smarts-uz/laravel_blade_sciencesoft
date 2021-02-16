@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main style="overflow-y: hidden; overflow-x: hidden">


<div class="bg-black h-auto px-4 pt-32">
        <div
          class="py-8 grid grid-cols-1 text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right">
            <div
              class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
            >
              Контекстная реклама Яндекс и Google в Ташкенте
            </div>
            <div class="lg:px-20">
              <a
                href="#"
                class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6"
              >
                Получить консультацию
              </a>
            </div>
          </div>

          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/context_advertisement/images/1.svg')}}" alt="" />
          </div>
        </div>
      </div>



<div class="bg-gray-200">
    <div class="flex container m-auto justify-between pt-16  px-40">
        <div data-aos="fade-left">
            <img src="{{asset('images/open_engine/context_advertisement/images/1/1.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Интернет-магазин</p>
        </div>
        <div data-aos="fade-left">
            <img src="{{asset('images/open_engine/context_advertisement/images/1/2.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Landing Page</p>
        </div>
        <div data-aos="fade-up">
            <img src="{{asset('images/open_engine/context_advertisement/images/1/3.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Техническая поддержка</p>
        </div>
        <div data-aos="fade-right">
            <img src="{{asset('images/open_engine/context_advertisement/images/1/4.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Корпоративные сайты</p>
        </div>
        <div data-aos="fade-right">
            <img src="{{asset('images/open_engine/context_advertisement/images/1/5.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Сложные системы</p>
        </div>
    </div>

    <div class="flex justify-center m-16">
        <a href=""
           class="bg-blue-700 rounded-full text-white px-10 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6 shadow-lg">
            SEO продвижение
        </a>

        <a href=""
           class="bg-blue-700 rounded-full text-white px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
            Контекстная реклама
        </a>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 text-center leading-10">Что такое <br>
            контекстная реклама</h1>
        <p data-aos="fade-up" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            1</p>
    </div>

    <div class="flex">
        <div>
            <img src="https://oe.uz/local/templates/oe/media/images/2.png" alt="">
        </div>
        <div>
            <p>Это официальный инструмент поисковых систем Google и Яндекс. Реклама показывается людям в контексте их
                запросов, то есть заинтересованным покупателям . И платите вы только за реальные визиты на сайт.
                Наверняка, вы уже видели и переходили сами по таким объявлениям.
            </p>
            <h1>Контекстная реклама бывает двух видов:</h1>
            <ul class="list-disc">
                <li> объявления на Поиске — блоки над и под результатами.</li>
                <li> в рекламной сети — миллионы сайтов-партнеров Яндекс и Google.</li>
            </ul>
        </div>
    </div>


    <div class="flex justify-center items-center mb-10 my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10">Этапы разработки сайта</h1>
        <p data-aos="fade-up" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            2</p>
    </div>


    <div class="py-20 pt-20 pb-64 ">

        <div class="grid grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto">
                <img src="https://oe.uz/local/templates/oe/media/images/3.png" alt="">
            </div>
            <div data-aos="fade-right" class="pl-20 m-auto relative z-10">
                Позиции в поисковой выдачи под каждый отдельный запрос. Мониторинг трафика и целевых действий по
                рекламе: клики, переходы, время на сайте и т.д.
            </div>

        </div>

        <div class="grid grid-cols-2 container m-auto items-center p-10">

            <div data-aos="fade-right" class="pl-20 m-auto">
                Показ рекламы заинтересованным лицам, которые уже заходили на ваш сайт или кликали по рекламе.
            </div>
            <div class="m-auto">
                <img src="https://oe.uz/local/templates/oe/media/images/4.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-2 container m-auto items-center p-10">
            <div class="m-auto">
                <img src="https://oe.uz/local/templates/oe/media/images/5.png" alt="">
            </div>
            <div data-aos="fade-right" class="pl-20 m-auto ">
                Реклама в почтовом сервисе Gmail
            </div>
        </div>

        <div class="grid grid-cols-2 container m-auto items-center p-10">
            <div data-aos="fade-right" class="pl-20 m-auto ">
                Реклама на платформе Youtube
            </div>
            <div class="m-auto">
                <img src="https://oe.uz/local/templates/oe/media/images/6.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-2 container m-auto items-center p-10">
            <div class="m-auto">
                <img src="https://oe.uz/local/templates/oe/media/images/7.png" alt="">
            </div>
            <div data-aos="fade-right" class="pl-20 m-auto ">
                Реклама в партнерских известных мобильных приложениях.
            </div>
        </div>

        <div class="grid grid-cols-2 container m-auto items-center p-10">
            <div data-aos="fade-right" class="pl-20 m-auto ">
                Рекламные объявления в партнерских сайтах Google и Яндекс
            </div>
            <div class="m-auto">
                <img src="https://oe.uz/local/templates/oe/media/images/8.png" alt="">
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mb-10 my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 leading-9">Преимущество <br>
            интернет - рекламы
        </h1>
        <p data-aos="fade-up" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            3</p>
    </div>

    <div>
        <div class="container mx-auto flex flex-col">
            <div class="flex justify-center flex-col md:flex-row">
                <div class="flex bg-white rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/1.svg')}}" alt="">
                    </div>
                    <div class=" pl-5 pt-10">
                        <h1 class="text-gray-700 font-bold text-lg">Точно</h1>
                    </div>
                </div>
                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/2.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Качественно</h1>
                    </div>
                </div>
                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/3.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Быстро</h1>
                    </div>
                </div>

                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/4.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Эффективно</h1>
                    </div>
                </div>

            </div>


            <div class="flex justify-center flex flex-col md:flex-row">
                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/5.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Безопасно</h1>
                    </div>
                </div>
                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/6.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Практично</h1>
                    </div>
                </div>
                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/7.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Удобно</h1>
                    </div>
                </div>

                <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/8.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Экономно</h1>
                    </div>
                </div>
            </div>
        </div>


        <div style="margin-top: 17rem" class="bg-gray-100 h-12 ">

        </div>
        <div data-aos="zoom-in" class="max-w-3xl mx-auto bg-white shadow-lg rounded-3xl  p-20 -mt-56">
            <h1 class="text-center text-3xl font-semibold leading-tight text-blue-700">Заполните форму прямо сейчас и
                получите квалифицированную бесплатную консультацию.</h1>
            <h2 class="text-lg p-6 pl-13">Название организации</h2>
            <label>
                <input type="text" placeholder="Пример: Open Engine" class="h-12 w-full border-b border-blue-700">
            </label>

            <div>
                <div class="dots dots-form mx-auto">
                    <span class="active"><i class="fa fa-check"></i></span>
                    <span><i class="fa fa-check"></i></span>
                    <span><i class="fa fa-check"></i></span>
                    <span><i class="fa fa-check"></i></span>
                </div>
            </div>

            <div class="flex mt-10 justify-center">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                    Назад
                </a>

                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                    Далее
                </a>
            </div>
        </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Этапы работы</h1>
            <p data-aos="fade-down" style="font-size: 8rem"
               class="item-center font-bold absolute left-48 text-gray-300 z-0">
                4</p>
        </div>

        <div style="margin-bottom: 20rem;">
            <div class="container mx-auto flex flex-col px-40">
                <div class="flex justify-center flex-col md:flex-row">
                    <div
                         class="flex border-blue-700 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class="   justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl">Аудит сайта</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>Изучение вашего бизнеса</li>
                                <li> Анализ целевой аудитории</li>
                                <li>Анализ рынка</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 p-3 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl"> ОПТИМИЗАЦИЯ СЕМАНТИКИ</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>Собираем ключевые слова и генерируем запросы</li>
                                <li>Исключаем пустые запросы</li>
                                <li> Создаём SEO структуру сайта</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 p-3 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl">РЕКЛАМНОЕ ОБЪЯВЛЕНИЕ</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li> Красивый дизайн</li>
                                <li> Кричащий заголовок</li>
                                <li>Продающий текст</li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>


            <div style="padding:0 20rem 0 20rem; " class="container mx-auto flex flex-col">
                <div class="flex justify-center flex-col md:flex-row">
                    <div
                         class="flex border-blue-700 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class="   justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl"> НАСТРОЙКА РЕКЛАМЫ</h1>
                            <ul class="list-disc text-gray-600 text-sm">
                                <li> Настройка интеграции с сайтом</li>
                                <li>Настройка на целевую аудиторию</li>
                                <li>Рассчитываем затраты за целевые действия</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl">ОТЧЕТНОСТЬ</h1>
                            <ul class="list-disc text-gray-600 text-sm">
                                <li> Статистика по кликам</li>
                                <li>Статистка роста трафика на сайте</li>
                                <li> Отчет по бюджету</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
            <p data-aos="fade-down" style="font-size: 8rem"
               class="item-center font-bold absolute left-48 text-gray-300 z-0">
                5</p>
        </div>



        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">

                            <div>
                                <img src="{{asset('images/open_engine/context_advertisement/images/intro.svg')}}" alt="">
                            </div>
                            <div class="text-2xl " data-aos="fade-up">
                                <p><b>Клиент:</b></p>
                                <p>Мебельная фабрика Keng Makon</p>

                                <p><b>Год создания:</b></p>
                                <p>2020</p>

                                <p><b>Тип сайта:</b></p>
                                <p>Разработка интернет-магазина.</p>

                                <p><b>Направление:</b></p>
                                <p>Мебель</p>

                                <p><b>Технология:</b></p>
                                <p class="border-b pb-5 mb-10">1C </p>

                                <a href=""
                                   class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                    заказать
                                </a>
                            </div>

                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">

                            <div>
                                <img src="{{asset('images/open_engine/context_advertisement/images/intro.svg')}}" alt="">
                            </div>
                            <div class="text-2xl" data-aos="fade-up">
                                <p><b>Клиент:</b></p>
                                <p>Мебельная фабрика Keng Makon</p>

                                <p><b>Год создания:</b></p>
                                <p>2020</p>

                                <p><b>Тип сайта:</b></p>
                                <p>Разработка интернет-магазина.</p>

                                <p><b>Направление:</b></p>
                                <p>Мебель</p>

                                <p><b>Технология:</b></p>
                                <p class="border-b pb-5 mb-10">1C </p>

                                <a href=""
                                   class=" bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                    заказать
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">

                            <div>
                                <img src="{{asset('images/open_engine/context_advertisement/images/intro.svg')}}" alt="">
                            </div>
                            <div class="text-2xl" data-aos="fade-up">
                                <p><b>Клиент:</b></p>
                                <p>Мебельная фабрика Keng Makon</p>

                                <p><b>Год создания:</b></p>
                                <p>2020</p>

                                <p><b>Тип сайта:</b></p>
                                <p>Разработка интернет-магазина.</p>

                                <p><b>Направление:</b></p>
                                <p>Мебель</p>

                                <p><b>Технология:</b></p>
                                <p class="border-b pb-5 mb-10">1C </p>

                                <a href=""
                                   class=" bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                    заказать
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Используем в работе</h1>
            <p data-aos="fade-down" style="font-size: 8rem"
               class="item-center font-bold absolute left-48 text-gray-300 z-0">
                6</p>
        </div>







        <div class=" flex justify-center items-center">
            <a href=""
               class="bg-blue-700 text-white px-3 py-3 mr-6">
                заказать проект
            </a>
            <a href=""
               class="bg-blue-400 text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-300 mr-6">
                заказать проект
            </a>
        </div>

        <div class="flex container m-auto justify-between  px-40 p-10">
            <div>
                <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/context_advertisement/images/4icons/1.svg')}}" alt="">
                <p class="font-bold text-lg text-center text-gray-600 mt-5">Wordpress</p>
            </div>

            <div>
                <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/context_advertisement/images/4icons/2.svg')}}" alt="">
                <p class="font-bold text-lg text-center text-gray-600 mt-5">Opencart</p>
            </div>

            <div>
                <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}" alt="">
                <p class="font-bold text-lg text-center text-gray-600 mt-5">YII2</p>
            </div>

            <div>
                <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/context_advertisement/images/4icons/4.svg')}}" alt="">
                <p class="font-bold text-lg text-center text-gray-600 mt-5">Laravel</p>
            </div>

            <div>
                <img class="shadow-lg  rounded-full" src="{{asset('images/open_engine/context_advertisement/images/4icons/5.svg')}}" alt="">
                <p class="font-bold text-lg text-center text-gray-600 mt-5">Bitrix</p>
            </div>
        </div>


        <div class="grid grid-cols-2 px-20 relative">

            <div style="border-radius: 0 0 200px 0" class="bg-blue-700 py-20 m-10 px-20 " data-aos="fade-right">

                <div class="flex justify-center items-center my-10 relative ">
                    <h1 class="text-3xl font-bold text-white z-10">Почему мы?</h1>
                    <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-500 z-0">5</p>
                </div>
                <p class="text-white text-md p-5 pt-10 text-center">Потому что у нас Вы можете создать по-настоящему
                    классный
                    сайт, со всеми нужными
                    Вам функциями</p>
            </div>
            <!--    <div style="border-radius: 200px 0 0 0" class="bg-blue-300 py-20 m-10 px-40 absolute ">-->
            <!--        <div class="flex justify-center items-center my-20 relative ">-->
            <!--            <h1 class="text-4xl font-bold text-white z-10"></h1>-->
            <!--            <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0"></p>-->
            <!--        </div>-->
            <!--        <p class="text-white text-lg"></p>-->
            <!--    </div>-->


            <div>
                <div class="grid grid-cols-2">
                    <div class=" p-5">
                        <img class="rounded-full  border-indigo-600 border-4" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}" alt="">
                        <p>01</p>
                        <p class="text-2xl text-gray-600">Более 500 <br> выполненых проектов</p>
                    </div>

                    <div class=" p-5">
                        <img class="rounded-full border-indigo-600 border-4" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}" alt="">
                        <p>02</p>
                        <p class="text-2xl text-gray-600">Более 100 <br> постоянных клиентов</p>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class=" p-5">
                        <img class="rounded-full border-indigo-600 border-4" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}" alt="">
                        <p>03</p>
                        <p class="text-2xl text-gray-600">Команда <br> сертифицированных <br> специалистов</p>
                    </div>

                    <div class=" p-5">
                        <img class="rounded-full border-indigo-600 border-4" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}" alt="">
                        <p>04</p>
                        <p class="text-2xl text-gray-600">Индивидуальный <br> подход к каждому <br> клиенту</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
            <p data-aos="fade-down" style="font-size: 8rem"
               class="item-center font-bold absolute left-48 text-gray-300 z-0">
                6</p>
        </div>


        <div class="flex container m-auto justify-between  p-20" data-aos="fade-right">
            <div>
                <img class="-my-16 m-auto shadow-lg  rounded-full border-gray-300 border"
                     src="{{asset('images/open_engine/context_advertisement/images/4icons/1.svg')}}"
                     alt="">
                <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-10"></div>
                <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5 z-20">
                    <div class="text-center">
                        <h1 style="font-size: 21px" class="font-bold text-gray-700 mb-1 mt-5">LANDING PAGE</h1>
                        <h1 style="font-size: 25px" class="border-b pb-5 text-gray-600">от <span
                                class="font-bold text-gray-700">9 000 000</span> uzs</h1>
                    </div>
                    <ul class="list-disc text-gray-600 text-base mt-3">
                        <li>Адаптивный дизайн</li>
                        <li>Наполнение сайта</li>
                        <li> Система аналитики</li>
                        <li>Настройка почты</li>
                        <li>Онлайн чат</li>
                        <li>Хостинг и домен в подарок</li>
                        <li>Гарантийная поддержка в течение года</li>
                        <li> Обучение – 1 час</li>
                        <li>Срок от 10 дней</li>
                    </ul>
                    <div class=" justify-center flex">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <img class="-my-16 m-auto shadow-lg  rounded-full border-gray-300 border"
                     src="{{asset('images/open_engine/context_advertisement/images/4icons/2.svg')}}"
                     alt="">
                <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-0"></div>
                <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5">
                    <div class="text-center">
                        <h1 style="font-size: 21px" class="font-bold text-gray-700 mb-1 mt-5">Корпоративный сайт</h1>
                        <h1 style="font-size: 25px" class="border-b pb-5 text-gray-600">от <span
                                class="font-bold text-gray-700">14 000 000</span> uzs</h1>
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
                    <div class=" justify-center flex">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>


            <div>
                <img class="-my-16 m-auto shadow-lg  rounded-full border-gray-300 border"
                     src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}"
                     alt="">
                <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-0"></div>
                <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 m-5 ">
                    <div class="text-center">
                        <h1 style="font-size: 21px" class="font-bold text-gray-700 mb-1 mt-5">Интернет-магазин</h1>
                        <h1 style="font-size: 25px" class="border-b pb-5 text-gray-600">от <span
                                class="font-bold text-gray-700">35 000 000</span> uzs</h1>
                    </div>
                    <ul class="list-disc text-gray-600 text-base mt-3">
                        <li>Система управления сайтом 1С битрикс</li>
                        <li>Лицензия бизнес редакция</li>
                        <li>Готовое решение с маркетплейс</li>
                        <li> Личный кабинет</li>
                        <li>Онлайн чат</li>
                        <li>Система оплаты Click,Payme, Visa, Mastercard</li>
                        <li>Домен в ПОДАРОК</li>
                        <li>Телеграм бот в ПОДАРОК</li>
                        <li>Система лоялности ПОДАРОК</li>
                        <li>Гарантийная поддержка в течение года</li>
                        <li> Обучение – 3 часа</li>
                        <li>Срок от 20 дней</li>
                    </ul>
                    <div class=" justify-center flex">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-xl mx-auto my-10 mb-40 relative" data-aos="fade-left">
            <img class="-my-16 m-auto shadow-lg rounded-full border-gray-300 border" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}"
                 alt="">
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-blue-700 -mb-16 z-10"></div>
            <!--    -->
            <div class="shadow-lg rounded-2xl z-20 px-10 pt-10 pb-5 m-5 z-20">
                <div class=" text-center">
                    <h1 style="font-size: 21px" class="font-bold text-gray-700 mb-1 mt-5">ИНДИВИДУАЛЬНЫЙ</h1>
                    <h1 style="font-size: 21px" class=" text-gray-700 mb-1 mt-5 text-4xl">По договору</h1>
                </div>
                <div class=" justify-center flex">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        Заказать
                    </a>
                </div>
            </div>
        </div>

        <div style="z-index: 100" class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative">
            <div class="flex justify-center items-center my-20 pt-10">
                <h1 class="text-4xl font-bold text-white z-10">Разработка сайтов в Ташкенте</h1>
                <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0 opacity-10">
                    7</p>
            </div>
        </div>

        <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

        </div>


        <div class="bg-gray-200 z-0" data-aos="fade-up">
            <div style="margin-left: 20%; margin-right: 20%; font-size: 17px" class="pt-20 text-gray-700 pb-20">

                <div class="z-0">
                    <p>
                        Хотите <b>заказать веб сайт</b> или <b>купить сайт в Ташкенте</b>? Звоните нам! Наша <b>веб
                        студия</b>
                        применяет собственный подход к созданию сайтов, <b>разработке интернет магазинов</b>. У нас
                        работают
                        опытные <b>разработчики сайтов и программисты в Узбекистане</b>. Мы уделяем достаточно времени
                        каждому
                        проекту и&nbsp;не&nbsp;работаем на&nbsp;потоке. Всегда готовы предложить оригинальные решения по&nbsp;целому
                        комплексу услуг <b>разработки сайта в Узбекистане</b> и&nbsp;дизайна сайтов. Делаем всё,&nbsp;чтобы
                        ваш
                        сайт красиво и&nbsp;эффективно выполнял задачи компании. Также обеспечиваем <b>техническую
                        поддержку
                        сайтов в Узбекистане.</b>
                    </p>
                </div>


            </div>
            <div class="flex justify-end pb-20">
                <div class="flex">
                    <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                        <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">Другие <br> услуги</h1>
                        <p data-aos="fade-down" style="font-size: 10rem"
                           class="item-center font-bold absolute left-48 text-gray-300 z-0">
                            8</p>
                    </div>

                    <div style="height: 10rem;" class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5  z-20 mt-32"
                         data-aos="fade-up-left">
                        <div class="flex justify-center items-center pl-20 pt-5">

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/context_advertisement/images/4/web-site_dark.svg')}}" alt="">
                                <p class="text-center">Разработка <br> сайтов</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/context_advertisement/images/4/loupe_dark.svg')}}" alt="">
                                <p class="text-center">SEO <br> продвижение</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/context_advertisement/images/4/loupe_dark.svg')}}" alt="">
                                <p class="text-center">Контекстная <br> реклама</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/context_advertisement/images/4/digital-marketing_dark.svg')}}" alt="">
                                <p class="text-center"> СММ <br> продвижение</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/context_advertisement/images/4/creative_dark.svg')}}" alt="">
                                <p class="text-center">Разработка <br>брендбуков</p>
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
