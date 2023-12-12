<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Saving extends Model
{
    use HasFactory;
    protected $table = 'saving';
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'authors_id');
    }
}
