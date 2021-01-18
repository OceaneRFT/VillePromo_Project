<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function relation_prodOrd()
    {
        return $this->hasMany(Product::class,'foreign_key', 'local_key');
      
    }

    public function relation_boutOrd()
    {
        return $this->morphOne(User::class, 'imageable');
    }
}
