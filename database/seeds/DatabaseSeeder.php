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
            'firstname'     => 'achraf',
            'lastname'      => 'jacobi',
            'email'         => 'achraf@jacobi.com',
            'password'      => bcrypt('hello'),
            'departement'   => 'info',
            'type'          => 'admin',
            'numPass'       => '12SD48483 1',
            'avatar'        => '1515864362.jpg',
            'tel'           => '0699998775'
        ]);

        DB::table('users')->insert([
            'firstname'     => 'ali',
            'lastname'      => 'jacobi',
            'email'         => 'ali@jacobi.com',
            'password'      => bcrypt('hello'),
            'departement'   => 'info',
            'type'          => 'admin',
            'numPass'       => '89SD47483 1',
            'tel'           => '0675886690'
        ]);
        
        $this->call(HotelsTableSeeder::class);
        $this->call(SitesTableSeeder::class);

    }
}
