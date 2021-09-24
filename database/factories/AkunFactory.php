<?php

namespace Database\Factories;

use App\Models\Akun;
use Illuminate\Database\Eloquent\Factories\Factory;

class AkunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Akun::class;

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
            'jenis' => 'tabungan',
            'created at' => new \DateTime(),
            'updated at' => null,
        ];
    }
}