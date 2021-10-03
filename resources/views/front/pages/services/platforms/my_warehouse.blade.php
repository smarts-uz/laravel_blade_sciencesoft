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
              {{t('Program for')}} < br> {{t('automation of ')}}< br> {{t('trade in')}} < br> {{t('Tashkent')}}
            </div>
            <div class="lg:px-20">
              <a
                href="#"
                class="bg-blue-700 rounded-full text-white px-5 py-3 transition duration-300 ease-in-out hover:bg-blue-900 lg:mr-6"
              >
                {{t('Get a consultation')}}
              </a>
            </div>
          </div>

          <div data-aos="fade-left" class="my-8 flex justify-center">
            <img src="{{asset('images/open_engine/my-hours/1.svg')}}" alt="" />
          </div>
        </div>
      </div>




<div class="bg-gray-100">


<div class="flex justify-center">
    <div class="grid">
        <p class="text-gray-700 text-center text-blue-700 text-4xl font-bold my-10" data-aos="fade-right">{{t('Who benefits?')}}</p>
        <div class="grid grid-cols-1 md:grid-cols-4 container mx-auto gap-5 text-lg" data-aos="fade-down">
            <p class="text-blue-700 font-bold cursor-pointer">{{t('For retail use')}}</p>
            <p class="text-blue-700 font-bold cursor-pointer">{{t('For wholesale trade')}}</p>
            <p class="text-blue-700 font-bold cursor-pointer">{{t('For an online store')}}</p>
            <p class="text-blue-700 font-bold cursor-pointer">{{t('For production')}}</p>
        </div>
    </div>
</div>

<div class="container mx-auto">

<div class="swiper-container-three ">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2  container m-auto items-center p-10 pt-20 mt-10">
                <div class="flex justify-center">
                    <img src="{{asset('images/open_engine/my-hours/2.svg')}}" alt="">
                </div>
                <div class="text-lg " data-aos="fade-up">
                    <p class="pb-10 text-gray-600">{{t('The system')}}<strong> {{t('automation of wholesale trade')}} < /strong> {{t('controls the calculations between the company,')}}
                                                   {{t('suppliers and end customers. Records the terms of the contract and their execution, the balance of the money')}}
                                                   {{t('on the account. Notifies if there is an unpaid invoice.')}}<br><br> {{t('Helps to adjust mutual settlements')}}
                                                   {{t('and the balances on the personal account and the cash register. Monitors the execution of bank and cash payments')}}
                                                   {{t('operations. And also')}} <strong>{{t('a program for wholesale trade')}} </strong>{{t('to track the receipt of full')}}
                                                   {{t('or partial payments.')}}</p>

                    <a href=""
                       class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                       Попробовать
                    </a>
                </div>

            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20 mt-10">

                <div class="flex justify-center">
                    <img src="{{asset('images/open_engine/my-hours/3.svg')}}" alt="">
                </div>
                <div class="text-lg " data-aos="fade-up">
                    <p class="pb-10 text-gray-600">{{t('The system')}}<strong> {{t('automation of wholesale trade')}} < /strong> {{t('controls the calculations between the company,')}}
                                                   {{t('suppliers and end customers. Records the terms of the contract and their execution, the balance of the money')}}
                                                   {{t('on the account. Notifies if there is an unpaid invoice.')}}<br><br>{{t(' Helps to adjust mutual settlements')}}
                                                   {{t('and the balances on the personal account and the cash register. Monitors the execution of bank and cash payments')}}
                                                   {{t('operations. And also')}} <strong>{{t('a program for wholesale trade')}} < /strong>{{t('to track the receipt of full')}}
                                                   {{t('or partial payments.')}}</p>

                    <a href=""
                       class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                       Попробовать
                    </a>
                </div>

            </div>
        </div>
        <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20 mt-10">

                <div class="flex justify-center">
                    <img src="{{asset('images/open_engine/my-hours/4.svg')}}" alt="">
                </div>
                <div class="text-lg " data-aos="fade-up">
                    <p class="pb-10 text-gray-600"><strong>{{t('Production automation </strong>or < strong> production system')}} < / strong>{{t('provides')}}
                                                           {{t('the ability to write off products from the warehouse, to enter the received components and spare parts,')}}
                                                           {{t('automatically calculate the cost of received parts and materials. In addition, there are')}}
                                                           {{t('the ability to plan production operations, reserve materials or raw materials, and')}}
                                                           {{t('create technological operations according to the orders received in the production shops.')}}</p>

                    <p class="pb-10"><strong>{{t('The program for production</strong> helps to replenish stocks in a timely manner, notifies of')}}
                                             {{t('their depletion and facilitates the process of planning purchases based on data from sales statistics. To your own')}}
                                             {{t('all this ensures uninterrupted capacity utilization in production.')}}</p>

                    <a href=""
                       class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                        To try
                    </a>
                </div>

            </div>
        </div>

        <div class="swiper-slide">
            <div class="grid grid-cols-1 lg:grid-cols-2 container m-auto items-center p-10 pt-20 mt-10">

                <div class="flex justify-center">
                    <img src="{{asset('images/open_engine/my-hours/5.svg')}}" alt="">
                </div>
                <div class="text-lg " data-aos="fade-up">
                    <p class="pb-10 text-gray-600"><strong>{{t('Production automation')}} </strong>{{t('or ')}}< strong> {{t('production system')}} < / strong>{{t('provides')}}
                                                           {{t('the ability to write off products from the warehouse, to enter the received components and spare parts,')}}
                                                           {{t('automatically calculate the cost of received parts and materials. In addition, there are')}}
                                                           {{t('the ability to plan production operations, reserve materials or raw materials, and')}}
                                                          {{t(' create technological operations according to the orders received in the production shops.')}}</p>
                    <a href=""
                       class=" text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                      To try
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


