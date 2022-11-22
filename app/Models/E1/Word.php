<?php

namespace App\Models\E1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Factory
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
           'id_sentence',
           'content',
    ];

}


?>