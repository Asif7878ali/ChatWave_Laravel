<div class="bg-gray-100 p-4 flex items-center space-x-4">
    @if (empty($user->picture))
        <img src="https://wingandaprayer.live/wp-content/uploads/2018/07/no-image-available.jpg" alt="User Profile"
            class="w-12 h-12 rounded-full">
    @else
        <img  src="{{ asset('storage/' . $user->picture) }}" alt="User Profile" class="w-12 h-12 rounded-full">
    @endif

    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between w-full">
        @if (empty($user->username))
            <p class="font-bold">Loading...</p>
        @else
            <p class="font-bold">{{$user->username }}</p>
        @endif

        <div class="pt-1 sm:pt-0 sm:ml-auto flex space-x-3">
            <div class="flex space-x-3">
                <svg class="w-6 h-6 text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                </svg>

                <svg class="cursor-pointer" onclick="toggleModal('logout')" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    width="24" height="24" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                        <circle cx="45" cy="45" r="45"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(230,62,50); fill-rule: nonzero; opacity: 1;"
                            transform="  matrix(1 0 0 1 0 0) " />
                        <path
                            d="M 70.958 46.112 c 0.018 -0.027 0.029 -0.057 0.046 -0.084 c 0.051 -0.084 0.1 -0.168 0.138 -0.259 c 0.016 -0.038 0.023 -0.079 0.037 -0.118 c 0.029 -0.084 0.06 -0.166 0.077 -0.255 c 0.026 -0.129 0.04 -0.262 0.04 -0.395 s -0.014 -0.266 -0.04 -0.395 c -0.018 -0.088 -0.049 -0.171 -0.077 -0.255 c -0.014 -0.039 -0.021 -0.08 -0.037 -0.118 c -0.038 -0.091 -0.088 -0.176 -0.138 -0.259 c -0.016 -0.027 -0.028 -0.058 -0.046 -0.084 c -0.073 -0.109 -0.156 -0.211 -0.249 -0.303 L 60.605 33.482 c -0.781 -0.781 -2.047 -0.781 -2.828 0 c -0.781 0.781 -0.781 2.047 0 2.828 l 6.69 6.69 H 39.863 c -1.104 0 -2 0.896 -2 2 s 0.896 2 2 2 h 24.604 l -6.69 6.69 c -0.781 0.781 -0.781 2.047 0 2.828 c 0.391 0.391 0.902 0.586 1.414 0.586 s 1.023 -0.195 1.414 -0.586 l 10.103 -10.103 C 70.801 46.323 70.884 46.221 70.958 46.112 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        <path
                            d="M 49.887 55.336 c -1.104 0 -2 0.896 -2 2 v 6.602 H 26.704 V 26.062 h 21.183 v 6.602 c 0 1.104 0.896 2 2 2 s 2 -0.896 2 -2 v -8.602 c 0 -1.104 -0.896 -2 -2 -2 H 24.704 c -1.104 0 -2 0.896 -2 2 v 41.875 c 0 1.104 0.896 2 2 2 h 25.183 c 1.104 0 2 -0.896 2 -2 v -8.602 C 51.887 56.231 50.991 55.336 49.887 55.336 z"
                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;"
                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                </svg>
            </div>
        </div>
         <!-- Modal -->
         <x-logout />
    </div>
</div>
