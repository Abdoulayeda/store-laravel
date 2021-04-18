

@extends('parent.master')

@section('contenu')

    {{ $categorie->nom }}
    <div class="container" style="background-color: darkcyan">
        <div class="row">

            @foreach($categorie->produits as $produit)
                <div class="col-lg-3 mt-4">
                    <a href="{{route('produit',$produit->id)}}"> <strong>{{$produit->nom}}</strong></a>
                    <div class="card img-fluid">
                        <img src="{{ asset('images/'.$produit->image )}}" alt="" width="220" height="200">
                    </div>
                    <div class="card-body">

                        <p> {{$produit->description}}</p>
                        <span class="text-primary" style="font-size: 1.5rem">Prix: {{$produit->prix}} FCFA</span>
                    </div>


                    <div  class="textt-center" >
                        <a href="">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

            @endforeach



        </div>
    </div>

@endsection

