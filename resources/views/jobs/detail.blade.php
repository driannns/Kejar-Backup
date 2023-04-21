<x-app-layout>
    <div class="py-16 px-11">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-44 h-28 mr-5" id="image"
                    style="background-image: url('/company/{{ $job->foto }}'); background-size:100%; background-repeat: no-repeat;  background-size: 100%;">
                </div>
                <h1 class="font-semibold text-xl text-gray-400">{{ $job->company_name }}</h1>
            </div>
            <div>
                <!-- MODAL TOGGLE -->
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="w-96 h-10 bg-[#055EFF] text-white font-semibold rounded-2xl" type="button">Apply
                        Now</button>
            </div>

            <!-- MODAL APPLY -->

            <!-- Main modal -->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full transition-all">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                            data-modal-hide="authentication-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900">Apply: {{ $job->job_title }}
                            <form class="space-y-6" action="#">
                                <div class="mt-3">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900">Name:</label>
                                    <input type="name" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Full Name" required>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900">Email :</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="name@company.com" required>
                                </div>
                                <div>
                                    <label for="portofolio"
                                        class="block mb-2 text-sm font-medium text-gray-900">Website / Portofolio</label>
                                    <input type="portofolio" name="portofolio" id="portofolio"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Link to your LinkedIn, Github, Twitter..." required>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" type="checkbox" value=""
                                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                                                required>
                                        </div>
                                        <label for="remember"
                                            class="ml-2 text-sm font-medium text-gray-900">Get Job alert
                                             emails</label>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Continue</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End of MODAL -->

        </div>
        <div class="mt-14" id="content">
            <div class="">
                <h1 class="text-3xl font-bold">{{ $job->job_title }}</h1>
                <p class="font-normal text-[#878787]">{{ $job->type }}, {{ $job->city }}</p>
            </div>

            <!-- Description Hiring-->
            <div class="flex flex-col gap-4 mt-7 ">
                <div class="" id="desc">
                    <div class="font-semibold mb-3">
                        <h1 class="font-semibold">Why we are hiring</h1>
                    </div>
                    <div class="w-4/5 text-[#727272] text-left">
                        <p class="leading-7">{{ $job->whyhiring }}</p>
                    </div>
                </div>

                <!-- Description Responsibilities -->
                <div class="mb-4" id="responsibilities">
                    <div class="mb-3">
                        <h1 class="font-semibold">Responsibilities</h1>
                    </div>
                    <div class="div">
                        <ul class="list-disc pl-6 text-[#727272] leading-7">
                            {!! $job->responsibilities !!}
                        </ul>
                    </div>
                </div>

                <div class="" id="job-description">
                    <div class="mb-3">
                        <h1 class="font-semibold">Job Description</h1>
                    </div>
                    <div class="w-4/5 text-[#727272]">
                        <div>
                            <p class="tracking-wide leading-7">{{ $job->job_description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
