@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>

            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ t('End-to-end Application Services. Your Journey to Digital Transformation and Optimized TCO') }}
            </h1>
            <hr class="w-12 mt-5 border-yellow-400 h-4" />
            <img class="w-50%" src="https://www.scnsoft.com/application-development/application_services.svg" />
            <p class="my-5 text-lg">
                {{ t("Founded in 1989, TeamPRO is a provider of IT consulting and software
           development services. Having started as a small AI product company, we
           switched to IT services in 2002 and ever since we have helped non-IT
           organizations and software product companies improve business
           performance and quickly win new customers.") }}
            </p>
            <p class="my-5 text-lg">
                {{ t("With over 31 years in Information Technology, we have built up expertise
           in CRM, ERP, Ecommerce, Data Analytics, Information Security, DMS, and
           other areas and conquered such innovative fields as Artificial
           Intelligence and Machine Learning, Big Data, Internet of Things,
           Computer Vision, and Augmented and Virtual Reality.") }}
            </p>
            <p class="my-5 text-lg">
                {{ t("We headquarter in McKinney, TX, US, have a European office in Vantaa,
           Finland and a delivery center in Minsk, Belarus. Having gained trust
           among companies operating in the Gulf region, we opened our Middle East
           office in the UAE in 2020.") }}
            </p>
            <a href=""
                class="bg-blue-500 font-bold text-white px-6 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6 float-right">{{ t('CONTACT US') }}</a>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('End-to-end Application Services. Your Journey to Digital Transformation and Optimized TCO') }}
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <p class="font-sans">{{ t('Our concept of application services is outlined in the following points:') }}</p>
        <ul class="list-disc ">
            <li class="pt-2"><strong>{{ t('We use modern technologies and approaches.') }}
                </strong>{{ t('We eagerly utilize and constantly develop our competencies in IoT, big data, machine learning, AI, image analysis,&nbsp;AR, DevOps/Continuous Delivery (CD), and don’t shun proven and long-trusted techs.') }}
                &nbsp;&nbsp;&nbsp;</li>
            <li class="pt-2"><strong>{{ t('We know how to deal with complex enterprise IT landscapes') }}</strong>
                {{ t('that have evolved for decades. For') }}
                31&nbsp;{{ t('years, we’ve been accumulating the experience from multiple projects and learned the tricks to tame the systems of various nature a') }}<span>{{ t('nd architectural') }}&nbsp;{{ t('patterns.') }}
                </span></li>
            <li class="pt-2">
                <strong><span>{{ t('We are flexible in terms of cooperation') }}</span></strong><span>.
                    {{ t('We are ready to cooperate with third-party vendors and together deliver business value to the customers. If the customer’s needs and priorities change, we can adjust the responsibility scope on the go and adapt service timelines to the new context.') }}&nbsp;</span>
            </li>
            <li class="pt-2">
                <strong><span>{{ t('We focus on TCO of the solutions we deliver and manage.') }}</span></strong><span>
                    {{ t('We analyze how to optimize operational, maintenance, and other costs during a solution’s life cycle.') }}
                    &nbsp;</span>
            </li>
        </ul>
        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('APPLICATION SERVICES WE OFFER') }}
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <p class="font-sans ">
            {{ t('TeamPRO offers the following set of application services for midsized and big enterprises:') }}
        </p>
        <p><img alt="" class="pt-4" src="https://www.scnsoft.com/application-development/application-services_6.svg"
                style="height:158px; width:701px"></p>
        <h1 class="uppercase font-bold pt-6  text-2xl">{{ t('Application development') }}</h1>
        <p class="pt-4">
            {{ t('We design and deliver web, mobile and cloud business applications of different complexity and for various needs. In the process, we pay special attention to their flexibility, security, speed and integration potential.') }}
        </p>
        <p class="pt-4">{{ t('The success of our software comes from:') }}</p>
        <!-- ul -->

        <div class="rounded-sm  relative pt-2 ">
            <div class="flex flex-col md:flex-row ">
                <div class="flex w-16 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-64 top-0"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/business-specificity-half-solid.svg"
                        alt="">
                </div>
                <div class="flex flex-col w-4/5 mb-4">
                    <strong class="">{{ t('Tailored pricing plan') }}</strong>
                    <p class="text-gray-500 pt-2">
                        {{ t('We thoroughly study all critical business needs and the future application context, make appropriate architecture and technology choices to build the solution that answers the specific requirements of your business.') }}
                    </p>
                </div>
            </div>
        </div>

        <section>
            <h2 class=" font-bold pt-6  text-2xl ">{{ t('Application management') }} </h2>
            <p class="pt-4 text-gray-600">
                <span>{{ t('We can take responsibility for the management of your applications ensuring its increased business flexibility and optimized IT costs. With') }}&nbsp;{{ t('latest process management practices, our team will maintain and monitor your application servers and databases taking care of their enhanced performance, sustainability, stability and keepin them in sync with current business needs.') }}</span>
            </p>
            <p class="text-gray-600 pt-5">
                <span>{{ t('The list of our application management services includes but is not limited to:') }}</span>
            </p>
        </section>

        <div class="rounded-sm  relative pt-5 ">
            <div class="flex flex-col md:flex-row ">
                <div class="flex w-16 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-64 top-0"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/business-specificity-half-solid.svg"
                        alt="">
                </div>
                <div class="flex flex-col w-4/5 mb-4">
                    <strong class="">{{ t('Remote application monitoring and performance management') }}</strong>
                    <p class="text-gray-500 pt-2">
                        <span>{{ t('We take over the continuous remote diagnostics of your critical applications. We identify problems, share with you the detailed info on the causes of found issues and provide recommendations on the needed improvements. We track application performance, transaction integrity, data consistency, message queue exceeds, server failures.') }}</span>
                    </p>
                </div>
            </div>
        </div>
        <h1 class="uppercase font-bold pt-6  text-2xl">{{ t('Application modernization') }}</h1>
        <p class="pt-4 text-gray-600 w-4/5">
            {{ t('Our team implements modernization of legacy applications to increase their efficiency and incorporate them better into a modern enterprise IT strategy.') }}
        </p>
        <p class="text-gray-600 pt-5">
            <span>{{ t('We support a wide range of ‘revival’ activities and scale them according to your business needs.') }}</span>
        </p>

        <ul class="list-disc pt-2">
            <li class="pt-2"><strong>{{ t('Re-hosting') }}
                    –</strong>{{ t('moving an entire application from the on-premises or the old cloud infrastructure to the new cloud without significant modifications and changes in code.') }}
            </li>

            <li class="pt-2"><strong>{{ t('Re-platforming') }}
                    –</strong>{{ t('moving a part or an entire application to the cloud with small optimizations and upgrades to leverage such cloud capabilities as automated performance scaling and improved resillience.') }}
            </li>

            <li class="pt-2"><strong>{{ t('Re-architecting') }}
                    –</strong>{{ t('changing an application’s architecture and design to make it more scalable, flexible, and integration-friendly or to allow for simplified app maintenance and streamlined testing and deployment of further upgrades.') }}
            </li>

            <li class="pt-2"><strong>{{ t('Re-engineering') }}
                    –</strong>{{ t('redesigning certain application components, updating certain aspects (e.g., performance, functionality) or introducing new elements to an already existing system.') }}
            </li>
            <li class="pt-2"><strong>{{ t('Re-coding') }}
                    –</strong>{{ t('rewriting legacy applications on PowerBuilder, Delphi, VB, C++, etc. and outdated versions of Java, .NET, PHP and Python with modern technologies and tools.') }}
            </li>
        </ul>

        <h1 class=" font-bold pt-6  text-2xl">{{ t('Application integration') }}</h1>
        <p class="pt-4 text-gray-600 w-4/5">
            {{ t('We can transform multiple independent applications of your IT environment into one coherently working system allowing for its increased efficiency and user convenience.') }}
        </p>
        <p class="text-gray-600 pt-5">
            <span>{{ t('To make integration successful, we address our experience in integrating systems and applications of various complexity, scale and technology stacks and:') }}</span>
        </p>
        <div class="rounded-sm  relative pt-5 ">
            <div class="flex flex-col md:flex-row ">
                <div class="flex w-16 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-64 top-0"
                        src="https://www.scnsoft.com/blue-icons-on-grey-background/business-specificity-half-solid.svg"
                        alt="">
                </div>
                <div class="flex flex-col w-4/5 mb-4">
                    <strong class="">{{ t('Remote application monitoring and performance management') }}</strong>
                    <p class="text-gray-500 pt-2">
                        <span>{{ t('We take over the continuous remote diagnostics of your critical applications. We identify problems, share with you the detailed info on the causes of found issues and provide recommendations on the needed improvements. We track application performance, transaction integrity, data consistency, message queue exceeds, server failures.') }}</span>
                    </p>
                </div>
            </div>
        </div>

        <h1 class=" font-bold pt-6  text-2xl">{{ t('Application security services') }}</h1>
        <p class="pt-4 text-gray-600 w-4/5">
            {{ t('Our security experts can assist enterprises in making their applications resistant to security threats.') }}
        </p>
        <ul class="list-disc pt-2">
            <li class="pt-2">
                {{ t('We help you to compile security requirements as well as recommend a resilient app design pattern that will be able to address potential security risks.') }}
            </li>
        </ul>
        <h1 class=" font-bold pt-6  text-2xl ">{{ t('Application testing') }}</h1>
        <p class="pt-4 text-gray-600 w-4/5">
            {{ t('We perform comprehensive manual and automated testing (vital for Continuous Delivery) for every stage of the application life cycle (implementation, deployment, support and evolution) to timely identify potential risks and verify that your enterprise solutions work correctly and correspond to the established quality requirements.') }}
        </p>
        <p class="pt-4 text-gray-600 w-4/5">
            {{ t('We ensure comprehensive checking of your application with multiple types of testing, including:') }}
        </p>
        <!-- ul -->
        <div class="flex flex-col m-10 justify-between md:flex-row">

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg">
                {{ t('Fixed Price') }}
            </p>

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg">
                {{ t('Time & Material') }}
            </p>

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg">
                {{ t('Consumption-based pricing') }}
            </p>

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg">
                {{ t('Monthly subscription fee') }}
            </p>



        </div>
        <div class="rounded border border-gray-200 shadow-2xl transition-shadow w-full flex justify-between mr-20 p-8">
            <div class="flex flex-col">
                <h1 class="text-xl font-bold">{{ t('Eager to Improve Your Insurance Services?') }}</h1>
                <hr class="w-12 h-0.5 bg-yellow-600 my-4" />
                <div class=" flex flex-wrap">
                    <p class="text-gray-400 text-xl w-full lg:w-4/5">
                        {{ t('TeamPRO’s team will analyze the business needs of your insurance company, suggest and implement robust solutions that will help you improve overall business productivity and enhance customer service.') }}
                    </p>
                </div>
            </div>
            <button
                class="uppercase text-white rounded bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center cursor-pointer">{{ t('request a consultation') }}
            </button>
        </div>
        <h1 class="pt-5 uppercase text-xl font-bold">{{ t('SELECTED PROJECTS') }}</h1>
        <hr class="w-12 h-0.5 bg-yellow-600  my-4" />

        <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center ">
                <div class="flex w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-64"
                        src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg"
                        alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-xl md:text-2xl font-bold">
                        {{ t('Development of Invention Machine Software with Semantic Search') }}</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-lg md:text-xl">
                        {{ t("A number of products to help big companies improve their innovation process with the help of semantic analysis of natural language texts including 15 mln worldwide patents, 3,000 cross-disciplinary scientific 'deep web' websites and the database of 8,000 scientific effects. The software allows engineering, marketing and production personnel to find more cost-effective, competitive and higher-quality system designs") }}
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ t('Learn More') }}<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>

    </div>

@endsection

@section('js')

@endsection
