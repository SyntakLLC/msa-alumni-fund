<?php

namespace App\Http\Controllers;

use App\Models\Msa;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("Dashboard", [
            "msas" => Msa::all(),
        ]);
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
     * @param  \App\Models\Msa  $msa
     * @return \Illuminate\Http\Response
     */
    public function show(Msa $msa)
    {
        return Inertia::render("MSA/Show", [
            "msa" => $msa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Msa  $msa
     * @return \Illuminate\Http\Response
     */
    public function edit(Msa $msa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Msa  $msa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msa $msa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Msa  $msa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msa $msa)
    {
        //
    }
}
