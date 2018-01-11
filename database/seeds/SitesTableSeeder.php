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
            'name' => 'Eiffel Capitol',
            'country' => 'France',
            'city' => 'Paris',
            'address' => '9 Rue Viala, 75015 Paris, France',
        ]);

         DB::table('sites')->insert([
            'name' => 'Le Fabe',
            'country' => 'France',
            'city' => 'Paris',
            'address' => '9 Rue Viala, 75015 Paris, France',
        ]);
    }
}
