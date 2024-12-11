<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_path',
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'authors_id');
    }
}
