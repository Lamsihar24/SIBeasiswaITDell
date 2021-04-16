<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->GuruModel = new GuruModel;
        $this->middleware('auth');
    }
    public function index(){
        // $data = [
        //     'guru' => $this->GuruModel->allData(),
        // ];

        return view('v_admin');
    }
}

