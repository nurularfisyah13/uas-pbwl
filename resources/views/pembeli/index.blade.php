@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Pembeli</h2>
    <a href="{{ url('/pembeli/create') }}" class="btn btn-success mb-3">Tambah Pembeli</a>
    <div class="row justify-content-center">
        <table class=" table table-hover">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th class="text-start">Nama Pembeli</th>
                    <th>Jenis Kelamin</th>
                    <th>Handphone</th>
                    <th>Alamat</th>
                    <th colspan="2" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $pembeli)
                <tr>
                    <td width="50" class="text-center">{{ $pembeli->id_pembeli }}</td>
                    <td>{{ $pembeli->nama_pembeli }}</td>
                    <td class="text-center">{{ $pembeli->jk_pembeli  }}</td>
                    <td class="text-center">+62 {{ $pembeli->hp_pembeli }}</td>
                    <td class="text-center">{{ $pembeli->alamat_pembeli }}</td>
                    <td width="50"><a class="px-3 nav-link bg-primary text-light rounded" href="{{ url('/pembeli/edit') }}/{{ $pembeli->id_pembeli }}">Edit</a></td>
                    <td width="50"><a class="px-2 nav-link bg-danger text-light rounded" href="{{ url('/pembeli/delete') }}/{{ $pembeli->id_pembeli }}" onclick="return confirm('Hapus Pembeli Ini ?');">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection