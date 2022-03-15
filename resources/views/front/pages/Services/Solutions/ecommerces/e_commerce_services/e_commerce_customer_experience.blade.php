@extends('front.layout')

@section('css')

@endsection

@section('main')

   <div class="my-16">

   <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('Customer Experience Consulting') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <img src="https://www.scnsoft.com/ecommerce/cx/cover-pic-cx-05.svg" alt="">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ t('Why do you need to care for customer experience? Well, you dont! Your competitors will be too happy to welcome your customers. ') }}
    </p>

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('Smart SoftwareProfessional customer experience consulting services from ScienceSoft encompass fostering customer-first attitude, as well as designing and implementing a CX transformation strategy within your business. ') }}
        <span class="text-gray-800 font-bold">{{ t('The investment now may pay off soon enough along with tangible revenue growth:') }}</span>
    </p>


    <div class="my-8 md:block hidden">
        <div class="grid mt-6 grid-cols-1 md:grid-cols-3 gap-4">

            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.5x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('year-over-year revenue growth')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t(' 1.9x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t(' 1.9x')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.8x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('increased repeat purchase rate')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.6x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher brand awareness')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.4x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher customer retention')}}
                </p>
            </div>
            <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.6x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher customer advocacy.')}}
                </p>
            </div>


        </div>
    </div>




    <div class="swiper-container big-slide md:hidden">
    <div class="swiper-wrapper">

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.5x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('year-over-year revenue growth')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.9x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher average order value')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide text-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.8x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('increased repeat purchase rate')}}
                </p>
            </div>
        </div>

        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.6x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher brand awareness')}}
                </p>
            </div>
        </div>
        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.4x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher customer retention')}}
                </p>
            </div>
        </div>
        <div class="swiper-slide tetx-center pb-4">
        <div class="border-l px-4 border-gray-400">
                <h1 class="text-5xl text-blue-700 font-semibold">{{t('1.6x')}}</h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                    {{t('higher customer advocacy')}}
                </p>
            </div>
        </div>

    </div>

</div>

