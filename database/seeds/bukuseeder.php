<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class bukuseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for($i=1;$i<100;$i++)

        DB::table('buku')->insert([
            'nama buku' => $faker->namabuku(),
            'jenisbuku' => $faker->word(),
            'tahun' => $faker->tahun(),
            
        ]);
    }
}
