<x-layout title="Admin Antrian">
    

    <div class="bg-white p-6 rounded-lg shadow mt-20 ml-64">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Layanan Konsultasi</h1>
            
            <div class="flex items-center space-x-4">
                <button class="bg-orange hover:bg-amber-500 text-white px-4 py-2 rounded-md flex items-center">
                    Unduh Data
                    <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" y1="15" x2="12" y2="3" />
                    </svg>
                </button>
                <button class="bg-error hover:bg-red-500 text-white px-4 py-2 rounded-md flex items-center">
                    Reset Data
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2 icon icon-tabler icons-tabler-outline icon-tabler-refresh">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" />
                    </svg>
                </button>
            </div>
        </div>

        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-birubps text-white">
                    <th class="w-1/6 text-center py-3 px-4 uppercase font-semibold text-sm">Nomor Antrian</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Antri</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Panggil</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-gray-700 p-0">
                    <td class="w-1/6 text-center py-3 px-4">A-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-10 py-1 rounded-md text-base">Panggil</button>
                    </td>
                </tr>
                <tr class="text-gray-700 p-0">
                    <td class="w-1/6 text-center py-3 px-4">A-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-10 py-1 rounded-md text-base">Panggil</button>
                    </td>
                </tr>
                <tr class="text-gray-700">
                    <td class="w-1/6 text-center py-3 px-4">A-1</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">2024-07-17 08:00:00</td>
                    <td class="w-1/5 text-center py-3 px-4">
                        <button class="bg-hijau hover:bg-lime-500 text-white px-10 py-1 rounded-md text-base">Panggil</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>
