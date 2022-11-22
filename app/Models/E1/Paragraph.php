<?php

namespace App\Models\E1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Factory
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $fillable = [
           'id_Chapter',
    ];


    public function chapter(){
        return $this->belongsTo(Chapter::class, 'id_Chapter');
    }

    public function sentences(){
        return $this->hasMany(Sentence::class);
    }


}


?>