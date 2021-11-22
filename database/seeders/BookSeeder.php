<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title'     => 'Breakthrough Anxiety',
            'author'    => 'Shaneika Lewis',
            'isbn'      => '12345678',
            'publisher' => 'Carlong Publishers',
            'pubDate'   => '2021-07-07',
            'condition' => 'New',
            'quantity'  => 10
        ]);
    }
}
