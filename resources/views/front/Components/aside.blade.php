<div class="flex flex-col">
    <p class="underline text-gray-800 uppercase text-sm font-bold mb-10">{{ t("SOFTWARE DEVELOPMENT")  }}</p>
    <ul class="flex flex-col text-sm">
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class='hover:text-blue-500'>{{ t("Software Consulting")  }}</a>
            <svg onclick="activeTabsAside('software-consulting')"s class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="software-consulting">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Agile Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("CRM Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Ecommerce Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Data Analytics Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("IoT Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Computer Vision Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("IT Services Management Consulting")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class=' hover:text-blue-500'>{{ t("Custom Software Development")  }}</a>
          <svg onclick="activeTabsAside('custom-software-development')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="custom-software-development">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Learning Management System")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Content Management")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href='#' class=" hover:text-blue-500">{{ t("Software Development Outsourcing")  }}</a>
          <svg onclick="activeTabsAside('software-development-outsourcing')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="software-development-outsourcing">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Dedicated Development Team")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("IT Staff Augmentation")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Team Configuration")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class=" hover:text-blue-500">{{ t("Software Product Development")  }}</a>
          <svg onclick="activeTabsAside('software-product-development')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="software-product-development">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("MVP Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Startup Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Software Development for Startups")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("How to Build a Software Startup")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1  hover:text-blue-500">
            <a href="#">{{ t("Saas Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1">
            <span class="flex justify-between items-center pr-2">
              <a href="#" class='hover:text-blue-500'>{{ t("Saas Development")  }}</a>
              <svg
               onclick="activeTabsAside('sass-development')"
               class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </span>
            <a href="#" class='hidden p-2 pl-4 hover:text-blue-500' id="sass-development">{{ t("SaaS HR Sytem")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("How to Build a Saas Startup")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Saas Enhancement")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("ERP System Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("HR System Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("VR Development")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class=" hover:text-blue-500">{{ t("Technologies")  }}</a>
          <svg onclick="activeTabsAside('technologies')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="technologies">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Java Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t(".NET Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("PHP Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("C++ Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Qt Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Python Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Golang Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Javascript Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ t("Angular Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1">
            <span class="flex justify-between items-center pr-2">
              <a href="#" class='hover:text-blue-500'>{{ t("Node.js Development")  }}</a>
              <svg
               onclick="activeTabsAside('nodejs-development')"
               class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </span>
            <a href="#" class='hidden p-2 pl-4 hover:text-blue-500' id="nodejs-development">{{ t("Node.js Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1  hover:text-blue-500">
            <a href="#">{{ t("MEAN Stack Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1  hover:text-blue-500">
            <a href="#">{{ t("Configure Yout Team")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("Research and Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("Feasibility Study")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("Embedded Software Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("API Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("Large-Scale Software Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("Blockchain  Software Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ t("Software Maintenance and Support")  }}
        </a>
      </li>
    </ul>
  </div>
