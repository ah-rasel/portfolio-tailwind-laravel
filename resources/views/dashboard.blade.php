@extends('layouts.admin')
@section('content')
@can('dashboard_access')
    <!-- Cards -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4 mt-5">
        <!-- Card Users -->
        <a class="group" href="#">
            <div class="flex items-center p-4 bg-white group-hover:bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800 dark:group-hover:bg-gray-700">
                <div class="p-3 mr-4 text-green-500 group-hover:text-green-600 bg-green-100 group-hover:bg-green-200 rounded-full dark:text-green-100 dark:bg-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 group-hover:text-gray-800 dark:text-gray-400 dark:group-hover:text-gray-400">
                        Users
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$users}}
                    </p>
                </div>
            </div>
        </a>
        <!-- Card Mobiles -->
        <a class="group" href="#">
            <div class="flex items-center p-4 bg-white group-hover:bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800 dark:group-hover:bg-gray-700">
                <div class="p-3 mr-4 text-orange-500 group-hover:text-orange-600 bg-orange-100 group-hover:bg-orange-200 rounded-full dark:text-orange-100 dark:bg-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 group-hover:text-gray-800 dark:text-gray-400 dark:group-hover:text-gray-400">
                        Categories
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$categories}}
                    </p>
                </div>
            </div>
        </a>
        <!-- Card -->
        <a class="group" href="#">
            <div class="flex items-center p-4 bg-white group-hover:bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800 dark:group-hover:bg-gray-700">
                <div class="p-3 mr-4 text-blue-500 group-hover:text-blue-600 bg-blue-100 group-hover:bg-blue-200 rounded-full dark:text-blue-100 dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 group-hover:text-gray-800 dark:text-gray-400 dark:group-hover:text-gray-400">
                        Posts
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$posts}}
                    </p>
                </div>
            </div>
        </a>
        <!-- Card -->
        <a class="group" href="#">
            <div class="flex items-center p-4 bg-white group-hover:bg-gray-100 rounded-lg shadow-xs dark:bg-gray-800 dark:group-hover:bg-gray-700">
                <div class="p-3 mr-4 text-teal-500 group-hover:text-teal-600 bg-teal-100 group-hover:bg-teal-200 rounded-full dark:text-teal-100 dark:bg-teal-500">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 group-hover:text-gray-800 dark:text-gray-400 dark:group-hover:text-gray-400">
                        New Messages
                    </p>
                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                        {{$messages}}
                    </p>
                </div>
            </div>
        </a>
    </div>
    <!-- Cards End -->
    <div class="grid md:grid-cols-2 gap-4">
        @livewire('admin.recent-posts')
        @livewire('admin.recent-comments')
    </div>
    @else
    <div class="">
        <p>You are in the Dashboard</p>
    </div>
@endcan
@endsection
