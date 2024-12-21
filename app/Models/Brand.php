<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    public function accessoryModel()
    {
        return $this->hasMany(AccessoryModel::class);
    }

    //deviceModel
    public function deviceModel()
    {
        return $this->hasMany(DeviceModel::class);
    }


}
