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
        	'name'=>'Juan',
        	'lastName'=>'Lopez',
        	'user'=>'Administrador',
        	'email'=>'juan@gmail.com',
        	'photo'=>'',
        	'password'=>bcrypt('1234')

        ]);



        DB::table('users')->insert([
        	'name'=>'Ana',
        	'lastName'=>'Rosas',
        	'user'=>'Anita90',
        	'email'=>'anaR@gmail.com',
        	'photo'=>'',
        	'password'=>bcrypt('0987')

        ]);
    }
 }

