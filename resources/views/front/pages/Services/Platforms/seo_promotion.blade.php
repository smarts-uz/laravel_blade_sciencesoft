@extends('front.layout_platform')

@section('css')

@endsection

@section('main')



<main  style="overflow-y: hidden; overflow-x: hidden">
    <div class="bg-black h-auto px-4 pt-32">
        <div
          class="py-8 grid grid-cols-1 text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right">
            <div
              class="text-white text-4xl lg:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
            >
              Seo продвижение сайта в Ташкенте
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
            <img src="https://oe.uz/local/templates/oe/media/images/seo/showcase/seo.svg" alt="" />
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
              >
                1
              </p>
          </div>
    </div>



        <div class="container mx-auto flex flex-col">
            <div class="grid grid-cols-1 md:grid-cols-3 justify-center gap-3">
                <div class="py-4 grid grid-cols-2 justify-center  bg-white rounded-lg shadow-lg lg:p-3 p-2 items-center" data-aos="flip-left">
                    <div class="px-4  grid justify-end lg:justify-center">
                        <img src="{{asset('images/open_engine/seo_promotion/images/3/1.svg')}}" alt="">
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
              >
                2
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
                class="h-12 w-full border-b border-blue-700"
              />
            </label>
          </form>

          <div>
            <div class="dots dots-form mx-auto">
              <span class="active"><i class="fa fa-check"></i></span>
              <span><i class="fa fa-check"></i></span>
              <span><i class="fa fa-check"></i></span>
              <span><i class="fa fa-check"></i></span>
            </div>
          </div>

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
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
              >
                3
              </p>
          </div>
        </div>

        <div class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center  pt-20"
              >
                <div class="">
                  <img src="https://oe.uz/upload/iblock/de5/de54874315e37b35d94523d5a9ed7cbb.png" alt="" />
                </div>
                <div class="text-xl md:text-2xl p-5" data-aos="fade-up">
                  <p><b>Клиент:</b></p>
                  <p>Мебельная фабрика Keng Makon</p>

                  <p><b>Год создания:</b></p>
                  <p>2020</p>

                  <p><b>Тип сайта:</b></p>
                  <p>Разработка интернет-магазина.</p>

                  <p><b>Направление:</b></p>
                  <p>Мебель</p>

                  <p><b>Технология:</b></p>
                  <p class="border-b pb-5 mb-10">1C</p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    заказать
                  </a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center  pt-20"
              >
                <div class="">
                  <img src="https://oe.uz/upload/iblock/b1d/b1d80d5d88f16cadbf2862bd6cef52eb.png" alt="" />
                </div>
                <div class="text-xl md:text-2xl p-5" data-aos="fade-up">
                  <p><b>Клиент:</b></p>
                  <p>Мебельная фабрика Keng Makon</p>

                  <p><b>Год создания:</b></p>
                  <p>2020</p>

                  <p><b>Тип сайта:</b></p>
                  <p>Разработка интернет-магазина.</p>

                  <p><b>Направление:</b></p>
                  <p>Мебель</p>

                  <p><b>Технология:</b></p>
                  <p class="border-b pb-5 mb-10">1C</p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    заказать
                  </a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center  pt-20"
              >
                <div class="">
                  <img src="https://oe.uz/upload/iblock/ea5/ea57c7db360deff50584da720ef5ed4d.png" alt="" />
                </div>
                <div class="text-xl md:text-2xl p-5" data-aos="fade-up">
                  <p><b>Клиент:</b></p>
                  <p>Мебельная фабрика Keng Makon</p>

                  <p><b>Год создания:</b></p>
                  <p>2020</p>

                  <p><b>Тип сайта:</b></p>
                  <p>Разработка интернет-магазина.</p>

                  <p><b>Направление:</b></p>
                  <p>Мебель</p>

                  <p><b>Технология:</b></p>
                  <p class="border-b pb-5 mb-10">1C</p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    заказать
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>


        <div class="flex justify-center items-center my-20 relative text-center">
            <h1 data-aos="fade-up" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Используем в работе</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
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
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
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
                <img src="https://oe.uz/local/templates/oe/media/images/seo/showcase/seo.svg" alt="">
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
                6
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


        <div class="flex justify-center items-center my-20 relative mb-20">
            <h1 data-aos="fade-up" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
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
                <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
                    <div class="text-center">
                        <div class="text-center">
                            <h1 style="font-size: 25px" class="border-b border-gray-400 py-5 text-gray-600">
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
                        <h1 style="font-size: 25px" class="border-b border-gray-400 py-5 text-gray-600">
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

        <div class="flex justify-center items-center my-20 relative mb-20">
            <h1 data-aos="fade-up" class="text-3xl sm:text-4xl font-bold text-blue-700 z-10">Сертификаты</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
              >
                8
              </p>
          </div>

        </div>


        <div class="text-center pb-20">
            <div class="text-gray-600 mb-20 text-lg">
                <h1>Сертифицированное агентство "Яндекса" и Google</h1>
            </div>
            <div style="z-index: 100" class="flex relative justify-center flex-col md:flex-row mx-20 ">
                <div class=" shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer1.jpeg')}}" alt="" class="mx-auto">
                </div>
                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer2.jpeg')}}" alt="" class="mx-auto">
                </div>
                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer3.jpeg')}}" alt="" class="mx-auto">

                </div>

                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">

                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer4.jpeg')}}" alt="" class="mx-auto">

                </div>

                <div class="  shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">

                    <img src="{{asset('images/open_engine/seo_promotion/images/cer/cer5.jpeg')}}" alt="" class="mx-auto">

                </div>

            </div>
        </div>


        <div style="z-index: 100" class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative">
            <div class="flex justify-center items-center my-20 pt-10">
                <h1 class="text-4xl font-bold text-white z-10">SEO Продвижение</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-600 "
              >
                9
              </p>
          </div>
            </div>
        </div>

        <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

        </div>


        <div class="bg-gray-200 z-0" data-aos="fade-up">
            <div style="margin-left: 20%; margin-right: 20%; font-size: 17px" class="pt-20 text-gray-700 pb-20">

                <div class="z-0">
                    <p>
                        <b>SEO продвижение сайта</b> – это первый шаг на пути вашего бизнеса к получению продаж в интернете.
                        Работа <b>SEO агенства</b> заключается в том, чтобы клиенты нашли ваш сайт и совершили на нем целевое
                        действие: звонок, заявку или покупку. Мы не только работаем над <b>SEO оптимизацией</b> , мы
                        настраиваем аналитику, пишем контент и внедряем доработки, также продвигаем сайты в ТОП-10.
                        Заказать SEO продв/b> сво5го сайта можете прямо здесь. Мы позвоним и проконсультируем вас.
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
            <div class="flex justify-end pb-20">
                <div class="flex">
                    <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                        <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">Другие <br> услуги</h1>
                        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 "
              >
                10
              </p>
          </div>
                    </div>

                    <div style="height: 10rem;" class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5  z-20 mt-32"
                         data-aos="fade-up-left">
                        <div class="flex justify-center items-center pl-20 pt-5">

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/5/web-site_dark.svg')}}" alt="">
                                <p class="text-center">Разработка <br> сайтов</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/5/loupe_dark.svg')}}" alt="">
                                <p class="text-center">SEO <br> продвижение</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/5/loupe_dark.svg')}}" alt="">
                                <p class="text-center">Контекстная <br> реклама</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/5/digital-marketing_dark.svg')}}" alt="">
                                <p class="text-center"> СММ <br> продвижение</p>
                            </div>

                            <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3" src="{{asset('images/open_engine/seo_promotion/images/5/creative_dark.svg')}}" alt="">
                                <p class="text-center">Разработка <br>брендбуков</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</main>




@endsection


@section('js')

@endsection
