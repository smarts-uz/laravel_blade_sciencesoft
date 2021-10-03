@extends('front.layout')

@section('css')

@endsection

@section('main')
    <div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ t('Strategic Partnerships') }}
        </h1>
        <hr class="w-12 mt-5 bg-yellow-500 h-1" />
        @foreach ($partnerships as $partner)
            <div class="md:w-full flex my-5 py-5 xl:flex-row flex-col justify-center">
                <div class="md:w-4/12 p-10  flex items-center justify-center">
                    <img src="{{ '/uploads/categories/' . $partner->image ?? asset('images/default-image.png') }}">
                </div>
                <div class="md:w-8/12 text-xl md:text-left leading-relaxed text-gray-500 p-3 text-center w-full">
                    <p class="">{{ $partner->description }}</p>
                </div>
            </div>
        @endforeach
        <!-- ============================= -->

        <!-- ============================= -->
    </div>

@endsection

@section('js')

@endsection
