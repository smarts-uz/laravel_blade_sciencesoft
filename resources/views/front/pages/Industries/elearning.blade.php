@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="mx-6 md:mx-16 lg:mx-24">
    <div>

      <h1 class="uppercase font-bold mt-10 text-2xl">
        {{ _trans("Banking Software & IT Services for Banks")  }}
      </h1>
      <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
      <!-- <img src="{{ asset ('images/industries/elearning/cover-pic-elearning-development.svg')}}"> -->
      <img src="https://www.scnsoft.com/education-industry/elearning-development/cover-pic-elearning-development.svg">
      <p class="my-5 text-lg">
        {{ _trans("The goal of eLearning development services is creating eLearning solutions like LMS, LCMS, LXP and eLearning portals that help companies reduce learning costs, increase learning efficiency and engagement.")  }}
      </p>
      <p class="my-5 text-lg">
        {{ _trans("Since 2015, ScienceSoft has been building eLearning solutions that ensure efficient digital transformation of corporate learning processes resulting in a human capital ROI increase.")  }}
      </p>

    </div>

    <div class="mb-10">
      <div
          class="rounded-sm border-2 border-white shadow-2xl transition-shadow w-full mr-20 p-8"
        >
          <div class="flex flex-col">
            <h1 class="text-xl font-bold">{{ _trans("Want to Improve the Coverage and Quality of Corporate Training?")  }}</h1>
            <hr class="w-12 border-b-2 border-yellow-600 my-4" />
            <div class="flex flex-wrap">
              <p class="text-gray-500 pr-5 text-xl w-full lg:w-4/5">
                {{ _trans("ScienceSoft’s team is ready to streamline your corporate learning with technology or modernize your current eLearning software.")  }}
              </p>
              <button
              class="uppercase text-white text-sm bg-blue-700 py-2 px-4 w-2/5 mt-8 lg:w-1/5 text-center w-full focus:outline-none hover:bg-blue-800 md:p-4 sm:p-4"
              >
              {{ _trans("GET A ROBUST ELEARNING SOLUTION")  }}
              </button>
            </div>
            </div>
          </div>
      </div>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

    <div class="bg-blue-900 lg:px-16 px-3 py-10 text-white">
      <h1 class="text-2xl lg:text-3xl font-semibold">
        <p class="mb-4">{{ _trans("Solutions we deliver")  }}</p>
        <hr class="w-10 h-1 bg-pink-600">
      </h1>
      <p class="text-xs lg:text-xl my-4 lg:my-8">{{ _trans("We IT-enable all kinds of B2B, B2C interactions and internal operations.")  }}</p>
      <ul class="text-black flex flex-wrap flex-row">
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("Enterprise application")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("CRM")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("eCommerce")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("Mobile Apps")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("Collaboration and productivity solutions")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("Data Analytics")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("Web Portals")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
        <li class="bg-white xl:w-80 lg:w-60 md:w-48 w-2/5  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white">
          <a href="#">
            {{ _trans("ITSM")  }}
          </a>
          <div class="absolute bottom-3 right-3">
            <i class="fa fa-arrow-right fa-rotate-45"></i>
          </div>
        </li>
      </ul>
    </div>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
    <div class="flex flex-row">
    <div class="w-1/5"></div>
    <div class="w-4/5">
    <div class=" flex flex-row flex-wrap">
        <div class="bg-white rounded  w-2/5 py-5 px-2 border-t-2 border m-6 xl:w-2/5 lg:w-2/5 md:w-3/6 sm:w-8/12">
            <img src="https://www.scnsoft.com/education-industry/elearning-development/content-management.svg" alt=""
                 class="w-40 m-auto ">
            <h5 class="text-center text-xl font-bold mt-2">{{ _trans("Learning content development and")  }} <br> {{ _trans("management")  }}</h5>
            <ul style="list-style: square" class="ml-5 text-blue-500 ">

                <li><p class="text-black">{{ _trans("Multiple content types (e.g., text, images, video, audio,")  }} <br> {{ _trans("AR/VR).")  }}</p></li>
                <li><p class="text-black">{{ _trans("Built-in content authoring (e.g., eLearning course")  }} <br> {{ _trans("development.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Learner-generated, third-party, and corporate content")  }} <br> {{ _trans("aggregation.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Content tagging and intelligent search.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Support of technical standards like SCORM, AICC, xAPI and")  }} <br> {{ _trans("LTI.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Compliance with corporate and industry-specific")  }} <br> {{ _trans("regulations like HIPAA, SOX,
                GLBA.")  }}</p></li>

            </ul>

        </div>
        <div class="bg-white rounded  w-2/5 py-5 px-2 border-t-2 border m-6 xl:w-2/5 lg:w-2/5 md:w-3/6 sm:w-8/12">
            <img src="https://www.scnsoft.com/education-industry/elearning-development/admin.svg" alt=""
                 class="w-40 m-auto ">
            <h5 class="text-center text-xl font-bold mt-2">{{ _trans("Learning process administration and")  }} <br> {{ _trans("delivery")  }}</h5>
            <ul style="list-style: square" class="ml-5 text-blue-500 ">

                <li><p class="text-black">{{ _trans("Support of various types of learning (instructor-led online")  }} <br> {{ _trans("learning, blended
                learning, microlearning, self-paced")  }} <br> {{ _trans("learning, and more).")  }}</p></li>
                <li><p class="text-black">{{ _trans("Automated enrollment to courses based on job roles,")  }} <br> {{ _trans("required skills, learning history, etc.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Learning event scheduling (e.g., trainings, workshops,")  }} <br> {{ _trans("exams)")  }}</p></li>
                <li><p class="text-black">{{ _trans("Automated reminders and notifications (e.g., new courses,")  }} <br> {{ _trans("deadlines).")  }}</p></li>
                <li><p class="text-black">{{ _trans("AI-driven personalized learning paths and content")  }} <br> {{ _trans("recommendations.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Performance assessment.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Online proctoring (e.g., tests, exams).")  }}</p></li>
                <li><p class="text-black">{{ _trans("VR and AR simulators..")  }}</p></li>

            </ul>

        </div>
        <div class="bg-white w-2/5 py-5 px-2 border-t-2 border m-6 xl:w-2/5 lg:w-2/5 md:w-3/6 sm:w-8/12">
            <img src="https://www.scnsoft.com/education-industry/lms-consulting/social-learning.svg" alt=""
                 class="w-40 m-auto ">
            <h5 class="text-center text-xl font-bold mt-2">{{ _trans("Social features")  }}</h5>
            <ul style="list-style: square" class="ml-5 text-blue-500 ">

                <li><p class="text-black">{{ _trans("Learners’ profile pages.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Learning communities.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Discussion boards, chats and forums for learners.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Interactions with content via likes, shares, comments.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Gamification (scores, badges, leaderboards, levels,")  }} <br> {{ _trans("rewards).")  }}</p></li>

            </ul>

        </div>
        <div class="bg-white rounded  w-2/5 py-5 px-2 border-t-2 border m-6 xl:w-2/5 lg:w-2/5 md:w-3/6 sm:w-8/12">
            <img src="https://www.scnsoft.com/education-industry/elearning-development/analytics-and-reporting.svg" alt=""
                 class="w-40 m-auto ">
            <h5 class="text-center text-xl font-bold mt-2">{{ _trans("Analytics and reporting")  }}</h5>
            <ul style="list-style: square" class="ml-5 text-blue-500 ">

                <li><p class="text-black">{{ _trans("Learning history.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Learners’ feedback gathering.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Content usage, user activity, and performance assessment")  }} <br> {{ _trans("dashboards.")  }}</p></li>
                <li><p class="text-black">{{ _trans("User regulatory compliance reporting.")  }}</p></li>
            </ul>

        </div>
        <div class="bg-white rounded  w-2/5 py-5 px-2 border-t-2 border m-6 xl:w-2/5 lg:w-2/5 md:w-3/6 sm:w-8/12">
            <img src="https://www.scnsoft.com/education-industry/elearning-development/integration.svg" alt=""
                 class="w-40 m-auto ">
            <h5 class="text-center text-xl font-bold mt-2">{{ _trans("Integrations")  }}</h5>
            <ul style="list-style: square" class="ml-5 text-blue-500 ">

                <li><p class="text-black">{{ _trans("ERP.")  }}</p></li>
                <li><p class="text-black">{{ _trans("CRM.")  }}</p></li>
                <li><p class="text-black">{{ _trans("HR software.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Content management systems.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Knowledge management systems.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Task management software.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Video conferencing software.")  }}</p></li>
                <li><p class="text-black">{{ _trans("Social media.")  }}</p></li>
            </ul>

        </div>
    </div>
    </div>
</div>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600 my-4"/>
    <div class="flex flex-row p-3 ">
        <div style="height: 500px;" class="w-72 p-4 border-2 border-white-700">
            <img class="w-28 h-28 rounded" src="https://www.scnsoft.com/colored-icons-on-grey-background/speed.svg">
            <h1 class="my-8 text-semibol text-gray-700 text-2xl"><strong>{{ _trans("Fast solution delivery")  }}</strong></h1>
            <p class="text-xl text-gray-500">
                {{ _trans("Of a viable MVP (within 3-5 months)")  }} <br>
                {{ _trans("to agile iterative development and applying")  }} <br>
                {{ _trans("CI/CD practices.")  }}
            </p>
        </div>
        <div style="height: 500px;" class="w-72 p-3 mx-10 border-2 border-white-700">
            <img class="w-28 h-28 rounded" src="https://www.scnsoft.com/colored-icons-on-grey-background/quality.svg">
            <h1 class="my-8 text-semibol text-gray-700 text-2xl"><strong>{{ _trans("Cost-efficiency")  }}</strong></h1>
            <p class="text-xl text-gray-500">
                {{ _trans("Due to applying proven third-party components and public APIs,")  }}
                <br>{{ _trans("using cloud-native architecture and continuous")  }} <br>
                {{ _trans("implementation")  }}
                {{ _trans("costs optimization by ScienceSoft’s PMs.")  }}
            </p>
        </div>
        <div style="height: 500px;" class="w-72 p-3 border-2 border-white-700">
            <img class="w-28 h-28 rounded" src="https://www.scnsoft.com/colored-icons-on-grey-background/speed.svg">
            <h1 class="my-8 text-semibol text-gray-700 text-2xl"><strong>{{ _trans("Guaranteed software quality")  }}</strong></h1>
            <p class="text-xl text-gray-500">
                {{ _trans("Due to regular code reviews, integrated APM")  }}
                <br>{{ _trans("(application performance management), and unit testing.")  }}
            </p>
        </div>

   </div>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
    <div class="flex flex-row">

        <div class="rounded-sm w-3/6 border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
          <hr class="w-full border-t-8 border-blue-800" />
          <div class="p-4">
          <img class=" w4/5" src="https://www.scnsoft.com/education-industry/elearning-development/custom-development-1.svg" alt="">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Full-service IT outsourcing")  }}</p>
            <ul class="list-disc">
              <li class="ml-4 mt-3.5">{{ _trans("Learning needs analysis.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of a suitable type of an eLearning solution (LMS, LXP, eLearning portal), an optimal feature set")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of platform or a tech stack, and an implementation methodology.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("End-to-end eLearning software development.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Quality assurance.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("User training.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Post-implementation support and evolution.")  }}</li>
            </ul>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
          </div>
        </div>
        <div class="rounded-sm w-3/6 border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
          <hr class="w-full	 border-t-8 border-blue-800" />
          <div class="p-4">
          <img class=" w4/5" src="https://www.scnsoft.com/education-industry/elearning-development/custom-development-1.svg" alt="">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Full-service IT outsourcing")  }}</p>
            <ul class="list-disc">
              <li class="ml-4 mt-3.5">{{ _trans("Learning needs analysis.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of a suitable type of an eLearning solution (LMS, LXP, eLearning portal), an optimal feature set")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of platform or a tech stack, and an implementation methodology.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("End-to-end eLearning software development.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Quality assurance.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("User training.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Post-implementation support and evolution.")  }}</li>
            </ul>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
          </div>
        </div>

      </div>
    <div class="flex flex-row">

        <div class="rounded-sm w-3/6 border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
          <hr class="w-full	 border-t-8 border-blue-800" />
          <div class="p-4">
          <img class=" w4/5" src="https://www.scnsoft.com/education-industry/elearning-development/custom-development-1.svg" alt="">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Full-service IT outsourcing")  }}</p>
            <ul class="list-disc">
              <li class="ml-4 mt-3.5">{{ _trans("Learning needs analysis.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of a suitable type of an eLearning solution (LMS, LXP, eLearning portal), an optimal feature set")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of platform or a tech stack, and an implementation methodology.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("End-to-end eLearning software development.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Quality assurance.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("User training.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Post-implementation support and evolution.")  }}</li>
            </ul>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
          </div>
        </div>
        <div class="rounded-sm w-3/6 border-2 transition-shadow  hover:shadow-lg w-1/4 h-auto mr-10">
          <hr class="w-full	 border-t-8 border-blue-800" />
          <div class="p-4">
          <img class=" w4/5" src="https://www.scnsoft.com/education-industry/elearning-development/custom-development-1.svg" alt="">
            <p class="text-lg text-blue-700 mb-3 text-center font-bold">{{ _trans("Full-service IT outsourcing")  }}</p>
            <ul class="list-disc">
              <li class="ml-4 mt-3.5">{{ _trans("Learning needs analysis.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of a suitable type of an eLearning solution (LMS, LXP, eLearning portal), an optimal feature set")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Selection of platform or a tech stack, and an implementation methodology.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("End-to-end eLearning software development.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Quality assurance.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("User training.")  }}</li>
              <li class="ml-4 mt-3.5">{{ _trans("Post-implementation support and evolution.")  }}</li>
            </ul>

            <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">{{ _trans("Outsource 100% of it")  }}</button>
          </div>
        </div>

      </div>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
    <ul class="list-disc">
        <li class="mt-2 text-semibold text-lg">{{ _trans("MVP development: 3-5 months")  }}</li>
        <li class="mt-2 text-semibold text-lg">{{ _trans("MVP with an innovative component to increase learner engagement: 4-6 months")  }}</li>
        <li class="mt-2 text-semibold text-lg">{{ _trans("Creation of an eLearning module with basic features or automation of one learning management process (e.g., performance assessment): 1-3 months")  }}</li>
        <li class="mt-2 text-semibold text-lg">{{ _trans("Investment payback period: 0.1-0.9 years (due to high value from innovative tech)")  }}</a></li>
        <li class="mt-2 text-semibold text-lg">{{ _trans("Minor changes and hotfixes: several times a day")  }}</li>
    </ul>

    <h1 class="uppercase font-bold mt-10 text-2xl">
      {{ _trans("Banking Software & IT Services for Banks")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600 my-4"/>
    <div class=" flex flex-wrap justify-around">
        <li class="border-2 list-none p-4 md:w-1/2 w-full  mt-6">
            <div class="mb-5">
                <span class="text-left text-xl font-semibold text-gray-700">{{ _trans("T&M with a cap")  }}</span>
            </div>
            <div class="text-gray-700 w-72 leading-6 font-medium">{{ _trans("Annual ROI of eLearning solutions due to an optimal feature value/cost ratio and use of innovative techs.")  }}</div>
        </li>
        <li class="border-2 list-none p-4 md:w-1/2 w-full  mt-6">
            <div class="mb-5">
                <span class="text-left text-xl font-semibold text-gray-700">{{ _trans("Fixed-price")  }}</span>
            </div>
            <div class="text-gray-700 w-72 leading-6 font-medium">{{ _trans("Annual ROI of eLearning solutions due to an optimal feature value/cost ratio and use of innovative techs.")  }}</div>
        </li>
    </div>

    <h1 class="uppercase font-bold mt-10 text-2xl">
    {{ _trans("WHY OPT FOR ELEARNING SOFTWARE DEVELOPMENT RIGHT NOW")  }}
    </h1>
    <hr class="w-12 border-b-2 border-yellow-600  my-4"/>
    <!-- start -->
    <div>
          <div class="flex flex-wrap justfiy-beetwen mt-8">
            <li class="border-l list-none p-4 md:w-1/2 w-full mt-6">
              <div class="mb-5">
                <span class="text-left text-4xl font-semibold text-blue-700">120–430%</span>
              </div>
              <div class="text-gray-700 w-72  lg:w-80 leading-6 w-44 font-semibold">{{ _trans("Annual ROI of eLearning solutions due to an optimal feature value/cost ratio and use of innovative techs.")  }}</div>
            </li>
            <li class="border-l  list-none p-4 md:w-1/2  w-full mt-6">
              <div class="mb-5">
                <span class="text-left text-4xl font-semibold text-blue-700">-20-50%</span>
              </div>
              <div class="text-gray-700  w-72 lg:w-80 leading-6 w-44 font-semibold">{{ _trans("Learning costs due to saving money on materials, equipment, dedicated staff and trainers.")  }}</div>
            </li>
            <li class="border-l list-none p-4 md:w-1/2 w-full mt-6">
              <div class="mb-5">
                <span class="text-left text-4xl font-semibold text-blue-700">30–60%</span>
              </div>
              <div class="text-gray-700 w-72  lg:w-80 leading-6 w-44 font-semibold">{{ _trans("Employee productivity due to improved knowledge and skills, policy awareness and on-demand access to learning")  }}</div>
            </li>
            <li class="border-l  list-none p-4 md:w-1/2  w-full mt-6 ">
              <div class="mb-5">
                <span class="text-left text-4xl font-semibold text-blue-700">+25-60%</span>
              </div>
              <div class="text-gray-700  w-72 lg:w-80 leading-6 w-44 font-semibold">{{ _trans("Knowledge retention due to diversity of eLearning content and higher learning impact.")  }}</div>
            </li>
          </div>
        </div>

    <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
      <div class='w-2/3'>
        <h1 class='text-gray-900 mt-6'>
          <p class='text-2xl font-bold'>{{ _trans("Measure IT Outsourcing Value for Your Business")  }}</p>
          <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </h1>
        <p class='text-gray-600 text-xl'>{{ _trans("Our team can conduct an IT outsourcing feasibility analysis to
         calculate the financial benefits of an outsourcing engagement for your particular case.")  }} </p>
      </div>
      <div class='w-1/3 m-0 flex justify-center items-center'>
        <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>{{ _trans("Request a
         Feasibility analysis")  }}</a>
      </div>
    </div>
  </div>

</div>

@endsection

@section('js')

@endsection
