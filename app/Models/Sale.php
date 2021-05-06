<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $primaryKey = 'sale_id';

    protected $fillable = [
        'sale_payment_method',
        'sale_payment_date',
        'sale_total_payment',
        'sale_state',
        'cust_id ',
        'empl_id ',
        'curr_id ',
    ];

}
