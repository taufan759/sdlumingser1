<?php

namespace App\Models;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PharIo\Manifest\Author;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primary = 'id_title';
    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
