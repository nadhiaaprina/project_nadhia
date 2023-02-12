<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    public function pelanggans()
    {
        return $this->hasOne(Pelanggan::class,"id","id_pelanggan");
    }
}