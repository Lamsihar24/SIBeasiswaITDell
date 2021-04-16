@extends('layout.v_daftarBeasiswa')
@section('title','Detail')
@section('content')

<form  action="/home/insertdaftarbeasiswa" method="POST" enctype="multipart/form-data">
@csrf
  <div class="content form-group">
    <label>ID Beasiswa</label>
    <input type="text" name="id_beasiswadaftar" class="form-control " value="{{ $beasiswa->id_beasiswa }}" readonly>
  </div>
  <div class="content form-group">
    <label>Nama Beasiswa</label>
    <input type="text" name="nama_bea" class="form-control " value="{{ $beasiswa->nama_beasiswa }}" readonly>
  </div>
  <div class="content form-group">
    <label>ID Mahasiswa</label>
    <input type="text" name="id_mahasiswa" class="form-control " value="{{ Auth::user()->id }}" readonly>
  </div>
  <div class="content form-group">
    <label>Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control" value="{{ Auth::user()->name }}" readonly>
  </div>
  <div class="content form-group">
    <label>Nim Mahasiswa</label>
    <input type="text" name="nim_mahasiswa" class="form-control" value="{{ Auth::user()->nim }}" readonly>
  </div>
  <div class="content form-group">
  <label>Tanggal Lahir</label>
    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" >
    <div class="tex-danger">
        @error('tgl_lahir')
            {{ $message }}
        @enderror
    </div>
  </div>
  <div class="content form-group">
  <label>Kota Lahir</label>
                    <input type="text" class="form-control @error('kota_lahir') is-invalid @enderror" name="kota_lahir" >
                    <div class="tex-danger">
                        @error('kota_lahir')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="content form-group">
  <label>Jenis Kelamin</label>
                    <input type="text" class="form-control @error('jk') is-invalid @enderror" name="jk" >
                    <div class="tex-danger">
                        @error('jk')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Agama</label>
                    <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" >
                    <div class="tex-danger">
                        @error('agama')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Golongan Darah</label>
                    <input type="text" class="form-control @error('gd') is-invalid @enderror" name="gd" >
                    <div class="tex-danger">
                        @error('gd')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Kode Pos</label>
                    <input type="text" class="form-control @error('kp') is-invalid @enderror" name="kp" >
                    <div class="tex-danger">
                        @error('kp')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>E-mail</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ Auth::user()->email }}">
                    <div class="tex-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>No HP</label>
                    <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" >
                    <div class="tex-danger">
                        @error('nohp')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Anak ke / dari</label>
                    <input type="text" class="form-control @error('saudara') is-invalid @enderror" name="saudara" >
                    <div class="tex-danger">
                        @error('saudara')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Nama Ayah</label>
                    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" >
                    <div class="tex-danger">
                        @error('nama_ayah')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Nama Ibu</label>
                    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" >
                    <div class="tex-danger">
                        @error('nama_ibu')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Alamat Orang Tua</label>
                    <input type="text" class="form-control @error('alamat_ortu') is-invalid @enderror" name="alamat_ortu" >
                    <div class="tex-danger">
                        @error('alamat_ortu')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Pekerjaan Ibu</label>
                    <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu" >
                    <div class="tex-danger">
                        @error('pekerjaan_ibu')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Pekerjaan Ayah</label>
                    <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah" >
                    <div class="tex-danger">
                        @error('pekerjaan_ayah')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Total Penghasilan Orang Tua</label>
                    <input type="text" class="form-control @error('penghasilan_ortu') is-invalid @enderror" name="penghasilan_ortu" >
                    <div class="tex-danger">
                        @error('penghasilan_ortu')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>No Hp Ayah</label>
                    <input type="text" class="form-control @error('no_ayah') is-invalid @enderror" name="no_ayah" >
                    <div class="tex-danger">
                        @error('no_ayah')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>No Hp Ibu</label>
                    <input type="text" class="form-control @error('no_ibu') is-invalid @enderror" name="no_ibu" >
                    <div class="tex-danger">
                        @error('no_ibu')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Jumlah Tanggungan</label>    
                    <input type="text" class="form-control @error('jlh_tanggungan') is-invalid @enderror" name="jlh_tanggungan" >
                    <div class="tex-danger">
                        @error('jlh_tanggungan')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
  <div class="form-group">
  <label>Link Berkas</label>    
                    <input type="text" class="form-control" name="berkas">
                    <div class="tex-danger">
                        @error('berkas')
                            {{ $message }}
                        @enderror
                    </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection