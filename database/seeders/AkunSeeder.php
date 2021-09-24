<?php
namespace Database\Seeders;

use App\Models\akun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $akuns = [
            'nama' => "jeny",
            'jenis' => 'tabungan',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
        DB::table('akun')->insert($akuns);
    }
}