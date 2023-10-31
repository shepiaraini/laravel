<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelantikkan extends Model
{
    protected $table ="pelantikkan";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'notpengganti_id',
        'wilayah_id',
        'pengajuan_id',
        'tanggal_pelantikkan',
        'created_at',
        'delstatus',
    ];

    public function wilayah()
    {
        return $this->belongsTo(wilayah::class,'wilayah_id');
    }

    public function notpengganti()
    {
        return $this->belongsTo(notpengganti::class,'notpengganti_id');
    }

    public function pengajuan()
    {
        return $this->belongsTo(pengajuan::class,'pengajuan_id');
    }
}
