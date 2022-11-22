<?php

namespace App\Models\E1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentence extends Factory
{ 
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = [
           'id_Paragraph',
    ];



    public function paragraph(){
        return $this->belongsTo(Paragraph::class, 'id_Paragraph');
    }

    

    public function words(){
        return $this->hasMany(Word::class);
    }


}


?>