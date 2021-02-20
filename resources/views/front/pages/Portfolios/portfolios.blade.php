@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="border-b border-gray-300 pb-3 mx-8">
        <p class="text-4xl mb-4 font-bold tracking-wide">Portfolio</p>
        <div class="flex flex-wrap md:justify-evenly lg:justify-evenly">
            <div class="flex items-center">
                <label class="font-bold text-xl pr-2" for="technology">Technology:</label>
                <div x-data="{open:false}"  class="p-2 border-none relative outline-none bg-transparent text-blue-500 text-xl font-bold" name="technology" id="technology">
                    <div class="text-blue-400 w-60 cursor-pointer flex justify-between items-center" @click="open = true">All <i class="fas fa-chevron-down"></i></div>
                    @php $all=[]; @endphp
                    @foreach($portfolios as $portfolio)
                        @php
                            if($portfolio->technology){
                             $tags = json_decode($portfolio->technology);
                             $all = array_unique(array_merge($all, $tags));
                            }
                        @endphp
                    @endforeach
                        <ul x-show="open" @click.away="open = false" class="absolute border border-gray-200 bg-white z-30">
                            @foreach($all as $tech)
                            <li class="text-black hover:bg-blue-400 hover:text-white duration-100 px-5 py-1" value="{{$tech}}">
                                <a href="{{route('getPortfolioByTechnology', ['technology_name' => $tech])}}">{{$tech}}</a></li>
                            @endforeach
                        </ul>
                </div>
            </div>
            <div class="flex items-center">
                <label class="font-bold text-xl pr-2" for="technology">Industries:</label>
                <div x-data="{open:false}"
                    class="p-2 border-none relative outline-none bg-transparent text-blue-500 text-xl font-bold" name="industry" id="industry">
                    <div class="text-blue-400 w-60 cursor-pointer flex justify-between items-center" @click="open = true">All <i class="fas fa-chevron-down"></i></div>
                    @php $all=[]; @endphp
                    @foreach($portfolios as $portfolio)
                        @php
                            if($portfolio->industry){
                             $tags = json_decode($portfolio->industry);
                             $all = array_unique(array_merge($all, $tags));
                            }
                        @endphp
                    @endforeach
                    <ul x-show="open" @click.away="open = false" class="absolute border border-gray-200 bg-white z-30">
                    @foreach($all as $tech)
                        <li class="text-black hover:bg-blue-400 hover:text-white duration-100 px-5 py-1" value="{{$tech}}">
                            <a href="{{route('getPortfolioByTechnology', ['industry_name' => $tech])}}">{{$tech}}</a>
                        </li>
                    @endforeach
                        </ul>
                </div>
            </div>
        </div>




        </div>
        <br>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2">
            @foreach($portfolios as $portfolio)
                <div class="">
                    <div class="bg-blue-100 mx-auto overflow-hidden rounded-xl">
                        <img class="w-full transition duration-500 ease-in-out transform hover:scale-110"
                             src="/uploads/portfolios/{{ $portfolio->image }}"
                             alt=""/>
                    </div>
                    <div>
                        <p class="mt-3 mb-2 text-blue-500">{{ $portfolio->name }}</p>
                        <p class="font-bold text-2xl">
                            {{ $portfolio->title }}
                        </p>
                        <p>{{ $portfolio->sub_title }}</p>
                        <div class="grid grid-cols-3 gap-4 sm:mb-4">
                            @foreach($categories as $category)
                                @if($category->category_id == 69)
                                    {{$category->icon}}
                                    <div class="my-2 rounded-full p-1 border-2 border-light-blue-500">
                                        <img class="mx-auto" src="{{ asset('uploads/categories/icons/' . $category->icon) }}" alt=""/>
                                    </div>
                                @endif
                            @endforeach
                            <div class="my-2 rounded-full p-1 border-2 border-light-blue-500">
                                <img
                                    class="mx-auto"
                                    src="https://www.brainvire.com/wp/wp-content/uploads/2020/06/jwplayer.png"
                                    alt=""
                                />
                            </div>
                            <div class="my-2 rounded-full p-1 border-2 border-light-blue-500">
                                <img
                                    class="mx-auto"
                                    src="https://www.brainvire.com/wp/wp-content/uploads/2020/09/ios.png"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{--            @endforeach--}}
        </div>
        <br /><br>
        <div class="flex justify-center">
            <button class="p-2 rounded bg-blue-700 text-white focus:outline-none active:bg-blue-900">
                Load More
            </button>
        </div>
    </div>

@endsection


@section('js')

@endsection

