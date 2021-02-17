@extends('front.layout')

@section('css')

@endsection

@section('main')
    <div class="block w-full p-6 lg:p-20">
        <div class="w-full md:w-11/12 mx-auto my-9">
            <h1 class="text-2xl md:text-2xl lg:text-4xl text-center mb-16 font-bold text-gray-800">
                {{ $blog->title }}
            </h1>
        </div>
        <div class="w-full mb-9" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            <a href="#" class="text-blue-600 text-lg w-full md:w-1/2 uppercase mb-4">crm</a>
            <div class="flex flex-col md:flex-row">
                <p class="text-md text-gray-600 mb-4 mr-4">Published: {{ $blog->created_at->format('d-m-Y')}}</p>
            </div>
        </div>
        {!! $blog->description_text !!}
    </div>

@endsection


@section('js')

@endsection

