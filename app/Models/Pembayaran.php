<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
  protected $fillable = [
      'id_pelanggan',
      'tanggal',
      'biayaadmin',
  ];

  public function pelanggan()
  {
      return $this->belongsTo('App\Models\Pelanggan','id_pelanggan','id');
  }
}
