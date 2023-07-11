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
        <livewire:form-paket />
        
    </div>
    @livewireScripts
</body>

</html>