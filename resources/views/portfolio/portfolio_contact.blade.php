@extends('portfolio.portfolio')
@section('portfolioContent')
    <div class="col-span-4 h-full w-full px-3 md:px-8 py-4 space-y-4 md:border-l-2 border-gray-200 dark:border-gray-500">
        <div class="">
            <h5 class="font-semibold">Contact</h5>
            <!-- Render When Not editing -->
            <div class="flex items-center mt-1">
                <p class="mr-4 text-gray-600 dark:text-gray-300">Get In Touch</p>
                <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" value="Get In Touch" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
            </div>
            <div class="flex items-center mt-1">
                <p class="mr-4 text-gray-600 dark:text-gray-300">Contact With Me</p>
                <a href="#" class="text-sm font-semibold text-blue-600">Edit</a>
            </div>
            <div class="flex items-center space-x-4">
                <input type="text" value="Contact With Me" class="text-sm w-48 bg-transparent outline-none ring-1 focus:ring-2 mt-2 px-2 py-1 rounded-sm">
                <span class="px-4 cursor-pointer text-blue-600 underline">save</span>
            </div>
        </div>
        <div class="md:flex md:space-x-2">

            <div class="flex-1 space-y-2">
                <span class="font-semibold">Phone</span><span class="text-blue-500 text-sm font-semibold ml-4">Add New Phone Number</span>
                <div class="flex flex-col space-y-1">
                    <div class=""><span>+8801781844900</span> <span class="text-blue-500 text-sm font-semibold ml-4">Edit</span></div>
                    <div class=""><span>+8801781844900</span> <span class="text-blue-500 text-sm font-semibold ml-4">Edit</span></div>
                    <div class=""><span>+8801781844900</span> <span class="text-blue-500 text-sm font-semibold ml-4">Edit</span></div>
                    <!-- Edit -->
                    <div class="flex">
                        <input type="text" name="" id="" value="+8801781844900" class="text-sm w-56 ring-1 focus:ring-2 outline-none px-2 py-1 rounded-md">
                        <span class="text-blue-500 text-sm font-semibold ml-4">Save</span>
                    </div>
                </div>
            </div>
            <div class="flex-1 space-y-2">
                <span class="font-semibold">Email</span><span class="text-blue-500 text-sm font-semibold ml-4">Add New Email</span>
                <div class="flex flex-col space-y-1">
                    <div class="">
                        <span>azharasel@gmail.com</span> <span class="text-blue-500 text-sm font-semibold ml-4">Edit</span>
                    </div>

                    <div class="">
                        <span>azharasel@gmail.com</span> <span class="text-blue-500 text-sm font-semibold ml-4">Edit</span>
                    </div>

                    <!-- Edit -->
                    <div class="flex">
                        <input type="text" name="" id="" value="azharasel@gmail.com" class="text-sm w-56 ring-1 focus:ring-2 outline-none px-2 py-1 rounded-md">
                        <span class="text-blue-500 text-sm font-semibold ml-4">Save</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
