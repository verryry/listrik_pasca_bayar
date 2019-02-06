<?php

namespace App\Http\Controllers\Backend;

use PDF;
use App\Models\Pelanggan;
use App\Models\Tarif;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelanggan::all();
        return view('backend.pelanggan.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tarif'] = Tarif::all();
        return view('backend.pelanggan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['id_tarif'] = $request->id_tarif;
        $input['nometer'] = $request->nometer;
        $input['nama'] = $request->nama;
        $input['alamat'] = $request->alamat;

        Pelanggan::create($input);
        return redirect()->route('pelanggan.index');

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
        $data['tarif'] = Tarif::all();
        $data['pelanggan'] = Pelanggan::findOrFail($id);

        return view('backend.pelanggan.edit',$data);
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
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->id_tarif = $request->id_tarif;
        $pelanggan->nometer = $request->nometer;
        $pelanggan->nama = $request->nama;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->save();

        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index');
    }

    /**
    * Report Function
    */
    public function report()
    {
      $data = Pelanggan::all();
      $pdf = PDF::loadview('backend.pelanggan.report',$data);
      return $pdf->stream();
    }
}
