<!DOCTYPE>
<html lang="fr">
<head>
    <title>Les produits</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .icons {
            display: grid;
            max-width: 100%;
            grid-template-columns: repeat(auto-fit, minmax(100px, 1fr) );
            gap: 1.25rem;
        }
        .icon {
            background-color: var(--bs-light);
            border-radius: .25rem;
        }
        .bi {
            margin: .25rem;
            font-size: 2.5rem;
        }
        .label {
            font-family: var(--bs-font-monospace);
        }
        .label {
            display: inline-block;
            width: 100%;
            overflow: hidden;
            padding: .35rem;
            font-size: .625rem;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>

</head>
<body>
<div class="">
    @if(session('createproduit'))
        <div class="alert alert-success" role="alert">
            {{ session('createproduit') }}
        </div>
    @endif
    @if(session('deleteproduit'))
        <div class="alert alert-danger" role="alert">
            {{ session('deleteproduit') }}
        </div>
    @endif
        @if(session('updateproduit'))
            <div class="alert alert-primary" role="alert">
                {{ session('updateproduit') }}
            </div>
        @endif
</div>
<div class="container ">
    <h1 class="text-center">Les produits</h1>
    <div class="text-right">
        <a href="{{ route('produits.create') }}" class="btn btn-primary" style="font-size: 20px">Ajouter un produit</a>
    </div>
</div>

<div class="col-lg-12 mt-4">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead class="table-dark" >
                <tr>
                    <th>Numéro</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Prix</th>
                    <th>Categorie</th>
                    <th>Créer le</th>
                    <th>Modifier le</th>
                    <th></th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($produits as $key => $produit)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{ $produit->nom    }}</td>
                        <td>{{ $produit->description }}</td>
                        <td>
                            <img src="{{ asset('images/'.$produit->image )}}" alt="" width="120" height="100">
                        </td>
                        <td>{{ $produit->formattedPrice() }} F CFA</td>
                        <td>{{ $produit->categorie->nom }}</td>
                        <td>{{ $produit->created_at }}</td>
                        <td>{{ $produit->updated_at }}</td>
                        <td>
                            <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-success" >
                                <div class="icon" >
                                    <i class="bi bi-eye-fill" style="font-size: 30px "></i>
                                </div>
                            </a>
                        </td>
                            <td>
                                <div class="btn btn-warning">
                                    <a href="{{ route('produits.edit', $produit->id) }}">
                                        <div class="icon" >
                                            <i class="bi bi-pencil-fill" style="font-size:30px"></i>
                                        </div>
                                    </a>
                                </div>
                            </td>
                            <td>
                            <form action=" {{ route('produits.destroy', $produit->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">
                                    <div class="icon">
                                        <i class="bi bi-trash" style="font-size:30px "></i>
                                    </div>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
