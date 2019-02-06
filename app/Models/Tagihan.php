<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
  protected $fillable = [
      'id_pelanggan',
      'bulan',
      'tahun',
      'jumlahmeter',
      'status',
  ];

  public function penggunaan()
  {
      return $this->belongsTo('App\Models\penggunaan');
  }

  public function pelanggan()
  {
      return $this->belongsTo('App\Models\pelanggan','id_pelanggan','id');
  }
}
