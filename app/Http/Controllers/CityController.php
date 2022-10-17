<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;

class CityController extends Controller
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
     * @param  \App\Models\Cities  $Cities
     * @return \Illuminate\Http\Response
     */
    public function show(Cities $Cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cities  $Cities
     * @return \Illuminate\Http\Response
     */
    public function edit(Cities $Cities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cities  $Cities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cities $Cities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cities  $Cities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cities $Cities)
    {
        //
    }
    public function getCities(Request $request)
    {
        $cities=Cities::whereStateId($request->state_id)->orderBy('name_city')->get();
        return $cities;
    }
}
