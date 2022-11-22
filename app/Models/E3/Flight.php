<?php

namespace App\Models\E3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;



    protected $primaryKey = 'flight_number';
    
    protected $fillable = [
           'id_origin_airport',
           'id_final_airport',
           'id_aircraft',
    ];




}
