<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $facteur_tva = 1.2;

    public function relation_categ()
    {
        return $this->belongsTo(Category::class,'foreign_key', 'local_key');
    }

    public function relation_shop()
    {
        return $this->belongsTo(Shop::class,'foreign_key', 'local_key');
    }

    public function prixTTC(){
        $prix_ttc = $this->price * self::$facteur_tva;
        return number_format($prix_ttc,2);
    }
}
