@props(['message'])

@if ($message)
    <div class="bg-blue-100 border-blue-500 text-blue-700 border-l-4 p-4 mx-6">
        {{ $message }}
    </div>
@endif
