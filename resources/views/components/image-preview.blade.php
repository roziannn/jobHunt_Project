@props(['height', 'width', 'source'])
<div>
    <img {{ $attributes->merge(['style' => "height: {$height}px; width: {$width}; object-fit:cover;"]) }}
        src="{{ $source }}" alt="">
</div>
