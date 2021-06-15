@extends('portfolio.portfolio')
@section('portfolioContent')
    <div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">

        <div class="">
            <div class="flex space-x-3 items-center">
                <h5 class="font-semibold">Expertise</h5>
                <!-- Render when Not Editing -->
                <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>
            <!-- Render When Not editing -->
            <p class="mr-4 text-gray-600 dark:text-gray-300">Slug :<span class="ml-1">Why Choose Me</span></p>
            <p class="mr-4 text-gray-600 dark:text-gray-300">Title :<span class="ml-1 ">My Expertise Area</span></p>

        </div>
        <div class="md:flex md:space-x-2">
            <div class="flex-1 space-y-2">
                <div class="flex items-center">
                    <h5 class="font-semibold mr-3">Expertise Left</h5>
                    <span class="text-sm text-blue-600 underline">Add New</span>
                </div>
                <!-- Single Education -->
                <div class="p-3 border shadow-sm rounded-md">
                    <div class="flex items-center">
                        <p class="mr-4 text-gray-600 dark:text-gray-300">Facebook Marketing</p>
                        <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <input type="text" value="HSC" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                    </div>
                    <div class="flex items-center">
                        <p class="mr-4 text-gray-600 dark:text-gray-300">50%</p>
                        <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <input type="text" value="50%" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                    </div>

                </div>
            </div>
            <div class="flex-1 space-y-2">
                <div class="flex items-center">
                    <h5 class="font-semibold mr-3">Expertise Right</h5>
                    <span class="text-sm text-blue-600 underline">Add New</span>
                </div>
                <!-- Single Education -->
                <div class="p-3 border shadow-sm rounded-md">
                    <div class="flex items-center">
                        <p class="mr-4 text-gray-600 dark:text-gray-300">Facebook Marketing</p>
                        <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <input type="text" value="HSC" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                    </div>
                    <div class="flex items-center">
                        <p class="mr-4 text-gray-600 dark:text-gray-300">50%</p>
                        <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <input type="text" value="50%" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection