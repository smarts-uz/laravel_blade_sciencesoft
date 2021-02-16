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
                Разработка приложений на андроид и ios
            </div>
            <div class="px-20">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    Получить консультацию
                </a>
            </div>
        </div>

        <div data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/1.svg" alt="">
        </div>

    </div>
</div>


<div>
    <div class="flex container m-auto justify-between py-20  px-40">
        <div data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Google play</p>
        </div>
        <div data-aos="fade-left">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Android</p>
        </div>
        <div data-aos="fade-up">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Automatization</p>
        </div>
        <div data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">IOS</p>
        </div>
        <div data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-feature/1.svg" alt="" class="m-auto">
            <p class="px-5 font-bold text-md mt-5 text-gray-700">Appstore</p>
        </div>
    </div>


    <div class="flex justify-center items-center my-20 relative ">
        <h1 class="text-4xl font-bold text-white z-10 text-blue-600 text-center">4 причины заказать разработку <br>
            приложения в <span class="text-blue-300">Open Engine</span></h1>
        <p data-aos="fade-down" style="font-size: 8rem"
           class="item-center font-bold absolute left-48 text-gray-300 z-0">
            1</p>
    </div>


    <!--   -->
    <!---->
    <div class=" flex justify-center container mx-auto">
        <div class="grid grid-cols-3">

            <div class="flex justify-center">
                <div>
                    <div class=" px-10 py-5  " data-aos="fade-right">
                        <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/1.svg" alt="">
                        <p class="text-center font-bold text-xl text-gray-700">МАКСИМУМ УСТРОЙСТВ</p>
                        <p class="text-gray-500">Приложение будет одинаково и стабильно работать на различных
                            устройствах</p>
                    </div>
                    <div class=" px-10 py-5  mt-20 " data-aos="fade-right">
                        <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/1.svg" alt="">
                        <p class="text-center font-bold text-xl text-gray-700">ОФОРМЛЕНИЕ ЗАКАЗА</p>
                        <p class="text-gray-500">Мы максимально облегчаем этот процесс для пользователя</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center item-center" data-aos="flip-right">
                <img src="https://oe.uz/local/templates/oe/media/images/mobile/2.svg" alt="">
            </div>

            <div class="flex justify-center">
                <div>
                    <div class=" px-10 py-5 " data-aos="fade-left">
                        <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/1.svg" alt="">
                        <p class="text-center font-bold text-xl text-gray-700">МАКСИМАЛЬНОЕ УДОБСТВО</p>
                        <p class="text-gray-500">Мы проектируем приложение с интуитивно понятным интерфейсом и
                            навигацией для пользователей

                        </p>
                    </div>

                    <div class=" px-10 py-5 mt-20 " data-aos="fade-left">
                        <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/1.svg" alt="">
                        <p class="text-center font-bold text-xl text-gray-700">БЫСТРОДЕЙСТВИЕ</p>
                        <p class="text-gray-500">Загрузка приложений максимально ускорена за счет снижения веса картинок
                            и скриптов</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div style="z-index: 100; height: 14rem" class="bg-blue-700 max-w-5xl rounded-r-2xl z-20 relative">
        <div class="flex justify-center items-center my-20 pt-10 " data-aos="fade-right">
            <h1 class="text-4xl font-bold text-white z-10">Отрасли</h1>
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


    <div class="bg-gray-100 h-12 mt-56">

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


    <div class="grid grid-cols-4 container mx-auto gap-20 my-20">
        <div class="flex justify-center items-center relative ">
            <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Этап работы</h1>
            <p data-aos="fade-down" style="font-size: 8rem"
               class="item-center font-bold absolute left-48 text-gray-300 z-0">
                3</p>
        </div>
        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">1</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Постановка задачи</p>
            <p class="text-gray-600">Мы изучаем рынок и потенциальную целевую аудиторию, чтобы сделать проект
                эффективным и особенным.</p>
        </div>
        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">2</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Прототипирование</p>
            <p class="text-gray-600">Создаем архитектуру нашего проекта – разрабатываем модель навигации, экраны и
                другие элементы.</p>
        </div>
        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">3</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Дизайн и верстка</p>
            <p class="text-gray-600">На основе прототипа наши дизайнеры создают конечный визуальный облик проекта.
                Верстаем под нужные устройства.</p>
        </div>

        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">4</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Завершение разработки</p>
            <p class="text-gray-600">Допиливаем код приложения и подготавливаем его к дальнейшим этапам</p>
        </div>
        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">5</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Тестирование</p>
            <p class="text-gray-600">Привлекаем потенциальных пользователей для приложения и проводим бета-тестирование
                функционала проекта.</p>
        </div>
        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">6</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Запуск</p>
            <p class="text-gray-600">Публикуем готовое приложение. Оперативно собираем отзывы и выявляем малейшие
                недочеты.</p>
        </div>
        <div>
            <p class="p-2 text-white font-bold text-2xl bg-blue-400 rounded-2xl">7</p>
            <p class="font-bold text-gray-700 text-2xl py-3">Техническое поддержка</p>
            <p class="text-gray-600">Техническое поддержка</p>
        </div>


    </div>


    <div class="flex justify-center items-center relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Кейсы</h1>
        <p data-aos="fade-down" style="font-size: 8rem"
           class="item-center font-bold absolute left-48 text-gray-300 z-0">
            4</p>
    </div>


    <div class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">


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
                        <div>
                            <img src="https://oe.uz/upload/iblock/69a/69a0b96b3659fde628cc728d6dc58b87.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">


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
                        <div>
                            <img src="https://oe.uz/upload/iblock/69a/69a0b96b3659fde628cc728d6dc58b87.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="grid grid-cols-2 container m-auto items-center p-10 pt-20">


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
                        <div>
                            <img src="https://oe.uz/upload/iblock/0db/0db4bc9e482b3e5a66ca5a666c723174.png" alt="">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="grid grid-cols-2 px-20 relative">

        <div style="border-radius: 0 0 200px 0" class="bg-blue-700 py-20 m-10 px-20 " data-aos="fade-right">

            <p class="text-white text-2xl font-bold p-2">ОПТИМИЗАЦИЯ ПРОЦЕССОВ
                ЗА СЧЕТ
            </p>
            <p class="text-white text-3xl font-bold p-2"> МЕТОДОЛОГИИ <br>
                <span class="text-blue-400">SCRUM</span>
            </p>
            <p class="text-white p-3">
                Именно SCRUM и наши отлаженные процессы позволяют гарантировать правильный результат: реализацию вашего
                проекта точно вовремя, с требуемым качеством и без головной боли.
            </p>
        </div>


        <div>
            <div class="grid grid-cols-2">
                <div class=" p-5">
                    <p class="font-bold text-4xl text-gray-500 border-4 inline block rounded-full py-5  px-6 border-blue-600">
                        01</p>
                    <p class="text-md text-gray-600 my-10">Стоимость базируется на реально отработаных часах</p>
                </div>

                <div class=" p-5">
                    <p class="font-bold text-4xl text-gray-500 border-4 inline rounded-full py-5  px-6 border-blue-600">
                        02</p>
                    <p class="text-md text-gray-600 my-10">Постоянный доступ к промежуточным результатам разработки.</p>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class=" p-5">
                    <p class="font-bold text-4xl text-gray-500 border-4 inline rounded-full py-5 px-6  border-blue-600">
                        03</p>
                    <p class="text-md text-gray-600 my-10">Возможность самостоятельно регулировать состав команды,
                        ориентируясь на собственный бюджет.</p>
                </div>

                <div class=" p-5">
                    <p class="font-bold text-4xl text-gray-500 border-4 inline rounded-full py-5  px-6 border-blue-600">
                        04</p>
                    <p class="text-md text-gray-600 my-10">Контроль всех процессов через систему управления
                        проектами.</p>
                </div>
            </div>
        </div>

    </div>


    <div class="flex justify-center items-center relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">Почему мы...</h1>
        <p data-aos="fade-down" style="font-size: 8rem"
           class="item-center font-bold absolute left-48 text-gray-300 z-0">
            5</p>
    </div>


    <div class="grid grid-cols-4 container mx-auto my-20">
        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Приложение <br>
                полностью ваше</p>
            <p class="text-gray-700">После окончания разработки <br> мы передаем все права на <br> приложение Вам.</p>
        </div>

        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Работа
                по договору</p>
            <p class="text-gray-700">Работаем по составленному <br> договору. Юридическое лицо <br> (ООО и ИП).</p>
        </div>

        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Прозрачный <br>
                процесс</p>
            <p class="text-gray-700">Даём Вам тестовый доступ к приложению на протяжении всей работы.</p>
        </div>

        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">Гарантия – 1 год</p>
            <p class="text-gray-700">Бесплатно обеспечиваем работоспособность всех функций, указанных в Т.З.</p>
        </div>


        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">100% выполнение и <br>
                сдача проектов</p>
            <p class="text-gray-700">Дорабатываем приложение до тех пор, пока оно не будет работать точно так, как
                указано в Т.З.</p>
        </div>

        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">От идеи до <br>
                публикации</p>
            <p class="text-gray-700">Выполняем полный цикл по созданию приложения. Публикуем в App Store и Google
                Play.</p>
        </div>


        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">От идеи до <br>
                публикации</p>
            <p class="text-gray-700">Тимлидер, разработчики iOS/Android, дизайнер, аналитик, тестировщик,
                маркетолог.</p>
        </div>


        <div class="text-center p-5">
            <img src="https://oe.uz/local/templates/oe/media/images/mobile/icons-why/why1.png" alt=""
                 class="mx-auto bg-blue-700 p-5 rounded-full">
            <p class="text-gray-700 text-2xl font-bold leading-6 py-3">От идеи до <br>
                публикации</p>
            <p class="text-gray-700">Оказываем техподдержку после завершения проекта: добавляем новые функции и
                обновления</p>
        </div>
    </div>


    <div class="flex justify-center items-center my-10 pt-10 " data-aos="fade-right">
        <h1 class="text-4xl font-bold text-blue-700 z-10">Цены и тарифы</h1>
        <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0 opacity-50">
            6</p>
    </div>


    <div class=" max-w-3xl flex container m-auto justify-between  p-20" data-aos="fade-right">

        <div class="flex-1 transform hover:scale-110 duration-200">
            <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
                <p class="text-3xl text-white text-center"><b>Разработка моб приложений</b></p>
            </div>
            <div class="shadow-2xl rounded-3xl px-10 py-10 m-5 ">

                <ul class=" text-gray-700 text-lg py-10">
                   <li class="text-center text-xl">У нас нет стандартных тарифов для мобильного приложения</li>
                </ul>
                <div class=" justify-center flex border-t border-gray-400">
                    <a href=""
                       class=" bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </div>

        <!--    -->


    <div style="z-index: 100" class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
         data-aos="fade-up-right">
        <div class="flex justify-center items-center my-20 pt-10">
            <h1 class="text-4xl font-bold text-white z-10">Мобильное приложение</h1>
            <p style="font-size: 8rem" class="item-center font-bold absolute left-48 text-gray-300 z-0 opacity-50">7</p>
        </div>
    </div>

    <div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

    </div>


    <div class="bg-gray-200 z-0" data-aos="fade-up">
        <div style="margin-left: 20%; margin-right: 20%; font-size: 17px" class="pt-20 text-gray-700 pb-20">

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
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">Другие <br> услуги</h1>
                    <p data-aos="fade-down" style="font-size: 10rem"
                       class="item-center font-bold absolute left-48 text-gray-300 z-0">
                        8</p>
                </div>

                <div style="height: 10rem;" class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5  z-20 mt-32"
                     data-aos="fade-up-left">
                    <div class="flex justify-center items-center pl-20 pt-5">

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3"
                                 src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg"
                                 alt="">
                            <p class="text-center">Разработка <br> сайтов</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3"
                                 src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg"
                                 alt="">
                            <p class="text-center">SEO <br> продвижение</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3"
                                 src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg"
                                 alt="">
                            <p class="text-center">Контекстная <br> реклама</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3"
                                 src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg"
                                 alt="">
                            <p class="text-center"> СММ <br> продвижение</p>
                        </div>

                        <div class="bg-white mx-3 px-10 py-5 rounded-lg">
                            <img class="mx-auto p-3"
                                 src="https://oe.uz/local/templates/oe/media/images/home/icons-serv/web-site.svg"
                                 alt="">
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
