<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notpengganti extends Model
{
    protected $table ="notpengganti";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'nama',
        'daftar_riwayat',
        'ktp',
        'skck',
        'ijazah',
        'srt_sehat',
        'srt_kerja',
        'foto',
        'pengajuan_id',
        'pelantikkan_id',
        'delstatus',



    ];

    public function pengajuan()
    {
        return $this->hasMany(pengajuan::class,'pengajuan_id');
    }

    public function pelantikkan()
    {
        return $this->hasMany(pelantikkan::class,'pelantikkan_id');
    }
}
