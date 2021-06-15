{{--
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
--}}

@extends('layouts.user')
@section('content')
    <div class="container md:mt-4 px-3 grid text-gray-700 dark:text-gray-200 space-y-8 h-full">
        <div class="w-full sm:max-w-lg px-2 overflow-hidden mx-auto">
            <h4 class="text-center py-4 text-2xl font-semibold">Verify Email Address</h4>
            <div class="bg-gray-50 dark:bg-gray-700 w-full px-4 md:px-6 py-6 md:pt-7 md:pb-14 rounded-md shadow-sm" >

                <div class="text-gray-600 dark:text-gray-300 space-y-2">
                    <p class="font-semibold">Thanks for signing up to My website !</p>
                    <span class="mt-2" >Before getting started,
                        Please verify your email address by clicking on the <span class="font-semibold dark:text-blue-400">'Verify Email'</span> Button I have just sent to you through email .
                     </span>
                    <p>If you can not find it in the inbox, Please check the <span class="font-semibold dark:text-blue-400">spam</span> folder </p>
                    <p>If you didn\'t receive the email,Click the <span class="font-semibold dark:text-blue-400">'Resend Verification Email'</span> Button .I will gladly send you another Link.
                    </p>
                    @if (session('status') == 'verification-link-sent')
                    <span class="text-sm text-green-500 dark:text-green-400 font-semibold my-4">
                        Another verification link has been sent successfully .
                    </span>
                    @endif
                </div>
                <form method="POST" action="{{ route('verification.send') }}" class="space-y-3">
                    @csrf

                    <div>
                        <button class="text-sm px-4 py-1.5 bg-purple-500
                        md:float-right
                        text-white rounded-md w-full md:w-auto" type="submit">{{ __('Resend Verification Email') }}</button>

                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 dark:text-blue-300 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection
