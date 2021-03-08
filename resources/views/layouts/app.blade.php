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
        // callback function to handle an event
        function changeFocus (customEvent, inputId) { 
            window.livewire.on(customEvent, () => {
                document.getElementById(inputId).focus();
            });
        }

        // "register" a new custom event when livewire itself fires "livewire:load" event
        document.addEventListener('livewire:load', changeFocus('usersAvailableSelected', 'searchAvailable'));
        document.addEventListener('livewire:load', changeFocus('usersSickLeaveSelected', 'searchSickLeave'));
    </script>
    
</body>
</html>