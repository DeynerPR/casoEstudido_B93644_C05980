<?php

namespace App\Models\E3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
           'name',
    ];

    public function Aircrafts(){
        return $this->hasMany(Aircraft::class);
    }


}
