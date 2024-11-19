<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authority extends Model
{
    use HasFactory;
    protected $table = 'authority';


    public function user()
    {
        return $this->belongsTo(Akun::class, 'id_user', 'id');
    }
}
