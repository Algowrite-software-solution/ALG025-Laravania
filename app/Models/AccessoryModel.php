<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessoryModel extends Model
{
    /** @use HasFactory<\Database\Factories\AccessoryModelFactory> */
    use HasFactory;

    public function accessory()
    {
        return $this->belongsTo(Accessory::class);
    }
    //brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
