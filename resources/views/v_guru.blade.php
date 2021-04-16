@extends('layout.v_template')
@section('title','Guru')
@section('content')
{{-- @foreach ($guru as $data)
    NIM : {{ $data['nip'] }}<br>
    NAMA : {{ $data['nama'] }}<br>
    MATPEL : {{ $data['matpel'] }}<br>
@endforeach --}}
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Foto Guru</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($guru as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nip }}</td>
            <td>{{ $data->nama_guru }}</td>
            <td>{{ $data->matpel }}</td>
            <td><img src="{{ url('foto_guru/'.$data->foto_guru) }}" width="100px" alt=""></td>
            <td>
                <a href="" class="btn btn-sm btn-success">Detail</a>
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

    {{-- {{ dd($guru) }} --}}
@endsection
