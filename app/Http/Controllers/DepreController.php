<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepreController extends Controller
{
    public function index() 
    {
        return view ('depre');
    }
}
