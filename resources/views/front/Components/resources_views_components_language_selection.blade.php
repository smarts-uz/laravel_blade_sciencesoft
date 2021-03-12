@php $locale = session()->get('locale')??'en'; @endphp

<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <button @click="open = !open"
        class="p-3 bg-white flex items-center rounded-xl text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
        {{-- <img class="h-4 w-4 rounded-full mr-2" src="{{ asset('images/flags/' . $locale . '.png') }}" /> --}}
        <div>
            @if ($locale == 'en'){{ t('English') }}
            @elseif($locale=='ru'){{ t('Russian') }}
            @elseif($locale=='uz'){{ t('Uzbek') }}
            @else {{ t('English') }} @endif
        </div>
        <div class="ml-1">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </div>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
        <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            {{-- <div class="block px-4 py-2 text-xs text-gray-400">
                {{ __('Select Language') }}
            </div> --}}
            @if ($locale != 'ru')<a
                    class="flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out focus:shadow-outline"
                    href="{{ route('lang', ['locale'=>'ru']) }}">
                    {{-- <img class="h-3 w-3 rounded-md mr-2" src="{{ asset('images/flags/ru.png') }}" alt="" /> --}}
                    {{ t('Russian') }}</a>@endif

            @if ($locale != 'uz')<a
                    class="flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out focus:shadow-outline"
                    href="{{ route('lang', ['locale'=>'uz']) }}">
                    {{-- <img class="h-3 w-3 rounded-md mr-2" src="{{ asset('images/flags/uz.png') }}" alt="" /> --}}
                         {{ t('Uzbek') }}</a>@endif
            @if ($locale != 'en')<a
                    class="flex items-center px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-200 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out focus:shadow-outline"
                    href="{{ route('lang', ['locale'=>'en']) }}">
                    {{-- <img class="h-3 w-3 rounded-md mr-2" src="{{ asset('images/flags/en.png') }}" alt="" /> --}}
                        {{ t('English') }}</a>
            @endif
        </div>
    </div>
</div>
