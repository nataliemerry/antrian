<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Antrian PST</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        #popup:checked ~ .popup-content {
            display: flex;
        }
    </style>
</head>
<body class="overflow-hidden">
    <header class="bg-birunavbar p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="/img/logo%20bps.png" alt="BPS Logo" class="h-12 mr-4">
                <span class="text-xl font-bold text-white" style="font-family: Arial, sans-serif; font-style: italic;">BPS KABUPATEN MAGELANG</span>
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="h-8">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </div>
        </div>
    </header>

    <main class="bg-cover bg-center h-screen" style="background-image: url('img/bg bps.png'); font-family: 'Poppins', sans-serif;">
        <div class="container mx-auto text-center py-8">
            <h1 class="text-xl font-semibold text-white">SELAMAT DATANG DI</h1>
            <h2 class="text-3xl font-semibold mb-12 text-white">PELAYANAN STATISTIK TERPADU</h2>
            
            <div class="bg-white rounded-lg inline-block mb-10 w-full max-w-xs">
                <div class="bg-[#D3D3D3] rounded-lg p-2 shadow-lg">
                    <h3 class="text-base font-semibold">ANTRIAN SAAT INI</h3>
                </div>
                <div class="p-4">
                    <div id="current-queue" class="text-4xl font-bold text-black">A-1</div>
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
                <form action="/queues" method="POST">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Toastr Notifications -->
    <script>
        @if (session('status'))
            toastr.options = {
                "positionClass": "toast-bottom-right"
            };
            toastr.success("{{ session('status') }}");
        @endif

        console.log(window.Echo); // Debugging Echo object
        if (typeof window.Echo !== 'undefined') {
            window.Echo.channel('queue-channel')
                .listen('QueueCalled', (event) => {
                    console.log('QueueCalled event received:', event);
                    document.getElementById('current-queue').innerText = `Antrian Saat Ini: ${event.queue_number}`;
                });
        } else {
            console.error('Echo is not defined');
        }
    </script>
</body>
</html>
