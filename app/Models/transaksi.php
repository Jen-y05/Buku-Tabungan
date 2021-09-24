<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(user::class);
    }

    public function akun(){
        return $this->hasMany(akun::class);
    }

    public function tag(){
        return $this->belongsTo(tag::class);
    }

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
}
