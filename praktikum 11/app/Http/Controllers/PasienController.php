<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view('pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
        ]);
        Pasien::create ([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.show', compact('pasien'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * 
     */
    public function edit(Pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {

        $pasien->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(pasien $pasien)
    {
        $pasien->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('pasiens.index')->with('success', 'Pasien deleted successfully');
    }

}