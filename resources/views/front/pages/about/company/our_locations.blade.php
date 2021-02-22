
@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">

    <div class="text-3xl md:text-5xl font-bold">
        {{ _trans("Thinking Globally, Acting Locally")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>
    <div class="text-xl font-normal leading-relaxed text-left">
        {{ _trans("ScienceSoft is headquartered in ")  }}<strong>{{ _trans("McKinney, Texas.")  }}</strong>{{ _trans(" Our current network includes offices and
        delivery centers
        across 3 continents. ScienceSoft continuously expands its international presence to tap into local talents
        and efficiently cooperate with local industry leaders and startups. In June 2020, we opened our first Middle
        East office in the UAE to offer IT services, IT solutions and IT consultancy to businesses and government
        organizations in the Gulf region.")  }}
    </div>
    <div class="text-xl font-normal mt-8">
        {{ _trans("Regardless of the location, our customers have access to our best technical skills and industry knowledge.")  }}
    </div>

    <div class="text-3xl font-medium mt-24">
        {{ _trans("OFFICES AND DELIVERY CENTERS")  }}
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
    </div>
    <div class="flex justify-between flex-wrap ">
        <div class="flex-col w-full lg:w-1/4 md:w-1/2 my-10">
            <div class="flex justifiy-start items-end">
                <div>
                    <img src="img/us.svg" alt="">
                </div>
                <div class="ml-2 text-xl font-medium">
                    {{ _trans("United States - Headquarters")  }}
                </div>
            </div>
            <div class="pr-20 leading-relaxed mt-6 mb-4">
                {{ _trans("5900 S. Lake Forest Drive Suite 300, McKinney, Dallas area, TX 75070")  }}
            </div>
            <div class="mb-4">
                <a class="underline" href="#">+1 214 306 68 37</a>
            </div>
            <div>
                <a class="underline" href="#">contact@scsoft.com</a>
            </div>
        </div>
        <div class="flex-col w-full lg:w-1/4 md:w-1/2 my-10">
            <div class="flex justify-start  items-end">
                <div>
                    <img class="w-8" src="img/gcc_.svg" alt="">
                </div>
                <div class="ml-2 text-xl font-medium">
                    {{ _trans("Gulf Cooperation Council")  }}
                </div>
            </div>
            <div class="pr-20 leading-relaxed mt-6 mb-4">
                {{ _trans("Fujairah - Creative Tower, POB 4422 Fujairah, United Arab Emirates")  }}
            </div>
            <div class="mb-4">
                <a class="underline" href="#">+971 585 73 84 33</a>
            </div>
            <div>
                <a class="underline" href="#">gulf@scsoft.com</a>
            </div>
        </div>
        <div class="flex-col w-full lg:w-1/4 md:w-1/2 my-10">
            <div class="flex justify-start  items-end">
                <div>
                    <img src="img/eu.svg" alt="">
                </div>
                <div class="ml-2 text-xl font-medium">
                    {{ _trans("European office")  }}
                </div>
            </div>
            <div class="leading-relaxed mt-6 mb-4">
                {{ _trans("2 Myyrmäenraitti, Vantaa, ZIP 01600, Finland")  }}
            </div>
            <div class="mb-4">
                <a class="underline" href="#">+358 92 316 30 70</a>
            </div>
            <div>
                <a class="underline" href="#">eu@scsoft.com</a>
            </div>
        </div>

</div>

</div>

@endsection

@section('js')

@endsection
