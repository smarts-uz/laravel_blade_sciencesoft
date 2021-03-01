@extends('front.layout_platform')

@section('css')

@endsection

@section('main')

<main class="overflow-hidden">

<div class="bg-black h-auto px-4 pt-20 pb-10">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
              >
              Разработка приложений на андроид и ios
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
            <img src="{{asset('images/open_engine/mobil_razbotka/1.svg')}}" alt="" />
          </div>
        </div>
      </div>


            <div
          class="grid sm:grid-cols-5 grid-cols-2 container m-auto justify-between pt-16 max-w-7xl"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/mobil_razbotka/2.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Google play
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/mobil_razbotka/3.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Android
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/mobil_razbotka/4.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Automatization
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/mobil_razbotka/5.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              IOS
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/mobil_razbotka/6.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Appstore
            </p>
          </div>
        </div>



    <div class="flex justify-center items-center my-20 relative ">
        <h1 class="md:text-4xl text-3xl font-bold text-white z-10 text-blue-600 text-center">4 причины заказать разработку <br>
            приложения в <span class="text-blue-300">Open Engine</span></h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl  font-bold  text-gray-300 "
              >
                1
              </p>
          </div>
    </div>


    <!--   -->
    <!---->
    <div class=" flex justify-center container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 max-w-7xl">

            <div class="flex justify-center">
                <div class="">
                    <div class="flex flex-col justify-center lg:justify-end px-10 py-5 " data-aos="fade-right">
                        <div class="lg:self-end self-center py-4">
                            <img class="" src="{{asset('images/open_engine/mobil_razbotka/7.svg')}}" alt="">
                        </div>
                        <div class="lg:self-end self-center lg:text-right text-center">
                            <p class=" font-bold text-xl text-gray-700">МАКСИМУМ УСТРОЙСТВ</p>
                            <p class="text-gray-500">Приложение будет одинаково и стабильно работать на различных
                                устройствах</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center lg:justify-end px-10 py-5 " data-aos="fade-right">
                        <div class="lg:self-end self-center py-4">
                            <img src="{{asset('images/open_engine/mobil_razbotka/8.svg')}}" alt="">
                        </div>
                        <div class="lg:self-end self-center lg:text-right text-center">
                            <p class="font-bold text-xl text-gray-700">ОФОРМЛЕНИЕ ЗАКАЗА</p>
                            <p class="text-gray-500">Мы максимально облегчаем этот процесс для пользователя</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center item-center" data-aos="flip-right">
                <img src="{{asset('images/open_engine/mobil_razbotka/11.svg')}}" alt="">
            </div>

            <div class="flex justify-center">
                <div>
                    <div class="flex flex-col justify-center lg:justify-start px-10 py-5 " data-aos="fade-left">
                        <div class="lg:self-start self-center py-4">
                            <img src="{{asset('images/open_engine/mobil_razbotka/9.svg')}}" alt="">
                        </div>
                        <div class="lg:self-start self-center lg:text-left text-center">
                            <p class=" font-bold text-xl text-gray-700">МАКСИМАЛЬНОЕ УДОБСТВО</p>
                            <p class="text-gray-500">Мы проектируем приложение с интуитивно понятным интерфейсом и
                                навигацией для пользователей

                            </p>
                        </div>
                    </div>

                    <div class=" flex flex-col justify-center lg:justify-start px-10 py-5 " data-aos="fade-left">
                        <div class="lg:self-start self-center py-4">
                            <img src="{{asset('images/open_engine/mobil_razbotka/10.svg')}}" alt="">
                        </div>
                       <div class="lg:self-start self-center lg:text-left text-center">
                            <p class=" font-bold text-xl text-gray-700">БЫСТРОДЕЙСТВИЕ</p>
                            <p class="text-gray-500">Загрузка приложений максимально ускорена за счет снижения веса картинок
                                и скриптов</p>
                       </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


<div class="h-56 bg-blue-700 max-w-5xl rounded-r-2xl z-10 relative">
            <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
                <h1 class="text-4xl font-bold text-white z-10">Отрасли</h1>
                <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl  font-bold  text-gray-400 "
              >
                2
              </p>
          </div>
            </div>
        </div>


        <div class="flex relative justify-center flex-col md:flex-row mx-20 z-20 -mt-20">
            <div class=" bg-white rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/1.svg')}}" alt="" class="mx-auto">
                </div>
                <div class=" py-1 text-center">
                    <h1 class="text-gray-700 text-md">Сложные проекты</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/2.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Новости</h1>
                </div>
            </div>
            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Интернет <br> магазин</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Такси</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/3.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Доставка</h1>
                </div>
            </div>

            <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
                <div>
                    <img src="{{asset('images/open_engine/seo_promotion/images/3/4.svg')}}" alt="" class="mx-auto">
                </div>
                <div class="py-1  text-center">
                    <h1 class="text-gray-700 text-md">Кафе\Ресторан</h1>
                </div>
            </div>

        </div>








