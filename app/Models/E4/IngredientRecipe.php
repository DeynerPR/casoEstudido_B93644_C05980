<?php

namespace App\Models\E4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientRecipe extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
            'id_recipe',
            'id_ingredient',
            'quantity',
            'unit_measurement',
    ];

    public function recipe(){
        return $this->belongsTo(Recipe::class, 'id_recipe');
    }
    


}
