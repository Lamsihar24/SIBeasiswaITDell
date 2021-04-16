<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BeasiswaModel;

class BeasiswaController extends Controller
{
    public function __construct()
    {
        // $this->GuruModel = new GuruModel;
        $this->middleware('auth');
        $this->BeasiswaModel = new BeasiswaModel();
    }
    public function index(){
        $data = [
                'beasiswa' => $this->BeasiswaModel->allData(),
            ];
            return view('v_home',$data);
    }
}
