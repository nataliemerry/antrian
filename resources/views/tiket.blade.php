<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Antrian PST</title>
    @vite('resources/css/app.css')
    <style>
        /* CSS for checkbox hack to display the popup */
        #popup:checked ~ .popup-content {
            display: flex;
        }
    </style>
</head>
<body class="overflow-hidden bg-cover bg-center" style="background-image: url('img/bg bps.png'); font-family: 'Poppins', sans-serif;">
    <header class="bg-blue-900 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="/img/logo%20bps.png" alt="BPS Logo" class="h-12 mr-4">
                <span class="text-xl font-bold text-white italic">BPS KABUPATEN MAGELANG</span>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="h-8">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>
    </header>
    <main class="flex flex-col items-center justify-center h-[80vh]">
        <div class="flex justify-center mt-2 mb-2">
            <button class="bg-hijau hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">UNDUH</button>
            <button class="bg-orange hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">CETAK</button>
        </div>
        <div class="bg-white rounded-lg shadow-lg text-center w-full max-w-sm mt-2">
            <img src="/img/pst.png" alt="PST Logo" class="h-8 mx-auto mb-4 mt-4">
            <h2 class="text-base font-bold mb-2">PST BPS Kabupaten Magelang</h2>
            <div class="border-b border-gray-300 mb-4"></div>
            <h1 class="text-lg font-bold mb-2">Nomor Antrian</h1>
            <p class="text-6xl font-bold mb-2">A-1</p>
            <p class="text-lg font-semibold mb-4">Layanan Konsultasi</p>
            <div class="border border-gray-300 rounded-lg p-2 mb-4">
                <p class="text-base mb-1">Senin, 21 Juli 2024 pukul 11:00:30</p>
                <p class="text-base mb-2">Terima kasih atas kunjungan Anda</p>
            </div>
        </div>
    </main>
</x-layout>

