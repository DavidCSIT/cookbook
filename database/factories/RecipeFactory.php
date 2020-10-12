<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->word,
          'image' => $this->faker->image,
          'serves' => $this->faker->randomDigit,
          'rating' => $this->faker->randomDigit,
          'prepTime' => $this->faker->randomDigit,
          'ingredients' => $this->faker->paragraph,
          'steps' => $this->faker->paragraph,
          'created_at' => now(),
          'updated_at' => now(),
          'user_id' => 1
        ];
    }
}
