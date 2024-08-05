<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TicketController extends Controller
{
    public function show($id)
{
    $queue = Queue::find($id);

    if (!$queue) {
        return redirect('/')->with('status', 'Antrian tidak ditemukan.');
    }

    return view('tiket', [
        'queue' => $queue,
        'created_at' => $queue->created_at
    ]);
}

<<<<<<< HEAD
}
=======
}
>>>>>>> a70593dc0efbbfa1295ccc729705404a5d677920
