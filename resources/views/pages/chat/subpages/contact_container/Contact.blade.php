<div class="relative md:w-[35vw] xl:w-[20vw] border-r border-gray-300 w-full h-screen">
    <section class="left flex flex-col h-full">
        <!-- Profile Display Component -->
        @include('pages.chat.subpages.contact_container.subui.Profiledisplay')

        <div class="overflow-y-auto flex-grow">
            <div class="py-4 flex items-center justify-center lg:text-2xl border-b border-gray-100">
                <h3>Messages</h3>
            </div>

            {{-- <!-- Conditional Rendering of Contacts -->
            @if (($contacts) > 0)
                @foreach ($contacts as $contact)
                    <div 
                        class="contact-item flex items-center justify-between p-4 cursor-pointer border-b"
                        data-id="{{ $contact->_id }}"
                    >
                        <div class="flex items-center space-x-4">
                            <img 
                                src="{{ $contact->image ?? 'https://via.placeholder.com/40' }}" 
                                alt="profile" 
                                class="w-10 h-10 rounded-full"
                            />
                            <div>
                                <p class="font-bold">
                                    {{ $contact->firstname }} {{ $contact->lastname }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    {{ \Carbon\Carbon::parse($contact->lastMessageTime)->format('d M Y, h:i A') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            {{-- @else --}}
                <div class="text-center p-4">
                    <h1>No Contact List</h1>
                </div>
            {{-- @endif --}}
        </div>
    </section>
</div>
