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
        <li class="nav-item active">
          <a class="nav-link" href="/recipes">List <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/recipes/create">New</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

<div class="container">
<h1>All the Recipes</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Serves</td>
            <td>Rating</td>
            <td>PrepTime</td>
            <td>Ingredients</td>
            <td>Steps</td>
            <td>Update</td>
        </tr>
    </thead>
    <tbody>
    @foreach($recipes as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->serves }}</td>
            <td>{{ $value->rating }}</td>
            <td>{{ $value->prepTime }}</td>
            <td>{{ $value->ingredients }}</td>
            <td>{{ $value->steps }}</td>
            <td>
                <form action="recipes/{{$value->id}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <a class="mt-1 mx-auto btn btn-small btn-success" href="recipes/{{$value->id}}">Show this recipe</a>
                  <a class="mt-1 mx-auto btn btn-small btn-info" href="recipes/{{$value->id}}/edit">Edit this recipe</a>

                  <button type="submit" title="delete" class="mt-1 mx-auto btn btn-small btn-danger" >Delete this recipe</button>
              </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
