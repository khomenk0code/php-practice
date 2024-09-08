<x-layout>
    <h1 class="text-2xl font-bold mb-4 ">{{ $user->username }}'s Posts &#9830 {{ $user->posts->count() }} posts here</h1>

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