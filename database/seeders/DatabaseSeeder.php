<?php
namespace Database\Seeders;

use App\Models\Akun;
use App\Models\User;
use Database\Factories\KategoriFactory;
use Database\Factories\SubkategoriFactory;
use Database\Factories\TagFactory;
use Database\Factories\TransaksiFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AkunSeeder::class,
            KategoriSeeder::class,
            SubkategoriSeeder::class,
            TagSeeder::class,
            TransaksiSeeder::class,

        // Userr::factory(10)->create();
        // Akun::factory(10)->create();
        // KategoriFactory::factory(10)->create();
        // SubkategoriFactory::factory(10)->create();
        // TagFactory::factory(10)->create();
        // TransaksiFactory::factory(10)->create();
        ]);
    }
}