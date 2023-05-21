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
                    <button class="h-10 px-10 bg-[#055EFF] text-white font-semibold rounded-2xl" type="button"><a
                            href="/postjob/{{ $job->id }}/edit">Edit Job</a></button>
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                        class="h-10 px-10 bg-red-600 text-white font-semibold rounded-2xl" type="button">Delete
                        Job</button>
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
        </div>



        <div class="my-10">
            <h1 class="font-semibold text-2xl">Who Applied for this job</h1>
            @if ($employee->employees()->count() < 1)
                <div class="mt-20">
                    <img class="w-3/12 mx-auto" src="/asset/noapplied.png" alt="">
                    <h1 class="text-center font-bold text-2xl uppercase">No one has applied for this job yet</h1>
                </div>
            @else
                <div class="relative pt-5">
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
                                    Curriculum Vitae
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employee->employees as $employees)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $employees->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $employees->email }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="/dokumen/{{ $employees->cv }}" download>{{ $employees->cv }}</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p
                                            @if ($employees->status == 'Pending') class="cursor-pointer text-yellow-500"
                            data-modal-target="defaultModal{{ $employees->id }}" data-modal-toggle="defaultModal{{ $employees->id }}" @endif>
                                            {{ $employees->status }}
                                        </p>
                                        <div id="defaultModal{{ $employees->id }}" tabindex="-1" aria-hidden="true"
                                            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-2xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow">
                                                    <!-- Modal header -->
                                                    <div
                                                        class="flex items-start justify-between p-4 border-b rounded-t">
                                                        <div class="w-full">
                                                            <h3
                                                                class="text-xl font-semibold text-gray-900 text-center">
                                                                Accept or Decline Job Applicants
                                                            </h3>
                                                        </div>
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                            data-modal-hide="defaultModal{{ $employees->id }}">
                                                            <svg aria-hidden="true" class="w-5 h-5"
                                                                fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="p-6 space-y-6">
                                                        <p class="text-base leading-relaxed text-gray-500">
                                                            Nama : {{ $employees->name }}
                                                        </p>
                                                        <p class="text-base leading-relaxed text-gray-500">
                                                            Email &nbsp: {{ $employees->email }}
                                                        </p>
                                                        <p class="text-base leading-relaxed text-gray-500">
                                                            <a href="dokumen/{{ $employees->cv }}" download>CV
                                                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
                                                                {{ $employees->cv }}</a>
                                                        </p>
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <form action="{{ route('updateApplyJob', $employees->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <div
                                                            class="flex items-center justify-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                                                            <button data-modal-hide="defaultModal{{ $employees->id }}"
                                                                type="submit" name="status" value="Accepted"
                                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                                Accept</button>
                                                            <button data-modal-hide="defaultModal{{ $employees->id }}"
                                                                type="submit" name="status" value="Rejected"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10">
                                                                Decline</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <!-- Main modal -->

</x-app-layout>
