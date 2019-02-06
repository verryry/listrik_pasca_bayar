<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Models\Tagihan;
use App\Models\Penggunaan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function search(Request $r)
  {
    $query = $r->input('query');
    $pelanggan = Pelanggan::where('id','like','%'.$query.'%')->first();
    $kode_tarif = Tarif::where('id',$pelanggan->id_tarif)->first();
    $tagihan = Tagihan::where('id_pelanggan',$pelanggan->id)->get();
    $pembayaran = Pembayaran::where('id_pelanggan',$pelanggan->id)->get();

    return view('user.index')->with('pelanggan', $pelanggan)->with('query', $query)->with('tarif',$kode_tarif)->with('tagihan',$tagihan)->with('pembayaran',$pembayaran);
  }
}
