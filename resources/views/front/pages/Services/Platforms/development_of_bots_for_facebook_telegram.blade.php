@extends('front.layout_platform')

@section('css')

@endsection

@section('main')



<div class="bg-black h-screen">
    <div class="flex ">
        <div class="container m-auto ">
            <div class="flex justify-between m-6 mx-10">
                <div class="max-h-10">
                    <img src="assets/images/logo.gif" alt="">
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

    <div class="grid  grid-cols-2 container m-auto p-16 ">
        <div data-aos="fade-right">
            <div class="text-white text-6xl font-semibold m-auto px-20 leading-none mb-12">
                Разработка ботов для телеграма в Ташкенте
            </div>
            <div class="px-20">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Получить консультацию
                </a>
            </div>
        </div>

        <div data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/1.svg" alt="">
        </div>

    </div>
</div>

<div class="bg-gray-200">
    <div class="flex container m-auto justify-between py-20  px-40">
        <div data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Чат бот</p>
        </div>
        <div data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Телеграм бот</p>
        </div>
        <div data-aos="fade-up">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Автоматизация</p>
        </div>
        <div data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">API</p>
        </div>
        <div data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Программирование</p>
        </div>
    </div>


    <div class=" flex justify-center">
        <div class="grid grid-cols-3">

            <div class="flex justify-center">
                <div>
                    <div class="bg-white rounded-xl border px-10 py-5  shadow-xl">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        <p class="text-center">Экономия времени и <br> финансов</p>
                    </div>
                    <div class="bg-white rounded-xl border px-10 py-5  mt-20 shadow-xl">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">

                        <p class="text-center">Увеличение аудитории <br>мессенджеров</p>
                    </div>
                </div>
            </div>

            <div class="bg-blue-600 py-10 container rounded-lg">
                <div class="flex justify-center">
                    <div class="flex justify-center items-center my-5 relative ">
                        <h1 data-aos="fade-up" class="text-4xl font-bold text-white z-10">Что такое
                            чат-бот?</h1>
                        <p data-aos="fade-down" style="font-size: 8rem"
                           class="item-center font-bold absolute left-48 text-gray-400 z-0 opacity-50">
                            1</p>
                    </div>
                </div>
                <p class="p-10 text-white text-center">
                    Телеграм-бот — виртуальный собеседник, который встраивается в мессенджеры и помогает бизнесу быть
                    ближе к клиентам. Это автоматизированная интеллектуальная система общения с пользователями.
                </p>

            </div>

            <div class="flex justify-center">
                <div>
                    <div class="bg-white rounded-xl border px-10 py-5 shadow-2xl">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        <p class="text-center">Простой юзабилити</p>
                    </div>

                    <div class="bg-white rounded-xl border px-10 py-5 mt-20 shadow-xl">
                        <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-feature/4.svg" alt="">
                        <p class="text-center">вы автоматически <br> впереди конкурентов</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div style="z-index: 100; height: 14rem" class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative">
        <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
            <h1 class="text-4xl font-bold text-white z-10">Виды телеграм ботов</h1>
            <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0 opacity-50">
                2</p>
        </div>
    </div>

    <div style="z-index: 100" class="flex relative justify-center flex-col md:flex-row mx-20 -mt-20">
        <div class=" bg-white rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
            <div>
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-type/1.svg" alt="" class="mx-auto">
            </div>
            <div class=" py-1 text-center">
                <h1 class="text-gray-700 text-md">Сложные <br> проекты</h1>
            </div>
        </div>
        <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
            <div>
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-type/1.svg" alt="" class="mx-auto">
            </div>
            <div class="py-1  text-center">
                <h1 class="text-gray-700 text-md">Новости</h1>
            </div>
        </div>
        <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
            <div>
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-type/1.svg" alt="" class="mx-auto">
            </div>
            <div class="py-1  text-center">
                <h1 class="text-gray-700 text-md">Интернет <br>магазин</h1>
            </div>
        </div>

        <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
            <div>
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-type/1.svg" alt="" class="mx-auto">
            </div>
            <div class="py-1  text-center">
                <h1 class="text-gray-700 text-md">Такси</h1>
            </div>
        </div>

        <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
            <div>
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-type/1.svg" alt="" class="mx-auto">
            </div>
            <div class="py-1  text-center">
                <h1 class="text-gray-700 text-md">Кафе\Ресторан</h1>
            </div>
        </div>

        <div class=" bg-white  rounded-lg shadow-lg m-5 md:flex-1 py-5" data-aos="flip-left">
            <div>
                <img src="https://oe.uz/local/templates/oe/media/images/bot/icons-type/1.svg" alt="" class="mx-auto">
            </div>
            <div class="py-1  text-center">
                <h1 class="text-gray-700 text-md">Доставка</h1>
            </div>
        </div>

    </div>


    <div class="grid grid-cols-2 container mx-auto my-20 mb-64">
        <div>
            <div class="flex justify-center">
                <div>
                    <div class="flex justify-center items-center my-10" data-aos="fade-right">
                        <h1 class="text-4xl font-bold text-blue-700 z-10 text-center leading-8">Этап создание телеграм <br>бота</h1>
                        <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-400 z-0 opacity-50">
                            3</p>
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
        <div class="flex items-center">
            <img src="https://oe.uz/local/templates/oe/media/images/bot/step_image.svg" alt="">
        </div>
    </div>

    <div class="bg-gray-100 h-12 ">

    </div>
    <div data-aos="zoom-in" class="max-w-3xl mx-auto bg-white shadow-lg rounded-3xl  p-20 -mt-56">
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

    <div class="flex justify-center items-center mt-40 relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Почему мы?</h1>
        <p data-aos="fade-down" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            4</p>
    </div>


    <div class=" flex justify-center container mx-auto">
        <div class="grid grid-cols-3">

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


    <div data-aos="zoom-in" class="max-w-6xl mx-auto bg-white shadow-lg rounded-3xl  p-20 mt-20">
        <div class="flex justify-center items-center relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
            <p data-aos="fade-down" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
                5</p>
        </div>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">

                            <div>
                                <img src="https://oe.uz/upload/iblock/6cc/6cc82e4edcd6f90dbb99e08e37a5e1b2.png" alt="">
                            </div>
                            <div class="text-2xl " data-aos="fade-up">
                                <p class="text-blue-700"><b>Клиент:</b></p>
                                <p>Мебельная фабрика Keng Makon</p>

                                <p class="text-blue-700"><b>Год создания:</b></p>
                                <p>2020</p>

                                <p class="text-blue-700"><b>Тип сайта:</b></p>
                                <p>Разработка интернет-магазина.</p>

                                <p class="text-blue-700"><b>Направление:</b></p>
                                <p>Мебель</p>

                                <p class="text-blue-700"><b>Технология:</b></p>
                                <p class="border-b pb-5 mb-10">1C </p>

                                <a href=""
                                   class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                    заказать
                                </a>
                            </div>

                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">

                            <div>
                                <img src="https://oe.uz/upload/iblock/6cc/6cc82e4edcd6f90dbb99e08e37a5e1b2.png" alt="">
                            </div>
                            <div class="text-2xl" data-aos="fade-up">
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
                                   class=" bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                                    заказать
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">

                            <div>
                                <img src="https://oe.uz/upload/iblock/6cc/6cc82e4edcd6f90dbb99e08e37a5e1b2.png" alt="">
                            </div>
                            <div class="text-2xl" data-aos="fade-up">
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
                                   class=" bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
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
        <p data-aos="fade-down" style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0">
            6</p>
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


