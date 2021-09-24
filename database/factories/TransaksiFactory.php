<?php

namespace Database\Factories;

use App\Models\kategori;
use App\Models\subkategori;
use App\Models\Transaksi;
use App\Models\userr;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = userr::factory()->create();
        $akun = AkunFactory::factory()->create();
        $kategori = Kategori::factory()->create();
        $subkategori = subKategori::factory()->create();
        $tag = TagFactory::factory()->create();

        $id = $this->faker->NIK();
        $nominal = $this->faker->randomNumber();
        $tanggal = $this->faker->date();
        $keterangan = $this->faker->paragraph();
        return [
            'id' => $id,
            'user_id' => $user->id,
            'akun_id' => $akun->id,
            'kategori_id' => $kategori->id,
            'subkategori_id' => $subkategori->id,
            'tag_id' => $tag->id,
            'nominal' => $nominal,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
    }
}
