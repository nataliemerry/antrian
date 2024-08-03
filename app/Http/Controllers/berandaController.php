<?php

namespace App\Http\Controllers;
use App\Models\LastCalledQueue;

use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function showBeranda()
    {
        $last_called_konsultasi = LastCalledQueue::where('service_name', 'Konsultasi')->first();
        $last_called_permintaandata = LastCalledQueue::where('service_name', 'Permintaan Data')->first();
        $last_called_lainnya = LastCalledQueue::where('service_name', 'Lainnya')->first();
        $current_queue = LastCalledQueue::where('is_current', true)->first();

        return view('beranda', [
            'last_called_konsultasi' => $last_called_konsultasi ? $last_called_konsultasi->queue_number : '---',
            'last_called_permintaandata' => $last_called_permintaandata ? $last_called_permintaandata->queue_number : '---',
            'last_called_lainnya' => $last_called_lainnya ? $last_called_lainnya->queue_number : '---',
            'current_queue' => $current_queue ? $current_queue->queue_number : '---',
        ]);
    }

}
