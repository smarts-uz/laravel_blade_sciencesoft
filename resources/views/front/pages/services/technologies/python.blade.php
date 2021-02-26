@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
      <!-- Custom Enterprise -->
      <div>

        <h1 class="uppercase font-bold mt-10 text-3xl">
        {{ _trans("Hire Python Developers")  }}
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <img
          src="https://www.scnsoft.com/software-development-services/python-devs/hire-sciencesofts-python-devs.svg"
        />
        <p class="my-5 text-lg">
        {{ _trans("Extend your in-house team with Python developers or hire a dedicated Python team from TeamPRO to achieve technological advantage and save development costs with first-time-right code, on-time delivery, and high development productivity.")  }}
        </p>
      </div>

      <div class='flex justify-between items-center p-10 shadow-lg mt-3'>
        <div class='w-2/3'>
          <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ _trans("Lack Python Competencies or Resources?")  }}</p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
          </h1>
          <p class='text-gray-600 text-xl'>{{ _trans("We offer pre-vetted Python developers and dedicated Python teams with experience across multiple domains to help increase your development output.")  }}</p>
        </div>
        <div class='w-1/3 m-0 flex justify-center items-center'>
          <a href="#" class='px-8 py-3 bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ _trans("Check Cvs of our devs")  }}</a>
        </div>
      </div>

      <!--AREAS OF DEVELOPMENT WE HAVE A KNACK FOR -->
      <div>
        <h1 class="uppercase font-bold mt-10 text-3xl">
        {{ _trans("AREAS OF DEVELOPMENT WE HAVE A KNACK FOR")  }}
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <div class="mt-5 flex flex-col">
        <div>
        <div class="flex flex-row">
            <img src="https://www.scnsoft.com/software-development-services/python-devs/areas-of-development_back-end-programming.svg" class="h-28 w-28"/>
            <div class="ml-5">
              <p class="font-bold text-xl underline mb-4">{{ _trans("Back-end programming:")  }}</p>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Data-intensive web applications.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Database interactions.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("APIs.")  }}
                </p>
              </div>

            </div>
          </div>
          <div class="flex flex-row mt-5">
            <img src="https://www.scnsoft.com/software-development-services/python-devs/areas-of-development_machine-learning.svg" class="h-28 w-28"/>
            <div class="ml-5">
              <p class="font-bold text-xl underline mb-4">{{ _trans("Machine learning:")  }}</p>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Sales forecasting systems.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Defect detection systems.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("Streaming analytics systems.")  }}
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("Voice/image/video recognition.")  }}
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("Chatbots.")  }}
                </p>
              </div>
            </div>
          </div>

        </div>

        <div class="mr-5">
        <div class="flex flex-row mt-5">
            <img src="https://www.scnsoft.com/software-development-services/python-devs/areas-of-development_machine-learning.svg" class="h-28 w-28"/>
            <div class="ml-5">
              <p class="font-bold text-xl underline mb-4">{{ _trans("Machine learning:")  }}</p>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Sales forecasting systems.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Defect detection systems.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("Streaming analytics systems.")  }}
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("Voice/image/video recognition.")  }}
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                {{ _trans("Chatbots.")  }}
                </p>
              </div>
            </div>
          </div>
        <div class="flex flex-row">
            <img src="https://www.scnsoft.com/software-development-services/python-devs/areas-of-development_data-analysis.svg" class="h-28 w-28"/>
            <div class="ml-5">
              <p class="font-bold text-xl underline mb-4">{{ _trans("Custom-made statistical models.")  }}</p>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Custom-made statistical models.")  }}</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">{{ _trans("Dashboards and reporting solutions.")  }}</p>
              </div>
            </div>
          </div>
          <div class="flex flex-row mt-5">
            <img src="https://www.scnsoft.com/software-development-services/python-devs/areas-of-development_test-automation.svg" class="h-28 w-28"/>
            <div class="ml-5">
              <p class="font-bold text-xl underline mb-4">{{ _trans("Test automation")  }}</p>
            </div>
          </div>

        </div>

        </div>

        <!-- WHY CHOOSE TEAMPRO AS YOUR JAVA DEVELOPMENT PARTNER? -->

        <!-- WHAT MAKES TEAMPRO’S JAVA DEVELOPERS STAND OUT -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            {{ _trans("What makes teampro's java developers stand out")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="mt-7 flex flex-row">
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ _trans("Clean Java code")  }}</p>
                <p>{{ _trans("and")  }} <b>{{ _trans("high-quality unit tests")  }}</b></p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">
                  {{ _trans("Future-proof application architectures")  }}
                </p>
                <p>{{ _trans("mobile-, integration-, cloud-ready; SOA, microservices-based, etc.")  }}</b></p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ _trans("Mature DevOps culture")  }}
                </p>
                <p>{{ _trans("and deep background in containerized environments.")  }}</p>
              </div>
            </div>
          </div>
        </div>

        <!--SAMPLE ARCHITECTURE OF THE JAVA SOLUTIONS WE DELIVER -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            {{ _trans("Sample Architecture of the java solutions we deliver")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <p class="mt-5 text-lg">{{ _trans("Bringing together a pool of experts with various skills and expertise, we provide our customers with a complete Java solution that includes:")  }}</p>
          <div class="flex flex-row mb-2 mt-5">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("Business logic (Java monolith or microservices)")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("A database (RDMS, NoSQL, DFS)")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("SPA user interface")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("An admin interface")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("A monitoring module")  }}</p>
          </div>
          <h3 class="font-bold text-xl my-4">{{ _trans("Optionally it may include:")  }}</h3>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("Analytics and machine learning software for offline processing.")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("Real-time processing software with message queue subsystems.")  }}</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("Complementing mobile applications (iOS, Android).")  }}
            </p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">{{ _trans("An IoT gateway and embedded software for IoT devices.")  }}
            </p>
          </div>
          <h3 class="font-bold text-xl my-4">{{ _trans("Sample architecture diagram for a modern web application:")  }}</h3>
          <img src="https://www.scnsoft.com/software-development-services/java-development-outsourcing/sample-architecture-of-java-solution-1.svg" />
        </div>

        <!-- SELECTED PROJECTS -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            {{ _trans("Selected Projects")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center ">
              <div class="flex w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="w-64" src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg" alt="">
              </div>
              <div class=" flex flex-col w-4/5 mb-10">
                <h1 class="text-xl md:text-2xl font-bold">{{ _trans("Development of Invention Machine Software with Semantic Search")  }}</h1>
                <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                <p class=" text-gray-500 text-lg md:text-xl">
                  {{ _trans("A number of products to help big companies improve their innovation process with the help of semantic analysis of natural language texts including 15 mln worldwide patents, 3,000 cross-disciplinary scientific 'deep web' websites and the database of 8,000 scientific effects. The software allows engineering, marketing and production personnel to find more cost-effective, competitive and higher-quality system designs")  }}
                </p>

              </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">{{ _trans("Learn More")  }}<i class="fas fa-arrow-right ml-4"></i></a>
          </div>
        </div>
      </div>

    </div>
@endsection

@section('js')


@endsection
