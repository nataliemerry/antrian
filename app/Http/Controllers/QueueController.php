<?php

namespace App\Http\Controllers;
use App\Models\Queue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Events\QueueCalled;

class QueueController extends Controller
{
    public function index(Request $request)
    {
        $range = $request->query('range', 'today');
        $query = Queue::query();

        switch ($range) {
            case 'month':
                $query->whereMonth('created_at', Carbon::now()->month);
                break;
            case 'all':
                // No additional filters for 'all'
                break;
            case 'today':
            default:
                $query->whereDate('created_at', Carbon::today());
                break;
        }

        $queues = $query->get();

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

        // Redirect ke halaman tiket
        return redirect()->route('tiket.show', ['id' => $queue->id])
        ->with('status', 'Berhasil Mengantri');
    }

    public function destroy($id)
    {
        // Temukan antrian berdasarkan ID
        $queue = Queue::find($id);
        $queue->delete();
        return redirect('admin/antrian')->with('status', 'Berhasil Menghapus');
    }

    public function call($id)
    {
        $queue = Queue::find($id);
        $queue->called_at = now();
        $queue->save();

        // Simpan nomor antrian terakhir yang dipanggil dan layanan terkait dalam sesi
        session([
            'last_called_queue' => $queue->queue_number,
            'last_called_service' => $queue->service_name,
            'last_called_konsultasi' => $queue->service_name === 'Konsultasi' ? $queue->queue_number : session('last_called_konsultasi', '---'),
            'last_called_permintaandata' => $queue->service_name === 'Permintaan Data' ? $queue->queue_number : session('last_called_permintaandata', '---'),
            'last_called_lainnya' => $queue->service_name === 'Lainnya' ? $queue->queue_number : session('last_called_lainnya', '---'),
        ]);

        // Panggil event broadcasting
        event(new QueueCalled($queue));

        return redirect()->back()->with('status', 'Antrian berhasil dipanggil');
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
        $today = Carbon::today()->toDateString();

        $lastQueue = Queue::where('service_code', $serviceCode)
            ->whereDate('created_at', $today)
            ->latest('created_at')
            ->first();

        if ($lastQueue) {
            $lastNumber = (int)str_replace($serviceCode . '-', '', $lastQueue->queue_number);
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }
        
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