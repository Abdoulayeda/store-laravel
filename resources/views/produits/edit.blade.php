@extends('parent/master')

@section('contenu')

    <form action="{{ route('produits.update' , $produit->id) }}" method="post">
        @csrf
        @method('PUT')
          <div class="form-group">
              <label for="">Nom</label> <br>
              <input type="text" name="nom" value="{{ $produit->nom }}" class="form-control">

          </div>


        <div class="form-group">
            <label for="">Description</label> <br>
            <input type="text" name="description" value="{{ $produit->description }}" class="form-control">

        </div>


        <div class="form-group">
            <label for="">Prix</label> <br>
            <input type="text" name="prix" value="{{ $produit->prix}}" class="form-control">

        </div>

        <div class="form-group">
            <select name="categorie" class="col-lg-3">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group file">
            <img src="{{ asset('images/'.$produit->image )}}" alt="" width="120" height="100">

            <input type="file" name="image" value="{{ $produit->image }}" class="form-control">

        </div>


        <div class="form-group">

           <button class="btn btn-success">Enregistrer</button>

        </div>


    </form>



@endsection
