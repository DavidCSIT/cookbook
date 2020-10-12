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
  <h1>{{$recipe->name}}</h1>

<div class="jumbotron ">
  <p>
      <strong>Image</strong> {{$recipe->image}}<br>
      <strong>Serves</strong> {{$recipe->serves}}<br>
      <strong>Rating</strong> {{$recipe->rating}}<br>
      <strong>PrepTime</strong> {{$recipe->prepTime}}<br>
      <strong>Rating</strong> {{$recipe->rating}}<br>
  </p>
  <h4>Ingredients</h4>
   <p>
    {{$recipe->ingredients}}
  </p>
  <h4>Steps</h4>
  <p>
    {{$recipe->steps}}
  </p>
</div>
</body>
</html>
