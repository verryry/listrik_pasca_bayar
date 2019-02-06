<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penggunaan extends Model
{
  protected $fillable = [
      'id_pelanggan',
      'bulan',
      'tahun',
      'meterawal',
      'meterakhir',
  ];

  public function pelanggan()
  {
      return $this->belongsTo('App\Models\Pelanggan','id_pelanggan','id');
  }

  public function tagihan()
  {
    return $this->hasMany('App\Models\Tagihan');
  }
}
