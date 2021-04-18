<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;


    public function categorie()
    {

       // return $this->belongsTo('App\Model\Categorie', 'categorie_id');

    return $this->belongsTo(Categorie::class , 'categories_id');
    }


   /* public function imagePrincipale(): string
    {
        return asset('/storage/app/public/imageproduits/'.$this->image);
    }*/



    public function formattedPrice()
    {
        return number_format($this->prix,0, '', ' ') ;
    }
}
