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
        <div class="py-4 text-gray-500 dark:text-gray-400" x-data="{home:false,contact:false,intro:false,education:false,services:false,portfolio:false}">
            <!-- First item in the list -->
            <ul class="mt-6">
                <li class="relative px-6 py-3" @click="home=true,intro=education=services=portfolio=contact=false">
                    <template x-if="home">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    </template>
                    <a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                       href="/#home">
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
                <li class="relative px-6 py-3" @click="intro=true,home=education=services=portfolio=contact=false">
                    <template x-if="intro">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    </template>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        hover:text-gray-800 dark:hover:text-gray-200" href="/#intro">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        <span class="ml-4">My Intro</span>
                    </a>
                </li>
                <li class="relative px-6 py-3" @click="education=true,home=intro=services=portfolio=contact=false">
                    <template x-if="education">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    </template>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        hover:text-gray-800 dark:hover:text-gray-200" href="/#education">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                             <path d="M12 14l9-5-9-5-9 5 9 5z" />
                             <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /> 
                        </svg>
                        <span class="ml-4">Education</span>
                    </a>
                </li>
                <li class="relative px-6 py-3" @click="services=true,home=intro=education=portfolio=contact=false">
                    <template x-if="services">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    </template>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                        hover:text-gray-800 dark:hover:text-gray-200" href="/#services">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-4">Services</span>
                    </a>
                </li>
                <li class="relative px-6 py-3" @click="portfolio=true,home=intro=education=services=contact=false">
                    <template x-if="portfolio">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    </template>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                            hover:text-gray-800 dark:hover:text-gray-200" href="/#portfolio">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /> 
                        </svg>
                        <span class="ml-4">Portfolio</span>
                    </a>
                </li>
                <li class="relative px-6 py-3" @click="contact=true,home=intro=education=services=portfolio=false">
                    <template x-if="contact">
                        <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    </template>
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                            hover:text-gray-800 dark:hover:text-gray-200" href="/#contact">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        <span class="ml-4">Contact</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    @if(url()->current() == route('posts.show'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                          aria-hidden="true"></span>
                    @endif
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
                            hover:text-gray-800 dark:hover:text-gray-200" href="{{route('posts.show')}}">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                        <span class="ml-4">Blog</span>
                    </a>
                </li>
                @guest
                    <li class="relative px-6 py-3">
                        <div class="flex text-xs space-x-3">
                            <div><a href="{{route('login')}}" class="font-semibold">Login</a></div>
                            <div><a href="{{route('register')}}" class="bg-purple-600 hover:bg-purple-500 shadow-sm text-white hover:text-gray-50 px-6 pt-1.5 pb-2 font-semibold rounded-full">Register</a></span>
                        </div>
                    </li>
                @else
                    <x-logout />
                @endguest
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
                                <a href="/#home">
                                    Home
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
                                <a href="/#education">
                                    Education
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
                                <a href="/#services">
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
                                <a href="/#portfolio">
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
                                <a href="/#contact">
                                    Contact
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
                                @if (url()->current() == route('posts.show'))
                                <span
                                class="absolute transform  translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                </span>
                                @else
                                <span
                                    class="absolute transform opacity-0 group-hover:opacity-100 -translate-x-3 group-hover:translate-x-0 translate-y-6 transition-transform ease-in-out duration-600 cursor-pointer rounded-full w-full h-0.5 bg-purple-600">
                                </span>
                                @endif
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
                    <x-profile />
            @else
                    <li class="hidden md:block  text-sm font-semibold space-x-2">
                        <a href="{{route('login')}}" class="text-gray-600 dark:text-gray-300">
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
                    <a href="https://www.facebook.com/azharasel1" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="https://twitter.com/azharasel1" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-twitter -f text-lg"></i>
                    </a>
                    <a href="https://github.com/ah-rasel?tab=repositories" target="_blank"
                       class="w-8 h-8
                    flex justify-center items-center
                    transform transition-all duration-500 ease-in-out
                    hover:text-gray-500 dark:hover:text-gray-300 hover:scale-150 hover:rotate-3"
                       title="Facebook Profile">
                        <i class="fab fa-github -f text-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/md-rasel-641371167/" target="_blank"
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
            {{-- <footer class="bg-gray-200 w-full mt-[200px]">
                <div class="flex h-10 justify-center items-center text-sm">
                    <span class="text-gray-600 text-xs font-semibold">By </span><a class="ml-2 font-bold" href="#">Md Rasel</a>
                </div>
            </footer> --}}
        </main>
    </div>
</div>
@livewireScripts
</body>

</html>
