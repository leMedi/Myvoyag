<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('sites')->insert([
            'name' => 'Jacobs Casablanca',
            'country' => 'Morocco',
            'city' => 'Casablanca',
            'address' => 'Imm. 5 Zenith Millenium, Lotissement Attaoufik, Route de Nouacer Sidi Maarouf, Casablanca 20300, Morocco',
        ]);

         DB::table('sites')->insert([
            'name' => 'Jacobs Italy',
            'country' => 'Italy',
            'city' => 'Rome',
            'address' => '7 Via Salita di San Nicola da Tolentino, Rome, Italy',
        ]);
    }
}
