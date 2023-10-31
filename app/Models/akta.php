<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akta extends Model
{
    protected $table ="akta";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'sifat_akta',
        'delstatus',
        'lapnotaris_id'
    ];

    public function lapnotaris()
    {
        return $this->hasMany(lapnotaris::class,'lapnotaris_id');
    }
}
