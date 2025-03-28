<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.update', $post) }}" >
                        @csrf
                        @method('PUT')
                        {{-- {{ $category->name }} --}}
                        <div>
                            <div>
                                <label for="title" class="block font-medium text-sm text-gray-700">title</label>
                            </div>
                            <input type="text" name="title" id="title" value="{{ $post->title }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        </div>
                        <div>
                            <div>
                                <label for="text" class="block font-medium text-sm text-gray-700">text</label>
                            </div>
                            <textarea name="text" id="text" value="{{ $post->text }}" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">{{ $post->text }}</textarea>
                        </div>
                        <div>
                            <div>
                                <label for="category" class="block font-medium text-sm text-gray-700">title</label>
                            </div>
                            <select name="category" id="category" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" >
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
