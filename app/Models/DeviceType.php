<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceType extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceTypeFactory> */
    use HasFactory;

    public function device()
    {
        return $this->hasMany(Device::class);
    }

    public function accessory()
    {
        return $this->hasMany(Accessory::class);
    }
}
