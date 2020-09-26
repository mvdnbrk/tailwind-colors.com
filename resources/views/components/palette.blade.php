<ul class="text-sm font-medium shadow">
    @foreach($palette->colors() as $color)
        <x-color :color="$color">
            @foreach($palette->shadesOf($color) as $key => $value)
                <span
                    class="flex items-end w-24 p-2 text-{{ $color }}-900 shadow"
                    style="background-color: {{ $value }};"
                >
                    {{ $key }}
                </span>
            @endforeach
        </x-color>
    @endforeach
    <x-color color="black"/>
    <x-color color="white"/>
</ul>
