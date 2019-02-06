<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
  protected $fillable = [
      'id_tarif',
      'nometer',
      'nama',
      'alamat',
  ];

  public function tarif()
  {
      return $this->belongsTo('App\Models\Tarif','id_tarif','id');
  }

  public function penggunaan()
  {
    return $this->hasMany('App\Models\Penggunaan');
  }

  public function tagihan()
  {
    return $this->hasMany('App\Models\Tagihan');
  }

  public function pembayaran()
  {
    return $this->hasMany('App\Models\Pembayaran');
  }
}
