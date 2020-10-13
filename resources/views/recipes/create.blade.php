@extends('layouts.app2')

@section('content')

<div class="container">
<h1>New Recipe</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<form method="POST" action="/recipes">
  @csrf


  <div class="field">
    <label for="name">Name</label>
    <div class="control">
      <input class="form-control input {{ $errors->has('name') ? 'is-danger' : '' }}" type="text" name="name" value="{{ @old('name') }}" id="name" placeholder="Recipe name">
    </div>
  </div>

  <div class="field">
    <label for="image">Image</label>
    <div class="control">
      <input class="form-control input {{ $errors->has('image') ? 'is-danger' : '' }}" type="text" name="image" value="{{ @old('image') }}" id="image" placeholder="/images/chicken.jpg">
    </div>
  </div>

  <div class="row">
    <div class="field form-group col">
      <label for="serves">Serves</label>
      <div class="control">
        <select class="form-control input" id="serves" name="serves">
          <option>1</option>
          <option>2</option>
          <option selected>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
  </div>

    <div class="form-group col">
      <label for="rating">Rating</label>
      <select class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating">
        <option>1</option>
        <option>2</option>
        <option selected>3</option>
        <option>4</option>
        <option >5</option>
      </select>
    </div>

    <div class="form-group col">
      <label for="prepTime">PrepTime</label>
      <input type="text" class="form-control @error('prepTime') is-invalid @enderror" id="prepTime" name="prepTime" placeholder="15 mins">
    </div>
  </div>

    <div class="control form-group">
      <label for="ingredients">Ingredients</label>
      <textarea class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" rows="10"></textarea>

    </div>

    <div class="field form-group">
      <label for="steps">Steps</label>
      <div class="control">
        <textarea class="form-control @error('steps') is-invalid @enderror" id="steps" name="steps" rows="15"></textarea>
      </div>

    </div>

     <div class="field is-grouped">
       <div class="control">
         <button class="button is-link btn btn-primary" type="submit" name="button">Submit Recipe</button>
       </div>
     </div>
   </form>
</div>
@endsection
