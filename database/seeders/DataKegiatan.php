<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataKegiatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kegiatans')->insert([
            'nama_kegiatan' => 'Lomba Essay',
            'poster_postingan' => 'lombaessay.jpg',
            'jenis_kegiatan' => '2',
            'tanggal' => '2023-06-15',
            'lokasi' => 'DSI ITS',
            'caption' => 'JADWAL PENGISIAN: SELASA, 27 SEPTEMBER 2022 18.00 - RABU, 28 SEPTEMBER 2022 PUKUL 18.00.00 WIBTerima kasih',
            'ig_pelaksana' => '@lomba_essay',
            'email_pelaksana' => 'lombaessay@gmail.com',
            'link_pendaftaran' => 'www.google.com',
            'benefit' => 'Dapat pahala'
        ]);
        DB::table('kegiatans')->insert([
            'nama_kegiatan' => 'Beasiswa KIP-K',
            'poster_postingan' => 'beasiswa1.jpg',
            'jenis_kegiatan' => '1',
            'tanggal' => '2023-06-15',
            'lokasi' => 'Online',
            'caption' => 'JADWAL PENGISIAN: SELASA, 27 SEPTEMBER 2022 18.00 - RABU, 28 SEPTEMBER 2022 PUKUL 18.00.00 WIBTerima kasih',
            'ig_pelaksana' => '@kemendikbud',
            'email_pelaksana' => 'kemendikbud@gmail.com',
            'link_pendaftaran' => 'intip.in/adhebdkjdbascb',
            'benefit' => 'Dapat Uang 500jt'
        ]);
        DB::table('kegiatans')->insert([
            'nama_kegiatan' => 'Volunteer Teman Bicara',
            'poster_postingan' => 'volunteer1.jpg',
            'jenis_kegiatan' => '4',
            'tanggal' => '2023-06-17',
            'lokasi' => 'Surabaya',
            'caption' => 'JADWAL PENGISIAN: SELASA, 27 SEPTEMBER 2022 18.00 - RABU, 28 SEPTEMBER 2022 PUKUL 18.00.00 WIBTerima kasih',
            'ig_pelaksana' => '@temanbicaraa',
            'email_pelaksana' => 'temanbicara@gmail.com',
            'link_pendaftaran' => 'intip.in/temanbicara',
            'benefit' => 'Sertifikat'
        ]);
        DB::table('kegiatans')->insert([
            'nama_kegiatan' => 'Webinar start up',
            'poster_postingan' => 'webinar1.jpg',
            'jenis_kegiatan' => '3',
            'tanggal' => '2023-06-19',
            'lokasi' => 'Online',
            'caption' => 'JADWAL PENGISIAN: SELASA, 27 SEPTEMBER 2022 18.00 - RABU, 28 SEPTEMBER 2022 PUKUL 18.00.00 WIBTerima kasih',
            'ig_pelaksana' => '@webinarsu_',
            'email_pelaksana' => 'webinarsu@gmail.com',
            'link_pendaftaran' => 'intip.in/websu',
            'benefit' => 'Uang jajan'
        ]);
    }
}