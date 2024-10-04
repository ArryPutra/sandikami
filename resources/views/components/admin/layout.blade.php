<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{ $slot }}</title>
    <link rel="icon" sizes="32x32" type="image/png" href="/images/logo-prov-kalsel-square-frame.png">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="bg-slate-50" x-data="{ isOpenMobileMenu: false }">

    <x-admin.header>{{ $slot }}</x-admin.header>
    <x-admin.sidebar>{{ $slot }}</x-admin.sidebar>
    <x-admin.content>{{ $slot }}</x-admin.content>

</body>

</html>
