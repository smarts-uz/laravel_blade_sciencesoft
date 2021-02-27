@extends('front.layout_platform')

@section('css')

@endsection

@section('main')

<main class="overflow-hidden">

<div class="bg-black h-auto px-4 pt-32">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
              >
                Система автоматизации отдела продаж
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

          <div data-aos="fade-left" class="my-8 flex justify-center ">
            <img src="{{asset('images/open_engine/amo_crm/1.svg')}}" alt="" />
          </div>
        </div>
      </div>



<div>



 <div
          class="grid sm:grid-cols-5 grid-cols-2  m-auto justify-between pt-16 max-w-7xl"
        >
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/amo_crm/2.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              PR-article
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/amo_crm/3.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Banner
            </p>
          </div>
          <div class="pt-8" data-aos="fade-left">
            <img src="{{asset('images/open_engine/amo_crm/4.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Traffic
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/amo_crm/5.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              News
            </p>
          </div>
          <div class="pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/amo_crm/6.svg')}}" alt="" class="m-auto" />
            <p class="text-center font-bold text-md text-gray-700">
              Interview
            </p>
          </div>
        </div>




    <div class="grid grid-cols-1 lg:grid-cols-2 sm:m-20 my-40">
        <div>
            <div class="flex justify-center mx-6 mt-10">
                <div class="text-5xl  leading-10 ">
                    <div>
                        <div class="flex">
                            <p class="text-9xl font-bold text-gray-300 mt-10" data-aos="fade-up">1</p>
                            <h1 class=" font-bold text-blue-600" data-aos="fade-right">amoCRM - это...
                            </h1>
                        </div>

                        <div>
                            <p class="text-gray-700 text-lg leading-6 mt-10 ml-24 ">
                                Простая и понятная облачная система учета и систематизации потенциальных клиентов и
                                сделок,
                                ориентированная на малый и средний бизнес. <br> <br>
                                AmoCRM помогает продавать больше <br> <br>
                                Наши маркетинговая агенство поможет вам в разработке и внедрение СРМ систем в Ташкенте
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-gray-500 flex justify-center pt-8">
            <div class="grid justify-center">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 ">
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/amo_crm/7.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">Отдельная команда для каждого проекта</p>
                    </div>
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/amo_crm/8.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">Команда квалифицированных профессионалов</p>
                    </div>

                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 ">
                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/amo_crm/9.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">Бесплатная консультация по любым вопросам
                            связанных с вашим бизнесом</p>
                    </div>

                    <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                        <img src="{{asset('images/open_engine/amo_crm/10.svg')}}" alt=""
                             class="mx-auto">
                        <p class="text-center text-sm p-3 text-gray-600">Сертифицированные специалисты по amoCRM,
                            Bitrix24, Moysklad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mt-20 mb-10 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-600 text-center" data-aos="fade-left">Бизнес без CRM</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p data-aos="fade-up"  class="text-9xl  font-bold  text-gray-300 ">
                2
              </p>
          </div>
    </div>

    <div class="flex justify-center text-center">
        <div>
            <p class="text-2xl font-bold text-gray-700">Теряются заявки (лиды)</p>
            <p class="text-gray-700 text-xl">Самые распространенные проблемы компаний <br> у которых нет CRM</p>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 text-center container mx-auto">
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">Время отдела продаж уходит на рутину</p>
            <p class="text-gray-600 px-5">Менеджеры теряют 35% заявок в ходе первичной обработки.</p>
        </div>
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">Забытые коммерческие предложения</p>
            <p class="text-gray-600 px-5">Ручная обработка документов и контактов занимает 70% времени.</p>
        </div>
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">Забытые коммерческие предложения</p>
            <p class="text-gray-600 px-5">Половина отправленных КП остаётся без внимания.</p>
        </div>
        <div class="p-10" data-aos="fade-up">
            <p class="font-bold text-lg p-3 text-gray-700">Не распознаются провальные сделки</p>
            <p class="text-gray-600 px-5">Менеджеры ориентируются на интуицию вместо измеримых признаков.</p>
        </div>
    </div>

    <div class="flex justify-center items-center mt-20 mb-10 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-600 text-center" data-aos="fade-right">Возможности СРМ системы</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                3
              </p>
          </div>
    </div>
