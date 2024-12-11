<div class="flex-1 md:flex flex-col justify-center items-center hidden">
    <img class="h-56 w-72" src="{{ asset('assets/chatwave.png') }}" alt="our logo" />
    <div class="text-opacity-80 flex flex-col items-center mt-5 lg:text-2xl text-center">
        <h1>Your messages</h1>
        <p class="pb-2 text-sm">Send a message to start a chat.</p>

        <!-- Dialog for New Message -->
        <div>
            <!-- Trigger Button -->
            <button onclick="toggleModal('searchcontact')" class="px-7 py-2 bg-blue-400 hover:bg-blue-500 text-white"  type="button">
                Send Message
            </button>
             <!-- Dialog Content -->
            {{-- <x-searchcontact/> --}}
            <div id="searchcontact" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
                <div class="bg-white border-none w-[600px] h-[400px] flex flex-col rounded-lg p-4">
                    <button type="button" class="text-gray-500 hover:text-gray-700" onclick="toggleModal('searchcontact')">
                        &times;
                    </button>
                    <!-- Dialog Header -->
                    <div class="text-center font-semibold text-lg">
                        New Message
                    </div>
                    <span class="border-b border-gray-600 my-2"></span>
            
                    <!-- Search Input -->
                    <div class="flex items-center space-x-4 mb-2">
                        <span>To:</span>
                        <form action="{{ route('user.search') }}" method="get">
                           <input class="w-full focus:outline-none focus:border-transparent" type="text" placeholder="Search..." name="usersearch" id="usersearch"/>
                        </form>
                    </div>
                    <span class="border-b border-gray-600 my-2"></span>
               {{-- {{dd($userdata)}} --}}
                    <!-- Search Results -->
                    <div class="border-t pt-4">
                        @if($userdata->isEmpty())
                            <div class="text-gray-500">No account found.</div>
                        @else
                            <div class="space-y-4">
                                @foreach($userdata as $user)
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12">
                                            <img src="{{ $user->picture ?? 'https://via.placeholder.com/150' }}" 
                                                 alt="image" 
                                                 class="w-full h-full rounded-full object-cover">
                                        </div>
                                        <h1>{{ $user->firstname }}</h1>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
            
                    <!-- Chat Button -->
                    <div class="text-center mt-4">
                        <button  class="bg-blue-500 hover:bg-blue-600 text-white px-28" 
                            type="button"> Chat </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>