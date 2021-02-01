@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="flex w-full">
    <aside class="w-80 bg-gray hidden sm:block">
      <div
        class="xl:w-1/5 flex flex-col w-full justify-start h-8 fixed p-4 xl:bg-white"
      >
        <div class="text-sm mb-16">
          <div
            class="text-black xl:bg-white text-sm font-normal flex flex-row justify-between bg-blue-800 uppercase lg:underline mb-5"
          >
            <p>About Company</p>
            <i onclick="dropDown()" class="fas fa-chevron-down lg:hidden"></i>
          </div>
          <div class="content hidden xl:block">
            <p
              class="bg-gray-100 text-black p-3 rounded mt-2 cursor-pointer font-medium hover:text-blue-600"
            >
              Management Team
            </p>
            <p
              class="bg-gray-100 text-black p-3 rounded mt-2 cursor-pointer font-medium hover:text-blue-600"
            >
              Our Experts
            </p>
          </div>
        </div>
      </div>
    </aside>
    <section class="w-full p-4 pr-10">
        <div>
            <p class="text-gray-400 text-xs">Home &gt; About Company</p>
            <h1 class="uppercase font-bold mt-10 text-2xl">
                Software Testing and QA Services
            </h1>
            <hr class="w-12 mt-5 text-yellow-400 h-4">
            <img src="https://www.scnsoft.com/cover-pictures/software-testing-and-qa-services-new.svg">

            <p class="my-10 text-lg">
                Software testing services help companies to ensure that their software is fully functional,
                reliable,
                secure, and user-friendly. <strong>A software testing company with 31 years of
                    experience</strong>,
                ScienceSoft is ready
                to take up a testing project of any scale and complexity, introduce an efficient quality
                assurance
                process, and enhance your software quality management strategy.
            </p>
            <div class="text-2xl md:text-3xl font-bold">
                CHOOSE YOUR SERVICE OPTION
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="text-2xl md:text-3xl font-bold">
                OUR COMPETENCIES AND ACHIEVEMENTS
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
                test automation for better quality outcomes
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <p>
                We combine manual and automated testing and apply our experience with trusted automation
                frameworks to help you accelerate releases, increase test coverage, and find more bugs before
                they enter production.
            </p>

            <ul class="list-disc text-base md:text-xl">
                <li><strong>31 years</strong> of experience in providing software testing services.
                </li>
                <li><strong>18 years</strong> of experience in QA consulting and outsourcing.
                </li>
                <li><strong>730+ completed software testing projects</strong> since 2010.
                </li>
                <li><strong>75+ full-time QA professionals</strong> experienced in complex projects (over 80K
                    person-hours).
                </li>
                <li><strong>ISO 13485 certified</strong> software testing company.
                </li>
                <li>Software testing processes in <strong>compliance with ISO 9001:2015</strong>.
                </li>
                <li>Respect to test artefacts required by <strong>ISO/IEC/IEEE 29119-3:2013</strong>.
                </li>
                <li><strong>ISTQB-certified</strong>, domain-trained test engineers.
                </li>
                <li>In-house <strong>center of excellence</strong> for software testing services.
                </li>
            </ul>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                TESTING SERVICES FOR DIFFERENT APPLICATION TYPES
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                EVERY ASPECT OF YOUR SOFTWARE, VALIDATED
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
                            Full-cycle testing of Image-Processing Applications for a Global Digital Imaging
                            Leader
                        </div>
                        <div class="text-base font-normal ">
                            We performed automated functional testing of an innovative cross-platform
                            desktop
                            application
                            for image processing and validated its seamless integration with third-party
                            tools.
                        </div>


                    </div>
                    <div class="grid grid-rows-3 grid-flow-col gap-4 border-2 hover:shadow-lg">
                        <div class="row-span-3">
                            <img class="h-40 w-70 mx-10"
                                src="https://www.scnsoft.com/screenshots/screenshots-slider-with-content/custom-software/image-processing-software---desktop-%2B-2-phones---2.png"
                                alt="">
                        </div>
                        <div class="text-2xl font-bold">
                            Full-cycle testing of Image-Processing Applications for a Global Digital Imaging
                            Leader
                        </div>
                        <div class="text-base font-normal ">
                            We performed automated functional testing of an innovative cross-platform
                            desktop
                            application
                            for image processing and validated its seamless integration with third-party
                            tools.
                        </div>
                    </div>
                </div>
            
            <div class="text-2xl md:text-3xl font-bold mt-10">
                Our Customers Say
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>
            <div class="text-lg md:text-2xl leading-relaxed">

                <p>

                    We started working with ScienceSoft in early 2011 testing our core application called
                    Careware.
                    The application is quite complex and has many ERP and mobile elements in it.
                </p>

                <p>
                    We have worked with the team in very close cooperation ever since and value professional as
                    well
                    as flexible attitude towards testing. Since starting our cooperation the test team has
                    changed
                    in size and people, with one tester remaining with us for already 2 years now! We currently
                    have
                    a team of 3 very enthusiastic and good testers with whom we are very happy.
                </p>
                <div class="flex justify-end">
                    <em>
                        <strong>
                            Roderick Schipper, CTO and Henriette Trampedach, Test Manager, helpLine
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
                Why testing with sciencesoft is a success
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </div>

            <div class="flex flex-row">

                <div class="border-2 px-6 ">
                    <img class="w-14 my-8"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p><strong class="text-xl">Mature project management</strong></p>
                    <p class="mb-20 mt-8">We have a structured test process compliant with ISO 13485 and ISO
                        9001:2015 and
                        establish result-oriented collaboration with the project team and third-party vendors.
                    </p>
                </div>
                <div class="border-2 mx-8 px-6 ">
                    <img class="w-14 my-8"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p><strong class="text-xl">Mature project management</strong></p>
                    <p class="mt-8">We have a structured test process compliant with ISO 13485 and ISO 9001:2015
                        and
                        establish result-oriented collaboration with the project team and third-party vendors.
                    </p>
                </div>
                <div class="slider border-2 px-6 ">
                    <img class="w-14 my-8"
                        src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                        alt="">
                    <p><strong class="text-xl">Mature project management</strong></p>
                    <p class="mt-8">We have a structured test process compliant with ISO 13485 and ISO 9001:2015
                        and
                        establish result-oriented collaboration with the project team and third-party vendors.
                    </p>
                </div>

            </div>

            <div class="text-2xl md:text-3xl font-bold mt-10">
                More success stories
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
                        <h1 class="text-3xl md:text-4xl font-bold">Tailored pricing plan</h1>
                        <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                        <p class=" text-gray-500 text-xl md:text-2xl">
                            We calculate custom-made pricing plans to meet your expectations and adjust pricing
                            if your
                            requirements change
                            during our cooperation.
                        </p>

                    </div>
                </div>
                <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i
                        class="fas fa-arrow-right ml-4"></i></a>
            </div>
            <div class="pt-20"></div>
        </div>
    </section>
  </main>
</main>


@endsection


@section('js')

@endsection