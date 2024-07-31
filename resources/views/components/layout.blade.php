<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard Admin' }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="bg-gray-200">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
