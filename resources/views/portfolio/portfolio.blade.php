@extends('layouts.admin')
@section('content')
    <div class="grid md:grid-cols-5 mt-5 shadow bg-white dark:bg-gray-800 ">
        <div class="hidden md:block col-span-1 h-full w-full py-4">
            <ul class="">
                <a href="{{route('portfolio')}}">
                    <li class="px-3 py-1 cursor-pointer
                {{ url()->current() == route('portfolio')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Top Section
                </li>
                </a>

                <a href="{{route('portfolio.floating')}}">
                <li class="px-3 py-1 cursor-pointer
                {{ url()->current() == route('portfolio.floating')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Floating Section
                </li>
                </a>

                <a href="{{route('portfolio.intro')}}">
                <li class="px-3 py-1 cursor-pointer {{ url()->current() == route('portfolio.intro')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Intro Section
                </li>
                    </a>

                <a href="{{route('portfolio.qualification')}}">
                    <li class="px-3 py-1 cursor-pointer {{ url()->current() == route('portfolio.qualification')
                        ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                        Qualification Section
                    </li>
                    </a>

                <a href="{{route('portfolio.offer')}}">
                <li class="px-3 py-1 cursor-pointer {{ url()->current() == route('portfolio.offer')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Offer Section
                </li>
                    </a>

                <a href="{{route('portfolio.expertise')}}">
                <li class="px-3 py-1 cursor-pointer {{ url()->current() == route('portfolio.expertise')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Expertise Section
                </li>
                    </a>

                <a href="{{route('portfolio.work')}}">
                <li class="px-3 py-1 cursor-pointer {{ url()->current() == route('portfolio.work')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Work Section
                </li>
                    </a>

                <a href="{{route('portfolio.contact')}}">
                <li class="px-3 py-1 cursor-pointer {{ url()->current() == route('portfolio.contact')
                    ? ' bg-purple-200 dark:bg-purple-700 font-semibold ':'hover:bg-purple-100 dark:hover:bg-purple-500'}}">
                    Contact Section
                </li>
                    </a>



            </ul>
        </div>
        @yield('portfolioContent')
    </div>
@endsection
