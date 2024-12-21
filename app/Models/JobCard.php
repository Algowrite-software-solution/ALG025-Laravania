<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCard extends Model
{
    /** @use HasFactory<\Database\Factories\JobCardFactory> */
    use HasFactory;

    public  function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobStatus()
    {
        return $this->belongsTo(JobCardStatus::class);
    }
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
    public function cusProblem()
    {
        return $this->belongsTo(CusProblem::class);
    }
   


}
