<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceModel extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceModelFactory> */
    use HasFactory;

    public function device()
    {
        return $this->hasMany(Device::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
