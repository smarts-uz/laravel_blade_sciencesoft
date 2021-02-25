@extends('front.layout')

@section('css')

@endsection

@section('main')
    <div>

        <h1 class="uppercase font-bold mt-10 text-2xl">
            {{ _trans('Strategic Partnerships') }}
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
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@endsection
