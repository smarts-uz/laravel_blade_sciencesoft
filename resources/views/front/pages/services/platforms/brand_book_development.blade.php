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
                Разработка <br> логотипа и <br> Брендбуков
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
            <img src="{{asset('images/open_engine/book_development/1.svg')}}" alt="" />
          </div>
        </div>
      </div>



<div class="pt-8">
    <div class="grid container lg:grid-cols-5 md:grid-cols-5 sm:grid-cols-2 m-auto pt-16 items-center justify-center mb-10">
        <div data-aos="fade-left">
            <img src="{{asset('images/open_engine/book_development/1 (1).svg')}}" alt="" class="m-auto">
            <p class=" text-center px-5 font-bold text-md mt-5 text-gray-700">Креатив</p>
        </div>
        <div data-aos="fade-left">
            <img src="{{asset('images/open_engine/book_development/2.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">Логотип</p>
        </div>
        <div data-aos="fade-up">
            <img src="{{asset('images/open_engine/book_development/3.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">Индивидуальный</p>
        </div>
        <div data-aos="fade-right">
            <img src="{{asset('images/open_engine/book_development/4.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">Нейминг</p>
        </div>
        <div data-aos="fade-right">
            <img src="{{asset('images/open_engine/book_development/5.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">Брендбук</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 sm:m-20 my-40">
    <div>
        <div class="flex justify-center mx-6 mt-10">
            <div class="text-4xl sm:text-5xl  leading-10 ">
                <div class="flex">
                    <p class="font-bold text-gray-300 text-9xl mt-10" data-aos="fade-up">1</p>
                    <h1 class=" font-bold text-blue-600" data-aos="fade-right">Разработка <br>
                        фирменного стиля <br>
                        от <span class="text-blue-200">Open Engine</span> - это...
                    </h1>
                </div>

                <p class="text-gray-700 text-lg leading-6 mt-10 ml-24 ">
                    Дизайн Вашего бренда, который делает её уникальной и востребованной на рынке.
                    От логотипа до визитки,
                    фирменный стиль – это лицо Вашей компании.
                </p>
            </div>
        </div>
    </div>
    <div class="text-gray-500 flex justify-center pt-8">
        <div class="grid justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 ">
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/6.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">Анализ рынка, конкурентов и целевой аудитории</p>
                </div>
                <div class="mb-10 border-1 mt-6 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/7.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">Определение ясных и четких маркетинговых целей айдентики</p>
                </div>
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 pt-15 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/8.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">Большая br творческая группа, задействованная в проекте</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 ">
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/9.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">Полное погружение в работу</p>
                </div>
                <div class="mb-10 border-1 bg-white mt-6 rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/10.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">Адекватные сроки и доступные цены</p>
                </div>
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/11.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">Высокое качесто готового продукта</p>
                </div>
            </div>

        </div>

    </div>
</div>


<div class="flex justify-center items-center mt-20 mb-20 relative">
    <h1 data-aos="fade-right" class="text-4xl font-bold text-blue-700 z-10 text-center leading-8">Что входит в
        разработку <br>
        фирменного стиля</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                2
              </p>
          </div>
</div>

<div class="flex flex-wrap">

    <div class="splide w-5/6" id="splide" ;>
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide grid grid-cols-4">
       <div class="flex justify-center text-center">
                               <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                                   <img class="ml-6" src="{{asset('images/open_engine/book_development/12.svg')}}" alt="">
                                   <p class="py-5">
                                       <b class="my-10">Гайдлайн</b>
                                   </p>
                                   <p>-Правила использования</p>
                                   <p>-Описание фирменных цветов</p>
                                   <p>-Описание фирменных шрифтов и др</p>

                                   <div>
                                       <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                   </div>
                               </div>
                           </div>

<div class="flex justify-center text-center">
                        <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                            <img class="ml-6" src="{{asset('images/open_engine/book_development/13.svg')}}" alt="">
                            <p class="py-5">
                                <b class="my-10">Нейминг</b>
                            </p>
                            <p> Уникальное название <br>
                                Креативный слоган <br>
                                Легкая запоминаемость <br></p>
                            <div>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

<div class="flex justify-center text-center">
                        <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                            <img class="ml-6" src="{{asset('images/open_engine/book_development/14.svg')}}" alt="">
                            <p class="py-5">
                                <b class="my-10">  Корпоративный дизайн</b>
                            </p>


                            <p>     Комерческое предложение </p>
                            <p> Рекламная продукция </p>
                            <p>  Календари</p>
                            <div>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-center text-center">
                        <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                            <img class="ml-6" src="{{asset('images/open_engine/book_development/15.svg')}}" alt="">
                            <p class="py-5">
                                <b class="my-10">Фирменные элементы</b>
                            </p>
                            <p>Визитки</p>
                            <p>Конверты</p>
                            <p>Папки и другое</p>
                            <div>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>




                </li>
            </ul>
        </div>
    </div>

</div>

<div class="mt-40">

    <div class="bg-gray-200 h-12"></div>

          <div class="px-8 mt-24">
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

</div>
<div class="flex justify-center items-center my-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
    <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
</div>


