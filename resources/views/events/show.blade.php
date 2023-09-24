<x-app-layout>
    <div class="shadow bg-white border rounded w-full max-w-md mx-auto mt-10">
        <h1 class="text-3xl text-center font-semibold p-6">{{ __('Event Info') }}</h1>

        <x-flash-message :message="session('notice')" />

        <div class="px-6 pb-6">
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Event Start') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $event->start }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Event End') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $event->end }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    {{ __('Event Name') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">                
                    {{ $event->title }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    {{ __('Description') }}
                </label>
                <p class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {!! nl2br(e($event->body)) !!}
                </p>
            </div>
            <div class="flex flex-row text-center my-4">
                <a href="javascript:history.back()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">
                    {{ __('Go back') }}
                </a>
                <a href="{{ route('events.edit', $event) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">
                    {{ __('Edit') }}
                </a>
                <form action="{{ route('events.destroy', $event) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="{{ __('Delete') }}" onclick="if(!confirm('削除しますか？')){return false};"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
