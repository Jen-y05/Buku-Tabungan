<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = $this->faker->NIK();
        $nama = $this->faker->sentence(2);
        return [
            'id' => $id,
            'nama' => $nama,
            'created at' => new \DateTime(),
            'updated at' => null,
        ];
    }
}