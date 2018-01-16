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
            'name' => 'Jenaro Capitalo',
            'tel' => '+33 1 45 78 61 00',
            'country' => 'Italy',
            'city' => 'Rome',
            'address' => '9 Rue Viala, 75015 Paris, France',
            'rating' => 3,
            'price' => 80,
            'with_food' => true,
            'site_id'   => 5,
            'distance'  => 13
        ]);

        DB::table('hotels')->insert([
            'name' => 'Imperial Casablanca Hotel & Spa',
            'tel' => '+212 05 22 34 27 29',
            'country' => 'Morocco',
            'city' => 'Casablanca',
            'address' => '291, Boulevard Mohamed V & Angle Rue Azilal، Ex Rond Point Shell، Casablanca 20110',
            'rating' => 4,
            'price' => 66,
            'with_food' => false,
            'site_id'   => 1,
            'distance'  => 5
        ]);

        DB::table('hotels')->insert([
            'name' => 'Steigenberger Hotel Koeln',
            'tel' => '+00 49 221 2280',
            'country' => 'Germany',
            'city' => 'Cologne',
            'address' => '9 Rue Viala, 75015 Paris, France',
            'rating' => 4,
            'price' => 353,
            'with_food' => true,
            'site_id'   => 2,
            'distance'  => 35
        ]);

        DB::table('hotels')->insert([
            'name' => 'Wharney Guang Dong',
            'tel' => '+852 28 61 10 00',
            'country' => 'China',
            'city' => 'Hong Kong',
            'address' => '57- 73 Lockhart Road, Wanchai, Hong Kong',
            'rating' => 4,
            'price' => 106,
            'with_food' => true,
            'site_id'   => 3,
            'distance'  => 37
        ]);


        DB::table('hotels')->insert([
            'name' => 'Bishop Lei International',
            'tel' => '+852 28 68 08 28',
            'country' => 'China',
            'city' => 'Hong Kong',
            'address' => '4 Robinson Rd, Central, Hong Kong',
            'rating' => 4,
            'price' => 74,
            'with_food' => false,
            'site_id'   => 3,
            'distance'  => 13
        ]);

        DB::table('hotels')->insert([
            'name' => 'Petit Rio Hotel',
            'tel' => '+55 21 22 25 77 67',
            'country' => 'Brazil',
            'city' => 'Rio de Janeiro',
            'address' => 'R. Artur Bernardes, 39 - Catete, Rio de Janeiro - RJ, 22220-070, Brazil',
            'rating' => 3,
            'price' => 57,
            'with_food' => false,
            'site_id'   => 4,
            'distance'  => 37
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
            'site_id'   => 6,
            'distance'  => 37
        ]);
    }
}
