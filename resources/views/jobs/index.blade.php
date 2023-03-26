<x-app-layout>
    <div class="py-16 px-10">
        <!-- TITLE -->
        <div class="text-center mb-16">
            <h1 class="text-4xl text-center font-bold">Search Job in Indonesian</h1>
            <div class="mt-6 text-base font-medium">
                <p>Fresh Graduate Friendly. Globally competitive salaries. Diverse work environments.</p>
                <p>Explore our hand-picked list of the <span class="text-[#FF0000]">247 best software developer & tech
                        jobs in Indonesian.</span> </p>
            </div>
        </div>

        <!-- Contain Jobs-->
        <div class="flex justify-around">
            <div class="w-fit h-fit bg-gray-100 mr-4 rounded-2xl px-8 py-6" id="filter">
                <div class="font-medium">
                    <p class="mb-4">Filter</p>
                    <div class="w-[330px] grid gap-4 text-sm">
                        <div class="w-full flex h-8 rounded-xl bg-white" id="search-bar">
                            <div class="w-4/5" id="input-search">
                            <input class="h-8 rounded-l-xl focus:border-transparent focus:ring-0 border-0 text-gray-500" type="text" placeholder="Search your dream job...">
                            </div>
                            
                        <div class="flex justify-center items-center w-1/5 rounded-r-xl cursor-pointer"
                                id="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:scale-110 transition">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            
                            </div>
                        </div>
                        <div class="" id="remote-work">
                            <p class="mb-3">Remote Work</p>
                            <div class="flex flex-wrap">
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Remote Work</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Remote Work</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Remote Work</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Remote Work</div>
                            </div>
                        </div>
                        <div class="" id="seniority">
                            <p class="mb-3">Seniority Level</p>
                            <div class="flex flex-wrap">
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Junior or Above</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Senior or Above</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Fresh Graduates</div>
                            </div>
                        </div>
                        <div class="" id="skill">
                            <p class="mb-3">Skills Categories</p>
                            <div class="flex flex-wrap">
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Cloud Computing</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Javascript</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">Golang</div>
                                <div class="border-2 border-black w-fit py-1 px-4 mr-1 mb-1">React Js</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-8/12 h-fit" id="jobs">

                <!-- CARD #1-->
                <div class="flex w-full h-fit justify-between shadow-xl  px-7 py-3 mb-4 rounded-xl" id="card">
                    <div class="w-full h-40">
                        <div class="mb-5 pt-2">
                            <div class="mb-5">
                                <h3 class="text-2xl font-bold" id="title">QA Engineer</h3>
                                <p class="" id="desc">Kraken Technologies</p>
                            </div>
                            <div class="flex w-fit text-sm font-medium" id="requirement">
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1 mr-2">Full Time</div>
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1 mr-2">Javascript</div>
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1">MongoDb</div>
                            </div>
                        </div>
                        <div class="flex relative bottom-0 pt-2" id="description">
                            <div class="flex mr-6" id="remote">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.6 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Remote
                            </div>
                            <div class="flex mr-6" id="emp">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.6956"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Engineer
                            </div>
                            <div class="flex" id="salary">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.91.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                                        <path fill-rule="evenodd"
                                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </div>
                                9.000.000/bulan
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end pt-2">
                        <div class="w-44 h-28 flex justify-end mb-3" id="image" style="background-image: url('asset/company.png'); background-size:100%; background-repeat: no-repeat;  background-size: 100%;">
                        </div>
                        <div>
                            <a href="/jobs/detail"><button class="w-64 h-9 bg-[#055EFF] text-white font-semibold rounded-lg">Apply Now</button></a> 
                        </div>
                    </div>
                </div>

                <!-- CARD #2 -->
                <div class="flex justify-between shadow-xl px-7 py-3 mb-4 rounded-xl" id="card">
                    <div class="w-full h-40">
                        <div class="mb-5 pt-2">
                            <div class="mb-5">
                                <h3 class="text-2xl font-bold" id="title">QA Engineer</h3>
                                <p class="" id="desc">Kraken Technologies</p>
                            </div>
                            <div class="flex w-fit text-sm font-medium" id="requirement">
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1 mr-2">Full Time</div>
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1 mr-2">Javascript</div>
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1">MongoDb</div>
                            </div>
                        </div>
                        <div class="flex relative bottom-0 pt-2" id="description">
                            <div class="flex mr-6" id="remote">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.6 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Remote
                            </div>
                            <div class="flex mr-6" id="emp">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.6956"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Engineer
                            </div>
                            <div class="flex" id="salary">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.91.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                                        <path fill-rule="evenodd"
                                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </div>
                                9.000.000/bulan
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end pt-2">
                        <div class="w-44 h-28 flex justify-end mb-3" id="image" style="background-image: url('asset/company.png'); background-size:100%; background-repeat: no-repeat;  background-size: 100%;">
                        </div>
                        <div>
                            <button class="w-64 h-9 bg-[#055EFF] text-white font-semibold rounded-lg">Apply Now</button>
                        </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="flex w-full h-fit justify-between shadow-xl  px-7 py-3 mb-4 rounded-xl" id="card">
                    <div class="w-full h-40">
                        <div class="mb-5 pt-2">
                            <div class="mb-5">
                                <h3 class="text-2xl font-bold" id="title">QA Engineer</h3>
                                <p class="" id="desc">Kraken Technologies</p>
                            </div>
                            <div class="flex w-fit text-sm font-medium" id="requirement">
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1 mr-2">Full Time</div>
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1 mr-2">Javascript</div>
                                <div class="w-fit bg-gray-200 rounded-2xl px-4 py-1">MongoDb</div>
                            </div>
                        </div>
                        <div class="flex relative bottom-0 pt-2" id="description">
                            <div class="flex mr-6" id="remote">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.6 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Remote
                            </div>
                            <div class="flex mr-6" id="emp">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.6956"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                Engineer
                            </div>
                            <div class="flex" id="salary">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.91.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                                        <path fill-rule="evenodd"
                                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </div>
                                9.000.000/bulan
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end pt-2">
                        <div class="w-44 h-28 flex justify-end mb-3" id="image" style="background-image: url('asset/company.png'); background-size:100%; background-repeat: no-repeat;  background-size: 100%;">
                        </div>
                        <div>
                            <a href="/jobs/detail"><button class="w-64 h-9 bg-[#055EFF] text-white font-semibold rounded-lg">Apply Now</button></a> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
