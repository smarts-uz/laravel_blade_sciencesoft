@extends('front.layout')

@section('css')

@endsection

@section('main')
    <div class="flex flex-wrap py-5 px-32">
        @foreach($blogs as $blog)
            @php
                $blog_categories=json_decode(json_encode($blog->tag), true);
                $category_tag=(array)$blog_categories['category'][0];
            @endphp
            <a href="{{route('getBlogByTag', ['tag_name'=> $category_tag])}}" class="m-1 py-2 px-8 duration-300 focus:outline-none focus:text-white text-blue-500 bg-blue-100 rounded-3xl focus:border-none focus:bg-blue-500">
                <p class="text-sm font-bold">{{ $category_tag}}</p>
            </a>
        @endforeach
{{--        <button class="m-1 py-2 px-8 duration-300 focus:outline-none focus:text-white text-blue-500 bg-blue-100 rounded-3xl focus:border-none focus:bg-blue-500">--}}
{{--            <p class="text-sm font-bold">Programming</p>--}}
{{--        </button>--}}
{{--        <button class="m-1 py-2 px-8 duration-300 focus:outline-none focus:text-white text-blue-500 bg-blue-100 rounded-3xl focus:border-none focus:bg-blue-500">--}}
{{--            <p class="text-sm font-bold">CRM</p>--}}
{{--        </button>--}}
{{--        <button class="m-1 py-2 px-8 duration-300 focus:outline-none focus:text-white text-blue-500 bg-blue-100 rounded-3xl focus:border-none focus:bg-blue-500">--}}
{{--            <p class="text-sm font-bold">Development</p>--}}
{{--        </button>--}}
    </div>
    <div class="flex flex-wrap px-32">
        @foreach($blogs as $blog)
        <div class="w-2/6 p-4">
            <a href="#" class="no-underline text-gray-200 block w-96 duration-300 shadow-lg hover:shadow-2xl relative">
                <div>
                    <img class="w-full h-auto" src="{{ "/uploads/blogs/".$blog->image??asset('images/default-image.png') }}"
                         alt="CardImg">
                </div>
                <div class="px-4">
                    <span class="text-yellow-400 text-xs font-bold">CRM</span>
                    <h1 class="text-lg text-black font-bold py-2">
                        {{ $blog->title }}
                    </h1>
                    <p class="text-sm text-black">
                        {{ $blog->description }}
                    </p>
                    <div class="flex justify-between items-center text-blue-500 py-2 text-xs">
                        <p>By TeamPro</p>
                        <p>{{ $blog->created_at->format('d-m-Y')}}</p>
                    </div>
                    <div class="bg-none w-full py-2 flex justify-end text-blue-500 focus:outline-none">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>

@endsection


@section('js')

@endsection