<div class="mt-48">


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

</div>

    <div class="grid grid-cols-1 lg:grid-cols-4 container mx-auto gap-20 my-20 max-w-7xl px-4">
        <div class="flex justify-center items-center relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Этап работы</h1>
            <p data-aos="fade-down"
               class="item-center font-bold absolute text-9xl left-24 text-gray-300 z-0">
                3</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">1</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Постановка задачи</p>
            <p class="text-gray-600">Мы изучаем рынок и потенциальную целевую аудиторию, чтобы сделать проект
                эффективным и особенным.</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">2</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Прототипирование</p>
            <p class="text-gray-600">Создаем архитектуру нашего проекта – разрабатываем модель навигации, экраны и
                другие элементы.</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">3</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Дизайн и верстка</p>
            <p class="text-gray-600">На основе прототипа наши дизайнеры создают конечный визуальный облик проекта.
                Верстаем под нужные устройства.</p>
        </div>

        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">4</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Завершение разработки</p>
            <p class="text-gray-600">Допиливаем код приложения и подготавливаем его к дальнейшим этапам</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">5</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Тестирование</p>
            <p class="text-gray-600">Привлекаем потенциальных пользователей для приложения и проводим бета-тестирование
                функционала проекта.</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">6</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Запуск</p>
            <p class="text-gray-600">Публикуем готовое приложение. Оперативно собираем отзывы и выявляем малейшие
                недочеты.</p>
        </div>
        <div>
            <p class="pl-3 pt-1 text-white font-bold text-2xl bg-blue-400 rounded-full w-10 h-10">7</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Техническое поддержка</p>
            <p class="text-gray-600">Техническое поддержка</p>
        </div>


    </div>


    <div class="flex justify-center items-center relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
    </div>

    <div class="swiper-container-one">
        <div class="swiper-wrapper">

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>Клиент:</b></p>
            <p class="text-gray-500"> iMan Capital </p>

            <p class="text-blue-700 mt-3.5"><b>Направления:</b></p>
            <p class="text-gray-500"> P2P платформа  </p>

            <p class="text-blue-700 mt-3.5"><b>Платформа:</b></p>
            <p class="text-gray-500">Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/12.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>Клиент:</b></p>
            <p class="text-gray-500">  Kun.uz  </p>

            <p class="text-blue-700 mt-3.5"><b>Направления:</b></p>
            <p class="text-gray-500">  Новости и СМИ.  </p>

            <p class="text-blue-700 mt-3.5"><b>Платформа:</b></p>
            <p class="text-gray-500"> IOS, Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/13.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>Клиент:</b></p>
            <p class="text-gray-500">  Orzon.uz  </p>

            <p class="text-blue-700 mt-3.5"><b>Направления:</b></p>
            <p class="text-gray-500">  Интернет-магазин   </p>

            <p class="text-blue-700 mt-3.5"><b>Платформа:</b></p>
            <p class="text-gray-500"> IOS-Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/14.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>Клиент:</b></p>
            <p class="text-gray-500">  Xabardor  </p>

            <p class="text-blue-700 mt-3.5"><b>Направления:</b></p>
            <p class="text-gray-500">  Новости  </p>

            <p class="text-blue-700 mt-3.5"><b>Платформа:</b></p>
            <p class="text-gray-500"> IOS - Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/15.png')}}" alt="">
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20">
        <div class="text-2xl " data-aos="fade-up">
            <p class="text-blue-700"><b>Клиент:</b></p>
            <p class="text-gray-500">  Human.uz  </p>

            <p class="text-blue-700 mt-3.5"><b>Направления:</b></p>
            <p class="text-gray-500">  Новости и СМИ. </p>

            <p class="text-blue-700 mt-3.5"><b>Платформа:</b></p>
            <p class="text-gray-500"> IOS, Android</p>

            <div class="w-3/4 h-px bg-gray-300 my-6"></div>

            <a href="" class=" text-xl bg-blue-700 rounded-full text-white px-14 pt-3 pb-4 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>
        <div>
            <img src="{{asset('images/open_engine/mobil_razbotka/16.png')}}" alt="">
        </div>
    </div>
</div>

        </div>
    </div>





