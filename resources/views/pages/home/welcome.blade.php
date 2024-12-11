
<x-layout>
    <!-- Navbar -->
    <x-navbar/>
    {{-- Section One --}}
    <section class="bg-white py-16">
      <div class="container mx-auto px-6 md:px-12 lg:px-24 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        {{-- {/* Left Side: Text Section */} --}}
        <div class="space-y-6">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-gray-900 mb-3">
            Let’s Connect <br /> with Your Friend <br /> in Real Time
          </h1>

          <a to="/auth">
            <button class="bg-[#25d366] text-white font-medium py-3 px-6 rounded-full hover:bg-[#20b85c] transition">
              Start Chatting Now
            </button>
          </a>

          {{-- {/* Stats Section */} --}}
          <div class="flex items-center space-x-8">
            <div class="flex items-center space-x-2">
              <img
                src={{asset('assets/Menjpg.jpg')}}
                alt="User"
                class="h-10 w-10 rounded-full border-2 border-white shadow-md"
              />
              <img
                src={{asset('assets/Women.avif')}}
                alt="User"
                class="h-10 w-10 rounded-full border-2 border-white shadow-md -ml-4"
              />
              <p class="text-lg font-semibold text-gray-900">
                20+ <br />
                <span class="text-sm text-gray-500">Happy Customers</span>
              </p>
            </div>

            <div class="text-lg font-semibold text-gray-900">
              2.5/5 <br />
              <span class="text-sm text-gray-500">Rating</span>
            </div>
          </div>
        </div>

        {{-- {/* Right Side: Image Section */} --}}
        <div class="relative">
          {{-- {/* Main Image */} --}}
          <img
            src={{asset('assets/MainImage.avif')}}
            alt="Person with phone"
            class="w-full lg:w-3/4 mx-auto"
          />

          {{-- {/* Chat Bubbles */} --}}
          <div class="absolute top-10 left-0 w-48 p-4 bg-white rounded-xl shadow-lg">
            <p class="text-sm font-semibold text-gray-800">Rihana</p>
            <p class="text-sm text-gray-600">Hii</p>
          </div>

          <div class="absolute bottom-10 right-0 w-48 p-4 bg-white rounded-xl shadow-lg">
            <p class="text-sm font-semibold text-gray-800">Random Khan</p>
            <p class="text-sm text-gray-600">Bye</p>
          </div>
        </div>
      </div>
    </section>
        {{-- Section Two --}}
        <section class="bg-white py-16">
          <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">
              Features For a Better Experience
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
              <div class="bg-gray-100 rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Messaging</h3>
                <p class="text-gray-600">
                  This software is very easy for you to manage. You can use it as
                  you wish.
                </p>
              </div>
              <div class="bg-gray-100 rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Save Your Time</h3>
                <p class="text-gray-600">
                  This software is very easy for you to manage. You can use it as
                  you wish.
                </p>
              </div>
              <div class="bg-gray-100 rounded-lg shadow-md p-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Keep Safe & Private</h3>
                <p class="text-gray-600">
                  This software is very easy for you to manage. You can use it as
                  you wish.
                </p>
              </div>
            </div>
          </div>
        </section>
    {{-- Section Three --}}
    <div class="flex flex-col items-center justify-center min-h-screen bg-white">
      <div class="flex flex-col md:flex-row items-center max-w-4xl w-full mx-auto px-4">
        {{-- {/* Left section with images and messages */} --}}
        <div class="flex flex-col items-center md:items-start space-y-6">
          {{-- {/* First user */} --}}
          <div class="relative">
            <img
              src={{asset('assets/Menjpg.jpg')}}
              alt="User 1"
              class="w-24 h-24 rounded-full object-cover"
            />

            <div class="bg-white shadow-md p-3 rounded-lg mt-2 text-black">
              Hello, I need some help
            </div>
          </div>

          {{-- {/* Second user */} --}}
          <div class="relative">
            <img
              src={{asset('assets/Women.avif')}}
              alt="User 2"
              class="w-24 h-24 rounded-full object-cover"
            />

            <div class="bg-white shadow-md p-3 rounded-lg mt-2 text-black">
              Hey, how can I help you?
            </div>
          </div>
        </div>

        {{-- {/* Right section with text */} --}}
        <div class="text-center md:text-left mt-6 md:mt-0 md:ml-12">
          <h1 class="text-4xl font-bold text-gray-800 mb-4">
            Your friends come to your phone.
          </h1>
          <p class="text-gray-500 max-w-md">
            term chatting or chitchat refers in general to communication between
            two or more parties that can occur in person, in today's modern age,
            it can also occur over the internet via Short Message Service (SMS)
            text message and Multimedia Messaging Service
          </p>
        </div>
      </div>

      <div class="text-center max-w-md w-full mt-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
          Get better work done
        </h1>

        <p class="text-gray-500 mb-6">
          See why millions of people across 195 countries use Dash.
        </p>

        <div class="flex items-center justify-center space-x-2">
            <a to='/auth'>
            <button class="bg-[#25d366] hover:bg-[#20b85c] text-white font-semibold py-3 px-6 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            Try for free
          </button>
            </a>
         
        </div>
      </div>
    </div>
    {{-- Section Four --}}
    <div class="flex items-center justify-center  bg-white">
      <div class="flex flex-col md:flex-row max-w-6xl w-full px-6 py-12 space-y-8 md:space-y-0 md:space-x-12">
        {{-- {/* Left Section (Text) */} --}}
        <div class="md:w-1/2">
          <h3 class="text-gray-500 text-sm font-semibold mb-2">Why ChatWave?</h3>
          <h1 class="text-4xl font-bold text-gray-800 mb-4">
            Our mission is user convenience
          </h1>
          <p class="text-gray-600">
            Chatwave makes your communication with relatives, work friends, and family more fun. Stay connected with them with plentiful features.
          </p>
        </div>
  
        {{-- {/* Right Section (Stats) */} --}}
        <div class="md:w-1/2 grid grid-cols-2 gap-6">
          {{-- {/* Stats Item 1 */} --}}
          <div class="flex items-center space-x-3">
            <FaComments class="text-2xl text-gray-600" />
            <div>
              <h2 class="text-3xl font-bold">20+</h2>
              <p class="text-gray-500">Message Sent</p>
            </div>
          </div>
  
          {{-- {/* Stats Item 2 */} --}}
          <div class="flex items-center space-x-3">
            <FaUsers class="text-2xl text-gray-600" />
            <div>
              <h2 class="text-3xl font-bold">50</h2>
              <p class="text-gray-500">Active User</p>
            </div>
          </div>
  
          {{-- {/* Stats Item 3 */} --}}
          <div class="flex items-center space-x-3">
            <FaGlobe class="text-2xl text-gray-600" />
            <div>
              <h2 class="text-3xl font-bold">1+</h2>
              <p class="text-gray-500">Available countries</p>
            </div>
          </div>
  
          {{-- {/* Stats Item 4 */} --}}
          <div class="flex items-center space-x-3">
            <FaBolt class="text-2xl text-gray-600" />
            <div>
              <h2 class="text-3xl font-bold">0x</h2>
              <p class="text-gray-500">Send & Upload Speed</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Footer -->
<x-footer/>
</x-layout>
