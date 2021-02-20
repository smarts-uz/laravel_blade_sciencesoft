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
              Программа для автоматизации торговли в Ташкенте
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
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/1.svg" alt="" />
          </div>
        </div>
      </div>





<div class="flex justify-center">
    <div class="grid">
        <p class="text-gray-700 text-center text-blue-700 text-4xl font-bold my-10" data-aos="fade-right">Кому выгодно</p>
        <div class="grid grid-cols-1 md:grid-cols-4 container mx-auto gap-5 text-lg" data-aos="fade-down">
            <p class="text-gray-700 cursor-pointer">Для розничной торговли</p>
            <p class="text-gray-700 cursor-pointer">Для оптовой торговли</p>
            <p class="text-gray-700 cursor-pointer">Для интернет-магазина</p>
            <p class="text-gray-700 cursor-pointer">Для производства</p>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <p class="text-gray-700 text-center text-blue-700 text-4xl font-bold my-10 leading-10" data-aos="fade-left">Возможности <br>
        МойСклад</p>
</div>


<div class="container mx-auto max-w-7xl px-4">
    <div class=" grid grid-cols-1 lg:grid-cols-2 my-40 justify-center ">
        <div data-aos="fade-right">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">База клиентов</p>
            <p class="text-gray-700 text-lg"><b>Автоматизация продаж</b> или <b>автоматизация магазина</b>
                предусматривает ведение учета клиентов и
                заключенных
                договоров, постановку задач и напоминаний отделу продаж, получение оповещений об изменении статуса
                задачи или появлении комментариев. Есть возможность соединения с amoCRM.
                <br> <br>
                <b>Система учёта продаж</b> хранит данные о контрагентах и их контактных лицах в удобном справочнике.
                Вся
                информация о клиенте располагается в одном окне. В базе фиксируется вся история работы с юр. лицом,
                сведения о долге и сумме продаж, хранятся все архивные документы. <b>Автоматизация процесса</b> упрощает
                ведение клиента или отдельного заказа через воронку продаж.</p>
        </div>
        <div class="flex justify-center items-center" data-aos="zoom-in">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/content1.png" alt="">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div class="flex justify-center items-center order-last lg:order-none" data-aos="zoom-in">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/content1.png" alt="">
        </div>
        <div data-aos="fade-left">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">Закупки и складской учёт</p>
            <p class="text-gray-700 text-lg"><b>Система автоматизации</b> помогает оценить фактическое количество
                остатков и величину
                зарезервированной
                продукции. В реестре <b>системы автоматизации</b> хранится информация о параметрах продукта, его
                действующем
                штрих-коде и серийном номере. Сведения легко импортируются из Excel.
                <br><br>
                Хранится история всех операций по закупке. Возможна фильтрация по продукции или контрагенту. Можно
                работать с комиссионным продуктом. Кроме того, размещать заявки контрагентам и поставщикам можно по
                данным статистики проданных товаров или пополнению склада до минимального порогового значения. А при
                прямых поставках закупки для контрагентов формируются из заявок потребителей.
                <br><br>
                <b>Автоматизация розничной торговли</b> позволит получать информацию о размещении новых заказов,
                задержках в
                оплате или отгрузке и других мерах в интернет-браузере, новостной ленте или мобильном приложении.
            </p>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div data-aos="fade-right">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">Разграничения доступов, филиалы.</p>
            <p class="text-gray-700 text-lg"><b>Программа автоматизации склада</b> позволяет объединить юр. лица,
                филиалы, склады и офисы в единую
                систему
                без лишних затрат. В <b>программе для склада</b> предусмотрен контроль над правами пользователей, их
                ролями и
                возможностями. В <b>программе для магазина</b> есть возможность закрывать доступ к некоторым разделам,
                запрещать вносить изменения в закрытом периоде и т.д.
                <br><br>
                <b>Программа для магазина</b> уникальна тем, что все действия персонала отражаются в общей ленте
                событий.
            </p>
        </div>
        <div class="flex justify-center items-center" data-aos="zoom-in">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/content1.png" alt="">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div class="flex justify-center items-center order-last lg:order-none" data-aos="zoom-in">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/content1.png" alt="">
        </div>
        <div data-aos="fade-left">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">Производственные операции</p>
            <p class="text-gray-700 text-lg"><b>Программа для складского учета</b> высчитывает количество сырья,
                материалов, комплектующих и готовую
                продукцию на складах. <b>Программа для склада</b> автоматически списывает материалы и рассчитывает
                базовую цену
                товара.
                <br><br>
                <b>Программа для производства</b> предусматривает возможность планирования потребностей в материалах или
                компонентах.
            </p>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div data-aos="fade-right">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">Аналитические отчеты</p>
            <p class="text-gray-700 text-lg">
                Программа <b>автоматизации магазина</b> фиксирует остаток товарных наименований на складе, отражает
                статистику
                продаж, процент прибыли по каждому товару и оборотные средства. На дэшборде <b>системы для торговли</b>
                или
                «Экране руководителя» отражаются данные по движению средств, задолженностям и взаиморасчетам.
                <br><br>
                <b>Автоматизация розничной торговли</b> предусматривает составление сводного отчета по торговым точкам и
                автоматической рассылки их через электронную почту.
            </p>
        </div>

        <div class="flex justify-center items-center" data-aos="zoom-in">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/content1.png" alt="">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div class="flex justify-center items-center order-last lg:order-none" data-aos="zoom-in">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/content1.png" alt="">
        </div>

        <div data-aos="fade-left">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">Мобильные приложения для iOS и Android</p>
            <p class="text-gray-700 text-lg">
                <b>Программа для склада</b> МойСклад имеет мобильное приложение. В мобильном приложении хранятся
                перечень
                товаров, их фотографии и описание. Поиск простой и быстрый: по наименованию или артикулу.
                <br><br>
                <b>В приложении для продаж</b> можно компоновать заказы потребителей, выставлять счета и акты на
                отгрузку,
                отправлять на печать. Все уведомления приходят в приложение <b>программы для магазина и склада.</b>
                <br><br>
                Здесь же хранится вся статистика предприятия: количество остатков и резервов, число проданных позиций в
                денежном и процентном эквиваленте, поступление и расходование средств, данные по каждой точке продаж и
                кассе. Отчет формируется за выбранный период: день, неделю или месяц.
            </p>
        </div>


    </div>

