<?php

namespace Database\Factories;

use App\Models\Userr;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Userr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = $this->faker->NIK();
        $nama = $this->faker->sentence(2);
        $email = $this->faker->unique()->safeEmail();
        $password = $this->faker->password();
        return [
            'id' => $id,
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'created_at' => new \DateTime,
            'updated_at' => null
        ];
    }
}
