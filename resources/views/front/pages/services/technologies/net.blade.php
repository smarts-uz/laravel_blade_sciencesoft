@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
      <!-- Custom Enterprise -->
      <div>
        <p class="text-gray-400 text-xs">{{ _trans("Home")  }} &#62; {{ _trans("About Company")  }}</p>
        <h1 class="uppercase font-bold mt-10 text-3xl">
        {{ _trans(".NET Application Development Services")  }}
        </h1>
        <hr class="w-12 mt-5 border-yellow-400 h-4" />
        <img
          src="https://www.scnsoft.com/software-development-services/dot-net/cover-pic-dot-net-3.svg"
        />
        <p class="my-5 text-lg">
        <b>{{ _trans(".NET")  }}</b> {{ _trans("is a programming language with powerful tools for web, mobile and desktop development. It is supported by the robust Microsoft ecosystem and allows building applications suitable for any device and platform.")  }}
        </p>
        <p class="my-5 text-lg">
        {{ _trans("Taking advantage of Microsoft technologies, TeamPRO’s developers deliver fast, scalable, and reliable .NET-based applications. Our team can supplement the developed solutions with trending cloud services, ensure engaging and highly interactive JavaScript SPA user experience and easy integration through an enterprise service bus.")  }}
        </p>

      </div>

      <!-- OUR .NET HIGHLIGHTS -->
      <div class="flex flex-col">
          <h1 class="uppercase font-bold mt-10 text-3xl">
          {{ _trans("OUR .NET HIGHLIGHTS")  }}
          </h1>
          <hr class="w-12 mt-5 text-yellow-400 h-4" />
          <div class="flex flex-row">
            <div class="pr-8">
              <img
                class="w-96 h-80"
                src="https://www.scnsoft.com/about/company-new/illustrations-for-timeline_08-2020_1.svg"
              />
            </div>
            <div class="pt-12">
              <h1 class="font-bold text-xl">2020</h1>
              <div class="mt-8">
                <div class="flex flex-row">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-lg">
                  13 {{ _trans("years of experience in .NET development.")  }}
                  </p>
                </div>
                <div class="flex flex-row">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-lg">
                  8 {{ _trans("Gold Microsoft Competencies: Application Development, Application Integration, Cloud Platform, Data Platform, Datacenter, Data Analytics, Messaging, Collaboration and Content.")  }}
                  </p>
                </div>
                <div class="flex flex-row">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-lg">
                  55+ {{ _trans(".NET developers.")  }}
                  </p>
                </div>
                <div class="flex flex-row">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-lg">
                  25 {{ _trans("of our .NET developers have Microsoft Certified Technology Specialist (MCTS) and Microsoft Certified Professional Developer (MCPD) certifications.")  }}
                  </p>
                </div>
                <div class="flex flex-row">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-lg">
                  180 {{ _trans("successfully released projects.")  }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- WHAT MAKES OUR .NET DEVELOPERS STAND OUT -->

        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
          {{ _trans("WHAT MAKES OUR .NET DEVELOPERS STAND OUT")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="flex flex-row mt-5">

            <div class="border-2 px-6 w-1/2">
                <img class="w-14 my-8"
                    src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                    alt="">
                <p><strong class="text-xl">{{ _trans("Mature project management")  }}</strong></p>
                <p class="mb-20 mt-8">{{ _trans("DevOps culture and sustainable architectural decisions help us meet deadlines and introduce changes fast without compromising on the quality of our work even under the most challenging conditions.")  }}

                </p>
            </div>
            <div class="border-2 mx-8 px-6 w-1/2">
                <img class="w-14 my-8"
                    src="https://www.scnsoft.com/software-development-services/software-consulting/star.svg"
                    alt="">
                <p><strong class="text-xl">{{ _trans("Expertise in cutting-edge technologies")  }}</strong></p>
                <p class="mt-8">{{ _trans("We help leverage the power of IoT, big data and AI in advanced .NET-based applications.")  }}
                </p>
            </div>

          </div>
        </div>

         <!--OUR TECHNOLOGY STACK -->

        <!-- CHOOSE YOUR COOPERATION MODEL -->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
          {{ _trans("CHOOSE YOUR COOPERATION MODEL")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <div class="mt-7 flex flex-row">
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/2 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ _trans("Request .NET consulting")  }}</p>
                <p class="mb-3">{{ _trans("We help choose the right technologies for your future .NET-based application or solve tech problems with an existing application by:")  }}</b></p>
                <div class="flex flex-row mb-2">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-base">
                  {{ _trans("Identifying the system’s bottlenecks.")  }}
                  </p>
                </div>
                <div class="flex flex-row mb-2">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-base">
                  {{ _trans("Checking security vulnerabilities.")  }}
                  </p>
                </div>
                <div class="flex flex-row mb-2">
                  <span class="text-blue-600 mr-4">&#9632;</span>
                  <p class="text-base">
                  {{ _trans("Working out an optimal scalability map.")  }}
                  </p>
                </div>
                <button class="bg-blue-700 text-white w-full mt-3 uppercase p-3">{{ _trans("Contact us")  }}</button>
              </div>
            </div>
            <div
              class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/2 h-auto mr-10"
            >
              <hr class="w-full border-t-4 border-blue-800" />
              <div class="p-4">
                <p class="text-lg text-blue-700 mb-3">{{ _trans("Hire .NET developers")  }}</p>
                <p class="mb-3">{{ _trans("Drawing on your needs, we can suggest either an offshore dedicated team or team augmentation model of cooperation to back up your .NET development project or migration of legacy software to .NET. We offer pre-vetted developers, which match your requirements – you’re free to screen them before the start of cooperation.")  }}</p>

                <button class="bg-blue-700 text-white w-full mt-3 uppercase p-3">{{ _trans("Contact us")  }}</button>
              </div>
            </div>
          </div>
        </div>

        <!--.NET APPLICATION ARCHITECTURE WE DESIGN-->
        <div>
          <h1 class="uppercase font-bold mt-10 text-3xl">
          {{ _trans(".NET APPLICATION ARCHITECTURE WE DESIGN")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <p class="mt-5 text-lg">{{ _trans("We choose the architecture that will perfectly suit the needs of your future application:")  }}</p>

            <div class="mt-7 flex flex-row">
              <div
                class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
              >
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                <img src="https://www.scnsoft.com/blue-icons-on-grey-background/traditional1.svg" class="w-20 h-20"/>
                  <p class="text-lg font-bold mt-3 mb-5 text-black">{{ _trans("Multitier architecture")  }}</p>
                  <p>{{ _trans("For mid-sized applications to ensure their fast development, easy testing and maintenance.")  }}</p>
                </div>
              </div>

              <div
                class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
              >
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                <img src="https://www.scnsoft.com/blue-icons-on-grey-background/traditional1.svg" class="w-20 h-20"/>
                  <p class="text-lg font-bold mt-3 mb-5 text-black">{{ _trans("Microservices architecture")  }}</p>
                  <p>{{ _trans("For building a brand-new application, adding new components to the existing microservices infrastructure, or refactoring a monolith application. Microservices are a good fit for increased load and needs, continuous deployment, and partial updates.")  }}<p>
                </div>
              </div>

              <div
                class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/3 h-auto mr-10"
              >
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                <img src="https://www.scnsoft.com/blue-icons-on-grey-background/traditional1.svg" class="w-20 h-20"/>
                  <p class="text-lg font-bold mt-3 mb-5 text-black">{{ _trans("Cloud-native architecture")  }}</p>
                  <p>{{ _trans("To enhance your application with Microsoft Azure Cloud Services and specialized API. You’ll get a modern cloud app with maximal scalability and availability and benefit from significantly reduced operational costs.")  }}<p>
                </div>
              </div>

            </div>
       </div>

        <!-- STREAMLINE YOUR .NET DEVELOPMENT WITH TEAMPRO -->
        <div>
        <h1 class="uppercase font-bold mt-10 text-3xl">
        {{ _trans("STREAMLINE YOUR .NET DEVELOPMENT WITH TEAMPRO")  }}
          </h1>
          <hr class="w-12 mt-5 border-b-2 border-yellow-400" />
          <h3 class="font-bold text-xl my-5">{{ _trans("We keep our code short and clean…")  }}</h3>
          <p class="mt-5 text-lg mb-5">{{ _trans("We provide comprehensive code documentation and carry out consistent code reviews to write code once and keep it simple, loose-coupled, balanced, and readable.")  }}</p>
          <h3 class="font-bold text-xl mb-5">{{ _trans("…because it does matter")  }}</h3>
          <p class="mt-5 text-lg">{{ _trans("Respectively, you get faster bug detection, stable application work, undemanding maintenance, and easier future updates.")  }}</p>
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

        <div class='flex justify-between items-center p-10 shadow-lg mt-3'>
        <div class='w-2/3'>
          <h1 class='text-gray-900 mt-6'>
            <p class='text-2xl font-bold'>{{ _trans("Eager to Use .NET in Your Future Project?")  }}</p>
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
          </h1>
          <p class='text-gray-600 text-xl'>{{ _trans("Let’s see what TeamPRO’s team can do for you.")  }}</p>
        </div>
        <div class='w-1/3 m-0 flex justify-center items-center'>
          <a href="#" class='px-8 py-3 bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ _trans("Contact us")  }}</a>
        </div>
      </div>
      </div>

    </div>

@endsection

@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>

@endsection
