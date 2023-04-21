<x-app-layout>
    <div class="py-16 px-11">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-44 h-28 mr-5" id="image"
                    style="background-image: url('/company/{{ $job->foto }}'); background-size:100%; background-repeat: no-repeat;  background-size: 100%;">
                </div>
                <h1 class="font-semibold text-xl text-gray-400">{{ $job->company_name }}</h1>
            </div>
            <div class="w-1/2 flex justify-end gap-5">
                <a href="/postjob/{{ $job->id }}"><button
                        class="h-10 px-10 bg-[#055EFF] text-white font-semibold rounded-2xl" type="button">Edit
                        Job</button></a>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                        class="h-10 px-10 bg-red-600 text-white font-semibold rounded-2xl" type="button">Delete
                        Job</button>
            </div>

            <div id="popup-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-hide="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want
                                to delete this job</h3>
                            <a href="/postjob/delete/{{ $job->id }}"><button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure
                            </button></a>
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>


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
        <div class="py-10">
            <h1 class="text-lg font-semibold">Who Applied for this job</h1>

            <div class="relative overflow-x-auto pt-8">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CV
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Andrian Saputra
                            </th>
                            <td class="px-6 py-4">
                                saputraandrian064@gmail.com
                            </td>
                            <td class="px-6 py-4">
                                <a href="">CV_20230401124322.pdf</a>
                            </td>
                            <td class="px-6 py-4">
                                Pending
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</x-app-layout>
