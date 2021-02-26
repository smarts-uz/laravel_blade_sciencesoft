@extends('front.layout') @section('css') @endsection @section('main')


<div class="my-8">


   <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT Solutions for Manufacturing: Software to Drive Business Productivity and Cost Saving') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img src="https://www.scnsoft.com/manufacturing/cover-pic-it-for-manufacturing-1.svg" alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ _trans('IT solutions for manufacturing are designed to streamline the operations of a manufacturer from supply chain management to sales management, which allows improving the company’s productivity and reducing operational costs.') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{_trans('With ')}}
    <span class="text-gray-800 font-bold">{{ _trans('31-year experience')}}</span>
    {{_trans('in developing software for the manufacturing industry, ScienceSoft offers robust solutions and related services to support and modernize your enterprise’s operations and ensure ')}}
    <span class="text-gray-800 font-bold">{{ _trans('increased efficiency of operations and optimized business costs, all without IT budget overruns.')}}</span>
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ _trans('Get Rid of Inefficient Business Processes in Manufacturing') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans(' TeamPro team will analyze your business operations and offer you robust IT solutions to boost your manufacturing company’s productivity and optimize operational costs.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('GET A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('WHAT MAKES SCIENCESOFT A RELIABLE PARTNER') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="md:flex">
    <div class="md:w-4/12">
    <img src="https://www.scnsoft.com/partners/microsoft-partner-statuses-8-01.svg" alt="">
    </div>
    <div class="md:w-8/12 md:ml-4">
    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('31 ') }}</span>
                    <span class="text-gray-600">{{ _trans('years in IT for manufacturing.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('8') }}</span>
                    <span class="text-gray-600">{{ _trans(' Microsoft Gold Competencies.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('20+') }}</span>
                    <span class="text-gray-600">{{ _trans('  business analysts and consultants.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans(' 10+ ') }}</span>
                    <span class="text-gray-600">{{ _trans(' UX and UI designers.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('250+ ') }}</span>
                    <span class="text-gray-600">{{ _trans('developers, more than 50% of them are Seniors.') }}</span>

                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ _trans('Successful projects on diverse enterprise-level solutions, such as ERP, CRM, SCM, and more.') }}</span>

                </li>

        </ul>
    </div>
    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT SOLUTIONS FOR MANUFACTURING TO OPTIMIZE YOUR OPERATIONS') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">




</div>

@endsection
 @section('js')


@endsection
