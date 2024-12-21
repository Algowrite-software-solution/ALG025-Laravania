<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacity extends Model
{
    /** @use HasFactory<\Database\Factories\CapacityFactory> */
    use HasFactory;

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
