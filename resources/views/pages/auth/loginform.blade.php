<x-layout>
    <!-- Toast -->
    @if (session('error'))
    <div class="fixed top-10 right-10 max-w-xs bg-red-200 border border-gray-200 rounded-xl shadow-lg" role="alert" tabindex="-1" aria-labelledby="hs-toast-error-example-label" id="alert">
        <div class="flex p-4">
            <div class="shrink-0">
                <p>Error!</p>
            </div>
            <div class="ml-3">
                <p id="hs-toast-error-example-label" class="text-sm text-gray-700">
                    {{ session()->get('error') }}
                </p>
            </div>
            <button  onclick="document.getElementById('alert').style.display='none'" >
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </button>
           
        </div>
    </div>            
    @endif

    <section class="min-h-screen flex box-border justify-center items-center">
        <div class="bg-gray-100 rounded-2xl flex max-w-3xl p-5 items-center">
            <div class="md:w-1/2 px-8">
                <h2 class="font-bold text-3xl text-[#25d366]">Login</h2>
                <p class="text-sm mt-4">If you already a member, easily log in now.</p>
                <form action={{route('login')}} method="POST" class="flex flex-col gap-4">
                    @csrf
                    <div class="relative mt-8">
                        <input class="p-2 rounded-xl border w-full" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="text-sm text-red-500" role="alert">
                            {{ $message }}
                        </div>
                       @enderror
                    </div>
                   
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password" id="password"
                            placeholder="Password" value="{{ old('password') }}" required autocomplete="">
                         @error('password')
                            <div class="text-sm text-red-500" role="alert">
                                {{ $message }}
                            </div>
                           @enderror
                    </div>
                    <button class="bg-[#25d366] hover:bg-[#20b85c] text-white py-2 rounded-xl hover:scale-105 duration-300 font-medium" type="submit">Login</button>
                </form>
                <div class="mt-6 items-center">
                    <hr class="border-gray-300">
                    <p class="text-center text-sm">OR</p>
                    <hr class="border-gray-300">
                </div>
                <button
                    class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 font-medium hover:bg-green-200">
                    <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
                        <path fill="#FFC107"
                            d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                        </path>
                        <path fill="#FF3D00"
                            d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                        </path>
                        <path fill="#4CAF50"
                            d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                        </path>
                        <path fill="#1976D2"
                            d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                        </path>
                    </svg>
                    Login with Google
                </button>
                <a href="">
                    <button type="submit" class="mt-10 text-sm border-b border-gray-500 py-5 playfair tooltip">Forget
                        password?</button>
                </a>


                <div class="mt-4 text-sm flex justify-between items-center container-mr">
                    <p class="mr-3 md:mr-0 ">If you don't have an account..</p>
                    <a href={{route('user.create')}}
                        class="hover:border register text-white bg-[#25d366] hover:bg-[#20b85c] hover:border-gray-400 rounded-xl py-2 px-5 hover:scale-110 ] font-semibold duration-300">Register</a>
                </div>
            </div>
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl max-h-[1600px]" src={{ asset('assets/MainImage.avif') }} alt="login form image">
            </div>         
        </div>
    </section>
</x-layout>