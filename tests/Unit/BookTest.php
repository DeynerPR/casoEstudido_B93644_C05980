<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;


//Ruta agregada para poder instanciar...
use App\Models\E1\Book;


class BookTest extends TestCase
{

    /** @test */
    public function a_book_has_a_name()
    {
        //otra forma... $team = new Team(['name' => 'Equipo 1']);
        $book = new Book();

        $book->name = "El señor de los anillos";
        $book->save();

        $this->assertEquals('El señor de los anillos', $book->name);
    }
    


}
