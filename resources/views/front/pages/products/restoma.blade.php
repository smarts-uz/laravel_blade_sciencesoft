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
            
        </div>
    </div>
</div>

@endsection


@section('js')

@endsection