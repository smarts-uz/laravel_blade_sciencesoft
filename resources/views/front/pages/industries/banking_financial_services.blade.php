@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>

            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ _trans('Banking Software & IT Services for Banks') }}
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4" />
            <img
                src="{{ asset('images/industries/banking_financial_services/banking-software-it-services-for-banks.svg') }}">
            <p class="my-5 text-lg">
                {{ _trans('For 14 years TeamPRO delivers various banking software solutions (portals, intranets, mobile apps, CRM, etc.), manages their successful implementation, integration, testing and deployment as well as ensures their solid support.') }}
            </p>
            <p class="my-5 text-lg">
                {{ _trans('We provide both platform-based and custom banking software that serves the needs of retail and corporate banking and improves the relationships between financial facilities and their customers, attracting and retaining the most profitable clientele.') }}
            </p>

        </div>

        <div class="flex justify-end my-4">
            <div class="uppercase bg-blue-700 text-white py-3 px-10">
                {{ _trans('Get a quote') }}
            </div>
        </div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('OUR PORTFOLIO') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        {{-- content --}}
        <div class="flex justify-center my-4">
            <div class="uppercase border-2 border-blue-700 text-blue-700 text-white py-3 px-10">
                {{ _trans('Get a quote') }}
            </div>
        </div>


        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('BANKING SOFTWARE SOLUTIONS WE IMPLEMENT') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <div
            class="w-full lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col  my-7">
            <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                <img class="lg:w-2/5 w-4/5 "
                    src="{{ asset('images/industries/banking_financial_services/internet_banking.svg') }}" alt="">
            </div>
            <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
                    {{ _trans('Internet banking') }}
                </h1>
                <br>
                <p class="px-4 text-base sm:text-lg text-sm">
                    {{ _trans("Internet banking
                    Answer the ever-growing customers’ needs for secure 24/7 access to their banking accounts with custom internet banking.") }}
                </p>
                <p class="px-4 text-base sm:text-lg text-sm">
                    {{ _trans('Whether you want to implement a solution from scratch or update your current obsolete software, TeamPRO will provide you with rich functional scope and ensure implementation of the best online banking practices. With custom internet banking solutions, your clients will be able to enjoy the following functionality:') }}
                </p>
                <br>
                <div class="w-full  px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ _trans('get detailed information about their checking, savings and credit accounts') }}</p>
                </div>
                <!-- ========================= -->
                <div class="w-full  px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">{{ _trans('set up limits for their cards') }}</p>
                </div>
                <!-- ========================= -->
                <div class="w-full  px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">{{ _trans('make payments') }}</p>
                </div>
                <!-- ========================= -->
                <div class="w-full  px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">{{ _trans('transfer money between banking accounts') }}
                    </p>
                </div>
                <!-- ========================= -->
                <div class="w-full  px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ _trans('request bank statements or other applicable documents online') }}</p>
                </div>
                <!-- ========================= -->
                <div class="w-full  px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ _trans('find a branch or ATMs in a particular location, and much more.') }}</p>
                </div>
            </div>
        </div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('THRIVE WITH BANKING SOFTWARE') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <p class="my-4">{{ _trans('At TeamPRO, we help our customers reap the following benefits:') }}</p>
        <img src="{{ asset('images/industries/banking_financial_services/banking-software-benefits.svg') }}" alt="">


        <div class="rounded-sm border-2 my-10 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
            <div class="flex flex-col">
                <h1 class="text-xl font-bold">{{ _trans('We Ensure Regulatory Compliance') }}</h1>
                <hr class="w-12 border-b-2 border-yellow-600  my-4" />
                <div class=" flex flex-wrap">
                    <p class="text-gray-500 text-xl w-full lg:w-4/5">
                        {{ _trans('TeamPRO’s banking software solutions that we develop fully compliant with regulatory standards, including FRS requirements, Dodd-Frank Act, Payment Application Data Security Standard (PA-DSS), Payment Card Industry Data Security Standard (PCI-DSS), SOX, and others.') }}
                    </p>
                    <div class="uppercase text-white bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/6 text-center">
                        {{ _trans('get a quote') }}</div>
                </div>
            </div>
        </div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('WHAT WE OFFER') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <img src="{{ asset('images/industries/banking_financial_services/our-services.svg') }}" alt="">

        {{-- content --}}

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('MEET YOUR BUSINESS CHALLENGES') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <div class="">
            <p class="my-6">
                {{ _trans('At TeamPRO, we successfully meet the following business challenges of retail and corporate banking:') }}
            </p>
            <div class="flex flex-row">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                    {{ _trans('TeamPRO attained') }}
                    <b>{{ _trans('AWS Select Tier Consulting Partner') }}</b>
                    {{ _trans('status.') }}
                </p>
            </div>
            <div class="flex flex-row">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                    {{ _trans('TeamPRO featured on the') }}
                    <b>{{ _trans("Clutch lists of Top IT Services Firms, Top Cloud
                Consultants, and Top 1000 B2B Providers Globally.") }}</b>
                </p>
            </div>
            <div class="flex flex-row">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                    {{ _trans("TeamPRO featured in IAOP Global Outsourcing 100 Award
                Lists 2020.") }}
                </p>
            </div>
            <div class="flex flex-row">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                    {{ _trans("TeamPRO acquired Gold Microsoft Competency in
                Application Integration.") }}
                </p>

            </div>
        </div>

        <div class="rounded-sm border-2 border-white shadow-xl transition-shadow w-full mr-20 p-8">
            <div class="flex flex-col">
                <h1 class="text-xl font-bold">{{ _trans('How to Start') }}</h1>
                <hr class="w-12 border-b-2 border-yellow-600  my-4" />
                <div class=" flex flex-wrap">
                    <p class="text-gray-500 text-xl w-full lg:w-4/5">
                        {{ _trans('Whether you need a mobile banking app, banking CRM or a custom banking software solution, our dedicated IT consultants and business analysts are ready to provide you with a consultation and a proof of concept based on your project scope and complexity. Reach out to our IT consultants to discuss your business challenges in more detail.') }}
                    </p>
                    <div class="uppercase text-white bg-blue-700 flex  py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center">
                        {{ _trans('contact us') }}</div>
                </div>
            </div>
        </div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('About TeamPRO – Global IT Company') }}
        </h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4" />
        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center ">
                <div class="flex justify-center  w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-64  top-0"
                        src="{{ asset('images/industries/banking_financial_services/our-services.svg') }}" alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans('Tailored pricing plan') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        {{ _trans("We calculate custom-made pricing plans to meet your expectations and adjust pricing if your
                  requirements change
                  during our cooperation.") }}
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans('Learn More') }}<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>

    </div>

@endsection

@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
