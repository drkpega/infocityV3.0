<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_kegiatan',
        'poster_postingan',
        'tanggal',
        'lokasi',
        'caption',
        'ig_pelaksana',
        'email_pelaksana',
        'link_pendaftaran',
        'benefit',
    ];
}