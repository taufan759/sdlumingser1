<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';

    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class, 'authors_id');
    }
}
