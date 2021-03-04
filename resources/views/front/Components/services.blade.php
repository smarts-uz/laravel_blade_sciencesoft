<div class="py-8 hidden lg:block">
    <h1 class="text-3xl font-semibold mb-20 pt-10">
        <p class="mb-4">{{ _trans('EXPLORE OUR OFFERING') }}</p>
        <hr class="w-10 h-0.5 border-none bg-yellow-500">
    </h1>
    <div class="flex flex-wrap" id="tabs-id">
        <div class="flex md:flex-col lg:flex-row shadow-xl bg-white rounded">
            <ul id="active" class="flex list-none flex-wrap -mt-10 flex-col bg-blue-900 lg:w-2/5 md:w-full shadow-2xl py-10">
                @foreach ($services as $service)
                <li class=" -mr-6 last:mr-0 flex-auto pl-10 cursor-pointer hover:underline z-10">
                    <a class="text-xl font-bold px-5 py-3 block leading-normal cursor-pointer text-white"
                        onclick="changeAtiveTab(event, '{{ $service->name }}')">
                        {{ $service->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded w-full mb-6">
                <div class="p-4 flex-auto lg:h-h-auto">
                    <div class="tab-content tab-space p-8">
                        @foreach ($services as $service)
                        <div class="hidden text-xl pb-10" id="{{ $service->name }}">
                            <h1 class="text-3xl font-semibold">
                                <p class="mb-2">{{ $service->name }}</p>
                                <hr class="w-10 h-0.5 border-none bg-yellow-500">
                            </h1>
                            <p class="my-8 text-gray-600">
                                {{ $service->description }}
                            </p>
                            <ul class="flex flex-row flex-wrap ml-6 text-blue-800 underline">
                                <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                    <a href="#"
                                        class="text-black hover:text-blue-500">{{ _trans('Software consulting') }}</a>
                                </li>
                                <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                    <a href="#"
                                        class="text-black  hover:text-blue-500">{{ _trans('Custom software development') }}</a>
                                </li>
                                <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                    <a href="#"
                                        class="text-black  hover:text-blue-500">{{ _trans('Software product development') }}</a>
                                </li>
                                <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                    <a href="#"
                                        class="text-black hover:text-blue-500">{{ _trans('Team augmentation') }}</a>
                                </li>
                                <li style="list-style: square; margin-right: 10px; margin-bottom: 20px; width: 350px;">
                                    <a href="#"
                                        class="text-black hover:text-blue-500">{{ _trans('Software development outsourcing') }}</a>
                                </li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script>
    document.getElementById("Testing and QA").className = "block"
    document.getElementById("active").children[0].firstChild.nextSibling.className = "text-xl font-bold px-5 py-3 block leading-normal cursor-pointer text-white bg-blue-600"
</script>
@endsection
