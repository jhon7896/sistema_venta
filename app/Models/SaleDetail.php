<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;

    protected $table = 'sales_details';

    protected $primaryKey = 'prod_id ';

    protected $fillable = [
        'sdet_unitprice',
        'sdet_quantity',
        'sdet_totalprice ',
        'sdet_paystate ',
    ];
}
