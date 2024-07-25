<!-- Sidebar -->
<div class="bg-birunavbar text-white w-64 pt-20 fixed top-0 left-0 h-full z-40">
    <nav class="mt-0">
        <a href="/admin/dashboard" class="flex items-center px-4 py-4 {{ Request::is('admin/dashboard') ? 'bg-birubps' : '' }}">
            <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none z-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home opacity-80"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
            </div>
            <span class="ml-2 text-lg">Dashboard</span>
        </a>
        <a href="/admin/antrian" class="flex items-center px-4 py-4 {{ Request::is('admin/antrian') ? 'bg-birubps' : '' }}">
            <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none z-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users-group opacity-80"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" /><path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M17 10h2a2 2 0 0 1 2 2v1" /><path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M3 13v-1a2 2 0 0 1 2 -2h2" /></svg>
            </div>
            <span class="ml-2 text-lg">Antrian</span>
        </a>
        <a href="/admin/konsultasi" class="flex items-center px-4 py-4 {{ Request::is('admin/konsultasi') ? 'bg-birubps' : '' }}">
            <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none z-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard opacity-80"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
            </div>
            <span class="ml-2 text-lg">Konsultasi</span>
        </a>
        <a href="/admin/permintaandata" class="flex items-center px-4 py-4 {{ Request::is('admin/permintaandata') ? 'bg-birubps' : '' }}">
            <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none z-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-search opacity-80"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5" /><path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0" /><path d="M18.5 19.5l2.5 2.5" /></svg>
            </div>
            <span class="ml-2 text-lg">Permintaan Data</span>
        </a>
        <a href="/admin/lainnya" class="flex items-center px-4 py-4 {{ Request::is('admin/lainnya') ? 'bg-birubps' : '' }}">
            <div className="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none z-10">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circles opacity-80"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M6.5 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M17.5 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /></svg>
            </div>
            <span class="ml-2 text-lg">Lainnya</span>
        </a>
        
    </nav>
</div>