<p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ t('* The business impact of effective customer experience management according to Forrester') }}
    </p>


    <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('Poor CX Is Too Costly for You to Maintain') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t(' Smart SoftwareWith customer experience management consultants, you grow your business revenue providing the experience your customers buy into.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('I NEED CX CONSULTING') }}
                </div>
            </a>

        </div>
    </div>

    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('IS THERE A REASON WHY YOU SHY AWAY FROM CX OPTIMIZATION?') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
    {{ t('Most challenges of customer experience management are concealed in thought-patterns and business processes conserved within a company, rather than in the low awareness of customer experience best practices. We have summarized our action plan to address your most frequent concerns.') }}
    </p>

    <div class="grid gap-4 md:grid-cols-2 mt-4 gap-4">
        <div class="p-6 border">
            <img src="https://www.scnsoft.com/ecommerce/cx/reasonable-money.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ t('CX optimization may start with reasonable money') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('You don’t need heavy up-front investments to move towards better experience for your customers. Applying an agile approach, we can prioritize the areas to improve and start where a quick ROI is envisaged. This will give you financial resources and a powerful boost to continue the transformation into an experience-led business.') }}
    </p>
        </div>



        <div class="p-6 border">
            <img src="https://www.scnsoft.com/ecommerce/cx/in-house-resources.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ t('You don’t need to hire dedicated in-house resources to manage CX') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('All business processes affect customer experience one way or another. But you don’t need to house such a wide pool of knowledge on board and can hire a customer experience company. We at ScienceSoft have earned professional CX competencies in multiple projects across industries. We can work closely with your team to apply changes, track the progress and adjust the CX strategy accordingly.') }}
    </p>
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/ecommerce/cx/measurable-results.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ t('The results of CX optimization campaign are measurable') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('Customer experience is not as abstract as it may seem and can be quantified.

Get a firsthand take on the experience you provide. We can design a strategy and equip you with marketing tools to get customer feedback.
Get your business KPIs analyzed. Choosing and interpreting the right KPIs for CX optimization requires data analysis skills. We conduct a thorough investigation to explain how exactly digital experience affects a low customer conversion rate in each specific case or what the reasons are for poor customer loyalty.') }}
    </p>
        </div>

        <div class="p-6 border">
            <img src="https://www.scnsoft.com/ecommerce/cx/data-based.svg" height="120" width="120" alt="">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 mt-6">
                {{ t('CX management is always data-based') }}
            </h1>

            <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('You may feel now at a loss as for where to direct your CX efforts. Poor customer data management may be one of the reasons as it leads to vague understanding of who your customers are and what they expect. As part of customer experience consulting, we craft a customer data management strategy to unify and funnel data to an analytical solution. Tailored to your business, it will provide you with customer behavioral and sales trends so that you can avoid ineffective decisions and repeat successful ones further on.') }}
    </p>
        </div>

        </div>

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('HOW WE WORK') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('We offer three approaches to CX optimization to solve problems affecting customer interaction with your business.') }}
    </p>

    <div class="">


    <div class="md:flex p-8 border hover:shadow-lg my-8">
    <div class="md:w-2/12">
    <img src="https://www.scnsoft.com/ecommerce/cx/digital-experience.svg" width="150" height="150" alt="">
    </div>
    <div class="md:w-10/12">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('Digital experience consulting') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('We have noticed that customer experience is often narrowed down to digital experience. And though we see the former as being wider, we also give much value to an online journey your customers take within the website.') }}
    </p>
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('See how we fight for greater conversions and lower bounce rate:') }}
    </p>

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t(' We investigate user experience, report on the flaws in website usability and map a positive customer journey.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('We create visual harmony and consistency across your website, inspire distinctive brand identity and instant customer trust.') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('When we see an opportunity for tailored experience, we apply on-site personalization. Here, we develop an approach carefully to be helpful, not overtly salesy.') }}</span>
                </li>

        </ul>

        <a href="#">
                <div class="bg-blue-700 rounded text-white text-center my-4 md:w-60 py-4  hover:bg-blue-800">
                    {{ t('I NEED CX CONSULTING') }}
                </div>
            </a>

    </div>
    </div>


    <div class="md:flex p-8 border hover:shadow-lg my-8">
    <div class="md:w-2/12">
    <img src="https://www.scnsoft.com/ecommerce/cx/customer-steps-01.svg" width="150" height="150" alt="">
    </div>
    <div class="md:w-10/12">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('End-to-end CX optimization') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('We tailor a customer experience strategy for you to walk customers smoothly all the way from discovery to loyalty.') }}
    </p>
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('Customer steps we work with:') }}
    </p>

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('Customer acquisition') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('Customer engagement') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('Customer conversion') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('After-sale communication') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                    <span class="text-gray-600">{{ t('Recurrent purchases') }}</span>
                </li>

        </ul>

        <a href="#">
                <div class="bg-blue-700 rounded text-white text-center my-4 md:w-80 py-4  hover:bg-blue-800">
                    {{ t('I NEED CUSTOMER JOURNEY OPTIMIZATION') }}
                </div>
            </a>

    </div>
    </div>

    <div class="md:flex p-8 border hover:shadow-lg my-8">
    <div class="md:w-2/12">
    <img src="https://www.scnsoft.com/ecommerce/cx/back-office-processes.svg" width="150" height="150" alt="">
    </div>
    <div class="md:w-10/12">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('Transformation of back office processes') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('We own vast technology expertise to bring digital transformation to your business.') }}
    </p>
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('Customer experience gains you get with each business process transformed:') }}
    </p>

    <ul style="list-style: square;" class="flex flex-col ml-6 lg:text-xl">
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Procurement planning:') }}</span>
                    <span class="text-gray-600">{{ t(' no stock-outs and back orders') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Warehousing: ') }}</span>
                    <span class="text-gray-600">{{ t(' quick dispatching and effective omnichannel delivery management') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Data management/reporting: ') }}</span>
                    <span class="text-gray-600">{{ t(' customer experience consistent with their expectations') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Marketing and personalization:') }}</span>
                    <span class="text-gray-600">{{ t(' no time wasted on irrelevant interaction with your company, both during a digital journey and after-sale communication') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Sales and document management') }}</span>
                    <span class="text-gray-600">{{ t(' no delays and interruptions in transaction processing') }}</span>
                </li>
                <li class="text-blue-800 mt-2">
                <span class="text-gray-800 font-bold">{{ t('Customer support:') }}</span>
                    <span class="text-gray-600">{{ t(' quick case resolution and a personalized approach') }}</span>
                </li>
        </ul>

        <a href="#">
                <div class="bg-blue-700 rounded text-white text-center my-4 md:w-80 py-4  hover:bg-blue-800">
                    {{ t('I NEED DIGITAL TRANSFORMATION') }}
                </div>
            </a>

    </div>
    </div>


    </div>


    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
        {{ t('WE DELIVER CUSTOMER EXPERIENCE SERVICES ACROSS INDUSTRIES') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
        {{ t('31 years in IT, we have substantial expertise in software development, data analytics, customer management, web development, ecommerce, document and knowledge management. Our intention to improve customer experience goes inherently with any our involvement. For your convenience, we have grouped our success stories by industries.') }}
    </p>


    <ul class="text-black grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <li
                    class="bg-white duration-300  h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                        {{t('Healthcare')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Banking')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Retail')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Telecom')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Virtual classroom solutions')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Education')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Travel and hospitality')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
                <li
                    class="bg-white duration-300 h-24 flex justify-center items-center text-center text-sm xl:text-xl m-2 relative hover:bg-blue-700 hover:text-white border border-gray-200">
                    <a href="#">
                    {{t('Manufacturing')}}
                    </a>
                    <div class="absolute bottom-3 right-3">
                        <i class="fa fa-arrow-right fa-rotate-45 transform rotate-45"></i>
                    </div>
                </li>
            </ul>


            <div class="p-4 my-16 shadow-xl border rounded lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-6 lg:text-3xl">
                {{ t('We Know How to Make Customer Experience Work for Your Business') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-0.5 mb-6">

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
                {{ t(' For any industry, we find a way to build customer-first experience.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 rounded text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                    {{ t('REQUEST CX CONSULTING') }}
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
