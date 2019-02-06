<?php

use Illuminate\Database\Seeder;

class TarifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tarifs')->insert([
        'kodetarif' => 'KD001',
        'daya' => '200',
        'tarifperkwh' => '10000',
      ]);

      DB::table('tarifs')->insert([
        'kodetarif' => 'KD002',
        'daya' => '300',
        'tarifperkwh' => '20000',
      ]);
    }
}
