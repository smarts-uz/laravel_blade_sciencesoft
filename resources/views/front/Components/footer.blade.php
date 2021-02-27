
<!-- footer -->
  <div onclick="scrollToUp()"
    class="fixed bottom-3 left-3 bg-blue-700 opacity-50 z-50 flex justify-center items-center cursor-pointer w-8 h-8 rounded-full text-white hover:opacity-100">
    <i class="fa fa-chevron-up text-white"></i>
  </div>
  <!-- FOOTER -->
  <footer class="footer bg-blue-900 relative md:px-16 lg:px-16 px-6 py-6 ">
        <div class="flex-col md:flex-row flex-wrap justify-between">
          <div class="flex justify-between items-center w-full flex-wrap">
            <div class="flex justify-between w-full items-center flex-wrap">
              <span>
                <a href="/">
                <img class="w-56 mt-4"
          src="{{ asset('assets/images/Group 24.png') }}"
          alt="Microsoft ASP.NET">
                </a>
              </span>
              <span class="my-2 text-white flex flex-row items-start text-base mt-4">
                <i class="fas fa-map-marker-alt"></i>
                <a href="#" class="text-white text-opacity-70 text-md hover:text-white ml-2">{{ _trans("100027, No. 2, Bog 'str., ")  }}
                  {{ _trans("Shayxontohur district, ")  }}<br/>
                  {{ _trans("Tashkent, Uzbekistan")  }}</a>
              </span>
              <span class="my-2 text-white text-base mr-5 mt-4">
                <i class="fas fa-phone-alt"></i>
                <a href="#" class="text-white text-opacity-70 text-md hover:text-white ml-2">+998 71 200-33-63</a>
              </span>
              <span class="my-2 text-white text-base mr-5 mt-4">
                <i class="fas fa-envelope"></i>
                <a href="#" class="text-white text-opacity-70 text-md hover:text-white hover:underline ml-2">contact@scnsoft.com</i></a>
              </span>
              <div class="my-2 flex w-full md:w-16">
                <a href="#" class="text-white   hover:text-gray-50 px-1"><i class="fab fa-dribbble"></i></a>
                <a href="#" class="text-white  hover:text-gray-50 px-1"> <i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="text-white   hover:text-gray-50 px-1"> <i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white   hover:text-gray-50 px-1"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
          <hr class="mt-5 border-t-2 border-gray-100 flex flex-wrap items-center">
          <div class="flex justify-between flex-wrap w-full mt-5">
            <div class="flex flex-row flex-wrap ">
              <span class="text-base hover:underline w-full md:w-48 text-white text-opacity-70 mr-5 hover:text-white">{{_trans("About
                TeamPRO")}}</span>
              <span class="w-full md:w-48"><a href="#"
                  class="text-base text-white  hover:underline mr-5 text-opacity-70 text-md hover:text-white">{{_trans("Join Us as an
                  agent")}}</a></span>
              <span class="w-full md:w-48"><a href="#"
                  class="text-base  text-white  hover:underline mr-5 text-opacity-70 text-md hover:text-white">{{_trans("Privacy Policy")}}</a></span>
              <span class="w-full md:w-48"><a href="#"
                  class="text-base text-white  hover:underline mr-5 text-opacity-70 text-md hover:text-white">{{_trans("Terms of Use")}}</a></span>
            </div>
            <div>
              <span class="my-2 text-base text-white text-opacity-70 text-md ">{{_trans("For press inquries:")}}<a
                  href="mailto: contact@teampro.com" class="text-white px-2 hover:underline text-opacity-70 text-md hover:text-white">
                  {{_trans("contact@teampro.com")}}</a></span>
            </div>
          </div>
          <div class="flex mt-5">
            <span class="text-white text-opacity-70  mt-4 mb-10 md:mt-0 mb-2">{{ _trans("2021 TeamPRO USA Corporation.")  }}
              {{ _trans("All rights reserved.")  }}</span>
          </div>
        </div>
      </div>
    </div>
  </footer>

<!-- endfooter -->
