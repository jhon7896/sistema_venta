<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;

    protected $primaryKey = 'ship_id';

    protected $fillable = [
        'ship_companyname',
        'ship_phone',
    ];
}
