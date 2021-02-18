@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="border-b border-gray-300 pb-3 mx-8">
        <p class="text-4xl mb-4 font-bold tracking-wide">Portfolio</p>
        <div class="flex flex-wrap md:justify-evenly lg:justify-evenly">
            <div class="">
                <label class="font-bold text-xl pr-2" for="technology">Technology:</label>
                <select class="p-2 border-none outline-none bg-transparent text-blue-500 text-xl font-bold" name="technology" id="technology">
                    <option class="text-black" value="crm">Select Technology</option>
                    @foreach($technologies as $technology)
                        <option class="text-black" value="Digital Marketing"><?php
                            print_r($technology->name)
                            ?></option>
                    @endforeach
                </select>
            </div>

            <div class=""><label class="font-bold text-xl pr-2" for="technology">Industries:</label>
                <select
                    class="p-2 border-none outline-none bg-transparent text-blue-500 text-xl font-bold" name="technology" id="technology">
                    <optgroup class="text-black" label="All">
                        @foreach($industries as $industry)
                        <option class="text-black" value="crm">{{ $industry->name }}</option>
                        @endforeach
                    </optgroup>
                </select>
            </div>
        </div>
        <br>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2">
            {{--            @foreach($categories as $category)--}}
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

