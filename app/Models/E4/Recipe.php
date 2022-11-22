<?php

namespace App\Models\E4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
            'name',
    ];

    public function ingredientRecipes(){
        return $this->hasMany(IngredientRecipe::class);
    }


}
