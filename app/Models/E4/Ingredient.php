<?php

namespace App\Models\E4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    
    use HasFactory;


    protected $primaryKey = 'id';
    
    protected $fillable = [
            'name',
            'servings',
            'instructions',
    ];

    public function ingredientRecipes(){
        return $this->hasMany(IngredientRecipe::class);
    }

    


}
