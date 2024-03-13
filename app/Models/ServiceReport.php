<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ServiceReport extends Model
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
        'defect_level',
        'defect_type',
        'jenis_survey',
        'jenis_equipment',
        'brand',
        'serial',
        'name_plate',
        'tahun_pembuatan',
        'tahun_install',
        'deskripsi',
        'tindakan',
        'rekomendasi_teknisi_lapangan',
        'approval_kantor',
        'approval_engineer',
        'approval_customer',
    ];

    public $table = "service_report";

    public function listkebutuhan()
    {
        return $this->hasMany(ListKebutuhanBeritaAcara::class, 'id_beritaacara');
    }
}