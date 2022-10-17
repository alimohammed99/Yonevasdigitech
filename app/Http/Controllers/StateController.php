<?php

namespace App\Http\Controllers;

use App\Models\States;
use Illuminate\Http\Request;

class StateController extends Controller
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
     * @param  \App\Models\States  $States
     * @return \Illuminate\Http\Response
     */
    public function show(States $States)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\States  $States
     * @return \Illuminate\Http\Response
     */
    public function edit(States $States)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\States  $States
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, States $States)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\States  $States
     * @return \Illuminate\Http\Response
     */
    public function destroy(States $States)
    {
        //
    }
    public function getStates(Request $request)
    {
        $states=States::whereCountryId($request->country_id)->orderBy('name_state')->get();
        return $states;
    }
}
