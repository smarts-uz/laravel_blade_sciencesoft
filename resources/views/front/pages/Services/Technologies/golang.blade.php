@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24 my-10">
      <!-- Custom Enterprise -->

        <h1 class="font-bold mt-10 text-4xl">{{ @translate_lang("Hire Golang Developers | Advanced Tech Expertise")  }}</h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <img src="https://www.scnsoft.com/software-development-services/golang/hire-sciencesoft's-golang-developers.svg" alt="">
        <p class="pt-5">
           <strong>{{ @translate_lang("Go")  }}</strong>, {{ @translate_lang("or")  }} <strong>{{ @translate_lang("Golang")  }}</strong>, {{ @translate_lang("is a cross-platform server-side language to build heavy-load
           software with exceptionally high performance and scalability due to native support of
           concurrency, fast code compilation and automatic memory management. ScienceSoft’s developers
           use Go to build robust cloud-native applications
           that can leverage advanced techs – IoT, big data, AI, machine learning, blockchain.")  }}
        </p>
        <div class='flex justify-between items-center p-10 shadow-lg mt-3'>
            <div class='w-2/3'>
            <h1 class='text-gray-900 mt-6'>
                <p class='text-2xl font-bold'>{{ @translate_lang("Start Building Your Software in a Couple of Weeks!")  }}</p>
                <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            </h1>
              <p class='text-gray-600 text-xl'>{{ @translate_lang("We will develop a scalable solution with neat UX design that answers your business needs.")  }}</p>
            </div>
            <div class='w-1/3 m-0 flex justify-center items-center'>
              <a href="#" class='px-8 py-3 bg-blue-700 text-white uppercase hover:bg-blue-900'>{{ @translate_lang("Get a Free Consulation")  }}</a>
            </div>
        </div>

        <div class="flex flex-col">
            <h1 class="uppercase font-bold mt-10 text-2xl">
                {{ @translate_lang("SCIENCESOFT’S FACTS")  }}
            </h1>
            <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
            <div class="flex flex-row">
              <div class="pr-8">
                <img
                  class="w-60 h-60"
                  src="https://www.scnsoft.com/partners/sw-development/microsoft-gold-partner.svg"
                />
                <img
                  class="w-24 h-24 relative left-20 bottom-20"
                  src="https://www.scnsoft.com/partners/sw-development/aws-apn-select-consulting-partner.svg"
                />
              </div>
              <div class="pt-12">
                <h1 class="font-bold text-xl">{{ @translate_lang("Gold")  }}</h1>
                <div class="mt-8">
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                        {{ @translate_lang("Established Lean, Agile, and DevOps culture.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                        {{ @translate_lang("Experience in advanced technologies: AI, machine learning, IoT, big data, blockchain.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                    {{ @translate_lang("HQ – McKinney, Texas. Offshore development centers in Eastern Europe, representative offices in UAE, Latvia, Finland, and Ukraine.")  }}
                    </p>
                  </div>
                  <div class="flex flex-row">
                    <span class="text-blue-600 mr-4">&#9632;</span>
                    <p class="text-lg">
                    {{ @translate_lang("25 of our .NET developers have Microsoft Certified Technology Specialist (MCTS) and Microsoft Certified Professional Developer (MCPD) certifications.")  }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">{{ @translate_lang("OUR DEVELOPMENT SKILLS")  }}</h1>
        <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
        <!-- no element!!! -->
        <div class=" text-center">
          <button type="submit" class=" px-3 py-2 bg-blue-700 text-white text-sm text-bold uppercase hover:bg-blue-900">{{ @translate_lang("Request Go Programmers’ CV")  }}</button>
        </div>
        <h1 class="uppercase font-bold mt-10 text-2xl">{{ @translate_lang("OUR DEVELOPMENT SKILLS")  }}</h1>
        <hr class="w-12 border-b-2 border-yellow-600 my-4"/>
        <div class="flex flex-wrap text-center justify-between">
            <div class="w-1/5 border">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/cloud-native-apps.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/distributed-systems.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/embedded-systems-iot.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/big-data-system.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/machine-learning.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/blockchain.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/mobile.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
            <div class="w-1/5 border p-4">
              <img class="h-20 w-20 mx-auto" src="https://www.scnsoft.com/colored-icons-on-grey-background/legacy-software-migration.svg" alt="">
              <p class="inner">
                <a href="#" class="hover:text-blue-700">{{ @translate_lang("AI and machine learning software")  }}</a>
              </p>
            </div>
        </div>

</div>

@endsection

@section('js')

@endsection
