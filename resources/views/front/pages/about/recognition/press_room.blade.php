@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="block">
        <div class="card w-full p-4">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800">{{ t('Smart Software’s press room') }}</h1>
            <hr class="w-14 border-b-2 bg-yellow-400 my-4">
            <img src="https://www.scnsoft.com/about/press-room_.svg" alt="" class="w-11/12 m-auto my-6">
            <p class="text-md leading-normal md:text-xl text-gray-600 my-6">
                {{ t("Smart Softwareis 31 years in IT business. We systematically post articles on acute IT
                    problems to share our experience and enlighten people on IT topics. We are eager to
                    expand our public relations and cooperate with reporters, bloggers, influences, speakers,
                    and everyone else interested in creating expert IT content.") }}
            </p>
        </div>
        <div class="card w-full p-4">
            <h1 class="text-xl md:text-3xl font-bold text-gray-800">{{ t('ABOUT US AND OUR EXPERIENCE') }}
            </h1>
            <hr class="w-14 border-b-2 bg-yellow-400 my-4">
            <p class="text-md leading-normal md:text-xl text-gray-600 my-6">
                {{ t("Smart Softwareprovides IT consulting and custom software development services for multiple
                    industries, including healthcare, retail, manufacturing, banking, and telecoms. Key domains
                    of our expertise are IoT, big data, information security, mobile and web development,
                    collaboration & knowledge management, and more.") }}<br><br>

                {{ t("We partner with Microsoft, IBM, Magento, Salesforce, Oracle, and other tech leaders. At present,
                    we have completed over 2,695 projects and cooperated with Walmart, Nestle, NASA JPL, T-Mobile,
                    Baxter, M&T Bank, and other corporations.") }}
            </p>
        </div>

        <div class="card w-full p-4">
            <h1 class="text-xl md:text-3xl font-bold text-gray-800">{{ t('OUR EXPERTS') }}</h1>
            <hr class="w-14 border-b-2 bg-yellow-400 my-4">
            <p class="text-md leading-normal md:text-xl text-gray-600 my-6">
                {{ t("Our professionals regularly write for our blog and other popular IT blogs, such as CIO.com,
                    InformationWeek.com, Medgadget.com, Arpost.com, and more. They can help you with your articles and
                    researches by commenting on technology trends and news.") }}
            </p>
            <div class="user-info flex flex-wrap">
                <div class="user flex-column md:flex content-center w-full md:w-2/5 my-4 mr-9">
                    <img src="https://www.scnsoft.com/about/rounded/bshyklo.png" alt="" class="user-img mr-6 w-24 h-24">
                    <div class="text flex-column mt-6">
                        <a href="#" class="text-blue-700 underline">
                            <p class="font-bold hover:text-blue-700 text-lg mg:xl text-gray-800">
                                {{ t('Boris Shiklo:') }}</p>
                        </a>
                        <p class="my-4 text-md text-gray-600">
                            {{ t('IT consulting and IoT expert, CTO at Smart Software.') }}
                        </p>
                    </div>
                </div>
                <div class="user flex-column md:flex content-center w-full md:w-2/5 my-4 mr-9">
                    <img src="https://www.scnsoft.com/about/rounded/abekker.png" alt="" class="user-img mr-6 w-24 h-24">
                    <div class="text flex-column mt-6">
                        <a href="#" class="text-blue-700 underline">
                            <p class="font-bold hover:text-blue-700 text-lg mg:xl text-gray-800">
                                {{ t('Alex Bekker:') }}</p>
                        </a>
                        <p class="my-4 text-md text-gray-600">
                            {{ t('Head of the Data Analytics Team.') }}
                        </p>
                    </div>
                </div>
                <div class="user flex-column md:flex content-center w-full md:w-2/5 my-4 mr-9">
                    <img src="https://www.scnsoft.com/about/rounded/umurashka.png" alt="" class="user-img mr-6 w-24 h-24">
                    <div class="text flex-column mt-6">
                        <a href="#" class="text-blue-700 underline">
                            <p class="font-bold hover:text-blue-700 text-lg mg:xl text-gray-800">
                                {{ t('Uladzislau Murashka:') }}</p>
                        </a>
                        <p class="my-4 text-md text-gray-600">
                            {{ t('IT security evangelist, certified ethical hacker with 6 years of experience in pentesting.') }}
                        </p>
                    </div>
                </div>
                <div class="user flex-column md:flex content-center w-full md:w-2/5 my-4 mr-9">
                    <img src="https://www.scnsoft.com/about/rounded/sgalubenka.png" alt="" class="user-img mr-6 w-24 h-24">
                    <div class="text flex-column mt-6">
                        <a href="#" class="text-blue-700 underline">
                            <p class="font-bold hover:text-blue-700 text-lg mg:xl text-gray-800">
                                {{ t('Sergey Golubenko:') }}</p>
                        </a>
                        <p class="my-4 text-md text-gray-600">
                            {{ t('SharePoint and Office 365 expert, Team Lead and Solution Architect.') }}
                        </p>
                    </div>
                </div>
                <div class="user flex-column md:flex content-center w-full md:w-2/5 my-4 mr-9">
                    <img src="https://www.scnsoft.com/about/rounded/vbelski.png" alt="" class="user-img mr-6 w-24 h-24">
                    <div class="text flex-column mt-6">
                        <a href="#" class="text-blue-700 underline">
                            <p class="font-bold hover:text-blue-700 text-lg mg:xl text-gray-800">
                                {{ t('Vadim Belski:') }}</p>
                        </a>
                        <p class="my-4 text-md text-gray-600">
                            {{ t('Head of Web Development.') }}
                        </p>
                    </div>
                </div>
                <div class="user flex-column md:flex content-center w-full md:w-2/5 my-4 mr-9">
                    <img src="https://www.scnsoft.com/about/rounded/amikhailau.png" alt="" class="user-img mr-6 w-24 h-24">
                    <div class="text flex-column mt-6">
                        <a href="#" class="text-blue-700 underline">
                            <p class="font-bold hover:text-blue-700 text-lg mg:xl text-gray-800">
                                {{ t('Andrei Mikhailau:') }}</p>
                        </a>
                        <p class="my-4 text-md text-gray-600">
                            {{ t('QA and testing professional, Software Testing Director.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <a href="#"
                    class="md:w-72 bg-blue-500 text-center font-bold text-white py-4 transition duration-300 ease-in-out hover:bg-blue-600 my-6 w-full text-sm uppercase">
                    {{ t('See all experts') }}
                </a>
            </div>
        </div>
        <div class="card w-full p-4">
            <h1 class="text-xl md:text-2xl text-gray-800 font-bold">
                {{ t('Our influencers actively participate in interviews and IT researches:') }}
            </h1>
            <ul style="list-style: square;" class="text-blue-700 m-6">
                <li class="text-md md:text-lg text-gray-600">
                    {{ t('Our CTO, Boris Shiklo, shared his proficient opinion on IT compliance issues for an') }}
                    <a href="#" class="text-blue-700 underline">{{ t('article') }}</a> {{ t('on') }}
                    CIO.com.
                </li>
                <li class="text-md md:text-lg text-gray-600">
                    {{ t('Our IoT expert was invited to participate in') }} <a href="#"
                        class="text-blue-700 underline">{{ t('research on Smart Cities.') }}</a></li>
                <li class="text-md md:text-lg text-gray-600">
                    {{ t('Our IT security professional Uladzislau Murashka was') }} <a href="#"
                        class="text-blue-700 underline">{{ t('featured on Digital Guardian blog.') }}</a></li>
            </ul>
        </div>
        <div class="card w-full p-4">
            <h1 class="text-xl md:text-2xl font-bold text-gray-800 uppercase">{{ t('WE ARE OPEN TO COOPERATION') }}
            </h1>
            <hr class="w-14 border-b-2 bg-yellow-400 my-4">
            <h1 class="text-lg md:text-xl text-gray-600">{{ t('If you:') }} </h1>
            <ul style="list-style: square;" class="text-blue-700 m-6">
                <li class="text-md md:text-lg text-gray-600">
                    {{ t('Require competent commentary on IT problems.') }}</li>
                <li class="text-md md:text-lg text-gray-600">
                    {{ t('Need any tech-related information for your article.') }}</li>
                <li class="text-md md:text-lg text-gray-600">{{ t('Want to interview one of our experts.') }}</li>
                <li class="text-md md:text-lg text-gray-600">
                    {{ t('Would like to quote any research from our articles.') }}</li>
            </ul>
            <p class="text-md leading-normal md:text-lg text-gray-600 my-6">
                {{ t('Please send your questions to our Communications Manager, Darya Afonava, at') }}
                <a href="#" class="underline text-blue-700">press@scnsoft.com</a> {{ t('or call us at') }} +1 214
                306 68 37. {{ t('We will process your request') }}
                {{ t('as soon as possible and connect you with a relevant expert.') }}
            </p>
        </div>
        <div class="flex justify-end">
            <a href="#"
                class="md:w-72 bg-blue-500 text-center font-bold text-white py-4 transition duration-300 ease-in-out hover:bg-blue-600 my-6 w-full text-md uppercase">
                {{ t('Contact us') }}
            </a>
        </div>
    </div>

@endsection

@section('js')

@endsection
