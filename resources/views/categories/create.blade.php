@extends('parent.master')
@section('contenu')
    <div>
       {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif--}}
    </div>

    <div class="col-lg-6">

        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <h2>Création de catégorie</h2>
            <div class="form-group">
                <label for="">Nom de la categorie</label>
                <input type="text" name="nom" class="form-control" value="{{old('nom')}}">
                {{--            old() permet de recuperer le saisi de l'utilisateur--}}
            </div>
            @error('nom')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <div class="form-group">
                <button class="btn btn-success">Enregistrer </button>
            </div>
        </form>

    </div>
@endsection
