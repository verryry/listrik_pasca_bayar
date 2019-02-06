<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pelanggan;
use App\Models\Penggunaan;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tagihan::all();

        return view('backend.tagihan.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        return view('backend.tagihan.create')->with('pelanggan',$pelanggan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $meterawal = Penggunaan::where('id_pelanggan',$request->id_pelanggan)->value('meterawal');
        $meterakhir = Penggunaan::where('id_pelanggan',$request->id_pelanggan)->value('meterakhir');
        $hasil = $meterakhir - $meterawal;
        $input['id_pelanggan'] = $request->id_pelanggan;
        $input['bulan'] = $request->bulan;
        $input['tahun'] = $request->tahun;
        $input['jumlahmeter'] = $hasil;
        $input['status'] = $request->status;

        Tagihan::create($input);

        return redirect()->route('tagihan.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function report()
    {
      $data = Tagihan::all();
      $pdf = PDF::loadview('backend.tagihan.report',$data);
      return $pdf->download('data_tagihan.pdf');
    }
}
