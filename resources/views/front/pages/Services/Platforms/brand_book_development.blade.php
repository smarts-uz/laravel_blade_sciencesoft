@extends('front.layout_platform')

@section('css')

@endsection

@section('main')

<main class="overflow-hidden">

<div class="bg-black h-auto px-4 pb-10">
        <div
          class="py-8 grid grid-cols-1 lg:text-left text-center md:grid-cols-2 md:container m-auto ms:px-16 md:pt-10"
        >
          <div data-aos="fade-right" class="flex justify-center items-center">
              <div>
                <div
                class="text-white text-4xl md:text-6xl font-semibold m-auto md:px-10 mb-12 tracking-wide"
              >
                {{t('Development of')}} <br> {{t('logo and')}} <br> {{t('Brandbooks')}}
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
            <p class=" text-center px-5 font-bold text-md mt-5 text-gray-700">{{t('Creative')}}</p>
        </div>
        <div data-aos="fade-left">
            <img src="{{asset('images/open_engine/book_development/2.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">{{t('Logo')}}</p>
        </div>
        <div data-aos="fade-up">
            <img src="{{asset('images/open_engine/book_development/3.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">{{t('Individual')}}</p>
        </div>
        <div data-aos="fade-right">
            <img src="{{asset('images/open_engine/book_development/4.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">{{t('Naming')}}</p>
        </div>
        <div data-aos="fade-right">
            <img src="{{asset('images/open_engine/book_development/5.svg')}}" alt="" class="m-auto">
            <p class="text-center px-5 font-bold text-md mt-5 text-gray-700">{{t('Brandbook')}}</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 sm:m-20 my-40">
    <div>
        <div class="flex justify-center mx-6 mt-10">
            <div class="text-4xl sm:text-5xl  leading-10 ">
                <div class="flex">
                    <p class="font-bold text-gray-300 text-9xl mt-10" data-aos="fade-up">1</p>
                    <h1 class=" font-bold text-blue-600" data-aos="fade-right">{{t('Development')}} <br>
                        {{t('corporate identity')}} <br>
                        {{t('from')}} <span class="text-blue-200">{{t('Open Engine')}} </span>{{t(' - is...')}}
                    </h1>
                </div>

                <p class="text-gray-700 text-lg leading-6 mt-10 ml-24 ">
              {{t(' The design of your brand, which makes it unique and in demand in the market. From the logo to the business card, corporate identity is the face of your company.')}}
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
                    <p class="text-center ">{{t('Analysis of the market, competitors and target audience')}}</p>
                </div>
                <div class="mb-10 border-1 mt-6 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/7.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">{{t('Defining clear and clear marketing goals of the identity')}}</p>
                </div>
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 pt-15 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/8.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">{{t('Large br creative team involved in the project')}}</p>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 ">
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/9.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">{{t('Full immersion in the work')}}</p>
                </div>
                <div class="mb-10 border-1 bg-white mt-6 rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/10.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">{{t('Adequate terms and affordable prices')}}</p>
                </div>
                <div class="mb-10 border-1 bg-white rounded-lg shadow-lg mx-2 p-5 " data-aos="flip-left">
                    <img src="{{asset('images/open_engine/book_development/11.svg')}}" alt=""
                         class="mx-auto">
                    <p class="text-center ">{{t('High quality of the finished product')}}</p>
                </div>
            </div>

        </div>

    </div>
</div>


<div class="flex justify-center items-center mt-20 mb-20 relative">
    <h1 data-aos="fade-right" class="text-4xl font-bold text-blue-700 z-10 text-center leading-8">{{t('What is included in the development')}} <br> {{t('corporate identity')}}</h1>
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
                                       <b class="my-10">{{t('Guideline')}}</b>
                                   </p>
                                   <p>{{t('-Terms of Use')}}</p>
                                   <p>{{t('- Description of brand colors')}}</p>
                                   <p>{{t('- Description of corporate fonts, etc.')}}</p>

                                   <div>
                                       <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                   </div>
                               </div>
                           </div>

<div class="flex justify-center text-center">
                        <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                            <img class="ml-6" src="{{asset('images/open_engine/book_development/13.svg')}}" alt="">
                            <p class="py-5">
                                <b class="my-10">{{t('Naming')}}</b>
                            </p>
                            <p>{{t(' Unique name')}} <br>
                                {{t('Creative slogan')}} <br>
                               {{t('Easy memorability')}} <br></p>
                            <div>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

