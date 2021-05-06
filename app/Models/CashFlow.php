<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashFlow extends Model
{
    use HasFactory;

    protected $table = 'cash_flows';

    protected $primaryKey = 'cash_id';

    protected $fillable = [
        'cash_description',
        'cash_income',
        'cash_expense',
        'cash_running_total',
        'created_at',
    ];
}
