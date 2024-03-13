<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $fillable = [
        'id_sumber',
        'type',
        'gambar',
    ];

    public $timestamps = false;
}
