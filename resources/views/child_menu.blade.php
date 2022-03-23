{{-- <ul>
    @foreach ($categories as $category)
        <li>{{ $category->name }}</li>
        <ul>
        @foreach ($category->childrenCategories as $childCategory)
            @include('child_category', ['child_category' => $childCategory])
        @endforeach
        </ul>
    @endforeach
</ul> --}}


<!-- navbar -->
<div class="bg-white hidden overflow-y-auto sidebar-menu h-screen w-64 fixed right-0 top-0 z-10 flex flex-col justify-between items-center">
    <div class="relative">
      <i onclick="closeSidebarMenu()" class="fa cursor-pointer fa-times text-black right-0 text-3xl z-50 absolute top-2 "></i>
      <ul class="flex-col w-56">
        <div class="flex items-center justify-between mt-14 cursor-pointer">
        <li onclick="dropdownBtnAbout()">{{ t("About") }}</li>
       <i onclick="dropdownBtnAbout()" class="fas fa-chevron-down arrowDownAbout"></i>
       <span onclick="closedropdownAbout()" class="hidden arrowUpAbout">
        <i class="fas fa-chevron-up"></i>
        </span>
        </div>
        <ul class="dropdown-container-about hidden flex-col mt-6 ml-4">
          <h1 class="mb-2 mt-2 font-extrabold">{{ t("Company") }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="/about/about-company"><li class="mt-4">{{ t("About Company") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Management Team") }}</li></a>
          <a href="/about/careers"><li class="mt-4">{{ t("Careers") }}</li></a>
          <a href="/partnerships"><li class="mt-4">{{ t("Partnerships") }}</li></a>
          <a href="/Smart Software-Referral-Program"><li class="mt-4">{{ t("Smart SoftwareReferral Program") }}</li></a>
          <a href="/our-locations"><li class="mt-4">{{ t("Our Locations") }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ t("Approach") }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ t("Development Process") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Sustainability Policy") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Privacy Policy") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Terms Of Use") }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ t("Recognition") }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ t("Testimonials") }}</li>
          <a href="/management-Team"><li class="mt-4">{{ t("Management Team") }}</li>
          <a href="#"><li class="mt-4">{{ t("Awards and Acknowledgements") }}</li>
          <a href="#"><li class="mt-4">{{ t("Press Room") }}</li>
          <a href="#"><li class="mt-4">{{ t("News") }}</li>
        </ul>
        <div class="flex items-center justify-between mt-4 cursor-pointer">
          <li onclick="dropdownBtnServices()" class="relative">{{ t("Services") }}</li>
          <i onclick="dropdownBtnServices()" class="fas fa-chevron-down arrowDownServices"></i>
          <span onclick="closedropdownServices()" class="hidden arrowUpServices">
          <i class="fas fa-chevron-up hidden"></i>
          </span>
          </div>
          <ul class="dropdown-container-Services hidden flex-col mt-6 ml-4">
            <h1 class="mb-2 mt-2 font-extrabold">{{ t("Services Types") }}</h1>
            <hr class="border-b-2 w-12 border-yellow-500">
            <a href="/services/software-development"><li class="mt-4">{{ t("Software Development") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("Testing and QA") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("Application Services") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("UI/UX Design") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("Infrastructure Services") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("Managed IT Services") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("IT Outsourcing") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("IT Consulting") }}</li></a>
            <a href="#"><li class="mt-4">{{ t("IT Support") }}</li></a>
            <h1 class="mb-2 mt-2 font-extrabold">{{ t("Solutions") }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ t("Data Analytics") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("CRM") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Cybersecurity") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Internet of Things") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Virtual Reality") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Image Analysis") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Web Portals") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Ecommerce") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Fleet Management") }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ t("Platforms") }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ t("SharePoint and Office 365") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Microsoft Dynamics 365") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Microsoft Power BI") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Salesforce") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("Magento") }}</li></a>
          <a href="#"><li class="mt-4">{{ t("ServiceNow") }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ t("Technologies") }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="/services/java"><li class="mt-4">{{ t("Java") }}</li></a>
          <a href="/services/NET"><li class="mt-4">{{ t(".NET") }}</li></a>
          <a href="/services/PHP"><li class="mt-4">{{ t("PHP") }}</li></a>
          <a href="/services/python"><li class="mt-4">{{ t("Python") }}</li></a>
          <a href="/services/golang"><li class="mt-4">{{ t("Golang") }}</li></a>
          <a href="/services/c++"><li class="mt-4">{{ t("C++") }}</li></a>
          <a href="/services/configureYourTeam"><li class="mt-4">{{ t("Configure Your Team") }}</li></a>
          </ul>
          <div  class="flex items-center justify-between mt-4 cursor-pointer">
            <li onclick="dropdownBtnIndustries()">{{ t("Industries") }}</li>
           <i onclick="dropdownBtnIndustries()" class="fas fa-chevron-down arrowDownIndustries"></i>
           <span onclick="closedropdownIndustries()" class="hidden arrowUpIndustries">
            <i class="fas fa-chevron-up hidden"></i>
            </span>
            </div>
            <ul class="dropdown-container-Industries hidden flex-col mt-2 ml-4">
              <a href="/industries/healthcare"><li class="mt-4">{{ t("Healthcare") }}</li></a>
              <a href="{{route('banking_financial_services')}}"><li class="mt-4">{{ t("Banking and Financial Services") }}</li></a>
              <a href="/industries/retail"><li class="mt-4">{{ t("Retail") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("Ecommerce") }}</li></a>
              <a href="/industries/manufacturing"><li class="mt-4">{{ t("Manufacturing") }}</li></a>
              <a href="/industries/market-Advertising"><li class="mt-4">{{ t("Marketing & Advertising") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("Telecommunications") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("eLearning") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("Transportation and Logistics") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("Oil and Gas") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("Professional Services") }}</li></a>
              <a href="#"><li class="mt-4">{{ t("Insurance") }}</li></a>
            </ul>
         <a href="#"><li class="mt-4 cursor-pointer">{{ t("Case Studies") }}</li></a>
         <a href="#"><li class="mt-4 cursor-pointer">{{ t("Blog") }}</li></a>
         <a href="/contact-us"><li class="bg-blue-700 py-1 px-8 text-white w-36 mt-4">{{ t("Let's Talk") }}</li></a>
      </ul>
    </div>
    <div class="mb-8">
      <p>{{ t("Can't find what you need?") }}</p>
      <button class="bg-blue-700 py-1 px-8 text-white mt-2 cursor-pointer">{{ t("Ask Us") }}</button>
    </div>
  </div>
  <div class="px-10 md:px-16 lg:px-16 py-4">
    <div class="flex justify-between items-center">
      <a href="/">
      <img class="w-32"
        src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"
        alt="Microsoft ASP.NET">
      </a>
      <div id="searchbar" class="flex justify-end items-center w-4/5">
        <ul class="w-11/12 hidden lg:flex justify-end items-center font-semibold list-none uppercase text-black">
          <li class="flex mr-8 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
            <a id="about" class="relative py-6" href="#">
            {{ t("About") }}
            <div id="aboutHover" class="hidden flex absolute left-0 z-40 justify-evenly top-20 border-t-2 border-b-2 bg-white items-start py-6">
              <div class="w-1/5">
                <h1 class="mb-2 font-extrabold">{{ t("About") }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <p class="mt-4 text-black font-normal">{{ t("Smart Softwareis a US-based IT consulting and software development company founded in 1989. We are a team of 700 employees, including technical experts and BAs.") }}</p>
                <p class="font-extrabold mt-4 text-black">{{ t("Can't find what you need?") }}</p>
                <div class="bg-blue-700 px-6 py-2 text-white mt-4 w-36 text-center"><a href="#">{{ t("ASK US") }}</a></div>
              </div>
              <div class="w-1/5 list-none">
                <h1 class="mb-2 font-extrabold">{{ t("Company") }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="/about/about-company"><li class="mt-4 text-black hover:text-blue-700">{{ t("About Company") }}</li></a>
                <a href="/management-Team"><li class="mt-4 text-black hover:text-blue-700">{{ t("Management Team") }}</li></a>
                <a href="/about/careers"><li class="mt-4 text-black hover:text-blue-700">{{ t("Careers") }}</li></a>
                <a href="/partnerships"><li class="mt-4 text-black hover:text-blue-700">{{ t("Partnerships") }}</li></a>
                <a href="/Smart Software-Referral-Program"><li class="mt-4 text-black hover:text-blue-700">{{ t("Smart SoftwareReferral Program") }}</li></a>
                <a href="/our-locations"><li class="mt-4 text-black hover:text-blue-700">{{ t("Our Locations") }}</li></a>
              </ul>
              </div>
              <div class="w-1/5 list-none">
                <h1 class="mb-2 font-extrabold">{{ t("Approach") }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Development Process") }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Sustainability Policy") }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Privacy Policy") }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Terms Of Use") }}</li></a>
              </ul>
              </div>
              <div class="w-1/5 list-none">
                <h1 class="mb-2 font-extrabold">{{ t("Recognition") }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Testimonials") }}</li>
                <a href="/management-Team"><li class="mt-4 text-black hover:text-blue-700">{{ t("Management Team") }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Awards and Acknowledgements") }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("Press Room") }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ t("News") }}</li>
                </ul>
              </div>
            </div>
          </a>
          </li>
          <li class="flex justify-center items- center bg-blue-700 text-white px-4 py-2 mr-6 hover:bg-blue-900">
          <a href="/contact-us">{{ t("Let's talk") }}</a>
          </li>
        </ul>
        <!-- Search Bar -->
        <div onclick="searchBarClick()"
          class="flex justify-center cursor-pointer items-center bg-blue-700 rounded-full text-white p-2 hover:bg-blue-900">
          <i class="fa fa-search fa-xl"></i>
        </div>
        <div onclick="openSidebarMenu()" class="flex lg:hidden ml-4 cursor-pointer">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <div id="exitbar" class="w-full h-10 justify-between ml-4 items-center hidden bg-white">
        <input type="text" name="" class=" border-2 outline-none w-full z-50 mr-2 p-3">
        <div class="flex w-12 h-12 justify-center items-center z-50 rounded-full bg-white">
          <i onclick="exitClick()" class="fa fa-times text-black text-3xl z-50"></i>
        </div>
      </div>
    </div>
  </div>

<!-- endnavbar -->
