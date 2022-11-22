<?php

namespace App\Models\E3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
           'id_airline',
    ];

    public function Airline(){
        return $this->belongsTo(Airline::class, 'id_airline');
    }

    public function Flights(){
        return $this->hasMany(Flight::class);
    }
}
