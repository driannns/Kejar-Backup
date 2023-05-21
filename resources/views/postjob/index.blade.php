<x-app-layout>
    <div class="flex container" style="height:88h;">
        <div class="w-1/2 flex flex-col justify-center gap-10 overflow-visible z-10">
            <div class="bg-[#222222] text-white text-4xl font-bold pl-28 rounded-r-full py-8" style="width: 55vw;">
                <p class="leading-relaxed tracking-wide">The best way to hire<br>
                    tech talent in Indonesia.</p>
            </div>
            <div>
                <p class="text-xl pl-28">Post on our job board to attract skilled talent & grow your brand in Indonesia
                </p>
            </div>
            <div class="pl-28">
                <a href={{ route('postjob.create') }}><button
                        class="text-white bg-[#222222] rounded-full py-5 px-10 text-2xl font-medium">
                        Post Jobs
                    </button></a>
            </div>
        </div>
        <div class="w-1/2"
            style="height:88vh; background-image: url('/asset/postjob.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        </div>
    </div>
    <div class="min-h-screen max-h-fit p-10">
        @if (count($job) < 1)
            <h1 class="text-4xl font-bold text-center text-[#222222] py-9">Your Company Job</h1>
            <div class="grid place-items-center" style="height: 80vh;">
                <div class="font-bold text-3xl uppercase">
                    <img src="/asset/nopostjob.png" alt="">
                    You haven't posted a job at all
                </div>
            </div>
        @else
            <h1 class="text-4xl font-bold text-center text-[#222222] py-9">Your Company Job</h1>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Job Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Company Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                City
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Work Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($job as $jobs)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $jobs->job_title }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $jobs->company_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $jobs->city }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $jobs->type }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $jobs->work_location }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('postjob.show', $jobs->id) }} "
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>

<!-- Finish Page -->
