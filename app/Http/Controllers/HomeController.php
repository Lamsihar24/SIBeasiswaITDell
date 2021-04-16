<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuruModel;
use App\Models\PengumumanModel;
use App\Models\PendaftarModel;
use App\Models\BeasiswaModel;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->GuruModel = new GuruModel;
        $this->middleware('auth');
        $this->PengumumanModel = new PengumumanModel();
        $this->BeasiswaModel = new BeasiswaModel();
        $this->PendaftarModel = new PendaftarModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
        // $data = [
        //     'guru' => $this->GuruModel->allData(),
        // ];
        
        if (auth()->user()->level == 1) {
            if($request->has('cari')){
                $data =[ 
                    'beasiswa' => DB::table('beasiswa')->where('nama_beasiswa','like',"%".$request->cari."%")->get(),
                    'pengumuman' => DB::table('pengumuman')->where('judul_peng','like',"%".$request->cari."%")->get(),
            ];
            }
            else{
                $data = [
                'pengumuman' => $this->PengumumanModel->allData(),
                'beasiswa' => $this->BeasiswaModel->allData(),
            ];
        }
            return view('v_admin',$data);
        }
        if (auth()->user()->level == 2) {

            if($request->has('cari')){
                $data =[ 
                    'beasiswa' => DB::table('beasiswa')->where('nama_beasiswa','like',"%".$request->cari."%")->get(),
                    'pengumuman' => $this->PengumumanModel->allData(),
            ];
            }
            else{
                $data = [
                'pengumuman' => $this->PengumumanModel->allData(),
                'beasiswa' => $this->BeasiswaModel->allData(),
            ];
            }
            
            return view('v_home',$data);

        }
        if (auth()->user()->level == 3) {
            return view('v_keuangan');
        }
        
    }

    public function detailPengumuman($id_peng){
        
        
        $data = [
                'pengumuman' => $this->PengumumanModel->detailData($id_peng),
            ];
            return view('v_detailpengumuman',$data);
    }

    public function addPengumuman(){
        return view('v_addpengumuman');
    }

    public function insertPengumuman(){
        Request()->validate([
            'judul_peng' => 'required|max:255',
            'time_peng' => 'required',
            'isi_peng' => 'required',
        ],[
            'judul_peng.required' => 'JUDUL WAJIB DI ISI!!!',
        ],[
            'time_peng.required' => 'TIME WAJIB DI ISI!!!',
        ],[
            'isi_peng.required' => 'Keterangan WAJIB DI ISI!!!',
        ]);

        $data = [
            'judul_peng' => Request()->judul_peng,
            'time_peng' => Request()->time_peng,
            'isi_peng' => Request()->isi_peng,
            'info_peng' => Request()->info_peng
        ];

        $this->PengumumanModel->addData($data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Simpan');
    }
    public function editPengumuman($id_peng){
        // if ($this->PengumumanModel->detailData($id_peng)) {
        //     abort(404);
        // }
        $data = [
                'pengumuman' => $this->PengumumanModel->detailData($id_peng),
            ];
        return view('v_editpengumuman', $data);
    }

    public function deletePengumuman($id_peng){
        $this->PengumumanModel->deleteData($id_peng);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }

    public function updatePengumuman($id_peng){
        Request()->validate([
            'judul_peng' => 'required|max:255',
            'time_peng' => 'required',
            'isi_peng' => 'required',
        ],[
            'judul_peng.required' => 'JUDUL WAJIB DI ISI!!!',
        ],[
            'time_peng.required' => 'TIME WAJIB DI ISI!!!',
        ],[
            'isi_peng.required' => 'Keterangan WAJIB DI ISI!!!',
        ]);

        $data = [
            'judul_peng' => Request()->judul_peng,
            'time_peng' => Request()->time_peng,
            'isi_peng' => Request()->isi_peng,
            'info_peng' => Request()->info_peng
        ];

        $this->PengumumanModel->editData($id_peng,$data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Update');
    }

    public function detailBeasiswa($id_beasiswa){
        
        
        $data = [
                'beasiswa' => $this->BeasiswaModel->detailDataBeasiswa($id_beasiswa),
            ];
            return view('v_detailBeasiswaMahasiswa',$data);
    }
    public function daftarBeasiswa($id_beasiswa){
        $data = [
                'beasiswa' => $this->BeasiswaModel->detailDataBeasiswa($id_beasiswa),
            ];
        return view('v_daftarBeasiswa',$data);
    }
    public function deleteBeasiswa($id_beasiswa){
        $this->BeasiswaModel->deleteDataBeasiswa($id_beasiswa);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Delete');
    }

    public function insertDaftarBeasiswa(){

        Request()->validate([
            'berkas' => 'mimes:docx,doc,pdf,zip',
        ]);

        $file = Request()->berkas;
        $fileName = Request()->nim_mahasiswa . '.' . $file->extension();
        $file->move(public_path('berkasfile'), $fileName);


        $data = [
            'id_beasiswadaftar' => Request()->id_beasiswadaftar,
            'id_mahasiswa' => Request()->id_mahasiswa,
            'nama_bea' => Request()->nama_bea,
            'nim_mahasiswa' => Request()->nim_mahasiswa,
            'nama_mahasiswa' => Request()->nama_mahasiswa,
            'tgl_lahir' => Request()->tgl_lahir,
            'kota_lahir' => Request()->kota_lahir,
            'jk' => Request()->jk,
            'agama' => Request()->agama,
            'gd' => Request()->gd,
            'kp' => Request()->kp,
            'email' => Request()->email,
            'nohp' => Request()->nohp,
            'saudara' => Request()->saudara,
            'nama_ayah' => Request()->nama_ayah,
            'nama_ibu' => Request()->nama_ibu,
            'alamat_ortu' => Request()->alamat_ortu,
            'pekerjaan_ibu' => Request()->pekerjaan_ibu,
            'pekerjaan_ayah' => Request()->pekerjaan_ayah,
            'penghasilan_ortu' => Request()->penghasilan_ortu,
            'no_ayah' => Request()->no_ayah,
            'no_ibu' => Request()->no_ibu,
            'jlh_tanggungan' => Request()->jlh_tanggungan,
            'berkas' => Request()->berkas,
        ];

        $this->BeasiswaModel->addData($data);
        return redirect()->route('home')->with('pesan','Berhasil Daftar Beasiswa');
    }

    public function searchBeasiswa(Request $request){
        $cari = $request->get('cari');
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$data = DB::table('beasiswa')->where('nama_beasiswa','like',"%".$cari."%")->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('v_home',['beasiswa' => $data]);
    }

    public function informasibeasiswa(Request $request){
        if($request->has('cari')){
                $data =[ 
                    'beasiswa' => DB::table('beasiswa')->where('nama_beasiswa','like',"%".$request->cari."%")->get(),
                    'pengumuman' => DB::table('pengumuman')->where('judul_peng','like',"%".$request->cari."%")->get(),
            ];
            }
            else{
                $data = [
                'pengumuman' => $this->PengumumanModel->allData(),
                'beasiswa' => $this->BeasiswaModel->allData(),
            ];
        }
        return view('v_informasibeasiswa',$data);
    }

    public function datamahasiswapendaftar(){
        $data = [
                'pendaftar' => $this->PendaftarModel->allDataPendaftar(),
                
            ];
        return view('v_datamahasiswapendaftar',$data);
    }

    public function datamahasiswapenerima(){
        $data = [
                'pendaftar' => $this->PendaftarModel->allDataPenerima(),
                
            ];
        return view('v_datamahasiswapenerima',$data);
    }

    public function keuangankemahasiswaan(){
        return view('v_keuangankemahasiswaan');
    }
    public function rekomendasi(){
        return view('v_rekomendasi');
    }


    public function ubahinformasibeasiswa($id_beasiswa){
        $data = [
                'beasiswa' => $this->BeasiswaModel->detailDataBeasiswa($id_beasiswa),
            ];
        return view('v_ubahinformasibeasiswa',$data);
    }
    public function updateBeasiswa($id_beasiswa){
        $data = [
            'nama_beasiswa' => Request()->nama_beasiswa,
            'jlh_daftar' => Request()->jlh_daftar,
            'deadline' => Request()->deadline,
            'deskripsi_beasiswa' => Request()->deskripsi_beasiswa,
            'persyaratan' => Request()->persyaratan,
            'status' => Request()->status,
            'info_beasiswa' => Request()->info_beasiswa
        ];

        $this->BeasiswaModel->editDataBeasiswa($id_beasiswa,$data);
        return redirect()->route('home')->with('pesan','Data Berhasil Di Update');
    }

    public function detailpendaftar(){
        return view('v_detailpendaftar');
    }
    public function detailpenerima(){
        return view('v_detailpenerima');
    }
    public function ubahdatamahasiswapendaftar(){
        
        return view('v_ubahdatamahasiswapendaftar');
    }
    public function ubahdatamahasiswapenerima(){
        return view('v_ubahdatamahasiswapenerima');
    }
    public function detailkeuangan(){
        return view('v_detailkeuangan');
    }
    
    
}
