@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="flex w-full ">
    <aside class="w-80 h-screen bg-gray hidden sm:block">
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
      <!-- Custom Enterprise -->
      <div>
        <p class="text-gray-400 text-xs">Home &#62; About Company</p>
        <h1 class="uppercase font-bold mt-10 text-3xl">
          Custom Enterprise and SaaS Java Application Development
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <img
          src="https://www.scnsoft.com/cover-pictures/custom-enterprise-and-saas-java-development.svg"
        />
        <p class="my-5 text-lg">
          <b>Java application development</b> services imply the engineering
          of powerful web and mobile applications, web services, and embedded
          software solutions able to run on any platform with the Java
          language and frameworks.
        </p>
        <p class="my-5 text-lg">
          <b>ScienceSoft</b> is a
          <b>global Java application development company</b>
          that has already accumulated
          <b>more than 20 years of experience in Java development.</b> We’re
          committed to building sustainable and high-quality Java solutions
          using the latest and most trusted techs and architecture patterns.
        </p>
      </div>

      <!-- WHAT WE BUILD IN JAVA -->
      <div>
        <h1 class="uppercase font-bold mt-10 text-3xl">
          What we build in java
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <img
          src="https://www.scnsoft.com/software-development-services/java-development-outsourcing/we-build-1.svg"
        />
        <div class="rounded-sm border-2 mt-10 transition-shadow p-2 md:p-8">
          <div class="flex flex-col md:flex-row items-center">
            <div class="flex flex-col w-3/4">
              <h1 class="text-xl md:text-2xl font-bold">
                Benefit from a Streamlined Delivery of Stable Java Software
              </h1>
              <hr class="w-12 border-yellow-600 text-gray-800 my-4" />
              <p class="text-gray-600 text-lg md:text-xl leading-4">
                ScienceSoft offers timely development of Java applications
                with a sustainable architecture, clean code and a high
                coverage with unit tests.
              </p>
            </div>
            <div class="mr-0 md:mr-8 mb-8 md:mb-0 sm:mt-3">
              <button class="uppercase bg-blue-700 text-base text-white">
                Request Java Development
              </button>
            </div>
          </div>
        </div>

        <!-- WHY CHOOSE SCIENCESOFT AS YOUR JAVA DEVELOPMENT PARTNER? -->

        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            Why choose sciencesoft as your java development partner?
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="flex flex-row mt-5">
            <div >
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">Over 20 years in Java development.</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">Quick project start (1 – 4 weeks).</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  Rapid prototyping, fast <b>MVP delivery.</b>
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  Proprietary
                  <b>Integrated Manual and Automated Testing</b> (IMAAT)
                  approach.
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  Experience in
                  <b
                    >big data, IoT, machine learning, blockchain, image
                    analysis,</b
                  >
                  etc.
                </p>
              </div>
            </div>
            <div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">Data analytics services since 1989.</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  Big data consulting services since 2013.
                </p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">IoT consulting services since 2011.</p>
              </div>
              <div class="flex flex-row mb-2">
                <span class="text-blue-600 mr-4">&#9632;</span>
                <p class="text-lg">
                  AWS Select-tier consulting partner and Microsoft partner
                  with 8 Gold competencies.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- WHAT MAKES SCIENCESOFT’S JAVA DEVELOPERS STAND OUT -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            What makes sciencesoft's java developers stand out
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="mt-7 flex flex-row">
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">Clean Java code</p>
                <p>and <b>high-quality unit tests</b></p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">
                  Future-proof application architectures
                </p>
                <p>mobile-, integration-, cloud-ready; SOA, microservices-based, etc.</b></p>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">Mature DevOps culture
                </p>
                <p>and deep background in containerized environments.</p>
              </div>
            </div>
          </div>
        </div>

        <!--SAMPLE ARCHITECTURE OF THE JAVA SOLUTIONS WE DELIVER -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            Sample Architecture of the java solutions we deliver
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <p class="mt-5 text-lg">Bringing together a pool of experts with various skills and expertise, we provide our customers with a complete Java solution that includes:</p>
          <div class="flex flex-row mb-2 mt-5">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">Business logic (Java monolith or microservices</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">A database (RDMS, NoSQL, DFS)</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">SPA user interface</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">An admin interface</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">A monitoring module</p>
          </div>
          <h3 class="font-bold text-xl my-4">Optionally it may include:</h3>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">Analytics and machine learning software for offline processing.</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">Real-time processing software with message queue subsystems.</p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">Complementing mobile applications (iOS, Android).
            </p>
          </div>
          <div class="flex flex-row mb-2">
            <span class="text-blue-600 mr-4">&#9632;</span>
            <p class="text-lg">An IoT gateway and embedded software for IoT devices.
            </p>
          </div>
          <h3 class="font-bold text-xl my-4">Sample architecture diagram for a modern web application:</h3>
          <img src="https://www.scnsoft.com/software-development-services/java-development-outsourcing/sample-architecture-of-java-solution-1.svg" />
        </div>



        <!-- SELECTED PROJECTS -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
            Selected Projects
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="rounded-sm bg-gray-50 relative mt-10 transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-center ">
              <div class="flex w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                <img class="w-64" src="https://www.scnsoft.com/boss/images/948b4f5b-9046-4f88-a8a1-ea5f1095f6cfinvention_machine_with_semantic_search_small.jpg" alt="">
              </div>
              <div class=" flex flex-col w-4/5 mb-10">
                <h1 class="text-xl md:text-2xl font-bold">Development of Invention Machine Software with Semantic Search</h1>
                <hr class="w-12 border-yellow-600 text-gray-800 my-4">     
                <p class=" text-gray-500 text-lg md:text-xl">
                  A number of products to help big companies improve their innovation process with the help of semantic analysis of natural language texts including 15 mln worldwide patents, 3,000 cross-disciplinary scientific 'deep web' websites and the database of 8,000 scientific effects. The software allows engineering, marketing and production personnel to find more cost-effective, competitive and higher-quality system designs
                </p>
               
              </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i class="fas fa-arrow-right ml-4"></i></a>
          </div>
        </div>
      </div>
    </section>
  </main>



@endsection


@section('js')

@endsection