@extends('front.layout')

@section('css')

@endsection

@section('main')




  <div class=" flex flex-col lg:flex-row my-10 mx-6 md:mx-16 lg:mx-24">
    <div class="w-full lg:w-1/3  lg:flex flex-col mr-3">
     
      <div class="text-gray-600 w-full cursor-pointer hover:text-blue-600 mb-4">
        <p class="border-b-2 py-1 uppercase font-bold border-gray-500 hover:border-blue-600">Careers</p>
      </div>
      <ul class="flex flex-col">
        <li class="flex flex-row items-start p-3 bg-blue-700 text-white outline-none border-none">
          <i class="fas fa-user mr-2"></i>
          <p class="uppercase">Hr department contact</p>
        </li>
        <li class="flex flex-row items-start p-3 bg-gray-200 text-gray-500 outline-none border-none my-1">
          <i class="fa fa-envelope mr-2"></i>
          <p class="flex flex-col">
            <span class="mb-1">Send us your resume</span>
            <a href="mailto:job@scnsoft.com" class="">job@scnsoft.com</a>
          </p>
        </li>
        <li class="flex flex-row items-start p-3 bg-gray-200 text-gray-500 outline-none border-none">
          <i class="fa fa-phone mr-2"></i>
          <p class="flex flex-col">
            <span class="mb-1">Contact us by phone</span>
            <a href="tel:+998-99-873-48-36" class="">(+998) 99 873-48-36</a>
          </p>
        </li>
        <li class="flex flex-row items-start p-3 bg-gray-200 text-gray-500 outline-none border-none my-1">
          <i class="fa fa-comment mr-2"></i>
          <div class="flex flex-col">
            <span class="mb-1">Get in via Skype</span>
            <span class="text-gray-900 text-xs">
              <p>Vladimir Stepuro</p>
              <a href="" class="flex flex-row items-center text-blue-600">
                <i class="fab fa-skype fa-2x"></i>
                <p class="ml-1">vladimirst2</p>
              </a>
            </span>
          </div>
        </li>
      </ul>
      <a href="../contact-us.html" class="w-full uppercase bg-yellow-600 text-white text-xl flex flex-row items-center p-3 hover:bg-yellow-300">
        <i class="fas fa-upload fa-1x"></i>
        <p>Upload your cv</p>
      </a>
    </div>
    <div class="w-full lg:w-2/3">
      <div class="px-1 md:px-8 lg:px-12 flex flex-col">
       
        <h1 class="py-6 border-gray-500 border-b text-blue-600 font-bold text-3xl md:text-4xl my-3">Careers at ScienceSoft</h1>
        <h1 class="py-6 border-gray-500 border-b text-blue-600 font-bold text-2xl md:text-3xl mt-6 mb-3">Software Development Department</h1>
        <ul class="flex flex-col">
          <li onclick="DropDownOne()" class="flex flex-col">
            <div class="flex justify-between items-center text-gray-500 text-sm lg:text-xl cursor-pointer hover:text-blue-500 hover:underline">
              <div class="flex flex-row">
                <span class="mr-5 px-3 py-1 hover:no-underline flex flex-row uppercase bg-yellow-400 text-white">
                  <i class="fa fa-flame"></i>
                  <p>hot</p>
                </span>
                <p>Front-end developer (React / React Native)</p>
              </div>
              <p class="text-yellow-400 hover:text-blue-500">Details</p>
            </div>
            <div id="dropdown-one" class="hidden flex-col mt-2 ml-10">
              <h1 class="text-xl lg:text-2xl font-bold">Requirements:</h1>
              <ul style="list-style: square;" class="flex flex-col text-sm lg:text-xl">
                <li class="text-blue-600">
                  <span class="text-gray-600">Srtong knowledge of React, React Native,</span>
                </li>
                <li class="text-blue-600">
                  <span class="text-gray-600">Srtong knowledge of Redux/Flux, JavaScript, TypeScript, HTML5, CSS3, SASS/LESS, Responsive design;</span>
                </li>
                <li class="text-blue-600">
                  <span class="text-gray-600">Srtong knowledge of React, React Native,</span>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Scrolling Back -->
  
@endsection


@section('js')

@endsection

