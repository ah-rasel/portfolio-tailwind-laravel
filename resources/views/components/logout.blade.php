<li class="px-6 py-3 bottom-0 mt-10">
    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150
            hover:text-gray-800 dark:hover:text-gray-200 bg-red-600 px-3 py-2 text-white rounded-md"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            href="#">
        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <span class="ml-4">Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>