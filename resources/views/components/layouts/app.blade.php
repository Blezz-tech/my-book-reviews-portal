<!doctype html>
<html class="antialiased" lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>{{ $pageTitle ?? 'Главная страница' }}</title>
    {{-- <link href="/assets/favicon.ico" rel="shortcut icon" type="image/x-icon"> --}}
</head>

<body>
    <x-panels.navbar />
    <div class="container">
        <main>
            {{ $slot }}
        </main>
    </div>
    <script src="/js/bootstrap.bundle.js"></script>
    </div>

</body>

</html>
