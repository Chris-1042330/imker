<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - {{ config('app.name', 'imker') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!--

                    Primary Navigation Menu

                    -->
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <a href="{{ __('Home') }}">
                                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                                        <img src="img/imker.png" height="420px"  width="700px" alt="afbeelding Imker">
                                    </a>
                                </div>

                                <!-- Navigation Links -->
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('adm/dashboard')" :active="request()->routeIs('adm/dashboard')">
                                        {{ __('Dashboard') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('adm/users')" :active="request()->routeIs('adm/users')">
                                        {{ __('Users') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Inloggen')" :active="request()->routeIs('cursussen')">
                                        {{ __('Inloggen') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Imkervereneging')" :active="request()->routeIs('Imkervereneging')">
                                        {{ __('Imkervereneging') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Artikelen')" :active="request()->routeIs('Artikelen')">
                                        {{ __('Artikelen') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Nieuws archief')" :active="request()->routeIs(''Nieuws archief')">
                                        {{ __('Nieuws archief') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('cursussen')" :active="request()->routeIs('cursussen')">
                                        {{ __('cursussen') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Voor imkers')" :active="request()->routeIs('Voor imkers')">
                                        {{ __('Voor imkers') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Contact')" :active="request()->routeIs('Contact')">
                                        {{ __('Contact') }}
                                    </x-nav-link>
                            
                                  
                                </div>
                            </div>

                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-nav-link :href="route('Basiscursus')" :active="request()->routeIs('Basiscursus')">
                                        {{ __('Basiscursus') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Bijscholing')" :active="request()->routeIs('Bijscholing')">
                                        {{ __('Bijscholing') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('Cursusblog')" :active="request()->routeIs('Cursusblog')">
                                        {{ __('Cursusblog') }}
                                    </x-nav-link>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
            </header>

            <!-- Page Content -->
            <main>
{{--                {{ $slot }}--}}
            </main>
        </div>
        @livewireStyles
    </body>
</html>