<div class="flex justify-center">
    <p class="text-gray-700 text-center text-blue-700 text-4xl font-bold my-10 leading-10" data-aos="fade-left">{{t('Opportunities ')}}<br>
        {{t('My warehouse')}}</p>
</div>


<div class="container mx-auto max-w-7xl px-4">
    <div class=" grid grid-cols-1 lg:grid-cols-2 my-40 justify-center ">
        <div data-aos="fade-right">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">{{t('Customer Base')}}</p>
            <p class="text-gray-700 text-lg"><b>{{t('Sales automation')}}</b> {{t('or')}} < b>{{t('store automation')}} < / b>
                                                {{t('provides for keeping records of customers and')}}
                                                {{t('prisoners')}}
                                               {{t(' contracts, setting tasks and reminders to the sales department, receiving notifications about status changes')}}
                                                {{t('tasks or the appearance of comments. It is possible to connect to amoCRM.')}}
                                                <br> <br>
                                                < b>{{t('The sales accounting system')}} < / b> {{t('stores data about contractors and their contact persons in a convenient directory.')}}
                                                {{t('Whole')}}
                                                {{t('the information about the client is located in one window. The database records the entire history of working with a legal entity,')}}
                                                {{t('information about the debt and the amount of sales, all archived documents are stored.')}} < b>{{t('Process automation')}} < / b> {{t('simplifies')}}
                                                {{t('managing a customer or individual order through a sales funnel.')}}</p>
        </div>
        <div class="flex justify-center items-center" data-aos="zoom-in">
            <img src="{{asset('images/open_engine/my-hours/6.png')}}" alt="">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div class="flex justify-center items-center order-last lg:order-none" data-aos="zoom-in">
            <img src="{{asset('images/open_engine/my-hours/7.png')}}" alt="">
        </div>
        <div data-aos="fade-left">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">{{t('Procurement and warehouse accounting')}}</p>
            <p class="text-gray-700 text-lg">{{t('The automation system')}} < / b> {{t('helps to estimate the actual quantity')}}
                                             {{t('the remaining balance and the value of')}}
                                             {{t('reserved')}}
                                             {{t('products. The registry<b>of the automation system')}} < /b> {{t('stores information about the parameters of the product, its')}}
                                             {{t('current')}}
                                             {{t('the barcode and serial number. The information is easily imported from Excel.')}}
                                             <br><br>
                                             {{t('The history of all purchase operations is stored. Filtering by product or counterparty is possible. Can')}}
                                             {{t('work with a commission product. In addition, you can place requests to contractors and suppliers at')}}
                                            {{t(' according to the statistics of goods sold or replenishment of the warehouse to the minimum threshold value. And in the')}}
                                             {{t('case of direct deliveries, purchases for counterparties are formed from consumer requests.')}}
            </p>
        </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div data-aos="fade-right">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">{{t('Access restrictions, branches.')}}</p>
            <p class="text-gray-700 text-lg"><b>{{t('The warehouse automation program < / b> allows you to combine legal entities,')}}
                                             {{t('branches, warehouses and offices in a single system')}}
                                            {{t(' the system')}}
                                            {{t('at no extra cost. The < b>warehouse program < /b> provides control over the rights of users, their')}}
                                            {{t(' roles, and')}}
                                             {{t('opportunities. In the < b>program for the store')}}</b> {{t('it is possible to close access to some sections,')}}
                                             {{t('prohibit making changes in the closed period, etc.')}}
                                             <br><br>
                                             <b>{{t('The program for the store')}}< / b> {{t('is unique in that all the actions of the staff are reflected in the general feed')}}
                                             {{t('events.')}}
            </p>
        </div>
        <div class="flex justify-center items-center" data-aos="zoom-in">
            <img src="{{asset('images/open_engine/my-hours/8.png')}}" alt="">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div class="flex justify-center items-center order-last lg:order-none" data-aos="zoom-in">
            <img src="{{asset('images/open_engine/my-hours/9.png')}}" alt="">
        </div>
        <div data-aos="fade-left">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">{{t('Production operations')}}</p>
            <p class="text-gray-700 text-lg"><b>{{t('The program for warehouse accounting</b> calculates the amount of raw materials,')}}
                                             {{t('materials, components and finished products')}}
                                             {{t('products in warehouses.')}} < b>{{t('The program for the warehouse')}} < / b> {{t('automatically writes off the materials and calculates')}}
                                             {{t('base price')}}
                                             {{t('the product.')}}
                                             <br><br>
                                             <b>{{t('The program for production')}}</b> {{t('provides for the possibility of planning the needs for materials or')}}
                                             {{t('components.')}}
            </p>
        </div>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div data-aos="fade-right">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">{{t('Analytical reports')}}</p>
            <p class="text-gray-700 text-lg">
               {{t('The program')}} < b>{{t('store automation')}} < /b> {{t('records the balance of product names in the warehouse, reflects')}}
               {{t('statistics')}}
               {{t('sales, the percentage of profit for each product and working capital. The dashboard <b>of the trading system')}}</b>
               {{t('or the')}}
               {{t('" Manager Screen " displays data on the movement of funds, debts and mutual settlements.')}}
               <br><br>
               < b>{{t('Retail automation')}} < / b> {{t('provides for the preparation of a summary report on retail outlets and')}}
               {{t('automatically send them via email.')}}
            </p>
        </div>

        <div class="flex justify-center items-center" data-aos="zoom-in">
            <img src="{{asset('images/open_engine/my-hours/10.png')}}" alt="">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 my-40">
        <div class="flex justify-center items-center order-last lg:order-none" data-aos="zoom-in">
            <img src="{{asset('images/open_engine/my-hours/11.png')}}" alt="">
        </div>

        <div data-aos="fade-left">
            <p class="text-gray-700 text-blue-700 text-3xl font-bold mb-10">{{t('Mobile apps for iOS and Android')}}</p>
            <p class="text-gray-700 text-lg">
               <b>{{t('The program for the warehouse')}} < / b> {{t('MoySklad has a mobile application. The mobile app stores the following data:')}}
               {{t('list  products, their photos and descriptions. The search is simple and fast: by name or article.')}}
               <br><br>
               <b>{{t('In the sales app')}}< / b>, {{t('you can compose customer orders, issue invoices, and')}}
               {{t('issue shipping certificates,')}}
               {{t('send to print. All notifications come in the app < b>programs for the store and warehouse.')}}</b>
               <br><br>
               {{t('It also stores all the companys statistics: the number of balances and reserves, the number of positions sold in')}}
               {{t('cash and percentage terms, the receipt and expenditure of funds, data for each point of sale and cash')}}
               {{t('register. The report is generated for the selected period: day, week, or month.')}}
            </p>
        </div>


    </div>

