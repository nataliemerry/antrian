<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-birunavbar text-white p-2  flex justify-between items-center fixed top-0 left-0 w-full z-50">
    <div class="flex items-center">
        <img src="{{ asset('img/logo bps.png') }}" alt="Logo" class="h-10 mr-8">
        <div class="text-center">
            <a href="/" 
            >
                <h1 class="text-base font-bold italic" style="font-family: Arial, sans-serif;">BADAN PUSAT STATISTIK</h1>
                <h1 class="text-base font-bold italic" style="font-family: Arial, sans-serif;">KABUPATEN MAGELANG</h1>
            </a>
        </div>
        
    </div>
    <div class="flex items-center">
            <a href="/admin/dashboard" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="h-6">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </a>
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
            </svg>
            <div class="relative">
                <button id="dropdownButton" class="mx-4 text-white focus:outline-none">Admin</button>
                <div id="dropdownMenu" class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded shadow-lg hidden">
                    <form action="/logout" method="post" class="block px-4 py-2 text-sm hover:bg-gray-200">
                    @csrf 
                        <button type="submit">
                            Logout
                        </button>
                    </form>
                </div>
            </div> --}}
    </div>
</nav>

{{-- <script>
    document.getElementById('dropdownButton').addEventListener('click', function() {
        const menu = document.getElementById('dropdownMenu');
        menu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const button = document.getElementById('dropdownButton');
        const menu = document.getElementById('dropdownMenu');
        if (button && menu && !button.contains(event.target) && !menu.contains(event.target)) {
            menu.classList.add('hidden');
        }
    });
</script> --}}
