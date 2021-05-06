<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizes extends Model
{
    use HasFactory;

    protected $table = 'product_sizes';

    protected $primaryKey = 'size_id';

    protected $fillable = [
        'prod_id',
        'psiz_name',
        'psiz_stock',
    ];

}
