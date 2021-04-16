<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendaftarModel extends Model
{
    public function allDataPendaftar(){
        return DB::table('pendaftaran_beasiswa')->where('status_daftar', 0)->get();
    }
    public function allDataPenerima(){
        return DB::table('pendaftaran_beasiswa')->where('status_daftar', 1)->get();
    }
}