</div>

<!---->


<div class="bg-gray-100 h-12 mt-64"></div>

<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-3xl  -mt-56 bg-blue-700 ">
    <div class="grid grid-cols-1 md:grid-cols-3 relative">
        <div class="text-white z-10 col-span-2 md:p-10 pb-8 px-4" data-aos="fade-right">
            <p class="text-center  font-bold text-4xl leading-10">{{t('Manage your business wherever it is convenient')}}</p>
            <p class="py-10 text-lg text-center">{{t('Try the My Warehouse mobile app. Fill up the catalog')}}
                                                {{t(' products, view orders and reports on')}}
                                                 {{t('in sales, assign tasks to employees-anytime, anywhere')}}.
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
        <div class="order-first md:order-none absolute w-full h-96 right-0" data-aos="fade-right">
            <img src="https://oe.uz/local/templates/oe/media/images/my-warehouse/app_bg.png" alt="" class="w-full h-full z-0">
        </div>
    </div>
</div>


<div>
    <p class="text-gray-700 text-blue-700 text-5xl font-bold mb-10 flex justify-center mt-40 mb-10"
       data-aos="fade-right">{{t('How we work')}}</p>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2  container mx-auto m-10" data-aos="fade-up">
    <div class="self-end">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">{{t('On the basis of it, we select < br> suitable specifically you need')}} < br> {{t('tools')}}</p>
        <img src="{{asset('images/open_engine/my-hours/12.svg')}}" alt="" class="mx-auto">
    </div>
    <div class="self-end">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">{{t('We train your')}} < br> {{t('employees and')}} < br>{{t('manager')}}
        </p>
        <img src="{{asset('images/open_engine/my-hours/13.svg')}}" alt="" class="mx-auto">
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-3 container mx-auto m-10" data-aos="fade-up">
    <div>
        <img src="{{asset('images/open_engine/my-hours/14.svg')}}" alt="" class="mx-auto">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">{{t('Making a map of your')}} < br> {{t('business processes')}}</p>
    </div>
    <div>
        <img src="{{asset('images/open_engine/my-hours/15.svg')}}" alt="" class="mx-auto">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">{{t('Customizing the selected ')}}< br> {{t('tools for you')}}</p>
    </div>
    <div>
        <img src="{{asset('images/open_engine/my-hours/16.svg')}}" alt="" class="mx-auto">
        <p class="mx-auto text-gray-700 text-md text-center text-lg">{{t('We control')}} < br> {{t('correctness')}}</p>
    </div>
