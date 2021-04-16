@extends('layout.v_detailBeasiswa')
@section('titlebeasiswa'," $beasiswa->nama_beasiswa")
@section('detail'," $beasiswa->nama_beasiswa")
@section('content')


<table class="table">
    <tr>
        <th width="100px">Judul</th>
        <th width="30px">:</th>
        <th>{{ $beasiswa->nama_beasiswa }}</th>
    </tr>
    <tr>
        <th width="100px">Sponsor By</th>
        <th width="30px">:</th>
        {{-- <th>{{ $beasiswa->pemberi_beasiswa}}</th> --}}
    </tr>
    {{-- <tr>
        <th width="100px">namai</th>
        <th width="30px">:</th>
        <th>{{ Auth::user()->name }}</th>
    </tr>
    <tr>
        <th width="100px">namai</th>
        <th width="30px">:</th>
        <th>{{ Auth::user()->id }}</th>
    </tr> --}}
</table>
<a href="/home/daftarbeasiswa/{{ $beasiswa->id_beasiswa }}" >Daftar</a>

@endsection
