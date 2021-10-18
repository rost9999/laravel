<?php

namespace Database\Factories;

use App\Models\Book;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Book::class;
//    protected $author = Author::all();

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, 1),
            'body' => $this->faker->sentences(5, 1),
            'author_id' => random_int(1, 10),
            'image' => $this->faker->imageUrl(100, 100)
        ];
    }
}
