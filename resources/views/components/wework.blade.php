@foreach ($weworks as $wework)
<div class="border-2 border-gray-300 p-2 w-11/12">
    <h1 class="mb-8 text-2xl pl-4 pt-4 font-bold">{{ $wework['title'] }}</h1>
    <ul class="list-disc font-normal ml-7">
        <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
            {{ $wework['sub_title1'] }}</li>
        <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">{{ $wework['sub_title2'] }}
            <strong>{{ $wework['sub_title2_strong'] }}</strong>
            {{ $wework['sub_title2_st'] }}</li>
        <li class="mt-4 text-gray-700 text-lg loading-8 mr-12">
            {{ $wework['sub_title3'] }}
        </li>
    </ul>
</div>
@endforeach
