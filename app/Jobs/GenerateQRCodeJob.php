<?php

namespace App\Jobs;

use App\Models\Equipment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateQRCodeJob implements ShouldQueue
{
    use Queueable, InteractsWithQueue, SerializesModels;

    protected $equipment;

    public function __construct(Equipment $equipment)
    {
        $this->equipment = $equipment;
    }

    public function handle()
    {
        $route = route('equipment.show', ['equipment' => $this->equipment->id]);
        $qrCode = QrCode::format('png')->size(200)->generate($route);

        $namaGambar = 'qrcode_' . $this->equipment->id . '.png';
        $path = public_path($namaGambar);

        file_put_contents($path, $qrCode);

        $this->equipment->qrcode = $namaGambar;
        $this->equipment->save();
    }
}
