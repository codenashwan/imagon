<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMAGON</title>
    <meta name="theme-color" content="#26C076">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/icon type">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta name="keywords" content="API,APIIMAGE,image api , image compress , image size , upload image , compressed image , image compressed , less image">


    @livewireStyles
</head>

<body class="font-body">
    <div class="container mx-auto p-3">
        <div class="flex justify-between items-center">
            <div class="flex md:justify-start justify-center items-center">
                <img src="{{ asset('img/logo.png') }}" width="45">
                <a href="{{ route('/') }}" class="">IMAGON</a>
               </div>
               <div class="flex justify-center items-center md:my-0 my-3">
                <a href="{{ route('doc') }}" class="font-bold transition hover:text-black text-neutral-500 mx-2">API</a>
               </div>
        </div>
        @yield('content')
        <p class="md:text-left text-center">Powered By <a target="_blank" href="https://www.facebook.com/rstacode">Rstacode</a></p>
    </div>
    @livewireScripts
    <script type="module">
        import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>


</body>
</html>
