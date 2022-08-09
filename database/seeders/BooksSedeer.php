<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\book;

class BooksSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = Author::create(['name' => 'Aam Amirudin']);
        $author2 = Author::create(['name' => 'Sali A Fillah']);
        $author3 = Author::create(['name' => 'M Fauzil Adhim']);

        $book1 = book::create(['title' => 'Kupinang kau dengan Hamdalah',
            'amount' => 3, 'author_id' => $author1->id]);
        $book2 = book::create(['title' => 'Jalan Para Pejuang',
            'amount' => 2, 'author_id' => $author2->id]);
        $book3 = book::create(['title' => 'Seminggu Belajar Laravel',
            'amount' => 3, 'author_id' => $author3->id]);
        $book4 = book::create(['title' => 'Menyelami Buku Laravel',
            'amount' => 4, 'author_id' => $author3->id]);
    }
}
