<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            .input-group{
                display:table;
                width:100%;
            }
            .input-group .input-field,
            .input-group .input-group-addon{
                display:table-cell;
            }
            #modded {
        .progress {
            min-height: 30px;
            overflow: hidden;
            position: relative;
            span {
                position: relative;
                float:left;
                color: #fff;
                padding: 4px;
                z-index: 99999;
                i {
                    width: inherit;
                    font-size: inherit;
                    position: relative;
                    top: 2px;
                    margin-left: 8px;
                }
            }
            .determinate {
                width: 0;
                transition: width 1s ease-in-out;
                padding: 4px;
                position: relative;
                color: #fff;
                text-align: right;
                white-space: nowrap;
            }
        }
        ul.collapsible {
            padding: 0;
            border: none;
            border-radius: 0;
            box-shadow:none;
            li {
                margin-bottom: 14px;
            }
            .collapsible-header {
                padding: 0;
                border-bottom: 0;
                .progress {
                    margin: 0;
                    border-radius: 0;
                }
            }
            .collapsible-body {
                padding: 16px;
                box-shadow: rgba(0, 0, 0, 0.137255) 0px 2px 2px 0px, rgba(0, 0, 0, 0.117647) 0px 3px 1px -2px, rgba(0, 0, 0, 0.2) 0px 1px 5px 0px;
            }
        }
    }
    @keyframes grow {
      from {
        width: 0;
      }
    }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="bg-white fixed bottom-0 left-0 right-0 rounded-lg shadow m-4 dark:bg-gray-800">
                <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                  <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://github.com/abcdgick" class="hover:underline">Jonathan Krisna</a>. All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="mailto:jonathankrisna@protonmail.com" class="hover:underline me-4 md:me-6">Contact Me</a>
                    </li>
                </ul>
                </div>
            </footer>
        </div>




        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
