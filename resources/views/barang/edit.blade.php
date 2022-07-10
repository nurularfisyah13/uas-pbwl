@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Edit Barang</h3>
    <div class="row justify-content-center">
        @foreach ($data as $barang)
        <form class="mb-5" method="post" action="{{ url('/barang/update') }}/{{ $barang->id_barang }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Supplier</label>
                <div class="col-sm-5">
                    <select class="form-select" name="supplier_barang">
                        <option value="{{ $barang->supplier_barang }}">{{ $barang->nama_supplier }}</option>
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id_supplier }}">{{ $supplier->nama_supplier }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{ $barang->nama_barang }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-5">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input type="text" class="form-control" placeholder="Harga" name="harga_barang" value="{{ $barang->harga_barang }}" required>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <label class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-2">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Stok" name="stok_barang" value="{{ $barang->stok_barang }}" required>
                        <span class="input-group-text">pcs</span>
                    </div>
                </div>
            </div>
            <a href="{{ url('/barang') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        @endforeach
    </div>
</div>
@endsection