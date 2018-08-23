<?php

namespace App\Http\Controllers\Intranet;

use App\Experiens;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperiensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intranet.experiens.index');
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
     * @param  \App\Experiens  $experiens
     * @return \Illuminate\Http\Response
     */
    public function show(Experiens $experiens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Experiens  $experiens
     * @return \Illuminate\Http\Response
     */
    public function edit(Experiens $experiens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Experiens  $experiens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experiens $experiens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Experiens  $experiens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experiens $experiens)
    {
        //
    }
}
