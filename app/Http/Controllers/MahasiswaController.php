<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function __construct()
    {
        // $this->GuruModel = new GuruModel;
        $this->middleware('auth');
    }
}
