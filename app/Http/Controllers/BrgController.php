<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BrgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT *FROM barang;
        $list_barang = Barang::all();
        
        //kirim list_barang ke view
        return view('barang/index', 
            ['list'=>$list_barang]
            );
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
     * @param  \App\ModelsBarang  $modelsBarang
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsBarang $modelsBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModelsBarang  $modelsBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsBarang $modelsBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModelsBarang  $modelsBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsBarang $modelsBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModelsBarang  $modelsBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsBarang $modelsBarang)
    {
        //
    }
}
