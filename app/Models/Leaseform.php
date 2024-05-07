<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaseform extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'DateForApply',
        'ProjectName',
        'ProjectCategory',
        'CapitalProject',
        'NoOfEmployee',
        'AreaRequired',
        'ShopNo',
        'RentType',
        'MultisideShop',
        'RentPeriod',
        'ServiceRequiredByRahinaPark',
        'InTheProject',
        'Description',
    ];
}
