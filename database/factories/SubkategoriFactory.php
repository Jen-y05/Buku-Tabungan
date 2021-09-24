<?php

namespace Database\Factories;

use App\Models\kategori;
use App\Models\Subkategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubkategoriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subkategori::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $Kategori = kategori::factory()->create();
        $id = $this->faker->NIK();
        $nama = $this->faker->sentence(2);
        return [
            'id' => $id,
            'subkategori_id' => $Kategori->id,
            'nama' => $nama,
            'created at' => new \DateTime(),
            'updated at' => null,
        ];
    }
}
