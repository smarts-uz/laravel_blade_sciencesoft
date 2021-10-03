@foreach ($procedures as $procedure)
<div class="mt-2 md:mt-10 rounded-sm border-2 transition-shadow hover:shadow-xl p-2 md:p-8">
    <div class="flex flex-col md:flex-row items-center">
        <div class="flex justify-center items-center w-2/5 text-xl mr-0 md:mr-8 mb-8 md:mb-0">
            <img class="w-full h-full md:w-32 md:h-32"
                src="{{ $procedure['image'] }}" alt="">
        </div>
        <div class="flex flex-col lg:w-3/5 w-full p-8">
            <h1 class="text-3xl md:text-3xl font-bold">{{ $procedure['title'] }}</h1>
            <hr class="w-12 border-yellow-600 text-gray-800 my-4">
            <p class=" text-gray-500 text-xl md:text-2xl">{{ $procedure['sub_title'] }}</p>
        </div>
    </div>
</div>
@endforeach
