<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-2">{{ __("You're logged in!") }}</h3>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Create New Post</a>
                    @if (!empty($posts) && $posts->count() > 0)
                        <ul>
                            @foreach ($posts as $post)
                                <li>
                                    <h4>{{ $post->title }} by {{ $post->user->name }}</h4>
                                    <p>{{ $post->body }}</p>
                                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No posts available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>