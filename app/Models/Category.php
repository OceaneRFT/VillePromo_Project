<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function relation_prod()
    {
        return $this->hasMany(Product::class,'foreign_key', 'local_key');
    }
}
