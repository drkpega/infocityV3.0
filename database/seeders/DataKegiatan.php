<?php

namespace Database\Seeders;

use App\Models\Kegiatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataKegiatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kegiatan::table('pegawai')->insert([
        //     'nama_kegiatan' => 'Lomba Essay',
        //     'poster_postingan' => 'lombaessay.png',
        //     'jenis_kegiatan' => 'Lomba',
        //     'tanggal' => '2023-06-15',
        //     'lokasi' => 'DSI ITS',
        //     'caption' => '[KUESIONER #3] Halo teman-teman (), kami dari Fundraising ingin meminta bantuan kalian untuk mengisi kuesioner sebagai berikut: JADWAL PENGISIAN: SELASA, 27 SEPTEMBER 2022 18.00 - RABU, 28 SEPTEMBER 2022 PUKUL 18.00.00 WIB 1. Mengisi kuesioner pada link yang telah tersedia https://intip.in/SurveyPenggunaMedsos 2. Upload bukti SS apabila telah mengisi form ke link: https://forms.gle/Rp4EbhRBjVwf2VtTA Diisi yaa jangan sampai kena denda. Terima kasih😊',
        //     'ig_pelaksana' => '@lomba_essay',
        //     'email_pelaksana' => 'lombaessay@gmail.com',
        //     'link_pendaftaran' => 'www.google.com',
        //     'benefit' => 'Dapat pahala'
        // ]);
    }
}