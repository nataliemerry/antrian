@props(['title' => 'Dashboard', 'bodyClass' => ''])

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title }}</title>
        <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jspdf-html2canvas@latest/dist/jspdf-html2canvas.min.js"></script>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
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
