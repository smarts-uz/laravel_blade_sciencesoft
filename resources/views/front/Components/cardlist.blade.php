@foreach ($cardlists as $cardlist)

  <div class="rounded overflow-hidden shadow-lg my-2 card-lists w-full h-full  hover:shadow-2xl transition duration-500 mt-10 lg:w-96 cursor-pointer">
      <img class="w-72 h-48" src="{{ $cardlist->photo }}"
        alt="Sunset in the mountains">
      <div class="px-6 py-4">
        <h1 class="text-yellow-400 mb-3 text-bold uppercase">{{ $cardlist->title }}</h1>
        <div class="font-bold text-xl mb-2">{{ $cardlist->sub_title }}</div>
        <p class="text-grey-darker text-base mb-5">
          {{ $cardlist->description }}
        </p>
      </div>
    </div>

@endforeach