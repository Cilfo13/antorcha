<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ganar extends Controller
{
    public function añadir(){
        return view('content.pages.pages-ganar-añadir');
    }
}
