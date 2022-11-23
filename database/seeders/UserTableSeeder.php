<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use illuminate\support\str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('users')->insert([

            'name' => 'Admin Wirton',
            'email'=> 'adminwirton@gmail.com',
            'email_verified_at'=> now(),
            'remember_token' => Str::random(10),
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s"),
            
                ]);
    }
}
