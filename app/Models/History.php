<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'history';
    public $fillable = ['id', 'type', 'id_act', 'id_equipment', 'id_user', 'customer', 'approval', 'site', 'type2'];


    public function equipment()
    {
        return Equipment::where('id', $this->id_equipment);
    }
    public function equipment1()
    {
        return Equipment::where('id', $this->id_equipment)->first();
    }
}
