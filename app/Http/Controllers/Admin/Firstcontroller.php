<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\routing\Controller;

class Firstcontroller extends Controller
{
    public function showString()
    {
        return'eng alaa mohamed';
    }

    public function getIndex()
    {
        $table = new \stdClass();
        $table-> start = 1;
        $table-> end = 8;
        return view('welcome' , compact('table'));
    }
}
