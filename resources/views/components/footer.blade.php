
<footer
    class="{{ Route::currentRouteName() === 'home' ? 'bg-gray-50 text-gray-800' : 'bg-gray-900 text-white' }} pt-16 pb-8 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Decorative elements -->
    <div
        class="pointer-events-none absolute -bottom-20 -right-20 w-40 h-40 sm:w-56 sm:h-56 md:w-64 md:h-64 rounded-full {{ Route::currentRouteName() === 'home' ? 'bg-blue-200/40' : 'bg-blue-900/20' }} blur-xl z-0">
    </div>
    <div
        class="pointer-events-none absolute -top-10 -left-10 w-28 h-28 sm:w-40 sm:h-40 md:w-48 md:h-48 rounded-full {{ Route::currentRouteName() === 'home' ? 'bg-purple-200/40' : 'bg-purple-900/20' }} blur-xl z-0">
    </div>
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 items-start">
            <!-- Company Info -->
            <div class="sm:col-span-2 lg:col-span-1 flex flex-col mb-10 sm:mb-0">
                <div class="mb-6 flex items-center">
                    <img class="h-8 mr-2"
                        src="{{ Route::currentRouteName() === 'home' ? asset('imgs/logo-dark.png') : asset('imgs/logo-light.png') }}"
                        alt="Sandbox Logo">
                    <h3 class="text-2xl font-bold">
                        <span
                            class="{{ Route::currentRouteName() === 'home' ? 'text-primary' : 'text-primary' }}">Sand</span><span
                            class="{{ Route::currentRouteName() === 'home' ? 'text-gray-800' : 'text-white' }}">Box</span>
                    </h3>
                </div>
                <div class="w-16 h-1 bg-gradient-to-r from-primary to-secondary rounded-full mb-4"></div>
                <p
                    class="{{ Route::currentRouteName() === 'home' ? 'text-gray-500' : 'text-gray-400' }} mb-6 leading-relaxed">
                    Creating digital experiences that inspire and transform businesses.
                </p>
                <div class="flex space-x-3 mt-auto">
                    <a href="#" class="social-icon" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Dribbble">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col md:ml-8 mb-10 sm:mb-0">
                <h4 class="text-lg font-semibold mb-6 relative inline-block">
                    Quick Links
                    <span
                        class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-primary to-secondary rounded-full"></span>
                </h4>
                <ul class="space-y-3 flex-1">
                    <li>
                        <a href="{{ route('about') }}" class="nav-link">
                            <span class="nav-link-bullet"></span>
                            <span class="nav-link-text">About Us</span>
                            <i class="nav-link-chevron"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="nav-link">
                            <span class="nav-link-bullet"></span>
                            <span class="nav-link-text">Services</span>
                            <i class="nav-link-chevron"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('projects') }}" class="nav-link">
                            <span class="nav-link-bullet"></span>
                            <span class="nav-link-text">Case Studies</span>
                            <i class="nav-link-chevron"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/blog') }}" class="nav-link">
                            <span class="nav-link-bullet"></span>
                            <span class="nav-link-text">Blog</span>
                            <i class="nav-link-chevron"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="nav-link">
                            <span class="nav-link-bullet"></span>
                            <span class="nav-link-text">Contact</span>
                            <i class="nav-link-chevron"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col md:ml-8 mb-10 sm:mb-0">
                <h4 class="text-lg font-semibold mb-6 relative inline-block">
                    Contact Us
                    <span
                        class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-primary to-secondary rounded-full"></span>
                </h4>
                <address
                    class="not-italic {{ Route::currentRouteName() === 'home' ? 'text-gray-500' : 'text-gray-400' }} space-y-3">
                    <div class="flex items-start">
                        <i
                            class="fas fa-map-marker-alt mt-1 mr-3 {{ Route::currentRouteName() === 'home' ? 'text-blue-500' : 'text-blue-400' }}"></i>
                        <span>123 Design Street, Creative City, CA 90210</span>
                    </div>
                    <div class="flex items-center">
                        <i
                            class="fas fa-phone-alt mr-3 {{ Route::currentRouteName() === 'home' ? 'text-blue-500' : 'text-blue-400' }}"></i>
                        <span>+1 (234) 567-8900</span>
                    </div>
                    <div class="flex items-center">
                        <i
                            class="fas fa-envelope mr-3 {{ Route::currentRouteName() === 'home' ? 'text-blue-500' : 'text-blue-400' }}"></i>
                        <a href="mailto:hello@sandbox.com" class="hover:underline">hello@sandbox.com</a>
                    </div>
                </address>
            </div>

            <!-- Newsletter Section -->
            <div class="flex flex-col">
                <h4 class="text-lg font-semibold mb-6 relative inline-block">
                    Newsletter
                    <span
                        class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-primary to-secondary rounded-full"></span>
                </h4>
                <p
                    class="{{ Route::currentRouteName() === 'home' ? 'text-gray-500' : 'text-gray-400' }} mb-4 leading-relaxed">
                    Subscribe to our newsletter for the latest updates, news, and exclusive offers.
                </p>
                <form class="flex flex-col space-y-4 mt-auto w-full">
                    <div class="relative group w-full">
                        <input type="email" placeholder="Your Email Address"
                            class="newsletter-input w-full pr-12 pl-10 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary transition-all {{ Route::currentRouteName() === 'home' ? 'bg-white text-gray-800 placeholder-gray-400' : 'bg-gray-800 text-white placeholder-gray-400 border-gray-700' }}">
                        <i
                            class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 {{ Route::currentRouteName() === 'home' ? 'text-gray-400 group-focus-within:text-primary' : 'text-gray-500 group-focus-within:text-primary' }} transition-colors"></i>
                    </div>
                    <div class="flex items-start">
                        <input type="checkbox" id="privacy"
                            class="mt-1 mr-2 {{ Route::currentRouteName() === 'home' ? 'accent-blue-500' : 'accent-blue-400' }}">
                        <label for="privacy"
                            class="text-sm {{ Route::currentRouteName() === 'home' ? 'text-gray-400' : 'text-gray-500' }}">
                            I agree to the privacy policy
                        </label>
                    </div>
                    <button type="submit"
                        class="newsletter-button w-full sm:w-auto flex items-center justify-center bg-primary hover:bg-secondary text-white rounded-lg px-5 py-3 text-sm font-medium transition-colors shadow-lg">
                        <span>Subscribe Now</span>
                        <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div
            class="border-t {{ Route::currentRouteName() === 'home' ? 'border-gray-200' : 'border-gray-800' }} mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p
                class="{{ Route::currentRouteName() === 'home' ? 'text-gray-400' : 'text-gray-500' }} text-sm mb-4 md:mb-0 text-center">
                &copy; 2024 Sandbox. All rights reserved.
            </p>
            <div class="flex flex-wrap justify-center gap-4 md:gap-6">
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Cookies</a>
                <a href="#" class="footer-link">Sitemap</a>
            </div>
        </div>
    </div>
