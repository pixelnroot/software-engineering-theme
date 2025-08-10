{{-- <div
  class="flex flex-row h-20 p-4 justify-around items-center bg-white fixed top-0 left-0 w-full z-50 opacity-95 shadow">
  <a class="flex" href="#"><img class="h-6" src="{{ asset('storage/images/home/logo_01.png') }}" alt="" /></a>

  <!-- Hamburger Button (visible below md) -->
  <button id="nav-toggle" class="block md:hidden text-gray-600 focus:outline-none">
    <svg id="nav-hamburger" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
    <svg id="nav-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>

  <!-- Navigation Menu -->
  <ul id="nav-menu"
    class="transition-all duration-300 ease-in-out transform scale-y-0 origin-top md:scale-y-100 hidden md:flex flex-row space-x-7 my-auto font-semibold text-gray-600 text-[17px] mr-20 absolute md:static top-20 left-0 w-full md:w-auto bg-white md:bg-transparent shadow md:shadow-none z-40 md:z-auto">
    <li><a class="hover:text-indigo-500" href="{{ route('home') }}">Home</a></li>
    <li><a class="hover:text-indigo-500" href="{{ route('services') }}">Services</a></li>
    <li><a class="hover:text-indigo-500" href="{{ route('projects') }}">Projects</a></li>
    <li><a class="hover:text-indigo-500" href="{{ route('team') }}">Our Team</a></li>
    <li><a class="hover:text-indigo-500" href="{{ route('about') }}">About</a></li>
    <li><a class="hover:text-indigo-500" href="{{ route('contact') }}">Contact</a></li>
  </ul>

  <ul class="hidden lg:flex flex-row space-x-4 my-auto items-center mr-15">
    <li><a href="#"><i class="fa-brands fa-twitter text-blue-400 transition ease-in-out hover:-translate-y-1"></i></a>
    </li>
    <li><a href="#"><i
          class="fa-brands fa-facebook-f text-blue-500 transition ease-in-out hover:-translate-y-1"></i></a></li>
    <li><a href="#"><i class="fa-solid fa-basketball text-red-400 transition ease-in-out hover:-translate-y-1"></i></a>
    </li>
    <li><a href="#"><i
          class="fa-brands fa-instagram text-red-400 text-lg transition ease-in-out hover:-translate-y-1"></i></a></li>
  </ul>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
      const navToggle = document.getElementById('nav-toggle');
      const navMenu = document.getElementById('nav-menu');
      const navHamburger = document.getElementById('nav-hamburger');
      const navClose = document.getElementById('nav-close');

      function openMenu() {
        navMenu.classList.remove('hidden');
        navMenu.classList.remove('scale-y-0');
        navMenu.classList.add('scale-y-100');
        navHamburger.classList.add('hidden');
        navClose.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent background scroll
      }

      function closeMenu() {
        navMenu.classList.add('scale-y-0');
        navMenu.classList.remove('scale-y-100');
        setTimeout(() => navMenu.classList.add('hidden'), 300);
        navHamburger.classList.remove('hidden');
        navClose.classList.add('hidden');
        document.body.style.overflow = '';
      }

      navToggle.addEventListener('click', function () {
        if (navMenu.classList.contains('hidden') || navMenu.classList.contains('scale-y-0')) {
          openMenu();
        } else {
          closeMenu();
        }
      });

      // Close menu when clicking outside (mobile only)
      document.addEventListener('click', function (e) {
        if (
          window.innerWidth < 768 &&
          !navMenu.contains(e.target) &&
          !navToggle.contains(e.target) &&
          !navMenu.classList.contains('hidden')
        ) {
          closeMenu();
        }
      });

      // Close menu when clicking a menu item (mobile only)
      navMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', function () {
          if (window.innerWidth < 768) closeMenu();
        });
      });
    });
</script> --}}

<div class="bg-gray-50 text-gray-800 font-sans antialiased">
  <!-- Navigation -->
  <div class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-xs border-b border-gray-200">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
        <!-- Logo -->
        <div class="flex items-center">
          <a href="#" class="flex items-center space-x-2">
            <img src="" alt="">
            <span class="text-xl font-bold text-gray-900">SandBox</span>
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">
          <a href="{{ route('home') }}" class="text-base font-semibold text-gray-500 hover:text-indigo-600 transition">Home</a>
          <a href="{{ route('services') }}" class="text-base font-semibold text-gray-500 hover:text-indigo-600 transition">Services</a>
          <a href="{{ route('projects') }}" class="text-base font-semibold text-gray-500 hover:text-indigo-600 transition">Projects</a>
          <a href="{{ route('team') }}" class="text-base font-semibold text-gray-500 hover:text-indigo-600 transition">Team</a>
          <a href="{{ route('about') }}" class="text-base font-semibold text-gray-500 hover:text-indigo-600 transition">About</a>
          <a href="{{ route('contact') }}" class="text-base font-semibold text-gray-500 hover:text-indigo-600 transition">Contact</a>
        </div>

        <!-- Mobile Button -->
        <button id="menu-btn" class="md:hidden p-2 rounded-md hover:bg-gray-100 transition">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile Menu -->
      <div id="mobile-menu" class="md:hidden hidden pb-4">
        <div class="flex flex-col text-center space-y-3">
          <a href="{{ route('home') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md transition">Home</a>
          <a href="{{ route('services') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md transition ">Services
          </a>
          <a href="{{ route('projects') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md transition">Projects</a>
          <a href="{{ route('team') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md transition">Team</a>
          <a href="{{ route('about') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md transition">About</a>
          <a href="{{ route('contact') }}"
            class="block px-3 py-2 text-base font-semibold text-gray-700 hover:text-indigo-600 hover:bg-gray-50 rounded-md transition">Contact</a>
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
                // Toggle the mobile menu
                mobileMenu.classList.toggle("hidden");

                // Change the hamburger icon to X when menu is open
                const isExpanded = mobileMenu.classList.contains("hidden") ? "false" : "true";
                menuBtn.setAttribute("aria-expanded", isExpanded);

                // Update the icon
                const icon = menuBtn.querySelector("svg");
                if (isExpanded === "true") {
                    icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>`;
                } else {
                    icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>`;
                }
            });
        });
</script>