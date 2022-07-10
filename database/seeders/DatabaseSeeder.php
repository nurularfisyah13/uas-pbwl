<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Transaksi;
use  \App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Nurul',
            'email' => 'nurul@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        Supplier::create([
            'nama_supplier' => 'Unilever',
            'hp_supplier' => '81376383784',
            'alamat_supplier' => 'Bandung',
        ]);

        Supplier::create([
            'nama_supplier' => 'Unilever',
            'hp_supplier' => '81376383784',
            'alamat_supplier' => 'Bandung',
        ]);

        Supplier::create([
            'nama_supplier' => 'Unilever',
            'hp_supplier' => '81376383784',
            'alamat_supplier' => 'Bandung',
        ]);

        Supplier::create([
            'nama_supplier' => 'Unilever',
            'hp_supplier' => '81376383784',
            'alamat_supplier' => 'Bandung',
        ]);

        Supplier::create([
            'nama_supplier' => 'Unilever',
            'hp_supplier' => '81376383784',
            'alamat_supplier' => 'Bandung',
        ]);

        Barang::create([
            'nama_barang' => 'Face Wash Ponds',
            'harga_barang' => '16000',
            'stok_barang' => 100,
            'supplier_barang' => 1,
        ]);

        Barang::create([
            'nama_barang' => 'Face Wash Ponds',
            'harga_barang' => '16000',
            'stok_barang' => 100,
            'supplier_barang' => 1,
        ]);

        Barang::create([
            'nama_barang' => 'Face Wash Ponds',
            'harga_barang' => '16000',
            'stok_barang' => 100,
            'supplier_barang' => 1,
        ]);

        Barang::create([
            'nama_barang' => 'Face Wash Ponds',
            'harga_barang' => '16000',
            'stok_barang' => 100,
            'supplier_barang' => 1,
        ]);

        Barang::create([
            'nama_barang' => 'Face Wash Ponds',
            'harga_barang' => '16000',
            'stok_barang' => 100,
            'supplier_barang' => 1,
        ]);

        Pembeli::create([
            'nama_pembeli' => 'Roger',
            'jk_pembeli' => 'Laki - Laki',
            'hp_pembeli' => '8136657873',
            'alamat_pembeli' => 'Surabaya'
        ]);

        Pembeli::create([
            'nama_pembeli' => 'Roger',
            'jk_pembeli' => 'Laki - Laki',
            'hp_pembeli' => '8136657873',
            'alamat_pembeli' => 'Surabaya'
        ]);

        Pembeli::create([
            'nama_pembeli' => 'Roger',
            'jk_pembeli' => 'Laki - Laki',
            'hp_pembeli' => '8136657873',
            'alamat_pembeli' => 'Surabaya'
        ]);

        Pembeli::create([
            'nama_pembeli' => 'Roger',
            'jk_pembeli' => 'Laki - Laki',
            'hp_pembeli' => '8136657873',
            'alamat_pembeli' => 'Surabaya'
        ]);

        Pembeli::create([
            'nama_pembeli' => 'Roger',
            'jk_pembeli' => 'Laki - Laki',
            'hp_pembeli' => '8136657873',
            'alamat_pembeli' => 'Surabaya'
        ]);

        Transaksi::create([
            'pembeli_transaksi' => 1,
            'barang_transaksi' => 1,
            'qty_transaksi' => 100
        ]);

        Transaksi::create([
            'pembeli_transaksi' => 1,
            'barang_transaksi' => 1,
            'qty_transaksi' => 100
        ]);

        Transaksi::create([
            'pembeli_transaksi' => 1,
            'barang_transaksi' => 1,
            'qty_transaksi' => 100
        ]);

        Transaksi::create([
            'pembeli_transaksi' => 1,
            'barang_transaksi' => 1,
            'qty_transaksi' => 100
        ]);

        Transaksi::create([
            'pembeli_transaksi' => 1,
            'barang_transaksi' => 1,
            'qty_transaksi' => 100
        ]);
    }
}
