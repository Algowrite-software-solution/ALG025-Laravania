<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    public function jobCards()
    {
        return $this->hasMany(JobCard::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
