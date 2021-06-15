@extends('portfolio.portfolio')
@section('portfolioContent')
    <div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">
        <div class="">
            <h5 class="font-semibold">Works</h5>
            <!-- Render When Not editing -->
            <div class="flex items-center mt-1">
                <p class="mr-4 text-gray-600 dark:text-gray-300">My Portfolio</p>
                <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" value="Hi, I am" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
            </div>
            <div class="flex items-center mt-1">
                <p class="mr-4 text-gray-600 dark:text-gray-300">Recent Works</p>
                <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" value="Hi, I am" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
            </div>
        </div>
        <div class="md:flex md:space-x-2">
            <div class="flex-1 space-y-2">
                <div class="flex items-center">
                    <h5 class="font-semibold mr-3">Portfolio </h5>
                    <span class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
                </div>
                <!-- Single Education -->
                <div class="p-3 border shadow-sm rounded-md space-y-4">
                    <div class="">
                        <div class="h-32 w-32 overflow-hidden bg-red-300">
                            <img src="images/placeholder.png" alt="" class="h-32 w-32 object-cover">
                        </div>

                        <div class="flex justify-between">
                            <div class=""><span class="font-semibold">Title:</span> <span>Car Rental Management Using Laravel</span></div>
                            <span class="text-sm font-semibold text-blue-500">Edit</span>
                        </div>
                        <div class="">
                            <input type="text" value="Car Rental Management Using Laravel" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            <input type="file" value="Car Rental Management Using Laravel" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                        </div>
                    </div>
                    <div class="">
                        <div class="h-32 w-32 overflow-hidden bg-red-300">
                            <img src="images/placeholder.png" alt="" class="h-32 w-32 object-cover">
                        </div>

                        <div class="flex justify-between">
                            <div class=""><span class="font-semibold">Title:</span> <span>Car Rental Management Using Laravel</span></div>
                            <span class="text-sm font-semibold text-blue-500">Edit</span>
                        </div>
                        <div class="">
                            <input type="text" value="Car Rental Management Using Laravel" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            <input type="file" value="Car Rental Management Using Laravel" class="text-sm w-full bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                            <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 space-y-2">
                <div class="flex items-center">
                    <h5 class="font-semibold mr-3">Work Categories</h5>
                    <span class="text-sm text-blue-600 underline cursor-pointer">Add New</span>
                </div>
                <!-- Single Education -->
                <div class="p-3 border shadow-sm rounded-md">
                    <div class="flex items-center">
                        <p class="mr-4 text-gray-600 dark:text-gray-300">PHP</p>
                        <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <input type="text" value="PHP" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                        <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
