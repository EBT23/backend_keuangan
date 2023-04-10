<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Joe Biden',
                'email' => 'jobiden@example.com',
                'password' => bcrypt('12345678'),
                'no_identitas' => '32351206970001',
                'tempat_lahir' => 'New York',
                'tgl_lahir' => '1945-18-117',
                'no_rek' => '169789831',
                'role_id' => '3',
                'posisi_id' => '15',
            ],
        ]);
    }
}