<div class="flex container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 relative">

        <div style="border-radius: 0 0 200px 0" class="bg-blue-700 py-10 m-10 " data-aos="fade-right">
            <div class="flex justify-center items-center ">
                <h1 class="text-5xl font-bold text-white z-10">Почему <br>
                    Мы...?</h1>
            </div>
            <p class="text-white text-md p-10 text-center">Именно SCRUM и наши отлаженные <br> процессы позволяют
                гарантировать <br> правильный результат</p>
        </div>

        <div class="grid grid-cols-1 justify-center">
            <div class="grid justify-center">
                <div class="grid  grid-cols-1 md:grid-cols-2 gap-5">
                    <div class=" p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/35.svg')}}"
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">Опыт</p>
                        <p class="text-gray-600 text-lg">
                            Получили бесценный опыт и доверие клиентов</p>
                    </div>

                    <div class="p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/36.svg')}}"
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">Скорость
                        </p>
                        <p class="text-gray-600 text-lg"> Экономим на времени, но не экономим на качестве</p>
                    </div>
                </div>
            </div>

            <div class="grid  justify-center">
                <div class="grid  grid-cols-1 md:grid-cols-2 gap-5">
                    <div class=" p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/37.svg')}}"
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">
                            Результат
                        </p>
                        <p class="text-gray-600 text-lg"> Наша цель - сделать Ваш бизнес эффективне</p>
                    </div>

                    <div class=" p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/38.svg')}}"
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">
                            Индивидуальный подход
                        </p>
                        <p class="text-gray-600 text-lg"> Найдем наилучшее решение для каждой задачи и каждого
                            человека</p>
                    </div>
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
        <p data-aos="fade-up"  class=" text-9xl font-bold  text-gray-300 ">
           4
        </p>
    </div>
</div>

<div class="flex container m-auto justify-between  p-20" data-aos="fade-right">

    <div class="flex-1 transform hover:scale-110 duration-200">
        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-2xl text-white text-center"><b>Лого</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1  class="text-xl border-b py-5 text-gray-600">
                    от <b>4 600 000</b> uzs
                </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li> Индивидуальный логотип</li>
                <li>2 варианта</li>
                <li>Цветовые и шрифтовые <br> решения</li>
                <li>Руководство по работе с логотипом</li>
                <li class="mb-10">15 дней</li>
            </ul>
            <div class=" justify-center flex">
                <a href=""
                   class=" bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Заказать
                </a>
            </div>
        </div>
    </div>


    <div class="flex-1 transform hover:scale-110 duration-200">

        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-2xl text-white text-center"><b>Лого+</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 class="text-2xl border-b py-5 text-gray-600">
                    от <b> 6 600 000</b> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>Дизайн визитки</li>
                <li>Индивидуальный логотип</li>
                <li> 3 варианта</li>
                <li>Цветовые и шрифтовые решения</li>
                <li> Руководство по работе с логотипом</li>
                <li class="mb-10"> 25 дней</li>

            </ul>
            <div class=" justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Заказать
                </a>
            </div>
        </div>
    </div>


    <div class="flex-1 transform hover:scale-110 duration-200 ">

        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0 ">
            <p class="text-2xl text-white text-center"><b>Комплект</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1  class="text-2xl border-b py-5 text-gray-600">
                    от <b>9 900 000</b> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>Нейминг в подарок</li>
                <li>Дизайн визитки</li>
                <li>Индивидуальный логотип</li>
                <li>4 варианта</li>
                <li>Цветовые и шрифтовые решения</li>
                <li>Руководство по работе с <br> логотипом</li>
                <li class="mb-4">от 30 дней</li>
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
<div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
     data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">Создание логотипа</h1>
        <p  class="text-9xl item-center font-bold absolute left-48 text-gray-300 z-0 opacity-50">5</p>
    </div>
</div>
<div class="bg-gray-100 h-12 z-10" data-aos="fade-up-right"></div>
<div class="bg-gray-50 z-0" data-aos="fade-up-right">
    <div class="text-xl pt-20 text-gray-700 pb-20">
        <div style="margin-left: 20%; margin-right: 20%;" class="z-0 text-gray-600 text-lg">
            <p>
                Сейчас <b>разработка логотипа в Узбекистане</b> является неотъемлемой частью шагов по созданию бренда. <b>Заказать
                логотип в Ташкенте и айдентику</b> для своего бренда вы можете <b>в брендинговом агентстве в Tашкенте.</b> Наши
                дизайнеры с многолетним опытом работы, которые занимаются <b>разработкой логотипов в</b> Ташкенте, изучат ваш
                бренд и предложат неповторимые идеи для <b>разработки логотипа.</b> Также вы можете <b>заказать брендбук</b> для
                вашего бизнеса.
                <br><br>
                Дизайн студия в Ташкенте «Open Engine» уже много лет занимается разработкой логотипа в Узбекистане.
                Разработка фирменного стиля и логотипов в Ташкенте, брендинг и создание айдентики наш конек. Наши
                дизайнеры сделают детальный анализ в основе ярких идей. Начиная работу над проектом, мы анализируем ваш
                бизнес, целевую аудитории и состояние рынка. Так мы устанавливаем прочную связь между компанией и его
                клиентами. Брендинговая агенство в ташкенте, разработка бренда в ташкенте. дизайн упаковки ташкент.
            </p>
        </div>
        <div class="flex justify-end">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10 opacity-50">Другие <br> услуги
                    </h1>
                    <p data-aos="fade-down"
                       class="item-center text-9xl font-bold absolute left-48 text-gray-300 z-0">
                        7</p>
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
                                        <p data-aos="fade-up"   class="text-9xl  font-bold  text-gray-300 ">
                                           6
                                        </p>
                                    </div>
                                </div>
                                <div  class="h-40 bg-blue-700 max-w-5xl rounded-l-2xl pt-5 z-20 mt-32"
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
