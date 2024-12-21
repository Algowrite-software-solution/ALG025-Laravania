<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardStatus extends Model
{
    /** @use HasFactory<\Database\Factories\JobCardStatusFactory> */
    use HasFactory;

    public function jobCard()
    {
        return $this->hasMany(JobCard::class);
    }
}