<div class="flex justify-center">
        <div
          class="grid grid-cols-1 md:grid-cols-2 sm:px-20 relative justify-center"
        >
          <div class="relative pt-20">
            <div
              style="border-radius: 200px 0 200px 0; left: -80px"
              class="bg-blue-500 py-20 lg:m-10 px-10 md:px-10 max-w-lg absolute hidden sm:block"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="text-3xl font-bold text-blue-500 z-10">Почему мы?</h1>
                <p

                  class=" text-9xl item-center font-bold absolute left-48 text-blue-500 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-blue-500 text-md p-10 pt-10 text-center">
                Потому что у нас Вы можете создать по-настоящему классный сайт,
                со всеми нужными Вам функциями
              </p>
            </div>
            <div
              style="border-radius: 0 0 200px 0; top: 80px"
              class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 max-w-lg relative"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="lg:text-3xl font-bold text-white z-10">
                  Почему мы?
                </h1>
                <p

                  class="item-center font-bold text-9xl absolute left-48 text-gray-400 z-0"
                >
                 5
                </p>
              </div>
              <p class="text-white text-base text-md p-5 pt-10 text-center">
                Потому что у нас Вы можете создать по-настоящему классный сайт,
                со всеми нужными Вам функциями
              </p>
            </div>
          </div>

          <div class="pt-20 md:mt-20">
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>
            </div>
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="{{asset('images/open_engine/smm_promotion/images/facebook_certificate.png')}}"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>









    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
          Почему мы...
        </h1>

        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
6
              </p>
          </div>
      </div>





    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 container mx-auto my-20 max-w-7xl">
        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/17.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Приложение <br>
                полностью ваше</p>
            <p class="text-gray-700">После окончания разработки <br> мы передаем все права на <br> приложение Вам.</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/18.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Работа
                по договору</p>
            <p class="text-gray-700">Работаем по составленному <br> договору. Юридическое лицо <br> (ООО и ИП).</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/19.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Прозрачный <br>
                процесс</p>
            <p class="text-gray-700">Даём Вам тестовый доступ к приложению на протяжении всей работы.</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/20.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Гарантия – 1 год</p>
            <p class="text-gray-700">Бесплатно обеспечиваем работоспособность всех функций, указанных в Т.З.</p>
        </div>


        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/21.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">100% выполнение и <br>
                сдача проектов</p>
            <p class="text-gray-700">Дорабатываем приложение до тех пор, пока оно не будет работать точно так, как
                указано в Т.З.</p>
        </div>

        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/22.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">От идеи до <br>
                публикации</p>
            <p class="text-gray-700">Выполняем полный цикл по созданию приложения. Публикуем в App Store и Google
                Play.</p>
        </div>


        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/23.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">От идеи до <br>
                публикации</p>
            <p class="text-gray-700">Тимлидер, разработчики iOS/Android, дизайнер, аналитик, тестировщик,
                маркетолог.</p>
        </div>


        <div class="text-center p-5">
            <img src="{{asset('images/open_engine/mobil_razbotka/24.png')}}" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">От идеи до <br>
                публикации</p>
            <p class="text-gray-700">Оказываем техподдержку после завершения проекта: добавляем новые функции и
                обновления</p>
        </div>
    </div>


    <div class="flex justify-center items-center my-10 pt-10 " data-aos="fade-right">
        <h1 class="text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                7
              </p>
          </div>
    </div>


    <div class=" max-w-3xl flex container m-auto justify-between md:px-20  py-20" data-aos="fade-right">

        <div class="flex-1 transform hover:scale-110 duration-200">
            <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
                <p class="text-3xl text-white text-center"><b>Разработка моб приложений</b></p>
            </div>
            <div class="shadow-2xl rounded-3xl px-10 py-10 m-5 ">

                <ul class=" text-gray-700 text-lg py-5">
                   <li class="text-center text-3xl">Цена:<b> 2 000 000 сум</b> </li>
                </ul>
                  <ul class=" text-gray-700 py-6 border-t border-gray-400">
                                   <li class="text-center text-xl">У нас нет стандартных тарифов для мобильного приложения</b> </li>
                                </ul>
                <div class=" justify-center flex">
                    <a href=""
                       class=" bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">Мобильное приложение</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-400 opacity-50"
              >
                8
              </p>
          </div>
        </div>
    </div>

    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

    </div>


    <div class="bg-gray-50 z-0" data-aos="fade-up">
        <div  class="pt-20 text-xl lg:mx-24 mx-16 text-gray-700 pb-20">

            <div class="z-0">
                <p>
                   <b> Разработка мобильных приложений в Узбекистане</b> набирает обороты. Разрабатываем <b>мобильные приложения
                    для бизнеса.</b> Изучаем Ваш бизнес и создаем техническое задание на основе потребностей бизнеса.
                    Создаем привлекательный и понятный интерфейс, основываясь на ваш фирменный стиль. <b>Заказать
                    приложение для IOS и Андроид</b> можете одним кликом на нашем сайте. У нас работают лучшие <b>IOS и Андроид
                    разработчики в Ташкенте.</b> Доверьте <b>создание мобильного приложения в Ташкенте</b> нам и получите
                    техническую поддержку приложения.
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
                        <p data-aos="fade-up"  class="text-9xl  font-bold  text-gray-300 ">
                          9
                        </p>
                    </div>
                </div>


                <div  class="bg-blue-700 h-44 max-w-5xl rounded-l-2xl pt-5 z-20 mt-32"
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

@endsection
