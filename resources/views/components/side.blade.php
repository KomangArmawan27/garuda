<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="w-full">
    <!-- sidebar -->

    <aside id="default-sidebar" class="top-0 left-0 z-40 w-64 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/paket" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" src="https://cdn-icons-png.flaticon.com/128/756/756940.png" fill="currentColor" viewBox="0 0 22 21">
                        <span class="ml-3">Paket</span>
                    </a>
                </li>
                <li>
                    <a href="/export" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" src="https://cdn-icons-png.flaticon.com/128/4911/4911806.png" fill="currentColor" viewBox="0 0 22 21">
                        <span class="ml-3">Export data</span>
                    </a>
                </li>
                <li>
                    <a href="/users" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <img class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" src="https://cdn-icons-png.flaticon.com/128/1165/1165674.png" fill="currentColor" viewBox="0 0 22 21">
                        <span class="ml-3">Kelola Pengguna</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end of sidebar -->
</body>

</html>