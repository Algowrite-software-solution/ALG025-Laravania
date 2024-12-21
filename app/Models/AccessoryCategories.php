<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessoryCategories extends Model
{
    /** @use HasFactory<\Database\Factories\AccessoryCategoriesFactory> */
    use HasFactory;

    public function accessories()
    {
        return $this->hasMany(Accessory::class);
    }
}
