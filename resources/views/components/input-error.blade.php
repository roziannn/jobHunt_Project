@props(['messages'])

@if ($messages)
    <div class="invalid-feedback">
        @foreach ((array) $messages as $message)
            {{ $message }}
        @endforeach
    </div>
@endif
