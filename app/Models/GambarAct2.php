<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarAct2 extends Model
{
    use HasFactory;
    protected $table = 'gambargeneral2';
    public $fillable = ['id_act','id_equipement','keterangan','gambar','info'];
}
