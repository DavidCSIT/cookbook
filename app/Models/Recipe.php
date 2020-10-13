<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'serves',
        'rating',
        'prepTime',
        'ingredients',
        'steps'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
