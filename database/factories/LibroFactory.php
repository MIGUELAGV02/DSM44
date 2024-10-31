<?php

namespace Database\Factories;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Libro>
 */
class LibroFactory extends Factory
{
    protected $model = Libro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' =>$this->faker->sentence(),
            'autor' =>$this->faker->sentence(),
            'editorial' =>$this->faker->sentence(),
            'categoria' =>$this->faker->sentence(),
        	'estatus' =>$this->faker->sentence()
        ];
    }
}
