<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@dh-movies.com',
            'password' => bcrypt('12345678'),
            'role_id' => 1,
        ]);
    }
}
