<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetQueue extends Command
{
    protected $signature = 'queue:reset';
    protected $description = 'Reset queues every day';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Hapus semua data terkait antrian di session
        session([
            'last_called_queue' => '---',
            'last_called_service' => null,
            'last_called_konsultasi' => '---',
            'last_called_permintaandata' => '---',
            'last_called_lainnya' => '---',
        ]);

        // Jika Anda menyimpan status antrian di database, hapus atau reset juga data di sini
        // Misalnya, hapus semua catatan antrian
        // \App\Models\Queue::truncate();

        $this->info('Queues have been reset successfully.');
    }
}