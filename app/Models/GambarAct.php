<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarAct extends Model
{
    use HasFactory;
    protected $table = 'gambargeneral';
    public $fillable = ['id_act', 'id_equipement', 'keterangan', 'gambar', 'info', 'type'];
}
