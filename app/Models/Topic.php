<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = [
        'topicTitle',
        'content',
        'image',
        'views',
        'published',
        'catID',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'catID');
    }
}
