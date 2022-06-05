<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Msa;
use App\Models\Objective;
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
            "msas" => Msa::get()
                ->sortBy("city")
                ->values()
                ->all(),
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
        // displayed at the bottom of the page
        $nearby_msas = Msa::where("city", "=", $msa->city)
            ->where("school", "!=", $msa->school)
            ->get();

        // used in the msa image gallery
        $images = Image::where("msa_uuid", "=", $msa->uuid)
            ->get()
            ->map(function ($image) {
                return $image->image_url;
            });

        // used in the features accordion
        $objectives = Objective::where("msa_uuid", "=", $msa->uuid)
            ->get()
            ->map(function ($image) {
                return $image->text;
            });

        return Inertia::render("MSA/Show", [
            "msa" => $msa,
            "nearbyMsas" => $nearby_msas,
            "images" => $images,
            "objectives" => $objectives,
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
