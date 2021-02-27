@extends('front.layout_platform')

@section('css')

@endsection

@section('main')



<main  class="overflow-hidden">
    <div class="bg-black h-auto px-4 pt-32 pb-64">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl lg:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide">
                Seo <br> продвижение <br> сайта в <br>  Ташкенте
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
            <img src="{{asset('images/open_engine/seo_promotion/images/2/seo.svg')}}" alt="" />
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


    <div class="flex justify-center text-center items-center my-20 relative">
        <h1 data-aos="fade-right" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Услуги по сео продвижению</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                1
              </p>
          </div>
    </div>



        <div class="container mx-auto flex flex-col">
            <div class="grid grid-cols-1 md:grid-cols-3 justify-center gap-3">
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Аудит сайта</h1>
                    </div>
                </div>
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Маркетинговый <br> анализ</h1>
                    </div>
                </div>
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Стратегия <br> продвижения</h1>
                    </div>
                </div>

                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Разрабатываем <br> семантику</h1>
                    </div>
                </div>





                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/5.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Внутренняя SEO <br> оптимизация</h1>
                    </div>
                </div>
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/6.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Оптимизация контента сайта</h1>
                    </div>
                </div>
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/7.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Ежемесячный анализ</h1>
                    </div>
                </div>

                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/8.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Внешняя оптимизация</h1>
                    </div>
                </div>
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="">
                    </div>
                    <div class="">
                        <h1 class="text-gray-700 font-bold text-base">Разрабатываем <br> семантику</h1>
                    </div>
                </div>
             </div>
        </div>


        <div class="flex justify-center items-center mb-20 my-20 relative text-center">
            <h1 data-aos="fade-down" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Этапы продвижения сайта</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                2
              </p>
          </div>
        </div>


        <div class="mb-56">
            <div class="container mx-auto flex flex-col ">
                <div class="flex justify-center flex-col md:flex-row">
                    <div
                         class="flex border-blue-700 border-l-8 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                         class="flex border-blue-700 p-3 bg-white border-l-8 rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                         class="flex border-blue-700 p-3 bg-white border-l-8 rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                         class="md:max-w-xs flex border-blue-700 border-l-8 bg-white rounded-md shadow-lg m-5 md:flex-1 p-5"
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
                         class="md:max-w-xs flex rounded-l-lg border-l-8 border-blue-700 bg-white  rounded-md shadow-lg m-5 md:flex-1 p-5"
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


        <div class="bg-gray-400 h-12 ">

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
            <h1 data-aos="fade-up text-center" class="sm:text-4xl text-3xl font-bold text-blue-700 z-10">Кейсы</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl  font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
        </div>

        <div class="swiper-container-one">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div class="p-10">
                            <img src="{{asset('images/open_engine/seo_promotion/images/2/13.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> Кенг Макон фабрика мебели</p>

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
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 631%</b> <br> ROI</p>
                                </div>
                            </div>

                            <a href="" class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div class="p-10">
                            <img src="{{asset('images/open_engine/seo_promotion/images/2/14.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> Otdelka Trade</p>

                            <p class="text-blue-700 mt-3.5"><b>Рынок:</b></p>
                            <p class="text-gray-500">Москва</p>

                            <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                            <p class="text-gray-500">Продажа напольных покрытии</p>

                            <p class="text-blue-700 mt-3.5"><b>Результат работы:</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 24 500</b> <br> Посещаемость <br> в месяц</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>840</b> <br> Ключевых <br> слов в топе</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 8600</b> <br> Заявок и <br> звонков</p>
                                </div>
                            </div>

                            <a href="" class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div class="p-10">
                            <img src="{{asset('images/open_engine/seo_promotion/images/2/15.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> 2ftg.uz</p>

                            <p class="text-blue-700 mt-3.5"><b>Рынок:</b></p>
                            <p class="text-gray-500">Узбекистан</p>

                            <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                            <p class="text-gray-500">Производство резин</p>

                            <p class="text-blue-700 mt-3.5"><b>Результат работы:</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 16 500</b> <br> Посещаемость <br> в год</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>70</b> <br> Ключевых <br> слов в топе</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 112</b> <br> Лидов в месяц</p>
                                </div>
                            </div>

                            <a href=""
                               class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div class="p-10">
                            <img src="{{asset('images/open_engine/seo_promotion/images/2/16.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> ChuzTrade</p>

                            <p class="text-blue-700 mt-3.5"><b>Рынок:</b></p>
                            <p class="text-gray-500">Узбекистан</p>

                            <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                            <p class="text-gray-500">Доставка из Китая</p>

                            <p class="text-blue-700 mt-3.5"><b>Результат работы:</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 32 500</b> <br> Посещаемость <br> в год</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>140</b> <br> Ключевых <br> слов в топе</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 180</b> <br> Лидов в месяц</p>
                                </div>
                            </div>

                            <a href=""
                               class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
                        <div class="p-10">
                            <img src="{{asset('images/open_engine/seo_promotion/images/2/17.png')}}" alt="">
                        </div>
                        <div class="text-2xl " data-aos="fade-up">
                            <p class="text-blue-700"><b>Клиент:</b></p>
                            <p class="text-gray-500"> Alibazar</p>

                            <p class="text-blue-700 mt-3.5"><b>Рынок:</b></p>
                            <p class="text-gray-500">Узбекистан</p>

                            <p class="text-blue-700 mt-3.5"><b>Направление:</b></p>
                            <p class="text-gray-500">Строительные материалы</p>

                            <p class="text-blue-700 mt-3.5"><b>Результат работы:</b></p>

                            <div class="flex flex-wrap w-4/5 my-6 border-b border-gray-300 pb-3">
                                <div class="lg:w-1/3 w-full">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 2 100</b> <br> Посещаемость <br> в месяц</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>830</b> <br> Ключевых <br> слов в топе</p>
                                </div>
                                <div class="lg:w-1/3 w-full lg:mt-0 mt-6">
                                    <p class="text-2xl text-gray-500 text-center"><b>+ 1090%</b> <br> ROI</p>
                                </div>
                            </div>

                            <a href=""
                               class=" text-lg bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                заказать
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-center items-center my-20 relative text-center">
            <h1 data-aos="fade-up" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Используем в работе</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
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


        <div class="flex justify-center items-center my-20 relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Результат</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl   font-bold  text-gray-300 "
              >
                5
              </p>
          </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 relative " data-aos="fade-right">
            <div>
                <div class="grid grid-cols-2">

                    <div class=" p-5">
                        <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/4/1.svg')}}" alt="">
                        <p class="text-lg text-center text-gray-600">Улучшится видимость сайта<br> в поисковой выдаче
                        </p>
                    </div>

                    <div class=" p-5">
                        <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/4/2.svg')}}" alt="">
                        <p class="text-lg text-center text-gray-600">Сайт выйдет в топ поиска<br> "Яндекса" и Google</p>
                    </div>

                    <div class=" p-5">
                        <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/4/3.svg')}}" alt="">
                        <p class="text-lg text-center text-gray-600">Увеличится количество<br>посетителей сайта</p>
                    </div>

                    <div class=" p-5">
                        <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/4/4.svg')}}" alt="">
                        <p class="text-lg text-center text-gray-600">Увеличится количество<br>заявок и звонков</p>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class=" p-5">
                        <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/4/5.svg')}}" alt="">
                        <p class="text-lg text-center text-gray-600">Увеличатся продажи <br> с сайта</p>
                    </div>

                    <div class=" p-5">
                        <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/4/6.svg')}}" alt="">
                        <p class="text-lg text-center text-gray-600">Снизятся расходы на <br> рекламные кампании</p>
                    </div>
                </div>
            </div>
            <div class="pt-5 grid justify-center items-center" data-aos="fade-right">
                <img src="{{asset('images/open_engine/seo_promotion/images/2/seo.svg')}}" alt="">
            </div>
        </div>

        <div class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative h-56">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">Почему мы?</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                class="  font-bold  text-gray-400 opacity-50 text-9xl"
              >
                6
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


        <div class="flex justify-center items-center my-20 relative mb-20">
            <h1 data-aos="fade-up" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="  font-bold  text-gray-300 text-9xl"
              >
                7
              </p>
          </div>
        </div>


        <div class="grid grid-cols-1 lg:grid-cols-3 container m-auto justify-center lg:p-20" data-aos="fade-right">

            <div class="flex-1 transform hover:scale-110 duration-200">
                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
                    <p class="text-3xl text-white text-center"><b>S</b></p>
                </div>
                <div class="shadow-2xl text-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <div class="text-center">
                            <h1 class="border-b border-gray-400 py-5 text-gray-600">
                                от <span class=" text-gray-700"> <b>9 900 000</b></span> uzs <br>в <b>год</b></h1></div>
                    </div>
                    <ul class="list-disc text-gray-700 text-lg mt-3 pb-20">
                        <li><b>10 Ключевых слов</b></li>
                        <li>Аудит сайта</li>
                        <li>Внутренняя оптимизация</li>
                        <li>Внешняя оптимизация</li>
                        <li>Написание уникальных текстов</li>
                        <li>от 3 до 6 месяцев</li>
                    </ul>
                    <div class=" justify-center flex border-t border-gray-400">
                        <a href=""
                           class=" bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>


            <div class="flex-1 transform hover:scale-110 duration-200">

                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
                    <p class="text-3xl text-white text-center"><b>M</b></p>
                </div>
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <h1 class="border-b text-2xl border-gray-400 py-5 text-gray-600">
                            от <span class=" text-gray-700"> <b>18 900 000</b></span> uzs <br>в <b>год</b></h1>
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

                <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0 ">
                    <p class="text-3xl text-white text-center"><b>VIP</b></p>
                </div>
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <h1 class="border-b text-2xl border-gray-400 py-5 text-gray-600">
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

        <div class="flex justify-center items-center my-20 relative mb-20">
            <h1 data-aos="fade-up" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Сертификаты</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                8
              </p>
          </div>

        </div>


        <div class="text-center pb-20">
            <div class="text-gray-600 mb-20 text-lg">
                <h1>Сертифицированное агентство "Яндекса" и Google</h1>
            </div>
            <div class="flex relative justify-center flex-col md:flex-row mx-20 ">
                <div class=" shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer1.jpeg')}}" alt="" class="mx-auto">
                </div>
                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer2 (1).png')}}" alt="" class="mx-auto">
                </div>
                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer2.png')}}" alt="" class="mx-auto">

                </div>

                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">

                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer4.png')}}" alt="" class="mx-auto">

                </div>

                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">

                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer5.png')}}" alt="" class="mx-auto">

                </div>

            </div>
        </div>


        <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative">
            <div class="flex justify-center items-center my-20 pt-10">
                <h1 class="text-4xl font-bold text-white z-10">SEO Продвижение</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                    class=" text-9xl font-bold  text-gray-400 opacity-50"
              >
                9
              </p>
          </div>
            </div>
        </div>

        <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

        </div>


        <div class="bg-gray-50 z-0" data-aos="fade-up">
            <div class="pt-20 md:mx-28 mx-9 text-2xl text-gray-700 pb-20">

                <div class="z-0">
                    <p>
                        <b>SEO продвижение сайта</b> – это первый шаг на пути вашего бизнеса к получению продаж в интернете.
                        Работа <b>SEO агенства</b> заключается в том, чтобы клиенты нашли ваш сайт и совершили на нем целевое
                        действие: звонок, заявку или покупку. Мы не только работаем над <b>SEO оптимизацией</b> , мы
                        настраиваем аналитику, пишем контент и внедряем доработки, также продвигаем сайты в ТОП-10.
                        Заказать SEO продв</b> своего сайта можете прямо здесь. Мы позвоним и проконсультируем вас.
                        <br>
                        <br>
                        Рекламное агентство «Open Engine» предлагает SEO продвижение и SEO оптимизацию в Узбекистане.
                        Перед тем как начать работу над проектом мы изучаем конкурентов клиента. Разрабатываем стратегию
                        и определяем успешные кейсы. Ведем мониторинг ссылок и сайтов конкурентов и ищем точки роста.
                        Все наши действия по раскрутке сайта направлены именно на тот результат, который Вы ждете!
                        Маркетинговая агентство в Ташкенте, продвижение в яндекс, продвижение в Google.


                    </p>
                </div>


            </div>


<div class="flex justify-end">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10 opacity-50">Другие <br> услуги
                    </h1>
                    <p data-aos="fade-down"
                       class="item-center font-bold absolute left-48 text-gray-300 z-0">
                        10</p>
                </div>
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
                                <div class="bg-blue-700 h-40 max-w-5xl rounded-l-2xl pt-5 z-20 mt-32"
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

