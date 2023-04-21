<x-app-layout>
    <div class="py-16 px-10">
        <!-- TITLE -->
        <div class="text-center mb-16">
            <h1 class="text-4xl text-center font-bold">Search Job in Indonesian</h1>
            <div class="mt-6 text-base font-medium">
                <p>Fresh Graduate Friendly. Globally competitive salaries. Diverse work environments.</p>
                <p>Explore our hand-picked list of the <span class="text-[#FF6B2C]">{{ $total }} best software
                        developer & tech
                        jobs in Indonesian.</span> </p>
            </div>
        </div>

        <!-- Contain Jobs-->
        <div class="flex justify-around">
            <div class="w-fit h-fit bg-gray-100 mr-4 rounded-2xl px-8 py-6" id="filter">
                <div class="font-medium">
                    <p class="mb-4">Filter</p>
                    <div class="w-fit grid gap-4 text-sm">
                        <div class="w-full flex h-8 rounded-xl bg-white" id="search-bar">
                            <div class="w-4/5" id="input-search">
                                <input
                                    class="h-8 rounded-l-xl focus:border-transparent focus:ring-0 border-0 text-gray-500"
                                    type="text" placeholder="Search your dream job..." class="inputFindJob"
                                    id="inputFindJob">
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
                        <div class="my-4" id="remote-work">
                            <p class="mb-3">Category</p>
                            <div class="grid grid-cols-2 gap-1 mb-10">
                                @foreach ($categories as $category)
                                    <button
                                        class="w-full border-2 border-black hover:bg-slate-700 hover:text-white py-1 px-4 mr-1 mb-1"
                                        id="category-filter">{{ $category->category_name }}</button>
                                @endforeach
                            </div>
                            <button class="w-full border-2 border-black bg-slate-700 text-white  py-1 px-4 mr-1 mb-1"
                                id="clear">Clear</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-8/12 h-fit" id="jobs">

                @foreach ($jobs as $job)
                    <!-- CARD #1-->
                    <div class="w-full justify-between shadow-md px-7 py-3 mb-4 rounded-xl card-jobs" id="card-jobs">
                        <div class="w-full flex justify-between">
                            <div class="mb-5 pt-2">
                                <div class="mb-5">
                                    <h3 class="text-2xl font-semibold mb-1 job-title-card" id="title">
                                        {{ $job->job_title }}</h3>
                                    <p class="" id="desc">{{ $job->company_name }}</p>
                                </div>
                                <div class="flex w-fit text-sm font-medium" id="requirement">
                                    <div class="w-fit bg-gray-200 rounded-2xl px-5 text-sm py-1 mr-2">
                                        {{ $job->type }}</div>
                                    <div class="w-fit bg-gray-200 rounded-2xl px-5 py-1 mr-2" id="categoryCardJob">
                                        {{ $job->categories->category_name }}</div>
                                </div>
                            </div>
                            <div class="w-2/12 h-28 rounded-xl">
                                <img class="w-full h-full object-cover rounded-xl"src="/company/{{ $job->foto }}" alt="">
                            </div>
                        </div>
                        <div class="flex items-end mt-2 pb-4 justify-between">
                            <div class="flex gap-5" id="description">
                                <div class="flex" id="remote">
                                    <div class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.6 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    {{ $job->work_location }}
                                </div>
                                <div class="flex" id="salary">
                                    <div class="mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-6 h-6">
                                            <path
                                                d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.91.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                                            <path fill-rule="evenodd"
                                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </div>
                                    @currency($job->salary)/bulan
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('jobs.detail', $job->id) }}"><button
                                        class="w-64 h-9 bg-[#055EFF] text-white font-semibold rounded-lg">Apply
                                        Now</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
