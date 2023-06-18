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
        DB::table('users')->insert(
            [
                'nama_user' => 'User Infocity',
                'kode_user' => 0,
                'email' => 'user@gmail.com',
                'username' => 'userinfocity',
                'no_telp' => '081234567891',
                'password' => bcrypt('user123'),
            ]
        );
        DB::table('users')->insert(
            [
                'nama_user' => 'Inggrit',
                'kode_user' => 0,
                'email' => 'inggrit@gmail.com',
                'username' => 'inggrit123',
                'no_telp' => '081234567891',
                'password' => bcrypt('inggrit123'),
            ]
        );
    }
}
