<x-app-layout>
    <div class="py-16 px-11">
        <div class="grid grid-cols-[2fr_1fr] justify-between">
            <div>
                <div class="flex items-center gap-6">
                    <img src={{ asset('company/' . $job->foto) }} alt="job profile"
                        class="w-44 h-30 object-fit rounded-md">
                    <h1 class="font-semibold text-xl text-gray-400">{{ $job->company_name }}</h1>
                </div>

                <div class="mt-14" id="content">
                    <div class="">
                        <h1 class="text-3xl font-bold">{{ $job->job_title }}</h1>
                        <p class="font-normal text-[#878787]">{{ $job->type }}, {{ $job->city }}</p>
                    </div>

                    <!-- Description Hiring-->
                    <div class="flex flex-col gap-y-10 mt-7 ">
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
                            <div class="div w-4/5 text-[#727272]">
                                {{-- <ul class="list-disc pl-6 text-[#727272] leading-7">
                                    {!! $job->responsibilities !!}
                                </ul> --}}
                                <p class="tracking-wide leading-7">{{ $job->responsibilities }}</p>
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

            <div>

                <div class="flex justify-end items-center gap-5">
                    <!-- MODAL TOGGLE -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="w-96 h-10 bg-[#055EFF] text-white font-semibold rounded-2xl" type="button">Apply
                        Now</button>
                </div>


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
                                    <!-- FORM -->

                                    <form class="space-y-6" action="{{ route('applyjob', $job->id) }}" method="post">
                                        @csrf
                                        <div class="mt-3">
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900">Name:</label>
                                            <input type="name" name="name" id="name"
                                                value="{{ $user->name }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder="Full Name" required>
                                        </div>
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900">Email
                                                :</label>
                                            <input type="email" name="email" id="email"
                                                value="{{ $user->email }}"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                                placeholder="name@company.com" required>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="emailalert" type="checkbox" value="check"
                                                        name="emailalert"
                                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                                                        required>
                                                </div>
                                                <label for="emailalert"
                                                    class="ml-2 text-sm font-medium text-gray-900">Get
                                                    Job alert
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
            </div>

            <div id="popup-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
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
                            <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500">Are you sure you
                                want
                                to delete this job</h3>

                            <div class="flex gap-2 justify-center">
                                <form action="{{ route('postjob.destroy', $job->id) }}" method="post"> @csrf
                                    @method('DELETE') <button type="submit" data-modal-hide="popup-modal"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Delete</button>
                                </form>


                                <button data-modal-hide="popup-modal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                    cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('message'))
            <div id="toast-undo"
                class="flex items-center w-full max-w-xs p-4 text-white bg-red-500 rounded-lg shadow fixed right-4 bottom-4"
                role="alert">
                <div class="text-sm font-normal text-white">
                    {{ Session::get('message') }}
                </div>
                <div class="flex items-center ml-auto space-x-2">
                    <button type="button"
                        class="bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8"
                        data-dismiss-target="#toast-undo" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        @if (Session::has('messageSuccess'))
            <div id="toast-undo"
                class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-green-500 rounded-lg shadow fixed right-4 bottom-4"
                role="alert">
                <div class="text-sm font-normal text-white">
                    {{ Session::get('messageSuccess') }}
                </div>
                <div class="flex items-center ml-auto space-x-2">
                    <button type="button"
                        class="bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8"
                        data-dismiss-target="#toast-undo" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif
    </div>

</x-app-layout>
