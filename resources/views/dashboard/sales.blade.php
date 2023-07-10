<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="w-9/12">
    <div class="flex flex-col">
        <button id="login" class="bg-green-100 text-lg text-blue-600 border-red-600 border-2 rounded-md hover:bg-slate-500 p-1 m-2"><a href="/login">halaman login</a></button>
    </div>
    @if (session()->has('message'))
    <div class="fixed inset-0 flex items-center justify-center z-50">
        <div class="flex flex-col items-center justify-center bg-white w-64 p-4 rounded shadow-lg">
            <div class="w-full text-xl font-bold mb-2">Success</div>
            <div class="w-full mb-4">{{ session('message') }}</div>
            <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded" onclick="closeModal()">Close</button>
        </div>
    </div>
    @endif
    @livewireScripts
    <script>
        document.getElementById('login').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior

            // Get the desired URL you want to navigate to
            var url = '/login';

            // Redirect the user to the desired URL
            window.location.href = url;
        });

        function closeModal() {
            document.querySelectorAll('.fixed').forEach(function(el) {
                el.remove();
            });
        };
    </script>
</body>

</html>