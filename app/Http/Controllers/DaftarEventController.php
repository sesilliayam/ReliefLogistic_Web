<?php

namespace App\Http\Controllers;

use App\DaftarEvent;
use Illuminate\Http\Request;

class DaftarEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.event.daftarevent.daftarevent');
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
     * @param  \App\DaftarEvent  $daftarEvent
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarEvent $daftarEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DaftarEvent  $daftarEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarEvent $daftarEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DaftarEvent  $daftarEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarEvent $daftarEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DaftarEvent  $daftarEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarEvent $daftarEvent)
    {
        //
    }
}
