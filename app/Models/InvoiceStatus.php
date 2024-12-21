<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceStatus extends Model
{
    /** @use HasFactory<\Database\Factories\InvoiceStatusFactory> */
    use HasFactory;

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }


}
