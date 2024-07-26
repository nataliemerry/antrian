<main class="bg-cover bg-center h-screen" style="background-image: url('img/bg bps.png'); font-family: 'Poppins', sans-serif;"> 
        <div class="container mx-auto text-center py-8"> 
            <h1 class="text-xl font-semibold text-white">SELAMAT DATANG DI</h1>
            <h2 class="text-3xl font-semibold mb-12 text-white">PELAYANAN STATISTIK TERPADU</h2>
            <div class="bg-white rounded-lg inline-block mb-10 w-full max-w-xs">
                <div class="bg-[#D3D3D3] rounded-lg p-2 shadow-lg">
                    <h3 class="text-base font-semibold">ANTRIAN SAAT INI</h3>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold text-black">A-1</div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-screen-md">
                    <div class="bg-white rounded-lg inline-block mb-16">
                        <div class="bg-biru rounded-lg p-2 shadow-lg">
                            <h3 class="text-base font-semibold text-white">KONSULTASI</h3>
                        </div>
                        <div class="p-4">
                            <div class="text-3xl font-bold text-black">A-1</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg inline-block mb-16">
                        <div class="bg-hijau rounded-lg p-2 shadow-lg">
                            <h3 class="text-base font-semibold text-white">PERMINTAAN DATA</h3>
                        </div>
                        <div class="p-4">
                            <div class="text-3xl font-bold text-black">B-1</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg inline-block mb-16">
                        <div class="bg-orange rounded-lg p-2 shadow-xl">
                            <h3 class="text-base font-semibold text-white">LAINNYA</h3>
                        </div>
                        <div class="p-4">
                            <div class="text-3xl font-bold text-black">C-1</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <p class="text-base font-semibold text-white mb-6">Silahkan klik tombol di bawah ini untuk memilih layanan!</p>
        </div>
        <div class="flex justify-center items-center">
            <label for="popup" class="bg-[#567AC8] hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">Tambah Antrian</label>
        </div>

        <!-- Pop-up -->
        <input type="checkbox" id="popup" class="hidden">
        <div class="popup-content fixed inset-0 flex items-center justify-center bg-black bg-opacity-60 hidden">
            <div class="bg-white rounded-lg p-8 mb-20 text-center w-11/12 max-w-md mx-auto relative">
                <label for="popup" class="absolute top-4 right-4 text-gray-500 cursor-pointer text-2xl">&times;</label>
                <h2 class="text-xl font-bold mb-4">Tambah Antrian</h2>
                <label for="service" class="block mb-2 font-semibold text-left">Pilih Layanan Berikut</label>
                <select id="service" class="mb-6 p-2 border rounded w-full">
                    <option>Konsultasi</option>
                    <option>Permintaan Data</option>
                    <option>Lainnya</option>
                </select>
                <label for="popup" class="bg-[#567AC8] hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">TAMBAH</label>
            </div>
        </div>
    </main>