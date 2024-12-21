<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockStatus extends Model
{
    /** @use HasFactory<\Database\Factories\StockStatusFactory> */
    use HasFactory;
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
}
