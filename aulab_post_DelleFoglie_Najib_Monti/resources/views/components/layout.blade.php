<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Aulab Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="sfondo">
    <x-navbar2></x-navbar2>
    <div class="min-vh-100">
        {{ $slot }}
    </div>
</body>
</html>