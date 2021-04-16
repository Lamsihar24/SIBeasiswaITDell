<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;

class GuruController extends Controller
{
    public function __construct(){
        $this->GuruModel = new GuruModel();
        $this->middleware('auth');
    }
    public function index(){
        $data = [
            'guru' => $this->GuruModel->allData(),
        ];

        return view('v_guru', $data);
    }
}
