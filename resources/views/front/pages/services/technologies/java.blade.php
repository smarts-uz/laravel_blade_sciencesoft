@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
      <!-- Custom Enterprise -->
      <div>

        <h1 class="uppercase font-bold mt-10 lg:text-3xl text-lg">
          {{ t("Custom Enterprise and SaaS Java Application Development")  }}
        </h1>
        <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
        <img
          src="https://www.scnsoft.com/cover-pictures/custom-enterprise-and-saas-java-development.svg"
        />
        <p class="my-5 text-lg">
          <b>{{ t("Java application development")  }}</b> {{ t("services imply the engineering
          of powerful web and mobile applications, web services, and embedded
          software solutions able to run on any platform with the Java
          language and frameworks.")  }}
        </p>
        <p class="my-5 text-lg">
          <b>{{ t("Smart Software")  }}</b> {{ t("is a")  }}
          <b>{{ t("global Java application development company")  }}</b>
          {{ t("that has already accumulated")  }}
          <b>{{ t("more than 20 years of experience in Java development.")  }}</b> {{ t("We’re
          committed to building sustainable and high-quality Java solutions
          using the latest and most trusted techs and architecture patterns.")  }}
        </p>
      </div>

      <!-- WHAT WE BUILD IN JAVA -->
      <div>
        <h1 class="uppercase font-bold mt-10 lg:text-3xl text-lg">
          {{ t("What we build in java")  }}
        </h1>
        <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
        <img class="mt-5"
          src="https://www.scnsoft.com/software-development-services/java-development-outsourcing/we-build-1.svg"
        />
        <div class='lg:flex block justify-between items-center lg:p-10 p-6 shadow-lg mt-3'>
          <div class='lg:w-2/3 w-full	 '>
            <h1 class='text-gray-900 lg:mt-6'>
              <p class='lg:text-2xl text-md font-bold'>{{ t("Lack Python Competencies or Resources?")  }}</p>
              <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
            <p class='text-gray-600 lg:text-xl text-md'>{{ t("We offer pre-vetted Python developers and dedicated Python teams with experience across multiple domains to help increase your development output.")  }}</p>
          </div>
          <div class='mt-6 lg:w-1/3 w-full  m-0 flex justify-center items-center'>
            <a href="#" class='px-8 py-3 text-sm bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ t("Check Cvs of our devs")  }}</a>
          </div>
        </div>
        <!-- WHY CHOOSE Smart SoftwareAS YOUR JAVA DEVELOPMENT PARTNER? -->

        <div>
          <h1 class="uppercase font-bold mt-10 lg:text-3xl text-lg">
            {{ t("Why choose Smart Softwareas your java development partner?")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="lg:flex lg:flex-row block mt-5">
            <div >se
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ t("Over 20 years in Java development.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ t("Quick project start (1 – 4 weeks).")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  {{ t("Rapid prototyping, fast")  }} <b>{{ t("MVP delivery.")  }}</b>
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  {{ t("Proprietary")  }}
                  <b>{{ t("Integrated Manual and Automated Testing")  }}</b> {{ t("(IMAAT)
                  approach.")  }}
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  {{ t("Experience in")  }}
                  <b
                    >{{ t("big data, IoT, machine learning, blockchain, image
                    analysis,")  }}</b
                  >
                  {{ t("etc.")  }}
                </p>
              </div>
            </div>
            <div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ t("Data analytics services since 1989.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  {{ t("Big data consulting services since 2013.")  }}
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ t("IoT consulting services since 2011.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  {{ t("AWS Select-tier consulting partner and Microsoft partner
                  with 8 Gold competencies.")  }}
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- WHAT MAKES Smart Software’S JAVA DEVELOPERS STAND OUT -->
        <div>
          <h1 class="uppercase font-bold mt-10 lg:text-3xl text-lg">
            {{ t("What makes Smart Software's java developers stand out")  }}
          </h1>
          <hr class="w-12  mt-5 border-b-2 border-yellow-400" />
          <div class="mt-7 lg:flex lg:flex-row">
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/3 w-full h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ t("Clean Java code")  }}</p>
                <p>{{ t("and")  }} <b>{{ t("high-quality unit tests")  }}</b></p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/3 w-full h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">
                  {{ t("Future-proof application architectures")  }}
                </p>
                <p>{{ t("mobile-, integration-, cloud-ready; SOA, microservices-based, etc.")  }}</b></p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/3 w-full h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ t("Mature DevOps culture")  }}
                </p>
                <p>{{ t("and deep background in containerized environments.")  }}</p>
              </div>
            </div>
          </div>
          <div class="mt-7 lg:flex lg:flex-row block gap-2">
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/3 w-full h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ t("Secured fast and stable delivery")  }}</p>
                <p>{{ t("with")  }} <b>{{ t("major releases every 2-6 weeks,")  }}</b> {{ t("minor updates up to several times a day.")  }}</p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg lg:w-1/3 w-full h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">
                {{ t("Proficiency in cloud development")  }}
                </p>
                <p>{{ t("and expert cloud architects on board to deliver scalable and flexible cloud apps that uncover the full potential of cloud services (AI, VR, IoT, data science, and more) and consume ensuring optimal cloud resources.")  }}</b></p>
              </div>
            </div>

          </div>
        </div>

        <!--SAMPLE ARCHITECTURE OF THE JAVA SOLUTIONS WE DELIVER -->
        <div>
          <h1 class="uppercase font-bold mt-10 lg:text-3xl text-lg">
            {{ t("Sample Architecture of the java solutions we deliver")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <p class="mt-5 text-lg">{{ t("Bringing together a pool of experts with various skills and expertise, we provide our customers with a complete Java solution that includes:")  }}</p>
          <div class="flex flex-row mb-2 mt-5">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("Business logic (Java monolith or microservices)")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("A database (RDMS, NoSQL, DFS)")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("SPA user interface")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("An admin interface")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("A monitoring module")  }}</p>
          </div>
          <h3 class="font-bold text-xl my-4">{{ t("Optionally it may include:")  }}</h3>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("Analytics and machine learning software for offline processing.")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("Real-time processing software with message queue subsystems.")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("Complementing mobile applications (iOS, Android).")  }}
            </p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ t("An IoT gateway and embedded software for IoT devices.")  }}
            </p>
          </div>
          <h3 class="font-bold text-xl my-4">{{ t("Sample architecture diagram for a modern web application:")  }}</h3>
          <img src="https://www.scnsoft.com/software-development-services/java-development-outsourcing/sample-architecture-of-java-solution-1.svg" />
        </div>

        <!-- SELECTED PROJECTS -->
        <div>
          <h1 class="uppercase font-bold mt-10 lg:text-3xl text-lg">
            {{ t("Selected Projects")  }}
          </h1>
          <hr class="w-12  mt-5 border-b-2 border-yellow-400" />
          <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center ">
              <div class="flex lg:w-2/5 w-full  text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="w-64" src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg" alt="">
              </div>
              <div class=" flex flex-col lg:w-4/5 w-full mb-10">
                <h1 class="text-xl md:text-2xl font-bold">{{ t("Development of Invention Machine Software with Semantic Search")  }}</h1>
                <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                <p class=" text-gray-500 text-lg md:text-xl">
                  {{ t("A number of products to help big companies improve their innovation process with the help of semantic analysis of natural language texts including 15 mln worldwide patents, 3,000 cross-disciplinary scientific 'deep web' websites and the database of 8,000 scientific effects. The software allows engineering, marketing and production personnel to find more cost-effective, competitive and higher-quality system designs")  }}
                </p>

              </div>
            </div>
            <a class="uppercase lg:absolute right-10 text-blue-700 bottom-6" href="#">{{ t("Learn More")  }}<i class="fas fa-arrow-right ml-4"></i></a>
          </div>
        </div>
      </div>
</div>

@endsection

@section('js')


@endsection
