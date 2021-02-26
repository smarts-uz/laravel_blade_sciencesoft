@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class='my-16'>


<h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('Custom eLearning Software Development for Higher Human Capital ROI') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img src="https://www.scnsoft.com/education-industry/elearning-development/cover-pic-elearning-development.svg" alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('The goal of eLearning development services is creating eLearning solutions like LMS, LCMS, LXP and eLearning portals that help companies reduce learning costs, increase learning efficiency and engagement.') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{_trans('Since 2015, ScienceSoft has been building eLearning solutions that  ')}}
        <span class="text-gray-800 font-bold">{{ _trans('ensure efficient digital transformation of corporate learning processes resulting in a human capital ROI increase.')}}</span>
    </p>

    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ _trans('Want to Improve the Coverage and Quality of Corporate Training?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans(' TeamPro team is ready to streamline your corporate learning with technology or modernize your current eLearning software.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('GET A ROBUST ELEARNING SOLUTION') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('TYPES OF ELEARNING SOLUTIONS WE DEVELOP') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <ul class="text-black grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <li
                    class="bg-white duration-300  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                        {{_trans('Learning management systems')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans('eLearning portals')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans('Learning experience platforms')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans(' Remote proctoring software')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans('Virtual classroom solutions')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans('Learning content management systems')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans('Mobile learing solutions')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{_trans('Knowledge management solutions')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
            </ul>

            <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('KEY FEATURES OF ELEARNING SOFTWARE') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">

<div class="border pb-12 hover:shadow-md">
         <div class="h-3 w-full bg-blue-500"></div>
         <img width="120" height="108"
              src="https://www.scnsoft.com/education-industry/elearning-development/content-management.svg"
              class="m-auto my-4" alt="">
         <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
         {{ _trans('Learning content development and management') }}
         </h1>

        <div class="px-4 text-lg">
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Multiple content types (e.g., text, images, video, audio, AR/VR).') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Built-in content authoring (e.g., eLearning course development).') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Learner-generated, third-party, and corporate content aggregation.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Reusable content and templates.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Content tagging and intelligent search.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Support of technical standards like SCORM, AICC, xAPI and LTI.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Compliance with corporate and industry-specific regulations like HIPAA, SOX, GLBA.')}}</span>
         </li>
     </ul>
 


        </div>

     </div>
     <div class="border pb-12 hover:shadow-md">
         <div class="h-3 w-full bg-blue-500"></div>
         <img width="120" height="108"
              src="https://www.scnsoft.com/education-industry/elearning-development/admin.svg"
              class="m-auto my-4" alt="">
         <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
         {{ _trans('Learning process administration and delivery') }}
         </h1>

        <div class="px-4 text-lg">
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Support of various types of learning (instructor-led online learning, blended learning, microlearning, self-paced learning, and more).') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Automated enrollment to courses based on job roles, required skills, learning history, etc.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Learning event scheduling (e.g., trainings, workshops, exams)') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Automated reminders and notifications (e.g., new courses, deadlines).')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('AI-driven personalized learning paths and content recommendations.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Performance assessment.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Online proctoring (e.g., tests, exams).')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('VR and AR simulators.')}}</span>
         </li>
     </ul>
 


        </div>

     </div>


     <div class="border pb-12 hover:shadow-md">
         <div class="h-3 w-full bg-blue-500"></div>
         <img width="120" height="108"
              src="https://www.scnsoft.com/education-industry/lms-consulting/social-learning.svg"
              class="m-auto my-4" alt="">
         <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
         {{ _trans('Social features') }}
         </h1>

        <div class="px-4 text-lg">
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Learners’ profile pages.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Learning communities.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Discussion boards, chats and forums for learners.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Interactions with content via likes, shares, comments.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Gamification (scores, badges, leaderboards, levels, rewards).')}}</span>
         </li>
     </ul>
 


        </div>

     </div>

     <div class="border pb-12 hover:shadow-md">
         <div class="h-3 w-full bg-blue-500"></div>
         <img width="120" height="108"
              src="https://www.scnsoft.com/education-industry/elearning-development/analytics-and-reporting.svg"
              class="m-auto my-4" alt="">
         <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
         {{ _trans('Analytics and reporting') }}
         </h1>

        <div class="px-4 text-lg">
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Learning history.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Learners’ feedback gathering.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Content usage, user activity, and performance assessment dashboards.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('User regulatory compliance reporting.')}}</span>
         </li>
    
     </ul>
 


        </div>

     </div>

     <div class="border pb-12 hover:shadow-md">
         <div class="h-3 w-full bg-blue-500"></div>
         <img width="120" height="108"
              src="https://www.scnsoft.com/education-industry/elearning-development/integration.svg"
              class="m-auto my-4" alt="">
         <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
         {{ _trans('Integrations') }}
         </h1>

        <div class="px-4 text-lg">
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6">
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Integrations') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('CRM.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('HR software.') }}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Content management systems.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Knowledge management systems.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Task management software.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Video conferencing software.')}}</span>
         </li>
         <li class="text-blue-800 mt-2">
             <span class="text-gray-600">{{ _trans('Social media.')}}</span>
         </li>
    
    
     </ul>
 


        </div>

     </div>



     </div>

     <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('WHAT MAKES SCIENCESOFT AN EXPERIENCED ELEARNING SOFTWARE DEVELOPER') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="md:flex">
        <div class="md:w-4/12">
            <img class="w-80 m-auto" src="https://www.scnsoft.com/partners/ms-8-and-aws-2.svg" alt="">
        </div>
        <div class="md:w-8/12 md:ml-4">
            <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('31 ') }}</span>
                    <span class="text-gray-600">{{ _trans('years in software development, data analytics, and AI.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('5') }}</span>
                    <span class="text-gray-600">{{ _trans('years in eLearning software development.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('25+') }}</span>
                    <span class="text-gray-600">{{ _trans(' business analysts with ') }}</span>
                    <span class="text-gray-800 font-bold">{{ _trans(' 5-9 ') }}</span>
                    <span class="text-gray-600">{{ _trans('years of experience. ') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans(' Expertise in ') }}</span>
                    <span class="text-gray-800 font-bold">{{ _trans(' 23 ') }}</span>
                    <span class="text-gray-600">{{ _trans(' industries, including healthcare, manufacturing, oil and gas, banking, retail.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('Gold ') }}</span>
                    <span class="text-gray-600">{{ _trans('Microsoft Competencies: Application Development, Collaboration and Content, Cloud Platform.') }}</span>

                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-800 font-bold">{{ _trans('AWS Select Tier ') }}</span>
                    <span class="text-gray-600">{{ _trans('partnership.') }}</span>

                </li>

            </ul>
        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('BENEFITS OF ELEARNING DEVELOPMENT BY SCIENCESOFT') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <div class="grid gap-4 md:grid-cols-3 gap-4">
        <div class="p-6 border">
            <img src="https://www.scnsoft.com/colored-icons-on-grey-background/speed.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Fast solution delivery') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('Of a viable MVP (within 3-5 months) due to agile iterative development and applying CI/CD practices.') }}
    </p>            
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/colored-icons-on-grey-background/save-money.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Cost-efficiency') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('Due to applying proven third-party components and public APIs, using cloud-native architecture and continuous implementation costs optimization by ScienceSoft’s PMs.') }}
    </p>            
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/colored-icons-on-grey-background/quality.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Guaranteed software quality') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('Due to regular code reviews, integrated APM (application performance management), and unit testing.') }}
    </p>            
        </div>

        </div>

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('WE KNOW YOUR INDUSTRY') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ _trans('We develop eLearning solutions for various industries:') }}
    </p>   

    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4 group">

    <div class="group-hover:text-blue-700 text-gray-700 font-bold text-xl p-4 hover:shadow-md text-center border">
    <img class="m-auto" src="https://www.scnsoft.com/---home-page-illustrations/industries/healthcare.svg" alt="">
    <h1>Healthcare</h1>
    </div>
    <div class="group-hover:text-blue-700 text-gray-700 font-bold text-xl p-4">
    <img src="https://www.scnsoft.com/---home-page-illustrations/industries/healthcare.svg" alt="">
    <h1>Healthcare</h1>
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
