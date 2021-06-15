@extends('layouts.user')
@section('content')
    <div class="container md:mt-4 px-3 grid text-gray-700 dark:text-gray-200 space-y-8 h-full">
        <div class="w-full sm:max-w-md md:px-6 px-2 overflow-hidden mx-auto">
            <h4 class="text-center py-4 text-2xl font-semibold">Login</h4>
        <div class="flex space-x-6 justify-between px-6">
            <div class="flex-grow">
                <a href="#" class="flex justify-center space-x-2 text-sm font-semibold items-center px-3 py-2 bg-blue-500 dark:bg-blue-700 text-white rounded-full">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </a>
            </div>
            <div class="flex-grow">
                <a href="#" class="flex justify-center space-x-2 text-sm font-semibold items-center px-3 py-2 bg-gray-800 dark:bg-gray-600 text-white rounded-full">
                    <i class="fab fa-github"></i>
                    <span>Github</span>
                </a>
            </div>

        </div>
            <h5 class="text-center my-5">Or</h5>
            <div class="bg-gray-50 dark:bg-gray-700 w-full px-4 md:px-6 py-6 md:py-10 rounded-md shadow-sm" >
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <x-jet-validation-errors class=""/>
                <form method="POST" action="{{ route('login') }}" class="space-y-3">
                    @csrf
                    <div>
                        <label class="font-medium text-sm" for="email">
                            {{ __('Email') }}
                        </label>
                        <input  class=" border-0
                        rounded-md ring-1 focus:ring-2 ring-gray-400 shadow-sm block mt-1 w-full dark:text-gray-600"
                               placeholder="Youremail@mail.com" id="email"
                                type="email" name="email"
                                :value="old('email')"
                                required="required" autofocus="autofocus">
                    </div>
                    <div>
                        <label class="font-medium text-sm" for="password">
                            {{ __('Password') }}
                        </label>
                        <input  class="border-0
                        rounded-md ring-1 ring-gray-400 focus:ring-2 shadow-sm block mt-1 w-full dark:text-gray-600 font-extrabold"
                                id="password" type="password" name="password"
                                required="required" autocomplete="current-password">
                    </div>
                    <div>
                        <label for="remember_me" class="flex items-center">
                            <input type="checkbox"
                                   class="rounded border-gray-300
                                   text-purple-600 shadow-sm
                                   focus:border-purple-300 focus:ring
                                   focus:ring-indigo-200 focus:ring-opacity-50"
                                   id="remember_me" name="remember">
                            <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
                        </label>

                    </div>
                    <div>
                        <button class="text-sm px-4 py-1.5 bg-purple-500
                        md:float-right
                        text-white rounded-md w-full md:w-auto" type="submit">{{ __('Log in') }}</button>

                    </div>
                </form>
                @if (Route::has('password.request'))
                <h4 class="text-center py-4 md:py-0 md:text-left text-sm text-gray-400 "><a href="{{ route('password.request') }}">{{ __('Forgot ') }}<span class="text-blue-400 font-semibold">Password !</span></a></h4>
                @endif
            </div>
        <h4 class="text-center py-16">Don't Have an Account ! <a href="{{ route('register') }}" class="text-blue-500 font-semibold">Signup Here</a></h4>
        </div>

    </div>
@endsection


