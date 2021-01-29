<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style-carousel.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Management Team - ScienSoft</title>
</head>
<body>
<!-- header -->
<header class="pb-20">
  <!--  -->


  <div
    class="bg-white hidden overflow-y-auto   sidebar-menu h-screen w-64 fixed right-0 top-0 z-10 flex flex-col justify-between items-center">

    <div class="relative">
      <i onclick="closeSidebarMenu()"
        class="fa cursor-pointer fa-times text-black right-0 text-3xl z-50 absolute top-2 "></i>
      <ul class="flex-col w-56">

        <div class="flex items-center justify-between mt-14 cursor-pointer">
          <li onclick="dropdownBtnAbout()">About</li>
          <i onclick="dropdownBtnAbout()" class="fas fa-chevron-down arrowDownAbout"></i>
          <span onclick="closedropdownAbout()" class="hidden arrowUpAbout">
            <i class="fas fa-chevron-up"></i>
          </span>
        </div>
        <ul class="dropdown-container-about hidden flex-col mt-6 ml-4">
          <h1 class="mb-2 mt-2 font-extrabold">Company</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">About Company</li>
          </a>
          <a href="management-team.html">
            <li class="mt-4">Management Team</li>
          </a>
          <a href="about/careers.html">
            <li class="mt-4">Careers</li>
          </a>
          <a href="#">
            <li class="mt-4">Partnerships</li>
          </a>
          <a href="#">
            <li class="mt-4">ScienceSoft Referral Program</li>
          </a>
          <a href="#">
            <li class="mt-4">Our Locations</li>
          </a>
          <h1 class="mb-2 mt-2 font-extrabold">Approach</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">Development Process</li>
          </a>
          <a href="#">
            <li class="mt-4">Sustainability Policy</li>
          </a>
          <a href="#">
            <li class="mt-4">Privacy Policy</li>
          </a>
          <a href="#">
            <li class="mt-4">Terms Of Use</li>
          </a>
          <h1 class="mb-2 mt-2 font-extrabold">Recognition</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">Testimonials</li>
            <a href="#">
              <li class="mt-4">Management Team</li>
              <a href="#">
                <li class="mt-4">Awards and Acknowledgements</li>
                <a href="#">
                  <li class="mt-4">Press Room</li>
                  <a href="#">
                    <li class="mt-4">News</li>
        </ul>

        <div class="flex items-center justify-between mt-4 cursor-pointer">
          <li onclick="dropdownBtnServices()" class="relative">Services</li>
          <i onclick="dropdownBtnServices()" class="fas fa-chevron-down arrowDownServices"></i>
          <span onclick="closedropdownServices()" class="hidden arrowUpServices">
            <i class="fas fa-chevron-up hidden"></i>
          </span>
        </div>
        <ul class="dropdown-container-Services hidden flex-col mt-6 ml-4">
          <h1 class="mb-2 mt-2 font-extrabold">Services Types</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">Software Development</li>
          </a>
          <a href="#">
            <li class="mt-4">Testing and QA</li>
          </a>
          <a href="#">
            <li class="mt-4">Application Services</li>
          </a>
          <a href="#">
            <li class="mt-4">UI/UX Design</li>
          </a>
          <a href="#">
            <li class="mt-4">Infrastructure Services</li>
          </a>
          <a href="#">
            <li class="mt-4">Managed IT Services</li>
          </a>
          <a href="#">
            <li class="mt-4">IT Outsourcing</li>
          </a>
          <a href="#">
            <li class="mt-4">IT Consulting</li>
          </a>
          <a href="#">
            <li class="mt-4">IT Support</li>
          </a>
          <h1 class="mb-2 mt-2 font-extrabold">Solutions</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">Data Analytics</li>
          </a>
          <a href="#">
            <li class="mt-4">CRM</li>
          </a>
          <a href="#">
            <li class="mt-4">Cybersecurity</li>
          </a>
          <a href="#">
            <li class="mt-4">Internet of Things</li>
          </a>
          <a href="#">
            <li class="mt-4">Virtual Reality</li>
          </a>
          <a href="#">
            <li class="mt-4">Image Analysis</li>
          </a>
          <a href="#">
            <li class="mt-4">Web Portals</li>
          </a>
          <a href="#">
            <li class="mt-4">Ecommerce</li>
          </a>
          <a href="#">
            <li class="mt-4">Fleet Management</li>
          </a>
          <h1 class="mb-2 mt-2 font-extrabold">Platforms</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">SharePoint and Office 365</li>
          </a>
          <a href="#">
            <li class="mt-4">Microsoft Dynamics 365</li>
          </a>
          <a href="#">
            <li class="mt-4">Microsoft Power BI</li>
          </a>
          <a href="#">
            <li class="mt-4">Salesforce</li>
          </a>
          <a href="#">
            <li class="mt-4">Magento </li>
          </a>
          <a href="#">
            <li class="mt-4">ServiceNow</li>
          </a>
          <h1 class="mb-2 mt-2 font-extrabold">Technologies</h1>
          <hr class="border-b-2 w-12 border-yellow-500">
          <a href="#">
            <li class="mt-4">Java</li>
          </a>
          <a href="#">
            <li class="mt-4">.NET</li>
          </a>
          <a href="#">
            <li class="mt-4">PHP</li>
          </a>
          <a href="#">
            <li class="mt-4">Python</li>
          </a>
          <a href="#">
            <li class="mt-4">Golang</li>
          </a>
          <a href="#">
            <li class="mt-4">C++</li>
          </a>
          <a href="#">
            <li class="mt-4">Configure Your Team</li>
          </a>
        </ul>
        <div class="flex items-center justify-between mt-4 cursor-pointer">
          <li onclick="dropdownBtnIndustries()">Industries</li>
          <i onclick="dropdownBtnIndustries()" class="fas fa-chevron-down arrowDownIndustries"></i>
          <span onclick="closedropdownIndustries()" class="hidden arrowUpIndustries">
            <i class="fas fa-chevron-up hidden"></i>
          </span>
        </div>
        <ul class="dropdown-container-Industries hidden flex-col mt-2 ml-4">
          <a href="#">
            <li class="mt-4">Healthcare</li>
          </a>
          <a href="#">
            <li class="mt-4">Banking and Financial Services</li>
          </a>
          <a href="#">
            <li class="mt-4">Retail</li>
          </a>
          <a href="#">
            <li class="mt-4">Ecommerce</li>
          </a>
          <a href="#">
            <li class="mt-4">Manufacturing</li>
          </a>
          <a href="#">
            <li class="mt-4">Marketing & Advertising</li>
          </a>
          <a href="#">
            <li class="mt-4">Telecommunications</li>
          </a>
          <a href="#">
            <li class="mt-4">eLearning </li>
          </a>
          <a href="#">
            <li class="mt-4">Transportation and Logistics</li>
          </a>
          <a href="#">
            <li class="mt-4">Oil and Gas</li>
          </a>
          <a href="#">
            <li class="mt-4">Professional Services</li>
          </a>
          <a href="#">
            <li class="mt-4">Insurance</li>
          </a>
        </ul>
        <a href="#">
          <li class="mt-4 cursor-pointer">Case Studies</li>
        </a>
        <a href="#">
          <li class="mt-4 cursor-pointer">Blog</li>
        </a>
        <a href="/contact-us.html">
          <li class="bg-blue-700 py-1 px-8 text-white w-36 mt-4">Let's Talk</li>
        </a>
      </ul>
    </div>
    <div class="mb-8">
      <p>Can't find what you need?</p>
      <button class="bg-blue-700 py-1 px-8 text-white mt-2 cursor-pointer">Ask Us</button>
    </div>
  </div>


  <div id="aboutHover" class="show-nav ">
    <div class="w-1/5">
      <h1 class="mb-2  font-extrabold">About</h1>
      <hr class="border-b-2 w-12 border-yellow-500">
      <p class="mt-4">ScienceSoft is a US-based IT consulting and software development company founded in 1989. We
        are a
        team of 700 employees, including technical experts and BAs.</p>
      <p class="font-extrabold mt-4">Can't find what you need?</p>
      <div class="bg-blue-700 px-6 py-2 text-white mt-4 w-36 text-center"><a href="#">ASK US</a></div>
    </div>
    <div class="w-1/5 list-none">
      <h1 class="mb-2 mt-2 font-extrabold">Company</h1>
      <hr class="border-b-2 w-12 border-yellow-500">
      <a href="#">
        <li class="mt-4 hover:text-blue-700">About Company</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Management Team</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Careers</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Partnerships</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">ScienceSoft Referral Program</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Our Locations</li>
      </a>
      </ul>
    </div>
    <div class="w-1/5 list-none">
      <h1 class="mb-2  font-extrabold">Approach</h1>
      <hr class="border-b-2 w-12 border-yellow-500">
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Development Process</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Sustainability Policy</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Privacy Policy</li>
      </a>
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Terms Of Use</li>
      </a>
      </ul>
    </div>
    <div class="w-1/5 list-none">
      <h1 class="mb-2  font-extrabold">Recognition</h1>
      <hr class="border-b-2 w-12 border-yellow-500">
      <a href="#">
        <li class="mt-4 hover:text-blue-700">Testimonials</li>
        <a href="#">
          <li class="mt-4 hover:text-blue-700">Management Team</li>
          <a href="#">
            <li class="mt-4 hover:text-blue-700">Awards and Acknowledgements</li>
            <a href="#">
              <li class="mt-4 hover:text-blue-700">Press Room</li>
              <a href="#">
                <li class="mt-4 hover:text-blue-700">News</li>
                </ul>
    </div>
  </div>




  <div class="px-10 md:px-16 lg:px-16 py-4 ">
    <div class="flex justify-between items-center">
      <img class="w-32"
        src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"
        alt="Microsoft ASP.NET">
      <div id="searchbar" class="flex justify-end items-center w-4/5">
        <ul class="w-11/12 hidden lg:flex  justify-end items-center font-semibold list-none uppercase text-black">

          <li class=" mr-8 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
            <a id="about" class="hover-btn  " href="#">
              About
            </a>
          </li>


          <li id="services" class="mr-8 cursor-pointer hover:text-blue-500">
            <a href="#">
              Services
            </a>
          </li>


          <li id="industries" class="mr-8 cursor-pointer hover:text-blue-500">
            <a href="#">
              Industries
            </a>
          </li>

          <li class="mr-8 cursor-pointer hover:text-blue-500">
            <a href="#">
              Case studies
            </a>
          </li>
          <li class="mr-8 cursor-pointer hover:text-blue-500">
            <a href="#">Blog</a>
          </li>
          <li class="flex justify-center items- center bg-blue-700 text-white px-4 py-2 mr-6 hover:bg-blue-900">
            <a href="/contact-us">Let's talk</a>
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
</header>
  
  <div class="px-10 md:px-16 lg:px-32 py-4">
    <div class="flex flex-row">
      <a href="index.html" class="text-gray-600 hover:text-blue-500">Home</a>
      <p class="mx-1 md:mx-3">></p>
      <p>Management Team</p>
    </div>
  </div>

  <!--Komil Sobitov/ Team Management -->
  <div class="mx-auto px-10 md:px-16 lg:px-32 mb-10">
    <h1 class="text-blue-700 text-4xl font-medium">Management Team</h1>
    <div class="flex justify-center mt-5 mb-14">
      <div class="flex flex-col w-full lg:w-1/2 sm:w-2/3 md:w-72 justify-center items-center">
        <img src="https://www.scnsoft.com/about/team/image-thumb__3307__marketingPerson/kuraev.png" class="w-36 mb-3" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3">
          Nikolay Kurayev
        </p>
        <p class="text-gray-400 text-lg">CEO, ScienceSoft</p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
          Mr. Kurayev has been leading our company for 21 years. He holds a
          Master’s in Physics from BSUIR and has published 12 papers on
          computer modeling in electronics. Under his leadership, ScienceSoft
          achieved 10 times growth.
        </p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-1 overflow-hidden justify-center items-start xl:-mx-2">
      <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
        <img src="https://www.scnsoft.com/about/team/image-thumb__3309__marketingPerson/shyklo.png"
          class="w-36 mb-3 mx-auto" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
          Nikolay Kurayev
        </p>
        <p class="text-gray-400 text-lg text-center">
          Chief Technology Officer
        </p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
          Mr. Shiklo entered ScienceSoft in 1997 and became CTO in 2003. He
          holds a Master’s in Computer Science from BSU. Under his management,
          we launched Mobile, SharePoint and CRM development services and grew
          to 700 IT experts.
        </p>
      </div>
  
      <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
        <img src="https://www.scnsoft.com/about/team/image-thumb__3304__marketingPerson/borokha.png"
          class="w-36 mb-3 mx-auto" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
          Nikolay Kurayev
        </p>
        <p class="text-gray-400 text-lg text-center">
          CChief Financial Officer
        </p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
          With a Bachelor of Science in Economics from MSU, Mrs. Borokha
          joined our team in 1992, contributing 28 years of financial and
          management experience.
        </p>
      </div>
  
      <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
        <img src="https://www.scnsoft.com/about/team/image-thumb__3308__marketingPerson/radkevich.png"
          class="w-36 mb-3 mx-auto" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
          Nikolay Kurayev
        </p>
        <p class="text-gray-400 text-lg text-center">PhD, VP Sales and BD</p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
          Mr. Radkevitch has been ScienceSoft’s VP for 12 years. He holds a
          PhD in Management from RSM Erasmus University. He is an author of a
          number of academic and business papers on IT outsourcing, online
          services procurement and online IT marketplaces.
        </p>
      </div>
  
      <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4">
        <img src="https://www.scnsoft.com/about/team/image-thumb__3306__marketingPerson/brantley.png"
          class="w-36 mb-3 mx-auto" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
          Nikolay Kurayev
        </p>
        <p class="text-gray-400 text-lg text-center">CEO, ScienceSoft USA</p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
          Joined our team in 2015, Mr. Brantley holds a BSc in Business
          Management from the University of South Carolina. He brought in
          nearly 20 years of management experience in technology and finance.
        </p>
      </div>
      <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/4 xl:my-2 xl:px-2 xl:w-1/4 mt-8">
        <img src="https://www.scnsoft.com/about/team/image-thumb__11521__marketingPerson/sakovich.png"
          class="w-36 mb-3 mx-auto" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
          Natallia Sakovich
        </p>
        <p class="text-gray-400 text-lg text-center">
          CEO, ScienceSoft Finland
        </p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
          With a Bachelor’s degree in Mathematics, Mrs. Sakovich entered
          ScienceSoft in 2005 and worked with us for two years in different
          positions from software development to project management. From 2008
          she continued her career in Netherlands and rejoined our team in
          2018. Mrs. Sakovich is a Microsoft Certified Professional and
          Microsoft Certified Technology Specialist, and she also holds the
          Professional Scrum Developer certificate.
        </p>
      </div>
    </div>
  </div>

  <div onclick="scrollToUp()"
    class="fixed bottom-3 left-3 bg-blue-700 opacity-50 z-50 flex justify-center items-center cursor-pointer w-8 h-8 rounded-full text-white hover:opacity-100">
    <i class="fa fa-chevron-up text-white"></i>
  </div>
    <!-- FOOTER -->
    <footer class="footer bg-blue-900 relative px-4 md:px-10  lg:px-16 py-6 ">
      <div class="">
        <div class="">
          <div class=" sm:mt-0 sm:w-full sm:px-8 flex-col md:flex-row flex-wrap  justify-between">
            <div class="flex justify-between items-center w-full flex-wrap">
              <div class="flex justify-between w-full items-center flex-wrap">
                <span>
                  <img class="w-56 mt-4"
                    src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31"
                    alt="Microsoft ASP.NET">
                </span>
                <span class="my-2 text-white flex flex-row items-start text-base  mt-4">
                  <i class="fas fa-map-marker-alt"></i>
                  <a href="#" class="text-white text-opacity-70 text-md hover:text-white ml-2">5900 S. Lake Forest Drive
                    Suite 300, <br />
                    McKinney, Dallas area, TX 75070</a>
                </span>
                <span class="my-2 text-white text-base mr-5 mt-4">
                  <i class="fas fa-phone-alt"></i>
                  <a href="#" class="text-white text-opacity-70 text-md hover:text-white ml-2">+1 214 306 68 37</a>
                </span>
                <span class="my-2 text-white text-base mr-5 mt-4">
                  <i class="fas fa-envelope"></i>
                  <a href="#"
                    class="text-white text-opacity-70 text-md hover:text-white underline ml-2">contact@scnsoft.com</i></a>
                </span>
                <div class="my-2 flex mt-4 w-full md:w-16">
                  <a href="#" class="text-white   hover:text-gray-50 mr-3"><i class="fab fa-dribbble"></i></a>
                  <a href="#" class="text-white  hover:text-gray-50 mr-3"> <i class="fab fa-linkedin-in"></i></a>
                  <a href="#" class="text-white   hover:text-gray-50 mr-3"> <i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="text-white fa-2xl  hover:text-gray-50 mr-3"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>
            <hr class="mt-5 border-t-2 border-gray-100 flex flex-wrap items-center">
            <div class="flex justify-between flex-wrap w-full mt-5">
              <div class="flex flex-row flex-wrap ">
                <span class="text-base underline w-full md:w-48 text-white text-opacity-70 mr-5 hover:text-white">About
                  ScienceSoft</span>
                <span class="w-full md:w-48"><a href="#"
                    class="text-base text-white  underline mr-5 text-opacity-70 text-md hover:text-white">Join Us as an
                    agent</a></span>
                <span class="w-full md:w-48"><a href="#"
                    class="text-base  text-white  underline mr-5 text-opacity-70 text-md hover:text-white">Privacy
                    Policy</a></span>
                <span class="w-full md:w-48"><a href="#"
                    class="text-base text-white  underline mr-5 text-opacity-70 text-md hover:text-white">Terms of
                    Use</a></span>
              </div>
              <div>
                <span class="my-2 text-base text-white text-opacity-70 text-md ">For press inquries:<a
                    href="mailto: contact@scnsoft.com"
                    class="text-white underline text-opacity-70 text-md hover:text-white">
                    contact@scnsoft.com</a></span>
              </div>
            </div>
            <div class="flex  mt-5">
              <span class=" text-white text-opacity-70  mt-4 mb-10 md:mt-0 mb-2"> 2021 ScienceSoft USA Corporation.
                All rights reserved.</span>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="js/index.js"></script>
    <script>
      $(document).ready(function () {
        $('.customer-logos').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1000,
          arrows: false,
          dots: false,
          pauseOnHover: false,
          responsive: [{
            breakpoint: 768,
            setting: {
              slidesToShow: 4
            }
          }, {
            breakpoint: 520,
            setting: {
              slidesToShow: 3
            }
          }]
        });
      });
    </script>
</body>
</html>