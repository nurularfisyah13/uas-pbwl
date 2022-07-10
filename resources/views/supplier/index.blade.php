@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Supplier</h2>
    <a href="{{ url('/supplier/create') }}" class="btn btn-success mb-3">Tambah Supplier</a>
    <div class="row justify-content-center">
        <table class=" table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Supplier</th>
                    <th>Handphone</th>
                    <th>Alamat</th>
                    <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $supplier)
                <tr>
                    <td>{{ $supplier->id_supplier }}</td>
                    <td>{{ $supplier->nama_supplier }}</td>
                    <td>+62 {{ $supplier->hp_supplier }}</td>
                    <td>{{ $supplier->alamat_supplier }}</td>
                    <td width="50"><a class="px-3 nav-link bg-primary text-light rounded" href="{{ url('/supplier/edit') }}/{{ $supplier->id_supplier }}">Edit</a></td>
                    <td width="50"><a class="px-2 nav-link bg-danger text-light rounded" href="{{ url('/supplier/destroy') }}/{{ $supplier->id_supplier }}" onclick="return confirm('Hapus Supplier Ini ?');">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection