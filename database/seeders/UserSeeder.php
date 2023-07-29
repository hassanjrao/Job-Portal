<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::firstOrCreate([
            "email"=>"admin@m.com"
        ],[
            "name"=>"admin",
            "password"=>bcrypt("password"),
            "email"=>"admin@m.com"
        ]);

        $admin->assignRole("admin");
    }
}