</div>

<!--    -->
<div class="mt-48">

        <div class="h-12"></div>
    </div>
    @include('front.Components.platformForm')
</div>

<div>
    <p class="text-gray-700 text-blue-700 text-5xl font-bold mb-10 flex justify-center mt-40 mb-10"
       data-aos="fade-right">100% {{t('security of your data')}}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 container mx-auto gap-10 max-w-7xl">
    <div data-aos="fade-right">
        <img src="{{asset('images/open_engine/my-hours/17.svg')}}" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">{{t('Hosting')}}</p>
        <p class="text-center text-xl text-gray-700">{{t('Our servers are located in reliable data centers in Moscow and')}}
                                                     {{t('St. Petersburg, which have several')}}
                                                     {{t('degrees of protection against emergencies.')}}</p>
    </div>

    <div data-aos="fade-up">
        <img src="{{asset('images/open_engine/my-hours/18.svg')}}" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">{{t('Data encryption')}}</p>
        <p class="text-center text-xl text-gray-700">{{t('All information transmitted by the MoiSklad service is encrypted')}}
                                                     {{t('using GeoTrust 256-bit SSL certificates. Data interception is not possible.')}}</p>
    </div>

    <div data-aos="fade-left">
        <img src="{{asset('images/open_engine/my-hours/19.svg')}}" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">{{t('The data belongs to you')}}</p>
        <p class="text-center text-xl text-gray-700">{{t('You can always transfer all your data from the MoySklad service to')}}
                                                    {{t(' Microsoft Excel, Access, or any other database.')}}</p>
    </div>

    <div data-aos="fade-right" class="mt-20">
        <img src="{{asset('images/open_engine/my-hours/20.svg')}}" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">{{t('Backup data')}}</p>
        <p class="text-center text-xl text-gray-700">{{t('The data is automatically copied between servers in different cities.')}}
                                                     {{t('Replication')}} <br> {{t('occurs in real ')}}<br>{{t('time.')}}</p>
    </div>

    <div data-aos="fade-up" class="mt-20">
        <img src="{{asset('images/open_engine/my-hours/21.svg')}}" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">{{t('High-quality')}}
                                                                                        {{t('administration')}}</p>
        <p class="text-center text-xl text-gray-700">{{t('Our servers are serviced daily by professional system engineers.')}}
                                                     {{t('administrators.')}}</p>
    </div>

    <div data-aos="fade-left" class="mt-20">
        <img src="{{asset('images/open_engine/my-hours/22.svg')}}" alt="" class="mx-auto">
        <p class="text-blue-700 p-5 font-bold text-2xl flex justify-center text-center">{{t('Delineation system')}}
                                                                                        {{t('access rights')}}</p>
        <p class="text-center text-xl text-gray-700">{{t('Your employees will only work with that information and features')}}
                                                     {{t('the systems that you will')}} <br> {{t('grant them access to.')}}</p>
    </div>
