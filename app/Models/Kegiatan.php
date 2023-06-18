<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = "kegiatans";

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_kegiatan',
        'poster_postingan',
        'jenis_kegiatan',
        'tanggal',
        'lokasi',
        'caption',
        'ig_pelaksana',
        'email_pelaksana',
        'link_pendaftaran',
        'benefit',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class, 'favorites', 'user_id', 'kegiatan_id');
    }
}