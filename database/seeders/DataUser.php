<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // insert data ke table pegawai
        DB::table('users')->insert(
            [
                'nama_user' => 'Admin Infocity',
                'kode_user' => 1,
                'email' => 'infocity@gmail.com',
                'username' => 'admininfocity',
                'password' => bcrypt('admin123'),
            ]
        );
    }
}