<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


//Ruta agregada para poder instanciar...
use App\Models\E3\Flight;


class FlightTest extends TestCase
{
   
    /** @test */
   public function a_flight_has_a_id_aircraft()
   {
       $flight = new Flight();

       $flight->id_aircraft = 1;
       $flight->save();

       
       $this->assertEquals(1, $flight->id_aircraft);
   }

}
