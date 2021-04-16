@extends('layout.v_detailPengumuman')
@section('title','Detail')
@section('content')

<table class="table">
    <tr>
        <th width="100px">Judul</th>
        <th width="30px">:</th>
        <th>{{ $pengumuman->judul_peng }}</th>
    </tr>
    <tr>
        <th width="100px">Time</th>
        <th width="30px">:</th>
        <th>{{ $pengumuman->time_peng }}</th>
    </tr>
    <tr>
        <th width="100px">Isi</th>
        <th width="30px">:</th>
        <th>{{ $pengumuman->isi_peng }}</th>
    </tr>
</table>

@endsection
