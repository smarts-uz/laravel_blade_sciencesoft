@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mb-10 flex flex-col justify-center items-center text-center mt-20">
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 font-semibold">
        {{ t('SOFTWARE CONSULTING AND DEVELOPMENT FOR YOUR DIGITAL SUCCESS') }}</h1>
    <hr class="w-20 h-0.5 border-none bg-yellow-600 my-10 ">
    <p class="text-center text-base sm:text-lg md:text-xl lg:text-2xl leading-10 text-gray-700 ">
        {{ t("We transform businesses in Uzbekistan with powerful and adaptable digital solutions that satisfy the needs of
    today and unlock the opportunities of tomorrow.") }}
    </p>
</div>


<div class="swiper-container main-slide">
    <div class="swiper-wrapper flex items-center">
        @foreach ($partnerships as $partnership)
        <div class="swiper-slide flex justify-center items-center p-24 md:p-14">

            <img src="@if ($partnership->image) {{ '/uploads/categories/' . $partnership->image }}
                    @else{{ asset('images/default-image.png') }} @endif">
        </div>
        @endforeach
    </div>
</div>
@include('front.Components.services')
<div>
    <h1 class="text-center text-gray-500 mt-10 mb-20 text-xl">
        {{ t("Haven't found a suitable service? Type your need below!") }}</h1>
    <!-- Forms -->
    <form class="border-2 border-gray-500 flex flex-row rounded-full p-4 mb-20">
        <div class="flex justify-center items-center">
            <i class="fa fa-search text-gray-500 mr-4"></i>
        </div>
        <input type="search" name="Search" class="w-full border-none outline-none"
            placeholder="{{ t('E.g., VR development or help desk services') }}" />
    </form>

    <!-- EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF. -->
    <div class="flex flex-col-reverse lg:flex-row justify-between items-center px-5 py-12 bg-gray-100">
        <div class="w-full lg:w-3/5 mt-10 lg:mt-0">
            <h1 class="text-3xl font-semibold">{{ t('EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF.') }}
            </h1>
            <p class="text-xl text-gray-700 my-6">
                {{ t('Comprehensive care of your cloud or on-premises infrastructure and applications with:') }}
            </p>
            <ul style="list-style: square;" class="flex flex-row flex-wrap px-5 mb-5">
                <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Consulting') }}</li>
                <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Security') }}</li>
                <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Implementation') }}</li>
                <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Help desk services') }}</li>
                <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Management and support') }}</li>
                <li class="text-xl text-gray-700 mr-10 mb-6 w-48">{{ t('Migration') }}</li>
            </ul>
            <a href="#" class="flex flex-row items-center text-blue-700">
                <p class="uppercase mr-3 font-semibold">{{ t('Learn More') }}</p>
                <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
        <div
            class="bg-white rounded shadow-2xl h-full lg:h-96 lg:w-2/5 w-full flex justify-center items-center lg:-mt-20 lg:-mr-10">
            <img src="https://www.scnsoft.com/---home-page-illustrations/image-thumb__22108__home_Image-text/managed-it-services~-~1919w.png"
                alt="EVERY ASPECT OF YOUR IT ECOSYSTEM. TAKEN CARE OF">
        </div>
    </div>
</div>

<div class="flex flex-wrap overflow-hidden my-2">

    @foreach ($categories as $category)
    @if ($category->category_id == 40)
    <div
        class="my-2 px-2 w-full overflow-hidden sm:my-2 sm:px-2 sm:w-1/2 md:my-2 md:px-2 md:w-1/3 lg:my-2 lg:px-2 lg:w-1/6 xl:w-1/6">
        <a href="">
            <div
                class="border-2 border-gray-50 rounded flex justify-center items-center shadow-md hover:shadow-lg transition-shadow h-full py-5 px-5 md:py-3 md:py-3 sm:py-2 sm:py-2">
                @if ($category->icon)<img class="h-32 w-32" src="{{ '/uploads/categories/' . $category->icon }}"
                    alt="logo">@else<img class="h-32 w-32" src="{{ asset('images/default-image.png') }}" alt="logo">
                @endif
            </div>
        </a>
    </div>
    @endif
    @endforeach
</div>

<div class="bg-blue-900 py-10 px-5 text-white">
    <h1 class="text-2xl lg:text-3xl font-semibold">
        <p class="mb-4">{{ t('Solutions we deliver') }}</p>
        <hr class="w-10 h-0.5 border-none bg-yellow-500">
    </h1>
    <p class="text-xs lg:text-xl my-4 lg:my-8">
        {{ t('We IT-enable all kinds of B2B, B2C interactions and internal operations.') }}</p>
    <ul class="text-black flex flex-wrap md:justify-start justify-center flex-row">
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('Enterprise application') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('CRM') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('eCommerce') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('Mobile Apps') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('Collaboration and productivity solutions') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('Data Analytics') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('Web Portals') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
        <li
            class="bg-white rounded xl:w-72 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-1 relative hover:bg-blue-700 hover:text-white">
            <a href="#">
                {{ t('ITSM') }}
            </a>
            <div class="absolute bottom-3 right-3">
                <i class="fa fa-arrow-right fa-rotate-45"></i>
            </div>
        </li>
    </ul>
</div>

<div>
    <h1 class="uppercase font-bold text-2xl">{{ t('TECHNOLOGIES WE USE') }}</h1>
    <hr class="w-10 h-0.5 border-none my-2 bg-yellow-500">
    <div class="swiper-container main-slide">
        <div class="swiper-wrapper flex items-center">
            @foreach ($partnerships as $partnership)
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14">

                <img src="@if ($partnership->image) {{ '/uploads/categories/' . $partnership->image }}
                        @else{{ asset('images/default-image.png') }} @endif">

            </div>
            @endforeach
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/viber.svg') }}" alt=""></div>
        </div>
    </div>
</div>

<div>
    <h1 class="uppercase font-bold text-2xl">{{ t('PLATFORMS WE WORK WITH') }}</h1>
    <hr class="w-10 h-0.5 border-none my-2 bg-yellow-500">
    <p class='text-lg text-gray-800'>Distilling deep tech experience, our experts can help you with platform-specific
        consulting, solution design and
        support
        for your business evolution.</p>
    <div class="py-3 flex justify-between flex-wrap">
        <div
            class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
            <img src="{{ asset('images/sharepoint-logo.svg') }}" />
        </div>
        <div
            class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
            <img src="{{ asset('images/dynamics-365.svg') }}" />
        </div>
        <div
            class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
            <img src="{{ asset('images/salesforce.svg') }}" />
        </div>
        <div
            class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
            <img src="{{ asset('images/servicenow-logo.svg') }}" />
        </div>
        <div
            class="w-full m-2 md:w-1/6 px-10 rounded py-5 h-24 border border-gray-200 hover:shadow-lg duration-300 flex justify-center items-center ">
            <img src="{{ asset('images/magento-logo.svg') }}" />
        </div>
    </div>
</div>

@isset($blogs)
<div>
    <div class="my-4 lg:mt-12 mt-3">
        <h1 class="uppercase font-bold text-2xl pb-4">{{ t('Featured Insights') }}</h1>
        <hr class="w-10 h-0.5 border-none bg-yellow-500">
    </div>
    <div class="lg:grid lg:grid-cols-3 lg:gap-5 justify-center block">
        @foreach ($blogs->splice(0, 3) as $blog)
        <div class="p-4 mx-0">
            <a href="{{ route('SingleBlog', [$blog->id]) }}"
                class="no-underline text-gray-200 block md:w-96 w-72 duration-300 shadow-lg hover:shadow-2xl relative">
                <div>
                    <img class="w-full h-auto" src="/uploads/blogs/{{ $blog->image }}" alt="CardImg">
                </div>
                <div class="px-4">
                    <span class="text-yellow-400 text-xs font-bold">CRM</span>
                    <h1 class="text-lg text-black font-bold py-2">
                        {{ $blog->title }}
                    </h1>
                    <p class="text-sm text-black">
                        {{ $blog->description }}
                    </p>

                    <div class="bg-none w-full py-2 flex justify-end text-blue-500 focus:outline-none">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a href="{{ route('getBlade', ['page' => 'blog' ?? '404']) }}"
        class="border-2 border-blue-700 text-blue-700 font-semibold px-6 py-3 uppercase my-8 mx-auto block w-64 text-center"
        id="loadMore">All Blog Articles</a>
</div>
@endisset
<!-- Need a CONSULTATION? -->
</div>

<h1 class="px-16 text-3xl py-5">
    <p class="mb-4">{{ t('NEED A CONSULTATION?') }}</p>
    <hr class="w-10 h-0.5 border-none bg-yellow-500">
</h1>


@include('front.Components.consultation')


@endsection


@section('js')

@endsection
