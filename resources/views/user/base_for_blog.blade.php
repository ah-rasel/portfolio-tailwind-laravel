@extends('layouts.user')
@section('content')
<div class="container grid px-3 mx-auto text-gray-700 md:mt-4 dark:text-gray-200">
  <div class="max-w-6xl md:mx-auto">
      <div class="grid-cols-8 md:grid md:gap-x-4">
        @yield('blogContent')
          <!-- Sidebar -->
          <div class="hidden col-span-2 mt-2 space-y-3 md:block">
             <!-- Recent Posts -->
             <div class="p-4 bg-gray-100 rounded dark:bg-gray-800">
               <h3 class="pb-4 font-bold tracking-wider">Recent Posts</h3>
               <ul class="space-y-4">
                   
                   <li>
                     <a href="#" class="flex items-center justify-center space-x-2 text-xs">
                     <div class="px-3 text-xl font-bold text-gray-500 dark:text-gray-300">01</div> 
                     <div class="font-semibold text-blue-400 dark:text-blue-300">How to see mysql database inside docker for laravel 8 in a GUI</div>
                     </a>
                   </li>
                   <li>
                     <a href="#" class="flex items-center justify-center space-x-2 text-xs">
                     <div class="px-3 text-xl font-bold text-gray-500 dark:text-gray-300">02</div> 
                     <div class="font-semibold text-blue-400 dark:text-blue-300">How to see mysql database inside docker for laravel 8 in a GUI</div>
                     </a>
                   </li>
                   <li>
                     <a href="#" class="flex items-center justify-center space-x-2 text-xs">
                     <div class="px-3 text-xl font-bold text-gray-500 dark:text-gray-300">03</div> 
                     <div class="font-semibold text-blue-400 dark:text-blue-300">How to see mysql database inside docker for laravel 8 in a GUI</div>
                     </a>
                   </li>
               
               </ul>
             </div>
             <!-- Categories -->
             <div class="p-4 bg-gray-100 rounded dark:bg-gray-800">
               <h3 class="pb-4 font-bold tracking-wide">Categories</h3>
               <ul class="space-y-1">
                 <li>
                     <a href="#" class="flex items-center space-x-2 text-sm hover:text-blue-600">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                       </svg>
                       <div >Laravel</div>
                     </a>
                 </li>
               </ul>
             </div>
          </div>
        </div>
  </div>
</div>
@endsection