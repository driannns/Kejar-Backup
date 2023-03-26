<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" >
        @csrf
        <h3 class="text-2xl font-bold -mt-10">Hey, Hello</h3>
        <p class="text-sm font-normal text-gray-500 mb-5">Enter the information you entered while registering</p>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="font-semibold" style="color: #232323"/>
            <x-text-input id="name" class="bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" type="text" name="name" :value="old('name')" style="background-color: white; color:#232323;" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" class="font-semibold" style="color: #232323"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" style="background-color: white; color:#232323;" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="font-semibold" style="color: #232323"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            style="background-color: white; color:#232323;"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="font-semibold" style="color: #232323"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password" style="background-color: white; color:#232323;"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="w-full text-base px-4 py-3 bg-[#055EFF] border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-[#053CFF] focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ">
                {{ __('Register') }}
            </button>
        </div>
        <p class="mt-7 text-center">Already have account? <a class="text-[#055EFF]" href="{{ route('login') }}">Login</a></p>
    </form>
</x-guest-layout>