<div style="z-index: 100" class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative" data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">Разработка телеграм ботов</h1>
        <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-400 z-0 opacity-50">7</p>
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
                <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">Другие <br> услуги</h1>
                <p data-aos="fade-down" style="font-size: 10rem"
                   class="item-center font-bold absolute left-48 text-gray-300 z-0">
                    8</p>
            </div>

            <div style="height: 10rem;" class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5  z-20 mt-32"
                 data-aos="fade-up-left">
                <div class="flex justify-center items-center pl-20 pt-5">

                    <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                        <img class="mx-auto p-3" src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg" alt="">
                        <p class="text-center">Разработка <br> сайтов</p>
                    </div>

                    <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                        <img class="mx-auto p-3" src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg" alt="">
                        <p class="text-center">SEO <br> продвижение</p>
                    </div>

                    <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                        <img class="mx-auto p-3" src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg" alt="">
                        <p class="text-center">Контекстная <br> реклама</p>
                    </div>

                    <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                        <img class="mx-auto p-3" src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg" alt="">
                        <p class="text-center"> СММ <br> продвижение</p>
                    </div>

                    <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                        <img class="mx-auto p-3" src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg" alt="">
                        <p class="text-center">Разработка <br>брендбуков</p>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
    </div>
</div>






@endsection


@section('js')

@endsection
