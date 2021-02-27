@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="my-10">


        <div class=" min-h-screen  mx-auto">
            <!-- Servise -- develompent -- TopLink  -->

            <!-- Servise -- develompent -- SubTitle -->
            <p class="lg:text-5xl text-3xl  font-bold">
                {{ _trans('Overview of Software Development Process at TeamPRO') }}
            </p>
            <!-- Servise -- develompent -- SubTitles LINE -->
            <div class="h-0.5 w-10 mb-5 pl-4 mx-3 bg-yellow-500 my-3"></div>
            <p class="mb-5  text-xl text-gray-600 font-normal">
                {{ _trans("At TeamPRO, we tailor the software development
    process to your specific business needs to deliver high-quality software on time and within budget.") }}
            </p>

            <h1 class="uppercase lg:text-5xl  font-bold mt-10 text-3xl">
                {{ _trans('DEVELOPMENT APPROACHES WE FOLLOW') }}
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600 m-4" />
            <!-- Development Approaches card -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-4/5 " src="https://www.scnsoft.com/about/development-process/dev-approache_agile.svg"
                        alt="">
                </div>
                <div class="lg:w-3/4 mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Agile') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">{{ _trans('The') }}<a href="#"
                            class="underline hover:text-blue-800 ">{{ _trans('Agile methodology') }}</a>
                        {{ _trans("allows us to release reliable
            software fast and introduce changes easily. The development process consists of") }}
                        <b> {{ _trans("1-4 week
            iterations") }}
                        </b>{{ _trans("resulting in an evolved version of software shipped each time. After each
            iteration, we get ") }}<b>
                            {{ _trans('real user feedback ') }}</b>
                        {{ _trans("that drives informed decisions on the next development
            steps.") }}
                    </p>
                    <br>
                    <br>
                    <p class=" text-base sm:text-lg text-sm">
                        <i>
                            {{ _trans("Note: Although the Agile approach is viable in many cases, we can also adopt Waterfall and other
                approaches depending on a customer’s objectives. Check out our ") }}<a
                                href="#" class="underline hover:text-blue-800 ">
                                {{ _trans('overview ') }}</a>{{ _trans("of all possible software
                development life cycle (SDLC) models.") }}
                        </i>
                    </p>
                </div>
            </div>
            <!-- ============================= -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-4/5 " src="https://www.scnsoft.com/about/development-process/dev-approache_devops.svg"
                        alt="">
                </div>
                <div class="lg:w-3/4 mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('DevOps') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">{{ _trans('With an established') }} <a href="#"
                            class="underline hover:text-blue-800 ">{{ _trans('DevOps') }} </a>
                        {{ _trans("culture at TeamPRO, we streamline
            software delivery and improve its quality with the following DevOps best practices:") }}
                    </p>
                    <br>
                    <div class="w-full   flex flex-row mb-5">
                        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
                        <p class=" text-base sm:text-lg text-sm"><b>
                                {{ _trans('Infrastructure as Code (IaC):') }}</b>
                            {{ _trans("automating the
           creation of new infrastructures and keeping them consistent with each other to ensure smooth
           software deployment.") }}
                        </p>
                    </div>
                    <!-- ========================= -->
                    <div class="w-full   flex flex-row mb-5">
                        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
                        <p class=" text-base sm:text-lg text-sm"><b>
                                {{ _trans("Continuous Integration/Continuous Delivery or
          Continious Deployment (CI/CD): ") }}</b>
                            {{ _trans('automating integration and deployment of code changes.') }}
                        </p>
                    </div>
                    <!-- ========================= -->
                    <div class="w-full   flex flex-row mb-5">
                        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
                        <p class=" text-base sm:text-lg text-sm"><b> {{ _trans('Automated testing:') }} </b>
                            {{ _trans("automating regression,
          performance, and other types of testing that are continuously carried out within the CI/CD
          pipeline.") }}
                        </p>
                    </div>
                    <!-- ========================= -->
                    <div class="w-full   flex flex-row mb-5">
                        <span class="w-5 h-2 bg-blue-500 mt-3"></span>
                        <p class=" text-base sm:text-lg text-sm">
                            <b>{{ _trans('Application performance monitoring: ') }}</b>{{ _trans("configuring
         application performance monitoring tools to detect post-release bugs quickly.") }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- ============================= -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-4/5 "
                        src="https://www.scnsoft.com/about/development-process/dev-approache-cloud-native.svg" alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Cloud-native development') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">{{ _trans('When building applications') }}<a href="#"
                            class="underline hover:text-blue-800 "> {{ _trans('in the cloud,') }}
                        </a>{{ _trans("we take advantage of reduced software
            development and operation costs, easy scalability and access to advanced cloud services that enable
            implementation of cutting-edge techs (AI, IoT, data science, and more).") }}
                    </p>
                </div>
            </div>
            <!-- ============================= -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-4/5 "
                        src="https://www.scnsoft.com/about/development-process/dev-approache_modular-architecture.svg"
                        alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans('We use modular architecture patterns, such as') }}<b>
                            {{ _trans('  microservices,') }} </b>
                        {{ _trans('in combination with ') }}<b>{{ _trans(' containers') }} </b>
                        {{ _trans("to develop applications as a suite
           of independent functional components that can be effortlessly ported to any environment. Such an
           approach ensures higher application reliability, better maintainability and expandability, as well
           as shorter development time.") }}
                    </p>
                </div>
            </div>

            <!-- //////////////////////////////////////// -->


            <div class="mt-10">
                <p class="lg:text-4xl text-3xl  font-bold">
                    {{ _trans('HIGHLIGHTS OF SOFTWARE DEVELOPMENT WITH TEAMPRO') }}
                </p>
                <!-- Servise -- develompent -- SubTitles LINE -->
                <div class="h-0.5 w-10 mb-5 pl-4 mx-3 bg-yellow-500 my-3"></div>
                <div class="mt-5">
                    <div class="col-12 mt-10 group flex flex-wrap">
                        <div>
                            <div>
                                <div class="lg:ml-10 ml-44 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                                    1
                                </div>
                            </div>
                            <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                        </div>
                        <div class="flex flex-wrap lg:w-5/6">
                            <div class="lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                                <h1 class="uppercase font-bold text-2xl">{{ _trans('Business analysis') }} </h1>
                                <p class="lg:text-lg lg:text-left text-center text-gray-500 lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                                    {{ _trans('Our business analytics elicit your business needs,
                                     turn them into prioritized software requirements and help
                                      elaborate on the concept of your software.') }}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mt-10 group flex flex-wrap">
                        <div>
                            <div>
                                <div class="lg:ml-10 ml-44 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                                    2
                                </div>
                            </div>
                            <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                        </div>
                        <div class="flex flex-wrap lg:w-5/6">
                            <div class="lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                                <h1 class="uppercase font-bold text-2xl">{{ _trans('Software development process and management') }}</h1>
                                <p class="lg:text-lg lg:text-left text-center text-gray-400 lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                                    {{ _trans('In every project, we design UX and UI, build
                                     a future-proof architecture as well as run coding, integration
                                     and deployment processes. We take care of the overall
                                    project management and regularly report to you on the development progress.
                                    We suggest going for iterative development, as it
                                    enables to launch the first version of software in just 3-4
                                    months, and then get it further evolved every 1-4 weeks.') }}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mt-10 group flex flex-wrap">
                        <div>
                            <div>
                                <div class="lg:ml-10 ml-44 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                                    3
                                </div>
                            </div>
                            <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                        </div>
                        <div class="flex flex-wrap lg:w-5/6">
                            <div class="lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                                <h1 class="uppercase font-bold text-2xl"><a href="#" class="hover:underline hover:text-blue-400">{{ _trans('QA & testing') }}</a></h1>
                                <p class="lg:text-lg lg:text-left text-center text-gray-500 lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                                    {{ _trans('We keep up software quality with continuous testing, starting from unit tests and code reviews done by our developers to functionality, performance, usability, integration, compatibility and security testing by our QA team. A reasonable amount of test automation helps us speed
                                    up software delivery and minimize the number of missed bugs.') }}
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 mt-10 group flex flex-wrap">
                        <div>
                            <div>
                                <div class="lg:ml-10 ml-44 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                                    4
                                </div>
                            </div>
                            <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                        </div>
                        <div class="flex flex-wrap lg:w-5/6">
                            <div class="lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                                <h1 class="uppercase font-bold text-2xl">{{ _trans('Risk management') }}</h1>
                                <p class="lg:text-lg lg:text-left text-center text-gray-500 lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                                    {{ _trans('We define and estimate risks related to the project budget, delivery
                                     time, cybersecurity, new technologies and personnel. Then, we prepare a mitigation
                                      plan for each risk, monitor risks and report to responsible project stakeholders
                                       to keep all parties informed about existing
                                    risks and their states and ensure the consistency of risk management actions.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-10 group flex flex-wrap">
                        <div>
                            <div>
                                <div class="lg:ml-10 ml-44 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                                    5
                                </div>
                            </div>
                            <hr class="lg:h-full group-hover:bg-blue-800 bg-gray-300 ml-16 lg:w-px w-0 h-0">
                        </div>
                        <div class="flex flex-wrap lg:w-5/6">
                            <div class="lg:ml-7 ml-2 lg:mr-12 mr-32 lg:w-4/5 w-full">
                                <h1 class="uppercase font-bold text-2xl">{{ _trans('Change management') }}</h1>
                                <p class="lg:text-lg lg:text-left text-center text-gray-500 lg:ml-0 ml-16 w-full lg:mt-0 mt-2">
                                    {{ _trans('We review the required software changes with all parties
                                     concerned, analyzing how the changes will impact software
                                    business logic and adapting it accordingly before any change implementation.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-10 group flex flex-wrap">
                        <div>
                            <div>
                                <div class="lg:ml-10 ml-44 lg:mb-0 mb-3 border border-gray-300 w-12 px-5 py-1 font-semibold text-lg group-hover:border-blue-800 group-hover:text-blue-800 transition duration-300">
                                    6
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap lg:w-5/6">
                            <div class=" lg:ml-7 ml-2 lg:mr-12 mr-0 lg:w-4/5 w-full">
                                <h1 class="uppercase font-bold text">{{ _trans('Project delivery') }}</h1>
                                <p class="lg:text-lg lg:text-left md:text-center text-gray-500 lg:ml-0 ml-0 w-full lg:mt-0 mt-2">
                                    {{ _trans('Upon the delivery of the project, our customers receive:') }}
                                </p>
                                <ul class="list-disc">
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('Turn-key software.') }}</li>
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('Documentation (technical requirements and design).') }}</li>
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('User manual.') }}</li>
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('Setup program.') }}</li>
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('Installation and maintenance instructions.') }}</li>
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('Source code.') }}</li>
                                    <li class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0 ml-0 w-full lg:mt-4 mt-2">{{ _trans('Warranty') }}</li>
                                </ul>
                                <p class="lg:text-lg lg:text-left  text-gray-500 lg:ml-0  w-full lg:mt-4 mt-2">
                                    {{ _trans('Upon software completion, we offer') }} <a href="#" class="hover:text-blue-400 hover:underline">{{ _trans('maintenance and support services') }}</a>
                                    {{ _trans(' to help continuously improve software.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
            <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                {{ _trans('HIGHLIGHTS OF SOFTWARE DEVELOPMENT WITH') }} <br>
                {{ _trans('SCIENCESOFT') }}
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600 m-4" />
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-1/3 "
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans("We plan our work in a way to deliver the specified scope on
                        time and are capable of working with tight schedules.") }}
                    </p>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-1/3 "
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans("We plan our work in a way to deliver the specified scope on
                        time and are capable of working with tight schedules.") }}
                    </p>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-1/3 "
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans("We plan our work in a way to deliver the specified scope on
                        time and are capable of working with tight schedules.") }}
                    </p>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-1/3 "
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans("We plan our work in a way to deliver the specified scope on
                        time and are capable of working with tight schedules.") }}
                    </p>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-1/3 "
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg" alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans("We plan our work in a way to deliver the specified scope on
                        time and are capable of working with tight schedules.") }}
                    </p>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div
                class="w-full hover:shadow-2xl  lg: lg:flex lg:flex-row lg:justify-around flex md:items-start justify-center  flex-col border-solid border-gray-200 border-2 my-7">
                <div class="lg:w-1/4 flex items-start justify-center pt-10 w-40 mx-auto">
                    <img class="w-5/6 "
                        src="https://www.scnsoft.com/application-development/web-dev-services/opt-for-fast-and-stable-web-app.svg"
                        alt="">
                </div>
                <div class="lg:w-3/4  mx-auto w-11/12 mb-8">
                    <h1 class="uppercase lg:text-3xl  font-bold mt-10 text-2xl">
                        {{ _trans('Modular architecture') }}
                    </h1>
                    <hr class="w-12 border-b-2 border-yellow-600 m-4" /><br>
                    <p class=" text-base sm:text-lg text-sm">
                        {{ _trans("We plan our work in a way to deliver the specified scope on
                            time and are capable of working with tight schedules.") }}
                    </p>
                    <br>
                    <button
                        class="bg-blue-700 px-8 text-white py-2 mx-4 hover:bg-blue-900 font-semibold">{{ _trans("START A
                    DIALOG") }}</button>
                </div>
            </div>
            <!-- +++++++++++++++++++++++++++++++++++++++++++++++++ -->
        </div>

    </div>


@endsection


@section('js')

@endsection
