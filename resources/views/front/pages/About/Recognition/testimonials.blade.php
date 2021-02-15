@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="block p-4 m-auto" style="max-width: 1150px;">
            <div class="card w-full my-4">
                <h1 class="text-3xl text-gray-800 font-bold">{{ @translate_lang("Testimonials")  }}</h1>
                <hr class="w-12 my-3 border-b-2 bg-yellow-300">
                <p class="text-gray-600 text-md leading-7 md:leading-8 lg:leading-9 md:text-lg lg:text-xl">
                    {{ @translate_lang("We collaborate with companies from")  }} <strong>37 {{ @translate_lang("countries")  }}</strong> {{ @translate_lang("and")  }} <strong>23 {{ @translate_lang("industries")  }}</strong>.
                    {{ @translate_lang("Our project portfolio includes")  }} <strong>2,695 {{ @translate_lang("success stories")  }}</strong>, {{ @translate_lang("including projects
                    for Walmart, eBay, NASA JPL, PerkinElmer, Baxter, IBM, Leo Burnett. We
                    asked our customers what are their impressions on cooperation with ScienceSoft –
                    have a look at their answers in the testimonials below.")  }}
                </p>
            </div>
            <div class="card my-6 lg:flex">
                <div class="lg:w-1/2 pr-9">
                    <iframe class="w-full h-72 mb-5" src="https://www.youtube.com/embed/_Zsib6yDYWo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="lg:flex-row lg:w-1/2">
                    <h1 class="text-2xl lg:3xl text-gray-800 font-bold">{{ @translate_lang("Leo Burnett Worldwide: What Is Working with ScienceSoft Like")  }}</h1>
                <hr class="w-12 my-3 border-b-2 bg-yellow-300">
                <p class="text-gray-600 text-md md:text-lg lg:text-xlleading-7 md:leading-8 lg:leading-9">
                    {{ @translate_lang("For 4 years, ScienceSoft have been an outsourcing partner of a global advertising agency
                    Leo Burnett Worldwide. Sam Gooby, Head of Platform Production at Leo Burnett, shares his
                    first-hand experience on collaboration with our IT experts.")  }}
                </p>
                </div>
            </div>
            <p class="text-gray-600 text-md md:text-lg lg:text-xl leading-7 md:leading-8 lg:leading-9">
                {{ @translate_lang("For your convenience, we divided the testimonials by
                industry, service and technology so you can easily find
                the ones that are relevant to your case.")  }}
            </p>
            <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
            <div class="md:w-80 mb-6">
                    <img src="https://www.scnsoft.com/testimonials-logos/chiron-health-logo.svg" alt="" class="w-56 md:w-40 m-auto">
                </div>
                <div class="w-full">
                    <div class="md:flex">
                        <p class="text-gray-600 leading-7">
                            <em>
                                {{ @translate_lang("Chiron Health’s core business is providing caregivers with a web-based
                                telemedicine platform which allows them to connect with patients for routine
                                follow-ups and similar use cases. We engaged ScienceSoft to build an Android
                                app that complements our web-based platform for our patients.")  }}
                                <br>{{ @translate_lang("ScienceSoft developers proved themselves to be Android experts.
                                They advised and successfully lead the way from end to end through the technical
                                challenges and considerations with development of the Android app. ScienceSoft
                                team was in daily contact with our developers and our method of communication was
                                a huge factor in how successful this engagement was. I would also like to point out
                                ScienceSoft’s solid approach to testing. The thorough testing they performed on our
                                beta environment ensured that the app was launched without critical bugs. We have
                                also engaged them to introduce a few enhancements to the app and would certainly
                                consider ScienceSoft as a technology partner in further software development initiatives.")  }}
                            </em>
                        </p>
                    </div>
                    <div class="w-ful flex-column md:pl-14 my-6">
                        <h1 class="text-lg font-bold text-gray-800">{{ @translate_lang("Justin Turner")  }}</h1>
                        <p class="text-lg text-gray-700">{{ @translate_lang("CTO, Chiron Health")  }}</p>
                    </div>
                    <div class="flex flex-wrap items-center md:pl-14">
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Health Care")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Software Development")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600">{{ @translate_lang("Mobile")  }}</p>
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
                                {{ @translate_lang("We have been cooperating with ScienceSoft for 5 years. ScienceSoft's
                                team of five Java developers and one Test Engineer have been working hard
                                to ensure our product - Enonic XP - exceeds our customer's expectations.
                                The team has become an integrated part of Enonic, and we appreciate their
                                efforts and passion for the product.")  }}<br>
                                {{ @translate_lang("ScienceSoft's experience in agile development ensured smooth project
                                implementation and iterative development of Enonic XP. This enabled us to adjust
                                to the changing market requirements and incorporate features that made us stand out
                                from competition. As a result, Enonic XP has evolved into an easy-to-use and scalable
                                platform, which is crucial for our success")  }}.<br>
                                {{ @translate_lang("Thanks for a great job so far!")  }}
                            </em>
                        </p>
                    </div>
                    <div class="w-ful flex-column md:pl-14 my-6">
                        <h1 class="text-lg font-bold text-gray-800">{{ @translate_lang("Morten Øien Eriksen")  }}</h1>
                        <p class="text-lg text-gray-700">{{ @translate_lang("CEO, Enonic")  }}</p>
                    </div>
                    <div class="flex flex-wrap items-center md:pl-14">
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Information Technologies")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Software Development")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Testing & QA")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Team augmentation")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600">{{ @translate_lang("Java")  }}</p>
                    </div>
                </div>
            </div>
            <div class="card px-4 py-6 w-full my-6 shadow-lg md:flex">
                <div class="md:w-80 mb-6">
                    <img src="https://www.scnsoft.com/testimonials-logos/llaves-altuna-de-mexico-logo.svg" alt="" class="w-56 md:w-40 m-auto">
                </div>
                <div class="w-full">
                    <div class="md:flex">
                        <p class="text-gray-600 leading-7">
                            <em>
                                {{ @translate_lang("We worked with ScienceSoft in developing our SharePoint Intranet.
                                The development and implementation process was very smooth and delivered
                                the exact results we were expecting. We will surely work with them in the
                                future.")  }}
                            </em>
                            <a href="#" class="text-blue-500">{{ @translate_lang("Read original")  }}</a>
                        </p>
                    </div>
                    <div class="w-ful flex-column md:pl-14 my-6">
                        <h1 class="text-lg font-bold text-gray-800">{{ @translate_lang("Morten Øien Eriksen")  }}</h1>
                        <p class="text-lg text-gray-700">{{ @translate_lang("CEO, Enonic")  }}</p>
                    </div>
                    <div class="flex flex-wrap items-center md:pl-14">
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Manufactering")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Software Development")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Share point")  }}</p>
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
                                {{ @translate_lang("We partnered with ScienceSoft to carry out penetration testing of our Simpli5®
                                web-based application.")  }}
                                <br>{{ @translate_lang("We were under some time pressure to get penetration testing performed as quickly
                                as possible. When I reached out ScienceSoft, they were immediately responsive to my
                                inquiry, they provided a very competitive quote quickly, and they were able to schedule
                                the testing shortly after our acceptance of the quote.")  }}
                                <br>{{ @translate_lang("ScienceSoft’s security testing team performed exceptionally well and gave us
                                confidence that our application posed no serious vulnerabilities. The collaboration
                                was smooth and easy, and we were very pleased with selecting ScienceSoft as our vendor.")  }}
                                <br>{{ @translate_lang("Cooperating with ScienceSoft was a terrific experience, and we will definitely
                                consider them for our future security testing needs.")  }}
                            </em>
                            <a href="#" class="text-blue-500">{{ @translate_lang("Read original")  }}</a>
                        </p>
                    </div>
                    <div class="w-ful flex-column md:pl-14 my-6">
                        <h1 class="text-lg font-bold text-gray-800">{{ @translate_lang("Ed Gordon")  }}</h1>
                        <p class="text-lg text-gray-700">{{ @translate_lang("VP Products, 5 Dynamics (Simpli5)")  }}</p>
                    </div>
                    <div class="flex flex-wrap items-center md:pl-14">
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Information Technologies")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Cybersecurity services")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Security testing")  }}</p>
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
                                {{ @translate_lang("ScienceSoft offers a high caliber of resources skilled in Microsoft
                                Azure .NET, mobile and Quality Assurance. Over the past three years,
                                Lixar was very pleased with the service provided by ScienceSoft development
                                teams and executive management. For accelerated project timelines which
                                require skilled resources, ScienceSoft is a company that your team should consider.")  }}
                            </em>
                        </p>
                    </div>
                    <div class="w-ful flex-column md:pl-14 my-6">
                        <h1 class="text-lg font-bold text-gray-800">{{ @translate_lang("Jan Banda")  }}</h1>
                        <p class="text-lg text-gray-700">{{ @translate_lang("Director, Lixar")  }}</p>
                    </div>
                    <div class="flex flex-wrap items-center md:pl-14">
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Information Technologies")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Software Development")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang("Testing & QA")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600 mr-4">{{ @translate_lang(".NET")  }}</p>
                        <i class="fas fa-bookmark mr-2 text-gray-400"></i>
                        <p class="text-gray-600">{{ @translate_lang("Mobile")  }}</p>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')

@endsection
