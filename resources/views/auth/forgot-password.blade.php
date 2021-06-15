{{--<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full"
                type="email" name="email" :value="old('email')"
                required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>--}}

@extends('layouts.user')
@section('content')
    <div class="container md:mt-4 px-3 grid text-gray-700 dark:text-gray-200 space-y-8 h-full">
        <div class="w-full sm:max-w-md md:px-6 px-2 overflow-hidden mx-auto">
            <h4 class="text-center py-4 text-2xl font-semibold">Login Using</h4>
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
            <h5 class="text-center my-5">OR</h5>
            <div class="bg-gray-50 dark:bg-gray-700 w-full px-4 md:px-6 py-6 md:py-10 rounded-md shadow-sm" >
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="space-y-3">
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
                        <button class="text-sm px-4 py-2 bg-purple-500
                        md:float-right
                        text-white rounded-md w-full md:w-auto" type="submit">{{ __('Send Password Reset Link') }}</button>

                    </div>
                </form>

                    <h4 class="text-center py-4 md:py-0 md:mt-2 md:text-left text-sm text-gray-400 "><a href="{{ route('login') }}">{{ __('Back to ') }} <span class="text-blue-400 font-semibold">Login !</span></a></h4>

            </div>
            <h4 class="text-center py-16">Don't Have an Account ! <a href="{{ route('register') }}" class="text-blue-500 font-semibold">Signup Here</a></h4>
        </div>

    </div>
@endsection
