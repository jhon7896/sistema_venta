<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $primaryKey = 'empl_id';

    protected $fillable = [
        'empl_dni',
        'empl_ruc',
        'empl_last_name',
        'empl_first_name',
        'empl_other_name',
        'empl_title',
        'empl_birthday',
        'empl_hireday',
        'empl_address',
        'empl_city',
        'empl_region',
        'empl_country',
        'empl_homephone',
        'empl_cellphone',
        'empl_state',
    ];
}
