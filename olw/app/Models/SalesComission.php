<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesComission extends Model
{
    protected $table = "sales_comission_view";
    public $incrementing= false;
    public $timestamps = false;

    public function scopeGetColumns()
    {
        return [
            'company',
            'seller',
            'client',
            'city',
            'state',
            'sold_at',
            'status',
            'total_amount',
            'comission'

        ];

        
    }
}
