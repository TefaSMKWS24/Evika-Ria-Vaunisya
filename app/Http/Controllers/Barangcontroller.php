<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\redirect;
Use  Illuminate\Support\Facades\Validator;

class Barangcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
      return view('barang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     $request->Validated([
            'stok' => 'required',
            'kode_kategori' => 'required',
        ]);

        $data = [
            'nama_barang' => $request ->nama_brang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kode_kategori' => $request->kode_kategori,
        ];

        DB::table('barang')->where('kode_barang', $id)->update($data);
        return redirect()->view('[barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('barang')->where('kode_barang', $id)->delete();
        return redirect()->view('barang.index');
    }
}
