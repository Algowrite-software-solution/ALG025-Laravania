<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /** @use HasFactory<\Database\Factories\CityFactory> */
    ///fillable
    protected $fillable = [
        'city_name'
    ];
    
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
