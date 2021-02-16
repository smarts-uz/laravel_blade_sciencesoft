<div class="flex flex-col">
    <p class="underline text-gray-800 uppercase text-sm font-bold mb-10">{{ _trans("SOFTWARE DEVELOPMENT")  }}</p>
    <ul class="flex flex-col text-sm">
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class='hover:text-blue-500'>{{ _trans("Software Consulting")  }}</a>
            <svg onclick="activeTabsAside('software-consulting')"s class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="software-consulting">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Agile Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("CRM Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Ecommerce Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Data Analytics Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("IoT Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Computer Vision Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("IT Services Management Consulting")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class=' hover:text-blue-500'>{{ _trans("Custom Software Development")  }}</a>
          <svg onclick="activeTabsAside('custom-software-development')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="custom-software-development">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Learning Management System")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Content Management")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href='#' class=" hover:text-blue-500">{{ _trans("Software Development Outsourcing")  }}</a>
          <svg onclick="activeTabsAside('software-development-outsourcing')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="software-development-outsourcing">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Dedicated Development Team")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("IT Staff Augmentation")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Team Configuration")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class=" hover:text-blue-500">{{ _trans("Software Product Development")  }}</a>
          <svg onclick="activeTabsAside('software-product-development')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="software-product-development">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("MVP Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Startup Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Software Development for Startups")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("How to Build a Software Startup")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1  hover:text-blue-500">
            <a href="#">{{ _trans("Saas Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1">
            <span class="flex justify-between items-center pr-2">
              <a href="#" class='hover:text-blue-500'>{{ _trans("Saas Development")  }}</a>
              <svg
               onclick="activeTabsAside('sass-development')"
               class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </span>
            <a href="#" class='hidden p-2 pl-4 hover:text-blue-500' id="sass-development">{{ _trans("SaaS HR Sytem")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("How to Build a Saas Startup")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Saas Enhancement")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("ERP System Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("HR System Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("VR Development")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer text-gray-800 font-semibold">
        <span class='flex justify-between items-center bg-gray-100 p-2'>
          <a href="#" class=" hover:text-blue-500">{{ _trans("Technologies")  }}</a>
          <svg onclick="activeTabsAside('technologies')" class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </span>
        <ul class="hidden flex-col w-full font-normal" id="technologies">
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Java Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans(".NET Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("PHP Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("C++ Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Qt Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Python Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Golang Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Javascript Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1 hover:text-blue-500">
            <a href="#">{{ _trans("Angular Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1">
            <span class="flex justify-between items-center pr-2">
              <a href="#" class='hover:text-blue-500'>{{ _trans("Node.js Development")  }}</a>
              <svg
               onclick="activeTabsAside('nodejs-development')"
               class="-mr-1 ml-2 h-5 w-5 text-blue-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </span>
            <a href="#" class='hidden p-2 pl-4 hover:text-blue-500' id="nodejs-development">{{ _trans("Node.js Consulting")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1  hover:text-blue-500">
            <a href="#">{{ _trans("MEAN Stack Development")  }}</a>
          </li>
          <li class="bg-gray-100 py-2 pl-4 mb-1  hover:text-blue-500">
            <a href="#">{{ _trans("Configure Yout Team")  }}</a>
          </li>
        </ul>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("Research and Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("Feasibility Study")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("Embedded Software Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("API Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("Large-Scale Software Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("Blockchain  Software Development")  }}
        </a>
      </li>
      <li class="w-full mb-1 cursor-pointer bg-gray-100 p-2 text-gray-800 font-semibold hover:text-blue-500">
        <a href="#">
          {{ _trans("Software Maintenance and Support")  }}
        </a>
      </li>
    </ul>
  </div>
