@extends('layouts.user')
@section('content')
<div class="container grid px-3 mx-auto text-gray-700 md:mt-4 dark:text-gray-200">
  <div class="max-w-6xl md:mx-auto">
      <div class="grid-cols-8 md:grid md:gap-x-4">
        @yield('blogContent')
          <!-- Sidebar -->
          <div class="hidden col-span-2 mt-2 space-y-3 md:block">
             <!-- Recent Posts -->
             @livewire('user.post.recent-posts')
             
             <!-- Categories -->
             @livewire('user.sidebar.sidebar-categories')
            
          </div>
        </div>
  </div>
</div>
@endsection