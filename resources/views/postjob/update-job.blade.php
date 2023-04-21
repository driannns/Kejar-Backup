<x-app-layout style="background-color: #F6F7F8">
    <div class="container w-full h-fit pt-10" style="background-color: #F6F7F8">
        <form class="w-9/12 mx-auto bg-white shadow-lg p-10" action="/postjob/{{$job->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div>
                <img class="w-2/12" src="/asset/logo1.png" alt="">
                <p class="font-bold text-2xl">Edit Company Data</p>
            </div>
            <div class="flex mb-6 mt-10">
                <label for="company_name"
                    class="w-5/12 items-center block mb-2 text-lg font-semibold text-gray-900">Company
                    Name</label>
                <input type="text" id="company_name" placeholder="PT. KeJar" name="company_name" value="{{ $job->company_name }}"
                    class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
            </div>
            <div class="flex mb-6">
                <label for="base-input" class="w-5/12 items-center block mb-2 text-lg font-semibold text-gray-900">Job
                    Name</label>
                <input type="text" id="base-input" placeholder="Software Developer" name="job_title" value="{{ $job->job_title }}"
                    class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
            </div>
            <div class="flex mb-6">
                <label for="category_id" class="w-5/12 block mb-2 text-lg font-semibold text-gray-900">Job Category</label>
                <select id="category_id" name="category_id"
                    class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    <option selected>Choose a type of job</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ ($job->category_id == $category->id) ? 'selected' : ''}}>{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex mb-6">
                <label for="base-input"
                    class="w-5/12 items-center block mb-2 text-lg font-semibold text-gray-900">City</label>
                <input type="text" id="base-input" placeholder="Bandung" name="city" value="{{ $job->city }}"
                    class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
            </div>
            <div class="flex mb-6">
                <label for="type" class="w-5/12 block mb-2 text-lg font-semibold text-gray-900">Select an
                    option</label>
                    <select id="type" name="type"
                    class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    <option selected>Choose a type of job</option>
                    <option value="Fulltime" {{ ($job->type == "Fulltime") ? 'selected' : ''}}>Fulltime</option>
                    <option value="Part Time" {{ ($job->type == "Part Time") ? 'selected' : ''}}>Part Time</option>
                    <option value="Internship" {{ ($job->type == "Internship") ? 'selected' : ''}}>Internship</option>
                </select>
            </div>
            <div class="flex mb-6">
                <label for="work_location" class="w-5/12 block mb-2 text-lg font-semibold text-gray-900">Work
                    Location</label>
                <select id="work_location" name="work_location"
                    class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                    <option selected>Choose Location</option>
                    <option value="Remote" {{ ($job->work_location == "Remote") ? 'selected' : ''}}>Remote</option>
                    <option value="Office" {{ ($job->work_location == "Office") ? 'selected' : ''}}>Office</option>
                    <option value="Hybrid" {{ ($job->work_location == "Hybrid") ? 'selected' : ''}}>Hybrid</option>
                </select>
            </div>
            <div class="flex mb-6">
                <label for="experience"
                class="w-5/12 items-center block mb-2 text-lg font-semibold  text-gray-900">Experience</label>
                <select id="experience" name="experience"
                class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
                <option selected>Choose Experience</option>
                <option value="Senior" {{ ($job->experience == "Senior") ? 'selected' : ''}}>Senior</option>
                <option value="Junior" {{ ($job->experience == "Junior") ? 'selected' : ''}}>Junior</option>
                <option value="Fresh Graduate" {{ ($job->experience == "Fresh Graduate") ? 'selected' : ''}}>Fresh Graduate</option>
            </select>
        </div>
        <div class="flex mb-6">
            <label for="Salary"
                class="w-5/12 items-center block mb-2 text-lg font-semibold text-gray-900">Salary</label>
            <input type="text" id="Salary" placeholder="6500000" name="salary" value="{{ $job->salary }}"
                class="w-7/12 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5">
        </div>
        <div class="flex mb-6">
            <label class="w-5/12 block mb-2 text-lg font-semibold text-gray-900" for="file_input">Upload
                Company Photo</label>
                <input
                class="w-7/12 block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-white focus:outline-none"
                id="file_input" type="file" name="foto">
            </div>
            <div class="mb-6">
                <label for="base-input" class=" items-center block mb-2 text-lg font-semibold text-gray-900">Company
                    Background
                    <p class="text-base font-medium">A brief description of what your company does (1-2 sentences is
                        plenty)</p>
                </label>
                <textarea id="message" rows="4" name="company_background"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ $job->company_background }}</textarea>
            </div>
            <div class="mb-6">
                <label for="base-input" class=" items-center block mb-2 text-lg font-semibold text-gray-900">Skills
                </label>
                <textarea id="message" rows="4" name="skills"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ $job->skills }}</textarea>
            </div>
            <div class="mb-6">
                <label for="base-input" class=" items-center block mb-2 text-lg font-semibold text-gray-900">Why are you
                    hiring
                </label>
                <textarea id="message" rows="4" name="whyhiring"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ $job->whyhiring }}</textarea>
            </div>
            <div class="mb-6">
                <label for="base-input" class=" items-center block mb-2 text-lg font-semibold text-gray-900">Job
                    Description
                </label>
                <textarea id="message" rows="4" name="job_description"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ $job->job_description }}</textarea>
            </div>
            <div class="mb-6">
                <label for="base-input"
                    class=" items-center block mb-2 text-lg font-semibold text-gray-900">Responsibilites
                </label>
                <textarea id="message" rows="4" name="responsibilities"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Write your thoughts here...">{{ $job->responsibilities }}</textarea>
            </div>
            <button type="submit"
                class="text-white mx-auto bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
</x-app-layout>