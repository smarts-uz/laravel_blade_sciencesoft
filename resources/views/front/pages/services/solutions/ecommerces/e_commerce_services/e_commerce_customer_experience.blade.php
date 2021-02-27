@extends('front.layout')

@section('css')

@endsection

@section('main')

    <div>
        <div>
            <p class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold pt-5 ">
                {{ _trans('Customer Experience Consulting') }}</p>
            <hr class="w-12 border-b-2 border-yellow-600 my-4" />
        </div>
        <div>
            <img src="{{ asset('/images/') }}" alt="">
        </div>
    </div>

@endsection

@section('js')


@endsection
