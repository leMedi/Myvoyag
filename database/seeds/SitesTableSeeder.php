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
            'name' => 'Jacobs Germany',
            'country' => 'Germany',
            'city' => 'Cologne',
            'address' => 'Josef-Lammerting-Allee 25, Cologne 50933, Germany',
        ]);
        
        DB::table('sites')->insert([
            'name' => 'Jacobs China(Hong Kong)',
            'country' => 'China',
            'city' => 'Hong Kong',
            'address' => '6th Floor,633 King’s Road,North Point, Hong Kong, China',
        ]);
            
        DB::table('sites')->insert([
            'name' => 'Jacobs Brazil',
            'country' => 'Brazil',
            'city' => 'Rio de Janeiro',
            'address' => 'Rua Dom Gerardo, 46 – Centro, 3rd Floor, Rio de Janeiro, 20090-030, Brazil.',
        ]);
            
        DB::table('sites')->insert([
            'name' => 'Jacobs Italy',
            'country' => 'Italy',
            'city' => 'Rome',
            'address' => '7 Via Salita di San Nicola da Tolentino, Rome, Italy',
        ]);

        DB::table('sites')->insert([
            'name' => 'Jacobs Vancouver',
            'country' => 'Canada',
            'city' => 'Vancouver',
            'address' => 'Suite 200 - 2930 Virtual Way, Vancouver, British Columbia V5M OA5, Canada',
        ]);

        DB::table('sites')->insert([
            'name' => 'Jacobs United Arab Emirates',
            'country' => 'United Arab Emirates',
            'city' => 'Dubai',
            'address' => 'Unit 719, Business Avenue, Al Garhoud Road, Port Saeed, 3rd Floor,Northbank Lane, Century City, Dubai, United Arab Emirates',
        ]);

        DB::table('sites')->insert([
            'name' => 'Jacobs Matasis(South Africa)',
            'country' => 'South Africa',
            'city' => 'Cape Town',
            'address' => 'Jacobs Matasis, No 1 Northbank, 3rd Floor,Northbank Lane, Century City, Cape Town 7441, South Africa',
        ]);
    }
}
