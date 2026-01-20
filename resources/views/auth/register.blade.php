<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>

    <div class="min-h-[calc(100vh-16rem)] flex items-center justify-center bg-gradient-to-b from-purple-50 to-white">
        <div class="w-full max-w-md">
            <div class="card bg-white shadow-xl rounded-2xl overflow-hidden">
                <div class="card-body px-8 py-6">
                    <h1 class="text-3xl font-bold text-center mb-6 text-purple-700">Create Account</h1>

                    <form method="POST" action="/register" class="space-y-4">
                        @csrf

                        <!-- Name -->
                        <div class="form-control w-full">
                            <label class="label mb-1 text-gray-700 font-medium">Name</label>
                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Your name"
                                class="input input-bordered w-full @error('name') input-error @enderror focus:ring-2 focus:ring-purple-400"
                                required
                            >
                            @error('name')
                                <p class="text-error text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

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

                        <!-- Password confirmation -->
                        <div class="form-control w-full">
                            <label class="label mb-1 text-gray-700 font-medium">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                placeholder="••••••••"
                                class="input input-bordered w-full focus:ring-2 focus:ring-purple-400"
                                required
                            >
                        </div>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="btn bg-purple-600 hover:bg-purple-700 text-white w-full mt-4 transition-colors duration-200"
                        >
                            Register
                        </button>
                    </form>

                    <div class="divider my-6">OR</div>

                    <p class="text-center text-sm text-gray-600">
                        Already have an account?
                        <a href="/login" class="text-purple-600 font-medium hover:underline">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
