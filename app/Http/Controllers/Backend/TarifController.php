<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tarif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tarif::all();
        return view('backend.tarif.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tarif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['kodetarif'] = $request->kodetarif;
        $input['daya'] = $request->daya;
        $input['tarifperkwh'] = $request->tarifperkwh;
        Tarif::create($input);

        return redirect()->route('tarif.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarif = Tarif::findOrFail($id);
        return view('backend.tarif.edit')->with('tarif',$tarif);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarif = Tarif::findOrFail($id);
        $tarif->kodetarif = $request->kodetarif;
        $tarif->daya = $request->daya;
        $tarif->tarifperkwh = $request->tarifperkwh;
        $tarif->save();

        return redirect()->route('tarif.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarif =  Tarif::findOrFail($id);
        $tarif->delete();

        return redirect()->route('tarif.index');
    }
}
