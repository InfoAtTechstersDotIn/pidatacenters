<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractPeriod extends Model
{
    use HasFactory;

    protected $table = 'contract_periods';

    protected $fillable = [
        'display_value',
        'display_name',
    ];
}
