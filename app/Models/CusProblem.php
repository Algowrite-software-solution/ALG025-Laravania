<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CusProblem extends Model
{
    /** @use HasFactory<\Database\Factories\CusProblemFactory> */
    use HasFactory;

    public function jobCard()
    {
        return $this->hasMany(JobCard::class);
    }
}
