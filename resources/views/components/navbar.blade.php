
<nav class="bg-white py-3 px-8 flex justify-between items-center">
    {{-- Left side - Logo and links  --}}
   <div class="flex items-center space-x-6">
      {{-- WhatsApp Logo  --}}
     <div class="flex items-center">
       <img src={{asset('assets/chatwave.png')}} alt="WhatsApp Logo" class="h-12 w-full" />
     </div>
     
      {{-- Navbar Links --}}
     <div class="hidden md:flex space-x-6 text-sm font-medium text-gray-700">
       <a  class="hover:underline">Features</a>
       <a  class="hover:underline">Privacy</a>
       <a  class="hover:underline">Help Center</a>
       <a  class="hover:underline">Apps</a>
     </div>
   </div>

    {{-- Right side - Log In and Download buttons  --}}
   <div class="flex items-center space-x-4">
       <a href={{route('page.login')}}>
       <button type="submit" class="text-sm font-medium text-gray-700 border border-gray-400 py-3 px-4 rounded-full hover:bg-gray-200">Log In</button>
       </a>
    
     <button class="text-sm font-medium text-white bg-[#25d366] py-3 px-4 rounded-full hover:bg-[#20b85c]">Download </button>
   </div>
 </nav>
