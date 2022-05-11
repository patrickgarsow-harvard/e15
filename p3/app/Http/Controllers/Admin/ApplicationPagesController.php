<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

### Models ###
use App\Models\Applicationpage;

class ApplicationPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ApplicationPage  $aplicationPage
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationPage $applicationPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AplicationPage  $aplicationPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationPage $applicationPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationPage  $aplicationPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationPage $applicationPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationPage  $aplicationPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationPage $applicationPage)
    {
        //
    }
}
