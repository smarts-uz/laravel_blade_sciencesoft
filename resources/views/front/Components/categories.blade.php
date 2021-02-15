<div class="md:px-16 lg:px-16 px-6 w-full pt-1 top-0 left-0 fixed bg-white shadow z-50">
    <div class="flex justify-between items-center">
      <a href="/">
        <img class="w-32" src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" alt="Microsoft ASP.NET">
      </a>
      <div id="searchbar" class="flex justify-end items-center w-4/5">
        <ul class="w-11/12 hidden lg:flex justify-end items-center list-none">
            @foreach ($categories as $category)
                @if($category->active)
                    <li class="flex mr-10 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
                        @if(empty($category->path_blade) )
                            <a id="about" class="relative" href="#">
                                <h1 class="font-bold hover:text-blue-500 border-b-4 border-white hover:border-blue-500 duration-300 py-4 text-black">{{ $category->name }}</h1>
                            <div id="aboutHover" class="hidden duration-500 flex absolute left-0 z-40 top-16 border-t-2 border-b-2 bg-white justify-start py-5 px-10">
                            <div class="w-1/3 px-3">
                                <h1 class="mb-2 font-bold text-black uppercase">{{ $category->name }}</h1>
                                <hr class="border-b w-12 border-yellow-500">
                                <p class="mt-4 text-black text-sm font-normal">{{ $category->description }}</p>
                                <p class=" mt-4 text-black font-bold">Can't find what you need?</p>
                                <div class="bg-blue-700 px-6 py-2 text-sm font-bold text-white mt-4 w-36 text-center"><a  href="#">ASK US</a></div>
                            </div>

                            @foreach ($category->subCategories as $subCategory)
                                <div class="w-1/5 list-none">
                                    <h1 class="mb-2 font-bold text-black uppercase">{{ $subCategory->name }}</h1>
                                    <hr class="border-b w-12 border-yellow-500">
                                    <ul>
                                        @if($subCategory->active && count($subCategory->subCategories))
                                            @foreach ($subCategory->subCategories as $subSubCategory)
                                                {{-- <p>{{ $subSubCategory->name }}-{{ $subSubCategory->path_blade }}</p> --}}

                                                <a class="font-normal" href="{{route('getBlade',
                                                ['page'=>$subSubCategory->path_blade??'404'])}}">
                                                    <li class="mt-4 text-black hover:text-blue-700 text-sm  transition
                                                duration-300 ease-in-out transform hover:translate-x-3">
                                                @if($subSubCategory->icon)<img class="h-8 w-8" src="/uploads/categories/{{ $subSubCategory->icon }}" alt="logo">@else<img class="h-8 w-8" src="{{ asset('images/default-image.png') }}" alt="logo"> @endif
                                                {{ $subSubCategory->name }}
                                            
                                                </li></a>


                                                {{-- @isset($subCategory->path_blade)
                                                hi
                                                    @includeIf('front.pages.'.$subCategory->path_blade, ['current_page' => $subCategory->path_blade])
                                                @endisset --}}

                                                {{-- <a href="{{$subCategory->path_blade}}"><li class="mt-4 text-black hover:text-blue-700">{{ $subSubCategory->name }} </li></a> --}}
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            @endforeach
                            </a>
                        @else
                            <a id="{{ $category->name }}" class="font-bold border-b-4 border-white hover:border-blue-500 duration-300 relative py-4" href="{{route('getBlade', ['page'=>$category->path_blade??'404'])}}">
                                {{$category->name}}
                            </a>
                        @endif

                    </li>
                @endif
            @endforeach
            <li class="flex justify-center rounded items-center bg-blue-700 text-white px-4 py-2 mr-6 hover:bg-blue-900">
                <a class="text-sm font-bold" href="/contact-us">Let's talk</a>
            </li>
        </ul>
        <!-- Search Bar -->
        <div
          onclick="searchBarClick()"
          class="flex justify-center cursor-pointer items-center bg-blue-700 rounded-full text-white p-3 hover:bg-blue-900">
          <i class="fa fa-search fa-xl"></i>
        </div>
        <div onclick="openSidebarMenu()" class="flex lg:hidden ml-4 cursor-pointer">
          <i class="fas fa-bars"></i>
        </div>
      </div>
      <div id="exitbar" class="w-full py-0 lg:py-2 duration-300 justify-between ml-4 items-center hidden bg-white">
        <input type="text" name="" class="border focus:border-blue-500 duration-300 border-gray-300 rounded focus:outline-none w-full z-50 mr-1 py-0 lg:py-2 lg:px-3 px-3">
        <div class="flex w-10 h-10 justify-center items-center z-50 rounded-full">
          <i onclick="exitClick()" class="fa fa-times text-gray-800 text-2xl z-50"></i>
        </div>
      </div>
    </div>
  </div>
