@extends('layouts.user')
@section('content')
    <div class="container px-3 grid text-gray-700 dark:text-gray-200 space-y-8 h-full">
        <div class="w-full sm:max-w-md md:px-6 px-2 overflow-hidden mx-auto">
            <h4 class="text-center py-2 text-2xl font-semibold">Register</h4>
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
            <h5 class="text-center my-3">Or</h5>
            <div class="bg-gray-50 dark:bg-gray-700 w-full px-4 md:px-6 md:pt-0.5 md:pb-12 pt-1 pb-5 rounded-md shadow-sm" >
                <form method="POST" action="{{ route('register') }}" class="space-y-3">
                    @csrf
                    <div>
                        <label class="font-medium text-sm" for="name">
                            {{ __('Name') }}
                        </label>
                        <input  class=" border-0
                        rounded-md ring-1 focus:ring-2 ring-gray-400 text-sm shadow-sm block mt-1 w-full dark:text-gray-600"
                                placeholder="Christopher Nolan" id="name"
                                type="text" name="name"
                                :value="old('name')"
                                required="required" autofocus="autofocus">
                    </div>
                    <div>
                        <label class="font-medium text-sm" for="email">
                            {{ __('Email') }}
                        </label>
                        <input  class=" border-0
                        rounded-md ring-1 focus:ring-2 ring-gray-400 text-sm shadow-sm block mt-1 w-full dark:text-gray-600"
                                placeholder="Youremail@mail.com" id="email"
                                type="email" name="email"
                                :value="old('email')"
                                required="required">
                    </div>
                    <div>
                        <label class="font-medium text-sm" for="password">
                            {{ __('Password') }}
                        </label>
                        <input  class="border-0
                        rounded-md ring-1 ring-gray-400 focus:ring-2 text-sm shadow-sm block mt-1 w-full dark:text-gray-600 font-extrabold"
                                id="password" type="password" name="password"
                                required="required" autocomplete="new-password">
                    </div>
                    <div>
                        <label class="font-medium text-sm" for="password_confirmation">
                            {{ __('Confirm Password') }}
                        </label>
                        <input  class="border-0
                        rounded-md ring-1 ring-gray-400 focus:ring-2 text-sm shadow-sm block mt-1 w-full dark:text-gray-600 font-extrabold"
                                id="password_confirmation" type="password" name="password_confirmation"
                                required="required" autocomplete="new-password">
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div>
                        <label for="terms" class="flex items-center">
                            <input type="checkbox"
                                   class="rounded border-gray-300
                                   text-purple-600 shadow-sm
                                   focus:border-purple-300 focus:ring
                                   focus:ring-indigo-200 focus:ring-opacity-50"
                                   id="terms" name="terms">
                            <span class="ml-2 text-sm">{{ __('I agree to ') }} <a href="#" class="text-blue-400 underline">Terms</a> and <a
                                    href="#" class="text-blue-400 underline">Policies</a></span>
                        </label>

                    </div>
                    @endif
                    <div>
                        <button class="text-sm px-4 py-1.5 bg-purple-500
                        md:float-right
                        text-white rounded-md w-full md:w-auto mt-2 md:mt-0" type="submit">{{ __('Sign Up') }}</button>

                    </div>
                </form>
            </div>
            <h4 class="text-center py-8 mb-8">Already Have an Account ! <a href="{{ route('login') }}" class="text-blue-500 font-semibold">Login Here</a></h4>
        </div>

    </div>
@endsection

