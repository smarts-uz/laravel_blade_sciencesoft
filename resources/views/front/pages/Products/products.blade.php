@extends('front.layout')

@section('css')

@endsection

@section('main')
<div class="block lg:px-16 px-4">
            <div class="w-full mb-9">
                <h1 class="text-2xl font-bold text-gray-800 capitalize">
                    Our products
                </h1>
                <hr class="w-12 border-yellow-600 my-4">
            </div>
            <div>
                <h1 class="text-2xl text-gray-800 font-bold mb-6 pb-4 border-b-2 border-blue-500 cpaitalize">
                    Digital transformation
                </h1>
                <div class="md:flex md:flex-wrap">
                    @foreach($products as $product)
                        <div class="card w-full md:p-6 md:w-1/2 lg:w-1/3 flex flex-col justify-between">
                            <div>
                                <div>
                                    <img src="/uploads/products/{{ $product->image??asset('images/default-image.png') }}" alt="" class="mb-4 w-24">
                                </div>
                                <h1 class="text-blue-500 font-bold text-md mb-6 capitalize">
                                    {{ $product->name }}
                                </h1>
                                <a href="#">
                                    <p class="text-gray-800 hover:text-blue-500 text-xl font-bold mb-6 capitalize">
                                        {{ $product->title }}
                                    </p>
                                </a>
                                <p class="text-gray-800 text-lg mb-6 ">
                                    {{ $product->sub_title }}
                                </p>
                            </div>
                            <div class="flex justify-between">
                                <a href="{{ $product->read_more_link }}" class="mr-6 focus:outline-none border-none rounded-md bg-blue-500 hover:bg-blue-700 border-b-2 border-l-2 border-gray-700 py-2 px-4 text-white">
                                    Read more
                                </a>
                                <a href="{{ $product->view_website_link }}" class="mr-6 focus:outline-none border-none rounded-md bg-blue-500 hover:bg-blue-700 border-b-2 border-l-2 border-gray-700 py-2 px-4 text-white">
                                    View website
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection


@section('js')

@endsection