</div>

<!---->


<div class="bg-gray-100 h-12 mt-64"></div>

<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-3xl  -mt-56 bg-blue-700 ">
    <div class="grid grid-cols-1 md:grid-cols-3 ">
        <div class="text-white col-span-2 md:p-10 pb-8 px-4" data-aos="fade-right">
            <p class="text-center  font-bold text-4xl leading-10">Управляйте бизнесом там, <br> где удобно</p>
            <p class="py-10 text-lg text-center ">Попробуйте мобильное приложение МоегоСклада. Пополняйте каталог
                товаров, просматривайте заказы и отчеты о
                продажах, ставьте задачи сотрудникам — в любое время и в любом месте.
            </p>
            <div class="flex justify-center">
                <a href=""
                   class="bg-blue-700 text-white transition duration-300 ease-in-out mr-5">
                    <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/btn_google-play.svg" alt="">
                </a>

                <a href=""
                   class="bg-blue-700 text-white transition duration-300 ease-in-out ">
                    <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/btn_app-store.svg" alt="">
                </a>
            </div>
        </div>
        <div class="order-first md:order-none" data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/app_bg.png" alt="">
        </div>
    </div>
</div>

<div>
    <p class="text-gray-700 text-blue-700 text-5xl font-bold mb-10 flex justify-center mt-40 mb-10"
       data-aos="fade-right">Как мы работаем</p>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2  container mx-auto m-10" data-aos="fade-up">
    <div class="self-end">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">На основе нее подбираем <br> подходящие конкретно
            вам <br> инструменты</p>
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/steps2.svg" alt="" class="mx-auto">
    </div>
    <div class="self-end">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">Обучаем ваших <br> сотрудников и <br>руководителя
        </p>
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/steps2.svg" alt="" class="mx-auto">
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-3 container mx-auto m-10" data-aos="fade-up">
    <div>
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/steps2.svg" alt="" class="mx-auto">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">Составляем карту ваших <br> бизнес-процессов</p>
    </div>
    <div>
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/steps2.svg" alt="" class="mx-auto">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">Настраиваем выбранные <br> инструменты под вас</p>
    </div>
    <div>
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/steps2.svg" alt="" class="mx-auto">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">Контролируем <br> правильность</p>
    </div>
