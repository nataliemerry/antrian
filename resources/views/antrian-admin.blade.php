<x-layout title="Admin Antrian">
    

    <div class="bg-white p-6 rounded-lg shadow mt-20 ml-64">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Daftar Antrian</h1>
            <button class="bg-orange hover:bg-amber-500 text-white px-4 py-2 rounded-md flex items-center">
                Unduh Data
                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <polyline points="7 10 12 15 17 10" />
                    <line x1="12" y1="15" x2="12" y2="3" />
                </svg>
            </button>
        </div>

        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-birubps text-white">
                    <th class="w-1/12 text-center py-3 px-4 uppercase font-semibold text-sm ">ID</th>
                    <th class="w-1/6 text-center py-3 px-4 uppercase font-semibold text-sm">Layanan</th>
                    <th class="w-1/6 text-center py-3 px-4 uppercase font-semibold text-sm">Nomor Antrian</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Antri</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Panggil</th>
                    <th class="w-1/4 text-center py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-gray-700 p-0">
                    <td class="w-1/12 text-center py-2 px-4">1</td>
                    <td class="w-1/6 text-center py-3 px-4">Konsultasi</td>
                    <td class="w-1/6 text-center py-3 px-4">A-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700 p-0">
                    <td class="w-1/12 text-center py-3 px-4">2</td>
                    <td class="w-1/6 text-center py-3 px-4">Permintaan Data</td>
                    <td class="w-1/6 text-center py-3 px-4">A-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Konsultasi</td>
                    <td class="w-1/6 text-center py-3 px-4">A-2</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Permintaan Data</td>
                    <td class="w-1/6 text-center py-3 px-4">B-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Permintaan Data</td>
                    <td class="w-1/6 text-center py-3 px-4">B-2</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Konsultasi</td>
                    <td class="w-1/6 text-center py-3 px-4">A-3</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Konsultasi</td>
                    <td class="w-1/6 text-center py-3 px-4">A-4</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Lainnya</td>
                    <td class="w-1/6 text-center py-3 px-4">C-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/12 text-center py-3 px-4">3</td>
                    <td class="w-1/6 text-center py-3 px-4">Lainnya</td>
                    <td class="w-1/6 text-center py-3 px-4">C-2</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/4 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-4 py-2 rounded-md text-sm">Lihat Antrian</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
