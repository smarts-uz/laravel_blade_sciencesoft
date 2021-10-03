@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="block p-0">
    <div class="lg:mt-6" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 p-6">
                <div class="flex">
                    <p class="text-8xl text-white"> {{ t('Laravel')}}<span class="text-pink-600">{{t(' 6.x')}}</span></p>
                </div>
                <div class="flex justify-end">
                    <img src="{{asset('images/products/BookApp/Screenshot_1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class=" flex flex-wrap justify-center p-6">
                <div class="flex justify-center">
                    <img src="{{asset('images/products/BookApp/Screenshot_2.png')}}" alt="">
                </div>
                <div class="mt-2.5 ml-4">
                    <div>
                        <p class="text-5xl text-white">{{ t('AweBooking')}}</p>
                    </div>
                    <div>
                        <p class="text-4xl text-white">{{ t('Awesome Booking System')}}</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 mt-10 p-6">
                <div>
                    <div>
                        <p class="text-4xl text-white">{{ t('The page is designed')}}</p>
                    </div>
                    <div class="lg:mt-4 lg:ml-16">
                        <p class="text-4xl text-white"> {{ t('in a modern,')}}</p>
                    </div>
                    <div class="lg:mt-4 lg:ml-24">
                        <p class="text-4xl text-white">{{ t('optimal user experience')}}</p>
                    </div>

                    <div class="mt-16">
                        <img src="{{asset('images/products/BookApp/Screenshot_3.png')}}" alt="">
                    </div>
                    <div class="mt-16">
                        <img src="{{asset('images/products/BookApp/Screenshot_4.png')}}" alt="">
                    </div>
                </div>
                <div class="mt-6">
                    <div>
                        <img src="{{asset('images/products/BookApp/Screenshot_5.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/products/BookApp/Screenshot_6.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('images/products/BookApp/Screenshot_7.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-4xl text-white">{{ t('A powerful Admin & Owner Dashboard')}}</p>
                    </div>
                    <div>
                        <p class="text-3xl text-white">{{ t(' homestay management, reservations, profile, notifications,
                            system
                            settings ...')}} </p>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <img src="{{asset('images/products/BookApp/Screenshot_9.png')}}" alt="">
            </div>
            <div class="">
                <img src="{{asset('images/products/BookApp/Screenshot_10.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-4xl text-white">{{ t('Upload and manage media easily')}}</p>
                    </div>
                    <div>
                        <p class="text-3xl text-white">
                            {{ t(' You can drag and drop multiple items and upload them. Right click to delete each
                            item')}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="{{asset('images/products/BookApp/Screenshot_11.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-5xl text-white">{{ t('Simple menu interface')}}</p>
                    </div>
                    <div>
                        <p class="text-3xl text-white">
                            {{ t(' Drag and drop to add one or more menu items, multiple levels')}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="{{asset('images/products/BookApp/Screenshot_12.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-4xl text-white">{{ t('Export data to pdf, csv file')}}</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="{{asset('images/products/BookApp/Screenshot_13.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-4xl text-white">{{ t('Smart availability management')}}</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="{{asset('images/products/BookApp/Screenshot_14.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-4xl text-white">
                            {{ t(' Flexible extra & custom price')}}</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center">
                <img src="{{asset('images/products/BookApp/Screenshot_15.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="lg:mt-6 lg:mb-14 lg:pb-14" style="background-color: #153D62;">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="mt-14">
                    <div class="flex justify-center">
                        <p class="text-4xl text-white">
                            {{ t(' Fully Responsive')}}
                        </p>
                    </div>
                    <div>
                        <p class="text-3xl text-white">
                            {{ t(' Support on mobile devices, tablets. Popular browsers Firefox, Chrome, Safari, Opera
                            ')}}</p>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex justify-center ">
                <img src="{{asset('images/products/BookApp/Screenshot_16.png')}}" alt="">
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection
