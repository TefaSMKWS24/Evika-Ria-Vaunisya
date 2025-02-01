<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\facades\DB;
use Illuminate\support\facades\Redirect;
use Illuminate\support\facades\Validator;

class kategoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index');
    }

    /**
    * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
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
       $kategori = DB::table('kategori')->where('kode_kategori', $id)->first();
       return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'nama_supplier' => 'required',
        ]);

        $data = [
            'nama_kategori' => $request->nama_kategori,
            'nama_supplier' => $request->nama_supplier,
        ];

        DB:table('kategori')->where('kode_kategori', $id)->update($data);
        return Redirect::route('kategori.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB:table('kategori')->where('kode_kategori', $id)->delete();
        return Redirect::route('kategori.index')->with('success', 'Data berhasil dihapus');
    }
}
