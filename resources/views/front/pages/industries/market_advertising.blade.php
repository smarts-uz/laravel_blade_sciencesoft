@extends('front.layout')

@section('css')

@endsection

@section('main')


<main class="mx-6 md:mx-16 lg:mx-24 my-10">
    <h1
        class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6"
    >
     {{ _trans('Marketing & Advertising') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-1 mb-6"/>
    <img
        src="{{asset('images/industries/market_advertising/retail-custom-software-for-marketing.svg')}}"
        alt=""
    />
    <h1
        class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6"
    >
   {{ _trans(' EXPERTISE ACROSS INDUSTRIES') }} 
    </h1>
    <hr class="w-12 bg-yellow-500 h-1 mb-6"/>
    <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">{{ _trans('We offer') }}
     <span class="text-gray-800 font-bold">{{ _trans('13 years') }}</span>{{ _trans('of experience in marketing software development to help enterprises improve efficiency of their channel strategies in many industries:') }} 
    </p>
    <div class="flex flex-col m-10 justify-between flex space-x-0 md:flex-row md:space-x-3">

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
                {{ _trans('Banking') }}
            </p>

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
                {{ _trans('Retail') }}
            </p>

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
                {{ _trans('FMCG manufacturing') }}
            </p>

            <p
                class="uppercase flex items-center justify-center text-center p-4 duration-300 font-extrabold w-1/5 rounded border hover:shadow-lg md: m-0 w-full">
                {{ _trans('Media') }}
            </p>
    </div>
    <div class="w-full m-auto md:w-2/6 md:mr
    -8 ">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                {{ _trans('Get a quote') }}
                </div>
            </a>

        </div>
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
    {{ _trans('SOFTWARE THAT DRIVES MARKETS ') }}
    </h1>
    <div class="w-12 bg-yellow-500 h-1 mb-6"></div>

    <div>
        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6" src="https://www.scnsoft.com/blue-icons-on-grey-background/trade_promotion_management.svg" width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                 {{ _trans('Trade promotion management software ') }}
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Trade promotion management (TMP) applications enable you to achieve growth for your brand by:') }}
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600"> {{ _trans('Planning promotion campaigns and forecasting sales volume') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">{{ _trans('Controlling how the commitments to retailers are executed') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600">{{ _trans('Reviewing the campaign results including the amount of shipped goods and promotion costs') }}</span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600">{{ _trans('Analyzing sales based on the data from the consumer research company and retailers') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6" src="https://www.scnsoft.com/blue-icons-on-grey-background/advertising.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Advertising planning') }}
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Analyze and plan ad campaigns across multiple media channels such as TV,
                Internet, radio, printed press and out-of-home commercials. Combine all 
                the media types in one plan to find the optimal advertising strategy tailored 
                to your needs. Enjoy comprehensive visualized reports induced from sophisticated mathematical 
                models on a single platform.') }}          
                </p>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/social_marketing.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                 {{ _trans('Social marketing solutions  ') }}
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('We develop marketing software to help you turn social networks into a customer acquisition tool:') }}
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Social marketing applications') }}            
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600">
                           {{ _trans('Social analytics to track user activity and prepare analytical reports') }}
                           </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                           <span class="text-gray-600">
                           {{ _trans('Campaign applications integrated with social networks')  }}
                           </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/loyalty.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Loyalty software') }}
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Ensure more loyal relationships with your clients by tracking and analyzing what makes them satisfied:') }}
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Customer account management: boost prospect interest through personalized offers and track the purchase history,
                        promotion response and more') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Mobile loyalty applications: personalize promotions and provide relevant product information,
                        both in store and at home') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Analytics and reporting: analyze promotions impact and loyalty program ROI, track trends in 
                        customer behavior and forecast sales ') }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/data_analysis_reporting.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Marketing data analysis') }}
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
               {{ _trans(' Make smarter marketing decisions thanks to:') }}
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans(' Consumer survey analysis: collecting and processing survey
                         data to uncover the real drivers of consumer behavior') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans(' Marketing campaign analysis: tracking key campaign metrics and monitoring overall performance') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Sales analysis: processing and unifying data to estimate growth potential as well 
                        as optimize sales and marketing activities') }}
                        </span>
                    </li>
                </ul>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('Our services cover the marketing data analysis process from A to Z:') }}
                </p>
                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Date warehouse (DWH) implementation') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Online analytical processing (OLAP) cubes, reporting and visualization') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans(' Predictive analytics') }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="md:flex">
            <div class="md:w-2/12 xl:w-1/12">
                <img class="md:mt-6"
                     src="https://www.scnsoft.com/blue-icons-on-grey-background/rtb.svg"
                     width="84"
                     height="84" alt="">
            </div>
            <div class="md:w-10/12 xl:w-11/12">
                <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 mt-6">
                {{ _trans('Real-time bidding in online advertisement') }}
                </h1>
                <p class="text-lg text-gray-600 mt-6 md:text-xl lg:text-2xl">
                {{ _trans('everage cost-efficient and optimized ad campaigns 
                with the help of RTB systems or its key components:') }}
                </p>

                <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">

                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Demand-side platforms (DSPs)') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Supply-side platforms (SSPs)') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Data management platforms (DMPs)') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Analytics') }}
                        </span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <h1
        class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6"
    >
    {{ _trans('FREQUENTLY ASKED QUESTIONS ') }}
    
    </h1>
    <hr class="w-12 bg-yellow-500 h-1 mb-6"/>
    <div class="p-6 shadow-xl lg:flex">
        <div x-data="{ open: false }">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
            {{ _trans('#1') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-1 mb-6"/>
            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
            {{ _trans(' Do you have experience in developing custom marketing software?') }}
            </p>
            <p class="text-blue-500 cursor-pointer hover:underline " @click="open = true">{{ _trans('CHECK OUT THE ANSWER') }}</p>
            <div x-show="open" @click.away="open = false">
            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
            {{ _trans('Yes, some of the world’s largest marketing agencies and 
            brands have been powered by our marketing applications:') }}
            
            </p>
            <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans(' Sales analysis system for a global FMCG company with 1 bln consumers') }}
                       
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Trade promotion management for a US 
                        food processing company with 200 locations worldwide') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans(' Cross-media planning platform for the US’s largest advertising agency') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Trade marketing planning system 
                        for an FMCG corporation with products sold in 180 markets') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('CRM for 2,000 car retailers') }}
                        
                        </span>
                    </li>
                </ul>
            </div>
       </div>
    </div>
    <div class="p-6 shadow-xl lg:flex">
        <div  x-data="{ open: false }">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
            {{ _trans('#2') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-1 mb-6"/>
            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
            {{ _trans('As a marketing agency with personalized approach to clients, we don’t need one-size-fits-all 
            solutions. So how can we benefit from your services?') }}
            </p>
            <p class="text-blue-500 cursor-pointer hover:underline"  @click="open = true">CHECK OUT THE ANSWER</p>
            <div x-show="open" @click.away="open = false">
            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
            {{ _trans('We believe that marketing automation does not necessarily mean reduced quality or worse targeting.
             Rather, it unlocks opportunities to tailor the omni-channel experience to the customer:') }}
            </p>
            <ul style="list-style: square;" class="flex flex-col text-lg md:text-xl lg:text-2xl mb-8">
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Data analysis to improve campaign performance by turning raw information into valuable insights') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Real-time engagement with customers through media and social networks') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Integration with CRM for better cooperation between the marketing and sales departments') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Coordination of activities including marketing campaigns, reporting and analytics within one system') }}
                        </span>
                    </li>
                    <li class="text-blue-800 mt-2 ml-6">
                        <span class="text-gray-600">
                        {{ _trans('Increased mobility through cutting-edge mobile apps to support the loyalty program or brand promotion campaign') }}
                        </span>
                    </li>
                </ul>
            </div>
       </div>
    </div>
    <div class="p-6 shadow-xl lg:flex">
        <div class="lg:w-4/6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 mt-12 lg:text-3xl">
            {{ _trans('Ready for Your New Marketing Application?') }}
            </h1>
            <hr class="w-12 bg-yellow-500 h-1 mb-6"/>

            <p class="text-lg text-gray-600 my-6 md:text-xl lg:text-2xl">
            {{ _trans(' We can kick off with signing an NDA and doing a pilot project or providing you with an estimation 
            based on the requirements. It takes us only 2-4 weeks to start with a small team that can be scaled
            up at any time. Tell us more about your business so that we can discuss a solution to optimize the way you run it.') }}
            </p>
        </div>

        <div class="lg:w-2/6 m-auto">
            <a href="#">
                <div class="bg-blue-700 text-white text-center lg:mx-16 px-2 py-4  hover:bg-blue-800">
                {{ _trans('DROP US A LINE') }}
                </div>
            </a>

        </div>
    </div>
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 md:text-4xl mt-6">
    {{ _trans('SELECTED PROJECTS ') }}
    </h1>
    <hr class="w-12 bg-yellow-500 h-1 mb-6"/>
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
</main>


@endsection

@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
