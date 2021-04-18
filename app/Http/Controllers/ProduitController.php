<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Categorie;
use Symfony\Component\Console\Input\Input;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::orderBy('id','DESC')->get();
        return view('produits.index')->with(compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Categorie::all();
       return view('produits.create')->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description= $request->description;
        $produit->prix = $request->prix;
        $produit->categories_id= $request->categorie;

     /*   $image = $request->file('image');
        $extension =$image->getClientOriginalExtension();
        $nomimage ='produit'.time().uniqid().'.'.$extension;
        $path = $image->storeAS('imageproduits', $nomimage);
        $produit->image= $nomimage;*/

      if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename='produit'.time().'.'.$extension;
            $file->move('images/',$filename);
            $produit->image = $filename;
        } else{
            return $request;
            $produit->image= '';
        }

        $produit->save();

        return redirect()->route('produits.index')->with('createproduit', 'Le produit à été créé avec success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit =Produit::find($id);
        return view('produits.show')->with('produit',$produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categorie::all();
        $produit=Produit::find($id);
        return view('produits.edit')->with((compact('produit', 'categories')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $produit =Produit::find($id);
       $produit->nom= $request->nom;
       $produit->description = $request->description;
       $produit->prix= $request->prix;
/*
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename='produit'.time().'.'.$extension;
            $file->move('images/',$filename);
            $produit->image = $filename;
        } else{
            return $request;
            $produit->image= '';
        }*/


       $produit->save();
       return redirect()->route('produits.index')->with('updateproduit', 'Le produit a été modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->route('produits.index')->with('deleteproduit', 'Produit supprimé avec succes');
    }
}
