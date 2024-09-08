<x-layout>
    <h1 class="text-indigo-400 text-3xl font-bold text-center mb-8">Hello, {{ auth()->user()->username }}</h1>

    @if (session('success'))
        <x-flashMsg msg="{{ session('success') }}" />
    @endif

    <div class="max-w-7xl mx-auto bg-gray-100 p-8 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold mb-6 text-indigo-600">Create a New Post</h2>

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-lg font-medium text-gray-700">Post Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full mt-2 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter the post title">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="body" class="block text-lg font-medium text-gray-700">Post Content</label>
                <textarea name="body" rows="10" class="w-full mt-2 p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Write your content here...">{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center">
                <button type="submit" class="w-full md:w-1/2 bg-indigo-600 text-white py-3 px-6 rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create Post
                </button>
            </div>
        </form>
    </div>

    <h2 class="my-4 font-bold underline flex justify-center text-3xl text-indigo-700">Your Latest Posts</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
           <x-postCard :post="$post"/>
        @endforeach
    </div>


    <div class="mt-8">
        <div class="flex justify-center space-x-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

</x-layout>
