@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="block p-0">
    <div class='mx-auto container'>
        <h1 class="lg:text-3xl text-sm lg:py-5">
            <p class="mb-4">{{ t('NEED A CONSULTATION?') }}</p>
            <hr class="w-10 h-0.5 border-none bg-yellow-500">
        </h1>
        <div class="lg:grid lg:grid-cols-3 lg:gap-3 grid grid-cols-1 gap-5 mb-9 mt-4">
            <img src="{{asset('images/products/RestoMa/image1.png')}}" alt="" class="mx-auto w-9/12">
            <img src="{{asset('images/products/RestoMa/image2.png')}}" alt="" class="mx-auto w-9/12">
            <img src="{{asset('images/products/RestoMa/image3.png')}}" alt="" class="mx-auto w-9/12">
        </div>
        <div>
            <h1 class="lg:text-3xl text-sm lg:py-5">
                <p class="mb-4">{{ t('Top Features Highlights') }}</p>
                <hr class="w-10 h-0.5 border-none bg-yellow-500">
            </h1>
            <ul class="mt-5 ml-10 list-outside list-disc bg-rose-200 text-lg leading-relaxed">

                <li class="leading-8 text-gray-800">
                    {{ t('ZEN Mode for Store Owners') }}
                </li>
                <li class="leading-8 text-gray-800">
                    {{ t(" Advanced Orders and Users Table for Admin with CSV Export") }}
                </li>
                <li class="leading-8 text-gray-800">
                    {{ t('One Signal Push Notification for New Orders for Store Owners') }}
                </li>
                <li class="leading-8 text-gray-800">
                    {{ t('In-App Notification for push-notification subscribers') }}
                </li>
            </ul>
        </div>
        <div>
            <h1 class="lg:text-3xl text-sm lg:py-5">
                <p class="mb-4">{{ t('Payment Gateways') }}</p>
                <hr class="w-10 h-0.5 border-none bg-yellow-500">
            </h1>
            <div class="swiper-container main-slide swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                style="margin: 0 4rem">
                <div class="swiper-wrapper flex items-center" id="swiper-wrapper-424aebbb4ac8a93c" aria-live="off"
                    style="transform: translate3d(-1313px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="1 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612865191.png">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="2 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612865402.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="3 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612865846.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="4 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612865992.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14 swiper-slide-prev"
                        role="group" aria-label="5 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612866086.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14 swiper-slide-active"
                        role="group" aria-label="6 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612866200.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14 swiper-slide-next"
                        role="group" aria-label="7 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612866302.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="8 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612866595.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="9 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612866730.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="10 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612866851.png">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="11 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612867064.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="12 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612867228.svg">
                    </div>
                    <div class="swiper-slide flex justify-center items-center p-24 md:p-14" role="group"
                        aria-label="13 / 13" style="width: 212.6px; margin-right: 50px;">
                        <img src=" /uploads/categories/1612867656.svg">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="lg:text-3xl text-sm lg:py-5">
                <p class="mb-4">{{ t('Introduction') }}</p>
                <hr class="w-10 h-0.5 border-none bg-yellow-500">
            </h1>
            <ul class="mt-5 ml-10 list-outside list-disc bg-rose-200 text-lg leading-relaxed">

                <li class="leading-8 text-gray-800">
                    {{ t('Foodomaa™ is built with a mobile-first approach keeping user experience, conversion optimization, and high performance intact. It is built with React which is adequately served by a Laravel API.') }}
                </li>
                <li class="leading-8 text-gray-800">
                    {{ t("It is the first Store web application on CodeCanyon built with React and Redux.") }}
                </li>
                <li class="leading-8 text-gray-800">
                    {{ t('The most amazing feature of Foodomaa™ is, it can be installed on any device running Android or iOs. It can also be installed on a Windows PC running Chrome.') }}
                </li>
                <li class="leading-8 text-gray-800">
                    {{ t('Foodomaa™ includes high-end features like Lazy Loading, Progressive Image Loading, Content Placeholder Loading, Bulk CSV Upload, Advance Settings Management, Advance Coupon System.') }}
                </li>
                <li class="leading-8 text-gray-800">
                    <a class="hover:text-blue-50"
                        href="https://stackcanyon.com/docs/foodomaa">{{ t('Kindly have a look at our online documentation for more:') }}</a>
                </li>
            </ul>
            <div class="grid lg:grid-cols-2 lg:gap-3 grid-cols-1 gap-5 mb-9 mt-4">
                <div class="lg:flex block">
                    <div clas="block">
                        <h1 class="text-2xl">Delivery Location Section</h1>
                        <ul class="mt-5 ml-10 list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                            <li class="leading-8 text-gray-800">
                                {{ t('Autofill location with Google APIs Servet, C.') }}
                            </li>
                            <li class="leading-8 text-gray-800">
                                {{ t('Manual fill addresses (Buliding, Flat)') }}
                            </li>
                            <li class="leading-8 text-gray-800">
                                {{ t('Add tags for address (Work, Home)') }}
                            </li>
                        </ul>
                    </div>
                    <img src="{{asset('images/products/RestoMa/full.png')}}" alt="" class="mx-auto lg:w-1/3 w-2/4">
                </div>
                <div class="lg:flex block">
                    <div clas="block">
                        <h1 class="text-2xl">Stores Listing</h1>
                        <ul class="mt-5 ml-10 list-outside list-disc bg-rose-200 text-lg leading-relaxed">
                            <li class="leading-8 text-gray-800">
                                {{ t('Promotional Sliders') }}
                            </li>
                            <li class="leading-8 text-gray-800">
                                {{ t('Delivery and Self-Pickup') }}
                            </li>
                            <li class="leading-8 text-gray-800">
                                {{ t('Listing stores based on users area') }}
                            </li>
                        </ul>
                    </div>
                    <img src="{{asset('images/products/RestoMa/full.png')}}" alt="" class="mx-auto lg:w-1/3 w-2/4">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('js')

@endsection