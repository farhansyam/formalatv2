<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemSchedule extends Model
{
    use HasFactory;
    protected $table = 'list_item_schedule';
    public $fillable = ['id_schedule', 'id_equipement','status','schedule','id_eq','customer'];
}
