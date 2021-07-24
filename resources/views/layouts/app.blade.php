<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Greenline') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        @livewireStyles
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="font-sans antialiased box-content h-screen w-screen" style="overflow: hidden">
        <div class=" bg-gray-100 w-full h-full relative">
            {{--@include('layouts.navigation')--}}

            <!-- Page Content -->
            <main class="flex" style="height:100%">
                <div style="background-color:#202125; width:12%; overflow-y:auto;">
                    <!-- Profile -->
                    <div class="inline-flex items-center ml-1 mr-1 mt-3">
                        <div>
                            <img src="{{(Auth::user()->avater) ?asset(('img\avatar\\'.Auth::user()->avatar)) :asset('img\avatar\default.png')}}" width="30px" alt="">
                        </div>
                        <div class="text-white ml-3">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                     <!-- Navigation Links -->
                     <div class="sm:-my-px sm:mt-4 sm:ml-1 sm:mr-1 flex flex-col">
                         {{-- @role('admin|reseller|user') --}}
                        <x-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.*')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sidebar"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                            <div style="margin-left:1em">{{ __('Dashboard') }}</div>
                        </x-nav-link>
                        {{-- @endrole --}}

                        <p class="text-gray-500 text-sm mt-4">Control Panel</p>
                        <x-nav-link :href="route('member.index')" :active="request()->routeIs('member.*')">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                            <div style="margin-left:1em">{{ __('User Account') }}</div>
                        </x-nav-link>
                     </div>
                </div>
            
                <div class="flex-1 relative" style="background-color: black; padding:1em">
                    {{-- {{ $slot }} --}}
                   
                    @yield('content')
                    
                </div>
            </main>
        </div>
        <div class="text-white absolute bottom-2 left-2/4">
            <h3>
                Copyright © Green line IT 2021. All rights reserved.
            </h3>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
