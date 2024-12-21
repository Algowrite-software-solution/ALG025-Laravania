<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    /** @use HasFactory<\Database\Factories\DeviceFactory> */
    use HasFactory;

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function deviceModel()
    {
        return $this->belongsTo(DeviceModel::class);
    }

    public function jobCard()
    {
        return $this->hasMany(JobCard::class);
    }

    public function deviceType()
    {
        return $this->belongsTo(DeviceType::class);
    }
}
