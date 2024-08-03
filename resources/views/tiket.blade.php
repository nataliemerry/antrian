<x-layout :title="'Tiket Antrian'" bodyClass="overflow-hidden">
    <x-navbar></x-navbar>
    <main class="bg-cover bg-center h-screen mt-20" style="background-image: url('img/bg bps.png'); font-family: 'Poppins', sans-serif;">
        <div class="flex flex-col items-center justify-center h-[80vh]">
            <div class="flex justify-center mt-2 mb-2">
                <button class="bg-hijau hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">UNDUH</button>
                <button class="bg-orange hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">CETAK</button>
            </div>
            <div class="bg-white rounded-lg shadow-lg text-center w-full max-w-sm mt-2">
                <img src="/img/logo bps.png" alt="Logo BPS" class="h-8 mx-auto mb-2 mt-4">
                <h3 class="text-sm font-semibold">Badan Pusat Statistik</h3>
                <h3 class="text-sm font-semibold mb-2">Kabupaten Magelang</h3>
                <div class="border-b border-gray-300 mb-4"></div>
                <h1 class="text-lg font-bold mb-2">Nomor Antrian</h1>
                <p class="text-6xl font-bold mb-2">{{ $queue->queue_number }}</p>
                <p class="text-lg font-semibold mb-4">Layanan: {{ $queue->service_name }}</p>
                <div class="border border-gray-300 rounded-lg p-2 mb-4">
                    <p class="text-base mb-1">{{ $created_at->format('l, d F Y H:i:s') }}</p>
                    <p class="text-base mb-2">Terima kasih atas kunjungan Anda</p>
                </div>
            </div>
        </div>
    </main>
</x-layout>

