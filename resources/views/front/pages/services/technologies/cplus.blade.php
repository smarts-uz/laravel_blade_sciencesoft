@extends('front.layout')

@section('css')

@endsection

@section('main')

<div class="my-10">
    <div class="text-2xl md:text-4xl font-bold mt-6">
        {{  _trans("IT Infrastructure Services – Consulting, Implementation, Management – to Increase Your Business
        Sustainability") }}
         <hr class="border-t-2 w-12 border-yellow-600 mt-4 mb-4">
         <img src="https://www.scnsoft.com/it-infrastructure/it-infrastructure-services_1.svg">
         <p class="font-normal text-lg leading-loose mt-10">
            {{ _trans("C++ is a reliable programming language proven in
             the development of resource-intensive software due to 
             the high performance, extendibility and portability it provides.
            ScienceSoft’s developers use C++ to create libraries and a wide range of native and cross-platform software, 
            including") }} <a href="#"></a>{{ _trans(" virtual reality, IoT and 3D modeling solutions.") }}
        </p>
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
