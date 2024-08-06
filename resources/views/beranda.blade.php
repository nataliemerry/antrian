@props(['title' => 'Sistem Antrian PST', 'last_called_konsultasi', 'last_called_permintaandata', 'last_called_lainnya'])

<x-layout :title="$title" bodyClass="">
    <x-navbar></x-navbar>

    <main class="bg-cover bg-center pt-12" style="background-image: url('img/bg bps.png'); font-family: 'Poppins', sans-serif;">
        <div class="container mx-auto text-center py-8">
            <h1 class="mt-4 text-2xl font-semibold text-white">SELAMAT DATANG DI</h1>
            <h2 class="text-3xl font-semibold mb-12 text-white">PELAYANAN STATISTIK TERPADU</h2>
            <div class="bg-white rounded-lg inline-block mb-30 w-full max-w-lg h-48">
                <div class="bg-[#D3D3D3] rounded-lg p-2 shadow-lg">
                    <h3 class="text-base font-semibold">ANTRIAN SAAT INI</h3>
                </div>
                <div class="p-6">
                    <div id="current-queue" class="text-6xl font-bold text-black">
                        {{ $current_queue }}
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-screen-md">
                    <div class="bg-white rounded-lg inline-block mt-16 mb-16">
                        <div class="bg-biru rounded-lg p-2 shadow-lg">
                            <h3 class="text-base font-semibold text-white">KONSULTASI</h3>
                        </div>
                        <div class="p-4">
                            <div id="current-konsultasi" class="text-3xl font-bold text-black">
                                {{ $last_called_konsultasi }}
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg inline-block mt-16 mb-16">
                        <div class="bg-hijau rounded-lg p-2 shadow-lg">
                            <h3 class="text-base font-semibold text-white">PERMINTAAN DATA</h3>
                        </div>
                        <div class="p-4">
                            <div id="current-permintaandata" class="text-3xl font-bold text-black">
                                {{ $last_called_permintaandata }}
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg inline-block mt-16 mb-16">
                        <div class="bg-orange rounded-lg p-2 shadow-xl">
                            <h3 class="text-base font-semibold text-white">LAINNYA</h3>
                        </div>
                        <div class="p-4">
                            <div id="current-lainnya" class="text-3xl font-bold text-black">
                                {{ $last_called_lainnya }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <p class="text-base font-semibold text-white mb-2">Silahkan klik tombol di bawah ini untuk memilih layanan!</p>
        </div>
        <div class="flex justify-center items-center">
            <label for="popup" class="bg-blue-300 hover:bg-blue-400 text-blue-800 font-bold py-4 px-8 rounded cursor-pointer text-xl">Tambah Antrian</label>
        </div>

        <!-- Pop-up -->
        <input type="checkbox" id="popup" class="hidden">
        <div id="popup-content" class="popup-content fixed inset-0 items-center justify-center bg-black bg-opacity-60 hidden">
            <div class="bg-white rounded-lg p-8 mb-20 text-center w-11/12 max-w-md mx-auto relative">
                <label for="popup" class="absolute top-4 right-4 text-gray-500 cursor-pointer text-2xl">&times;</label>
                <h2 class="text-xl font-bold mb-4">Tambah Antrian</h2>
                <form action="/queues" method="POST" target="_blank">
                    @csrf
                    <label for="service_name" class="block mb-2 font-semibold text-left">Pilih Layanan Berikut</label>
                    <select name="service_name" id="service_name" class="mb-6 p-2 border rounded w-full">
                        <option value="Konsultasi">Konsultasi</option>
                        <option value="Permintaan Data">Permintaan Data</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <button type="submit" class="bg-[#567AC8] hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">TAMBAH</button>
                </form>
            </div>
        </div>
    </main>

    <script type="module">
        document.addEventListener('DOMContentLoaded', function () {
            // Ensure the checkbox is unchecked on page load
            document.getElementById('popup').checked = false;

            // Toggle popup display based on checkbox state
            document.getElementById('popup').addEventListener('change', function () {
                if (this.checked) {
                    document.getElementById('popup-content').style.display = 'flex';
                } else {
                    document.getElementById('popup-content').style.display = 'none';
                }
            });

            // Ensure popup content is hidden on page load
            document.getElementById('popup-content').style.display = 'none';

            // WebSocket logic
            console.log(window.Echo); // Debugging Echo object
            if (typeof window.Echo !== 'undefined') {
                console.log('Echo is defined, attempting to join channel...');
                let channel = window.Echo.channel('queue-channel');

                channel.listen('QueueCalled', (event) => {
                    console.log('QueueCalled event received:', event);
                    const queueNumber = event.queue_number;
                    const serviceName = event.service_name;

                    document.getElementById('current-queue').innerText = queueNumber;

                    if (serviceName === 'Konsultasi') {
                        document.getElementById('current-konsultasi').innerText = queueNumber;
                    } else if (serviceName === 'Permintaan Data') {
                        document.getElementById('current-permintaandata').innerText = queueNumber;
                    } else if (serviceName === 'Lainnya') {
                        document.getElementById('current-lainnya').innerText = queueNumber;
                    }

                    console.log(`Antrian ${queueNumber} untuk ${serviceName} berhasil dipanggil.`);
                });

                channel.error((error) => {
                    console.error('Error subscribing to channel:', error);
                });

                console.log('Channel:', channel);
            } else {
                console.error('Echo is not defined');
            }
        });
    </script>
</x-layout>
