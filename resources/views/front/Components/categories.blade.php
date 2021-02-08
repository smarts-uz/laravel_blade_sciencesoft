<div class="px-10 md:px-16 lg:px-16 py-4 ">
    <div class="flex justify-between items-center">
      <a href="/">
        <img class="w-32" src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" alt="Microsoft ASP.NET">
      </a>
      <div id="searchbar" class="flex justify-end items-center w-4/5">
        <ul class="w-11/12 hidden  lg:flex  justify-end items-center font-semibold list-none uppercase text-black">
            @foreach ($categories as $category)
                <li  class="  flex mr-8 border-white hover:border-blue-700 cursor-pointer hover:text-blue-500">
                    <a id="about" class=" relative py-6" href="#">
                        {{ $category->name }}
                    <div id="aboutHover" class=" hidden flex absolute left-0 z-40 px-10  justify-evenly top-20 border-t-2 border-b-2 bg-white items-start py-6">
                    <div class="w-1/5 ">
                        <h1 class="mb-2 font-bold">{{ $category->name }}</h1>
                        <hr class="border-b-2 w-12 border-yellow-500">
                        <p class="mt-4 text-black font-medium">{{ $category->description }}</p>
                        <p class=" mt-4 text-black font-medium">Can't find what you need?</p>
                        <div class="bg-blue-700 px-6 py-2 text-white mt-4 w-36 text-center"><a  href="#">ASK US</a></div>
                    </div>
                    @if(empty($category->path_blade))
                        @foreach ($category->subCategories as $subCategory)
                            <div class="w-1/5 list-none">
                                <h1 class="mb-2 font-bold">{{ $subCategory->name }}</h1>
                                <hr class="border-b-2 w-12 border-yellow-500">

                                <ul>
                                    @if($subCategory->active && count($subCategory->subCategories))
                                        @foreach ($subCategory->subCategories as $subSubCategory)
                                            {{-- <p>{{ $subSubCategory->name }}-{{ $subSubCategory->path_blade }}</p> --}}

                                            <a class="font-normal" href="{{route('getBlade', ['page'=>$subSubCategory->path_blade??'404'])}}"><li class="mt-4 text-black hover:text-blue-700">{{ $subSubCategory->name }} </li></a>


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
                    @else
                        <a id="{{ $category->name }}" class=" relative py-6" href="{{route('getBlade', ['page'=>$category->path_blade??'404'])}}">
                            {{$category->name}}
                        </a>
                    @endif
                    </a>
                </li>
            @endforeach
            <li class="flex justify-center items- center bg-blue-700 text-white px-4 py-2 mr-6 hover:bg-blue-900">
                <a  href="/contact-us">Let's talk</a>
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
