<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'email' => 'ccqwe123@qwe.qwe',
        //     'password' => Hash::make('ccqwe123'),
        //     'verify_code' => '123456',
        //     'reset_timer' => 130,
        //     'account_is_verified' => 1,
        //     'username' => 'ccqwe123',
        //     'first_name' => 'user',
        //     'last_name' => 'user',
        //     'details_is_provided' => 001

        // ]);
        DB::table('users')->insert([
            'email' => 'ccqwe123@qwe.qwe',
            'password' => Hash::make('ccqwe123'),
            'verify_code' => '123456',
            'reset_timer' => 130,
            'account_is_verified' => 1,
            'username' => 'ccqwe123',
            'first_name' => 'user',
            'last_name' => 'user',
            'details_is_provided' => 001
        ]);
    }
}