</div>


<div data-aos="zoom-in" class="container mx-auto bg-white shadow-lg rounded-3xl  p-20 mt-20 ">
    <div class="flex justify-center items-center relative ">
        <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Cases')}}</h1>


 </div>
     <div class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center  pt-20"
              >
                <div class="">
                  <img src="https://oe.uz/upload/iblock/c10/c10f9e891a4c77f990cd15917d03642c.png" alt="" />
                </div>
                <div class="text-lg md:text-xl p-5" data-aos="fade-up">
                  <p class="text-blue-700"><b>{{t('Client:')}}</b></p>
                  <p class="text-gray-500">Profi Tools</p>

                  <p class="text-blue-700"><b>{{t('Direction:')}}</b></p>
                  <p class="text-gray-500">{{t('Wholesale and retail trade')}}</p>

                  <p class="text-blue-700"><b>{{t('Information:')}}</b></p>
                  <p class="text-gray-500">{{t('The company is engaged in the sale of small')}} < br> {{t('construction and industrial equipment in wholesale, and')}} < br> {{t('in retail. It has 5 branches in the city')}}.</p>

                  <p class="text-blue-700"><b>{{t('Result:')}}</b></p>
                  <p class="text-gray-500">{{t('The MoySklad program was successfully implemented in all branches of the company. Even the employees in the ')}}<br>
                   {{t('at the age of over 50 years, they were fully trained to work with the system on a computer and on a smartphone.')}}							</p>

                  <p class="border-b pb-5 mb-10"></p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                    {{t('order')}}
                  </a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div
                class="grid sm:grid-cols-2 grid-cols-1 container m-auto items-center  pt-20"
              >
                <div class="">
                  <img src="https://oe.uz/upload/iblock/c10/c10f9e891a4c77f990cd15917d03642c.png" alt="" />
                </div>
                <div class="text-lg md:text-xl p-5" data-aos="fade-up">
                  <p class="text-blue-700"><b>{{t('Client:')}}</b></p>
                  <p class="text-gray-500">Formulamarket.uz</p>

                  <p class="text-blue-700"><b>{{t('Direction:')}}</b></p>
                  <p class="text-gray-500">{{t('Online-store')}}</p>

                  <p class="text-blue-700"><b>{{t('Information:')}}</b></p>
                  <p class="text-gray-500">{{t('The company sells tires and wheels for')}} < br> {{t('cars through branded stores, and through')}} < br> {{t('Online-store.')}}</p>

                  <p class="text-blue-700"><b>{{t('Result:')}}</b></p>
                  <p class="text-gray-500">{{t('The MoySklad system was integrated with the Online-store, and the entire turnover process was fully automated.')}}</p>

                  <p class="border-b pb-5 mb-10"></p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                   order
                  </a>
                </div>
              </div>
            </li>
            <li class="splide__slide">
              <div
                class="grid lg:grid-cols-2 grid-cols-1 container m-auto items-center  pt-20">
                <div class="">
                  <img src="https://oe.uz/upload/iblock/c10/c10f9e891a4c77f990cd15917d03642c.png" alt="" />
                </div>
                <div class="text-lg md:text-xl p-5" data-aos="fade-up">
                  <p class="text-blue-700"><b>{{t('Client:')}}</b></p>
                  <p class="text-gray-500">Al-Pari</p>

                  <p class="text-blue-700"><b>{{t('Direction:')}}</b></p>
                  <p class="text-gray-500">{{t('Production')}}</p>

                  <p class="text-blue-700"><b>{{t('Information:')}}</b></p>
                  <p class="text-gray-500">{{t('The company is engaged in the production of confectionery products . Sales are made through')}} < br> {{t('branded stores.')}}</p>

                  <p class="text-blue-700"><b>{{t('Result:')}}</b></p>
                  <p class="text-gray-500">{{t('Despite the complexity of the production process of')}} <br> {{t('confectionery, we managed to ')}}<br>
                  {{t('systematize all processes from the purchase and ')}}< br> {{t('calculation of raw materials, to accounting for sales at once in')}} <br> {{t('several branded stores.')}}</p>

                  <p class="border-b pb-5 mb-10"></p>

                  <a
                    href=""
                    class="text-md bg-blue-700 rounded-full text-white px-8 py-2 transition duration-300 ease-in-out hover:bg-blue-600 mr-6"
                  >
                  order
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>



