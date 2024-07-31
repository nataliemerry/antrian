@props(['title' => 'Admin Dashboard'])

<x-layout :title="$title" bodyClass="bg-gray-200">
    <div class="flex h-screen flex-col">
        <!-- Navbar -->
        <x-navbar></x-navbar>

        <div class="flex flex-1">
            <!-- Sidebar -->
            <x-sidebar></x-sidebar>

            <!-- Main Content -->
            <div class="flex-1 p-10">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layout>
