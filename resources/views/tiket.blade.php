<x-layout :title="'Tiket Antrian'" bodyClass="overflow-hidden bg-gray-200" class="print:hidden">
    <x-navbar></x-navbar>
    <main class="bg-cover bg-center h-screen mt-20" style="font-family: 'Poppins', sans-serif;">
        <div class="flex flex-col items-center justify-center h-[80vh] print:h-auto">
            <div class="flex justify-center mt-2 mb-2 print:hidden">
                <button id="downloadBtn" class="bg-hijau hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2">UNDUH</button>
                <button onclick="window.print()" class="bg-orange hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">CETAK</button>
            </div>
            <div id="ticket" class="bg-white rounded-lg shadow-lg text-center w-full max-w-sm mt-2">
                <img src="/img/logo bps.png" alt="Logo BPS" class="h-8 mx-auto mb-2 mt-4">
                <h3 class="text-sm font-semibold">Badan Pusat Statistik</h3>
                <h3 class="text-sm font-semibold mb-2">Kabupaten Magelang</h3>
                <div class="border-b border-gray-300 mb-4"></div>
                <h1 class="text-lg font-bold mb-2">Nomor Antrian</h1>
                <p class="text-6xl font-bold mb-2">{{ $queue->queue_number }}</p>
                <p class="text-lg font-semibold mb-4">Layanan: {{ $queue->service_name }}</p>
                <div class="border border-gray-300 rounded-lg p-2 mb-4">
                    <p class="text-base mb-1">{{ \Carbon\Carbon::parse($created_at)->translatedFormat('l, d F Y H:i:s') }} </p>
                    <p class="text-base mb-2">Terima kasih atas kunjungan Anda</p>
                </div>
            </div>
        </div>
    </main>
</x-layout>

<script>
    let btn = document.getElementById('downloadBtn');
    let page = document.getElementById('ticket');

    btn.addEventListener('click', function(){
      html2PDF(page, {
        jsPDF: {
          format: 'a4',
        },
        imageType: 'image/jpeg',
        output: 'tiket-antrian.pdf'
      });
    });
</script>


