<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        $categories = Categorie::all();
        return view('home', compact('produits', 'categories'));
    }

    public function detailproduit($id){
        $produit=Produit::find($id);
        return view('detailproduit')->with('produit',$produit);
    }
    public function detailcategorie($id){
        $categorie = Categorie::find($id);
     //   $produits=Produit::all();
        return view('detailcategorie')->with(compact('categorie'));
    }
}
