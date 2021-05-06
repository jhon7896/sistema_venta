<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $primaryKey = 'supp_id';

    protected $fillable = [
        'supp_companyname',
        'supp_contact_name',
        'supp_contact_title',
        'supp_address',
        'supp_city',
        'supp_region',
        'supp_country',
        'supp_phone',
        'supp_homepage',
    ];
}
