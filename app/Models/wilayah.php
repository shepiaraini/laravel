<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wilayah extends Model
{
    protected $table ="wilayah";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'kecamatan',
        'kabupaten',
        'provinsi',
        'notaris_id',
        'notpengganti_id',
        'protes_id',
        'lapnotaris_id',
        'pelantikkan_id',
        'delstatus',

    ];
     
    public function notaris()
    {
        return $this->hasMany(notaris::class,'notaris_id');
    }

    public function protes()
    {
        return $this->hasMany(wasiat::class,'protes_id');
    }

    public function lapnotaris()
    {
        return $this->hasMany(lapnotaris::class,'lapnotaris_id');
    }

    public function pelantikkan()
    {
        return $this->hasMany(pelantikkan::class,'pelantikkan_id');
    }
   
}
