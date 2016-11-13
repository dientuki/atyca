<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Atyca',
            'email' => 'info@atyca.tur.ar',
            'password' => bcrypt('admin'),
            'fk_country' => 13,
            'business' => 'Atyca',
            'active' => true,
            'rol' => 1
        ]);


        DB::table('users')->insert([
            'name' => 'Atyca',
            'email' => 'dientuki@gmail.com',
            'password' => bcrypt('saludos'),
            'fk_country' => 13,
            'business' => 'Atyca',
            'active' => false
        ]);

    }
}
