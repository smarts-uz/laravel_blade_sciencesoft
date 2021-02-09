@extends('front.layout')

@section('css')

@endsection

@section('main')

<main class="box-border">
        <h1 class="text-4xl font-semibold ml-24 my-6">Press Releases</h1>
        <hr class="w-12	mx-24 my-6 border border-solid border-red-400">
        <!-- <hr class="w-12 border-b-2 border-yellow-600 my-4 "> -->
        <div class="container 2xl (1536px) w-full m-auto">
            <div class="flex flex-wrap justify-evenly">
                @foreach($news as $new)
                <div class="flex flex-col max-w-sm mb-6 duration-300 rounded-lg p-3 hover:shadow-2xl">
                    <img src="/uploads/news/{{ $new->image }}" class="w-96 h-52 mb-6" alt="" srcset="">
                    <h3 class="font-bold">{{ $new->title }}</h3>
                    <p>{{ $new->sub_title }}</p>
                    <div class="flex justify-between items-center text-blue-500 py-2 text-xs">
                        <p>{{ $new->created_at->format('d-m-Y')}}</p> <a href="" class="text-blue-700 hover:text-red-700">Click here</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>



@endsection


@section('js')

@endsection
