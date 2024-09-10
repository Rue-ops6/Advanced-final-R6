<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catID',
        ];


        public function student() {
            return $this->hasMany(Topic::class, 'catID');
        }
}
