@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-8">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT Solutions for Oil and Gas Companies') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img class="my-8"
         src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/cover-pic-it-solutions-for-oil-and-gas-1.svg"
         alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ _trans('IT solutions for oil and gas help the industry embrace digital transformation for') }} <span
            class="text-gray-800 font-bold">{{ _trans('improved drilling quality and efficiency, optimized reservoir management, enhanced oil recovery, reduced operational costs,') }}</span>
                {{ _trans('and more.') }}
    </p>
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl"><span
            class="text-gray-800 font-bold">{{ _trans('Since 2010,') }}</span>
        {{ _trans('ScienceSoft offers IT solutions for the oil and gas industry by employing cloud, IIoT, big data,
        advanced
        analysis, virtual reality (VR), and augmented reality (AR).') }}
    </p>


    <div class="p-6 my-16 shadow-xl lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                {{ _trans('Boost Operational Efficiency in Oil and Gas') }}
            </h1>
            <div class="w-12 bg-yellow-500 h-0.5 mb-6"></div>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans('Ready to provide you with a tailored IT solution for improved oil and gas exploration and
                production
                processes and data-driven decision-making, including in real-time.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('REQUEST  A CONSULTATION') }}
                </div>
            </a>

        </div>
    </div>


    <div>

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
            {{ _trans('WHY SCIENCESOFT') }}
        </h1>
        <hr class="w-12 bg-yellow-500 h-0.5 mb-6">
    </div>

    <div class="grid md:grid-cols-2">
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg md:text-xl ">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('10 years') }}</span> <span class="text-gray-600">{{ _trans('in IT for oil and gas.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ _trans('31 years') }}</span> <span class="text-gray-600">{{ _trans('in data analytics and data science.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Big data services') }}</span><span
                    class="text-gray-800 font-bold">{{ _trans('since 2013.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('IoT expertise ') }}</span><span class="text-gray-800 font-bold">{{ _trans('since 2011.') }}</span>
            </li>
        </ul>
        <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg md:text-xl">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('3D modeling') }}</span> <span class="text-gray-800 font-bold">{{ _trans('3D modeling') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Experience with major public cloud platforms,') }}</span>
                <span class="text-gray-800 font-bold">{{ _trans('Amazon Web Services, Microsoft Azure, ') }}</span>
                <span class="text-gray-600">{{ _trans('and') }}</span>
                <span class="text-gray-800 font-bold">{{ _trans('Google Cloud Platform.') }}</span>
            </li>

        </ul>

    </div>


    <div class="swiper-container about-slide h-40">
        <div class="swiper-wrapper flex items-center">
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ebay.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/deloitte.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ford.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/ibm.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/leo-burnett.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/nasa_1.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/nestle.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/tieto.svg') }}"></div>
            <div class="swiper-slide flex justify-center items-center p-24 md:p-14"><img
                    src="{{ asset('images/viber.svg') }}" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('IT SOLUTIONS FOR OIL AND GAS WE OFFER') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-4 mt-6">
        {{ _trans('Business management') }}
    </h1>

    <div class="grid mt-6 md:grid-cols-2 md:gap-14 gap-4">
        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/dynamics-365/customization/advancd-analytics-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Advanced operational analytics') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data ingestion and storage (including reservoir and well data).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Operational alerts, performance predictions, operational risk estimation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Operational cost analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Capital project execution analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Exploration progress analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Supplier analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Supply chain status analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Drilling analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Equipment performance and failure analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Workforce analytics.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Health, Safety and Environment (HSE) analytics.') }}</span>
            </li>
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/supplier-management.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Procurement/Supplier management') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Supplier assessment and management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Supplier risk management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Supplier portals.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Inventory management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Purchase order automation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Integration with project management and maintenance processes.') }}</span>
            </li>
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/capital-project-management-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Capital project management') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Project document and digital asset management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('4D/5D building information modeling (BIM), VR.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Planning and scheduling.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Quality assurance.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Project cost management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Project risk management.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Project progress control and reporting.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Project execution analytics with predictions (equipment failures/downhole problems).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Integration with procurement and knowledge management processes.') }}</span>
            </li>
        
        </ul>
           </div>

        </div>



    </div>


    <h1 class="text-xl md:text-3xl font-bold text-gray-800 mb-4 mt-6">
        {{ _trans('Business management') }}
    </h1>

    <div class="grid mt-6 md:grid-cols-2 md:gap-14 gap-4">
        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/resources-database.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Integrated oil and gas resources database with advanced visualization') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Geological information ingestion and storage.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Seismic data ingestion and storage.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data access with strong security.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Seismic attribute calculation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data interpretation (manual and automated).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Advanced data visualization, including VR.') }}</span>
            </li>
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/reservoir.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Reservoir modeling, monitoring and management') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Enhanced reservoir monitoring.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Fracture and fault detection in reservoirs.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Reservoir modeling and simulation.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Real-time remote monitoring of changes in big reservoirs.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Advanced visualization, including VR.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data access with strong security.') }}</span>
            </li>
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/roc.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Remote operations center (ROC)') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Remote monitoring of drilling and well operations.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Automated alarming (e.g., in case of high fault probability).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Advanced data visualization, including VR.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Drilling optimization via evaluation of multiple decision-making scenarios and selecting the best one.') }}</span>
            </li>
        
        
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/maintenance.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Equipment maintenance management and field service') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Long-term maintenance planning (with resource leveling and optimization).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Short-term work order planning.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Virtual reality to facilitate equipment maintenance and repairing.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Worker-amplified intelligence (AR-based visual clues and indicators, process steps, repair instructions for field service, etc.).') }}</span>
            </li>
        
        
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/predictive-maintenance.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Predictive maintenance') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Equipment and sensor data ingestion and storage (cloud big data storage).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Machine-learning-based predictive failure modeling in real-time.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Drill bit defect recognition based on image analysis.') }}</span>
            </li>
        
        
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/vr-training-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('VR-based immersive training') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Operational training (introductory training, training on new equipment/sites, etc.).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Emergency training.') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Safety training.') }}</span>
            </li>
        
        
        </ul>
           </div>

        </div>

        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/knowledge-management.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-gray-800 font-bold mt-4 text-center px-4 lg:px-10">
            {{ _trans('Knowledge management') }}
            </h1>

           <div class="px-4">
           <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Knowledge resources extraction and storage (daily drilling reports, regular project reports, incident reports, etc.).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Knowledge source screening and annotation (manually and using AI).') }}</span>
            </li>
            <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Semantic search across the knowledge base.') }}</span>
            </li>
        
        
        </ul>
           </div>

        </div>



    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('BENEFITS OF BUILDING YOUR IT SOLUTION FOR OIL AND GAS WITH SCIENCESOFT') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="grid gap-4 md:grid-cols-2">
    <div class="p-6 border">
    <img src="https://www.scnsoft.com/colored-icons-on-grey-background/advanced-techs.svg" height="120" width="120" alt="">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
        {{ _trans('Solid experience in advanced technologies') }}
    </h1>

    <p class="text-lg text-gray-600 mt-6 md:text-xl">
    {{ _trans('Being experts in') }}
    <span
            class="text-gray-700 font-bold">{{ _trans('cloud, IIoT, big data, advanced analytics, VR, and AR, ') }}</span>
        {{ _trans(' we choose the best-fit advanced technologies for your IT solution to address your specific needs (predictive equipment maintenance, remote asset monitoring, drilling costs reduction, etc.).') }}
    </p>


    </div>

    <div class="p-6 border">
    <img src="https://www.scnsoft.com/colored-icons-on-grey-background/partners.svg" height="120" width="120" alt="">
    <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
        {{ _trans('Joint work with industry experts') }}
    </h1>

    <p class="text-lg text-gray-600 mt-6 md:text-xl">
    {{ _trans('We cooperate with your scientists and engineers to create efficient, innovative solutions well-integrated into your business practices and processes.') }}
    </p>


    </div>




    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('OUR DEDICATED OIL AND GAS PORTFOLIO') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="swiper-container big-slide">




                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-16 pb-4">
                            <div class="p-6 border md:flex hover:shadow-lg my-6">
                                <div class="md:w-6/12 mr-3">
                                    <img class="m-auto" src="https://www.scnsoft.com/blog-pictures/ecommerce/b2c-demo.png"
                                        alt="">
                                </div>
                                <div class="mt-6 md:w-6/12 ml-3">
                                    <h1 class="text-xl font-bold">
                                        A B2C ecommerce portal demo
                                    </h1>
                                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                        In B2C ecommerce portals, customers value personalized and frictionless experience
                                        across
                                        the digital channels.
                                    </p>
                                    <p class="text-center mt-4 md:text-right lg:pt-16">
                                        <a href="#" class="text-blue-700 font-semibold items-end">
                                            WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide px-16 pb-4">
                            <div class="p-6 border md:flex hover:shadow-lg my-6">
                                <div class="md:w-6/12 mr-3">
                                    <img class="m-auto"
                                        src="https://www.scnsoft.com/blog-pictures/ecommerce/b2b-ecommerce-demo.png" alt="">
                                </div>
                                <div class="mt-6 md:w-6/12 ml-3">
                                    <h1 class="text-xl font-bold">
                                        A B2B ecommerce portal demo
                                    </h1>
                                    <p class="text-lg text-gray-600 mt-6 md:text-xl">
                                        In B2B ecommerce portals, buyers value convenient self-service tools to place and
                                        manage
                                        their bulk orders.
                                    </p>

                                    <p class="text-center mt-4 md:text-right lg:pt-16">
                                        <a href="#" class="text-blue-700 font-semibold items-end">
                                            WATCH THE DEMO <i class="fas fa-arrow-right ml-2"></i>
                                        </a>
                                    </p>

                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="swiper-button-next text-gray-400"></div>
                    <div class="swiper-button-prev text-gray-400"></div>
                </div>



                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('CHOOSE YOUR SERVICE OPTION') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <div class="grid md:grid-cols-2 gap-4">

    <div class="border relative pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/oil-and-gas/it-solutions-for-oil-and-gas/advanced-technologies-consulting-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('Advanced technologies consulting') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('Our consultants advise on the use of cloud, big data, IIoT, advanced analytics, VR and AR in the oil and gas sector for:') }}</p>
                
                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Reservoir modeling, monitoring and management.') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Remote operations center (ROC).') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Predictive equipment maintenance, etc.') }}</span>
              </li>
            </ul>

                <a href="#" class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{ _trans('REQUEST TECH CONSULTING') }}
                </a>

            </div>


            

        </div>



        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/crm/crm-consulting/crm_dedicated_services_crm_implementation_consulting.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('IT solution consulting, implementation and support') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('IT solution cost and time delivery estimation.') }}</p>
                
                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Outline of the optimal solution functionality and architecture to meet business needs and guarantee high ROI.') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Optimizing solution implementation and operating costs.') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('End-to-end solution (custom or platform-based) implementation.') }}</span>
              </li>
              <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('After-launch solution support.') }}</span>
              </li>
              <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Continuous IT solution maintenance and evolution.') }}</span>
              </li>
            </ul>

                <a href="#" class="bg-blue-700 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{ _trans('REQUEST CONSULTING AND IMPLEMENTATION') }}
                </a>

            </div>


            

        </div>



        <div class="border pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/testing/erp-testing/it-outsourcicg-1.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('IT outsourcing') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('We help optimize the quality and costs of oil and gas operations by offering outsourced IT functions, including:') }}</p>
                
                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
               <li class="text-blue-800 mt-2">
               <a href="#" class="text-gray-600 hover:text-blue-700 border-b border-blue-700">{{ _trans('Outsourced development ') }}</a>
                <span class="text-gray-600">{{ _trans('of oil and gas software.') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
               <a href="#" class="text-gray-600 hover:text-blue-700 border-b border-blue-700">{{ _trans('Outsourced data analytics.') }}</a>
               </li>
               <li class="text-blue-800 mt-2">
               <a href="#" class="text-gray-600 hover:text-blue-700 border-b border-blue-700">{{ _trans('Outsourced QA.') }}</a>
              </li>
              <li class="text-blue-800 mt-2">
              <a href="#" class="text-gray-600 hover:text-blue-700 border-b border-blue-700">{{ _trans('IT support.') }}</a>
              </li>
              <li class="text-blue-800 mt-2">
              <a href="#" class="text-gray-600 hover:text-blue-700 border-b border-blue-700">{{ _trans('Managed infrastructure services.') }}</a>
              </li>
              <li class="text-blue-800 mt-2">
              <a href="#" class="text-gray-600 hover:text-blue-700 border-b border-blue-700">{{ _trans('Outsourced help desk.') }}</a>
              </li>
            </ul>

                <a href="#" class="bg-blue-700 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{ _trans('REQUEST IT OUTSOURCING') }}
                </a>

            </div>


            

        </div>




        <div class="border relative pb-6 hover:shadow-md">
            <div class="h-3 w-full bg-blue-500"></div>
            <img width="120" height="108"
                 src="https://www.scnsoft.com/software-development-services/python-devs/service-options-python-devs_dedicated-team.svg"
                 class="m-auto my-4" alt="">
            <h1 class="text-xl mb-4 text-blue-700 font-semibold mt-4 text-center px-4 lg:px-10"> {{ _trans('IT staff augmentation') }} </h1>

            <div class="px-4">
                <p class="mb-4 text-lg text-gray-600">{{ _trans('We help quickly cover resource gaps in your oil and gas IT initiative with the following experts:') }}</p>
                
                <ul style="list-style: square;" class="flex flex-col mt-4 ml-6 text-lg">
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Developers (Java, .NET, Python, PHP, C++, and more).') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Testers (manual and automated testing).') }}</span>
               </li>
               <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('DevOps engineers.') }}</span>
              </li>
              <li class="text-blue-800 mt-2">
                <span class="text-gray-600">{{ _trans('Data analysts.') }}</span>
              </li>
            </ul>

                <a href="#" class="bg-blue-700 md:absolute bottom-6 right-5 left-5 hover:bg-blue-800 mt-4 text-white block text-center p-4">
                {{ _trans('REQUEST TEAM AUGMENTATION') }}
                </a>

            </div>


            

        </div>


    
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ _trans('BENEFIT FROM DIGITIZING YOUR OIL AND GAS OPERATIONS NOW!') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">


    <p class="text-lg text-gray-600  md:text-xl lg:text-2xl my-8">
        {{ _trans('Digital transformation in the oil and gas sector may bring such significant benefits* as:') }}
    </p>



    <div class="my-8">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{ _trans('+25%') }}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Drilling speed due to using advanced analytics for suggesting optimal drilling parameters.') }}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{ _trans('94%') }}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Productive drilling time due to enabling remote and automatic drilling.') }}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{ _trans('Up to 5%') }}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Upstream revenue increase due to using 4D seismic imaging for measuring and predicting fluid changes in reservoirs.') }}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{ _trans('-13%') }}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Equipment maintenance costs due to predictive maintenance.') }}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{ _trans('-10%') }}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Field operations cost thanks to using augmented visual technologies, e.g., ‘connected worker’ solutions.') }}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{ _trans('-35%') }}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Asset inspection costs due to gathering and analyzing data from fixed cameras, drones, etc.') }}
                </p>
            </div>



        </div>

    </div>


    <div class="p-6 my-16 shadow-xl lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
                {{ _trans('Don’t Delay Your Success in Oil and Gas!') }}
            </h1>
            <div class="w-12 bg-yellow-500 h-0.5 mb-6"></div>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ _trans('Reach out to ScienceSoft right now to optimize your oil and gas exploration and production processes, decrease operational costs and pursue new growth opportunities.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ _trans('REQUEST ASSISTANCE') }}
                </div>
            </a>

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
