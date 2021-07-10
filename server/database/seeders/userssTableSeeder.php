<?php

namespace Database\Seeders;
use App\Models\User;
use Database\Seeders\Hash;

use Illuminate\Database\Seeder;

class userssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test1',
            'email' => 'test1@test.com',
            'password' => 'testtest'
        ]);
    }
}
