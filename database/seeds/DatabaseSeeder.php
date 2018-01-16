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
        $this->call(HotelsTableSeeder::class);
        $this->call(SitesTableSeeder::class);
        
        DB::table('users')->insert([
            'firstname'              => 'Achraf',
            'lastname'               => 'ELYaacoubi',
            'date_naissance'         => '1996-10-08',
            'tel'                    => '0699998775',
            'email'                  => 'achraf.jacobi@gmail.com',
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
            'avatar'                 => 'achraf.jpg'
        ]);

        DB::table('users')->insert([
            'firstname'              => 'Ali',
            'lastname'               => 'Jacobi',
            'date_naissance'         => '1996-02-09',
            'tel'                    => '0686786999',
            'email'                  => 'ali.jacobi@gmail.com',
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
            'avatar'                 => 'ali.jpg'
            
        ]);

        DB::table('users')->insert([
            'firstname'              => 'Youness',
            'lastname'               => 'Saqi',
            'date_naissance'         => '1996-05-09',
            'tel'                    => '0699743355',
            'email'                  => 'youness.saqi@gmail.com',
            'password'               => bcrypt('hello'),
            'passport'               => '19CC874 1',
            'passport_expMonth'      => '06',
            'passport_expYear'       => '2029',
            'cin'                    => '987456321',
            'cin_valideMonth'        => '09',
            'cin_valideYear'         => '2025',
            'type'                   => 'salarier',
            'departement'            => 'gestion',
            'code_imputation'        => '987561',
            'code_etablissement'     => '989897',
            'site_id'                => 1,
            'responsable'            => 2,
            'car_transmission'       => 'automatic',
            'car_carburant'          => 'gazoil',
            'flight_seat'            => 'hublot',
            'avatar'                 => 'youness.jpg'
            
        ]);

        DB::table('users')->insert([
            'firstname'              => 'Amal',
            'lastname'               => 'Nahiz',
            'date_naissance'         => '1993-02-09',
            'tel'                    => '0661457789',
            'email'                  => 'amal.jacobi@gmail.com',
            'password'               => bcrypt('hello'),
            'passport'               => '9eB88C 1',
            'passport_expMonth'      => '08',
            'passport_expYear'       => '2026',
            'cin'                    => '1998745',
            'cin_valideMonth'        => '06',
            'cin_valideYear'         => '2023',
            'type'                   => 'gestionnaire',
            'departement'            => 'proceder',
            'code_imputation'        => '9873214',
            'code_etablissement'     => '852647',
            'site_id'                => 2,
            'responsable'            => 1,
            'car_transmission'       => 'automatic',
            'car_carburant'          => 'gazoil',
            'flight_seat'            => 'hublot',
            'avatar'                 => 'amal.jpg'
            
        ]);


        DB::table('users')->insert([
            'firstname'              => 'Yassine',
            'lastname'               => 'Abouche',
            'date_naissance'         => '1996-10-08',
            'tel'                    => '0699998775',
            'email'                  => 'y.abouch@gmail.com',
            'password'               => bcrypt('hello'),
            'passport'               => '12SD484',
            'passport_expMonth'      => '05',
            'passport_expYear'       => '2060',
            'cin'                    => '19654552333',
            'cin_valideMonth'        => '09',
            'cin_valideYear'         => '2018',
            'type'                   => 'responsable',
            'departement'            => 'info',
            'code_imputation'        => '18659626',
            'code_etablissement'     => '65615',
            'site_id'                => 1,
            'responsable'            => 2,
            'car_transmission'       => 'automatic',
            'car_carburant'          => 'escence',
            'flight_seat'            => 'couloir',
            'avatar'                 => 'youness.jpg'
        ]);

        DB::table('users')->insert([
            'firstname'              => 'Ahmed',
            'lastname'               => 'Kousta',
            'date_naissance'         => '1996-10-08',
            'tel'                    => '0699998775',
            'email'                  => 'a.kousta@gmail.com',
            'password'               => bcrypt('hello'),
            'passport'               => '12SD484',
            'passport_expMonth'      => '05',
            'passport_expYear'       => '2060',
            'cin'                    => '19654042333',
            'cin_valideMonth'        => '09',
            'cin_valideYear'         => '2018',
            'type'                   => 'responsable',
            'departement'            => 'info',
            'code_imputation'        => '18659626',
            'code_etablissement'     => '65615',
            'site_id'                => 1,
            'responsable'            => 2,
            'car_transmission'       => 'automatic',
            'car_carburant'          => 'escence',
            'flight_seat'            => 'couloir',
            'avatar'                 => 'youness.jpg'
        ]);



        

    }
}
