@props(['messages'])

@if ($messages)
    @foreach ((array) $messages as $message)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @endforeach
@endif
