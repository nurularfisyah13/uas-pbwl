@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Edit Supplier</h3>
    <div class="row justify-content-center">
        <form class="mb-5" method="post" action="{{ url('/supplier/update') }}/{{ $data->id_supplier }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Supplier</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_supplier" placeholder="Nama Supplier" value="{{ $data->nama_supplier }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Handphone</label>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">+62</span>
                        <input type="text" class="form-control" placeholder="Handphone" name="hp_supplier" value="{{ $data->hp_supplier }}" required>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="alamat_supplier" placeholder="Alamat" cols="30" rows="5" style="resize: none;">{{ $data->alamat_supplier }}</textarea>
                </div>
            </div>
            <a href="{{ url('/supplier') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection