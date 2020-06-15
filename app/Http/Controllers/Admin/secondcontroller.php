<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class secondcontroller extends Controller
{
    public function __Construct()
    {
        $this -> middleware('auth')->except('showString2');
    }
    public function showString()
    {
        return 'hello eng alaa';
    }
    public function showString1()
    {
        return 'hello eng alaa => 1 ';
    }
    public function showString2()
    {
        return 'hello eng alaa => 2';
    }
    public function showString3()
    {
        return 'hello eng alaa => 3';
    }
}
