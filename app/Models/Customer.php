<?php

namespace App\Models;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;


    public function equipment()
    {
        return Equipment::where('customer', $this->nama);
    }

    public function history()
    {
        return $this->hasMany(History::class, 'customer', 'nama');
    }

    public function itemschedules()
    {
        return $this->hasMany(ItemSchedule::class, 'customer', 'nama');
    }

    public function schedulesthismonth()
    {
        return $this->itemschedules()->whereMonth('schedule', now()->month);
    }

    public function schedulesthelastmonth()
    {
        return $this->itemschedules()->whereMonth('schedule', now()->subMonth()->month);
    }

    public function schedulesthetwomonthsago()
    {
        return $this->itemschedules()->whereMonth('schedule', now()->subMonths(2)->month);
    }
}
