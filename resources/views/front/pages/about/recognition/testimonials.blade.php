@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="block">
        <div class="card w-full my-4">
            <h1 class="text-3xl text-gray-800 font-bold">{{ t('Testimonials') }}</h1>
            <hr class="border-t-2 w-12 border-yellow-600 my-1" />
            <p class="text-gray-600 text-md leading-7 md:leading-8 lg:leading-9 md:text-lg lg:text-xl">
                {{ t('We collaborate with companies from') }} <strong>37 {{ t('countries') }}</strong>
                {{ t('and') }} <strong>23 {{ t('industries') }}</strong>.
                {{ t('Our project portfolio includes') }} <strong>2,695 {{ t('success stories') }}</strong>,
                {{ t("including projects
                    for Walmart, eBay, NASA JPL, PerkinElmer, Baxter, IBM, Leo Burnett. We
                    asked our customers what are their impressions on cooperation with Smart Software–
                    have a look at their answers in the testimonials below.") }}
            </p>
        </div>
        <div class="card my-6 lg:flex">
            <div class="lg:w-1/2 pr-9">
                <iframe class="w-full h-72 mb-5" src="https://www.youtube.com/embed/_Zsib6yDYWo" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="lg:flex-row lg:w-1/2">
                <h1 class="text-2xl lg:3xl text-gray-800 font-bold">
                    {{ t('Leo Burnett Worldwide: What Is Working with Smart SoftwareLike') }}</h1>
                <hr class="border-t-2 w-12 border-yellow-600 my-1" />
                <p class="text-gray-600 text-md md:text-lg lg:text-xlleading-7 md:leading-8 lg:leading-9">
                    {{ t("For 4 years, Smart Softwarehave been an outsourcing partner of a global advertising agency
                    Leo Burnett Worldwide. Sam Gooby, Head of Platform Production at Leo Burnett, shares his
                    first-hand experience on collaboration with our IT experts.") }}
                </p>
            </div>
        </div>
        <p class="text-gray-600 text-md md:text-lg lg:text-xl leading-7 md:leading-8 lg:leading-9">
            {{ t("For your convenience, we divided the testimonials by
                industry, service and technology so you can easily find
                the ones that are relevant to your case.") }}
        </p>
        <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
            <div class="md:w-80 mb-6">
                <img src="https://www.scnsoft.com/testimonials-logos/chiron-health-logo.svg" alt=""
                    class="w-56 md:w-40 m-auto">
            </div>
            <div class="w-full">
                <div class="md:flex">
                    <p class="text-gray-600 leading-7">
                        <em>
                            {{ t("Chiron Health’s core business is providing caregivers with a web-based
                                telemedicine platform which allows them to connect with patients for routine
                                follow-ups and similar use cases. We engaged Smart Softwareto build an Android
                                app that complements our web-based platform for our patients.") }}
                            <br>{{ t("Smart Softwaredevelopers proved themselves to be Android experts.
                                They advised and successfully lead the way from end to end through the technical
                                challenges and considerations with development of the Android app. TeamPRO
                                team was in daily contact with our developers and our method of communication was
                                a huge factor in how successful this engagement was. I would also like to point out
                                TeamPRO’s solid approach to testing. The thorough testing they performed on our
                                beta environment ensured that the app was launched without critical bugs. We have
                                also engaged them to introduce a few enhancements to the app and would certainly
                                consider Smart Softwareas a technology partner in further software development initiatives.") }}
                        </em>
                    </p>
                </div>
                <div class="w-ful flex-column md:pl-14 my-6">
                    <h1 class="text-lg font-bold text-gray-800">{{ t('Justin Turner') }}</h1>
                    <p class="text-lg text-gray-700">{{ t('CTO, Chiron Health') }}</p>
                </div>
                <div class="flex flex-wrap items-center md:pl-14">
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Health Care') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Software Development') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600">{{ t('Mobile') }}</p>
                </div>
            </div>
        </div>
        <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
            <div class="md:w-80 mb-6">
                <img src="https://www.scnsoft.com/testimonials-logos/enonic-logo.svg" alt="" class="w-56 md:w-40 m-auto">
            </div>
            <div class="w-full">
                <div class="md:flex">
                    <p class="text-gray-600 leading-7">
                        <em>
                            {{ t("We have been cooperating with Smart Softwarefor 5 years. TeamPRO's
                                team of five Java developers and one Test Engineer have been working hard
                                to ensure our product - Enonic XP - exceeds our customer's expectations.
                                The team has become an integrated part of Enonic, and we appreciate their
                                efforts and passion for the product.") }}<br>
                            {{ t("TeamPRO's experience in agile development ensured smooth project
                                implementation and iterative development of Enonic XP. This enabled us to adjust
                                to the changing market requirements and incorporate features that made us stand out
                                from competition. As a result, Enonic XP has evolved into an easy-to-use and scalable
                                platform, which is crucial for our success") }}.<br>
                            {{ t('Thanks for a great job so far!') }}
                        </em>
                    </p>
                </div>
                <div class="w-ful flex-column md:pl-14 my-6">
                    <h1 class="text-lg font-bold text-gray-800">{{ t('Morten Øien Eriksen') }}</h1>
                    <p class="text-lg text-gray-700">{{ t('CEO, Enonic') }}</p>
                </div>
                <div class="flex flex-wrap items-center md:pl-14">
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Information Technologies') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Software Development') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Testing & QA') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Team augmentation') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600">{{ t('Java') }}</p>
                </div>
            </div>
        </div>
        <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
            <div class="md:w-80 mb-6">
                <img src="https://www.scnsoft.com/testimonials-logos/llaves-altuna-de-mexico-logo.svg" alt=""
                    class="w-56 md:w-40 m-auto">
            </div>
            <div class="w-full">
                <div class="md:flex">
                    <p class="text-gray-600 leading-7">
                        <em>
                            {{ t("We worked with Smart Softwarein developing our SharePoint Intranet.
                                The development and implementation process was very smooth and delivered
                                the exact results we were expecting. We will surely work with them in the
                                future.") }}
                        </em>
                        <a href="#" class="text-blue-500">{{ t('Read original') }}</a>
                    </p>
                </div>
                <div class="w-ful flex-column md:pl-14 my-6">
                    <h1 class="text-lg font-bold text-gray-800">{{ t('Morten Øien Eriksen') }}</h1>
                    <p class="text-lg text-gray-700">{{ t('CEO, Enonic') }}</p>
                </div>
                <div class="flex flex-wrap items-center md:pl-14">
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Manufactering') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Software Development') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Share point') }}</p>
                </div>
            </div>
        </div>
        <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
            <div class="md:w-80 mb-6">
                <img src="https://www.scnsoft.com/testimonials-logos/simpli5-logo.svg" alt="" class="w-56 md:w-40 m-auto">
            </div>
            <div class="w-full">
                <div class="md:flex">
                    <p class="text-gray-600 leading-7">
                        <em>
                            {{ t("We partnered with Smart Softwareto carry out penetration testing of our Simpli5®
                                web-based application.") }}
                            <br>{{ t("We were under some time pressure to get penetration testing performed as quickly
                                as possible. When I reached out TeamPRO, they were immediately responsive to my
                                inquiry, they provided a very competitive quote quickly, and they were able to schedule
                                the testing shortly after our acceptance of the quote.") }}
                            <br>{{ t("TeamPRO’s security testing team performed exceptionally well and gave us
                                confidence that our application posed no serious vulnerabilities. The collaboration
                                was smooth and easy, and we were very pleased with selecting Smart Softwareas our vendor.") }}
                            <br>{{ t("Cooperating with Smart Softwarewas a terrific experience, and we will definitely
                                consider them for our future security testing needs.") }}
                        </em>
                        <a href="#" class="text-blue-500">{{ t('Read original') }}</a>
                    </p>
                </div>
                <div class="w-ful flex-column md:pl-14 my-6">
                    <h1 class="text-lg font-bold text-gray-800">{{ t('Ed Gordon') }}</h1>
                    <p class="text-lg text-gray-700">{{ t('VP Products, 5 Dynamics (Simpli5)') }}</p>
                </div>
                <div class="flex flex-wrap items-center md:pl-14">
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Information Technologies') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Cybersecurity services') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Security testing') }}</p>
                </div>
            </div>
        </div>
        <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
            <div class="md:w-80 mb-6">
                <img src="https://www.scnsoft.com/testimonials-logos/lixar.svg" alt="" class="w-56 md:w-40 m-auto">
            </div>
            <div class="w-full">
                <div class="md:flex">
                    <p class="text-gray-600 leading-7">
                        <em>
                            {{ t("Smart Softwareoffers a high caliber of resources skilled in Microsoft
                                Azure .NET, mobile and Quality Assurance. Over the past three years,
                                Lixar was very pleased with the service provided by Smart Software
                                teams and executive management. For accelerated project timelines which
                                require skilled resources, Smart Softwareis a company that your team should consider.") }}
                        </em>
                    </p>
                </div>
                <div class="w-ful flex-column md:pl-14 my-6">
                    <h1 class="text-lg font-bold text-gray-800">{{ t('Jan Banda') }}</h1>
                    <p class="text-lg text-gray-700">{{ t('Director, Lixar') }}</p>
                </div>
                <div class="flex flex-wrap items-center md:pl-14">
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Information Technologies') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Software Development') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('Testing & QA') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600 mr-4">{{ t('.NET') }}</p>
                    <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                    <p class="text-gray-600">{{ t('Mobile') }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
