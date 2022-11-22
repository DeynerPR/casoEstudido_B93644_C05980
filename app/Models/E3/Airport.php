<?php

namespace App\Models\E3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
           'name',
    ];

    public function Flights(){
        return $this->hasMany(Flight::class);
    }



}
