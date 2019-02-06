<?php

namespace App\Http\Controllers\Backend;

use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Tarif;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembayaran::all();
        return view('backend.pembayaran.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $pelanggan = Tagihan::find($id);
        $get = Tagihan::whereId($id)->value('id_pelanggan');
        $id_pelanggan = Pelanggan::whereId($get)->first();
        $getkodetarif = Tarif::whereId($get)->value('kodetarif');
        $gettarif = Tarif::whereKodetarif($getkodetarif)->value('tarifperkwh');
        $getjumlahmeter = Tagihan::whereId($id)->value('jumlahmeter');
        $hasil = $getjumlahmeter * $gettarif;

        return view('backend.pembayaran.create')->with(['id_pelanggan'=> $id_pelanggan,'tarif'=>$hasil]);
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
        $input['tanggal'] = $request->tanggal;
        $input['biayaadmin'] = $request->biayaadmin;
        Pembayaran::create($input);

        return redirect()->route('index');
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
        $bayar = Pembayaran::findOrFail($id);
        $bayar->delete();

        return redirect()->route('index');
    }

    public function report()
    {
      $data = Pembayaran::all();
      $pdf = PDF::loadview('backend.pembayaran.report',$data);
      return $pdf->download('data_pembayaran.pdf');
    }
}
