<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Recipes App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/recipes">Recipes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/recipes">List <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/recipes/create">New</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

<div class="container">
<h1>Edit Recipe</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<form method="POST" action="/recipes/{{$recipe->id}} ">
  @method('PUT')
  @csrf

  <div class="field">
    <label for="name">Name</label>
    <div class="control">
      <input class="form-control input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" value="{{$recipe->name}}" id="name">
    </div>
  </div>

  <div class="field">
    <label for="image">Image</label>
    <div class="control">
      <input class="form-control input {{ $errors->has('image') ? 'is-danger' : '' }}" type="text" name="image" value="{{$recipe->image}}" id="image">
    </div>
  </div>

  <div class="row">
    <div class="field form-group col">
      <label for="serves">Serves</label>
      <div class="control">
        <select class="form-control input" id="serves" name="serves" ">
          <option {{ $recipe->serves == 1 ? 'selected' : '' }}>1</option>
          <option {{ $recipe->serves == 2 ? 'selected' : '' }}>2</option>
          <option {{ $recipe->serves == 3 ? 'selected' : '' }}>3</option>
          <option {{ $recipe->serves == 4 ? 'selected' : '' }}>4</option>
          <option {{ $recipe->serves == 5 ? 'selected' : '' }}>5</option>
          <option {{ $recipe->serves == 6 ? 'selected' : '' }} >6</option>
        </select>
      </div>
  </div>

    <div class="form-group col">
      <label for="rating">Rating</label>
      <select class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option >5</option>
      </select>
    </div>

    <div class="form-group col">
      <label for="prepTime">PrepTime</label>
      <input type="text" class="form-control @error('prepTime') is-invalid @enderror" id="prepTime" name="prepTime" value="{{$recipe->prepTime}}">
    </div>
  </div>

    <div class="control form-group">
      <label for="ingredients">Ingredients</label>
      <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" rows="10">{{$recipe->ingredients}}</textarea>
    </div>

    <div class="field form-group">
      <label for="steps">Steps</label>
      <div class="control">
        <textarea class="form-control @error('steps') is-invalid @enderror" id="steps" name="steps" rows="15">{{$recipe->steps}}</textarea>
      </div>
    </div>

     <div class="field is-grouped">
       <div class="control">
         <button class="button is-link btn btn-primary" type="submit" name="button">Submit Recipe</button>
       </div>
     </div>


</form>









</div>
</body>
</html>
