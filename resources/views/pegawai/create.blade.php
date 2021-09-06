@extends('layouts.index')

@section('content')
<br>


<div class="card">
    <div class="card-header">
        Data Pegawai
    </div>
    <div class="card-body">

        <form action="{{ url('pegawai') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Gelar</label>
                <div class="col-sm-10">
                    <input type="text" name="gelar" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" name="nip" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>

@endsection