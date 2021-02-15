@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="mx-6 md:mx-16 lg:mx-24">
        <div>

            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ @translate_lang("Software Testing and QA Services")  }}
            </h1>
            <hr class="w-12 mt-5 text-yellow-400 h-4">
            <img src="https://www.scnsoft.com/cover-pictures/software-testing-and-qa-services-new.svg">

            <p class="my-10 text-lg">
                {{ @translate_lang("Software testing services help companies to ensure that their software is fully functional,
                reliable,
                secure, and user-friendly.")  }} <strong>{{ @translate_lang("A software testing company with 31 years of
                experience")  }}</strong>,
                {{ @translate_lang("ScienceSoft is ready
                to take up a testing project of any scale and complexity, introduce an efficient quality
                assurance
                process, and enhance your software quality management strategy.")  }}
            </p>
            <div class="text-2xl md:text-3xl font-bold">
                {{ @translate_lang("CHOOSE YOUR SERVICE OPTION")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="text-2xl md:text-3xl font-bold">
                {{ @translate_lang("OUR COMPETENCIES AND ACHIEVEMENTS")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <div class="container">
                <section class="customer-logos slider">
                    <div ><img class="h-32 w-32" src="images/baxter.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/deloitte.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/ebay.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/ford.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/ibm.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/leo-burnett.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/nasa_1.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/nestle.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/tieto.svg" alt="logo"></div>
                    <div ><img class="h-32 w-32" src="images/viber.svg" alt="logo"></div>
                </section>
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-10 uppercase">
                {{ @translate_lang("test automation for better quality outcomes")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <p>
                {{ @translate_lang("We combine manual and automated testing and apply our experience with trusted automation
                frameworks to help you accelerate releases, increase test coverage, and find more bugs before
                they enter production.")  }}
            </p>

            <ul class="list-disc text-base md:text-xl">
                <li><strong>31 {{ @translate_lang("years")  }}</strong> {{ @translate_lang("of experience in providing software testing services.")  }}
                </li>
                <li><strong>18 {{ @translate_lang("years")  }}</strong> {{ @translate_lang("of experience in QA consulting and outsourcing.")  }}
                </li>
                <li><strong>730+ {{ @translate_lang("completed software testing projects")  }}</strong> {{ @translate_lang("since")  }} 2010.
                </li>
                <li><strong>75+ {{ @translate_lang("full-time QA professionals")  }}</strong> {{ @translate_lang("experienced in complex projects (over 80K
                person-hours).")  }}
                </li>
                <li><strong>{{ @translate_lang("ISO 13485 certified")  }}</strong> {{ @translate_lang("software testing company.")  }}
                </li>
                <li>{{ @translate_lang("Software testing processes in")  }} <strong>{{ @translate_lang("compliance with ISO")  }} 9001:2015</strong>.
                </li>
                <li>{{ @translate_lang("Respect to test artefacts required by")  }} <strong>ISO/IEC/IEEE 29119-3:2013</strong>.
                </li>
                <li><strong>{{ @translate_lang("ISTQB-certified")  }}</strong>, {{ @translate_lang("domain-trained test engineers.")  }}
                </li>
                <li>{{ @translate_lang("In-house")  }} <strong>{{ @translate_lang("center of excellence")  }}</strong> {{ @translate_lang("for software testing services.")  }}
                </li>
            </ul>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                {{ @translate_lang("TESTING SERVICES FOR DIFFERENT APPLICATION TYPES")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                {{ @translate_lang("EVERY ASPECT OF YOUR SOFTWARE, VALIDATED")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <!-- <div class="aylan1a"> -->
                <div class="slider">
                    <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 hover:shadow-lg">
                        <div class="row-span-3">
                            <img class="h-40 w-70 mx-10"
                                src="https://www.scnsoft.com/screenshots/screenshots-slider-with-content/custom-software/image-processing-software---desktop-%2B-2-phones---2.png"
                                alt="">
                        </div>
                        <div class="text-2xl font-bold">
                            {{ @translate_lang("Full-cycle testing of Image-Processing Applications for a Global Digital Imaging
                            Leader")  }}
                        </div>
                        <div class="text-base font-normal ">
                            {{ @translate_lang("We performed automated functional testing of an innovative cross-platform
                            desktop
                            application
                            for image processing and validated its seamless integration with third-party
                            tools.")  }}
                        </div>


                    </div>
                    <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 hover:shadow-lg">
                        <div class="row-span-3">
                            <img class="h-40 w-70 mx-10"
                                src="https://www.scnsoft.com/screenshots/screenshots-slider-with-content/custom-software/image-processing-software---desktop-%2B-2-phones---2.png"
                                alt="">
                        </div>
                        <div class="text-2xl font-bold">
                            {{ @translate_lang("Full-cycle testing of Image-Processing Applications for a Global Digital Imaging
                            Leader")  }}
                        </div>
                        <div class="text-base font-normal ">
                            {{ @translate_lang("We performed automated functional testing of an innovative cross-platform
                            desktop
                            application
                            for image processing and validated its seamless integration with third-party
                            tools.")  }}
                        </div>
                    </div>
                </div>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                {{ @translate_lang("Our Customers Say")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <div class="text-lg md:text-2xl leading-relaxed">

                <p>

                    {{ @translate_lang("We started working with ScienceSoft in early 2011 testing our core application called
                    Careware.
                    The application is quite complex and has many ERP and mobile elements in it.")  }}
                </p>

                <p>
                    {{ @translate_lang("We have worked with the team in very close cooperation ever since and value professional as
                    well
                    as flexible attitude towards testing. Since starting our cooperation the test team has
                    changed
                    in size and people, with one tester remaining with us for already 2 years now! We currently
                    have
                    a team of 3 very enthusiastic and good testers with whom we are very happy.")  }}
                </p>
                <div class="flex justify-end">
                    <em>
                        <strong>
                            {{ @translate_lang("Roderick Schipper, CTO and Henriette Trampedach, Test Manager, helpLine")  }}
                            B.V.
                        </strong>
                    </em>
                </div>
                <div class="flex justify-end">
                    <img class="w-40 md:w-60"
                        src="https://www.scnsoft.com/testimonials-logos/helpline-bv-logo.png" alt="">

                </div>

            </div>
            <div class="text-2xl md:text-3xl font-bold mt-10">
                {{ @translate_lang("Why testing with sciencesoft is a success")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="flex flex-row">

                <div class="border-2 px-6 ">
                    <img class="w-14 my-8"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p><strong class="text-xl">{{ @translate_lang("Mature project management")  }}</strong></p>
                    <p class="mb-20 mt-8">{{ @translate_lang("We have a structured test process compliant with")  }} ISO 13485 {{ @translate_lang("and")  }} ISO
                        9001:2015 {{ @translate_lang("and
                        establish result-oriented collaboration with the project team and third-party vendors.")  }}
                    </p>
                </div>
                <div class="border-2 mx-8 px-6 ">
                    <img class="w-14 my-8"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p><strong class="text-xl">{{ @translate_lang("Mature project management")  }}</strong></p>
                    <p class="mt-8">{{ @translate_lang("We have a structured test process compliant with")  }} ISO 13485 and ISO 9001:2015
                        {{ @translate_lang("and
                        establish result-oriented collaboration with the project team and third-party vendors.")  }}
                    </p>
                </div>
                <div class="slider border-2 px-6 ">
                    <img class="w-14 my-8"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p><strong class="text-xl">{{ @translate_lang("Mature project management")  }}</strong></p>
                    <p class="mt-8">{{ @translate_lang("We have a structured test process compliant with")  }} ISO 13485 and ISO 9001:2015
                        {{ @translate_lang("and
                        establish result-oriented collaboration with the project team and third-party vendors.")  }}
                    </p>
                </div>

            </div>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                {{ @translate_lang("More success stories")  }}
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
                <div class="flex flex-col md:flex-row items-center ">
                    <div class="flex justify-center  w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                        <img class="w-64  top-0"
                            src="https://www.scnsoft.com/boss/images/12fecd0e-697d-4793-be78-c950a790f5c5plm-platform.png"
                            alt="">
                    </div>
                    <div class=" flex flex-col w-4/5 mb-10">
                        <h1 class="text-3xl md:text-4xl font-bold">{{ @translate_lang("Tailored pricing plan")  }}</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            {{ @translate_lang("We calculate custom-made pricing plans to meet your expectations and adjust pricing
                            if your
                            requirements change
                            during our cooperation.")  }}
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ @translate_lang("Learn More")  }}<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
            <div class="pt-20"></div>
        </div>
    </div>

@endsection

@section('js')

@endsection