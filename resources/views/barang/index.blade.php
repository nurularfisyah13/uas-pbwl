@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Barang</h2>
    <a href="{{ url('/barang/create') }}" class="btn btn-success mb-3">Tambah Barang</a>
    <div class="row justify-content-center">
        <table class=" table table-hover">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th class="text-start">Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Supplier</th>
                    <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $barang)
                <tr>
                    <td width="50" class="text-center">{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td class="text-center">Rp. {{ number_format($barang->harga_barang) }}/pcs</td>
                    <td class="text-center">{{ $barang->stok_barang }} pcs</td>
                    <td class="text-center">{{ $barang->nama_supplier }}</td>
                    <td width="50"><a class="px-3 nav-link bg-primary text-light rounded" href="{{ url('/barang/edit') }}/{{ $barang->id_barang }}">Edit</a></td>
                    <td width="50"><a class="px-2 nav-link bg-danger text-light rounded" href="{{ url('/barang/delete') }}/{{ $barang->id_barang }}" onclick="return confirm('Hapus Barang Ini ?');">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection