<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    public function relation_user()
    {
        return $this->hasOne(User::class);
    }

    public function relation_prodShop()
    {
        return $this->hasMany(Product::class,'foreign_key', 'local_key');
      
    }
}
