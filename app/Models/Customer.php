<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'cust_id';

    protected $fillable = [
        'cust_companyname',
        'cust_dni',
        'cust_ruc',
        'cust_last_name',
        'cust_maiden_name',
        'cust_first_name',
        'cust_other_name',
        'cust_sexo',
        'cust_company_name',
        'cust_contact_title',
        'cust_contact_name',
        'cust_address',
        'cust_city',
        'cust_region',
        'cust_country',
        'cust_phone',
        'cust_state',
    ];
}
