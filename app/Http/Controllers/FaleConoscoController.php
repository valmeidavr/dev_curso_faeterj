<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    public function index(){
        return view('faleconosco');
    }
}
