    <!-- NAVBAR -->
    <nav class="w-full h-full  flex justify-between text-[16px] items-center">
        <div class="w-full flex justify-between items-center mx-10">
            <div class="">
                <a href="/"><img src="/asset/logo.png" alt="" width="99px"></a>
            </div>
            <div class="font-medium">

                <ul class="flex gap-10 w-50 px-2.5" id="nav">
                    <li>
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home**')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('jobs.index')" :active="request()->routeIs('jobs.index**')">
                            {{ __('Find Job') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('learning.index')" :active="request()->routeIs('learning.index**')">
                            {{ __('Learning') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link :href="route('postjob.index')" :active="request()->routeIs('postjob.index**')">
                            {{ __('Post Job') }}
                        </x-nav-link>
                    </li>

                </ul>
            </div>
            @if (Route::has('login'))
                <div class="text-right">
                    @auth
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content" style="background-color: white;">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <x-dropdown-link :href="route('postjob.index')">
                                        {{ __('Post Job') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden"
                            style="background-color: white;">

                            <!-- Responsive Settings Options -->
                            <div class="pt-4 pb-1 border-t border-gray-200" style="background-color: white;">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="mt-3 space-y-1" style="background-color: white;">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-responsive-nav-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <button class="w-[100px] h-[38px] bg-[#2C00D5] rounded-lg mr-[21px]">Log in</button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <button class="w-[100px] h-[38px] bg-[#2C00D5] rounded-lg mr-[21px]">Register</button>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        </div>
        </div>

        <!-- Responsive Navigation Menu -->
    </nav>
