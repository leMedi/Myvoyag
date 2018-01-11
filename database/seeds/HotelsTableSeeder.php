<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => 'Eiffel Capitol',
            'tel' => '+33 1 45 78 61 00',
            'country' => 'France',
            'city' => 'Paris',
            'address' => '9 Rue Viala, 75015 Paris, France',
            'rating' => 3,
            'price' => 80,
            'with_food' => true,
        ]);


        DB::table('hotels')->insert([
            'name' => 'Le Fabe',
            'tel' => '+33 1 40 44 09 63',
            'country' => 'France',
            'city' => 'Paris',
            'address' => '9 Rue Viala, 75015 Paris, France',
            'rating' => 3,
            'price' => 60,
            'with_food' => false,
        ]);
    }
}
