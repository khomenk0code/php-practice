<x-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-100">
        <div class="bg-white shadow-md rounded-lg px-8 py-6 mt-4 max-w-md w-full">
            <h1 class="text-3xl font-semibold text-center mb-6 text-gray-800">Welcome back!</h1>

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There are some problems with your input.</span>
                    <ul class="mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('login') }}" method="post" class="space-y-6">
                @csrf

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your email">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" class="w-full mt-1 p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2">
                    <input type="checkbox" name="remember" id="remember">
                    Remember me
                </div>

                @error('failed')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                  @enderror

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 transition duration-300">Login</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
