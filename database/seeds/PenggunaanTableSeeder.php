<?php

use Illuminate\Database\Seeder;

class PenggunaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('penggunaans')->insert([
        'id_pelanggan' => '1',
        'bulan' => 'Januari',
        'tahun' => '2018',
        'meterawal' => '100',
        'meterakhir' => '500',
      ]);

      DB::table('penggunaans')->insert([
        'id_pelanggan' => '2',
        'bulan' => 'Februari',
        'tahun' => '2018',
        'meterawal' => '100',
        'meterakhir' => '900',
      ]);
    }
}
