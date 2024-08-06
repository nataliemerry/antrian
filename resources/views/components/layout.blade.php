@props(['title' => 'Dashboard', 'bodyClass' => ''])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/js/html2canvas.min.js')
    @vite('resources/js/jspdf.umd.min.js')
</head>
<body class="{{ $bodyClass }}">

    {{ $slot }}

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if (session('status'))
                toastr.options = {
                    "positionClass": "toast-bottom-right"
                };
                toastr.success("{{ session('status') }}");
            @endif
        });
    </script>
</body>
</html>
