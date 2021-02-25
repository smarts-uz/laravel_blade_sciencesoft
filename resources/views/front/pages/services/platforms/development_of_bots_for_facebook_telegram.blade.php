@extends('front.layout_platform')

@section('css')

@endsection

@section('main')

<main style="overflow-y: hidden; overflow-x: hidden">


<div class="bg-black h-auto px-4 pt-40">
        <div
          class="py-8 grid grid-cols-1 text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right">
            <div
              class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide lg:"
            >
              Разработка ботов <br> для телеграма <br> в Ташкенте
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
            <img src="https://oe.uz/local/templates/oe/media/images/bot/1.svg" alt="" />
          </div>
        </div>
      </div>



        <div
          class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16 pb-32"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/1.svg" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Креатив
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/2.svg" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Дизайн
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/3.svg" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Таргетинг
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Маркетинг
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/5.svg" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
             Лидогенерация
            </p>
          </div>
        </div>



    <div class=" flex justify-center">
        <div class="grid grid-cols-1 lg:grid-cols-3">

            <div class="flex justify-center">
                <div>
                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5  shadow-xl">
                        <div class="flex justify-center">
                            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">Экономия времени и <br> финансов</p>
                       </div>
                    </div>
                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5  shadow-xl">
                        <div class="flex justify-center">
                            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">Увеличение аудитории  <br> мессенджеров</p>
                       </div>
                    </div>
                </div>
            </div>

            <div class="bg-blue-600 py-10 container rounded-lg p-4">
                <div class="flex justify-center">
                    <div class="flex justify-center items-center my-5 relative pt-16">
                        <h1 data-aos="fade-up" class="text-3xl md:text-4xl font-bold text-white z-10 ">Что такое
                            чат-бот?</h1>
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
                </div>
                <p class="p-10 text-white text-center">
                    Телеграм-бот — виртуальный собеседник, который встраивается в мессенджеры и помогает бизнесу быть
                    ближе к клиентам. Это автоматизированная интеллектуальная система общения с пользователями.
                </p>

            </div>

            <div class="flex justify-center">
                <div>
                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5  shadow-xl">
                        <div class="flex justify-center">
                            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">Простой <br> юзабилити</p>
                       </div>
                    </div>

                    <div class="flex flex-col justify-center bg-white rounded-xl text-center border px-10 py-5  shadow-xl">
                        <div class="flex justify-center">
                            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        </div>
                       <div class="pt-4">
                            <p class="text-center font-bold text-gray-600">Вы автоматически<br>впереди конкурентов</p>
                       </div>
                    </div>
                </div>
            </div>

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
                2
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


    <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto my-20 mb-64">
        <div class="pt-8">
            <div class="flex justify-center">
                <div>
                    <div class="flex justify-center items-center my-10" data-aos="fade-right">
                        <h1 class="text-4xl font-bold text-blue-700 z-10 text-center leading-8">Этап создание телеграм <br>бота</h1>
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
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">1</span> Знакомство с бизнесом</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">2</span> Составление технического задания</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">3</span> Создание сценариев поведения</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">4</span> Подготовка платформы</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">5</span> Подключение мессенджеров</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">6</span> Тестирование</p>
                    <p class="p-2 text-gray-700 font-bold text-xl"><span class="bg-blue-400 rounded-2xl  px-2 text-white">7</span> Полная поддержка и аналитика</p>
                </div>
                </div>
        </div>
        <div class="flex items-center pt-8">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/step_image.svg" alt="">
        </div>
    </div>

    <div class="bg-gray-300 h-12 ">

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

    <div class="flex justify-center items-center mt-40 relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Почему мы?</h1>
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


    <div class=" flex justify-center container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 max-w-7xl">

            <div class="flex justify-center">
                <div>
                    <div class="px-10 py-5">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/1.svg" alt="">
                        <p class="text-2xl font-bold text-blue-700">Опыт</p>
                        <p class=" text-gray-700">Получили бесценный опыт и доверие клиентов</p>
                    </div>
                    <div class="px-10 py-5">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/1.svg" alt="">
                        <p class="text-2xl font-bold text-blue-700">Скорость</p>
                        <p class=" text-gray-700">Всегда выполняем всю работу вовремя</p>
                    </div>
                    <div class="px-10 py-5">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/1.svg" alt="">
                        <p class="text-2xl font-bold text-blue-700">  Кастомизация</p>
                        <p class=" text-gray-700">Бота можно изменить и дорабоать в любое время</p>
                    </div>
                </div>
            </div>

            <div >
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/image.svg" alt="">
            </div>

            <div class="flex justify-center">
                <div>
                    <div class="px-10 py-5">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/1.svg" alt="">
                        <p class="text-2xl font-bold text-blue-700">  Результат
                            </p>
                        <p class=" text-gray-700">Погружаемся в ваш бизнес и добиваемся максимального результата</p>
                    </div>

                    <div class="px-10 py-5">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/1.svg" alt="">
                        <p class="text-2xl font-bold text-blue-700">  Поддержка
                            </p>
                        <p class=" text-gray-700">Мы всегда поможем и проконсультируем клиента</p>
                    </div>



                    <div class="px-10 py-5">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-why/1.svg" alt="">
                        <p class="text-2xl font-bold text-blue-700">  100% профит
                            </p>
                        <p class=" text-gray-700">Абсолютно все проекты были приняты заказчиками</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div data-aos="zoom-in" class="max-w-6xl mx-auto bg-white shadow-lg rounded-3xl mt-20">
        <div class="flex justify-center items-center relative ">
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

        <div class="splide pb-20">
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

    </div>


    <div class="flex justify-center items-center relative py-20">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
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

    <div class="flex justify-center items-center py-20  hover:scale-110 duration-200">
        <div class="bg-white flex items-center  rounded-r-2xl">
            <div class="bg-black py-10 px-5 rounded-l-2xl">
                <img src="https://oe.uz/local/templates/oe/media/images/icons/bot.png" alt="">
            </div>
            <div class="text-3xl text-gray-700 font-bold px-10">
                <p>от 3 000 000 UZS</p>
            </div>
            <a href=""
               class=" bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>

    </div>



 <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">Разработка телеграм ботов</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"
                style="font-size: 8rem"
                class="  font-bold  text-gray-400 opacity-50"
              >
                7
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
                Хотите <b>заказать веб сайт</b> или <b>купить сайт в Ташкенте</b>? Звоните нам! Наша <b>веб студия</b>
                применяет собственный подход к созданию сайтов, <b>разработке интернет магазинов</b>. У нас работают
                опытные <b>разработчики сайтов и программисты в Узбекистане</b>. Мы уделяем достаточно времени каждому
                проекту и&nbsp;не&nbsp;работаем на&nbsp;потоке. Всегда готовы предложить оригинальные решения по&nbsp;целому
                комплексу услуг <b>разработки сайта в Узбекистане</b> и&nbsp;дизайна сайтов. Делаем всё,&nbsp;чтобы ваш
                сайт красиво и&nbsp;эффективно выполнял задачи компании. Также обеспечиваем <b>техническую поддержку
                сайтов в Узбекистане.</b>
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
