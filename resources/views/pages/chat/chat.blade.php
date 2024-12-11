<x-layout>
    @if (session('success'))
    <div class="fixed top-10 right-10 max-w-xs bg-green-200 border border-gray-200 rounded-xl shadow-lg" role="alert" tabindex="-1" aria-labelledby="hs-toast-error-example-label" id="alert">
        <div class="flex p-4">
            <div class="shrink-0">
                <p>Success!</p>
            </div>
            <div class="ml-3">
                <p id="hs-toast-error-example-label" class="text-sm text-gray-700">
                    {{ session()->get('success') }}
                </p>
            </div>
            <button  onclick="document.getElementById('alert').style.display='none'" >
                <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </button>
           
        </div>
    </div>            
    @endif
    {{-- {{dd( $userdata) }} --}}
     <div class="flex h-[100vh] overflow-hidden">
        @include('pages.chat.subpages.contact_container.Contact')
        @include('pages.chat.subpages.empty_container.Empty')
        {{-- @include('pages.chat.subpages.chating.chatting') --}}
      </div>   
</x-layout>