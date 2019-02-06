<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'kodetarif',
      'daya',
      'tarifperkwh',
  ];

  public function pelanggan()
  {
      return $this->hasMany('App\Models\Pelanggan');
  }
}
