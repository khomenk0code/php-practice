@props(['msg', 'bg' => 'bg-green-400'])

<div class="{{ $bg }} text-white px-6 py-1 rounded-md shadow-md w-full max-w-2xl mx-auto transition-opacity duration-300 ease-in-out">
    <p>{{ $msg }}</p>
</div>
