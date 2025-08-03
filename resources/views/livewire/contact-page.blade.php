<div>
    <!-- 2nd div  -->
    <div class="flex flex-col w-full h-100 bg-indigo-50 slant-box justify-center items-center gap-4 mb-32">
        <h1 class="text-5xl font-semibold text-gray-700">Get in Touch</h1>
        <div class="flex items-center text-gray-600 text-lg mb-28">
            <a href="/landing/index.html">Home</a>
            <i class="fa-solid fa-chevron-right text-xs px-4 text-gray-400"></i>
            <h1>Contact</h1>
        </div>

    </div>

    <!-- 3nd div -->
    <div class="flex mx-16 gap-16 justify-around -mb-60">
        <div class="flex-3">
            <div
                class="flex flex-col relative left-107 justify-center items-center bg-indigo-100 h-50 w-75 rounded-lg gap-2">
                <span class="text-gray-700 text-5xl font-semibold">5000+</span>
                <span class="text-lg text-gray-600">Satisfied Customers</span>
            </div>
            <img class="rounded-lg h-100 relative left-15 bottom-40" src="storage/images/contact/contact_page.jpg" alt="" />
            <img class="rounded-lg h-60 relative left-107 bottom-93" src="storage/images/contact/teamwork_02.jpg" alt="" />
        </div>
        <div class="flex-2 flex-col items-start justify-center space-y-6">
            <h1 class="text-4xl font-semibold text-gray-700 mb-12">
                Convinced yet? Let's make something great together.
            </h1>
            <div class="flex">
                <i class="fa-solid fa-location-dot text-blue-700 mt-2 text-2xl"><i
                        class="fa-solid fa-minus relative right-[19px] top-3.5 text-blue-700"></i></i>

                <span class="flex-1 space-y-1">
                    <h1 class="text-gray-800 text-xl font-semibold">Address</h1>
                    <p class="text-gray-600">
                        Moonshine St. 14/05 Light City, <br />
                        London, United Kingdom
                    </p>
                </span>
            </div>
            <div class="flex">
                <i class="fa-solid fa-phone-volume text-blue-700 mt-2 text-2xl"></i>
                <span class="flex-1 space-y-1">
                    <h1 class="text-gray-800 text-xl font-semibold">Phone</h1>
                    <p class="text-gray-600">+1 234 567 890</p>
                </span>
            </div>
            <div class="flex">
                <i class="fa-solid fa-envelope text-blue-700 mt-2 text-2xl"></i>

                <span class="flex-1 space-y-1">
                    <h1 class="text-gray-800 text-xl font-semibold">Email</h1>
                    <a href="mailto:sandbox@email.com" class="text-gray-600">sandbox@email.com</a>
                </span>
            </div>
        </div>
    </div>

    <!-- 4rt div  -->
    <form action="submit" class="mb-32">
        <h1 class="text-center text-4xl font-semibold text-gray-700 my-2">
            Drop Us a Line
        </h1>
        <p class="text-gray-500 text-center text-lg my-2">
            Reach out to us from our contact form and we will get back to you
            shortly.
        </p>
        <div class="grid grid-cols-2 gap-4 mx-[25%]">
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
