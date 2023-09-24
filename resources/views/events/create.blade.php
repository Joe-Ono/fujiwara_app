<x-app-layout>
    <div class="shadow bg-white border rounded w-full max-w-md mx-auto mt-10">
        <h1 class="text-3xl text-center font-semibold p-6">{{ __('Event Form') }}</h1>

        <x-validation-errors class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mx-6" />

        <form action="{{ route('events.store') }}" method="POST" class="relative px-6 pb-6 flex-auto">
            @csrf
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Event Start') }}
                </label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <input type="time" name="start_time" id="start_time" value="{{ old('start_time') }}" required
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Event End') }}
                </label>
                <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" required
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <input type="time" name="end_time" id="end_time" value="{{ old('end_time') }}" required
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    {{ __('Event Name') }}
                </label>
                <input type="text" name="title" id="title" placeholder="{{ __('Event Name') }}"
                    value="{{ old('title') }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    {{ __('Description') }}
                </label>
                <textarea name="body" id="body" placeholder="{{ __('Description') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-32">{{ old('body') }}</textarea>
            </div>
            <input type="submit" value="{{ __('Create') }}"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