</footer>


<style>
    @media (max-width: 640px) {
        .nav-link {
            flex-direction: row !important;
            align-items: center !important;
        }

        .newsletter-button {
            width: 100% !important;
        }
    }

    .social-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 9999px;

        background: {
                {
                Route: :currentRouteName()==='home' ? '#f3f4f6': '#1f2937'
            }
        }

        ;

        color: {
                {
                Route: :currentRouteName()==='home' ? '#374151': '#fff'
            }
        }

        ;
        transition: background 0.2s,
        color 0.2s,
        transform 0.2s;
    }

    .social-icon:hover {
        background: {
                {
                Route: :currentRouteName()==='home' ? '#e5e7eb': '#374151'
            }
        }

        ;
        color: #6366f1;
        transform: translateY(-2px) scale(1.05);
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 0;
        color: inherit;
        text-decoration: none;
        transition: color 0.2s;
    }

    .nav-link:hover {
        color: #6366f1;
    }

    .nav-link-bullet {
        display: inline-block;
        width: 0.5rem;
        height: 0.5rem;
        background: linear-gradient(90deg, #6366f1, #ec4899);
        border-radius: 9999px;
        margin-right: 0.5rem;
    }

    .nav-link-chevron {
        margin-left: auto;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f054";
        font-size: 0.75rem;
    }

    .footer-link {
        color: inherit;
        text-decoration: none;
        font-size: 0.95rem;
        transition: color 0.2s;
    }

    .footer-link:hover {
        color: #6366f1;
    }

    .newsletter-input {
        padding-left: 2.5rem;
    }
</style>