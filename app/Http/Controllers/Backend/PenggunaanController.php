<?php

namespace App\Http\Controllers\Backend;

use App\Models\Penggunaan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenggunaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penggunaan::all();

        return view('backend.penggunaan.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('backend.penggunaan.create')->with('pelanggan',$pelanggan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input['id_pelanggan'] = $request->id_pelanggan;
        $input['bulan'] = $request->bulan;
        $input['tahun'] = $request->tahun;
        $input['meterawal'] = $request->meterawal;
        $input['meterakhir'] = $request->meterakhir;
        Penggunaan::create($input);

        return redirect()->route('penggunaan.index');
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
      $data['pelanggan'] = Pelanggan::all();
      $data['penggunaan'] = Penggunaan::findOrFail($id);

      return view('backend.penggunaan.edit',$data);
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
        $penggunaan = Penggunaan::findOrFail($id);
        $penggunaan->id_pelanggan = $request->id_pelanggan;
        $penggunaan->bulan = $request->bulan;
        $penggunaan->tahun = $request->tahun;
        $penggunaan->meterawal = $request->meterawal;
        $penggunaan->meterakhir = $request->meterakhir;
        $penggunaan->save();

        return redirect()->route('penggunaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penggunaan = Penggunaan::findOrFail($id);
        $penggunaan->delete();

        return redirect()->route('penggunaan.index');
    }

    public function report()
    {
      $data = Penggunaan::all();
      $pdf = PDF::loadview('backend.penggunaan.report',$data);
      return $pdf->download('data_penggunaan.pdf');
    }
}
