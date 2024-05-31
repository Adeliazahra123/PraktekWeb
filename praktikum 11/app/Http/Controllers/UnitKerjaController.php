<?php

namespace App\Http\Controllers;

use App\Models\Unit_kerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengambil semua data pasien
        $list_pasien = Unit_kerja::all();
        return view('unit_kerja.index', compact('unit_kerja_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit_kerja  $unit_kerja
     * @return \Illuminate\Http\Response
     */
    public function show(Unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit_kerja  $unit_kerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit_kerja  $unit_kerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit_kerja  $unit_kerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit_kerja $unit_kerja)
    {
        //
    }
}