</div>

<!--    -->
<div class="mt-48">

        <div class="bg-gray-400 h-12"></div>

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

<div>
    <p class="text-gray-700 text-blue-700 text-5xl font-bold mb-10 flex justify-center mt-40 mb-10"
       data-aos="fade-right">100% безопасность ваших данных</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 container mx-auto gap-10 max-w-7xl">
    <div data-aos="fade-right">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/safety1.svg" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">Хостинг</p>
        <p class="text-center text-xl text-gray-700">Наши серверы расположены в надежных дата-центрах в Москве и
            Санкт-Петербурге, которые имеют несколько
            степеней защиты от чрезвычайных ситуаций.</p>
    </div>

    <div data-aos="fade-up">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/safety1.svg" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">Шифрование данных</p>
        <p class="text-center text-xl text-gray-700">Вся информация, передаваемая сервисом МойСклад, зашифрована при
            помощи 256-битного SSL-сертификата GeoTrust. Перехват данных невозможен.</p>
    </div>

    <div data-aos="fade-left">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/safety1.svg" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">Данные принадлежат вам</p>
        <p class="text-center text-xl text-gray-700">Вы всегда можете перенести все свои данные из сервиса МойСклад в
            Microsoft Excel, Access или любую другую базу данных.</p>
    </div>

    <div data-aos="fade-right" class="mt-20">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/safety1.svg" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">Резервное копирование</p>
        <p class="text-center text-xl text-gray-700">Данные автоматически копируются между серверами в разных городах.
            Репликация <br> происходит в режиме реального <br>времени.</p>
    </div>

    <div data-aos="fade-up" class="mt-20">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/safety1.svg" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">Качественное
            администрирование</p>
        <p class="text-center text-xl text-gray-700">Наши серверы ежедневно обслуживаются профессиональными системными
            администраторами.</p>
    </div>

    <div data-aos="fade-left" class="mt-20">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/safety1.svg" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">Система разграничения
            доступа</p>
        <p class="text-center text-xl text-gray-700">Ваши сотрудники будут работать только с той информацией и функциями
            системы, доступ к которым вы им <br> откроете.</p>
    </div>
</div>

<div data-aos="zoom-in" class="container mx-auto bg-white shadow-lg rounded-3xl  p-20 mt-20">
    <div class="flex justify-center items-center relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
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



<!---->

<div class="grid grid-cols-1 lg:grid-cols-2 sm:px-20 relative sm:my-20">
    <div style="border-radius: 0 0 200px 0" class="bg-blue-700 py-20 m-10 px-20 " data-aos="fade-right">
        <div class="flex justify-center items-center my-20 relative ">
            <h1 class="text-3xl md:text-5xl font-bold text-white z-10 text-whites ">Сертификат <br> официального
                <br> партнера</h1>

        </div>
    </div>


    <div data-aos="fade-left">
        <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/certificate.png" alt="">
    </div>

</div>

<div>
    <p class="text-gray-700 text-blue-700 text-5xl font-bold mb-10 flex justify-center mt-40 mb-10"
       data-aos="fade-right">Тарифы</p>
</div>

<div class=" max-w-3xl flex sm:container m-auto justify-between  sm:p-20" data-aos="fade-right">

    <div class="flex-1 transform hover:scale-110 duration-200">
        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-3xl text-white text-center"><b>Быстрый старт</b></p>
        </div>
        <div class="shadow-2xl rounded-3xl px-10 py-10 m-5 ">

            <ul class=" text-gray-700 text-lg py-10 border-b border-gray-400">
                <li class="text-center text-3xl">Цена: <b>2 000 000 сум</b></li>
            </ul>
            <ul class="list-disc text-gray-700 text-lg p-5">
                <li>Изучения процессов</li>
                <li>Первичная настройка</li>
                <li>Обучения - 2 часа</li>
            </ul>
            <div class=" justify-center flex ">
                <a href=""
                   class=" bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                    Заказать
                </a>
            </div>
        </div>
    </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-3 container m-auto justify-between  md:p-20" data-aos="fade-right">

    <div class="flex-1 transform hover:scale-110 duration-200">
        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-2xl text-white text-center"><b>Розница</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                    от <b>10 000 000</b> uzs
                </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>Изучения процессов</li>
                <li>Работа в тестовом режиме</li>
                <li>Внедрения системы</li>
                <li>Обучения до 3х сотрудников</li>
                <li class="mb-20">Срок от 5 дней</li>

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
            <p class="text-2xl text-white text-center"><b>Оптовая торговля</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                    от <b>15 000 000</b> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>Изучения процессов</li>
                <li>Работа в тестовом режиме</li>
                <li>Внедрения системы</li>
                <li>Обучения до 6 сотрудников</li>
                <li class="mb-20">Срок от 10 дней</li>

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
            <p class="text-2xl text-white text-center"><b>Производство</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                    от <b>20 000 000</b> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>Изучения процессов</li>
                <li>Работа в тестовом режиме</li>
                <li>Внедрения системы</li>
                <li>Обучения до 10 сотрудников</li>
                <li class="mb-20">Срок от 15 дней</li>
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


