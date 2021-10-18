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

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'title'     => $this->faker->words(3, true),
            'body'      => $this->faker->sentences(5, true),
            'author_id' => 1,
            'image'     => $this->faker->imageUrl(100, 100)
        ];
    }
}
