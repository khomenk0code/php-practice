<x-layout>
    <h1 class="flex text-3xl underline justify-center mb-8">Latest Post</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-bold mb-2">{{$post->title}}</h2>

                <div class="text-sm text-gray-500 mb-4">
                    <span>Posted by</span>
                    <span>{{ $post->created_at->diffForHumans()}}</span>
                    <a href="#" class="text-indigo-500 hover:text-indigo-700">Username</a>
                </div>

                <p class="text-gray-700">{{ Str::limit($post->body, 250) }}</p>

                <a href="#" class="inline-block mt-4 text-indigo-600 hover:text-indigo-800 font-medium">
                    Read More
                </a>
            </div>
        @endforeach
    </div>
</x-layout>
