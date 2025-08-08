<div class="max-w-full">
    <!-- 2nd div  -->
    <div class="flex flex-col w-full h-50  md:h-100 bg-indigo-50 slant-box justify-center items-center gap-4 mb-10">
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
                        class="hidden sm:flex lg:hidden flex-col justify-center items-center sm:relative z-10 sm:top-20 md:top-0 md:right-30 lg: bg-indigo-50 h-32 w-48 rounded-lg gap-2 mx-2 hover:shadow-lg hover:bg-blue-50">
                        <span class="text-gray-700 text-4xl font-semibold">5000+</span>
                        <span class="text-base text-gray-600">Satisfied Customers</span>
                    </div>
                    <!-- Mobile Image -->
                    <img class="block md:hidden lg:flex lg:w-70 xl:w-90 xl:h-55 lg:right-35 lg:top-15 rounded-lg w-full max-w-xs mx-auto sm:relative object-cover"
                        src="{{ asset('storage/images/home/teamwork_02.jpg') }}" alt="">
                </div>
                <!-- Contact Info -->
                <div class="flex-1 flex flex-col items-start justify-center space-y-6 w-full">
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-gray-700 mb-4">
                        Convinced yet? Let's make something great together.
                    </h1>
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-location-dot text-blue-400 mt-1 text-xl sm:text-2xl"></i>
                        <div>
                            <h2 class="text-gray-600 text-base md:text-lg font-semibold">Address</h2>
                            <p class="text-gray-600 text-sm md:text-base">
                                Moonshine St. 14/05 Light City,<br>
                                London, United Kingdom
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-phone text-blue-400 mt-1 text-xl sm:text-2xl"></i>
                        <div>
                            <h2 class="text-gray-600 text-base md:text-lg font-semibold">Phone</h2>
                            <p class="text-gray-600 text-sm md:text-base">+1 234 567 890</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <i class="fa-solid fa-envelope text-blue-400 mt-1 text-xl sm:text-2xl"></i>
                        <div>
                            <h2 class="text-gray-600 text-base md:text-lg font-semibold">Email</h2>
                            <a href="mailto:sandbox@email.com"
                                class="text-gray-600 text-sm md:text-base">sandbox@email.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4rt div  -->
        <div class="max-w-[1200px] mx-auto -mb-20 mt-10">
            <form action="submit" class="mb-32">
                <h1 class="text-center text-3xl font-semibold text-gray-700 my-2">
                    Drop Us a Line
                </h1>
                <p class="text-gray-500 text-center text-base my-2 mx-4 ">
                    Reach out to us from our contact form and we will get back to you
                    shortly.
                </p>
                <div class="flex flex-col md:grid grid-cols-2 gap-4 mx-[10%]">
                    <input type="text" placeholder="First Name"
                        class="border my-2 py-3 mx-2 pl-4 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:placeholder:relative focus:placeholder:text-xs focus:placeholder:bottom-4" />
                    <input type="text" placeholder="Last Name"
                        class="border my-2 py-3 mx-2 pl-4 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:placeholder:relative focus:placeholder:text-xs focus:placeholder:bottom-4" />
                    <input type="email" placeholder="Email"
                        class="border my-2 py-3 mx-2 pl-4 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:placeholder:relative focus:placeholder:text-xs focus:placeholder:bottom-4" />
                    <select name="message" id="message"
                        class="border my-2 py-3 mx-2 pl-4 text-gray-500 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                        <option value="" disabled selected>Select a department</option>
                        <option value="general">Sales</option>
                        <option value="support">Marketing</option>
                        <option value="feedback">Customer Support</option>
                    </select>
                    <textarea name="message" id="message"
                        class="col-span-2 h-40 border my-2 py-3 mx-2 pl-4 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:placeholder:relative focus:placeholder:text-xs focus:placeholder:bottom-3"
                        placeholder="Your Message"></textarea>
                </div>
                <div class="flex flex-col justify-center items-center my-4">
                    <button
                        class="bg-blue-600 px-4 py-2 text-white font-semibold border border-blue-500 rounded-full transition hover:-translate-y-1 hover:shadow-lg">
                        Send message
                    </button>
                    <p class="text-gray-500 py-2">* These fields are required.</p>
                </div>
            </form>
        </div>
    </div>
</div>