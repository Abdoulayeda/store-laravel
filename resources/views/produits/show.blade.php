@extends('parent.master')

@section('contenu')

<div class="row mt-4">

<div class="card">
    <div class="card-title">
        <h3>
            {{ $produit->nom }}
        </h3>
    </div>

    <div class="img">
        <img src="{{ asset('images/'.$produit->image )}}" alt="" width="420" height="400">
    </div>

    <div style="font-size: 2rem">
        {{ $produit->description }}
    </div>

    <div style="font-size: 3rem" class="text-primary" >
      Prix:  {{ $produit->formattedPrice() }} F CFA
    </div>
    <div style="font-size: 2rem">
     Crée le:  {{  $produit->created_at }}
    </div>

    <div style="font-size: 2rem">
    Modifié le:    {{ $produit->updated_at }}
    </div>

</div>

</div>



@endsection
