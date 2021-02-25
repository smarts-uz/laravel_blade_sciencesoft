@extends('front.layout')

@section('css')

@endsection

@section('main')

<<<<<<< HEAD
<div class="text-5xl">

    <h1>
        Customer Experience

    </h1>
</div>
=======
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
>>>>>>> 4557079cd9fec7335ac84551a878dc57e9d1081e

@endsection

@section('js')
 <script>
window.replainSettings = { id: '4bd73f5f-79dd-4aee-b496-a833dfe09fea' };
(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>

@endsection
