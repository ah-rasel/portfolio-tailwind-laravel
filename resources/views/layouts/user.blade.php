<!DOCTYPE html>
<html :class="{ 'dark': dark }" x-data="dataApp()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    <title>Md Rasel </title>
</head>

<body class="font-body">

<!-- Body background -->
<div class="flex h-screen bg-white dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Backdrop -->
    <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed md:hidden inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    </div>

    <!-- Mobile Menu Start -->
    <aside class="fixed md:hidden inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800"
           x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
           x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
           x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
           x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
           @keydown.escape="closeSideMenu">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <!-- <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                Admin Template
            </a> -->
            <!-- First item in the list -->
            <ul class="mt-6">
                <li class="relative px-6 py-3">
                    <!-- Active menu             -->
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>

                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                       href="/">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        <span class="ml-4">Home</span>
                    </a>
                </li>
            </ul>
            <!-- rest of the menu -->
            <ul>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
            hover:text-gray-800 dark:hover:text-gray-200" href="#">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        <span class="ml-4">About Us</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
            hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('posts.show') }}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        <span class="ml-4">Blog</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
            hover:text-gray-800 dark:hover:text-gray-200" href="#">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        <span class="ml-4">Contact</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 focus:outline-none hover:text-gray-800 dark:hover:text-gray-200"
                        @click="togglePagesMenu" aria-haspopup="true">
                            <span class="inline-flex items-center">
                                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                     stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                                    </path>
                                </svg>
                                <span class="ml-4">categories</span>
                            </span>
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <template x-if="isPagesMenuOpen">
                        <ul x-transition:enter="transition-transform transition-opacity ease-in-out duration-700"
                            x-transition:enter-start="opacity-0 transform translate-y-4"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-end="opacity-0 transform -translate-y-2"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-xs tracking-wide font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">Add New Category</a>
                            </li>
                            <li
                                class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="#">View All Categories</a>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Mobile Menu End -->
    <div class="flex flex-col flex-1 w-full">
        <!-- Changed here for fixed, sticky options -->
        <header class="z-10 py-4 bg-white dark:bg-gray-800">
            <div
                class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                <!-- Mobile hamburger -->
                <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                        @click="toggleSideMenu" aria-label="Menu">
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
                <a href="{{url('/')}}">
                    <h2 class="text-2xl font-bold">Md. Rasel</h2>
                </a>

                <ul class="flex items-center text-gray-600 dark:text-gray-200 flex-shrink-0 space-x-6">
                    <li class="hidden md:block text-sm font-semibold">
                        <div class="group cursor-pointer">
                            <div class="flex flex-col relative">
                                <a href="/">
                                    Home
                                </a>
                                <span
                                    class="absolute transform opacity-100 translate-y-6 transition-transform ease-in-out duration-500 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                    </span>
                            </div>
                        </div>
                    </li>
                    <li class="hidden md:block text-sm font-semibold">
                        <div class="group">
                            <div class="flex flex-col relative">
                                <a href="/#intro">
                                    My Intro
                                </a>
                                <span
                                    class="absolute transform opacity-0 group-hover:opacity-100 -translate-x-3 group-hover:translate-x-0 translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                    </span>
                            </div>
                        </div>
                    </li>
                    <li class="hidden md:block text-sm font-semibold">
                        <div class="group">
                            <div class="flex flex-col relative">
                                <a href="#">
                                    Services
                                </a>
                                <span
                                    class="absolute transform opacity-0 group-hover:opacity-100 -translate-x-3 group-hover:translate-x-0 translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                    </span>
                            </div>
                        </div>
                    </li>
                    <li class="hidden md:block text-sm font-semibold">
                        <div class="group">
                            <div class="flex flex-col relative">
                                <a href="#">
                                    Portfolio
                                </a>
                                <span
                                    class="absolute transform opacity-0 group-hover:opacity-100 -translate-x-3 group-hover:translate-x-0 translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                    </span>
                            </div>
                        </div>
                    </li>
                    <li class="hidden md:block text-sm font-semibold">
                        <div class="group">
                            <div class="flex flex-col relative">
                                <a href="#">
                                    Testimonial
                                </a>
                                <span
                                    class="absolute transform opacity-0 group-hover:opacity-100 -translate-x-3 group-hover:translate-x-0 translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                    </span>
                            </div>
                        </div>
                    </li>
                    <li class="hidden md:block text-sm font-semibold">
                        <div class="group">
                            <div class="flex flex-col relative">
                                <a href="{{route('posts.show')}}">
                                    Blog
                                </a>
                                <span
                                    class="absolute transform opacity-0 group-hover:opacity-100 -translate-x-3 group-hover:translate-x-0 translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                    </span>
                            </div>
                        </div>
                    </li>
                    <!-- Theme toggler -->
                    <li class="flex">
                        <button class="rounded-md focus:outline-none focus:shadow-outline-purple"
                                @click="toggleTheme" aria-label="Toggle color mode">
                            <template x-if="!dark">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                    </path>
                                </svg>
                            </template>
                            <template x-if="dark">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </template>
                        </button>

                    </li>
            @auth
                    <!-- Profile menu -->
                    <li class="relative">
                        <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                                @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                                aria-haspopup="true">
                            @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="object-cover object-top w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                     aria-hidden="true" />
                            @else
                                <img class="object-cover object-top w-8 h-8 rounded-full" src="images/rasel.jpg" alt="{{ Auth::user()->name }}" aria-hidden="true" />

                            @endif
                        </button>
                        <template x-if="isProfileMenuOpen">
                            <ul x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
                                class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                                aria-label="submenu">
                                <li class="flex">
                                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                       href="#">
                                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                            </path>
                                        </svg>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                       href="#">
                                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                            </path>
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                       href="#"
                                       onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                                    >
                                        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                            </path>
                                        </svg>

                                        <span>Log out</span>

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </template>
                    </li>
            @else
                    <li class="hidden md:block  text-sm font-semibold space-x-2">
                        <a href="{{route('login')}}" class="text-gray-600">
                        Login
                        </a>

                        <a href="{{route('register')}}" class="bg-purple-600 hover:bg-purple-500 shadow-sm text-white hover:text-gray-50 px-6 pt-1.5 pb-2 rounded-full">
                        SignUp
                        </a>
                    </li>
            @endauth
                </ul>
            </div>
        </header>
        <main class="h-full overflow-y-auto relative">
            <!-- Sidebar Social icon -->
            <div class="hidden md:block absolute text-gray-600 dark:text-gray-200">
                <div class="fixed md:top-48 ml-4 space-y-3">
                    <a href="#" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="#" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-twitter -f text-lg"></i>
                    </a>
                    <a href="#" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-github -f text-lg"></i>
                    </a>
                    <a href="#" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-linkedin -f text-lg"></i>
                    </a>
                </div>
            </div>
            @yield('content')
            <footer class="bg-gray-200 h-10 w-full">
                <div class="flex space-x-3">
                    <p>Made With Love By </p><a href="#">Md Rasel</a>
                </div>
            </footer>
        </main>
    </div>
</div>
@livewireScripts
</body>

</html>
