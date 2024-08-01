<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request)
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

        $headers = [
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=queues_{$range}.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        ];

        $callback = function() use ($queues) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['No', 'Service Name', 'Nomor Antrian', 'Waktu Antri', 'Waktu Panggil']);

            foreach ($queues as $index => $queue) {
                fputcsv($handle, [
                    $index + 1,
                    $queue->service_name,
                    $queue->queue_number,
                    $queue->created_at,
                    $queue->called_at
                ]);
            }

            fclose($handle);
        };

        return new StreamedResponse($callback, 200, $headers);
    }
}
