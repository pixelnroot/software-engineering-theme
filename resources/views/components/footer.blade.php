<footer
    class="{{ Route::currentRouteName() !== 'home' ? 'bg-gradient-to-br from-gray-900 to-gray-800' : 'bg-gradient-to-br from-gray-50 to-white' }} text-gray-600 py-12 px-4 sm:px-8 lg:px-12 ">
    <!-- Decorative elements -->
    <div
        class="absolute -bottom-20 -right-20 w-40 h-40 sm:w-56 sm:h-56 md:w-64 md:h-64 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-blue-900/20' : 'bg-blue-200/40' }} blur-xl">
    </div>
    <div
        class="absolute -top-10 -left-10 w-28 h-28 sm:w-40 sm:h-40 md:w-48 md:h-48 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-purple-900/20' : 'bg-purple-200/40' }} blur-xl">
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10">
            <!-- Brand Column -->
            <div class="space-y-6">
                <div class="flex items-center">
                    <img class="h-8"
                        src="{{ Route::currentRouteName() !== 'home' ? 'imgs/logo-light.png' : 'imgs/logo-dark.png' }}"
                        alt="">
                    <span
                        class="ml-0 text-xl font-bold {{ Route::currentRouteName() !== 'home' ? 'text-white' : 'text-gray-800' }}">Sandbox</span>
                </div>
                <p
                    class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400' : 'text-gray-500' }} leading-relaxed">
                    Creating digital experiences that inspire and transform businesses.
                </p>
                <div class="flex space-x-3 sm:space-x-4">
                    <a href="#"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-800 hover:bg-gray-700' : 'bg-gray-100 hover:bg-gray-200' }} flex items-center justify-center transition-all hover:-translate-y-1">
                        <i
                            class="fab fa-twitter {{ Route::currentRouteName() !== 'home' ? 'text-blue-400' : 'text-blue-500' }}"></i>
                    </a>
                    <a href="#"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-800 hover:bg-gray-700' : 'bg-gray-100 hover:bg-gray-200' }} flex items-center justify-center transition-all hover:-translate-y-1">
                        <i
                            class="fab fa-instagram {{ Route::currentRouteName() !== 'home' ? 'text-pink-400' : 'text-pink-500' }}"></i>
                    </a>
                    <a href="#"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-800 hover:bg-gray-700' : 'bg-gray-100 hover:bg-gray-200' }} flex items-center justify-center transition-all hover:-translate-y-1">
                        <i
                            class="fab fa-linkedin-in {{ Route::currentRouteName() !== 'home' ? 'text-blue-300' : 'text-blue-600' }}"></i>
                    </a>
                    <a href="#"
                        class="w-9 h-9 sm:w-10 sm:h-10 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-800 hover:bg-gray-700' : 'bg-gray-100 hover:bg-gray-200' }} flex items-center justify-center transition-all hover:-translate-y-1">
                        <i
                            class="fab fa-dribbble {{ Route::currentRouteName() !== 'home' ? 'text-pink-300' : 'text-pink-400' }}"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3
                    class="text-lg font-semibold mb-4 sm:mb-6 {{ Route::currentRouteName() !== 'home' ? 'text-white' : 'text-gray-800' }}">
                    Quick Links</h3>
                <ul class="space-y-2 sm:space-y-3">
                    <li><a href="#"
                            class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} transition-colors flex items-center">
                            <span
                                class="w-1 h-1 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-500' : 'bg-gray-400' }} mr-2"></span>
                            About Us
                        </a></li>
                    <li><a href="#"
                            class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} transition-colors flex items-center">
                            <span
                                class="w-1 h-1 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-500' : 'bg-gray-400' }} mr-2"></span>
                            Services
                        </a></li>
                    <li><a href="#"
                            class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} transition-colors flex items-center">
                            <span
                                class="w-1 h-1 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-500' : 'bg-gray-400' }} mr-2"></span>
                            Case Studies
                        </a></li>
                    <li><a href="#"
                            class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} transition-colors flex items-center">
                            <span
                                class="w-1 h-1 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-500' : 'bg-gray-400' }} mr-2"></span>
                            Blog
                        </a></li>
                    <li><a href="#"
                            class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} transition-colors flex items-center">
                            <span
                                class="w-1 h-1 rounded-full {{ Route::currentRouteName() !== 'home' ? 'bg-gray-500' : 'bg-gray-400' }} mr-2"></span>
                            Contact
                        </a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3
                    class="text-lg font-semibold mb-4 sm:mb-6 {{ Route::currentRouteName() !== 'home' ? 'text-white' : 'text-gray-800' }}">
                    Contact Us</h3>
                <address
                    class="not-italic {{ Route::currentRouteName() !== 'home' ? 'text-gray-400' : 'text-gray-500' }} space-y-2 sm:space-y-3">
                    <div class="flex items-start">
                        <i
                            class="fas fa-map-marker-alt mt-1 mr-3 {{ Route::currentRouteName() !== 'home' ? 'text-blue-400' : 'text-blue-500' }}"></i>
                        <span>123 Design Street, Creative City, CA 90210</span>
                    </div>
                    <div class="flex items-center">
                        <i
                            class="fas fa-phone-alt mr-3 {{ Route::currentRouteName() !== 'home' ? 'text-blue-400' : 'text-blue-500' }}"></i>
                        <span>+1 (234) 567-8900</span>
                    </div>
                    <div class="flex items-center">
                        <i
                            class="fas fa-envelope mr-3 {{ Route::currentRouteName() !== 'home' ? 'text-blue-400' : 'text-blue-500' }}"></i>
                        <a href="mailto:hello@sandbox.com" class="hover:underline">hello@sandbox.com</a>
                    </div>
                </address>
            </div>

            <!-- Newsletter -->
            <div >
                <h3
                    class="text-lg font-semibold mb-4 sm:mb-6 {{ Route::currentRouteName() !== 'home' ? 'text-white' : 'text-gray-800' }}">
                    Newsletter</h3>
                <p class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400' : 'text-gray-500' }} mb-3 sm:mb-4">
                    Subscribe to get updates on our latest projects and offers.
                </p>
                <form class="space-y-3 sm:space-y-4">
                    <div class="flex w-full">
                        <input type="email" placeholder="Your email"
                            class="flex-1 min-w-0 px-4 py-3 rounded-l-lg {{ Route::currentRouteName() !== 'home' ? 'bg-gray-800 border-gray-700 text-white placeholder-gray-500 focus:ring-pink-400' : 'bg-white border-gray-300 text-gray-800 placeholder-gray-400 focus:ring-pink-300' }} border focus:outline-none focus:ring-2 transition-all">
                        <button type="submit"
                            class="{{ Route::currentRouteName() !== 'home' ? 'bg-pink-500 hover:bg-pink-600' : 'bg-pink-400 hover:bg-pink-500' }} text-white rounded-r-lg px-5 py-3 text-sm font-medium transition-colors shadow-lg flex-shrink-0">
                            Join
                        </button>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="privacy"
                            class="mt-1 mr-2 {{ Route::currentRouteName() !== 'home' ? 'accent-blue-500' : 'accent-blue-400' }}">
                        <label for="privacy"
                            class="text-sm {{ Route::currentRouteName() !== 'home' ? 'text-gray-400' : 'text-gray-500' }}">
                            I agree to the privacy policy
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div
            class="border-t {{ Route::currentRouteName() !== 'home' ? 'border-gray-800' : 'border-gray-200' }} mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-500' : 'text-gray-400' }} text-sm">
                &copy; 2024 Sandbox. All rights reserved.
            </p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#"
                    class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} text-sm transition-colors">Privacy
                    Policy</a>
                <a href="#"
                    class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} text-sm transition-colors">Terms
                    of Service</a>
                <a href="#"
                    class="{{ Route::currentRouteName() !== 'home' ? 'text-gray-400 hover:text-white' : 'text-gray-500 hover:text-gray-800' }} text-sm transition-colors">Cookies</a>
            </div>
        </div>
    </div>
</footer>