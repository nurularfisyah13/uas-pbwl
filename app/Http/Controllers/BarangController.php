<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('barang')
            ->join('supplier', 'supplier.id_supplier', '=', 'barang.supplier_barang')
            ->orderBy('id_barang', 'ASC')
            ->get();
        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('barang.create', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'supplier_barang' => 'string',
            'nama_barang' => 'string',
            'harga_barang' => 'numeric',
            'stok_barang' => 'numeric',
        ]);

        Barang::create($validatedData);
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('barang')
            ->join('supplier', 'supplier.id_supplier', '=', 'barang.supplier_barang')
            ->where('id_barang', $id)
            ->get();
        $suppliers = Supplier::all();
        return view('barang.edit', compact('data', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'supplier_barang' => 'string',
            'nama_barang' => 'string',
            'harga_barang' => 'numeric',
            'stok_barang' => 'numeric',
        ]);

        $barangs = Barang::find($id);
        $barangs->supplier_barang = $request->input('supplier_barang');
        $barangs->nama_barang = $request->input('nama_barang');
        $barangs->harga_barang = $request->input('harga_barang');
        $barangs->stok_barang = $request->input('stok_barang');
        $barangs->update($validatedData);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barangs = Barang::find($id);
        $barangs->delete();
        return redirect('/barang');
    }
}
