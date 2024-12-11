<x-layout>
    <section class="min-h-screen flex justify-center items-center bg-gray-50">
        <div class="bg-white shadow-md rounded-2xl flex flex-col md:flex-row max-w-4xl w-full p-6">
            <!-- Left Section -->
            <div class="w-full md:w-1/2 px-6 py-8">
                <h2 class="text-3xl font-bold text-[#25d366]">Create an Account</h2>
                <p class="text-sm mt-2 text-gray-600">If you're not a member yet, sign up now!</p>
                <form action={{route('user.create')}} method="POST" enctype="multipart/form-data" class="mt-6 space-y-4">
                    @csrf
                    <!-- Profile Picture Upload -->
                    <div class="flex items-center space-x-4">
                        <div class="shrink-0">
                            <img id="preview_img" class="h-16 w-16 object-cover rounded-full" src="{{ asset('assets/Person.jpg') }}" alt="Profile Image Preview"/>
                        </div>
                        <label class="block">
                            <span class="sr-only">Choose profile photo</span>
                            <input type="file" onchange="loadFile(event)" id="picture" name="picture" accept="image/*" required
                                class="block w-full text-sm text-slate-500 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-green-50 file:text-green-700 hover:file:bg-green-200" />
                            @error('picture')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>

                    <!-- Firstname -->
                    <div>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]" required value="{{ old('firstname') }}" />
                        @error('firstname')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Lastname -->
                    <div>
                        <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]" required value="{{ old('lastname') }}" />
                        @error('lastname')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Username -->
                    <div>
                        <input type="text" name="username" id="username" placeholder="Enter Username"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]" required value="{{ old('username') }}" />
                        @error('username')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <input type="email" name="email" id="email" placeholder="Enter Email"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]" required value="{{ old('email') }}" />
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Mobile Number -->
                    <div>
                        <input type="text" name="number" id="number" placeholder="Enter Mobile Number"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]" required value="{{ old('number') }}" />
                        @error('number')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                     <!-- Password -->
                     <div>
                        <input type="password" name="password" id="password" placeholder="Enter Password"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]"autocomplete="" required/>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                     <!-- Confirm Password -->
                     <div>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                            class="w-full p-1 border rounded-lg focus:ring-[#25d366] focus:border-[#25d366]" autocomplete="" required/>
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-3 text-white bg-[#25d366] hover:bg-[#20b85c] rounded-lg font-medium transition-transform transform hover:scale-105">
                        Sign Up
                    </button>
                </form>

                <!-- Divider -->
                <div class="mt-6 flex items-center justify-center space-x-4">
                    <hr class="w-1/4 border-gray-300" />
                    <p class="text-sm text-gray-500">OR</p>
                    <hr class="w-1/4 border-gray-300" />
                </div>

                <!-- Login Link -->
                <div class="mt-4 text-center">
                    <p class="text-sm">Already have an account?</p>
                    <a href="{{ route('page.login') }}"
                        class="inline-block mt-2 py-2 px-6 text-sm text-white bg-[#25d366] hover:bg-[#20b85c] rounded-lg font-medium transition-transform transform hover:scale-105">
                        Login
                    </a>
                </div>
            </div>

            <!-- Right Section -->
            <div class="hidden md:flex md:w-1/2 items-center justify-center">
                <img src="{{ asset('assets/MainImage.avif') }}" alt="Login Illustration" class="rounded-2xl max-w-full h-auto" />
            </div>
        </div>
    </section>
</x-layout>
