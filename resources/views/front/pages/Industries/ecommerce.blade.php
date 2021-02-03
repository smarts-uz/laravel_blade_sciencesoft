@extends('front.layout')

@section('css')

@endsection

@section('main')


<nav class="nav px-32 py-2">
    <div class="flex items-center justify-between">
      <div>
        <div id="logo" class="flex relative px-4 py-2 items-center justify-between w-64">
          <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" width="50%" alt="Logo">
          <hr class="w-0.5 h-10 border-none bg-gray-300">
          <h3 class="font-bold text-gray-800">eCommers</h3>
          <i class="fas fa-chevron-down text-gray-500 text-xl"></i>
        </div>
        <div id="logoHover" class="absolute px-4 py-2 bg-white w-64 z-50 hidden">
          <a href="#" class="hover:text-blue-400 text-gray-500 py-2 text-lg"> <i class="fab text-xl fa-shopify"></i> eCommers by ZetSoft </a>
          <a href="#" class="hover:text-blue-400 text-gray-500 py-2 text-lg"> <i class="fas text-xl fa-globe"></i> ZetSoft Global </a>
        </div>
      </div>
      <i class="fas fa-search"></i>
    </div>
    <div class="flex justify-between items-center">
      <div id="searchbar" class="flex justify-between items-center  w-4/5">
        <ul class="w-11/12 hidden  lg:flex items-center font-semibold list-none uppercase text-black">
          <li  class="  flex mr-8 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
            <a id="about" class=" relative py-6" href="#">
            About
          </a>
          </li>
          <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
            <a class="py-6" id="service" href="#">
            Services
            <div id="serviceHover" class="hidden flex absolute px-32 left-0 justify-start top-32 border-t-2 border-b-2 bg-white items-start py-6 w-full">
              <div class="w-1/3 list-none">
                <h1 class="mb-2 ">
                  Ecommerce</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul >
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Service</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Consulting</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Customer Experience Consulting</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Website Design</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Development</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Custom Ecommerce Development</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Implementation</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Testing</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Audit</li></a>
              </ul>
              </div>
              <div class="w-1/6 list-none">
                <h1 class="mb-2">Digital Consulting</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Digital Consulting</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Digital Strategy Consulting</li></a>
                </ul>
              </div>
            </div>
          </a>
          </li>
          <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
            <a class="py-6" id="service" href="#">
            Industries
          </a>
          </li>
          <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
            <a class="py-6" id="service" href="#">
            How To Start 
            <div id="serviceHover" class="hidden flex absolute left-0 px-32 justify-start top-32 border-t-2 border-b-2 bg-white items-start py-6 w-full">
              <div class="w-full list-none">
                <h1 class="mb-2 ">
                  Service types</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Start an Ecommerce Business</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Start an Online Retail Business</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Lunch an Online Store</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">How to Build an Online Marketplace</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Business License to Sell online</li></a>
              </ul>
              </div>
            </div>
          </a>
          </li>
          <li id="services" class="mr-8 cursor-pointer z-40 hover:text-blue-500">
            <a class="py-6" id="service" href="#">
            Solutions
            <div id="serviceHover" class="hidden flex absolute left-0 px-32 justify-start top-32 border-t-2 border-b-2 bg-white items-start py-6 w-full">
              <div class="w-1/3 list-none">
                <h1 class="mb-2 ">
                  By Business Model</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">B2B Ecommerce Platforms</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Marketplace Software</li></a>
              </ul>
              </div>
              <div class="w-1/3 list-none">
                <h1 class="mb-2  ">By Type</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Ecommerce Portals</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Multi-Store Ecommerce</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Virtual online Store</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Auction WebSite</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Custom Shopping Cart</li></a>
              </ul>
              </div>
              <div class="w-1/3 list-none">
                <h1 class="mb-2  ">Integrations</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Third-Party Integrations</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Point of sale (POS)</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">CRM</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">ERP</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Analytics</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Personalization</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Security</li></a>
                </ul>
              </div>
              <div class="w-1/3 list-none">
                <h1 class="mb-2  ">Demo</h1>
                <hr class="border-b-2 w-12 border-yellow-500">
                <ul>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">B2C Store</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">B2B Store</li></a>
                <a href="#"><li class="mt-4 text-black hover:text-blue-700">Online Grocery Store</li></a>
                </ul>
              </div>
            </div>
          </a>
          </li>
        </ul>
      </div>
      <li class="flex justify-center items-center bg-blue-700 text-white px-4 py-2 hover:bg-blue-900">
        <a  href="#">Let's talk</a>
        </li>
    </div>
  
  </nav>

  

  

@endsection


@section('js')

@endsection