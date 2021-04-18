@extends('parent.master')

@section('contenu')

    <div class="container" >
        <div class="row">

                <div class="col-lg-5">
                    <strong>{{$produit->nom}}</strong>
                        <img src="{{ asset('images/'.$produit->image )}}" alt="" width="420" height="400">
                    <p> {{$produit->description}}</p>
                        <span class="text-primary" style="font-size: 1.5rem">Prix: {{$produit->prix}} FCFA</span>
                        <a href="">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>

                </div>
            <div class="col-lg-8 mt-5">
                <h2>Contacter nous</h2>
                <form action="">
                    @csrf
                    <label for="">Nom</label>
                    <input type="text" class="form-control">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                    <label for="">Phone</label>
                    <input type="text" class="form-control">
                    <button class="btn btn-primary">Contacter</button>
                </form>
            </div>


        </div>
    </div>

@endsection

