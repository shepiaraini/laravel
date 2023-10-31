<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protes extends Model
{
    protected $table ="protes";
   
    protected $primarykey ="id";
    protected $attributes = [
        'status' => 1 ];
    protected $fillable =[
        'id', 
        'wilayah_id',
        'notaris_id',
        'nomor',
        'daftar_srt',
        'tgl_no',
        'tanggal',
        'status',
        'delstatus',

    ];

    public function wilayah()
    {
        return $this->belongsTo(wilayah::class,'wilayah_id');
    }

    public function notaris()
    {
        return $this->belongsTo(notaris::class,'notaris_id');
    }
}
