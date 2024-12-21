<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    /** @use HasFactory<\Database\Factories\WarrantyFactory> */
    use HasFactory;

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
