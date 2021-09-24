<?php
namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'nama' => "jeny",
            'email' => 'phoenixhohoho@gmail.com',
            'password' => '6969',
            'created_at' => new \DateTime,
            'updated_at' => null,
        ];
        DB::table('user')->insert($user);

    }
}
