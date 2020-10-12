<?php

namespace App\Http\Controllers;
use Auth;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = recipe::all();
        return view('recipes.index', ['recipes'=>$recipes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd($request);
      request()->validate([
         'name'=> 'required',
         'image'=> 'required',
         'serves'=> 'required',
         'rating'=> 'required',
         'prepTime'=> 'required',
         'ingredients'=> 'required',
         'steps'=> 'required'
       ]);

      $recipe = new Recipe();
      $recipe->name = request('name');
      $recipe->serves =  request('serves');
      $recipe->image =  request('image');
      $recipe->rating =  request('rating');
      $recipe->prepTime =  request('prepTime');
      $recipe->ingredients =  request('ingredients');
      $recipe->steps =  request('steps');
      $recipe->user_id =  Auth::user()->id;
      $recipe->save();

      return redirect('/recipes');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(recipe $recipe)
    {
      //$recipe = recipe::find($id);
      return view('recipes.show', ['recipe'=>$recipe]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(recipe $recipe)
    {
        return view('recipes.edit', ['recipe'=>$recipe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recipe $recipe)
    {
      // dd($request);
      request()->validate([
        'name'=> 'required',
        'image'=> 'required',
        'serves'=> 'required',
        'rating'=> 'required',
        'prepTime'=> 'required',
        'ingredients'=> 'required',
        'steps'=> 'required'
      ]);

      $recipe->update($request->all());

    // return redirect('recipes/1' . $recipe->id);
     return redirect('recipes');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(recipe $recipe)
    {
        $recipe->delete();
        return redirect('recipes');
    }
}
