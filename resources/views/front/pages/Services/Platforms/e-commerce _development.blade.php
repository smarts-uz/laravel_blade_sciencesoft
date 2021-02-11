@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<body>

<div class="bg-black h-screen">
    <div class="flex ">
        <div class="container m-auto ">
            <div class="flex justify-between m-6 mx-10">
                <div class="max-h-10">
<!--                    <img src="assets/images/logo.gif" alt="">-->
                </div>

                <div>
                    <a href=""
                       class="bg-blue-700 rounded-full text-white px-3 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                        заказать проект
                    </a>
                    <span class="text-white text-xl ">
                    Меню
                </span>
                </div>
            </div>
        </div>
    </div>

    <div class="grid  grid-cols-2 container m-auto px-16 pt-20">
        <div data-aos="fade-right">
            <div class="text-white text-6xl font-semibold m-auto px-10 leading-13 mb-12">
                Разработка интернет магазина
            </div>
            <div class="px-20">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Получить консультацию
                </a>
            </div>
        </div>

        <div data-aos="fade-left">
            <img src="assets/images/intro.svg" alt="">
        </div>

    </div>
</div>

<div class="from-gray-600">
    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 text-center leading-10">Разрабатываем
            интернет
            магазины, <br> которые продают</h1>
        <p data-aos="fade-up" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            1</p>
    </div>

    <div class="flex mx-auto justify-center items-center mb-20">
        <div class=" ">
            <div class="flex p-5" data-aos="fade-right">
                <img src="assets/images/1/module1_icon1.svg" alt="">
                <div>
                    <h1 class="pl-10 text-gray-600">ЗОЛОТОЙ ПАРТНЁР</h1>
                    <h1 class="pl-10 text-xl text-gray-700"><b>Сертифицированный <br>партнёр 1С-Битрикс</b></h1>
                </div>
            </div>
            <div class="flex p-5" data-aos="fade-right">
                <img src="assets/images/1/module1_icon2.svg" alt="">
                <div>
                    <h1 class="pl-10 text-gray-600">ОТ ИДЕИ ДО ПРОДАЖ</h1>
                    <h1 class="pl-10 text-xl text-gray-700"><b>Выполняем работу под <br>ключ</b></h1>
                </div>
            </div>
            <div class="flex p-5" data-aos="fade-right">
                <img src="assets/images/1/module1_icon3.svg" alt="">
                <div>
                    <h1 class="pl-10 text-gray-600">БОЛЬШОЙ ОПЫТ</h1>
                    <h1 class="pl-10 text-xl text-gray-700"><b>Запущено более 50 <br>магазинов</b></h1>
                </div>
            </div>
        </div>
        <div data-aos="fade-left" class="pl-10">
            <img src="assets/images/module1_img.svg" alt="">
        </div>
    </div>

    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 text-center">Почему мы...</h1>
        <p data-aos="fade-up" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            2</p>
    </div>


    <div class="container mx-auto flex flex-col">
        <div class="flex justify-center flex-col md:flex-row">
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon1.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">ДОСТУПНАЯ ЦЕНА МАГАЗИНА</h1>
                    <h1 class="text-gray-700 text-xl"><b>От 18 000 000 сум</b></h1>
                </div>
            </div>
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon2.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">ОТКРЫВАЕТСЯ ЗА 1.5 СЕКУНДЫ</h1>
                    <h1 class="text-gray-700 text-xl"><b>Быстро работает</b></h1>
                </div>
            </div>
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon3.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">МАГАЗИН ДОСТУПЕН 24/7</h1>
                    <h1 class="text-gray-700 text-xl"><b>Высокая надёжность</b></h1>
                </div>
            </div>
        </div>


        <div class="flex justify-center flex flex-col md:flex-row">
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon4.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">УДОБНЫЙ ДЛЯ ПОЛЬЗОВАТЕЛЕЙ</h1>
                    <h1 class="text-gray-700 text-xl"><b>Высокая конверсия</b></h1>
                </div>
            </div>
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon5.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">РАБОТАЕТ НА ВСЕХ УСТРОЙСТВАХ</h1>
                    <h1 class="text-gray-700 text-xl"><b>100% адаптивность</b></h1>
                </div>
            </div>
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon6.svg" alt="">
                    <p>01
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">САЙТ АДАПТИРОВАН ПОД SEO</h1>
                    <h1 class="text-gray-700 text-xl"><b>Легко продвигать</b></h1>
                </div>
            </div>
        </div>


        <div class="flex justify-center flex flex-col md:flex-row">
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon7.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">АВТОМАТИЗИРУЕМ РАБОТУ МАГАЗИНА</h1>
                    <h1 class="text-gray-700 text-xl"><b>Полная настройка</b></h1>
                </div>
            </div>
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon8.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">СВЯЗЫВАЕМ МАГАЗИН С 1С</h1>
                    <h1 class="text-gray-700 text-xl"><b>Удобно управлять</b></h1>
                </div>
            </div>
            <div class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1" data-aos="fade-right">
                <div class="flex">
                    <img src="assets/images/2/module2_icon9.svg" alt="">
                    <p>01</p>
                </div>
                <div class="p-5">
                    <h1 class="text-gray-600">МАГАЗИН ПРОДАЕТ НА Я.МАРКЕТЕ</h1>
                    <h1 class="text-gray-700 text-xl"><b>Увеличиваем продажи</b></h1>
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-down" class="text-4xl font-bold text-blue-700 z-10 text-center">Наши гарантии</h1>
        <p data-aos="fade-up" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            3</p>
    </div>


    <div style="margin-bottom: 15rem;">
        <div class="flex justify-center">

            <div class="p-6 rounded-md m-5" data-aos="fade-up">
                <div class="mx-auto cursor-pointer">
                    <img src="assets/images/2/module2_icon4.svg" alt="" class="p-8 border-8 border-blue-700 ">
                    <!--                    <p>01</p>-->
                    <p class="text-gray-600 text-lg pt-5">Заключаем договор на <br> разработку интернет- <br>магазина
                    </p>
                </div>
            </div>

            <div class="p-6 rounded-md m-5" data-aos="fade-up">
                <div class="mx-auto cursor-pointer">
                    <img src="assets/images/2/module2_icon4.svg" alt="" class="p-8 border-8 border-blue-700 ">
                    <!--                    <p>01</p>-->
                    <p class="text-gray-600 text-lg pt-5">Заключаем договор на <br> разработку интернет- <br>магазина
                    </p>
                </div>
            </div>

            <div class="p-6 rounded-md m-5" data-aos="fade-up">
                <div class="mx-auto cursor-pointer">
                    <img src="assets/images/2/module2_icon4.svg" alt="" class="p-8 border-8 border-blue-700 ">
                    <!--                    <p>01</p>-->
                    <p class="text-gray-600 text-lg pt-5">Заключаем договор на <br> разработку интернет- <br>магазина
                    </p>
                </div>
            </div>

        </div>


        <div class="flex justify-center">

            <div class="p-6 rounded-md m-5" data-aos="fade-up">
                <div class="mx-auto cursor-pointer">
                    <img src="assets/images/2/module2_icon4.svg" alt="" class="p-8 border-8 border-blue-700 ">
                    <!--                    <p>01</p>-->
                    <p class="text-gray-600 text-lg pt-5">Заключаем договор на <br> разработку интернет- <br>магазина
                    </p>
                </div>
            </div>

            <div class="p-6 rounded-md m-5" data-aos="fade-up">
                <div class="mx-auto cursor-pointer">
                    <img src="assets/images/2/module2_icon4.svg" alt="" class="p-8 border-8 border-blue-700 ">
                    <!--                    <p>01</p>-->
                    <p class="text-gray-600 text-lg pt-5">Заключаем договор на <br> разработку интернет- <br>магазина
                    </p>
                </div>
            </div>

            <div class="p-6 rounded-md m-5" data-aos="fade-up">
                <div class="mx-auto cursor-pointer">
                    <img src="assets/images/2/module2_icon4.svg" alt="" class="p-8 border-8 border-blue-700 ">
                    <!--                    <p>01</p>-->
                    <p class="text-gray-600 text-lg pt-5">Заключаем договор на <br> разработку интернет- <br>магазина
                    </p>
                </div>
            </div>

        </div>
    </div>


    <div class="bg-gray-100 h-12 ">

    </div>
    <div data-aos="zoom-in" class="max-w-3xl mx-auto bg-white shadow-2xl rounded-3xl  p-20 -mt-56">
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


    <div style="height: 12.5rem;" class="bg-blue-700 max-w-4xl rounded-r-2xl pt-1  z-20 mt-32" data-aos="fade-right">
        <div class="flex justify-center items-center pl-20 pt-5">
            <h1 class="text-4xl font-bold text-white z-10 p-5 leading-10">Почему мы разрабатываем <br> интернет магазины
                на 1С-Битрикс?</h1>
            <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-600 z-0 opacity-10">4</p>
        </div>
    </div>


    <div class="flex justify-center items-center m-20 relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
        <p data-aos="fade-down" style="font-size: 8rem"
           class="item-center font-bold absolute left-48 text-gray-300 z-0">
            5</p>
    </div>


    <div class="bg-green-500 p-40 text-white ">
