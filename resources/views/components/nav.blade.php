<div class="bg-gray-50 text-gray-800 font-sans antialiased">
  <!-- Navigation -->
  <div class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-xs shadow-md">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-20 items-center">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="#" class="flex items-center space-x-2">
            <img class="h-8" src="{{ asset('storage/images/home/logo_01.png') }}" alt="">
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="{{ route('home') }}"
            class="text-base font-semibold text-gray-500 hover:text-pink-600 transition">Home</a>
          <a href="{{ route('services') }}"
            class="text-base font-semibold text-gray-500 hover:text-pink-600 transition">Services</a>
          <a href="{{ route('projects') }}"
            class="text-base font-semibold text-gray-500 hover:text-pink-600 transition">Projects</a>
          <a href="{{ route('team') }}"
            class="text-base font-semibold text-gray-500 hover:text-pink-600 transition">Team</a>
          <a href="{{ route('about') }}"
            class="text-base font-semibold text-gray-500 hover:text-pink-600 transition">About</a>
          <a href="{{ route('contact') }}"
            class="text-base font-semibold text-gray-500 hover:text-pink-600 transition">Contact</a>
        </div>

        <!-- Mobile Button -->
        <button id="menu-btn" class="md:hidden p-2 rounded-md hover:bg-gray-100 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden max-h-0 overflow-hidden ease-in transition-all duration-300">
        <div class="flex flex-col text-center space-y-3 py-2">
          <a href="{{ route('home') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-pink-600 hover:bg-gray-50 rounded-md transition">Home</a>
          <a href="{{ route('services') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-pink-600 hover:bg-gray-50 rounded-md transition">Services</a>
          <a href="{{ route('projects') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-pink-600 hover:bg-gray-50 rounded-md transition">Projects</a>
          <a href="{{ route('team') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-pink-600 hover:bg-gray-50 rounded-md transition">Team</a>
          <a href="{{ route('about') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-pink-600 hover:bg-gray-50 rounded-md transition">About</a>
          <a href="{{ route('contact') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-pink-600 hover:bg-gray-50 rounded-md transition">Contact</a>
        </div>
      </div>


    </nav>
  </div>
</div>



<script>
  document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuBtn.addEventListener("click", () => {
    const isOpen = mobileMenu.classList.contains("max-h-0");

    if (isOpen) {
      mobileMenu.classList.remove("max-h-0");
      mobileMenu.classList.add("max-h-[500px]"); // set a big enough height
    } else {
      mobileMenu.classList.add("max-h-0");
      mobileMenu.classList.remove("max-h-[500px]");
    }

    // Icon toggle
    const icon = menuBtn.querySelector("svg");
    if (isOpen) {
      icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>`;
    } else {
      icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>`;
    }
  });
});

</script>