<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class);
    }
}