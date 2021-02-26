@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div class="box-border">
        <h1 class="text-4xl font-semibold my-6">{{ _trans('Press Releases') }}</h1>
        <hr class="w-12	my-6 border border-solid border-yellow-400">
        <!-- <hr class="w-12 border-b-2 border-yellow-600 my-4 "> -->
        <div class="container 2xl (1536px) w-full m-auto">
            <div class="flex flex-wrap justify-evenly">
                @foreach ($news as $new)
                    <div class="flex flex-col justify-between max-w-sm mb-6 duration-300 rounded-lg p-3 hover:shadow-2xl">
                        <img src="/uploads/news/{{ $new->image ?? asset('images/default-image.png') }}"
                            class="w-96 h-52 mb-6" alt="" srcset="">
                        <h3 class="font-bold my-2">{{ $new->title }}</h3>
                        <p>{{ $new->sub_title }}</p>
                        <div class="flex justify-between items-center text-blue-500 py-2 text-xs">
                            <p>{{ $new->created_at->format('d-m-Y') }}</p> <a href=""
                                class="text-blue-700 hover:text-red-700">{{ _trans('Click here') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