<!--        <div><img src="assets/images/module6_img01.svg" alt=""></div>-->
        <div>
            <div class="text-2xl mb-8" data-aos="fade-up">
                <p class="p-2 text-4xl"><b>24 Pharm</b></p>

                <p class="p-1 text-3xl"><b>Тип сайта:</b></p>
                <p class="p-1 text-3xl">Интернет-магазин</p>

                <p class="p-1 text-3xl"><b>Направления:</b></p>
                <p class="p-1 text-3xl">Онлайн-аптека</p>

                <p class="p-1 text-3xl"><b>Технология:</b></p>
                <p class="p-1 text-3xl">1С Битрикс</p>
            </div>
            <a href=""
               class=" text-lg bg-white rounded-full text-green-500 px-8 py-3 transition duration-300 ease-in-out mr-6">
                Смотреть кейс
            </a>
        </div>

    </div>
</div>

<div class="bg-red-500 p-40 text-white ">
    <div>
        <div class="text-2xl mb-8" data-aos="fade-up">
            <p class="p-2 text-4xl"><b>Chinbozor ©</b></p>

            <p class="p-1 text-3xl"><b>Тип сайта:</b></p>
            <p class="p-1 text-3xl">Интернет-магазин</p>

            <p class="p-1 text-3xl"><b>Направления:</b></p>
            <p class="p-1 text-3xl">Всё для дома</p>

            <p class="p-1 text-3xl"><b>Технология:</b></p>
            <p class="p-1 text-3xl">1С Битрикс</p>
        </div>
        <a href=""
           class=" text-lg bg-white rounded-full text-green-500 px-8 py-3 transition duration-300 ease-in-out mr-6">
            Смотреть кейс
        </a>
    </div>
    <div><img src="assets/images/module6_img01.svg" alt=""></div>
