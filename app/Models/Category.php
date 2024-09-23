<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'catName',
    ];

#<!------category is the PARENT = has many topics-------¡>
    public function topics()
    {
        return $this->hasMany(Topic::class, 'catID');
    }
}
