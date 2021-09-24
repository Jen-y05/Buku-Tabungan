<?php
namespace Database\Seeders;

use App\Models\kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategoris = [
            'nama' => 'tabungan',
            'created_at' => new \DateTime(),
            'updated_at' => null,
        ];
        DB::table('kategori')->insert($kategoris);
    }
}
