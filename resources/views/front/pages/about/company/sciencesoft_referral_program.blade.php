@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="my-5">
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('Referral Program for IT Consulting and Software Development Services
            ') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <img src="https://www.scnsoft.com/cover-pictures/become-sciencesoft-s-partner.svg" alt="">
        <p class="py-5 text-lg text-gray-500">{{ t('If you are a') }} <strong>
                {{ t('trusted consultancy') }} </strong>, {{ t(' an') }} <strong></strong>
            {{ t('individual consultant') }}</strong> {{ t('or a') }} <strong>
                {{ t('marketing agency') }} </strong>,
            {{ t('you may need software development services for your customers apart from the services you directly provide. We understand that software development is not your priority, and we are ready to take on this task and equip your clients with the software tailored to their industry specifics and business needs.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">{{ t('If you are a') }} <strong>{{ t('sales agent') }}
            </strong>,
            {{ t('you can help us hunt for new IT consulting and custom software development opportunities. All you need is to provide us with relevant leads, and we’ll reward your efforts according to our Referral Program.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ t('Join Smart SoftwareReferral Program for IT consulting and software development services and get rewarded for the leads you bring us. We are open to expanding our business network and obtaining new IT consulting and software development challenges.') }}
        </p>
        <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ t('COOPERATION PROCEDURE') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
        <ul class="list-disc pl-5">
            <li class="py-2 text-lg text-gray-500">
                {{ t('We sign an NDA to ensure your sensitive data is not disclosed and an Agent Agreement that regulates the specifics of our cooperation in frames of the Referral Program (including the commissions you get as a mediator).') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ t('You introduce us to your clients who need IT services (IT consulting, software design, custom application development).') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ t('We communicate with your clients and offer them the solutions they need (or may need) – saving your time and efforts.') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ t('When we win a contract, we compensate your efforts (paying a percentage of the contract) according to the conditions of our Referral Program.') }}
            </li>
            <p class="py-5 text-lg text-gray-500">
                {{ t('Your participation in the software project itself is not mandatory, but you can join it, for example, as a consultant. We are interested in long-term cooperation and can offer all-round software development and IT consulting support to every new customer you have. We respect your reputation and ensure that required services will be delivered to end-users within time and budget. We are also ready to provide you with all the necessary marketing materials to introduce our services to your customers (including co-branded materials featuring the benefits of a joint offer for your customers).') }}
            </p>
            <p class="py-5 text-lg text-gray-500">
                {{ t('Over the past years, we’ve been a trusted partner for agents in various industries including') }}
                <a class="underline hover:text-blue-600" href="#">{{ t('healthcare') }}</a> , <a
                    class="underline hover:text-blue-600" href="#">{{ t('banking') }}</a> , <a
                    class="underline hover:text-blue-600" href="#">{{ t('retail') }}</a> ,<a
                    class="hover:text-blue-600 underline" href="#">{{ t('manufacturing') }}</a> , <a
                    class="underline hover:text-blue-600" href="">{{ t('telecom') }}</a>
                {{ t('in the US and Europe, which resulted in new beneficial long-term business relationships for our partners and us. At Smart Software, we believe that doing business with partners is an effective way to reach out to the customers, meet their expectations and win their trust.') }}
            </p>
            <p class="py-5 text-lg text-gray-500 mb-5">
                {{ t('Please feel free to send your questions to us and set up a free consultation with our representative.') }}
            </p>
        </ul>
        {{-- <div class="relative my-32 mx-10">
            <button
                class="w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium absolute mt-10 mx-3 right-0 bottom-16 text-white text-lg uppercase">
                {{ t('Contact US') }}
            </button>
        </div> --}}
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('COOPERATION PROCEDURE') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />

        <!-- Cards -->
        <x-procedure/>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('HOW WE WORK') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 ">
            <x-wework/>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('HOW WE WORK') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <div>
            <div class="col-12 mt-10 group flex flex-wrap">
                <div>
                    <div>
                        <div
                            class="lg:ml-10 ml-36 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                            1
                        </div>
                    </div>
                    <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                </div>
                <div class="flex flex-wrap lg:w-5/6">
                    <div class="lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                        <h1 class="uppercase font-bold text-2xl">
                            {{ t('IT consulting') }}
                        </h1>
                        <p class="lg:text-lg lg:text-left text-center lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                            {{ t('We can start with solution and platform consulting to
                            help our clients get a clear vision of the IT solution
                            they want to implement. Also we can provide IT strategic
                            consulting advising companies how to improve their IT strategies.') }}
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-12 mt-10 group flex flex-wrap">
                <div>
                    <div>
                        <div
                            class="lg:ml-10 ml-36 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                            2
                        </div>
                    </div>
                    <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                </div>
                <div class="flex flex-wrap lg:w-5/6">
                    <div class=" lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                        <h1 class="uppercase font-bold text-2xl">
                            {{ t('IT consulting') }}
                        </h1>
                        <p class="lg:text-lg lg:text-left text-center lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                            {{ t('Apart from developing and testing an IT solution,
                            we are always ready to assist our customers in integration,
                            data migration and other related processes to ensure that a new IT solution integrates
                            into corporate workflows and contributes to business value.') }}
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-12 mt-10 group flex flex-wrap">
                <div>
                    <div>
                        <div
                            class="lg:ml-10 ml-36 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                            3
                        </div>
                    </div>

                </div>
                <div class="flex flex-wrap lg:w-5/6">
                    <div class=" lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                        <h1 class="uppercase font-bold text-2xl">
                            {{ t('Support') }}
                        </h1>
                        <p class="lg:text-lg lg:text-left text-center lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                            {{ t('We provide all-round support of the IT solutions our customers are
                            using (whether delivered by ScienceSoft or other teams): add new functionality,
                            ensure better interoperability, performance and usability, fix bugs.') }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('WHY SCIENCESOFT') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <ul class="list-disc">
            <li class="mt-2">31 {{ t('years in IT.') }}</li>
            <li class="mt-2">12 {{ t('years in') }} <a class="hover:text-blue-700"
                    href="">{{ t('CRM consulting') }}</a> {{ t('and implementation') }}</li>
            <li class="mt-2">700 {{ t('professionals on board') }}</li>
            <li class="mt-2">{{ t('Partnerships with leading CRM providers:') }} <a class="hover:text-blue-700"
                    href="#">{{ t('Microsoft') }}</a> {{ t('and') }} <a class="hover:text-blue-700"
                    href="#">{{ t('Salesforce.') }}</a></li>
            <li class="mt-2">
                {{ t('Industry expertise in retail and wholesale, professional services, manufacturing, healthcare, banking, telecoms, etc.') }}
            </li>
        </ul>
        <div class="p-6 shadow-xl lg:flex">
            <div class="lg:w-4/6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                    {{ t('Contact Us ') }}
                </h1>
                <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

                <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                    {{ t('Ready to start? Need more info about partnership details? Contact us to get free consultation and explore how we can cooperate. Our specialists are open to give the presentation of ScienceSoft services and provide you with our demos, success stories and other materials you need.') }}
                </p>
            </div>

            <div class="lg:w-2/6 m-auto">
                <a href="#">
                    <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                        {{ t('Contact Us ') }}
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
