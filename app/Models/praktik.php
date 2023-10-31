<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class praktik extends Model
{
    protected $table ="praktik";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'jenis_praktik',
        'notaris_id',
        'delstatus',

    ];

    public function notaris()
    {
        return $this->belongsTo(notaris::class,'notaris_id');
    }

   
}
