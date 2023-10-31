<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapnotaris extends Model
{
    protected $table ="lapnotaris";
   
    protected $primarykey ="id";
    protected $attributes = [
        'status' => 1 ];
    protected $fillable =[
        'id', 
        'wilayah_id',
        'notaris_id',
        'no_urut',
        'no_bulanan',
        'akta_id',
        'namapenghadap',
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

    public function akta()
    {
        return $this->belongsTo(akta::class,'akta_id');
    }
}
