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
{{--        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>--}}
        <script src="{{ asset('js/app.js') }}" defer></script>

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <!--
                    Primary Navigation Menu
                    -->
                        <div class="flex justify-between h-16">
                            <div class="flex">
                                <!-- Logo -->
                                <div class="shrink-0 flex items-center">
                                    <a href="{{ __('/') }}">
                                        <img src="img/imker.png" class="block h-10 w-auto fill-current text-gray-600" />
                                    </a>
                                </div>

                                <!-- Navigation Links -->
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('adm/users')" :active="request()->routeIs('Imkervereneging')">
                                        {{ __('Imkervereneging') }}
                                    </x-nav-link>
                                    <x-nav-link :href="__('artikelen')" :active="request()->routeIs('artikelen')">
                                        {{ __('Artikelen') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('adm/users')" :active="request()->routeIs('nieuwsarchief')">
                                        {{ __('Nieuwsarchief') }}
                                    </x-nav-link>
                                    <x-nav-link :href="__('cursussen')" :active="request()->routeIs('cursussen')">
                                        {{ __('Cursussen') }}
                                    </x-nav-link>
                                    <div class="hidden sm:flex sm:items-center sm:ml-6" style="margin-left: 0">
                                        <x-dropdown align="left" width="48">
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
                                                <x-dropdown-link :href="route('adm/users')" :active="request()->routeIs('Basiscursus')">
                                                    {{ __('Basiscursus') }}
                                                </x-dropdown-link>
                                                <x-dropdown-link :href="route('adm/users')" :active="request()->routeIs('Bijscholing')">
                                                    {{ __('Bijscholing') }}
                                                </x-dropdown-link>
                                                <x-dropdown-link :href="route('adm/users')" :active="request()->routeIs('Cursusblog')">
                                                    {{ __('Cursusblog') }}
                                                </x-dropdown-link>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                    <x-nav-link :href="route('adm/users')" :active="request()->routeIs('Voor imkers')">
                                        {{ __('Voor imkers') }}
                                    </x-nav-link>
                                    <x-nav-link :href="route('adm/users')" :active="request()->routeIs('Contact')">
                                        {{ __('Contact') }}
                                    </x-nav-link>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-heroicon-o-user class="h-6 w-6"/>
                                @if( Auth::user())
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                <div>
                                                    {{ Auth::user()->name }}

                                                </div>
                                                <div class="ml-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>

                                @else
                                    <x-nav-link  :href="__('dashboard')"> Login!</x-nav-link>

                                @endif
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
            <main class="min-h-screen container mx-auto">


