<?php

use Illuminate\Database\Seeder;

class Roles_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles_users')->insert([
        	'users_id'=>'1',
        	'roles_id'=>'1'
          ]);

         DB::table('roles_users')->insert([
        	'users_id'=>'2',
        	'roles_id'=>'2'
          ]);
    }
}
