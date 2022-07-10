@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Transaksi</h3>
    <div class="row justify-content-center">
        <form class="mb-5" method="post" action="{{ url('/transaksi/store') }}">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Pembeli</label>
                <div class="col-sm-5">
                    <select name="pembeli_transaksi" class="form-select">
                        <option value="">Pilih...</option>
                        @foreach ($pembelis as $pembeli)
                        <option value="{{ $pembeli->id_pembeli }}">{{ $pembeli->nama_pembeli }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-5">
                    <select class="form-select" name="barang_transaksi">
                        <option value="">Pilih...</option>
                        @foreach ($barangs as $barang)
                        <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Qty</label>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Qty" name="qty_transaksi" required>
                        <span class="input-group-text">pcs</span>
                    </div>
                </div>
            </div>
            <a href="{{ url('/pembeli') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection