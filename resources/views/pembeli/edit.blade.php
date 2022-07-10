@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Edit Pembeli</h3>
    <div class="row justify-content-center">
        <form class="mb-5" method="post" action="{{ url('/pembeli/update') }}/{{ $data->id_pembeli }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Pembeli</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_pembeli" placeholder="Nama Pembeli" value="{{ $data->nama_pembeli }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-5">
                    <select class="form-select" name="jk_pembeli">
                        <option value="{{ $data->jk_pembeli }}">{{ $data->jk_pembeli }}</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Handphone</label>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">+62</span>
                        <input type="text" class="form-control" placeholder="Handphone" name="hp_pembeli" value="{{ $data->hp_pembeli }}" required>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="alamat_pembeli" cols="30" rows="5" style="resize: none;" placeholder="Alamat">{{ $data->alamat_pembeli }}</textarea>
                    </div>
                </div>
            </div>
            <a href="{{ url('/pembeli') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection