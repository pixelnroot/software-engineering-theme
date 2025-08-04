<div class="max-w-[90%] mx-auto">
    <div class="flex flex-col lg:flex-row items-center mx-4 lg:mx-16 gap-8 lg:gap-16 justify-around">
    <!-- Image Section -->
    <img class="w-full lg:flex-1 h-auto sm:w-100 md:w-120 lg:w-90 object-cover" src="{{ asset('storage/images/home/marketing.png') }}" alt="">

    <!-- Content Section -->
    <div class="flex-1 flex-col items-start justify-center space-y-4">
        <h4 class="text-lg font-semibold text-pink-500">Have Perfect Control</h4>
        <h1 class="text-2xl lg:text-3xl font-bold text-gray-700">We bring solutions to make life easier for our customers.</h1>
        <p class="text-gray-500 text-base lg:text-lg">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue rutrum.</p>

        <div class="xl:grid grid-cols-1 sm:grid-cols-2 text-lg mt-4 space-y-4 font-semibold text-gray-500 gap-4">
            <div class="flex items-start">
                <i class="fa-solid fa-circle-check mr-2 mt-1 text-gray-400"></i>
                <span>Aenean quam ornare. Curabitur blandit.</span>
            </div>
            <div class="flex items-start">
                <i class="fa-solid fa-circle-check mr-2 mt-1 text-gray-400"></i>
                <span>Etiam porta euismod malesuada mollis.</span>
            </div>
            <div class="flex items-start">
                <i class="fa-solid fa-circle-check mr-2 mt-1 text-gray-400"></i>
                <span>Nullam quis risus eget urna mollis ornare.</span>
            </div>
            <div class="flex items-start">
                <i class="fa-solid fa-circle-check mr-2 mt-1 text-gray-400"></i>
                <span>Vivamus sagittis lacus vel augue rutrum.</span>
            </div>
        </div>
    </div>
</div>

    <div class="flex md:flex-row flex-col max-w-9xl mx-[80px] bg-white  rounded-xl overflow-hidden mt-12">
        <div class="md:w-5/12 p-6 flex flex-col justify-center">
            <p class="text-red-500 font-bold tracking-wide uppercase mb-2">WHAT MAKES US DIFFERENT?</p>
            <p class="text-4xl mt-2 font-semibold text-gray-700 mr-12 leading-tight">We make spending stress free so
                you
                have the perfect control.</p>
            <p class="text-gray-500 font-semibold text-lg mr-8 mt-4">Etiam porta sem malesuada magna mollis euismod.
                Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac,
                vestibulum
                at eros. Fusce dapibus, tellus ac cursus. Integer posuere erat a ante venenatis dapibus posuere velit.
            </p>
            <ul class="text-gray-500 font-semibold text-lg mt-6 space-y-2 list-disc list-inside">
                <li>Aenean eu leo quam. Pellentesque ornare</li>
                <li>Nullam quis risus eget urna mollis ornare.</li>
                <li>Donec id elit non mi porta gravida at eget.</li>
            </ul>
        </div>
        <div class=" lg:w-6/12 w-full flex-[0_0_auto]  lg:!px-[20px] md:!px-[20px] !px-[15px]
        max-w-full  lg:!ml-[8.33333333%]  lg:!order-2 !relative !mt-[50px] ">
            <img src="{{ asset("storage/images/home/marketing_02.jpg") }}" alt="Happy Customer"
                class="w-[625px] h-[590px] object-cover rounded-xl z-1">
            <div class="absolute shadow-lg z-10 bg-white rounded-xl flex items-center py-4 px-5"
                style="top: 15%; left: -7%; width: 207px; height: 99px;">
                <img src="https://sandbox-tailwind-template.netlify.app/assets/img/icons/solid/cloud-group.svg"
                    alt="Cloud Group Icon" class="w-9 h-9 mr-4" />
                <div>
                    <p class="font-semibold text-2xl text-gray-700">25,000+</p>
                    <p class="text-gray-500 text-md">Happy Clients</p>
                </div>
            </div>
            <!-- Progress Card -->
            <div class="absolute shadow-lg z-10 hidden md:flex bg-white rounded-xl items-center py-4 px-5"
                style="bottom: 10%; left: -10%; width: 230px; height: 189px;">
                <div class="p-6 w-[230px] h-[188px]">
                    <svg viewBox="0 0 100 50" style="display: block; width: 100%;">
                        <path d="M 50,50 m -47,0 a 47,47 0 1 1 94,0" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                        <path d="M 50,50 m -47,0 a 47,47 0 1 1 94,0" stroke="#555" stroke-width="6" fill-opacity="0"
                            style="stroke-dasharray: 147.708, 147.708; stroke-dashoffset: 29.5416;"> </path>
                    </svg>
                    <div class="progressbar-text"
                        style="position: absolute; left: 50%; top: 35%; transform: translate(-50%, 0px); color: rgb(85, 85, 85);">
                        <p> <span class="text-4xl font-semibold">80</span> % </p>
                    </div>
                    <div class="progressbar-text"
                        style="position: absolute; left: 50%; top: 55%; transform: translate(-50%, 0px); color: rgb(85, 85, 85);">
                        <p class="text-xl font-semibold mt-2">Time Saved</p>
                    </div>
                </div>
            </div>
            <!-- Mobile Cards -->
            <div class="md:hidden w-full flex flex-col gap-4 mt-4">
                <div class="shadow-lg bg-white rounded-xl flex items-center py-4 px-5 w-full">
                    <img src="https://sandbox-tailwind-template.netlify.app/assets/img/icons/solid/cloud-group.svg"
                        alt="Cloud Group Icon" class="w-9 h-9 mr-4" />
                    <div>
                        <p class="font-semibold text-xl text-gray-700">25,000+</p>
                        <p class="text-gray-500 text-md">Happy Clients</p>
                    </div>
                </div>
                <div class="shadow-lg bg-white rounded-xl flex flex-col items-center py-4 px-5 w-full">
                    <svg viewBox="0 0 100 50" style="display: block; width: 80px;">
                        <path d="M 50,50 m -47,0 a 47,47 0 1 1 94,0" stroke="#eee" stroke-width="6" fill-opacity="0"></path>
                        <path d="M 50,50 m -47,0 a 47,47 0 1 1 94,0" stroke="#555" stroke-width="6" fill-opacity="0"
                            style="stroke-dasharray: 147.708, 147.708; stroke-dashoffset: 29.5416;"> </path>
                    </svg>
                    <p class="text-2xl font-semibold mt-2">80 %</p>
                    <p class="text-lg font-semibold mt-1">Time Saved</p>
                </div>
            </div>
        </div>

      </div>
  </div>