<div class="grid justify-center">

        <div class="max-w-7xl flex flex-col justify-center px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 justify-center container mx-auto m-20">
                <div class="flex justify-center" data-aos="flip-right pt-8">
                    <img src="{{asset('images/open_engine/amo_crm/11.png')}}" alt="">
                </div>
                <div data-aos="fade-left" class="pt-8">
                    <p class="text-blue-700 font-bold text-xl text-3xl">Ведение базы клиентов</p>
                    <ul class="list-disc text-blue-700 leading-9">
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Настраивайте воронку продаж самостоятельно под свои нужны.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Добавляйте, называйте, меняйте местами этапы своей воронки.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Настраивайте автоматический переход от этапа к этапу.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Помечайте разными цветами каждый этап.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Добавляйте примечания в карточке клиента, любую информацию в качестве заметки.</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 justify-center md:grid-cols-2 container mx-auto m-20 ">
                <div data-aos="fade-right" class="pt-8">
                    <p class="text-blue-700 font-bold text-xl text-3xl"> Задачи и напоминания</p>
                    <ul class="list-disc text-blue-700 leading-9">
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg"> AmoCRM помогает следить за тем, чтобы по каждой сделке было запланировано действие. Если задачи не
                поставлены — система сигнализирует об этом.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Вы можете создавать задачи для напоминания менеджерам о необходимости совершения того или иного действия со
                сделкой, компанией или контактом.</span>
                        </li>

                    </ul>
                </div>
                <div class="flex justify-center pt-8" data-aos="flip-left">
                    <img src="{{asset('images/open_engine/amo_crm/12.png')}}" alt="">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 justify-center container mx-auto m-20">
                <div class="flex justify-center pt-8" data-aos="flip-right">
                    <img src="{{asset('images/open_engine/amo_crm/13.png')}}" alt="">
                </div>
                <div data-aos="fade-left" class="pt-8">
                    <p class="text-blue-700 font-bold text-xl text-3xl">Аналитика</p>
                    <ul class="list-disc text-blue-700 leading-9">
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg"> Аналитика по воронке позволит увидеть на каких этапах вы теряете клиентов и предоставит достаточное
                    количество данных, чтобы принять верные управленческие решения.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg"> Аналитика по сотрудникам покажет успехи, проблемные зоны и загруженность по каждому сотруднику.</span>
                        </li>
                        <li class="ml-6 text-3xl"><span class="text-gray-700  text-lg">Аналитика по целям позволяет поставить KPI для сотрудников, отделов и компании в целом.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</div>

    <div>
        <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto max-w-7xl">
            <div class="flex justify-center items-center pt-8" data-aos="fade-right">
                <div>
                    <p class="text-blue-700 font-bold text-2xl pb-5">Создадим уникальную CRM</p>
                    <p class="text-gray-700 pr-5">amoCRM обладает уникальным и очень развитым интерфейсом разработчика,
                        что
                        позволяет не только настраивать
                        ее под своим потребности, но и создавать всевозможные интеграции с другими системами. Сотни
                        самых разных
                        готовых расширений уже доступны для кастомизации CRM под Ваши нужды</p>
                </div>
            </div>
            <div class="flex justify-center pt-8" data-aos="flip-left">
                <img src="{{asset('images/open_engine/amo_crm/14.png')}}"
                                                  alt="">
            </div>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto max-w-7xl">
            <div class="flex justify-center pt-8 order-last md:order-none" data-aos="flip-right">
                <img src="{{asset('images/open_engine/amo_crm/15.png')}}"
                                                  alt="">
            </div>
            <div class="flex justify-center items-center pt-8" data-aos="fade-left">
                <div>
                    <p class="text-blue-700 font-bold text-2xl pb-5">Мобильное приложение</p>
                    <p class="text-gray-700 pr-5">
                        С мобильными приложениями amoCRM, можно работать где и когда Вам удобно. Приложения работают
                        онлайн и позволяют просматривать актуальные данные без задержек, но самое главное теперь все
                        функции веб-версии доступны в Вашем телефоне</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 container mx-auto max-w-7xl">
            <div class="flex justify-center items-center pt-8" data-aos="fade-right">
                <div>
                    <p class="text-blue-700 font-bold text-2xl pb-5"> Время подарков</p>
                    <p class="text-gray-700 pr-5 mb-10"> Закажите amoCRM и мы подарим Вам сертификат на 500 000 сум.
                        Сертификат
                        можно использовать при заказе услуг нашей компании</p>
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                        Перейти в telegram <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="flex justify-center pt-8 order-first md:order-none" data-aos="flip-left">
                <img src="{{asset('images/open_engine/amo_crm/16.png')}}" alt="">
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-600 text-center">Выгоды amoCRM</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-300 "
              >
                4
              </p>
          </div>
    </div>

    <div class="container mx-auto flex flex-col">
        <div class="flex justify-center flex-col lg:flex-row">
            <div class="flex bg-white rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/17.svg')}}" alt="">
                </div>
                <div class=" pl-5 pt-10">
                    <h1 class="text-gray-700 font-bold text-lg">Аудит сайта</h1>
                </div>
            </div>
            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/18.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Автоматическая воронка</h1>
                </div>
            </div>
            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/19.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Фиксация заявок</h1>
                </div>
            </div>

            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/20.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Обучение не требуется</h1>
                </div>
            </div>

        </div>


        <div class="flex justify-center flex flex-col lg:flex-row">
            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/21.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Общайся и обсуждай</h1>
                </div>
            </div>
            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/22.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Мобильная AMO CRM</h1>
                </div>
            </div>
            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/23.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Звонок в один <br> клик</h1>
                </div>
            </div>

            <div class="flex p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5" data-aos="flip-left">
                <div class="flex items-center">
                    <img src="{{asset('images/open_engine/amo_crm/2.svg')}}" alt="">
                </div>
                <div class="py-5 pl-5">
                    <h1 class="text-gray-700 font-bold text-lg">Периодические продажи</h1>
                </div>
            </div>
        </div>
    </div>

