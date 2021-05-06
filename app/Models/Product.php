<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'prod_id';

    protected $fillable = [
        'prod_name',
        'prod_description',
        'prod_image',
        'prod_purchase_price',
        'prod_sale_price',
        'prod_stock',
        'prod_state',
        'cate_id',
        'supp_id',
    ];

    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'supp_id', 'supp_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'cate_id', 'cate_id');
    }

    
}
