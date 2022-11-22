<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


//Ruta agregada para poder instanciar...
use App\Models\E4\Recipe;


class RecipeTest extends TestCase
{
    

    /** @test */
   public function a_recipe_has_a_name()
   {
       $recipe = new Recipe();

       $recipe->name = "agua hervida";
       $recipe->save();

       
       $this->assertEquals("agua hervida", $recipe->name);
   }

}
