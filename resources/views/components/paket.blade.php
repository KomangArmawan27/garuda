<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Halaman Admin - Tambah paket</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="w-full">
    <!-- navbar -->
    @include('components/nav')
    <div class="flex flex-row h-screen bg-white">
        <!-- sidebar -->
        @include('components/side')

        <!-- content -->
        <div class="flex flex-col w-full mx-3 my-6">
            <p class="text-3xl font-semibold">Halaman Paket</p>
            <div class="overflow-x-auto w-full p-3 sm:rounded-lg ">
                @livewire('show-paket')
            </div>
            <button class="bg-gray-800 text-white rounded-md w-fit h-fit p-3 mx-3 hover:bg-gray-700 trasition duration-150"><a href="/formPaket">Tambahkan Paket Baru</a></button>
        </div>
    </div>
    @livewireScripts
</body>

</html>