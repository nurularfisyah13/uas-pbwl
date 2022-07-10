@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Transaksi</h2>
    <a href="{{ url('/transaksi/create') }}" class="btn btn-success mb-3">Tambah Transaksi</a>
    <div class="row justify-content-center">
        <table class=" table table-hover">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th class="text-start">Nama Pembeli</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $transaksi)
                <tr>
                    <td width="50" class="text-center">{{ $transaksi->id_transaksi }}</td>
                    <td>{{ $transaksi->nama_pembeli }}</td>
                    <td class="text-center">{{ $transaksi->nama_barang  }}</td>
                    <td class="text-center">{{ $transaksi->qty_transaksi }} pcs</td>
                    <td class="text-center">Rp. {{ number_format($transaksi->qty_transaksi * $transaksi->harga_barang) }}</td>
                    <td width="50"><a class="px-3 nav-link {{ ($transaksi->status_transaksi == 1) ? 'bg-warning' : 'bg-info disabled' }} text-light text-center rounded" href="{{ url('/transaksi/update') }}/{{ $transaksi->id_transaksi }}" onclick="return confirm('Checkout Transaksi Ini ?');">{{ ($transaksi->status_transaksi == 1) ? 'Checkout' : 'Selesai' }}</a></td>
                    <td width="50"><a class="px-2 nav-link bg-danger text-light rounded" href="{{ url('/transaksi/delete') }}/{{ $transaksi->id_transaksi }}" onclick="return confirm('Hapus Transaksi Ini ?');">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection