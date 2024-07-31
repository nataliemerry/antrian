<x-layout-admin title="Dashboard Admin">
    <div class="flex justify-between items-center mb-6 pt-20 ml-64">
        <h1 class="text-3xl font-bold">Dashboard</h1>
    </div>

    <div class="grid grid-cols-3 gap-20 ml-64">
        <!-- Card 1 -->
        <div class="bg-white rounded shadow text-center grid grid-cols-2">
            <!-- Bagian kiri (kolom pertama) untuk gambar -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/konsultasi.png') }}" alt="konsultasi" class="w-full"/>
            </div>
            <!-- Bagian kanan (kolom kedua) untuk teks -->
            <div class="flex flex-col justify-center bg-biru">
                <h2 class="text-xl font-bold text-white">Konsultasi</h2>
                <p class="text-3xl text-white font-bold">{{ $konsultasiCount }}</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="bg-white rounded shadow text-center grid grid-cols-2">
            <!-- Bagian kiri (kolom pertama) untuk gambar -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/permintaandata.png') }}" alt="permintaandata" class="w-full"/>
            </div>
            <!-- Bagian kanan (kolom kedua) untuk teks -->
            <div class="flex flex-col justify-center bg-hijau">
                <h2 class="text-xl font-bold text-white">Permintaan Data</h2>
                <p class="text-3xl text-white font-bold">{{ $permintaanDataCount }}</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="bg-white rounded shadow text-center grid grid-cols-2">
            <!-- Bagian kiri (kolom pertama) untuk gambar -->
            <div class="flex items-center justify-center">
                <img src="{{ asset('img/lainnya.png') }}" alt="lainnya" class="w-full"/>
            </div>
            <!-- Bagian kanan (kolom kedua) untuk teks -->
            <div class="flex flex-col justify-center bg-orange">
                <h2 class="text-xl font-bold text-white">Lainnya</h2>
                <p class="text-3xl text-white font-bold">{{ $lainnyaCount }}</p>
            </div>
        </div>
    </div>
</x-layout-admin>
