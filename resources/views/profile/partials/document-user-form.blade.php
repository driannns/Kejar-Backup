<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Input Document') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Input your Curriculum Vitae (CV).') }}
        </p>
    </header>
    <div class="flex mt-5 gap-2 @if($user->cv != null) flex-col items-start text-right @endif">
        <h1 class="mr-2">Your CV</h1>
        @if($user->cv == null)
            <p>is Empty</p>
        @else

        <a href="dokumen/{{ $user->cv }}" download>
            <button type="button" class="inline-flex items-center px-4 py-2 bg-[#055EFF] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Download CV
            </button>
        </a>
        @endif
    </div>
    <form method="post" action="/profile" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            
            <x-input-label for="dokumen" :value="__('Input Curiculum Vitae (CV)')" />
            <x-text-input id="dokumen" name="dokumen" type="file" class="mt-1 relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding py-[0.32rem] px-3 text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-[#055EFF] file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-[#053CFF] focus:border-primary focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:border-neutral-600 dark:text-black dark:file:bg-[#055EFF] dark:file:text-neutral-100" autocomplete="dokumen" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
