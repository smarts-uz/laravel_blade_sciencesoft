@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('Web Design Services') }}
        </h1>
        <hr class="w-12 mt-5 text-yellow-400 h-4" />
        <img src="https://www.scnsoft.com/application-development/web-design/cover-pic---web-design-(3).png" />
        <p class="my-5 text-lg">
            {{ t("Founded in 1989, Smart Softwareis a provider of IT consulting and
            software development services. Having started as a small AI product
            company, we switched to IT services in 2002 and ever since we have
            helped non-IT organizations and software product companies improve
            business performance and quickly win new customers.") }}
        </p>
        <p class="my-5 text-lg">
            {{ t("With over 31 years in Information Technology, we have built up
            expertise in CRM, ERP, Ecommerce, Data Analytics, Information
            Security, DMS, and other areas and conquered such innovative fields
            as Artificial Intelligence and Machine Learning, Big Data, Internet
            of Things, Computer Vision, and Augmented and Virtual Reality.") }}
        </p>
        <p class="my-5 text-lg">
            {{ t("We headquarter in McKinney, TX, US, have a European office in
            Vantaa, Finland and a delivery center in Minsk, Belarus. Having
            gained trust among companies operating in the Gulf region, we opened
            our Middle East office in the UAE in 2020.") }}
        </p>

        <div class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8">
            <div class="flex flex-col">
                <h1 class="text-xl font-bold">{{ t('For non-IT enterprises') }}</h1>
                <hr class="w-12 border-b-2 border-yellow-600 my-4" />
                <div class="flex flex-wrap">
                    <p class="text-gray-500 text-xl w-full lg:w-4/5">
                        {{ t("To help you improve business performance, optimize customer
                service, and tap in digital transformation.") }}
                    </p>
                    <a href="#"
                        class="uppercase text-white text-sm bg-blue-600 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center cursor-pointer hover:bg-blue-900">
                        {{ t('get my web design') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center flex-col">
            <div class="lg:w-full w-full mb-8">
                <h1 class="uppercase lg:text-3xl font-bold mt-10 text-2xl">
                    {{ t('WHY Smart Software') }}
                </h1>
                <hr class="w-12 border-b-2 border-yellow-600" />
                <br />
                <div class="w-full px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        8 {{ t('years in digital design.') }}
                    </p>
                </div>
                <!-- ========================= -->
                <div class="w-full px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ t('UI and UX design teams with years of practical experience.') }}
                    </p>
                </div>
                <!-- ========================= -->
                <div class="w-full px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ t('Responsive and performance-driven design.') }}
                    </p>
                </div>
                <!-- ========================= -->
                <div class="w-full px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ t('Focus on conversions.') }}
                    </p>
                </div>
                <div class="w-full px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ t('Adherence to SEO and, if requested, WCAG2 regulations.') }}
                    </p>
                </div>
                <div class="w-full px-4 flex flex-row mb-5">
                    <span class="w-2 h-2 bg-blue-500 mt-3"></span>
                    <p class="px-4 text-base sm:text-lg text-sm">
                        {{ t('Well-established agile processes.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-container big-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide px-16 pb-4">
                    <div class="p-6 border md:flex hover:shadow-lg my-6">
                        <div class="md:w-6/12 mr-3">
                            <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2c-demo.png" alt="">
                        </div>
                        <div class="mt-6 md:w-6/12 ml-3">
                            <h1 class="text-xl font-bold">
                                A B2C ecommerce portal demo
                            </h1>
                            <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                In B2C ecommerce portals, customers value personalized and frictionless experience
                                across
                                the digital channels.
                            </p>
                            <p class="text-center mt-4 md:text-right lg:pt-16">
                                <a href="#" class="text-blue-700 font-semibold items-end">
                                    WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide px-16 pb-4">
                    <div class="p-6 border md:flex hover:shadow-lg my-6">
                        <div class="md:w-6/12 mr-3">
                            <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2b-ecommerce-demo.png"
                                alt="">
                        </div>
                        <div class="mt-6 md:w-6/12 ml-3">
                            <h1 class="text-xl font-bold">
                                A B2B ecommerce portal demo
                            </h1>
                            <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                In B2B ecommerce portals, buyers value convenient self-service tools to place and
                                manage
                                their bulk orders.
                            </p>

                            <p class="text-center mt-4 md:text-right lg:pt-16">
                                <a href="#" class="text-blue-700 font-semibold items-end">
                                    WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next text-gray-400"></div>
            <div class="swiper-button-prev text-gray-400"></div>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('PERKS OF WEB DESIGN WITH Smart Software') }}
        </h1>
        <div
            class="w-full hover:shadow-2xl lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center flex-col border-solid border-gray-200 border-2 my-7">
            <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                <img class="w-1/3" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                    alt="" />
            </div>
            <div class="lg:w-3/4 mx-auto w-11/12 mb-8">
                <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
                    {{ t('Competitive design') }}
                </h1>
                <hr class="w-12 border-b-2 border-yellow-600 m-4" />
                <br />
                <p class="px-4 text-base sm:text-lg text-sm">
                    {{ t("We combine your brand style and the latest web design trends,
              relying on the data gathered through rival company analysis,
              market studies and user research. This approach allows us to
              deliver one-of-a-kind and highly competitive designs that
              strengthen your brand identity, reflect brand’s values and support
              your marketing goals.") }}
                </p>
            </div>
        </div>
        <div
            class="w-full hover:shadow-2xl lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center flex-col border-solid border-gray-200 border-2 my-7">
            <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                <img class="w-1/3" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                    alt="" />
            </div>
            <div class="lg:w-3/4 mx-auto w-11/12 mb-8">
                <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
                    {{ t('Focus on your business objectives') }}
                </h1>
                <hr class="w-12 border-b-2 border-yellow-600 m-4" />
                <br />
                <p class="px-4 text-base sm:text-lg text-sm">
                    {{ t("When working on a design of a website or web portal, our team
              always targets your specific marketing and customer service
              objectives. We establish productive cooperation with the
              stakeholders to understand your business processes and deliver a
              design that will empower your individual conversion strategy.") }}
                </p>
            </div>
        </div>
        <div
            class="w-full hover:shadow-2xl lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center flex-col border-solid border-gray-200 border-2 my-7">
            <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                <img class="w-1/3" src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                    alt="" />
            </div>
            <div class="lg:w-3/4 mx-auto w-11/12 mb-8">
                <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
                    {{ t('Tailored to your target audience') }}
                </h1>
                <hr class="w-12 border-b-2 border-yellow-600 m-4" />
                <br />
                <p class="px-4 text-base sm:text-lg text-sm">
                    {{ t("We perform in-depth analysis of your users' expectations at the
              very start of the project. The data we use for tailoring your
              visuals is gained from usability studies (in case of a web
              solution in development) or comprehensive UX and UI audit (in case
              of an already developed web solution).") }}
                </p>
            </div>
        </div>
        <div
            class="w-full hover:shadow-2xl lg:px-4 lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center flex-col border-solid border-gray-200 border-2 my-7">
            <div class="lg:w-3/5 flex items-start justify-center pt-10 w-40 mx-auto">
                <img class="w-full"
                    src="https://www.scnsoft.com/screenshots/screenshots-slider-with-content/retail/migration-to-pimcore-for-optimizimg-telecommunications-website-02.png"
                    alt="" />
            </div>
            <div class="lg:w-3/4 mx-auto w-11/12 mb-8">
                <h1 class="uppercase lg:text-3xl px-4 font-bold mt-10 text-2xl">
                    {{ t('Success Story') }}
                </h1>
                <hr class="w-12 border-b-2 border-yellow-600 m-4" />
                <br />
                <p class="px-4 text-base sm:text-lg text-sm">
                    {{ t("Smart Software’s web design services resulted in a 6x increase in
              conversions of a US telecom company’s website.") }}
                </p>
            </div>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">{{ t('Web Design Services') }}</h1>
        <hr class="w-14 mt-3 bg-yellow-500 h-1" />
        <p class="text-gray-600 font-normal text-lg leading-9">
            {{ t("While providing the option of one-off web design, we also suggest
          continuous design support services that enable non-stop evolution of
          your ever-growing web solution. Working in close cooperation with your
          team, we gradually introduce improvements and changes based on regular
          user surveys and A/B testing, thus ensuring superior user experience.") }}
        </p>

    </div>

@endsection

@section('js')


@endsection
