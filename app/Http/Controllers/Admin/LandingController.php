<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingController extends Controller
{
    public function __construct()
    {
        $this-> middleware('auth');
    }

    public function getIndex()
    {
        return view('landing');
    }
}
