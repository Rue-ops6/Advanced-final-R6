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

    #<!------Topics are the CHILD = belongs to categories-------¡>
    public function category()
    { #<!------function "CATEGORY" ===  relation name when $topic calls table cat-------¡>
        return $this->belongsTo(Category::class, 'catID');
    }
}
