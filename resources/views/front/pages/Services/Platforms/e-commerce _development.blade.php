@extends('front.layout_platform')

@section('css')

@endsection

@section('main')


<main class="" style="overflow-y: hidden; overflow-x: hidden">
      <div class="bg-black h-auto px-4">
        <div
          class="py-8 grid grid-cols-1 text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-20"
        >
          <div data-aos="fade-right">
            <div
              class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
            >
              Разработка интернет магазина
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
            <img src="assets/images/intro.svg" alt="" />
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1
          data-aos="fade-down"
          class="text-2xl md:text-4xl font-bold text-blue-700 z-10 text-center leading-10"
        >
          Разрабатываем интернет магазины, <br />
          которые продают
        </h1>
        <p
          data-aos="fade-up"
          style="font-size: 8rem"
          class="item-center font-bold absolute left-48 text-gray-300 z-0"
        >
          1
        </p>
      </div>

      <div
        class="grid grid-cols-1 md:grid-cols-2 mx-auto justify-center items-center mb-20"
      >
        <div class="flex flex-col">
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="assets/images/1/module1_icon3.svg" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">БОЛЬШОЙ ОПЫТ</h1>
              <h1 class="pl-10 text-xl text-gray-700">
                <b>Запущено более 50 <br />магазинов</b>
              </h1>
            </div>
          </div>
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="assets/images/1/module1_icon3.svg" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">БОЛЬШОЙ ОПЫТ</h1>
              <h1 class="pl-10 text-xl text-gray-700">
                <b>Запущено более 50 <br />магазинов</b>
              </h1>
            </div>
          </div>
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="assets/images/1/module1_icon3.svg" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">БОЛЬШОЙ ОПЫТ</h1>
              <h1 class="pl-10 text-xl text-gray-700">
                <b>Запущено более 50 <br />магазинов</b>
              </h1>
            </div>
          </div>
          <div
            class="flex justify-center md:justify-end flex-1 p-5"
            data-aos="fade-right"
          >
            <img src="assets/images/1/module1_icon3.svg" alt="" />
            <div>
              <h1 class="pl-10 text-gray-600">БОЛЬШОЙ ОПЫТ</h1>
              <h1 class="pl-10 text-xl text-gray-700">
                <b>Запущено более 50 <br />магазинов</b>
              </h1>
            </div>
          </div>
        </div>
        <div data-aos="fade-left" class="flex md:justify-start justify-center">
          <img src="assets/images/2/module1_img.svg" alt="" />
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1
          data-aos="fade-down"
          class="text-4xl font-bold text-blue-700 z-10 text-center"
        >
          Почему мы...
        </h1>
        <p
          data-aos="fade-up"
          style="font-size: 8rem"
          class="item-center font-bold absolute left-48 text-gray-300 z-0"
        >
          2
        </p>
      </div>

      <div
        class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center"
      >
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon1.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">ДОСТУПНАЯ ЦЕНА МАГАЗИНА</h1>
            <h1 class="text-gray-700 text-xl"><b>От 18 000 000 сум</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon2.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">ОТКРЫВАЕТСЯ ЗА 1.5 СЕКУНДЫ</h1>
            <h1 class="text-gray-700 text-xl"><b>Быстро работает</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon3.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">МАГАЗИН ДОСТУПЕН 24/7</h1>
            <h1 class="text-gray-700 text-xl"><b>Высокая надёжность</b></h1>
          </div>
        </div>

        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon4.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">УДОБНЫЙ ДЛЯ ПОЛЬЗОВАТЕЛЕЙ</h1>
            <h1 class="text-gray-700 text-xl"><b>Высокая конверсия</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon5.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">РАБОТАЕТ НА ВСЕХ УСТРОЙСТВАХ</h1>
            <h1 class="text-gray-700 text-xl"><b>100% адаптивность</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon6.svg" alt="" />
            <p>01</p>
          </div>

          <div class="p-5">
            <h1 class="text-gray-600">САЙТ АДАПТИРОВАН ПОД SEO</h1>
            <h1 class="text-gray-700 text-xl"><b>Легко продвигать</b></h1>
          </div>
        </div>

        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon7.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">АВТОМАТИЗИРУЕМ РАБОТУ МАГАЗИНА</h1>
            <h1 class="text-gray-700 text-xl"><b>Полная настройка</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/moule2_icon8.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">СВЯЗЫВАЕМ МАГАЗИН С 1С</h1>
            <h1 class="text-gray-700 text-xl"><b>Удобно управлять</b></h1>
          </div>
        </div>
        <div
          class="hover:shadow-2xl p-6 rounded-md border m-5 md:flex-1"
          data-aos="fade-right"
        >
          <div class="flex">
            <img src="assets/images/2/module2_icon9.svg" alt="" />
            <p>01</p>
          </div>
          <div class="p-5">
            <h1 class="text-gray-600">МАГАЗИН ПРОДАЕТ НА Я.МАРКЕТЕ</h1>
            <h1 class="text-gray-700 text-xl">
              <b>Увеличиваем продажи</b>
            </h1>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1
          data-aos="fade-down"
          class="text-4xl font-bold text-blue-700 z-10 text-center"
        >
          Наши гарантии
        </h1>
        <p
          data-aos="fade-up"
          style="font-size: 8rem"
          class="item-center font-bold absolute left-48 text-gray-300 z-0"
        >
          3
        </p>
      </div>

      <div class="mb-64 flex justify-center">
        <div
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 justify-center"
        >
          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="assets/images/2/module2_icon4.svg"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">
                Заключаем договор на <br />
                разработку интернет- <br />магазина
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="assets/images/2/module2_icon4.svg"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">
                Заключаем договор на <br />
                разработку интернет- <br />магазина
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="assets/images/2/module2_icon4.svg"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">
                Заключаем договор на <br />
                разработку интернет- <br />магазина
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="assets/images/2/module2_icon4.svg"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">
                Заключаем договор на <br />
                разработку интернет- <br />магазина
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="assets/images/2/module2_icon4.svg"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">
                Заключаем договор на <br />
                разработку интернет- <br />магазина
              </p>
            </div>
          </div>

          <div class="p-6 rounded-md m-5" data-aos="fade-up">
            <div class="mx-auto cursor-pointer">
              <img
                src="assets/images/2/module2_icon4.svg"
                alt=""
                class="p-8 border-8 border-blue-700"
              />
              <!--                    <p>01</p>-->
              <p class="text-gray-600 text-lg pt-5">
                Заключаем договор на <br />
                разработку интернет- <br />магазина
              </p>
            </div>
          </div>
        </div>
      </div>

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

      <div class="mr-4 sm:mr-4 md:mr-16">
        <div
          class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32"
          data-aos="fade-right"
        >
          <div class="flex justify-center items-center sm:pl-20 sm:pt-5">
            <h1
              class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10"
            >
              Почему мы разрабатываем <br />
              интернет магазины на 1С-Битрикс?
            </h1>
            <p
              style="font-size: 8rem"
              class="item-center font-bold absolute left-48 text-gray-600 z-0 opacity-50"
            >
              4
            </p>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center m-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
          Кейсы
        </h1>
        <p
          data-aos="fade-down"
          style="font-size: 8rem"
          class="item-center font-bold absolute left-48 text-gray-300 z-0"
        >
          5
        </p>
      </div>
      <div class="flex justify-center bg-green-500 p-10 lg:p-10 xl:p-20">
        <div class="text-white grid grid-cols-1 items-center sm:grid-cols-2">
          <div class="sm:px-8 lg:px-8">
            <img
              src="https://oe.uz/local/templates/oe/media/images/online-store/module6_img01.png"
              alt=""
            />
          </div>
          <div class="sm:px-8 lg:px-8 text-center 2xl:text-left">
            <div class="text-2xl mb-8" data-aos="fade-up">
              <p class="p-2 text-3xl"><b>24 Pharm</b></p>

              <p class="p-1 text-2xl"><b>Тип сайта:</b></p>
              <p class="p-1 text-2xl">Интернет-магазин</p>

              <p class="p-1 text-2xl"><b>Направления:</b></p>
              <p class="p-1 text-2xl">Онлайн-аптека</p>

              <p class="p-1 text-2xl"><b>Технология:</b></p>
              <p class="p-1 text-2xl">1С Битрикс</p>
            </div>
            <div class="">
              <a
                href=""
                class="text-lg bg-white rounded-full text-green-500 px-8 py-3 transition duration-300 ease-in-out mr-6"
              >
                Смотреть кейс
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center bg-red-500 p-10 lg:p-10 xl:p-20">
        <div class="text-white grid grid-cols-1 items-center sm:grid-cols-2">
          <div class="sm:px-8 lg:px-8 text-center 2xl:text-right">
            <div class="text-2xl mb-8" data-aos="fade-up">
              <p class="p-2 text-2xl"><b>Chinbozor ©</b></p>

              <p class="p-1 text-2xl"><b>Тип сайта:</b></p>
              <p class="p-1 text-2xl">Интернет-магазин</p>

              <p class="p-1 text-2xl"><b>Направления:</b></p>
              <p class="p-1 text-2xl">Всё для дома</p>

              <p class="p-1 text-2xl"><b>Технология:</b></p>
              <p class="p-1 text-2xl">1С Битрикс</p>
            </div>
            <a
              href=""
              class="text-lg bg-white rounded-full text-red-500 px-8 py-3 transition duration-300 ease-in-out"
            >
              Смотреть кейс
            </a>
          </div>
          <div class="sm:px-8 lg:px-8 order-first sm:order-none">
            <img
              src="https://oe.uz/local/templates/oe/media/images/online-store/module6_img02.png"
              alt=""
            />
          </div>
        </div>
      </div>

      <div class="flex justify-center bg-red-300 p-10 lg:p-10 xl:p-20">
        <div class="text-white grid grid-cols-1 items-center sm:grid-cols-2">
          <div class="sm:px-8 lg:px-8">
            <img
              src="https://oe.uz/local/templates/oe/media/images/online-store/module6_img03.png"
              alt=""
            />
          </div>
          <div class="sm:px-8 lg:px-8 text-center 2xl:text-left">
            <div class="text-2xl mb-8" data-aos="fade-up">
              <p class="p-2 text-3xl"><b>Modo ©</b></p>

              <p class="p-1 text-2xl"><b>Тип сайта:</b></p>
              <p class="p-1 text-2xl">Интернет-магазин</p>

              <p class="p-1 text-2xl"><b>Направления:</b></p>
              <p class="p-1 text-2xl">Одежда и обувь</p>

              <p class="p-1 text-2xl"><b>Технология:</b></p>
              <p class="p-1 text-2xl">1С Битрикс</p>
            </div>
            <a
              href=""
              class="text-lg bg-white rounded-full text-red-300 px-8 py-3 transition duration-300 ease-in-out"
            >
              Смотреть кейс
            </a>
          </div>
        </div>
      </div>

      <div
        class="flex justify-center text-center items-center mt-40 mb-20 relative"
      >
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
          Своих не бросаем!
        </h1>
        <p
          data-aos="fade-down"
          style="font-size: 8rem"
          class="item-center font-bold absolute left-48 text-gray-300 z-0"
        >
          6
        </p>
      </div>

      <div>
        <p class="text-center p-10 text-gray-700 text-2xl" data-aos="fade-down">
          После разработки помогаем развивать проект. <br />
          Поэтому Вы всегда можете рассчитывать на:
        </p>
        <div class="flex justify-center">
          <div
            class="grid grid-cols-1 sm:grid-cols-3 text-center items-center text-gray-700 text-lg mt-10"
          >
            <div class="mx-20" data-aos="fade-up">
              <img
                src="assets/images/3/module7_icon1.svg"
                alt=""
                class="mx-auto"
              />
              <p class="text-base">Поддержку интернет магазина</p>
            </div>

            <div class="mx-20" data-aos="fade-up">
              <img
                src="assets/images/3/module7_icon2.svg"
                alt=""
                class="mx-auto"
              />
              <p class="text-base">Рекламу продукции</p>
            </div>

            <div class="mx-20" data-aos="fade-up">
              <img
                src="assets/images/3/module7_icon3.svg"
                alt=""
                class="mx-auto"
              />
              <p class="text-base">Продвижение сайта</p>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center p-5 lg:p-10 xl:p-20">
        <div
          class="grid grid-cols-1 items-center sm:grid-cols-2 lg:grid-cols-3"
          data-aos="fade-right"
        >
          <div class="lg:col-span-2">
            <p class="text-blue-700 text-xl">
              <b>БУДУЩЕЕ ECOMMERCE УЖЕ НАСТУПИЛО!</b>
            </p>
            <p
              style="line-height: 3.2rem"
              class="text-blue-700 text-3xl md:text-5xl py-10"
            >
              <b>Интернет-магазин + CRM на <br />1С-Битрикс24</b>
            </p>
            <p class="text-gray-700 text-xl py-5 pb-10">
              Испытайте уникальную торговую платформу, которая <br />
              объединяет все каналы продаж
            </p>

            <a
              href=""
              class="text-lg bg-blue-700 rounded-full text-white px-8 py-3 transition duration-300 ease-in-out"
            >
              Заказать консультацию
            </a>
          </div>
          <div
            data-aos="fade-left"
            class="sm:px-8 lg:px-8 pt-8 flex justify-center"
          >
            <img
              src="https://oe.uz/local/templates/oe/media/images/online-store/module8_img1.png"
              alt=""
            />
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
                <h1 class="text-3xl font-bold text-white z-10">Почему мы?</h1>
                <p
                  style="font-size: 8rem"
                  class="item-center font-bold absolute left-48 text-gray-500 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-white text-md p-10 pt-10 text-center">
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
                  style="font-size: 8rem"
                  class="item-center font-bold absolute left-48 text-gray-500 z-0"
                >
                  7
                </p>
              </div>
              <p class="text-white text-base text-md p-5 pt-10 text-center">
                Потому что у нас Вы можете создать по-настоящему классный сайт,
                со всеми нужными Вам функциями
              </p>
            </div>
          </div>

          <div class="pt-20">
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/bx-cert.jpg"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/bx-cert2.jpg"
                  alt=""
                />
              </div>
            </div>
            <div class="grid grid-cols-2 max-w-md">
              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/bx-cert3.jpg"
                  alt=""
                />
              </div>

              <div class="p-5">
                <img
                  class=""
                  src="https://oe.uz/local/templates/oe/media/images/online-store/bx-cert4.jpg"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex justify-center items-center my-20 relative">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
          Цены и тарифы
        </h1>
        <p
          data-aos="fade-down"
          style="font-size: 8rem"
          class="item-center font-bold absolute left-48 text-gray-400 z-0"
        >
          8
        </p>
      </div>

      <div
        class="grid grid-cols-1 lg:grid-cols-3 container m-auto justify-center lg:p-20"
        data-aos="fade-right"
      >
        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-2xl rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>Start</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                <span class="text-gray-600">35 000 000</span> uzs
              </h1>
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
            <div class="justify-center flex">
              <a
                href=""
                style="margin-bottom: 7.5rem"
                class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                Заказать
              </a>
            </div>
          </div>
        </div>

        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>Бизнес</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                <span class="text-gray-600">120 000 000</span> uzs
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
              <li>Система управления сайтом 1С битрикс</li>
              <li>Лицензия бизнес редакция&nbsp;</li>
              <li>Готовое решение с маркетплейс</li>
              <li>Мобильное приложение IOS, Android</li>
              <li>
                Система оплаты Click,Payme, Visa, Mastercard, Paypal&nbsp;
              </li>
              <li>Домен в ПОДАРОК</li>
              <li>Телеграм бот в ПОДАРОК</li>
              <li>Система лояльности в ПОДАРОК</li>
              <li>Гарантийная поддержка в течение года</li>
              <li>Обучение – 12 часов</li>
              <li>Срок&nbsp;от 60 дней</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""
                style="margin-bottom: 4.5rem"
                class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                Заказать
              </a>
            </div>
          </div>
        </div>

        <div class="flex-1 transform hover:scale-110 duration-200">
          <div
            class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0"
          >
            <p class="text-3xl text-white text-center"><b>VIP</b></p>
          </div>
          <div class="shadow-2xl rounded-2xl px-10 py-10 m-5">
            <div class="text-center">
              <h1 style="font-size: 25px" class="border-b py-5 text-gray-600">
                <span class="text-gray-600">150 000 000</span> uzs
              </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3">
              <li>Система управления сайтом 1С битрикс</li>
              <li>Лицензия бизнес редакция&nbsp;</li>
              <li>Готовое решение с маркетплейс</li>
              <li>Интеграция и внедрение складского учёта (Мой Склад)</li>
              <li>Мобильное приложение IOS, Android</li>
              <li>Сео оптимизация сайта&nbsp;</li>
              <li>
                Система оплаты Click,Payme, Visa, Mastercard, Paypal&nbsp;
              </li>
              <li>Домен в ПОДАРОК</li>
              <li>Телеграм бот в ПОДАРОК</li>
              <li>Система лояльности в ПОДАРОК</li>
              <li>Гарантийная поддержка в течение года</li>
              <li>Обучение – 12 часов</li>
              <li>Срок&nbsp;от 90 дней</li>
            </ul>
            <div class="justify-center flex">
              <a
                href=""
                class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6"
              >
                Заказать
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mr-4 sm:mr-4 md:mr-16">
        <div
          class="h-48 bg-blue-700 left-0 relative md:w-full rounded-r-2xl pt-1 z-20 mt-32 flex flex-col justify-center items-center"
          data-aos="fade-right"
        >
          <div class="flex justify-center items-center sm:pl-20">
            <h1
              class="text-2xl sm:text-4xl font-bold text-white z-10 p-5 leading-10"
            >
              Разработка интернет магазина
            </h1>
            <p
              style="font-size: 8rem"
              class="item-center font-bold absolute left-48 text-gray-600 z-0 opacity-50"
            >
              9
            </p>
          </div>
        </div>
      </div>

      <div class="bg-gray-400 h-12 z-10" data-aos="fade-up-right"></div>

      <div class="bg-gray-200 z-0" data-aos="fade-up-right">
        <div style="font-size: 17px" class="pt-20 text-gray-700 pb-20">
          <div class="flex justify-center">
            <div class="z-0 text-gray-600 text-lg max-w-3xl text-center">
              <p>
                Нужны сайты на заказ или хотите купить сайт в Ташкенте? У нас
                работают опытные разработчики сайтов и программисты в
                Узбекистане, которые выполняют свою работу на все 100%. Мы
                предлагаем не только разработку веб сайта, но и обеспечиваем
                техническую поддержку сайтов в Узбекистане. Также мы занимаемся
                разработкой веб приложений в Ташкенте для вашего бизнеса.
                Заказать Интернет-магазин под ключ. Веб сайт, заказать сайт,
                лучшие программисты, лучшая веб студия, сайт визитка в ташкенте,
                разработка веб приложений ташкент, сайты на заказ, разработка
                интернет магазина ташкент, как создать интернет-магазин
                узбекистан, разработка веб-сайта, битрикс партнер узбекистан,
                сайт на 1с битрикс, продающий сайт, промо сайт, заказать лендинг
                пейдж в ташкенте,
              </p>
            </div>
          </div>

          <div class="flex justify-end mt-32">
            <div class="flex">
              <div class="flex justify-center items-center">
                <div class="relative px-2 sm:px-10 leading-10">
                  <h1
                    data-aos="fade-up"
                    class="text-4xl font-bold text-blue-700 z-10"
                  >
                    Другие <br />
                    услуги
                  </h1>
                </div>
              </div>

              <div
                style="height: 10rem"
                class="bg-blue-700 max-w-5xl rounded-l-2xl pt-5 z-20"
                data-aos="fade-up-left"
              >
                <div
                  class="splide sm:px-24 justify-center items-center grid grid-cols-1"
                >
                  <div class="splide__track">
                    <ul class="splide__list">
                      <li class="splide__slide">
                        <div
                          class="shadow-lg hover:bg-blue-400 hover:text-white bg-white mx-3 px-10 py-5 rounded-lg"
                        >
                          <img
                            class="mx-auto p-3"
                            src="assets/images/4/creative_dark.svg"
                            alt=""
                          />
                          <p class="text-center">Разработка <br />брендбуков</p>
                        </div>
                      </li>
                      <li class="splide__slide">
                        <div
                          class="shadow-lg hover:bg-blue-400 hover:text-white bg-white mx-3 px-10 py-5 rounded-lg"
                        >
                          <img
                            class="mx-auto p-3"
                            src="assets/images/4/digital-marketing_dark.svg"
                            alt=""
                          />
                          <p class="text-center">
                            СММ <br />
                            продвижение
                          </p>
                        </div>
                      </li>
                      <li class="splide__slide">
                        <div
                          class="shadow-lg hover:bg-blue-400 hover:text-white bg-white mx-3 px-10 py-5 rounded-lg"
                        >
                          <img
                            class="mx-auto p-3"
                            src="assets/images/4/loupe_dark.svg"
                            alt=""
                          />
                          <p class="text-center">
                            Контекстная <br />
                            реклама
                          </p>
                        </div>
                      </li>
                      <li class="splide__slide">
                        <div
                          class="shadow-lg hover:bg-blue-400 hover:text-white bg-white mx-3 px-10 py-5 rounded-lg"
                        >
                          <img
                            class="mx-auto p-3"
                            src="assets/images/4/loupe_dark.svg"
                            alt=""
                          />
                          <p class="text-center">
                            SEO <br />
                            продвижение
                          </p>
                        </div>
                      </li>
                      <li class="splide__slide">
                        <div
                          class="shadow-lg hover:bg-blue-400 hover:text-white bg-white mx-3 px-10 py-5 rounded-lg"
                        >
                          <img
                            class="mx-auto p-3"
                            src="assets/images/4/web-site_dark.svg"
                            alt=""
                          />
                          <p class="text-center">
                            Разработка <br />
                            сайтов
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div></div>
          </div>
        </div>
      </div>
    </main>


@endsection


@section('js')

@endsection
