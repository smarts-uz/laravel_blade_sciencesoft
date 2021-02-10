@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="mx-6 md:mx-16 lg:mx-24 my-10">
        <div class="text-2xl md:text-4xl font-bold mt-6">
            Data Analytics Services
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <img src="https://www.scnsoft.com/cover-pictures/data-analytics.svg">
            <div>
                <p class="font-normal text-lg leading-loose mt-10">
                    Data analytics helps businesses convert their raw business data into actionable insights. Since 1989,
                    ScienceSoft has been helping companies make quick and data-driven decisions in the ever-changing
                    environment by rendering a full set of data analytics services.
                </p>
            </div>
        </div>

        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>Tired of Time-Consuming Instinct-Based Decisions?
                    </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>Within a reasonable time, ScienceSoft will help you defeat fragmented and
                    inaccurate analytics and reporting by implementing data analytics best practices for improved decision
                    quality and speed. </p>
            </div>
            <div class='w-2/5 m-0 flex justify-center items-center'>
                <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>Request a
                    consultation</a>
            </div>
        </div>

        <div class="text-2xl md:text-4xl font-bold mt-6">
            WHAT YOU GET WITH DATA ANALYTICS SERVICES
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
            <p class="my-8 text-xl font-normal">
                We are ready to implement our best data analytics practices to empower companies with informed
                decision-making in the following business areas:
            </p>
            <div class="w-4/5">

                <img src="https://www.scnsoft.com/data-analytics/business-areas-competence-sciencesoft.svg" alt="">
            </div>
            <p class="my-8 text-xl font-normal">
                For you to ensure full-fledged data analytics, ScienceSoft covers the following technical components:
            </p>
            <div class="w-4/5">
                <img src="https://www.scnsoft.com/data-analytics/technical-components-sciencesoft.svg" alt="">
            </div>
        </div>
        <div class="text-2xl md:text-4xl font-bold my-20">
            WHY CHOOSE SCIENCESOFT AS YOUR DATA ANALYTICS SERVICE PROVIDER
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <div class="container -mt-36">
            <section class="customer-logos slider ">
                @php
                    function searcharray($value, $key, $array) {
                       foreach ($array as $k => $val) {
                           if ($val[$key] == $value) {
                               return $k;
                           }
                       }
                       return null;
                    }
                        $name="Partnerships";
                        $partnerships=searcharray($name, 'name', $categories);
                        //array_search($name, array_column($categories, 'name'));
                        //route('getCategoryByName', ['name'=>'Partnerships', 'view'=>'front.pages.services.solutions.data_analytics']);
                    dd($partnerships);
                @endphp
                <div class="slide"><img src="images/adidas.png" alt="logo"></div>
                <div class="slide"><img src="images/facebook.png" alt="logo"></div>
                <div class="slide"><img src="images/google.png" alt="logo"></div>
                <div class="slide"><img src="images/instagram.png" alt="logo"></div>
                <div class="slide"><img src="images/nike.png" alt="logo"></div>
                <div class="slide"><img src="images/twitter.png" alt="logo"></div>
                <div class="slide"><img src="images/uber.png" alt="logo"></div>
                <div class="slide"><img src="images/youtube.png" alt="logo"></div>
            </section>
        </div>
        <div>
            <ul class="list-disc text-base md:text-lg leading-loose">
                <li class="my-8">
                    31 years in data analytics and data science.
                </li>
                <li class="my-8">
                    15 years of experience in rendering data warehouse services, designing and implementing business
                    intelligence solutions.
                </li>
                <li class="my-8">
                    Traditional BI and big data projects with the use of Microsoft Power BI since 2016.
                </li>
                <li class="my-8">
                    7 years of big data consulting and implementation practice.
                </li>
                <li class="my-8">
                    A multifunctional team of data analytics experts who can deliver agile solutions of different complexity
                    levels.
                </li>
            </ul>
        </div>
        <div class="text-2xl md:text-4xl font-bold mt-20 mb-8">
            WHY OUR CUSTOMERS THINK THAT DATA ANALYTICS IS WORTH INVESTING IN
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <p class="text-xl">
            Customized analytical solutions we design and implement allow our customers to achieve up to:
        </p>
        <div class="my-20  mx-auto w-full font-bold">
            <div class="w-full  sm:flex sm:flex-row justify-center flex flex-col ">
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        x1.5-2.5
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">IT cost reduction</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex flex-col justify-center hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        x1.5-3
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">increase in software development speed</p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center flex-col hover:border-b hover:border-gray-300">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        100%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">regulatory compliance of the IT infrastructure
                    </p>
                </div>
                <div
                    class="sm:w-1/4 sm:border-l sm:border-gray-300 w-full flex justify-center  flex-col hover:border-b-4 hover:border-gray-400">
                    <p class="text-4xl text-blue-800  pl-2 mx-auto">
                        ~99.99%
                    </p><br>
                    <p class="font-light text-gray-400 pl-2 mx-auto">applications availability</p>
                </div>

            </div>
        </div>
        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>Wonder Whether Your Data Analytics Investments Will Pay Off?
                    </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>ScienceSoft is ready to calculate your ROI so that you eliminate the
                    guesswork in figuring out the value of your data analytics project.
                </p>
            </div>
            <div class='w-2/5 m-0 flex justify-center items-center'>
                <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>Get my data
                    analytics ROI</a>
            </div>
        </div>
        <div class="text-2xl md:text-4xl font-bold mt-20 mb-8">
            OUR HALLMARK DATA ANALYTICS PROJECTS
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>

        ==============Slider Bor==================

        <div class="text-2xl md:text-4xl font-bold mt-20 mb-8">
            CHOOSE YOUR DATA ANALYTICS SERVICE OPTION
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <div class="flex flex-row justify-center ">
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">Full-service IT outsourcing</p>
                    <p class="mb-3">Drawing on your needs, we can suggest either an offshore dedicated team or team
                        augmentation model of cooperation to back up your .NET development project or migration of
                        legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                        you’re free to screen them before the start of cooperation.</p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">Outsource 100% of it</button>
                </div>
            </div>
            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">Co-sourcing with an in-house IT team
                    </p>
                    <p class="mb-3">Outsource your entire IT landscape, including IT service planning and
                        management, to achieve greater business performance with IT ROI boosted by 50-300%.</p>
                    <p>
                        We can also act as a service integrator taking up the management of your IT vendor
                        ecosystem.
                    </p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">Outsource 70%-90% of
                        it</button>
                </div>
            </div>

            <div class="rounded-sm border-2 transition-shadow  hover:shadow-lg w-1/5 h-auto mr-10">
                <hr class="w-full border-t-4 border-blue-800" />
                <div class="p-4">
                    <p class="text-lg text-blue-700 mb-3 text-center font-bold">Co-sourcing with other vendors</p>
                    <p class="mb-3">Drawing on your needs, we can suggest either an offshore dedicated team or team
                        augmentation model of cooperation to back up your .NET development project or migration of
                        legacy software to .NET. We offer pre-vetted developers, which match your requirements –
                        you’re free to screen them before the start of cooperation.</p>

                    <button class="bg-blue-700 text-white w-full mt-3 uppercase p-2">Outsource 30%-40% of
                        it</button>
                </div>
            </div>
        </div>
        <div class="text-2xl md:text-4xl font-bold mt-20 mb-8">
            SUCCESS STORIES ON DATA ANALYTICS
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex justify-start  w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-58  top-0"
                        src="https://www.scnsoft.com/boss/images/5dd8f2b4-46b5-47e2-9dd0-e709108e1d9dbig_data_analytics_for_media_consumption_patterns_small.jpg"
                        alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold">Big Data Implementation for Advertising Channel Analysis in
                        10+ Countries</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        Migration to a new analytical system that ScienceSoft implemented helped one of the top market
                        research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and
                        Apache Spark frameworks. The new system was 100 times faster compared to the old one and could
                        process 1,000 different data formats.
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>
        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex justify-start  w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-58  top-0"
                        src="https://www.scnsoft.com/boss/images/5dd8f2b4-46b5-47e2-9dd0-e709108e1d9dbig_data_analytics_for_media_consumption_patterns_small.jpg"
                        alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold">Big Data Implementation for Advertising Channel Analysis in
                        10+ Countries</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        Migration to a new analytical system that ScienceSoft implemented helped one of the top market
                        research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and
                        Apache Spark frameworks. The new system was 100 times faster compared to the old one and could
                        process 1,000 different data formats.
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>

        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex justify-start  w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-58  top-0"
                        src="https://www.scnsoft.com/boss/images/5dd8f2b4-46b5-47e2-9dd0-e709108e1d9dbig_data_analytics_for_media_consumption_patterns_small.jpg"
                        alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold">Big Data Implementation for Advertising Channel Analysis in
                        10+ Countries</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        Migration to a new analytical system that ScienceSoft implemented helped one of the top market
                        research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and
                        Apache Spark frameworks. The new system was 100 times faster compared to the old one and could
                        process 1,000 different data formats.
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>

        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex justify-start  w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-58  top-0"
                        src="https://www.scnsoft.com/boss/images/5dd8f2b4-46b5-47e2-9dd0-e709108e1d9dbig_data_analytics_for_media_consumption_patterns_small.jpg"
                        alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold">Big Data Implementation for Advertising Channel Analysis in
                        10+ Countries</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        Migration to a new analytical system that ScienceSoft implemented helped one of the top market
                        research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and
                        Apache Spark frameworks. The new system was 100 times faster compared to the old one and could
                        process 1,000 different data formats.
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>

        <div class="rounded-sm bg-gray-50 relative transition-shadow p-2 md:p-8">
            <div class="flex flex-col md:flex-row items-start ">
                <div class="flex justify-start  w-1/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
                    <img class="w-58  top-0"
                        src="https://www.scnsoft.com/boss/images/5dd8f2b4-46b5-47e2-9dd0-e709108e1d9dbig_data_analytics_for_media_consumption_patterns_small.jpg"
                        alt="">
                </div>
                <div class=" flex flex-col w-4/5 mb-10">
                    <h1 class="text-3xl md:text-4xl font-bold">Big Data Implementation for Advertising Channel Analysis in
                        10+ Countries</h1>
                    <hr class="w-12 border-yellow-600 text-gray-800 my-4">
                    <p class=" text-gray-500 text-xl md:text-2xl">
                        Migration to a new analytical system that ScienceSoft implemented helped one of the top market
                        research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and
                        Apache Spark frameworks. The new system was 100 times faster compared to the old one and could
                        process 1,000 different data formats.
                    </p>

                </div>
            </div>
            <a class="uppercase absolute right-10 text-blue-700 bottom-6" href="#">Learn More<i
                    class="fas fa-arrow-right ml-4"></i></a>
        </div>

        <div class="text-2xl md:text-4xl font-bold mt-20 mb-8">
            NOT READY TO GIVE AWAY THESE DATA ANALYTICS BENEFITS?
            <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
        </div>
        <div>
            <ul class="list-disc text-base md:text-lg leading-loose">
                <li class="my-8">
                    Elimination of the guesswork out of your business processes.

                </li>
                <li class="my-8">
                    Faster and accurate reporting, analysis and planning.
                </li>
                <li class="my-8">
                    Identification of profit opportunities.
                </li>
                <li class="my-8">
                    Enhanced customer experience.
                </li>
            </ul>
        </div>
        <div class='flex justify-between items-center p-10 shadow-2xl my-16'>
            <div class='w-2/3'>
                <h1 class='text-gray-900 mt-6'>
                    <p class='text-2xl font-bold'>Wonder Whether Your Data Analytics Investments Will Pay Off?
                    </p>
                    <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
                </h1>
                <p class='text-gray-600 text-xl'>ScienceSoft is ready to calculate your ROI so that you eliminate the
                    guesswork in figuring out the value of your data analytics project.
                </p>
            </div>
            <div class='w-2/5 m-0 flex justify-center items-center'>
                <a href="#" class='px-4 py-3  text-center bg-blue-800 text-white uppercase hover:bg-blue-900'>Get my data
                    analytics ROI</a>
            </div>
        </div>

















        {{-- end div --}}
    </div>


@endsection


@section('js')

@endsection
