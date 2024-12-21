<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    /** @use HasFactory<\Database\Factories\StockFactory> */
    use HasFactory;

    public function stockStatus()
    {
        return $this->belongsTo(StockStatus::class);
    }
    public function capacity()
    {
        return $this->belongsTo(Capacity::class);
    }
    public function warranty()
    {
        return $this->belongsTo(Warranty::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }

}
