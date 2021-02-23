@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main class="overflow-hidden">


<div class="bg-black h-auto px-4 pt-32">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right">
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
              >
                1
              </p>
          </div>
    </div>
<div class="flex justify-center">

        <div class="grid grid-cols-1 md:grid-cols-2 justify-center gap-5">
            <div class="flex justify-center p-4">
                <img src="https://oe.uz/local/templates/oe/media/images/2.png" alt="">
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
              >
                2
              </p>
          </div>
    </div>


    <div class="md:py-20 pt-20 pb-64 flex flex-col justify-center">

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto flex justify-center">
                <img src="https://oe.uz/local/templates/oe/media/images/3.png" alt="">
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
            <div class="m-auto order-first md:order-none  flex justify-center">
                <img src="https://oe.uz/local/templates/oe/media/images/4.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto  flex justify-center">
                <img src="https://oe.uz/local/templates/oe/media/images/5.png" alt="">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Реклама в почтовом сервисе Gmail
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Реклама на платформе Youtube
            </div>
            <div class="m-auto order-first md:order-none  flex justify-center">
                <img src="https://oe.uz/local/templates/oe/media/images/6.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div class="m-auto  flex justify-center">
                <img src="https://oe.uz/local/templates/oe/media/images/7.png" alt="">
            </div>
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Реклама в партнерских известных мобильных приложениях.
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 container m-auto items-center p-10 z-10">
            <div data-aos="fade-right" class="md:max-w-md pt-4 m-auto relative z-10 text-xl">
                Рекламные объявления в партнерских сайтах Google и Яндекс
            </div>
            <div class="m-auto order-first md:order-none  flex justify-center">
                <img src="https://oe.uz/local/templates/oe/media/images/8.png" alt="">
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
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


        <div style="margin-top: 17rem" class="bg-gray-400 h-12 ">

        </div>
                <div class="px-8">
        <div
          data-aos="zoom-in"
          class="max-w-3xl mx-auto bg-white shadow-2xl rounded-3xl p-10 sm:p-20 -mt-56"
        >
          <h1
            class="text-center text-xl sm:text-3xl font-semibold leading-tight text-blue-700"
          >
            Заполните форму прямо сейчас и получите квалифицированную бесплатную
            консультацию.
          </h1>
          <h2 class="text-lg p-6 pl-13">Название организации</h2>
          <form>
            <label>
              <input
                type="text"
                placeholder="Пример: Open Engine"
                class="h-12 w-full border-b border-blue-700"
              />
            </label>
          </form>



          <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 mt-10">
              <a
                href=""
                class="bg-blue-700 rounded-full text-white px-12 my-2 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
              >
                Назад
              </a>

              <a
                href=""
                class="bg-blue-700 rounded-full text-white my-2 px-12 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
              >
                Далее
              </a>
            </div>
          </div>
        </div>
      </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Этапы работы</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
        </div>

        <div style="margin-bottom: 20rem;">
            <div class="container mx-auto flex flex-col ">
                <div class="flex justify-center flex-col md:flex-row">
                    <div style="border-left-width: 15px"
                         class="flex border-blue-700 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                    <div style="border-left-width: 15px"
                         class="flex border-blue-700 p-3 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
                         data-aos="flip-left">
                        <div class=" justify-center mx-auto ">
                            <h1 class="text-gray-700 font-bold text-2xl pb-5">Семантика</h1>
                            <ul class="list-disc text-gray-600 text-sm pb-10">
                                <li>Создаём базу запросов с <br> максимально конверсией</li>
                                <li>Создаём костяк для <br> раскрутки сайта</li>
                            </ul>
                        </div>
                    </div>
                    <div style="border-left-width: 15px"
                         class="flex border-blue-700 p-3 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                    <div style="border-left-width: 15px"
                         class="md:max-w-xs flex border-blue-700 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                    <div style="border-left-width: 15px"
                         class="md:max-w-xs flex border-blue-700 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
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
                            <img src="https://oe.uz/upload/iblock/de5/de54874315e37b35d94523d5a9ed7cbb.png" alt="">
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
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">

                        <div>
                            <img src="https://oe.uz/upload/iblock/de5/de54874315e37b35d94523d5a9ed7cbb.png" alt="">
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
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">

                        <div>
                            <img src="https://oe.uz/upload/iblock/de5/de54874315e37b35d94523d5a9ed7cbb.png" alt="">
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
                </div>

            </div>
        </div>

        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Используем в работе</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
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

        <div class="grid grid-cols-1 sm:grid-cols-4 gap-5 container m-auto justify-center text-center">
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

        <div style="z-index: 100; height: 14rem" class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">Почему мы?</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-600 "
              >
                7
              </p>
          </div>
            </div>
        </div>


        <div style="z-index: 100" class="flex relative justify-center flex-col md:flex-row mx-20 -mt-20">
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 opacity-50"
              >
                8
              </p>
          </div>
        </div>


        <div class="mb-32 grid grid-cols-1 lg:grid-cols-2 container m-auto justify-center lg:p-20" data-aos="fade-right">


            <div class="flex-1 transform hover:scale-110 duration-200">

                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-black -mb-16 z-0">
                    <p class="text-3xl text-white text-center"><b>
				Google ads			</b></p>
                </div>
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <h1 style="font-size: 25px" class="border-b border-gray-400 py-5 text-gray-600">
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

                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-black -mb-16 z-0 ">
                    <p class="text-3xl text-white text-center"><b>
				Yandex direct			</b></p>
                </div>
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <h1 style="font-size: 25px" class="border-b border-gray-400 py-5 text-gray-600">
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
            <img class="-my-16 m-auto shadow-lg rounded-full border-gray-300 border" src="{{asset('images/open_engine/context_advertisement/images/4icons/3.svg')}}"
                 alt="">
            <div class="shadow-lg rounded-2xl px-10 pt-10 pb-5 mx-8 bg-black -mb-16 z-10"></div>
            <!--    -->
            <div class="shadow-lg rounded-2xl z-20 px-10 pt-10 pb-5 m-5 z-20">
                <div class=" text-center">
                    <h1 style="font-size: 21px" class="font-bold text-gray-700 mb-1 mt-5">Разработать индивидуальную стратегию?</h1>
                    <h1 style="font-size: 21px" class=" text-gray-700 mb-1 mt-5 text-4xl"></h1>
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
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-600 "
              >
                7
              </p>
          </div>
            </div>
        </div>

        <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

        </div>


        <div class="bg-gray-50 z-0" data-aos="fade-up">
            <div style="margin-left: 20%; margin-right: 20%; font-size: 17px" class="pt-20 text-gray-700 pb-20">

                <div class="z-0">
                    <p>
                        Специалисты <b>рекламного агентства в Ташкенте </b>«Open Engine» предлагают комплекс услуг по <b>рекламе в поисковых системах.</b> <b>Реклама в </b><b>Google</b> и <b>Реклама в </b><b>Y</b><b>andex</b> являются платформой для комплексной рекламы вашей компании. Мы сделаем точную настройку целей, <b>медийной рекламы</b> и <b>контекстной рекламы</b> в <b>поисковых системах</b> для получения результата. Ваша реклама будет представлена тем пользователям, которые наиболее настроены на покупку. Оставьте заявку и мы позвоним вам и предоставим полную информацию.
                    </p>
                </div>


            </div>
            <div class="flex justify-end pb-20">
                <div class="flex">
                    <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                        <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">Другие <br> услуги</h1>
                        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-300 "
              >
                8
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
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                                    <p class="text-center">
                                                        Разработка <br/>
                                                        сайтов
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                                    <p class="text-center">
                                                        Разработка <br/>
                                                        сайтов
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                                    <p class="text-center">
                                                        Разработка <br/>
                                                        сайтов
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                                    <p class="text-center">
                                                        SEO <br/>
                                                        продвижение
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                                    <p class="text-center">
                                                        Контекстная <br/>
                                                        реклама
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/digital-marketing_dark.svg')}}"
                                                         alt=""/>
                                                    <p class="text-center">
                                                        СММ <br/>
                                                        продвижение
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                                    <p class="text-center">Разработка <br/>брендбуков</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                                    <p class="text-center">Разработка <br/>брендбуков</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                                    <p class="text-center">Разработка <br/>брендбуков</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                                    <img class="mx-auto p-3"
                                                         src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                                    <p class="text-center">Разработка <br/>брендбуков</p>
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
