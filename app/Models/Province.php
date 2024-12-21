<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    /** @use HasFactory<\Database\Factories\ProvinceFactory> */
    use HasFactory;

    public function address()
    {
        return $this->hasMany(Address::class);
    }
    public function supplier()
    {
        return $this->hasMany(Supplier::class);
    }

    //employee
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
