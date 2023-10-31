<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function tampilHalamanTabel()
    {


    return view('');
    }




    use AuthorizesRequests, ValidatesRequests;
    

}
