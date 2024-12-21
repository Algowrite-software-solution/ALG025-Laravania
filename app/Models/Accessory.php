<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    /** @use HasFactory<\Database\Factories\AccessoryFactory> */
    use HasFactory;

    public function accessoryCategories()
    {
        return $this->belongsTo(AccessoryCategories::class);
    }

    public function deviceType(){
        return $this->belongsTo(DeviceType::class);
    }

    public function accessoryModel(){
        //has many
        return $this->hasMany(AccessoryModel::class);
    }
}
