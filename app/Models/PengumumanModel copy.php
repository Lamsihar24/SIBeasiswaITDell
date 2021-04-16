<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengumumanModel extends Model
{

    public function allData(){
        return DB::table('pengumuman')->get();
    }

    public function detailData($id_peng){
        return DB::table('pengumuman')->where('id_peng', $id_peng)->first();
    }

    public function addData($data){
        return DB::table('pengumuman')->insert($data);
    }
    public function editData($id_peng,$data){
        return DB::table('pengumuman')
        ->where('id_peng',$id_peng)
        ->update($data);
    }
    public function deleteData($id_peng){
        return DB::table('pengumuman')
        ->where('id_peng',$id_peng)
        ->delete();
    }
}
