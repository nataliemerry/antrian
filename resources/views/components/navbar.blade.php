<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-birunavbar text-white p-4  flex justify-between items-center fixed top-0 left-0 w-full z-50">
    <div class="flex items-center">
        <img src="{{ asset('img/logo bps.png') }}" alt="Logo" class="h-10 mr-8">
        <div class="text-center">
            <h1 class="text-base font-bold italic" style="font-family: Arial, sans-serif;">BADAN PUSAT STATISTIK</h1>
            <h1 class="text-base font-bold italic" style="font-family: Arial, sans-serif;">KABUPATEN MAGELANG</h1>
        </div>
        
    </div>
    <div class="flex items-center">
        @guest
            <a href="/login" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="h-6">
                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>
            </a>
        @else
            <div class="relative">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center" aria-label="Logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 icon icon-tabler icon-tabler-logout mr-3">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                            <path d="M9 12h12l-3 -3" />
                            <path d="M18 15l3 -3" />
                        </svg>
                    </button>
                </form>
            </div>
        @endguest
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
