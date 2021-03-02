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
                Контекстная <br> реклама <br> Яндекс и Google <br> в Ташкенте
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
          </div>

          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/context_advertisement/images/1.svg')}}" alt="" />
          </div>
        </div>
      </div>




    <div class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16">
        <div  class="pt-8 text-center" data-aos="fade-left">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/1.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Оптимизация</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-left">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/2.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Аудит и Аналитика</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-up">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/3.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Трафик</p>
        </div>
        <div  class="pt-8  text-center" data-aos="fade-right">
            <img src="{{asset('images/open_engine/seo_promotion/images/2/4.svg')}}" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Стратегия</p>
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
                    SEO продвижение
                </a>
           </div>
            <div class="m-4  text-center">

                <a href=""
                   class="text-center max-w-xs block py-4 bg-blue-700 rounded-full text-white px-4 transition duration-300 ease-in-out hover:bg-blue-900">
                    Контекстная реклама
                </a>
            </div>
        </div>
</div>







    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-down" class="font-bold sm:text-4xl text-3xl font-bold text-blue-700 z-10 text-center leading-10">Что такое <br>
            контекстная реклама</h1>
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
</div>


    <div class="flex justify-center items-center mb-10 my-20 relative">
        <h1 data-aos="fade-down" class="sm:txet-4xl font-bold text-3xl font-bold text-blue-700 z-10">Этапы разработки сайта</h1>
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
                    <p class="mt-52 ml-8 text-white text-lg font-bold">Поисковая реклама</p>
                    <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">01</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/7.png')}}" alt="" class="absolute">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Позиции в поисковой выдачи под каждый отдельный запрос. Мониторинг трафика и целевых действий по
                рекламе: клики, переходы, время на сайте и т.д.
            </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">

            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Показ рекламы заинтересованным лицам, которые уже заходили на ваш сайт или кликали по рекламе.
            </div>
            <div class="m-auto w-full order-first md:order-none  flex justify-center" data-aos="flip-right">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-14 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">Ремаркетиг\Ретаргетинг</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">02</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/8.png')}}" alt="" class="absolute">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto w-full flex justify-center" data-aos="flip-left">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-24 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">Рекламма в почте Gmail</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">03</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/9.png')}}" alt="" class="absolute">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Реклама в почтовом сервисе Gmail
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Реклама на платформе Youtube
            </div>
            <div class="m-auto order-first md:order-none w-full flex justify-center" data-aos="flip-right">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-28 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">Видео реклама</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">04</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/10.png')}}" alt="" class="absolute">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto w-full flex justify-center" data-aos="flip-left">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-28 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">Реклама мобильных приложений</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">05</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/11.png')}}" alt="" class="absolute">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Реклама в партнерских известных мобильных приложениях.
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Рекламные объявления в партнерских сайтах Google и Яндекс
            </div>
            <div class="m-auto order-first md:order-none w-full flex justify-center" data-aos="flip-right">
                <div class="lg:w-8/12 w-full h-64 bg-blue-600 relative mt-28 rounded-3xl">
                     <p class="mt-52 ml-8 text-white text-lg font-bold">Реклама в партнерских сайтах</p>
                     <p class="-mt-7 float-right mr-7 text-white text-lg font-bold">06</p>
                </div>
                <img src="{{asset('images/open_engine/seo_promotion/images/2/12.png')}}" alt="" class="absolute">
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mb-10 my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 leading-9">Преимущество <br>
            интернет - рекламы
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
                        <h1 class="text-gray-700 font-bold text-lg">Точно</h1>
                    </div>
                </div>
                <div class="flex bg-white  rounded-lg shadow-2xl m-1 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/2.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Качественно</h1>
                    </div>
                </div>
                <div class="flex bg-white  rounded-lg shadow-2xl m-1 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/3.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Быстро</h1>
                    </div>
                </div>

                <div class="flex bg-white  rounded-lg shadow-2xl m-1 md:flex-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/4.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Эффективно</h1>
                    </div>
                </div>

            </div>


            <div class="grid justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/5.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Безопасно</h1>
                    </div>
                </div>
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/6.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Практично</h1>
                    </div>
                </div>
                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/7.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Удобно</h1>
                    </div>
                </div>

                <div class="flex  bg-white rounded-lg shadow-2xl m-1 p-5" data-aos="flip-left">
                    <div class="py-5">
                        <img src="{{asset('images/open_engine/context_advertisement/images/3/8.svg')}}" alt="">
                    </div>
                    <div class="py-5 pl-5">
                        <h1 class="text-gray-700 font-bold text-lg">Экономно</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-gray-400 h-12 mt-56">

        </div>
        @include('front.Components.platformForm')

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Этапы работы</h1>
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
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">Аудит сайта</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>Проверяем <br> работоспособность</li>
                                <li>Проверяем конверсию</li>
                                <li>Исправляем ошибки</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 p-3 bg-white  border-l-8 rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">Семантика</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>Создаём базу запросов с <br> максимально конверсией</li>
                                <li>Создаём костяк для <br> раскрутки сайта</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="flex border-blue-700 p-3 bg-white border-l-8  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">Внутренняя</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>Улучшаем скорость загрузки</li>
                                <li>Оптимизируем контент <br> сайта</li>
                                <li>Оптимизируем код сайта</li>
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
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">Внешняя</h1>
                            <ul class="list-disc text-gray-600 text-sm">
                                <li>Наращиваем ссылочную <br> массу на сайт</li>
                                <li>Проверяем и оставляем <br> только полезные ссылки</li>
                                <li>Увеличиваем рейтинг ТИЦ <br> и PR в поисковиках</li>
                            </ul>
                        </div>
                    </div>
                    <div
                         class="md:max-w-xs flex border-blue-700 border-l-8 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">Продвижение</h1>
                            <ul class="list-disc text-gray-600 text-sm">
                                <li>Ежемесячный контроль <br> рейтинга сайта</li>
                                <li>Проверка позиций</li>
                                <li>Доработка сайта для <br> лучшего продвижения</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>







        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
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
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> Keng Makon - Фарбирика мебели </p>

                            <p class="text-blue-700 mt-3.5"><b>Рынок:</b></p>
                            <p class="text-gray-500">Узбекистан</p>

                            <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                            <p class="text-gray-500">Производство мебели</p>

                            <p class="text-blue-700 mt-3.5"><b>Результат работы:</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 4900</b> <br> Посещаемость <br> в месяц</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>220</b> <br> Ключевых <br> слов в топе</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 631</b> <br> ROI</p>
                                </div>
                            </div>

                            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
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
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> Keng Makon - Фарбирика мебели </p>

                            <p class="text-blue-700 mt-3.5"><b>Рынок:</b></p>
                            <p class="text-gray-500">Узбекистан</p>

                            <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                            <p class="text-gray-500">Производство мебели</p>

                            <p class="text-blue-700 mt-3.5"><b>Результат работы:</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 4900</b> <br> Посещаемость <br> в месяц</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>220</b> <br> Ключевых <br> слов в топе</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 631</b> <br> ROI</p>
                                </div>
                            </div>

                            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Используем в работе</h1>
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
          заказать проект
        </a>
        <a
          href=""
          class="bg-blue-400 text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-300 ml-1"
        >
          заказать проект
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
                <p class="font-bold text-2xl text-center text-gray-600 mt-5">Maps</p>
            </div>

        </div>

        <div class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative h-48">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">Почему мы?</h1>
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
                    <h1 class="text-gray-700 text-md">Нет ни одного проваленного <br> проекта</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Колосальный <br> опыт в<br> продвижении</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Экспертное <br>понимание <br> алгоритмов</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Выводим сайты <br> из-под <br> фильтров</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Сотни <br> довольных <br> клиентов</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Команда <br> опытных <br> специалистов</h1>
                </div>
            </div>

        </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
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
                            от <span class=" text-gray-700"> <b>5 000 000</b></span> uzs <br>в <b>год</b></h1>
                    </div>
                    <ul class="list-disc text-gray-700 text-lg mt-3 pb-20">
                        <li><b>40 Ключевых слов</b></li>
                        <li>Аудит сайта</li>
                        <li>Внутренняя оптимизация</li>
                        <li>Внешняя оптимизация</li>
                        <li>Написание уникальных текстов</li>
                        <li>от 3 до 6 месяцев</li>
                    </ul>
                    <div class=" justify-center flex border-t border-gray-400">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                            Заказать
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
                            от <span class=" text-gray-700"> <b>5 000 000</b></span> uzs <br>в <b>месяц</b></h1>
                    </div>
                    <ul class="list-disc text-gray-700 text-lg mt-3 pb-20">
                        <li><b>от 10 Ключевых слов</b></li>
                        <li>Аудит сайта</li>
                        <li>Внутренняя оптимизация</li>
                        <li>Внешняя оптимизация</li>
                        <li>Написание уникальных текстов</li>
                        <li>от 3 до 6 месяцев</li>
                    </ul>
                    <div class=" justify-center flex border-t border-gray-400">
                        <a href=""
                           class="bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-xl mx-auto my-10 mb-40 relative" data-aos="fade-left">
            <img class="-my-16 m-auto shadow-lg border-gray-300 " src="https://oe.uz/local/templates/oe/media/images/icons/crown.png "
                 alt="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}">
            <div class="shadow-lg rounded-2xl mt-4 px-10 pt-10 pb-5 mx-8 bg-gray-800 -mb-16 z-10"></div>
            <!--    -->
            <div class="shadow-lg rounded-2xl z-20 px-10 pt-10 pb-5 m-5 z-20">
                <div class=" text-center">
                    <h1  class="font-bold text-gray-700 mb-1 mt-5 text-xl">Разработать индивидуальную стратегию?</h1>

                </div>
                <div class=" justify-center flex">
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                        Заказать
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative">
            <div class="flex justify-center items-center my-20 pt-10">
                <h1 class="text-4xl font-bold text-white z-10">Разработка сайтов в Ташкенте</h1>
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
                        Специалисты <b>рекламного агентства в Ташкенте </b>«Open Engine» предлагают комплекс услуг по <b>рекламе в поисковых системах.</b> <b>Реклама в </b><b>Google</b> и <b>Реклама в </b><b>Y</b><b>andex</b> являются платформой для комплексной рекламы вашей компании. Мы сделаем точную настройку целей, <b>медийной рекламы</b> и <b>контекстной рекламы</b> в <b>поисковых системах</b> для получения результата. Ваша реклама будет представлена тем пользователям, которые наиболее настроены на покупку. Оставьте заявку и мы позвоним вам и предоставим полную информацию.
                    </p>
                </div>


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
