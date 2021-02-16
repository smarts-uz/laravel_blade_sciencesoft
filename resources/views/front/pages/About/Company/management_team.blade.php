@extends('front.layout')

@section('css')

@endsection

@section('main')
  <!--Komil Sobitov/ Team Management -->
  <div class="mx-6 md:mx-16 lg:mx-24 my-10">
    <h1 class="text-blue-700 text-2xl md:text-4xl  font-extrabold">{{ _trans("Management Team")  }}</h1>
    <div class="flex flex-wrap -mx-1 overflow-hidden justify-center items-start xl:-mx-2">
      @foreach($teams as $team)
      <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
        <img src="/uploads/teams/{{ $team->image??asset('images/default-image.png') }}"
          class="w-36 mb-3 mx-auto" />
        <p class="text-gray-900 font-bold text-base tracking-wide text-xl mb-3 text-center">
            {{ $team->name }}
        </p>
        <p class="text-gray-400 text-lg text-center">
            {{ $team->job }}
        </p>
        <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
            {{ $team->description }}
        </p>
      </div>
      @endforeach
    </div>
  </div>
@endsection


@section('js')

@endsection

