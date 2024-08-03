<x-layout-admin :title="'Dashboard Admin'">
    <div class="bg-white p-6 rounded-lg shadow mt-20 ml-64">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Daftar Antrian</h1>
            
            <div class="flex items-center space-x-4">
                <!-- Form untuk memilih rentang waktu -->
                <form action="{{ route('queues.index') }}" method="GET" class="flex items-center space-x-2">
                    <select name="range" id="range" class="bg-gray-100 border border-gray-300 rounded-md px-4 py-2" onchange="this.form.submit()">
                        <option value="today" {{ request('range', 'today') == 'today' ? 'selected' : '' }}>Hari Ini</option>
                        <option value="month" {{ request('range', 'today') == 'month' ? 'selected' : '' }}>Bulan Ini</option>
                        <option value="all" {{ request('range', 'today') == 'all' ? 'selected' : '' }}>Semua</option>
                    </select>
                </form>                
    
                <!-- Tombol unduh data -->
                <a href="{{ route('queues.download', ['range' => request('range')]) }}" class=" bg-blue-500 hover:bg-blue-600  text-white px-4 py-2 rounded-md flex items-center">
                    Unduh Data
                    <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" y1="15" x2="12" y2="3" />
                    </svg>
                </a>

                <form action="{{ route('queue.reset') }}" method="POST">
                    @csrf
                    <button class="bg-orange hover:bg-amber-500 text-white px-4 py-2 rounded-md flex items-center">
                        Reset
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-refresh ml-2">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4" />
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4" /></svg>
                    </button>
                </form>
            </div>

        </div>
        
        <table class="min-w-full bg-white">
            <thead>
                <tr class="w-full bg-birubps text-white">
                    <th class="w-1/12 text-center py-3 px-4 uppercase font-semibold text-sm">No</th>
                    <th class="w-1/6 text-center py-3 px-4 uppercase font-semibold text-sm">Layanan</th>
                    <th class="w-1/6 text-center py-3 px-4 uppercase font-semibold text-sm">Nomor Antrian</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Antri</th>
                    <th class="w-1/5 text-center py-3 px-4 uppercase font-semibold text-sm">Waktu Panggil</th>
                    <th class="w-1/4 text-center py-3 px-4 uppercase font-semibold text-sm">ACTION</th> <!-- Ubah di sini -->
                </tr>
            </thead>
            <tbody>
                @foreach ($queues as $index => $queue)
                    <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-100' }} text-gray-700 p-0">
                        <td class="w-1/12 text-center py-2 px-4">{{ $loop->iteration }}</td>
                        <td class="w-1/6 text-center py-3 px-4">{{ $queue->service_name }}</td>
                        <td class="w-1/6 text-center py-3 px-4">{{ $queue->queue_number }}</td>
                        <td class="w-1/5 text-center py-3 px-4">{{ $queue->created_at }}</td>
                        <td class="w-1/5 text-center py-3 px-4">{{ $queue->called_at }}</td>
                        <td class="w-1/4 text-center py-3 px-4">
                            <div class="flex justify-center items-center space-x-2">
                                <a href="{{ route('tiket.show', ['id' => $queue->id]) }}" class="bg-hijau hover:bg-lime-500 text-white font-semibold text-sm rounded py-2 px-4">
                                    Lihat Tiket
                                </a>
                                <form action="{{ url('/queues/' . $queue->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus antrian ini?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-error hover:bg-red-600 text-white font-bold text-sm rounded py-2 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M4 7l16 0" />
                                            <path d="M10 11l0 6" />
                                            <path d="M14 11l0 6" />
                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout-admin>
