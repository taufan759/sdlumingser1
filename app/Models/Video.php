<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';

    protected $fillable = [
        'title',
        'youtube_url',
    ];

    public function guru()
    {
        return $this->belongsTo(User::class, 'authors_id');
    }
}
