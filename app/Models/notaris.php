<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notaris extends Model
{
    protected $table ="notaris";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'nama',
        'wilayah_id',
        'no_telepon',
        'email',
        'no_sk',
        'praktik_id',
        'protes_id',
        'file',
        'pengajuan_id',
        'delstatus',

    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class,'wilayah_id');
    }
   
    public function praktik()
    {
        return $this->belongsTo(praktik::class,'praktik_id');
    }

    public function protes()
    {
        return $this->belongsTo(protes::class,'protes_id');
    }

    public function pengajuan()
    {
        return $this->belongsTo(pengajuan::class,'pengajuan_id');
    }
}
