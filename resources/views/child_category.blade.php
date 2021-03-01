<li>{{ $child_category->name }}
    @if($child_category->path_blade)
    -
        {{ $child_category->path_blade }}
    @endif
</li>
{{-- My code added --}}
{{-- @if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif --}}
