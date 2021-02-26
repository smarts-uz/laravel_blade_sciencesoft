@extends('front.layout')

@section('css')
<link rel="stylesheet" href="https://fonts.google.com/specimen/Oswald?preview.text_type=custom&selection.family=Oswald:wght@500">
@endsection

@section('main')
    <!--Komil Sobitov/ Team Management -->
    <div class="py-20 text-center  -mb-24 pb-24 overflow-hidden">
        <h1 class="text-blue-700 text-2xl md:text-4xl py-8  font-extrabold">{{ _trans('Management Team') }}</h1>
        <div class="flex flex-wrap mx-1 overflow-hidden mt-4 justify-center items-start xl:-mx-2">
             @foreach ($teams as $team)


                <div  class="pt-8 group my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/4">
                    <a href="{{ $team->description }}">
                    <img src="/uploads/teams/{{ $team->image ?? asset('images/default-image.png') }}"
                        class="duration-500 hover:scale-110 transform rounded-full w-60 object-cover h-60 mb-3 mx-auto" />
                    <p class="text-gray-900   group-hover:text-blue-800 duration-700 font-bold text-base tracking-wide text-xl mb-3 text-center">
                        {{ $team->name }}
                    </p>
                    <p class="text-gray-600  group-hover:text-blue-800 font-bold duration-700 text-lg text-center">
                        {{ $team->job }}
                    </p>
                    <p class="font-normal text-lg text-gray-700 tracking-wide mt-3">
                    </p>
                    </a>
                </div>
            @endforeach
        </div>
</div>




@section('js')

<script>
    AOS.init({
  duration: 1200,
})
</script>

@endsection
