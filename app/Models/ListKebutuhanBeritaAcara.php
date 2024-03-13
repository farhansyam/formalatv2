<?php

namespace App\Models;
// app/ListKebutuhanBeritaAcara.php

use Illuminate\Database\Eloquent\Model;

class ListKebutuhanBeritaAcara extends Model
{
    protected $fillable = [
        'deskripsilist',
        'modelpart',
        'qty',
        'keterangan',
        'id_beritaacara',
        'type',
    ];
    public $table = "listkebutuhanberitaacara";


    public function beritaacara()
    {
        return $this->belongsTo(FormBeritaAcara::class, 'id_beritaacara');
    }
}