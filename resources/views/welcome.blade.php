<x-app-layout>
    <div class="w-full h-full"
    style="background-image: url('asset/wallpaper.png'); background-size: cover; background-repeat: no-repeat;  background-size: 100%; background-color: rgb(0,0,0)">
    <div class="w-full h-full" style="background-color: rgba(0, 0, 0, 0.7)">
        <div class="w-2/5 h-full py-14 pl-20 pr-44 text-white">
            <div class="w-full h-4/5 grid">
                <div class="">
                            <div class="w-72 h-fit">
                                <h1 class="text-5xl font-bold leading-tight">Get Your Dream Job Today.</h1>
                            </div>
                            <div class="h-fit">
                                <p>Explore all the most exciting job roles based
                                    on your interest ad study major</p>
                                </div>
                            </div>
                            <div class="flex w-full h-12 bg-white rounded-[16px]" id="search-bar">
                                <div class="w-full px-4 flex items-center" id="input-search">
                                    <input class="w-full focus:border-transparent focus:ring-0 border-0 text-gray-500" type="text" placeholder="Search your dream job...">
                                </div>
                                <div class="flex justify-center items-center w-1/5 bg-[#FF6B2C] rounded-r-2xl cursor-pointer"
                                id="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:scale-110 transition">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                            
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 text-3xl font-bold">
                        <h1>Popular Categories</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- CATEGORY -->
        <div class="flex absolute bottom-0 w-screen" style="height: 19vh">
            <div class="flex justify-between w-full bg-[#0D0140] text-white py-5 px-9">
                
                <div class="grid place-items-center cursor-pointer hover:scale-105 transition" id="database">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                </svg>
                <h5 class="font-semibold">Database Manager</h5>
                <p class="font-light">1020 Job Offers</p>
            </div>
            
            <div class="grid place-items-center cursor-pointer hover:scale-105 transition" id="mobile">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="white" class="w-12 h-12">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
            </svg>
            <h5 class="font-semibold">Mobile Dev</h5>
            <p>1020 Job Offers</p>
        </div>
        
                <div class="grid place-items-center cursor-pointer hover:scale-105 transition" id="webdev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="white" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                </svg>
                <h5 class="font-semibold">Web Dev</h5>
                <p class="font-light">1020 Job Offers</p>
            </div>
            
            <div class="grid place-items-center cursor-pointer hover:scale-105 transition" id="devops">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="white" class="w-12 h-12">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <h5 class="font-semibold">Dev Ops</h5>
            <p class="font-light">1020 Job Offers</p>
        </div>
        
        <div class="grid place-items-center cursor-pointer hover:scale-105 transition" id="backend">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="white" class="w-12 h-12">
            <path stroke-linecap="round" stroke-linejoin="round"
            d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
        </svg>
                    <h5 class="font-semibold">Backend</h5>
                    <p class="font-light">1020 Job Offers</p>
                </div>
                
                <div class="grid place-items-center cursor-pointer hover:scale-105 transition" id="dataanalyst">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-12 h-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                </svg>
                
                <h5 class="font-semibold">Data Analyst</h5>
                <p class="font-light">1020 Job Offers</p>
            </div>
            
        </div>
        
        <div class="grid place-items-center w-[390px] bg-[#FF6B2C] font-semibold text-white">
            <div class="mx-auto cursor-pointer hover:scale-105 transition">
                <div class="mx-auto" style="width: 6.5vw">
                    
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white"
                class="w-1 h-1">
                <path
                d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
            </svg>
        </div class="">
                <h5 style="font-size: 1rem">< Explore All ></h5>
    </div>
    </div>
</div>
</x-app-layout>