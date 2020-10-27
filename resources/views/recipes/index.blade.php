@extends('layouts.app2')

@section('content')

<div class="container-fluid">
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
            <td>Picture</td>
            <td>Serves</td>
            <td>Rating</td>
            <td>PrepTime</td>
            <td>Ingredients</td>
            <td>Steps</td>
            <td>Recipe by</td>
            <td></td>
        </tr>
    </thead>
    <tbody>
    @foreach($recipes as $recipe)
        <tr>
            <td>{{ $recipe->id }}</td>
            <td>{{ $recipe->name }}</td>
            <td> <img src="{{ $recipe->image }}" alt=""> </td>
            <td>{{ $recipe->serves }}</td>
            <td>{{ $recipe->rating }}</td>
            <td>{{ $recipe->prepTime }}</td>
            <td>{{ $recipe->ingredients }}</td>
            <td>{{ $recipe->steps }}</td>
            <td>{{ $recipe->user->name }}</td>


              <td>
                <form action="recipes/{{$recipe->id}}" method="POST">
                  @method('DELETE')

                  <a class="mt-1 mx-auto btn btn-small btn-success" href="recipes/{{$recipe->id}}">Show this recipe</a>

                  @auth
                  <a class="mt-1 mx-auto btn btn-small btn-info" href="recipes/{{$recipe->id}}/edit">Edit this recipe</a>
                  @endauth

                  @can('update-recipe', $recipe)
                  @csrf
                  <button type="submit" title="delete" class="mt-1 mx-auto btn btn-small btn-danger" >Delete this recipe</button>
                  @endcan

                </form>
              </td>

        </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection
