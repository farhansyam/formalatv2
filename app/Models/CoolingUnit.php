<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoolingUnit extends Model
{
    protected $fillable = ['start','end','tanggal','enginer_list','temuan','rekomendasi','status',
       'id',
        'id_equipment',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'q8',
        'q9',
        'q10',
        'q11',
        'q12',
        'q13',
        'q14',
        'q15',
        'q16',
        'q17',
        'q18',
        'q19',
        'q20',
        'q21',
        'q22',
        'q23',
        'q24',
        'q25',
        'q26',
        'q27',
        'q28',
    ];

    protected $table = "cooling_units";
}