</div>
</div>


<div class="bg-red-300 p-40 text-white ">
    <div><img src="assets/images/module6_img01.svg" alt=""></div>
    <div>
        <div class="text-2xl mb-8" data-aos="fade-up">
            <p class="p-2 text-4xl"><b>Modo ©</b></p>

            <p class="p-1 text-3xl"><b>Тип сайта:</b></p>
            <p class="p-1 text-3xl">Интернет-магазин</p>

            <p class="p-1 text-3xl"><b>Направления:</b></p>
            <p class="p-1 text-3xl"> Одежда и обувь</p>

            <p class="p-1 text-3xl"><b>Технология:</b></p>
            <p class="p-1 text-3xl">1С Битрикс</p>
        </div>
        <a href=""
           class=" text-lg bg-white rounded-full text-green-500 px-8 py-3 transition duration-300 ease-in-out mr-6">
            Смотреть кейс
        </a>
    </div>

</div>
</div>


<div class="flex justify-center items-center mt-40 mb-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Своих не бросаем!</h1>
    <p data-aos="fade-down" style="font-size: 8rem"
       class="item-center font-bold absolute left-48 text-gray-300 z-0">
        6</p>
</div>


<div>
    <p class="text-center p-10 text-gray-700 text-2xl" data-aos="fade-down">После разработки помогаем развивать проект.
        <br> Поэтому Вы всегда можете рассчитывать на:</p>
    <div class="flex justify-center text-gray-700 text-lg mt-10 justify-center">
        <div class="mx-20" data-aos="fade-up">
            <img src="assets/images/3/module7_icon1.svg" alt="" class="mx-auto">
            <p>Поддержку интернет магазина</p>
        </div>

        <div class="mx-20" data-aos="fade-up">
            <img src="assets/images/3/module7_icon2.svg" alt="" class="mx-auto">
            <p>Рекламу продукции</p>
        </div>

        <div class="mx-20" data-aos="fade-up">
            <img src="assets/images/3/module7_icon3.svg" alt="" class="mx-auto">
            <p>Продвижение сайта</p>
        </div>
    </div>

