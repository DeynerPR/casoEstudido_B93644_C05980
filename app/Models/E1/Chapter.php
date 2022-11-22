<?php

namespace App\Models\E1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Factory
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
           'name',
           'id_book',
    ];
    

    public function paragraphs(){
        return $this->hasMany(Paragraph::class);
    }




}


?>