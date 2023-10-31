<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    protected $table ="pengajuan";
    protected $primarykey ="id";
    protected $fillable =[
        'id', 
        'notaris_id',
        'waktu_cuti',
        'notpengganti_id',
        'pelantikkan_id',
        'file',
        'status',
        'delstatus',

    ];

    public function notaris()
    {
        return $this->belongsTo(notaris::class,'notaris_id');
    }

    public function notpengganti()
    {
        return $this->belongsTo(notpengganti::class,'notpengganti_id');
    }

    public function pelantikkan()
    {
        return $this->belongsTo(pelantikkan::class,'pelantikkan_id');
    }
}