</div>


<div class="flex p-40" data-aos="fade-right">
    <div>
        <p class="text-blue-700 text-xl"><b>БУДУЩЕЕ ECOMMERCE УЖЕ НАСТУПИЛО!</b></p>
        <p style="line-height: 3.2rem" class="text-blue-700 text-5xl py-10 "><b>Интернет-магазин + CRM на <br>1С-Битрикс24</b>
        </p>
        <p class="text-gray-700 text-xl py-5 pb-10">Испытайте уникальную торговую платформу, которая <br> объединяет все
            каналы продаж</p>

        <a href=""
           class=" text-lg bg-blue-700 rounded-full text-white px-8 py-3 transition duration-300 ease-in-out mr-6">
            Заказать консультацию
        </a>
    </div>
    <div data-aos="fade-left">
        <img src="assets/images/module8_img1.jpg" alt="">
    </div>
</div>


<div class="flex">
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

        <div>
            <div class="grid grid-cols-2">
                <div class=" p-5">
                    <img class="rounded-full  border-indigo-600 border-4" src="assets/images/4icons/3.svg" alt="">
                </div>

                <div class=" p-5">
                    <img class="rounded-full border-indigo-600 border-4" src="assets/images/4icons/3.svg" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class=" p-5">
                    <img class="rounded-full border-indigo-600 border-4" src="assets/images/4icons/3.svg" alt="">
                </div>

                <div class=" p-5">
                    <img class="rounded-full border-indigo-600 border-4" src="assets/images/4icons/3.svg" alt="">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="flex justify-center items-center my-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
    <p data-aos="fade-down" style="font-size: 8rem"
       class="item-center font-bold absolute left-48 text-gray-300 z-0">
        8</p>
</div>


<div class="flex container m-auto justify-between  p-20" data-aos="fade-right">

    <div class="flex-1 transform hover:scale-110 duration-200">
        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-3xl text-white text-center"><b>Start</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                    <span class=" text-gray-600">35 000 000</span> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
                <li>Система управления сайтом 1С битрикс</li>
                <li>Лицензия бизнес редакция&nbsp;</li>
                <li>Готовое решение с маркетплейс</li>
                <li>Личный кабинет</li>
                <li>Онлайн чат</li>
                <li>Система оплаты Click,Payme</li>
                <li>Домен в ПОДАРОК</li>
                <li>Телеграм бот в ПОДАРОК</li>
                <li>Гарантийная поддержка в течение года</li>
                <li>Обучение – 3 часа</li>
                <li>Срок&nbsp;от 20 дней</li>
            </ul>
            <div class=" justify-center flex">
                <a href=""
                   style="margin-bottom: 7.5rem;"
                   class=" bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Заказать
                </a>
            </div>
        </div>
    </div>


    <div class="flex-1 transform hover:scale-110 duration-200">

        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-3xl text-white text-center"><b>Бизнес</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                    <span class=" text-gray-600">120 000 000</span> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
                <li>Система управления сайтом 1С битрикс</li>
                <li>Лицензия бизнес редакция&nbsp;</li>
                <li>Готовое решение с маркетплейс</li>
                <li>Мобильное приложение IOS, Android</li>
                <li>Система оплаты Click,Payme, Visa, Mastercard, Paypal&nbsp;</li>
                <li>Домен в ПОДАРОК</li>
                <li>Телеграм бот в ПОДАРОК</li>
                <li>Система лояльности в ПОДАРОК</li>
                <li>Гарантийная поддержка в течение года</li>
                <li>Обучение – 12 часов</li>
                <li>Срок&nbsp;от 60 дней</li>
            </ul>
            <div class=" justify-center flex">
                <a href=""
                   style="margin-bottom: 4.5rem;"
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
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
                <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                    <span class=" text-gray-600">150 000 000</span> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
                <li>Система управления сайтом 1С битрикс</li>
                <li>Лицензия бизнес редакция&nbsp;</li>
                <li>Готовое решение с маркетплейс</li>
                <li>Интеграция и внедрение складского учёта (Мой Склад)</li>
                <li>Мобильное приложение IOS, Android</li>
                <li>Сео оптимизация сайта&nbsp;</li>
                <li>Система оплаты Click,Payme, Visa, Mastercard, Paypal&nbsp;</li>
                <li>Домен в ПОДАРОК</li>
                <li>Телеграм бот в ПОДАРОК</li>
                <li>Система лояльности в ПОДАРОК</li>
                <li>Гарантийная поддержка в течение года</li>
                <li>Обучение – 12 часов</li>
                <li>Срок&nbsp;от 90 дней</li>
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



