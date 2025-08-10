<div class="bg-white text-gray-800 mt-16">
    <section class="py-20 bg-gradient-to-r from-indigo-50 to-purple-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900">Meet Our Amazing Team</h1>
                <p class="text-xl text-gray-600 mb-8 max-w-lg">
                    We're a diverse group of passionate professionals dedicated to creating exceptional products and
                    experiences.
                </p>
                <div class="flex space-x-4">
                    <a href="#leadership"
                        class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-300 transform hover:scale-105">
                        Meet the Team
                    </a>
                    <a href="#culture"
                        class="px-6 py-3 border border-gray-300 hover:border-indigo-600 font-medium rounded-lg transition duration-300 transform hover:scale-105">
                        Our Culture
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <!-- Option 1: Diverse team working together -->
                <img src="{{ asset('storage/images/team/teamwork_01.jpg') }}"
                    class="hero-image w-full max-w-md rounded-lg shadow-lg object-cover">
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section id="leadership" class="py-16 bg-white"> 
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Leadership Team</h2>
                <div class="w-20 h-1 bg-indigo-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- CEO -->
                <div
                    class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile01.jpg') }}"
                            alt="Alex Morgan - CEO" class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Alex Morgan</h3>
                        <p class="text-indigo-600 mb-3">CEO & Founder</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Visionary leader with 15+ years in tech entrepreneurship. Passionate about building
                            inclusive tech communities.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Alex's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Alex's Twitter profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CTO -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 100ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile02.jpg') }}" alt="Jamie Lee - CTO"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Jamie Lee</h3>
                        <p class="text-indigo-600 mb-3">Chief Technology Officer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Tech architect with expertise in scalable systems. Loves solving complex problems with
                            elegant solutions.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Jamie's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Jamie's GitHub profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Head of Design -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 200ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile03.jpg') }}"
                            alt="Taylor Ray - Head of Design"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Taylor Ray</h3>
                        <p class="text-indigo-600 mb-3">Head of Design</p>
                        <p class="text-gray-600 text-sm mb-4">
                            UX/UI expert focused on creating intuitive, accessible, and beautiful digital experiences.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Taylor's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Taylor's Dribbble profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 24a12 12 0 1 1 0-24 12 12 0 0 1 0 24zm9.14-15.25a9.14 9.14 0 0 0-12.28-3.15c.43-.84.93-1.63 1.5-2.37a12.08 12.08 0 0 1 13.18-2.5 1.25 1.25 0 0 1 .4 2c-1.84 1.25-2.98 3.12-3.6 5.18-.3 1.07-.45 2.15-.45 3.28 0 .1 0 .2.02.3zm-18.28 0a9.14 9.14 0 0 0 12.28-3.15c-.43-.84-.93-1.63-1.5-2.37a12.08 12.08 0 0 1-13.18-2.5 1.25 1.25 0 0 0-.4 2c1.84 1.25 2.98 3.12 3.6 5.18.3 1.07.45 2.15.45 3.28 0 .1 0 .2-.02.3zm9.14 6.5a9.14 9.14 0 0 0-9.14 9.14c0 .5.04 1 .1 1.5a12.08 12.08 0 0 1 13.18-2.5 1.25 1.25 0 0 0 .4-2c-1.84-1.25-2.98-3.12-3.6-5.18-.3-1.07-.45-2.15-.45-3.28 0-.1 0-.2.02-.3zm0 0a9.14 9.14 0 0 1 9.14 9.14c0 .5-.04 1-.1 1.5a12.08 12.08 0 0 0-13.18-2.5 1.25 1.25 0 0 1-.4-2c1.84-1.25 2.98-3.12 3.6-5.18.3-1.07.45-2.15.45-3.28 0-.1 0-.2-.02-.3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Head of Product -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 300ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile04.jpg') }}"
                            alt="Jordan Kim - Head of Product"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Jordan Kim</h3>
                        <p class="text-indigo-600 mb-3">Head of Product</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Product strategist who bridges the gap between business goals and user needs.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Jordan's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Team -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Development Team</h2>
                <div class="w-20 h-1 bg-indigo-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Frontend Developer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 400ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile05.jpg') }}"
                            alt="Sarah Johnson - Frontend Developer"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Sarah Johnson</h3>
                        <p class="text-indigo-600 mb-3">Frontend Developer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            React specialist who crafts beautiful, performant interfaces with attention to detail.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Sarah's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Sarah's GitHub profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Backend Developer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 500ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile06.jpg') }}"
                            alt="Michael Chen - Backend Developer"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Michael Chen</h3>
                        <p class="text-indigo-600 mb-3">Backend Developer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Builds robust APIs and microservices. Python enthusiast with a love for clean architecture.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Michael's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Michael's GitHub profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Full Stack Developer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 600ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile07.jpg') }}"
                            alt="Alex Taylor - Full Stack Developer"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Alex Taylor</h3>
                        <p class="text-indigo-600 mb-3">Full Stack Developer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Versatile developer comfortable across the stack. Loves TypeScript and modern web standards.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Alex's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Alex's GitHub profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Mobile Developer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 700ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile08.jpg') }}"
                            alt="Jordan Patel - Mobile Developer"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Jordan Patel</h3>
                        <p class="text-indigo-600 mb-3">Mobile Developer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Creates smooth mobile experiences with React Native. Passionate about performance
                            optimization.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Jordan's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Jordan's GitHub profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Team -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">Design Team</h2>
                <div class="w-20 h-1 bg-indigo-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- UX Designer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 800ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile09.jpg') }}"
                            alt="Emma Rodriguez - UX Designer"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Emma Rodriguez</h3>
                        <p class="text-indigo-600 mb-3">UX Designer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Crafts intuitive user journeys with a focus on accessibility and inclusive design.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Emma's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Emma's Dribbble profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 24a12 12 0 1 1 0-24 12 12 0 0 1 0 24zm9.14-15.25a9.14 9.14 0 0 0-12.28-3.15c.43-.84.93-1.63 1.5-2.37a12.08 12.08 0 0 1 13.18-2.5 1.25 1.25 0 0 1 .4 2c-1.84 1.25-2.98 3.12-3.6 5.18-.3 1.07-.45 2.15-.45 3.28 0 .1 0 .2.02.3zm-18.28 0a9.14 9.14 0 0 0 12.28-3.15c-.43-.84-.93-1.63-1.5-2.37a12.08 12.08 0 0 1-13.18-2.5 1.25 1.25 0 0 0-.4 2c1.84 1.25 2.98 3.12 3.6 5.18.3 1.07.45 2.15.45 3.28 0 .1 0 .2-.02.3zm9.14 6.5a9.14 9.14 0 0 0-9.14 9.14c0 .5.04 1 .1 1.5a12.08 12.08 0 0 1 13.18-2.5 1.25 1.25 0 0 0 .4-2c-1.84-1.25-2.98-3.12-3.6-5.18-.3-1.07-.45-2.15-.45-3.28 0-.1 0-.2.02-.3zm0 0a9.14 9.14 0 0 1 9.14 9.14c0 .5-.04 1-.1 1.5a12.08 12.08 0 0 0-13.18-2.5 1.25 1.25 0 0 1-.4-2c1.84-1.25 2.98-3.12 3.6-5.18.3-1.07.45-2.15.45-3.28 0-.1 0-.2-.02-.3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- UI Designer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 900ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile10.jpg') }}"
                            alt="Ryan Smith - UI Designer" class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Ryan Smith</h3>
                        <p class="text-indigo-600 mb-3">UI Designer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Creates visually stunning interfaces with meticulous attention to detail and brand
                            consistency.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Ryan's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Ryan's Dribbble profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 24a12 12 0 1 1 0-24 12 12 0 0 1 0 24zm9.14-15.25a9.14 9.14 0 0 0-12.28-3.15c.43-.84.93-1.63 1.5-2.37a12.08 12.08 0 0 1 13.18-2.5 1.25 1.25 0 0 1 .4 2c-1.84 1.25-2.98 3.12-3.6 5.18-.3 1.07-.45 2.15-.45 3.28 0 .1 0 .2.02.3zm-18.28 0a9.14 9.14 0 0 0 12.28-3.15c-.43-.84-.93-1.63-1.5-2.37a12.08 12.08 0 0 1-13.18-2.5 1.25 1.25 0 0 0-.4 2c1.84 1.25 2.98 3.12 3.6 5.18.3 1.07.45 2.15.45 3.28 0 .1 0 .2-.02.3zm9.14 6.5a9.14 9.14 0 0 0-9.14 9.14c0 .5.04 1 .1 1.5a12.08 12.08 0 0 1 13.18-2.5 1.25 1.25 0 0 0 .4-2c-1.84-1.25-2.98-3.12-3.6-5.18-.3-1.07-.45-2.15-.45-3.28 0-.1 0-.2.02-.3zm0 0a9.14 9.14 0 0 1 9.14 9.14c0 .5-.04 1-.1 1.5a12.08 12.08 0 0 0-13.18-2.5 1.25 1.25 0 0 1-.4-2c1.84-1.25 2.98-3.12 3.6-5.18.3-1.07.45-2.15.45-3.28 0-.1 0-.2-.02-.3z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Graphic Designer -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 1000ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile11.jpg') }}"
                            alt="Olivia Martinez - Graphic Designer"
                            class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Olivia Martinez</h3>
                        <p class="text-indigo-600 mb-3">Graphic Designer</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Brings brands to life through compelling visual storytelling and creative direction.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Olivia's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Olivia's Instagram profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748 1.857.344.353.3.882.344 1.857.047 1.023.058 1.351.058 3.807v.468c0 2.456-.011 2.784-.058 3.807-.045.975-.207 1.504-.344 1.857-.182.467-.401.8-.748 1.15-.35.35-.683.566-1.15.748-.353.137-.882.3-1.857.344-1.054.048-1.37.058-4.041.058h-.08c-2.597 0-2.917-.01-3.96-.058-.976-.045-1.505-.207-1.858-.344-.467-.182-.8-.398-1.15-.748-.35-.35-.566-.683-.748-1.15-.137-.353-.3-.882-.344-1.857-.048-1.055-.058-1.37-.058-4.041v-.08c0-2.597.01-2.917.058-3.96.045-.976.207-1.505.344-1.858.182-.467.399-.8.748-1.15.35-.35.683-.566 1.15-.748 1.857-.137.353-.882.3 1.857-.344 1.023-.047 1.351-.058 3.807-.058h.468c2.456 0 2.784-.011 3.807-.058.975-.045 1.504-.207 1.857-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041.058h-.08c-2.597 0-2.917-.01-3.96-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- UX Researcher -->
                <div class="bg-white hover:cursor-pointer rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1 transform-gpu opacity-100 animate-fade-in"
                    style="animation-delay: 1100ms">
                    <div class="pb-4">
                        <img src="{{ asset('storage/images/team/profile12.jpg') }}"
                            alt="Chris Lee - UX Researcher" class="w-full h-auto rounded-x-lg object-cover aspect-square">
                    </div>
                    <div class="px-6 pb-6">
                        <h3 class="text-xl font-semibold text-gray-900">Chris Lee</h3>
                        <p class="text-indigo-600 mb-3">UX Researcher</p>
                        <p class="text-gray-600 text-sm mb-4">
                            Uncovers user needs through data-driven research to inform product decisions.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" aria-label="Chris's LinkedIn profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Chris's Twitter profile"
                                class="text-gray-500 hover:text-indigo-600 transition-colors duration-200">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture & CTA Section -->
    <section id="culture" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12  ">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Our Culture</h2>
                <p class="text-gray-600 max-w-4xl mx-auto">
                    We believe in collaboration, continuous learning, and creating an inclusive environment where
                    everyone can thrive.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white rounded-xl shadow-md overflow-hidden  hover:cursor-pointer">
                    <img src="{{ asset('storage/images/team/culture02.jpg') }}"
                        alt="Our collaborative workspace" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Collaborative Environment</h3>
                        <p class="text-gray-600">
                            We work together across disciplines to create the best possible products. Regular design
                            sprints and hackathons keep our ideas fresh.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:cursor-pointer">
                    <img src="{{ asset('storage/images/team/culture01.jpg') }}"
                        alt="Team building event" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Work-Life Balance</h3>
                        <p class="text-gray-600">
                            Flexible schedules, remote work options, and regular team outings help maintain a healthy
                            balance between work and personal life.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Want to join our team?</h3>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    We're always looking for talented individuals who share our passion for innovation and excellence.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#"
                        class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition duration-300 transform hover:scale-105">
                        View Open Positions
                    </a>
                    <a href="#"
                        class="px-6 py-3 border border-gray-300 hover:border-indigo-600 font-medium rounded-lg transition duration-300 transform hover:scale-105">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

