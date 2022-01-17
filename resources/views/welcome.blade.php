@foreach ($categories as $category )
    {{-- <div>
        {{ $category->title }} ({{ $category->id }})

        @foreach ($category->children as $child)
                <div style="margin-left: 20px">

                    {{ $child->title }} ({{ $child->id }})

                    @foreach ($child->children as $subChild)
                        <div style="margin-left: 20px">
                            {{ $subChild->title }} ({{ $subChild->id }})
                        </div>
                    @endforeach

                </div>
        @endforeach
    </div> --}}

    <x-category-item :category="$category" />

@endforeach
