<x-layout>
    <x-slot:title>
        Sign In
    </x-slot:title>

    <div class="min-h-[calc(100vh-16rem)] flex items-center justify-center bg-gradient-to-b from-purple-50 to-white">
        <div class="w-full max-w-md">
            <div class="card bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="card-body px-8 py-6">
                    <h1 class="text-3xl font-bold text-center mb-6 text-purple-700">Welcome Back</h1>

                    <form method="POST" action="/login" class="space-y-4">
                        @csrf

                        <!-- Email -->
                        <div class="form-control w-full">
                            <label class="label mb-1 text-gray-700 font-medium">Email</label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="mail@example.com"
                                class="input input-bordered w-full @error('email') input-error @enderror focus:ring-2 focus:ring-purple-400"
                                required
                                autofocus
                            >
                            @error('email')
                                <p class="text-error text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-control w-full">
                            <label class="label mb-1 text-gray-700 font-medium">Password</label>
                            <input
                                type="password"
                                name="password"
                                placeholder="••••••••"
                                class="input input-bordered w-full @error('password') input-error @enderror focus:ring-2 focus:ring-purple-400"
                                required
                            >
                            @error('password')
                                <p class="text-error text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center mt-2">
                            <input type="checkbox" name="remember" class="checkbox checkbox-primary mr-2">
                            <label class="text-gray-700 text-sm cursor-pointer">Remember me</label>
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="btn bg-purple-600 hover:bg-purple-700 text-white w-full mt-4 transition-colors duration-200"
                        >
                            Sign In
                        </button>
                    </form>

                    <div class="divider my-6">OR</div>

                    <p class="text-center text-sm text-gray-600">
                        Don't have an account?
                        <a href="/register" class="text-purple-600 font-medium hover:underline">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