<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-3xl  bg-blue-700 ">
    <div class="grid grid-cols-1 sm:grid-cols-3 sm:p-10">
        <div class="text-white col-span-2 p-10" data-aos="fade-right">
            <p class="font-bold text-4xl leading-10">Попробуйте МойСклад <br>
                прямо сейчас!
            </p>
        </div>
        <div data-aos="fade-right" class=" flex items-center pb-4 pl-4">
            <a href=""
               class=" bg-white rounded-full text-blue-700 px-12  py-3 transition duration-300 ease-in-out mr-6">
                Попробовать
            </a>
        </div>
    </div>
</div>

<!-- -->


<div style="z-index: 100" class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
     data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">Автоматизация торговли</h1>
    </div>
</div>

<div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

</div>


<div class="bg-gray-50 z-0" data-aos="fade-up">
    <div style="margin-left: 20%; margin-right: 20%; font-size: 17px" class="pt-20 text-gray-700 pb-20">

        <div class="z-0">
            <p>
                Не знаете <b>как автоматизировать магазин,</b> или <b>какую программу использовать для торговли?</b> Не
                знаете <b>какую программу выбрать для автоматизации производства?</b> Программа Мойсклад входит в топ
                програм
                для автоматизации торговли, склада, и производства в Ташкенте и в СНГ.
                <b> Наши решения:</b>
            <li>Автоматизации торговли</li>
            <li>Автоматизация магазина</li>
            <li>Автоматизация работы склада</li>
            <li>Автоматизация складского учета</li>
            <li>Складской учет</li>
            <li>Управление торговлей</li>
            <li>Учет материалов на складе</li>
            <li>Программа для производства</li>

            Программа Мойсклад входит в топ программ для автоматизации торговли, склада, и производства в Ташкенте и
            в СНГ.
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
                            <div class="swiper-slide"><div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                <p class="text-center">
                                    Разработка <br/>
                                    сайтов
                                </p>
                            </div></div>
                            <div class="swiper-slide"><div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                <p class="text-center">
                                    Разработка <br/>
                                    сайтов
                                </p>
                            </div></div>
                            <div class="swiper-slide"><div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/web-site_dark.svg')}}" alt=""/>
                                <p class="text-center">
                                    Разработка <br/>
                                    сайтов
                                </p>
                            </div></div>
                            <div class="swiper-slide">  <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                <p class="text-center">
                                    SEO <br/>
                                    продвижение
                                </p>
                            </div></div>
                            <div class="swiper-slide"> <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                <p class="text-center">
                                    Контекстная <br/>
                                    реклама
                                </p>
                            </div></div>
                            <div class="swiper-slide"> <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/digital-marketing_dark.svg')}}"
                                     alt=""/>
                                <p class="text-center">
                                    СММ <br/>
                                    продвижение
                                </p>
                            </div></div>
                            <div class="swiper-slide"><div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                <p class="text-center">Разработка <br/>брендбуков</p>
                            </div></div>
                            <div class="swiper-slide"><div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                <p class="text-center">Разработка <br/>брендбуков</p>
                            </div></div>
                            <div class="swiper-slide"> <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                <p class="text-center">Разработка <br/>брендбуков</p>
                            </div></div>
                            <div class="swiper-slide"> <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                <p class="text-center">Разработка <br/>брендбуков</p>
                            </div></div>
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
