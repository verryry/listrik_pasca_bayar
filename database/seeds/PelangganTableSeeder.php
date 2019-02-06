<?php

use Illuminate\Database\Seeder;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('pelanggans')->insert([
        'id_tarif' => '1',
        'nometer' => '009',
        'nama' => 'viara',
        'alamat' => 'jln waru doyong',
      ]);

      DB::table('pelanggans')->insert([
        'id_tarif' => '2',
        'nometer' => '008',
        'nama' => 'vierry',
        'alamat' => 'jln waru doyong II',
      ]);
    }
}
