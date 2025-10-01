<x-layout>
     <div class="hero bg-base-200 ">
                <div class="hero-content text-center">
                    <div class="max-w-md">
                    <figure class="flex justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car h-24 w-24 text-primary"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path><circle cx="7" cy="17" r="2"></circle><path d="M9 17h6"></path><circle cx="17" cy="17" r="2"></circle></svg>
                    </figure>
                    <h1 class="text-4xl font-bold">Ad Auto Spares</h1>
                    <p class="py-6 text-lg font-light">
                        Your trusted partner for quality automotives spare parts and professional serivices 
                    </p>
                    </div>
                </div>
           </div>
     <div class="container flex justify-center">
                    <div class="card w-96 bg-base-100 ">
                        <div class="card-body">
                            <h1 class="text-2xl font-bold text-center mb-3"> Local Staff Login</h1>

                            <form method="POST" action="/login">
                                @csrf
                                <!-- Email -->
                                <label class="floating-label mb-6">
                                    <input type="email"
                                        name="email"
                                        placeholder="[mail@example.com](<mailto:mail@example.com>)"
                                        value="{{ old('email') }}"
                                        class="input input-bordered @error('email') input-error @enderror"
                                        required>
                                    <span>Email</span>
                                </label>
                                @error('email')
                                    <div class="label -mt-4 mb-2">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror

                                <!-- Password -->
                                <label class="floating-label mb-6">
                                    <input type="password"
                                        name="password"
                                        placeholder="••••••••"
                                        class="input input-bordered @error('password') input-error @enderror"
                                        required>
                                    <span>Password</span>
                                </label>
                                @error('password')
                                    <div class="label -mt-4 mb-2">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </div>
                                @enderror
                                <!-- Submit Button -->
                                <div class="form-control mt-8">
                                    <button type="submit" class="btn btn-primary btn-sm w-full">
                                        Login
                                    </button>
                                </div>
                            </form>

                            <div class="divider">OR</div>
                            <p class="text-center text-sm">
                                Already have an account?
                                <a href="/register" class="link link-primary">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
      </x-layout>