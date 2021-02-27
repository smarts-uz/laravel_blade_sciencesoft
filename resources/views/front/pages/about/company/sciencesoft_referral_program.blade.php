@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="my-5">
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('Referral Program for IT Consulting and Software Development Services
            ') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <img src="https://www.scnsoft.com/cover-pictures/become-sciencesoft-s-partner.svg" alt="">
        <p class="py-5 text-lg text-gray-500">{{ _trans('If you are a') }} <strong>
                {{ _trans('trusted consultancy') }} </strong>, {{ _trans(' an') }} <strong></strong>
            {{ _trans('individual consultant') }}</strong> {{ _trans('or a') }} <strong>
                {{ _trans('marketing agency') }} </strong>,
            {{ _trans('you may need software development services for your customers apart from the services you directly provide. We understand that software development is not your priority, and we are ready to take on this task and equip your clients with the software tailored to their industry specifics and business needs.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">{{ _trans('If you are a') }} <strong>{{ _trans('sales agent') }}
            </strong>,
            {{ _trans('you can help us hunt for new IT consulting and custom software development opportunities. All you need is to provide us with relevant leads, and we’ll reward your efforts according to our Referral Program.') }}
        </p>
        <p class="py-5 text-lg text-gray-500">
            {{ _trans('Join TeamPRO Referral Program for IT consulting and software development services and get rewarded for the leads you bring us. We are open to expanding our business network and obtaining new IT consulting and software development challenges.') }}
        </p>
        <h1 class="text-4xl font-semibold pb-10 text-gray-800">{{ _trans('COOPERATION PROCEDURE') }}</h1>
        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
        <ul class="list-disc pl-5">
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('We sign an NDA to ensure your sensitive data is not disclosed and an Agent Agreement that regulates the specifics of our cooperation in frames of the Referral Program (including the commissions you get as a mediator).') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('You introduce us to your clients who need IT services (IT consulting, software design, custom application development).') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('We communicate with your clients and offer them the solutions they need (or may need) – saving your time and efforts.') }}
            </li>
            <li class="py-2 text-lg text-gray-500">
                {{ _trans('When we win a contract, we compensate your efforts (paying a percentage of the contract) according to the conditions of our Referral Program.') }}
            </li>
            <p class="py-5 text-lg text-gray-500">
                {{ _trans('Your participation in the software project itself is not mandatory, but you can join it, for example, as a consultant. We are interested in long-term cooperation and can offer all-round software development and IT consulting support to every new customer you have. We respect your reputation and ensure that required services will be delivered to end-users within time and budget. We are also ready to provide you with all the necessary marketing materials to introduce our services to your customers (including co-branded materials featuring the benefits of a joint offer for your customers).') }}
            </p>
            <p class="py-5 text-lg text-gray-500">
                {{ _trans('Over the past years, we’ve been a trusted partner for agents in various industries including') }}
                <a class="underline hover:text-blue-600" href="#">{{ _trans('healthcare') }}</a> , <a
                    class="underline hover:text-blue-600" href="#">{{ _trans('banking') }}</a> , <a
                    class="underline hover:text-blue-600" href="#">{{ _trans('retail') }}</a> ,<a
                    class="hover:text-blue-600 underline" href="#">{{ _trans('manufacturing') }}</a> , <a
                    class="underline hover:text-blue-600" href="">{{ _trans('telecom') }}</a>
                {{ _trans('in the US and Europe, which resulted in new beneficial long-term business relationships for our partners and us. At TeamPRO, we believe that doing business with partners is an effective way to reach out to the customers, meet their expectations and win their trust.') }}
            </p>
            <p class="py-5 text-lg text-gray-500 mb-5">
                {{ _trans('Please feel free to send your questions to us and set up a free consultation with our representative.') }}
            </p>
        </ul>
        <div class="relative my-32 mx-10">
            <button
                class="w-48 h-12 bg-blue-800 hover:bg-blue-900 font-medium absolute mt-10 mx-3 right-0 bottom-16 text-white text-lg uppercase">
                {{ _trans('Contact US') }}
            </button>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('COOPERATION PROCEDURE') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />

        <!-- Cards -->
        <div class="mt-2 md:mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-32 md:h-32"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/big_data.svg" alt="">
                </div>
                <div class="flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-3xl font-bold">
                        {{ _trans('Data analytics including big data analytics') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        {{ _trans('Cleansing and integrating data, providing analysis and visualization to get valuable business insights.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-2 md:mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-40 md:h-40"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/crm.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-2xl md:text-4xl font-bold">{{ _trans('CRM') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        {{ _trans('Helping companies enhance customer management, win new clients and improve productivity.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-2 md:mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-40 md:h-40"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/ecommerce.svg" alt="">
                </div>

                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans('Ecommerce') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        {{ _trans('Seizing the potential of Magento to ensure efficient inventory management, analytics and reporting, cross-business order management, account, purchase and payment history review and more.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-2 md:mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-40 md:h-40"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/enterprise_portals.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans('Portals') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        {{ _trans('Helping companies build efficient e-cooperation with their customers and partners.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-2 md:mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center">
                <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-full h-full md:w-40 md:h-40"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/mobile.svg" alt="">
                </div>
                <div class=" flex flex-col w-3/5">
                    <h1 class="text-3xl md:text-4xl font-bold">{{ _trans('Mobile apps') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        {{ _trans('Developing native and cross-platform apps for customers and employees in healthcare, banking, retail,
                    manufacturing and professional services and more at employee, department and company level.') }}
                    </p>
                </div>
            </div>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('HOW WE WORK') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <div class="grid lg:grid-cols-3 grid-cols-1 gap ">
            <div class="border-2 border-gray-300 p-2 w-11/12">
                <h1 class="mb-8 text-2xl pl-4 pt-4 font-bold">{{ _trans('Healthcare') }}</h1>
                <ul class="list-disc font-normal ml-7">
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
                        {{ _trans('15 years in healthcare IT consulting and software development.') }}</li>
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">{{ _trans('Our customers are') }}
                        <strong>{{ _trans('Baxter, MSxHealth, Chiron Health, Saratoga Bridges') }}</strong>
                        {{ _trans('and other healthcare service providers.') }}</li>
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
                        {{ _trans('We offer mobile applications for doctors and patients, healthcare CRM, medical portals, healthcare data analytics and more.') }}
                    </li>
                </ul>
            </div>
            <div class="border-2 border-gray-300 p-2 w-11/12">
                <h1 class="mb-8 text-2xl pl-4 pt-4 font-bold">{{ _trans('Banking') }}</h1>
                <ul class="list-disc font-normal ml-7">
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
                        {{ _trans('15 years in mobile banking and intranets, document and knowledge management, banking data analytics, customer portals, loyalty program management and more.') }}
                    </li>
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">{{ _trans('Our customers are') }}
                        <strong>{{ _trans('Baxter, MSxHealth, Chiron Health, Saratoga Bridges') }}</strong>
                        {{ _trans('and other healthcare service providers.') }}</li>
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
                        {{ _trans('We offer mobile applications for doctors and patients, healthcare CRM, medical portals, healthcare data analytics and more.') }}
                    </li>
                </ul>
            </div>
            <div class="border-2 border-gray-300 p-2 w-11/12">
                <h1 class="mb-8 text-2xl pl-4 pt-4 font-bold">{{ _trans('Retail and consumer goods') }}</h1>
                <ul class="list-disc font-normal ml-7">
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
                        {{ _trans('15 years in healthcare IT consulting and software development.') }}</li>
                    <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
                        {{ _trans('We offer ecommerce, loyalty solutions, customer data analytics, retail business intelligence, in-store automation.') }}
                        <strong>{{ _trans('Baxter, MSxHealth, Chiron Health, Saratoga Bridges') }}</strong>
                        {{ _trans('We’ve been delivering IT Retail services since 2003 and created IT solutions for such corporations as Walmart, Nestle, Heinz and more.') }}
                    </li>
                </ul>
            </div>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('HOW WE WORK') }}
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
                        <h1 class="uppercase font-bold text-2xl">IT consulting</h1>
                        <p class="lg:text-lg lg:text-left text-center text-gray-400 lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                            We can start with solution and platform consulting to
                            help our clients get a clear vision of the IT solution
                            they want to implement. Also we can provide IT strategic
                            consulting advising companies how to improve their IT strategies.
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
                        <h1 class="uppercase font-bold text-2xl">IT consulting</h1>
                        <p class="lg:text-lg lg:text-left text-center lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                            Apart from developing and testing an IT solution,
                            we are always ready to assist our customers in integration,
                            data migration and other related processes to ensure that a new IT solution integrates
                            into corporate workflows and contributes to business value.
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
                        <h1 class="uppercase font-bold text-2xl">Support</h1>
                        <p class="lg:text-lg lg:text-left text-center lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                            We provide all-round support of the IT solutions our customers are
                            using (whether delivered by ScienceSoft or other teams): add new functionality,
                            ensure better interoperability, performance and usability, fix bugs.
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('WHY SCIENCESOFT') }}
        </h1>
        <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4" />
        <ul class="list-disc">
            <li class="mt-2">31 {{ _trans('years in IT.') }}</li>
            <li class="mt-2">12 {{ _trans('years in') }} <a class="hover:text-blue-700"
                    href="">{{ _trans('CRM consulting') }}</a> {{ _trans('and implementation') }}</li>
            <li class="mt-2">700 {{ _trans('professionals on board') }}</li>
            <li class="mt-2">{{ _trans('Partnerships with leading CRM providers:') }} <a class="hover:text-blue-700"
                    href="#">{{ _trans('Microsoft') }}</a> {{ _trans('and') }} <a class="hover:text-blue-700"
                    href="#">{{ _trans('Salesforce.') }}</a></li>
            <li class="mt-2">
                {{ _trans('Industry expertise in retail and wholesale, professional services, manufacturing, healthcare, banking, telecoms, etc.') }}
            </li>
        </ul>
        <div class="p-6 shadow-xl lg:flex">
            <div class="lg:w-4/6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                    Contact Us
                </h1>
                <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

                <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                    {{ _trans('Ready to start? Need more info about partnership details? Contact us to get free consultation and explore how we can cooperate. Our specialists are open to give the presentation of ScienceSoft services and provide you with our demos, success stories and other materials you need.') }}
                </p>
            </div>

            <div class="lg:w-2/6 m-auto">
                <a href="#">
                    <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                        Contact Us
                    </div>
                </a>

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
