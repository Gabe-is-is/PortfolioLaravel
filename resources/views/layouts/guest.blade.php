<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css'])
    @vite(['resources/css/style.css'])
</head>

<body>
    <x-component.header>
    </x-component.header>
    {{ $slot }}
    <x-component.footer>
    </x-component.footer>
</body>

</html>