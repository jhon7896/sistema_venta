<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColors extends Model
{
    use HasFactory;

    protected $table = 'product_colors';

    protected $primaryKey = 'color_id';

    protected $fillable = [
        'prod_id',
        'pcol_name',
        'pcol_rgb',
        'pcol_stock',
    ];
}
