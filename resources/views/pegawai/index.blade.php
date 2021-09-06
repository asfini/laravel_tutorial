@extends('layouts.index')

@section('content')
<br>
<a class="btn btn-primary" href="{{ url('pegawai/create') }}">Tambah</a>
<br>
<br>
<table class="table table-bordered">
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>Gelar</th>
    <th>NIP</th>
    <th colspan="2">Aksi</th>
    @foreach($datas as $key=>$value)
    <tr>
        <td>{{ $value->nama }}</td>
        <td>{{ $value->tanggal_lahir }}</td>
        <td>{{ $value->gelar }}</td>
        <td>{{ $value->nip }}</td>
        <td><a href="{{ url('pegawai/'.$value->id.'/edit') }}" class="btn btn-warning">Edit</a></td>
    </tr>

    @endforeach
</table>
@endsection