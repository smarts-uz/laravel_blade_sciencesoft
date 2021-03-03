
@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-8">

<h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('B2C Ecommerce Demo') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('Ecommerce is all about customer experience. Online retailers are challenged now to keep apace with ever-evolving industry trends and serve shoppers with more personalized interactions throughout their journeys. Many have already succeeded in that! Watch our demo to see what kind of experience will earn you loyal customers in the face of pretty tough market competition and explore more closely our ecommerce development services if you feel ready to trust our team with your ecommerce project.') }}
    </p>

    <iframe class="w-full" height="750" src="https://www.scnsoft.com/demo/ecommerce-b2c-demo/kitchen_catalog.html" frameborder="0"></iframe>

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('B2C Ecommerce Demo') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('At ScienceSoft, we witness how customer experience standards and expectations have been growing and changing over years. To be ahead of the game now, e-retailers must be aware of its fundamental rules.') }}
    </p>

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Omnichannel brand consistency. ') }}</span>
                    <span class="text-gray-600">{{ t(' In 2020, consumer-oriented businesses have increasingly gone digital as relying on traditional footfall has proved to be unsafe for business resilience. Managing several sales channels now, they must maintain a brand personality across them.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Company-wide commitment to customer-centricity.') }}</span>
                    <span class="text-gray-600">{{ t(' If you start the transformation towards customer-centricity, no business aspect can be neglected. A strategy consistency is important so you may find it rewarding to hire dedicated customer experience consultants and make your efforts targeted from the start.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Loyalty building.') }}</span>
                    <span class="text-gray-600">{{ t('If you are determined to keep your business competitive, your marketing team should see beyond quick one-time conversions but start building customer loyalty from the very first interaction.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Customer experience personalization.') }}</span>
                    <span class="text-gray-600">{{ t('By personalization we don’t mean trying to get more intimate with customers, rather plan thoroughly how you can be more helpful and more relevant throughout their shopping experience. The areas in focus include website content, product recommendations, email communication and customer support service.') }}</span>
                </li>

        </ul>

        <div class="p-6 my-16 shadow-xl lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                {{ t('Planning to Start or Jump-Start Your Ecommerce Presence?') }}
            </h1>
            <div class="w-12 bg-yellow-500 h-0.5 mb-6"></div>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t('Tap into our 17-year ecommerce development experience and endless creative potential to maintain a competitive edge with exceptional customer experience.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('HIRE ECOMMERCE DEVELOPERS') }}
                </div>
            </a>

        </div>
    </div>

    </div>

@endsection

@section('js')


@endsection






