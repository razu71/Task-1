<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'rir.cse.71@gmail.com',
            'email' => 'rir.cse.71@gmail.com',
            'password' => '123456'
        ]);
    }
}
