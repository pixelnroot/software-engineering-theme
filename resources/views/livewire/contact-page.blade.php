<div class="max-w-full mt-20">
    <!-- 2nd div  -->
    <div class="flex flex-col w-full h-50  md:h-100 bg-pink-50 slant-box justify-center items-center gap-4 mb-10">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-semibold text-gray-700 mt-20">Get in Touch</h1>
        <div class="flex items-center text-gray-600 text-base mb-28">
            <a href="/landing/index.html">Home</a>
            <span class="text-gray-400 mx-2 text-sm font-semibold">></span>
            <h1>Contact</h1>
        </div>
    </div>

    <div class="max-w-[98%] md:max-w-[95%] lg:max-w-[90%] mx-auto">
        <!-- 3nd div -->
        <div class="mx-auto w-full px-4 lg:mb-20 lg:mt-20 -mt-10 sm:-mt-30 md:mt-10">
            <div class="flex flex-col lg:flex-row items-center md:gap-6 lg:gap-12 max-w-6xl mx-auto">
                <!-- Images and stats -->
                <div class="flex lg:flex-1 flex-col md:flex-row items-center gap-6 md:gap-8 w-full md:w-auto my-8">
                    <!-- Desktop Image -->
                    <img class="hidden md:block rounded-lg w-60 h-40 md:w-70 md:h-50 xl:w-90 xl:h-60 object-cover md:absolute lg:relative lg:bottom-10 "
                        src="{{ asset('storage/images/home/teamwork_01.jpg') }}" alt="">
                    <!-- Stats Box (desktop only) -->
                    <div
                        class="hidden sm:flex lg:hidden flex-col justify-center items-center sm:relative z-10 sm:top-20 md:top-0 md:right-30 lg: bg-pink-50 h-32 w-48 rounded-lg gap-2 mx-2 hover:shadow-lg hover:bg-blue-50">
                        <span class="text-gray-700 text-4xl font-semibold">5000+</span>
                        <span class="text-base text-gray-600">Satisfied Customers</span>
                    </div>
                    <!-- Mobile Image -->
                    <img class="block md:hidden lg:flex lg:w-70 xl:w-90 xl:h-55 lg:right-35 lg:top-15 rounded-lg w-full max-w-xs mx-auto sm:relative object-cover"
                        src="{{ asset('storage/images/home/teamwork_02.jpg') }}" alt="">
                </div>
                <!-- Contact Info -->
                <div class="flex-1 flex flex-col items-start justify-center space-y-6 w-full">
                    <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
                    <p class="text-gray-600 mb-8">
                        Interested in learning more about Nexus or have questions about how it can help your
                        business? Fill out the form and our team will get back to you within 24 hours.
                    </p>

                    <!-- Address -->
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-pink-50 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">Email Us</h3>
                                <a class="text-gray-600" href="mailto:hello@nexus.example">hello@nexus.example</a>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-pink-50 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">Call Us</h3>
                                <p class="text-gray-600">+1 (555) 123-4567</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-pink-50 rounded-lg p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-pink-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium">Visit Us</h3>
                                <p class="text-gray-600">123 Tech Street, San Francisco, CA 94107
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- 4rt div  -->
        <div class="max-w-[1200px] mx-auto mt-10 mb-20">
            <form action="submit" class="bg-white shadow-lg rounded-xl px-6 py-8 md:px-12 md:py-10">
                <h1 class="text-center text-3xl font-semibold text-gray-700 mb-2">
                    Drop Us a Line
                </h1>
                <p class="text-gray-500 text-center text-base mb-6">
                    Reach out to us from our contact form and we will get back to you shortly.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex flex-col">
                        <label for="first_name" class="text-gray-600 text-sm mb-1">First Name</label>
                        <input id="first_name" name="first_name" type="text" placeholder="First Name"
                            class="border py-3 px-4 border-gray-300 rounded-lg focus:outline-none focus:border-pink-500" />
                    </div>
                    <div class="flex flex-col">
                        <label for="last_name" class="text-gray-600 text-sm mb-1">Last Name</label>
                        <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                            class="border py-3 px-4 border-gray-300 rounded-lg focus:outline-none focus:border-pink-500" />
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-gray-600 text-sm mb-1">Email</label>
                        <input id="email" name="email" type="email" placeholder="Email"
                            class="border py-3 px-4 border-gray-300 rounded-lg focus:outline-none focus:border-pink-500" />
                    </div>
                    <div class="flex flex-col">
                        <label for="department" class="text-gray-600 text-sm mb-1">Department</label>
                        <select name="department" id="department"
                            class="border py-3 px-4 text-gray-500 border-gray-300 rounded-lg focus:outline-none focus:border-pink-500">
                            <option value="" disabled selected>Select a department</option>
                            <option value="general">Sales</option>
                            <option value="support">Marketing</option>
                            <option value="feedback">Customer Support</option>
                        </select>
                    </div>
                    <div class="flex flex-col md:col-span-2">
                        <label for="message" class="text-gray-600 text-sm mb-1">Your Message</label>
                        <textarea name="message" id="message"
                            class="h-40 border py-3 px-4 border-gray-300 rounded-lg focus:outline-none focus:border-pink-500"
                            placeholder="Your Message"></textarea>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center mt-8">
                    <button
                        class="bg-pink-600 px-8 py-3 hover:cursor-pointer text-white font-semibold border border-pink-500 rounded-lg transition hover:-translate-y-1 hover:shadow-lg">
                        Send message
                    </button>
                    <p class="text-gray-500 py-2 text-sm">* These fields are required.</p>
                </div>
            </form>
        </div>
    </div>
</div>