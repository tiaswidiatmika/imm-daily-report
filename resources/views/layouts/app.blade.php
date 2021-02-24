<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body>
    <div class="flex">
        @include('layouts.includes.sidebar-left')
        @yield('content')
    </div>

     
    @livewireScripts
   

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script>
        function changeFocus (customEvent) { 
            window.livewire.on(customEvent, inputname => {
                document.getElementById("wawinput").focus();
            });
        }
        document.addEventListener('livewire:load', changeFocus('usersAvailableSelected'));
    </script>
    
</body>
</html>