<div class="mt-48">

        <div class="bg-gray-200 h-12"></div>

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

</div>
    <div class="flex justify-center items-center my-20 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-700 text-center leading-8">Этапы внедрения <br>
            CRM системы</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                5
              </p>
          </div>
    </div>


    <div class="container mx-auto grid justify-center ">
        <div class="flex justify-center flex-col lg:flex-row">
            <div class="  bg-white rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">01</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">ДЕМОНСТРАЦИЯ ВОЗМОЖНОСТЕЙ AMOCRM</h1>

            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">02</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">СБОР И ОПИСАНИЕ БИЗНЕС-ПРОЦЕССОВ</h1>

            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">03</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">БАЗОВОЕ ВНЕДРЕНИЕ AMOCRM</h1>

            </div>

            <div class=" p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">04</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">РЕАЛИЗАЦИЯ НЕОБХОДИМОГО
                    ФУНКЦИОНАЛА</h1>

            </div>

        </div>


        <div class="flex justify-center flex flex-col lg:flex-row">
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-sm py-3 rounded-full">05</p>

                <h1 class="text-gray-700 font-bold text-sm py-5 hover:text-white">ПЕРСОНАЛЬНАЯ АВТОМАТИЗАЦИЯ</h1>

            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">06</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">ОБУЧЕНИЕ РУКОВОДИТЕЛЯ И
                    ПЕРСОНАЛА</h1>
            </div>
            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">07</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">ВНЕДРЕНИЕ БИЗНЕС-АНАЛИТИКИ</h1>

            </div>

            <div class="  p-3 bg-white  rounded-lg shadow-lg m-5 lg:flex-1 p-5 hover:bg-blue-700" data-aos="flip-left">
                <p class="text-2xl font-bold text-white bg-blue-700 inline px-4 py-3 rounded-full">08</p>
                <h1 class="text-gray-700 font-bold text-sm py-5  hover:text-white">ТЕХНИЧЕСКАЯ ПОДДЕРЖКА</h1>

            </div>
        </div>
    </div>




    <div class="flex justify-center">
        <div
          class="grid grid-cols-1 md:grid-cols-2 sm:px-20 relative justify-center"
        >
          <div class="relative pt-20">
            <div

              class="bg-blue-500 py-20 lg:m-10 px-10 md:px-10 rounded-tl-3xl -left-28 max-w-lg absolute hidden sm:block"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="text-3xl font-bold text-blue-500 z-10">Почему мы?</h1>
                <p

                  class="item-center text-9xl font-bold absolute left-48 text-blue-500 z-0"
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

              class="bg-blue-800 py-20 lg:m-10 sm:px-10 md:px-10 rounded-br-3xl -bottom-28 max-w-lg relative"
              data-aos="fade-right"
            >
              <div class="flex justify-center items-center my-10 relative">
                <h1 class="lg:text-3xl font-bold text-white z-10">
                    Основные преимущества amoCRM
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
              <p class="text-white text-base text-md p-5 pt-10 text-center">
                Потому что у нас Вы можете создать по-настоящему классный сайт,
                со всеми нужными Вам функциями
              </p>
            </div>
          </div>

          <div class="pt-20 grid justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
              <div class="p-5">
                <div class="rounded-full inline-block border-indigo-600 border-4">
                    <p class="text-4xl py-8 px-6 text-indigo-600 font-bold">103</p>
                </div>

              <p class="text-base lg:text-xl text-gray-600">
                Более 500 <br />
                выполненых проектов
              </p>
              </div>

              <div class="p-5">
                <div class="rounded-full inline-block border-indigo-600 border-4">
                    <p class="text-4xl py-8 px-6 text-indigo-600 font-bold">154</p>
                </div>

              <p class="text-base lg:text-xl text-gray-600">
                Более 100 <br />
                постоянных клиентов
              </p>
              </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 max-w-md justify-center">
              <div class="p-5">

            <div class="rounded-full inline-block border-indigo-600 border-4">
                <p class="text-4xl py-8 px-6 text-indigo-600 font-bold">143</p>
            </div>

              <p class="text-base lg:text-xl text-gray-600">
                Команда <br />
                сертифицированных <br />
                специалистов
              </p>
              </div>

              <div class="p-5">
                <div class="rounded-full inline-block border-indigo-600 border-4">
                    <p class="text-4xl py-8 px-6 text-indigo-600 font-bold">154</p>
                </div>

              <p class="text-base lg:text-xl text-gray-600">
                Индивидуальный <br />
                подход к каждому <br />
                клиенту
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="grid grid-cols-1 md:grid-cols-2 mt-24">
        <div class="flex justify-center pt-8" data-aos="fade-right">
            <img src="{{asset('images/open_engine/amo_crm/26.png')}}"
                                              alt="">
        </div>
        <div class="pt-8">
            <div class="flex justify-center items-center my-10 pt-10 " data-aos="fade-left">
                <h1 class="text-4xl font-bold text-blue-700 z-10">Сертификаты</h1>
                <p   class="text-9xl item-center font-bold absolute left-48 text-gray-300 z-0 opacity-50">
                    7
                </p>
            </div>
            <div>
                <p class="text-center text-gray-600 text-2xl sm:px-20" data-aos="fade-up">Наша компания — официальный сертифицированный
                    партнер
                    <br> amoCRM</p>
            </div>

        </div>
    </div>

    <!--     -->


    <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
        <h1 class="text-4xl font-bold text-blue-700 z-10">Стоимость</h1>
        <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class=" text-9xl font-bold  text-gray-300 "
              >
                8
              </p>
          </div>
    </div>


    <div class="flex justify-center items-center py-20  hover:scale-110 duration-200" data-aos="fade-up">
        <div class="bg-white flex items-center  rounded-2xl shadow-lg">
            <div class="bg-blue-700 py-12 px-5 rounded-l-2xl">
                <img src="{{asset('images/open_engine/amo_crm/27.png')}}" alt="">
            </div>
            <div class="text-2xl text-gray-700 font-bold px-10 leading-8 mx-10">
                <p>Разработать <br> индивидуальную <br> стратегию?</p>
            </div>
            <a href=""
               class=" mx-10 bg-blue-700 rounded-full text-white px-10 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                заказать
            </a>
        </div>
    </div>



    <div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">Автоматизация бизнеса</h1>
            <div class="flex text-center absolute item-center justify-center z-0">
              <p
                data-aos="fade-up"

                class="text-9xl  font-bold  text-gray-400 opacity-50">
                9
              </p>
          </div>
        </div>
    </div>

    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

    </div>


    <div class="bg-gray-50 z-0" data-aos="fade-up">
        <div class="pt-20 text-xl lg:mx-24 mx-16 text-gray-700 pb-20">

            <div class="z-0">
                <p>
                    Желаете внедрить <b>CRM системы</b> и автоматизировать свой бизнес? Доверьте настройку CRM системы
                    <b>партнерам amoCRM в Ташкенте,</b> агентству «Open Engine». Это поможет отправлять сообщения, письма и
                    рекламу клиентам вашей компании. Также у вас появиться возможность отслеживания эффективности и
                    <b>интегрировать IP телефонию, астерикс под ключ</b> . Мы поможем вам повысить повторные продажи.
                    <br><br>

                    Мы автоматизируем ваш бизнес! Предоставляем программу по автоматизации торговли, магазина и
                    документооборота. Работу выполняем оперативно, конфиденциально и по приемлемым ценам. Мы ознакомим
                    вас с системой и научим работать с ним. Также обеспечим техническую поддержку. Автоматизации
                    торговли, Автоматизация магазина в ташкенте, Автоматизация работы склада, Автоматизация складского
                    учета, Складской учет, Управление торговлей, Учет материалов на складе, Программы для бизнеса,
                    Программа складского учета, Программа для учета товара в магазине, Программа для учета продаж,
                    Программа для печати этикеток, Программа для торговли, Программа для магазина, битрикс24, Битрикс24
                    в ташкенте, Партнеры битрикс24 в ташкенте, Официальный партнер bitrix24 узбекистан, Внедрение
                    Битрикс в Ташкенте

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
                            10
                        </p>
                    </div>
                </div>


                <div class="h-44 bg-blue-700 max-w-5xl rounded-l-2xl pt-5 z-20 mt-32"
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
