<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <meta charset="utf8">
    <title>Création de catégorie</title>
</head>
<body>

<div class="container">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="card">

                  <form action="{{ route('categories.update', $categorie->id) }}" method="post">
                      @method('PUT')
                      @csrf
                      <h2>Création de catégorie</h2>
                      <div class="form-group">
                          <label for="">Nom de la categorie</label>
                          <input type="text" name="nom" class="form-control" value="{{ $categorie->nom }}">
                      </div>
                      @error('nom')
                      <small class="text-danger">{{$message}}</small>

                  @enderror
                  </div>
                   <div class="form-group">
                     <button type="submit" class="btn btn-success">Modifier </button>
                    </div>
              </form>


              </div>
          </div>
      </div>
  </div>
</div>

</body>
</html>
