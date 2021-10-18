<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory = Book::factory();

        foreach (Author::all() as $author) {
            $factory->count(15)->create([
                'author_id' => $author->id
            ]);
        }
    }
}
