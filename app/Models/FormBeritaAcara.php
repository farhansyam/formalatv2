<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FormBeritaAcara extends Model
{
    protected $fillable = [
        'customer',
        'no_kontak',
        'alamat',
        'engineer_list',
        'tanggal_survey',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'c6',
        'c7',
        'c8',
        'jenis_survey',
        'jenis_equipment',
        'brand',
        'serial',
        'name_plate',
        'tahun_pembuatan',
        'tahun_install',
        'deskripsi',
        'analisa_awal',
        'tindakan',
        'rekomendasi_teknisi_lapangan',
        'approval_kantor',
        'approval_customer',
        'id_equipment',
    ];

    public $table = "formberitaacara";

    public function listkebutuhan()
    {
        return $this->hasMany(ListKebutuhanBeritaAcara::class, 'id_beritaacara');
    }
}