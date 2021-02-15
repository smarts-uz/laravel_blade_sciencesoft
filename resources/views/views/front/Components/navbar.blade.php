<!-- navbar -->
  <div class="bg-white hidden overflow-y-auto  sidebar-menu h-screen w-64 fixed right-0 top-0 z-10 flex flex-col justify-between items-center">
    <div class="relative">
      <i onclick="closeSidebarMenu()" class="fa cursor-pointer fa-times text-black right-0 text-3xl z-50 absolute top-2 "></i>
      <ul class="flex-col w-56">
        <div class="flex items-center justify-between mt-14 cursor-pointer">
        <li>{{ @translate_lang("About")  }}</li>
       <i id="About" onclick="dropdownBtnAbout()" class="fas fa-chevron-down arrowDownAbout"></i>
       <span onclick="closedropdownAbout()" class="hidden arrowUpAbout">
        <i class="fas fa-chevron-up"></i>
        </span>
        </div>
        <ul class="dropdown-container-about hidden flex-col mt-6 ml-4">
          <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Company")  }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="{{route('getBlade', 'about.company.about_company')}}"><li class="mt-4">{{ @translate_lang("About Company")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Management Team")  }}</li></a>
          <a href="/about/careers"><li class="mt-4">{{ @translate_lang("Careers")  }}</li></a>
          <a href="/partnerships"><li class="mt-4">{{ @translate_lang("Partnerships")  }}</li></a>
          <a href="/Sciencesoft-Referral-Program"><li class="mt-4">{{ @translate_lang("ScienceSoft Referral Program")  }}</li></a>
          <a href="/our-locations"><li class="mt-4">{{ @translate_lang("Our Locations")  }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Approach")  }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ @translate_lang("Development Process")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Sustainability Policy")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Privacy Policy")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Terms Of Use")  }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Recognition")  }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ @translate_lang("Testimonials")  }}</li>
          <a href="/management-Team"><li class="mt-4">{{ @translate_lang("Management Team")  }}</li>
          <a href="#"><li class="mt-4">{{ @translate_lang("Awards and Acknowledgements")  }}</li>
          <a href="#"><li class="mt-4">{{ @translate_lang("Press Room")  }}</li>
          <a href="#"><li class="mt-4">{{ @translate_lang("News")  }}</li>
        </ul>
        <div class="flex items-center justify-between mt-4 cursor-pointer">
          <li id="services" class="relative">{{ @translate_lang("Services")  }}</li>
          <i onclick="dropdownBtnServices()" class="fas fa-chevron-down arrowDownServices"></i>
          <span onclick="closedropdownServices()" class="hidden arrowUpServices">
          <i class="fas fa-chevron-up hidden"></i>
          </span>
          </div>
          <ul class="dropdown-container-Services hidden flex-col mt-6 ml-4">
            <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Services Types")  }}</h1>
            <hr class="border-b-2 w-12 border-yellow-500">
            <a href="#"><li class="mt-4">{{ @translate_lang("Software Development")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("Testing and QA")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("Application Services")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("UI/UX Design")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("Infrastructure Services")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("Managed IT Services")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("IT Outsourcing")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("IT Consulting")  }}</li></a>
            <a href="#"><li class="mt-4">{{ @translate_lang("IT Support")  }}</li></a>
            <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Solutions")  }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ @translate_lang("Data Analytics")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("CRM")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Cybersecurity")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Internet of Things")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Web Portals")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Ecommerce")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Fleet Management")  }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Platforms")  }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#"><li class="mt-4">{{ @translate_lang("SharePoint and Office 365")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Microsoft Dynamics 365")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Microsoft Power BI")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Salesforce")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("Magento")  }}</li></a>
          <a href="#"><li class="mt-4">{{ @translate_lang("ServiceNow")  }}</li></a>
          <h1 class="mb-2 mt-2 font-extrabold">{{ @translate_lang("Technologies")  }}</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="/services/java"><li class="mt-4">{{ @translate_lang("Java")  }}</li></a>
          <a href="/services/NET"><li class="mt-4">{{ @translate_lang(".NET")  }}</li></a>
          <a href="/services/PHP"><li class="mt-4">{{ @translate_lang("PHP")  }}</li></a>
          <a href="/services/python"><li class="mt-4">{{ @translate_lang("Python")  }}</li></a>
          <a href="/services/golang"><li class="mt-4">{{ @translate_lang("Golang")  }}</li></a>
          <a href="/services/c++"><li class="mt-4">{{ @translate_lang("C++")  }}</li></a>
          <a href="/services/configureYourTeam"><li class="mt-4">{{ @translate_lang("Configure Your Team")  }}</li></a>
          </ul>
          <div class="flex items-center justify-between mt-4 cursor-pointer">
            <li>{{ @translate_lang("Industries")  }}</li>
           <i id="industries" onclick="dropdownBtnIndustries()" class="fas fa-chevron-down arrowDownIndustries"></i>
           <span onclick="closedropdownIndustries()" class="hidden arrowUpIndustries">
            <i class="fas fa-chevron-up hidden"></i>
            </span>
            </div>
            <ul class="dropdown-container-Industries hidden flex-col mt-2 ml-4">
              <a href="/industries/healthcare"><li class="mt-4">{{ @translate_lang("Healthcare")  }}</li></a>
              <a href="{{route('banking_financial_services')}}"><li class="mt-4">{{ @translate_lang("Banking and Financial Services")  }}</li></a>
              <a href="/industries/retail"><li class="mt-4">{{ @translate_lang("Retail")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("Ecommerce")  }}</li></a>
              <a href="/industries/manufacturing"><li class="mt-4">{{ @translate_lang("Manufacturing")  }}</li></a>
              <a href="/industries/market-Advertising"><li class="mt-4">{{ @translate_lang("Marketing & Advertising")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("Telecommunications")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("eLearning")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("Transportation and Logistics")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("Oil and Gas")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("Professional Services")  }}</li></a>
              <a href="#"><li class="mt-4">{{ @translate_lang("Insurance")  }}</li></a>
            </ul>
         <a href="#"><li class="mt-4 cursor-pointer">{{ @translate_lang("Case Studies")  }}</li></a>
         <a href="#"><li class="mt-4 cursor-pointer">{{ @translate_lang("Blog")  }}</li></a>
         <a href="/contact-us"><li class="bg-blue-700 py-1 px-8 text-white w-36 mt-4">{{ @translate_lang("Let's Talk")  }}</li></a>
      </ul>
    </div>
    <div class="mb-8">
      <p>{{ @translate_lang("Can't find what you need?")  }}</p>
      <button class="bg-blue-700 py-1 px-8 text-white mt-2 cursor-pointer">{{ @translate_lang("Ask Us")  }}</button>
    </div>
  </div>
  {{-- <div class="px-10 md:px-16 lg:px-16 py-4">
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
            {{ @translate_lang("About")  }}
            <div id="aboutHover" class=" hidden flex absolute left-0 z-40 justify-evenly top-20 border-t-2 border-b-2 bg-white items-start">
              <div class="w-1/5">
                <h1 class="mb-2 font-extrabold">{{ @translate_lang("About")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <p class="mt-4 text-black font-normal">{{ @translate_lang("ScienceSoft is a US-based IT consulting and software development company founded in 1989. We are a team of 700 employees, including technical experts and BAs.")  }}</p>
                <p class="font-extrabold mt-4 text-black">{{ @translate_lang("Can't find what you need?")  }}</p>
                <div class="bg-blue-700 px-6 py-2 text-white w-36 text-center"><a href="#">{{ @translate_lang("ASK US")  }}</a></div>
              </div>
              <div class="w-1/5 list-none">
                <h1 class="mb-2 font-extrabold">{{ @translate_lang("Company")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("About Company")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Management Team")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Careers")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Partnerships")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("ScienceSoft Referral Program")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Our Locations")  }}</li></a>
              </ul>
              </div>
              <div class="w-1/5 list-none">
                <h1 class="mb-2 font-extrabold">{{ @translate_lang("Approach")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Development Process")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Sustainability Policy")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Privacy Policy")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Terms Of Use")  }}</li></a>
              </ul>
              </div>
              <div class="w-1/5 list-none">
                <h1 class="mb-2 font-extrabold">{{ @translate_lang("Recognition")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Testimonials")  }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Management Team")  }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Awards and Acknowledgements")  }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Press Room")  }}</li>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("News")  }}</li>
                </ul>
              </div>
            </div>
          </a>
          </li>
          <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
            <a class="py-6" id="service" href="#">
            {{ @translate_lang("Services")  }}
            <div id="serviceHover" class="hidden flex absolute left-0  justify-evenly top-20 border-t-2 border-b-2 bg-white items-start py-6">
              <div class="w-1/6">
                <h1 class="mb-2 font-extrabold">{{ @translate_lang("Services")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <p class="mt-4 text-black font-normal">
                  {{ @translate_lang("We handle complex business challenges building all types of custom and platform-based solutions and providing a comprehensive set of end-to-end IT services.")  }}</p>
                <p class="font-extrabold mt-4 text-black">{{ @translate_lang("Can't find what you need?")  }}</p>
                <div class="bg-blue-700 px-6 py-2 text-white mt-4 w-36 text-center"><a href="#">{{ @translate_lang("ASK US")  }}</a></div>
              </div>
              <div class="w-1/6 list-none">
                <h1 class="mb-2 font-extrabold">
                  {{ @translate_lang("Service types")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Software Development")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Testing and QA")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Application Services")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("UI/UX Design")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Infrastructure Services")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Managed IT Services")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("IT Outsourcing")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("IT Consulting")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("IT Support")  }}</li></a>
              </ul>
              </div>
              <div class="w-1/6 list-none">
                <h1 class="mb-2  font-extrabold">{{ @translate_lang("Solutions")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Data Analytics")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("CRM")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Cybersecurity")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Internet of Things")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Web Portals")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Ecommerce")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Fleet Management")  }}</li></a>
              </ul>
              </div>
              <div class="w-1/6 list-none">
                <h1 class="mb-2  font-extrabold">{{ @translate_lang("Platforms")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("SharePoint and Office 365")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Microsoft Dynamics 365")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Microsoft Power BI")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Salesforce")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Magento")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("ServiceNow")  }}</li></a>
                </ul>
              </div>
              <div class="w-1/6 list-none">
                <h1 class="mb-2  font-extrabold">{{ @translate_lang("Technologies")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Java")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang(".NET")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("PHP")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Python")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Golang")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("C++")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Configure Your Team")  }}</li></a>
                </ul>
              </div>
            </div>
          </a>
          </li>
          <li id="industries" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
            <a class="py-6" id="industry" href="#">
            {{ @translate_lang("Industries")  }}
            <div id="industryHover" class="hidden flex absolute left-0  justify-between top-20 border-t-2 border-b-2 bg-white items-start py-6">
              <div class="w-1/4">
                <h1 class="mb-2  font-extrabold">{{ @translate_lang("Industries")  }}</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <p class="mt-4 text-black font-normal">
                  {{ @translate_lang("To power businesses with a meaningful digital change, ScienceSoft’s team maintains a solid knowledge of trends, needs and challenges in more than 20 industries.")  }}</p>
                <p class="font-extrabold mt-4 text-black">{{ @translate_lang("Can't find what you need?")  }}</p>
                <div class="bg-blue-700 px-6 py-2 text-white mt-4 w-36 text-center"><a  href="#">{{ @translate_lang("ASK US")  }}</a></div>
              </div>
              <div class="w-1/4 list-none">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Healthcare")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Banking and Financial Services")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Retail")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Ecommerce")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Manufacturing")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Marketing & Advertising")  }}</li></a>
              </ul>
              </div>
              <div class="w-1/4 list-none">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Telecommunications")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("eLearning")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Transportation and Logistics")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Oil and Gas")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Professional Services")  }}</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">{{ @translate_lang("Insurance")  }}</li></a>
              </ul>
              </div>
            </div>
            </a>
          </li>
          <li class="mr-8 cursor-pointer hover:text-blue-500">
            <a class="py-6" href="#">
              {{ @translate_lang("Case studies")  }}
            </a>
          </li>
          <li class="mr-8 cursor-pointer hover:text-blue-500">
            <a class="py-6" href="#">{{ @translate_lang("Blog")  }}</a>
          </li>
          <li class="flex justify-center items- center bg-blue-700 text-white px-4 py-2 mr-6 hover:bg-blue-900">
          <a  href="#">{{ @translate_lang("Let's talk")  }}</a>
          </li>
        </ul>
        <!-- Search Bar -->
        <div
          onclick="searchBarClick()"
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

<!-- endnavbar --> --}}
