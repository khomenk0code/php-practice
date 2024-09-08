@props(['post'])

<div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow">
    <h2 class="text-2xl font-bold mb-2">{{$post->title}}</h2>

    <div class="text-sm text-gray-500 mb-4">
        <span>Posted by</span>
        <span>{{ $post->created_at->diffForHumans()}}</span>
        <a href="{{ route('posts.user', $post->user)}}" class="text-indigo-500 hover:text-indigo-700">{{ $post->user->username }}</a>
    </div>

    <p class="text-gray-700">{{ Str::limit($post->body, 250) }}</p>

    <a href="#" class="inline-block mt-4 text-indigo-600 hover:text-indigo-800 font-medium">
        Read More
    </a>
</div>