<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 

    @livewireStyles
</head>

<body class="flex justify-center items-center">
    <div class="flex flex-col items-center justify-center w-full lg:w-9/12 xl:w-9/12 2xl:w-9/12 m-6">
        <h5 class="text-2xl">Website Sales - Admin</h5>
        @livewire('login-register')
    </div>
    </div>
    </div>
    @livewireScripts
    </script>
</body>

</html>