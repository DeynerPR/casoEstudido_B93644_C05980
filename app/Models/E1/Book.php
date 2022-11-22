<?php

namespace App\Models\E1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Factory
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $fillable = [
           'name',
           'actor',
           'releaseDate',
           'chapters',
    ];


    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }


    

}


?>