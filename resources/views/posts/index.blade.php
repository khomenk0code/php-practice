<x-layout>
    @auth
        <h1>You are logged in as {{ Auth::user()->username }}</h1>
    @endauth  

    @guest
        <h1>Guest access. Register or Login to see the content</h1>
    @endguest
</x-layout>
