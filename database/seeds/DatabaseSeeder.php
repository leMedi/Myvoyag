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
            'firstname' => 'achraf',
            'lastname' => 'jacobi',
            'email' => 'achraf@jacobi.com',
            'password' => bcrypt('hello'),
            'departement' => 'info',
            'type' => 'admin',
        ]);

        DB::table('users')->insert([
            'firstname' => 'ali',
            'lastname' => 'jacobi',
            'email' => 'ali@jacobi.com',
            'password' => bcrypt('hello'),
            'departement' => 'info',
            'type' => 'admin',
        ]);
        
        $this->call(HotelsTableSeeder::class);
    }
}
