@extends('layout.v_editpengumuman')
@section('title','Edit')
@section('content')

<form action="/home/updatepeng/{{ $pengumuman->id_peng }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul_peng" class="form-control" value="{{ $pengumuman->judul_peng }}">
                    <div class="tex-danger">
                        @error('judul_peng')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="text" name="time_peng" class="form-control @error('time_peng') is-invalid @enderror" value="{{ $pengumuman->time_peng }}">
                    <div class="tex-danger">
                        @error('time_peng')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <input type="text" name="isi_peng" class="form-control @error('isi_peng') is-invalid @enderror" value="{{ $pengumuman->isi_peng }}">
                    <div class="tex-danger">
                        @error('isi_peng')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

</form>

@endsection
