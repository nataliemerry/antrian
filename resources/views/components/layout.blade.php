<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard Admin' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <div class="flex h-screen flex-col">
        <!-- Navbar -->
        <x-navbar></x-navbar>

        <div class="flex flex-1">
            <!-- Sidebar -->
            <x-sidebar></x-sidebar>

            <!-- Main Content -->
            <div class="flex-1 p-10">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
