<div class="mt-25">
    <!-- header  -->
    <section class="relative h-56 lg:h-[90vh] md:h-[80vh] w-full overflow-hidden lg:rounded-2xl lg:max-w-[90%] mx-auto">
        <img class="absolute inset-0 w-full h-full object-cover" src="{{ asset('storage/images/service/header.jpg') }}">
        <div class="absolute inset-0 bg-black/50 z-10"></div>
        <div
            class="relative z-20 text-center lg:space-y-4 md:space-y-4 space-y-2 flex flex-col justify-center items-center lg:h-[80vh] md:h-[80vh] h-[30vh] text-white">
            <h2 class="text-2xl md:text-5xl lg:text-7xl font-bold">Our Services </h2>
            <p class="w-[80%] md:text-xl lg:text-2xl">We are a creative company that focuses on establishing long-term
                relationships with
                customers.</p>
        </div>
    </section>

    <!-- What we do section -->
    <section class="bg-[#faf9f6] pt-8 pb-8 md:pb-16 max-w-[90%] mx-auto">
        <div class="flex flex-col xl:flex-row px-4 md:px-10 justify-center items-center">
            <div class="w-full xl:w-[60%] xl:mr-14 space-y-7 mb-10 xl:mb-0">
                <p class="text-gray-400">WHAT WE DO?</p>
                <h1 class="text-2xl md:text-4xl font-semibold text-gray-700">
                    The service we offer is specifically designed to <br class="hidden md:block" />
                    meet your needs.
                </h1>
                <p class="text-gray-500 text-base md:text-lg text-justify">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas
                    sed diam eget risus
                    varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Praesent commodo cursus magna,
                    vel scelerisque nisl consectetur et.
                </p>
                <button
                    class="transition delay-150 duration-200 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-slate-900 bg-slate-700 text-white px-8 py-4 rounded-full">
                    More details
                </button>
            </div>
            <div class="w-full lg:w-auto text-justify">
                <div class="flex flex-col md:flex-row gap-7 relative xl:left-16 mb-7">
                    <div class="flex flex-col md:flex-row lg:items-end gap-7">
                        {{-- card - 01 --}}
                        <div
                            class="bg-[#efe5d8] px-8 py-5 space-y-3 rounded-xl h-auto md:h-56 flex-1 mb-7 md:mb-0 xl:h-64 xl:w-24">
                            <img class="h-18 w-20" src="{{ asset('storage/images/service/image.png') }}" alt="">
                            <h4 class="text-lg md:text-xl font-semibold pl-2" p>Support</h4>
                            <p class="text-gray-500 pl-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non 
                                mi porta.
                            </p>
                        </div>
                        {{-- card - 02 --}}
                        <div class="bg-[#F0D3CD] px-8 py-5 space-y-3 rounded-xl h-auto md:h-56 flex-1 mb-7 md:mb-0 xl:h-64">
                            <img class="h-18 w-20" src="{{ asset('storage/images/service/image_01.png') }}" alt="">
                            <h4 class="text-lg md:text-xl font-semibold pl-2">Secure Payment</h4>
                            <p class="text-gray-500 pl-2">Nulla vitae elit libero, a pharetra
                                augue. Donec id elit non.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-7">
                    {{-- card - 03 --}}
                    <div class="bg-[#E6E2DF] px-8 py-5 space-y-3 rounded-xl h-auto md:h-56 flex-1 mb-7 md:mb-0 lg:h-64">
                        <img class="h-18 w-20" src="{{ asset('storage/images/service/image_02.png') }}" alt="">
                        <h4 class="text-lg md:text-xl font-semibold pl-2">Daily Updates</h4>
                        <p class="text-gray-500 pl-2">Nulla vitae elit libero, a pharetra
                            augue.
                        </p>
                    </div>
                    {{-- card - 04 --}}
                    <div class="bg-[#D0DEDF] px-8 py-5 space-y-3 rounded-xl h-auto md:h-56 flex-1 mb-7 md:mb-0 lg:h-64">
                        <img class="h-18 w-20" src="{{ asset('storage/images/service/image_03.png') }}" alt="">
                        <h4 class="text-lg md:text-xl font-semibold pl-2">Market Research</h4>
                        <p class="text-gray-500 pl-2">Nulla vitae elit libero, a pharetra
                            augue. Donec id elit non.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video section  -->
    <section class="relative max-w-[90%] mx-auto">
        <div class="w-full flex items-center justify-center aspect-video">
            <iframe class="w-full h-full rounded-xl" src="https://www.youtube.com/embed/FPhg_ZjrPtU?si=4Cr3VhWYhaNta0IM"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
        </div>
    </section>

    <!-- our process section -->
    <section class="bg-[#EDF2FC] pt-8 md:pt-16 pb-8 md:pb-8 px-4 lg:pb-16 max-w-[90%] mx-auto">
        <div class="text-center space-y-4 px-4 md:px-0">
            <p class="text-gray-400">OUR PROCESS</p>
            <h1 class="text-2xl md:text-4xl font-semibold text-gray-700">
                Find out everything you need to know <br class="hidden md:block" />
                about creating a business process model
            </h1>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-10 mt-10 md:mt-14 px-4 md:px-0">
            <div
                class="flex flex-col justify-center items-center text-center bg-[#B5D2DB] w-full md:w-80 p-6 md:p-8 rounded-xl space-y-2 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#B5D2DB] mb-6 md:mb-0">
                <img class="h-16 w-16 md:h-20 md:w-22" src="{{ asset('storage/images/service/image_04.png') }}" alt="">
                <h4 class="text-lg md:text-xl font-bold text-gray-800">1. Concept</h4>
                <p class="text-gray-500 text-sm md:text-base">Nulla vitae elit libero elit non porta gravida eget metus
                    cras.</p>
            </div>
            <div
                class="flex flex-col justify-center items-center text-center bg-[#B2D8D8] w-full md:w-80 p-6 md:p-8 rounded-xl space-y-2 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#B2D8D8] mb-6 md:mb-0">
                <img class="h-16 w-16 md:h-20 md:w-26" src="{{ asset('storage/images/service/image_05.png') }}" alt="">
                <h4 class="text-lg md:text-xl font-bold text-gray-800">2. Prepare</h4>
                <p class="text-gray-500 text-sm md:text-base">Nulla vitae elit libero elit non porta gravida eget metus
                    cras.</p>
            </div>
            <div
                class="flex flex-col justify-center items-center text-center bg-[#F3E6DA] w-full md:w-80 p-6 md:p-8 rounded-xl space-y-2 transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-110 hover:bg-[#F3E6DA]">
                <img class="h-16 w-16 md:h-22 md:w-26" src="{{ asset('storage/images/service/image_06.png') }}" alt="">
                <h4 class="text-lg md:text-xl font-bold text-gray-800">3. Retouch</h4>
                <p class="text-gray-500 text-sm md:text-base">Nulla vitae elit libero elit non porta gravida eget metus
                    cras.</p>
            </div>
        </div>
    </section>

    <!-- Animated section - 01 -->
    <section
        class="bg-[#FCFBFC] px-4 md:px-8 lg:px-14 py-10 md:py-14 lg:py-16 max-w-[98%] md:max-w-[95%] lg:max-w-[90%] mx-auto">
        <div class="flex flex-col lg:flex-row justify-center items-center gap-8">
            <div class="w-full md:w-[60%] flex justify-center mb-8 md:mb-0">
                <img src="{{ asset('storage/images/service/image_07.png') }}" alt=""
                    class="w-full max-w-xs md:max-w-full h-auto object-contain">
            </div>
            <div class="w-full lg:w-[50%] max-w-xl mx-auto">
                <h2 class="text-2xl md:text-3xl lg:text-4xl text-gray-700 font-semibold leading-snug mb-6 md:mb-8 text-justify">
                    We bring rapid solutions
                    to make the life of our
                    customers easier.
                </h2>

                <!-- Marketing -->
                <div class="mb-5 md:mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-500 font-medium text-sm md:text-base">Marketing</span>
                        <span class="text-gray-500 text-sm md:text-base">100 %</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                        <div class="bg-blue-500 h-2.5 rounded-full animate-fill" style="--target-width: 100%"></div>
                    </div>
                </div>

                <!-- Strategy -->
                <div class="mb-5 md:mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-500 font-medium text-sm md:text-base">Strategy</span>
                        <span class="text-gray-500 text-sm md:text-base">80 %</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                        <div class="bg-yellow-400 h-2.5 rounded-full animate-fill" style="--target-width: 80%"></div>
                    </div>
                </div>

                <!-- Development -->
                <div class="mb-5 md:mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-500 font-medium text-sm md:text-base">Development</span>
                        <span class="text-gray-500 text-sm md:text-base">85 %</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                        <div class="bg-red-300 h-2.5 rounded-full animate-fill" style="--target-width: 85%"></div>
                    </div>
                </div>

                <!-- Data Analysis -->
                <div class="mb-5 md:mb-6">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-500 font-medium text-sm md:text-base">Data Analysis</span>
                        <span class="text-gray-500 text-sm md:text-base">90 %</span>
                    </div>
                    <div class="w-full bg-gray-100 rounded-full h-1.5 overflow-hidden">
                        <div class="bg-teal-400 h-2.5 rounded-full animate-fill" style="--target-width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- animated section -02  -->
    <section
        class="bg-[#F1F0EB] px-4 md:px-8 lg:px-16 py-10 md:py-16 lg:py-20 max-w-[98%] md:max-w-[95%] lg:max-w-[90%] mx-auto">
        <div class="flex flex-col-reverse lg:flex-row justify-center items-center gap-8 text-justify">
            <div class="w-full lg:w-[50%] space-y-8 mt-8 md:mt-0">
                <h1 class="text-2xl md:text-3xl lg:text-4xl text-gray-700 font-semibold leading-snug">
                    We make your spending
                    stress-free for you to have
                    the perfect control.
                </h1>
                <p class="text-gray-500 text-base md:text-lg">
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                    ridiculus mus. Cras justo
                    odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque
                    nisl
                    consectetur et.
                </p>
                <div class="sm:grid-cols-2 grid lg:grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-6 md:gap-8">
                    <div class="flex gap-3 items-start">
                        <div class="bg-sky-200 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm md:text-base">Aenean quam ornare. Curabitur blandit.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <div class="bg-sky-200 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm md:text-base">Aenean quam ornare. Curabitur blandit.</p>
                    </div>

                    <div class="flex gap-3 items-start">
                        <div class="bg-sky-200 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm md:text-base">Aenean quam ornare. Curabitur blandit.</p>
                    </div>
                    <div class="flex gap-3 items-start">
                        <div class="bg-sky-200 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </div>
                        <p class="text-gray-500 text-sm md:text-base">Aenean quam ornare. Curabitur blandit.</p>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-[60%] flex justify-center">
                <img src="{{ asset('storage/images/service/image_08.png') }}" alt=""
                    class="w-full max-w-xs md:max-w-full h-auto object-contain">
            </div>
        </div>
    </section>

    <!-- Pricing section -->
    <section class="bg-[#EDF2FC] md:relative max-w-[98%] md:max-w-[95%] lg:max-w-[90%] mx-auto">
        <div class="text-center pt-12 mx-8 md:mx-16 ">
            <p class="text-gray-400 mb-5">OUR PRICING</p>
            <h1 class="text-4xl font-semibold text-gray-700">We offer great prices, premium products and quality
                service for your business.</h1>
            <div class="flex justify-center items-center gap-4 text-gray-600 font-medium text-lg pt-12">
                <span>Monthly</span>
                <!-- Toggle Switch -->
                <div id="toggle"
                    class="relative w-14 h-8 bg-gray-200 rounded-full cursor-pointer transition-colors duration-300">
                    <div id="circle"
                        class="absolute left-1 top-1 w-6 h-6 bg-blue-600 rounded-full transition-all duration-300">
                    </div>
                </div>
                <span>Yearly</span>
            </div>
        </div>


        <div class="md:relative md:inset-0 flex justify-center items-center gap-8">
            <!-- All card  -->
            <div
                class="flex flex-col md:relative md:flex-row md:flex-wrap lg:flex-nowrap md:top-20 mb-10 sm:-mt-10 md:-mt-20 justify-center items-stretch md:gap-8 md:px-4 sm:p-20 p-10 w-full lg:gap-12">
                <!-- First card -->
                <div
                    class="bg-white shadow-lg rounded-xl py-8 px-6 md:px-8 lg:px-10 xl:px-16 text-center flex-1 min-w-0 mb-6 md:mb-0">
                    <div class="flex justify-center mb-3">
                        <img class="w-16 h-16 md:w-20 md:h-20 lg:w-22 lg:h-20"
                            src="{{ asset('storage/images/service/fabicon_01.png') }}" alt="">
                    </div>
                    <h2 class="text-lg md:text-xl lg:text-2xl font-semibold mb-2">Basic Plan</h2>
                    <div>
                        <span class="text-base md:text-lg">$</span>
                        <span class="price text-3xl md:text-5xl lg:text-6xl text-gray-700 mb-1 " data-monthly="9"
                            data-yearly="99">9</span>
                        <span class="font-normal text-base md:text-lg duration">/mo</span>
                    </div>
                    <ul class="text-gray-500 mt-4 space-y-2 py-4 md:px-0 md:w-full w-40 mx-auto">
                        <!-- ...list items... -->
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl "><span class="font-bold">1</span>
                                Project</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl "><span class="font-bold">100K</span>
                                API Access</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-extrabold">100MB</span>
                                Storage</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-red-600 bg-red-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path
                                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                            </span> <span class="text-base lg:text-xl">Weekly <span
                                    class="font-extrabold">Reports</span></span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-red-600 bg-red-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path
                                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                            </span> <span class="text-base lg:text-xl">7/24 <span
                                    class="font-extrabold">Support</span></span>
                        </li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700 hover:-translate-y-1 hover:scale-110 transition delay-50 duration-300 ease-in-out text-base lg:text-xl">
                        Choose Plan
                    </button>
                </div>
                <!-- Second Card -->
                <div
                    class="bg-white shadow-lg rounded-xl lg:py-14 py-8 px-6 md:px-8 lg:px-10 xl:px-16 text-center md:scale-110 flex-1 min-w-0 mb-6 md:mb-0">
                    <div class="flex justify-center mb-3">
                        <img class="w-16 h-16 md:w-20 md:h-20 lg:w-22 lg:h-20"
                            src="{{ asset('storage/images/service/fabicon_02.png') }}" alt="">
                    </div>
                    <h2 class="text-lg md:text-xl lg:text-2xl font-semibold mb-2">Premium Plan</h2>
                    <div>
                        <span class="text-base lg:text-xl md:text-lg">$</span>
                        <span class="price text-3xl md:text-5xl lg:text-6xl text-gray-700 mb-1 " data-monthly="19"
                            data-yearly="199">19</span>
                        <span class="font-normal text-base lg:text-xl md:text-lg duration">/mo</span>
                    </div>
                    <ul class="text-gray-500 mt-4 space-y-2 py-4 md:px-0 md:w-full w-40 mx-auto">
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-bold">5</span>
                                Project</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-bold">100K</span>
                                API Access</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-extrabold">200MB</span>
                                Storage</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl">Weekly <span
                                    class="font-extrabold">Reports</span></span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-red-600 bg-red-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path
                                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                </svg>
                            </span> <span class="text-base lg:text-xl">7/24 <span
                                    class="font-extrabold">Support</span></span>
                        </li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700 hover:-translate-y-1 hover:scale-110 transition delay-50 duration-300 ease-in-out text-base lg:text-xl">
                        Choose Plan
                    </button>
                </div>
                <!-- Third card -->
                <div
                    class="bg-white shadow-lg rounded-xl py-8 px-6 md:px-8 lg:px-10 xl:px-16 text-center flex-1 min-w-0">
                    <div class="flex justify-center mb-3">
                        <img class="w-16 h-16 md:w-20 md:h-20 lg:w-22 lg:h-20"
                            src="{{ asset('storage/images/service/fabicon_03.png') }}" alt="">
                    </div>
                    <h2 class="text-lg md:text-xl lg:text-2xl font-semibold mb-2">Corporate Plan</h2>
                    <div>
                        <span class="text-base lg:text-xl md:text-lg">$</span>
                        <span class="price text-3xl md:text-5xl lg:text-6xl text-gray-700 mb-1 " data-monthly="49"
                            data-yearly="499">49</span>
                        <span class="font-normal text-base lg:text-xl md:text-lg duration">/mo</span>
                    </div>
                    <ul class="text-gray-500 mt-4 space-y-2 py-4 md:px-0 md:w-full w-40 mx-auto">
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-bold">20</span>
                                Project</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd" <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-bold">300K</span>
                                API Access</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl"><span class="font-extrabold">500MB</span>
                                Storage</span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl">Weekly <span
                                    class="font-extrabold">Reports</span></span>
                        </li>
                        <li class="flex items-center justify-start gap-2">
                            <span class="text-blue-500 bg-blue-100 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span> <span class="text-base lg:text-xl">7/24 <span
                                    class="font-extrabold">Support</span></span>
                        </li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-700 hover:-translate-y-1 hover:scale-110 transition delay-10 duration-300 ease-in-out text-base lg:text-xl">
                        Choose Plan
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Join our community -->
    <section
        class="pt-32 md:pt-20 lg:pt-20 pb-20 md:pb-32 lg:pb-40 max-w-[98%] bg-[#faf9f6] md:max-w-[95%] lg:max-w-[90%] mx-auto">
        <div class="text-center px-2 md:px-0">
            <p class="text-gray-400 mb-3 md:mb-5">JOIN OUR COMMUNITY</p>
            <h1 class="text-2xl md:text-4xl font-semibold text-gray-700">
                We are trusted by over 5000+ clients.<br class="hidden md:block" />
                Join them now and grow your business.
            </h1>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-16 mt-8 md:mt-10">
            <div class="text-center mb-8 md:mb-0">
                <p class="text-4xl md:text-5xl font-semibold text-blue-500 pb-2 counter-7518"></p>
                <p class="text-gray-400 text-base md:text-lg">Completed Projects</p>
            </div>
            <div class="text-center mb-8 md:mb-0">
                <p class="text-4xl md:text-5xl font-semibold text-blue-500 pb-2 counter-5472"></p>
                <p class="text-gray-400 text-base md:text-lg">Satisfied Customers</p>
            </div>
            <div class="text-center">
                <p class="text-4xl md:text-5xl font-semibold text-blue-500 pb-2 counter-2184"></p>
                <p class="text-gray-400 text-base md:text-lg">Expert Employees</p>
            </div>
        </div>
    </section>
</div>


<script>
    const toggleButton = document.getElementById("toggle");
const circle = document.getElementById('circle')
const prices = document.querySelectorAll(".price");
const durations = document.querySelectorAll(".duration");
let isMonthly = true;

toggleButton.addEventListener("click", () => {
    isMonthly = !isMonthly;
    if (isMonthly) {
        circle.classList.remove("translate-x-6");
    } else {
        circle.classList.add("translate-x-6");
    }

    prices.forEach(price => {
        const newPrice = isMonthly ? price.dataset.monthly : price.dataset.yearly;
        price.textContent = newPrice;
    });

    durations.forEach(d => {
        d.textContent = isMonthly ? "/mo" : "/yr";
    });
});
</script>