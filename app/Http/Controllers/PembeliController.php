<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembeli::all();
        return view('pembeli.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_pembeli' => 'string',
            'jk_pembeli' => 'string',
            'hp_pembeli' => 'string',
            'alamat_pembeli' => 'string',
        ]);

        Pembeli::create($validateData);
        return redirect('/pembeli');
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
        $data = Pembeli::find($id);
        return view('pembeli.edit', compact('data'));
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
        $validateData = $request->validate([
            'nama_pembeli' => 'string',
            'jk_pembeli' => 'string',
            'hp_pembeli' => 'string',
            'alamat_pembeli' => 'string',
        ]);

        $pembeli = Pembeli::find($id);
        $pembeli->nama_pembeli = $request->input('nama_pembeli');
        $pembeli->jk_pembeli = $request->input('jk_pembeli');
        $pembeli->hp_pembeli = $request->input('hp_pembeli');
        $pembeli->alamat_pembeli = $request->input('alamat_pembeli');
        $pembeli->update($validateData);
        return redirect('/pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();
        return redirect('/pembeli');
    }
}
