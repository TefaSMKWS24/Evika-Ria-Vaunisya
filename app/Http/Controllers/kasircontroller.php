<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kasircontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'nama_kasir' => 'required',
            'shift_mulai' => 'required',
            'shift_selesai' => 'required',
            'nohp' => 'required',
        ]);

        $data = [
            'nama_kasir' => $request->nama_kasir,
            'shift_mulai' => $request->shift_mulai,
            'shift_selesai' => $request->shift_selesai,'nohp' => $request->nohp,
         ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
