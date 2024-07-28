<?php

namespace App\Http\Controllers;
use App\Models\Queue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class QueueController extends Controller
{
    public function index()
    {
        $queues = Queue::all();
        return view('antrian-admin', compact('queues'));
    }

    public function konsultasi()
    {
        $today = Carbon::today()->toDateString();
        $queues = Queue::where('service_name', 'Konsultasi')
                       ->whereDate('created_at', $today)
                       ->get();

        return view('konsultasi-admin', compact('queues'));
    }

    public function permintaandata()
    {
        $today = Carbon::today()->toDateString();
        $queues = Queue::where('service_name', 'Permintaan Data')
                       ->whereDate('created_at', $today)
                       ->get();

        return view('permintaandata-admin', compact('queues'));
    }

    public function lainnya()
    {
        $today = Carbon::today()->toDateString();
        $queues = Queue::where('service_name', 'Lainnya')
                       ->whereDate('created_at', $today)
                       ->get();

        return view('lainnya-admin', compact('queues'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'service_name' => 'required|string|in:Konsultasi,Permintaan Data,Lainnya',
        ]);

        // Dapatkan layanan dari request
        $serviceName = $request->input('service_name');
        $serviceCode = $this->getServiceCode($serviceName);

        // Generate nomor antrian
        $queueNumber = $this->generateQueueNumber($serviceCode);

        // Simpan antrian baru
        $queue = Queue::create([
            'service_name' => $serviceName,
            'service_code' => $serviceCode,
            'queue_number' => $queueNumber,
        ]);

        return redirect('beranda')->with('status', 'Berhasil Mengantri');
    }

    public function destroy($id)
    {
        // Temukan antrian berdasarkan ID
        $queue = Queue::find($id);
        $queue->delete();
        return redirect('admin/antrian')->with('status', 'Berhasil Mengantri');
    }

    public function call($id)
{
    $queue = Queue::findOrFail($id);
    $queue->called_at = now(); // Set waktu saat ini
    $queue->save();

    return response()->json(['message' => 'Antrian telah dipanggil']);
}

    private function getServiceCode($serviceName)
    {
        switch ($serviceName) {
            case 'Konsultasi':
                return 'A';
            case 'Permintaan Data':
                return 'B';
            case 'Lainnya':
                return 'C';
            default:
                throw new \Exception('Invalid service name');
        }
    }

    private function generateQueueNumber($serviceCode)
    {
        $today = Carbon::today()->toDateString(); // Mendapatkan tanggal hari ini tanpa waktu
        Log::info("Today's date: " . $today);

        $lastQueue = Queue::where('service_code', $serviceCode)
            ->whereDate('created_at', $today)
            ->latest('created_at')
            ->first();

        Log::info("Last Queue: " . ($lastQueue ? $lastQueue->queue_number : 'No queues found'));

        if ($lastQueue) {
            $lastNumber = (int)str_replace($serviceCode . '-', '', $lastQueue->queue_number);
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }

        Log::info("Next Queue Number: " . $nextNumber);
        
        return $serviceCode . '-' . $nextNumber;
    }
    public function dashboard()
    {
        $today = Carbon::today()->toDateString();

        $konsultasiCount = Queue::where('service_name', 'Konsultasi')
                                ->whereDate('created_at', $today)
                                ->count();

        $permintaanDataCount = Queue::where('service_name', 'Permintaan Data')
                                    ->whereDate('created_at', $today)
                                    ->count();

        $lainnyaCount = Queue::where('service_name', 'Lainnya')
                             ->whereDate('created_at', $today)
                             ->count();

        return view('dashboard-admin', compact('konsultasiCount', 'permintaanDataCount', 'lainnyaCount'));
    }
}