<div style="z-index: 100" class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative" data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">Разработка интернет магазина</h1>
        <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0 opacity-10">9</p>
    </div>
</div>

<div class="bg-gray-100 h-12 z-10" data-aos="fade-up-right"></div>
<div class="bg-gray-200 z-0" data-aos="fade-up-right">
    <div style=" font-size: 17px" class="pt-20 text-gray-700 pb-20">

        <div style="margin-left: 20%; margin-right: 20%;" class="z-0 text-gray-600 text-lg">
            <p>
                Нужны сайты на заказ или хотите купить сайт в Ташкенте? У нас работают опытные разработчики сайтов и
                программисты в Узбекистане, которые выполняют свою работу на все 100%. Мы предлагаем не только
                разработку веб сайта, но и обеспечиваем техническую поддержку сайтов в Узбекистане. Также мы занимаемся
                разработкой веб приложений в Ташкенте для вашего бизнеса. Заказать Интернет-магазин под ключ. Веб сайт,
                заказать сайт, лучшие программисты, лучшая веб студия, сайт визитка в ташкенте, разработка веб
                приложений ташкент, сайты на заказ, разработка интернет магазина ташкент, как создать интернет-магазин
                узбекистан, разработка веб-сайта, битрикс партнер узбекистан, сайт на 1с битрикс, продающий сайт, промо
                сайт, заказать лендинг пейдж в ташкенте,
            </p>
        </div>

        <div class="flex justify-end">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">Другие <br> услуги</h1>
                    <p data-aos="fade-down" style="font-size: 10rem"
                       class="item-center font-bold absolute left-48 text-gray-300 z-0">
                        10</p>
                </div>

                <div style="height: 10rem;" class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5  z-20 mt-32"
                     data-aos="fade-up-left">
                    <div class="flex justify-center items-center pl-20 pt-5">

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3" src="assets/images/4/web-site_dark.svg" alt="">
                            <p class="text-center">Разработка <br> сайтов</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3" src="assets/images/4/loupe_dark.svg" alt="">
                            <p class="text-center">SEO <br> продвижение</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3" src="assets/images/4/loupe_dark.svg" alt="">
                            <p class="text-center">Контекстная <br> реклама</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3" src="assets/images/4/digital-marketing_dark.svg" alt="">
                            <p class="text-center"> СММ <br> продвижение</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3" src="assets/images/4/creative_dark.svg" alt="">
                            <p class="text-center">Разработка <br>брендбуков</p>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>
</div>

<footer style="background: #00091F" class="bg-blue-900 text-white  ">
    <h1 class="text-white mx-auto text-5xl font-semibold text-center py-20" data-aos="zoom-in">Начать проект</h1>
    <footer class="flex container m-auto justify-between  px-40 p-5">
        <img src="" alt="">
        <p>Чиланзарский район <br>
            ул Кирик Киз 10</p>
        <p><b>+99871 202 22 42</b></p>
        <div class="flex ">
            <i>f</i>
            <i>i</i>
            <i>y</i>
        </div>
    </footer>
</footer>

<script>
    new Splide('.splide').mount();
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>



@endsection


@section('js')

@endsection
