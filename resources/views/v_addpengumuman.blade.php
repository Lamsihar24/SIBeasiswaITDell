@extends('layout.v_addpengumuman')
@section('title','Add')
@section('content')

<form action="/home/insertpeng" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul_peng" class="form-control ">
                    <div class="tex-danger">
                        @error('judul_peng')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="text" name="time_peng" class="form-control @error('time_peng') is-invalid @enderror">
                    <div class="tex-danger">
                        @error('time_peng')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <input type="text" name="isi_peng" class="form-control @error('isi_peng') is-invalid @enderror">
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
