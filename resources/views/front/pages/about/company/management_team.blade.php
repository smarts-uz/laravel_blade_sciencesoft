@extends('front.layout')

@section('css')
<link rel="stylesheet" href="https://fonts.google.com/specimen/Oswald?preview.text_type=custom&selection.family=Oswald:wght@500">
@endsection

@section('main')
    <!--Komil Sobitov/ Team Management -->
    <div class="my-10">
        <h1 class="text-blue-700 text-2xl md:text-4xl  font-extrabold">{{ _trans('Management Team') }}</h1>
        <div class="flex flex-wrap mx-1 overflow-hidden justify-center items-start xl:-mx-2">
            {{-- @foreach ($teams as $team)
                  <div class="my-1 px-1 w-full overflow-hidden sm:w-1/2 md:w-1/2 lg:w-1/3 xl:my-2 xl:px-2 xl:w-1/3">
                    <img src="/uploads/teams/{{ $team->image ?? asset('images/default-image.png') }}"
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
            @endforeach --}}
            <label class="font-bold text-xl pr-2" for="technology">Industries:</label>
            {{-- <div class="grid grid-cols-1 items-center">
                <div x-data="{open:false}"
                    class="p-2 border-none relative outline-none bg-transparent text-blue-500 text-xl font-bold" name="industry" id="industry">
                    <div class="text-blue-400 w-60 cursor-pointer flex justify-between items-center">All <i class="fas fa-chevron-down"></i></div>
                    <ul x-show="open" class="absolute border border-gray-200 bg-white z-30">
                        <a href="">
                            <li class="text-black hover:bg-blue-400 hover:text-white duration-100 px-5 py-1">
                            </li>
                        </a>
                    </ul>
                </div>
            </div> --}}
            <div class="grid grid-cols-4 gap-5">
                <div>
                    <a href="linkedin">
                        <img src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                            <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-normal">Mike santoro</h1>
                            <h1 class="text-xl font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
