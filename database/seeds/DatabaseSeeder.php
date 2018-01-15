<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname'              => 'achraf',
            'lastname'               => 'jacobi',
            'date_naissance'         => '1996-10-08',
            'tel'                    => '0699998775',
            'email'                  => 'achraf@jacobi.com',
            'password'               => bcrypt('hello'),
            'passport'               => '12SD48483 1',
            'passport_expMonth'      => '05',
            'passport_expYear'       => '2060',
            'cin'                    => '19654812333',
            'cin_valideMonth'        => '09',
            'cin_valideYear'         => '2018',
            'type'                   => 'admin',
            'departement'            => 'info',
            'code_imputation'        => '18659626',
            'code_etablissement'     => '65615',
            'site_id'                => 1,
            'responsable'            => 2,
            'car_transmission'       => 'automatic',
            'car_carburant'          => 'escence',
            'flight_seat'            => 'couloir',
        ]);

        DB::table('users')->insert([
            'firstname'              => 'ali',
            'lastname'               => 'jacobi',
            'date_naissance'         => '1996-02-09',
            'tel'                    => '0686786999',
            'email'                  => 'ali@jacobi.com',
            'password'               => bcrypt('hello'),
            'passport'               => '118SQ9QB 1',
            'passport_expMonth'      => '09',
            'passport_expYear'       => '2050',
            'cin'                    => '1943788373',
            'cin_valideMonth'        => '08',
            'cin_valideYear'         => '2019',
            'type'                   => 'admin',
            'departement'            => 'info',
            'code_imputation'        => '46378637',
            'code_etablissement'     => '737373',
            'site_id'                => 2,
            'responsable'            => 1,
            'car_transmission'       => 'automatic',
            'car_carburant'          => 'gazoil',
            'flight_seat'            => 'hublot',
        ]);
        
        $this->call(HotelsTableSeeder::class);
        $this->call(SitesTableSeeder::class);

    }
}