<div class="flex justify-center text-center">
                        <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                            <img class="ml-6" src="{{asset('images/open_engine/book_development/14.svg')}}" alt="">
                            <p class="py-5">
                                <b class="my-10"> {{t(' Corporate Design')}}</b>
                            </p>


                            <p>     {{t('Commercial proposal ')}}</p>
                            <p> {{t('Advertising products')}} </p>
                            <p>  {{t('Calendars')}}</p>
                            <div>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>


                    <div class="flex justify-center text-center">
                        <div class="bg-white p-10 border-gray-300 rounded-lg border shadow-lg mx-5 justify-center">
                            <img class="ml-6" src="{{asset('images/open_engine/book_development/15.svg')}}" alt="">
                            <p class="py-5">
                                <b class="my-10">{{t('Branded elements')}}</b>
                            </p>
                            <p>{{t('Business cards')}}</p>
                            <p>{{t('Envelopes')}}</p>
                            <p>{{t('Folders and more')}}</p>
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
          </div>
            @include('front.Components.platformForm')
</div>
<div class="flex justify-center items-center my-20 relative ">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">{{t('Cases')}}</h1>
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
                <h1 class="text-5xl font-bold text-white z-10">{{t('Why')}} <br> {{t('We...?')}}</h1>
            </div>
            <p class="text-white text-md p-10 text-center">{{t('It is SCRUM and our well-established')}} < br> {{t('processes that allow us to guarantee')}} < br> {{t('the correct result')}}</p>
        </div>

        <div class="grid grid-cols-1 justify-center">
            <div class="grid justify-center">
                <div class="grid  grid-cols-1 md:grid-cols-2 gap-5">
                    <div class=" p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/35.svg')}}"
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">{{t('Experience')}}</p>
                        <p class="text-gray-600 text-lg">
                            {{t('We have gained invaluable experience and the trust of our customers')}}</p>
                    </div>

                    <div class="p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/36.svg')}}" {{t('Our goal is to make your business more efficient')}}
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">{{t('Speed')}}
                        </p>
                        <p class="text-gray-600 text-lg"> {{t('We save on time, but we do not save on quality')}}</p>
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
                        <p class="text-gray-600 text-lg">{{t('We will find the best solution for each task and each a person')}}</p>
                    </div>

                    <div class=" p-5">
                        <img class=""
                             src="{{asset('images/open_engine/book_development/38.svg')}}"
                             alt="">
                        <p class="text-gray-700 font-bold text-lg p-1">
                    {{t('Individual approach')}}
                        </p>
                        <p class="text-gray-600 text-lg"> </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="flex justify-center items-center my-20 relative">
    <h1 data-aos="fade-up" class="text-4xl font-bold text-blue-700 z-10">
       {{t('Prices and tariffs')}}
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
            <p class="text-2xl text-white text-center"><b>{{t('Logo')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1  class="text-xl border-b py-5 text-gray-600">
                    {{t('from')}} <b>4 600 000</b> {{t('uzs')}}
                </h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li> {{t('Custom logo')}}</li>
                <li>2 {{t('options')}}</li>
                <li>{{t('Color and font options <br> decisions')}}</li>
                <li>{{t('Guide to working with the logo')}}</li>
                <li class="mb-10">15 {{t('days')}}</li>
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
            <p class="text-2xl text-white text-center"><b>{{t('Logo+')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">
            <div class="text-center">
                <h1 class="text-2xl border-b py-5 text-gray-600">
                    {{t('from')}} <b> 6 600 000</b> {{t('uzs')}}</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>{{t('Business card design')}}</li>
                <li>{{t('Custom logo')}}</li>
                <li> 3 {{t('options')}}</li>
                <li>{{t('Color and font solutions')}}</li>
                <li> {{t('Guide to working with the logo')}}</li>
                <li class="mb-10"> 25 {{t('days')}}</li>

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
            <p class="text-2xl text-white text-center"><b>{{t('Kit')}}</b></p>
        </div>
        <div class="shadow-2xl rounded-2xl px-10 py-10 m-5 ">{{t('Business card design')}}
            <div class="text-center">
                <h1  class="text-2xl border-b py-5 text-gray-600">
                    {{t('from')}} <b>9 900 000</b> {{t('uzs')}}</h1>
            </div>
            <ul class="list-disc text-gray-600 text-base mt-3 border-b pb-5">
                <li>{{t('Naming as a gift')}}</li>
                <li>{{t('Business card design')}}</li>
                <li>{{t('Custom logo')}}</li>
                <li>4 {{t('options')}}</li>
                <li>{{t('Color and font solutions')}}</li>
                <li>{{t('Guide to working with the')}} < br>{{t(' logo')}}</li>
                <li class="mb-4">{{t('from')}} 30 {{t('days')}}</li>
            </ul>
            <div class=" justify-center flex">
                <a href=""
                   class="bg-blue-700 rounded-full text-white px-12 mt-4 py-3 transition duration-300 ease-in-out hover:bg-blue-900 mr-6">
                    {{t('To order')}}
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-blue-700 h-40 max-w-4xl rounded-r-2xl -mb-20 z-20 relative"
     data-aos="fade-up-right">
    <div class="flex justify-center items-center my-20 pt-10">
        <h1 class="text-4xl font-bold text-white z-10">{{t('Creating a logo')}}</h1>
        <p  class="text-9xl item-center font-bold absolute left-48 text-gray-300 z-0 opacity-50">5</p>
    </div>
</div>
<div class="bg-gray-100 h-12 z-10" data-aos="fade-up-right"></div>
<div class="bg-gray-50 z-0" data-aos="fade-up-right">
    <div class="text-xl pt-20 text-gray-700 pb-20">
        <div style="margin-left: 20%; margin-right: 20%;" class="z-0 text-gray-600 text-lg">
            <p>
        {{t('Now')}} <b>{{t('logo development in Uzbekistan </b> is an integral part of the steps to create a brand.')}} <b>{{t('To order the logo in Tashkent and the identity')}}</b> {{t('for your brand you can < b>in the branding agency in Tashkent.')}}</b>

        {{t(' Our designers with many years of experience, who are engaged in <b>logo development in')}} </b> {{t('Tashkent, will study your        brand and offer unique ideas for')}} <b>{{t('logo development.</b> You can also <b>To order the brandbook')}}</b>
        {{t('for your business.')}}
        <br><br>
        {{t('Open Engine Design studio in Tashkent has been developing a logo in Uzbekistan for many years. Development of corporate identity and logos in Tashkent, branding and creation of identity is our strong point. Our designers will make a detailed analysis of the basis of bright ideas. When we start working on a project, we analyze your business, target audience, and market condition. So we establish a strong connection between the company and its clients. Branding agency in Tashkent, brand development in Tashkent. packaging design tashkent.')}}
            </p>
        </div>
        <div class="flex justify-end">
            <div class="flex">
                <div class="flex justify-center items-center my-20 relative px-20 pt-10 leading-10">
                    <h1 data-aos="fade-up" class="text-5xl font-bold text-blue-700 z-10 opacity-50">{{t('Other')}} < br> {{t('services')}}
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
                            {{t('Development of an online store')}}
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                <p class="text-center pb-6">
                                 {{t('Seo promotion')}}
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/loupe_dark.svg')}}" alt=""/>
                                <p class="text-center pb-6">
                                    {{t('Contextual advertising')}}
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/digital-marketing_dark.svg')}}"
                                     alt=""/>
                                <p class="text-center pb-6">
                                   {{t('SMM promotions')}}
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/creative_dark.svg')}}" alt=""/>
                                <p class="text-center pb-6">
                                    {{t('Brand Book development')}}
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="bg-white mx-3 px-10 shadow-xl py-4 rounded-lg">
                                <img class="mx-auto p-3"
                                     src="{{asset('images/open_engine/images/4/target_dark.svg')}}" alt=""/>
                                <p class="text-center pb-6">
                                    {{t('Business automation')}}
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
                                        {{t('Other')}} <br/>{{t(' services')}}
                                    </h1>
                                    <div class="flex text-center absolute item-center justify-center z-0">
                                        <p data-aos="fade-up"   class="text-9xl  font-bold  text-gray-300 ">
                                           6
                                        </p>
                                    </div>
                                </div>
                                @include('front.Components.platformFooter')
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
