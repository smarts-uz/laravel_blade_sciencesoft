@extends('front.layout')

@section('css')
<link rel="stylesheet" href="https://fonts.google.com/specimen/Oswald?preview.text_type=custom&selection.family=Oswald:wght@500">
@endsection

@section('main')
    <div class="py-20 text-center  -mb-24 pb-24 overflow-hidden">
        <h1 class="text-blue-700 text-2xl md:text-4xl py-8  font-extrabold">{{ _trans('Our Team') }}</h1>
        <div class="flex flex-wrap md:justify-evenly lg:justify-evenly">
            <div class="flex items-center">
                <label class="font-bold text-xl pr-2" for="technology">Filter by Department:</label>
                <div x-data="{open:false}"  class="p-2 border-none relative outline-none bg-transparent text-blue-500 text-xl font-bold" name="technology" id="technology">
                    <div class="text-blue-400 w-60 cursor-pointer flex justify-between items-center" @click="open = true">All <i class="fas fa-chevron-down"></i></div>
                        <ul x-show="open" @click.away="open = false" class="absolute border border-gray-200 bg-white z-30">
                                @foreach ($department as $team)
                                <a href="{{route('getTeamByJob', ['team_job' => $team->job])}}">
                                <li class="text-black hover:bg-blue-400 hover:text-white duration-100 px-5 py-1" value="{{ $team->job }}">{{ $team->job }}</li>
                                </a>
                                @endforeach
                        </ul>
                </div>
            </div>
            <div class="flex items-center">
                <label class="font-bold text-xl pr-2" for="technology">Industries:</label>
                <div x-data="{open:false}"
                    class="p-2 border-none relative outline-none bg-transparent text-blue-500 text-xl font-bold" name="industry" id="industry">
                    <div class="text-blue-400 w-60 cursor-pointer flex justify-between items-center" @click="open = true">All <i class="fas fa-chevron-down"></i></div>
                    <ul x-show="open" @click.away="open = false" class="absolute border border-gray-200 bg-white z-30">
                            <a href="">
                                <li class="text-black hover:bg-blue-400 hover:text-white duration-100 px-5 py-1" value="">

                                </li>
                            </a>
                        </ul>
                </div>
            </div>
        </div>
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
