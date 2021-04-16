<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BeasiswaModel extends Model
{
    public function allData(){
        return DB::table('beasiswa')->get();
    }
    public function addData($data){
        return DB::table('pendaftaran_beasiswa')->insert($data);
    }
    public function detailDataBeasiswa($id_beasiswa){
        return DB::table('beasiswa')->where('id_beasiswa', $id_beasiswa)->first();
    }

    public function addDataBeasiswa($data){
        return DB::table('beasiswa')->insert($data);
    }
    public function editDataBeasiswa($id_beasiswa,$data){
        return DB::table('beasiswa')
        ->where('id_beasiswa',$id_beasiswa)
        ->update($data);
    }
    public function deleteDataBeasiswa($id_beasiswa){
        return DB::table('beasiswa')
        ->where('id_beasiswa',$id_beasiswa)
        ->delete();
    }

}