<div class="grid grid-cols-1 lg:grid-cols-2 sm:px-20 relative sm:my-20">
    <div style="border-radius: 0 0 200px 0" class="rounded-br-3xl bg-blue-700 py-20 m-10 px-20 " data-aos="fade-right">
        <div class="flex justify-center items-center my-20 relative ">
            <h1 class="text-3xl md:text-5xl font-bold text-white z-10 text-whites ">{{t('Certificate of')}} < br> {{t('official')}}
                                                                                    < br> {{t('partner')}}</h1>
        </div>
    </div>


    <div data-aos="fade-left">
        <img src="{{asset('images/open_engine/my-hours/23.png')}}" alt="" class="max-w-md">
    </div>

</div>

<div>
    <p class="text-gray-700 text-blue-700 text-5xl font-bold mb-10 flex justify-center mt-40 mb-10"
       data-aos="fade-right">{{t('Pricing plans')}}</p>
</div>

<div class=" max-w-3xl flex sm:container m-auto justify-between  sm:p-20" data-aos="fade-right">

    <div class="flex-1 transform hover:scale-110 duration-200">
        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-3xl text-white text-center"><b>{{t('Quick start')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-3xl px-10 py-10 m-5 ">

            <ul class=" text-gray-700 text-lg py-10 border-b border-gray-400">
                <li class="text-center text-3xl">{{t('Price:')}} <b>2 000 000 {{t('uzs')}}</b></li>
            </ul>
            <ul class="list-disc text-gray-700 text-lg p-5">
               <li>{{t('Process studies')}}</li>
               <li>{{t('Initial Setup')}}</li>
               <li>{{t('Training - 2 hours')}}</li>
            </ul>
            <div class=" justify-center flex ">
                <a href=""
                   class=" bg-blue-700 rounded-full text-white px-16 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900">
                    {{t('order')}}
                </a>
            </div>
        </div>
    </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-3 container m-auto justify-between  md:p-20" data-aos="fade-right">

    <div class="flex-1 transform hover:scale-110 duration-200">
        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-2xl text-white text-center"><b>{{t('Retail')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1  class="text-xl border-b py-5 text-gray-600">
                    {{t('from')}} <b>10 000 000</b> uzs
                </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>{{t('Process studies')}}</li>
                <li>{{t('Working in test mode')}}</li>
                <li>{{t('System Implementations')}}</li>
                <li>{{t('Training of up to 3 employees')}}</li>
                <li class="mb-20">{{t('Term from 5 days')}}</li>

            </ul>
            <div class=" justify-center flex">
                <a href=""
                   class=" bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                   To order
                </a>
            </div>
        </div>
    </div>


    <div class="flex-1 transform hover:scale-110 duration-200">

        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0">
            <p class="text-2xl text-white text-center"><b>{{t('Wholesale')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1  class="text-xl border-b py-5 text-gray-600">
                    {{t('from')}} <b>15 000 000</b> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>{{t('Process studies')}}</li>
                <li>{{t('Working in test mode')}}< / li>
                <li>{{t('System Implementations')}}< / li>
                <li>{{t('Training of up to 6 employees')}}< / li>
                <li class="mb-20">{{t('Term from 10 days')}}< / li>
            </ul>
            <div class=" justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    {{t('To order')}}
                </a>
            </div>
        </div>
    </div>


    <div class="flex-1 transform hover:scale-110 duration-200 ">

        <div class="shadow-lg rounded-t-3xl px-10 py-3 mx-5 bg-blue-700 -mb-16 z-0 ">
            <p class="text-2xl text-white text-center"><b>{{t('Production')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1  class="text-xl border-b py-5 text-gray-600">
                    {{t('from')}} <b>20 000 000</b> uzs</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
               <li>{{t('Process studies')}}</li>
               <li>{{t('Working in test mode')}}< / li>
               <li>{{t('System Implementations')}}< / li>
               <li>{{t('Training of up to 10 employees')}}< / li>
               <li class="mb-20">{{t('Term from 15 days')}}< / li>
            </ul>
            <div class=" justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    {{t('order')}}
                </a>
            </div>
        </div>
    </div>
</div>


<div class="max-w-5xl mx-auto bg-white shadow-lg rounded-3xl  bg-blue-700 ">
    <div class="grid grid-cols-1 sm:grid-cols-3 sm:p-10">
        <div class="text-white col-span-2 p-10" data-aos="fade-right">
            <p class="font-bold text-4xl leading-10">{{t('Try MySklad')}} <br>
                {{t('right now!')}}
            </p>
        </div>
        <div data-aos="fade-right" class=" flex items-center pb-4 pl-4">
            <a href=""
               class=" bg-white rounded-full text-blue-700 px-12  py-3 transition duration-300 ease-in-out mr-6">
              To try
            </a>
        </div>
    </div>
</div>

<!-- -->


<div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
     data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">{{t('Trade automation')}}</h1>
    </div>
</div>

<div class="bg-gray-100 h-12 z-10" data-aos="fade-right">

</div>


<div class="bg-gray-50 z-0" data-aos="fade-up">
    <div  class="lg:mx-24 mx-16 text-xl pt-20 text-gray-700 pb-20">

        <div class="z-0">
            <p>
               {{t('Dont know')}} <b>{{t('how to automate the store,')}}</b> {{t('or')}} <b>{{t('what program to use for trading?')}}< / b> {{t('Dont')}}
               {{t('do you know which program to choose for production automation?')}}< / b> {{t('The Moysklad program is included in the top')}}
              {{t(' programs')}}
               {{t('for automation of trade, warehouse, and production in Tashkent and in the CIS.')}}
               <b> {{t('Our solutions')}}:</b>
               <li>{{t('Trade Automation')}}< / li>
               <li>{{t('Store Automation')}}< / li>
               <li>{{t('Warehouse automation')}}< / li>
               <li>{{t('Automation of warehouse accounting')}}< / li>
               <li>{{t('Warehouse accounting')}}< / li>
               <li>{{t('Trade Management')}}< / li>
               <li>{{t('Inventory of materials in the warehouse')}}< / li>
               <li>{{t('Production program')}}< / li>

               {{t('The Moysklad program is one of the top programs for automation of trade, warehouse, and production in Tashkent and')}}
               {{t('in the CIS.')}}
           </p>
        </div>


    </div>

    <div class="flex justify-end pb-20">
        <div class="flex">
            <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10">
                 {{t('Other')}} <br/>
                 {{t('services')}}
                </h1>

            </div>

            @include('front.Components.platformFooter')
        </div>
        <div></div>
    </div>
</div>


</main>

@endsection


@section('js')

@endsection
