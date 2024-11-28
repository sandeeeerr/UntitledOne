@extends('layouts.app')

@section('content')
    <div class="relative min-h-screen bg-[#111111] bg-center flex justify-center items-center bg-dots selection:bg-indigo-500 selection:text-white">        
        {{-- @if (Route::has('login'))
            <div class="p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                    <a href="{{ route('home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Home</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}

        <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex justify-center">
                <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
            </div>
        </div>
    </div>
@endsection
