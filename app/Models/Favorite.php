<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
    ];

    protected $table = "favorite";
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}