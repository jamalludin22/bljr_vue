<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 5; $i++):
        $Faker = Faker::create();
        DB::table('users')->insert([
            'name' => $Faker->name,
            'email' => $Faker->email,
            'password' => Hash::make('qwerty'),
        ]);
    endfor;
    }
}
