<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Displays the marketing page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("Welcome", [
            "canLogin" => Route::has("login"),
            "canRegister" => Route::has("register"),
            "laravelVersion" => Application::VERSION,
            "phpVersion" => PHP_VERSION,
        ]);
    }

    /**
     * Displays the mission page
     *
     * @return \Illuminate\Http\Response
     */
    public function mission()
    {
        return Inertia::render("Company/Mission");
    }

    /**
     * Displays the impact page
     *
     * @return \Illuminate\Http\Response
     */
    public function impact()
    {
        return Inertia::render("Company/Impact");
    }

    /**
     * Displays the contact page
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return Inertia::render("Company/Contact");
    }
}
