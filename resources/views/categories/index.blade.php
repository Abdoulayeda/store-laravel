<!DOCTYPE>
<html lang="fr">
<head>
    <title>Les categories</title>

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
<div class="container ">
    <h1 class="text-center">Nos categories</h1>
    <div class="text-right">
        <a href="{{ route('categories.create') }}" class="btn btn-primary" style="font-size: 20px">Ajouter une categorie</a>
    </div>
</div>
<p>
@if(session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
@if(session('messagedelete'))
    <div class="alert alert-danger" role="alert">
        {{ session('messagedelete') }}
    </div>
@endif
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped">
                <thead class="table-dark" >
                <tr>
                    <th>Nom</th>
                    <th>Date</th>
                    <th>Modifier le</th>
                    <th></th>
                    <th class="text-right">Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->nom  }}</td>
                        <td>{{ $categorie->created_at }}</td>
                        <td>{{ $categorie->updated_at }}</td>
                        <td>
                            <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-success" >
                                <div class="icon" >
                                    <i class="bi bi-eye-fill" style="font-size: 30px "></i>
                                </div>
                            </a></td>
                        <td>
                            <div class="btn btn-warning">
                                <a href="{{ route('categories.edit', $categorie->id) }}">
                                    <div class="icon" >
                                        <i class="bi bi-pencil-fill" style="font-size:30px "></i>
                                    </div>
                                </a>
                            </div>
                            </td>
                        <td>

                    <form action="{{ route('categories.destroy', $categorie->id)}}" method="post">
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
