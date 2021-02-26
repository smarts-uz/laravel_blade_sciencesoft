@extends('front.layout')

@section('css')
<link rel="stylesheet" href="https://fonts.google.com/specimen/Oswald?preview.text_type=custom&selection.family=Oswald:wght@500">
@endsection

@section('main')
<<<<<<< HEAD


<div class="container">
        <div>
          <a href="">
              <img src="" alt="">
              
          </a>

=======
    <!--Komil Sobitov/ Team Management -->
    <div class="my-10">
        <h1 class="text-blue-700 text-2xl md:text-4xl  font-extrabold">{{ _trans('Management Team') }}</h1>
        <div class="flex flex-wrap mx-1 overflow-hidden mt-4 justify-center items-start xl:-mx-2">
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
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 mt-12">
                <div>
                    <a href="https://www.linkedin.com/in/muhriddin-mmo-aaa4071a0/">
                        <img class="rounded	" src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img class="rounded	" src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                            <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img class="rounded	" src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-5 mt-12">
                <div>
                    <a href="linkedin">
                        <img class="rounded	" src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img class="rounded	" src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                            <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img class="rounded	" src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="linkedin">
                        <img src="{{asset('assets/images/MurodovMuhriddin.jpg')}}" alt="">
                        <div class="hover:text-red-700 uppercase">
                            <h1 class="text-xl font-bold">Mike santoro</h1>
                            <h1 class="text-base font-normal">CEO</h1>
                        </div>
                    </a>
                </div>
            </div>
>>>>>>> 24be84ec9c24989b764ec8068a0b970b6b1d936a
        </div>
</div>




@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
