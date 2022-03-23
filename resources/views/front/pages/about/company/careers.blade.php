@extends('front.layout')

@section('css')

@endsection

@section('main')


    <div class="flex flex-col lg:flex-row my-5 pb-12">
        <div class="w-full lg:w-3/12  lg:flex flex-col mr-2">
            <div class="">
                <ul class="flex flex-col">

                    @foreach ($categories as $category)
                        @if ($category->active)
                            <li x-data="{ open: false }" class="flex flex-col bg-gray-100 border border-white ">
                                @if (empty($category->path_blade))
                                    <div
                                        class="flex justify-between p-2 py-4 hover:bg-indigo-100 items-center text-gray-500 text-lg   hover:text-blue-500">
                                        <div class="flex flex-row ">
                                            <a href="#">{{ $category->name }}</a>
                                        </div>
                                        <p class="text-blue-500"><i class="fas cursor-pointer fa-angle-down"
                                                                    @click="open = true"></i></p>

                                    </div>
                                    <div x-show.transition.in.duration.1000ms.out.duration.500ms="open"
                                         @click.away="open = false"
                                         class="flex-col ">


                                        <div class="list-none">
                                            @foreach ($category->subCategories as $subCategory)
                                                @if($subCategory->name)
                                                    <h1 class="mb-2 font-bold text-black uppercase">
                                                        {{ $subCategory->name }}</h1>
                                                    <hr class="border-b w-12 border-yellow-500">
                                                    <ul class="text-gray-500">
                                                        @if ($subCategory->active && count($subCategory->subCategories))
                                                            @foreach ($subCategory->subCategories as $subSubCategory)
                                                                <li class="hover:bg-indigo-100 p-2 border border-white hover:text-blue-500">
                                                                    <a
                                                                        href="{{ route('getBlade', ['page' => $subSubCategory->path_blade ? $subSubCategory->path_blade :'404']) }}">{{ $subSubCategory->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                        @else
                                                            @if ($subCategory->active && count($subCategory->subCategories))
                                                                @foreach ($subCategory->subCategories as $subSubCategory)
                                                                    <li class="hover:bg-indigo-100 p-2 border border-white hover:text-blue-500">
                                                                        <a
                                                                            href="{{ route('getBlade', ['page' => $subSubCategory->path_blade ? $subSubCategory->path_blade :'404']) }}">{{ $subSubCategory->name }}</a>
                                                                    </li>
                                                @endforeach
                                                @endif
                                                @endif
                                                @endforeach
                                        </div>
                                    </div>
                                    @endif
                                    </li>
                                    @endif
                                    @endforeach
                                    </ul>
                                </div>


    <ul class="flex flex-col mt-8">
        <li class="flex flex-row items-start p-3 bg-blue-800 text-white outline-none border-none">
            <i class="fas fa-users mt-1"></i>
            <p class="uppercase ml-3 font-bold">{{ t(department contact') }}</p>
        </li>
        <li class="flex flex-row items-start p-3 bg-gray-100 text-gray-500 outline-none border-none my-1">
            <i class="fa fa-envelope mt-1.5 mr-2"></i>
            <p class="flex flex-col">
                <span class="mb-1">{{ t(d us your resume') }}</span>
                <a href="mailto:job@scnsoft.com" class="text-blue-700 hover:underline">job@scnsoft.com</a>
            </p>
        </li>
        <li class="flex flex-row items-start p-3 bg-gray-100 text-gray-500 outline-none border-none">
            <i class="fa fa-phone mt-2 mr-2"></i>
            <p class="flex flex-col">
                <span class="mb-1">{{ t(tact us by phone') }}</span>
                <a href="tel:+998-99-873-48-36" class="text-blue-700 font-semibold hover:underline">(+998) 99
                    873-48-36</a>
            </p>
        </li>
        <li class="flex flex-row items-start p-3 bg-gray-100 text-gray-500 outline-none border-none my-1 pb-12">
            <i class="fa fa-comment mt-1.5 mr-2"></i>
            <div class="flex flex-col">
                <span class="mb-1">{{ t( in via Skype') }}</span>
                <span class="text-gray-900 text-xs">
                            <p class="text-base mt-2">{{ t(dimir Stepuro') }}</p>
                            <a href="" class="flex flex-row items-center text-blue-700 mt-1">
                                <i class="fab fa-skype fa-2x"></i>
                                <p class="ml-2 text-base hover:underline">{{ t(dimirst2') }}</p>
                            </a>
                        </span>
                <span class="text-gray-900 text-xs">
                            <p class="text-base mt-2">{{ t(rei Bodylovsky') }}</p>
                            <a href="" class="flex flex-row items-center text-blue-700 mt-1">
                                <i class="fab fa-skype fa-2x"></i>
                                <p class="ml-2 text-base hover:underline">{{ t(dzilouski.andrei') }}</p>
                            </a>
                        </span>
            </div>
        </li>
    </ul>
    <a href="../contact-us.html"
       class="w-full uppercase bg-yellow-500 text-white text-xl flex flex-row items-center p-3 hover:bg-yellow-300">
        <i class="fas fa-upload fa-1x mr-4"></i>
        <p>{{ t(oad your cv') }}</p>
    </a>
    </div>


    <div class="w-full lg:w-9/12">
        <div class="px-1 md:px-8 lg:px-12 flex flex-col">

            <h1 class="py-3 border-gray-300 border-b text-blue-900 font-bold text-3xl md:text-4xl my-3">
                {{ t(eers at Smart Software') }}</h1>
            <h1 class="py-3 border-gray-300 border-b text-blue-900 font-bold text-2xl md:text-3xl mt-6 mb-3">
                {{ t(tware Development Department') }}</h1>
            <ul class="flex flex-col">

                <li x-data="{ open: false }" class="flex flex-col mb-3 my-1">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(nt-end developer (React / React Native)') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(uirements:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ong knowledge of React, React Native,') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ong knowledge of Redux/Flux, JavaScript, TypeScript, HTML5, CSS3, SASS/LESS, Responsive design;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(years working experience in client-side web and mobile development;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ong understanding of JavaScript, HTML, CSS and related development techniques (e.g. DOM, BEM, SASS/LESS);') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(iliarity with RESTful APIs') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience with common front-end devtools such as babel, webpack, npm, etc.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(iliarity with code versioning tools such as Git, SVN.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience in design and building cross-platfrom mobile applications') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(lish at least intermediate') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ficient soft skills and ability to work in a team') }}</span>
                            </li>
                            <li class="text-white -ml-6 mt-4">
                                <a href="#"
                                   class="bg-blue-800 font-bold hover:bg-yellow-500 transition delay-75 px-4 py-1">
                                    <i class="fas fa-check mr-3"></i>
                                    {{ t(LY FOR THIS POSITION') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>

                <li x-data="{ open: false }" class="flex flex-col my-3">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(dle/Senior iOS Developer') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(uirements:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ong knowledge of iOS is required (3+ years)') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ken English (Intermediate level or above) is required') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(wledge of SWIFT (or Objective C)') }}</span>
                            </li>
                        </ul>
                        <h1 class="text-xl text-gray-700 mt-4 font-bold">{{ t(e to have:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience with IoT') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(T/ WebSocket / Real time protocols') }}</span>
                            </li>
                            <li class="text-white -ml-6 mt-4">
                                <a href="#"
                                   class="bg-blue-800 font-bold hover:bg-yellow-500 transition delay-75 px-4 py-1">
                                    <i class="fas fa-check mr-3"></i>
                                    {{ t(LY FOR THIS POSITION') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>

                <li x-data="{ open: false }" class="flex flex-col my-3">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(ior Java Developer') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(ponsibilities:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(igning of architecture for enterprise cloud applications') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(elopment of core functionality') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(rdination of team work (4 developers, 1 BA, 1QA)') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ks decomposition, distribution') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(e review') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(orting') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(tomer communications, onsite visits') }}</span>
                            </li>
                        </ul>
                        <h1 class="text-xl text-gray-700 mt-4 font-bold">{{ t(uirements:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience on commercial projects 3+ years.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(anced level in:') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(a 8, J2EE;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ing(Core, Security, AOP, Transactions, Boot, MVC);') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ernate3, JPA;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(Tful WebServices;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(er Intermediate English;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(d Communication Skills;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(d Logical & Analytical skills;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience in source version control systems (Github).') }}</span>
                            </li>
                            <li class="text-white mt-4 -ml-6">
                                <a href="#"
                                   class="bg-blue-800 hover:bg-yellow-500 font-bold transition delay-75 px-4 py-1">
                                    <i class="fas fa-check mr-3"></i>
                                    {{ t(LY FOR THIS POSITION') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <hr>
                <li x-data="{ open: false }" class="flex flex-col my-3">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(dle/Senior Python Developer') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <h1 class="text-xl text-gray-700 font-bold">{{ t( Role:') }}</h1>
                        <p class="text-gray-600 my-3 lg:text-xl">
                            We are looking for a Middle/Senior Python developer to help our company deliver value to
                            our customers just in time and with excellent code quality. We offer you to participate
                            in great, challenging and interesting projects.
                        </p>
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(ponsibilities:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ting high-quality, reusable and documented code') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(lable and reliable applications design') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t( functionality implementation to meet product requirements') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(sting solution maintenance so that the customer experience is seamless') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(e profiling, debug and optimization') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(elopment process and deployment automation') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(imation and milestones definition for new projects') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(hitectural decisions') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(e review') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ource and time management') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ablishing communication inside and out of the team') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(tings and occasional brainstorming participation') }}</span>
                            </li>
                        </ul>
                        <h1 class="text-xl text-gray-700 mt-4 font-bold">{{ t(uirements:') }}</h1>
                        <ul style="list-style: square;" class="flex ml-6 flex-col lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(fessional experience in Python 3.6-3.7: good level (concurrency, asyncio), Django, Flask, Django Rest Framework, Django admin lte2, AWS') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(understanding in Architecture patterns: micro services, scaling, load balancing') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(eep knowledge of web development technologies and frameworks') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(figuration CI\CD, autodeployment to cloud, Git flow variants') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(id professional PostgreSQL experience') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erstanding the fundamentals of software design principles') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(lish is a must') }}</span>
                            </li>

                            <li class="text-white mt-4 -ml-6">
                                <a href="#"
                                   class="bg-blue-800 hover:bg-yellow-500 font-bold transition delay-75 px-4 py-1">
                                    <i class="fas fa-check mr-3"></i>
                                    {{ t(LY FOR THIS POSITION') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>
            </ul>


            <h1 class="py-3 border-gray-300 border-b text-blue-900 font-bold text-2xl md:text-3xl mt-6 mb-3">
                {{ t(artment of Marketing and Sales') }}</h1>
            <ul class="flex flex-col">

                <li x-data="{ open: false }" class="flex flex-col mb-3 my-1">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(ywriting Team Lead') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <p class="text-gray-600 my-3 lg:text-xl">
                            Smart Software, 700-employee IT company, is looking for Copywriting Team Lead who will manage a
                            team of 8-10 copywriters.
                        </p>
                        <h1 class="text-3xl mb-4 text-gray-700 font-bold">{{ t(al candidate') }}</h1>
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(ywriting team lead') }}</h1>
                        <p class="text-gray-600 my-3 lg:text-xl">
                            If you lead a small team of 2-4 copywriters, this position will be a next level for you.
                        </p>
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(tent manager, chief editor') }}</h1>
                        <p class="text-gray-600 my-3 lg:text-xl">
                            If you have experience of managing internal or external copywriters, the position may
                            let you develop further to a full-time manager.
                        </p>
                        <p class="text-gray-600 my-3 lg:text-xl">
                            Management experience of at least 2 years is a must.
                        </p>
                        <p class="text-gray-600 my-3 lg:text-xl">
                            Those with experience in IT will have certain advantage, however we consider candidates
                            from other industries and provide in-house training on IT.
                        </p>

                        <p class="my-3">
                            <a href="#" class="text-blue-600 lg:text-xl hover:text-black">Learn more</a></p>

                        <p><a href="#"
                              class="bg-blue-800 lg:text-xl text-white font-bold hover:bg-yellow-500 transition delay-75 px-4 py-1">
                                <i class="fas fa-check mr-3"></i>
                                {{ t(LY FOR THIS POSITION') }}</a></p>

                    </div>
                </li>
                <hr>
                <li x-data="{ open: false }" class="flex flex-col my-3">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(ior Sales manager') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <h1 class="text-xl text-gray-700 font-bold">{{ t( Candidate:') }}</h1>
                        <p class="text-gray-600 my-3 lg:text-xl">
                            We are looking for a Middle/Senior Python developer to help our company deliver value to
                            our customers just in time and with excellent code quality. We offer you to participate
                            in great, challenging and interesting projects.
                        </p>
                        <h1 class="text-xl text-gray-700 font-bold">{{ t( Candidate:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(roven Business development/ Sales Manager with a strong track record of delivering exceptional new sales') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(eptional verbal and written communication skills in English/Russian') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(id experience of selling IT services and solutions to end customers') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ong analytical skills, with the ability to identify and present clear product/solution benefits delivering a substantial ROI') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience in sales, business development within the IT domain >3 years') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience of studying/ working abroad is desirable') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(lingness/ability to travel and potentially to relocate abroad') }}</span>
                            </li>


                            <li class="text-white mt-4 -ml-6">
                                <a href="#"
                                   class="bg-blue-800 hover:bg-yellow-500 font-bold transition delay-75 px-4 py-1">
                                    <i class="fas fa-check mr-3"></i>
                                    {{ t(LY FOR THIS POSITION') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr>
            </ul>


            <h1 class="py-3 border-gray-300 border-b text-blue-900 font-bold text-2xl md:text-3xl mt-6 mb-3">
                {{ t( Department') }}</h1>
            <ul class="flex flex-col">

                <li x-data="{ open: false }" class="flex flex-col mb-3 my-1">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(Ops Specialist') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">


                        <h1 class="text-xl text-gray-700 font-bold">{{ t(uired skills:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ellent knowledge of Docker and Kubernetes (Openshift) and Helm') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(d knowledge of log management including ELK, Splunk or equivalent log server technologies.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(d programming skills and experience in scripting languages like Perl/Shell/Python.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(wledge and experience using Chef, Puppet or Ansible automation to deploy and be able to manage Linux systems in production and CI environments') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(lity to demonstrate a clear, energetic and excited interest in automating everything (build, test, release/deploy, monitoring, reporting), which includes "Infrastructure as Code"') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t( years of experience in information technology with a focus on Unix/Linux') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(irm understanding of Linux internals and experience in the design, implementation and maintenance of large-scale virtual and physical UNIX/Linux based infrastructures.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(helor’s Degree in IT a relevant field or High School Diploma and solid related work experience') }}</span>
                            </li>


                        </ul>


                        <p class="my-3">
                            <a href="#" class="text-blue-600 lg:text-xl hover:text-black">Learn more</a></p>

                        <p><a href="#"
                              class="bg-blue-800 lg:text-xl text-white font-bold hover:bg-yellow-500 transition delay-75 px-4 py-1">
                                <i class="fas fa-check mr-3"></i>
                                {{ t(LY FOR THIS POSITION') }}</a></p>

                    </div>
                </li>
                <hr>


            </ul>


            <h1 class="py-3 border-gray-300 border-b text-blue-900 font-bold text-2xl md:text-3xl mt-6 mb-3">
                {{ t(iness Analysis Department') }}</h1>
            <ul class="flex flex-col">


                <li x-data="{ open: false }" class="flex flex-col my-3">
                    <div @click="open = true"
                         class="flex justify-between items-center text-gray-500 text-xl cursor-pointer hover:text-blue-500">
                        <div class="flex flex-row">
                                <span
                                    class="mr-5 px-3 py-1 flex items-center flex-row uppercase bg-gradient-to-br from-yellow-300 to-yellow-600 text-white">
                                    <i class="fab fa-hotjar mr-2"></i>
                                    <p class="font-bold">{{ t(!') }}</p>
                                </span>
                            <p class="hover:underline">{{ t(dle Business Analyst') }}</p>
                        </div>
                        <p class="md:block hidden hover:text-blue-500 text-yellow-400">{{ t(ails') }} <i
                                class="fas fa-chevron-right ml-2"></i></p>


                    </div>
                    <div x-show="open" @click.away="open = false" class="flex-col mt-2 ml-28">
                        <h1 class="text-xl text-gray-700 font-bold">{{ t(ponsibilities:') }}</h1>

                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(iew, analyze and evaluate business systems and user needs;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(cit business and user requirements via workshops/meetings, analysis of competitive systems, and other methods;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(duct Discovery / Analysis phases on projects;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(pare all the necessary artifacts as appropriate such as Vision and Scope document, Consulting reports, SRS, use cases/user stories, diagrams, wireframes, prototypes, etc.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(cess requests for proposal, including participation in the creation of commercial proposals and BA activities estimation.') }}</span>
                            </li>


                        </ul>

                        <h1 class="text-xl mt-4 text-gray-700 font-bold">{{ t( Candidate:') }}</h1>
                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(years of professional experience in IT Business Analyst position;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(d knowledge of business analysis theory and the ability to effectively use it in IT industry;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience in creating and maintaining business analysis documentation (Vision and Scope, SRS, Wireframes creation, User Manual, etc.);') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t( and BPMN notations knowledge;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(eral understanding of common deployment methodologies;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ent written and spoken English (Upper-Intermediate+).') }}</span>
                            </li>


                        </ul>

                        <p class="text-gray-600 lg:text-xl my-4">As a plus will be:</p>


                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ctical experience with the solutions for data visualization (Tableau, MS Power BI, Qlik);') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ctical experience in description of building the reports;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t( knowledge (ability to write simple queries);') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ic knowledge of project management;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience in pre-sales activities;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(erience in direct communication to End-customer.') }}</span>
                            </li>


                        </ul>


                        <p class="text-gray-800 font-bold lg:text-xl my-4">Soft Skills</p>


                        <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ti-tasking and organizational skills;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(blem-solving and critical thinking skills;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(dency to self-development and professional proactivity;') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(ellent communication and team working skills.') }}</span>
                            </li>
                            <li class="text-blue-800 mt-2">
                                    <span
                                        class="text-gray-600">{{ t(h attention to details.') }}</span>
                            </li>


                            <li class="text-white mt-4 -ml-6">
                                <a href="#"
                                   class="bg-blue-800 hover:bg-yellow-500 font-bold transition delay-75 px-4 py-1">
                                    <i class="fas fa-check mr-3"></i>
                                    {{ t(LY FOR THIS POSITION') }}</a>
                            </li>
                        </ul>


                    </div>
                </li>
                <hr>
            </ul>


        </div>
    </div>
    </div>

    <!-- Scrolling Back -->

@endsection


@section('js')

@endsection
